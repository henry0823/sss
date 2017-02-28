<div class="row">
    <div class="col-md-12">
        <div class="form-group">
	        {{ Form::text('domain', null , ['class' => 'form-control', 'placeholder' => 'yourdomain.com.tw']) }}
        </div>
        {{ Form::submit('建立', array('class' => 'btn btn-success pull-right')) }}
    </div>
</div>