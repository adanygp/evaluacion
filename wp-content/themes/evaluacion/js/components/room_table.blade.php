<thead>
    <tr>
        <th scope="col">Season</th>
        @for ($i=1; $i <= $property->price; $i++)
            <th scope="col">
                <input class="room-check" type="checkbox" name="room[]" value="{{ $i }}" {{ getRoom($roomrate->groupBy('room'), $i) }}>
                <label>Room ({{ $i }})</label>
            </th>
        @endfor
    </tr>
</thead>
<tbody>
    @foreach ($seasons as $key => $season)
        <tr>

            <td scope="row">
              <input type="checkbox" name="visible_season[{{ $season->id }}]" value="1" {{getPropSeasons($propertyseasons,$season->id)}}>
              {{ $season->name }}
              </td>
            @for ($i=1; $i <= $property->price; $i++)
                <td>
                    <input class="season-{{$i}}-check" type="number" name="season[{{ $season->id }}][{{ $i }}]" value="{{ getRoomRateV3($roomrate, $season->id, $i) }}" placeholder="$">
                </td>
            @endfor
        </tr>
    @endforeach
</tbody>
