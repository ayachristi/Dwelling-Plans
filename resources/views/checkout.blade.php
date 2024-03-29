<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('layouts/header')
    <title>My Orders</title>

</head>

<body class="checkout_body">
    @include('layouts/navbar')
    <div class="container">
        <div>
            <button type="button" class="btn btn-outline-dark can_del d-flex justify-content-center align-items-center" onclick="goBack()">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
            </button>
        </div>
        <h1 class="h1_checkout">My Orders</h1>
        @if ($order->isEmpty())
        <p class="no-orders">No orders found.</p>
        @else
        <table class="table-checkout">
            <thead>
                <tr>
                    <th class="checkout_th">Order ID</th>
                    <th class="checkout_th">Time Placed</th>
                    <th class="checkout_th">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $o)
                <tr>
                    <td class="checkout_td">{{$o->order_id}}</td>
                    <td class="checkout_td">{{$o->time_placed}}</td>
                    <td class="checkout_td"><span class="status">{{$o->status}}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $order->links('pagination::bootstrap-5') }}
        </div>
        @endif
    </div>
</body>

<style>
    .pagination-links {
        margin-top: 13px;

    }

    body.checkout_body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background: #f4f4f4;
        color: #333;
        margin-top: 50px;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background: #fff;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .h1_checkout {
        color: #333;
        font-size: 24px;
        text-align: center;
        padding-bottom: 20px;
        border-bottom: 1px solid #eaeaea;
    }

    .table-checkout {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table-checkout th.checkout_th,
    .table-checkout td.checkout_td {
        text-align: left;
        padding: 12px;
        border-bottom: 1px solid #eaeaea;
    }

    .table-checkout th.checkout_th {
        background-color: #fafafa;
        color: #333;
    }

    .table-checkout tr:nth-child(even) {
        background-color: #f4f4f4;
    }

    .table-checkout tr:hover {
        background-color: #eaeaea;
    }

    .status {
        display: inline-block;
        padding: 2px 5px;
        border-radius: 4px;
        color: #fff;
        background-color: #2197bd
    }

    .no-orders {
        text-align: center;
        padding: 50px;
        color: #999;
    }

    /* Additional styling for other elements as needed */
</style>

<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>