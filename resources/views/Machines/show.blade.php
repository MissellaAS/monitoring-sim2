@extends('machines.layout')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">SHOW MACHINE</h1>
    <h2 class="fw-bold">{{ $machine->name }}</h2>
</div>

<div class="row text-center mb-4">
    <div class="col">
        <h5 class="fw-bold">MACHINE</h5>
        <p>{{ $machine->name }}</p>
    </div>
    <div class="col">
        <h5 class="fw-bold">CODE</h5>
        <p>{{ $machine->code }}</p>
    </div>
    <div class="col">
        <h5 class="fw-bold">DETAIL</h5>
        <p>{{ $machine->detail }}</p>
    </div>
</div>

<h5 class="fw-bold mb-3">PRODUCT</h5>

@foreach ($products as $product)
    <div class="d-flex justify-content-between align-items-center bg-white rounded-pill px-4 py-2 mb-3 shadow 
        @if($product['name'] === 'SHAFT') border border-3 border-primary @endif">
        <span class="fw-semibold">{{ $product['name'] }}</span>
        <span class="badge bg-primary px-3 py-2">{{ $product['status'] }}</span>
    </div>
@endforeach

<div class="text-end mt-4">
    <a href="{{ route('machines.index') }}" class="btn btn-light fw-bold rounded-pill px-4">BACK</a>
</div>
@endsection
