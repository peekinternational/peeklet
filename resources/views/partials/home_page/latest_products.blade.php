
    <div id="shop" class="{{ isset($theme['theme']['value'])?$theme['theme']['value']:'ls' }} section_padding_bottom_85 banners__position">
        <div class="container responsive" style="padding-left: 0; padding-right: 0;">
            
        <div class="row gallery-firstrow">
        <div class="col-md-4 col-sm-4">
            <div class="gridview-pic">
                <img src="{{ asset('assets/images/first1.jpg') }}" alt="" style="width: 100%;">
            </div>
            <div class="overlay">
           
               <a href="{{ url('shop/canvas-painting') }}" class="btn btn-lg btn-block"><span>Women</span></a>
               </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="gridview-pic">
                <img src="{{ asset('assets/images/2nd-1.jpg') }}" alt="" style="width: 100%;">
            </div>
            <div class="overlay">
               <a href="{{ url('category/car-decor') }}" class="btn btn-lg btn-block"><span>Men</span></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="gridview-pic">
                <img src="{{ asset('assets/images/first3.jpg') }}" alt="" style="width: 100%;">
            </div>
            <div class="overlay">
                <a href="{{ url('category/clocks')}}" class="btn btn-lg btn-block"><span>Bags</span></a>
            </div>
        </div>
    </div>
        <div class="row gallery-firstrow2">
        <div class="col-md-3 col-sm-3">
            <div class="gridview-pic2">
                <img src="{{ asset('assets/images/2nd-1.jpg') }}" alt="" style="width: 100%;">
            </div>
            <div class="overlay">
                <a href="{{url('category/home-goods')}}" class="btn btn-lg btn-block"><span>Belts</span></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="gridview-pic2">
                <img src="{{ asset('assets/images/2nd-2.jpg') }}" alt="" style="width: 100%;">
            </div>
            <div class="overlay">
                <a href="{{url('category/jewelry')}}" class="btn btn-lg btn-block"><span>Motorcycle</span></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="gridview-pic2">
                <img src="{{ asset('assets/images/2nd-3.jpg') }}" alt="" style="width: 100%;">
            </div>
            <div class="overlay">
                <a href="{{url('category/table-decor')}}" class="btn btn-lg btn-block"><span>Long jackets</span></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="gridview-pic2">
                <img src="{{ asset('assets/images/2nd-4.jpg') }}" alt="" style="width: 100%;">
            </div>
            <div class="overlay">
                <a href="{{url('category/wall-art')}}" class="btn btn-lg btn-block"><span> Winter Coats</span></a>
            </div>
        </div>
    </div>

           
     
      
            <!-- <div class="content-block-03" style="  padding-top: 55px;padding-bottom: 0px; text-align: center;">
                <h2 class="title-t3 text-sm-center eden-farm-text" style="margin-bottom: 10px;">Edenmill Farm</h2>
                <h2 class="title-t2 title-t2--padding text-sm-center eden-farm-text">Latest from our Shop and Smokery</h2>
            </div> -->
            <!-- featured Products sections -->
          <h3  class="title-featured text-center" style="margin-bottom: 38px;     margin-top: 38px;"> <i class="fa fa-chevron-left"></i> <span>Featured Product</span> <i class="fa fa-chevron-right"></i></h3>
           
            @foreach($latest_products2->chunk(4) as $key=>$products)
			
                <div class="row product-row">
                    @foreach($products as $pro)

                        <div class="col-md-2-5 box" style="width: 20%;">
                            <figure class="banner-01__img">
                                <a class="banner-01__img-wrapp" href="{{ url('product/'.$pro->slug) }}">
                              
                                  
                                    @if($pro->images->count() > 0 )
                                        <img style="position: relative;"  src="{{ asset('assets/images/products/'.$pro->images->first()->image) }}" alt="{{ $pro->name }}">
                                        
                                       
                                    @else
                                        <img  src="{{ asset('assets/images/no-image.png') }}" alt="{{ $pro->name }}">
                                    @endif
                                </a>
                            </figure>
                            <div class="banner-01__content">
                                <h5 class="card-dscrpt">
                                    <a href="{{ url('product/'.$pro['slug']) }}">
                                        {{ $pro->name }} <br>
                                    <span></span></a>
                                </h5>
                                
                                <p class="text-center"> €{{ $pro->price }} </p>
                                 

                            </div>
                        </div>
                       
                    @endforeach
                </div>
               
            @endforeach
            <!-- End featured Products -->
            <!-- sales items -->
           <h3  class="title-featured text-center" style="    margin-bottom: 38px;     margin-top: 38px;"> <i class="fa fa-chevron-left"></i> <span>Sales Items</span> <i class="fa fa-chevron-right"></i></h3>
                      
                      @foreach($latest_products->chunk(4) as $products)
                          <div class="row product-row">
                              @foreach($products as $key =>$product)
                             
                                  <div class="col-md-2-5 tagsss box" style="width: 20%;">

                                      <figure class="banner-01__img">
                                          <a class="banner-01__img-wrapp" href="{{ url('product/'.$product->slug) }}">
                                          
                                            
                                              @if($product->images->count() > 0)
                                                  <img style="position: relative;"  src="{{ asset('assets/images/products/'.$product->images->first()->image) }}" alt="{{ $product->name }}">
                                                   <label class="tag sales-tag">Sale
                                                   </label>
                                                
                                              @else
                                                  <img  src="{{ asset('assets/images/no-image.png') }}" alt="{{ $product->name}}">
                                              @endif
                                          </a>
                                      </figure>
                                      <div class="banner-01__content">
                                          <h5 class="card-dscrpt">
                                              <a href="{{ url('product/'.$product->slug) }}">
                                                  {{ $product->name }} <br>
                                              <span></span></a>
                                          </h5>
                                            <p class="text-center" style="margin-bottom: 0px; color: red;">{{ $product->offer }} % off</p>
                                            <p class="text-center"> <strike style="padding: 0px 8px;"><small>€{{ $product->price }}</small> </strike>
                                            <span> €{{ $product->saleprice }}</span></p>
                                          
                          
                                              
                                      </div>
                                  </div>
                                  
                              @endforeach
                          </div>
                      @endforeach
                        <!-- ending best Sellers -->
                        <!-- our Logs -->
                        <h3  class="title-featured text-center" style="    margin-bottom: 38px;     margin-top: 38px;"> <i class="fa fa-chevron-left"></i> <span>OUR bLog's</span> <i class="fa fa-chevron-right"></i></h3>
                                    @foreach($posts->chunk(5) as $products)
                                        <div class="row product-row">
                                            @foreach($products as $product)
                                                <div class="col-md-2-5 box" style="width: 20%;">
                                                    <figure class="banner-01__img">
                                                        <a class="banner-01__img-wrapp" href="{{ action('BlogController@showPost',$product->id) }}">
                                                          <!-- {!! Form::open(['route'=>['cart.update',$product->id],'method'=>'put','class'=>'single-shop-item__gty']) !!}
                                                          <div class="add_cart" >
                                                            <button class="btn block" type="submit"> ADD TO CART</button>
                                                            </div>
                                                           {!! Form::close() !!} -->
                                                          @if($product->images_data)
                                                        <img style="position: relative;"  src="{{ asset('assets/images/blog/'.$product->images_data) }}" alt="{{ $product->meta_title }}">
                                                        <label class="tag">New</label>
                                                    @else
                                                        <img  src="{{ asset('assets/images/no-image.png') }}" alt="{{ $product->meta_title }}">
                                                    @endif
                                                           
                                                        </a>
                                                    </figure>
                                                    <div class="banner-01__content">
                                                        <h5 class="card-dscrpt">
                                                            <a href="{{ action('BlogController@showPost',$product->id) }}">
                                                               {{$product->meta_title}}<br>
                                                            </a>
                                                            <a href="{{ action('BlogController@showPost',$product->id) }}"><span class="text-left" style=" font-size: 13px; display: inline-block; overflow: hidden; ;">  {!!$product->publish_at !!} |Admin</span>
                                                             <div class="blog-des">
                                                             {!!$product->post  !!}
                                                            </div>
                                                            <div class="pager">
                                                                <a href="{{ action('BlogController@showPost',$product->id) }}" class="next btn-more" style="color: white !important;">Read More</a>
                                                            </div>
                                                          </a>
                                                        </h5>
                                                            
                                                            
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                        <!-- ending our logs -->
        </div>

