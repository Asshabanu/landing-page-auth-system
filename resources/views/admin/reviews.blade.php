@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title">Reviews Management</h2>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon primary me-3">
                        <i class="fas fa-star"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">4.6</p>
                        <p class="stats-label mb-0">Average Rating</p>
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
                        <i class="fas fa-comments"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">1,842</p>
                        <p class="stats-label mb-0">Total Reviews</p>
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
                        <p class="stats-value mb-0">24</p>
                        <p class="stats-label mb-0">Pending Approval</p>
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
                        <i class="fas fa-flag"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">12</p>
                        <p class="stats-label mb-0">Reported</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rating Distribution -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-white">
        <h5 class="mb-0">Rating Distribution</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <div class="me-2">5 stars</div>
                        <div class="progress flex-grow-1" style="height: 15px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="ms-2">65%</div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <div class="me-2">4 stars</div>
                        <div class="progress flex-grow-1" style="height: 15px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="ms-2">20%</div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <div class="me-2">3 stars</div>
                        <div class="progress flex-grow-1" style="height: 15px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="ms-2">10%</div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <div class="me-2">2 stars</div>
                        <div class="progress flex-grow-1" style="height: 15px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 3%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="ms-2">3%</div>
                    </div>
                </div>
                
                <div class="mb-0">
                    <div class="d-flex align-items-center">
                        <div class="me-2">1 star</div>
                        <div class="progress flex-grow-1" style="height: 15px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="ms-2">2%</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="display-4 fw-bold text-primary">4.6</div>
                    <div class="mb-2">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                    </div>
                    <div class="text-muted">Based on 1,842 reviews</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reviews Table -->
<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Reviewer</th>
                        <th>Property</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/40x40?person5" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">John Smith</div>
                                    <div class="text-muted small">john.smith@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Modern Apartment</td>
                        <td>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </td>
                        <td>
                            <div class="text-truncate" style="max-width: 200px;">
                                Amazing apartment! Very clean and well-maintained.
                            </div>
                        </td>
                        <td>2023-09-15</td>
                        <td><span class="badge bg-success">Approved</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/40x40?person6" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">Sarah Johnson</div>
                                    <div class="text-muted small">sarah.j@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Luxury Villa</td>
                        <td>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </td>
                        <td>
                            <div class="text-truncate" style="max-width: 200px;">
                                Great location but could use some updates.
                            </div>
                        </td>
                        <td>2023-09-14</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-check"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/40x40?person7" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">Michael Brown</div>
                                    <div class="text-muted small">michael.b@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Family House</td>
                        <td>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </td>
                        <td>
                            <div class="text-truncate" style="max-width: 200px;">
                                Perfect for families! Kids loved the backyard.
                            </div>
                        </td>
                        <td>2023-09-12</td>
                        <td><span class="badge bg-success">Approved</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/40x40?person8" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <div class="fw-bold">Emily Davis</div>
                                    <div class="text-muted small">emily.d@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td>Beach House</td>
                        <td>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </td>
                        <td>
                            <div class="text-truncate" style="max-width: 200px;">
                                Not as described. Very disappointed.
                            </div>
                        </td>
                        <td>2023-09-10</td>
                        <td><span class="badge bg-danger">Reported</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
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