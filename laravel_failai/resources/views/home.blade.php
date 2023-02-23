<!DOCTYPE html>
<html lang="en">
<head>
    @csrf
        <link rel="stylesheet" href="/css/home.css"/>
{{--    <link rel="stylesheet" href="/css/app.css"/>--}}


</head>
<body>
<div class="main_grid">
    @include('layouts.admin.header')
</div>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('products', 'nera produktu')

    <br>
    @include('fronteshop.footer')
</div>
</body>
</html>
