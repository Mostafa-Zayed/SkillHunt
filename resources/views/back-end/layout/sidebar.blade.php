<div class="sidebar" data-color="purple" data-image="{{asset('img/sidebar-5.jpg')}}">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    SkillHunt
                </a>
            </div>

            <ul class="nav">
                <li class="{{is_active('dashboard')}}">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{is_active('users')}}">
                    <a href="{{url('dashboard/users')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="{{is_active('categories')}}">
                    <a href="{{url('dashboard/categories')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="{{is_active('sliders')}}">
                    <a href="{{url('dashboard/sliders')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Sliders</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>