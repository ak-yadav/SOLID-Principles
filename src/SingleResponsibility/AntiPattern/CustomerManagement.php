<?php

class CustomerManagement
{
    public function Registration(Customer $customer)
    {
        // validate the data in $customer object
        if (
            !empty($customer)
            && !empty($customer->getFirstName())
            && !empty($customer->getEmail())
        ) {

            // save the user details in database


            // send the registration mail
            mail($customer->getEmail(), "Confirmation Of Registration", "You have successfully registered!",
                "From: test@test.com");
        }
    }
}