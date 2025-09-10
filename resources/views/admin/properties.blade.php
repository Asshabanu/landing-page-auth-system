@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title">Properties Management</h2>
    <a href="#" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i> Add New Property
    </a>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon primary me-3">
                        <i class="fas fa-building"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">48</p>
                        <p class="stats-label mb-0">Total Properties</p>
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
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">32</p>
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
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">12</p>
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
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">4</p>
                        <p class="stats-label mb-0">Inactive</p>
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
                    <input type="text" class="form-control" placeholder="Search properties...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>All Types</option>
                        <option>Apartment</option>
                        <option>House</option>
                        <option>Villa</option>
                        <option>Commercial</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>All Status</option>
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Inactive</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Properties Table -->
<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Property</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Date Added</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#PR001</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/50x50?house" class="rounded me-3" width="50" height="50">
                                <div>
                                    <div class="fw-bold">Modern Apartment</div>
                                    <div class="text-muted small">Downtown, City Center</div>
                                </div>
                            </div>
                        </td>
                        <td>Apartment</td>
                        <td>$250,000</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>2023-09-15</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#PR002</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/50x50?villa" class="rounded me-3" width="50" height="50">
                                <div>
                                    <div class="fw-bold">Luxury Villa</div>
                                    <div class="text-muted small">Beverly Hills, CA</div>
                                </div>
                            </div>
                        </td>
                        <td>Villa</td>
                        <td>$1,250,000</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>2023-09-14</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#PR003</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/50x50?house2" class="rounded me-3" width="50" height="50">
                                <div>
                                    <div class="fw-bold">Family House</div>
                                    <div class="text-muted small">Suburbs, Quiet Area</div>
                                </div>
                            </div>
                        </td>
                        <td>House</td>
                        <td>$450,000</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>2023-09-12</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#PR004</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/50x50?office" class="rounded me-3" width="50" height="50">
                                <div>
                                    <div class="fw-bold">Office Space</div>
                                    <div class="text-muted small">Business District</div>
                                </div>
                            </div>
                        </td>
                        <td>Commercial</td>
                        <td>$850,000</td>
                        <td><span class="badge bg-danger">Inactive</span></td>
                        <td>2023-09-10</td>
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