<tbody>
        @foreach($rows as $row)
        <tr>
            <td {{$center}}>{{++$increment}}</td>
            <td {{$center}}>{{$row->name}}</td>
            <td {{$center}}>
                @include('back-end.shared.buttons.edit',['models'=>$models,'method'=>'edit'])
                @include('back-end.shared.buttons.delete',['models'=>$models,'method'=>'destroy'])
            </td>
        </tr>
        @endforeach
</tbody>