<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\MailSender;

class MailSenderTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSendMail()
    {
        echo MailSender::sendMail('nagano@clubnets.jp', 'fukamachi@clubnets.jp', 'テスト', 'テスト本文');
    }
}
