<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('img/products.png') }}">
  @include('layouts/header')
    <title>Edit Product</title>
   
</head>

<body class="admin_pro_edit_body">
    <div class="container_admin_pro_edit">
        <button type="button" class="btn btn-outline-dark can_del d-flex justify-content-center align-items-center mb-3" onclick="goBack()"><span class="material-symbols-outlined">
            arrow_back
        </span></button>
        <h1 class="h1_admin_pro_edit">Edit {{$product -> title}} ({{$product -> product_id}})</h1>
        <form class="form_admin_pro_edit" action="/admin/products/{{$product -> product_id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="label_admin_pro_edit" for="title" class="form-label">Title:</label>
                <input type="text" class="form-control for_con_admin_pro_edit" name="title" value="{{$product -> title}}" />
            </div>
            <div class="mb-3">
                <label class="label_admin_pro_edit" for="design" class="form-label">Design:</label>
                <input type="text" class="form-control for_con_admin_pro_edit" name="design" value="{{$product -> design}}" />
            </div>
            <div class="mb-3">
                <label class="label_admin_pro_edit" for="description" class="form-label">Description:</label>
                <input type="text" class="form-control for_con_admin_pro_edit" name="description" value="{{$product -> description}}" />
            </div>
            <div class="mb-3">
                <label class="label_admin_pro_edit" for="lot_area" class="form-label">Lot Area:</label>
                <input type="text" class="form-control for_con_admin_pro_edit" name="lot_area" value="{{$product -> lot_area}}" />
            </div>
            <div class="mb-3">
                <label class="label_admin_pro_edit" for="storey_id" class="form-label">Product name:</label>
                <select class="form-select" name="storey_id">
                    <option value="{{$product -> storey_id}}">{{$product -> storey_id}}</option>
                    <option disabled>-----------</option>
                    <option value="1">3D Perspective</option>
                    <option value="2">Floor Plan</option>
                    <option value="3">Interior</option>
                    <option value="4">Full sets of plans</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="label_admin_pro_edit" for="image_3d" class="form-label">3D image:</label>
                <input type="file" class="form-control for_con_admin_pro_edit" name="image_3d" />
            </div>
            <div class="mb-3">
                <label class="label_admin_pro_edit" for="floor_plan_image" class="form-label">Floor Plan Image:</label>
                <input type="file" class="form-control for_con_admin_pro_edit" name="floor_plan_image" />
            </div>
            <div class="mb-3">
                <label class="label_admin_pro_edit" for="interior_image" class="form-label">Interior Image:</label>
                <input type="file" class="form-control for_con_admin_pro_edit" name="interior_image" />
            </div>
            <input type="submit" class="btn btn-dark button_admin_pro_edit" value="Update Product">
        </form>
    </div>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<style>
    .admin_pro_edit_body {
        background-color: #f8f9fa;
        padding: 20px;
        margin-top: 20px;
    }
    .container_admin_pro_edit {
        background: #ffffff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 20px auto;
    }
    .h1_admin_pro_edit {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
        font-weight: bold;
    }
    .form_admin_pro_edit > .label_admin_pro_edit {
        margin-top: 10px;
        font-weight: bold;
    }
    .for_con_admin_pro_edit {
        margin-bottom: 10px;
    }
    .button_admin_pro_edit {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
    }
</style>
</html>
