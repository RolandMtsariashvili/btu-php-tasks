@extends('layout.app')
@section('content')
    <table style="color:white;">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>author email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->author_email}}</td>
                <td>{{$post->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$posts->links()}}
@endsection
