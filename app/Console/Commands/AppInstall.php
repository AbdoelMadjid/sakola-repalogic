<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AppInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installer Laravel 12 Webskaone';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("=== Install Webskaone Laravel 12 ===");

        // 1. Copy .env
        if (!file_exists(base_path('.env'))) {
            copy(base_path('.env.example'), base_path('.env'));
            $this->info(".env created from .env.example");
        }

        // 2. Ask DB config
        $dbHost = $this->ask("DB_HOST", "127.0.0.1");
        $dbPort = $this->ask("DB_PORT", "3306");
        $dbName = $this->ask("DB_DATABASE", "webskaone-l12");
        $dbUser = $this->ask("DB_USERNAME", "root");
        $dbPass = $this->secret("DB_PASSWORD");

        // 3. Update .env
        file_put_contents(
            base_path('.env'),
            preg_replace(
                '/DB_CONNECTION=.*/',
                'DB_CONNECTION=mysql',
                file_get_contents(base_path('.env'))
            )
        );
        file_put_contents(base_path('.env'), preg_replace('/DB_HOST=.*/', "DB_HOST={$dbHost}", file_get_contents(base_path('.env'))));
        file_put_contents(base_path('.env'), preg_replace('/DB_PORT=.*/', "DB_PORT={$dbPort}", file_get_contents(base_path('.env'))));
        file_put_contents(base_path('.env'), preg_replace('/DB_DATABASE=.*/', "DB_DATABASE={$dbName}", file_get_contents(base_path('.env'))));
        file_put_contents(base_path('.env'), preg_replace('/DB_USERNAME=.*/', "DB_USERNAME={$dbUser}", file_get_contents(base_path('.env'))));
        file_put_contents(base_path('.env'), preg_replace('/DB_PASSWORD=.*/', "DB_PASSWORD={$dbPass}", file_get_contents(base_path('.env'))));

        $this->info(".env updated with DB config");

        // 4. Composer install
        /* $this->info("Running composer install...");
        exec("composer install"); */

        // 5. Generate key
        $this->call('key:generate');

        // 6. Import database structure
        $structureFile = base_path('backup/struktur.sql');
        if (file_exists($structureFile)) {
            exec("mysql -u{$dbUser} -p{$dbPass} -h{$dbHost} {$dbName} < {$structureFile}");
            $this->info("Database structure imported.");
        }

        // 7. Import database data
        $dataFile = base_path('backup/data.sql');
        if (file_exists($dataFile)) {
            exec("mysql -u{$dbUser} -p{$dbPass} -h{$dbHost} {$dbName} < {$dataFile}");
            $this->info("Database data imported.");
        }

        // 8. Optimize clear
        $this->call('optimize:clear');

        $this->info("=== Installation Completed! ===");
    }
}
