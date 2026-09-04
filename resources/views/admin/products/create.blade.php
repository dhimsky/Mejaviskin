@extends('admin.layout')

@section('title', 'Tambah Produk')

@section('content')
<div class="admin-card">
  <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
    @include('admin.products._form')
  </form>
</div>
@endsection
