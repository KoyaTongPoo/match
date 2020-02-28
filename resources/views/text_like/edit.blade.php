
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit text_like #{{ $text_like->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("text_like") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/text_like/{{ $text_like->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$text_like->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="text_id" class="col-md-4 control-label">text_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="text_id" type="text" id="text_id" value="{{$text_like->text_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="user_id" type="text" id="user_id" value="{{$text_like->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="like_flg" class="col-md-4 control-label">like_flg: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="like_flg" type="text" id="like_flg" value="{{$text_like->like_flg}}">
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
    