
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New m_hobbie</div>
                            <div class="panel-body">
                                <a href="{{ url("/m_hobbie") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/m_hobbie/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="m_hobby_id" class="col-md-4 control-label">m_hobby_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="m_hobby_id" type="text" id="m_hobby_id" value="{{old('m_hobby_id')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="m_hobby_name" class="col-md-4 control-label">m_hobby_name: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="m_hobby_name" type="text" id="m_hobby_name" value="{{old('m_hobby_name')}}">
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
    