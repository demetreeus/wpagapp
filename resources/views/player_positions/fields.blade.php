<!-- Player Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_id', 'Player Id:') !!}
    {!! Form::number('player_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position_id', 'Position Id:') !!}
    {!! Form::number('position_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('playerPositions.index') }}" class="btn btn-default">Cancel</a>
</div>
