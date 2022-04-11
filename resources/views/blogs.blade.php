@extends('templates.head')

@section('container')
<div class="card">
  <div class="card-header">
    Daftar Blog <a class="btn btn-primary btn-sm float-end" href="{{ url('blogs/create') }}">Tambah</a>
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Author</th>
          <th scope="col">Title</th>
          <th scope="col">Body</th>
          <th scope="col">Keyword</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $blog)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $blog->author }}</td>
          <td>{{ $blog->title }}</td>
          <td>{{ $blog->body }}</td>
          <td>{{ $blog->keyword }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection