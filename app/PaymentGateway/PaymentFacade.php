<?php

namespace App\PaymentGateway;

class PaymentFacade {
    protected static function getFacadeAccsor(){
        return "Payment";
    }
}