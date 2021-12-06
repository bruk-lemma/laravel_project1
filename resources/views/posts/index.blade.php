@extends('layout')

@section('content')

 @forelse($posts as $post)
<p>
    <h3>{{$post->title}}</h3>
    <h3>{{$post->content}}</h3>
</p>
@empty
<p>NO Blog Post Yet...</p>
 @endforelse

@endsection('content')

