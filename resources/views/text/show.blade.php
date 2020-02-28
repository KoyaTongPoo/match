
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">text {{ $text->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("text") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("text") ."/". $text->id . "/edit" }}" title="Edit text"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/text/{{ $text->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$text->id}} </td></tr>
										<tr><th>title_id</th><td>{{$text->title_id}} </td></tr>
										<tr><th>user_id</th><td>{{$text->user_id}} </td></tr>
										<tr><th>message</th><td>{{$text->message}} </td></tr>
										<tr><th>image</th><td>{{$text->image}} </td></tr>
										<tr><th>ip</th><td>{{$text->ip}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    