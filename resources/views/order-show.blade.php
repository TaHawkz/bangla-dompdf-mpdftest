<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order of {{ $order->name }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }

        body {
            font-family: 'solaimanlipi', sans-serif;
        }
    </style>

</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>Order Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">

            <div class="col-sm-9">
                <h2>{{ $order->name }}</h2>
                &nbsp;
                <h5>{{ $order->created_at->format('l jS \o\f F Y ') }}, &nbsp; {{ $order->created_at->format('h:i A') }}
                </h5>

                <p>email: {{ $order->email }}</p>
                <p>Cost: {{ $order->total }}</p>
            </div>
            <div class="col-sm-3">
                <h2>About Me</h2>
                <h5>Profile pic:</h5>
                
                <hr class="d-sm-none">
            </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
        <a class="btn btn-primary" href="#">Go To  Home Page</a>
        <a class="btn btn-success bg-dark active" href="{{ route('pdf.show', [$order->id]) }}">print pdf</a>
    </div>

</body>



</html>
