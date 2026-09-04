<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Masuk Admin | {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }}</title>
<link rel="stylesheet" href="{{ asset('assets/admin.css') }}">
</head>
<body class="admin-body">
  <div class="admin-login-wrap">
    <div class="admin-login-card">
      <h1>Masuk ke Dashboard</h1>
      <p>{{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }} — Panel Admin</p>

      @if ($errors->any())
        <div class="admin-alert admin-alert-error">
          {{ $errors->first() }}
        </div>
      @endif

      <form method="POST" action="{{ route('admin.login.attempt') }}">
        @csrf
        <div class="admin-form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="admin-form-group">
          <label for="password">Kata Sandi</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="admin-checkbox admin-form-group">
          <input type="checkbox" id="remember" name="remember">
          <label for="remember" style="margin:0; font-weight:500;">Ingat saya</label>
        </div>
        <button type="submit" class="admin-btn admin-btn-primary">Masuk</button>
      </form>
    </div>
  </div>
</body>
</html>
