
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New user</div>
                            <div class="panel-body">
                                <a href="{{ url("/user") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/user/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="name" class="col-md-4 control-label">name: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="name" type="text" id="name" value="{{old('name')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="password" class="col-md-4 control-label">password: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="password" type="text" id="password" value="{{old('password')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="year" class="col-md-4 control-label">year: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="year" type="text" id="year" value="{{old('year')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="mouth" class="col-md-4 control-label">mouth: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="mouth" type="text" id="mouth" value="{{old('mouth')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="day" class="col-md-4 control-label">day: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="day" type="text" id="day" value="{{old('day')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="gender" class="col-md-4 control-label">gender: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="gender" type="text" id="gender" value="{{old('gender')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="referral_code" class="col-md-4 control-label">referral_code: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="referral_code" type="text" id="referral_code" value="{{old('referral_code')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="uranai_seikaku" class="col-md-4 control-label">uranai_seikaku: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="uranai_seikaku" type="text" id="uranai_seikaku" value="{{old('uranai_seikaku')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="kanri_flg" class="col-md-4 control-label">kanri_flg: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="kanri_flg" type="text" id="kanri_flg" value="{{old('kanri_flg')}}">
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
    