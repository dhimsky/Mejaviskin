@extends('admin.layout')

@section('title', 'Ubah Kandungan Aktif')

@section('content')
<div class="admin-card">
  <form method="POST" action="{{ route('admin.ingredients.update', $ingredient) }}">
    @method('PUT')
    @include('admin.ingredients._form')
  </form>
</div>
@endsection
