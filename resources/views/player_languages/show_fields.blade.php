<!-- Player Id Field -->
<div class="form-group">
    {!! Form::label('player_id', 'Player Id:') !!}
    <p>{{ $playerLanguage->player_id }}</p>
</div>

<!-- Language Id Field -->
<div class="form-group">
    {!! Form::label('language_id', 'Language Id:') !!}
    <p>{{ $playerLanguage->language_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $playerLanguage->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $playerLanguage->updated_at }}</p>
</div>

