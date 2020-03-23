<!DOCTYPE html>
<html>
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        @include('layout.partials.sidebar')
        </div>
        <div class="col-sm-9 main">
            @yield('content-wrapper')
            @include('layout.partials.footer')
        </div>
    </div>
</div>
@include('layout.partials.footer-scripts')
</body>
</html>