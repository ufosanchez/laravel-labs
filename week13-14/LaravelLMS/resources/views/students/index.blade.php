@extends('layouts.admin');
@section('content')

<div class="row">
    <div class="col">
        <div class="h3 display-2">
            Students List
        </div>
    </div>
</div>

<div class="row">
    @foreach ($students as $student)
    <div class="col-md-3 pb-3">
        <div class="card p-1">
            <div class="card-title text-black">
                <h2>{{ $student->fname}} {{$student->lname}}</h2>
                <p class="fw-bold">{{$student->email}}</p>
                <a href="{{ route('students.show', $student->id) }}" class="card-link fw-bold">Details</a>
                <a href="{{ route('students.trash', $student -> id )}}" class="card-link text-danger fw-bold">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection