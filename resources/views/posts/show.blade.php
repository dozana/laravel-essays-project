@extends('layouts.app-layout')

@section('content')
    <h4>{{ $post->title }}</h4>
    <div>Posted {{ $post->date->diffForHumans() }} by {{ $post->author }}</div>
    <div>{{ $post->contents }}</div>
@endsection
