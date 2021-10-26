<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AudioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SermonController;

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dash', function () {
    return view('dashboard');
});

/**ARTICLE SECTION */
Route::get("/articles", [ArticleController::class, 'articles']);
Route::get("/create-article", [ArticleController::class, 'addArticles']);
Route::post("/create-article", [ArticleController::class, 'storeArticle'])->name('articles.store');
Route::get("/all-articles", [ArticleController::class, 'allArticles']);
Route::get("/edit-article/{id}", [ArticleController::class, 'editArticle']);
Route::post("/update-article", [ArticleController::class, 'updateArticle'])->name('articles.update');
Route::get("/delete-article/{id}", [ArticleController::class, 'deleteArticle']);



/**AUDIOS SECTION */
Route::get("/audios", [AudioController::class, 'audio']);
Route::get("/create-audio", [AudioController::class, 'addAudio']);
Route::post("/create-audio", [AudioController::class, 'storeAudio'])->name('audios.store');
Route::get("/all-audios", [AudioController::class, 'allAudios']);
Route::get("/edit-audio/{id}", [AudioController::class, 'editAudio']);
Route::post("/update-audio", [AudioController::class, 'updateAudio'])->name('audios.update');
Route::get("/delete-audio/{id}", [AudioController::class, 'deleteAudio']);
Route::get("/download{file}", [AudioController::class, 'downloadAudio']);


/**SERMONS SECTION */
Route::get("/sermons", [SermonController::class, 'sermons']);
Route::get("/create-sermon", [SermonController::class, 'addSermon']);
Route::post("/create-sermon", [SermonController::class, 'storeSermon'])->name('sermons.store');
Route::get("/all-sermons", [SermonController::class, 'allSermons']);
Route::get("/edit-sermon/{id}", [SermonController::class, 'editSermon']);
Route::post("/update-sermon", [SermonController::class, 'updateSermon'])->name('sermons.update');
Route::get("/delete-sermon/{id}", [SermonController::class, 'deleteSermon']);
Route::get("/download{file}", [SermonController::class, 'downloadSermon']);


/**NEWS SECTION */
Route::get("/news", [NewsController::class, 'news']);
Route::get("/create-news", [NewsController::class, 'addNews']);
Route::post("/create-news", [NewsController::class, 'storeNews'])->name('news.store');
Route::get("/all-news", [NewsController::class, 'allNews']);
Route::get("/edit-news/{id}", [NewsController::class, 'editNews']);
Route::post("/update-news", [NewsController::class, 'updateNews'])->name('news.update');
Route::get("/delete-news/{id}", [NewsController::class, 'deleteNews']);

/**ARTISTS SECTION */
Route::get("/artists", [ArtistController::class, 'artists']);
Route::get("/create-artist", [ArtistController::class, 'addArtist']);
Route::post("/create-artist", [ArtistController::class, 'storeArtist'])->name('artists.store');
Route::get("/all-artists", [ArtistController::class, 'allArtists']);
Route::get("/edit-artist/{id}", [ArtistController::class, 'editArtist']);
Route::post("/update-artist", [ArtistController::class, 'updateArtist'])->name('artists.update');
Route::get("/delete-artist/{id}", [ArtistController::class, 'deleteArtist']);
Route::get("/dash", [ArtistController::class, 'dashboard']);