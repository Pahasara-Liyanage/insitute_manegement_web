@extends('layouts.app')

@section('content')
<main class="app-main">
    <div class="container">
        <h3>Add Teacher</h3>
        <form action="/admin/teacher/store" method="POST">
            @csrf
            <div class="mb-3">
                <label>First name</label>
                <input type="text" name="teacher_fname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Last name</label>
                <input type="text" name="teacher_lname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="teacher_email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Subject</label>
                <select name="subject_model_id" class="form-select" required>
                    <option value="">Select</option>
                    @foreach($sub as $s)
                        <option value="{{ $s->id }}">{{ $s->subject_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="teacher_phone" class="form-control">
            </div>
            <div class="mb-3">
                <label>NIC</label>
                <input type="text" name="teacher_nic" class="form-control">
            </div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection
