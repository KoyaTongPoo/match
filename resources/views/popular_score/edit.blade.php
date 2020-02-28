
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit popular_score #{{ $popular_score->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("popular_score") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/popular_score/{{ $popular_score->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$popular_score->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="from_user" class="col-md-4 control-label">from_user: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="from_user" type="text" id="from_user" value="{{$popular_score->from_user}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="to_user" class="col-md-4 control-label">to_user: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="to_user" type="text" id="to_user" value="{{$popular_score->to_user}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="score" class="col-md-4 control-label">score: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="score" type="text" id="score" value="{{$popular_score->score}}">
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
    