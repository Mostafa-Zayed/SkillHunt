@extends('back-end.layout.app')
@php
    $fields  = array('id','photo','name','email','type','control');
@endphp
@section('title','Dashboard | '.$models)
@section('content')
    <div class="row">
        <div class="col-md-12 offset-md-10">
            <a class="btn btn-primary" href="{{route('dashboard.users.create')}}">Create New User</a>
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
                <tbody>
                    @foreach($rows as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                        <td>{{$row->photo}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->type}}</td>
                        <td>control</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection
