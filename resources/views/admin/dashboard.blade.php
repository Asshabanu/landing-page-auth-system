@extends('layouts.admin')
@section('content')
<!-- Stats Cards -->
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="stats-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon primary me-3">
                        <i class="fas fa-building"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">{{ $totalProperties }}</p>
                        <p class="stats-label mb-0">Total Properties</p>
                        <p class="stats-change positive">
                            <i class="fas fa-arrow-up"></i> 12% from last month
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="stats-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon success me-3">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">{{ $activeListings }}</p>
                        <p class="stats-label mb-0">Active Listings</p>
                        <p class="stats-change positive">
                            <i class="fas fa-arrow-up"></i> 8% from last month
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="stats-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon warning me-3">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">{{ $pendingApprovals }}</p>
                        <p class="stats-label mb-0">Pending Approvals</p>
                        <p class="stats-change">
                            Requires attention
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="stats-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="stats-icon info me-3">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <p class="stats-value mb-0">{{ $totalUsers }}</p>
                        <p class="stats-label mb-0">Total Users</p>
                        <p class="stats-change positive">
                            <i class="fas fa-arrow-up"></i> 5% from last month
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Charts Row -->
<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Property Status Overview</h5>
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
                <canvas id="propertyChart" height="100"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">User Growth</h5>
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
                    <canvas id="userChart"></canvas>
                </div>
                <div class="mt-2 d-flex justify-content-center">
                    <div class="d-flex align-items-center me-3">
                        <div class="me-1" style="width: 10px; height: 10px; background-color: rgba(52, 152, 219, 0.8); border-radius: 2px;"></div>
                        <span class="small">New Users</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-1" style="width: 10px; height: 10px; background-color: rgba(46, 204, 113, 0.8); border-radius: 2px;"></div>
                        <span class="small">Returning Users</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Row -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recent Activity</h5>
                <a href="#" class="section-link">View All</a>
            </div>
            <div class="card-body">
                <div class="activity-timeline">
                    @foreach ($recentActivities as $activity)
                    <div class="activity-item">
                        <div class="activity-title">{{ $activity['title'] }}</div>
                        <div class="activity-desc">{{ $activity['description'] }}</div>
                        <div class="activity-time">{{ $activity['time'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recent Properties</h5>
                <a href="#" class="section-link">View All</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modern Apartment</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>$250,000</td>
                                <td>
                                    <button class="btn btn-action btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-action btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Family House</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>$450,000</td>
                                <td>
                                    <button class="btn btn-action btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-action btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Luxury Villa</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>$1,250,000</td>
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
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Your Profile</h5>
            </div>
            <div class="card-body text-center">
                <img src="https://source.unsplash.com/random/150x150?person" alt="Profile" class="rounded-circle mb-3" width="150">
                <h5>{{ Auth::user()->name }}</h5>
                <p class="text-muted">{{ Auth::user()->email }}</p>
                <span class="badge bg-primary mb-3">Administrator</span>
                <p class="text-muted">Joined: {{ Auth::user()->created_at->format('M d, Y') }}</p>
                <button class="btn btn-outline-primary">
                    <i class="fas fa-user-edit me-2"></i> Edit Profile
                </button>
            </div>
        </div>
    </div>
    
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Property Types Distribution</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>Apartment</span>
                        <span>45%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>House</span>
                        <span>30%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>Villa</span>
                        <span>15%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                
                <div class="mb-0">
                    <div class="d-flex justify-content-between mb-1">
                        <span>Other</span>
                        <span>10%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    // Property Status Chart
    const propertyCtx = document.getElementById('propertyChart').getContext('2d');
    const propertyChart = new Chart(propertyCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [{
                label: 'Properties',
                data: [65, 78, 90, 81, 96, 105, 134, 156, 186],
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
                            return 'Properties: ' + context.parsed.y;
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
    
    // User Growth Chart
    const userCtx = document.getElementById('userChart').getContext('2d');
    const userChart = new Chart(userCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [
                {
                    label: 'New Users',
                    data: [30, 45, 35, 50, 40, 60, 55, 70, 65],
                    backgroundColor: 'rgba(52, 152, 219, 0.8)',
                    borderColor: 'rgba(52, 152, 219, 1)',
                    borderWidth: 1,
                    borderRadius: 4,
                    barThickness: 8,
                    categoryPercentage: 0.7,
                    barPercentage: 0.7
                },
                {
                    label: 'Returning Users',
                    data: [80, 90, 85, 95, 100, 110, 105, 115, 120],
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