<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use App\Models\App;
use App\Models\Asset;
use App\Models\Collection;
use App\Models\MetaData;
use App\Models\Story;
use App\Models\StoryAsset;
use App\Models\SubCollection;
use App\Models\Tag;
// use App\Models\Listing;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// All Listings
// Route::get('/', function () {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => Listing::all() // defined in app/Models/Listing.php
//     ]);
// });

// // Single Listing
// Route::get('/listings/{id}', function($id) {
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });

// View Preview In I-Frame
Route::get('/preview', function () {
    return view('preview', [
        'heading' => 'Latest Topics',
        'topics' => Collection::all(), // defined in app/Models/Topics.php        
        'navSettings' => [
            "backHome" => false, //unless non default topic? javascript reset history on fallback to default topic?
            "selectOk" => true,
            "changeTopic" => false,
            "scroll" => true // true, set to 'maybe?'
        ]   
    ]);
});

// All Topics
Route::get('/', function () {

    return view('topics', [
        'heading' => 'Latest Topics',
        'topics' => Collection::all(), // defined in app/Models/Topics.php
        'navSettings' => [
            "backHome" => true,
            "selectOk" => true,
            "changeTopic" => false,
            "scroll" => true // set to 'maybe?'
        ]
    ]);
});

// Single Topic - List All SubTopics - SIGNAGE SCREEN HOME
Route::get('/topics/{id}', function($id) {
    if(request()->has('defaultTopic')){
        Session::put('defaultTopic', request()->get('defaultTopic'));
    }else{
        if(!(session()->has('defaultTopic'))){
            Session::put('defaultTopic', $id);
        }
    }
        Session::put('userDefinedTopic', $id);

    return view('topic', [
        'topic' => Collection::find($id),
        'subTopics' => SubCollection::all()->where('parentCollection', $id)->sortBy('position'),
        'homePage' => true,
        'navSettings' => [
            "backHome" => false, //unless non default topic? javascript reset history on fallback to default topic?
            "selectOk" => true,
            "changeTopic" => true,
            "scroll" => false // false, set to 'maybe?'
        ]        
    ]);
});

// Single SubTopic - List All Stories
Route::get('/subtopics/{id}', function($id) {
        $storyIds = SubCollection::find($id)->storyIds();
    return view('subtopic', [
        'subTopic' => SubCollection::find($id),
        'stories' => Story::whereIn('_oldid', $storyIds)->get(),
        'navSettings' => [
            "backHome" => true, //unless non default topic? javascript reset history on fallback to default topic?
            "selectOk" => true,
            "changeTopic" => true,
            "scroll" => true // true, set to 'maybe?'
        ]           
    ]);
});

// Single Story - LANDING PAGE
Route::get('/stories/{id}', function($id) {
    $hideTabbableNav = true;
    return view('story', [
        'story' => Story::find($id),
        'storyAssets' => Story::find($id)->storyAssets()->with('story')->join('assets', 'assets._newid', '=', 'story_assets.asset')->get(),
        'hideTabbableNav' => $hideTabbableNav,
        'navSettings' => [
            "backHome" => true, //unless non default topic? javascript reset history on fallback to default topic?
            "selectOk" => false,
            "changeTopic" => true,
            "scroll" => true // true, set to 'maybe?'
        ]           
    ]);
});

Route::get('/nav', function() {
    return view('nav', [
        'navSettings' => [
            "backHome" => true, //unless non default topic? javascript reset history on fallback to default topic?
            "selectOk" => true,
            "changeTopic" => true,
            "scroll" => true // true, set to 'maybe?'
        ]           
    ]);
});

// // All Apps
// Route::get('/apps', function () {
//     return view('apps', [
//         'heading' => 'Latest Apps',
//         'apps' => Apps::all() // defined in app/Models/Apps.php
//     ]);
// });

// // Single App
// Route::get('/apps/{id}', function($id) {
//     return view('app', [
//         'app' => Apps::find($id)
//     ]);
// });

Route::get('/hello', function () {
    return response('<h1>Hello World!</h1>', 200)
        ->header('Content-Type', 'text/plain') //change content type
        ->header('foo', 'bar'); //add custom headers
});

Route::get('/posts/{id}', function($id){
    return response('Post #' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    // dd($request);
    return ($request->name . ' ' . $request->city);
});