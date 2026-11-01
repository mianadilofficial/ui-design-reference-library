---
version: alpha
name: Unilever
category: "Beauty & Personal Care"
description: "Unilever Global (unilever.com) pairs its proprietary UnileverDesire typeface with Unilever Sky blue #0066cc for headings and buttons, Earth #f6f7f0 and white bands, Stone #4d4b46 body text, Night #133062, half-pill buttons (0 32px 32px 0) and 16px cards with sweeping 64px corner curves."
colors:
  canvas: "#ffffff"
  earth: "#f6f7f0"
  ink: "#4d4b46"
  primary: "#0066cc"
  on-primary: "#ffffff"
  primary-hover: "#004d99"
  night: "#133062"
  water: "#23e7ff"
  sky-mid: "#47a3ff"
typography:
  display:
    fontFamily: UnileverDesire, "Century Gothic", CenturyGothic, AppleGothic, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: "-0.56px"
  subheading:
    fontFamily: UnileverDesire, "Century Gothic", CenturyGothic, AppleGothic, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 25px
    fontWeight: 700
    lineHeight: 30px
    letterSpacing: "-0.5px"
  subheading-mobile:
    fontFamily: UnileverDesire, "Century Gothic", CenturyGothic, AppleGothic, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 700
  body:
    fontFamily: UnileverDesire, "Century Gothic", CenturyGothic, AppleGothic, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: UnileverDesire, "Century Gothic", CenturyGothic, AppleGothic, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 600
    lineHeight: 22.5px
  tab:
    fontFamily: UnileverDesire, "Century Gothic", CenturyGothic, AppleGothic, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  utility:
    fontFamily: UnileverDesire, "Century Gothic", CenturyGothic, AppleGothic, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
rounded:
  none: 0px
  xs: 8px
  sm: 16px
  md: 32px
  button: "0px 32px 32px 0px"
  curve: 64px
  curve-lg: 120px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 48px
  s9: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 8px 0px 0px
    height: 46px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    borderColor: "{colors.primary-hover}"
  button-inverse:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
  tab:
    backgroundColor: "{colors.earth}"
    textColor: "{colors.primary}"
    typography: "{typography.tab}"
  tab-active:
    backgroundColor: "{colors.night}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tab}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.on-primary}"
    typography: "{typography.utility}"
  footer:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 16px 0px 0px
---

## Overview

Unilever Global (unilever.com, page title "Unilever Global | Unilever", measured at 1280px and 390px) is a corporate site for a consumer-goods group whose house brands include Dove, Axe, Vaseline, TRESemmé, Knorr, Clear and Comfort. The tagline on the page is "The world's best-known brands creating Desire at Scale", and the system is built around that idea: one bespoke typeface named UnileverDesire, one strong blue, and a soft off-white ground.

The page reads as a long, rhythmic scroll that alternates three grounds: **Unilever Sky** blue `#0066cc`, **Earth** off-white `#f6f7f0`, and white. Each section starts with a small eyebrow label (Business Groups, Unilever LinkedIn, Innovation, Investors, Sustainability, Marketing, Careers), followed by a 28px bold blue (or white, on blue) heading and one supporting line. Sections then end in a large curved corner — the signature shape of the site — so each band appears to scoop into the next.

Photography is warm, close and people-centred: a woman applying body cream, a man in a hoodie, a burger, product packshots, wind turbines, lab workers. Imagery sits in 16px-radius cards. The tone of voice is confident corporate marketing ("Market-making, culture-creating, future-shaping. Every day.").

In the capture the top hero is an autoplaying video loop that rendered as a blank Earth-coloured area with only its play/transcript controls visible; it is not documented as a design element.

## Colors

The site ships a named brand palette as CSS custom properties (`--color-brand-*`). Colours used on the home page:

- **Sky `#0066cc`** (`primary`, `--color-brand-sky`, also `--heading-color`) — the largest background area on the page (full-width blue bands), all section headings on light grounds, links, buttons. It is also the most-read text colour by character count (2,782).
- **Sky dark `#004d99`** (`primary-hover`, `--color-brand-skydark`) — measured on the Menu button after hover.
- **Earth `#f6f7f0`** (`--color-brand-earth`) — the body background and the "Latest news" and "Connect with us" bands.
- **Cloud `#ffffff`** (`canvas`) — the brands, investors and marketing sections and every card.
- **Stone `#4d4b46`** (`ink`, `--color-brand-stone`) — paragraph copy, footer text and form input text (`--form-input-color`).
- **Night `#133062`** (`--color-brand-night`) — the active tab ("Science") in the innovation module and the final footer band.
- **Water `#23e7ff`** (`--color-brand-water` / `aquamid`) — 214 characters of text and 7 borders; a bright cyan accent used on blue grounds.
- **Sky mid `#47a3ff`** — one measured border.

The custom properties declare a much larger family (Clover greens, Lilac purples, Rose pinks, Sorbet oranges, Magma reds, Aqua teals, each with pale/light/mid/dark steps) that the home page does not render in text or surfaces; the brand-tile row also measured a set of muted tints (`#c9c6b8`, `#becfb9`, `#d0c1b0`, `#90bccc` and others) as card backgrounds.

## Typography

One family carries everything: **UnileverDesire** (loaded at 400, 600 and 700), with a fallback stack of Century Gothic, CenturyGothic, AppleGothic and system sans fonts — the root variable `--font-family-unilever-desire` declares exactly that pairing. UnileverDesire is proprietary; Century Gothic is the substitute the site itself names.

| Role | Size / line-height | Weight | Letter-spacing |
| --- | --- | --- | --- |
| Section heading (h2) | 28px / 32px | 700 | -0.56px |
| Card heading (h3) | 25px / 30px | 700 | -0.5px |
| Body | 16px / 24px | 400 | normal |
| Tab | 16px / 24px | 600 | normal |
| Button | 15px / 22.5px | 600 | normal |
| Utility / header | 14px / 21px | 600 | normal |

Headings carry `--heading-letter-spacing: -0.02em` (every measured letter-spacing is -2% of its size: 54px/-1.08px, 42px/-0.84px, 28px/-0.56px, 25px/-0.5px, 16px/-0.32px, 14px/-0.28px). The root variables define a heading scale: mega 4.6875rem (75px), giant 3.375rem (54px), h1 2.625rem (42px), h2 1.75rem (28px), h3 1.25rem (20px), h4 1rem (16px). On the page, 54px and 42px appear in the Careers statement.

## Layout

The measured desktop page is 1,280px wide and 8,202px tall. Content sits between x=48 and x=1216 in the white brand band, which holds a 4-column card grid (maximum card columns measured: 4). The most common gap is 32px (25 times), then 8px; padding is dominated by 16px (116 times), then 48px, 8px and 168px.

Section sequence in the capture:

1. Header — white Unilever script logo at left and a blue "Menu" button at right; only 2 header links visible at desktop and the menu toggle is shown.
2. Video hero on Earth.
3. Business Groups — white band, heading, 4 cards (Beauty & Wellbeing, Personal Care, Home Care, Foods), then a blue strip of brand logos.
4. A large blue band, then "On social media" — a horizontal carousel of LinkedIn post cards with Previous/Next controls.
5. Latest news — Earth band, 3-column news cards with a small "News article" tag, then a centered "View all News" button.
6. Innovation — blue band containing a white panel with copy and a product image, and a three-tab bar (Science active in Night, Technology, Insights).
7. Investors — share prices for London, Amsterdam and New York, a "More share price information" outlined link, two story cards and a Quick links list.
8. Sustainability — blue band, 4 cards (Climate, Nature, Plastics, Livelihoods).
9. Marketing — a carousel of campaign cards.
10. Careers — blue band with a large white statement, two buttons and a photo.
11. Connect with us / Contact us — Earth band; then a Night footer with link rows and an accessibility badge.

## Elevation & Depth

The site is flat. The only measured box-shadows are 1px underlines drawn with shadows: `rgb(255, 255, 255) 0px 1px 0px 0px`, `rgb(0, 102, 204) 0px 1px 0px 0px` and `rgb(246, 247, 240) 0px 1px 0px 0px` — 1px hard offsets in white, Sky and Earth. Hierarchy comes entirely from colour blocking — white cards on blue, blue bands on Earth — and from the curved section corners.

## Shapes

Shape is the most distinctive part of this system:

- **Curved section corners** — `0px 0px 64px` (40 elements) rounds only the bottom-right corner by 64px; `0px 0px 120px` (8) does the same at 120px; `0px 0px 0px 64px` rounds the bottom-left.
- **Cards** — 16px all round (34 elements); some use `16px 16px 64px` (10), combining the card radius with the 64px signature curve.
- **Buttons** — `0px 32px 32px 0px` (14): square on the left, a 32px half-pill on the right. Root variables state `--button-radius: 0` and `--radius-3: 2rem`, and form inputs use `--form-input-radius: var(--radius-3)` (32px).
- **Small radius** — 8px (`--radius-1`), on the video transcript button.
- One `50% 0px` and one `32px 0px 0px 32px` (the mirrored half-pill).

## Components

- **Primary button** ("View all News", "Contact us") — Sky `#0066cc` fill and border, white UnileverDesire 15px/600, 46px tall, radius `0px 32px 32px 0px`, padding 0px 8px 0px 0px. Hover (measured on the Menu button, same shape) changes fill and border to `#004d99`.
- **Inverse button** ("Experience life") — white fill, Sky text, same shape; used on blue bands.
- **Tabs** — 16px/600; inactive tabs on Earth with Sky text, the active tab in Night `#133062` with white text.
- **Card** — white article, 16px radius, image on top, 25px/700 Sky heading with -0.5px tracking, Stone body copy.
- **Section heading block** — small eyebrow, 28px/700 heading in Sky (or white on Sky), one 16px line beneath.
- **Carousel controls** — Previous/Next pill buttons under LinkedIn and Marketing carousels.
- **Footer** — Stone 16px text with 16px top padding; final band in Night.

## Design System Architecture

No official Unilever design-system documentation could be opened: https://www.unilever.com/about/ returned HTTP 403 to the fetch tool (recorded in SOURCES.json). The shipped CSS, however, exposes a structured token layer of 400 root custom properties:

- **Colour**: `--color-brand-{name}` with `-pale`, `-light`, `-mid`, `-dark` steps and `-rgb` / `-rgb-raw` / `-id` variants (Sky, Night, Earth, Cloud, Stone, Pebble, Abyss, Water, Aqua, Clover, Lilac, Rose, Sorbet, Magma), plus social colours (`--color-social-twitter`, `--color-social-instagram`).
- **Type**: `--font-family-unilever-desire`, `--font-family-locale`, and a heading scale (`--heading-mega/giant/1/2/3/4-font-size`, matching line-heights, `--heading-*-letter-spacing: -0.02em`, `--heading-color`, `--heading-display-color`).
- **Space**: `--space-base: 0.25rem` with numbered steps (`--space-7: 1.75rem`, `--space-16: 4rem`).
- **Radius**: `--radius-1` 0.5rem, `--radius-2` 1rem, `--radius-3` 2rem, `--button-radius: 0`.
- **Layout containers**: `--contain-compact: 40.25rem`, `--contain-extra-compact: 30rem`.
- **Forms**: `--form-input-*`, `--form-file-*` (hover background `#004D99`).

The naming (brand colour names rather than functional names, 4px spacing base) is the de-facto system.

## Do's and Don'ts

**Do**
- Set all text in UnileverDesire with Century Gothic as the fallback; headings bold with -0.02em tracking.
- Alternate Sky, Earth and white bands; put white cards on Sky.
- Finish sections and feature cards with the 64px (or 120px) single-corner curve.
- Use the half-pill button (`0 32px 32px 0`) in Sky on light grounds and white on Sky.
- Lead each section with a short eyebrow and a one-line heading.

**Don't**
- Don't add drop shadows; the system uses colour blocks and 1px hard-offset shadows only.
- Don't round all four corners of a button; the left edge stays square.
- Don't use the secondary palette (Clover, Lilac, Rose, Sorbet, Magma) for UI chrome on the home page — it is declared but not rendered there.
- Don't set body copy in blue; long text is Stone `#4d4b46`.
- Don't use letter-spacing other than -0.02em on headings.

## Responsive Behavior

Measured at 390px:

- The header shows 2 links and the "Menu" toggle — the same counts as desktop, where the menu toggle is also used.
- Section headings stay at 28px/700 (unchanged from desktop); the most-used mobile size is 20px (card headings at 20px/700), against 25px on desktop.
- Maximum card columns measured 3 on mobile (carousels) versus 4 on desktop.
- Content spans x=40 to x=350 in most bands (x=24 to x=366 in the Connect band).
- The band sequence measured on mobile: Sky "On social media" band, Earth "Latest news" (2,274px), Sky innovation band, white investors band (1,751px), Sky sustainability band (2,760px), Earth marketing intro, Sky careers band, Earth contact band, and a Night `#133062` footer (562px).

Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Start with Earth `#f6f7f0` or white, Stone `#4d4b46` body text at 16px/24px, and UnileverDesire.
2. Add a section heading at 28px/700 in Sky with -0.56px tracking, preceded by a 14px eyebrow.
3. Lay content in a 4-column grid of white 16px-radius cards with 32px gaps.
4. Close the section with a 64px bottom-right curve before the next band.
5. Add one half-pill Sky button (15px/600, 46px tall); darken to `#004d99` on hover.
6. For a feature or careers moment, switch the band to Sky and set the type white; use the inverse white button.
7. Pull any new colour from the `--color-brand-*` set rather than inventing one; check it against the rendered page before adding it as a token.
