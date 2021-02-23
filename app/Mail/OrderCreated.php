<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $order;

    /**
     * OrderCreated constructor.
     */
    public function __construct($name, Order $basket)
    {
        $this->name = $name;
        $this->order = $basket;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fullSumm = $this->order->getFullPrice();
        return $this->view('mail.order_created', [
            'name' => $this->name, 
            'order' => $this->order, 
            'fullSumm' => $fullSumm
        ]);
    }
}
