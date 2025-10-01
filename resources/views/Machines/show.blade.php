@extends('machines.layout')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">SHOW MACHINE</h1>
    {{-- <h2 class="fw-bold">{{ strtoupper($machine->name) }}</h2> --}}
</div>

<div class="row text-center mb-4 fw-bold">
    <div class="col">
        <h5>MACHINE</h5>
        <p>{{ $machine->name }}</p>
    </div>
    <div class="col">
        <h5>CODE MACHINE</h5>
        <p>{{ $machine->code }}</p>
    </div>
    <div class="col">
        <h5>DETAIL</h5>
        <p>{{ $machine->detail }}</p>
    </div>
</div>

<h5 class="fw-bold mb-3">PRODUCT</h5>

@forelse ($products as $product)
    <div class="d-flex justify-content-between align-items-center bg-white rounded-pill px-4 py-2 mb-3 shadow-sm 
        @if($product['name'] === 'SHAFT') border border-3 border-primary @endif">
        <span class="fw-bold">{{ strtoupper($product['name']) }}</span>

        @if($product['status'] === 'ON PROCESS')
            <span class="badge rounded-pill px-4 py-2 bg-info text-dark fw-bold">ON PROCESS</span>
        @elseif($product['status'] === 'FINISH')
            <span class="badge rounded-pill px-4 py-2 bg-primary fw-bold">FINISH</span>
        @elseif($product['status'] === 'PREPARE')
            <span class="badge rounded-pill px-4 py-2 bg-warning text-dark fw-bold">PREPARE</span>
        @else
            <span class="badge rounded-pill px-4 py-2 bg-secondary">UNKNOWN</span>
        @endif
    </div>
@empty
    <p class="text-muted">No products found for this machine.</p>
@endforelse

<div class="text-end mt-4">
    <a href="{{ route('machines.index') }}" class="btn btn-light fw-bold rounded-pill px-4">BACK</a>
</div>
@endsection
