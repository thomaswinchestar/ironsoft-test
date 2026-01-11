# QA Checklist - IronPDF for C++ CodeIgniter Project

**Project:** IronPDF for C++ Landing Page  
**Date:** _______________  
**Tester:** _______________  
**Version:** 1.0

---

## 1. Pixel Alignment & Spacing (vs. Figma)

| Check | Status | Notes |
|-------|--------|-------|
| Header/navbar height matches design spec | ☐ | |
| Logo dimensions and positioning correct | ☐ | |
| Navigation item spacing consistent | ☐ | |
| Hero section padding/margins match design | ☐ | |
| Product card dimensions match spec | ☐ | |
| Product card spacing (gap between cards) | ☐ | |
| Section vertical spacing consistent | ☐ | |
| Container max-width matches design | ☐ | |
| Button padding and border-radius correct | ☐ | |
| Footer CTA section alignment | ☐ | |
| Form input field dimensions | ☐ | |

---

## 2. Typography Accuracy

| Check | Status | Notes |
|-------|--------|-------|
| Font family loads correctly (Gotham/Montserrat) | ☐ | |
| H1 font-size matches design | ☐ | |
| H2 font-size matches design | ☐ | |
| Body text font-size (16px base) | ☐ | |
| Line-height values correct | ☐ | |
| Font-weight variations applied correctly | ☐ | |
| Letter-spacing on headings | ☐ | |
| Text color values match (#FFFFFF, #C6AAC6, #E01A59) | ☐ | |
| Gradient text effect renders properly | ☐ | |
| No text overflow or truncation issues | ☐ | |

---

## 3. Responsiveness (Breakpoints)

### Desktop (≥1200px)
| Check | Status | Notes |
|-------|--------|-------|
| Full navigation visible | ☐ | |
| 3-column product card layout | ☐ | |
| Hero content properly positioned | ☐ | |
| All sections display correctly | ☐ | |

### Tablet (768px - 1199px)
| Check | Status | Notes |
|-------|--------|-------|
| Navigation collapses appropriately | ☐ | |
| Product cards stack to 2 columns | ☐ | |
| Text remains readable | ☐ | |
| Touch targets adequate size (44x44px min) | ☐ | |

### Mobile (< 768px)
| Check | Status | Notes |
|-------|--------|-------|
| Hamburger menu functional | ☐ | |
| Product cards stack to 1 column | ☐ | |
| Form inputs full-width | ☐ | |
| No horizontal scroll | ☐ | |
| Images scale appropriately | ☐ | |
| Text size readable without zooming | ☐ | |

---

## 4. Cross-Browser Testing

### Chrome (Latest)
| Check | Status | Notes |
|-------|--------|-------|
| Layout renders correctly | ☐ | |
| Animations/transitions smooth | ☐ | |
| Forms functional | ☐ | |
| Dropdown menus work | ☐ | |
| All links navigate correctly | ☐ | |

### Firefox (Latest)
| Check | Status | Notes |
|-------|--------|-------|
| Layout renders correctly | ☐ | |
| CSS gradients display properly | ☐ | |
| SVG images render | ☐ | |
| Hover states work | ☐ | |
| Scrolling smooth | ☐ | |

### Safari (if available)
| Check | Status | Notes |
|-------|--------|-------|
| Layout renders correctly | ☐ | |
| Flexbox/Grid layouts work | ☐ | |
| -webkit prefixes applied where needed | ☐ | |
| Form styling consistent | ☐ | |
| Touch interactions work (iOS) | ☐ | |

### Edge (Latest)
| Check | Status | Notes |
|-------|--------|-------|
| Layout renders correctly | ☐ | |
| All features functional | ☐ | |

---

## 5. SEO Validation

### Metadata
| Check | Status | Notes |
|-------|--------|-------|
| `<title>` tag present and descriptive | ☐ | |
| `<meta name="description">` present | ☐ | |
| `<meta name="keywords">` present | ☐ | |
| `<meta name="author">` present | ☐ | |
| `<meta name="viewport">` set correctly | ☐ | |
| Open Graph tags (og:title, og:description) | ☐ | |
| Canonical URL defined | ☐ | |

### Headings Structure
| Check | Status | Notes |
|-------|--------|-------|
| Single H1 per page | ☐ | |
| Logical heading hierarchy (H1→H2→H3) | ☐ | |
| Headings contain relevant keywords | ☐ | |
| No skipped heading levels | ☐ | |

### Images & Alt Tags
| Check | Status | Notes |
|-------|--------|-------|
| All `<img>` tags have alt attributes | ☐ | |
| Alt text is descriptive | ☐ | |
| Decorative images use `alt=""` | ☐ | |
| Logo has appropriate alt text | ☐ | |
| SVG images accessible | ☐ | |

### Links
| Check | Status | Notes |
|-------|--------|-------|
| All internal links work (no 404s) | ☐ | |
| External links open in new tab | ☐ | |
| Link text is descriptive (no "click here") | ☐ | |
| Skip navigation link present | ☐ | |

---

## 6. Core Web Vitals

### Largest Contentful Paint (LCP) - Target: < 2.5s
| Check | Status | Notes |
|-------|--------|-------|
| Hero image optimized | ☐ | |
| Critical CSS inlined or preloaded | ☐ | |
| Font loading optimized (font-display: swap) | ☐ | |
| Server response time acceptable | ☐ | |

### First Input Delay (FID) - Target: < 100ms
| Check | Status | Notes |
|-------|--------|-------|
| JavaScript execution optimized | ☐ | |
| No long-running tasks blocking main thread | ☐ | |
| Event handlers respond quickly | ☐ | |

### Cumulative Layout Shift (CLS) - Target: < 0.1
| Check | Status | Notes |
|-------|--------|-------|
| Image dimensions specified (width/height) | ☐ | |
| No content shifting on load | ☐ | |
| Fonts don't cause layout shift | ☐ | |
| Ads/embeds have reserved space | ☐ | |

### Additional Performance
| Check | Status | Notes |
|-------|--------|-------|
| Images use lazy loading where appropriate | ☐ | |
| CSS/JS minified for production | ☐ | |
| Gzip/Brotli compression enabled | ☐ | |
| Browser caching headers set | ☐ | |

---

## 7. Lighthouse Audit

Run Lighthouse in Chrome DevTools (Incognito mode recommended)

### Performance Score - Target: ≥ 90
| Metric | Score | Notes |
|--------|-------|-------|
| First Contentful Paint | | |
| Speed Index | | |
| Largest Contentful Paint | | |
| Time to Interactive | | |
| Total Blocking Time | | |
| Cumulative Layout Shift | | |

### Accessibility Score - Target: ≥ 90
| Check | Status | Notes |
|-------|--------|-------|
| Color contrast ratios pass (4.5:1 min) | ☐ | |
| ARIA labels present where needed | ☐ | |
| Form labels associated with inputs | ☐ | |
| Focus indicators visible | ☐ | |
| Keyboard navigation works | ☐ | |
| Screen reader compatible | ☐ | |

### Best Practices Score - Target: ≥ 90
| Check | Status | Notes |
|-------|--------|-------|
| HTTPS used | ☐ | |
| No console errors | ☐ | |
| Images have correct aspect ratio | ☐ | |
| No deprecated APIs used | ☐ | |

### SEO Score - Target: ≥ 90
| Check | Status | Notes |
|-------|--------|-------|
| Page is mobile-friendly | ☐ | |
| Document has meta description | ☐ | |
| Links have descriptive text | ☐ | |
| robots.txt valid | ☐ | |

---

## 8. Functional Testing

| Check | Status | Notes |
|-------|--------|-------|
| Home page loads correctly (`/`) | ☐ | |
| Features page loads (`/features`) | ☐ | |
| About page loads (`/about`) | ☐ | |
| Career page loads (`/career`) | ☐ | |
| Products listing loads (`/products`) | ☐ | |
| Java product page loads (`/products/java`) | ☐ | |
| Python product page loads (`/products/python`) | ☐ | |
| NodeJS product page loads (`/products/nodejs`) | ☐ | |
| API endpoint returns JSON (`/api/site-data`) | ☐ | |
| Navigation dropdown works | ☐ | |
| Product card links navigate correctly | ☐ | |
| Email signup form validates input | ☐ | |
| 404 page displays for invalid routes | ☐ | |

---

## Sign-Off

| Role | Name | Date | Signature |
|------|------|------|-----------|
| QA Tester | | | |
| Developer | | | |
| Project Lead | | | |

---

## Notes & Issues Found

| Issue # | Description | Severity | Status |
|---------|-------------|----------|--------|
| 1 | | | |
| 2 | | | |
| 3 | | | |
| 4 | | | |
| 5 | | | |

**Severity Levels:** Critical | High | Medium | Low

---

*Last Updated: January 2026*
