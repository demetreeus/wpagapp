@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Player Position
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($playerPosition, ['route' => ['playerPositions.update', $playerPosition->id], 'method' => 'patch']) !!}

                        @include('player_positions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection