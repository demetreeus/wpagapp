<!-- Player Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_id', 'Player Id:') !!}
    {!! Form::number('player_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', 'Language Id:') !!}
    {!! Form::number('language_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('playerLanguages.index') }}" class="btn btn-default">Cancel</a>
</div>
