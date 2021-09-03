@foreach ($meals as $meal)
    <div class="col-md-4 col-sm-6">
        <div class="wrapper">
            <div class="tab-content">
                <figure>
                    <a href="/meal/{{ $meal->id }}">
                        <img src="{{ asset('/uploads/meals/' . $meal->image) }}" />
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
                        @if (strlen($meal->description) > 35)
                            {{ substr($meal->description, 0, 35) }} ...etc
                        @else
                            {{ $meal->description }}
                        @endif
                    </p>
                </div>
                <div class="rate-box">
                    <div class="plus">
                        <a href="{{ route('add.to.cart', $meal->id) }}" class="btn btn-warning btn-block text-center"
                            role="button">
                            <span class="flaticon-plus"></span></a>
                    </div>

                    @if ($delete)
                        <div class="plus">
                            <a href="{{ route('post.delete', $meal->id) }}"
                                onclick="event.preventDefault();document.getElementById('delete-form-{{ $meal->id }}').submit();"
                                class="btn btn-warning btn-block text-center" role="button">
                                <span class="flaticon-minus">-</span></a>
                            <form id="delete-form-{{ $meal->id }}" +
                                action="{{ route('post.delete', $meal->id) }}" method="post">
                                @csrf @method('DELETE')
                            </form>
                        </div>
                    @endif
                </div>


            </div>
        </div>
    </div>
@endforeach
