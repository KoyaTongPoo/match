<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\TextLike;
    
    //=======================================================================
    class TextLikesController extends Controller
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
                $TextLikes = TextLike::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("text_id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("like_flg", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $TextLikes = TextLike::paginate($perPage);
                
            }          
            return view("TextLikes.index", compact("TextLikes"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("TextLikes.create");
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
				"text_id" => "nullable|integer", //integer('text_id')->nullable()
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"like_flg" => "nullable|integer", //integer('like_flg')->nullable()

            ]);
            $requestData = $request->all();
            
            TextLike::create($requestData);
    
            return redirect("TextLikes")->with("flash_message", "TextLikes added!");
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
            $TextLikes = TextLike::findOrFail($id);
    
            return view("TextLikes.show", compact("TextLikes"));
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
            $TextLikes = TextLike::findOrFail($id);
    
            return view("TextLikes.edit", compact("TextLikes"));
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
				"text_id" => "nullable|integer", //integer('text_id')->nullable()
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"like_flg" => "nullable|integer", //integer('like_flg')->nullable()

            ]);
            $requestData = $request->all();
            
            $TextLikes = TextLike::findOrFail($id);
            $TextLikes->update($requestData);
    
            return redirect("TextLikes")->with("flash_message", "TextLikes updated!");
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
            TextLike::destroy($id);
    
            return redirect("TextLikes")->with("flash_message", "TextLikes deleted!");
        }
    }
    //=======================================================================
    
    