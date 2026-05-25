@extends('layouts.app')

@section('title', 'Company')
@section('meta', 'Helpquora was built by support people, for support people — on a simple belief that great customer service should feel calm, fast and genuinely human.')

@section('content')

{{-- ===== PAGE HERO ===== --}}
<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Company</div>
      <span class="eyebrow center-eb">Who we are</span>
      <h1 class="h-xl">Built by support people, <span class="mark">for support people</span>.</h1>
      <p class="lead">We spent years on the other side of the inbox. Helpquora is the tool
        we always wished we had — calm, quick and genuinely helpful.</p>
    </div>
  </div>
</section>

{{-- ===== STORY ===== --}}
<section class="section" id="story">
  <div class="container">
    <div class="split">
      <div class="split-media" data-reveal>
        <span class="tape">Since 2024</span>
        <img src="{{ asset('images/office-5.jpg') }}" alt="The Helpquora founders at work">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">Our story</span>
        <h2 class="h-md">It started with a very full inbox</h2>
        <p class="lead">Our founders ran support for fast-growing companies and watched the same
          thing happen every time: brilliant teams, slowly buried.</p>
        <p style="color:var(--ink-soft)">Tools were either too clunky for a small team or too
          shallow for a growing one. The work that mattered — actually helping people — kept
          getting crowded out by tab-switching, copy-pasting and chasing.</p>
        <p style="color:var(--ink-soft)">So in 2024 we set out to build something different: one
          calm workspace where the repetitive work simply takes care of itself, and people are
          freed up to do the part only people can do.</p>
      </div>
    </div>
  </div>
</section>

{{-- ===== VALUES ===== --}}
<section class="section bg-white">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">What we believe</span>
      <h2 class="h-lg">The principles behind the product</h2>
    </div>
    <div class="grid g-4">
      <div class="vcard" data-reveal data-delay="1">
        <div class="vk">01</div>
        <h3>Calm beats clever</h3>
        <p>Software should lower your heart rate, not raise it. We design for clarity over
          cleverness, every time.</p>
      </div>
      <div class="vcard" data-reveal data-delay="2">
        <div class="vk">02</div>
        <h3>Humans stay in charge</h3>
        <p>Automation should hand people their time back — never hand customers a dead end.</p>
      </div>
      <div class="vcard" data-reveal data-delay="3">
        <div class="vk">03</div>
        <h3>Honest by default</h3>
        <p>Clear pricing, plain language and no dark patterns. If we'd be annoyed by it, we
          won't ship it.</p>
      </div>
      <div class="vcard" data-reveal data-delay="4">
        <div class="vk">04</div>
        <h3>Fast is a feature</h3>
        <p>Speed is respect — for your customers' time and for yours. We obsess over both.</p>
      </div>
    </div>
  </div>
</section>

{{-- ===== STATS ===== --}}
<section class="section-sm bg-ink">
  <div class="container">
    <div class="statband">
      <div class="stat center" data-reveal data-delay="1">
        <div class="big c-amber">2024</div><div class="lbl">The year we began</div>
      </div>
      <div class="stat center" data-reveal data-delay="2">
        <div class="big c-pink">600+</div><div class="lbl">Teams in early access</div>
      </div>
      <div class="stat center" data-reveal data-delay="3">
        <div class="big" style="color:#7d88ff">31</div><div class="lbl">People, fully remote</div>
      </div>
      <div class="stat center" data-reveal data-delay="4">
        <div class="big c-amber">14</div><div class="lbl">Countries we call home</div>
      </div>
    </div>
  </div>
</section>

{{-- ===== TEAM ===== --}}
<section class="section">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">The people</span>
      <h2 class="h-lg">Meet the team leading the way</h2>
    </div>
    <div class="team-grid">
      <div class="tm" data-reveal data-delay="1">
        <img src="{{ asset('images/person-11.jpg') }}" alt="Marcus Trevino">
        <div class="nm">Marcus Trevino</div>
        <div class="rl">Co-founder &amp; CEO</div>
        <div class="bio">Ran support for two scale-ups before deciding to fix the tooling for good.</div>
      </div>
      <div class="tm" data-reveal data-delay="2">
        <img src="{{ asset('images/person-8.jpg') }}" alt="Mara Reyes">
        <div class="nm">Mara Reyes</div>
        <div class="rl">Co-founder &amp; CTO</div>
        <div class="bio">Builds the calm, reliable systems that make Quill trustworthy.</div>
      </div>
      <div class="tm" data-reveal data-delay="3">
        <img src="{{ asset('images/person-3.jpg') }}" alt="Adil Karam">
        <div class="nm">Adil Karam</div>
        <div class="rl">Head of Product</div>
        <div class="bio">Obsessed with the small details that quietly save agents hours.</div>
      </div>
      <div class="tm" data-reveal data-delay="4">
        <img src="{{ asset('images/person-7.jpg') }}" alt="Liam Forsythe">
        <div class="nm">Liam Forsythe</div>
        <div class="rl">Head of Customer Love</div>
        <div class="bio">Makes sure every team that joins us is genuinely set up to win.</div>
      </div>
    </div>
  </div>
</section>

{{-- ===== CAREERS ===== --}}
<section class="section bg-white" id="careers">
  <div class="container">
    <div class="split">
      <div class="split-media" data-reveal>
        <span class="tape">We're hiring</span>
        <img src="{{ asset('images/office-14.jpg') }}" alt="Life at Helpquora">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">Careers</span>
        <h2 class="h-md">Come build the future of support</h2>
        <p class="lead">We're a small, fully remote team that cares deeply about craft and about
          each other. If calm, honest, fast products excite you, we'd love to talk.</p>
        <ul class="split-list">
          <li><span class="tick">✓</span> Fully remote across 14 countries</li>
          <li><span class="tick">✓</span> Four-day focus weeks and real flexibility</li>
          <li><span class="tick">✓</span> Generous learning and home-office budgets</li>
          <li><span class="tick">✓</span> Equity for every single teammate</li>
        </ul>
        <p style="margin-top:24px"><a href="{{ route('contact') }}" class="btn btn-pink">See open roles</a></p>
      </div>
    </div>
  </div>
</section>

@endsection
