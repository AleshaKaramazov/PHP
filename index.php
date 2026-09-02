<?php

interface SenderInterface {
    public function send(string $message);
}

class EmailSender implements SenderInterface {
    public function send(string $message) {
        echo $message;
    }
}

class NotificationManager {
    public function __construct(private array $sender) {}
    public function notifyAll(string $text) {
        foreach ($this->sender as $to_send) {
            $to_send->send($text);
        }
    }
}

echo "hello";
