
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New recommend</div>
                            <div class="panel-body">
                                <a href="{{ url("/recommend") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/recommend/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="from_user" class="col-md-4 control-label">from_user: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="from_user" type="text" id="from_user" value="{{old('from_user')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="to_man" class="col-md-4 control-label">to_man: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="to_man" type="text" id="to_man" value="{{old('to_man')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="to_woman" class="col-md-4 control-label">to_woman: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="to_woman" type="text" id="to_woman" value="{{old('to_woman')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="to_man_message" class="col-md-4 control-label">to_man_message: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="to_man_message" type="text" id="to_man_message" value="{{old('to_man_message')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="to_woman_message" class="col-md-4 control-label">to_woman_message: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="to_woman_message" type="text" id="to_woman_message" value="{{old('to_woman_message')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="man_qa_1" class="col-md-4 control-label">man_qa_1: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="man_qa_1" type="text" id="man_qa_1" value="{{old('man_qa_1')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="man_qa_2" class="col-md-4 control-label">man_qa_2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="man_qa_2" type="text" id="man_qa_2" value="{{old('man_qa_2')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="man_qa_3" class="col-md-4 control-label">man_qa_3: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="man_qa_3" type="text" id="man_qa_3" value="{{old('man_qa_3')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="woman_qa_1" class="col-md-4 control-label">woman_qa_1: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="woman_qa_1" type="text" id="woman_qa_1" value="{{old('woman_qa_1')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="woman_qa_2" class="col-md-4 control-label">woman_qa_2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="woman_qa_2" type="text" id="woman_qa_2" value="{{old('woman_qa_2')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="woman_qa_3" class="col-md-4 control-label">woman_qa_3: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="woman_qa_3" type="text" id="woman_qa_3" value="{{old('woman_qa_3')}}">
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
    