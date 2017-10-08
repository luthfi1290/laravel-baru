<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 class="panel-title">Upload</h4></div>
                <div class="panel-body">
                    {{ Form::open(['route' => 'members.store','class' => 'form-horizontal' , 'files' => 'true']) }}
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                            {{ Form::label('title','Title',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-6">
                                {{ Form::text('title',null,['class' => 'form-control']) }}
                                {!! $errors->first('title','<p class="help-block">:message</p>')!!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                            {{ Form::label('description','Description',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-6">
                                {{ Form::textarea('description',null,['class' => 'form-control']) }}
                                {!! $errors->first('description','<p class="help-block">:message</p>')!!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('cover') ? 'has-error' : ''}}">
                            {{ Form::label('cover','Cover',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-6">
                                {{ Form::file('cover',['class' => 'form-control-file']) }}
                                {!! $errors->first('cover','<p class="help-block">:message</p>')!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>

                            
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>