
    @extends('layouts.layout')

    

    @section('content')
    
    <div>
        <a href="{{ route('superuser.create') }}">
            <button class="btn btn-small btn-success">
                Add User
            </button>
        </a>
    </div>
    
        @if (count($users) !== 0)
        {{ $users->links() }}
            <table class="table table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)   
                        <tr>
                            <td>{{ $user['id'] }}</td>
                            <td>{{ $user['Name'] }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->age }}</td>
                            <td><a href="{{URL::to('superuser/'.$user->id)}}">SHOW</a></td>
                            <td><a href="{{URL::to('superuser/'.$user->id.'/edit')}}">EDIT</a></td>
                            <td>
                                <form action="{{ route('superuser.destroy',$user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="DELETE">
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

            
        @endif

    @endsection

