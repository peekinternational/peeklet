<!-- <div class="{{ isset($theme['theme']['value'])?$theme['theme']['value']:'ls' }}">
    <footer class="page_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    @foreach($navs as $nav)
                        @if(!in_array($nav->slug,['blog','home','about-us']))
                            @if($nav->slug=='shop')
                            <div class="a-footer-menu a-heading-shop">
                               <ul>
                                    <li class="a-menu-heading"><a href="{{ action('ProductController@index') }}">{{ $nav->title }}</a></li>
                                    @foreach($nav->sub_navs as $sub_nav)
                                        <li><a href="{{ url('/shop/'.$sub_nav->slug) }}">{{ $sub_nav->title }}</a></li>
                                   @endforeach
                                </ul>
                            </div>
                            @else
                                @if($nav->sub_navs->count()>0)
                                    <div class="a-footer-menu a-heading-eat">
                                        <ul>

                                            <li class="a-menu-heading"><a href="#">{{ $nav->title }}</a></li>
                                                @foreach($nav->sub_navs as $sub_nav)
                                                    <?php
                                                    $url = '#';
                                                    if(isset($sub_nav->page->slug)){
                                                        $url = url($sub_nav->page->slug.'/page');
                                                    }
                                                    if(!empty($sub_nav->url) && filter_var($sub_nav->url,FILTER_VALIDATE_URL) == true){
                                                        $url = $sub_nav->url;
                                                    }
                                                    ?>
                                                    <li><a href="{{ $url }}">{{ $sub_nav->title }}</a></li>
                                                @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @endif
                        @endif
                    @endforeach
                            {{--<div class="a-footer-menu a-heading-eat">
                                <ul>
                                    <li class="a-menu-heading"><a href="#">Eat</a></li>
                                    <li><a href="#">Cafe</a></li>
                                    <li><a href="#">Functions</a></li>
                                    <li><a href="#">Catering</a></li>
                                    <li><a href="#">Recipes</a></li>
                                </ul>
                            </div>
                            <div class="a-footer-menu a-heading-play">
                                <ul>
                                    <li class="a-menu-heading"><a href="#play">Play</a></li>
                                    <li><a href="#">Soft Play</a></li>
                                    <li><a href="#">Birthday Parties</a></li>
                                    <li><a href="#">Outdoor Animals</a></li>
                                    <li><a href="#">Outdoor Play</a></li>
                                </ul>
                            </div>
                            <div class="a-footer-menu a-heading-rest">
                                <ul>
                                    <li class="a-menu-heading"><a href="#">Rest</a></li>
                                    <li><a href="#">Bunkhouse</a></li>
                                    <li><a href="#">Wigwams</a></li>
                                    <li><a href="#">Video button </a></li>
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Awards</a></li>
                                    <li><a href="#">Newsletter Sign Up </a></li>
                                    <li><a href="#">Offers/Special Events</a></li>
                                </ul>
                            </div>
                            <div class="a-footer-menu a-heading-walk">
                                <ul>
                                    <li class="a-menu-heading"><a href="#">Walk</a></li>
                                    <li><a href="#">John Muir Way</a></li>
                                </ul>
                            </div>--}}
                           

                </div> 
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="widget widget_mailchimp">
                        <h3 class="widget-title" style="margin-bottom: 10px">Newsletter</h3>
                        <p class="widget_mailchimp__text">Subscribe to our Newsletter right now to be updated. We promice not to spam!</p>
                        {!! Form::open(['action'=>['SubscriberController@store'],'method'=>'post','class'=>'signup']) !!}
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Subscribe</button>
                            </div>
                            {{--<div class="form-group">
                                <input name="email" type="email" class="mailchimp_email form-control" placeholder="Full Name">
                            </div>

                            <button type="submit" class="widget_mailchimp__button">Subscribe</button>
                            <div class="response"></div>--}}
                       {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </footer>
</div> 
<footer>--><!-- start footer -->
    <div style="background-color: #100f0f;">
            <div class="container">
                <div class="row top-footer-row" style="padding: 45px 0px;">
                    <div class="col-md-offset-2 col-md-3 first-col hidden-xs">
                         <a><img src="{{ asset('assets/images/logo2.png') }}" style="width: 22%;"></a>
                         <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                        <ul class="list-inline ">
                           @if(isset($site['facebook']['value']) && (!isset($site['hide_facebook']['value']) || $site['hide_facebook']['value']!='1'))
                          <li>
                              <a href="{{ $site['facebook']['value'] }}">
                                  <i class="fa fa-facebook-f"></i>
                              </a>
                          </li>
                          @endif
                        @if(isset($site['twitter']['value']) && (!isset($site['hide_twitter']['value']) || $site['hide_twitter']['value']!='1'))
                          <li>
                              <a href="{{ $site['twitter']['value'] }}">
                                  <i class="fa fa-twitter"></i>
                              </a>
                          </li>
                              @endif
                        @if(isset($site['google_plus']['value']) && (!isset($site['hide_google_plus']['value']) || $site['hide_google_plus']['value']!='1'))
                          <li>
                              <a href="{{ $site['google_plus']['value'] }}">
                                  <i class="fa fa-google-plus"></i>
                              </a>
                          </li>
                          @endif
                        @if(isset($site['instagram']['value']) && (!isset($site['hide_instagram']['value']) || $site['hide_instagram']['value']!='1'))
                          <li>
                              <a href="{{ $site['instagram']['value'] }}">
                                  <i class="fa fa-instagram"></i>
                              </a>
                          </li>
                          @endif
                        @if(isset($site['youtube']['value']) && (!isset($site['hide_youtube']['value']) || $site['hide_youtube']['value']!='1'))
                            <li>
                          <li>
                              <a href="{{ $site['youtube']['value'] }}">
                                  <i class="fa fa-youtube"></i>
                              </a>
                          </li>
                       @endif
                        @if(isset($site['skype']['value']) && (!isset($site['hide_skype']['value']) || $site['hide_skype']['value']!='1'))
                            <li>
                                <a href="skype:{{$site['skype']['value']}}">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                          @endif
                        @if(isset($site['tripadvisor']['value']) && (!isset($site['hide_tripadvisor']['value']) || $site['hide_tripadvisor']['value']!='1'))
                            
                        @endif
                        </ul>
                    </div>
                    <div class="col-md-3 second-col hidden-xs">
                        <h4 style="color: white;"> Information</h4>
                        <div class="row">
                            <div class="col-md-6" style="">
                                <ul class="">
                                  
                                  <li><a href="{{url('category/women')}}">Women</a></li>
                                 </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="">
                                  

                                  <li><a href="{{url('category/men')}}">Men</a></li>
                                  <li><a href="{{url(''category/bags'')}}">Bags</a></li>
                                </ul>
                            </div>
                        </div>  
                    </div>   
                    <div class="col-md-2 tags-section hidden-xs">
                     
                        <h4 style="color: white;"> Tags</h4>
                          <a href="{{url('shop/wall-art')}}" class="label label-art">Jackest</a>
                          <a href="{{url('category/furniture')}}" class="label label-men">Bags</a>
                         
                    </div>
                    <div class="col-md-2">
                        <div class="last-column">
                  <h4>Newsletter</h4>
                      {!! Form::open(['action'=>['SubscriberController@store'],'method'=>'post','class'=>'signup']) !!}
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block">Subscribe</button>
                            </div>
                            {{--<div class="form-group">
                                <input name="email" type="email" class="mailchimp_email form-control" placeholder="Full Name">
                            </div>

                            <!-- <button type="submit" class="widget_mailchimp__button " s>Subscribe</button> -->
                            <div class="response"></div>--}}
                       {!! Form::close() !!}
                </div>
                    </div>
                </div>
            </div>
    </div>
    <div style="background-color: black;">
        <div class="container hidden-xs">
            <div class="row footer" style="padding: 0px 0px;">
                <div class="col-md-4">
                    <div class="foter-icons">
                        <i class="fa fa-cc-visa"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-amex"></i>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 12px ;
">
                    <p  class ="text-center"   style="font-size: 14px; margin-bottom:0px">&copy; 
                        <?php
                                           $copyYear = 2018; // Set your website start date
                                           $curYear = date('Y'); // Keeps the second year updated
                                           echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                                           ?> Copyright.Peek let&nbsp;
                    </p>
                </div>
               
                <div class="col-md-4 hidden-xs">
                   
                    <p class="text-center" style="    padding: 10px 0px; font-size: 14px; margin-right: 12px; margin-bottom: 0px;"> Powered by:<a href=" http://peekinternational.com/" class="text-primary"> Peek International</a></p>
                    
                </div>
                
                </div>
            </div>
        </div>

    </div>
</footer>