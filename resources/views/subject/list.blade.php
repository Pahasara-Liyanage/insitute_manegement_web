 @extends('layouts.app')

     @section('content')


<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0"> Add Subject</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>


        <div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <div class="card-header">
            <h3 class="card-title">Subject List</h3>
            <div class="card-tools">
             <ul class="pagination pagination-sm float-end">
         <a href="#" class="btn btn-sm btn-primary"
             data-bs-toggle="modal"
             data-bs-target="#addCategoryModal">
                 Add Subject
              </a>
            </ul>
            </div>

          </div>

          <div class="card-body">
            <table id="category-table" class="table table-bordered">
              <thead>
                <tr>

                    <th>Id</th>
                  <th>Subject Name</th>
                    <th>Create at</th>
                    <th>Update at</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($subject as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->subject_name }}</td>
                    <td>{{ $s->created_at }}</td>
                    <td>{{ $s->updated_at }}</td>
                    
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

        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCategoryModalLabel">Add Subject</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="subjectForm" action="/admin/subject/store" method="POST">
          @csrf
          <div class="mb-3">
            <label for="subject_name" class="form-label">Subject Name</label>
            <input type="text" class="form-control" id="subject_name" name="subject_name" required>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>



    @endsection


