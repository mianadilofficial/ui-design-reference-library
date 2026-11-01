---
version: alpha
name: Seasats
category: "Tech & AI"
description: "Seasats ocean-autonomy site: seasonMix serif display at 110.222px, seasonSans body, supplyMono uppercase labels, off-white #fffdfd canvas, ink #232323, forest-green #2b3922 button cap, mint accent #e3ede4, radii scaled from 0.8rem."
colors:
  canvas: "#fffdfd"
  ink: "#232323"
  primary: "#2b3922"
  surface-2: "#d9d9d9"
  ink-3: "#232323b3"
  ink-4: "#48484880"
  ink-5: "#fffdfd80"
  ink-6: "#ffffff"
  hairline: "#e6e6e629"
  accent-mint: "#e3ede4"
typography:
  display:
    fontFamily: seasonMix, "seasonMix Fallback", serif
    fontSize: 110.222px
    fontWeight: 400
    lineHeight: 99.2px
    letterSpacing: "-1.10222px"
  display-mobile:
    fontFamily: seasonMix, "seasonMix Fallback", serif
    fontSize: 63.5115px
    fontWeight: 400
    lineHeight: 63.5115px
    letterSpacing: "-0.635114px"
  heading:
    fontFamily: seasonMix, "seasonMix Fallback", serif
    fontSize: 71.1111px
    fontWeight: 400
    lineHeight: 71.1111px
    letterSpacing: "-0.711111px"
  subheading:
    fontFamily: seasonMix, "seasonMix Fallback", serif
    fontSize: 56.8889px
    fontWeight: 400
    lineHeight: 56.8889px
    letterSpacing: "-0.568889px"
  body:
    fontFamily: seasonSans, "seasonSans Fallback", sans-serif
    fontSize: 16.8889px
    fontWeight: 400
    lineHeight: 21.9556px
  nav:
    fontFamily: seasonSans, "seasonSans Fallback", sans-serif
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 19.9111px
  link:
    fontFamily: supplyMono, "supplyMono Fallback", monospace
    fontSize: 12.4444px
    fontWeight: 400
    lineHeight: 11.2px
    textTransform: uppercase
rounded:
  xs: 1.78px
  sm: 3.56px
  md: 5.33px
  lg: 7.11px
spacing:
  s1: 0.89px
  s2: 2.84px
  s3: 3.38px
  s4: 3.56px
  s5: 4.27px
  s6: 4.44px
  s7: 5.33px
  s8: 7.11px
  s9: 8.89px
  s10: 10.67px
components:
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 3.55556px 3.55556px 3.55556px 14.2222px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.ink-5}"
    textColor: "{colors.ink}"
  footer:
    textColor: "{colors.ink-5}"
    transform: matrix(1, 0, 0, 1, 0, 0)
---

# Seasats

## Overview
Seasats (seasats.com) sells autonomous surface vessels for ocean work; the page title is "Seasats | Ocean Autonomy That Works". The measured page is 30426px tall at 1280px wide, a long cinematic scroll. The first screen is a full-bleed hero image of three dark unmanned boats on glassy, dusk-lit water under a pale lavender-to-blue sky. The headline "Ocean Autonomy That Works" is centered in white at 110.222px in a light serif with tight tracking, the SEASATS wordmark sits at top left in a wide geometric lettering, and a small white pill button "EXPLORE PRODUCTS" with a dark-green square arrow cap sits at the bottom center. Beneath the hero the page continues with a white band, then a long gradient section in blue-grey fading lighter downward, a mission statement ("Mission after mission") in 71.1111px serif, and a footer area containing a scroll-odometer readout ("DISTANCE SCROLLED 0.4 METERS", "AV SCROLL"). The tone is calm, technical and defense-industrial: monospace uppercase labels beside a refined serif.

Imagery and voice: the capture shows rendered or filmed vessels at rest on calm water, mirrored in their own reflections, with antennae, a gold radar dome and low dark hulls. The photography is quiet and atmospheric rather than action-oriented, which supports the claim in the headline ("works") with a sense of reliability, not spectacle. Copy is short: a one-line promise, a mission headline ("Mission after mission"), uppercase button labels and a playful but precise scroll odometer that reports meters scrolled. The result feels like a defense-technology company with a design-studio sensibility: restrained palette, oversized serif headlines, instrument-style monospace details.

## Colors
- Canvas: #fffdfd, a warm off-white. Ink: #232323 (3575 characters), with translucent variants #232323b3, #23232380, #333333b3 and #48484880.
- Primary: #2b3922, a deep forest green, seen as the arrow cap inside the hero button.
- Accent: #e3ede4 (root variable `--colorAccent`), a pale mint, plus #b7c8be as a small background area.
- Surfaces by area: #232323 (1067), #d9d9d9 (1051), #fffdfd (1030), #cfcfcf (815), translucent white #fffdfd80 (789) and #0000001a (77).
- Text on photography: #ffffff and #fffdfd (2441 characters). Hairline: #e6e6e629, a faint translucent line.
Photographic color (dusk blue, steel grey, copper highlights) dominates the first screens, so the UI palette stays neutral.

## Typography
Three custom families are loaded: seasonMix (400 and 500, serif display), seasonSans (400, sans for body) and supplyMono (400, uppercase labels). Fallbacks are `serif`, `sans-serif` and `monospace` respectively, so these are proprietary faces with generic substitutes. Root variables: `--fontSeasonMix`, `--fontSeasonSans`, `--fontSupplyMono`.
- Display: seasonMix 110.222px / 99.2px, weight 400, -1.10222px (mobile pass: 63.5115px / 63.5115px, -0.635114px).
- Heading: seasonMix 71.1111px, -0.711111px. Subheading: 56.8889px, -0.568889px.
- Body: seasonSans 16.8889px / 21.9556px. Nav: seasonSans 14.2222px / 19.9111px.
- Link/label: supplyMono 12.4444px, uppercase.
Sizes are fractional because the layout scales with the viewport: the root radius variable is 0.8rem and renders as 7.11111px, which implies a fluid root size. The most frequent character sizes are 16.8889px (1854), 14.2222px (1735), 12.4444px (768), 21.3333px (720) and 10.6667px (643).

## Layout
Sections are full-bleed bands (hero image, white, gradient, dark). The nav is 64px tall with a "MENU" control and 10.6667px caps. Content measures are generous, with large vertical gaps; the hero headline is centered. Spacing values (fluid, fractional): 0.89px, 2.84px, 3.38px, 3.56px, 4.27px, 4.44px, 5.33px, 7.11px, 8.89px and 10.67px, which are small multiples of the scaled rem and therefore tuned for fine control padding rather than section spacing. The link/label pad is 3.55556px 3.55556px 3.55556px 14.2222px, giving the bracketless label a left inset before its icon cap.

## Elevation & Depth
The page uses atmosphere instead of elevation. Because the hero image already has depth (reflections, haze), UI elements on top are kept as flat white or translucent shapes, and the long gradient band after the hero moves from a dark blue-grey to a lighter grey-blue as a continuous transition without a hard edge.
No box shadows were recorded. Depth comes from the photography (reflections in water, atmospheric haze) and from translucent overlays (#fffdfd80 and #0000001a). The footer odometer sits over imagery in semi-transparent #fffdfd80 text. Controls are flat.

## Shapes
Every measured radius is a multiple of the same base value, so the system is internally consistent even though the pixel values look unusual. Smaller radii (1.77778px, 3.55556px) belong to tiny controls and nav items, 5.33333px to mid-size elements and 7.11111px (the `--radius` variable) to the most common rounded surfaces.
Radii measured: 7.11111px (weight 37), 3.55556px (20), 5.33333px (5), 1.77778px (1), all multiples of the 0.8rem root. The hero button is a small rounded rectangle with a squarer inner arrow cap; images and bands are rectangular.

## Components
- **Hero button "EXPLORE PRODUCTS"**: white, rounded, supplyMono uppercase label with a dark-green (#2b3922) square cap holding a white arrow.
- **Link/label**: supplyMono 12.4444px uppercase, #232323 on #fffdfd.
- **Nav**: wordmark left, "MENU" right; nav-link seasonSans 14.2222px with 1.77778px radius.
- **Card**: translucent off-white surface (#fffdfd80) with #232323 text.
- **Scroll readout (footer)**: "DISTANCE SCROLLED", a meter count and "AV SCROLL" in 10.6667px mono caps on #fffdfd80.
The extractor detected no primary CTA, so no button token is declared.

## Design System Architecture
No public design system or brand guidelines were found for Seasats; the source scanned was https://www.seasats.com/ itself.
The home page exposes a small root token set: `--colorText: #232323`, `--colorAccent: #e3ede4`, `--radius: 0.8rem`, and the three font variables, plus a Swiper default (`--swiper-theme-color: #007aff`, not a brand color). The page was scanned for brand, press, design-system and guideline links; only an in-page "#press" anchor appeared, which is a press section of the page and not a guideline document. The de-facto system is therefore fluid rem scaling, three typefaces with distinct roles (serif display, sans body, mono labels), a near-black/off-white base and a single dark green for interactive caps.

## Do's and Don'ts
These points follow from the measured values and the capture rather than from external guidance.
- Do pair the serif display with mono uppercase labels.
- Do scale radii from one base (0.8rem) rather than choosing arbitrary values.
- Do let photography carry color; keep UI neutral.
- Don't use Swiper's #007aff as a brand color.
- Don't add shadows.
- Don't fill buttons with saturated color; the only chromatic UI value is the dark-green cap #2b3922.

## Responsive Behavior
Scope: one desktop pass at 1280px and one mobile pass at 390px were measured; no other viewport widths were recorded.
Measured at 390px, the h1 is 63.5115px with 63.5115px line height and a 191px-high box (down from 110.222px on desktop). The fluid sizing noted above is the only responsive mechanism observed in the measurement; menu and layout changes were not measured.

## Iteration Guide
When adding new sections keep three constraints: one serif headline size per section from the measured ladder (110.222px, 71.1111px, 56.8889px), body copy in seasonSans at 16.8889px, and labels in supplyMono uppercase at 12.4444px or 10.6667px. Keep text over photography white (#ffffff or #fffdfd) and text on the off-white canvas #232323. If a value needs to scale on small screens, scale it proportionally to the fluid rem rather than introducing a new fixed number.
1. Set canvas #fffdfd, ink #232323, primary #2b3922, accent #e3ede4.
2. Load seasonMix, seasonSans and supplyMono (generic fallbacks otherwise).
3. Build the hero with a centered 110px serif headline over a full-bleed photograph.
4. Add the small white button with a green arrow cap.
5. Run `node web/scripts/verify-designs.mjs --slug=seasats`.
Not measured: hover states, dark mode, motion, menu overlay.
