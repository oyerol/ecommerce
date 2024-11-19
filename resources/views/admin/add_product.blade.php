@extends('admin.layouts.app')

<style type="text/css">
    input[type='text'] {
        width: 350px;
        height: 50px;
    }

    .form-container {
        background-color: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
        width: 400px; /* Adjust the form width */
    }

    /* Center the form on the page */
    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
</style>

@section('content')
<div class="p-4 sm:ml-64 dark:bg-black">

    <!-- Center container -->
    <div class="center-container">

        <!-- Form container -->
        <div class="form-container">
            <h1 class="text-center text-2xl mb-4">Add Product</h1>

            <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">

            @csrf

<div class="mb-4">
    <label>Product Title</label>
    <input type="text" name="title" class="border rounded p-2 w-full" required>
</div>

<div class="mb-4">
    <label>Description</label>
    <textarea name="description" class="border rounded p-2 w-full" required></textarea>
</div>

<div class="mb-4">
    <label>Price</label>
    <input type="text" name="price" class="border rounded p-2 w-full" required>
</div>

<div class="mb-4">
    <label>Quantity</label>
    <input type="number" name="qty" class="border rounded p-2 w-full" required>
</div>

<div class="mb-4">
    <label>Product Category</label>
    <select name="category" class="border rounded p-2 w-full" required>
        <option value="">Select</option>
        @foreach($category as $category) 
            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
</div>


<div class="mb-4">
    <label>Product Image</label>
    <input type="file" name="image" required>
</div>

<div class="mb-4">
<button class="btn btn-success">Add Product</button>
</div>


</form>
        </div> 
    </div>

</div>
@endsection
