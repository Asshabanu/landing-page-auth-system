@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title">Bookings Management</h2>
    <a href="#" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i> Add New Booking
    </a>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon primary me-3">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">324</p>
                        <p class="stats-label mb-0">Total Bookings</p>
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
                        <p class="stats-value mb-0">256</p>
                        <p class="stats-label mb-0">Confirmed</p>
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
                        <p class="stats-value mb-0">42</p>
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
                        <p class="stats-value mb-0">26</p>
                        <p class="stats-label mb-0">Cancelled</p>
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
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search bookings...">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="From date">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="To date">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>All Status</option>
                        <option>Confirmed</option>
                        <option>Pending</option>
                        <option>Cancelled</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Apply Filters</button>
                    <button type="reset" class="btn btn-outline-secondary ms-2">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Bookings Table -->
<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Property</th>
                        <th>Client</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#BK001</td>
                        <td>Modern Apartment</td>
                        <td>John Smith</td>
                        <td>2023-10-15</td>
                        <td>2023-10-20</td>
                        <td>$1,250</td>
                        <td><span class="badge bg-success">Confirmed</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#BK002</td>
                        <td>Luxury Villa</td>
                        <td>Sarah Johnson</td>
                        <td>2023-11-01</td>
                        <td>2023-11-07</td>
                        <td>$8,750</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#BK003</td>
                        <td>Family House</td>
                        <td>Michael Brown</td>
                        <td>2023-10-25</td>
                        <td>2023-10-30</td>
                        <td>$2,250</td>
                        <td><span class="badge bg-success">Confirmed</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#BK004</td>
                        <td>Beach House</td>
                        <td>Emily Davis</td>
                        <td>2023-09-15</td>
                        <td>2023-09-20</td>
                        <td>$4,250</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
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