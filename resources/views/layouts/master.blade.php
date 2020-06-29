<!doctype html>
<html lang="en">
@include('includes.head')
<body>
@include('includes.nav')

@include('includes.hero-big')

@yield('content')

@include('includes.footer')
@include('includes.changepass-modal')
@include('includes.scripts')
</body>
</html>
