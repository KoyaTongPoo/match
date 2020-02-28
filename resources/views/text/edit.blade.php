
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit text #{{ $text->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("text") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/text/{{ $text->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$text->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="title_id" class="col-md-4 control-label">title_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="title_id" type="text" id="title_id" value="{{$text->title_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="user_id" type="text" id="user_id" value="{{$text->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="message" class="col-md-4 control-label">message: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="message" type="text" id="message" value="{{$text->message}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image" class="col-md-4 control-label">image: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image" type="text" id="image" value="{{$text->image}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="ip" class="col-md-4 control-label">ip: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="ip" type="text" id="ip" value="{{$text->ip}}">
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
    