@extends('layouts.layout')

@section('content')
    <form action="{{ route('superuser.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')


        <p>
            <label>
                Name:
                <input type="text" name="name" id="" value="{{ $user->Name }}">
            </label>
        </p>

        <p>
            <label>
                Email:
                <input type="email" name="email" id="" value="{{ $user->email }}">
            </label>
        </p>

        <p>
            <label>
                Phone:
                <input type="text" name="phone" id="" value="{{ $user->phone }}">
            </label>
        </p>

        <p>
            <label>
                Age:
                <input type="number" name="age" value="{{ $user->age }}" min="1" max="200">
            </label>
        </p>

        <div>
            <input type="submit" value="Save">
            <a href="/superuser">
                <input type="button" value="Cancel">
            </a>
        </div>
    </form>
@endsection
