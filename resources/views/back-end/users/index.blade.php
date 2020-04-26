@extends('back-end.layout.app')
@php  
    $fields  = array('id','email','control');
    $center = "style=text-align:center;";
    $increment = 0;
@endphp
@section('title',$pageTitle)
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
    	<a href="{{route('users.create')}}" class='btn btn-primary'>Create {{$model}}</a>
    </div>
</div>
<br>
<div class='row'>
    <div class='col-md-12'>
        <div class="card">
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    @component('back-end.shared.table.table-head',['fields'=>$fields,'center'=>$center])
                    @endcomponent
                    @include('back-end.'.$models.'.table-body')
                </table>
            </div>
        </div>
        {{$rows->links()}}
    </div>
</div>
@endsection