@foreach ($meals as $meal)
    <div class="col-md-4 col-sm-6">
        <div class="wrapper">
            <div class="tab-content">
                <figure>
                    <a href="/meal/{{ $meal->id }}">
                        <img src="{{ asset('css/assets/images/menu/1.jpg') }}" />
                    </a>
                </figure>
                <div class="sentence">
                    <h3>
                        {{ $meal->name }}<span>${{ $meal->price }}</span>
                    </h3>
                    <h3>
                        <a href="chef/{{ $meal->chef->id }}"> {{ $meal->chef->name }}</a>
                    </h3>
                    <h6>{{ $meal->category->name }}</h6>
                    <p>
                        {{ $meal->description }}
                    </p>
                </div>
                <div class="rate-box">
                    <div class="plus">
                        <a href="{{ route('add.to.cart', $meal->id) }}" class="btn btn-warning btn-block text-center"
                            role="button">
                            <span class="flaticon-plus"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach