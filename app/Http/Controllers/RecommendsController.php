<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Recommend;
    
    //=======================================================================
    class RecommendsController extends Controller
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
                $Recommends = Recommend::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("from_user", "LIKE", "%$keyword%")->orWhere("to_man", "LIKE", "%$keyword%")->orWhere("to_woman", "LIKE", "%$keyword%")->orWhere("to_man_message", "LIKE", "%$keyword%")->orWhere("to_woman_message", "LIKE", "%$keyword%")->orWhere("man_qa_1", "LIKE", "%$keyword%")->orWhere("man_qa_2", "LIKE", "%$keyword%")->orWhere("man_qa_3", "LIKE", "%$keyword%")->orWhere("woman_qa_1", "LIKE", "%$keyword%")->orWhere("woman_qa_2", "LIKE", "%$keyword%")->orWhere("woman_qa_3", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Recommends = Recommend::paginate($perPage);
                
            }          
            return view("Recommends.index", compact("Recommends"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Recommends.create");
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
				"to_man" => "nullable|integer", //integer('to_man')->nullable()
				"to_woman" => "nullable|integer", //integer('to_woman')->nullable()
				"to_man_message" => "nullable|max:20", //string('to_man_message',20)->nullable()
				"to_woman_message" => "nullable|max:20", //string('to_woman_message',20)->nullable()
				"man_qa_1" => "nullable|integer", //integer('man_qa_1')->nullable()
				"man_qa_2" => "nullable|integer", //integer('man_qa_2')->nullable()
				"man_qa_3" => "nullable|integer", //integer('man_qa_3')->nullable()
				"woman_qa_1" => "nullable|integer", //integer('woman_qa_1')->nullable()
				"woman_qa_2" => "nullable|integer", //integer('woman_qa_2')->nullable()
				"woman_qa_3" => "nullable|integer", //integer('woman_qa_3')->nullable()

            ]);
            $requestData = $request->all();
            
            Recommend::create($requestData);
    
            return redirect("Recommends")->with("flash_message", "Recommends added!");
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
            $Recommends = Recommend::findOrFail($id);
    
            return view("Recommends.show", compact("Recommends"));
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
            $Recommends = Recommend::findOrFail($id);
    
            return view("Recommends.edit", compact("Recommends"));
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
				"to_man" => "nullable|integer", //integer('to_man')->nullable()
				"to_woman" => "nullable|integer", //integer('to_woman')->nullable()
				"to_man_message" => "nullable|max:20", //string('to_man_message',20)->nullable()
				"to_woman_message" => "nullable|max:20", //string('to_woman_message',20)->nullable()
				"man_qa_1" => "nullable|integer", //integer('man_qa_1')->nullable()
				"man_qa_2" => "nullable|integer", //integer('man_qa_2')->nullable()
				"man_qa_3" => "nullable|integer", //integer('man_qa_3')->nullable()
				"woman_qa_1" => "nullable|integer", //integer('woman_qa_1')->nullable()
				"woman_qa_2" => "nullable|integer", //integer('woman_qa_2')->nullable()
				"woman_qa_3" => "nullable|integer", //integer('woman_qa_3')->nullable()

            ]);
            $requestData = $request->all();
            
            $Recommends = Recommend::findOrFail($id);
            $Recommends->update($requestData);
    
            return redirect("Recommends")->with("flash_message", "Recommends updated!");
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
            Recommend::destroy($id);
    
            return redirect("Recommends")->with("flash_message", "Recommends deleted!");
        }
    }
    //=======================================================================
    
    