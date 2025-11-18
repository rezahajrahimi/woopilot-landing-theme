# Lighthouse Checklist & Quick Fixes

Use Chrome DevTools → Lighthouse to run a report with categories: Performance, Accessibility, Best Practices, SEO.

Key items to check and how to fix them:

1) LCP (Largest Contentful Paint)
- Likely candidate: hero image or large poster. Ensure hero image is preloaded and served in an optimized format.
- Fixes:
  - Use `preload` for the hero image.
  - Ensure width/height attributes are set on the image to avoid CLS.
  - Inline critical CSS for initial hero/header styling.

2) CLS (Cumulative Layout Shift)
- Common causes: images without dimensions; fonts causing FOUT; dynamic content loading above the fold.
- Fixes:
  - Add width/height attributes and ensure `img` has `max-width:100%`.
  - Use font-display: swap (already implemented by Google Fonts query `display=swap`).
  - Reserve space for elements that might load (e.g., ads, iframes).

3) Accessibility
- Run accessibility audit:
  - Ensure `skip to content` link exists (done).
  - Ensure `aria-expanded` and `aria-controls` exist on menu toggles (done), and JS updates screen reader content.
  - Use semantic headings in order (H1 per page, then H2/H3...), `main` element present (done).

4) SEO
- Check meta description and canonical link (done via `wp_head`), structured data (JSON-LD applied to landing/front page).
- Check `og:title`/`og:description` for social sharing.

5) Performance (reduce render-blocking)
- Ensure theme CSS and fonts are loaded with low blocking: `preconnect` for fonts (done), `preload` critical CSS (done), `defer` JS (done).
- Consider inlining critical CSS and deferring non-critical CSS if further improvements are needed.

6) Images
- Ensure responsive `srcset`/`sizes` are present and `loading='lazy'` for offscreen images (done for thumbnails).
- Convert large raster images to WebP at build time or via plugin on server.

7) Best Practices
- Avoid large third-party scripts that block rendering; add `async`/`defer` where possible.

Additional recommendations:
- Implement server-side compression and caching (gzip/Brotli), set cache headers.
- Use a CDN to serve static assets and font files.
- Critical CSS: Consider using a tool to extract and inline critical CSS automatically.

Running Lighthouse locally:
1) Open the site in Chrome.
2) DevTools (F12) → Lighthouse → choose categories (Performance, Accessibility, SEO, Best Practices) and ‘Generate report’.
3) Inspect the top-scoring opportunities and follow the provided fix suggestions.

If you want, I can run a targeted pass based on the Lighthouse output and implement the most impactful fixes (e.g., critical CSS extraction, code-splitting, image conversions).