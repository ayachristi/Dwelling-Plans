<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Show product</title>
</head>

<body>
    <h1>Title: {{$product -> product_id}}</h1>
    <ul>
        <li>Design: {{$product -> design}}</li>
        <li>Description: {{$product -> description}}</li>
        <li>Lot Area: {{$product -> lot_area}}</li>
        <li>Product Name: {{$product -> storey_id}}</li>
        <li>3D Image: {{$product -> image_3d}}</li>
        <li>Floor Plan Image: {{$product -> floor_plan_image}}</li>
        <li>Interior Image: {{$product -> interior_image}}</li>
    </ul>
</body>

</html>