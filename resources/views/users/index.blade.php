@extends('layouts.app')
@section('meta-title', 'Users')

@section('content')
    <div class="container">

        <h2>Users List</h2>

        <hr>

        <table class="table table-striped table-sm table-responsive">
            <thead>
            <tr class="table-light">
                <th>User Id</th>
                <th>Email</th>
                <th>Created Date</th>
                <th>User's Profile</th>
            </tr>
            </thead>
            <tbody>

            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="/users/{{ $user->id}}">{{ $user->email }}</a></td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                </tr>
            @empty
                <p>There are no results at this time.</p>
            @endforelse
            </tbody>

        </table>

        <div class="text-center">
            {{ $users->links() }}
        </div>

    </div>
@endsection

