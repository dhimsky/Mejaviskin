@extends('admin.layout')

@section('title', 'Tulis Artikel')

@section('content')
<div class="admin-card">
  <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
    @include('admin.articles._form')
  </form>
</div>
@endsection
