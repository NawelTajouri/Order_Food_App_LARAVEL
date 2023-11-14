
@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content" style="margin-top: -25px">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg') }}');">
            <div class="container">
                <h1 class="pt-5">
                    You Paid For the Products Successfully
                </h1>
                <a class="btn tn-primary" href="{{ route('home') }}">
                    Go Home
                </a>
            </div>
        </div>
    </div>
    
            
</div>

@endsection