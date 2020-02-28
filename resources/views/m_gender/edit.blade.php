
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit m_gender #{{ $m_gender->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("m_gender") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/m_gender/{{ $m_gender->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$m_gender->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="m_gender_id" class="col-md-4 control-label">m_gender_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="m_gender_id" type="text" id="m_gender_id" value="{{$m_gender->m_gender_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="m_gender_name" class="col-md-4 control-label">m_gender_name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="m_gender_name" type="text" id="m_gender_name" value="{{$m_gender->m_gender_name}}">
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
    