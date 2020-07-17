@extends('back-end.layout.app')

@section('title','Dashboard | '.ucfirst($models).'| '.$function)
@section('content')
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Create Category</div>
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
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="exampleInputPassword1">Active</label>
                            <select name="type" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="exampleInputPassword1">Show Home</label>
                            <select name="type" class="form-control">
                                <option value="1">Show</option>
                                <option value="0">Hiddden</option>
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
