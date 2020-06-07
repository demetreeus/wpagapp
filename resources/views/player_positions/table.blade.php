<div class="table-responsive">
    <table class="table" id="playerPositions-table">
        <thead>
            <tr>
                <th>Player Id</th>
        <th>Position Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($playerPositions as $playerPosition)
            <tr>
                <td>{{ $playerPosition->player_id }}</td>
            <td>{{ $playerPosition->position_id }}</td>
                <td>
                    {!! Form::open(['route' => ['playerPositions.destroy', $playerPosition->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('playerPositions.show', [$playerPosition->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('playerPositions.edit', [$playerPosition->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
