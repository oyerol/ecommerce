@extends('admin.layouts.app')
<style>
    tr, th, td{
        border: 1px solid black;
    }
</style>

@section('content')
<div class="p-4 sm:ml-64 dark:bg-gray-800">

    <br><br>

    <div class="overflow-x-auto">
    <table class="table w-full">
    <thead class="bg-gray-100 dark:bg-gray-700">
        <tr>
            <th class="px-4 py-2">Customer Name</th>
            <th class="px-4 py-2">Address</th>
            <th class="px-4 py-2">Phone</th>
            <th class="px-4 py-2">Product Title</th>
            <th class="px-4 py-2">Price</th>
            <th class="px-4 py-2">Image</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Change Status</th>
            <th>Print PDF</th>
        </tr>
    </thead>
    <tbody class="bg-white dark:bg-gray-800">
        @foreach($data as $data)
        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
            <td class="px-4 py-2">{{$data->name}}</td>
            <td class="px-4 py-2">{{$data->rec_address}}</td>
            <td class="px-4 py-2">{{$data->phone}}</td>
            <td class="px-4 py-2">{{$data->product->title}}</td>
            <td class="px-4 py-2">{{$data->product->price}}</td>
            <td class="px-4 py-2">
                <img src="products/{{$data->product->image}}" alt="" class="w-12 h-12 object-cover rounded">
            </td>
            <td class="px-4 py-2">
                
                    @if($data->status == 'in progress')
                        <span style="color: green;">{{$data->status}}</span>
                    @elseif($data->status == 'on the way')
                        <span style="color: red;">{{$data->status}}</span>
                    @else
                    <span style="color: blue;">{{$data->status}}</span>
                    @endif

            </td>

            <td class="px-4 py-2">
                <div class="flex space-x-2 items-center">
                    <a style="width: 120px" class="btn btn-success" href="{{url('on_the_way',$data->id)}}">On The Way</a>
                    <a style="width: 100px" class="btn btn-primary" href="{{url('delivered',$data->id)}}">Delivered</a>
                </div>
            </td>
            <td>
                <a class="btn btn-secondary" href="{{url('print_pdf',$data->id)}}">Print PDF</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    </div>
</div>
@endsection

