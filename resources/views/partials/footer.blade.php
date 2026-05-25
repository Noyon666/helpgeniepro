<footer class="site-footer">
  <div class="container-wide">
    <div class="foot-top">
      <div class="foot-brand">
        <a href="{{ route('home') }}" class="brand" aria-label="Helpquora home">
          <img src="{{ asset('images/light-logo.png') }}" alt="Helpquora" class="brand-logo">
        </a>
        <p>The customer service platform that unifies every conversation, automates the
          repetitive work and helps small teams deliver world-class support.</p>
        <div class="foot-social">
          <a href="https://facebook.com" aria-label="Facebook" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://x.com" aria-label="X" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="https://youtube.com" aria-label="YouTube" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://instagram.com" aria-label="Instagram" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
        </div>
      </div>

      <div class="foot-col">
        <h4>Product</h4>
        <a href="{{ route('platform') }}">Platform</a>
        <a href="{{ route('integrations') }}">Integrations</a>
        <a href="{{ route('pricing') }}">Pricing</a>
        <a href="{{ route('solutions') }}">Solutions</a>
        <a href="{{ route('platform') }}#security">Security</a>
      </div>

      <div class="foot-col">
        <h4>Company</h4>
        <a href="{{ route('about') }}">About us</a>
        <a href="{{ route('resources') }}">Resources</a>
        <a href="{{ route('about') }}#careers">Careers</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('about') }}#story">Our story</a>
      </div>

      <div class="foot-col">
        <h4>Resources</h4>
        <a href="{{ route('resources') }}">Blog</a>
        <a href="{{ route('resources') }}#guides">Guides</a>
        <a href="{{ route('resources') }}#help">Help center</a>
        <a href="{{ route('pricing') }}#faq">FAQ</a>
        <a href="{{ route('contact') }}">Support</a>
      </div>

      <div class="foot-news">
        <label for="news">The Support Brief</label>
        <p>Sharp, practical ideas on customer service — one short email every other week.</p>
        <form class="news-form" onsubmit="this.querySelector('input').value='Thanks — you are on the list!';return false;">
          <input type="email" id="news" placeholder="you@company.com" required>
          <button type="submit" class="btn btn-pink">Join</button>
        </form>
      </div>
    </div>

    <div class="foot-bottom">
      <p>© {{ date('Y') }} Helpquora Inc. Crafted for support teams everywhere.</p>
      <div class="foot-legal">
        <a href="{{ route('privacy') }}">Privacy Policy</a>
        <a href="{{ route('terms') }}">Terms of Service</a>
        <a href="{{ route('cookies') }}">Cookie Policy</a>
      </div>
    </div>
  </div>
</footer>
