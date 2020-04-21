<div class='col-md-4'>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{url('dashboard/'.$models)}}">{{ucfirst($models)}}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{$method}}
            </li>
        </ol>
    </nav>
</div>
<div class='col-md-8'>
    <form method="GET" action="{{url('dashboard/'.$model)}}">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Search</button>
            </span>
        </div>
    </form>
</div>