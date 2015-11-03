<?php


class ContactDetailsController
{
    public function supplyContactDetailsAction(Request $request)
    {
        $form = $formFactory->create(new SupplyContactDetailsType());

        $form->handleRequest($request);
        $this->commandBus->dispatch($form->getData());

        return new Response('...');
    }
}