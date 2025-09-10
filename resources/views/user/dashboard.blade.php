@extends('layouts.user')
@section('content')
<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon primary me-3">
                        <i class="fas fa-home"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">3</p>
                        <p class="stats-label mb-0">My Properties</p>
                        <p class="stats-change positive">
                            <i class="fas fa-arrow-up"></i> 1 new this month
                        </p>
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
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">2</p>
                        <p class="stats-label mb-0">Active Bookings</p>
                        <p class="stats-change positive">
                            <i class="fas fa-arrow-up"></i> 1 upcoming
                        </p>
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
                        <i class="fas fa-star"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">4.8</p>
                        <p class="stats-label mb-0">Avg Rating</p>
                        <p class="stats-change">
                            Based on 24 reviews
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card card shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon info me-3">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">$2,450</p>
                        <p class="stats-label mb-0">Total Earnings</p>
                        <p class="stats-change positive">
                            <i class="fas fa-arrow-up"></i> 12% this month
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="row mb-4">
    <div class="col-xl-8 col-lg-7 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header d-flex justify-content-between align-items-center bg-white">
                <h5 class="mb-0">Booking History</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Export Data</a></li>
                        <li><a class="dropdown-item" href="#">Generate Report</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <canvas id="bookingChart" height="100"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header d-flex justify-content-between align-items-center bg-white">
                <h5 class="mb-0">Property Views</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">Export Data</a></li>
                        <li><a class="dropdown-item" href="#">Generate Report</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div style="height: 180px; position: relative;">
                    <canvas id="viewsChart"></canvas>
                </div>
                <div class="mt-2 d-flex justify-content-center">
                    <div class="d-flex align-items-center me-3">
                        <div class="me-1" style="width: 10px; height: 10px; background-color: rgba(52, 152, 219, 0.8); border-radius: 2px;"></div>
                        <span class="small">This Month</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-1" style="width: 10px; height: 10px; background-color: rgba(46, 204, 113, 0.8); border-radius: 2px;"></div>
                        <span class="small">Last Month</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row mb-4">
    <div class="col-lg-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header d-flex justify-content-between align-items-center bg-white">
                <h5 class="mb-0">Recent Bookings</h5>
                <a href="#" class="section-link">View All</a>
            </div>
            <div class="card-body">
                <div class="activity-timeline">
                    <div class="activity-item pb-3 mb-3 border-bottom">
                        <div class="activity-title fw-bold">Modern Apartment</div>
                        <div class="activity-desc text-muted">Booked by John Smith - Oct 15-20, 2023</div>
                        <div class="activity-time small text-muted">2 days ago</div>
                    </div>
                    <div class="activity-item pb-3 mb-3 border-bottom">
                        <div class="activity-title fw-bold">Family House</div>
                        <div class="activity-desc text-muted">Booked by Sarah Johnson - Sep 25-30, 2023</div>
                        <div class="activity-time small text-muted">1 week ago</div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-title fw-bold">Luxury Villa</div>
                        <div class="activity-desc text-muted">Booked by Michael Brown - Sep 10-17, 2023</div>
                        <div class="activity-time small text-muted">2 weeks ago</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header d-flex justify-content-between align-items-center bg-white">
                <h5 class="mb-0">My Properties</h5>
                <a href="#" class="section-link">View All</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Status</th>
                                <th>Price/Night</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modern Apartment</td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>$125</td>
                                <td>
                                    <button class="btn btn-action btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-action btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Family House</td>
                                <td><span class="badge bg-warning">Booked</span></td>
                                <td>$185</td>
                                <td>
                                    <button class="btn btn-action btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-action btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Luxury Villa</td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>$450</td>
                                <td>
                                    <button class="btn btn-action btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-action btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- User Profile Section -->
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white">
                <h5 class="mb-0">My Profile</h5>
            </div>
            <div class="card-body text-center">
                <img src="https://source.unsplash.com/random/150x150?person" alt="Profile" class="rounded-circle mb-3" width="150">
                <h5>{{ Auth::user()->name }}</h5>
                <p class="text-muted">{{ Auth::user()->email }}</p>
                <span class="badge bg-primary mb-3">Property Owner</span>
                <p class="text-muted">Member since: {{ Auth::user()->created_at->format('M d, Y') }}</p>
                <button class="btn btn-outline-primary">
                    <i class="fas fa-user-edit me-2"></i> Edit Profile
                </button>
            </div>
        </div>
    </div>
    
    <div class="col-lg-8 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white">
                <h5 class="mb-0">Recent Reviews</h5>
            </div>
            <div class="card-body">
                <div class="review-item mb-4 pb-4 border-bottom">
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex align-items-center">
                            <img src="https://source.unsplash.com/random/40x40?person1" class="rounded-circle me-2" width="40" height="40">
                            <div>
                                <div class="fw-bold">John Smith</div>
                                <div class="small text-muted">Modern Apartment</div>
                            </div>
                        </div>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="mb-2">Amazing place! Very clean and well-maintained. The host was very responsive and helpful.</p>
                    <div class="small text-muted">2 days ago</div>
                </div>
                
                <div class="review-item mb-4 pb-4 border-bottom">
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex align-items-center">
                            <img src="https://source.unsplash.com/random/40x40?person2" class="rounded-circle me-2" width="40" height="40">
                            <div>
                                <div class="fw-bold">Sarah Johnson</div>
                                <div class="small text-muted">Family House</div>
                            </div>
                        </div>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <p class="mb-2">Great location and spacious. Could use some updates in the kitchen but overall good value.</p>
                    <div class="small text-muted">1 week ago</div>
                </div>
                
                <div class="review-item">
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex align-items-center">
                            <img src="https://source.unsplash.com/random/40x40?person3" class="rounded-circle me-2" width="40" height="40">
                            <div>
                                <div class="fw-bold">Michael Brown</div>
                                <div class="small text-muted">Luxury Villa</div>
                            </div>
                        </div>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="mb-2">Absolutely stunning villa! Perfect for our family vacation. The pool was amazing and the view was breathtaking.</p>
                    <div class="small text-muted">2 weeks ago</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Booking History Chart
    const bookingCtx = document.getElementById('bookingChart').getContext('2d');
    const bookingChart = new Chart(bookingCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [{
                label: 'Bookings',
                data: [2, 3, 1, 4, 3, 5, 4, 6, 5],
                backgroundColor: 'rgba(52, 152, 219, 0.1)',
                borderColor: 'rgba(52, 152, 219, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(52, 152, 219, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(52, 152, 219, 1)',
                pointRadius: 4,
                pointHoverRadius: 6,
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(255, 255, 255, 0.9)',
                    titleColor: '#2c3e50',
                    bodyColor: '#2c3e50',
                    borderColor: '#e0e6ed',
                    borderWidth: 1,
                    padding: 10,
                    displayColors: false,
                    callbacks: {
                        label: function(context) {
                            return 'Bookings: ' + context.parsed.y;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    },
                    ticks: {
                        color: '#6c757d'
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: '#6c757d'
                    }
                }
            }
        }
    });
    
    // Property Views Chart
    const viewsCtx = document.getElementById('viewsChart').getContext('2d');
    const viewsChart = new Chart(viewsCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [
                {
                    label: 'This Month',
                    data: [120, 150, 100, 180, 160, 200, 190, 220, 210],
                    backgroundColor: 'rgba(52, 152, 219, 0.8)',
                    borderColor: 'rgba(52, 152, 219, 1)',
                    borderWidth: 1,
                    borderRadius: 4,
                    barThickness: 8,
                    categoryPercentage: 0.7,
                    barPercentage: 0.7
                },
                {
                    label: 'Last Month',
                    data: [100, 120, 90, 150, 140, 180, 170, 190, 180],
                    backgroundColor: 'rgba(46, 204, 113, 0.8)',
                    borderColor: 'rgba(46, 204, 113, 1)',
                    borderWidth: 1,
                    borderRadius: 4,
                    barThickness: 8,
                    categoryPercentage: 0.7,
                    barPercentage: 0.7
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(255, 255, 255, 0.9)',
                    titleColor: '#2c3e50',
                    bodyColor: '#2c3e50',
                    borderColor: '#e0e6ed',
                    borderWidth: 1,
                    padding: 8,
                    displayColors: true,
                    bodyFont: {
                        size: 11
                    },
                    titleFont: {
                        size: 12
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)',
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6c757d',
                        font: {
                            size: 10
                        },
                        padding: 4
                    }
                },
                x: {
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6c757d',
                        font: {
                            size: 10
                        },
                        padding: 4
                    }
                }
            },
            layout: {
                padding: {
                    top: 5,
                    bottom: 5,
                    left: 5,
                    right: 5
                }
            }
        }
    });
</script>
@endpush