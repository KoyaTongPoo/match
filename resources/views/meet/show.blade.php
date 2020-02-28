
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">meet {{ $meet->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("meet") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("meet") ."/". $meet->id . "/edit" }}" title="Edit meet"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/meet/{{ $meet->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$meet->id}} </td></tr>
										<tr><th>from_user</th><td>{{$meet->from_user}} </td></tr>
										<tr><th>to_user</th><td>{{$meet->to_user}} </td></tr>
										<tr><th>meet_day</th><td>{{$meet->meet_day}} </td></tr>
										<tr><th>tel_day</th><td>{{$meet->tel_day}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    