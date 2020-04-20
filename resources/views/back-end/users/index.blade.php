@extends('back-end.layout.app')
@php 
	$pageTitle = 'Control';
	$model     = 'Users';

@endphp
@section('title',$model.' '.$pageTitle)
@section('content')
<br>

<div class='row'>
@if(\Session::has('success'))
    <div class='col-md-10'>
        <div class='card'>
            <p class='alert alert-success'>{{\Session::get('success')}}</p>
        </div>
    </div>
@endif
</div>
<div class='row'>
    <div class='col-md-12 text-right'>
    	<a href="{{route('users.create')}}" class='btn btn-primary'>Create New User</a>
    </div>
</div>
<br>
<div class='row'>
    <div class='col-md-12'>
        <div class="card">
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                    	<tr>
                    		<td>ID</td>
                    		<td>Email</td>
                    		<td>Control</td>
                    	</tr>
                    </thead>
                    <tbody>
                    	@foreach($rows as $row)
                    	<tr>
                    		<td>{{$row->id}}</td>
                    		<td>{{$row->email}}</td>
                    		<td>
                    			<a href="{{route('users.edit',['id'=>$row->id])}}" class='btn btn-warning'>Edit</a>
                                <form action="{{route('users.destroy',['id'=>$row->id])}}" method="POST" style="display:inline;">
                                    {{method_field('delete')}}
                                    @csrf
                    			     <input type="submit"  class='btn btn-danger' value='Delete' >
                                    
                                </form>
                    		</td>
                    	</tr>
                    	@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection