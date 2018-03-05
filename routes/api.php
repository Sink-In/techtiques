<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('topics', function () {
    $topics = [];
    for ($i = 1; $i < 20; $i++) {

        $slug = "demo-topics-" . $i;

        $news = [];
        for ($j = 1; $j <= 5; $j++) {
            $slugg = "demo-news-with-demo-title-" . $j;

            array_push($news, [
                'id' => $j,
                'image' => 'http://via.placeholder.com/400x400',
                'title' => str_replace("-", " ", $slugg),
                'slug' => $slugg,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
                'topics' => [     
                    
                ],
                'timestamp' => 1520261182 + $j
            ]);
        }

        array_push($topics, [
            'id' => $i,
            'image' => 'http://via.placeholder.com/400x400',
            'name' => str_replace("-", " ", $slug),
            'slug' => $slug,
            'description' => 'Lorem ipsum dolor sit amet, consectetur sed do eiusmod tempor adipiscing elit.',
            'news' => $news
        ]);
    }

    return $topics;
});

Route::get('topics/{slug}', function ($slug) {
    $news = [];
    for ($i = 1; $i <= 5; $i++) {
        $slugg = "demo-news-with-demo-title-" . $i;

        array_push($news, [
            'id' => $i,
            'image' => 'http://via.placeholder.com/400x400',
            'title' => str_replace("-", " ", $slugg),
            'slug' => $slugg,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'topics' => [     
                
            ],
            'timestamp' => 1520261182 + $i
        ]);
    }
    return [
        'id' => 5,
        'image' => 'http://via.placeholder.com/400x400',
        'name' => str_replace("-", " ", $slug),
        'slug' => $slug,
        'description' => 'Lorem ipsum dolor sit amet, consectetur sed do eiusmod tempor adipiscing elit.',
        'news' => $news
    ];
});

Route::get('news', function () {
    $news = [];
    for ($i = 1; $i < 20; $i++) {

        $slug = "demo-news-with-demo-title-" . $i;

        array_push($news, [
            'id' => $i,
            'image' => 'http://via.placeholder.com/400x400',
            'title' => str_replace("-", " ", $slug),
            'slug' => $slug,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'topics' => [     
                
            ],
            'timestamp' => 1520261182 + $i
        ]);
    }

    return $news;
});

Route::get('news/{title}', function ($title) {
    return [
        'id' => 1,
        'image' => 'http://via.placeholder.com/400x400',
        'title' => str_replace("-", " ", $title),
        'slug' => $title,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
        'topics' => [

        ],
        'timestamp' => 1520261182
    ];
});