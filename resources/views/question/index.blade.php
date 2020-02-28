
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">question</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("question/create") }}" class="btn btn-success btn-sm" title="Add New question">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("question") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>from_user</th><th>to_user</th><th>question</th><th>answer</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($question as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->from_user}} </td>

                                            <td>{{ $item->to_user}} </td>

                                            <td>{{ $item->question}} </td>

                                            <td>{{ $item->answer}} </td>
  
                                                <td><a href="{{ url("/question/" . $item->id) }}" title="View question"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/question/" . $item->id . "/edit") }}" title="Edit question"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/question/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $question->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    