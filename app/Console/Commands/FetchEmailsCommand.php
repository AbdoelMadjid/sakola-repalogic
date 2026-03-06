<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\EmailFetchService;

class FetchEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:fetch {--all=false : Fetch seen+unseen (default only unseen)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch emails from IMAP and save to database.';

    /**
     * Execute the console command.
     */
    public function handle(EmailFetchService $service)
    {
        $onlyUnseen = !$this->option('all');
        $count = $service->fetch($onlyUnseen, true);
        $this->info("Fetched {$count} messages.");
        return 0;
    }
}
