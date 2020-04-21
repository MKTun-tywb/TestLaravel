

@extends('index')
@section('content')
<div class="container">
  <img src="../Fish_Image/{{$data -> fish_Image}}" alt="" height = "200" width="200" class="img-thumbnail"><br><br>
  <label for="name">Fish Name</label>
  <input type="text" name="fish_Name" value="{{$data -> fish_Name}}" id="name"class = "form-control" readonly><br>
  <label for="title">Rate (FOB) US $</label>
  <input type="text" name="txtRate" id="" class = "form-control" value = "{{$data -> fish_Rate}}"  readonly> <br>
  <label for="title">Quantity Stocked (pcs)</label>
  <input type="number" name="txtStock" id="" class = "form-control" min = "0" value = "{{$data -> fish_Quantity}}" readonly> <br>
  <label for="title">Packing Quantity (pcs/box)</label>
  <input type="text" name="txtPack" id="" class = "form-control" value = "{{$data -> fish_Packing}}"readonly><br>
@if(session('code')== 'admin123')

  <a href="{{url("/Fish_Edit/$data->id")}}"><button class = "btn btn-info btn-block">Edit</button></a><br>
  <a href="{{url("/Fish_Delete/$data->id")}}"><button class = "btn btn-danger btn-block">Delete</button></a>
  @endif
</div>
@endsection
@section('nav')
<li class="nav-item mx-2">
  @if(session('code') == 'admin123')
  <a class="nav-link" href="../homes/admin123">Home</a>
  @else
    <a class="nav-link" href="../homes">Home</a>
    @endif
</li>
@if(session('code') == 'admin123')
<li class="nav-item mx-2  ">
  <a class="nav-link" href="add">Add Fish</a>
</li>
@endif
<li class="nav-item mx-2">
  <a class="nav-link ab" href="../about">About</a>
</li>
<li class="nav-item mx-2">
  <a class="nav-link" href="../contact">Contact</a>
</li>
@endsection
@section('title')
<title>Fish Detail</title>
@endsection
