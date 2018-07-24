<?php

namespace Foton\Patterns\Observer\WeatherORama;

use SplSubject;
use SplObserver;
use SplObjectStorage;

abstract class AbstractSubject implements SplSubject
{
    /**
     * Observers
     *
     * @var SplObjectStorage
     */
    protected $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function contains(SplObserver $observer)
    {
        return $this->observers->contains($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        };
    }
}
