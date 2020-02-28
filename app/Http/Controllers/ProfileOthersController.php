<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\ProfileOther;
    
    //=======================================================================
    class ProfileOthersController extends Controller
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
                $ProfileOthers = ProfileOther::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("telephone", "LIKE", "%$keyword%")->orWhere("meet", "LIKE", "%$keyword%")->orWhere("checklist_1", "LIKE", "%$keyword%")->orWhere("checklist_2", "LIKE", "%$keyword%")->orWhere("checklist_3", "LIKE", "%$keyword%")->orWhere("checklist_4", "LIKE", "%$keyword%")->orWhere("checklist_5", "LIKE", "%$keyword%")->orWhere("comment", "LIKE", "%$keyword%")->orWhere("count", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $ProfileOthers = ProfileOther::paginate($perPage);
                
            }          
            return view("ProfileOthers.index", compact("ProfileOthers"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("ProfileOthers.create");
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
				"telephone" => "nullable|integer", //integer('telephone')->nullable()
				"meet" => "nullable|integer", //integer('meet')->nullable()
				"checklist_1" => "nullable|integer", //integer('checklist_1')->nullable()
				"checklist_2" => "nullable|integer", //integer('checklist_2')->nullable()
				"checklist_3" => "nullable|integer", //integer('checklist_3')->nullable()
				"checklist_4" => "nullable|integer", //integer('checklist_4')->nullable()
				"checklist_5" => "nullable|integer", //integer('checklist_5')->nullable()
				"comment" => "nullable|max:20", //string('comment',20)->nullable()
				"count" => "nullable|integer", //integer('count')->nullable()

            ]);
            $requestData = $request->all();
            
            ProfileOther::create($requestData);
    
            return redirect("ProfileOthers")->with("flash_message", "ProfileOthers added!");
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
            $ProfileOthers = ProfileOther::findOrFail($id);
    
            return view("ProfileOthers.show", compact("ProfileOthers"));
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
            $ProfileOthers = ProfileOther::findOrFail($id);
    
            return view("ProfileOthers.edit", compact("ProfileOthers"));
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
				"telephone" => "nullable|integer", //integer('telephone')->nullable()
				"meet" => "nullable|integer", //integer('meet')->nullable()
				"checklist_1" => "nullable|integer", //integer('checklist_1')->nullable()
				"checklist_2" => "nullable|integer", //integer('checklist_2')->nullable()
				"checklist_3" => "nullable|integer", //integer('checklist_3')->nullable()
				"checklist_4" => "nullable|integer", //integer('checklist_4')->nullable()
				"checklist_5" => "nullable|integer", //integer('checklist_5')->nullable()
				"comment" => "nullable|max:20", //string('comment',20)->nullable()
				"count" => "nullable|integer", //integer('count')->nullable()

            ]);
            $requestData = $request->all();
            
            $ProfileOthers = ProfileOther::findOrFail($id);
            $ProfileOthers->update($requestData);
    
            return redirect("ProfileOthers")->with("flash_message", "ProfileOthers updated!");
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
            ProfileOther::destroy($id);
    
            return redirect("ProfileOthers")->with("flash_message", "ProfileOthers deleted!");
        }
    }
    //=======================================================================
    
    