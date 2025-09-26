<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Customer</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Product Customer</h1>

        <table class="w-full border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Nama Produk</th>
                    <th class="border px-4 py-2">Customer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $product['id'] }}</td>
                        <td class="border px-4 py-2">{{ $product['name'] }}</td>
                        <td class="border px-4 py-2">{{ $product['customer'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>