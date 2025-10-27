@extends('layouts.master')

@section('title', 'Alumni Events')

@section('page', 'Events')

@section('content')
<div class="page-header">
  <h1>Events</h1>
  <div class="add-btn-container">
    <a class="add_btn" href="{{ url('/events/create') }}">Update Events</a>
  </div>
</div>

<div class="table">
  <table style="width:100%;" border="5" cellpadding="1" cellspacing="5">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Location</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($event as $events)
      <tr>
        <td><a href="/events/{{$events->id}}">{{ $events->name }}</a></td>
        <td>{{ $events->description }}</td>
        <td>{{ $events->location }}</td>
        <td>{{ $events->date }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
