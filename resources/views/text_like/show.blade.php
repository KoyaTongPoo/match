
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">text_like {{ $text_like->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("text_like") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("text_like") ."/". $text_like->id . "/edit" }}" title="Edit text_like"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/text_like/{{ $text_like->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$text_like->id}} </td></tr>
										<tr><th>text_id</th><td>{{$text_like->text_id}} </td></tr>
										<tr><th>user_id</th><td>{{$text_like->user_id}} </td></tr>
										<tr><th>like_flg</th><td>{{$text_like->like_flg}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    