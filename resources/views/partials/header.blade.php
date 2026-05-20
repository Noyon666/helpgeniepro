@php
  $nav = [
    ['Platform', 'platform'],
    ['Solutions', 'solutions'],
    ['Pricing', 'pricing'],
    ['Integrations', 'integrations'],
    ['Resources', 'resources'],
    ['Company', 'about'],
  ];
@endphp
<header class="site-header">
  <div class="container-wide">
    <nav class="nav">
      <a href="{{ route('home') }}" class="brand" aria-label="HelpGenie Pro home">
        <img src="{{ asset('images/dark-logo.png') }}" alt="HelpGenie Pro" class="brand-logo">
      </a>

      <div class="nav-links">
        @foreach($nav as $item)
          <a href="{{ route($item[1]) }}" class="{{ request()->routeIs($item[1]) ? 'active' : '' }}">{{ $item[0] }}</a>
        @endforeach
      </div>

      <div class="nav-cta">
        <a href="{{ route('contact') }}" class="btn btn-ghost btn-demo">Book a demo</a>
        <a href="{{ route('contact') }}" class="btn btn-pink">Start free</a>
        <button class="burger" aria-label="Open menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </nav>
  </div>
</header>
