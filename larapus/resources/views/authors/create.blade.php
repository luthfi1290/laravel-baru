<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#createModal"><span class="glyphicon glyphicon-plus"></span></button>
<br><br>
<!-- Modal -->
<div id="createModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(['route' => 'authors.store','class' =>'form-horizontal']) }}
          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            {{ Form::label('name','Name',['class'=> 'control-label col-md-4'])}}
            <div class="col-md-6">
              {{ Form::text('name',null,['class' => 'form-control'])}}
              {!! $errors->first('name','<p class="help-block">:message</p>')!!}
            </div>
          </div>
          <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
            {{ Form::label('email','Email',['class'=> 'control-label col-md-4'])}}
            <div class="col-md-6">
              {{ Form::email('email',null,['class' => 'form-control'])}}
              {!! $errors->first('email','<p class="help-block">:message</p>')!!}
            </div>
          </div>
          <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
            {{ Form::label('password','Password',['class'=> 'control-label col-md-4'])}}
            <div class="col-md-6">
              {{ Form::password('password',['class' => 'form-control'])}}
              {!! $errors->first('password','<p class="help-block">:message</p>')!!}
            </div>
          </div>
          <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
            {{ Form::label('password_confirmation','Password Confirm',['class'=> 'control-label col-md-4'])}}
            <div class="col-md-6">
              {{ Form::password('password_confirmation',['class' => 'form-control'])}}
              {!! $errors->first('password_confirmation','<p class="help-block">:message</p>')!!}
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
