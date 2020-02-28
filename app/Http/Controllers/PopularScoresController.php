<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\PopularScore;
    
    //=======================================================================
    class PopularScoresController extends Controller
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
                $PopularScores = PopularScore::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("from_user", "LIKE", "%$keyword%")->orWhere("to_user", "LIKE", "%$keyword%")->orWhere("score", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $PopularScores = PopularScore::paginate($perPage);
                
            }          
            return view("PopularScores.index", compact("PopularScores"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("PopularScores.create");
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
				"from_user" => "nullable|integer", //integer('from_user')->nullable()
				"to_user" => "nullable|integer", //integer('to_user')->nullable()
				"score" => "nullable|integer", //integer('score')->nullable()

            ]);
            $requestData = $request->all();
            
            PopularScore::create($requestData);
    
            return redirect("PopularScores")->with("flash_message", "PopularScores added!");
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
            $PopularScores = PopularScore::findOrFail($id);
    
            return view("PopularScores.show", compact("PopularScores"));
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
            $PopularScores = PopularScore::findOrFail($id);
    
            return view("PopularScores.edit", compact("PopularScores"));
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
				"from_user" => "nullable|integer", //integer('from_user')->nullable()
				"to_user" => "nullable|integer", //integer('to_user')->nullable()
				"score" => "nullable|integer", //integer('score')->nullable()

            ]);
            $requestData = $request->all();
            
            $PopularScores = PopularScore::findOrFail($id);
            $PopularScores->update($requestData);
    
            return redirect("PopularScores")->with("flash_message", "PopularScores updated!");
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
            PopularScore::destroy($id);
    
            return redirect("PopularScores")->with("flash_message", "PopularScores deleted!");
        }
    }
    //=======================================================================
    
    