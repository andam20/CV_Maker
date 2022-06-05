@extends('layouts.app')

@section('content')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<style>
    .right, .left{
        height: 130vh;
        width:32vw;
    }

.right{
    background-color: grey;
    }

    .left{
    background-color: grey;
    }

</style>

<div class="container" style="height:160vh;background-color:grey;border-radius:12px;width:70vw">
    <div class="row justify-content-center">
      
    <div class="col-md-8" style="width:70vw;background-color:skyblue;border-radius:12px" >
    <div style="width:50vw;height:23vh  " class="card-header">

    <div class="container">
    <h1 style=" text-transform: uppercase;padding-left:1vw;padding-top:1vw "> {{ Auth::user()->name }}</h1>
    <img src="{{ Auth::user()->img }}">
  <div class="row">
    <div class="col-sm">
    <p style="padding:1vw "> {{ Auth::user()->email }}</p>
    </div>
    <div class="col-sm">
    <p style="padding:1vw "> {{ Auth::user()->phone }}</p>
    </div>
    <div class="col-sm">
    <!-- <img src="/assets/allah.jpg"  alt=""> -->
    <p style="padding:1vw "> {{ Auth::user()->living_place }}</p>
    </div>
  </div>
</div>
</div>

    </div>




  <div class="row">


  <div class="col">
<div class="left">
<h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;">About {{ Auth::user()->name }}:</h4> 
    <h4 style=" text-transform: uppercase;font-weight:bold;width:64%"> {{ Auth::user()->bio }}</h4>

    <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;">{{ Auth::user()->name }}'s activity :</h4> 
    <h4 style=" text-transform: uppercase;font-weight:bold;width:64%"> {{ Auth::user()->activity }}</h4>

    <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;">{{ Auth::user()->name }}'s skill :</h4> 
    <h4 style=" text-transform: uppercase;font-weight:bold;width:64%"> {{ Auth::user()->skills }}</h4>

</div>
  </div>

  
  <div class="col">
  <div class="right">
  <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;"> {{ Auth::user()->name }}'s profission :</h4> 
    <h4 style="text-transform: uppercase;font-weight:bold;"> {{ Auth::user()->profission }}</h4>

    <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;"> {{ Auth::user()->name }}'s birthdate :</h4> 
    <h4 style=" text-transform: uppercase;font-weight:bold;"> {{ Auth::user()->birthdate }}</h4>

    <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;"> {{ Auth::user()->name }}'s gender :</h4> 
    <h4 style="font-weight:bold;"> {{ Auth::user()->gender }}</h4>    

    <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;"> {{ Auth::user()->name }}'s university :</h4> 
    <h4 style="font-weight:bold;"> {{ Auth::user()->uni }}</h4>

    <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;">languages that  {{ Auth::user()->name }} can speak with:</h4> 
    <h4 style="font-weight:bold;"> {{ Auth::user()->lang }}</h4>

    <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;"> {{ Auth::user()->name }}'s github_link :</h4> 
    <h4 style="font-weight:bold;"> {{ Auth::user()->github_link }}</h4>
  
    <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;"> {{ Auth::user()->name }}'s stackOverFlow_link :</h4> 
    <h4 style="font-weight:bold;"> {{ Auth::user()->sof_acc }}</h4>

    
    <h4 style="background-color: skyblue;border-radius: 5px;margin-top:5vh;display:block;width:60%;padding:3px;text-align:center;"> {{ Auth::user()->name }}'s linked in account :</h4> 
    <h4 style="font-weight:bold;"> {{ Auth::user()->linkedIn_acc }}</h4>
  </div>
  </div>

    </div>
</div>

@endsection
