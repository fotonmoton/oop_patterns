<?php

namespace Foton\Patterns\Command\HomeAutomation;

use Closure;
use Foton\Patterns\Command\HomeAutomation\Commands\CommandInterface;

class RemoteControl
{
    /**
     * @var Closure[]
     */
    protected $onCommands;

    /**
     * @var Closure[]
     */
    protected $offCommands;

    protected $numberOfSlots = 2;

    public function fillSlot(int $index, Closure $onCommand, Closure $offCommand)
    {
        if (!$this->isValidIndex($index)) {
            return;
        }

        $this->onCommands[$index] = $onCommand;
        $this->offCommands[$index] = $offCommand;
    }

    public function pushOnButton(int $index)
    {
        if (!$this->isValidIndex($index)) {
            return;
        }

        $this->onCommands[$index]();
    }

    public function pushOffButton(int $index)
    {
        if (!$this->isValidIndex($index)) {
            return;
        }

            $this->offCommands[$index]();
    }

    private function isValidIndex(int $index)
    {
        return $index >= 0 || $index < $this->numberOfSlots;
    }
}
