
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit profile_same_gender #{{ $profile_same_gender->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("profile_same_gender") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/profile_same_gender/{{ $profile_same_gender->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$profile_same_gender->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="user_id" type="text" id="user_id" value="{{$profile_same_gender->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="profile" class="col-md-4 control-label">profile: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="profile" type="text" id="profile" value="{{$profile_same_gender->profile}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="star_love" class="col-md-4 control-label">star_love: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="star_love" type="text" id="star_love" value="{{$profile_same_gender->star_love}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="star_like" class="col-md-4 control-label">star_like: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="star_like" type="text" id="star_like" value="{{$profile_same_gender->star_like}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="star_dislike" class="col-md-4 control-label">star_dislike: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="star_dislike" type="text" id="star_dislike" value="{{$profile_same_gender->star_dislike}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for=" dislike_1" class="col-md-4 control-label"> dislike_1: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name=" dislike_1" type="text" id=" dislike_1" value="{{$profile_same_gender-> dislike_1}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="dislike_2" class="col-md-4 control-label">dislike_2: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="dislike_2" type="text" id="dislike_2" value="{{$profile_same_gender->dislike_2}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="dislike_3" class="col-md-4 control-label">dislike_3: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="dislike_3" type="text" id="dislike_3" value="{{$profile_same_gender->dislike_3}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="dislike_4" class="col-md-4 control-label">dislike_4: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="dislike_4" type="text" id="dislike_4" value="{{$profile_same_gender->dislike_4}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="dislike_5" class="col-md-4 control-label">dislike_5: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="dislike_5" type="text" id="dislike_5" value="{{$profile_same_gender->dislike_5}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="dream_3y" class="col-md-4 control-label">dream_3y: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="dream_3y" type="text" id="dream_3y" value="{{$profile_same_gender->dream_3y}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="dream_10y" class="col-md-4 control-label">dream_10y: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="dream_10y" type="text" id="dream_10y" value="{{$profile_same_gender->dream_10y}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="dream_20y" class="col-md-4 control-label">dream_20y: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="dream_20y" type="text" id="dream_20y" value="{{$profile_same_gender->dream_20y}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="dream" class="col-md-4 control-label">dream: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="dream" type="text" id="dream" value="{{$profile_same_gender->dream}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="status" class="col-md-4 control-label">status: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="status" type="text" id="status" value="{{$profile_same_gender->status}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="tobacco" class="col-md-4 control-label">tobacco: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="tobacco" type="text" id="tobacco" value="{{$profile_same_gender->tobacco}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="salary" class="col-md-4 control-label">salary: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="salary" type="text" id="salary" value="{{$profile_same_gender->salary}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="Liquor" class="col-md-4 control-label">Liquor: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="Liquor" type="text" id="Liquor" value="{{$profile_same_gender->Liquor}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="blood" class="col-md-4 control-label">blood: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="blood" type="text" id="blood" value="{{$profile_same_gender->blood}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="rikon" class="col-md-4 control-label">rikon: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="rikon" type="text" id="rikon" value="{{$profile_same_gender->rikon}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="children" class="col-md-4 control-label">children: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="children" type="text" id="children" value="{{$profile_same_gender->children}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="body" class="col-md-4 control-label">body: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="body" type="text" id="body" value="{{$profile_same_gender->body}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="height" class="col-md-4 control-label">height: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="height" type="text" id="height" value="{{$profile_same_gender->height}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="Living_together" class="col-md-4 control-label">Living_together: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="Living_together" type="text" id="Living_together" value="{{$profile_same_gender->Living_together}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="values" class="col-md-4 control-label">values: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="values" type="text" id="values" value="{{$profile_same_gender->values}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="recommend_flg" class="col-md-4 control-label">recommend_flg: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="recommend_flg" type="text" id="recommend_flg" value="{{$profile_same_gender->recommend_flg}}">
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
    