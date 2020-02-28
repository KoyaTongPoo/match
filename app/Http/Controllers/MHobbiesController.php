<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MHobbie;
    
    //=======================================================================
    class MHobbiesController extends Controller
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
                $MHobbies = MHobbie::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("m_hobby_id", "LIKE", "%$keyword%")->orWhere("m_hobby_name", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $MHobbies = MHobbie::paginate($perPage);
                
            }          
            return view("MHobbies.index", compact("MHobbies"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("MHobbies.create");
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
				"m_hobby_id" => "nullable|integer", //integer('m_hobby_id')->nullable()
				"m_hobby_name" => "nullable", //string('m_hobby_name')->nullable()

            ]);
            $requestData = $request->all();
            
            MHobbie::create($requestData);
    
            return redirect("MHobbies")->with("flash_message", "MHobbies added!");
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
            $MHobbies = MHobbie::findOrFail($id);
    
            return view("MHobbies.show", compact("MHobbies"));
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
            $MHobbies = MHobbie::findOrFail($id);
    
            return view("MHobbies.edit", compact("MHobbies"));
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
				"m_hobby_id" => "nullable|integer", //integer('m_hobby_id')->nullable()
				"m_hobby_name" => "nullable", //string('m_hobby_name')->nullable()

            ]);
            $requestData = $request->all();
            
            $MHobbies = MHobbie::findOrFail($id);
            $MHobbies->update($requestData);
    
            return redirect("MHobbies")->with("flash_message", "MHobbies updated!");
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
            MHobbie::destroy($id);
    
            return redirect("MHobbies")->with("flash_message", "MHobbies deleted!");
        }
    }
    //=======================================================================
    
    