@extends('master')
@section('title', 'Home Page')
@section('breadcrumb')
    @include('partials/breadcrumb')
@stop
@section('content')

    <div class="{{ isset($theme['theme']['value'])?$theme['theme']['value']:'ls' }} section_padding_top_120 section_padding_bottom_85">
        <div class="container responsive">
            <div class="row">
                 @include('partials/sidebar')
                 
                <div class="col-sm-8 col-md-9 col-lg-9" style="margin-left: 10px;">
                    @if($products->count()>0)

                 <div class="shop-sorting hidden-xs">

                     
                        <ul class="breadcrumb" style="float: left !important;">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li><a class="wrap-title" href="">{{$products[0]->category->name }}</a></li>
                      </ul>
                     <a href="#" id="toggle_shop_view" class="" style="float: right!important;"></a>
                    
                </div>

                  <ul id="products" class="products list-unstyled grid-view">
                    @foreach($products as $product)


                        <li class="shop-item product type-product item-list">

                            <div class="side-item box">
                                <figure class="item-media shop-item__img">
                                    <a href="{{ url('product/'.$product->slug) }}">
                                        <?php
                                            $first_image = $product->images->first()->image;
                                            $image = 'no-image.png';
                                                if(isset($first_image) && !empty($first_image)){
                                                    $image = 'products/'.$first_image;
                                                }
                                        ?>
                                    <div class="image-list">
                                        <img src="{{  asset('assets/images/'.$image) }}" alt="{{ $product->name }}" style="width: 100%; height: 100%;
                                             ">
                                    </div>
                                    </a>
                                </figure>
                                <div class="shop-item__content" style="padding: 0">
                                    <h3 class="shop-item__title">
                                        <a class="wrapping-txt" href="{{ url('/product/'.$product->slug) }}">{{ $product->name }}</a>
                                    </h3>
                                    <!-- <div class="shop-item__meta-list">
                                        
                                    </div> -->
                                    <div class="items-name" style="float: none;">
                                         @if($product->tags->count()>0)
                                         <a class="shop-item__meta-tag" href="#">{{ $product->category->name }}</a>
                                         @endif
                                        {{-- <div class="star-rating" title="Rated 4.00 out of 5">
                                                     <span style="width:80%">
                                                         <strong class="rating">4.00</strong> out of 5
                                                     </span>
                                         </div>--}}
                                       
                                     <p class="shop-item__price">
                                     
                                @if($product->p_price)
                                @if($product->dim_offer)
                               
                                 <span class="amount" id="show_price" style="color: gray !important; font-size: 26px;">&euro;<strike><small>{{ $product->p_price }}</small></strike></span> -
                                 <span class="amount" id="show_price" style="color: gray !important; font-size: 26px;">&euro;{{ $product->dimoffer_price  }}</span><br>
                                @else
                                  <span class="amount" id="show_price" style="color: gray !important; font-size: 26px;">&euro;{{ $product->p_price }}</span><br>
                                 @endif
                                 @else
                                 
                                        @if($product->offer)
                                        <span class="amount  pro-prce" style="color: gray !important; font-size: 26px;">&euro;<strike><small>{{ $product->price }}</small></strike></span>
                                        <span class="amount" style="color: gray !important; font-size: 26px;">&euro;{{ $product->saleprice }}</span>
                                        @else
                                            <span class="amount  pro-prce" style="color: gray !important; font-size: 26px;">&euro;{{ $product->price }}</span>
                                        @endif
                                        @endif
                                         
                                        </p>
                                    <!-- <p class="shop-item__desc">
                                       {{ $product->details }}
                                    </p> -->
                                </div>
                                <!-- <div>
                                    <span class="shop-item__price">
                                            <span>
                                                <span class="amount">&euro; {{ $product->price  }}</span>
                                            </span>
                                        </span>
                                </div> -->
                                   
                                </div>
                            </div>
                        </li>
                        @endforeach
                     </ul>
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            @if(isset($_GET['q']))
                                 {{ $products->appends(['q' => $_GET['q']])->links('vendor.pagination.default') }}
                            @else
                                {{ $products->links('vendor.pagination.default') }}
                            @endif
                        </div>
                    </div>
                    @else
                        <div class="alert alert-info text-center lead">
                            Products Not Found
                        </div>
                    @endif

                    
                </div>
               
         </div>
            <!-- enfd -->
    </div>
</div>

@stop


@section('scripts')
<!--=================Scroll with Menu================-->
    <script>

        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();
                    // Store hash
                    var hash = this.hash;
                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
            $(window).scroll(function() {
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;
                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>
    <script>
         var owl = $('.product-carousel ');
        owl.owlCarousel({
            items:10,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })

    </script>
@stop