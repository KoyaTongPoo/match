<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Meet;
    
    //=======================================================================
    class MeetsController extends Controller
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
                $Meets = Meet::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("from_user", "LIKE", "%$keyword%")->orWhere("to_user", "LIKE", "%$keyword%")->orWhere("meet_day", "LIKE", "%$keyword%")->orWhere("tel_day", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Meets = Meet::paginate($perPage);
                
            }          
            return view("Meets.index", compact("Meets"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Meets.create");
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
				"meet_day" => "nullable|date", //date('meet_day')->nullable()
				"tel_day" => "nullable|date", //date('tel_day')->nullable()

            ]);
            $requestData = $request->all();
            
            Meet::create($requestData);
    
            return redirect("Meets")->with("flash_message", "Meets added!");
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
            $Meets = Meet::findOrFail($id);
    
            return view("Meets.show", compact("Meets"));
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
            $Meets = Meet::findOrFail($id);
    
            return view("Meets.edit", compact("Meets"));
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
				"meet_day" => "nullable|date", //date('meet_day')->nullable()
				"tel_day" => "nullable|date", //date('tel_day')->nullable()

            ]);
            $requestData = $request->all();
            
            $Meets = Meet::findOrFail($id);
            $Meets->update($requestData);
    
            return redirect("Meets")->with("flash_message", "Meets updated!");
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
            Meet::destroy($id);
    
            return redirect("Meets")->with("flash_message", "Meets deleted!");
        }
    }
    //=======================================================================
    
    