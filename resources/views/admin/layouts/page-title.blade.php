<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="../uploads/user-1.jpg" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Logged in as: Mr. Brent <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(85px, 45px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="profile-edit.php">Edit Profile</a>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>