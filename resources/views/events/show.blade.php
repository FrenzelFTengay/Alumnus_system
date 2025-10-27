@extends('layouts.master')

@section('title', 'Alumni Events')

@section('page', 'Events')

@section('content')

<div class="table">
  <h2> {{$event->name}}</h2>
  <h4> {{$event->description}}</h4>
</div>
@endsection
