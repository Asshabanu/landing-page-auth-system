@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title">System Settings</h2>
    <button class="btn btn-primary">
        <i class="fas fa-save me-2"></i> Save Changes
    </button>
</div>

<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white">
                <h5 class="mb-0">General Settings</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Site Name</label>
                        <input type="text" class="form-control" value="DreamHome">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Site URL</label>
                        <input type="text" class="form-control" value="https://dreamhome.com">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Admin Email</label>
                        <input type="email" class="form-control" value="admin@dreamhome.com">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Timezone</label>
                        <select class="form-select">
                            <option selected>UTC</option>
                            <option>EST</option>
                            <option>PST</option>
                            <option>CST</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Date Format</label>
                        <select class="form-select">
                            <option selected>MM/DD/YYYY</option>
                            <option>DD/MM/YYYY</option>
                            <option>YYYY-MM-DD</option>
                        </select>
                    </div>
                    
                    <div class="mb-0">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="maintenanceMode" checked>
                            <label class="form-check-label" for="maintenanceMode">
                                Maintenance Mode
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white">
                <h5 class="mb-0">Email Settings</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Mail Driver</label>
                        <select class="form-select">
                            <option selected>SMTP</option>
                            <option>Sendmail</option>
                            <option>Mailgun</option>
                            <option>SES</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">SMTP Host</label>
                        <input type="text" class="form-control" value="smtp.mailtrap.io">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">SMTP Port</label>
                        <input type="text" class="form-control" value="2525">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">SMTP Username</label>
                        <input type="text" class="form-control" value="your_username">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">SMTP Password</label>
                        <input type="password" class="form-control" value="your_password">
                    </div>
                    
                    <div class="mb-0">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="emailEncryption" checked>
                            <label class="form-check-label" for="emailEncryption">
                                Enable Encryption
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white">
                <h5 class="mb-0">Payment Settings</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Currency</label>
                        <select class="form-select">
                            <option selected>USD ($)</option>
                            <option>EUR (€)</option>
                            <option>GBP (£)</option>
                            <option>CAD (C$)</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Payment Gateway</label>
                        <select class="form-select">
                            <option selected>Stripe</option>
                            <option>PayPal</option>
                            <option>Authorize.net</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">API Key</label>
                        <input type="text" class="form-control" value="pk_test_123456789">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Secret Key</label>
                        <input type="password" class="form-control" value="sk_test_123456789">
                    </div>
                    
                    <div class="mb-0">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="testMode" checked>
                            <label class="form-check-label" for="testMode">
                                Test Mode
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white">
                <h5 class="mb-0">Social Media</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Facebook URL</label>
                        <input type="text" class="form-control" value="https://facebook.com/dreamhome">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Twitter URL</label>
                        <input type="text" class="form-control" value="https://twitter.com/dreamhome">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Instagram URL</label>
                        <input type="text" class="form-control" value="https://instagram.com/dreamhome">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">LinkedIn URL</label>
                        <input type="text" class="form-control" value="https://linkedin.com/company/dreamhome">
                    </div>
                    
                    <div class="mb-0">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="socialShare" checked>
                            <label class="form-check-label" for="socialShare">
                                Enable Social Sharing
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white">
                <h5 class="mb-0">SEO Settings</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" class="form-control" value="DreamHome - Find Your Perfect Property">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea class="form-control" rows="3">Discover your dream home with DreamHome. Browse thousands of properties for sale and rent.</textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Meta Keywords</label>
                        <input type="text" class="form-control" value="real estate, property, homes for sale, apartments">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Google Analytics ID</label>
                        <input type="text" class="form-control" value="UA-123456789-1">
                    </div>
                    
                    <div class="mb-0">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="sitemap" checked>
                            <label class="form-check-label" for="sitemap">
                                Generate Sitemap
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h5 class="mb-0">Backup Settings</h5>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Backup Frequency</label>
                        <select class="form-select">
                            <option selected>Daily</option>
                            <option>Weekly</option>
                            <option>Monthly</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Backup Time</label>
                        <input type="time" class="form-control" value="02:00">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Retention Period</label>
                        <select class="form-select">
                            <option selected>30 days</option>
                            <option>60 days</option>
                            <option>90 days</option>
                            <option>1 year</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Backup Location</label>
                        <select class="form-select">
                            <option selected>Local Server</option>
                            <option>Amazon S3</option>
                            <option>Google Drive</option>
                            <option>Dropbox</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Access Key</label>
                        <input type="text" class="form-control" value="your_access_key">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Secret Key</label>
                        <input type="password" class="form-control" value="your_secret_key">
                    </div>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-12">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="autoBackup" checked>
                        <label class="form-check-label" for="autoBackup">
                            Enable Automatic Backup
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12">
                    <button type="button" class="btn btn-outline-primary me-2">
                        <i class="fas fa-download me-2"></i> Download Backup
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="fas fa-undo me-2"></i> Restore Backup
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection