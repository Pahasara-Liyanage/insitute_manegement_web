 @extends('layouts.app')

 @section('content')
     <main class="app-main">
         <div class="app-content-header">

             <div class="container-fluid">

                 <div class="row">
                     <div class="col-sm-6">
                         <h3 class="mb-0"> Add Teacher</h3>
                     </div>
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-end">
                             <li class="breadcrumb-item"><a href="#">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                         </ol>
                     </div>
                 </div>

             </div>

         </div>

         <div class="app-content">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card mb-4">
                             <div class="card-header">
                                 <h3 class="card-title">Teacher List</h3>
                                 <div class="card-tools me-3">
                                     <div class="pagination pagination-sm float-end">
                                         <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                             data-bs-target="#addCategoryModal">
                                             Add Teacher
                                         </a>
                                     </div>
                                 </div>

                             </div>

                             <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if(session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach($errors->all() as $err)
                                                <li>{{ $err }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                 <table id="category-table" class="table table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Id</th>
                                             <th>First Name</th>
                                             <th>Last Name</th>
                                             <th>Email</th>
                                              <th>Subject</th>
                                             <th>Phone</th>
                                            <th> NIC </th>
                                             <th>Create at</th>
                                             <th>Update at</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($teachers ?? [] as $t)
                                             <tr>
                                                 <td>{{ $t->id }}</td>
                                                 <td>{{ $t->teacher_fname }}</td>
                                                 <td>{{ $t->teacher_lname }}</td>
                                                 <td>{{ $t->teacher_email }}</td>
                                                 <td>{{ $t->subject?->subject_name }}</td>
                                                 <td>{{ $t->teacher_phone }}</td>
                                                 <td>{{ $t->teacher_nic }}</td>
                                                 <td>{{ $t->created_at }}</td>
                                                 <td>{{ $t->updated_at }}</td>
                                                 <td>
                                                     <a href="/admin/teacher/edit/{{ $t->id }}" class="btn btn-sm btn-primary">Edit</a>
                                                     <form action="/admin/teacher/delete/{{ $t->id }}" method="POST" style="display:inline-block">
                                                         @csrf
                                                         @method('DELETE')
                                                         <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete teacher?')">Delete</button>
                                                     </form>
                                                 </td>
                                             </tr>
                                         @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>






     </main>

     <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel"
         aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="addCategoryModalLabel">Add Teacher</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form id="teacherForm" action="/admin/teacher/store" method="POST">
                         @csrf
                         <div class="mb-3">
                             <label for="subject_name" class="form-label">First Name</label>
                             <input type="text" class="form-control" id="teacher_fname" name="teacher_fname" required>
                         </div>

                         <div class="mb-3">
                             <label for="subject_name" class="form-label">Last Name</label>
                             <input type="text" class="form-control" id="teacher_lname" name="teacher_lname" required>
                         </div>

                          <div class="mb-3">
                             <label for="subject_name" class="form-label">Email</label>
                             <input type="email" class="form-control" id="teacher_email" name="teacher_email" required>
                         </div>
                        <div class="mb-3">
                            <label for="subject_id" class="form-label">Subject</label>
                            <select class="form-select" id="subject_id" name="subject_id" required>
                                <option value="">Select Subject</option>
                                @foreach ($sub as $s)
                                    <option value="{{ $s->id }}">{{ $s->subject_name}}</option>
                                @endforeach
                            </select>
                        </div>

                          <div class="mb-3">
                             <label for="subject_name" class="form-label">Phone</label>
                             <input type="text" class="form-control" id="teacher_phone" name="teacher_phone">
                         </div>

                          <div class="mb-3">
                             <label for="nic" class="form-label">NIC </label>
                             <input type="text" class="form-control" id="teacher_nic" name="teacher_nic">
                         </div>



                         <button type="submit" class="btn btn-primary">Save</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>

 @endsection
