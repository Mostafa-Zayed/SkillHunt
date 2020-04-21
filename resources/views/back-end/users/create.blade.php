@extends('back-end.layout.app')

@section('title',$pageTitle)
@section('content')
<div class="col-md-8 col-md-offset-2">
	<div class="card">
		<div class="header">
			<h4 class="title"></h4>
        </div>
		<div class="content">
			<form action="{{route($models.'.store')}}" method="POST">
				@include('back-end.'.$models.'.form')
				<input type="submit" class="btn btn-info btn-fill pull-right" value="{{$pageTitle}}">
				<div class="clearfix"></div> 
            </form>
		</div>
    </div>
</div>
@endsection