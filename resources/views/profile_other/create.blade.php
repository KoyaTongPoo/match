
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New profile_other</div>
                            <div class="panel-body">
                                <a href="{{ url("/profile_other") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/profile_other/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="telephone" class="col-md-4 control-label">telephone: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="telephone" type="text" id="telephone" value="{{old('telephone')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="meet" class="col-md-4 control-label">meet: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="meet" type="text" id="meet" value="{{old('meet')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="checklist_1" class="col-md-4 control-label">checklist_1: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="checklist_1" type="text" id="checklist_1" value="{{old('checklist_1')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="checklist_2" class="col-md-4 control-label">checklist_2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="checklist_2" type="text" id="checklist_2" value="{{old('checklist_2')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="checklist_3" class="col-md-4 control-label">checklist_3: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="checklist_3" type="text" id="checklist_3" value="{{old('checklist_3')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="checklist_4" class="col-md-4 control-label">checklist_4: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="checklist_4" type="text" id="checklist_4" value="{{old('checklist_4')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="checklist_5" class="col-md-4 control-label">checklist_5: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="checklist_5" type="text" id="checklist_5" value="{{old('checklist_5')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="comment" class="col-md-4 control-label">comment: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="comment" type="text" id="comment" value="{{old('comment')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="count" class="col-md-4 control-label">count: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="count" type="text" id="count" value="{{old('count')}}">
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
    