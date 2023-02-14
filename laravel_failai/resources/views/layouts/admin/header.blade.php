<header>
    <nav>
        <div class="main-header">
            <ul class="Always-on">
                <li><a href="/">Start Page</a></li>
                <li><a href="{{route('products.index')}}">Products</a></li>
                <li><a href="{{route('categories.index')}}">Categories</a></li>
                <li><a href="{{route('persons.index')}}">Persons</a></li>
                <li><a href="{{route('addresses.index')}}">Adresses</a></li>
                <li><a href="{{route('users.index')}}">Users</a></li>
                <li><a href="{{route('statuses.index')}}">Statuses</a></li>
                <li><a href="{{route('orders.index')}}">Orders</a></li>
                @if(app()->getLocale() == 'en')
                    <a href="{{url()->current()}}?lang=lt">LT</a>
                @else
                    <a href="{{url()->current()}}?lang=en">EN</a>
                @endif
            </ul>
        </div>
    </nav>
</header>



{{--<ul id="nav-mobile" class="right hide-on-med-and-down">--}}
{{--    <li><a href="/">{{__('general.meniu.home')}}</a></li>--}}
{{--    <li><a href="{{route('orders.index')}}">{{__('general.meniu.orders')}}</a></li>--}}

{{--    <li><a href="{{route('products.index')}}">{{__('general.meniu.products')}}</a></li>--}}
{{--    <li><a href="{{route('categories.index')}}">{{__('general.meniu.categories')}}</a></li>--}}
{{--    <li><a href="{{route('persons.index')}}">{{__('general.meniu.persons')}}</a></li>--}}
{{--    <li><a href="{{route('addresses.index')}}">{{__('general.meniu.addresses')}}</a></li>--}}
{{--    <li><a href="{{route('users.index')}}">{{__('general.meniu.users')}}</a></li>--}}


{{--    <li><a href="{{route('paymentTypes.index')}}">{{__('general.meniu.paymentTypes')}}</a></li>--}}
{{--    <li><a href="{{route('statuses.index')}}">{{__('general.meniu.statuses')}}</a></li>--}}
{{--    <li>--}}
