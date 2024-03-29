<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header_superadmin')
    <title>PRODUCTS</title>
</head>


    @if(Session::get('account_type')!='admin')
<body class="admin-products d-flex justify-content-between">
        @include('layouts/navbar_superadmin')
    @else
<body class="d-flex justify-content-between">
        @include('layouts/navbar_admin')
    @endif
    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif
        <!-- <h1>Productsss</h1> -->
        <div class="d-flex justify-content-end">
            <div class="add-product mt-3 mb-3 text-center">
                <a href="/admin/products/create">+ Add Products</a>
            </div>
        </div>

        <div class="row">

            <table class="table w-auto">
                <tr class="tr-head">
                    <th class="fixed-th-title">Title</th>
                    <th>Design</th>
                    <th>Description</th>
                    <th class="fixed-th">Lot Area</th>
                    <th class="fixed-th">Action</th>
                </tr>
                @foreach($product as $p)
                <tr>
                    <td>{{$p -> title}}</td>
                    <td>{{$p -> design}}</td>
                    <td>{{$p -> description}}</td>
                    <td>{{$p -> lot_area}}</td>
                    <td>
                        <div class="prod sdropdown">
                            <!-- <button data-bs-toggle="dropdown" aria-expanded="false"> -->
                            <button data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">
                                    more_vert
                                </span>
                            </button>
                            <ul class="dropdown-menu text-center">
                                <!-- <h6> <b>FIRST NAME</b></h6> -->
                                <li><a class="dropdown-item" href="/admin/products/{{$p -> product_id}}" class="btn btn-primary">View</a></li>
                                <li><a class="dropdown-item" href="/admin/products/edit/{{$p -> product_id}}" class="btn btn-warning">Edit</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete_{{$p -> product_id}}" class="btn btn-danger">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                    <!-- <td><a href="/admin/products/{{$p -> product_id}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a href="/admin/products/edit/{{$p -> product_id}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td>
                        <a data-bs-toggle="modal" data-bs-target="#delete_{{$p -> product_id}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td> -->

                    <!-- delete modal -->
                    <div class="modal fade" id="delete_{{$p -> product_id}}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete {{$p -> title}} ({{$p -> product_id}})</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">Once this action is taken, it cannot be undone.
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <form action="/admin/products/{{$p -> product_id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Delete" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                @endforeach
            </table>
        </div>

        <div>
            {{$product->links('pagination::bootstrap-5')}}
        </div>
    </div>



</html>