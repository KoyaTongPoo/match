<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\ProfileReport;
    
    //=======================================================================
    class ProfileReportsController extends Controller
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
                $ProfileReports = ProfileReport::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("from_user", "LIKE", "%$keyword%")->orWhere("to_user", "LIKE", "%$keyword%")->orWhere("kanri_flg", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $ProfileReports = ProfileReport::paginate($perPage);
                
            }          
            return view("ProfileReports.index", compact("ProfileReports"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("ProfileReports.create");
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
				"kanri_flg" => "nullable|integer", //integer('kanri_flg')->nullable()

            ]);
            $requestData = $request->all();
            
            ProfileReport::create($requestData);
    
            return redirect("ProfileReports")->with("flash_message", "ProfileReports added!");
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
            $ProfileReports = ProfileReport::findOrFail($id);
    
            return view("ProfileReports.show", compact("ProfileReports"));
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
            $ProfileReports = ProfileReport::findOrFail($id);
    
            return view("ProfileReports.edit", compact("ProfileReports"));
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
				"kanri_flg" => "nullable|integer", //integer('kanri_flg')->nullable()

            ]);
            $requestData = $request->all();
            
            $ProfileReports = ProfileReport::findOrFail($id);
            $ProfileReports->update($requestData);
    
            return redirect("ProfileReports")->with("flash_message", "ProfileReports updated!");
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
            ProfileReport::destroy($id);
    
            return redirect("ProfileReports")->with("flash_message", "ProfileReports deleted!");
        }
    }
    //=======================================================================
    
    