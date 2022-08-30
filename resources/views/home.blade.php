@extends('layouts.app')

@section('content')
   
    <div id="app">
<mynavbar uname='{{Auth::user()->name}}' uid='{{Auth::user()->id}}'></mynavbar>
  <router-view></router-view>
  
  </div>





@endsection
