<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('dashboard.index')}}">Dashboard</a>
    </li>
    @if(isset($models))
        <li class="breadcrumb-item">
            <a href="{{route('dashboard.'.$models.'.index')}}">{{ucfirst($models)}}</a>
        </li>
    @endif
    @if(isset($function))
    <li class="breadcrumb-item active">{{ucfirst($function)}}</li>
    @endif
</ol>
