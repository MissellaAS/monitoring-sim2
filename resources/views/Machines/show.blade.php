@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Detail Machine</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title mb-3">{{ $machine->company }} - {{ $machine->product }}</h5>

            <p><strong>Company:</strong> {{ $machine->company }}</p>
            <p><strong>Product:</strong> {{ $machine->product }}</p>
            <p><strong>Detail:</strong> {{ $machine->detail }}</p>
            <p><strong>Status:</strong> 
                @if($machine->status == 'Active')
                    <span class="badge bg-success">Active</span>
                @elseif($machine->status == 'Inactive')
                    <span class="badge bg-secondary">Inactive</span>
                @else
                    <span class="badge bg-warning text-dark">Maintenance</span>
                @endif
            </p>

            <div class="mt-4">
                <a href="{{ route('machine.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('machine.edit', $machine->id) }}" class="btn btn-primary">Edit</a>

                <form action="{{ route('machine.destroy', $machine->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
