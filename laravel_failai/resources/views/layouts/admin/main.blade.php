<!DOCTYPE html>
<html lang="en">
<head>
    {{--    In-Progress--}}
    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="stylesheet" href="/css/main.css"/>
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

        @yield('content', 'Default content')

    <br>
        @include('layouts.admin.footer')
    </div>
</body>
</html>
