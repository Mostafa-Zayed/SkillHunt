@extends('back-end.layout.app')
@php
	$pageName = 'Update';
	$model = 'User';
	$pageTitle = $pageName.' '.$model;
@endphp
@section('title',$pageTitle)
@section('content')
<div class="col-md-8 col-md-offset-2">
	<div class="card">
		<div class="header">
			<h4 class="title"></h4>
        </div>
		<div class="content">
			<form action="{{route('users.update',['id' => $row->id])}}" method="POST">
				{{csrf_field()}}
				{{method_field('put')}}
				@include('back-end.users.form',['id'=>$row->id])  
				<input type="submit" class="btn btn-info btn-fill pull-right" value="{{$pageTitle}}">
				<div class="clearfix"></div>
            </form>
		</div>
    </div>
</div>
@endsection