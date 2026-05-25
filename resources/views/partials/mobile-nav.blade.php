@php
  $mnav = [
    ['Platform', 'platform'], ['Solutions', 'solutions'], ['Pricing', 'pricing'],
    ['Integrations', 'integrations'], ['Resources', 'resources'], ['Company', 'about'],
    ['Contact', 'contact'],
  ];
@endphp
<div class="mobile-nav">
  <div class="mn-head">
    <a href="{{ route('home') }}" class="brand" aria-label="Helpquora home">
      <img src="{{ asset('images/dark-logo.png') }}" alt="Helpquora" class="brand-logo">
    </a>
    <button class="mn-close" aria-label="Close menu">&times;</button>
  </div>
  @foreach($mnav as $item)
    <a href="{{ route($item[1]) }}" class="mn-link">{{ $item[0] }}</a>
  @endforeach
  <a href="{{ route('contact') }}" class="btn btn-pink btn-lg btn-arrow">Start free</a>
</div>
