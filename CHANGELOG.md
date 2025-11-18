# Changelog

All notable changes to this theme are documented in this file.

## Unreleased

- Fix: Prevented horizontal scrolling on mobile (overflow-x hidden on hero, min-width: 0 on grid children, responsive hero grid using minmax)
- Fix: Header layout and responsive menu improvements
- Perf: Preload and inline critical CSS for faster LCP
- Perf: Added `loading="lazy"` and `decoding="async"` attributes to featured images and hero image
- Perf: Added `preconnect` for Google Fonts and `defer` for theme JS
- SEO: Added meta description via `wp_head`, canonical links, and basic Open Graph tags
- Accessibility: Added `skip-link`, `sr-only` helper, and aria-labels / aria-expanded for menu toggle
- Images: Added `sizes` attributes for responsive thumbnails
- Docs: Created this changelog

## 1.2

- Initial release
