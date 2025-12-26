@extends('layouts.app')

@section('content')
<main class="app-main">
    <div class="container">
        <h3>Teacher Details</h3>
        <dl class="row">
            <dt class="col-sm-3">First name</dt>
            <dd class="col-sm-9">{{ $teacher->teacher_fname }}</dd>

            <dt class="col-sm-3">Last name</dt>
            <dd class="col-sm-9">{{ $teacher->teacher_lname }}</dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $teacher->teacher_email }}</dd>

            <dt class="col-sm-3">Subject</dt>
            <dd class="col-sm-9">{{ $teacher->subject?->subject_name }}</dd>

            <dt class="col-sm-3">Phone</dt>
            <dd class="col-sm-9">{{ $teacher->teacher_phone }}</dd>

            <dt class="col-sm-3">NIC</dt>
            <dd class="col-sm-9">{{ $teacher->teacher_nic }}</dd>
        </dl>
    </div>
</main>
@endsection
