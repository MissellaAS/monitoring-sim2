@extends('products.layout')

@section('content')
<div class="container">
    <h2 class="mb-4">PRODUCTION MONITORING</h2>

    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">+ Add Product</a>

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Company</th>
                <th>Product</th>
                <th>Detail</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->company }}</td>
                <td>{{ $product->product }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    @if($product->status == 'Preparation')
                        <span class="badge bg-danger">Preparation</span>
                    @elseif($product->status == 'On Process')
                        <span class="badge bg-warning text-dark">On Process</span>
                    @else
                        <span class="badge bg-success">Finish</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Show</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->machine->company }}</td>
        <td>{{ $product->product }}</td>
        <td>{{ $product->detail }}</td>
        <td>
            @if($product->status == 'Onprocess')
                <span class="badge bg-success">Onprocess</span>
            @elseif($product->status == 'Finished')
                <span class="badge bg-danger">Finished</span>
            @else
                <span class="badge bg-warning text-dark">Pending</span>
            @endif
        </td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                @csrf
                @method('DELETE')
      
                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
