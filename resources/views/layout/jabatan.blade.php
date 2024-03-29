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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Master Jabatan</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Master Jabatan</h6>
        </nav>


      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Master Jabatan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>

                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Executive</p>
                      </td>
                      <td class="align-middle text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Project</p>
                      </td>
                      <td class="align-middle text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programmer</p>
                        <p class="text-xs text-secondary mb-0">Project</p>
                      </td>
                      <td class="align-middle text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>
                    
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">UI & UX</p>
                        <p class="text-xs text-secondary mb-0">Project</p>
                      </td>
                      <td class="align-middle text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
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
              <h6 class="mb-0">Tambah Jabatan</h6>
            </div>
            <div class="card-body p-3">
              <form class="forms-sample" action="{{url('add_category')}}" method="POST">
                @csrf
                <div class="form-group row">
                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label" style="color: black;">Nama Jabatan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="category" placeholder="Jabatan">
                  </div>

                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label" style="color: black;">Tingkat Jabatan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="category" placeholder="Tingkat: Organisasi/Executive/Project">
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