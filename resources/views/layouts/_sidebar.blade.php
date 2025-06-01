
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            {{-- <img
              src="../../dist/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            /> --}}


            <span class="brand-text fw-light"> INSITUTE MANAGEMENT </span>
            <!--end::Brand Text-->
          </a>


          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->

        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false">

            <!-- admin menu -->

              @if(Auth::user()->is_role == 1)

              <li class="nav-item ">
                <a href="{{ url('admin/dashboard') }}" class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p> Dashboard</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./generate/theme.html" class="nav-link">
                    <i class="nav-icon bi bi-person-check-fill"></i>

                  <p> Attandance </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./generate/theme.html" class="nav-link">
                    <i class="nav-icon bi bi-credit-card"></i>

                  <p> Payment </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./generate/theme.html" class="nav-link">
                    <i class="nav-icon bi bi-card-checklist"></i>

                  <p> Marks </p>
                </a>
              </li>



              <li class="nav-header"> MAIN REGISTRATIONS</li>


              <li class="nav-item">
                <a href="./generate/theme.html" class="nav-link">
                    <i class="nav-icon bi bi-person-fill"></i>

                  <p> Student Registration </p>
                </a>
              </li>

            </li>
            <li class="nav-item">
              <a href="{{ url('admin/teacher') }}" class="nav-link @if (Request::segment(2) == 'teacher') active @endif">
                <i class="nav-icon bi bi-person-plus"></i>

                <p> Teacher Registration </p>
              </a>
            </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-seam-fill"></i>
                <p>
                  Registrations
                <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
                </a>



                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./widgets/small-box.html" class="nav-link">
                        <i class="nav-icon bi bi-calendar-week-fill"></i>
                      <p>Add Time Table </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./widgets/info-box.html" class="nav-link">
                        <i class="nav-icon bi bi-people-fill"></i>
                      <p>Add Batch </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/Subject') }}" class="nav-link @if (Request::segment(2) == 'Subject') active @endif">
                        <i class="nav-icon bi bi-book-fill"></i>
                      <p>Add Subject</p>
                    </a>
                  </li>
                </ul>



                <li class="nav-header"> Systems </li>

                <li class="nav-item">
                    <a href="./generate/theme.html" class="nav-link">
                        <i class="nav-icon bi bi-gear-fill"></i>


                      <p> Settings </p>
                    </a>
                  </li>


                <!-- usermenu -->
                @elseif(Auth::user()->is_role == 2)


                <li class="nav-item menu-open">
                <a href="" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p> Dashboard</p>
                </a>

              </li>



                <li class="nav-item">
                <a href="./generate/theme.html" class="nav-link">
                  <i class="nav-icon bi bi-table"></i>
                  <p> Settings </p>
                </a>
              </li>




                @endif




            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
