<header>
    <nav>
        <div class="shop-header">
            <ul class="Always-on">
                <li><a href="/">Login</a></li>
{{--                <li><a href="{{route('cart.index')}}">Cart</a></li>--}}
{{--                <li><a href="{{route('contacts')}}">Contact(comming soon)</a></li>--}}

                @if(app()->getLocale() == 'en')
                    <a href="{{url()->current()}}?lang=lt">LT</a>
                @else
                    <a href="{{url()->current()}}?lang=en">EN</a>
                @endif
            </ul>
        </div>
{{--        <div class="logout">--}}
{{--            <a href="{{route('profile.edit')}}">{{ __('Profile') }}</a>--}}
{{--            <form method="POST" action="{{ route('logout') }}">    --}}
{{--                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();--}}
{{--                this.closest('form').submit();">{{ __('Log Out') }}</x-responsive-nav-link> </form>--}}

{{--        </div>--}}
    </nav>
</header>
