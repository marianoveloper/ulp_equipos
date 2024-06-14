<div class="inset-0 z-10 overflow-y-auto duration-500 ease-out">
    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="inset-0 transition-opacity">
            <div class="inset-0 "></div>
            <h1 class="mt-6 text-2xl font-bold text-center bg-green-200">Equipos Para Cobertura</h1>
        </div>
        <div class="text-center">
            @if (session('info'))
            <a href="/"
                class="items-center w-full px-4 py-3 text-sm font-bold text-center text-white bg-yellow-500 rounded hover:bg-yellow-700">{{session('info')}}!
                Volver al Menu</a>

            @endif

        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block overflow-hidden text-left align-bottom transform bg-white rounded-lg shadow-xl transform-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
           >
            <form wire:submit.prevent="guardar()">


                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <input type="hidden" id="user_id" name="user_id" value="{{auth()->user()->id}}" wire:model="user_id">

                    <div class="form-group">
                        <label for="equipos" class="col-md-4 col-form-label text-md-right" id="">Equipos </label>
                        <div class="mb-4">
                            <select class="block w-full pr-12 mt-1 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" name="equipo_id" id="equipo_id" wire:model="equipo_id">
                                <option value="">Seleccione el Equipo...</option>
                                @foreach($equipos as $equipo)
                                <option value="{{$equipo->id}}">{{$equipo->name}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">

                        <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900" >Descripcion de Cobertura</label>
    <textarea  rows="4" class="block w-full pr-12 mt-1 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" id="descripcion" wire:model='descripcion' placeholder="Your message..." required></textarea>
                    </div>
                    @error('descripcion')
                    <strong class="text-xs text-red-600">{{$message}}</strong>
                    @enderror
                    <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                        <x-button class="mt-4 ml-3">
                        <svg wire:loading wire:target="guardar()" class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">

                            {{ __('Guardar') }}
                        </span>
                    </x-button>

                    </div>

                </div>
            </form>
        </div>
    </div>

</div>


