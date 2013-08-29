<?php
require 'Braintree.php';
class User {

    const SUBSCRIPTION_AMOUNT = 10;

    public function charge_for_subscription()
    {
        $braintree = new Braintree();
        $braintree_id = $braintree->find_user('email')->braintree_id;
        $braintree->charge($braintree_id, self::SUBSCRIPTION_AMOUNT);
    }

    public function create_as_customer()
    {
        $braintree = new Braintree();
        $braintree->create_customer('email');
    }
}

class Refund {
    public function process()
    {
        $braintree = new Braintree();
        $transaction_id = $braintree->find_transaction('order_id');
        $braintree->refund($transaction_id, 'amount');
    }
}
