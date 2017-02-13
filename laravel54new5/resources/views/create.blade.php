{!! Form::open(['url'=>'animals']) !!}

<div class="form-group">
{!! Form::label('animal_name','Name: ') !!}
{!! Form::text('animal_color', null , ['class'=>'form-control']) !!}
</div>





{!! Form::close()!!}