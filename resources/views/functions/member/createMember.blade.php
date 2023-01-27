@extends('welcome')

@section('content')
<div class="h-100">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="card_wrapper w-100">
            <div class="mb-3 d-flex justify-content-between align-items-center mt-4">
                <h1 class="text-primary">
                    Create Member
                </h1>
                <div>
                    <a href={{ route('index') }} class="btn btn-info">Go Back</a>
                </div>
            </div>
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <form action={{ route('addNewMember') }} method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">
                                            Member Email
                                        </label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">
                                            Member Name
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="membership_expiration" class="form-label">
                                    Membership Expiration Date
                                </label>
                                <input type="date" class="form-control" id="membership_expiration" name="membership_expiration" required>
                            </div>
                            <div class="mb-3">
                                <label for="trainer_id" class="form-label">
                                    Trainer ID
                                </label>
                                <input type="trainer_id" class="form-control" id="trainer_id" name="trainer_id" required>
                            </div>
                            <div class="mb-3">
                                <label for="membership_id" class="form-label">
                                    Membership ID
                                </label>
                                <input type="membership_id" class="form-control" id="membership_id" name="membership_id" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
