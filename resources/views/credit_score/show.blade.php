
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">credit_score {{ $credit_score->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("credit_score") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("credit_score") ."/". $credit_score->id . "/edit" }}" title="Edit credit_score"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/credit_score/{{ $credit_score->id }}" class="form-horizontal" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field("delete") }}
                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                        Delete
                                        </button>    
                            </form>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
										<tr><th>id</th><td>{{$credit_score->id}} </td></tr>
										<tr><th>user_id</th><td>{{$credit_score->user_id}} </td></tr>
										<tr><th>credit_score</th><td>{{$credit_score->credit_score}} </td></tr>
										<tr><th>login_3</th><td>{{$credit_score->login_3}} </td></tr>
										<tr><th>login_10</th><td>{{$credit_score->login_10}} </td></tr>
										<tr><th>login_30</th><td>{{$credit_score->login_30}} </td></tr>
										<tr><th>login_75</th><td>{{$credit_score->login_75}} </td></tr>
										<tr><th>comment_likes_7</th><td>{{$credit_score->comment_likes_7}} </td></tr>
										<tr><th>comment_likes_30</th><td>{{$credit_score->comment_likes_30}} </td></tr>
										<tr><th>comment_likes_75</th><td>{{$credit_score->comment_likes_75}} </td></tr>
										<tr><th>comment_dislikes_7</th><td>{{$credit_score->comment_dislikes_7}} </td></tr>
										<tr><th>comment_dislikes_30</th><td>{{$credit_score->comment_dislikes_30}} </td></tr>
										<tr><th>comment_dislikes_75</th><td>{{$credit_score->comment_dislikes_75}} </td></tr>
										<tr><th>profile_checklist_1</th><td>{{$credit_score->profile_checklist_1}} </td></tr>
										<tr><th>profile_checklist_2</th><td>{{$credit_score->profile_checklist_2}} </td></tr>
										<tr><th>profile_checklist_3</th><td>{{$credit_score->profile_checklist_3}} </td></tr>
										<tr><th>profile_checklist_4</th><td>{{$credit_score->profile_checklist_4}} </td></tr>
										<tr><th>profile_checklist_5</th><td>{{$credit_score->profile_checklist_5}} </td></tr>
										<tr><th>message_response_1</th><td>{{$credit_score->message_response_1}} </td></tr>
										<tr><th>message_response_2</th><td>{{$credit_score->message_response_2}} </td></tr>
										<tr><th>message_response_3</th><td>{{$credit_score->message_response_3}} </td></tr>
										<tr><th>reported_1</th><td>{{$credit_score->reported_1}} </td></tr>
										<tr><th>reported_2</th><td>{{$credit_score->reported_2}} </td></tr>
										<tr><th>reported_3</th><td>{{$credit_score->reported_3}} </td></tr>
										<tr><th>reported_kanri</th><td>{{$credit_score->reported_kanri}} </td></tr>
										<tr><th>profile_fake</th><td>{{$credit_score->profile_fake}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    