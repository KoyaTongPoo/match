
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">m_hobbie {{ $m_hobbie->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("m_hobbie") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("m_hobbie") ."/". $m_hobbie->id . "/edit" }}" title="Edit m_hobbie"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/m_hobbie/{{ $m_hobbie->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$m_hobbie->id}} </td></tr>
										<tr><th>m_hobby_id</th><td>{{$m_hobbie->m_hobby_id}} </td></tr>
										<tr><th>m_hobby_name</th><td>{{$m_hobbie->m_hobby_name}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    