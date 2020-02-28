
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit profile_other #{{ $profile_other->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("profile_other") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/profile_other/{{ $profile_other->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$profile_other->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="telephone" class="col-md-4 control-label">telephone: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="telephone" type="text" id="telephone" value="{{$profile_other->telephone}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="meet" class="col-md-4 control-label">meet: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="meet" type="text" id="meet" value="{{$profile_other->meet}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="checklist_1" class="col-md-4 control-label">checklist_1: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="checklist_1" type="text" id="checklist_1" value="{{$profile_other->checklist_1}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="checklist_2" class="col-md-4 control-label">checklist_2: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="checklist_2" type="text" id="checklist_2" value="{{$profile_other->checklist_2}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="checklist_3" class="col-md-4 control-label">checklist_3: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="checklist_3" type="text" id="checklist_3" value="{{$profile_other->checklist_3}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="checklist_4" class="col-md-4 control-label">checklist_4: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="checklist_4" type="text" id="checklist_4" value="{{$profile_other->checklist_4}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="checklist_5" class="col-md-4 control-label">checklist_5: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="checklist_5" type="text" id="checklist_5" value="{{$profile_other->checklist_5}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="comment" class="col-md-4 control-label">comment: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="comment" type="text" id="comment" value="{{$profile_other->comment}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="count" class="col-md-4 control-label">count: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="count" type="text" id="count" value="{{$profile_other->count}}">
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
    