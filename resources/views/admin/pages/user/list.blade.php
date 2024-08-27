@extends('admin.layouts.main')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <nav>
                        <ol class="breadcrumb mb-1">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">User</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </nav>
                    <h1 class="page-title fw-medium fs-18 mb-0">Users List</h1>
                </div>
            </div>

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                <div class="d-flex flex-wrap gap-1 project-list-main">
                                    <!-- Button to trigger modal -->
                                    <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#newUserModal">
                                        <i class="ri-add-line me-1 fw-medium align-middle"></i>New User
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->

            <!-- Start::row-2 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap w-100 dataTable no-footer dtr-inline collapsed" id="responsiveDataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Business Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>abc</td>
                                            <td>abc@gmail.com</td>
                                            <td>abd</td>
                                            <td>123</td>
                                            <td>active</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" style="">
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ri-eye-line align-middle me-1 d-inline-block"></i>View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-2 -->

            <!-- Modal for New User -->
            <div class="modal fade" id="newUserModal" tabindex="-1" aria-labelledby="newUserModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newUserModalLabel">Add New User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="userName" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="userName" placeholder="Enter user name">
                                </div>
                                <div class="mb-3">
                                    <label for="userEmail" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="userEmail" placeholder="Enter email">
                                </div>
                                <div class="mb-3">
                                    <label for="userCategory" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="userCategory" placeholder="Enter category">
                                </div>
                                <div class="mb-3">
                                    <label for="userPhone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="userPhone" placeholder="Enter phone number">
                                </div>
                                <div class="mb-3">
                                    <label for="userStatus" class="form-label">Status</label>
                                    <select class="form-select" id="userStatus">
                                        <option selected>Choose...</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save User</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
