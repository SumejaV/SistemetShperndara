<?php

namespace App\Contracts;

interface SendSms {
   

     public function send($to, $from, $text, $template_id);
}
