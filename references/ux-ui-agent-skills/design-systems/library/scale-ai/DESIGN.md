---
version: alpha
name: Scale AI
category: "AI"
description: "Scale AI home page: monochrome enterprise-AI site in the aeonik grotesque at weight 400, 64px display with -0.64px tracking, black #000000 primary buttons with 8px radius on a white #ffffff canvas, body ink #575757, tinted cards in #a8927c, #193a29 and #79648c."
colors:
  canvas: "#ffffff"
  ink: "#575757"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-3: "#eaeaea"
  ink-4: "#a8927c"
  ink-5: "#193a29"
  ink-6: "#79648c"
  button-secondary-text: "#929292"
  button-secondary-border: "#c7c7c7"
typography:
  display:
    fontFamily: aeonik, "aeonik Fallback", -apple-system, Arial, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 67.2px
    letterSpacing: "-0.64px"
  display-mobile:
    fontFamily: aeonik, "aeonik Fallback", -apple-system, Arial, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 33.6px
    letterSpacing: "-0.32px"
  subheading:
    fontFamily: aeonik, "aeonik Fallback", -apple-system, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: "-0.24px"
  body:
    fontFamily: aeonik, "aeonik Fallback", -apple-system, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.02px
    letterSpacing: "-0.14px"
  button:
    fontFamily: aeonik, "aeonik Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
    textTransform: capitalize
  nav:
    fontFamily: aeonik, "aeonik Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 24px
  4xl: 32px
spacing:
  s1: 1.68px
  s2: 1.92px
  s3: 2.88px
  s4: 3.84px
  s5: 4px
  s6: 4.8px
  s7: 7.68px
  s8: 8px
  s9: 12px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    height: 40px
  button-secondary:
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    height: 40px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.primary}"
    rounded: "{rounded.3xl}"
    transform: matrix(1, 0, 0, 1, 0, 225.12)
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    padding: 160px 0px 24px
---

# Scale AI

## Overview
Scale AI's home page (scale.com, measured at 1280px wide) is a monochrome, editorial enterprise-AI site. The first screen is a full-bleed dark photographic hero carrying the white 64px headline "The world's most important decisions need reliable AI systems." in the aeonik face at weight 400. Below it the page alternates between white (#ffffff), black (#000000) and light-grey (#eaeaea) bands, with a few tinted feature cards in tan (#a8927c), deep green (#193a29) and muted violet (#79648c). The tone is institutional and confident: short declarative headlines ("Our legacy, your success.", "From the Lab to the real world."), product names and customer logos (Mayo Clinic, Morgan Stanley, MIT) carry the credibility, and imagery is documentary photography and dark scientific renderings rather than illustration. The measured scroll height is 10612px, so this is a long, story-driven page.

Art direction and microcopy: the capture shows a defense-style desert photograph and a dark globe rendering in the Resources menu, a benchmark chart of model names (claude-opus-4-6, gpt-5.2-chat-latest, gemini-3-flash and others) set in the monospace face, customer lockups pairing the Scale logo with partner marks, and a closing tan band reading "Our legacy, your success." with a small black "Get Started" button. Buttons use short imperative labels (Get Started, Log In, Scroll to explore). Density is low to medium: large type, generous vertical bands, and few elements per viewport, which suits the long scroll. Headline copy repeats the idea of reliability and critical decisions, giving the brand a serious, government-and-enterprise voice rather than a playful one.

## Colors
The palette is near-achromatic with brand tints used only inside feature cards.
- Canvas is #ffffff (largest background area by far, followed by #000000 and #eaeaea).
- Primary is #000000: the "Get Started" button fill, link and nav text, and the footer background. On-primary is #ffffff.
- Body ink is #575757, the most-read text color by character count after white text on dark bands.
- Secondary-button text is #929292 on a #c7c7c7 border (the outlined "Log In" button).
- Card tints measured from text and background areas: #a8927c (tan), #193a29 (deep green), #79648c (violet), plus #eaeaea and #f2f2f2 greys.
No gradient or saturated accent color was recorded as a CTA fill; hierarchy comes from black against white.

## Typography
One family drives everything: aeonik (loaded as "aeonik 400 normal"), with the fallback stack `-apple-system, Arial, sans-serif` on headings and `ui-sans-serif, system-ui, sans-serif` on buttons and nav. A second loaded face, "mono", appears in the benchmark chart axis labels. Aeonik is a commercial typeface; a close open substitute is not documented by the brand, so use a neutral grotesque and expect different metrics.
- Display: 64px / 67.2px line height, weight 400, letter-spacing -0.64px (desktop). On the 390px mobile pass the same headline measures 32px / 33.6px, -0.32px.
- Subheading: 24px, weight 500, 36px line height, -0.24px.
- Body: 14px, weight 400, 20.02px line height, -0.14px.
- Button: 14px, weight 500, 21px line height, capitalized.
- Nav: 16px, weight 400, 24px line height.
Tracking is always slightly negative (about -1% of size) on display, subheading and body text.

## Layout
The root variables expose a wide container of 1280px (`--plsmc-wide-width`) and a standard width of 800px (`--plsmc-standard-width`), so content alternates between a full-width canvas and narrower reading columns. The header is a white bar with the logo left, Products / Solutions / Research / Resources in the middle and Log In / Get Started at the right. Mega-menu panels open from the nav with link columns and two image cards. Sections are stacked full-bleed bands; card rows (customer stories, news) sit in a three-up grid with large rounded corners. The footer is black with 160px top padding and 24px bottom padding, using a very large white closing headline.
Measured spacing values are small: 1.68px, 1.92px, 2.88px, 3.84px, 4px, 4.8px, 7.68px, 8px, 12px and 15px, reflecting a Tailwind-style utility system.

## Elevation & Depth
Depth is almost absent. The only box shadow recorded repeatedly is the Tailwind small shadow, `0 1px 3px rgba(0,0,0,0.1), 0 1px 2px -1px rgba(0,0,0,0.1)`, on a few elements. Separation comes from band color changes (white, black, light grey) and photographic imagery, not from elevation. A cookie notice overlays the capture; it is a third-party control and is not part of the brand UI.

## Shapes
The shape language is soft-rectangular and consistent: nothing is sharp, nothing is a pill in the measured data. Image thumbnails in the mega-menu, story cards and tinted feature panels all share rounded corners from the same scale, so scaling a component up moves it to the next radius step rather than inventing a new value.

Corner radii are a Tailwind scale defined as root variables: 0.125rem, 0.25rem (4px), 0.375rem (6px), 0.5rem (8px), 0.75rem (12px), 1rem (16px), 1.5rem (24px) and 2rem (32px). In use, 16px is the most frequent measured radius (weight 61), followed by 8px (weight 16). Buttons are 8px, 40px tall; feature cards use 24px.

## Components
- **button-primary**: black fill (#000000), white text, 14px weight 500 capitalized, 8px radius, 40px high ("Get Started", 105px wide).
- **button-secondary**: transparent with #929292 text and a #c7c7c7 border, same 8px radius and 40px height ("Log In").
- **nav / nav-link**: white bar, #000000 links at 16px; some links render in grey until hovered or active (the Resources item is darker when its menu is open in the capture).
- **card**: 24px radius; image cards in mega-menus and story cards use rounded photography with small 14px captions.
- **footer**: black background, #575757 text, 160px 0 24px padding.

## Design System Architecture
Scale publishes a Brand Guidelines site at https://brand.scale.com/ (title "Scale 2.0 Brand Guidelines"), linked from the home page. It is client-rendered and returned no readable content to a plain fetch, so no guideline values are cited here. The de-facto system visible in the shipped CSS is Tailwind v4 (`--tw-*` variables, `--radius-*`, `--font-weight-*`, `--container-md`, `--leading-normal: 1.5`, `--tracking-wider: .05em`) plus Framer-style `--token-*` custom properties (for example `--token-lTpBdyxTmQl6: #e5e7eb` and `--token-iHR8sE16Z9Et: #dc2626`), and the page-layout widths `--plsmc-wide-width: 1280px` and `--plsmc-standard-width: 800px`. The brand font is exposed as `--font-aeonik`.

## Do's and Don'ts
- Do keep chrome black and white; let photography and the few tinted cards supply color.
- Do set display text at weight 400 with negative tracking, not bold.
- Do use 8px radius for buttons and 24px for large cards.
- Don't introduce a saturated CTA color; the measured primary is #000000.
- Don't treat the cookie banner, consent buttons or the nav scrim as brand components.
- Don't use the Tailwind default red (#dc2626) or grey (#e5e7eb) root variables as brand colors; they are framework tokens not seen in rendered content.

## Responsive Behavior
Only the 390px mobile pass was measured: the headline drops from 64px to 32px (line height 33.6px, tracking -0.32px) and the headline box is 326px wide. Breakpoints, nav collapse behavior and grid changes were not measured.

## Iteration Guide
1. Start from tokens: canvas #ffffff, ink #575757, primary #000000.
2. Set aeonik (or a neutral grotesque) at 400 for display with -0.01em tracking.
3. Build the button at 40px height, 8px radius, 14px weight 500.
4. Use black, white and #eaeaea bands; add tan, green or violet only in featured cards.
5. Verify against the gate with `node web/scripts/verify-designs.mjs --slug=scale-ai`.
Missing: hover states (none recorded), dark-mode behavior (not measured), motion (not measured).
