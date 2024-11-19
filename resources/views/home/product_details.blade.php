<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  @include('home.css')


</head>
<style>
  .div_center{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
  }
</style>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

    <!-- product start -->
    <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>

      <div class="row">
        <div class="col-md-12">
            <div class="box">
                    <div class="div_center">
                        <img width="250px" src="/products/{{$data->image}}" alt="{{ $data->title }}">
                    </div>
                    <div class="detail-box">
                        <h6>{{ $data->title }}</h6>
                        <h6>Price   
                            <span>${{ $data->price }}</span>
                        </h6>
                    </div>

                    <div class="detail-box py-2">
                        <h6>Category: {{ $data->category }}</h6>
                        <h6>Available Quantity:  
                            <span>{{ $data->quantity }}</span>
                        </h6>
                    </div>

                    <div class="detail-box py-2">  
                            <p>{{ $data->description }}</p>
                    </div>  
            </div>
        </div>

</div>


    </div>
  </section>
       


   <!-- product end -->

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