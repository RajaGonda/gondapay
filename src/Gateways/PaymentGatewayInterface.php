<?php namespace Rajagonda\Gondapay\Gateways;

interface PaymentGatewayInterface {
    public function request($parameters);
    public function send();
    public function response($request);
}