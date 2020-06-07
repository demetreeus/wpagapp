<h2>Player Skills</h2>
<div class="col-sm-12">
    <div class="col-md-4 col-sm-12">
        <h3>Physical</h3>
        <ul>
            <li>Acceleration: {{$player->physical_acceleration}}</li>
            <li>Pace: {{$player->physical_pace}}</li>
            <li>Power: {{$player->physical_power}}</li>
            <li>Leg Power: {{$player->physical_leg_power}}</li>
            <li>Shooting Power: {{$player->physical_shooting_power}}</li>
            <li>Flexibility: {{$player->physical_flexibility}}</li>
        </ul>
    </div>
    <div class="col-md-4 col-sm-12">
        <h3>Technical</h3>
        <ul>
            <li>Ball Handling: {{$player->technical_ball_handling}}</li>
            <li>Ball Reception: {{$player->technical_ball_reception}}</li>
            <li>Passing Accuracy: {{$player->technical_passing_accuracy}}</li>
            <li>Shooting Accuracy: {{$player->technical_shooting_accuracy}}</li>
            <li>Blocking: {{$player->technical_blocking}}</li>
            <li>Swimming Technique: {{$player->technical_swimming_technique}}</li>
        </ul>
    </div>
    <div class="col-md-4 col-sm-12">
        <h3>Tamperament</h3>
        <li>Ball Handling: {{$player->tamperament_anticipation}}</li>
        <li>Ball Reception: {{$player->tamperament_concentration}}</li>
        <li>Passing Accuracy: {{$player->tamperament_flair}}</li>
        <li>Shooting Accuracy: {{$player->tamperament_bravery}}</li>
        <li>Blocking: {{$player->tamperament_leadership}}</li>
        <li>Swimming Technique: {{$player->tamperament_consistency}}</li>
    </div>
</div>
