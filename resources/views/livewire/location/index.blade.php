<div>
    <table>
        <tr>
            <th>{{ __('ID') }}</th>
            <th>{{ __('Street') }}</th>
            <th>{{ __('Zip') }}</th>
            <th>{{ __('City') }}</th>
            <th>{{ __('Actions') }}</th>
        </tr>
        @foreach ($locations as $location)
        <tr>
            <td>{{$location->id}}</td>
            <td>{{ $location->street }}</td>
            <td>{{ $location->zip  }}</td>
            <td>{{ $location->city }}</td>
            <td>meters</td>
        </tr>
        @endforeach
    </ul>
</div>
