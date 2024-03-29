@extends('layouts.admin')

@section('content')



    <h1>Users</h1>
    <table class="table">
        <thead>
          <tr>
            <th>Id</th>
              <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created at</th>
            <th>Updated at</th>
          </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td><img height="50px" width="50px" src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400' }}" alt="" class="img-responsive img-rounded"></td>
            <td><a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role->name ?? '-- unset--' }}</td>
            <td>{{ $user->is_active == 1 ? 'Active' : 'Not active' }}</td>
            <td>{{ $user->created_at->diffForHumans() }}</td>
            <td>{{ $user->updated_at->diffForHumans() }}</td>
          </tr>
            @endforeach
         @endif
        </tbody>
      </table>

@endsection