<?php namespace Rajagonda\Gondapay;

use Rajagonda\Gondapay\Gateways\CCAvenueGateway;
use Rajagonda\Gondapay\Gateways\CitrusGateway;
use Rajagonda\Gondapay\Gateways\EBSGateway;
use Rajagonda\Gondapay\Gateways\InstaMojoGateway;
use Rajagonda\Gondapay\Gateways\PaymentGatewayInterface;
use Rajagonda\Gondapay\Gateways\PayUMoneyGateway;
use Rajagonda\Gondapay\Gateways\MockerGateway;
use Rajagonda\Gondapay\Gateways\ZapakPayGateway;

class gondapay {

    protected $gateway;

    /**
     * @param PaymentGatewayInterface $gateway
     */
    function __construct(PaymentGatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function purchase($parameters = array())
    {

        return $this->gateway->request($parameters)->send();

    }

    public function response($request)
    {
        return $this->gateway->response($request);
    }

    public function prepare($parameters = array())
    {
        return $this->gateway->request($parameters);
    }

    public function process($order)
    {
        return $order->send();
    }

    public function gateway($name)
    {
        $name = strtolower($name);
        switch($name)
        {
            case 'ccavenue':
                $this->gateway = new CCAvenueGateway();
                break;

            case 'payumoney':
                $this->gateway = new PayUMoneyGateway();
                break;

            case 'ebs':
                $this->gateway = new EBSGateway();
                break;

            case 'citrus':
                $this->gateway = new CitrusGateway();
                break;

            case 'instamojo':
                $this->gateway = new InstaMojoGateway();
                break;

            case 'mocker':
                $this->gateway = new MockerGateway();
                break;

            case 'zapakpay':
                $this->gateway = new ZapakPayGateway();
                break;

        }

        return $this;
    }



}