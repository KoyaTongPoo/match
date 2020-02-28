
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">profile_same_gender</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("profile_same_gender/create") }}" class="btn btn-success btn-sm" title="Add New profile_same_gender">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("profile_same_gender") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>user_id</th><th>profile</th><th>star_love</th><th>star_like</th><th>star_dislike</th><th> dislike_1</th><th>dislike_2</th><th>dislike_3</th><th>dislike_4</th><th>dislike_5</th><th>dream_3y</th><th>dream_10y</th><th>dream_20y</th><th>dream</th><th>status</th><th>tobacco</th><th>salary</th><th>Liquor</th><th>blood</th><th>rikon</th><th>children</th><th>body</th><th>height</th><th>Living_together</th><th>values</th><th>recommend_flg</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($profile_same_gender as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->user_id}} </td>

                                            <td>{{ $item->profile}} </td>

                                            <td>{{ $item->star_love}} </td>

                                            <td>{{ $item->star_like}} </td>

                                            <td>{{ $item->star_dislike}} </td>

                                            <td>{{ $item-> dislike_1}} </td>

                                            <td>{{ $item->dislike_2}} </td>

                                            <td>{{ $item->dislike_3}} </td>

                                            <td>{{ $item->dislike_4}} </td>

                                            <td>{{ $item->dislike_5}} </td>

                                            <td>{{ $item->dream_3y}} </td>

                                            <td>{{ $item->dream_10y}} </td>

                                            <td>{{ $item->dream_20y}} </td>

                                            <td>{{ $item->dream}} </td>

                                            <td>{{ $item->status}} </td>

                                            <td>{{ $item->tobacco}} </td>

                                            <td>{{ $item->salary}} </td>

                                            <td>{{ $item->Liquor}} </td>

                                            <td>{{ $item->blood}} </td>

                                            <td>{{ $item->rikon}} </td>

                                            <td>{{ $item->children}} </td>

                                            <td>{{ $item->body}} </td>

                                            <td>{{ $item->height}} </td>

                                            <td>{{ $item->Living_together}} </td>

                                            <td>{{ $item->values}} </td>

                                            <td>{{ $item->recommend_flg}} </td>
  
                                                <td><a href="{{ url("/profile_same_gender/" . $item->id) }}" title="View profile_same_gender"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/profile_same_gender/" . $item->id . "/edit") }}" title="Edit profile_same_gender"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/profile_same_gender/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $profile_same_gender->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    