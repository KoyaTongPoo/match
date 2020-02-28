
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">profile</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("profile/create") }}" class="btn btn-success btn-sm" title="Add New profile">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("profile") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>user_id</th><th>name</th><th>profile</th><th>hobby</th><th>address</th><th>academic_history</th><th>job</th><th>job_address</th><th>image_1</th><th>image_2</th><th>image_3</th><th>image_4</th><th>image_5</th><th>image_6</th><th>image_7</th><th>image_8</th><th>image_9</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($profile as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->user_id}} </td>

                                            <td>{{ $item->name}} </td>

                                            <td>{{ $item->profile}} </td>

                                            <td>{{ $item->hobby}} </td>

                                            <td>{{ $item->address}} </td>

                                            <td>{{ $item->academic_history}} </td>

                                            <td>{{ $item->job}} </td>

                                            <td>{{ $item->job_address}} </td>

                                            <td>{{ $item->image_1}} </td>

                                            <td>{{ $item->image_2}} </td>

                                            <td>{{ $item->image_3}} </td>

                                            <td>{{ $item->image_4}} </td>

                                            <td>{{ $item->image_5}} </td>

                                            <td>{{ $item->image_6}} </td>

                                            <td>{{ $item->image_7}} </td>

                                            <td>{{ $item->image_8}} </td>

                                            <td>{{ $item->image_9}} </td>
  
                                                <td><a href="{{ url("/profile/" . $item->id) }}" title="View profile"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/profile/" . $item->id . "/edit") }}" title="Edit profile"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/profile/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $profile->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    