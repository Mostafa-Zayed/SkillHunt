@extends('back-end.layout.app')
@php
	$model = 'User';
	$pageTitle = 'Create '.$model;
@endphp
@section('title',$pageTitle)
@section('content')
<div class="col-md-8">
	<div class="card">
		<div class="header">
			<h4 class="title"></h4>
        </div>
		<div class="content">
			<form action="{{url('admin/users')}}" method="POST">
				{{csrf_field()}}
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
                                                    <label for="exampleInputEmail1">Email address :</label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="user_password">Password :</label>
                                                    <input type="password" id="user_password" class="form-control" placeholder="password" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="re_password">Re-Password :</label>
                                                    <input type="password" class="form-control" id="re_password" placeholder="re_password" name="confirm_password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">User Type :</label>
                                                    <select  class="form-control" name='type'>
                                                        <option value="normal" selected>Normal</option>
                                                        <option value="employeer">Employeer</option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-9'>
                                            @if(count($errors) > 0)
                                    <div class="col-sm-10">
                                        @foreach($errors->all() as $error)
                                            
                                                <p class='alert alert-danger'>{{ucwords($error)}}</p>
                                        @endforeach
                                    </div>    
                                    @endif
                                    @if(\Session::has('success'))
                                        <div class=' col-sm-10'>
                                            <p class='alert alert-success'>{{\Session::get('success')}}</p>
                                        </div>
                                    @endif
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-info btn-fill pull-right" value="Create">
                                        <div class="clearfix"></div>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
@endsection