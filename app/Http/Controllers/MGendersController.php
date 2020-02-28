<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MGender;
    
    //=======================================================================
    class MGendersController extends Controller
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
                $MGenders = MGender::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("m_gender_id", "LIKE", "%$keyword%")->orWhere("m_gender_name", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $MGenders = MGender::paginate($perPage);
                
            }          
            return view("MGenders.index", compact("MGenders"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("MGenders.create");
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
				"m_gender_id" => "nullable|integer", //integer('m_gender_id')->nullable()
				"m_gender_name" => "nullable", //string('m_gender_name')->nullable()

            ]);
            $requestData = $request->all();
            
            MGender::create($requestData);
    
            return redirect("MGenders")->with("flash_message", "MGenders added!");
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
            $MGenders = MGender::findOrFail($id);
    
            return view("MGenders.show", compact("MGenders"));
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
            $MGenders = MGender::findOrFail($id);
    
            return view("MGenders.edit", compact("MGenders"));
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
				"m_gender_id" => "nullable|integer", //integer('m_gender_id')->nullable()
				"m_gender_name" => "nullable", //string('m_gender_name')->nullable()

            ]);
            $requestData = $request->all();
            
            $MGenders = MGender::findOrFail($id);
            $MGenders->update($requestData);
    
            return redirect("MGenders")->with("flash_message", "MGenders updated!");
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
            MGender::destroy($id);
    
            return redirect("MGenders")->with("flash_message", "MGenders deleted!");
        }
    }
    //=======================================================================
    
    