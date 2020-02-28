<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Text;
    
    //=======================================================================
    class TextsController extends Controller
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
                $Texts = Text::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("title_id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("message", "LIKE", "%$keyword%")->orWhere("image", "LIKE", "%$keyword%")->orWhere("ip", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Texts = Text::paginate($perPage);
                
            }          
            return view("Texts.index", compact("Texts"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Texts.create");
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
				"title_id" => "nullable", //string('title_id')->nullable()
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"message" => "nullable", //text('message')->nullable()
				"image" => "nullable|max:50", //string('image',50)->nullable()
				"ip" => "nullable|integer", //integer('ip')->nullable()

            ]);
            $requestData = $request->all();
            
            Text::create($requestData);
    
            return redirect("Texts")->with("flash_message", "Texts added!");
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
            $Texts = Text::findOrFail($id);
    
            return view("Texts.show", compact("Texts"));
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
            $Texts = Text::findOrFail($id);
    
            return view("Texts.edit", compact("Texts"));
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
				"title_id" => "nullable", //string('title_id')->nullable()
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"message" => "nullable", //text('message')->nullable()
				"image" => "nullable|max:50", //string('image',50)->nullable()
				"ip" => "nullable|integer", //integer('ip')->nullable()

            ]);
            $requestData = $request->all();
            
            $Texts = Text::findOrFail($id);
            $Texts->update($requestData);
    
            return redirect("Texts")->with("flash_message", "Texts updated!");
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
            Text::destroy($id);
    
            return redirect("Texts")->with("flash_message", "Texts deleted!");
        }
    }
    //=======================================================================
    
    