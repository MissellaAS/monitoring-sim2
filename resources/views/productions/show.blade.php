@extends('products.layout');
@section('content')
<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>   
        </div>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="card-title mb-3">{{ $product->machine->company }} - {{ $product->product }}</h5>

        <p><strong>Company:</strong> {{ $product->machine->company }}</p>
        <p><strong>Product:</strong> {{ $product->product }}</p>
        <p><strong>Detail:</strong> {{ $product->detail }}</p>
        <p><strong>Status:</strong> 
            @if($product->status == 'Onprocess')
                <span class="badge bg-success">Onprocess</span>
            @elseif($product->status == 'Finished')
                <span class="badge bg-danger">Finished</span>
            @else
                <span class="badge bg-warning text-dark">Pending</span>
            @endif
        </p>
    </div>
</div>
@endsection
