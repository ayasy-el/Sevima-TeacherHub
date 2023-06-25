@extends('base')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-7 mt-4">
        <div class="card">
          <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Materi Saya</h6>
          </div>
          <div style="height: 550px;" class="overflow-auto card-body pt-4 p-3">
            <ul class="list-group">
            @foreach ($materi as $mtr)
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm">{{ $mtr->title }}</h6>
                  <span class="mb-2 text-xs"><span class="text-dark font-weight-bold ms-sm-2">{{ substr(strip_tags($mtr->content),0,100) }}...</span></span>
                  {{-- <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                  <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span> --}}
                </div>
                <div class="ms-auto text-end">
                <form style="display: inline" action="/delete-materi/{{ $mtr->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2"></i>Delete</button>
                </form>
                  <a class="btn btn-link text-dark px-3 mb-0" href="/edit-materi/{{ $mtr->id }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </div>
              </li>
            @endforeach
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-5 mt-4">
        <div class="card h-100 mb-4">
          <div class="card-header pb-0 px-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">File Upload Siswa</h6>
                </div>
                <div class="col-6 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                </div>
              </div>
          </div>
          <div class="card-body pt-4 p-3">       
            <ul class="list-group">
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                  <span class="text-xs">#MS-415646</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                  $180
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                  <span class="text-xs">#RV-126749</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                  $250
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                  <span class="text-xs">#FB-212562</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                  $560
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                  <span class="text-xs">#QW-103578</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                  $120
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
              <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                  <span class="text-xs">#AR-803481</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                  $300
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12  mt-4">
        <div class="card">
          <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-0">Siswa yang Telah Mengumpulkan Tugas</h5>
                    </div>
                    <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New User</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    ID
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Photo
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Name
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Email
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    role
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Creation Date
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">1</p>
                                </td>
                                <td>
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Admin</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">admin@softui.com</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Admin</p>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                        <i class="fas fa-user-edit text-secondary"></i>
                                    </a>
                                    <span>
                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">2</p>
                                </td>
                                <td>
                                    <div>
                                        <img src="/assets/img/team-1.jpg" class="avatar avatar-sm me-3">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Creator</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">creator@softui.com</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Creator</p>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">05/05/20</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                        <i class="fas fa-user-edit text-secondary"></i>
                                    </a>
                                    <span>
                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">3</p>
                                </td>
                                <td>
                                    <div>
                                        <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Member</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">member@softui.com</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Member</p>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">23/06/20</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                        <i class="fas fa-user-edit text-secondary"></i>
                                    </a>
                                    <span>
                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">4</p>
                                </td>
                                <td>
                                    <div>
                                        <img src="/assets/img/team-4.jpg" class="avatar avatar-sm me-3">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Peterson</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">peterson@softui.com</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Member</p>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">26/10/17</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                        <i class="fas fa-user-edit text-secondary"></i>
                                    </a>
                                    <span>
                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">5</p>
                                </td>
                                <td>
                                    <div>
                                        <img src="/assets/img/marie.jpg" class="avatar avatar-sm me-3">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Marie</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">marie@softui.com</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Creator</p>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">23/01/21</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                        <i class="fas fa-user-edit text-secondary"></i>
                                    </a>
                                    <span>
                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection