<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">{{ $name }}</h4>
                @if (isset($button))
                    <a href="{{ route($link)}}" class="btn btn-primary btn-xs">{{ $button }}</a>                    
                @endif
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="{{ asset('uploads/user-1.png')}}" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Logged in as: Mr. Brent <i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile-edit.php">Edit Profile</a>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                    <form class="d-none" id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>