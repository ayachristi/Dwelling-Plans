<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header')
    <title>Your Cart</title>
    <style>

    </style>
</head>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<body class="addtocart_body">
    @include('layouts/navbar')
    <div class="container-add_to">
        @if ($cartItems->isNotEmpty())
        <form action="/checkout" method="POST">
            @csrf
            <div class="row">
                <table class="table_add">
                    <thead>
                        <tr>
                            <th class="th_add_to">Title</th>
                            <th class="th_add_to">Design</th>
                            <th class="th_add_to">Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $totalPrice = 0; @endphp
                        <div>
                            <button type="button" class="btn btn-outline-dark can_del d-flex justify-content-center align-items-center" onclick="goBack()"><span class="material-symbols-outlined">
                                    arrow_back
                                </span></button>
                        </div>

                        <h2 class="add_head">Add to cart</h2>
                        @foreach($cartItems as $item)
                        <tr>
                            <input type="text" value="{{$item -> cart_id}}" name="cart_{{$loop->index + 1}}" hidden>
                            <td class="td_add_to"><img src="{{$item -> image_3D}}" />{{$item -> storey_id}} {{$item -> title}} ({{$item -> lot_area}})</td>
                            <td class="td_add_to">{{$item -> design}}</td>
                            <div>
                                <td class="td_add_to">{{"₱" . number_format($item->price, 2, '.', ',')}}<button type="button" class="delete-btn delete_add_to" id="delete_add_to_{{$item->cart_id}}" data-bs-toggle="modal" data-bs-target="#delete_{{$item -> cart_id}}">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button></td>
                            </div>

                        </tr>
                        @php $totalPrice += $item->price; @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center_add">
                    <label>TOTAL PRICE: PHP <strong>{{"₱" . number_format($totalPrice), 2, '.', ',' }}</strong></label>
                    <button type="submit" class="checkout-btn">Checkout</button>
                </div>
            </div>
        </form>

        @foreach($cartItems as $item)
        <!-- delete modal -->
        <div class="modal fade" id="delete_{{$item -> cart_id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        Once this action is taken, it cannot be undone.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn can_del" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('delete_cart', $item->cart_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger can_del" type="submit" value="Delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @else
        <p>Your cart is empty.</p>
        @endif
    </div>
    <div>

        <footer class="add_footer">
            @include('layouts/footer')
        </footer>

</body>

</html>