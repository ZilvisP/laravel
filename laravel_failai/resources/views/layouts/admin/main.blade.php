<!DOCTYPE html>
<html lang="en">
<head>
{{--    In-Progress--}}
{{--    <link rel="stylesheet" href="../../../css/app.css" / veikia bet tik del to, kad naujasnes narsykles atpazista >--}}
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>

<div class="main_grid">

    @include('layouts.admin.header')
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
    </div>
    <br>

</div>

</body>
</html>
