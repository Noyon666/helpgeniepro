@extends('layouts.app')

@section('title', 'Terms of Service')
@section('meta', 'The terms that govern your use of the Helpquora website and customer service platform.')

@section('content')

<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Terms of Service</div>
      <span class="eyebrow center-eb">Legal</span>
      <h1 class="h-lg">Terms of Service</h1>
      <p class="lead">Last updated: 12 May 2026. These terms set out the agreement between you
        and Helpquora.</p>
    </div>
  </div>
</section>

<section class="section-tight">
  <div class="container">
    <div class="legal-body" data-reveal>

      <div class="legal-toc">
        <h4>On this page</h4>
        <a href="#accept">1. Acceptance of terms</a>
        <a href="#accounts">2. Accounts and eligibility</a>
        <a href="#use">3. Acceptable use</a>
        <a href="#trial">4. Trials and subscriptions</a>
        <a href="#billing">5. Billing and cancellation</a>
        <a href="#ip">6. Intellectual property</a>
        <a href="#availability">7. Service availability</a>
        <a href="#liability">8. Disclaimers and liability</a>
        <a href="#termination">9. Termination</a>
        <a href="#changes">10. Changes and contact</a>
      </div>

      <h2 id="accept">1. Acceptance of terms</h2>
      <p>By creating an account or using the Helpquora website or platform, you agree to these
        Terms of Service. If you are accepting them on behalf of a company, you confirm that you
        have authority to bind that company. If you do not agree, please do not use the service.</p>

      <h2 id="accounts">2. Accounts and eligibility</h2>
      <p>You must be at least 18 years old and provide accurate account information. You are
        responsible for activity that happens under your account and for keeping your login
        credentials confidential. Please tell us promptly if you suspect any unauthorised use.</p>

      <h2 id="use">3. Acceptable use</h2>
      <p>You agree not to misuse the service. In particular, you will not:</p>
      <ul>
        <li>Use Helpquora to send spam, unlawful or abusive content.</li>
        <li>Attempt to disrupt, reverse engineer or gain unauthorised access to our systems.</li>
        <li>Resell or sublicense the service without our written permission.</li>
        <li>Upload content that infringes the rights of others or violates applicable law.</li>
      </ul>

      <h2 id="trial">4. Trials and subscriptions</h2>
      <p>We offer a 14-day free trial with access to platform features. After the trial, continued
        use requires a paid subscription on one of the plans described on our
        <a href="{{ route('pricing') }}">Pricing</a> page. Plan features and limits are part of
        these terms.</p>

      <h2 id="billing">5. Billing and cancellation</h2>
      <p>Paid plans are billed in advance on a monthly or annual basis, per agent seat. Fees are
        non-refundable except where required by law. You may cancel at any time from your account
        settings; your subscription then remains active until the end of the current billing
        period. We will give at least 30 days' notice before any price change.</p>

      <h2 id="ip">6. Intellectual property</h2>
      <p>Helpquora and its software, branding and content are owned by us and protected by
        intellectual property laws. You retain all rights to the data and content you submit to
        the platform, and you grant us a limited licence to process it solely to provide the
        service.</p>

      <h2 id="availability">7. Service availability</h2>
      <p>We work hard to keep Helpquora available and reliable, and we publish uptime
        commitments for eligible plans. From time to time we may perform maintenance or release
        updates, and we will give reasonable notice of any planned downtime where possible.</p>

      <h2 id="liability">8. Disclaimers and liability</h2>
      <p>The service is provided "as is" to the fullest extent permitted by law. We do not
        guarantee that it will be uninterrupted or error-free. To the maximum extent permitted by
        law, our total liability arising from these terms is limited to the amount you paid us in
        the twelve months before the claim.</p>

      <h2 id="termination">9. Termination</h2>
      <p>You may stop using the service at any time. We may suspend or terminate access if these
        terms are breached or if required by law. On termination, you may export your data for 30
        days, after which it may be deleted in line with our
        <a href="{{ route('privacy') }}">Privacy Policy</a>.</p>

      <h2 id="changes">10. Changes and contact</h2>
      <p>We may update these terms occasionally; material changes will be communicated by email or
        in-product, and the date above will be revised. Questions about these terms can be sent to
        <a href="mailto:support@helpquora.com">support@helpquora.com</a> or to Helpquora
        Inc., 2300 Market Street, Suite 400, San Francisco, CA 94114, United States.</p>

    </div>
  </div>
</section>

@endsection
