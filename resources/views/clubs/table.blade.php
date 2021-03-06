<div class="table-responsive">
    <table class="table" id="clubs-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Country Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clubs as $club)
            <tr>
                <td>{{ $club->name }}</td>
            <td>{{ $club->country_id }}</td>
                <td>
                    {!! Form::open(['route' => ['clubs.destroy', $club->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clubs.show', [$club->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('clubs.edit', [$club->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
