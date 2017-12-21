@extends('layouts.master')

@section('title')
    Cars
@endsection()

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
           Cars:
        </div>

        <ul>
            @foreach($cars as $car)
                <li>
                    <a href= {{route('car', ['id' => $car->id])}}> {{ $car->title }} </a>
                </li>
            @endforeach
        </ul>

    </div>
</div>

@endsection()
