@extends('machines.layout')
@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
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
        @if ($machines->isEmpty())
            <tr>
                <td colspan="6" class="text-center">No Machines found.</td>
            </tr>
        @else
            @foreach ($machines as $machine)
            <tr>
                <td>{{ $machine->id }}</td>
                <td>{{ $machine->machine }}</td> {{-- pastikan field ini benar --}}
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
            @endforeach
        @endif
    </tbody>
</table>

@endsection
