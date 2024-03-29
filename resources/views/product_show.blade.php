<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header')
    <title>Show product</title>

</head>

<body class="body_view_add_admin_products">
    <div class="card_pro_show">
        <button type="button" class="btn btn-outline-dark can_del d-flex justify-content-center align-items-center mb-2" onclick="goBack()"><span class="material-symbols-outlined">
                arrow_back
            </span></button>
        <h1 class="h1_view_add_admin_products">Title: {{$product->title}}</h1>
        <div class="text-box_product_show1 design_pro">
            <strong>Design:</strong> {{$product->design}}<br>
            <strong>Description:</strong> {{$product->description}}<br>
            <strong>Lot Area:</strong> {{$product->lot_area}}<br>
            <strong>Product Name:</strong> {{$product->storey_id}}
        </div>
        <div class="text-box_product_show2">
            <strong>Storey Type:</strong> {{$product->floor_type}}<br>
            <strong>3D Price:</strong> {{$product->perspective_3d_price}}<br>
            <strong>Floor Plan Price:</strong> {{$product->floor_plan_price}}<br>
            <strong>Interior Plan Price:</strong> {{$product->interior_price}}<br>
            <strong>Full Set Plan Price:</strong> {{$product->full_set_price}}
        </div>
        <div class="images_pro">
            <strong>3D Image:</strong>
            <img class="img_view_add_admin_products" src="{{ asset('img/products/' . $product->image_3d) }}" alt="3D Image">
            <strong>Floor Plan Image:</strong>
            <img class="img_view_add_admin_products" src="{{ asset('img/products/' . $product->floor_plan_image) }}" alt="Floor Plan Image">
            <strong>Interior Image:</strong>
            <img class="img_view_add_admin_products" src="{{ asset('img/products/' . $product->interior_image) }}" alt="Interior Image">
        </div>
    </div>
</body>
<style>
    body,
    .body_view_add_admin_products {
        margin: 0;
        padding: 20px;
        background-color: #f0f2f5;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;

    }

    .card_pro_show {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: auto;
        width: 100%;
        max-width: 800px;
    }

    .h1_view_add_admin_products,
    .design_pro,
    .text-box_product_show1,
    .text-box_product_show2 {
        background-color: #333;
        color: white;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .row_product,
    .images_pro {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .text-box_product_show1,
    .text-box_product_show2 {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 15px;
        width: 100%;
        box-sizing: border-box;
        color: #333;
    }

    .img_view_add_admin_products {
        border-radius: 4px;
        margin: 10px auto;
        width: 100px;
        height: 100px;
    }

    @media only screen and (max-width: 768px) {

        .body_view_add_admin_products,
        .row_product,
        .images_pro {
            padding: 10px;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .text-box_product_show1,
        .text-box_product_show2 {

            padding: 15px;
            margin-bottom: 20px;
        }

        .img_view_add_admin_products {

            max-width: 80px;
            height: auto;
        }
    }
</style>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>