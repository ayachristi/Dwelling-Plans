<!DOCTYPE html>
<html lang="en">
<head>
   @include('layouts/header_superadmin')
    <title>New Product</title>
   
</head>
<body class="add_admin_products_body">
    <div class="container_add_admin_products">
        <button type="button" class="btn btn-outline-dark can_del d-flex justify-content-center align-items-center" onclick="goBack()"><span class="material-symbols-outlined">
            arrow_back
        </span></button>
        <h1 class="h1_add_admin_products">Add New Product</h1>
        <form class="form_add_admin_products" action="/admin/products" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 div_add">
                <label class=" form-label labe_add_admin" for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" />
            </div>
            <div class="mb-3 div_add">
                <label class="form-label labe_add_admin" for="design">Design:</label>
                <input type="text" class="form-control" name="design" id="design" />
            </div>
            <div class="mb-3 div_add">
                <label class="labe_add_admin form-label" for="description">Description:</label>
                <input type="text" class="form-control" name="description" id="description" />
            </div>
            <div class="mb-3 div_add">
                <label class="form-label labe_add_admin" for="lot_area" >Lot Area:</label>
                <input type="text" class="form-control" name="lot_area" id="lot_area" />
            </div>
            <div class="mb-3 div_add">
                <label class="form-label labe_add_admin" for="storey_id">Select Storey:</label>
                <select class="form-select" name="storey_id" id="storey_id">
                    <option value="1">1 Storey</option>
                    <option value="2">2 Storeys</option>
                    <option value="3">3 Storeys</option>
                    <option value="4">4 Storeys</option>
                    <option value="5">5 Storeys</option>
                </select>
            </div>
            <div class="mb-3 div_add">
                <label class="form-label labe_add_admin" for="image_3d">3D Image:</label>
                <input type="file" class="form-control" name="image_3d" id="image_3d" />
            </div>
            <div class="mb-3 div_add">
                <label class="form-label labe_add_admin" for="floor_plan_image">Floor Plan Image:</label>
                <input type="file" class="form-control" name="floor_plan_image" id="floor_plan_image" />
            </div>
            <div class="mb-3 div_add">
                <label class="form-label labe_add_admin" for="interior_image" >Interior Image:</label>
                <input type="file" class="form-control" name="interior_image" id="interior_image" />
            </div>
            <input type="submit" class="btn btn-dark btn_add" value="Add Product">
        </form>
    </div>
</body>
<style>
    .add_admin_products_body {
        background-color: #f8f9fa;
        margin-top: 50px;
    }
    .container_add_admin_products {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .h1_add_admin_products {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
        font-weight: bold;
    }
    .form_add_admin_products > .div_add {
        margin-bottom: 15px;
    }
    .btn_add {
        width: 100%;
    }
    .labe_add_admin {
        font-weight: bold;
    }
</style>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</html>
