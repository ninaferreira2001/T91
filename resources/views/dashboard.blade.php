<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Pizzaria
                </div>
                <br>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observações</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
