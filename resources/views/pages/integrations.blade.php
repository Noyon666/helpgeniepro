@extends('layouts.app')

@section('title', 'Integrations')
@section('meta', 'Connect Helpquora to the tools your team already uses — e-commerce, messaging, CRM, payments and developer tools — and keep customer data in sync everywhere.')

@section('content')

{{-- ===== PAGE HERO ===== --}}
<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Integrations</div>
      <span class="eyebrow center-eb">Connected, not cornered</span>
      <h1 class="h-xl">Fits into the stack <span class="mark">you already love</span>.</h1>
      <p class="lead">Helpquora syncs customers, orders and conversations across the apps
        your team lives in — so context follows the customer everywhere, automatically.</p>
    </div>
    <div class="pill-list" data-reveal data-delay="1" style="justify-content:center;margin-top:26px">
      <span class="pill solid">All</span><span class="pill">E-commerce</span>
      <span class="pill">Messaging</span><span class="pill">CRM</span>
      <span class="pill">Payments</span><span class="pill">Productivity</span>
      <span class="pill">Developer</span>
    </div>
  </div>
</section>

{{-- ===== INTEGRATION GRID ===== --}}
<section class="section-tight">
  <div class="container">
    @php
      $integrations = [
        ['Sh','Shopify','E-commerce','Pull live orders and customer details into every chat.','ic-cobalt'],
        ['Wo','WooCommerce','E-commerce','Surface order status and history from your WordPress store.','ic-pink'],
        ['Bc','BigCommerce','E-commerce','Sync products, orders and shoppers in real time.','ic-ink'],
        ['Sl','Slack','Messaging','Get ticket alerts and reply to customers from your channels.','ic-amber'],
        ['Mt','Microsoft Teams','Messaging','Loop in teammates and track conversations inside Teams.','ic-cobalt'],
        ['Wa','WhatsApp','Messaging','Meet customers on the channel they already message from.','ic-pink'],
        ['Sf','Salesforce','CRM','Two-way sync of contacts, accounts and case history.','ic-ink'],
        ['Hs','HubSpot','CRM','Keep support context and marketing data perfectly aligned.','ic-amber'],
        ['Pd','Pipedrive','CRM','See deals and customer value beside every conversation.','ic-cobalt'],
        ['St','Stripe','Payments','View subscriptions, charges and refunds without leaving the inbox.','ic-pink'],
        ['Pp','PayPal','Payments','Check payment status and resolve billing questions faster.','ic-ink'],
        ['No','Notion','Productivity','Turn internal docs into Quill-ready knowledge.','ic-amber'],
        ['Ji','Jira','Developer','Convert bug reports into tracked engineering issues.','ic-cobalt'],
        ['Za','Zapier','Productivity','Connect Helpquora to 6,000+ apps with no code.','ic-pink'],
        ['Tw','Twilio','Developer','Power SMS and voice support straight from the inbox.','ic-ink'],
        ['Mc','Mailchimp','Productivity','Sync contacts and trigger follow-up campaigns.','ic-amber'],
      ];
    @endphp
    <div class="intg-grid">
      @foreach($integrations as $i => $intg)
        <div class="intg" data-reveal data-delay="{{ ($i % 4) + 1 }}">
          <span class="badge {{ $intg[4] }}">{{ $intg[0] }}</span>
          <span class="cat">{{ $intg[2] }}</span>
          <h4>{{ $intg[1] }}</h4>
          <p>{{ $intg[3] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ===== SPLIT: API ===== --}}
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-media" data-reveal>
        <span class="tape" style="background:var(--pink);color:#fff">Developer-ready</span>
        <img src="{{ asset('images/tech-6.jpg') }}" alt="Developer working with the Helpquora API">
      </div>
      <div data-reveal data-delay="1">
        <span class="eyebrow">Build your own</span>
        <h2 class="h-md">Don't see it? Connect it yourself</h2>
        <p class="lead">Our clean, well-documented REST API and webhooks make it simple to wire
          Helpquora into any internal tool or homegrown system.</p>
        <ul class="split-list">
          <li><span class="tick pink">✓</span> A modern REST API with clear, generous documentation</li>
          <li><span class="tick pink">✓</span> Real-time webhooks for every conversation event</li>
          <li><span class="tick pink">✓</span> Custom Quill actions that call your own endpoints</li>
          <li><span class="tick pink">✓</span> Sandbox keys so you can build with confidence</li>
        </ul>
        <p style="margin-top:24px"><a href="{{ route('contact') }}" class="textlink">Request developer access</a></p>
      </div>
    </div>
  </div>
</section>

{{-- ===== BAND ===== --}}
<section class="section-sm bg-white">
  <div class="container">
    <div class="note-card" data-reveal style="display:flex;gap:24px;align-items:center;flex-wrap:wrap;justify-content:space-between">
      <div>
        <h3 class="h-sm">Need an integration that isn't here yet?</h3>
        <p style="margin:0">Tell us what your team runs on — new connectors ship every month,
          guided by what customers ask for most.</p>
      </div>
      <a href="{{ route('contact') }}" class="btn btn-ink">Suggest an integration</a>
    </div>
  </div>
</section>

@endsection
