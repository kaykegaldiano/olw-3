<?php

namespace App\Livewire;

use App\Enums\CheckoutStepsEnum;
use App\Services\CheckoutService;
use Livewire\Component;

class Checkout extends Component
{
    public array $cart = [];
    public int $step = CheckoutStepsEnum::INFORMATION->value;

    // hook de ciclo de vida, quando o componente está carregando
    // é como se fosse o construtor de uma classe
    public function mount(CheckoutService $checkoutService)
    {
        $this->cart = $checkoutService->loadCart();
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
