<?php
class BraintreeGateway {
    public function charge($id, $amount) {

    }

    public function create_customer($email){

    }

    public function find_user($email)
    {
        $user = new stdClass();
        $user->braintree_id = 7;
        return $user;
    }

    public function find_transaction($id)
    {
        return 7;
    }

    public function refund($id, $amount)
    {

    }
}