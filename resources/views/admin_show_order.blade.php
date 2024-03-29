<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header_superadmin')
    <title>ORDERS</title>
</head>

<body class="admin-products d-flex justify-content-between">
    @include('layouts/navbar_superadmin')
    <div class="container">
        <div class="row">
            <h1>Show Order</h1>
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Design</th>
                    <th>Description</th>
                </tr>
                @foreach ($orders as $o)
                <tr>
                    <td>{{$o->title}}</td>
                    <td>{{$o->design}}</td>
                    <td>{{$o->description}}</td>
                </tr>
                @endforeach
            </table>
            <h2>Update Order Status</h2>
            <p>Status: {{$user_info->status}}</p>
            @if ($user_info->status == "pending")
            <form action="{{route('accept_order', $user_info->order_id)}}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-success">Accept Order</button>
            </form>
            @else
            <form action="{{route('update_order_status', $user_info->order_id)}}" method="POST">
                @csrf
                @method('PUT')
                <select name="status">
                    <option value="">Please select status...</option>
                    <option value="accepted">Accepted</option>
                    <option value="preparing">Preparing</option>
                    <option value="delivering">Delivering</option>
                    <option value="delivered">Delivered</option>
                </select>
                <input type="submit" class="btn btn-success" value="Update Status" />
            </form>
            @endif
        </div>
    </div>
</body>

</html>