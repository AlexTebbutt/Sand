@extends('layouts.master')

@section('content')

<h1>{{ $task->title }}</h1>

<article>

	{{ $task->note }}

</article>

<p>{{ link_to('/tasks', 'Back') }}</p>

<h3>Add a task</h3>

@stop