<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('img/products.png') }}">
    @include('layouts/header')
    <script src="/js/products.js"></script>
    <title>Products</title>
</head>




<body>
    @include('layouts/navbar')
    <!-- <div id="product-page">
        <div class="search-bg container-fluid"> -->
            <!-- <div class="form-floating">
                <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div> -->
            <input type="text" placeholder="Search" class="form-control" id="search_bar">
            <!-- <div class="container searching">
                <div class="row pt-5 pb-3">
                    <div class="col-sm-5 col-12 text-center">
                        <div class="d-flex justify-content-between">
                            
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- </div>
    </div> -->

    <div class="productsView container mt-5 d-grid justify-content-start" id="products_container">
        
            <div class="row mb-5 mt-5 product" id="productsView">
                @foreach($products as $p)
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card" style="width: 100%;" id="card_design">
                        <img src="img/products/{{$p -> image_3d}}" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">{{$p->storey_id}} {{$p->title}}<br />{{$p->lot_area}}</h5>

                            <!-- Button trigger modal -->
                            <div class="text-center">
                                <button type="button" class="view-card-btn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$p->product_id}}">
                                    View
                                </button>
                            </div>

                            {{-- pagination --}}
                            

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$p->product_id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$p->product_id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="ms-3 save"><img src="img/icons/save-icon.svg" alt=""></a>
                                            <button type="button" class="btn-close mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6 house-pic d-grid justify-content-center gap-3">
                                                    <img src="img/products/{{$p -> image_3d}}" class="card-img-top" alt="...">
                                                    <img src="img/products/{{$p->floor_plan_image}}" class="card-img-top preview-image" alt="...">

                                                    <img src="img/products/{{$p -> interior_image}}" class="card-img-top" alt="...">
                                                </div>
                                                <div class="col-6 d-grid justify-content-center gap-3">
                                                    <div class="d-flex flex-column" id="list_with_price">
                                                        <!-- Checkboxes for different options -->
                                                        <div id="list_with_price_padding">
                                                            <!-- <input type="checkbox" class="checkbox" data-price="{{$p->perspective_3d_price}}" id="product_{{$p->product_id}}" value="{{$p->product_id}}"> -->

                                                            <label for="product_{{$p->product_id}}">3D Perspective (PHP {{$p->perspective_3d_price}})</label>
                                                        </div>
                                                        <div id="list_with_price_padding">
                                                            <!-- <input type="checkbox" class="checkbox" data-price="{{$p->floor_plan_price}}" id="floorplan_{{$p->product_id}}" value="{{$p->product_id}}"> -->

                                                            <label for="floorplan_{{$p->product_id}}">Floor Plans (PHP {{$p->floor_plan_price}})</label>
                                                        </div>
                                                        <div id="list_with_price_padding">
                                                            <!-- <input type="checkbox" class="checkbox" data-price="{{$p->interior_price}}" id="interior_{{$p->product_id}}" value="{{$p->product_id}}"> -->

                                                            <label for="interior_{{$p->product_id}}">Interior (PHP {{$p->interior_price}})</label>
                                                        </div>
                                                        <div id="list_with_price_padding">

                                                            <label for="full_set_{{$p->product_id}}">Full Set of Plans (PHP {{$p->full_set_price}})</label>
                                                        </div>
                                                        <div class="mt-2 total-price" id="list_with_price_padding">
                                                            <h6> <strong>Total Price:
                                                                    <!-- Calculate and display total price -->
                                                                    <span id="total_price_{{$p->product_id}}">{{($p -> perspective_3d_price) + ($p-> floor_plan_price) + ($p -> interior_price) + ($p -> full_set_price)}}</span>
                                                                </strong></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div>
                                                <h6>{{$p->description}}</h6>
                                            </div>
                                            <div class="container d-flex justify-content-around">
                                                <!-- <form action="/checkout" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </form> -->
                                                <!-- <button class="d-flex justify-content-between">
                                                    <span class="image"><img src="img/icons/peso-icon.svg" alt=""></span>
                                                    <span class="span-text">BUY NOW</span>
                                                </button> -->
                                                <form action="{{ route('add_to_cart', ['product_id' => $p->product_id]) }}" method="POST">
                                                    @csrf
                                                    <input type="text" name="total_price" value="{{($p -> perspective_3d_price) + ($p-> floor_plan_price) + ($p -> interior_price) + ($p -> full_set_price)}}" hidden>
                                                    
                                                    <button type="submit" class="btn btn-success">Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row mb-5 mt-5 product" id="searchProductsView">
                
            </div>
            {{$products -> links('pagination::bootstrap-5')}}
        
        
    </div>
    

    </div>



    @include('layouts/footer')
</body>

<script>
    $(document).ready(function(){
        $('#search_bar').keyup(function(){
            const searchId = $(this).val()

            if(searchId == ""){
                $('#productsView').show()
            }else{
                $('#productsView').hide()
            }
            

            $.ajax({
                url: '/products/search/' + searchId,
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('.row#searchProductsView').empty()

                    for(let i = 0; i < data.length; i++){
                        // ${(data[i].perspective_3d_price) + (data[i].floor_plan_price) + (data[i].interior_price) + (data[i].full_set_price)}

                        let perspective3dPrice = Number(data[i].perspective_3d_price)
                        let florPlanPrice = Number(data[i].floor_plan_price)
                        let interiorPrice = Number(data[i].interior_price)
                        let fullSetPrice = Number(data[i].full_set_price)

                        let totalPrice = perspective3dPrice + florPlanPrice + interiorPrice + fullSetPrice

                        const rowData = `
                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <div class="card" style="width: 100%;" id="card_design">
                                    <img src="img/products/${data[i].image_3d}" class="card-img-top" alt="house picture">

                                    <div class="card-body">

                                        <h5 class="card-title">${data[i].storey_id} ${data[i].title}<br />${data[i].lot_area}</h5>

                                        <!-- Button trigger modal -->
                                        <div class="text-center">
                                            <button type="button" class="view-card-btn" data-bs-toggle="modal" data-bs-target="#exampleModal${data[i].product_id}">
                                                View
                                            </button>
                                        </div>
                                        

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal${data[i].product_id}" tabindex="-1" aria-labelledby="exampleModalLabel${data[i].product_id}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#" class="ms-3 save"><img src="img/icons/save-icon.svg" alt=""></a>
                                                        <button type="button" class="btn-close mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6 house-pic d-grid justify-content-center gap-3">
                                                                <img src="img/products/${data[i].image_3d}" class="card-img-top" alt="...">
                                                                <img src="img/products/${data[i].floor_plan_image}" class="card-img-top preview-image" alt="...">

                                                                <img src="img/products/${data[i].interior_image}" class="card-img-top" alt="...">
                                                            </div>
                                                            <div class="col-6 d-grid justify-content-center gap-3">
                                                                <div class="d-flex flex-column" id="list_with_price">
                                                                    <!-- Checkboxes for different options -->
                                                                    <div id="list_with_price_padding">

                                                                        <label for="product_${data[i].product_id}">3D Perspective (PHP ${data[i].perspective_3d_price})</label>
                                                                    </div>
                                                                    <div id="list_with_price_padding">

                                                                        <label for="floorplan_${data[i].product_id}">Floor Plans (PHP ${data[i].floor_plan_price})</label>
                                                                    </div>
                                                                    <div id="list_with_price_padding">

                                                                        <label for="interior_${data[i].product_id}">Interior (PHP ${data[i].interior_price})</label>
                                                                    </div>
                                                                    <div id="list_with_price_padding">

                                                                        <label for="full_set_${data[i].product_id}">Full Set of Plans (PHP ${data[i].full_set_price})</label>
                                                                    </div>
                                                                    <div class="mt-2 total-price" id="list_with_price_padding">
                                                                        <h6> <strong>Total Price:
                                                                                <span id="total_price_${data[i].product_id}">${totalPrice}</span>
                                                                            </strong></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div>
                                                            <h6>${data[i].description}</h6>
                                                        </div>
                                                        <div class="container d-flex justify-content-around">
                                                            <!-- <form action="/checkout" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-success">Buy Now</button>
                                                            </form> -->
                                                            <!-- <button class="d-flex justify-content-between">
                                                                <span class="image"><img src="img/icons/peso-icon.svg" alt=""></span>
                                                                <span class="span-text">BUY NOW</span>
                                                            </button> -->
                                                            <form action="{{ route('add_to_cart', ['product_id' => $p->product_id]) }}" method="POST">
                                                                @csrf
                                                                <input type="text" name="total_price" value="${totalPrice}" hidden>
                                                                
                                                                <button type="submit" class="btn btn-success">Add to Cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        `

                        $('#searchProductsView').append(rowData)
                    }
                    
                },
                error: function(error){
                    console.log(error)
                }
            })
        })
    })
</script>

</html>