<!-- Player Id Field -->
<div class="form-group">
    {!! Form::label('player_id', 'Player Id:') !!}
    <p>{{ $playerPosition->player_id }}</p>
</div>

<!-- Position Id Field -->
<div class="form-group">
    {!! Form::label('position_id', 'Position Id:') !!}
    <p>{{ $playerPosition->position_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $playerPosition->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $playerPosition->updated_at }}</p>
</div>

