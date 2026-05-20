@extends('layouts.app')

@section('title', 'Resources')
@section('meta', 'Practical guides, playbooks and ideas on customer service from the HelpGenie Pro team — written to help support teams work calmer and faster.')

@section('content')

{{-- ===== PAGE HERO ===== --}}
<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Resources</div>
      <span class="eyebrow center-eb">The HelpGenie Pro library</span>
      <h1 class="h-xl">Ideas for <span class="mark">calmer, sharper</span> support.</h1>
      <p class="lead">No fluff, no jargon — just practical thinking on customer service, drawn
        from hundreds of conversations with support teams like yours.</p>
    </div>
  </div>
</section>

{{-- ===== FEATURED ===== --}}
<section class="section-tight">
  <div class="container">
    <div class="bfeature" data-reveal>
      <img src="{{ asset('images/support-11.jpg') }}" alt="The State of Customer Service report">
      <div class="body">
        <span class="cat" style="color:var(--pink);font-weight:800;font-size:.78rem;letter-spacing:.08em;text-transform:uppercase">Featured report</span>
        <h2 class="h-md">The 2026 State of Customer Service</h2>
        <p class="lead">We surveyed 1,200 support leaders on what's working, what's breaking and
          where AI genuinely helps. The headline finding: speed still beats everything — but
          only when it's paired with a human who cares.</p>
        <p><a href="{{ route('contact') }}" class="btn btn-cobalt btn-arrow">Get the free report</a></p>
      </div>
    </div>
  </div>
</section>

{{-- ===== BLOG GRID ===== --}}
<section class="section">
  <div class="container">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Latest articles</span>
      <h2 class="h-lg">From the blog</h2>
    </div>
    @php
      $posts = [
        ['office-11.jpg','Strategy','Five support metrics that actually predict churn','Vanity numbers feel good but rarely warn you. Here are the five signals that quietly tell you a customer is about to leave.','8 min read'],
        ['support-7.jpg','AI & Automation','How to write a knowledge base your assistant will love','A great help centre is also great training data. A simple structure that helps both customers and the Genie answer faster.','6 min read'],
        ['tech-11.jpg','Operations','Cutting first response time without hiring anyone','Three changes — triage, templates and the right automations — that halved reply times for teams we work with.','7 min read'],
        ['office-3.jpg','Team','Building a tone of voice your whole team shares','How to capture the way your brand sounds so every reply — human or assisted — feels like one consistent person.','5 min read'],
        ['support-5.jpg','AI & Automation','When to let automation reply — and when not to','A practical line in the sand for deciding which conversations should be resolved automatically and which need a person.','9 min read'],
        ['tech-7.jpg','Playbook','A calm playbook for your busiest season','Prep your inbox, your team and your automations before the rush — so peak week feels ordinary instead of overwhelming.','6 min read'],
      ];
    @endphp
    <div class="bgrid">
      @foreach($posts as $i => $p)
        <a href="{{ route('contact') }}" class="bcard" data-reveal data-delay="{{ ($i % 3) + 1 }}">
          <div class="thumb"><img src="{{ asset('images/'.$p[0]) }}" alt="{{ $p[2] }}"></div>
          <div class="body">
            <span class="cat">{{ $p[1] }}</span>
            <h3>{{ $p[2] }}</h3>
            <p>{{ $p[3] }}</p>
            <div class="meta">{{ $p[4] }} · HelpGenie Pro team</div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>

{{-- ===== GUIDES ===== --}}
<section class="section bg-white" id="guides">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">Deep dives</span>
      <h2 class="h-lg">Guides &amp; playbooks</h2>
      <p class="lead">Longer, hands-on resources you can work through with your team.</p>
    </div>
    <div class="grid g-3">
      <div class="fcard" data-reveal data-delay="1">
        <div class="ficon ic-cobalt">▥</div>
        <h3>The migration handbook</h3>
        <p>A step-by-step guide to moving from your old help desk with zero downtime and no
          lost history.</p>
        <p style="margin-top:14px"><a href="{{ route('contact') }}" class="textlink">Read the guide</a></p>
      </div>
      <div class="fcard" data-reveal data-delay="2">
        <div class="ficon ic-pink">✦</div>
        <h3>Automation starter kit</h3>
        <p>Ten ready-to-use workflows — routing, follow-ups and SLAs — you can switch on in
          your first week.</p>
        <p style="margin-top:14px"><a href="{{ route('contact') }}" class="textlink">Get the kit</a></p>
      </div>
      <div class="fcard" data-reveal data-delay="3">
        <div class="ficon ic-ink">★</div>
        <h3>The CSAT improvement course</h3>
        <p>A five-lesson email course on lifting customer satisfaction without burning out
          your team.</p>
        <p style="margin-top:14px"><a href="{{ route('contact') }}" class="textlink">Start the course</a></p>
      </div>
    </div>
  </div>
</section>

{{-- ===== HELP CENTER ===== --}}
<section class="section-sm" id="help">
  <div class="container">
    <div class="note-card" data-reveal style="display:flex;gap:24px;align-items:center;flex-wrap:wrap;justify-content:space-between">
      <div>
        <h3 class="h-sm">Looking for product help?</h3>
        <p style="margin:0">Our own help centre is built on HelpGenie Pro — searchable articles,
          step-by-step setup guides and an assistant ready to answer.</p>
      </div>
      <a href="{{ route('contact') }}" class="btn btn-ink">Visit the help centre</a>
    </div>
  </div>
</section>

@endsection
