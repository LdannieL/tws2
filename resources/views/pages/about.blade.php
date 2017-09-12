@extends('layouts.main')

@section('content')
	<img src="{{ url("/storage/$page->image") }}" style="width:200px; height:200px; clear:both; display:block; padding:2px; border-radius: 200px; border:2px solid #ddd; margin-bottom:10px;">
	<div>
		<h1>{!! $page->title !!}</h1>
		<p>{!! $page->body !!}</p>
	</div>
@stop