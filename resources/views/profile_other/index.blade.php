
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">profile_other</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("profile_other/create") }}" class="btn btn-success btn-sm" title="Add New profile_other">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("profile_other") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>telephone</th><th>meet</th><th>checklist_1</th><th>checklist_2</th><th>checklist_3</th><th>checklist_4</th><th>checklist_5</th><th>comment</th><th>count</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($profile_other as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->telephone}} </td>

                                            <td>{{ $item->meet}} </td>

                                            <td>{{ $item->checklist_1}} </td>

                                            <td>{{ $item->checklist_2}} </td>

                                            <td>{{ $item->checklist_3}} </td>

                                            <td>{{ $item->checklist_4}} </td>

                                            <td>{{ $item->checklist_5}} </td>

                                            <td>{{ $item->comment}} </td>

                                            <td>{{ $item->count}} </td>
  
                                                <td><a href="{{ url("/profile_other/" . $item->id) }}" title="View profile_other"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/profile_other/" . $item->id . "/edit") }}" title="Edit profile_other"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/profile_other/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $profile_other->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    