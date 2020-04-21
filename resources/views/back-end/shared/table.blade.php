<table class="table table-hover table-striped">
    <thead>
        <tr>
            @foreach($fields as $field)
            <td {{$center}}>{{strtoupper($field)}}</td>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($rows as $row)
        <tr>
            <td {{$center}}>{{$row->id}}</td>
            <td {{$center}}>{{$row->email}}</td>
            <td {{$center}}>
                @include('back-end.shared.buttons.edit',['models'=>$models,'method'=>'edit'])
                @include('back-end.shared.buttons.delete',['models'=>$models,'method'=>'destroy'])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
