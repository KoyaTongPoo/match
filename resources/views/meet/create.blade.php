
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New meet</div>
                            <div class="panel-body">
                                <a href="{{ url("/meet") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/meet/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="from_user" class="col-md-4 control-label">from_user: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="from_user" type="text" id="from_user" value="{{old('from_user')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="to_user" class="col-md-4 control-label">to_user: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="to_user" type="text" id="to_user" value="{{old('to_user')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="meet_day" class="col-md-4 control-label">meet_day: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="meet_day" type="date" id="meet_day" value="{{old('meet_day')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="tel_day" class="col-md-4 control-label">tel_day: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="tel_day" type="date" id="tel_day" value="{{old('tel_day')}}">
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
    