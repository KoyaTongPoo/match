<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Message;
    
    //=======================================================================
    class MessagesController extends Controller
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
                $Messages = Message::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("from_user", "LIKE", "%$keyword%")->orWhere("to_user", "LIKE", "%$keyword%")->orWhere("message", "LIKE", "%$keyword%")->orWhere("read_flg", "LIKE", "%$keyword%")->orWhere("delete_flg", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Messages = Message::paginate($perPage);
                
            }          
            return view("Messages.index", compact("Messages"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Messages.create");
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
				"message" => "nullable", //text('message')->nullable()
				"read_flg" => "nullable|integer", //integer('read_flg')->nullable()
				"delete_flg" => "nullable|integer", //integer('delete_flg')->nullable()

            ]);
            $requestData = $request->all();
            
            Message::create($requestData);
    
            return redirect("Messages")->with("flash_message", "Messages added!");
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
            $Messages = Message::findOrFail($id);
    
            return view("Messages.show", compact("Messages"));
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
            $Messages = Message::findOrFail($id);
    
            return view("Messages.edit", compact("Messages"));
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
				"message" => "nullable", //text('message')->nullable()
				"read_flg" => "nullable|integer", //integer('read_flg')->nullable()
				"delete_flg" => "nullable|integer", //integer('delete_flg')->nullable()

            ]);
            $requestData = $request->all();
            
            $Messages = Message::findOrFail($id);
            $Messages->update($requestData);
    
            return redirect("Messages")->with("flash_message", "Messages updated!");
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
            Message::destroy($id);
    
            return redirect("Messages")->with("flash_message", "Messages deleted!");
        }
    }
    //=======================================================================
    
    