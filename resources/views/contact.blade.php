
@extends('index')
@section('content')


@endsection
@section('nav')
@if(session('code') == 'admin123')
<a class="nav-link" href="homes/admin123">Home</a>
@else
  <a class="nav-link" href="homes">Home</a>
  @endif
@if(session('code') == 'admin123')
<li class="nav-item mx-2  ">
  <a class="nav-link" href="add">Add Fish</a>
</li>
@endif
<li class="nav-item mx-2 ">
  <a class="nav-link ab" href="about">About</a>
</li>
<li class="nav-item mx-2 nav-active" >
  <a class="nav-link" href="contact">Contact</a>
</li>
@endsection
@section('title')
<title>Contact</title>
@endsection
