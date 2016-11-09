@extends('layouts.admin.master')

@section('content')

    <h1>Welcome</h1>

    <a href={{ route('admin', ['dashboard']) }}>Admin dashboard</a>

@endsection