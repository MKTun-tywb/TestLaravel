
@extends('index')
@section('content')
<div class="container">
    <form  method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Fish Name</label>
            <input type="text" name="txtName" id="" class = "form-control">
            <label for="title">Rate (FOB) US $</label>
            <input type="text" name="txtRate" id="" class = "form-control"  >
            <label for="title">Quantity Stocked (pcs)</label>
            <input type="number" name="txtStock" id="" class = "form-control" min = "0">
            <label for="title">Packing Quantity (pcs/box)</label>
            <input type="text" name="txtPack" id="" class = "form-control"  >
            <!-- <div data-role="rangeslider">
        <label for="price-min">Price:</label>
        <input type="range" name="price-min" id="price-min" value="200" min="0" max="5000">
        <label for="price-max">Price:</label>
        <input type="range" name="price-max" id="price-max" value="800" min="0" max="5000">
      </div> -->
            <label for="title">Fish Image</label>
            <input type="file" name="txtImage" id="" class = "form-control">
        </div>
        <input type="submit" value="Submit" class = "btn btn-info btn-block">
    </form>
</div>
@endsection
@section('nav')
<li class="nav-item mx-2">
  <a class="nav-link" href="homes">Home</a>
</li>
<li class="nav-item mx-2  nav-active">
  <a class="nav-link" href="add">Add Fish</a>
</li>
<li class="nav-item mx-2">
  <a class="nav-link ab" href="about">About</a>
</li>
<li class="nav-item mx-2">
  <a class="nav-link" href="contact">Contact</a>
</li>
@endsection
@section('title')
<title>Add Fish</title>
@endsection
