<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\ProfileSameGender;
    
    //=======================================================================
    class ProfileSameGendersController extends Controller
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
                $ProfileSameGenders = ProfileSameGender::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("profile", "LIKE", "%$keyword%")->orWhere("star_love", "LIKE", "%$keyword%")->orWhere("star_like", "LIKE", "%$keyword%")->orWhere("star_dislike", "LIKE", "%$keyword%")->orWhere(" dislike_1", "LIKE", "%$keyword%")->orWhere("dislike_2", "LIKE", "%$keyword%")->orWhere("dislike_3", "LIKE", "%$keyword%")->orWhere("dislike_4", "LIKE", "%$keyword%")->orWhere("dislike_5", "LIKE", "%$keyword%")->orWhere("dream_3y", "LIKE", "%$keyword%")->orWhere("dream_10y", "LIKE", "%$keyword%")->orWhere("dream_20y", "LIKE", "%$keyword%")->orWhere("dream", "LIKE", "%$keyword%")->orWhere("status", "LIKE", "%$keyword%")->orWhere("tobacco", "LIKE", "%$keyword%")->orWhere("salary", "LIKE", "%$keyword%")->orWhere("Liquor", "LIKE", "%$keyword%")->orWhere("blood", "LIKE", "%$keyword%")->orWhere("rikon", "LIKE", "%$keyword%")->orWhere("children", "LIKE", "%$keyword%")->orWhere("body", "LIKE", "%$keyword%")->orWhere("height", "LIKE", "%$keyword%")->orWhere("Living_together", "LIKE", "%$keyword%")->orWhere("values", "LIKE", "%$keyword%")->orWhere("recommend_flg", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $ProfileSameGenders = ProfileSameGender::paginate($perPage);
                
            }          
            return view("ProfileSameGenders.index", compact("ProfileSameGenders"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("ProfileSameGenders.create");
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
				"profile" => "nullable|max:120", //string('profile',120)->nullable()
				"star_love" => "nullable", //string('star_love')->nullable()
				"star_like" => "nullable", //string('star_like')->nullable()
				"star_dislike" => "nullable", //string('star_dislike')->nullable()
				" dislike_1" => "nullable|max:10", //string(' dislike_1',10)->nullable()
				"dislike_2" => "nullable|max:10", //string('dislike_2',10)->nullable()
				"dislike_3" => "nullable|max:10", //string('dislike_3',10)->nullable()
				"dislike_4" => "nullable|max:10", //string('dislike_4',10)->nullable()
				"dislike_5" => "nullable|max:10", //string('dislike_5',10)->nullable()
				"dream_3y" => "nullable|max:10", //string('dream_3y',10)->nullable()
				"dream_10y" => "nullable|max:10", //string('dream_10y',10)->nullable()
				"dream_20y" => "nullable|max:10", //string('dream_20y',10)->nullable()
				"dream" => "nullable|max:10", //string('dream',10)->nullable()
				"status" => "nullable|integer", //integer('status')->nullable()
				"tobacco" => "nullable|integer", //integer('tobacco')->nullable()
				"salary" => "nullable|integer", //integer('salary')->nullable()
				"Liquor" => "nullable|integer", //integer('Liquor')->nullable()
				"blood" => "nullable|integer", //integer('blood')->nullable()
				"rikon" => "nullable|integer", //integer('rikon')->nullable()
				"children" => "nullable|integer", //integer('children')->nullable()
				"body" => "nullable|integer", //integer('body')->nullable()
				"height" => "nullable|integer", //integer('height')->nullable()
				"Living_together" => "nullable|integer", //integer('Living_together')->nullable()
				"values" => "nullable", //string('values')->nullable()
				"recommend_flg" => "nullable|integer", //integer('recommend_flg')->nullable()

            ]);
            $requestData = $request->all();
            
            ProfileSameGender::create($requestData);
    
            return redirect("ProfileSameGenders")->with("flash_message", "ProfileSameGenders added!");
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
            $ProfileSameGenders = ProfileSameGender::findOrFail($id);
    
            return view("ProfileSameGenders.show", compact("ProfileSameGenders"));
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
            $ProfileSameGenders = ProfileSameGender::findOrFail($id);
    
            return view("ProfileSameGenders.edit", compact("ProfileSameGenders"));
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
				"profile" => "nullable|max:120", //string('profile',120)->nullable()
				"star_love" => "nullable", //string('star_love')->nullable()
				"star_like" => "nullable", //string('star_like')->nullable()
				"star_dislike" => "nullable", //string('star_dislike')->nullable()
				" dislike_1" => "nullable|max:10", //string(' dislike_1',10)->nullable()
				"dislike_2" => "nullable|max:10", //string('dislike_2',10)->nullable()
				"dislike_3" => "nullable|max:10", //string('dislike_3',10)->nullable()
				"dislike_4" => "nullable|max:10", //string('dislike_4',10)->nullable()
				"dislike_5" => "nullable|max:10", //string('dislike_5',10)->nullable()
				"dream_3y" => "nullable|max:10", //string('dream_3y',10)->nullable()
				"dream_10y" => "nullable|max:10", //string('dream_10y',10)->nullable()
				"dream_20y" => "nullable|max:10", //string('dream_20y',10)->nullable()
				"dream" => "nullable|max:10", //string('dream',10)->nullable()
				"status" => "nullable|integer", //integer('status')->nullable()
				"tobacco" => "nullable|integer", //integer('tobacco')->nullable()
				"salary" => "nullable|integer", //integer('salary')->nullable()
				"Liquor" => "nullable|integer", //integer('Liquor')->nullable()
				"blood" => "nullable|integer", //integer('blood')->nullable()
				"rikon" => "nullable|integer", //integer('rikon')->nullable()
				"children" => "nullable|integer", //integer('children')->nullable()
				"body" => "nullable|integer", //integer('body')->nullable()
				"height" => "nullable|integer", //integer('height')->nullable()
				"Living_together" => "nullable|integer", //integer('Living_together')->nullable()
				"values" => "nullable", //string('values')->nullable()
				"recommend_flg" => "nullable|integer", //integer('recommend_flg')->nullable()

            ]);
            $requestData = $request->all();
            
            $ProfileSameGenders = ProfileSameGender::findOrFail($id);
            $ProfileSameGenders->update($requestData);
    
            return redirect("ProfileSameGenders")->with("flash_message", "ProfileSameGenders updated!");
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
            ProfileSameGender::destroy($id);
    
            return redirect("ProfileSameGenders")->with("flash_message", "ProfileSameGenders deleted!");
        }
    }
    //=======================================================================
    
    