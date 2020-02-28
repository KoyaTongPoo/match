
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">profile_other {{ $profile_other->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("profile_other") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("profile_other") ."/". $profile_other->id . "/edit" }}" title="Edit profile_other"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/profile_other/{{ $profile_other->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$profile_other->id}} </td></tr>
										<tr><th>telephone</th><td>{{$profile_other->telephone}} </td></tr>
										<tr><th>meet</th><td>{{$profile_other->meet}} </td></tr>
										<tr><th>checklist_1</th><td>{{$profile_other->checklist_1}} </td></tr>
										<tr><th>checklist_2</th><td>{{$profile_other->checklist_2}} </td></tr>
										<tr><th>checklist_3</th><td>{{$profile_other->checklist_3}} </td></tr>
										<tr><th>checklist_4</th><td>{{$profile_other->checklist_4}} </td></tr>
										<tr><th>checklist_5</th><td>{{$profile_other->checklist_5}} </td></tr>
										<tr><th>comment</th><td>{{$profile_other->comment}} </td></tr>
										<tr><th>count</th><td>{{$profile_other->count}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    