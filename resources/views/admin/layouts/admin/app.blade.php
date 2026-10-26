<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Partial View CSS -->
    @include('layouts.admin.css')
</head>
<body>

    <!-- Partial View Header & Sidebar -->
    @include('layouts.admin.header')
    @include('layouts.admin.sidebar')

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Partial View Footer & JS -->
    @include('layouts.admin.footer')
    @include('layouts.admin.js')

</body>
</html>
