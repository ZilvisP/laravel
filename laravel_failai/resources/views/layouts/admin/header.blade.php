<header>
    <link rel="stylesheet" href="/css/header.css"/>
    <nav class="navbar">
        <div class="navbar-start">
            <ul>
                <li><a href="/">Start Page</a></li>
                @if (Auth::check() && Auth::user()->isPersonnel())
                    <li><a href="{{route('products.index')}}">Products</a></li>
                    <li><a href="{{route('categories.index')}}">Categories</a></li>
                    <li><a href="{{route('persons.index')}}">Persons</a></li>
                    <li><a href="{{route('addresses.index')}}">Adresses</a></li>
                    <li><a href="{{route('users.index')}}">Users</a></li>
                    <li><a href="{{route('statuses.index')}}">Statuses</a></li>
                    <li><a href="{{route('orders.index')}}">Orders</a></li>
                @endif
            </ul>
        </div>
        <div class="navbar-end">
            <ul>
                @if (Auth::check() && !Auth::user()->isPersonnel())
                    <li><a href="{{route('order.cart')}}">Cart</a></li>
                @endif
                @if (!Auth::check()){
                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    } @else {  <form method="POST" action="{{ route('logout') }}">
                        <button type="submit">{{ __('Logout') }}</button>
                        @csrf
                    </form> }
                @endif
                <li>
                    @if (app()->getLocale() == 'en')
                        <a href="{{url()->current()}}?lang=lt">LT</a>
                    @else
                        <a href="{{url()->current()}}?lang=en">EN</a>
                    @endif
                </li>
                @if (Auth::check())
                    <li class="dropdown">
                        <a class="button" href="#">{{auth()->user()->email}}</a>
                        <ul class="dropdown-menu">
                            @if (auth()->user()->isPersonnel())
                                <li><a href="{{route('dashboard')}}">{{ __('Dashboard') }}</a></li>
                            @endif
                            <li><a href="{{route('profile.edit')}}">{{ __('Edit profile') }}</a></li>
{{--                            <li>--}}
{{--                                <form method="POST" action="{{ route('logout') }}">--}}
{{--                                    @csrf--}}
{{--                                    <button type="submit">{{ __('Logout') }}</button>--}}
{{--                                </form>--}}
{{--                            </li>--}}
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>



{{--<header>--}}
{{--    <nav>--}}
{{--        <div class="main-header">--}}
{{--            <ul class="Always-on">--}}
{{--                <li><a href="/">Start Page</a></li>--}}
{{--                <li><a href="{{route('products.index')}}">Products</a></li>--}}
{{--                <li><a href="{{route('categories.index')}}">Categories</a></li>--}}
{{--                <li><a href="{{route('persons.index')}}">Persons</a></li>--}}
{{--                <li><a href="{{route('addresses.index')}}">Adresses</a></li>--}}
{{--                <li><a href="{{route('users.index')}}">Users</a></li>--}}
{{--                <li><a href="{{route('statuses.index')}}">Statuses</a></li>--}}
{{--                <li><a href="{{route('orders.index')}}">Orders</a></li>--}}
{{--                @if(app()->getLocale() == 'en')--}}
{{--                    <a href="{{url()->current()}}?lang=lt">LT</a>--}}
{{--                @else--}}
{{--                    <a href="{{url()->current()}}?lang=en">EN</a>--}}
{{--                @endif--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="h-full flex items-end">--}}
{{--            <ul class="flex flex-col space-y-8 bg-gray-50 w-full py-10 p-4 dark:bg-gray-800">--}}
{{--                <li>--}}
{{--                    <a href="{{route('order.cart')}}"--}}
{{--                       class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">--}}
{{--                        <div>--}}
{{--                            <img class="w-5 dark:hidden"--}}
{{--                                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg"--}}
{{--                                 alt="bag">--}}
{{--                            <img class="w-5 dark:block hidden"--}}
{{--                                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg"--}}
{{--                                 alt="bag">--}}
{{--                        </div>--}}
{{--                        <p class="text-base">Cart</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        @auth--}}
{{--            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">--}}
{{--                <li>--}}
{{--                    <span>{{auth()?->user()?->email}}</span>--}}
{{--                </li>--}}
{{--                @if (auth()?->user()?->isPersonnel())--}}
{{--                    <li>--}}
{{--                        <a href="{{route('dashboard')}}">--}}
{{--                            {{ __('Dashboard') }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endauth--}}
{{--                <li>--}}
{{--                    <a class="justify-between" href="{{route('profile.edit')}}">--}}
{{--                        {{ __('Edit profile') }}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <form method="POST" action="{{ route('logout') }}">--}}
{{--                        @csrf--}}
{{--                        <a href="{{route('logout')}}"--}}
{{--                           onclick="event.preventDefault(); this.closest('form').submit();">--}}
{{--                            {{ __('Log Out') }}--}}
{{--                        </a>--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        @endauth--}}
{{--    </nav>--}}
{{--</header>--}}
