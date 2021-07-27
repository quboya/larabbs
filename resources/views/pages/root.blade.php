<!DOCTYPE html>
<html>
<head>
  <title> @yield('content')</title>
</head>
<body>
@extends('layouts.app')
@section('title', '首页')

@section('content')
  <h1>这里是首页</h1>
@stop
</body>
</html>
