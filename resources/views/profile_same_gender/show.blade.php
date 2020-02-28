
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">profile_same_gender {{ $profile_same_gender->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("profile_same_gender") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("profile_same_gender") ."/". $profile_same_gender->id . "/edit" }}" title="Edit profile_same_gender"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/profile_same_gender/{{ $profile_same_gender->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$profile_same_gender->id}} </td></tr>
										<tr><th>user_id</th><td>{{$profile_same_gender->user_id}} </td></tr>
										<tr><th>profile</th><td>{{$profile_same_gender->profile}} </td></tr>
										<tr><th>star_love</th><td>{{$profile_same_gender->star_love}} </td></tr>
										<tr><th>star_like</th><td>{{$profile_same_gender->star_like}} </td></tr>
										<tr><th>star_dislike</th><td>{{$profile_same_gender->star_dislike}} </td></tr>
										<tr><th> dislike_1</th><td>{{$profile_same_gender-> dislike_1}} </td></tr>
										<tr><th>dislike_2</th><td>{{$profile_same_gender->dislike_2}} </td></tr>
										<tr><th>dislike_3</th><td>{{$profile_same_gender->dislike_3}} </td></tr>
										<tr><th>dislike_4</th><td>{{$profile_same_gender->dislike_4}} </td></tr>
										<tr><th>dislike_5</th><td>{{$profile_same_gender->dislike_5}} </td></tr>
										<tr><th>dream_3y</th><td>{{$profile_same_gender->dream_3y}} </td></tr>
										<tr><th>dream_10y</th><td>{{$profile_same_gender->dream_10y}} </td></tr>
										<tr><th>dream_20y</th><td>{{$profile_same_gender->dream_20y}} </td></tr>
										<tr><th>dream</th><td>{{$profile_same_gender->dream}} </td></tr>
										<tr><th>status</th><td>{{$profile_same_gender->status}} </td></tr>
										<tr><th>tobacco</th><td>{{$profile_same_gender->tobacco}} </td></tr>
										<tr><th>salary</th><td>{{$profile_same_gender->salary}} </td></tr>
										<tr><th>Liquor</th><td>{{$profile_same_gender->Liquor}} </td></tr>
										<tr><th>blood</th><td>{{$profile_same_gender->blood}} </td></tr>
										<tr><th>rikon</th><td>{{$profile_same_gender->rikon}} </td></tr>
										<tr><th>children</th><td>{{$profile_same_gender->children}} </td></tr>
										<tr><th>body</th><td>{{$profile_same_gender->body}} </td></tr>
										<tr><th>height</th><td>{{$profile_same_gender->height}} </td></tr>
										<tr><th>Living_together</th><td>{{$profile_same_gender->Living_together}} </td></tr>
										<tr><th>values</th><td>{{$profile_same_gender->values}} </td></tr>
										<tr><th>recommend_flg</th><td>{{$profile_same_gender->recommend_flg}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    