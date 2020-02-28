
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">report_profile_fake {{ $report_profile_fake->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("report_profile_fake") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("report_profile_fake") ."/". $report_profile_fake->id . "/edit" }}" title="Edit report_profile_fake"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/report_profile_fake/{{ $report_profile_fake->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$report_profile_fake->id}} </td></tr>
										<tr><th>from_user</th><td>{{$report_profile_fake->from_user}} </td></tr>
										<tr><th>to_user</th><td>{{$report_profile_fake->to_user}} </td></tr>
										<tr><th>fake_status</th><td>{{$report_profile_fake->fake_status}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    