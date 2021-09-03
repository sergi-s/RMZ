@forelse ($chefs as $chef)
    <div class="team-setup">
        <div class="team-items">
            <div class="team-user">

                <a href="chef/{{ $chef->id }}"><img src="{{ asset('/uploads/avatars/' . $chef->avatar) }}" /></a>
            </div>
            <div class="team-name">
                <h2><a href="chef/{{ $chef->id }}">{{ $chef->name }}</a></h2>
                @if ($chef->chef->isVIP)
                    <h2>VIP</h2>
                @endif<br>
                <b>{{ $chef->chef->years_of_xp }} yeas of experience</b>
            </div>
        </div>
    </div>
@empty
    <h1>No Chefs Available</h1>
@endforelse
