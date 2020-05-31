<div class="table-responsive">
    <table class="table" id="players-table">
        <thead>
            <tr>
                <th>Fname</th>
        <th>Lname</th>
        <th>Dob</th>
        <th>Nationality</th>
                <th>Position</th>
        <th>Preferred Hand</th>
        <th>Status</th>
        <th>Height</th>
        <th>Weight</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($players as $player)
            <tr>
                <td>{{ $player->fname }}</td>
            <td>{{ $player->lname }}</td>
            <td>{{ $player->dob }}</td>
            <td>{{ $player->nationality }}</td>
                <td>{{ $player->position }}</td>
            <td>{{ $player->preferred_hand }}</td>
            <td>{{ $player->status }}</td>
            <td>{{ $player->height }}</td>
            <td>{{ $player->weight }}</td>
                <td>
                    {!! Form::open(['route' => ['players.destroy', $player->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('players.show', [$player->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('players.edit', [$player->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
