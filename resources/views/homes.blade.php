
  @extends('index')
    @section('content')

    <div class="container">
      @if(session('hi'))
      <div class="alert alert-danger">
      {{session('hi')}}
        </div>
      @endif

      {{$data -> links()}}
      <div class="row">
      @foreach($data as $fish)
    <div class="col-md  ">
      @if(!session('code'))
      <img src="Fish_Image/{{$fish -> fish_Image}}" alt="" style ="height:150px;width:150px;" class="img-thumbnail">
      @else
      <img src="../Fish_Image/{{$fish -> fish_Image}}" alt="" style ="height:150px;width:150px;" class="img-thumbnail">
      @endif
      <p>Name:  {{$fish -> fish_Name}}</p>
      <a href='{{url("/Fish_Detail/$fish->id")}}'>
        <button class = "btn btn-info">Detail</button>
      </a><br><br>
    </div><br>
      @endforeach
    </div><br>
    <!--
    <table class="table table-hover" id = "table">

      <thead class="table-dark">
        <th>Id</th>
        <th>Image</th>
        <th>Name</th>
        <th>Rate</th>
        <th>Quantity</th>
        <th>Packing</th>
        <th>Detail</th>
      </thead>
      <tbody class="table-info">
        @foreach($data as $fish)
      <tr>
        <td>{{$fish -> id}}</td>
        <td><img src="../Fish_Image/{{$fish -> fish_Image}}" alt="" style ="height:150px;width:150px;" class="img-thumbnail"></td>
        <td>{{$fish -> fish_Name}}</td>
        <td>{{$fish -> fish_Rate}}</td>
        <td>{{$fish -> fish_Quantity}}</td>
        <td>{{$fish -> fish_Packing}}</td>
        <td>
          <a href='{{url("/Fish_Detail/$fish->id")}}'>
            <button class = "btn btn-info">Detail</button>
          </a>
        </td>

      </tr>
        @endforeach
      </tbody>
    </table> -->
    </div>

    @endsection
    @section('nav')
    <li class="nav-item mx-2 nav-active">
      <a class="nav-link" href="homes">Home</a>
    </li>
    @if(session('code') == 'admin123')
    <li class="nav-item mx-2  ">
      <a class="nav-link" href="add">Add Fish</a>
    </li>
    @endif

    <li class="nav-item mx-2 ">
      <a class="nav-link ab" href="about">About</a>
    </li>
    <li class="nav-item mx-2 " >
      <a class="nav-link" href="#contact">Contact</a>
    </li>
    @endsection
    @section('title')
    <title>Home</title>
    @endsection
