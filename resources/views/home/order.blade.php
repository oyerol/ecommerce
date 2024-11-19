<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body>
<div class="hero_area">
    <!-- header section starts -->
    @include('home.header')

    <div class="flex justify-center py-5 my-8">
        <div class="overflow-x-auto w-3/5 mx-auto p-4 bg-white shadow-lg rounded-lg">
            <table class="table w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-4 text-left text-gray-700">Product Name</th>
                        <th class="p-4 text-left text-gray-700">Price</th>
                        <th class="p-4 text-left text-gray-700">Delivery Status</th>
                        <th class="p-4 text-left text-gray-700">Image</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($order as $order)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4">{{$order->product->title}}</td>
                        <td class="p-4">{{$order->product->price}}</td>
                        <td class="p-4">{{$order->status}}</td>
                        <td class="p-4">
                            <img width="200px" height="150px" src="/products/{{$order->product->image}}" alt="Product A" class="w-16 h-16 rounded-lg object-cover">
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    @include('home.footer')

    <!-- end info section -->

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
