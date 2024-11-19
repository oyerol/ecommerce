<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  @include('home.css')


</head>
<style>
    .cart_value{
        text-align: center;
        margin-bottom: 70px;
        padding: 18px;
    }
    .order-deg {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 8px;
    max-width: 400px;
    margin: 0 auto;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.div-gap {
    margin-bottom: 15px;
}

.div-gap label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.div-gap input[type="text"],
.div-gap textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    box-sizing: border-box;
}

.div-gap textarea {
    height: 80px;
    resize: vertical;
}

.btn {
    display: inline-block;
    padding: 10px 15px;
    font-size: 14px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3;
}

</style>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

    <div class="flex justify-center mt-16 py-3">
    <div class="overflow-x-auto w-full max-w-3xl">

        <div class="order-deg">

        <form action="{{url('confirm_order')}}" method="POST">

          @csrf

            <div class="div-gap">
            <label>Reciever Name</label>
            <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>

            <div class="div-gap">
            <label>Reciever Address</label>
            <textarea name="address">{{Auth::user()->name}}</textarea>
            </div>

            <div class="div-gap">
            <label>Reciever Phone</label>
            <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>

            <div class="div-gap">
            <input class="btn btn-primary" type="submit" value="Place Order">
            </div>
          
        </form>
        </div>
         
            <br>

        <table class="table w-full table-zebra border border-black">
            <thead>
                <tr>
                    <th class="bg-gray-200 border border-black">Product Title</th>
                    <th class="bg-gray-200 border border-black">Price</th>
                    <th class="bg-gray-200 border border-black">Image</th>
                    <th class="bg-gray-200 border border-black">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $value = 0;
                ?>

                @foreach($cart as $cartItem)
                <tr class="border border-black">
                    <td class="border border-black">{{ $cartItem->product->title }}</td>
                    <td class="border border-black">{{ $cartItem->product->price }}</td>
                    <td class="border border-black">
                        @if($cartItem->product && $cartItem->product->image)
                            <img width="100px" height="100px" style="object-fit: cover;" src="/products/{{$cartItem->product->image}}" alt="{{ $cartItem->product->title }}" class="w-16 h-16 rounded-lg">
                        @else
                            No image available
                        @endif
                    </td>
                    <td class="border border-black">
                        <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger px-4 py-2 rounded-lg">Remove</button>
                        </form>
                    </td>
                </tr>

                <?php
                    $value += $cartItem->product->price;
                ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<div class="cart_value">
    <h3>Total value of Cart is : ${{$value}}</h3>
</div>


  <!-- end contact section -->

   

  <!-- info section -->

  @include('home.footer')


  <!-- end info section -->


  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>