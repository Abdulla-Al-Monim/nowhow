<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\TemplateController;
use App\Http\Controllers\Backend\TagComtroller;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\SessionController;
use App\Http\Controllers\Backend\ChannelContrller;
use App\Http\Controllers\Backend\DigitalStoreController;
use App\Http\Controllers\Backend\LibraryController;
use App\Http\Controllers\Backend\PodcastController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\LikeController;
use App\Http\Controllers\Fontend\PagesController;
use App\Http\Controllers\Instructor\InstructorContrller;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\AudioController;
use App\Http\Controllers\User\UserContrller;
//convert jamflix

Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::get('/jam-flix',[SessionController::class, 'jamFlix'])->name('jam.flix');
Route::get('/knowledge-hub',[SessionController::class, 'knowledgeHub'])->name('jam.knowledgeHub');
// fontend routes
Route::get('/',[PagesController::class, 'index'])->name('home');
Route::get('/likes',[LikeController::class, 'likeAll'])->name('like.all');
Route::get('user/login',[PagesController::class, 'login'])->name('user.login');
Route::get('user/register',[PagesController::class, 'register'])->name('user.register');
//user details
Route::get('user-profile/{id}/{slug}',[PagesController::class,'userDetails'])->name('home.user.details');
Route::get('user-profile/about',[PagesController::class,'userAbout'])->name('home.user.about');
//book details
Route::get('book/{id}/{slug}',[PagesController::class,'bookDetails'])->name('home.book.details');
// video route
Route::get('video/{id}/{slug}',[PagesController::class,'videoDetails'])->name('home.video.details');
// audio route
Route::get('audio/{id}/{slug}',[PagesController::class,'audioDetails'])->name('home.audio.details');
// template route
Route::get('template/{id}/{slug}',[PagesController::class,'templateDetails'])->name('home.template.details');
//channel 
Route::get('channel/{id}/{slug}',[PagesController::class,'channel'])->name('home.channel.details');
//all channel 
Route::get('all-channel',[PagesController::class,'channels'])->name('home.channels.details');
//tag wize channel
Route::get('tag-channels/{name}',[PagesController::class,'tagChannels'])->name('home.tag.channels.details');
//podcast
Route::get('podcast/{id}/{slug}',[PagesController::class,'podcast'])->name('home.podcast.details');
//podcasts
Route::get('podcasts',[PagesController::class,'podcasts'])->name('home.podcasts.details');
//tag wize channel
Route::get('tag-podcsts/{name}',[PagesController::class,'tagPodcasts'])->name('home.tag.podcasts.details');
Route::get('digital-store/{id}/{slug}',[PagesController::class,'digitalStore'])->name('home.digitalstore.details');
//digital stores 
Route::get('digital-stores',[PagesController::class,'digitalstores'])->name('home.digitalstores.details');
//tag wize Digital
Route::get('tag-digitalstores/{name}',[PagesController::class,'tagDigitalstores'])->name('home.tag.digitalstore.details');
//library
Route::get('library/{id}/{slug}',[PagesController::class,'library'])->name('home.library.details');
//libraries
Route::get('libraries',[PagesController::class,'libraries'])->name('home.libraries.details');
//tag wize library
Route::get('tag-libraries/{name}',[PagesController::class,'tagLibraries'])->name('home.tag.libraries.details');


//digital Store
Route::get('book-download/{id}',[BookController::class,'bookDownload'])->name('book.download');
Route::get('video-download/{id}',[VideoController::class,'vidoeDownload'])->name('video.download');
Route::get('audio-download/{id}',[AudioController::class,'audioDownload'])->name('audio.download');
Route::get('template-download/{id}',[TemplateController::class,'templateDownload'])->name('template.download');
Route::post('store',[CategoryController::class,'store']);

//comment
Route::post('channel-comment-store',[CommentController::class,'channelCommentStore'])->name('channel.comment.store');
Route::post('library-comment-store',[CommentController::class,'libraryCommentStore'])->name('library.comment.store');
Route::post('podcast-comment-store',[CommentController::class,'podcastCommentStore'])->name('podcast.comment.store');
Route::post('digitalstore-comment-store',[CommentController::class,'digitalstoreCommentStore'])->name('digitalstore.comment.store');
Route::post('book-comment-store',[CommentController::class,'bookCommentStore'])->name('book.comment.store');
Route::post('video-comment-store',[CommentController::class,'videoCommentStore'])->name('video.comment.store');
Route::post('audio-comment-store',[CommentController::class,'audioCommentStore'])->name('audio.comment.store');
Route::post('template-comment-store',[CommentController::class,'templateCommentStore'])->name('template.comment.store');


//instructor profile
Route::get('admin-profile/{id}',[InstructorContrller::class,'show'])->name('instructor.show');
// ====================================== Intructor Routes =====================================
Route::group(['prefix'=>'admin','middleware' =>['admin','auth']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    /** profile **/
    Route::group(['prefix'=>'profile'],function(){
        Route::get('edit',[InstructorContrller::class,'edit'])->name('admin.profile.edit');
        Route::post('update',[InstructorContrller::class,'update'])->name('admin.profile.update');
        Route::get('move',[UserContrller::class,'modeUser'])->name('admin.move.user');
    });
    //template category
    Route::group(['prefix'=>'template'],function(){
       /*** categories **/
         Route::group(['prefix'=>'category'],function(){
            Route::get('manage',[CategoryController::class,'category'])->name('category.manage');
            Route::post('store',[CategoryController::class,'store']);
            Route::get('all',[CategoryController::class,'index']);
            
        });

         /***sub categories **/
         Route::group(['prefix'=>'sub-category'],function(){
            Route::get('manage',[CategoryController::class,'subCategory'])->name('user.sub.category.manage');
            Route::post('store',[CategoryController::class,'subCategoryStore']);
            Route::get('all',[CategoryController::class,'allSubCat']);
            
        });
         /*** tags **/
         Route::group(['prefix'=>'tag'],function(){
            Route::get('manage',[App\Http\Controllers\Backend\TemplateController::class,'manage'])->name('user.tag.manage');
            Route::post('store',[App\Http\Controllers\Backend\TemplateController::class,'tagStore']);
            Route::get('all',[App\Http\Controllers\Backend\TemplateController::class,'allTags']);
            
        });
    });

    /** book Routes **/
    Route::group(['prefix'=>'book'],function(){
      /*** categories **/
         Route::group(['prefix'=>'category'],function(){
            Route::get('manage',[CategoryController::class,'BookCategory'])->name('book.category.manage');
            Route::get('ajax/{id}',[CategoryController::class,'bookCategoryAjax']);
            Route::post('store',[CategoryController::class,'bookStore']);
            Route::get('all',[CategoryController::class,'UserAllBook']);
            
        });

         /***sub categories **/
         Route::group(['prefix'=>'sub-category'],function(){
            Route::get('manage',[CategoryController::class,'userBookSubCategory'])->name('user.book.sub.category.manage');
            Route::post('store',[CategoryController::class,'userBookSubCategoryStore']);
            Route::get('all',[CategoryController::class,'userBookAllSubCat']);
        });
         /*** tags **/
         Route::group(['prefix'=>'tag'],function(){
            Route::get('manage',[TagComtroller::class,'userBookTagManage'])->name('user.book.tag.manage');
            Route::post('store',[TagComtroller::class,'userBookTagStore']);
            Route::get('all',[TagComtroller::class,'userBookAllTags']);
        });
    });
    /** AUDIO Routes **/
    Route::group(['prefix'=>'audio'],function(){
         /*** categories **/
         Route::group(['prefix'=>'category'],function(){
            Route::get('ajax/{id}',[CategoryController::class,'audioCategoryAjax']);
            Route::get('manage',[CategoryController::class,'userAudioCatManage'])->name('user.audio.category.manage');
            Route::post('store',[CategoryController::class,'userAudioCategoryStore']);
            Route::get('all',[CategoryController::class,'userAudioCatAll']);
            
        });
        /***sub categories **/
         Route::group(['prefix'=>'sub-category'],function(){
            Route::get('manage',[CategoryController::class,'userAudioSubCategory'])->name('user.audio.sub.category.manage');
            Route::post('store',[CategoryController::class,'userAudioSubCategoryStore']);
            Route::get('all',[CategoryController::class,'userAudioAllSubCat']);
            
        });

        /*** tags **/
         Route::group(['prefix'=>'tag'],function(){
            Route::get('manage',[TagComtroller::class,'userAudioTagManage'])->name('user.audio.tag.manage');
            Route::post('store',[TagComtroller::class,'userAudioTagStore']);
            Route::get('all',[TagComtroller::class,'userAudioAllTags']);
            
        }); 
    });

    /** Video Routes **/
    Route::group(['prefix'=>'video'],function(){
         /*** categories **/
         Route::group(['prefix'=>'category'],function(){
            Route::get('ajax/{id}',[CategoryController::class,'vidoeCategoryAjax']);
            Route::get('manage',[CategoryController::class,'userVideoCatManage'])->name('user.video.category.manage');
            Route::post('store',[CategoryController::class,'userVideoCategoryStore']);
            Route::get('all',[CategoryController::class,'userVideoCatAll']);
            
        });
        /***sub categories **/
         Route::group(['prefix'=>'sub-category'],function(){
            Route::get('manage',[CategoryController::class,'userVideoSubCategory'])->name('user.video.sub.category.manage');
            Route::post('store',[CategoryController::class,'userVideoSubCategoryStore']);
            Route::get('all',[CategoryController::class,'userVideoAllSubCat'])->name('monim');
            
        });

        /*** tags **/
         Route::group(['prefix'=>'tag'],function(){
            Route::get('manage',[TagComtroller::class,'userVidoeTagManage'])->name('user.video.tag.manage');
            Route::post('store',[TagComtroller::class,'userVidoeTagStore']);
            Route::get('all',[TagComtroller::class,'userVidoeAllTags']);
            
        }); 
    });
    

   

    
});


// ====================================== User Routes =====================================
Route::group(['prefix'=>'user','middleware' =>['user','auth']], function(){
    Route::get('dashboard',[UserContrller::class,'index'])->name('user.dashboard');
    Route::get('details',[UserContrller::class,'userDetails'])->name('user.details');
    Route::get('subscribe/{id}',[UserContrller::class,'userSubscrive'])->name('user.subscribe');
    Route::get('un-subscribe/{id}/{subscribeId}',[UserContrller::class,'userUnSubscrive'])->name('user.un.subscribe');
    //like route start
    Route::get('like-channel/{channelId}/{id}',[LikeController::class,'likeChannel'])->name('like.channel');
    Route::get('like-library/{libraryId}/{id}',[LikeController::class,'likeLibrary'])->name('like.library');
    Route::get('like-book/{bookId}/{id}',[LikeController::class,'likeBook'])->name('like.book');
    Route::get('like-video/{videoId}/{id}',[LikeController::class,'likeVideo'])->name('like.video');
    Route::get('like-podcast/{podcastId}/{id}',[LikeController::class,'likePodcast'])->name('like.podcast');
    Route::get('like-audio/{audioId}/{id}',[LikeController::class,'likeAudio'])->name('like.audio');
    Route::get('like-digitalstore/{digitalsoreId}/{id}',[LikeController::class,'likeDigitalstore'])->name('like.digitalstore');
    Route::get('like-template/{templateId}/{id}',[LikeController::class,'likeTemplate'])->name('like.template');
    //like route end

    //un-like route start
    Route::get('un-like-channel/{channelId}/{id}',[LikeController::class,'unLikeChannel'])->name('unlike.channel');
    Route::get('un-like-library/{libraryId}/{id}',[LikeController::class,'unLikeLibrary'])->name('unlike.library');
    Route::get('un-like-book/{bookId}/{id}',[LikeController::class,'unLikeBook'])->name('unlike.book');
    Route::get('un-like-video/{bookId}/{id}',[LikeController::class,'unLikeVideo'])->name('unlike.video');
    Route::get('un-like-podcast/{podcastId}/{id}',[LikeController::class,'unLikePodcast'])->name('unlike.podcast');
    Route::get('un-like-audio/{audioId}/{id}',[LikeController::class,'unLikeAudio'])->name('unlike.audio');
    Route::get('un-like-digitalstore/{digitalsoreId}/{id}',[LikeController::class,'unLikeDigitalstore'])->name('unlike.digitalstore');
    Route::get('un-like-template/{templateId}/{id}',[LikeController::class,'unLikeTemplate'])->name('unlike.template');
    //un-like route end
    Route::get('/now-how',[UserContrller::class, 'nowhow'])->name('now.how');
    Route::get('account/setting',[UserContrller::class,'accountSetting'])->name('user.setting');
    Route::get('change-password',[UserContrller::class,'changePassword'])->name('user.change.password');
    Route::post('update-password',[UserContrller::class,'updatePassword'])->name('user.update.password');
    Route::post('update-bio',[UserContrller::class,'updateBioAjax']);
    Route::post('update-accout-detail-ajax',[UserContrller::class,'updateAccDetailAjax'])->name('user.update.details');
    Route::post('update-account-contact-ajax',[UserContrller::class,'updateContactAjax']);
    Route::post('update-account-social-ajax',[UserContrller::class,'updateSocialAjax']);

   
    /** templete Routes **/
    Route::group(['prefix'=>'template'],function(){
        Route::get('add',[TemplateController::class,'create'])->name('template.create');
        Route::get('category/ajax/{id}',[CategoryController::class,'templeteCategoryAjax']);
        Route::post('store',[TemplateController::class,'store'])->name('templete.store');
        Route::get('manage',[TemplateController::class,'manage'])->name('template.manage');
        Route::post('delete/{id}',[TemplateController::class,'delete'])->name('template.delete');
        Route::get('details/{id}',[TemplateController::class,'templeteDetails'])->name('templete.details');  
        
        
    });
    /** Video Routes **/
    Route::group(['prefix'=>'video'],function(){
        Route::get('add',[VideoController::class,'create'])->name('video.create');
        Route::post('store',[VideoController::class,'store'])->name('video.store');
        Route::post('delete/{id}',[VideoController::class,'delete'])->name('video.delete');
        Route::get('manage',[VideoController::class,'manage'])->name('video.manage');
        Route::get('details/{id}',[VideoController::class,'bookDetails'])->name('book.details');

        
       
    });
    /** AUDIO Routes **/
    Route::group(['prefix'=>'audio'],function(){
        Route::get('add',[AudioController::class,'create'])->name('audio.create');
        Route::post('store',[AudioController::class,'store'])->name('audio.store');
        Route::get('manage',[AudioController::class,'manage'])->name('audio.manage');
        Route::post('delete/{id}',[AudioController::class,'delete'])->name('audio.delete');
        Route::get('details/{id}',[AudioController::class,'bookDetails'])->name('audio.details');

        
       
    });
    /** book Routes **/
    Route::group(['prefix'=>'book'],function(){
        Route::get('add',[BookController::class,'create'])->name('book.upload');
        Route::post('store',[BookController::class,'store'])->name('book.store');
        Route::get('manage',[BookController::class,'manage'])->name('book.manage');
        Route::get('edit/{id}',[BookController::class,'edit'])->name('book.edit');
        Route::post('delete/{id}',[BookController::class,'delete'])->name('book.delete');
        Route::get('details/{id}',[BookController::class,'bookDetails'])->name('book.details');
    });
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('page',[AdminController::class, 'index']);
require __DIR__.'/auth.php';
