@extends('admin.layout')

@section('title', 'Tambah Kandungan Aktif')

@section('content')
<div class="admin-card">
  <form method="POST" action="{{ route('admin.ingredients.store') }}">
    @include('admin.ingredients._form')
  </form>
</div>
@endsection
