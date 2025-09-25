<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Monitoring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="container-fliud">
        <div class="row">
            <nav id='sidebar' class='col-md-2 sidebar'>
                <button class='sidebar-toggle' id='sidebarToggle' title='Toggle sidebar'>
                    &#9783;
                    <span>MENU</span>
                </button>
                <a href="{{ route('products.index') }}"><i class='bi bi-box-seam'></i><span>Products</span><a>
                <a href="{{ route('machines.index') }}"><i class='bi bi-gear'></i><span>Machines</span><a>
                <a href="#"><i class='bi bi-people'></i><span>Order List</span><a>
            </nav>
            <main class='col-md-10 pt-2' style='flex: auto;'>
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        document.getElementByid('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });
    </script>

    <div class="bFnJ2A _7vS1Yw _682gpw" style="clip-path: url(&quot;#__id146&quot;); background: rgb(0, 0, 0); width: 256px; height: 621.596px; transform: scale(1.23553, 1.23553); transform-origin: 0px 0px; touch-action: pan-x pan-y pinch-zoom;"></div>

</body>
</html>