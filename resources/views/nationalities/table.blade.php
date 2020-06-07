<div class="table-responsive">
    <table class="table" id="nationalities-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($nationalities as $nationality)
            <tr>
                <td>{{ $nationality->name }}</td>
                <td>
                    {!! Form::open(['route' => ['nationalities.destroy', $nationality->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('nationalities.show', [$nationality->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('nationalities.edit', [$nationality->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
