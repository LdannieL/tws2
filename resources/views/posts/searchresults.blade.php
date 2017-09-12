@extends('layouts.main')

@section('content')
    <div class="single-left">
        <div class="single-left1">
            <search keyword="{{ $keyword }}" ></search>
        </div>
    </div>
{{-- {!! $posts->render() !!} --}}
@stop
