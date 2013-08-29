<?php
require_once "BraintreeGateway.php";

class PaymentGateway
{

    const SUBSCRIPTION_AMOUNT = 10;


    /**
     * @var BraintreeGateway
     */
    private $gateway;

    public function initialize()
    {
        $this->gateway = new BraintreeGateway;
    }

    public function charge_for_subscription($user)
    {
        $braintree_id = $this->gateway->find_user($user->email)->braintree_id;
        $this->gateway->charge($braintree_id, self::SUBSCRIPTION_AMOUNT);
    }

    public function create_customer($user)
    {
        $this->gateway->create_customer($user->email);
    }

    public function refund($order)
    {
        $transaction_id = $this->gateway->find_transaction($order->braintree_id);
        $this->gateway->refund($transaction_id, $order->amount);
    }
}
