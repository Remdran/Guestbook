<?php

use PHPUnit\Framework\TestCase;

class GuestbookTest extends TestCase {

    /** @test */
    public function a_user_can_see_messages()
    {
        // Given we have a webpage
        $page = new \index();
        // And we have some messages
        $expected = 'Signed It';
        // When a user goes to the webpage
        // Assert we see those messages
        $this->assertContains($expected, $page);
    }
}