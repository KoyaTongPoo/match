<?php
use Illuminate\Http\Response;

//default
Route::get("/", function () {
    return view("welcome");
});

Route::get('/users',function(){
	return App\User::all();
});




//=======================================================================
//index
Route::get("Users/", "UsersController@index");
//create
Route::get("Users/create", "UsersController@create");
//show
Route::get("Users/{id}", "UsersController@show");
//store
Route::post("Users/store", "UsersController@store");
//edit
Route::get("Users/{id}/edit", "UsersController@edit");
//update
Route::put("Users/{id}", "UsersController@update");
//destroy
Route::delete("Users/{id}", "UsersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Boards/", "BoardsController@index");
//create
Route::get("Boards/create", "BoardsController@create");
//show
Route::get("Boards/{id}", "BoardsController@show");
//store
Route::post("Boards/store", "BoardsController@store");
//edit
Route::get("Boards/{id}/edit", "BoardsController@edit");
//update
Route::put("Boards/{id}", "BoardsController@update");
//destroy
Route::delete("Boards/{id}", "BoardsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Texts/", "TextsController@index");
//create
Route::get("Texts/create", "TextsController@create");
//show
Route::get("Texts/{id}", "TextsController@show");
//store
Route::post("Texts/store", "TextsController@store");
//edit
Route::get("Texts/{id}/edit", "TextsController@edit");
//update
Route::put("Texts/{id}", "TextsController@update");
//destroy
Route::delete("Texts/{id}", "TextsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Profiles/", "ProfilesController@index");
//create
Route::get("Profiles/create", "ProfilesController@create");
//show
Route::get("Profiles/{id}", "ProfilesController@show");
//store
Route::post("Profiles/store", "ProfilesController@store");
//edit
Route::get("Profiles/{id}/edit", "ProfilesController@edit");
//update
Route::put("Profiles/{id}", "ProfilesController@update");
//destroy
Route::delete("Profiles/{id}", "ProfilesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Messages/", "MessagesController@index");
//create
Route::get("Messages/create", "MessagesController@create");
//show
Route::get("Messages/{id}", "MessagesController@show");
//store
Route::post("Messages/store", "MessagesController@store");
//edit
Route::get("Messages/{id}/edit", "MessagesController@edit");
//update
Route::put("Messages/{id}", "MessagesController@update");
//destroy
Route::delete("Messages/{id}", "MessagesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Matchings/", "MatchingsController@index");
//create
Route::get("Matchings/create", "MatchingsController@create");
//show
Route::get("Matchings/{id}", "MatchingsController@show");
//store
Route::post("Matchings/store", "MatchingsController@store");
//edit
Route::get("Matchings/{id}/edit", "MatchingsController@edit");
//update
Route::put("Matchings/{id}", "MatchingsController@update");
//destroy
Route::delete("Matchings/{id}", "MatchingsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("MGenders/", "MGendersController@index");
//create
Route::get("MGenders/create", "MGendersController@create");
//show
Route::get("MGenders/{id}", "MGendersController@show");
//store
Route::post("MGenders/store", "MGendersController@store");
//edit
Route::get("MGenders/{id}/edit", "MGendersController@edit");
//update
Route::put("MGenders/{id}", "MGendersController@update");
//destroy
Route::delete("MGenders/{id}", "MGendersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Questions/", "QuestionsController@index");
//create
Route::get("Questions/create", "QuestionsController@create");
//show
Route::get("Questions/{id}", "QuestionsController@show");
//store
Route::post("Questions/store", "QuestionsController@store");
//edit
Route::get("Questions/{id}/edit", "QuestionsController@edit");
//update
Route::put("Questions/{id}", "QuestionsController@update");
//destroy
Route::delete("Questions/{id}", "QuestionsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("TextLikes/", "TextLikesController@index");
//create
Route::get("TextLikes/create", "TextLikesController@create");
//show
Route::get("TextLikes/{id}", "TextLikesController@show");
//store
Route::post("TextLikes/store", "TextLikesController@store");
//edit
Route::get("TextLikes/{id}/edit", "TextLikesController@edit");
//update
Route::put("TextLikes/{id}", "TextLikesController@update");
//destroy
Route::delete("TextLikes/{id}", "TextLikesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("QuestionReports/", "QuestionReportsController@index");
//create
Route::get("QuestionReports/create", "QuestionReportsController@create");
//show
Route::get("QuestionReports/{id}", "QuestionReportsController@show");
//store
Route::post("QuestionReports/store", "QuestionReportsController@store");
//edit
Route::get("QuestionReports/{id}/edit", "QuestionReportsController@edit");
//update
Route::put("QuestionReports/{id}", "QuestionReportsController@update");
//destroy
Route::delete("QuestionReports/{id}", "QuestionReportsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("ProfileReports/", "ProfileReportsController@index");
//create
Route::get("ProfileReports/create", "ProfileReportsController@create");
//show
Route::get("ProfileReports/{id}", "ProfileReportsController@show");
//store
Route::post("ProfileReports/store", "ProfileReportsController@store");
//edit
Route::get("ProfileReports/{id}/edit", "ProfileReportsController@edit");
//update
Route::put("ProfileReports/{id}", "ProfileReportsController@update");
//destroy
Route::delete("ProfileReports/{id}", "ProfileReportsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Recommends/", "RecommendsController@index");
//create
Route::get("Recommends/create", "RecommendsController@create");
//show
Route::get("Recommends/{id}", "RecommendsController@show");
//store
Route::post("Recommends/store", "RecommendsController@store");
//edit
Route::get("Recommends/{id}/edit", "RecommendsController@edit");
//update
Route::put("Recommends/{id}", "RecommendsController@update");
//destroy
Route::delete("Recommends/{id}", "RecommendsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("ProfileSameGenders/", "ProfileSameGendersController@index");
//create
Route::get("ProfileSameGenders/create", "ProfileSameGendersController@create");
//show
Route::get("ProfileSameGenders/{id}", "ProfileSameGendersController@show");
//store
Route::post("ProfileSameGenders/store", "ProfileSameGendersController@store");
//edit
Route::get("ProfileSameGenders/{id}/edit", "ProfileSameGendersController@edit");
//update
Route::put("ProfileSameGenders/{id}", "ProfileSameGendersController@update");
//destroy
Route::delete("ProfileSameGenders/{id}", "ProfileSameGendersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("ProfileOthers/", "ProfileOthersController@index");
//create
Route::get("ProfileOthers/create", "ProfileOthersController@create");
//show
Route::get("ProfileOthers/{id}", "ProfileOthersController@show");
//store
Route::post("ProfileOthers/store", "ProfileOthersController@store");
//edit
Route::get("ProfileOthers/{id}/edit", "ProfileOthersController@edit");
//update
Route::put("ProfileOthers/{id}", "ProfileOthersController@update");
//destroy
Route::delete("ProfileOthers/{id}", "ProfileOthersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Meets/", "MeetsController@index");
//create
Route::get("Meets/create", "MeetsController@create");
//show
Route::get("Meets/{id}", "MeetsController@show");
//store
Route::post("Meets/store", "MeetsController@store");
//edit
Route::get("Meets/{id}/edit", "MeetsController@edit");
//update
Route::put("Meets/{id}", "MeetsController@update");
//destroy
Route::delete("Meets/{id}", "MeetsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Logs/", "LogsController@index");
//create
Route::get("Logs/create", "LogsController@create");
//show
Route::get("Logs/{id}", "LogsController@show");
//store
Route::post("Logs/store", "LogsController@store");
//edit
Route::get("Logs/{id}/edit", "LogsController@edit");
//update
Route::put("Logs/{id}", "LogsController@update");
//destroy
Route::delete("Logs/{id}", "LogsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("CreditScores/", "CreditScoresController@index");
//create
Route::get("CreditScores/create", "CreditScoresController@create");
//show
Route::get("CreditScores/{id}", "CreditScoresController@show");
//store
Route::post("CreditScores/store", "CreditScoresController@store");
//edit
Route::get("CreditScores/{id}/edit", "CreditScoresController@edit");
//update
Route::put("CreditScores/{id}", "CreditScoresController@update");
//destroy
Route::delete("CreditScores/{id}", "CreditScoresController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("ReportProfileFakes/", "ReportProfileFakesController@index");
//create
Route::get("ReportProfileFakes/create", "ReportProfileFakesController@create");
//show
Route::get("ReportProfileFakes/{id}", "ReportProfileFakesController@show");
//store
Route::post("ReportProfileFakes/store", "ReportProfileFakesController@store");
//edit
Route::get("ReportProfileFakes/{id}/edit", "ReportProfileFakesController@edit");
//update
Route::put("ReportProfileFakes/{id}", "ReportProfileFakesController@update");
//destroy
Route::delete("ReportProfileFakes/{id}", "ReportProfileFakesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("PopularScores/", "PopularScoresController@index");
//create
Route::get("PopularScores/create", "PopularScoresController@create");
//show
Route::get("PopularScores/{id}", "PopularScoresController@show");
//store
Route::post("PopularScores/store", "PopularScoresController@store");
//edit
Route::get("PopularScores/{id}/edit", "PopularScoresController@edit");
//update
Route::put("PopularScores/{id}", "PopularScoresController@update");
//destroy
Route::delete("PopularScores/{id}", "PopularScoresController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("MHobbies/", "MHobbiesController@index");
//create
Route::get("MHobbies/create", "MHobbiesController@create");
//show
Route::get("MHobbies/{id}", "MHobbiesController@show");
//store
Route::post("MHobbies/store", "MHobbiesController@store");
//edit
Route::get("MHobbies/{id}/edit", "MHobbiesController@edit");
//update
Route::put("MHobbies/{id}", "MHobbiesController@update");
//destroy
Route::delete("MHobbies/{id}", "MHobbiesController@destroy");
//=======================================================================

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
