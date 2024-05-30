@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">this is our product!</h1>
  </div>

  <div class="table-responsive small">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">create product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Type</th>
          <th scope="col">Quantity</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->type }}</td>
          <td>{{ $post->quantity }}</td>
          <td><a href="/dashboard/posts/{{ $post->id }}" class="badge bg-info"><i class="bi bi-pencil-square"></i></a>
            <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-danger" onclick="confirm('Anda yakin ingin menghapus data ini?');"><i class="bi bi-trash"></i></a></td>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection