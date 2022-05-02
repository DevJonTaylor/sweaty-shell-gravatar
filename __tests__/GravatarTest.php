<?php

/**
 * @author Jon Taylor
 * @file GravatarTest.php
 * @since 1.1
 * @
 */

use SweatyShell\Gravatar;

class GravatarTest extends \PHPUnit\Framework\TestCase
{
    protected string $testEmail = 'jonnytest1101@icloud.com';
    protected string $gravatarUrl = 'https://www.gravatar.com/avatar/';

    protected function getHashedEmailed(): string
    {
        return md5($this->testEmail);
    }

    protected function getExpectedUrl(): string
    {
        return sprintf("%s%s", $this->gravatarUrl, $this->getHashedEmailed());
    }

    public function testEmailIsHashed():void
    {
        $gravatar = new Gravatar;
        $gravatar->setEmail($this->testEmail);
        $this->assertEquals($this->getHashedEmailed(), $gravatar->getHash());
    }

    public function testToString(): void
    {
        $gravatar = new Gravatar;
        $gravatar->setEmail($this->testEmail);

        $expected = $this->getExpectedUrl();
        $actual = "$gravatar";

        $this->assertEquals($expected, $actual);
    }
}