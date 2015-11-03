<?php

class SupplyContactDetailsHandler
{
    // ...

    public function handleSupplyContactDetails(SupplyContactDetails $command)
    {
        $customer = $this->customerRepository->find($command->customerId());

        $customer->supplyContactDetails(
            $command->email(),
            $command->homeNumber(),
            $command->workNumber()
        );

        $this->customerRepository->save($customer);
//        $this->eventBus->dispatch($customer->getEvents());
    }
}