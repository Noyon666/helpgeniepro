@extends('layouts.app')

@section('title', 'Pricing')
@section('meta', 'Simple, honest pricing for Helpquora. Every plan includes Quill assistant, automations and free guided migration. No setup fees, cancel anytime.')

@section('content')

{{-- ===== PAGE HERO ===== --}}
<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Pricing</div>
      <span class="eyebrow center-eb">Honest, all-in pricing</span>
      <h1 class="h-xl">One fair price. <span class="mark">Every</span> feature.</h1>
      <p class="lead">No locked-away essentials, no surprise add-ons. Every plan includes the
        Quill assistant, automation and free guided migration — you simply pick the volume
        that fits.</p>
    </div>
    <div style="margin-top:30px" data-reveal data-delay="1">
      <div class="toggle">
        <button data-mode="monthly">Monthly</button>
        <button data-mode="annual" class="on">Annual <span class="save">· save 20%</span></button>
      </div>
    </div>
  </div>
</section>

{{-- ===== PRICING GRID ===== --}}
<section class="section-tight">
  <div class="container-wide">
    <div class="pgrid">

      <div class="pcard" data-reveal data-delay="1">
        <div class="ptag">Solo</div>
        <div class="price">
          <span data-monthly="$19" data-annual="$15">$15</span><small> / agent / mo</small>
        </div>
        <p class="pdesc">For founders and tiny teams handling their first wave of customers.</p>
        <a href="{{ route('contact') }}" class="btn btn-ghost">Start free</a>
        <ul class="plist">
          <li><span class="tick">✓</span> Shared inbox · up to 3 channels</li>
          <li><span class="tick">✓</span> Up to 3 agents</li>
          <li><span class="tick">✓</span> Quill assistant · 200 resolutions / mo</li>
          <li><span class="tick">✓</span> Knowledge base &amp; help centre</li>
          <li><span class="tick">✓</span> Core automations</li>
          <li><span class="tick">✓</span> Email support</li>
        </ul>
      </div>

      <div class="pcard pop" data-reveal data-delay="2">
        <span class="pop-badge">Most popular</span>
        <div class="ptag">Crew</div>
        <div class="price">
          <span data-monthly="$39" data-annual="$32">$32</span><small> / agent / mo</small>
        </div>
        <p class="pdesc">For growing support teams that want speed, automation and insight.</p>
        <a href="{{ route('contact') }}" class="btn btn-pink">Start free</a>
        <ul class="plist">
          <li><span class="tick">✓</span> Everything in Solo, plus:</li>
          <li><span class="tick">✓</span> Unlimited channels</li>
          <li><span class="tick">✓</span> Quill assistant · 2,000 resolutions / mo</li>
          <li><span class="tick">✓</span> Visual automation builder</li>
          <li><span class="tick">✓</span> SLAs &amp; advanced routing</li>
          <li><span class="tick">✓</span> Live dashboards</li>
          <li><span class="tick">✓</span> Priority support</li>
        </ul>
      </div>

      <div class="pcard" data-reveal data-delay="3">
        <div class="ptag">Company</div>
        <div class="price">
          <span data-monthly="$79" data-annual="$65">$65</span><small> / agent / mo</small>
        </div>
        <p class="pdesc">For established teams that need depth, control and unlimited scale.</p>
        <a href="{{ route('contact') }}" class="btn btn-ghost">Start free</a>
        <ul class="plist">
          <li><span class="tick">✓</span> Everything in Crew, plus:</li>
          <li><span class="tick">✓</span> Unlimited Quill resolutions</li>
          <li><span class="tick">✓</span> Custom Quill actions &amp; API tools</li>
          <li><span class="tick">✓</span> Advanced analytics &amp; exports</li>
          <li><span class="tick">✓</span> Audit logs, SSO &amp; SCIM</li>
          <li><span class="tick">✓</span> Dedicated success manager</li>
        </ul>
      </div>

      <div class="pcard" data-reveal data-delay="4">
        <div class="ptag">Enterprise</div>
        <div class="price">Let's talk</div>
        <p class="pdesc">For larger organisations with bespoke security and scale needs.</p>
        <a href="{{ route('contact') }}" class="btn btn-ink">Contact sales</a>
        <ul class="plist">
          <li><span class="tick">✓</span> Everything in Company, plus:</li>
          <li><span class="tick">✓</span> HIPAA &amp; custom data agreements</li>
          <li><span class="tick">✓</span> Custom data residency</li>
          <li><span class="tick">✓</span> Uptime &amp; support SLAs</li>
          <li><span class="tick">✓</span> Solutions engineering</li>
          <li><span class="tick">✓</span> Volume discounts</li>
        </ul>
      </div>

    </div>

    <div class="note-card center" data-reveal style="margin-top:36px;max-width:900px;margin-left:auto;margin-right:auto">
      <h3 class="h-sm">Every plan includes the good stuff</h3>
      <p>Free guided migration from your old help desk · Quill assistant · no-code automation ·
        a 14-day full-feature trial · and a flat <strong>30% discount for registered nonprofits and early-stage startups</strong>.</p>
    </div>
  </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="section">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">Worth every cent</span>
      <h2 class="h-lg">Teams that did the maths</h2>
    </div>
    <div class="tgrid">
      <div class="tcard" data-reveal data-delay="1">
        <span class="stars">★★★★★</span>
        <p class="quote">"We were paying for four separate tools. Helpquora replaced all of
          them for less, and the migration was genuinely free."</p>
        <div class="tperson">
          <img src="{{ asset('images/person-5.jpg') }}" alt="Helena Voss">
          <div><div class="nm">Helena Voss</div><div class="rl">COO, Hatchwell</div></div>
        </div>
      </div>
      <div class="tcard" data-reveal data-delay="2">
        <span class="stars">★★★★★</span>
        <p class="quote">"As a three-person team the Solo plan felt built for us. We never hit a
          paywall on a feature we actually needed."</p>
        <div class="tperson">
          <img src="{{ asset('images/person-1.jpg') }}" alt="Tom Whitlock">
          <div><div class="nm">Tom Whitlock</div><div class="rl">Founder, Coraline</div></div>
        </div>
      </div>
      <div class="tcard" data-reveal data-delay="3">
        <span class="stars">★★★★★</span>
        <p class="quote">"The pricing is refreshingly clear. I knew the exact bill before I
          signed up — no 'contact us to find out' games."</p>
        <div class="tperson">
          <img src="{{ asset('images/person-13.jpg') }}" alt="Amara Cole">
          <div><div class="nm">Amara Cole</div><div class="rl">Support Lead, Vanta Labs</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== FAQ ===== --}}
<section class="section bg-white" id="faq">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">Good questions</span>
      <h2 class="h-lg">Pricing, answered plainly</h2>
    </div>
    <div class="faq" data-reveal>
      @php
        $faqs = [
          ['Is there really a free trial?', 'Yes — every plan starts with a 14-day trial that unlocks every feature, including Quill assistant. No credit card is needed to begin, and nothing is charged until you decide to stay.'],
          ['How does the agent pricing work?', 'You pay per active agent seat, per month. You can add or remove seats at any time, and changes are prorated automatically — you are never billed for a seat you are not using.'],
          ['What counts as a Quill resolution?', 'A resolution is counted when Quill fully answers a customer without a human agent stepping in. Conversations that are escalated to a person do not count toward your monthly allowance.'],
          ['Do you really migrate us for free?', 'We do. Our onboarding team imports your conversations, contacts and help articles from your previous help desk at no cost, and stays with you until you are fully live.'],
          ['Can I change plans later?', 'Absolutely. You can upgrade, downgrade or cancel from your account settings whenever you like. There are no lock-in contracts and no cancellation fees.'],
          ['Do you offer discounts?', 'Yes — registered nonprofits and early-stage startups receive a flat 30% discount on any plan. Just reach out to our team with a little detail about your organisation.'],
        ];
      @endphp
      @foreach($faqs as $f)
        <div class="faq-item">
          <button class="faq-q">{{ $f[0] }} <span class="pm">+</span></button>
          <div class="faq-a"><p>{{ $f[1] }}</p></div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
