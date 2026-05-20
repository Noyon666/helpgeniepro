<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <script>document.documentElement.className='js';</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Customer service that works like magic') — HelpGenie Pro</title>
  <meta name="description" content="@yield('meta', 'HelpGenie Pro unifies every support conversation, automates the busywork and gives your team superpowers — so customers get answers in seconds.')">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="{{ asset('css/site.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('images/fav-icon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('images/fav-icon.png') }}">
</head>
<body>

  <div class="topbar">
    HelpGenie Pro is in early access — onboarding the next wave of support teams now.
    <span class="dot">●</span>
    <a href="{{ route('contact') }}">Claim your spot →</a>
  </div>

  @include('partials.header')
  @include('partials.mobile-nav')

  <main>
    @yield('content')
  </main>

  @includeWhen(!isset($hideCta), 'partials.cta')
  @include('partials.footer')

  <script src="{{ asset('js/site.js') }}" defer></script>
</body>
</html>
