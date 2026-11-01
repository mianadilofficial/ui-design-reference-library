---
version: alpha
name: Adyen
category: "Fintech & Crypto"
description: "Adyen home page (adyen.com), measured — white #ffffff and deep navy #001222 sections, Adyen green #00d16a buttons with navy text and 6px radius, warm grey #f6f5f4 and #f4f5f6 surfaces, the custom Adyen sans at 32px/484 for headlines and 16px/500 for UI, AdyenMono 12px uppercase labels, no shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#001222"
  ink: "#001222"
  primary: "#00d16a"
  on-primary: "#001222"
  surface-warm: "#f6f5f4"
  surface-cool: "#f4f5f6"
  ink-muted: "#636f7a"
  ink-on-dark-muted: "#ffffff8c"
  ink-on-dark-subtle: "#ffffff85"
  hairline: "#d1d5d8"
  chip-bg: "#ffffff0d"
  card-dark: "#2f3e4d"
typography:
  display:
    fontFamily: Adyen, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 484
    lineHeight: 37.76px
  display-mobile:
    fontFamily: Adyen, Helvetica, Arial, sans-serif
    fontSize: 30px
    fontWeight: 484
    lineHeight: 35.4px
  body:
    fontFamily: Adyen, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 496
    lineHeight: 26px
  button:
    fontFamily: Adyen, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 21.44px
  nav:
    fontFamily: Adyen, Helvetica, Arial, sans-serif
    fontSize: 16.1459px
    fontWeight: 400
    lineHeight: 26.1459px
  label-mono:
    fontFamily: AdyenMono, monospace
    fontSize: 12px
    fontWeight: 500
    lineHeight: 13.44px
    textTransform: uppercase
rounded:
  xs: 5px
  sm: 6px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 48px
  announcement-chip:
    backgroundColor: "{colors.chip-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.sm}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
  card-dark:
    backgroundColor: "{colors.card-dark}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 1px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-on-dark-subtle}"
---

# Adyen

## Overview

This file describes the Adyen home page at `https://www.adyen.com/` (title: "Adyen: Fintech platform for enterprises - Adyen"), measured at 1,280px and 390px.

The page alternates bright white sections and a deep navy that reads almost black, with Adyen green used sparingly for the primary action and small signals. A transparent header sits over the hero: the green Adyen wordmark at the left, links Products, Businesses we serve, About, Resources, Pricing, then search and account icons and a solid green "Contact us" button at the far right. The 1,080px hero is a dimmed photograph of a hand holding a phone near a payment terminal, with a centred dark announcement chip in monospace capitals ("THE STATE OF SMB PAYMENTS 2026 — GET THE INSIGHTS"), the white headline "Fintech you can bank on", a two-line grey subline and a green "Talk to our team" button; a strip of customer logos (Toast, OpenAI, lululemon, Oracle, Spotify, Uniqlo) runs along the bottom edge. Below, the white section "Run your business with confidence." uses a two-tone headline — the first sentence in navy, the continuation in grey — followed by staggered light-grey cards ("Compliance you can trust", "Enterprise-grade reliability"). A long navy section, "Control every aspect of your money", shows thin-line 3D wireframe illustrations (a globe, stacked layers) and a dark product card list. Then come an industries accordion beside a terminal photograph, a "Global scale. Local expertise." statistics table with very large figures (€1,400,000,000,009, 99.999%, 150+, 200+, 29) and monospace labels, a warm-grey customer stories grid (Prada, Vagaro, Nord Security, L'Occitane, Meta, Rocksolid), a full-width green call-out "If you're building for scale, there's no alternative", and a navy footer.

The voice is short, declarative and confident. The two-tone headline device — a navy statement followed by a grey qualifier — repeats in every section.

## Colors

- **Canvas `#ffffff`** — white sections (`--color-black-000`, aliased `--main-surface`).
- **Navy `#001222`** — `--color-black` / `--color-black-3200`. It is both the largest background by area (6,670 units: the product section and footer) and the main text colour on white (1,433 characters). Here it is the `ink` and `page-largest` token.
- **Primary `#00d16a`** — Adyen green, `--color-green` / `--color-green-900`. Fills "Contact us", "Talk to our team" and the closing call-out band (1,630 area units), and colours monospace labels on dark ground.
- **On-primary `#001222`** — button text on green is navy, not white.
- **Surface warm `#f6f5f4`** — the customer stories section background (2,338 units).
- **Surface cool `#f4f5f6`** — `--color-black-100`, the light cards under "Run your business with confidence".
- **Ink muted `#636f7a`** — `--color-black-1800`, the grey continuation in two-tone headlines and secondary text.
- **Ink on dark muted `#ffffff8c`** and **ink on dark subtle `#ffffff85`** — translucent white for sublines on the hero and footer links.
- **Hairline `#d1d5d8`** — `--color-black-500`, the row dividers in the statistics table and accordion.
- **Chip background `#ffffff0d`** — the 5% white fill of the hero announcement chip.
- **Card dark `#2f3e4d`** — `--color-black-2500`, the product card in the navy section.

Other declared greens: `--color-green-1400: #00a152` and `--color-green-1800: #007f41` (success feedback).

## Typography

Two custom fonts are loaded, both variable from 400 to 700: **Adyen** (2,315 characters) and **AdyenMono** (299 characters), declared as `--font-mono: "AdyenMono", monospace`. The variable axis lets the site use non-standard weights; measured weights are 500, 484, 400, 496, 452 and 436.

- **Display — Adyen 32px / 484 / 37.76px.** Every section headline ("Fintech you can bank on", "Run your business with confidence."). 32px carries 487 characters.
- **Body — Adyen 20px / 496 / 26px.** The hero subline and section intros.
- **Button — Adyen 16px / 500 / 21.44px.** 16px is the most common size (1,329 characters).
- **Nav — Adyen 16.1459px / 400 / 26.1459px.**
- **Label mono — AdyenMono 12px / 500 / 13.44px, uppercase.** The announcement chip, card eyebrows, statistic labels and footer column heads.

The statistic figures are set at 80px (35 characters) and 64px (52 characters); weights 436 and 452 occur on exactly those character counts. No letter-spacing is applied anywhere. The CSS sets `--base-font-size: .9375rem` (15px).

**Substitute:** Adyen and AdyenMono are proprietary. The CSS falls back to Helvetica and Arial for the sans and to the system monospace for the mono.

## Layout

The desktop page measured 10,967px tall. Bands: the hero media (1,080px, content between x=376 and x=904, centred), a white section (3,222px), a media band, a short white band, and a navy section (5,850px, two columns) that holds the product story, industries, statistics, stories and footer regions as rendered in the capture. Gaps are dominated by 24px (93) and 6px (90), then 8px (52) and 12px; large spacers of 48px, 70px, 192px and 362px separate content blocks. Section paddings include 24px (57), 240px, 192px, 144px and 64px — the page is very airy, with headlines often floating alone in a wide white field. Desktop headers show 4 visible links plus a "Products" menu trigger.

## Elevation & Depth

No box-shadows were measured. Depth comes from colour — navy versus white versus warm grey — and from the dimmed hero photograph with translucent navy overlays (`#00284973`, `#00244480`, `#00000072`). The wireframe illustrations in the navy section are drawn with thin white lines, keeping everything flat.

## Shapes

Two radii: 6px (66 elements; `--radius-m`) and 5px (3; `--base-radius`). Buttons, chips, cards, nav items and inputs all use 6px. The CSS also derives `--radius-s: calc(6px/2)` and `--radius-l: calc(6px*4)`. Light content cards in the white section read square in the capture.

## Components

- **Primary button** — green `#00d16a` fill, navy `#001222` Adyen 16px/500 label, 48px tall, `0 16px` padding, 6px radius. "Contact us" (header) and "Talk to our team" (hero) are identical. Measured focus: a `1px solid` near-white outline offset by 4px.
- **Announcement chip** — 5% white fill, 6px radius, AdyenMono 12px uppercase in green followed by a short rule and a white second label.
- **Navigation** — white Adyen 16px links over the hero. Measured hover turns the link text navy (`#001222`/`#041626`).
- **Dark product card** — `#2f3e4d`, white text, monospace eyebrow ("INTELLIGENT MONEY MOVEMENT"), title, link and a list of sub-items divided by lines.
- **Statistics row** — monospace uppercase label at the left, very large figure right-aligned, `#d1d5d8` hairline between rows.
- **Accordion** — industry rows with plus icons, the open row showing a short paragraph and "See more →".
- **Footer** — navy, AdyenMono 12px uppercase headings, translucent white links.

## Design System Architecture

Adyen's press kit at `https://www.adyen.com/press-and-media/presskit` (linked from `https://www.adyen.com/press-and-media`) publishes logo assets through a brand portal (`brand.adyen.com`) and these logo rules: "Our logo is always placed two Adyen a's away from the edge"; "On white backgrounds, the Adyen logo is placed in green"; "When the logo is used on solid green, gradient or image, it should appear in white"; "On dark backgrounds, our logo is always placed in green"; "In most applications our logo is placed bottom left." It does not publish colour values or typeface names, and the brand portal's landing page returned only a title to the fetcher. The shipped CSS shows the token architecture: numbered palette ramps (`--color-black-100` … `--color-black-3200`, `--color-green-900/1400/1800`, red and yellow ramps), opacity companions (`--color-white-1800-opacity: 39.3%`), semantic aliases (`--main-surface`, `--feedback-success-primary`, `--feedback-error-primary`), radius tokens derived from one 6px base, font-weight tokens (normal 400, medium 500, semibold 600, bold 700) and Tailwind `--tw-*` utilities.

## Do's and Don'ts

**Do**
- Use green `#00d16a` with navy text for the primary action.
- Write headlines as two tones: a navy statement, then a `#636f7a` continuation.
- Use AdyenMono uppercase for small labels and eyebrows.
- Alternate white, navy `#001222` and warm grey `#f6f5f4` sections with lots of empty space.
- Keep radii at 6px and avoid shadows.
- Place the logo in green on white or dark backgrounds, in white on green or images (press kit rule).

**Don't**
- Don't put white text on the green button.
- Don't use bold weights; headlines sit near 484.
- Don't use pure black; navy `#001222` is the dark.
- Don't add drop shadows or large radii.

## Responsive Behavior

Measured at 390px: the hero headline is Adyen 30px/484/35.4px, and every section headline drops from 32px to 30px. The primary button shrinks to 40px tall with 15px text and `0 12px` padding. The header shows 1 visible link and a menu toggle labelled "Open Menu". Mobile font sizes by frequency: 15px, 30px, 18.75px, 11.25px, 22.5px, 45px, 16px and 52.5px — the body and labels scale to 15px and 11.25px, and the statistics to 45px and 52.5px. Recorded bands: hero media, grey photo bands, a white single-column section, the navy section (1,597px) and a long white section (3,824px). The widest mobile grid measured five columns (the logo strip). Breakpoint widths: not measured.

## Iteration Guide

1. Start with white and navy `#001222` sections and the Adyen sans at 16px/500.
2. Add a transparent header with white links and a green 48px "Contact us" button.
3. Build a dimmed full-bleed hero with a monospace chip, a 32px/484 white headline and a green button.
4. Write each section headline in two tones and give it a wide empty margin.
5. Use 6px-radius cards: `#f4f5f6` on white, `#2f3e4d` on navy.
6. Present numbers as large right-aligned figures with monospace labels and hairlines.
7. End with a full-width green call-out and a navy footer.
