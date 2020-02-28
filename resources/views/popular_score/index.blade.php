
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">popular_score</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("popular_score/create") }}" class="btn btn-success btn-sm" title="Add New popular_score">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("popular_score") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>from_user</th><th>to_user</th><th>score</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($popular_score as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->from_user}} </td>

                                            <td>{{ $item->to_user}} </td>

                                            <td>{{ $item->score}} </td>
  
                                                <td><a href="{{ url("/popular_score/" . $item->id) }}" title="View popular_score"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/popular_score/" . $item->id . "/edit") }}" title="Edit popular_score"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/popular_score/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $popular_score->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    