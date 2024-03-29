<!DOCTYPE html>
<html lang="en">
@include ('layouts/header')

<head>
    @include('layouts/header_superadmin')
    <title>Orders</title>
</head>

<body class="d-flex justify-content-between">
    @if(Session::get('account_type') !== 'admin')
        @include('layouts/navbar_superadmin')
    @else
        @include('layouts/navbar_admin')
    @endif
    <div class="content-body">
        <h1>Orders</h1>
        @if ($orders->isEmpty())
        <p>No orders available.</p>
        @else
        <table class="table">
            <tr>
                <th>Order ID</th>
                <th>Time Placed</th>
                <th>Status</th>
                <th>Name</th>
                <th>View Order</th>
                <th>Generate Order</th>
            </tr>
            @foreach ($orders as $o)
            <tr>
                <td>{{ $o->order_id }}</td>
                <td>{{ $o->time_placed }}</td>
                <td>{{ $o->status }}</td>
                <td>{{ $o->last_name }}, {{ $o->first_name }}</td>
                <td><a href="/admin/orders/{{ $o->order_id }}/view" class="btn btn-success">View</a></td>
                <td><a href="/admin/orders/{{ $o->order_id }}/generate-order" class="btn btn-primary">Generate Order</a></td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>