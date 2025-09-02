<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
        }
        .sidebar {
            height: 100vh;
            background: #0d6efd;
            color: #fff;
            position: fixed;
            width: 240px;
            top: 0;
            left: 0;
            padding-top: 60px;
        }
        .sidebar a {
            display: block;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #084298;
        }
        .content {
            margin-left: 240px;
            padding: 20px;
        }
        .navbar {
            margin-left: 240px;
        }
        .card {
            border-radius: 12px;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4 class="text-center mb-4">Admin Panel</h4>
    <a href="#">🏠 Dashboard</a>
    <a href="#">📂 Listings</a>
    <a href="#">👤 Users</a>
    <a href="#">📝 Blog</a>
    <a href="#">📊 Reports</a>
    <a href="{{ route('admin.logout') }}">🚪 Logout</a>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
    <div class="container-fluid">
        <span class="navbar-brand">Welcome, {{ Auth::guard('admin')->user()->name ?? 'Admin' }}</span>
    </div>
</nav>

<!-- Main Content -->
<div class="content">
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary p-3 shadow">
                <h5>Total Listings</h5>
                <h3>120</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success p-3 shadow">
                <h5>Total Users</h5>
                <h3>85</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning p-3 shadow">
                <h5>Messages</h5>
                <h3>45</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger p-3 shadow">
                <h5>Pending Approvals</h5>
                <h3>12</h3>
            </div>
        </div>
    </div>

    <div class="card mt-4 shadow">
        <div class="card-header">
            Recent Activity
        </div>
        <div class="card-body">
            <ul>
                <li>User <b>John Doe</b> registered.</li>
                <li>New listing <b>Luxury Apartment</b> added.</li>
                <li>Blog post <b>Real Estate Tips</b> published.</li>
            </ul>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
