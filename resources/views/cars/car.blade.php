@extends('layouts.master')

@section('title')
    Car
@endsection()

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            This is {{$car->title}} and it is made by {{$car->producer}} !
        </div>
    </div>
</div>

@endsection()




