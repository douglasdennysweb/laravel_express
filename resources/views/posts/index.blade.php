@extends('app')

@section('content')
    <div class="container">
        <h2>List of Post</h2>

        <ul>
            @foreach($posts as $post)
                <li>{{ $post }}</li>
            @endforeach
        </ul>
    </div>
@endsection