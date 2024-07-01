<div>
    Locations
    <ul>
        
    @foreach ($locations as $location)

        <li>{{ $location->street }}, {{ $location->zip  }}, {{ $location->city }}</li>
    @endforeach
    </ul>
</div>
