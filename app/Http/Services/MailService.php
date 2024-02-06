<?php

namespace App\Http\Services;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailService {

    public function sendEmail(string $temp,string $to,array $data,$subject)
    {
        try{
            Mail::send($temp, $data, function ($message) use($to,$subject) {
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $message->to($to)->subject($subject);
            });
        }catch (\Exception $e){
            Log::info($e->getMessage());
        }

        return true;
    }

}
