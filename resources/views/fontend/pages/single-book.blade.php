
@extends("fontend.layouts.fontend")
@section('single-video')
    single-video
@endsection
@section('meta')
    <meta property="og:title" content="{{$book->name}}" />
  <meta property="og:url" content="{{Request::fullUrl()}}" />
  <meta property="og:image" content="{{URL::to($book->image)}}" />
  <meta property="og:description" content="$book->description" />
  <meta property="og:site_name" content="ShareThis" />
@endsection
@section("wrapper")
<div class="container-fluid hidden-xs">
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
                            <a href="#"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked Videos"></i></a>
                            <a href="#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                            <a href="#"><i class="cv cvicon-cv-play-circle" data-toggle="tooltip" data-placement="top" title="Saved Playlist"></i></a>
                            <a href="#"><i class="cv cvicon-cv-purchased" data-toggle="tooltip" data-placement="top" title="Purchased Videos"></i></a>
                            <a href="#"><i class="cv cvicon-cv-history" data-toggle="tooltip" data-placement="top" title="History"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-10 hidden-xs">
                        <div class="h-resume">
                            <div class="play-icon">
                                <a href="#"><i class="cv cvicon-cv-play"></i></a>
                            </div>
                            Resume:  <span class="color-default">Daredevil Season 2 : Episode 6 </span>
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
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12 col-sm-12">
                <div class="sv-video">
                    <img src="{{ asset($book->image) }}" class="img-fluid"style="width:100%;height:100%;"  width="100%" height="100%" >
                    <!-- <video poster="{{ asset($book->image) }}" style="width:100%;height:100%;" controls="controls" width="100%" height="100%">
                        <source src="{{ asset('fontend') }}/assets/videos/video-1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
                    </video> -->
                    <!-- <span class="sv-play"><i class="cv cvicon-cv-play"></i></span> -->
                </div>
                <h1><a href="#">{{$book->title}}</a></h1>
                <div class="acide-panel acide-panel-top">
                    <a href="#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                    <a href="#"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked"></i></a>
                    <a href="#"><i class="cv cvicon-cv-flag" data-toggle="tooltip" data-placement="top" title="Flag"></i></a>
                </div>
                <div class="author">
                    <div class="author-head">
                        <a href="#"><img src="{{ asset($book->user->profile_photo_path) }}" alt="" class="sv-avatar"></a>
                        <div class="sv-name">
                            <div><a href="">{{$book->user->name}}</a> </div>
                            <div class="c-sub hidden-xs">
                                <div class="c-f">
                                   @if( Route::has('login'))
                                        @auth
                                        @php
                                        $subscrive = App\Models\UserSubscrive::where('user_id',Auth::user()->id)->where('subscrive_user_id',$book->user->id)->count();
                                        @endphp
                                        @if($subscrive > 0)
                                        <a href="{{route('user.un.subscribe',[Auth::user()->id,$book->user->id])}}" class="sub-a">Subscribed</a>
                                        @else
                                        @if($book->user->id == Auth::user()->id)
                                        Subscribe
                                        @else
                                        <a href="{{route('user.subscribe',$book->user->id)}}" class="sub-a">Subscribe</a>
                                        @endif
                                        @endif
                                    
                                    @else
                                    Subscribe
                                    @endif

                                    @endif
                                </div>
                                <div class="c-s">
                                    @php
                                        $subscrive = App\Models\UserSubscrive::where('subscrive_user_id',$book->user->id)->count();
                                    @endphp
                                    {{$subscrive}}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <a href="#" class="author-btn-add"><i class="cv cvicon-cv-plus"></i></a>
                    </div>
                    <div class="author-border"></div>
                    <div class="sv-views">
                        <div class="sv-views-count">
                            <div class="sv-views-stats">
                            <!-- <span class="percent">Videos</span>
                            <span class="green"><span class=""></span> 39,852</span> -->
                            
                        </div>
                        </div>
                        <!-- <div class="sv-views-progress">
                            <div class="sv-views-progress-bar"></div>
                        </div> -->
                        <div class="sv-views-stats">
                            <span class="green"><span class=""></span> 39,852</span>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="info">
                    <div class="custom-tabs">
                        <div class="tabs-panel">
                            <a href="#" class="active" data-tab="tab-1">
                                <i class="cv cvicon-cv-about" data-toggle="tooltip" data-placement="top" title="About"></i>
                                <span>About</span>
                            </a>
                            <a href="#" data-tab="tab-2">
                                <i class="cv cvicon-cv-share" data-toggle="tooltip" data-placement="top" title="Share"></i>
                                <span>Share</span>
                            </a>
                            <a href="{{route('book.download',$book->slug)}}" data-tab="tab-3">
                                <i class="cv cvicon-cv-download" data-toggle="tooltip" data-placement="top" title="Download"></i>
                                <span>Download</span>
                            </a>
                            
                            <a href="#" data-tab="tab-5">
                                <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to"></i>
                                <span>Add to</span>
                            </a>
                            @if( Route::has('login'))
                                        @auth
                                        
                            <div class="acide-panel hidden-xs">
                                 <a href="#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                                 @php 
                                    $like = App\Models\LikeBook::where('user_id',Auth::user()->id)->where('book_id',$book->id)->count();
                                 @endphp
                                 @if($like > 0)
                                 <a href="{{route('unlike.book',[$book->id,$book->user->id])}}"><i class="cv cvicon-cv-liked" style="color: red!important" data-toggle="tooltip" data-placement="top" title="Liked"></i></a>
                                 @else
                                
                                 <a href="{{route('like.book',[$book->id,$book->user->id])}}"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Like"></i></a>
                                 
                                 @endif
                            </div>
                            @endif
                            @endif
                        </div>
                        <div class="clearfix"></div>

                        <!-- BEGIN tabs-content -->
                        <div class="tabs-content">
                            <!-- BEGIN tab-1 -->
                            <div class="tab-1">
                                <div>
                                    

                                    <h4>Category :</h4>
                                    <p>
                                    
                                    </p>

                                    <h4>About :</h4>
                                    <p>{!!$book->description!!}</p>

                                    <h4>Tags :</h4>
                                    <p class="sv-tags">
                                        @foreach($book->bookTags as $tag)
                                        <span><a href="#">{{$tag->tag_name}}</a></span>
                                        @endforeach
                                    </p>

                                    <div class="row date-lic">
                                        <div class="col-xs-6">
                                            <h4>Release Date:</h4>
                                            <p>{{$book->created_at->diffForHumans()}}</p>
                                        </div>
                                        <!-- <div class="col-xs-6 ta-r">
                                            <h4>License:</h4>
                                            <p>Standard</p>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="hidden-xs">
                                    <h4>Game:</h4>
                                    <p>Uncharted 4</p>
                                    <a href="#">
                                        <img src="{{ asset('fontend') }}/assets/images/tab-1-img-1.jpg" alt="image">
                                    </a>
                                    <a href="#" class="btn">Purchase</a>
                                </div> -->
                                <div class="clearfix"></div>
                                <!-- <div class="showless hidden-xs">
                                    <a href="#">Show Less</a>
                                </div> -->
                            </div>
                            <!-- END tab-1 -->

                            <!-- BEGIN tab-2 -->
                            <div class="tab-2">
                                <h4>Share:</h4>
                                <div class="social">
                                    <div class="sharethis-inline-share-buttons"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <h4>Link:</h4>
                                        <label class="clipboard">
                                            <input type="text" name="#" class="share-link" value="{{Request::fullUrl()}}" readonly>
                                            <div class="btn-copy" data-clipboard-target=".share-link">Copy</div>
                                        </label>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="tab-popup popup-share">
                                    <div class="tab-popup-head">
                                        <i class="cv cvicon-cv-share"></i>
                                        <span>Share this video</span>
                                        <a href="#" class="tab-popup-close"><i class="cv cvicon-cv-cancel"></i></a>
                                    </div>
                                    <div class="tab-popup-content">
                                        <h4>Copy Link:</h4>
                                        <label class="clipboard">
                                            <input type="text" name="#" class="share-link" value="http://youtu.be/DwGgdfe-C6c" readonly>
                                            <div class="btn-copy" data-clipboard-target=".share-link">Copy</div>
                                        </label>
                                    </div>
                                    <div class="tab-popup-content">
                                        <div class="popup-share-social">
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                                <span>Facebook</span>
                                            </a>
                                            <a href="#" class="twitter">
                                                <i class="fa fa fa-twitter" aria-hidden="true"></i>
                                                <span>Twitter</span>
                                            </a>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                <span>Google Plus</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END tab-2 -->

                            <!-- BEGIN tab-3 -->
                            <div class="tab-3">
                                <h4>Download:</h4>
                                <div class="tags-type2">
                                    <a href="{{route('book.download',$book->id)}}"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>Download</a>
                                    <a href="{{$book->link_dropbox}}" target="_blank"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>Dropbox</a>
                                    <a href="{{$book->link_g_drive}}" target="_blank"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>Google Drive</a>
                                </div>
                                
                            </div>
                            <!-- END tab-3 -->

                            <!-- BEGIN tab-4 -->
                            <div class="tab-4">
                                <h4>Jump to:</h4>
                                <div class="block-list">
                                    <div>
                                        <span class="name">Introduction</span>
                                        <span class="time">0:00 - 2:16</span>
                                    </div>
                                    <div>
                                        <span class="name">Gameplay</span>
                                        <span class="time">2:17 - 3:19</span>
                                    </div>
                                    <div class="active">
                                        <span class="name">Cut Scene</span>
                                        <span class="time">3:20 - 8:33</span>
                                    </div>
                                    <div>
                                        <span class="name">Review</span>
                                        <span class="time">8:34 - 9:27</span>
                                    </div>
                                    <div>
                                        <span class="name">Overall Rating</span>
                                        <span class="time">9:28 - 11:06</span>
                                    </div>
                                </div>
                                <div class="tab-popup popup-jump">
                                    <div class="tab-popup-head">
                                        <i class="cv cv cvicon-cv-goto"></i>
                                        <span>Jump to</span>
                                        <a href="#" class="tab-popup-close"><i class="cv cvicon-cv-cancel"></i></a>
                                    </div>
                                    <div class="tab-popup-content">
                                        <div class="block-list">
                                            <div>
                                                <span class="name">Introduction</span>
                                                <span class="time">0:00 - 2:16</span>
                                            </div>
                                            <div>
                                                <span class="name">Gameplay</span>
                                                <span class="time">2:17 - 3:19</span>
                                            </div>
                                            <div class="active">
                                                <span class="name">Cut Scene</span>
                                                <span class="time">3:20 - 8:33</span>
                                            </div>
                                            <div>
                                                <span class="name">Review</span>
                                                <span class="time">8:34 - 9:27</span>
                                            </div>
                                            <div>
                                                <span class="name">Overall Rating</span>
                                                <span class="time">9:28 - 11:06</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END tab-4 -->

                            <!-- BEGIN tab-5 -->
                            <div class="tab-5">
                                <h4>Add to Playlist:</h4>
                                <div class="block-list">
                                    <div>
                                        <i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i>
                                        <span class="name">Watch Later</span>
                                        <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                    </div>
                                    <div>
                                        <i class="cv cvicon-cv-playlist" data-toggle="tooltip" data-placement="top" title="Playlist"></i>
                                        <span class="name">Gameplay Playlist</span>
                                        <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                    </div>
                                    <div class="active">
                                        <i class="cv cvicon-cv-playlist" data-toggle="tooltip" data-placement="top" title="Playlist"></i>
                                        <span class="name">Review Videos</span>
                                        <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                    </div>
                                    <div>
                                        <i class="cv cvicon-cv-playlist" data-toggle="tooltip" data-placement="top" title="Playlist"></i>
                                        <span class="name">Tech Updates</span>
                                        <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                    </div>
                                    <div>
                                        <i class="cv cvicon-cv-add-to-playlist" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                        <span class="name">Create New Playlist</span>
                                    </div>
                                </div>
                                <div class="tab-popup popup-add">
                                    <div class="tab-popup-head">
                                        <i class="cv cvicon-cv-plus"></i>
                                        <span>Add to</span>
                                        <a href="#" class="tab-popup-close"><i class="cv cvicon-cv-cancel"></i></a>
                                    </div>
                                    <div class="tab-popup-content">
                                        <div class="block-list">
                                            <div>
                                                <i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i>
                                                <span class="name">Watch Later</span>
                                                <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                            </div>
                                            <div>
                                                <i class="cv cvicon-cv-playlist" data-toggle="tooltip" data-placement="top" title="Playlist"></i>
                                                <span class="name">Gameplay Playlist</span>
                                                <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                            </div>
                                            <div class="active">
                                                <i class="cv cvicon-cv-playlist" data-toggle="tooltip" data-placement="top" title="Playlist"></i>
                                                <span class="name">Review Videos</span>
                                                <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                            </div>
                                            <div>
                                                <i class="cv cvicon-cv-playlist" data-toggle="tooltip" data-placement="top" title="Playlist"></i>
                                                <span class="name">Tech Updates</span>
                                                <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                            </div>
                                            <div>
                                                <i class="cv cvicon-cv-add-to-playlist" data-toggle="tooltip" data-placement="top" title="Add to Playlist"></i>
                                                <span class="name">Create New Playlist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END tab-5 -->
                        </div>
                        <!-- END tabs-content -->
                    </div>

                    <div class="content-block head-div head-arrow head-arrow-top visible-xs">
                        <div class="head-arrow-icon">
                            <i class="cv cvicon-cv-next"></i>
                        </div>
                    </div>

                    <div class="adblock2">
                        <div class="img">
                            <span class="hidden-xs">
                                Google AdSense<br>728 x 90
                            </span>
                            <span class="visible-xs">
                                Google AdSense 320 x 50
                            </span>
                        </div>
                    </div>

                    <!-- similar videos -->
                    <div class="caption hidden-xs">
                        <div class="left">
                            <a href="#">Similar Books</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="single-v-footer">
                        <div class="single-v-footer-switch">
                            <a href="#" class="active" data-toggle=".similar-v">
                                <i class="cv cvicon-cv-play-circle"></i>
                                <span>Similar Books</span>
                            </a>
                            <a href="#" data-toggle=".comments">
                                <i class="cv cvicon-cv-comment"></i>
                                <span>236 Comments</span>
                            </a>
                        </div>
                        <div class="similar-v single-video video-mobile-02">
                            <div class="row">
                                @forelse(App\Models\Book::where('title', 'LIKE' ,$book->title)->where('id', '!=' ,$book->id)->get()->take(3) as $insBook)
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="h-video row">
                                        <div class="col-sm-12 col-xs-6">
                                            <div class="v-img">
                                                <a href="{{route('home.book.details',[$insBook->id,$insBook->slug])}}"><img src="{{asset($insBook->image)}}" alt=""></a>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-6">
                                            <div class="v-desc">
                                                <a href="{{route('home.book.details',[$insBook->id,$insBook->slug])}}">{{$insBook->title}}</a>
                                            </div>
                                            <div class="v-views">
                                                Free
                                            </div>
                                            <div class="v-views"> <span style="color: blue;">{{$insBook->download}} Download</span> </div>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse
                                
                            </div>
                        </div>
                        <!-- END similar videos -->

                        <!-- comments -->
                        <div class="comments">
                            <div class="reply-comment">
                                <div class="rc-header"><i class="cv cvicon-cv-comment"></i> <span class="semibold">{{$commentscount}}</span> Comments</div>
                                <div class="rc-ava"><a href="#"><img src="images/ava5.png" alt=""></a></div>
                                <div class="rc-comment">
                                    @if( Route::has('login'))
                                        @auth
                                            <form action="{{route('book.comment.store')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="book_id" value="{{$book->id}}">
                                                <textarea rows="3" name="comment">Share what you think?</textarea >
                                                <button type="submit">
                                                    <i class="cv cvicon-cv-add-comment"></i>
                                                </button>
                                            </form>
                                            @endif
                                        @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="comments-list">

                                <div class="cl-header">
                                    <div class="c-nav">
                                        <ul class="list-inline">
                                            <li><a href="#" class="active">Popular <span class="hidden-xs">Comments</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>

                                <!-- comment -->
                                @foreach($comments as $commnet)
                                <div class="cl-comment">
                                    <div class="cl-avatar"><a href="{{route('home.user.details',[$commnet->user->id,$commnet->user->slug])}}"><img src="{{ asset($commnet->user->profile_photo_path) }}" alt="" style="width:70px;height 62px; border-radius: 50%;"></a></div>
                                    <div class="cl-comment-text">
                                        <div class="cl-name-date"><a href="{{route('home.user.details',[$commnet->user->id,$commnet->user->slug])}}">{{$commnet->user->name}}</a> . {{$commnet->created_at->diffForHumans()}}</div>
                                        <div class="cl-text">{{$commnet->comment}}</div>
                                        <div class="cl-meta"><span class="green"><span class="fa fa-thumbs-up"></span> 121</span> </div>
                                        
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                @endforeach
                                <!-- END comment -->

                                <div class="row hidden-xs">
                                    <div class="col-lg-12">
                                        <div class="loadmore-comments">
                                            <div class="d-felx justify-content-center">

                                                {{ $comments->links('pagination::bootstrap-4') }}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END comments -->
                    </div>
                </div>
                <div class="content-block head-div head-arrow visible-xs">
                    <div class="head-arrow-icon">
                        <i class="cv cvicon-cv-next"></i>
                    </div>
                    <div class="adblock2 adblock2-v2">
                        <div class="img">
                            <span>Google AdSense 300 x 250</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right column -->
            <div class="col-lg-4 col-xs-12 col-sm-12 hidden-xs">

                <!-- up next -->
                <div class="caption">
                    <div class="left">
                        <a href="#">Popular Book</a>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="list">
                    @forelse(App\Models\Book::where('user_id',$book->user_id)->where('id', '!=' ,$book->id)->get() as $insBook)
                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="{{route('home.book.details',[$insBook->id,$insBook->slug])}}"><img src="{{asset($insBook->image)}}" alt=""></a>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="{{route('home.book.details',[$insBook->id,$insBook->slug])}}">{{$insBook->title}}</a>
                            </div>
                            <div class="v-views">
                                Free
                            </div>
                            <div class="v-views"> <span style="color: blue;">{{$insBook->download}} Download</span> </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @empty
                    <h4>No book found</h4>
                    @endforelse

                   
                </div>
                <!-- END up next -->

                <div class="adblock">
                    <div class="img">
                        Google AdSense<br>
                        336 x 280
                    </div>
                </div>

                <!-- Recomended Videos -->
                <div class="caption">
                    <div class="left">
                        <a href="#">Recomended Book</a>
                    </div>
                    <!-- <div class="right">
                        <a href="#">Autoplay <i class="cv cvicon-cv-btn-off"></i></a>
                    </div> -->
                    <div class="clearfix"></div>
                </div>
                <div class="list">
                    @forelse(App\Models\Book::where('title', 'LIKE' ,$book->title)->orWhere('id', 'LIKE' ,$book->id)->where('id', '!=' ,$book->id)->get()->take(10) as $insBook)
                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="{{route('home.book.details',[$insBook->id,$insBook->slug])}}"><img src="{{asset($insBook->image)}}" alt=""></a>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="{{route('home.book.details',[$insBook->id,$insBook->slug])}}">{{$insBook->title}}</a>
                            </div>
                            <div class="v-views">
                                Free
                            </div>
                            <div class="v-views"> <span style="color: blue;">{{$insBook->download}} Download</span> </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @empty
                    @endforelse
                </div>
                <!-- END Recomended Videos -->

                <!-- load more -->
                <!-- <div class="loadmore">
                    <a href="#">Show more videos</a>
                </div> -->
            </div>
        </div>
    </div>
</div>

@endsection


