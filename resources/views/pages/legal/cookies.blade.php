@extends('layouts.app')

@section('title', 'Cookie Policy')
@section('meta', 'How HelpGenie Pro uses cookies and similar technologies on our website, and how you can control them.')

@section('content')

<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Cookie Policy</div>
      <span class="eyebrow center-eb">Legal</span>
      <h1 class="h-lg">Cookie Policy</h1>
      <p class="lead">Last updated: 12 May 2026. This policy explains how and why we use
        cookies, and how you stay in control.</p>
    </div>
  </div>
</section>

<section class="section-tight">
  <div class="container">
    <div class="legal-body" data-reveal>

      <div class="legal-toc">
        <h4>On this page</h4>
        <a href="#what">1. What cookies are</a>
        <a href="#why">2. Why we use them</a>
        <a href="#types">3. Types of cookies we use</a>
        <a href="#third">4. Third-party cookies</a>
        <a href="#manage">5. Managing your preferences</a>
        <a href="#updates">6. Updates and contact</a>
      </div>

      <h2 id="what">1. What cookies are</h2>
      <p>Cookies are small text files placed on your device when you visit a website. They let a
        site remember your actions and preferences over time. We also use similar technologies
        such as local storage and pixels, and we refer to all of these simply as "cookies" here.</p>

      <h2 id="why">2. Why we use them</h2>
      <p>We use cookies to keep our website working properly, to remember your choices, to
        understand which content is helpful, and to measure the performance of our pages. We aim
        to use as few cookies as we reasonably can.</p>

      <h2 id="types">3. Types of cookies we use</h2>
      <h3>Strictly necessary</h3>
      <p>These keep core functions working — for example security, form submission and load
        balancing. The site cannot run properly without them, so they cannot be switched off.</p>
      <h3>Preference cookies</h3>
      <p>These remember choices you make, such as your region or display settings, so the site
        feels consistent each time you return.</p>
      <h3>Analytics cookies</h3>
      <p>These help us understand, in aggregate, how visitors find and use our website so we can
        keep improving it. They do not identify you personally.</p>

      <h2 id="third">4. Third-party cookies</h2>
      <p>Some cookies are set by trusted third parties that support our website, such as analytics
        and content delivery providers. These partners are contractually required to handle data
        responsibly and only for the purposes we specify.</p>

      <h2 id="manage">5. Managing your preferences</h2>
      <p>When you first visit our website you can accept or decline non-essential cookies, and you
        can change that choice at any time through our cookie settings. Most browsers also let you
        block or delete cookies directly — though please note that blocking strictly necessary
        cookies may stop parts of the site from working.</p>

      <h2 id="updates">6. Updates and contact</h2>
      <p>We may update this Cookie Policy as our website evolves, and will revise the date above
        when we do. For any question about cookies, email us at
        <a href="mailto:support@helpgeniepro.com">support@helpgeniepro.com</a>. You can also read
        our <a href="{{ route('privacy') }}">Privacy Policy</a> for the bigger picture on how we
        handle personal information.</p>

    </div>
  </div>
</section>

@endsection
