<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Show Machine</title>
</head>
<body style="background-color: #13729a;">

    <div class="text-center mb-5 mt-3">
        <h1 class="fw-bold text-white">SHOW MACHINE</h1>
        <h2 class="fw-bold text-white">{{ strtoupper($machines->machine) }}</h2>
    </div>

    <div class="text-end mt-4 mb-4 pe-4">
        <a href="{{ route('machines.index') }}" class="btn btn-light fw-bold rounded-pill px-4">BACK</a>
    </div>

    <div class="row text-center mb-5 fw-bold text-white">
        <div class="col">
            <h5>MACHINE</h5>
            <p>{{ $machines->machine }}</p>
        </div>
        <div class="col">
            <h5>CODE</h5>
            <p>{{ $machines->code }}</p>
        </div>
        <div class="col">
            <h5>DETAIL</h5>
            <p>{{ $machines->detail }}</p>
        </div>
    </div>

    <div class="container">
        <h5 class="fw-bold text-white mb-4">PRODUCT</h5>

        @forelse ($machine->orders as $order)
            <div class="d-flex justify-content-between align-items-center bg-white rounded-pill px-4 py-3 mb-3 shadow-sm 
                @if($order->product === 'SHAFT') border border-3 border-primary @endif">

                <!-- Nama produk -->
                <span class="fw-bold">{{ strtoupper($order->product) }}</span>

                <!-- Status -->
                @if($order->status === 'ON PROCESS')
                    <span class="badge rounded-pill px-4 py-2 bg-info text-dark fw-bold">ON PROCESS</span>
                @elseif($order->status === 'FINISH')
                    <span class="badge rounded-pill px-4 py-2 bg-primary fw-bold">FINISH</span>
                @elseif($order->status === 'PREPARE')
                    <span class="badge rounded-pill px-4 py-2 bg-warning text-dark fw-bold">PREPARE</span>
                @else
                    <span class="badge rounded-pill px-4 py-2 bg-secondary fw-bold">{{ $order->status }}</span>
                @endif
            </div>
        @empty
            <p class="text-white">No products found.</p>
        @endforelse
    </div>

</body>
</html>
