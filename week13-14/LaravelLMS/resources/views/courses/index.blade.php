@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View All Courses
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card p-4">
                    <h2 class="card-title">
                        {{ $course->courseName }} {{ $course->courseID }}
                    </h2>
                </div>
            </div>
        @endforeach
    </div>
@endsection