<?php

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

Route::get('/', function () {
    $tests = [
        'test a',
        'test b',
        'test c',
    ];

    return view('test')->with(['tests' => $tests]);
});
// Route::get('/', function () {
//     return view('recommendation');
// });
Route::get('recommendation', function () {
    return view('recommendation');
});
Route::get('shop_information', function () {
    return view('shop_information');
});
Route::get('food', function () {
    return view('food');
});
Route::get('drink', function () {
    $drinkCategories = [
        'beer' => 'ビール',
        'cocktail' => 'カクテル',
        'shouchu' => '焼酎',
        'whisky' => 'ウィスキー',
        'softDrink' => 'ソフトドリンク',
      ];

    $drinks = [
        [
          "name" => "ビール",
          "price" => 800,
          "img" => "ビール.jpg",
        //   "category" => $drinkCategories['beer'],
          "recommendation" => false,
        ],
        [
          "name" => "ジントニック",
          "price" => 800,
          "img" => "ジントニック.jpg",
        //   "category" => $drinkCategories['cocktail'],
          "recommendation" => false,
        ],
        [
          "name" => "モスコミュール",
          "price" => 800,
          "img" => "モスコミュール.jpg",
        //   "category" => $drinkCategories['cocktail'],
          "recommendation" => false,
        ],
        [
          "name" => "モヒート",
          "price" => 800,
          "img" => "モヒート.jpg",
        //   "category" => $drinkCategories['cocktail'],
          "recommendation" => false,
        ],
        [
          "name" => "白霧島",
          "price" => 800,
          "img" => "白霧島.jpg",
        //   "category" => $drinkCategories['shouchu'],
          "recommendation" => false,
        ],
        [
          "name" => "富乃宝山",
          "price" => 800,
          "img" => "富乃宝山.jpg",
        //   "category" => $drinkCategories['shouchu'],
          "recommendation" => false,
        ],
        [
          "name" => "いいちこ",
          "price" => 800,
          "img" => "いいちこ.jpg",
        //   "category" => $drinkCategories['shouchu'],
          "recommendation" => false,
        ],
        [
          "name" => "知多",
          "price" => 800,
          "img" => "知多.jpg",
        //   "category" => $drinkCategories['whisky'],
          "recommendation" => false,
        ],
        [
          "name" => "ブラックニッカ",
          "price" => 800,
          "img" => "ブラックニッカ.jpg",
        //   "category" => $drinkCategories['whisky'],
          "recommendation" => false,
        ],
        [
          "name" => "グレンフィディック",
          "price" => 800,
          "img" => "グレンフィディック.jpeg",
        //   "category" => $drinkCategories['whisky'],
          "recommendation" => true,
        ],
        [
          "name" => "コカ・コーラ",
          "price" => 300,
          "img" => "グレンフィディック.jpeg",
        //   "category" => $drinkCategories['softDrink'],
          "recommendation" => true,
        ],
        [
          "name" => "オレンジジュース",
          "price" => 300,
          "img" => "グレンフィディック.jpeg",
        //   "category" => $drinkCategories['softDrink'],
          "recommendation" => true,
        ],
        [
          "name" => "烏龍茶",
          "price" => 300,
          "img" => "グレンフィディック.jpeg",
        //   "category" => $drinkCategories['softDrink'],
          "recommendation" => true,
        ],
      ];

    return view('drink')->with((['drinks' => $drinks]));
});
