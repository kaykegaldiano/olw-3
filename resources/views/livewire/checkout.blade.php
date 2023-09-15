<div class="bg-tertiary-900">
    <div class="fixed top-0 left-0 hidden w-1/2 h-full lg:block bg-tertiary-900" aria-hidden="true"></div>
    <div class="fixed top-0 right-0 hidden w-1/2 h-full lg:block bg-tertiary-800" aria-hidden="true"></div>

    <div class="relative grid grid-cols-1 mx-auto max-w-7xl gap-x-16 lg:grid-cols-2 lg:px-8 lg:pt-16">
        <section aria-labelledby="summary-heading"
            class="py-12 bg-tertiary-800 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">
            <div class="max-w-2xl px-4 mx-auto lg:max-w-none lg:px-0">
                <dl>
                    <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                </dl>

                <x-checkout.product-list>
                    @foreach ($cart['skus'] as $sku)
                    <x-checkout.product-item
                        image="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg"
                        :name="$sku['name']" :price="$sku['price']"
                        :features="collect($sku['features'])->map(fn ($feature) => $feature['name'] . ': ' . $feature['pivot']['value'])"
                        :quantity="$sku['pivot']['quantity']" />
                    @endforeach
                </x-checkout.product-list>
                <dl class="pt-6 space-y-6 text-sm font-medium border-t border-white border-opacity-10">
                    <x-checkout.summary-item title="Subtotal" :value="$cart['total']" />
                    <x-checkout.summary-item title="Frete" value="0" />
                    <x-checkout.summary-item :is-last="true" title="Total" :value="$cart['total']" />
                </dl>
            </div>
        </section>

        <section aria-labelledby="payment-and-shipping-heading"
            class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">
            <div class="max-w-2xl px-4 mx-auto lg:max-w-none lg:px-0">
                
                <div>
                    
                    <div class="flex flex-row items-center text-white">
                        <nav class="flex mb-4" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 text-xs md:space-x-3">
                                <li @class(['font-bold' => $step === CheckoutStepsEnum::INFORMATION->value])>
                                    <span>{{ CheckoutStepsEnum::INFORMATION->getName() }}</span>
                                </li>
                                <li @class(['inline-flex items-center', 'font-bold' => $step === CheckoutStepsEnum::SHIPPING->value])>
                                    <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span>{{ CheckoutStepsEnum::SHIPPING->getName() }}</span>
                                </li>
                                <li @class(['inline-flex items-center', 'font-bold' => $step === CheckoutStepsEnum::PAYMENT->value])>
                                    <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span>{{ CheckoutStepsEnum::PAYMENT->getName() }}</span>
                                </li>
                            </ol>
                        </nav>
                    </div>

                    @if ($step === CheckoutStepsEnum::INFORMATION->value)
                        <x-checkout.information-form />
                    @endif

                </div>

            </div>
        </section>
    </div>
</div>