
@extends('index')
@section('content')
<div class="container">
  <div class="container">
    <form method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <img src="../Fish_Image/{{$data -> fish_Image}}" alt="" height = "200" width="200" class="img-thumbnail"><br><br>
      <label for="name">Fish Name</label>
      <input type="text" name="fish_Name" value="{{$data -> fish_Name}}" id="name"class = "form-control" ><br>
      <label for="title">Rate (FOB) US $</label>
      <input type="text" name="txtRate" id="" class = "form-control" value = "{{$data -> fish_Rate}}"  > <br>
      <label for="title">Quantity Stocked (pcs)</label>
      <input type="number" name="txtStock" id="" class = "form-control" min = "0" value = "{{$data -> fish_Quantity}}" > <br>
      <label for="title">Packing Quantity (pcs/box)</label>
      <input type="text" name="txtPack" id="" class = "form-control" value = "{{$data -> fish_Packing}}"><br>

      <label for="image">Fish Image</label>
      <input type="file" name="txtImage" id="image" class = "form-control" ><br>
      <input type="submit" name="btnEdit" value="Edit" class = "btn btn-info btn-block">


    </form>
  </div>
</div>
@endsection
@section('nav')
<li class="nav-item mx-2">
  <a class="nav-link" href="../homes">Home</a>
</li>
<li class="nav-item mx-2">
  <a class="nav-link" href="../add">Add Fish</a>
</li>
<li class="nav-item mx-2">
  <a class="nav-link ab" href="../about">About</a>
</li>
<li class="nav-item mx-2">
  <a class="nav-link" href="../contact">Contact</a>
</li>
@endsection
@section('title')
<title>Edit Fish</title>
@endsection
