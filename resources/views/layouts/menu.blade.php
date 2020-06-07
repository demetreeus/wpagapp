<li class="{{ Request::is('players*') ? 'active' : '' }}">
    <a href="{{ route('players.index') }}"><i class="fa fa-edit"></i><span>Players</span></a>
</li>

<li class="{{ Request::is('positions*') ? 'active' : '' }}">
    <a href="{{ route('positions.index') }}"><i class="fa fa-edit"></i><span>Positions</span></a>
</li>

<li class="{{ Request::is('languages*') ? 'active' : '' }}">
    <a href="{{ route('languages.index') }}"><i class="fa fa-edit"></i><span>Languages</span></a>
</li>

<li class="{{ Request::is('nationalities*') ? 'active' : '' }}">
    <a href="{{ route('nationalities.index') }}"><i class="fa fa-edit"></i><span>Nationalities</span></a>
</li>

<li class="{{ Request::is('clubs*') ? 'active' : '' }}">
    <a href="{{ route('clubs.index') }}"><i class="fa fa-edit"></i><span>Clubs</span></a>
</li>

<li class="{{ Request::is('countries*') ? 'active' : '' }}">
    <a href="{{ route('countries.index') }}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>

