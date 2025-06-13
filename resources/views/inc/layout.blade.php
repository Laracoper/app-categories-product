<!DOCTYPE html>
<html lang="en">
@include('inc.head')

<body>
    @include('inc.header')
    <div class="container-fluid">
        @include('inc.mes')
    
        @yield('content')
    </div>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>