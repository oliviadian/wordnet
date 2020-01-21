@extends('afterlogin')
@section('content')

    <div class="teks3">
        <h3> <b> Kata Benda </b></h3>
    </div>

    <div class="box-cari">
        <div>
            <form class="search" action="/">
            
            <h3 class="font-cari"><b> Selamat datang di WordNet UGM! </b></h3>
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </br></br>
            <h6 class="font-info"> Masukkan kata benda yang ingin dicari dan temukan synonym set (synset) yang ingin di dapatkan. </h6>

            </form>
        </div>
    </div>

@endsection