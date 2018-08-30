<?php

declare(strict_types=1);


namespace App\Process;

use Interop\Queue\PsrMessage;
use Interop\Queue\PsrContext;
use Interop\Queue\PsrProcessor;
use Enqueue\Client\TopicSubscriberInterface;

class SendContactInfoToAdminProcessor implements PsrProcessor, TopicSubscriberInterface
{
    protected $mailer;

    protected $adminEmail;

    public function __construct(\Swift_Mailer $mailer, string $adminEmail)
    {
        $this->mailer = $mailer;
        $this->adminEmail = $adminEmail;
    }

    public function process(PsrMessage $message, PsrContext $session)
    {
        echo $message->getBody();

        $this->mailer->send((new \Swift_Message('Hello Email'))
            ->setFrom('no-reply@example.com')
            ->setTo($this->adminEmail)
            ->setBody($message->getBody())
        );

        return self::ACK;
        // return self::REJECT; // when the message is broken
        // return self::REQUEUE; // the message is fine but you want to postpone processing
    }

    public static function getSubscribedTopics()
    {
        return ['aSendContactInfoToAdmin'];
    }
}