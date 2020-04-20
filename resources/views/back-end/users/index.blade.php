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
    	<button class='btn btn-primary'>Create New User</button>
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
                    			<button class='btn btn-warning'>Edit</button>
                    			<button class='btn btn-danger'>Delete</button>
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