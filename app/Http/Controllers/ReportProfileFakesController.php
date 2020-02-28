<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\ReportProfileFake;
    
    //=======================================================================
    class ReportProfileFakesController extends Controller
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
                $ReportProfileFakes = ReportProfileFake::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("from_user", "LIKE", "%$keyword%")->orWhere("to_user", "LIKE", "%$keyword%")->orWhere("fake_status", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $ReportProfileFakes = ReportProfileFake::paginate($perPage);
                
            }          
            return view("ReportProfileFakes.index", compact("ReportProfileFakes"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("ReportProfileFakes.create");
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
				"fake_status" => "nullable|max:10", //string('fake_status',10)->nullable()

            ]);
            $requestData = $request->all();
            
            ReportProfileFake::create($requestData);
    
            return redirect("ReportProfileFakes")->with("flash_message", "ReportProfileFakes added!");
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
            $ReportProfileFakes = ReportProfileFake::findOrFail($id);
    
            return view("ReportProfileFakes.show", compact("ReportProfileFakes"));
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
            $ReportProfileFakes = ReportProfileFake::findOrFail($id);
    
            return view("ReportProfileFakes.edit", compact("ReportProfileFakes"));
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
				"fake_status" => "nullable|max:10", //string('fake_status',10)->nullable()

            ]);
            $requestData = $request->all();
            
            $ReportProfileFakes = ReportProfileFake::findOrFail($id);
            $ReportProfileFakes->update($requestData);
    
            return redirect("ReportProfileFakes")->with("flash_message", "ReportProfileFakes updated!");
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
            ReportProfileFake::destroy($id);
    
            return redirect("ReportProfileFakes")->with("flash_message", "ReportProfileFakes deleted!");
        }
    }
    //=======================================================================
    
    