@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title">Users Management</h2>
    <a href="#" class="btn btn-primary">
        <i class="fas fa-user-plus me-2"></i> Add New User
    </a>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon primary me-3">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">1,245</p>
                        <p class="stats-label mb-0">Total Users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon success me-3">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">1,120</p>
                        <p class="stats-label mb-0">Active</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon warning me-3">
                        <i class="fas fa-user-clock"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">98</p>
                        <p class="stats-label mb-0">Pending</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon danger me-3">
                        <i class="fas fa-user-times"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">27</p>
                        <p class="stats-label mb-0">Banned</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filters and Search -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <form>
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search users...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>All Roles</option>
                        <option>Admin</option>
                        <option>Agent</option>
                        <option>User</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>All Status</option>
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Banned</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Users Table -->
<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Joined</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/40x40?person1" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">John Smith</div>
                                    <div class="text-muted small">ID: #USR001</div>
                                </div>
                            </div>
                        </td>
                        <td>john.smith@example.com</td>
                        <td><span class="badge bg-primary">Admin</span></td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>2023-08-15</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/40x40?person2" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">Sarah Johnson</div>
                                    <div class="text-muted small">ID: #USR002</div>
                                </div>
                            </div>
                        </td>
                        <td>sarah.j@example.com</td>
                        <td><span class="badge bg-info">Agent</span></td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>2023-08-20</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/40x40?person3" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">Michael Brown</div>
                                    <div class="text-muted small">ID: #USR003</div>
                                </div>
                            </div>
                        </td>
                        <td>michael.b@example.com</td>
                        <td><span class="badge bg-secondary">User</span></td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>2023-09-01</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/40x40?person4" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">Emily Davis</div>
                                    <div class="text-muted small">ID: #USR004</div>
                                </div>
                            </div>
                        </td>
                        <td>emily.d@example.com</td>
                        <td><span class="badge bg-secondary">User</span></td>
                        <td><span class="badge bg-danger">Banned</span></td>
                        <td>2023-08-25</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection