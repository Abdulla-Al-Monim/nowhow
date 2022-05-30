@extends("fontend.layouts.fontend")
@section('single-video')
    single-video
@endsection
@section('meta')
    <meta property="og:title" content="{{$template->name}}" />
  <meta property="og:url" content="{{Request::fullUrl()}}" />
  <meta property="og:image" content="{{URL::to($template->image)}}" />
  <meta property="og:description" content="$template->description" />
  <meta property="og:site_name" content="ShareThis" />
@endsection
@section("wrapper")
    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Template</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========Item Details Section start Here========== -->
    <div class="item-details-section padding-top padding-bottom">
        <div class="container">
            <div class="item-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="item-desc-part">
                            <div class="item-desc-inner">
                                <div class="item-desc-thumb">
                                    <img src="{{asset($template->templateImage->image_details)}}" alt="item-img">
                                </div>
                                <div class="item-desc-content">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-details-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-details" type="button" role="tab"
                                                aria-controls="nav-details" aria-selected="true">Details</button>
                                            <button class="nav-link" id="nav-bids-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-bids" type="button" role="tab"
                                                aria-controls="nav-bids" aria-selected="false">Download</button>
                                            <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-history" type="button" role="tab"
                                                aria-controls="nav-history" aria-selected="false">Aditional</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="details-tab tab-pane fade show active" id="nav-details"
                                            role="tabpanel" aria-labelledby="nav-details-tab">

                                            <p>{!!$template->description!!}</p>
                                            <div class="author-profile d-flex flex-wrap align-items-center gap-15">
                                                <div class="author-p-thumb">
                                                    <a href="{{route('home.user.details',[$template->user->id,$template->user->slug])}}"><img
                                                            src="{{asset($template->user->profile_photo_path)}}"
                                                            alt="author-img "></a>
                                                </div>
                                                <div class="author-p-info">
                                                    <p class="mb-0">Owner</p>
                                                    <h6><a href="{{route('home.user.details',[$template->user->id,$template->user->slug])}}">{{$template->user->name}}</a></h6>
                                                </div>
                                            </div>
                                            <ul class="other-info-list">
                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Copy Link:</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        <div id="cryptoCode" class="crypto-page">
                                                            <input id="cryptoLink"
                                                                value="{{Request::fullUrl()}}"
                                                                readonly>
                                                            <div id="cryptoCopy" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Copy Address">
                                                                <span class="copy-icon">
                                                                    <i class="icofont-ui-copy" aria-hidden="true"
                                                                        data-copytarget="#cryptoLink"></i>
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Category</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        <p> {{$template->category->category_name}}</p>
                                                    </div>

                                                </li>
                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Sub categoy</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        <p>{{$template->subCategory->templete_sub_category_name}}</p>
                                                    </div>
                                                </li>

                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Tags</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        
                                                        <p>@foreach($template->tags as $tag)
                                                            {{$tag->templete_tag_name}}
                                                        @endforeach</p>
                                                         
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bids-tab tab-pane fade" id="nav-bids" role="tabpanel"
                                            aria-labelledby="nav-bids-tab">
                                            <div class="item-details-countdown">
                                                <h4>Download</h4>
                                                <ul class="item-countdown-list count-down" data-date="June 05, 2022 21:14:01">
                                                    <li><a href="{{$template->link_g_drive}}" target="_blank">
                                                        <span class="count-txt" style="margin-top: 20px;">
                                                            
                                                               <i class="fa-brands fa-google-drive" style="    color: red;font-size: 20px; padding-right: 5px;"></i></i> G-Drive
                                                        </span>
                                                    </a>
                                                        
                                                        
                                                    </li>
                                                    <li>
                                                        <a href="{{$template->link_git_hub}}" target="_blank">
                                                            <span class="count-txt" style="margin-top: 20px;">
                                                            
                                                               <i class="icofont-github" style="    color: red;font-size: 20px; padding-right: 5px;"></i></i> Githib
                                                            </span>
                                                        </a>
                                                        

                                                    </li>
                                                    <li>
                                                        <a href="{{$template->link_dropbox}}" target="_blank">
                                                            <span class="count-txt" style="margin-top: 20px;">
                                                            
                                                               <i class="icofont-dropbox" style="    color: red;font-size: 20px; padding-right: 5px;"></i></i> Dropbox
                                                            </span>
                                                        </a>
                                                        
                                                        
                                                    </li>
                                                    <li>
                                                        <a href="{{route('template.download',$template->id)}}">
                                                            <span class="count-txt" style="margin-top: 20px;">
                                                            
                                                               <i class="fa fa-download" style="    color: red;font-size: 20px; padding-right: 5px;"></i></i> Dowload
                                                            </span>
                                                        </a>
                                                        
                                                    </li>
                                                </ul>
                                            </div>                                        </div>
                                        <div class="history-tab tab-pane fade" id="nav-history" role="tabpanel"
                                            aria-labelledby="nav-history-tab">
                                            <ul class="item-histo-list">
                                                <li class="histo-item">
                                                    <p>File Types :</p>
                                                    <time>HTML, CSS, SASS, JS</time>
                                                </li>
                                                <li class="histo-item">
                                                    <p>Additions :</p>
                                                    <time>Responsive <br>Documentation Included</time>
                                                </li>
                                                <li class="histo-item">
                                                    <p> Commercial License :</p>
                                                    <time><a href="">Further Information</a></time>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-buy-part">
                            <div class="nft-item-title">
                                <h3>{{$template->title}}</h3>
                                @if( Route::has('login'))
                                        @auth
                                        @php 
                                    $like = App\Models\LikeTemplate::where('user_id',Auth::user()->id)->where('template_id',$template->id)->count();
                                 @endphp
                                 @if($like > 0)
                                <div class="share-btn">
                                    <div class=" dropstart">
                                        <a class=" dropdown-toggle" href="{{route('unlike.template',[$template->id,$template->user->id])}}" title="Liked">
                                            <i class="icofont-heart" style="color: red;"></i>
                                        </a>

                                        
                                    </div>
                                </div>
                                @else
                                <div class="share-btn">
                                    <div class=" dropstart">
                                        <a class=" dropdown-toggle" href="{{route('like.template',[$template->id,$template->user->id])}}" title="Like">
                                            <i class="icofont-heart" style="color: blue;"></i>
                                        </a>

                                        
                                    </div>
                                </div>
                                @endif
                                @endif
                                @endif
                            </div>
                            <!-- <div class="item-details-countdown">
                                <h4>Ends In:</h4>
                                <ul class="item-countdown-list count-down" data-date="June 05, 2022 21:14:01">
                                    <li>
                                        <span class="days">34</span><span class="count-txt">Days</span>
                                    </li>
                                    <li>
                                        <span class="hours">09</span><span class="count-txt">Hours</span>
                                    </li>
                                    <li>
                                        <span class="minutes">32</span><span class="count-txt">Mins</span>
                                    </li>
                                    <li>
                                        <span class="seconds">32</span><span class="count-txt">Secs</span>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="item-price">
                                <h4>Price</h4>
                                @if($template->price_type == 0)
                                <p><span><i class="icofont-coins"></i> Free</p>
                                @else
                                <p><span><i class="icofont-coins"></i> {{$template->discount}} 
                                    </span>($ {{$template->price}})</p>
                                @endif
                                
                            </div>
                            <div class="buying-btns d-flex flex-wrap">
                                <a href="" class="default-btn move-right"><span>Buy</span> </a>
                                <a href="{{$template->link_live_preview}}" target="_blank" class="default-btn style-2 move-right"><span>Live Preview</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Item Details Section ends Here========== -->

@endsection