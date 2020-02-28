
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">user {{ $user->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("user") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("user") ."/". $user->id . "/edit" }}" title="Edit user"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/user/{{ $user->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$user->id}} </td></tr>
										<tr><th>name</th><td>{{$user->name}} </td></tr>
										<tr><th>password</th><td>{{$user->password}} </td></tr>
										<tr><th>year</th><td>{{$user->year}} </td></tr>
										<tr><th>mouth</th><td>{{$user->mouth}} </td></tr>
										<tr><th>day</th><td>{{$user->day}} </td></tr>
										<tr><th>gender</th><td>{{$user->gender}} </td></tr>
										<tr><th>referral_code</th><td>{{$user->referral_code}} </td></tr>
										<tr><th>uranai_seikaku</th><td>{{$user->uranai_seikaku}} </td></tr>
										<tr><th>kanri_flg</th><td>{{$user->kanri_flg}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    