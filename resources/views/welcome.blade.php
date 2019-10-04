@extends('layouts/app')
@section('meta-title', 'Welcome')

@section('master-content')
    @parent
    {{-- append additional content here --}}
@endsection

@section('content')
    <div class="container">

        <h1 class="display-4">Welcome</h1>

        <hr>

        <p class="lead">
            Register and sign in to see this demo.<br>
            This is a work in progress.
        </p>


    </div>
@endsection

