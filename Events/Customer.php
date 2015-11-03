<?php

class Customer
{
    private $newEvents = [];

    public function supplyContactDetails(Email $email, PhoneNumber $phoneNumber, PhoneNumber $workNumber)
    {
        $this->raise(new ContactDetailsSupplied(
            // ...
        ));
}


    private function raise($event)
    {
        $this->newEvents[] = $event;
    }

    public function newEvents()
    {
        $events = $this->newEvents;
        $this->newEvents = [];

        return $events;
    }
}