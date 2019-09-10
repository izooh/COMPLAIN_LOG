@extends('layouts.custom')
@section('content')
    <div id="app">
      <example-component></example-component> 
      <create-component></create-component> 
    </div>
    <script src="{{asset('js/app.js') }}"></script>
@endsection