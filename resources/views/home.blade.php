@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/create') }}">Create</a>

                        <a href="{{ url('/posts') }}">List</a>
                    @else
                    @endauth
                </div>
            @endif
        </div>
        </body>
    </div>
</div>
@endsection
