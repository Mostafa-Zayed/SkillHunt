<form action="{{route($models.'.'.$method,['id'=>$row->id])}}" method="POST" style="display:inline;">
    {{method_field('delete')}}
    @csrf
    <input type="submit"  class='btn btn-danger' value='Delete' >
</form>