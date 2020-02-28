
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">popular_score {{ $popular_score->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("popular_score") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("popular_score") ."/". $popular_score->id . "/edit" }}" title="Edit popular_score"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/popular_score/{{ $popular_score->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$popular_score->id}} </td></tr>
										<tr><th>from_user</th><td>{{$popular_score->from_user}} </td></tr>
										<tr><th>to_user</th><td>{{$popular_score->to_user}} </td></tr>
										<tr><th>score</th><td>{{$popular_score->score}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    