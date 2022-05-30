@extends("fontend.layouts.fontend")
@section("wrapper")
@if( Route::has('login'))
@auth
<!-- goto -->
<div class="container-fluid">
    <div class="row">
        <div class="navbar-container2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 hidden-xs">
                        <div class="goto">
                            Go to:
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-10 col-xs-12">
                        <div class="h-icons">
                            <a href="{{route('like.all')}}"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked"></i></a>
                            <a href="#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                            <a href="#"><i class="cv cvicon-cv-play-circle" data-toggle="tooltip" data-placement="top" title="Saved Playlist"></i></a>
                            <a href="#"><i class="cv cvicon-cv-purchased" data-toggle="tooltip" data-placement="top" title="Purchased Videos"></i></a>
                            <a href="#"><i class="cv cvicon-cv-history" data-toggle="tooltip" data-placement="top" title="History"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-1 col-sm-2 hidden-xs">
                        <div class="h-grid">
                            <a href="#"><i class="cv cvicon-cv-grid-view"></i></a>
                            <a href="#"><i class="cv cvicon-cv-list-view"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /goto -->

@endif
@endif

<div class="content-wrapper">
    <div class="container">
            <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide pt-5" data-ride="carousel">
                  <ol class="carousel-indicators">
                    
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{asset('fontend')}}/assets/images/slider/Banners1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('fontend')}}/assets/images/slider/Banners2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('fontend')}}/assets/images/slider/Banners3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('fontend')}}/assets/images/slider/Banners4.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
        </div>
    </div>

        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

               

                <!-- Featured Books -->
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs">Featured</span>
                                            <span class="hidden-xs">Featured Library</span>
                                        </a>
                                    </li>
                                    <li><a href="#">New Library</a></li>
                                    <li class="hidden-xs"><a href="#">Recommended For You</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content ">
                        <div class="row">
                            @forelse($libraries as $librariy)
                            <div class="col-lg-3 col-sm-6 ">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="{{route('home.library.details',[$librariy->library->id,$librariy->library->slug])}}"><img src="https://nowhow.io/public/uploads/library/thambnail/1652787657.webp" alt=""></a>
                                        
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{route('home.library.details',[$librariy->library->id,$librariy->library->slug])}}">{{$librariy->library->name}}</a>
                                    </div>
                                    <div class="v-views">
                                        @php
                                        $subscrive = App\Models\UserSubscrive::where('subscrive_user_id',$librariy->library->user->id)->count();
                                    @endphp
                                    {{$subscrive}} Subscribes. 
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h4>No Library found</h4>
                            @endforelse
                            
                        </div>
                    </div>
                </div>
                <!-- /Featured Books -->
                <!-- Featured cannel -->
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="" class="color-active">
                                            <span class="visible-xs">Featured</span>
                                            <span class="hidden-xs">Featured Channel</span>
                                        </a>
                                    </li>
                                    <li><a href="#">New Channel</a></li>
                                    <li class="hidden-xs"><a href="#">Recommended For You</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content ">
                        <div class="row">
                            @forelse($channels as $channel)
                            <div class="col-lg-3 col-sm-6">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="{{route('home.channel.details',[$channel->channel->id,$channel->channel->slug])}}"><img src="{{ asset($channel->channel->image) }}" alt=""></a>
                                        
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{route('home.channel.details',[$channel->channel->id,$channel->channel->slug])}}">{{$channel->channel->name}}</a>
                                    </div>
                                    <div class="v-views">
                                        @php
                                        $subscrive = App\Models\UserSubscrive::where('subscrive_user_id',$channel->channel->user->id)->count();
                                    @endphp
                                    {{$subscrive}} Subscribes.
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            @empty
                            <h4>No Channel found</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- /Featured channel -->
                <!-- Featured podcast -->
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs">Featured</span>
                                            <span class="hidden-xs">Featured Podcast</span>
                                        </a>
                                    </li>
                                    <li><a href="#">New Podcasts</a></li>
                                    <li class="hidden-xs"><a href="#">Recommended For You</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content ">
                        <div class="row">
                            @forelse($podcasts as $podcast)
                            <div class="col-lg-3 col-sm-6">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="{{route('home.podcast.details',[$podcast->podcast->id,$podcast->podcast->slug])}}"><img src="{{ asset($podcast->podcast->image) }}" alt=""></a>
                                        
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{route('home.podcast.details',[$podcast->podcast->id,$podcast->podcast->slug])}}">{{$podcast->podcast->name}}</a>
                                    </div>
                                    <div class="v-views">
                                        @php
                                        $subscrive = App\Models\UserSubscrive::where('subscrive_user_id',$podcast->podcast->user->id)->count();
                                    @endphp
                                    {{$subscrive}} Subscribes. 
                                    </div>
                                    
                                </div>
                            </div>
                            @empty
                            <h4>No Podcast found</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- /Featured cast -->
                <!-- Featured Digital Store -->
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs">Featured</span>
                                            <span class="hidden-xs">Featured Digitalstore</span>
                                        </a>
                                    </li>
                                    <li><a href="#">New Digitalstore</a></li>
                                    <li class="hidden-xs"><a href="#">Recommended For You</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content ">
                        <div class="row">
                            @forelse($digitalStores as $digitalStore)
                            <div class="col-lg-3 col-sm-6">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="{{route('home.digitalstore.details',[$digitalStore->digitalStore->id,$digitalStore->digitalStore->slug])}}"><img src="{{ asset($digitalStore->digitalStore->image) }}" alt=""></a>
                                        
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{route('home.digitalstore.details',[$digitalStore->digitalStore->id,$digitalStore->digitalStore->slug])}}">{{$digitalStore->digitalStore->name}}</a>
                                    </div>
                                    <div class="v-views">
                                         @php
                                        $subscrive = App\Models\UserSubscrive::where('subscrive_user_id',$digitalStore->digitalStore->user->id)->count();
                                    @endphp
                                    {{$subscrive}} Subscribes. 
                                    </div>
                                    
                                </div>
                            </div>
                            @empty
                            <h4>No Digitalstore found</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- /Featured cast -->
               

            </div>
        </div>
    </div>
</div>
@endsection