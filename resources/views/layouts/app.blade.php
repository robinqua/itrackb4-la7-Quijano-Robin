<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Books')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="container mt-4">
        <h1 class="mb-3">Robin's Fiction</h1>

        @include('partials._nav')

        <hr>

        @yield('content')

        <hr>
        <p class="text-muted">Robin Quijano</p>
    </div>
</body>
</html>

