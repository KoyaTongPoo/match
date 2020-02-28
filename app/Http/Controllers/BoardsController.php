<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Board;
    
    //=======================================================================
    class BoardsController extends Controller
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
                $Boards = Board::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("title", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("published", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Boards = Board::paginate($perPage);
                
            }          
            return view("Boards.index", compact("Boards"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Boards.create");
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
				"title" => "nullable", //string('title')->nullable()
				"user_id" => "nullable", //string('user_id')->nullable()
				"published" => "nullable|date", //dateTime('published')->nullable()

            ]);
            $requestData = $request->all();
            
            Board::create($requestData);
    
            return redirect("Boards")->with("flash_message", "Boards added!");
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
            $Boards = Board::findOrFail($id);
    
            return view("Boards.show", compact("Boards"));
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
            $Boards = Board::findOrFail($id);
    
            return view("Boards.edit", compact("Boards"));
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
				"title" => "nullable", //string('title')->nullable()
				"user_id" => "nullable", //string('user_id')->nullable()
				"published" => "nullable|date", //dateTime('published')->nullable()

            ]);
            $requestData = $request->all();
            
            $Boards = Board::findOrFail($id);
            $Boards->update($requestData);
    
            return redirect("Boards")->with("flash_message", "Boards updated!");
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
            Board::destroy($id);
    
            return redirect("Boards")->with("flash_message", "Boards deleted!");
        }
    }
    //=======================================================================
    
    