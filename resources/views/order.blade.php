<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF in Laravel 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <style type="text/css">
        body {
            margin: 0;
            font-size: 85%;
        }

        @font-face {
            font-family: 'Nikosh', sans-serif;
            src: url({{ asset('fonts/Nikosh.ttf') }});
        }

        .custom-font {
            font: normal 20px/18px My-custom-font;
        }
    </style> --}}
</head>

<body>
    <div class="bg-dark">
        <div class="container">
            <h1 class="py-3 text-white">Generate PDF in Laravel 10</h1>
        </div>
    </div>
    <div class="container">
        <div class="py-2">
            <a href="{{ url('/pdf') }}" class="btn btn-primary">Download PDF</a>
        </div>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Total</th>
                <th>Date</th>
            </tr>
            @if ($orders->isNotEmpty())
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>${{ $order->total }}</td>
                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
</body>

</html>
