<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 80%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        @foreach($invoice as $item)
        <div class="row">
            <h1>{{ $item->order_title }}</h1>
            <p><b>LOT AREA: {{ $item->lot_area }}</b></p>
            <p><b>{{ $item->design }}</b></p>
            <p>{{ $item->description }}</p>
        </div>
        @endforeach

        <div class="row">
            <img src="https://eastwood.nyc3.cdn.digitaloceanspaces.com/blogs/Stanley%20Front%20Load.jpg" class="img-fluid" width="100%">
        </div>
        <div class="row">
            <img src="https://i.pinimg.com/564x/28/01/a7/2801a7fc6beca8a39e18c34ccd198461.jpg" class="img-fluid" width="100%">
        </div>
    </div>

</body>

</html>