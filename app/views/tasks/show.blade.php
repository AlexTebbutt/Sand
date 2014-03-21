@extends('layouts.master')

@section('content')

<h1>{{ $task->title }}</h1>

<article>

	{{ $task->note }}

</article>

<p>{{ link_to('/tasks', 'All Tasks') }}</p>

@stop