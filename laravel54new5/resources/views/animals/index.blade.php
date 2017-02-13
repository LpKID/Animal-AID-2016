<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>index of animal</title>
     
         
         
          <style>
            label {
                display: block
            }
            
        </style>
      
    </head>
    <body>
@foreach($animals as $animal)
    <div class="panel panel-default">

        <div class"panel-heading">
            <a href="{{ url('animals/'.$animal->animal_id)}}">
            {{$animal->animal_name}}
            </a>
        </div>
        <div class="panel-body">{{$animal->animal_color}}</div>
</div>
@endforeach
 </body>
</html>

