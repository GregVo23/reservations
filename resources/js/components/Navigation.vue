<template>
    <div class="relative">
      <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
      <button type="button" @mouseover="menu_open = true" @click="menu_open = !menu_open" @keydown.enter="menu_open = !menu_open" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" aria-expanded="false">
        <span>Shows</span>
        <!--
          Heroicon name: solid/chevron-down
          Item active: "text-gray-600", Item inactive: "text-gray-400"
        -->
        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </button>

      <!--
        'Solutions' flyout menu, show/hide based on flyout menu state.
        Entering: "transition ease-out duration-200"
          From: "opacity-0 translate-y-1"
          To: "opacity-100 translate-y-0"
        Leaving: "transition ease-in duration-150"
          From: "opacity-100 translate-y-0"
          To: "opacity-0 translate-y-1"
      -->
      <transition name="slide-fade">
      <div v-if ="menu_open" @mouseover="menu_open = true" @mouseleave="menu_open = false" class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
          <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
            <a href="/show" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="flex-shrink-0 h-6 w-6 text-red-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
              <div class="ml-4">
                <p class="text-base font-medium text-gray-900">
                  Shows
                </p>
                <p class="mt-1 text-sm text-gray-500">
                  Les pièces de théatre.
                </p>
              </div>
            </a>

            <a href="/location" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
              <!-- Heroicon name: outline/cursor-click -->
              <svg class="flex-shrink-0 h-6 w-6 text-red-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
              </svg>
              <div class="ml-4">
                <p class="text-base font-medium text-gray-900">
                  Salles de spectacle
                </p>
                <p class="mt-1 text-sm text-gray-500">
                  Toutes les finformations.
                </p>
              </div>
            </a>

            <a href="/locality" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
              <!-- Heroicon name: outline/view-grid -->
              <svg class="flex-shrink-0 h-6 w-6 text-red-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
              </svg>
              <div class="ml-4">
                <p class="text-base font-medium text-gray-900">
                  Localités
                </p>
                <p class="mt-1 text-sm text-gray-500">
                  Ou voir un spectacle.
                </p>
              </div>
            </a>

            <a href="/representation" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
              <!-- Heroicon name: outline/refresh -->
              <svg class="flex-shrink-0 h-6 w-6 text-red-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
              </svg>
              <div class="ml-4">
                <p class="text-base font-medium text-gray-900">
                  Représentations
                </p>
                <p class="mt-1 text-sm text-gray-500">
                  Les spectacles actuels.
                </p>
              </div>
            </a>
          </div>

          <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
            <div class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                <!-- Heroicon name: outline/play -->
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-3">Regarder une pièce</span>
              </a>
            </div>

            <div class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                <!-- Heroicon name: outline/phone -->
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span class="ml-3">Contactez nous</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      </transition>
    </div>
</template>

<script>
  export default {
    data: () => ({
      menu_open: false,
    })
  }
</script>
