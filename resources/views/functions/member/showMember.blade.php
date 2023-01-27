@extends('welcome')

@section('content')
    <div class="pt-5 w-75">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                Member Details
            </h1>
            <div>
                <a href={{ route('index') }} class="btn btn-info">Go Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 w-100 m-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">
                            Name: {{ $member->name }}
                        </h5>
                        <h5>
                            Email: <span class="text-muted">{{ $member->email }}</span>
                        </h5>
                        <h5>
                            Membership Expiration: <span class="text-muted">{{ $member->membership_expiration }}</span>
                        </h5>

                        <h5>Trainer Name: <span class="text-muted">{{ $member->trainer->name }}</span></h5>
                        <h5>Trainer Specialization: <span class="text-muted">{{ $member->trainer->specialization }}</span></h5>
                        <h5>Trainer Specialization: <span class="text-muted">{{ $member->membership->membership_type }}</span></h5>
                        <h5>Trainer Specialization: <span class="text-muted">{{ $member->membership->membership_price }}</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
