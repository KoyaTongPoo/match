
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">matching {{ $matching->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("matching") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("matching") ."/". $matching->id . "/edit" }}" title="Edit matching"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/matching/{{ $matching->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$matching->id}} </td></tr>
										<tr><th>from_user</th><td>{{$matching->from_user}} </td></tr>
										<tr><th>to_user</th><td>{{$matching->to_user}} </td></tr>
										<tr><th>flg</th><td>{{$matching->flg}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    