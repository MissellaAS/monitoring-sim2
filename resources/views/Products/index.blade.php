@extends('products.layout');
@section('content')


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

    @foreach ($products as $product)
    <tr>
        <td>{{ $loop->iteration }}</td>
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