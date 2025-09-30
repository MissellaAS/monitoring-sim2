@extends('machines.layout')

@section('title', 'Machine List')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">{{ $message }}</div>
@endif

<h2 class="fw-bold mb-4">Machine Monitoring</h2>

<table class="table table-bordered shadow">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>MACHINE</th>
            <th>CODE</th>
            <th>DETAIL</th>
            <th>STATUS</th>
            <th width="280px">ACTION</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($machines as $machine)
        <tr>
            <td>{{ $machine->id }}</td>
            <td>{{ $machine->name }}</td>
            <td>{{ $machine->code }}</td>
            <td>{{ $machine->detail }}</td>
            <td>
                @if($machine->status == 'Onprocess')
                    <span class="badge bg-success">Onprocess</span>
                @elseif($machine->status == 'Finished')
                    <span class="badge bg-danger">Finished</span>
                @else
                    <span class="badge bg-warning text-dark">Pending</span>
                @endif
            </td>
            <td>
                <form action="{{ route('machines.destroy',$machine->id) }}" method="POST">
                    <a class="btn btn-info btn-sm" href="{{ route('machines.show',$machine->id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('machines.edit',$machine->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">No Machines found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
