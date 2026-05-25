@extends('layouts.app')

@section('title', 'Customer service that works like magic')
@section('meta', 'Helpquora is the all-in-one customer service platform — one shared inbox, a smart assistant and no-code automations that help small teams reply faster and keep customers happy.')

@section('content')

{{-- ======================= HERO ======================= --}}
<section class="hero">
  <div class="hero-bg" aria-hidden="true">
    <span class="hero-orb orb-1"></span>
    <span class="hero-orb orb-2"></span>
    <span class="hero-orb orb-3"></span>
    <span class="hero-mesh"></span>
  </div>
  <span class="deco-dots" style="top:120px;right:40px"></span>
  <div class="container-wide">
    <div class="hero-grid">
      <div class="hero-copy">
        <span class="eyebrow hero-in" style="--d:.05s">The customer service platform</span>
        <h1 class="h-xl hero-in" style="--d:.18s">Customer service that works like <span class="mark mark-anim">magic</span>.</h1>
        <p class="lead hero-in" style="--d:.32s">Helpquora brings every email, chat and message into one calm workspace,
          then quietly handles the repetitive work — so your team replies in minutes and
          customers feel genuinely cared for.</p>
        <div class="hero-cta hero-in" style="--d:.46s">
          <a href="{{ route('contact') }}" class="btn btn-pink btn-lg">Start free — it takes 2 minutes</a>
          <a href="{{ route('platform') }}" class="btn btn-ghost btn-lg btn-arrow">See the platform</a>
        </div>
        <div class="hero-proof hero-in" style="--d:.6s">
          <span class="stars">★★★★★</span>
          <div class="proof-text">
            Rated <strong>4.9 / 5</strong> by <strong>600+</strong> support leaders ·
            No credit card required
          </div>
        </div>
      </div>

      <div class="hero-visual">
        <div class="hero-photo hero-in" style="--d:.34s">
          <img src="{{ asset('images/support-1.jpg') }}" alt="A customer support specialist helping customers" loading="eager">
        </div>
        <div class="float-card float-1">
          <span class="fc-icon ic-pink">↺</span>
          <div>
            <div class="fc-label">First reply time</div>
            <div class="fc-value">Down 71%</div>
          </div>
        </div>
        <div class="float-card float-2">
          <span class="fc-icon ic-cobalt">✦</span>
          <div>
            <div class="fc-label">Resolved by Quill</div>
            <div class="fc-value">48% of tickets</div>
          </div>
        </div>
        <div class="float-card float-3">
          <span class="fc-icon ic-amber">★</span>
          <div>
            <div class="fc-label">Customer happiness</div>
            <div class="fc-value">96% CSAT</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ======================= LOGO STRIP ======================= --}}
<div class="logostrip">
  <div class="container">
    <p>Trusted by fast-growing teams in retail, SaaS, fintech and healthcare</p>
  </div>
  @php
    $logos = ['Brightway','Northpeak','Hatchwell','Coraline','Pulsedeck','Maple &amp; Co',
              'Vanta Labs','Lumen Retail','Oakhill','Driftwave','Stacklane','Fernway'];
  @endphp
  <div class="marquee">
    <div class="marquee-track">
      @foreach($logos as $l)<span>{!! $l !!}</span>@endforeach
      @foreach($logos as $l)<span aria-hidden="true">{!! $l !!}</span>@endforeach
    </div>
  </div>
</div>

{{-- ======================= PROBLEM / WHY ======================= --}}
<section class="section">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">Why teams switch</span>
      <h2 class="h-lg">Support shouldn't feel like firefighting</h2>
      <p class="lead">Tickets scattered across inboxes. Customers repeating themselves. Agents
        copy-pasting the same answers all day. Helpquora replaces the chaos with one
        clear system that does the heavy lifting for you.</p>
    </div>
    <div class="grid g-3">
      <div class="fcard" data-reveal data-delay="1">
        <span class="glyph">01</span>
        <div class="ficon ic-cobalt">⬢</div>
        <h3>One place for everything</h3>
        <p>Email, live chat, WhatsApp, Instagram and SMS land in a single shared inbox —
          with the full customer history attached to every conversation.</p>
      </div>
      <div class="fcard" data-reveal data-delay="2">
        <span class="glyph">02</span>
        <div class="ficon ic-pink">✦</div>
        <h3>A genie that does the busywork</h3>
        <p>Our assistant drafts replies, tags conversations, suggests next steps and resolves
          the routine questions on its own — always with a human in the loop.</p>
      </div>
      <div class="fcard" data-reveal data-delay="3">
        <span class="glyph">03</span>
        <div class="ficon ic-ink">↻</div>
        <h3>Automation without the IT ticket</h3>
        <p>Build routing rules, follow-ups and SLAs with a friendly drag-and-drop builder.
          No developers, no waiting, no spreadsheets.</p>
      </div>
    </div>
  </div>
</section>

{{-- ======================= SPLIT 1: INBOX ======================= --}}
<section class="section bg-white">
  <div class="container">
    <div class="split">
      <div class="split-media" data-reveal>
        <span class="tape">Shared inbox</span>
        <img src="{{ asset('images/support-2.jpg') }}" alt="Support team collaborating in a shared inbox">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">Unified workspace</span>
        <h2 class="h-md">Every conversation, calmly in one queue</h2>
        <p class="lead">Stop bouncing between five tabs. Helpquora pulls every channel into
          a tidy, collaborative inbox where your whole team can see what's happening — and who's
          handling it.</p>
        <ul class="split-list">
          <li><span class="tick">✓</span> Live collision detection so two agents never reply to the same person</li>
          <li><span class="tick">✓</span> Private notes and @mentions to loop in a teammate without forwarding</li>
          <li><span class="tick">✓</span> A complete customer timeline — past orders, tickets and notes in one view</li>
          <li><span class="tick">✓</span> Saved replies and snippets that turn a five-minute answer into five seconds</li>
        </ul>
        <p style="margin-top:24px"><a href="{{ route('platform') }}" class="textlink">Explore the inbox</a></p>
      </div>
    </div>
  </div>
</section>

{{-- ======================= SPLIT 2: AI ======================= --}}
<section class="section">
  <div class="container">
    <div class="split reverse">
      <div class="split-media" data-reveal>
        <span class="tape" style="background:var(--pink);color:#fff">Meet Quill</span>
        <img src="{{ asset('images/tech-3.jpg') }}" alt="Smart assistant suggesting replies on a laptop">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">Smart assistance</span>
        <h2 class="h-md">A teammate that never sleeps</h2>
        <p class="lead">Quill reads your knowledge base, your past replies and your tone of
          voice — then handles the predictable questions instantly and hands the tricky ones
          to a human with a tidy summary.</p>
        <ul class="split-list">
          <li><span class="tick pink">✓</span> Instant, on-brand draft replies your agents can send in one click</li>
          <li><span class="tick pink">✓</span> Auto-resolves repetitive questions like order status and password help</li>
          <li><span class="tick pink">✓</span> Accuracy guardrails — it only answers when it's confident</li>
          <li><span class="tick pink">✓</span> Smart escalation with a full context handoff, never a cold transfer</li>
        </ul>
        <p style="margin-top:24px"><a href="{{ route('platform') }}" class="textlink">See how Quill works</a></p>
      </div>
    </div>
  </div>
</section>

{{-- ======================= HOW IT WORKS ======================= --}}
<section class="section bg-white">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">Up and running fast</span>
      <h2 class="h-lg">Live in an afternoon, not a quarter</h2>
      <p class="lead">No lengthy implementation project. Connect, import, launch — our team
        guides you the whole way.</p>
    </div>
    <div class="steps">
      <div class="step" data-reveal data-delay="1">
        <div class="num">1</div>
        <h3>Connect your channels</h3>
        <p>Plug in email, chat and social accounts in a few clicks — no code required.</p>
      </div>
      <div class="step" data-reveal data-delay="2">
        <div class="num">2</div>
        <h3>Import your knowledge</h3>
        <p>Bring over help articles and past replies so Quill sounds just like you.</p>
      </div>
      <div class="step" data-reveal data-delay="3">
        <div class="num">3</div>
        <h3>Set a few simple rules</h3>
        <p>Use the visual builder to route, prioritise and follow up automatically.</p>
      </div>
      <div class="step" data-reveal data-delay="4">
        <div class="num">4</div>
        <h3>Watch support get easier</h3>
        <p>Track happiness and speed on live dashboards and keep tuning as you grow.</p>
      </div>
    </div>
  </div>
</section>

{{-- ======================= SPLIT 3: ANALYTICS ======================= --}}
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-media" data-reveal>
        <span class="tape">Live dashboards</span>
        <img src="{{ asset('images/analytics-home.jpg') }}" alt="Support analyst reviewing live performance dashboards">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">Insight you can act on</span>
        <h2 class="h-md">Know exactly where support stands</h2>
        <p class="lead">See volume, response speed, customer happiness and Quill deflection on
          dashboards that update in real time — and spot the bottleneck before it becomes a backlog.</p>
        <ul class="split-list">
          <li><span class="tick">✓</span> CSAT and resolution trends, broken down by channel and team</li>
          <li><span class="tick">✓</span> SLA targets with friendly alerts before anything is breached</li>
          <li><span class="tick">✓</span> Per-agent workload so nobody quietly drowns</li>
          <li><span class="tick">✓</span> One-click exports for your weekly leadership update</li>
        </ul>
        <p style="margin-top:24px"><a href="{{ route('platform') }}" class="textlink">Tour the reporting suite</a></p>
      </div>
    </div>
  </div>
</section>

{{-- ======================= STATS BAND ======================= --}}
<section class="section-sm bg-ink">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow on-dark center-eb">The results</span>
      <h2 class="h-md">Numbers our customers see in the first 90 days</h2>
    </div>
    <div class="statband">
      <div class="stat center" data-reveal data-delay="1">
        <div class="big c-amber">71%</div>
        <div class="lbl">Faster first response</div>
      </div>
      <div class="stat center" data-reveal data-delay="2">
        <div class="big c-pink">48%</div>
        <div class="lbl">Tickets resolved by Quill</div>
      </div>
      <div class="stat center" data-reveal data-delay="3">
        <div class="big c-blue" style="color:#7d88ff">96%</div>
        <div class="lbl">Average customer satisfaction</div>
      </div>
      <div class="stat center" data-reveal data-delay="4">
        <div class="big c-amber">9hrs</div>
        <div class="lbl">Saved per agent each week</div>
      </div>
    </div>
  </div>
</section>

{{-- ======================= TESTIMONIALS ======================= --}}
<section class="section">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">Loved by support teams</span>
      <h2 class="h-lg">Don't take our word for it</h2>
    </div>
    <div class="tgrid">
      <div class="tcard feature" data-reveal data-delay="1">
        <span class="stars">★★★★★</span>
        <p class="quote">"We replaced three tools with Helpquora and our backlog vanished in
          two weeks. Quill quietly handles half of everything, and our team finally has
          time to be human again."</p>
        <div class="tperson">
          <img src="{{ asset('images/person-2.jpg') }}" alt="Daniel Acheson">
          <div>
            <div class="nm">Daniel Acheson</div>
            <div class="rl">Head of Support, Brightway</div>
          </div>
        </div>
      </div>
      <div class="tcard" data-reveal data-delay="2">
        <span class="stars">★★★★★</span>
        <p class="quote">"Onboarding took one afternoon. By day three our reply times had halved
          and customers started mentioning how fast we'd become."</p>
        <div class="tperson">
          <img src="{{ asset('images/person-4.jpg') }}" alt="Priya Raman">
          <div>
            <div class="nm">Priya Raman</div>
            <div class="rl">CX Lead, Pulsedeck</div>
          </div>
        </div>
      </div>
      <div class="tcard" data-reveal data-delay="3">
        <span class="stars">★★★★★</span>
        <p class="quote">"The dashboards finally gave me a story to tell leadership. I can see
          exactly where time goes and prove the team's impact every week."</p>
        <div class="tperson">
          <img src="{{ asset('images/person-6.jpg') }}" alt="Sofia Marin">
          <div>
            <div class="nm">Sofia Marin</div>
            <div class="rl">Support Manager, Maple &amp; Co</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ======================= INTEGRATIONS TEASER ======================= --}}
<section class="section-sm bg-white">
  <div class="container">
    <div class="split">
      <div data-reveal>
        <span class="eyebrow">Plays well with your stack</span>
        <h2 class="h-md">Connected to the tools you already run on</h2>
        <p class="lead">Helpquora fits neatly into your workflow — sync customer data,
          orders and conversations across the apps your team lives in every day.</p>
        <p style="margin-top:20px"><a href="{{ route('integrations') }}" class="textlink">Browse all integrations</a></p>
      </div>
      <div class="pill-list" data-reveal data-delay="1" style="align-content:center">
        <span class="pill">Shopify</span><span class="pill solid">Slack</span>
        <span class="pill">Stripe</span><span class="pill">HubSpot</span>
        <span class="pill solid">WooCommerce</span><span class="pill">Salesforce</span>
        <span class="pill">Zapier</span><span class="pill">Notion</span>
        <span class="pill solid">Microsoft Teams</span><span class="pill">Jira</span>
        <span class="pill">Twilio</span><span class="pill">Mailchimp</span>
      </div>
    </div>
  </div>
</section>

@endsection
