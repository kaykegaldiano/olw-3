<?php

namespace App\Livewire;

use App\Enums\CheckoutStepsEnum;
use App\Livewire\Forms\AddressForm;
use App\Livewire\Forms\UserForm;
use App\Services\CheckoutService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Checkout extends Component
{
    public array $cart = [];
    public int $step = CheckoutStepsEnum::INFORMATION->value;
    public int|null $method = null;
    public UserForm $user;
    public AddressForm $address;

    // hook de ciclo de vida, quando o componente está carregando
    // é como se fosse o construtor de uma classe
    public function mount(CheckoutService $checkoutService): void
    {
        $this->cart = $checkoutService->loadCart();
    }

    public function findAddress(): void
    {
        $this->address->findAddress();
    }

    public function creditCardPayment($data)
    {
        dd($data);
    }

    public function pixOrBankSlipPayment($data)
    {
        dd($data);
    }

    public function submitInformationStep(): void
    {
        $this->user->validate();
        $this->address->validate();
        $this->step = CheckoutStepsEnum::SHIPPING->value;
    }

    public function submitShippingStep(): void
    {
        $this->step = CheckoutStepsEnum::PAYMENT->value;
    }

    public function render(): View
    {
        return view('livewire.checkout');
    }
}
