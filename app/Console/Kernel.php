<?php
namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Daily backup of the database
        $schedule->command('backup:run --only-db')->daily()->at('02:00');
        
        // Clean up expired bookings and temporary files
        $schedule->command('model:prune')->daily();
        
        // Generate and email monthly reports to admins
        $schedule->command('app:generate-monthly-reports')->monthlyOn(1, '08:00');
        
        // Cache property data for better performance
        $schedule->command('cache:prune')->weekly();
        
        // Check for pending property approvals and send notifications
        $schedule->command('app:check-pending-approvals')->daily()->at('10:00');
        
        // Update property status based on booking dates
        $schedule->command('app:update-property-status')->hourly();
        
        // System health check
        $schedule->command('app:system-health-check')->daily()->at('03:00');
        
        // Optimize database tables
        $schedule->command('db:optimize')->weekly()->sundays()->at('04:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}