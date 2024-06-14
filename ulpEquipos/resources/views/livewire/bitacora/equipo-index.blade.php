<div class="inset-0 z-10 overflow-y-auto duration-500 ease-out">
    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="inset-0 transition-opacity">
            <div class="inset-0 "></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div >
            <form wire:submit.prevent="guardar()">
                <input type="hidden" id="user_id" name="user_id" value="{{auth()->user()->id}}" wire:model="user_id">

                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">


                    <div class="form-group">
                        <label for="equipos" class="col-md-4 col-form-label text-md-left" id="">Nombre  </label>
                        <div class="mb-4">
                            <input class="form-control" type="text" id="name" wire:model="name" placeholder="Ingrese el nombre del equipo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="equipos" class="col-md-4 col-form-label text-md-left" id="">Marca  </label>
                        <div class="mb-4">
                            <input class="form-control" type="text" id="marca" wire:model="marca" placeholder="Ingrese la Marca">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="equipos" class="col-md-4 col-form-label text-md-left" id="">Modelo  </label>
                        <div class="mb-4">
                            <input class="form-control" type="text" id="modelo" wire:model="modelo" placeholder="Ingrese el Modelo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Caracteristicas del Equipo</label>
                        <textarea class="form-control" id="descripcion" wire:model="descripcion" rows="3"></textarea>
                      </div>
                    @error('descripcion')
                    <strong class="text-xs text-red-600">{{$message}}</strong>
                    @enderror
                    <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button class="mt-4 ml-3 btn btn-primary justify-center">
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
                    </button>

                    </div>

                </div>
            </form>
        </div>
    </div>

</div>


