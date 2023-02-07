<!DOCTYPE html>
<html lang="en">
<head>
{{--    In-Progress--}}
</head>
<body>
{{--<img src="/img/background.png" class="full_fit">--}}
<div class="main_grid">

    @include('layouts.admin.header')
{{--    <div class="container">--}}
{{--        <div class="hidden message">{{$message??''}}</div>--}}
        @yield('content', 'Default content')
{{--    </div>--}}
{{--    <br>--}}
{{--    @include('layouts.admin.footer')--}}
</div>
{{--<script src="/js/mano.js"></script>--}}
</body>
</html>
