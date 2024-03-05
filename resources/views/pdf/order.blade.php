<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <style>
        table tr td,
        table tr th{
            padding: 10px 15px;
        }
    </style>
</head>
<body>
    <img src="{{ public_path('images/istockphoto-1476198147-1024x1024.jpg') }}" alt="" width="300">
    <h1>Orders</h1>
    <table border="1" cellpadding="0" cellspacing="0"> 
        <tr align="left">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Total</th>
            <th>Date</th>
            <th>test</th>
        </tr>
        {{-- @if ($orders->isNotEmpty()) --}}
            @foreach ($orders as $order)
                <tr align="left">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>${{ $order->total }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</td>
                    <td>
                        <div class="EN">Hello guys</div>
                        <div class="UR">ہیلو لوگو</div>
                        <div class="HI">हैलो दोस्तों</div>
                        <div>হ্যালো বন্ধুরা</div>
                    </td>
                </tr>
            @endforeach
        {{-- @endif --}}
    </table>


</body>
</html>