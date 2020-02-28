
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit board #{{ $board->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("board") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/board/{{ $board->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$board->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="title" class="col-md-4 control-label">title: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="title" type="text" id="title" value="{{$board->title}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="user_id" type="text" id="user_id" value="{{$board->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="published" class="col-md-4 control-label">published: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="published" type="date" id="published" value="{{$board->published}}">
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
    