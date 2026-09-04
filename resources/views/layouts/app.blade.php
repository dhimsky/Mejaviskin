<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Mejavi Skin+ | Perawatan Kulit Berbasis Sains & Alam')</title>
<meta name="description" content="@yield('meta_description', 'Mejavi Skin+ oleh PT Satu Satunya — produk perawatan kulit yang nyata, aman, dan efektif, dipercaya klien domestik dan internasional.')">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
@stack('styles')
</head>
<body>

@include('partials.header')

{{-- ================= FLASH MESSAGE ================= --}}
@if (session('status'))
  <div class="container" style="margin-top:20px;">
    <div style="background:var(--sage-pale); border:1px solid var(--sage); color:var(--sage-ink); padding:14px 20px; border-radius:12px; font-size:14.5px;">
      {{ session('status') }}
    </div>
  </div>
@endif

@yield('content')

@include('partials.footer')

<script src="{{ asset('assets/script.js') }}"></script>
@stack('scripts')
</body>
</html>
