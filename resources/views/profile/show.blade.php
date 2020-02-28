
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">profile {{ $profile->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("profile") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("profile") ."/". $profile->id . "/edit" }}" title="Edit profile"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/profile/{{ $profile->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$profile->id}} </td></tr>
										<tr><th>user_id</th><td>{{$profile->user_id}} </td></tr>
										<tr><th>name</th><td>{{$profile->name}} </td></tr>
										<tr><th>profile</th><td>{{$profile->profile}} </td></tr>
										<tr><th>hobby</th><td>{{$profile->hobby}} </td></tr>
										<tr><th>address</th><td>{{$profile->address}} </td></tr>
										<tr><th>academic_history</th><td>{{$profile->academic_history}} </td></tr>
										<tr><th>job</th><td>{{$profile->job}} </td></tr>
										<tr><th>job_address</th><td>{{$profile->job_address}} </td></tr>
										<tr><th>image_1</th><td>{{$profile->image_1}} </td></tr>
										<tr><th>image_2</th><td>{{$profile->image_2}} </td></tr>
										<tr><th>image_3</th><td>{{$profile->image_3}} </td></tr>
										<tr><th>image_4</th><td>{{$profile->image_4}} </td></tr>
										<tr><th>image_5</th><td>{{$profile->image_5}} </td></tr>
										<tr><th>image_6</th><td>{{$profile->image_6}} </td></tr>
										<tr><th>image_7</th><td>{{$profile->image_7}} </td></tr>
										<tr><th>image_8</th><td>{{$profile->image_8}} </td></tr>
										<tr><th>image_9</th><td>{{$profile->image_9}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    