
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New credit_score</div>
                            <div class="panel-body">
                                <a href="{{ url("/credit_score") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/credit_score/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="user_id" type="text" id="user_id" value="{{old('user_id')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="credit_score" class="col-md-4 control-label">credit_score: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="credit_score" type="text" id="credit_score" value="{{old('credit_score')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="login_3" class="col-md-4 control-label">login_3: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="login_3" type="text" id="login_3" value="{{old('login_3')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="login_10" class="col-md-4 control-label">login_10: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="login_10" type="text" id="login_10" value="{{old('login_10')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="login_30" class="col-md-4 control-label">login_30: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="login_30" type="text" id="login_30" value="{{old('login_30')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="login_75" class="col-md-4 control-label">login_75: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="login_75" type="text" id="login_75" value="{{old('login_75')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="comment_likes_7" class="col-md-4 control-label">comment_likes_7: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="comment_likes_7" type="text" id="comment_likes_7" value="{{old('comment_likes_7')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="comment_likes_30" class="col-md-4 control-label">comment_likes_30: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="comment_likes_30" type="text" id="comment_likes_30" value="{{old('comment_likes_30')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="comment_likes_75" class="col-md-4 control-label">comment_likes_75: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="comment_likes_75" type="text" id="comment_likes_75" value="{{old('comment_likes_75')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="comment_dislikes_7" class="col-md-4 control-label">comment_dislikes_7: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="comment_dislikes_7" type="text" id="comment_dislikes_7" value="{{old('comment_dislikes_7')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="comment_dislikes_30" class="col-md-4 control-label">comment_dislikes_30: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="comment_dislikes_30" type="text" id="comment_dislikes_30" value="{{old('comment_dislikes_30')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="comment_dislikes_75" class="col-md-4 control-label">comment_dislikes_75: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="comment_dislikes_75" type="text" id="comment_dislikes_75" value="{{old('comment_dislikes_75')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="profile_checklist_1" class="col-md-4 control-label">profile_checklist_1: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="profile_checklist_1" type="text" id="profile_checklist_1" value="{{old('profile_checklist_1')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="profile_checklist_2" class="col-md-4 control-label">profile_checklist_2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="profile_checklist_2" type="text" id="profile_checklist_2" value="{{old('profile_checklist_2')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="profile_checklist_3" class="col-md-4 control-label">profile_checklist_3: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="profile_checklist_3" type="text" id="profile_checklist_3" value="{{old('profile_checklist_3')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="profile_checklist_4" class="col-md-4 control-label">profile_checklist_4: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="profile_checklist_4" type="text" id="profile_checklist_4" value="{{old('profile_checklist_4')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="profile_checklist_5" class="col-md-4 control-label">profile_checklist_5: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="profile_checklist_5" type="text" id="profile_checklist_5" value="{{old('profile_checklist_5')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="message_response_1" class="col-md-4 control-label">message_response_1: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="message_response_1" type="text" id="message_response_1" value="{{old('message_response_1')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="message_response_2" class="col-md-4 control-label">message_response_2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="message_response_2" type="text" id="message_response_2" value="{{old('message_response_2')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="message_response_3" class="col-md-4 control-label">message_response_3: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="message_response_3" type="text" id="message_response_3" value="{{old('message_response_3')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="reported_1" class="col-md-4 control-label">reported_1: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="reported_1" type="text" id="reported_1" value="{{old('reported_1')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="reported_2" class="col-md-4 control-label">reported_2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="reported_2" type="text" id="reported_2" value="{{old('reported_2')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="reported_3" class="col-md-4 control-label">reported_3: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="reported_3" type="text" id="reported_3" value="{{old('reported_3')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="reported_kanri" class="col-md-4 control-label">reported_kanri: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="reported_kanri" type="text" id="reported_kanri" value="{{old('reported_kanri')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="profile_fake" class="col-md-4 control-label">profile_fake: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="profile_fake" type="text" id="profile_fake" value="{{old('profile_fake')}}">
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Create">
                                        </div>
                                    </div>     
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    