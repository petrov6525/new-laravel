@extends('layouts.layout')

@section('content')
    @if(isset($user))
        
    <div>
        <h1>Id</h1>
        <p>{{ $user->id }}</p>
    </div>

    <div>
        <h1>Name</h1>
        <p>{{ $user->Name }}</p>
    </div>

    

    @endif


@endsection