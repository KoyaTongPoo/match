
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">credit_score</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("credit_score/create") }}" class="btn btn-success btn-sm" title="Add New credit_score">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("credit_score") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>user_id</th><th>credit_score</th><th>login_3</th><th>login_10</th><th>login_30</th><th>login_75</th><th>comment_likes_7</th><th>comment_likes_30</th><th>comment_likes_75</th><th>comment_dislikes_7</th><th>comment_dislikes_30</th><th>comment_dislikes_75</th><th>profile_checklist_1</th><th>profile_checklist_2</th><th>profile_checklist_3</th><th>profile_checklist_4</th><th>profile_checklist_5</th><th>message_response_1</th><th>message_response_2</th><th>message_response_3</th><th>reported_1</th><th>reported_2</th><th>reported_3</th><th>reported_kanri</th><th>profile_fake</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($credit_score as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->user_id}} </td>

                                            <td>{{ $item->credit_score}} </td>

                                            <td>{{ $item->login_3}} </td>

                                            <td>{{ $item->login_10}} </td>

                                            <td>{{ $item->login_30}} </td>

                                            <td>{{ $item->login_75}} </td>

                                            <td>{{ $item->comment_likes_7}} </td>

                                            <td>{{ $item->comment_likes_30}} </td>

                                            <td>{{ $item->comment_likes_75}} </td>

                                            <td>{{ $item->comment_dislikes_7}} </td>

                                            <td>{{ $item->comment_dislikes_30}} </td>

                                            <td>{{ $item->comment_dislikes_75}} </td>

                                            <td>{{ $item->profile_checklist_1}} </td>

                                            <td>{{ $item->profile_checklist_2}} </td>

                                            <td>{{ $item->profile_checklist_3}} </td>

                                            <td>{{ $item->profile_checklist_4}} </td>

                                            <td>{{ $item->profile_checklist_5}} </td>

                                            <td>{{ $item->message_response_1}} </td>

                                            <td>{{ $item->message_response_2}} </td>

                                            <td>{{ $item->message_response_3}} </td>

                                            <td>{{ $item->reported_1}} </td>

                                            <td>{{ $item->reported_2}} </td>

                                            <td>{{ $item->reported_3}} </td>

                                            <td>{{ $item->reported_kanri}} </td>

                                            <td>{{ $item->profile_fake}} </td>
  
                                                <td><a href="{{ url("/credit_score/" . $item->id) }}" title="View credit_score"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/credit_score/" . $item->id . "/edit") }}" title="Edit credit_score"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/credit_score/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $credit_score->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    