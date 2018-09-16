

<h1>Create a new Rubrix</h1>

{!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::submit('Create Rubrix', ['class'=>'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}
