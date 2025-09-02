<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #e9f3ff, #fdfdff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
            background: #fff;
            overflow: hidden;
            padding: 30px 25px;
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-header h4 {
            font-weight: 600;
            color: #333;
        }
        .form-control {
            border-radius: 8px;
            padding: 10px 12px;
        }
        .btn-login {
            background: #dc3545;
            border: none;
            width: 100%;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            padding: 10px;
            transition: 0.3s;
        }
        .btn-login:hover {
            background: #b02a37;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="login-header">
        <h4>Admin Login</h4>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required autofocus>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>

        <button type="submit" class="btn btn-login text-white">Login</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
