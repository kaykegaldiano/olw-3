<div>
    <x-section-title title="Informações de contato" />

    <div class="mt-6">
        <x-input-label for="email-address" value="E-mail" />
        <div class="mt-1">
            <x-text-input type="email" name="email" id="email-address" autocomplete="email"
                placeholder="Digite seu e-mail" wire:model="user.email" />
        </div>
        <div>
            @error('user.email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="mt-6">
        <x-input-label for="name" value="Nome completo" />
        <div class="mt-1">
            <x-text-input type="text" id="name" name="name" autocomplete="name" placeholder="Digite seu nome completo" />
        </div>
        <div>
            @error('user.name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="mt-10">
        <x-section-title title="Endereço de entrega" />
        <div class="grid grid-cols-6 mt-6 gap-x-4 gap-y-6 sm:grid-cols-8">
            
            <div class="col-span-6 sm:col-span-2">
                <x-input-label for="zipcode" value="CEP" />
                <div class="mt-1">
                    <x-text-input type="text" id="zipcode" name="zipcode" placeholder="CEP" />
                </div>
                <div>
                    @error('address.zipcode') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-6">
                <x-input-label for="address" value="Nome da Rua" />
                <div class="mt-1">
                    <x-text-input type="text" id="address" name="address" placeholder="Rua" />
                </div>
                <div>
                    @error('address.address') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-input-label for="number" value="Numero" />
                <div class="mt-1">
                    <x-text-input type="text" id="number" name="number" placeholder="Número" />
                </div>
                <div>
                    @error('address.number') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-input-label for="complement" value="Complemento" />
                <div class="mt-1">
                    <x-text-input type="text" id="complement" name="complement" placeholder="Complemento" />
                </div>
            </div>

            <div class="col-span-6 sm:col-span-8">
                <x-input-label for="district" value="Bairro" />
                <div class="mt-1">
                    <x-text-input type="text" id="district" name="district" placeholder="Bairro" />
                </div>
                <div>
                    @error('address.district') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-input-label for="city" value="Cidade" />
                <div class="mt-1">
                    <x-text-input type="text" id="city" name="city" placeholder="Cidade" />
                </div>
                <div>
                    @error('address.city') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-input-label for="state" value="Estado" />
                <div class="mt-1">
                    <x-text-input type="text" id="state" name="state" placeholder="Estado" />
                </div>
                <div>
                    @error('address.state') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>
            
        </div>
    </div>

    <div class="mt-10">
        <x-section-title title="Detalhes do pagamento" />

        <div class="grid grid-cols-3 mt-6 gap-x-4 gap-y-6 sm:grid-cols-4">
            <div class="col-span-3 sm:col-span-4">
                <x-input-label for="card-number" value="Número do cartão" />
                <div class="mt-1">
                    <x-text-input type="text" id="card-number" name="card-number" placeholder="Número do cartão"
                        required />
                </div>
            </div>

            <div class="col-span-2 sm:col-span-3">
                <x-input-label for="expiration-date" value="Data de expiração (MM/YY)" />
                <div class="mt-1">
                    <x-text-input type="text" id="expiration-date" name="expiration-date" placeholder="MM / AA" />
                </div>
            </div>

            <div>
                <x-input-label for="cvc" value="CVC" />
                <div class="mt-1">
                    <x-text-input type="text" id="cvc" name="cvc" placeholder="CVC" />
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row items-center justify-end mt-8">
        <x-primary-button class="px-8 py-4">
            Continuar com o frete
        </x-primary-button>
    </div>

</div>