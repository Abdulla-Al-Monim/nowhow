<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Channel;
use App\Models\ChannelComment;
use App\Models\LibraryComment;
use App\Models\PodcastComment;
use App\Models\DigitalstoreComment;
use App\Models\BookComment;
use App\Models\VideoComment;
use App\Models\AudioComment;
use App\Models\TemplateComment;

use Carbon\Carbon;
use Auth;
class CommentController extends Controller
{
    public function channelCommentStore(Request $request){
        $comment_id =  ChannelComment::insertGetId([
                'user_id'                       => Auth::user()->id,
                'channel_id'                    => $request->channel_id,
                'comment'                       =>  $request->comment,
                'created_at'                => Carbon::now(),
            ]);
        return redirect()->back();
    }

    public function libraryCommentStore(Request $request){
        $library_id =  LibraryComment::insertGetId([
            'user_id'                       => Auth::user()->id,
            'library_id'                    => $request->library_id,
            'comment'                       =>  $request->comment,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function podcastCommentStore(Request $request){
        $podcast_id =  PodcastComment::insertGetId([
            'user_id'                       => Auth::user()->id,
            'podcast_id'                    => $request->podcast_id,
            'comment'                       =>  $request->comment,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function digitalstoreCommentStore(Request $request){
        $digitalsore_id =  DigitalstoreComment::insertGetId([
            'user_id'                       => Auth::user()->id,
            'digitalstore_id'               => $request->digitalstore_id,
            'comment'                       =>  $request->comment,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function bookCommentStore(Request $request){
        $digitalsore_id =  BookComment::insertGetId([
            'user_id'                       => Auth::user()->id,
            'book_id'                       => $request->book_id,
            'comment'                       =>  $request->comment,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function videoCommentStore(Request $request){
        $video_id =  VideoComment::insertGetId([
            'user_id'                       => Auth::user()->id,
            'video_id'                       => $request->video_id,
            'comment'                       =>  $request->comment,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function templateCommentStore(Request $request){
        $video_id =  TemplateComment::insertGetId([
            'user_id'                       => Auth::user()->id,
            'template_id'                   => $request->template_id,
            'comment'                       =>  $request->comment,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }
}
