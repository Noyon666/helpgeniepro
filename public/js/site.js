/* Helpquora — site interactions */
(function () {
  'use strict';

  // sticky header state
  var header = document.querySelector('.site-header');
  function onScroll() {
    if (!header) return;
    header.classList.toggle('scrolled', window.scrollY > 12);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // mobile nav
  var burger = document.querySelector('.burger');
  var mnav = document.querySelector('.mobile-nav');
  var mclose = document.querySelector('.mn-close');
  function closeNav() { if (mnav) { mnav.classList.remove('open'); document.body.style.overflow = ''; } }
  if (burger && mnav) {
    burger.addEventListener('click', function () {
      mnav.classList.add('open'); document.body.style.overflow = 'hidden';
    });
  }
  if (mclose) mclose.addEventListener('click', closeNav);
  if (mnav) {
    mnav.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', closeNav);
    });
  }

  // FAQ accordion
  document.querySelectorAll('.faq-q').forEach(function (q) {
    q.addEventListener('click', function () {
      var item = q.closest('.faq-item');
      var ans = item.querySelector('.faq-a');
      var open = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(function (o) {
        o.classList.remove('open');
        o.querySelector('.faq-a').style.maxHeight = null;
      });
      if (!open) {
        item.classList.add('open');
        ans.style.maxHeight = ans.scrollHeight + 'px';
      }
    });
  });

  // pricing toggle (monthly / annual)
  var toggle = document.querySelector('.toggle');
  if (toggle) {
    toggle.querySelectorAll('button').forEach(function (b) {
      b.addEventListener('click', function () {
        toggle.querySelectorAll('button').forEach(function (x) { x.classList.remove('on'); });
        b.classList.add('on');
        var mode = b.getAttribute('data-mode');
        document.querySelectorAll('[data-monthly]').forEach(function (el) {
          el.textContent = mode == 'annual'
            ? el.getAttribute('data-annual')
            : el.getAttribute('data-monthly');
        });
      });
    });
  }

  // hero pointer parallax
  var heroEl = document.querySelector('.hero');
  if (heroEl &&
      window.matchMedia('(pointer:fine)').matches &&
      !window.matchMedia('(prefers-reduced-motion:reduce)').matches) {
    var hBg = heroEl.querySelector('.hero-bg');
    var hVis = heroEl.querySelector('.hero-visual');
    var raf = null;
    heroEl.addEventListener('mousemove', function (e) {
      if (raf) return;
      raf = requestAnimationFrame(function () {
        raf = null;
        var r = heroEl.getBoundingClientRect();
        var x = (e.clientX - r.left) / r.width - 0.5;
        var y = (e.clientY - r.top) / r.height - 0.5;
        if (hBg) hBg.style.transform = 'translate(' + (x * 32) + 'px,' + (y * 32) + 'px)';
        if (hVis) hVis.style.transform = 'translate(' + (x * -20) + 'px,' + (y * -15) + 'px)';
      });
    });
    heroEl.addEventListener('mouseleave', function () {
      if (hBg) hBg.style.transform = '';
      if (hVis) hVis.style.transform = '';
    });
  }

  // scroll reveal
  var reveal = document.querySelectorAll('[data-reveal]');
  if (location.search.indexOf('flat') > -1) {
    document.documentElement.classList.add('flat');
    reveal.forEach(function (el) { el.classList.add('in'); });
  } else if ('IntersectionObserver' in window && reveal.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.12 });
    reveal.forEach(function (el) { io.observe(el); });
  } else {
    reveal.forEach(function (el) { el.classList.add('in'); });
  }
})();
