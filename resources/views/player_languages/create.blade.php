@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Player Language
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'playerLanguages.store']) !!}

                        @include('player_languages.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
