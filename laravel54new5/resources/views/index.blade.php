

@extends('layouts.content')




@foreach($admins as $admin)
    <div class="panel panel-default">

        <div class"panel-heading">
            <a href="{{ url('admins/'.$admin->admin_id)}}">
            {{$admin->admin_name}}
            </a>
        </div>
        <div class="panel-body">{{$admin->position}}</div>
</div>
@endforeach