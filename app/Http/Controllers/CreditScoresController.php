<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\CreditScore;
    
    //=======================================================================
    class CreditScoresController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\View\View
         */
        public function index(Request $request)
        {
            $keyword = $request->get("search");
            $perPage = 25;
    
            if (!empty($keyword)) {
                $CreditScores = CreditScore::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("credit_score", "LIKE", "%$keyword%")->orWhere("login_3", "LIKE", "%$keyword%")->orWhere("login_10", "LIKE", "%$keyword%")->orWhere("login_30", "LIKE", "%$keyword%")->orWhere("login_75", "LIKE", "%$keyword%")->orWhere("comment_likes_7", "LIKE", "%$keyword%")->orWhere("comment_likes_30", "LIKE", "%$keyword%")->orWhere("comment_likes_75", "LIKE", "%$keyword%")->orWhere("comment_dislikes_7", "LIKE", "%$keyword%")->orWhere("comment_dislikes_30", "LIKE", "%$keyword%")->orWhere("comment_dislikes_75", "LIKE", "%$keyword%")->orWhere("profile_checklist_1", "LIKE", "%$keyword%")->orWhere("profile_checklist_2", "LIKE", "%$keyword%")->orWhere("profile_checklist_3", "LIKE", "%$keyword%")->orWhere("profile_checklist_4", "LIKE", "%$keyword%")->orWhere("profile_checklist_5", "LIKE", "%$keyword%")->orWhere("message_response_1", "LIKE", "%$keyword%")->orWhere("message_response_2", "LIKE", "%$keyword%")->orWhere("message_response_3", "LIKE", "%$keyword%")->orWhere("reported_1", "LIKE", "%$keyword%")->orWhere("reported_2", "LIKE", "%$keyword%")->orWhere("reported_3", "LIKE", "%$keyword%")->orWhere("reported_kanri", "LIKE", "%$keyword%")->orWhere("profile_fake", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $CreditScores = CreditScore::paginate($perPage);
                
            }          
            return view("CreditScores.index", compact("CreditScores"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("CreditScores.create");
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function store(Request $request)
        {
            $this->validate($request, [
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"credit_score" => "nullable|integer", //integer('credit_score')->nullable()
				"login_3" => "nullable|integer", //integer('login_3')->nullable()
				"login_10" => "nullable|integer", //integer('login_10')->nullable()
				"login_30" => "nullable|integer", //integer('login_30')->nullable()
				"login_75" => "nullable|integer", //integer('login_75')->nullable()
				"comment_likes_7" => "nullable|integer", //integer('comment_likes_7')->nullable()
				"comment_likes_30" => "nullable|integer", //integer('comment_likes_30')->nullable()
				"comment_likes_75" => "nullable|integer", //integer('comment_likes_75')->nullable()
				"comment_dislikes_7" => "nullable|integer", //integer('comment_dislikes_7')->nullable()
				"comment_dislikes_30" => "nullable|integer", //integer('comment_dislikes_30')->nullable()
				"comment_dislikes_75" => "nullable|integer", //integer('comment_dislikes_75')->nullable()
				"profile_checklist_1" => "nullable|integer", //integer('profile_checklist_1')->nullable()
				"profile_checklist_2" => "nullable|integer", //integer('profile_checklist_2')->nullable()
				"profile_checklist_3" => "nullable|integer", //integer('profile_checklist_3')->nullable()
				"profile_checklist_4" => "nullable|integer", //integer('profile_checklist_4')->nullable()
				"profile_checklist_5" => "nullable|integer", //integer('profile_checklist_5')->nullable()
				"message_response_1" => "nullable|integer", //integer('message_response_1')->nullable()
				"message_response_2" => "nullable|integer", //integer('message_response_2')->nullable()
				"message_response_3" => "nullable|integer", //integer('message_response_3')->nullable()
				"reported_1" => "nullable|integer", //integer('reported_1')->nullable()
				"reported_2" => "nullable|integer", //integer('reported_2')->nullable()
				"reported_3" => "nullable|integer", //integer('reported_3')->nullable()
				"reported_kanri" => "nullable|integer", //integer('reported_kanri')->nullable()
				"profile_fake" => "nullable|integer", //integer('profile_fake')->nullable()

            ]);
            $requestData = $request->all();
            
            CreditScore::create($requestData);
    
            return redirect("CreditScores")->with("flash_message", "CreditScores added!");
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function show($id)
        {
            $CreditScores = CreditScore::findOrFail($id);
    
            return view("CreditScores.show", compact("CreditScores"));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function edit($id)
        {
            $CreditScores = CreditScore::findOrFail($id);
    
            return view("CreditScores.edit", compact("CreditScores"));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function update(Request $request, $id)
        {
            $this->validate($request, [
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"credit_score" => "nullable|integer", //integer('credit_score')->nullable()
				"login_3" => "nullable|integer", //integer('login_3')->nullable()
				"login_10" => "nullable|integer", //integer('login_10')->nullable()
				"login_30" => "nullable|integer", //integer('login_30')->nullable()
				"login_75" => "nullable|integer", //integer('login_75')->nullable()
				"comment_likes_7" => "nullable|integer", //integer('comment_likes_7')->nullable()
				"comment_likes_30" => "nullable|integer", //integer('comment_likes_30')->nullable()
				"comment_likes_75" => "nullable|integer", //integer('comment_likes_75')->nullable()
				"comment_dislikes_7" => "nullable|integer", //integer('comment_dislikes_7')->nullable()
				"comment_dislikes_30" => "nullable|integer", //integer('comment_dislikes_30')->nullable()
				"comment_dislikes_75" => "nullable|integer", //integer('comment_dislikes_75')->nullable()
				"profile_checklist_1" => "nullable|integer", //integer('profile_checklist_1')->nullable()
				"profile_checklist_2" => "nullable|integer", //integer('profile_checklist_2')->nullable()
				"profile_checklist_3" => "nullable|integer", //integer('profile_checklist_3')->nullable()
				"profile_checklist_4" => "nullable|integer", //integer('profile_checklist_4')->nullable()
				"profile_checklist_5" => "nullable|integer", //integer('profile_checklist_5')->nullable()
				"message_response_1" => "nullable|integer", //integer('message_response_1')->nullable()
				"message_response_2" => "nullable|integer", //integer('message_response_2')->nullable()
				"message_response_3" => "nullable|integer", //integer('message_response_3')->nullable()
				"reported_1" => "nullable|integer", //integer('reported_1')->nullable()
				"reported_2" => "nullable|integer", //integer('reported_2')->nullable()
				"reported_3" => "nullable|integer", //integer('reported_3')->nullable()
				"reported_kanri" => "nullable|integer", //integer('reported_kanri')->nullable()
				"profile_fake" => "nullable|integer", //integer('profile_fake')->nullable()

            ]);
            $requestData = $request->all();
            
            $CreditScores = CreditScore::findOrFail($id);
            $CreditScores->update($requestData);
    
            return redirect("CreditScores")->with("flash_message", "CreditScores updated!");
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function destroy($id)
        {
            CreditScore::destroy($id);
    
            return redirect("CreditScores")->with("flash_message", "CreditScores deleted!");
        }
    }
    //=======================================================================
    
    