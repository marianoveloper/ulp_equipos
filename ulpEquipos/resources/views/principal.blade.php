<x-app-layout>

    <!-- component -->
  <section class="px-4 mx-auto mt-10 mb-12 max-w-7xl sm:px-6 lg:px-3">
      <h1 class="mb-6 text-3xl text-center text-white">Sistema de Pedidos de Equipos de Cobertura </h1>
      <article>
          <h2 class="text-2xl font-extrabold text-gray-900"></h2>
          <section class="grid grid-cols-1 mt-6 md:grid-cols-1 lg:grid-cols-2 gap-x-6 gap-y-8">
              <article class="relative w-full h-64 overflow-hidden transition duration-300 ease-in-out bg-center bg-cover rounded-lg shadow-lg group hover:shadow-2xl"
                  style="background-image: url({{asset('images/equipo.jpg')}});">
                  <div class="absolute inset-0 transition duration-300 ease-in-out bg-black bg-opacity-50 group-hover:opacity-75"></div>
                  <div class="relative flex items-center justify-center w-full h-full px-4 sm:px-6 lg:px-4">
                      <h3 class="text-center">
                          <a class="text-3xl font-bold text-center text-white " href="{{route('equipos.index')}}">
                              <span class="absolute inset-0"></span>
                               Equipos Salientes
                          </a>
                      </h3>
                  </div>
              </article>
              <article class="relative w-full h-64 overflow-hidden transition duration-300 ease-in-out bg-center bg-cover rounded-lg shadow-lg group hover:shadow-2xl"
              style="background-image: url({{asset('images/devolucion.jpg')}});">
              <div class="absolute inset-0 transition duration-300 ease-in-out bg-black bg-opacity-50 group-hover:opacity-75"></div>
              <div class="relative flex items-center justify-center w-full h-full px-4 sm:px-6 lg:px-4">
                  <h3 class="text-center">
                      <a class="text-3xl font-bold text-center text-white " href="{{route('devolucion.index')}}">
                          <span class="absolute inset-0"></span>
                           Devolucion de Equipos
                      </a>
                  </h3>
              </div>
          </article>

              <article class="relative w-full h-64 overflow-hidden transition duration-300 ease-in-out bg-center bg-cover rounded-lg shadow-lg group hover:shadow-2xl"
              style="background-image: url({{asset('images/pedidos.jpg')}});">
              <div class="absolute inset-0 transition duration-300 ease-in-out bg-black bg-opacity-50 group-hover:opacity-75"></div>
              <div class="relative flex items-center justify-center w-full h-full px-4 sm:px-6 lg:px-4">
                  <h3 class="text-center">
                      <a class="text-3xl font-bold text-center text-white" href="{{route('pedidos.index')}}">
                          <span class="absolute inset-0"></span>
                         Pedidos
                      </a>
                  </h3>
              </div>
            </article>
              <article class="relative w-full h-64 overflow-hidden transition duration-300 ease-in-out bg-center bg-cover rounded-lg shadow-lg group hover:shadow-2xl"
                  style="background-image: url({{asset('images/bitacora.jpg')}});">
                  <div class="absolute inset-0 transition duration-300 ease-in-out bg-black bg-opacity-50 group-hover:opacity-75"></div>
                  <div class="relative flex items-center justify-center w-full h-full px-4 sm:px-6 lg:px-4">
                      <h3 class="text-center">
                          <a class="text-3xl font-bold text-center text-white" href="{{route('bitacora.index')}}">
                              <span class="absolute inset-0"></span>
                             Bitacora
                          </a>
                      </h3>
                  </div>
              </article>

  </section>





  </x-app-layout>
