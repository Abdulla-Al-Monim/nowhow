<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\LikeBook;
use App\Models\LikeVideo;
use App\Models\LikeDigitalstore;
use App\Models\LikeChannel;
use App\Models\LikeLibrary;
use App\Models\LikePodcast;
use App\Models\LikeTemplate;
use App\Models\LikeAudio;
use Auth;
class LikeController extends Controller

{  
    public function likeAll(){
        $libraries = LikeLibrary::latest()->where('user_id',Auth::user()->id)->with('library')->get()->take(8);
        $channels = LikeChannel::latest()->where('user_id',Auth::user()->id)->with('channel')->get()->take(8);
        $podcasts = LikePodcast::latest()->where('user_id',Auth::user()->id)->with('podcast')->get()->take(8);
        $digitalStores = LikeDigitalstore::latest()->where('user_id',Auth::user()->id)->with('digitalStore')->get()->take(8);
        return view('fontend.pages.index-like',compact('podcasts','libraries','digitalStores','channels'));
    }
     //like channel
    
    public function likeChannel($channelId,$id){
        $data = LikeChannel::insertGetId([
            'channel_id'                => $channelId,
            'user_id'                   => Auth()->User()->id,
            'like_user_id'              => $id,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    
    }
    //unlike channel
    public function unLikeChannel($channelId,$id){
        $data = LikeChannel::where('like_user_id',$id)->where('channel_id',$channelId)->where('user_id',Auth::user()->id)->first();
            $channel = LikeChannel::Find($data->id);
            $channel->delete();
        return redirect()->back();
    }

    //like Library
    public function likeLibrary($libraryId,$id){
        $data = LikeLibrary::insertGetId([
            'library_id'                => $libraryId,
            'user_id'                   => Auth()->User()->id,
            'like_user_id'              => $id,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    
    }
    //unlike Library
    public function unLikeLibrary($libraryId,$id){
        $data = LikeLibrary::where('like_user_id',$id)->where('user_id',Auth::user()->id)->where('library_id',$libraryId)->first();
       
            $like = LikeLibrary::Find($data->id);
            $like->delete();
        return redirect()->back();
    }

    //like Book
    public function likeBook($bookId,$id){
        $data = LikeBook::insertGetId([
            'book_id'                   => $bookId,
            'user_id'                   => Auth()->User()->id,
            'like_user_id'              => $id,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    
    }
    //unlike Book
    public function unLikeBook($bookId,$id){
        $data = LikeBook::where('like_user_id',$id)->where('user_id',Auth::user()->id)->where('book_id',$bookId)->first();
            $like = LikeBook::Find($data->id);
            $like->delete();
        return redirect()->back();
    }

    //like Book
    public function likeVideo($videoId,$id){
        $data = likeVideo::insertGetId([
            'video_id'                   => $videoId,
            'user_id'                   => Auth()->User()->id,
            'like_user_id'              => $id,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    
    }
    //unlike Book
    public function unLikeVideo($videoId,$id){
        $data = likeVideo::where('like_user_id',$id)->where('user_id',Auth::user()->id)->where('video_id',$videoId)->first();

            $like = likeVideo::Find($data->id);
            $like->delete();
        return redirect()->back();
    }

    //like Podcast
    public function likePodcast($podcastId,$id){
        $data = LikePodcast::insertGetId([
            'podcast_id'                   => $podcastId,
            'user_id'                   => Auth()->User()->id,
            'like_user_id'              => $id,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    
    }
    //unlike Podcast
    public function unLikePodcast($podcastId,$id){
        $data = LikePodcast::where('like_user_id',$id)->where('user_id',Auth::user()->id)->where('podcast_id',$podcastId)->first();
      
            $like = LikePodcast::Find($data->id);
            $like->delete();
        return redirect()->back();
    }

    //like Audio
    public function likeAudio($audioId,$id){
        $data = likeAudio::insertGetId([
            'audio_id'                   => $audioId,
            'user_id'                   => Auth()->User()->id,
            'like_user_id'              => $id,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    
    }
    //unlike Audio
    public function unLikeAudio($audioId,$id){
        $data = likeAudio::where('like_user_id',$id)->where('user_id',Auth::user()->id)->where('audio_id',$audioId)->first();
      
            $like = likeAudio::Find($data->id);
            $like->delete();
        return redirect()->back();
    }

    //like Digital Store
    public function likeDigitalstore($digitalsoreId,$id){
        $data = likeDigitalstore::insertGetId([
            'digital_store_id'          => $digitalsoreId,
            'user_id'                   => Auth()->User()->id,
            'like_user_id'              => $id,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    
    }
    //unlike Digital Store
    public function unLikeDigitalstore($digitalsoreId,$id){
        $data = likeDigitalstore::where('like_user_id',$id)->where('user_id',Auth::user()->id)->where('digital_store_id',$digitalsoreId)->first();
      
            $like = likeDigitalstore::Find($data->id);
            $like->delete();
        return redirect()->back();
    }

    //like Template
    public function likeTemplate($templateId,$id){
        $data = LikeTemplate::insertGetId([
            'template_id'               => $templateId,
            'user_id'                   => Auth()->User()->id,
            'like_user_id'              => $id,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    
    }
    //unlike Template
    public function unLikeTemplate($templateId,$id){
        $data = LikeTemplate::where('like_user_id',$id)->where('user_id',Auth::user()->id)->where('template_id',$templateId)->first();
      
            $like = LikeTemplate::Find($data->id);
            $like->delete();
        return redirect()->back();
    }
}
