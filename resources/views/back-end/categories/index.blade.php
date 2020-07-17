@extends('back-end.layout.app')
@php
    $fields  = array('id','name','control');

@endphp
@section('title','Dashboard | '.ucfirst($models).'| '.$function)
@section('content')
    <div class="row">
        <div class="col-md-12 offset-md-9">
            <a class="btn btn-primary" href="{{route('dashboard.'.$models.'.create')}}">Create New Category</a>
        </div>
    </div>
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
<div class="card mb-3">
    @include('back-end.includes.thead')
    <tbody></tbody>
    </table>
</div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>@endsection
