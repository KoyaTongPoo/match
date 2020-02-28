<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Question;
    
    //=======================================================================
    class QuestionsController extends Controller
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
                $Questions = Question::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("from_user", "LIKE", "%$keyword%")->orWhere("to_user", "LIKE", "%$keyword%")->orWhere("question", "LIKE", "%$keyword%")->orWhere("answer", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Questions = Question::paginate($perPage);
                
            }          
            return view("Questions.index", compact("Questions"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Questions.create");
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
				"question" => "nullable|max:10", //string('question',10)->nullable()
				"answer" => "nullable|max:10", //string('answer',10)->nullable()

            ]);
            $requestData = $request->all();
            
            Question::create($requestData);
    
            return redirect("Questions")->with("flash_message", "Questions added!");
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
            $Questions = Question::findOrFail($id);
    
            return view("Questions.show", compact("Questions"));
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
            $Questions = Question::findOrFail($id);
    
            return view("Questions.edit", compact("Questions"));
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
				"question" => "nullable|max:10", //string('question',10)->nullable()
				"answer" => "nullable|max:10", //string('answer',10)->nullable()

            ]);
            $requestData = $request->all();
            
            $Questions = Question::findOrFail($id);
            $Questions->update($requestData);
    
            return redirect("Questions")->with("flash_message", "Questions updated!");
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
            Question::destroy($id);
    
            return redirect("Questions")->with("flash_message", "Questions deleted!");
        }
    }
    //=======================================================================
    
    