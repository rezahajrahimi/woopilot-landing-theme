document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.landing-page section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { threshold: 0.15 });

    sections.forEach(section => observer.observe(section));

    const allowMotion = !window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (allowMotion) {
        const hero = document.querySelector('.hero');
        const device = document.querySelector('.device-frame');
        const badge = document.querySelector('.hero-badge');
        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY;
            if (hero) {
                hero.style.setProperty('--scroll-offset', `${scrolled * 0.05}px`);
            }
            if (device) {
                device.style.transform = `translateY(${Math.sin(scrolled * 0.0015) * 12}px)`;
            }
            if (badge) {
                badge.style.transform = `translateY(${Math.cos(scrolled * 0.002) * 6}px)`;
            }
        });
    }

    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach((card, index) => {
        card.style.transition = 'transform 0.6s ease, box-shadow 0.6s ease';
        card.style.transitionDelay = `${index * 0.06}s`;
        card.addEventListener('mouseenter', () => card.classList.add('lift'));
        card.addEventListener('mouseleave', () => card.classList.remove('lift'));
    });

    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.addEventListener('click', (event) => {
            btn.classList.add('btn-clicked');
            setTimeout(() => btn.classList.remove('btn-clicked'), 200);
            const cta = btn.getAttribute('data-cta') || 'cta_click';
            const customEvent = new CustomEvent('woopilot.cta', { detail: { label: cta } });
            document.dispatchEvent(customEvent);
            if (window.gtag) {
                window.gtag('event', 'click', { event_category: 'CTA', event_label: cta });
            }
        });
    });

    const menuToggle = document.querySelector('.menu-toggle');
    const primaryNav = document.querySelector('.primary');
    if (menuToggle && primaryNav) {
        const menuSrText = menuToggle.querySelector('.sr-only');
        menuToggle.addEventListener('click', () => {
            const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
            const newState = expanded ? 'false' : 'true';
            menuToggle.setAttribute('aria-expanded', newState);
            primaryNav.classList.toggle('is-open');
            if (menuSrText) {
                menuSrText.textContent = newState === 'true' ? 'بستن منو' : 'باز کردن منو';
            }
        });
        primaryNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                primaryNav.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }
});
