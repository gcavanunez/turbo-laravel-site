@extends('_layouts.main')

@section('title', sprintf('%s | Turbo Laravel', $page->title))

@section('sub-nav-docs-mobile')
  @include('_layouts.partials.subnav-mobile-menu', ['menu' => $page->navigation['v1']])
@endsection

@section('body')
  <div class="bg-white/90 custom-border px-6 py-20 sm:flex space-x-6">
    <div class="sm:flex sm:space-x-12 sm:max-w-7xl w-full mx-auto">
      <aside class="relative w-1/4 hidden lg:block" data-search-target="aside">
        <div class="sticky top-4 block space-y-4">
            @include('_layouts.partials.search', ['href' => '/1.x/docs/search', 'placeholder' => 'Search v1 docs... (press "/" to focus)'])

            @include('_layouts.partials.sidebar-menu', ['menu' => $page->navigation['v1']])
        </div>
      </aside>

      <main class="flex-1 min-w-0 max-w-3xl">
        <div class="prose prose-lg overflow-hidden prose-zinc [&_code:not(pre_code)]:text-wrap [&_code:not(pre_code)]:break-words prose-headings:font-heading prose-headings:font-extrabold max-w-none w-full">
            @yield('content')
        </div>

        @unless ($page->getPath() === '/1.x/docs/search')
            @include('_layouts.partials.next-previous-links')
        @endunless
      </main>
    </div>
  </div>
@endsection
