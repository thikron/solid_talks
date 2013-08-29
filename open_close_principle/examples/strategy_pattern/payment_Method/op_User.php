<?php

require_once 'PaymentGateway.php';

class User {
    /**
     * @var PaymentGateway
     */
    private $payment_gateway;

    public function __construct($payment_gateway)
    {
        $this->payment_gateway = $payment_gateway;
    }
    public function charge_for_subscription()
    {
      $this->payment_gateway->charge_for_subscription($this);
    }

    public function create_as_customer()
    {
        $this->payment_gateway->create_customer($this);
    }
}

class Refund {
    /**
     * @var PaymentGateway
     */
    private $payment_gateway;

    public function __construct($payment_gateway)
    {
        $this->payment_gateway = $payment_gateway;
    }

    public function process($order)
    {
        $this->payment_gateway->refund($order, $this);
    }
}
