<!DOCTYPE html>
<html lang="EN">
<head>
    @include('layout.head')
</head>
<body>
    {{-- --}}
    @include('_template.nav')
    <div class="container py-4">
         @yield('content')
    </div>
    @include('layout.footer')
</body>

</html>