@extends('layouts.admin');

@section('content')

<div class="container mt-5">
  @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{!! \Session::get('success') !!}</p>
      </div>
  @endif
</div>

<div class="container mt-5">
  @if (\Session::has('update'))
      <div class="alert alert-success">
          <p>{!! \Session::get('update') !!}</p>
      </div>
  @endif
</div>

<div class="container mt-5">
  @if (\Session::has('delete'))
      <div class="alert alert-success">
          <p>{!! \Session::get('delete') !!}</p>
      </div>
  @endif
</div>

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">Categories</h5>
          <a href="{{ route('categories.create') }}" class="btn btn-primary mb-4 text-center float-right" style="background-color: #d3f14c;border-color:#d3f14c; color:#000">Create Categories</a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Update</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($allCategories as $category)
                      <tr>
                          <th scope="row">{{ $category->id }}</th>
                          <td>{{ $category->name }}</td>
                          <td><a href="{{ route('categories.edit', $category->id)}}" class="btn btn-warning text-white text-center" style="background-color: #7b940e; border-color: #7b940e">Update</a></td>
                          <td><a href="{{ route('categories.delete', $category->id)}}" class="btn btn-danger text-center" style="background-color: #fa7638; border-color: #fa7638">Delete</a></td>
                      </tr>
                  @endforeach
              </tbody>
            </table> 
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
