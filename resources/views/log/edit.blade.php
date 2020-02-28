
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit log #{{ $log->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("log") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/log/{{ $log->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$log->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="user_id" type="text" id="user_id" value="{{$log->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="access_page" class="col-md-4 control-label">access_page: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="access_page" type="text" id="access_page" value="{{$log->access_page}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="time" class="col-md-4 control-label">time: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="time" type="text" id="time" value="{{$log->time}}">
                                            </div>
                                        </div>
               
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>   
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    