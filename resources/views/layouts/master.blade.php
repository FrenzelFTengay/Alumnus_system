<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Alumni Dashboard')</title>
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body class="dashboard-body">

  <!-- Sidebar -->
  @include('layouts.sidebar')

  <!-- Main Content -->
  <div class="dashboard-main">

    <!-- Header / Topbar -->
    @include('layouts.header')

    <main class="dashboard-container">
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer dashboard-footer">
      <p>&copy; 2025 AlumniConnect. All rights reserved.</p>
    </footer>
  </div>

</body>
</html>
