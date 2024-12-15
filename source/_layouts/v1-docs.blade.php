@extends('_layouts.main')

@section('body')
  <div class="bg-white/90 custom-border px-6 py-20 sm:flex space-x-6">
    <div class="sm:flex sm:space-x-6 sm:max-w-7xl w-full mx-auto">
      <aside class="max-w-xs w-full hidden sm:block space-y-4">
        @include('_layouts.partials.search', ['href' => '/1.x/docs/search', 'placeholder' => 'Search v1 docs...'])

        @include('_layouts.partials.sidebar-menu', ['menu' => $page->navigation['v1']])
      </aside>

      <main class="flex-1">
        <div>
          <div class="prose prose-xl prose-zinc prose-headings:font-heading prose-headings:font-extrabold max-w-none mx-auto w-full">
            @yield('content')
          </div>

          @unless ($page->getPath() === '/1.x/docs/search')
            @include('_layouts.partials.next-previous-links')
          @endunless
        </div>
      </main>
    </div>
  </div>
@endsection
