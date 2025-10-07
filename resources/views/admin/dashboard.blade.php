<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Properties</title>

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
        .table img {
            border-radius: 6px;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4 class="text-center mb-4">Admin Panel</h4>
    <a href="{{ route('admin.dashboard') }}">🏠 Dashboard</a>
    <a href="{{ route('admin.properties.index') }}">📂 Properties</a>
    <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="btn btn-link text-white w-100 text-start">🚪 Logout</button>
    </form>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
    <div class="container-fluid">
        <span class="navbar-brand">Welcome, {{ $admin->name ?? 'Admin' }}</span>
    </div>
</nav>

<!-- Main Content -->
<div class="content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Properties Management</h3>
        <a href="{{ route('admin.properties.create') }}" class="btn btn-primary">➕ Add New Property</a>
    </div>

    <!-- Properties Table -->
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Address</th>
                        <th>Price</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($properties as $property)
                        <tr>
                            <td>{{ $property->id }}</td>
                            <td>
                                @if($property->main_image)
                                    <img src="{{ asset('assets/img/' . $property->main_image) }}" 
                                         alt="{{ $property->title }}" width="80">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $property->title }}</td>
                            <td>{{ $property->address }}</td>
                            <td>${{ number_format($property->price, 2) }}</td>
                            <td>{{ $property->bedrooms }}</td>
                            <td>{{ $property->bathrooms }}</td>
                            <td>
                                <a href="{{ route('admin.properties.show', $property->id) }}" class="btn btn-sm btn-info">👁 View</a>
                                <a href="{{ route('admin.properties.edit', $property->id) }}" class="btn btn-sm btn-warning">✏ Edit</a>
                                <form action="{{ route('admin.properties.destroy', $property->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">🗑 Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">No properties found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
