@extends('admin.layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
    .table {
        border: 2px solid yellowgreen;
    }
    th {
        background-color: skyblue !important;
        color: white;
        font-weight: bold;
        font-size: 20px;
    }
    td {
        border: 1px solid skyblue;
        text-align: center;
    }
    input[type='search']
    {
        width: 500px;
        height: 40px;
        margin-left: 50px;
    }
</style>

@section('content')
<div class="p-4 sm:ml-64 dark:bg-black">
    <div class="flex justify-center mt-14">
        <div class="overflow-x-auto">

        <form action="{{ url('product_search') }}" method="get">
    @csrf
    <input type="search" name="search" placeholder="Search products..." class="input input-bordered">
    <input type="submit" class="btn btn-secondary" value="Search">
</form>



            <table class="table">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $products)
                    <tr>
                        <td>{{$products->title}}</td>
                        <td>{!!Str::limit($products->description,50)!!}</td>
                        <td>{{$products->category}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->quantity}}</td>
                        <td>
                            <img src="products/{{$products->image}}" height="100px" width="100px" alt="">
                        </td>
                        <td>
                            <a class="btn btn-success"href="{{ url('update_product', $products->id) }}">Update</a>
                        </td>
                        <td>
                            <a class="btn btn-error" onclick="confirmation(event)" href="{{ url('delete_product', $products->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$product->onEachSide(4)->links()}}
        </div>
    </div>
</div>

<!-- Include SweetAlert script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');

        swal({
            title: "Are you sure to delete this product?",
            text: "You will not be able to recover this product.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = urlToRedirect;
            }
        });
    }
</script>
@endsection
