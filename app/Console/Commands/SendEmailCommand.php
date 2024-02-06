<?php

namespace App\Console\Commands;

use App\Http\Services\MailService;
use App\Models\MassegTextMessage;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:sand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $mail = MassegTextMessage::where('status', 1)->get();
        if (count($mail) > 0) {
            foreach ($mail as $key) {
                $data = ['userName' => $key->name];
                app(MailService::class)->sendEmail("emails.success", $key->email, $data, "Thanks for Emailing Me");
                MassegTextMessage::where('id', $key->id)->update(['status' => 2]);
                Log::info('Email sand', [$key->email]);
            }
        }
        Log::info('No mail add');
    }
}
