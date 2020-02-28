<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\QuestionReport;
    
    //=======================================================================
    class QuestionReportsController extends Controller
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
                $QuestionReports = QuestionReport::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("from_user", "LIKE", "%$keyword%")->orWhere("to_user", "LIKE", "%$keyword%")->orWhere("kanri_flg", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $QuestionReports = QuestionReport::paginate($perPage);
                
            }          
            return view("QuestionReports.index", compact("QuestionReports"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("QuestionReports.create");
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
            
            QuestionReport::create($requestData);
    
            return redirect("QuestionReports")->with("flash_message", "QuestionReports added!");
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
            $QuestionReports = QuestionReport::findOrFail($id);
    
            return view("QuestionReports.show", compact("QuestionReports"));
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
            $QuestionReports = QuestionReport::findOrFail($id);
    
            return view("QuestionReports.edit", compact("QuestionReports"));
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
            
            $QuestionReports = QuestionReport::findOrFail($id);
            $QuestionReports->update($requestData);
    
            return redirect("QuestionReports")->with("flash_message", "QuestionReports updated!");
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
            QuestionReport::destroy($id);
    
            return redirect("QuestionReports")->with("flash_message", "QuestionReports deleted!");
        }
    }
    //=======================================================================
    
    