@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('meta', 'How HelpGenie Pro collects, uses and protects personal information across our website and customer service platform.')

@section('content')

<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Privacy Policy</div>
      <span class="eyebrow center-eb">Legal</span>
      <h1 class="h-lg">Privacy Policy</h1>
      <p class="lead">Last updated: 12 May 2026. This policy explains, in plain language, what
        we collect and why.</p>
    </div>
  </div>
</section>

<section class="section-tight">
  <div class="container">
    <div class="legal-body" data-reveal>

      <div class="legal-toc">
        <h4>On this page</h4>
        <a href="#intro">1. Introduction</a>
        <a href="#collect">2. Information we collect</a>
        <a href="#use">3. How we use information</a>
        <a href="#legal">4. Our lawful basis</a>
        <a href="#share">5. Sharing and disclosure</a>
        <a href="#retention">6. Data retention</a>
        <a href="#rights">7. Your rights and choices</a>
        <a href="#security">8. How we protect data</a>
        <a href="#contact">9. Contacting us</a>
      </div>

      <h2 id="intro">1. Introduction</h2>
      <p>HelpGenie Pro Inc. ("HelpGenie Pro", "we", "us") provides a customer service platform
        and the website at this domain. We believe privacy is part of good service, and we keep
        the data we hold to the minimum we genuinely need.</p>
      <p>This policy covers visitors to our website and the administrators and agents who use our
        platform. Where we process information on behalf of a customer's own end users, we act as
        a processor and the customer's privacy policy governs that relationship.</p>

      <h2 id="collect">2. Information we collect</h2>
      <h3>Information you give us</h3>
      <ul>
        <li>Account details such as your name, work email, company name and team size.</li>
        <li>Messages you send through our contact form, demo requests and support channels.</li>
        <li>Billing contact details when you subscribe to a paid plan.</li>
      </ul>
      <h3>Information we collect automatically</h3>
      <ul>
        <li>Device and browser type, approximate location and pages viewed on our website.</li>
        <li>Product usage events that help us understand which features are useful.</li>
        <li>Cookies and similar technologies, described in our <a href="{{ route('cookies') }}">Cookie Policy</a>.</li>
      </ul>

      <h2 id="use">3. How we use information</h2>
      <p>We use the information above to operate and improve the platform, to respond to your
        enquiries, to provide onboarding and support, to send service updates, to keep our
        systems secure, and to meet our legal obligations. We do not sell personal information,
        and we never will.</p>

      <h2 id="legal">4. Our lawful basis</h2>
      <p>Where data protection law applies, we rely on one of the following bases: performance of
        a contract with you, our legitimate interest in running and improving our service, your
        consent (which you may withdraw at any time), and compliance with legal obligations.</p>

      <h2 id="share">5. Sharing and disclosure</h2>
      <p>We share information only with trusted service providers who help us run HelpGenie Pro —
        for example hosting, analytics and payment processing — and only under contracts that
        require them to protect it. We may also disclose information where required by law, or as
        part of a merger or acquisition, in which case we will notify you.</p>

      <h2 id="retention">6. Data retention</h2>
      <p>We keep personal information only for as long as your account is active or as needed to
        provide the service. When you close your account we delete or anonymise your data within
        90 days, unless a longer period is required for legal or accounting reasons.</p>

      <h2 id="rights">7. Your rights and choices</h2>
      <p>Depending on where you live, you may have the right to access, correct, export or delete
        your personal information, to object to certain processing, and to lodge a complaint with
        a supervisory authority. To exercise any of these rights, contact us using the details
        below and we will respond within the timeframe required by law.</p>

      <h2 id="security">8. How we protect data</h2>
      <p>We apply encryption in transit and at rest, strict access controls, continuous monitoring
        and regular independent security reviews. No system is perfectly secure, but we treat the
        protection of your data as a core part of the product, not an afterthought.</p>

      <h2 id="contact">9. Contacting us</h2>
      <p>For any privacy question or request, email us at
        <a href="mailto:support@helpgeniepro.com">support@helpgeniepro.com</a> or write to
        HelpGenie Pro Inc., 2300 Market Street, Suite 400, San Francisco, CA 94114, United States.
        We may update this policy from time to time and will post the new date at the top of this
        page.</p>

    </div>
  </div>
</section>

@endsection
