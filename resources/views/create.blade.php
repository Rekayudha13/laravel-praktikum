@extends('templates.head')

@section('container')


<div class="card">
  <div class="card-header">
    Daftar Blog <a class="btn btn-primary btn-sm float-end" href="{{ url('blogs') }}">Kembali</a>
  </div>
  <div class="card-body">
    <form action="{{ url('blogs/save') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" name="author" class="form-control" id="author">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea name="body" class="form-control" id="body"></textarea>
      </div>

      <div class="mb-3">
        <label for="keyword" class="form-label">Keyword</label>
        <input type="text" name="keyword" class="form-control" id="keyword">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection