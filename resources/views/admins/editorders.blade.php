@extends('layouts.admin');

@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Update Orders</h5>
      <form method="POST" action="{{ route('orders.update', $order->id )}}" enctype="multipart/form-data">
        @csrf
            
        <div class="mt-5">   
            <p> Current Status is: <b>{{ $order->status }}</b></p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Order Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
              <option>--select order status--</option>
              <option value="Processing">Processing</option>
              <option value="Delivered">Delivered</option>
              

            </select>
        </div>

  
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center" style="background-color: #7b940e; border-color: #7b940e">update</button>

      
          </form>

        </div>
      </div>
    </div>
  </div>

@endsection