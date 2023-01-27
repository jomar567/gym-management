@extends('welcome')

@section('content')
    <div class="pt-5 w-100">
        <div class="row position-relative">
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
        <section class="container navAndTabs">
            <div class="my-5">
               <nav class="nav nav-pills flex-column flex-sm-row mb-4 p-4 rounded bg-light" role="tablist">
                    <a href="#members" class="flex-sm-fill text-sm-center nav-link active" aria-current="page" data-bs-toggle="tab" aria-selected="true" role="tab">
                        Members
                    </a>
                    <a href="#trainers" class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                        Trainers
                    </a>
                    <a href="#memberships" class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                        Membership
                    </a>
                </nav>
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="members" role="tabpanel">
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
                  <div class="tab-pane fade" id="trainers" role="tabpanel">
                     <h5>Trainers</h5>
                  </div>
                  <div class="tab-pane fade" id="memberships" role="tabpanel">
                     <h5>Membership</h5>
                  </div>
               </div>
            </div>
         </section>

    </div>
@stop
