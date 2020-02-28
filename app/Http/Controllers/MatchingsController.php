<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Matching;
    
    //=======================================================================
    class MatchingsController extends Controller
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
                $Matchings = Matching::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("from_user", "LIKE", "%$keyword%")->orWhere("to_user", "LIKE", "%$keyword%")->orWhere("flg", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Matchings = Matching::paginate($perPage);
                
            }          
            return view("Matchings.index", compact("Matchings"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Matchings.create");
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
				"flg" => "nullable|integer", //integer('flg')->nullable()

            ]);
            $requestData = $request->all();
            
            Matching::create($requestData);
    
            return redirect("Matchings")->with("flash_message", "Matchings added!");
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
            $Matchings = Matching::findOrFail($id);
    
            return view("Matchings.show", compact("Matchings"));
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
            $Matchings = Matching::findOrFail($id);
    
            return view("Matchings.edit", compact("Matchings"));
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
				"flg" => "nullable|integer", //integer('flg')->nullable()

            ]);
            $requestData = $request->all();
            
            $Matchings = Matching::findOrFail($id);
            $Matchings->update($requestData);
    
            return redirect("Matchings")->with("flash_message", "Matchings updated!");
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
            Matching::destroy($id);
    
            return redirect("Matchings")->with("flash_message", "Matchings deleted!");
        }
    }
    //=======================================================================
    
    