@extends('layouts.admin');

@section('content')

<div class="container mt-5">
  @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{!! \Session::get('success') !!}</p>
      </div>
  @endif
</div>

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">Admins</h5>
          <a href="{{ route('admins.create') }}" class="btn btn-primary mb-4 text-center float-right" style="background-color: #d3f14c;border-color:#d3f14c; color:#000">Create Admins</a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($allAdmins as $admin )
                      <tr>
                          <th scope="row">{{ $admin->id }}</th>
                          <td>{{ $admin->name }}</td>
                          <td>{{ $admin->email }}</td>
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
