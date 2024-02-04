<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductUpdateEvent
{
    use Dispatchable, SerializesModels;

    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }
}
