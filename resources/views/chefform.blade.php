@extends('layouts.app')

@section('content')
    <div class="container sergiFix">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>Chef Form</h1>


                    <div class="card-body">
                        {{ $user->name }}
                    </div>

                    <form action="/chefform" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="block">
                            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                                name="license" placeholder="License...">
                        </div> --}}
                        <div class="custom-file">
                            <input type="file" name="license" class="custom-file-input">
                            <label class="custom-file-label" for="chooseFile">Choose file</label>
                        </div>

                        <div class="block">
                            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                                name="years_of_xp" placeholder="years of xp...">
                        </div>

                        <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
