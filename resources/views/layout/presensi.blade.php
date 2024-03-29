<!DOCTYPE html>
<html lang="en">

<head>
    @yield('content')
    @include('layout.partial.css')
</head>

<body class="g-sidenav-show   bg-gray-100">
    @include('layout.partial.sidebar')
    @include('layout.partial.header')
    <!-- End Navbar -->

    <div class="container-fluid py-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Presensi Pegawai</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Presensi Pegawai</h6>
        </nav>


      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Presensi Pegawai</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pegawai</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pertemuan 1</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pertemuan 2</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pertemuan 3</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pertemuan 4</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pertemuan 5</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pertemuan 6</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pertemuan 7</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pertemuan 8</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <span class="text-secondary text-xs font-weight-bold">1</span>
                          </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="admin/assets/img/team-2.jpeg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Khalid Ibnu Natsir</h6>
                            <p class="text-xs text-secondary mb-0">Khalid@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Tidak Hadir</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Hadir</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Hadir</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Hadir</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Hadir</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Hadir</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Tidak Hadir</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Hadir</span>
                      </td>
                    </tr>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row mt-4">

        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card mb-4">
                <div class="card-body p-3">
                <form class="forms-sample" action="{{url('add_category')}}" method="POST">
                    @csrf
                    <label for="exampleDropdown" class="col-sm-3 col-form-label" style="color: black;">Pertemuan</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="exampleDropdown" name="category">
                            <option value="1">Pertemuan 1</option>
                            <option value="2">Pertemuan 2</option>
                            <option value="3">Pertemuan 3</option>
                            <option value="3">Pertemuan 4</option>
                            <option value="3">Pertemuan 5</option>
                            <option value="3">Pertemuan 6</option>
                            <option value="3">Pertemuan 7</option>
                            <option value="3">Pertemuan 8</option>
                            <option value="3">Pertemuan 9</option>
                        </select>
                    </div>

                    <!-- Start Time Input -->
                    <label for="startTime" class="col-sm-3 col-form-label" style="color: black;">Waktu Mulai Presensi</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" class="form-control" id="startTime" name="start_time">
                    </div>
                    <!-- End Start Time Input -->

                    <!-- Deadline Date Input -->
                    <label for="deadlineDate" class="col-sm-3 col-form-label" style="color: black;">Deadline Presensi</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" class="form-control" id="deadlineDate" name="deadline">
                    </div>
                    <!-- End Deadline Date Input -->


                    <br>
                    <button type="submit" class="btn btn-primary mr-2" name="submit" value="Add Category">Submit</button>
                </form>

                </div>
            </div>
        </div>

      </div>

    </div>

    @include('layout.partial.footer')
    @include('layout.partial.setting')
  <!--   Core JS Files   -->
    @include('layout.partial.script')
</body>

</html>