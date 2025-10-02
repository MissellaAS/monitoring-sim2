<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production Control</title>
    <style>
        body {
            background: #187498;
            min-height: 100vh;
            padding: 20px;
            color: white;
            font-family: Arial, sans-serif;
        }
        h2 {
            font-weight: bold;
        }
        a.button {
            padding: 10px 20px;
            background: gold;
            color: black;
            border-radius: 20px;
            text-decoration: none;
        }
        table {
            width: 100%;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            border-collapse: collapse;
        }
        thead {
            background: #0F3460;
            color: white;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
        .status {
            padding: 5px 10px;
            border-radius: 15px;
            color: white;
        }
        .status-preparation {
            background: red;
        }
        .status-onprocess {
            background: orange;
        }
        .status-finish {
            background: green;
        }
        a.action-button {
            padding: 5px 15px;
            border-radius: 15px;
            text-decoration: none;
            color: white;
            margin-right: 5px;
        }
        a.show {
            background: orange;
        }
        a.edit {
            background: dodgerblue;
        }
        button.delete {
            background: red;
            padding: 5px 15px;
            border-radius: 15px;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>PRODUCTION CONTROL</h2>

    <a href="{{ route('productions.create') }}" class="button">Add New Production</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Company</th>
                <th>Machine</th>
                <th>Product</th>
                <th>Detail</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productions as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->company }}</td>
                <td>{{ $p->machine }}</td>
                <td>{{ $p->product }}</td>
                <td>{{ $p->detail }}</td>
                <td>
                    @if($p->status == 'Preparation')
                        <span class="status status-preparation">Preparation</span>
                    @elseif($p->status == 'On Process')
                        <span class="status status-onprocess">On Process</span>
                    @else
                        <span class="status status-finish">Finish</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('productions.show', $p->id) }}" class="action-button show">Show</a>
                    <a href="{{ route('productions.edit', $p->id) }}" class="action-button edit">Edit</a>
                    <form action="{{ route('productions.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
