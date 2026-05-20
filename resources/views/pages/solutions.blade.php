@extends('layouts.app')

@section('title', 'Solutions')
@section('meta', 'HelpGenie Pro adapts to your industry — retail, SaaS, financial services and healthcare — and to teams of every size, from solo founders to enterprise support.')

@section('content')

{{-- ===== PAGE HERO ===== --}}
<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Solutions</div>
      <span class="eyebrow center-eb">Made to fit your world</span>
      <h1 class="h-xl">Support that speaks <span class="mark">your industry</span>.</h1>
      <p class="lead">Every business answers different questions. HelpGenie Pro adapts to the
        conversations your customers actually have — whether you ship parcels, software or
        peace of mind.</p>
    </div>
  </div>
</section>

{{-- ===== INDUSTRY CARDS ===== --}}
<section class="section-tight">
  <div class="container">
    <div class="bgrid" style="grid-template-columns:repeat(2,1fr)">

      <div class="bcard" data-reveal data-delay="1">
        <div class="thumb"><img src="{{ asset('images/support-10.jpg') }}" alt="Retail and e-commerce support team"></div>
        <div class="body">
          <span class="cat">Retail &amp; e-commerce</span>
          <h3>Turn order questions into repeat orders</h3>
          <p>Shoppers want to know where their parcel is — instantly. The Genie answers
            tracking, returns and sizing questions on its own, so your team can focus on the
            customers who need a human touch.</p>
          <ul class="split-list" style="margin-top:4px">
            <li><span class="tick">✓</span> Live order status from your store, in one reply</li>
            <li><span class="tick">✓</span> Self-serve returns and exchange flows</li>
            <li><span class="tick">✓</span> Calm queues through every seasonal rush</li>
          </ul>
        </div>
      </div>

      <div class="bcard" data-reveal data-delay="2">
        <div class="thumb"><img src="{{ asset('images/office-8.jpg') }}" alt="SaaS company support team"></div>
        <div class="body">
          <span class="cat">SaaS &amp; technology</span>
          <h3>Help users succeed, not just file tickets</h3>
          <p>Product questions, onboarding hurdles and bug reports — all triaged, tagged and
            routed automatically, with the technical detail your engineers need attached.</p>
          <ul class="split-list" style="margin-top:4px">
            <li><span class="tick">✓</span> Smart triage that routes bugs to the right squad</li>
            <li><span class="tick">✓</span> In-app chat and a searchable help centre</li>
            <li><span class="tick">✓</span> Onboarding nudges that lift activation</li>
          </ul>
        </div>
      </div>

      <div class="bcard" data-reveal data-delay="1">
        <div class="thumb"><img src="{{ asset('images/tech-8.jpg') }}" alt="Financial services support analytics"></div>
        <div class="body">
          <span class="cat">Financial services</span>
          <h3>Fast answers, held to a high bar</h3>
          <p>Money questions need accuracy and a paper trail. Confidence guardrails, audit logs
            and strict permissions keep every reply correct and accountable.</p>
          <ul class="split-list" style="margin-top:4px">
            <li><span class="tick">✓</span> Audit logs on every action and conversation</li>
            <li><span class="tick">✓</span> Role-based access and approval steps</li>
            <li><span class="tick">✓</span> Guardrails that escalate anything uncertain</li>
          </ul>
        </div>
      </div>

      <div class="bcard" data-reveal data-delay="2">
        <div class="thumb"><img src="{{ asset('images/support-13.jpg') }}" alt="Healthcare and wellness support team"></div>
        <div class="body">
          <span class="cat">Health &amp; wellness</span>
          <h3>Caring support, kept private</h3>
          <p>Appointment changes, plan questions and gentle reminders — handled warmly and
            securely, with HIPAA-ready safeguards available on every conversation.</p>
          <ul class="split-list" style="margin-top:4px">
            <li><span class="tick">✓</span> HIPAA-ready handling and data controls</li>
            <li><span class="tick">✓</span> Friendly appointment and reminder flows</li>
            <li><span class="tick">✓</span> A warm, consistent tone the Genie learns from you</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== SPLIT: TEAM SIZE ===== --}}
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-media" data-reveal>
        <span class="tape">Any team size</span>
        <img src="{{ asset('images/office-15.jpg') }}" alt="Support team of various sizes collaborating">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">From solo to enterprise</span>
        <h2 class="h-md">Grows with you, never against you</h2>
        <p class="lead">Start as a team of one and scale to hundreds without ever switching
          tools or relearning a workflow.</p>
        <div class="grid" style="gap:14px;margin-top:8px">
          <div class="vcard" style="padding:20px 22px">
            <h3 style="font-size:1.05rem">Founders &amp; small teams</h3>
            <p style="margin:0">Wear every hat? Let the Genie cover support while you build the
              rest of the business.</p>
          </div>
          <div class="vcard" style="padding:20px 22px">
            <h3 style="font-size:1.05rem">Scaling support teams</h3>
            <p style="margin:0">Automate the routine, route the rest, and keep response times
              low as volume climbs.</p>
          </div>
          <div class="vcard" style="padding:20px 22px">
            <h3 style="font-size:1.05rem">Enterprise organisations</h3>
            <p style="margin:0">Bring multiple brands and regions into one secure, well-governed
              workspace.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===== USE CASES ===== --}}
<section class="section-sm bg-white">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">Everyday wins</span>
      <h2 class="h-md">The conversations HelpGenie Pro quietly handles</h2>
    </div>
    <div class="pill-list usecase-tabs" data-reveal>
      <span class="pill solid">Where is my order?</span>
      <span class="pill">Returns &amp; refunds</span>
      <span class="pill">Billing &amp; invoices</span>
      <span class="pill solid">Password &amp; login help</span>
      <span class="pill">Plan upgrades</span>
      <span class="pill">Appointment changes</span>
      <span class="pill solid">Product how-tos</span>
      <span class="pill">Bug reports</span>
      <span class="pill">Shipping updates</span>
      <span class="pill solid">Account questions</span>
      <span class="pill">Feedback &amp; reviews</span>
    </div>
  </div>
</section>

{{-- ===== QUOTE BAND ===== --}}
<section class="section bg-ink">
  <div class="container">
    <div class="sec-head center-head" data-reveal style="margin-bottom:0">
      <span class="eyebrow on-dark center-eb">In their words</span>
      <h2 class="h-md" style="margin-top:14px">"It finally feels like the platform understands
        the business we're actually in."</h2>
      <p class="lead" style="margin-top:18px">— A recurring sentence in our customer interviews,
        from retail founders to fintech support leads.</p>
    </div>
  </div>
</section>

@endsection
