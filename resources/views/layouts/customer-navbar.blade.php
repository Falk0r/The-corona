<div class="user-sidebar">
    <ul>
        <li><a href="{{ route('Dashboard') }}" class="btn btn-md btn-block btn-dark">{{ __('Dashboard') }}</a></li>
        <li><a href="{{ route('Orders') }}" class="btn btn-md btn-block btn-dark">{{ __('Orders') }}</a></li>
        <li><a href="{{ route('Delivery Track') }}" class="btn btn-md btn-block btn-dark">{{ __('Delivery Track') }}</a></li>
        <li><a href="{{ route('Edit Profile') }}" class="btn btn-md btn-block btn-dark">{{ __('Edit Profile') }}</a></li>
        <li><a href="{{ route('Edit Password') }}" class="btn btn-md btn-block btn-dark">{{ __('Edit Password') }}</a></li>
        <li><a href="{{ route('logout') }}" class="btn btn-md btn-block btn-dark" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}</a>
        </li>
    </ul>				
</div>