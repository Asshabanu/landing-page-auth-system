<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\User;

class PropertySeeder extends Seeder
{
    public function run()
    {
        // Get the admin user
        $admin = User::where('email', 'admin@example.com')->first();
        
        if ($admin) {
            // Create sample properties
            Property::create([
                'title' => 'Modern Apartment in Downtown',
                'description' => 'A beautiful modern apartment in the heart of downtown with stunning city views.',
                'status' => 'active',
                'price' => 250000.00,
                'address' => '123 Main St, Downtown',
                'user_id' => $admin->id
            ]);
            
            Property::create([
                'title' => 'Family House in Suburbs',
                'description' => 'Spacious family home with a large backyard, perfect for children.',
                'status' => 'active',
                'price' => 450000.00,
                'address' => '456 Oak Ave, Suburbs',
                'user_id' => $admin->id
            ]);
            
            Property::create([
                'title' => 'Luxury Villa in Hillside',
                'description' => 'Exclusive luxury villa with panoramic views and premium amenities.',
                'status' => 'pending',
                'price' => 1250000.00,
                'address' => '789 Hilltop Rd, Hillside',
                'user_id' => $admin->id
            ]);
        }
    }
}