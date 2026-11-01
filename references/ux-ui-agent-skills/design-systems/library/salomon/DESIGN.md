---
version: alpha
name: Salomon
category: "Sports & Fitness"
description: "Salomon US store: uppercase salomonSansFont 700 headlines (42px hero, 32px with -1.5008px tracking) over full-bleed outdoor photography, Inter 400/600/700 for UI and 14px body text, #141414 ink on #ffffff, #f5f5f5 secondary surfaces, a #000000 S/PLUS member footer, translucent #ffffff59 48px-radius search field and pill-shaped buttons."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#141414"
  primary: "#ffffff"
  surface-secondary: "#f5f5f5"
  ink-strong: "#0f0f0f"
  hairline: "#d6d6d6"
  text-input-bg: "#ffffff59"
typography:
  display:
    fontFamily: salomonSansFont, "salomonSansFont Fallback", salomon-fallback, sans-serif
    fontSize: 42px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: 0.04px
    textTransform: uppercase
  heading:
    fontFamily: inter, salomon-fallback, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  subheading:
    fontFamily: salomonSansFont, "salomonSansFont Fallback", salomon-fallback, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 26px
    letterSpacing: "-1.5008px"
    textTransform: uppercase
  body:
    fontFamily: inter, salomon-fallback, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: inter, salomon-fallback, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 8px
  md: 20px
  lg: 48px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, oklch(1 0 none) 0px -1px 0px 0px inset
  nav:
    textColor: "{colors.canvas}"
    height: 80px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 0px 10px 0px 48px
    height: 48px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
---

# Salomon

## Overview

The measured site is Salomon's US store at https://www.salomon.com/en-us (title "SALOMON | Running shoes and clothing, trail running, hiking, ski and snowboard | Salomon"), 3,500px tall at 1280px. It is a compact, image-first home page: a dark hero photograph ("IN THE OPEN", with the line "Wherever you're going. Whatever the weather." and a "Shop Now" pill) under a transparent header; a white "Shop by activity" rail of portrait tiles (Running, Hiking & Outdoor, Sneakers & Lifestyle, winter sports); a pair of full-bleed product photographs ("SNOWCLOG OG — A cult winter icon reborn", "EXPEDITION PACK — Rooted in the spirit of long expeditions"); a "Trending Now" row of four tall image cards (GRVL Concept, Trail Icons, XT-Whisper, S/LAB Phantasm 3 SC); a "Top Categories" link list in four columns; a two-cell service strip ("Free Returns Within 45 Days", "Free Shipping for S/PLUS Members"); and a black S/PLUS membership footer ("BECOME A MEMBER").

The art direction is technical-outdoor with a fashion edge: moody dusk landscapes, weathered wood and concrete, close-up footwear with saturated outsole colours. The interface stays strictly neutral (white, near-black, greys) so the photography carries colour. Brand typography is a heavy, wide, uppercase sans (salomonSansFont) used only for campaign headlines; everything functional is Inter. The copy is short and evocative, with product names set like headlines and one-line taglines beneath them. The footer signs off with "Playing in the French Alps since 1947".

A geolocation dialog ("It looks like you're in Thailand") and its grey scrim are visible in the capture over the activity rail. That dialog is not brand UI and is excluded from the tokens; the extraction was re-run once and the dialog was present both times.

## Colors

- **canvas #ffffff** — the main page surface; `--color-background-primary` is oklch(100% 0 none).
- **ink #141414** — the most-read text colour; also a measured background area (the top utility strip with "Find a store", "S/PLUS Members: Free Shipping and More", "Get exclusive news", "Help").
- **ink-strong #0f0f0f** — headings on white ("Shop by activity", "Trending Now") and the footer element's text colour.
- **primary #ffffff** — white is the action colour on this page: the "Shop Now", "Sign in" and "Learn more" pills in the capture are white with dark text, on top of photography or the black footer. The extractor did not record a primary CTA element, so button metrics are not measured.
- **page-largest #000000** — the largest measured background, the S/PLUS footer.
- **surface-secondary #f5f5f5** — light grey surface; it matches `--color-background-secondary` (oklch 97.02%).
- **hairline #d6d6d6** — the measured border colour, used for the service-strip dividers and list rules.
- **text-input-bg #ffffff59** — the translucent white (35% alpha) search field over the hero.

Shipped CSS defines full oklch ramps for `--color-accent-*` (a red family), `--color-danger-*`, `--color-information-*`, `--color-success-*`, `--color-warning-*` and `--color-neutral-0` to `-1000`, plus semantic aliases (`--color-content-primary`, `-secondary`, `-tertiary`, `-disabled`; `--color-background-content-black`). Those ramps were not measured as rendered colours on the home page and are not tokenised here.

## Typography

- **salomonSansFont** (`"salomonSansFont", "salomonSansFont Fallback", salomon-fallback, sans-serif`, variable `--font-salomon-sans`) — the brand display face, loaded only at 700. **display** 42px / 700 / 48px, uppercase, 0.04px tracking ("IN THE OPEN"). **subheading** 32px / 700 / 26px, uppercase, -1.5008px tracking ("BECOME A MEMBER", set on two tight lines). The campaign titles ("SNOWCLOG OG", "EXPEDITION PACK") are uppercase in the capture; the extraction also records 32px text with 0.04px tracking.
- **Inter** (`inter, salomon-fallback, sans-serif`, variable `--font-inter`) — the UI face, loaded as a 100–900 variable font. **heading** 20px / 700 / 28px for section titles; **body** 14px / 400 / 20px; **input** 16px / 400 / 24px; header items 14px / 600.

Only five sizes were measured on desktop: 14, 18, 20, 32 and 42px. The type scale is declared in line-height variables such as `--leading-display1` 5.75rem, `--leading-display2` 4.5rem, `--leading-heading1` 3rem to `--leading-heading4` 2rem, `--leading-body1` 1.75rem, `--leading-body3` 1.25rem, `--leading-caption1` 1rem, `--leading-brand-condensed` 1.625rem (the 26px line height of the subheading).

**Substitutes:** salomonSansFont is proprietary; the CSS falls back to a locally defined `salomon-fallback`. Inter is open source and can be used directly.

## Layout

Content runs from x 40 to x 1225 at 1280px, so the page uses 40px side margins. The header is 80px tall and transparent over the hero, with a "Menu" toggle and the search field on the left, the SALOMON wordmark centred, and Log in, wishlist and bag on the right; 6 header links were visible. Bands, top to bottom: a 497px hero, a 448px white activity rail with 6 tiles, a 628px two-up photo band, a 1,031px white band for Trending Now (4 columns) and Top Categories (4 link columns), and an 896px black footer. Measured gaps are 4, 8, 12, 16, 20 and 24px; paddings include 32, 40, 48 and 56px. Shipped container widths run from `--container-3xs` 16rem to `--container-7xl` 80rem.

## Elevation & Depth

Depth is minimal. The only non-transparent shadows measured are a 1px white inset underline on text links (`oklch(1 0 none) 0px -1px 0px 0px inset`) and `oklch(0 0 none / 0.1) 0px 12px 16px -4px`, which belongs to the geolocation dialog and is not used as a brand token. A translucent #4b4b4b33 background was measured as an overlay surface. Blur variables `--blur-sm` 8px and `--blur-xl` 24px exist for frosted surfaces like the translucent search field. Image cards sit flat with no shadow.

## Shapes

Measured radii are 2px, 8px, 20px, 48px and 9999.01px (stored as `pill`). The search field uses 48px on a 48px-tall control, which makes it a full capsule; the capture shows the call-to-action buttons as capsules too. Image tiles in the activity and Trending rails have slightly rounded corners in the capture; which of the small radii they use was not isolated. Border widths are tokenised as `--border-small` .0625rem, `--border-medium` .125rem and `--border-large` .25rem.

## Components

- **nav** — 80px transparent header with white 14px Inter text over the hero.
- **text-input** — search: #ffffff59 fill, white 16px text, 48px radius, 48px tall, 0 10px 0 48px padding (icon on the left).
- **link** — white 14px Inter link with a 1px inset white underline drawn as a box-shadow ("S/PLUS Members: Free Shipping and More").
- **activity tile / trending card** — tall photograph with a white Inter label at top left.
- **campaign panel** — full-bleed photo with a 32px uppercase salomonSansFont title, a 14px tagline and a white capsule "Shop Now" button.
- **service strip** — two cells divided by #d6d6d6 rules, each with an icon, 14px text and a chevron.
- **footer** — #000000 background; S/PLUS logo, "BECOME A MEMBER" subheading, white "Sign in" and "Learn more" capsules, then five link columns (Salomon, Help Center, Legal, Sustainability, Shipping).

## Design System Architecture

No public Salomon design system or brand-guideline page could be opened: the site returned HTTP 403 to WebFetch (recorded in SOURCES.json) and the captured footer (Who We Are, Press Center, Careers, Legal links) shows no design-system link. The shipped CSS on https://www.salomon.com/en-us shows the system is built on Tailwind v4 (`--tw-*` variables, `--container-*`, `--ease-*`) with a custom token layer: oklch colour ramps named by role (`accent`, `danger`, `information`, `success`, `warning`, `neutral`, each 0–1000), semantic aliases (`--color-background-primary/-secondary/-tertiary`, `--color-content-primary/-secondary/-tertiary/-disabled`), named line heights for a display/heading/body/caption scale plus `countdown` and `brand-condensed`, border widths and two font variables. Class names in the DOM are Tailwind utilities (`inset-x-3xs`, `max-h-[calc(100%-var(--spacing-x…`), so the tokens surface directly as utility names.

## Do's and Don'ts

- Do reserve salomonSansFont 700 uppercase for campaign and product headlines.
- Do set every functional label, link and paragraph in Inter.
- Do keep the UI neutral (#ffffff, #141414, #0f0f0f, #f5f5f5, #000000) and let photography carry colour.
- Do use white capsule buttons on photographs and on the black footer.
- Do pair each product headline with a one-line tagline.
- Don't use the accent or danger ramps decoratively; they are status colours in the shipped CSS.
- Don't add shadows to cards.
- Don't treat the geolocation dialog, its 8px card or its black "Thailand" button as brand components.

## Responsive Behavior

Not measured. The 390px mobile pass recorded no roles (no headline, body text, button or navigation) and no bands; it captured only 18px, 12px and 29px text, which matches a blocked or interstitial mobile render rather than the home page. The shipped stylesheet declares min-width breakpoints at 640px, 768px (the most used), 1024px, 1280px, 1536px and 1920px, plus max-width 896px, 767px and 425px. How the page applies them was not measured.

## Iteration Guide

1. Start with a full-bleed dark photograph and a transparent 80px header in white Inter.
2. Set the hero line in 42px salomonSansFont 700 uppercase with a 14px Inter subline.
3. Use 40px side margins and 4–24px gaps from the measured scale.
4. Build rails of tall image tiles with white top-left labels.
5. Use capsule shapes for search and buttons (48px and 9999px radii).
6. Close with a black S/PLUS member block before the link footer.
7. Keep every colour neutral unless it comes from photography.
8. Re-measure mobile before documenting phone layouts.
