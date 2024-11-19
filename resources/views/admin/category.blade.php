@extends('admin.layouts.app')

<style type="text/css">
    input[type='text'] {
        width: 400px;
        height: 50px;
    }

    .form-container {
        background-color: white; 
        border-radius: 8px; 
        padding: 20px; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
    }

    .table_deg
    {
        text-align: center;
        margin: auto;
        border: 2px solid yellowgreen;
        margin-top: 50px;
        width: 600px;
    }

    th
    {
        background-color: skyblue;
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
        color: white;
    }
    td
    {
        padding: 15px;
        font-size: 20px;
        color: blue;
        border: 1px solid skyblue;
    }

    
</style>

@section('content')
<div class="p-4 sm:ml-64 dark:bg-black">
    <div class="flex justify-center mt-14">
        <div class="form-container">
            <h1 class="text-center text-2xl mb-4">Add Category</h1>


            <form action="{{url('add_category')}}" method="POST">
              @csrf

                <div class="mb-4">
                    <input type="text" name="category" placeholder="Enter category name" required class="border rounded p-2 w-full"> 
                </div>
                <div class="flex justify-center">
                    <input class="btn btn-primary" type="submit" value="Add Category">
                </div>
            </form>
        </div>        
    </div>

    <div>

        <table class="table_deg">
            <tr>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td>
                    {{$data->category_name}}
                </td>
                <td>
                    <a class="btn btn-success" href="{{url('edit_category', $data->id)}}">Edit</a>
                </td>
                <td>
                <a class="btn btn-danger" OnClick="confirmation(event)" href="{{url('delete_category', $data->id)}}">Delete</a>

                </td>
            </tr>
            @endforeach

        </table>

        </div>

</div>

<script type="text/javascript">

    function confirmation(ev)
    {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');

        console.log(urlToRedirect);

        swal({
            title: "Are you Sure to Delete This",
            text: "You will not be able to recover this category.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })

        .then((willCancel)=>
    {
        if(willCancel){
            window.location.href = urlToRedirect
        }
    })
    }

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
 integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
