<div id="profile" class="col-sm-12">
    <h2>Player Profile</h2>
    <!-- Fname Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fname', 'First name:') !!}
        {!! Form::text('fname', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Lname Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('lname', 'Last name:') !!}
        {!! Form::text('lname', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Dob Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('dob', 'Date of Birth:') !!}
        {!! Form::text('dob', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Nationality Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('nationality', 'Nationality:') !!}
        {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
    </div>
    <div>
    <!-- Preferred Hand Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('preferred_hand', 'Preferred Hand:') !!}
        {!! Form::select('preferred_hand', ['none' => 'Select', 'right' => 'Right', 'left' => 'Left'], null, ['class' => 'form-control']) !!}
    </div>

    <!-- Position Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('position[]', 'Position:') !!}
        {!! Form::select('position[]', ['none' => 'Select', 'goalkeeper' => 'Goal Keeper', 'point' => 'Point', 'center' => 'Center', 'wing' => 'Wing', 'post' => 'Post'], null, ['class' => 'form-control']) !!}
        {!! Form::select('position[]', ['none' => 'Select', 'goalkeeper' => 'Goal Keeper', 'point' => 'Point', 'center' => 'Center', 'wing' => 'Wing', 'post' => 'Post'], null, ['class' => 'form-control']) !!}
        {!! Form::select('position[]', ['none' => 'Select', 'goalkeeper' => 'Goal Keeper', 'point' => 'Point', 'center' => 'Center', 'wing' => 'Wing', 'post' => 'Post'], null, ['class' => 'form-control']) !!}
    </div>
    </div>
    <!-- Height Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('height', 'Height (cm):') !!}
        {!! Form::number('height', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Weight Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('weight', 'Weight (kg):') !!}
        {!! Form::number('weight', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Status Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('status', 'Status:') !!}
        {!! Form::select('status', ['Status1' => 'status1', 'Status2' => 'status2'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div id="skills">
    <h2>Player Skills</h2>
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#physical" aria-controls="physical" role="tab" data-toggle="tab">Physical</a>     </li>
        <li role="presentation">
            <a href="#technical" aria-controls="technical" role="tab" data-toggle="tab">Technical</a>
        </li>
        <li role="tamperament">
            <a href="#tamperament" aria-controls="tamperament" role="tab" data-toggle="tab">Tamperament</a>
        </li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="physical">
            <!-- Physical Acceleration Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('physical_acceleration', 'Acceleration:') !!}
                {!! Form::number('physical_acceleration', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Physical Pace Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('physical_pace', 'Pace:') !!}
                {!! Form::number('physical_pace', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Physical Power Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('physical_power', 'Power:') !!}
                {!! Form::number('physical_power', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Physical Leg Power Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('physical_leg_power', 'Leg Power:') !!}
                {!! Form::number('physical_leg_power', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Physical Shooting Power Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('physical_shooting_power', 'Shooting Power:') !!}
                {!! Form::number('physical_shooting_power', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Physical Flexibility Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('physical_flexibility', 'Flexibility:') !!}
                {!! Form::number('physical_flexibility', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="technical">
            <!-- Technical Ball Handling Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('technical_ball_handling', 'Ball Handling:') !!}
                {!! Form::number('technical_ball_handling', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Technical Ball Reception Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('technical_ball_reception', 'Ball Reception:') !!}
                {!! Form::number('technical_ball_reception', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Technical Passing Accuracy Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('technical_passing_accuracy', 'Passing Accuracy:') !!}
                {!! Form::number('technical_passing_accuracy', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Technical Shooting Accuracy Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('technical_shooting_accuracy', 'Shooting Accuracy:') !!}
                {!! Form::number('technical_shooting_accuracy', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Technical Blocking Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('technical_blocking', 'Blocking:') !!}
                {!! Form::number('technical_blocking', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Technical Swimming Technique Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('technical_swimming_technique', 'Technical Swimming Technique:') !!}
                {!! Form::number('technical_swimming_technique', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tamperament">
            <!-- Tamperament Anticipation Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('tamperament_anticipation', 'Anticipation:') !!}
                {!! Form::number('tamperament_anticipation', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Tamperament Concentration Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('tamperament_concentration', 'Concentration:') !!}
                {!! Form::number('tamperament_concentration', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Tamperament Flair Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('tamperament_flair', 'Flair:') !!}
                {!! Form::number('tamperament_flair', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Tamperament Bravery Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('tamperament_bravery', 'Bravery:') !!}
                {!! Form::number('tamperament_bravery', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Tamperament Leadership Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('tamperament_leadership', 'Leadership:') !!}
                {!! Form::number('tamperament_leadership', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Tamperament Consistency Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('tamperament_consistency', 'Consistency:') !!}
                {!! Form::number('tamperament_consistency', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('players.index') }}" class="btn btn-default">Cancel</a>
</div>
