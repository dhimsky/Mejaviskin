@extends('admin.layout')

@section('title', 'Ubah Produk')

@section('content')
<div class="admin-card">
  <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.products._form')
  </form>
</div>
@endsection
