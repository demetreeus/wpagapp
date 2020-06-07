<div class="table-responsive">
    <table class="table" id="playerLanguages-table">
        <thead>
            <tr>
                <th>Player Id</th>
        <th>Language Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($playerLanguages as $playerLanguage)
            <tr>
                <td>{{ $playerLanguage->player_id }}</td>
            <td>{{ $playerLanguage->language_id }}</td>
                <td>
                    {!! Form::open(['route' => ['playerLanguages.destroy', $playerLanguage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('playerLanguages.show', [$playerLanguage->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('playerLanguages.edit', [$playerLanguage->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
