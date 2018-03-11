<?php
use Nette\Mail\SmtpMailer;
class BaseController
{
    protected $mail;
    public function __construct()
    {
    }

    public function __destruct()
    {
        $mail = $this->mail;
        if ($mail instanceof Mail) {
            $mailer = new SmtpMailer($mail->config);
            $mailer->send($mail);
        }
    }
}