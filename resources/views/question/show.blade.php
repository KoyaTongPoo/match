
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">question {{ $question->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("question") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("question") ."/". $question->id . "/edit" }}" title="Edit question"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/question/{{ $question->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$question->id}} </td></tr>
										<tr><th>from_user</th><td>{{$question->from_user}} </td></tr>
										<tr><th>to_user</th><td>{{$question->to_user}} </td></tr>
										<tr><th>question</th><td>{{$question->question}} </td></tr>
										<tr><th>answer</th><td>{{$question->answer}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    