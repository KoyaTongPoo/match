
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">recommend {{ $recommend->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("recommend") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("recommend") ."/". $recommend->id . "/edit" }}" title="Edit recommend"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/recommend/{{ $recommend->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$recommend->id}} </td></tr>
										<tr><th>from_user</th><td>{{$recommend->from_user}} </td></tr>
										<tr><th>to_man</th><td>{{$recommend->to_man}} </td></tr>
										<tr><th>to_woman</th><td>{{$recommend->to_woman}} </td></tr>
										<tr><th>to_man_message</th><td>{{$recommend->to_man_message}} </td></tr>
										<tr><th>to_woman_message</th><td>{{$recommend->to_woman_message}} </td></tr>
										<tr><th>man_qa_1</th><td>{{$recommend->man_qa_1}} </td></tr>
										<tr><th>man_qa_2</th><td>{{$recommend->man_qa_2}} </td></tr>
										<tr><th>man_qa_3</th><td>{{$recommend->man_qa_3}} </td></tr>
										<tr><th>woman_qa_1</th><td>{{$recommend->woman_qa_1}} </td></tr>
										<tr><th>woman_qa_2</th><td>{{$recommend->woman_qa_2}} </td></tr>
										<tr><th>woman_qa_3</th><td>{{$recommend->woman_qa_3}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    