@extends('layouts.app')

@section('title', 'The Platform')
@section('meta', 'Explore the HelpGenie Pro platform — a unified inbox, a smart assistant, no-code automation, a self-serve knowledge base, real-time reporting and enterprise-grade security.')

@section('content')

{{-- ===== PAGE HERO ===== --}}
<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Platform</div>
      <span class="eyebrow center-eb">One platform, end to end</span>
      <h1 class="h-xl">Everything support needs, <span class="mark">nothing it doesn't</span>.</h1>
      <p class="lead">A shared inbox, an always-on assistant, visual automation, a help centre
        and live reporting — designed to feel like a single, calm product instead of six
        bolted-together tools.</p>
    </div>
  </div>
</section>

{{-- ===== SPLIT: INBOX ===== --}}
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-media" data-reveal>
        <span class="tape">Inbox</span>
        <img src="{{ asset('images/support-6.jpg') }}" alt="Agent working in the unified inbox">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">The omnichannel inbox</span>
        <h2 class="h-md">One queue for every customer, every channel</h2>
        <p class="lead">Email, live chat, WhatsApp, Instagram, Facebook and SMS flow into a
          single collaborative inbox. Every message arrives with the customer's full history
          already attached.</p>
        <ul class="split-list">
          <li><span class="tick">✓</span> Collision detection prevents duplicate replies</li>
          <li><span class="tick">✓</span> Private notes, @mentions and shared drafts</li>
          <li><span class="tick">✓</span> Saved replies, snippets and keyboard shortcuts</li>
          <li><span class="tick">✓</span> A unified customer timeline with orders and past tickets</li>
          <li><span class="tick">✓</span> Native iOS and Android apps for support on the move</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- ===== SPLIT: AI ===== --}}
<section class="section bg-white">
  <div class="container">
    <div class="split reverse">
      <div class="split-media" data-reveal>
        <span class="tape" style="background:var(--pink);color:#fff">The Genie</span>
        <img src="{{ asset('images/tech-1.jpg') }}" alt="The Genie assistant analysing conversations">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">The Genie assistant</span>
        <h2 class="h-md">An assistant that resolves, not just suggests</h2>
        <p class="lead">The Genie reasons over your knowledge base and past conversations to
          answer customers directly — and knows exactly when to bring a human in.</p>
        <ul class="split-list">
          <li><span class="tick pink">✓</span> On-brand draft replies in your team's tone of voice</li>
          <li><span class="tick pink">✓</span> Autonomously resolves routine, repetitive questions</li>
          <li><span class="tick pink">✓</span> Secure custom actions — look up an order, issue a refund, update a record</li>
          <li><span class="tick pink">✓</span> Confidence guardrails so it never guesses</li>
          <li><span class="tick pink">✓</span> Clean escalation with a full conversation summary</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- ===== SPLIT: AUTOMATION ===== --}}
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-media" data-reveal>
        <span class="tape">Automations</span>
        <img src="{{ asset('images/support-9.jpg') }}" alt="Team building automation workflows">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">No-code automation</span>
        <h2 class="h-md">Build workflows by dragging, not coding</h2>
        <p class="lead">A friendly visual builder lets anyone on your team automate the routing,
          prioritising and chasing that used to eat the day.</p>
        <ul class="split-list">
          <li><span class="tick">✓</span> Round-robin and skill-based routing</li>
          <li><span class="tick">✓</span> SLA targets with proactive breach alerts</li>
          <li><span class="tick">✓</span> Scheduled and triggered macros for repeat tasks</li>
          <li><span class="tick">✓</span> Automatic follow-ups so nothing slips through</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- ===== SPLIT: REPORTING ===== --}}
<section class="section bg-white">
  <div class="container">
    <div class="split reverse">
      <div class="split-media" data-reveal>
        <span class="tape">Reporting</span>
        <img src="{{ asset('images/analytics-platform.jpg') }}" alt="Reviewing support reporting charts on a laptop">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">Reporting &amp; insight</span>
        <h2 class="h-md">Dashboards that turn support into a story</h2>
        <p class="lead">Live, visual reporting on the metrics that matter — so you can coach
          your team, plan headcount and prove impact with confidence.</p>
        <ul class="split-list">
          <li><span class="tick">✓</span> Volume, CSAT and resolution trends in real time</li>
          <li><span class="tick">✓</span> Genie deflection and automation savings</li>
          <li><span class="tick">✓</span> Per-agent and per-team workload views</li>
          <li><span class="tick">✓</span> Scheduled exports and shareable reports</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- ===== MORE FEATURES GRID ===== --}}
<section class="section">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">And plenty more</span>
      <h2 class="h-lg">The details that make a workday smoother</h2>
    </div>
    <div class="grid g-3">
      <div class="fcard" data-reveal data-delay="1">
        <div class="ficon ic-cobalt">▥</div>
        <h3>Self-serve knowledge base</h3>
        <p>A branded help centre that answers customers around the clock and keeps the Genie
          perfectly in sync.</p>
      </div>
      <div class="fcard" data-reveal data-delay="2">
        <div class="ficon ic-pink">☆</div>
        <h3>Satisfaction surveys</h3>
        <p>Lightweight CSAT and thumbs ratings after every conversation, with feedback that
          flows straight into reporting.</p>
      </div>
      <div class="fcard" data-reveal data-delay="3">
        <div class="ficon ic-ink">⬗</div>
        <h3>Customer profiles</h3>
        <p>A single, rich profile per customer — contact details, history, tags and lifetime
          value, all in one place.</p>
      </div>
      <div class="fcard" data-reveal data-delay="1">
        <div class="ficon ic-amber">⌁</div>
        <h3>Macros &amp; quick actions</h3>
        <p>Bundle a reply, a tag, an assignment and a status change into one keyboard shortcut.</p>
      </div>
      <div class="fcard" data-reveal data-delay="2">
        <div class="ficon ic-cobalt">◷</div>
        <h3>Business hours &amp; SLAs</h3>
        <p>Set schedules, holidays and response targets per channel — and let the system
          watch the clock.</p>
      </div>
      <div class="fcard" data-reveal data-delay="3">
        <div class="ficon ic-pink">⇄</div>
        <h3>Open API &amp; webhooks</h3>
        <p>A clean, documented API and webhooks so your team can extend HelpGenie Pro however
          you need.</p>
      </div>
    </div>
  </div>
</section>

{{-- ===== SECURITY ===== --}}
<section class="section bg-ink" id="security">
  <div class="container">
    <div class="split">
      <div class="split-media" data-reveal>
        <span class="tape">Trust &amp; safety</span>
        <img src="{{ asset('images/tech-5.jpg') }}" alt="Secure data infrastructure">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow on-dark">Enterprise-grade security</span>
        <h2 class="h-md">Built to be trusted with customer data</h2>
        <p class="lead">Security isn't a tier — it's the foundation. Every HelpGenie Pro account
          is protected by the same rigorous controls.</p>
        <ul class="split-list">
          <li><span class="tick">✓</span> SOC 2 Type II and GDPR aligned, with HIPAA available</li>
          <li><span class="tick">✓</span> Data encrypted in transit and at rest</li>
          <li><span class="tick">✓</span> SSO, SCIM provisioning and granular role permissions</li>
          <li><span class="tick">✓</span> Detailed audit logs and configurable data residency</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- ===== TESTIMONIAL ===== --}}
<section class="section">
  <div class="container">
    <div class="tgrid">
      <div class="tcard feature" data-reveal style="grid-column:span 3">
        <span class="stars">★★★★★</span>
        <p class="quote">"It genuinely feels like one product, not a Frankenstein of add-ons.
          Our agents learned it in a morning, and the Genie picked up our tone scarily well."</p>
        <div class="tperson">
          <img src="{{ asset('images/person-10.jpg') }}" alt="Marcus Bello">
          <div>
            <div class="nm">Marcus Bello</div>
            <div class="rl">Director of Customer Experience, Northpeak</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
