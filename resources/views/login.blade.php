@extends('welcome')
@section('content')

  <div>
        <form class="log-box">

            <b> Login </b>
            <hr></hr>

        <div>
            <div>
                <b>
                Email    : 
                </b>
            </div>
            <div>
                <input  type="text" name="email"><br>
            </div>
        </div>

        <div>
            <div>
                <b>
                Password : 
                </b>
            </div>
           <div>
                <input  type="password" name="password"><br>
           </div>
        </div>

        <button type="button" class="btn btn-primary tombol" >Login</button>
        </form>
  </div>

@endsection