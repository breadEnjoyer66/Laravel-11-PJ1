  <header
      class="relative bg-slate-100 shadow-sm {{ in_array($slot, ['About Us', 'Warranty', 'Service Center', 'Latest News']) ? '' : 'hidden' }}">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-4xl text-center font-extrabold tracking-loose text-slate-800">{{ $slot }}
          </h1>
      </div>
  </header>
