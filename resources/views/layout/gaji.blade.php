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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Gaji</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Gaji</h6>
        </nav>


        <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Pegawai</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pegawai</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
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
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <span class="text-secondary text-xs font-weight-bold">2</span>
                          </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="admin/assets/img/team-3.jpeg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Mas Katkit</h6>
                            <p class="text-xs text-secondary mb-0">katkit@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <span class="text-secondary text-xs font-weight-bold">3</span>
                          </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="admin/assets/img/team-4.jpeg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Mas Khuldi</h6>
                            <p class="text-xs text-secondary mb-0">khuldi@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Executive</p>
                        <p class="text-xs text-secondary mb-0">Projects</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <span class="text-secondary text-xs font-weight-bold">4</span>
                          </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="admin/assets/img/team-3.jpeg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Mas Kucil</h6>
                            <p class="text-xs text-secondary mb-0">kucil@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <span class="text-secondary text-xs font-weight-bold">5</span>
                          </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="admin/assets/img/team-2.jpeg" class="avatar avatar-sm me-3" alt="user5">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Mas Kulkul</h6>
                            <p class="text-xs text-secondary mb-0">Kulkul@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Executive</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <span class="text-secondary text-xs font-weight-bold">6</span>
                          </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="admin/assets/img/team-4.jpeg" class="avatar avatar-sm me-3" alt="user6">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Mas Kalit</h6>
                            <p class="text-xs text-secondary mb-0">Kalit@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programtor</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Beri Gaji</h6>
            </div>
            <div class="card-body p-3">
              <form class="forms-sample" action="{{url('add_category')}}" method="POST">
                @csrf
                <div class="form-group row">
                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label" style="color: black;">ID Pegawai</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="category" placeholder="Contoh: 1/2/3">
                  </div>

                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label" style="color: black;">Jumlah Gaji</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="category" placeholder="Rp.0">
                  </div>

                </div>
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