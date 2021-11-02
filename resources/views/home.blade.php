@extends('master')

@section('title', "This is the title")

@section('content')
<form action="/create" method="POST">
@csrf
<div>
    <input type="text" name="title" placeholder="title"/>
    </div>
    <div>
    <input type="text" name="content" placeholder="Say something"/>
    </div>
    <input type='submit' value="Post"/>
</form>

<h1>
    <ul>
    @foreach($messages as $message)
            <li>
            {{$message->title}}<br />
            {{$message->content}}<br />
            <a href="/view/{{$message->id}}">View</a>
    @endforeach
    </ul>
</h1>
@endsection
