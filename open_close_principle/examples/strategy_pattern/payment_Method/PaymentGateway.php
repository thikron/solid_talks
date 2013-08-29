<?php
require_once "Braintree.php";

class PaymentGateway {

    const SUBSCRIPTION_AMOUNT = 10;

    private $gateway;

    public function initialize($gateway = null){
        if (isset($gateway)) {
           $this->gateway = $gateway;
        }
    }

    public function charge_for_subscription($user){
        $braintree_id = $this->gateway.find_user($user->email)->braintree_id);

    }
}