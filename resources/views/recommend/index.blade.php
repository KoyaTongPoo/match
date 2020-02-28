
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">recommend</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("recommend/create") }}" class="btn btn-success btn-sm" title="Add New recommend">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("recommend") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>


                                <br/>
                                <br/>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>id</th><th>from_user</th><th>to_man</th><th>to_woman</th><th>to_man_message</th><th>to_woman_message</th><th>man_qa_1</th><th>man_qa_2</th><th>man_qa_3</th><th>woman_qa_1</th><th>woman_qa_2</th><th>woman_qa_3</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($recommend as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->from_user}} </td>

                                            <td>{{ $item->to_man}} </td>

                                            <td>{{ $item->to_woman}} </td>

                                            <td>{{ $item->to_man_message}} </td>

                                            <td>{{ $item->to_woman_message}} </td>

                                            <td>{{ $item->man_qa_1}} </td>

                                            <td>{{ $item->man_qa_2}} </td>

                                            <td>{{ $item->man_qa_3}} </td>

                                            <td>{{ $item->woman_qa_1}} </td>

                                            <td>{{ $item->woman_qa_2}} </td>

                                            <td>{{ $item->woman_qa_3}} </td>
  
                                                <td><a href="{{ url("/recommend/" . $item->id) }}" title="View recommend"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/recommend/" . $item->id . "/edit") }}" title="Edit recommend"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/recommend/{{ $item->id }}" class="form-horizontal" style="display:inline;">
                                                        {{ csrf_field() }}
                                                        
                                                        {{ method_field("DELETE") }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                                        Delete
                                                        </button>    
                                                    </form>
                                                   </td>
                                              </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $recommend->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    