@extends('welcome')

@section('content')
    <div class="pt-5 w-100">
        <div class="row position-relative">
            <h1 class="text-center"><strong>MEMBERS LIST</strong></h1>
            {{-- <a href={{ route('functions.createMember') }}>
                <button class="btn btn-md btn-primary px-4 float-end mb-3">New Member</button>
            </a> --}}
        </div>
        @if (session('success'))
            <div class="my-3 alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('success-delete'))
            <div class="my-3 alert alert-danger" role="alert">
                {{ session('success-delete') }}
            </div>
        @endif
        <div class="overflow-auto">
            <table class="table table-light table-striped shadow">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Membership Expiration</th>
                        <th>Trainer Name</th>
                        <th>Trainer Specialization</th>
                        <th>Membership Type</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @if(count($members) > 0)
                        @foreach($members as $member)
                            <tr>
                                <th scope="row">{{ $member->id }}</th>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->membership_expiration }}</td>
                                <td>{{ $member->trainer->name }}</td>
                                <td>{{ $member->trainer->specialization }}</td>
                                <td>{{ $member->membership->membership_type }}</td>
                                {{-- <td class="d-flex flex-row gap-2 justify-content-center align-items-center">
                                    <a href={{ route('functions.showStudent', $student->id) }} class="btn btn-secondary">View</a>
                                    <a href={{ route('functions.editStudent', $student->id) }} class="btn btn-primary">Edit</a>
                                    <form action={{ route('destroy', $student->id) }} method="POST" class="d-inline-block">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">
                                No Member Available
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
