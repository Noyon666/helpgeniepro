@extends('layouts.app')

@section('title', 'Contact')
@section('meta', 'Get in touch with the HelpGenie Pro team — start your free trial, book a demo or ask us anything about moving your customer service to one calm workspace.')

@section('content')

{{-- ===== PAGE HERO ===== --}}
<section class="page-hero">
  <div class="container">
    <div data-reveal>
      <div class="crumb"><a href="{{ route('home') }}">Home</a> · Contact</div>
      <span class="eyebrow center-eb">Let's talk</span>
      <h1 class="h-xl">We'd genuinely <span class="mark">love to hear</span> from you.</h1>
      <p class="lead">Starting a trial, booking a demo or just weighing things up — tell us a
        little about your team and a real person will reply within one business day.</p>
    </div>
  </div>
</section>

{{-- ===== CONTACT GRID ===== --}}
<section class="section-tight">
  <div class="container">
    <div class="contact-grid">

      {{-- info --}}
      <div class="cinfo" data-reveal>
        <div class="cinfo-item">
          <span class="ci-ic">@</span>
          <div>
            <div class="ci-k">Email us</div>
            <div class="ci-v"><a href="mailto:support@helpgeniepro.com">support@helpgeniepro.com</a></div>
            <p class="muted" style="font-size:.88rem;margin:4px 0 0">For support, sales and everything in between.</p>
          </div>
        </div>
        <div class="cinfo-item">
          <span class="ci-ic">☏</span>
          <div>
            <div class="ci-k">Call us</div>
            <div class="ci-v">+1 (415) 555-0142</div>
            <p class="muted" style="font-size:.88rem;margin:4px 0 0">Monday to Friday, 7am – 7pm PT.</p>
          </div>
        </div>
        <div class="cinfo-item">
          <span class="ci-ic">⌂</span>
          <div>
            <div class="ci-k">Visit us</div>
            <div class="ci-v">2300 Market Street, Suite 400</div>
            <p class="muted" style="font-size:.88rem;margin:4px 0 0">San Francisco, CA 94114, United States</p>
          </div>
        </div>
        <div class="cinfo-item">
          <span class="ci-ic">✦</span>
          <div>
            <div class="ci-k">Early access</div>
            <div class="ci-v">Onboarding now</div>
            <p class="muted" style="font-size:.88rem;margin:4px 0 0">We're welcoming the next wave of support teams this quarter.</p>
          </div>
        </div>
      </div>

      {{-- form --}}
      <div class="form-card" id="form" data-reveal data-delay="1">
        @if(session('sent'))
          <div class="flash">
            Thanks, {{ session('sent') }} — your message is on its way. A member of our team
            will reply to you within one business day.
          </div>
        @endif

        <h2 class="h-sm" style="margin-bottom:6px">Send us a message</h2>
        <p class="muted" style="font-size:.95rem;margin-bottom:24px">Fields marked with an asterisk are required.</p>

        <form method="POST" action="{{ route('contact.submit') }}#form">
          @csrf
          <div class="field-row">
            <div class="field">
              <label for="name">Full name *</label>
              <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Jordan Avery" required>
              @error('name')<div class="err">{{ $message }}</div>@enderror
            </div>
            <div class="field">
              <label for="email">Work email *</label>
              <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@company.com" required>
              @error('email')<div class="err">{{ $message }}</div>@enderror
            </div>
          </div>
          <div class="field-row">
            <div class="field">
              <label for="company">Company</label>
              <input type="text" id="company" name="company" value="{{ old('company') }}" placeholder="Your company">
              @error('company')<div class="err">{{ $message }}</div>@enderror
            </div>
            <div class="field">
              <label for="team">Support team size</label>
              <select id="team" name="team">
                @php $sizes = ['Just me','2 – 5 agents','6 – 20 agents','21 – 50 agents','50+ agents']; @endphp
                <option value="">Select an option</option>
                @foreach($sizes as $s)
                  <option value="{{ $s }}" @selected(old('team')==$s)>{{ $s }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="field">
            <label for="message">How can we help? *</label>
            <textarea id="message" name="message" placeholder="Tell us a little about your team and what you're hoping to improve…" required>{{ old('message') }}</textarea>
            @error('message')<div class="err">{{ $message }}</div>@enderror
          </div>
          <button type="submit" class="btn btn-pink btn-lg" style="width:100%">Send message</button>
          <p class="muted center" style="font-size:.84rem;margin-top:14px">
            By sending this you agree to our <a href="{{ route('privacy') }}" style="color:var(--primary)">Privacy Policy</a>.
          </p>
        </form>
      </div>

    </div>
  </div>
</section>

{{-- ===== QUICK ANSWERS ===== --}}
<section class="section">
  <div class="container">
    <div class="sec-head center-head" data-reveal>
      <span class="eyebrow center-eb">Before you write</span>
      <h2 class="h-lg">A few quick answers</h2>
    </div>
    <div class="faq" data-reveal>
      @php
        $cfaqs = [
          ['How soon will I hear back?', 'Every message is answered by a real person within one business day — usually much sooner. Urgent? Mention it in your note and we will prioritise your reply.'],
          ['Can I see HelpGenie Pro before committing?', 'Of course. Ask for a demo in your message and we will walk you through the platform live, using examples close to your own type of business.'],
          ['Do you help us move from our old tool?', 'Yes. Guided migration is free on every plan — our onboarding team handles the import of conversations, contacts and help articles for you.'],
          ['Is the free trial really free?', 'It is. You get 14 days with every feature unlocked and no credit card required. We will only ask for billing details if you decide to continue.'],
        ];
      @endphp
      @foreach($cfaqs as $f)
        <div class="faq-item">
          <button class="faq-q">{{ $f[0] }} <span class="pm">+</span></button>
          <div class="faq-a"><p>{{ $f[1] }}</p></div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
