
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">message</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("message/create") }}" class="btn btn-success btn-sm" title="Add New message">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("message") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>from_user</th><th>to_user</th><th>message</th><th>read_flg</th><th>delete_flg</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($message as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->from_user}} </td>

                                            <td>{{ $item->to_user}} </td>

                                            <td>{{ $item->message}} </td>

                                            <td>{{ $item->read_flg}} </td>

                                            <td>{{ $item->delete_flg}} </td>
  
                                                <td><a href="{{ url("/message/" . $item->id) }}" title="View message"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/message/" . $item->id . "/edit") }}" title="Edit message"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/message/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $message->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    