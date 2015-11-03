<?php

class ContactDetailsSupplied
{
    private $customerId;
    private $email;
    private $homeNumber;
    private $workNumber;

    public function __construct(
        CustomerId $customerId,
        Email $email,
        PhoneNumber $homeNumber,
        PhoneNumber $workNumber
    )
    {
        $this->customerId = $customerId;
        $this->email = $email;
        $this->homeNumber = $homeNumber;
        $this->workNumber = $workNumber;
    }
}
