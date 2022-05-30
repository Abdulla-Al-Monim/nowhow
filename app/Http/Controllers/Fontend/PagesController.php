<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Channel;
use App\Models\Podcast;
use App\Models\PodcastTag;
use App\Models\Library;
use App\Models\DigitalStore;
use App\Models\DigitalstoreTag;
use App\Models\Video;
use App\Models\BookImage;
use App\Models\BookTag;
use App\Models\ChannelVideo;
use App\Models\ChannelTag;
use App\Models\PodcastAudio;
use App\Models\DigitalStoreTemplate;
use App\Models\LibraryBook;
use App\Models\LibraryTag;
use App\Models\Template;
use App\Models\Audio;
use App\Models\User;
use App\Models\ChannelComment;
use App\Models\LibraryComment;
use App\Models\PodcastComment;
use App\Models\DigitalstoreComment;
use App\Models\BookComment;
use App\Models\VideoComment;
use App\Models\AudioComment;
use App\Models\TemplateComment;
use Auth;
class PagesController extends Controller
{
    public function index(){
        $books = Book::latest()->get()->take(8);
        $videos = Video::latest()->get()->take(8);
        $audios = Audio::latest()->get()->take(8);
        $templates = Template::latest()->with('user','templateImage','category')->get()->take(8);
        return view('fontend.pages.index',compact('books','videos','templates','audios'));
    }
    // login controller 
    public function login(){
        return view('fontend.pages.login');
    }

    // book controller 
    public function bookDetails($id,$slug){
        $book = Book::where('id',$id)->with('user')->first();
        $commentscount = BookComment::where('book_id',$id)->count();
        $comments = BookComment::where('book_id',$id)->paginate(8);
        return view('fontend.pages.single-book',compact('book','commentscount','comments'));
    }

    //video route
    public function videoDetails($id,$slug){
        $video = Video::where('id',$id)->with('videoTags','user')->first();
        $commentscount = VideoComment::where('video_id',$id)->count();
        $comments = VideoComment::where('video_id',$id)->paginate(8);
        return view('fontend.pages.single-video',compact('video','commentscount','comments'));
    }

    //Audio route
    public function audioDetails($id,$slug){
        $audio = Audio::where('id',$id)->with('audioTags','user')->first();
        $commentscount = AudioComment::where('audio_id',$id)->count();
        $comments = AudioComment::where('audio_id',$id)->paginate(8);
        return view('fontend.pages.single-audio',compact('audio','commentscount','comments'));
    }

    // template details
    public function templateDetails($id,$slug){
        $template = Template::where('id',$id)->with('tags','user','category','subCategory','templateImage')->first();
        $commentscount = TemplateComment::where('template_id',$id)->count();
        $comments = TemplateComment::where('template_id',$id)->paginate(8);
        return view('fontend.pages.single-template',compact('template','commentscount','comments'));
    }
    public function register(){
        return view('fontend.pages.register');
    }
    

    // channel view

    public function channel($id,$slug){
        $channel = Channel::where('id',$id)->with('user','category','subcategory','tags','comments')->first();
        $commentscount = ChannelComment::where('channel_id',$id)->count();
        $comments = ChannelComment::where('channel_id',$id)->paginate(8);
        $channelVideos = ChannelVideo::where('channel_id',$id)->with('video')->get();
        return view('fontend.pages.channel',compact('channel','channelVideos','comments','commentscount'));
    }
    //channels
    public function channels(){
        $channels = Channel::with('user','category','subcategory','tags')->get();
        
        return view('fontend.pages.channels',compact('channels'));
    }

    //tage wize Channels
    public function tagChannels($name){
        $channelTags = ChannelTag::where('tag_name',$name)->with('channel')->get();
        return view('fontend.pages.tag-channels',compact('channelTags'));
    }
    public function podcast($id,$slug){
        $podcast = Podcast::where('id',$id)->with('user','category','subcategory')->first();
        $commentscount = PodcastComment::where('podcast_id',$id)->count();
        $comments = PodcastComment::where('podcast_id',$id)->paginate(8);
        $podcastAudios = PodcastAudio::where('podcast_id',$id)->with('audio')->get();
        return view('fontend.pages.podcast',compact('podcast','podcastAudios','commentscount','comments'));
    }
    public function podcasts(){
        $podcasts = Podcast::with('user','category','subcategory')->get();
        
        return view('fontend.pages.podcasts',compact('podcasts'));
    }
    //tage wize podcasts
    public function tagPodcasts($name){
        $podcastTags = PodcastTag::where('tag_name',$name)->with('podcast')->get();
        return view('fontend.pages.tag-podcasts',compact('podcastTags'));
    }
    //digital store
    public function digitalStore($id,$slug){
        $digitalstore = DigitalStore::where('id',$id)->with('user','category','subcategory','tags')->first();
        $commentscount = DigitalstoreComment::where('digitalstore_id',$id)->count();
        $comments = DigitalstoreComment::where('digitalstore_id',$id)->paginate(8);
        $digitalstoreTemplates = DigitalStoreTemplate::where('digital_store_id',$id)->with('template')->get();
        return view('fontend.pages.digitalstore',compact('digitalstoreTemplates','digitalstore','comments','commentscount'));
    }
    //channels
    public function digitalstores(){
        $digitalstores = DigitalStore::with('user','category','subcategory','tags')->get();
        return view('fontend.pages.digitalstores',compact('digitalstores'));
    }
    //tage wize Digital Store
    public function tagDigitalstores($name){
        $digitalstoreTags = DigitalstoreTag::where('tag_name',$name)->with('digitalStore')->get();
        return view('fontend.pages.tag-digitalstores',compact('digitalstoreTags'));
    }
    public function library($id,$slug){
        $library = Library::where('id',$id)->with('user','category','subcategory','tags')->first();
        $commentscount = LibraryComment::where('library_id',$id)->count();
        $comments = LibraryComment::where('library_id',$id)->paginate(8);
        $libraryBooks = LibraryBook::where('library_id',$id)->with('book')->get();
        return view('fontend.pages.library',compact('library','libraryBooks','commentscount','comments'));
    }
    //libraries
    public function libraries(){
        $libraries = Library::with('user','category','subcategory','tags')->get();
        return view('fontend.pages.libraries',compact('libraries'));
    }
    //tage wize libraries
    public function tagLibraries($name){
        $librariyTags = LibraryTag::where('tag_name',$name)->with('librariry')->get();
        return view('fontend.pages.tag-libraries',compact('librariyTags'));
    }
    //user details
    public function userDetails($id,$slug){
        $user = User::where('id',$id)->with('channels')->first();
        return view('fontend.pages.user-details',compact('user'));
    }
    public function userAbout(){
        return view('fontend.pages.user-about');
    }

}
