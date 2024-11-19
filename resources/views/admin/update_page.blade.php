@extends('admin.layouts.app')

@section('content')
<div class="p-4 sm:ml-64 dark:bg-gray-800">
    <br><br>
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-700 dark:text-white">Update Product</h2>
    <div class="flex justify-center mt-4">
        <div class="bg-base-100 p-8 rounded-lg shadow-lg w-full max-w-md">
            <form action="{{ url('edit_product', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Title</span>
                    </label>
                    <input type="text" name="title" value="{{ $data->title }}" class="input input-bordered w-full" />
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Description</span>
                    </label>
                    <textarea name="description" class="textarea textarea-bordered w-full">{{ $data->description }}</textarea>
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Price</span>
                    </label>
                    <input type="text" name="price" value="{{ $data->price }}" class="input input-bordered w-full" />
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Quantity</span>
                    </label>
                    <input type="number" name="quantity" value="{{ $data->quantity }}" class="input input-bordered w-full" />
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Category</span>
                    </label>
                    <select name="category" class="select select-bordered w-full">
                        <option value="{{ $data->category }}">{{ $data->category }}</option>
                        @foreach($category as $category)
                        <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Current Image</span>
                    </label>
                    <img class="w-32 h-32 object-cover rounded-lg" src="/products/{{ $data->image }}" alt="Current Image">
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">New Image</span>
                    </label>
                    <input type="file" name="image" class="file-input file-input-bordered w-full" />
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary w-full">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
