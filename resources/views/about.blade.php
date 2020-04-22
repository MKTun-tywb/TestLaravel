
@extends('index')
@section('content')
<section>
    <!-- Owner Information-->
    <div class="aqua-info container">
        <h2 class="text-center">What is Ornamental?</h2>
        <p style="text-indent: 10%;">Ornamental fish industry is nowadays considered to become extensive global
            component of international
            trade, fisheries aquaculture and development. When it comes to the tropical ornamental fish concerned, a
            great many varieties of Myanmar indigenous species are becoming the most popular worldwide.</p>
        <p style="text-indent: 10%;">Being the newly established ornamental fish exporter of the country Myanmar,
            Aquatic Ornamentals was
            first founded in the year 1994 as a group of researchers studying mainly on the behavior and ecology of
            Myanmar native and endemic freshwater fish species and providing technical support to the fish farmers
            as well as local fishermen (collectors), in order for them for the purpose of practicing
            captive-breeding as well as the wild-collection of live fishes within the sustainable harvest.
            </pstyle="text-indent: 10%;">
            <p style="text-indent: 10%;">In the year 2003, together with 50 skilled collectors and 30 fish farmers,
                who have become members and
                they are doing wild-collection and now 60 species among the wild-collected fishes can be bred by
                captive-breeding and for that matter, all of the executive members have started finding the market
                potential for those fish varieties in the foreign countries and exporting nearly 100 varieties of
                Myanmar ornamental fishes in accord with the need of the continual buyers from Japan, Singapore,
                Taiwan,
                Malaysia and Thailand.</p>
            <p style="text-indent: 10%;"> Since the main objective of Aquatic Ornamentals happens to create jobs and
                income for the local
                citizens, who being making a living by the country's aquatic resources and for that matter Aquatic
                Ornamentals is utilizing its 25% of the profit earning from the export of ornamental fish in the
                field
                of giving proper support for the welfare of the local fish farmers and collectors, discovering
                effective
                methods of collecting fish from the wild within the sustainable measures and persuading local fish
                farmers in order for them to take more interest on captive-breeding of those fish species of which
                the
                population density becoming decrease year after year.</p>
    </div>
</section>

@endsection
@section('nav')
<li class="nav-item mx-2">
  @if(session('code') == 'admin123')
  <a class="nav-link" href="homes/admin123">Home</a>
  @else
    <a class="nav-link" href="homes">Home</a>
    @endif
</li>
@if(session('code') == 'admin123')
<li class="nav-item mx-2  ">
  <a class="nav-link" href="add">Add Fish</a>
</li>
@endif
<li class="nav-item mx-2 nav-active">
  <a class="nav-link ab" href="about">About</a>
</li>
<li class="nav-item mx-2">
  <a class="nav-link" href="contact">Contact</a>
</li>
@endsection
@section('title')
<title>About</title>
@endsection
