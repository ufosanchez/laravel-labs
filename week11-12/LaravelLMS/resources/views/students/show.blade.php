@extends('layouts.admin');
@section('content')

<div class="row">
    <div class="col">
        <div class="h1 display-2">
            View Student Profile 
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card p-4">
            <h2 class="card-title">{{ $student->fname }} {{ $student->lname }}</h2>
            <p>{{ $student->email }}</p>
            <div class="card-body">
                <a href="{{ route('students.edit', $student->id) }}" class="card-link card-link fw-bold">Edit</a>
                <a href="{{ route('students.trash', $student->id) }}" class="card-link text-danger fw-bold">Delete</a>
            </div>
        </div>
    </div>
</div>

@endsection