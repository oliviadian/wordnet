@extends('welcome')
@section('content')

<div class="cari">

      <img class="img-pos" src="https://ugm.ac.id/images/optimasi/ugm_header.png">
      <h2 class="position">Wordnet UGM</h2>
       
  <form class="search" action="/">

      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    
  </form>

</div>
@endsection