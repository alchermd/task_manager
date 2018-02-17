<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Task;

final class TaskTest extends TestCase
{
    protected $task;

    public function setup()
    {
        $this->task = new Task;
        $this->task->setDescription('FooBar');
    }

    public function testGetDescriptionReturnsString()
    {
        $this->assertInternalType('string', $this->task->getDescription());
    }

    public function testGetDescriptionReturnsSetString()
    {
        $this->assertEquals('FooBar', $this->task->getDescription());
    }

    public function testSettersReturnObject()
    {
        $this->assertInstanceOf(Task::class, $this->task->setDescription('FooBar'));
        $this->assertInstanceOf(Task::class, $this->task->setCompleted(false));
    }
}
