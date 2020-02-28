
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">message {{ $message->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("message") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("message") ."/". $message->id . "/edit" }}" title="Edit message"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/message/{{ $message->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$message->id}} </td></tr>
										<tr><th>from_user</th><td>{{$message->from_user}} </td></tr>
										<tr><th>to_user</th><td>{{$message->to_user}} </td></tr>
										<tr><th>message</th><td>{{$message->message}} </td></tr>
										<tr><th>read_flg</th><td>{{$message->read_flg}} </td></tr>
										<tr><th>delete_flg</th><td>{{$message->delete_flg}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    