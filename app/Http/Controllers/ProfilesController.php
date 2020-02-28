<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Profile;
    
    //=======================================================================
    class ProfilesController extends Controller
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
                $Profiles = Profile::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("name", "LIKE", "%$keyword%")->orWhere("profile", "LIKE", "%$keyword%")->orWhere("hobby", "LIKE", "%$keyword%")->orWhere("address", "LIKE", "%$keyword%")->orWhere("academic_history", "LIKE", "%$keyword%")->orWhere("job", "LIKE", "%$keyword%")->orWhere("job_address", "LIKE", "%$keyword%")->orWhere("image_1", "LIKE", "%$keyword%")->orWhere("image_2", "LIKE", "%$keyword%")->orWhere("image_3", "LIKE", "%$keyword%")->orWhere("image_4", "LIKE", "%$keyword%")->orWhere("image_5", "LIKE", "%$keyword%")->orWhere("image_6", "LIKE", "%$keyword%")->orWhere("image_7", "LIKE", "%$keyword%")->orWhere("image_8", "LIKE", "%$keyword%")->orWhere("image_9", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Profiles = Profile::paginate($perPage);
                
            }          
            return view("Profiles.index", compact("Profiles"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Profiles.create");
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
				"name" => "nullable|max:64", //string('name',64)->nullable()
				"profile" => "nullable|max:120", //string('profile',120)->nullable()
				"hobby" => "nullable|integer", //integer('hobby')->nullable()
				"address" => "nullable", //string('address')->nullable()
				"academic_history" => "nullable|max:10", //string('academic_history',10)->nullable()
				"job" => "nullable|max:10", //string('job',10)->nullable()
				"job_address" => "nullable|max:10", //string('job_address',10)->nullable()
				"image_1" => "nullable|max:50", //string('image_1',50)->nullable()
				"image_2" => "nullable|max:50", //string('image_2',50)->nullable()
				"image_3" => "nullable|max:50", //string('image_3',50)->nullable()
				"image_4" => "nullable|max:50", //string('image_4',50)->nullable()
				"image_5" => "nullable|max:50", //string('image_5',50)->nullable()
				"image_6" => "nullable|max:50", //string('image_6',50)->nullable()
				"image_7" => "nullable|max:50", //string('image_7',50)->nullable()
				"image_8" => "nullable|max:50", //string('image_8',50)->nullable()
				"image_9" => "nullable|max:50", //string('image_9',50)->nullable()

            ]);
            $requestData = $request->all();
            
            Profile::create($requestData);
    
            return redirect("Profiles")->with("flash_message", "Profiles added!");
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
            $Profiles = Profile::findOrFail($id);
    
            return view("Profiles.show", compact("Profiles"));
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
            $Profiles = Profile::findOrFail($id);
    
            return view("Profiles.edit", compact("Profiles"));
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
				"name" => "nullable|max:64", //string('name',64)->nullable()
				"profile" => "nullable|max:120", //string('profile',120)->nullable()
				"hobby" => "nullable|integer", //integer('hobby')->nullable()
				"address" => "nullable", //string('address')->nullable()
				"academic_history" => "nullable|max:10", //string('academic_history',10)->nullable()
				"job" => "nullable|max:10", //string('job',10)->nullable()
				"job_address" => "nullable|max:10", //string('job_address',10)->nullable()
				"image_1" => "nullable|max:50", //string('image_1',50)->nullable()
				"image_2" => "nullable|max:50", //string('image_2',50)->nullable()
				"image_3" => "nullable|max:50", //string('image_3',50)->nullable()
				"image_4" => "nullable|max:50", //string('image_4',50)->nullable()
				"image_5" => "nullable|max:50", //string('image_5',50)->nullable()
				"image_6" => "nullable|max:50", //string('image_6',50)->nullable()
				"image_7" => "nullable|max:50", //string('image_7',50)->nullable()
				"image_8" => "nullable|max:50", //string('image_8',50)->nullable()
				"image_9" => "nullable|max:50", //string('image_9',50)->nullable()

            ]);
            $requestData = $request->all();
            
            $Profiles = Profile::findOrFail($id);
            $Profiles->update($requestData);
    
            return redirect("Profiles")->with("flash_message", "Profiles updated!");
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
            Profile::destroy($id);
    
            return redirect("Profiles")->with("flash_message", "Profiles deleted!");
        }
    }
    //=======================================================================
    
    