<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Test with
 * C:\Users\PC\PhpstormProjects\BergclubModule\composer>..\phpunit --bootstrap src\Email.php test\EmailTest.php
 * @covers Email
 */
final class EmailTest extends TestCase
{

    public function testEcho(): void
    {
        echo "Hello World!";
        $this->assertEquals(
            'HelloWorld',
            'HelloWorld'
        );
    }

    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}