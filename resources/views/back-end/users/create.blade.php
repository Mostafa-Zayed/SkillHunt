@extends('back-end.layout.app')

@section('title','Dashboard | '.ucfirst($models).'| '.$function)
@section('content')
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Create User</div>
        <div class="card-body">
            <form action="{{route('dashboard.'.$models.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="exampleInputName">Name</label>
                            <input class="form-control" name='name' id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Your Name" value="{{old('name')}}">

                            @error('name')
                            <br>
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
                    @error('email')
                    <br>
                    <span class="alert-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password">
                            @error('password')
                            <br>
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleConfirmPassword">Confirm password</label>
                            <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password" name="password_confirmation">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="exampleInputPassword1">Type</label>
                            <select name="type" class="form-control">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-primary btn-block" value="Create">
            </form>
        </div>
    </div>
@endsection
