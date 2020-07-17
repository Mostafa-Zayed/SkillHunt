
        @foreach($rows as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{'control'}}</td>
        </tr>
        @endforeach

