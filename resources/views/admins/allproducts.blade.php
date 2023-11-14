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
          <h5 class="card-title mb-4 d-inline">Products</h5>
          <a href="{{ route('products.create')}}" class="btn btn-primary mb-4 text-center float-right" style="background-color: #d3f14c;border-color:#d3f14c; color:#000">Create Products</a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product</th>
                  <th scope="col">Price in $$</th>
                  <th scope="col">Expiration Date</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($allProducts as $product)
                  <tr>
                      <th scope="row">{{ $product->id }}</th>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->exp_date }}</td>
                      <td><a href="{{ route('products.delete', $product->id) }}" class="btn btn-danger text-center" style="background-color: #fa7638; border-color: #fa7638">Delete</a></td>
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
