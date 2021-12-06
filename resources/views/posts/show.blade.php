@extends('layout')

@section('content')


<h2>{{$posts->title}}</h2>
<h3>{{$posts->content}}</h3>
<h4>Added: {{$posts->created_at->diffForHumans()}}</h4>

@if((new Carbon\Carbon())->diffInMinutes($posts->created_at) < 5)
<strong>New!</strong>
@endif
@endsection('content')
