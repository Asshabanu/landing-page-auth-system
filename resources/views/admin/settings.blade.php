@extends('layouts.admin')
@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">Configure your application settings and preferences</p>
    </div>
    <button class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
        <i class="fas fa-save mr-2"></i> Save Changes
    </button>
</div>

<!-- Settings Cards Row 1 -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- General Settings Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-bold text-gray-800">General Settings</h3>
            <div class="relative">
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reset to Default</a>
                </div>
            </div>
        </div>
        <form class="space-y-5">
            <div>
                <label for="siteName" class="block text-sm font-medium text-gray-700 mb-1">Site Name</label>
                <input type="text" id="siteName" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="DreamHome">
            </div>
            
            <div>
                <label for="siteUrl" class="block text-sm font-medium text-gray-700 mb-1">Site URL</label>
                <input type="text" id="siteUrl" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="https://dreamhome.com">
            </div>
            
            <div>
                <label for="adminEmail" class="block text-sm font-medium text-gray-700 mb-1">Admin Email</label>
                <input type="email" id="adminEmail" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="admin@dreamhome.com">
            </div>
            
            <div>
                <label for="timezone" class="block text-sm font-medium text-gray-700 mb-1">Timezone</label>
                <select id="timezone" class="block w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option selected>UTC</option>
                    <option>EST</option>
                    <option>PST</option>
                    <option>CST</option>
                </select>
            </div>
            
            <div>
                <label for="dateFormat" class="block text-sm font-medium text-gray-700 mb-1">Date Format</label>
                <select id="dateFormat" class="block w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option selected>MM/DD/YYYY</option>
                    <option>DD/MM/YYYY</option>
                    <option>YYYY-MM-DD</option>
                </select>
            </div>
            
            <div class="flex items-center justify-between">
                <label for="maintenanceMode" class="text-sm font-medium text-gray-700">Maintenance Mode</label>
                <div class="relative inline-block w-10 mr-2 align-middle select-none">
                    <input type="checkbox" id="maintenanceMode" class="sr-only" checked>
                    <div class="block bg-gray-300 w-10 h-6 rounded-full"></div>
                    <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition transform translate-x-4"></div>
                </div>
            </div>
        </form>
    </div>
    
    <!-- Email Settings Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-bold text-gray-800">Email Settings</h3>
            <div class="relative">
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Test Email</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reset to Default</a>
                </div>
            </div>
        </div>
        <div class="p-6">
            <form class="space-y-5">
                <div>
                    <label for="mailDriver" class="block text-sm font-medium text-gray-700 mb-1">Mail Driver</label>
                    <select id="mailDriver" class="block w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option selected>SMTP</option>
                        <option>Sendmail</option>
                        <option>Mailgun</option>
                        <option>SES</option>
                    </select>
                </div>
                
                <div>
                    <label for="smtpHost" class="block text-sm font-medium text-gray-700 mb-1">SMTP Host</label>
                    <input type="text" id="smtpHost" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="smtp.mailtrap.io">
                </div>
                
                <div>
                    <label for="smtpPort" class="block text-sm font-medium text-gray-700 mb-1">SMTP Port</label>
                    <input type="text" id="smtpPort" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="2525">
                </div>
                
                <div>
                    <label for="smtpUsername" class="block text-sm font-medium text-gray-700 mb-1">SMTP Username</label>
                    <input type="text" id="smtpUsername" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="your_username">
                </div>
                
                <div>
                    <label for="smtpPassword" class="block text-sm font-medium text-gray-700 mb-1">SMTP Password</label>
                    <input type="password" id="smtpPassword" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="your_password">
                </div>
                
                <div class="flex items-center justify-between">
                    <label for="emailEncryption" class="text-sm font-medium text-gray-700">Enable Encryption</label>
                    <div class="relative inline-block w-10 mr-2 align-middle select-none">
                        <input type="checkbox" id="emailEncryption" class="sr-only" checked>
                        <div class="block bg-gray-300 w-10 h-6 rounded-full"></div>
                        <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition transform translate-x-4"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Payment Settings Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-bold text-gray-800">Payment Settings</h3>
            <div class="relative">
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Test Connection</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reset to Default</a>
                </div>
            </div>
        </div>
        <div class="p-6">
            <form class="space-y-5">
                <div>
                    <label for="currency" class="block text-sm font-medium text-gray-700 mb-1">Currency</label>
                    <select id="currency" class="block w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option selected>USD ($)</option>
                        <option>EUR (€)</option>
                        <option>GBP (£)</option>
                        <option>CAD (C$)</option>
                    </select>
                </div>
                
                <div>
                    <label for="paymentGateway" class="block text-sm font-medium text-gray-700 mb-1">Payment Gateway</label>
                    <select id="paymentGateway" class="block w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option selected>Stripe</option>
                        <option>PayPal</option>
                        <option>Authorize.net</option>
                    </select>
                </div>
                
                <div>
                    <label for="apiKey" class="block text-sm font-medium text-gray-700 mb-1">API Key</label>
                    <input type="text" id="apiKey" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="pk_test_123456789">
                </div>
                
                <div>
                    <label for="secretKey" class="block text-sm font-medium text-gray-700 mb-1">Secret Key</label>
                    <input type="password" id="secretKey" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="sk_test_123456789">
                </div>
                
                <div class="flex items-center justify-between">
                    <label for="testMode" class="text-sm font-medium text-gray-700">Test Mode</label>
                    <div class="relative inline-block w-10 mr-2 align-middle select-none">
                        <input type="checkbox" id="testMode" class="sr-only" checked>
                        <div class="block bg-gray-300 w-10 h-6 rounded-full"></div>
                        <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition transform translate-x-4"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Settings Cards Row 2 -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Social Media Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-bold text-gray-800">Social Media</h3>
            <div class="relative">
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reset to Default</a>
                </div>
            </div>
        </div>
        <div class="p-6">
            <form class="space-y-5">
                <div>
                    <label for="facebookUrl" class="block text-sm font-medium text-gray-700 mb-1">Facebook URL</label>
                    <input type="text" id="facebookUrl" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="https://facebook.com/dreamhome">
                </div>
                
                <div>
                    <label for="twitterUrl" class="block text-sm font-medium text-gray-700 mb-1">Twitter URL</label>
                    <input type="text" id="twitterUrl" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="https://twitter.com/dreamhome">
                </div>
                
                <div>
                    <label for="instagramUrl" class="block text-sm font-medium text-gray-700 mb-1">Instagram URL</label>
                    <input type="text" id="instagramUrl" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="https://instagram.com/dreamhome">
                </div>
                
                <div>
                    <label for="linkedinUrl" class="block text-sm font-medium text-gray-700 mb-1">LinkedIn URL</label>
                    <input type="text" id="linkedinUrl" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="https://linkedin.com/company/dreamhome">
                </div>
                
                <div class="flex items-center justify-between">
                    <label for="socialShare" class="text-sm font-medium text-gray-700">Enable Social Sharing</label>
                    <div class="relative inline-block w-10 mr-2 align-middle select-none">
                        <input type="checkbox" id="socialShare" class="sr-only" checked>
                        <div class="block bg-gray-300 w-10 h-6 rounded-full"></div>
                        <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition transform translate-x-4"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- SEO Settings Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-bold text-gray-800">SEO Settings</h3>
            <div class="relative">
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reset to Default</a>
                </div>
            </div>
        </div>
        <div class="p-6">
            <form class="space-y-5">
                <div>
                    <label for="metaTitle" class="block text-sm font-medium text-gray-700 mb-1">Meta Title</label>
                    <input type="text" id="metaTitle" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="DreamHome - Find Your Perfect Property">
                </div>
                
                <div>
                    <label for="metaDescription" class="block text-sm font-medium text-gray-700 mb-1">Meta Description</label>
                    <textarea id="metaDescription" rows="3" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors">Discover your dream home with DreamHome. Browse thousands of properties for sale and rent.</textarea>
                </div>
                
                <div>
                    <label for="metaKeywords" class="block text-sm font-medium text-gray-700 mb-1">Meta Keywords</label>
                    <input type="text" id="metaKeywords" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="real estate, property, homes for sale, apartments">
                </div>
                
                <div>
                    <label for="googleAnalytics" class="block text-sm font-medium text-gray-700 mb-1">Google Analytics ID</label>
                    <input type="text" id="googleAnalytics" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="UA-123456789-1">
                </div>
                
                <div class="flex items-center justify-between">
                    <label for="sitemap" class="text-sm font-medium text-gray-700">Generate Sitemap</label>
                    <div class="relative inline-block w-10 mr-2 align-middle select-none">
                        <input type="checkbox" id="sitemap" class="sr-only" checked>
                        <div class="block bg-gray-300 w-10 h-6 rounded-full"></div>
                        <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition transform translate-x-4"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Backup Settings Card -->
<div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-bold text-gray-800">Backup Settings</h3>
        <div class="relative">
            <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                <i class="fas fa-ellipsis-v"></i>
            </button>
            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Backup History</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reset to Default</a>
            </div>
        </div>
    </div>
    <div class="p-6">
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-5">
                    <div>
                        <label for="backupFrequency" class="block text-sm font-medium text-gray-700 mb-1">Backup Frequency</label>
                        <select id="backupFrequency" class="block w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option selected>Daily</option>
                            <option>Weekly</option>
                            <option>Monthly</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="backupTime" class="block text-sm font-medium text-gray-700 mb-1">Backup Time</label>
                        <input type="time" id="backupTime" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="02:00">
                    </div>
                    
                    <div>
                        <label for="retentionPeriod" class="block text-sm font-medium text-gray-700 mb-1">Retention Period</label>
                        <select id="retentionPeriod" class="block w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option selected>30 days</option>
                            <option>60 days</option>
                            <option>90 days</option>
                            <option>1 year</option>
                        </select>
                    </div>
                </div>
                
                <div class="space-y-5">
                    <div>
                        <label for="backupLocation" class="block text-sm font-medium text-gray-700 mb-1">Backup Location</label>
                        <select id="backupLocation" class="block w-full px-4 py-2 border border-gray-300 bg-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option selected>Local Server</option>
                            <option>Amazon S3</option>
                            <option>Google Drive</option>
                            <option>Dropbox</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="accessKey" class="block text-sm font-medium text-gray-700 mb-1">Access Key</label>
                        <input type="text" id="accessKey" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="your_access_key">
                    </div>
                    
                    <div>
                        <label for="backupSecretKey" class="block text-sm font-medium text-gray-700 mb-1">Secret Key</label>
                        <input type="password" id="backupSecretKey" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" value="your_secret_key">
                    </div>
                </div>
            </div>
            
            <div class="flex items-center justify-between">
                <label for="autoBackup" class="text-sm font-medium text-gray-700">Enable Automatic Backup</label>
                <div class="relative inline-block w-10 mr-2 align-middle select-none">
                    <input type="checkbox" id="autoBackup" class="sr-only" checked>
                    <div class="block bg-gray-300 w-10 h-6 rounded-full"></div>
                    <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition transform translate-x-4"></div>
                </div>
            </div>
            
            <div class="flex flex-wrap gap-3 pt-2">
                <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
                    <i class="fas fa-download mr-2"></i> Download Backup
                </button>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
                    <i class="fas fa-undo mr-2"></i> Restore Backup
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Toggle switch functionality
    document.querySelectorAll('input[type="checkbox"][id]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const dot = this.nextElementSibling.nextElementSibling;
            if (this.checked) {
                dot.classList.add('translate-x-4');
                dot.classList.remove('translate-x-0');
                this.nextElementSibling.classList.remove('bg-gray-300');
                this.nextElementSibling.classList.add('bg-blue-600');
            } else {
                dot.classList.remove('translate-x-4');
                dot.classList.add('translate-x-0');
                this.nextElementSibling.classList.add('bg-gray-300');
                this.nextElementSibling.classList.remove('bg-blue-600');
            }
        });
        
        // Initialize toggle state
        if (checkbox.checked) {
            const dot = checkbox.nextElementSibling.nextElementSibling;
            dot.classList.add('translate-x-4');
            checkbox.nextElementSibling.classList.add('bg-blue-600');
            checkbox.nextElementSibling.classList.remove('bg-gray-300');
        }
    });
</script>
@endsection