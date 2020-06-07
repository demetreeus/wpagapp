@extends('layouts.app')

@section('content')
    <div class="showPlayer">
        <section class="content-header">
            <h1>
                Player
            </h1>
        </section>
        <div class="content">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row" style="padding-left: 20px">
                        <div class="top">
                            <div class="photo">
                                <img src="{{$player->photo}}" />
                            </div>
                            <div class="profile">
                                @include('players.profile_fields')
                            </div>
                        </div>
                        <div class="bottom">
                            @include('players.skill_fields')
                        </div>

                        <a href="{{ route('players.index') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
