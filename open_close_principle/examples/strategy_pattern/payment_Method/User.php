<?php
require 'BraintreeGateway.php';
class User {

    const SUBSCRIPTION_AMOUNT = 10;

    public function charge_for_subscription()
    {
        $braintree = new BraintreeGateway();
        $braintree_id = $braintree->find_user('email')->braintree_id;
        $braintree->charge($braintree_id, self::SUBSCRIPTION_AMOUNT);
    }

    public function create_as_customer()
    {
        $braintree = new BraintreeGateway();
        $braintree->create_customer('email');
    }
}

class Refund {
    public function process()
    {
        $braintree = new BraintreeGateway();
        $transaction_id = $braintree->find_transaction('order_id');
        $braintree->refund($transaction_id, 'amount');
    }
}
