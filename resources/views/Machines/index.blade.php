@extends('machines.layout')
@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <td>ID</td>
        <td>MACHINE</td>
        <td>CODE</td>
        <td>DETAIL</td>
        <td>STATUS</td>
        <td width="280px">ACTION</td>
    </tr>

    @if ($machines->isEmpty())
        <tr>
            <td colspan="6">No Machines found.</td>
        </tr>
    @else
        @foreach ($machines as $machine)
        <tr>
            <td>{{ $machine->id }}</td>
            <td>{{ $machine->machine }}</td>
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
                    <a class="btn btn-info" href="{{ route('machines.show',$machine->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('machines.edit',$machine->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    @endif
</table>

@endsection
