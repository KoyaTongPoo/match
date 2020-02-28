<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Log;
    
    //=======================================================================
    class LogsController extends Controller
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
                $Logs = Log::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("access_page", "LIKE", "%$keyword%")->orWhere("time", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Logs = Log::paginate($perPage);
                
            }          
            return view("Logs.index", compact("Logs"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Logs.create");
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
				"access_page" => "nullable", //string('access_page')->nullable()
				"time" => "nullable|integer", //integer('time')->nullable()

            ]);
            $requestData = $request->all();
            
            Log::create($requestData);
    
            return redirect("Logs")->with("flash_message", "Logs added!");
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
            $Logs = Log::findOrFail($id);
    
            return view("Logs.show", compact("Logs"));
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
            $Logs = Log::findOrFail($id);
    
            return view("Logs.edit", compact("Logs"));
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
				"access_page" => "nullable", //string('access_page')->nullable()
				"time" => "nullable|integer", //integer('time')->nullable()

            ]);
            $requestData = $request->all();
            
            $Logs = Log::findOrFail($id);
            $Logs->update($requestData);
    
            return redirect("Logs")->with("flash_message", "Logs updated!");
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
            Log::destroy($id);
    
            return redirect("Logs")->with("flash_message", "Logs deleted!");
        }
    }
    //=======================================================================
    
    