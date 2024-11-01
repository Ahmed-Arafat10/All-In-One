<?php

namespace AhmedArafat\AllInOne\Console;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;

class GitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:git {msg} {branch} {remote=origin} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'git add . then commit them push to GitHub';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Process::run('git status', function (string $type, string $output) {
            $this->info($output);
        });

        Process::run('git add .', function (string $type, string $output) {
            $this->info($output);
        });
        $time = Carbon::now('Africa/Cairo')->format('h:i a Y/m/d');
        Process::run("git commit -m \" {$this->argument('msg')} --- {$time} \" ", function (string $type, string $output) {
            $this->info($output);
        });
        $t1 = Process::forever()->run("git push {$this->argument('remote')} {$this->argument('branch')}",
            function (string $type, string $output) {
                $this->info($output);
            });
    }
}
