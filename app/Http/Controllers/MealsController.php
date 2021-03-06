<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Meal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MealsController extends Controller
{
    public function index(Request $request) //getAllmeals
    {
        $retarr = [];
        $temp = $temp = Meal::paginate(10);
        if (request('cat')) {
            $temp = Meal::where('category_id', '=', request('cat'))->orderBy('id', 'DESC')->paginate(10);
        }
        if (request('term')) {
            $temp = Meal::where('name', 'Like', '%' . request('term') . '%')->orderBy('id', 'DESC')->paginate(10);
        }

        foreach ($temp as $value) {
            if ($value->chef->isChef) {
                array_push($retarr, $value);
            }
        }
        $cats = Category::all();

        return view("AllMeals", ['meals' => $temp, "cats" => $cats]);
    }
    public function show($id) //getmeal($id)
    {
        return view("Meal", ['meal' => Meal::find($id)]);
    }

    /**
     * Chef Dashboard, get number of orders, see/delete his meals,
     *
     * @return View
     */
    public function chefDashboard()
    {
        $total = 0;
        foreach (Auth::user()->getMeals as $key => $value) {
            if (count($value->ordered_by) > 0) {
                $total += count($value->ordered_by);
            }
        }

        $cats = Category::all();
        return view('chefDashboard', ["cats" => $cats, 'meals' => auth::user()->getMeals, "nOrders" => $total]);
    }

    /**
     * Chef Removes a Meal
     *
     * @return response()
     */
    public function delete($id)
    {
        Meal::where('id', $id)->firstorfail()->delete();
        return redirect()->route("chefDashboard")->with('info', 'Product Deleted successfully!');
    }

    /**
     * Admin Removes a category
     *
     * @return response()
     */
    public function delete2($id)
    {
        Category::where('id', $id)->firstorfail()->delete();
        return redirect(route("admin"));
    }

    /**
     * Chef adds a new Meal
     *
     * @return response()
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'image' => 'required|mimes:png,jpg,jpeg',
            'video' => 'mimes:mov,mp3,mp4,wmv,mpg,avi,webm,ogg',
        ]);

        if ($validator->fails()) {

            return redirect('/meals')
                ->withErrors($validator)
                ->withInput();
        }
        $fileName = "";
        if ($request->file()) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/meals'), $fileName);
        }
        $vidName = "";
        if ($request->hasFile('vid')) {

            $file = $request->file('vid');
            $vidName = $file->getClientOriginalName();
            $path = public_path() . '/uploads/vids/';
            $file->move($path, $vidName);
        }

        Meal::create([
            'chef_id' => Auth::user()->id,
            'name' => $request->name,
            'price' => $request->price,
            'image' => $fileName,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'video' => $vidName
        ]);


        return redirect()->back();
    }

    /**
     * Admin adds new Category
     *
     * @return response()
     */
    public function store2(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect(route('admin'))
                ->withErrors($validator)
                ->withInput();
        }

        Category::create([
            'name' => $request->name,
        ]);


        return redirect()->back();
    }
    /**
     * the cart page 
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }

    /**
     * Add elements to Shopping cart
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Meal::findOrFail($id);
        // dd($product->chef->chef->isVIP, auth::user()->isVIP, $product->chef->chef->isVIP == auth::user()->isVIP);

        if ($product->chef->chef->isVIP != auth::user()->isVIP) {
            return redirect()->route('vipform')->with('warning', 'you are not a VIP user, Plz register');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "chef_name" => $product->chef->name,
                "meal_id" => $product->id
                // "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Update quantity of elements (Not used)
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Remove element for shopping Cart
     *
     * @return response()
     */
    public function remove($id)
    {
        if ($id) {
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return back();
        }
    }

    /**
     * By Order, dummy payment
     *
     * @return response()
     */
    public function checkout()
    {
        $cart = session()->get('cart');
        foreach ($cart as $id => $value) {
            //if needed
            // echo ($value['quantity'] * $value['price']);
            Auth::user()->ordered_items()->attach($value['meal_id'], ["quantity" => $value['quantity']]);
        }
        session()->forget('cart');
        return redirect(route("home"));
    }
    /**
     * Display count of users that oredered all meals for this chef
     * 
     * @return 
     */
    public function myorders()
    {
        $work = [];
        foreach (Auth::user()->getMeals as $key => $value) {
            if (count($value->ordered_by) > 0) {
                $value->quantity = count($value->ordered_by);
                array_push($work, $value);
            }
        }
        return view("chefOrders", ["orders" => $work]);
    }
}
