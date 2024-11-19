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
            <h1 class="text-center text-2xl mb-4">Edit Category</h1>

            <form action="{{ url('update_category', $data->id) }}" method="POST">
                @csrf

                <div class="mb-4">
                    <input type="text" name="category" value="{{ $data->category_name }}" required class="border rounded p-2 w-full">
                </div>

                <div class="flex justify-center">
                    <input class="btn btn-success" type="submit" value="Update Category">
                </div>
            </form>
        </div> 
    </div>

</div>
@endsection
