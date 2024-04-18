@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="display2">
                    HOME PAGE
                    <p>By: Arnulfo Sanchez</p>
                    <p id="p-arnulfo"></p>
                    <p></p>
                </h2>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            const now = new Date();

            const currentDateTime = now.toLocaleString();
            var title = document.getElementById("p-arnulfo")

            title.innerHTML = currentDateTime;
        }
    </script>
@endsection