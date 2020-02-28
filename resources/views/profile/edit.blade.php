
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit profile #{{ $profile->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("profile") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/profile/{{ $profile->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$profile->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="user_id" type="text" id="user_id" value="{{$profile->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="name" class="col-md-4 control-label">name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="name" type="text" id="name" value="{{$profile->name}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="profile" class="col-md-4 control-label">profile: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="profile" type="text" id="profile" value="{{$profile->profile}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="hobby" class="col-md-4 control-label">hobby: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="hobby" type="text" id="hobby" value="{{$profile->hobby}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="address" class="col-md-4 control-label">address: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="address" type="text" id="address" value="{{$profile->address}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="academic_history" class="col-md-4 control-label">academic_history: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="academic_history" type="text" id="academic_history" value="{{$profile->academic_history}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="job" class="col-md-4 control-label">job: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="job" type="text" id="job" value="{{$profile->job}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="job_address" class="col-md-4 control-label">job_address: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="job_address" type="text" id="job_address" value="{{$profile->job_address}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_1" class="col-md-4 control-label">image_1: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_1" type="text" id="image_1" value="{{$profile->image_1}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_2" class="col-md-4 control-label">image_2: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_2" type="text" id="image_2" value="{{$profile->image_2}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_3" class="col-md-4 control-label">image_3: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_3" type="text" id="image_3" value="{{$profile->image_3}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_4" class="col-md-4 control-label">image_4: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_4" type="text" id="image_4" value="{{$profile->image_4}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_5" class="col-md-4 control-label">image_5: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_5" type="text" id="image_5" value="{{$profile->image_5}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_6" class="col-md-4 control-label">image_6: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_6" type="text" id="image_6" value="{{$profile->image_6}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_7" class="col-md-4 control-label">image_7: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_7" type="text" id="image_7" value="{{$profile->image_7}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_8" class="col-md-4 control-label">image_8: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_8" type="text" id="image_8" value="{{$profile->image_8}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_9" class="col-md-4 control-label">image_9: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_9" type="text" id="image_9" value="{{$profile->image_9}}">
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
    