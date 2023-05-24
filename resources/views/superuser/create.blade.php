@extends('layouts.layout')


@section('content')
    <form action="{{ route('superuser.store') }}" method="POST">
        @csrf
        
        <div>
            <p>
                Name
            </p>
            <p>
                <input type="text" name="name" id="">
            </p>
        </div>

        <div>
            <p>
                Email
            </p>
            <p>
                <input type="email" name="email" id="">
            </p>
        </div>

        <div>
            <p>
                Phone
            </p>
            <p>
                <input type="text" name="phone" id="">
            </p>
        </div>

        <div>
            <p>
                Age
            </p>
            <p>
                <input type="number" name="age" id="" min="1" max="200" value="25">
            </p>
        </div>

        <p>
            <input type="submit" value="Add">
        </p>

    </form>
@endsection
