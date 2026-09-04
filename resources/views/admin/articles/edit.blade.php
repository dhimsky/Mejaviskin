@extends('admin.layout')

@section('title', 'Ubah Artikel')

@section('content')
<div class="admin-card">
  <form method="POST" action="{{ route('admin.articles.update', $article) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.articles._form')
  </form>
</div>
@endsection
