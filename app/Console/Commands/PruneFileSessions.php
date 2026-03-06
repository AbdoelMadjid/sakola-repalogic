<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PruneFileSessions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'session:prune-file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prune expired file-based sessions';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = storage_path('framework/sessions');

        $lifetime = config('session.lifetime') * 60; // detik

        $deleted = 0;

        foreach (File::files($path) as $file) {

            if (time() - $file->getMTime() >= $lifetime) {
                File::delete($file);
                $deleted++;
            }
        }

        $this->info("Deleted {$deleted} old sessions");

        return 0;
    }
}
