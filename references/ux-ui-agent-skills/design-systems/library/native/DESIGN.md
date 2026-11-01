---
version: alpha
name: Native
category: "Architecture & Interiors"
description: "native.inc, the specialist insurance broker for crypto and emerging technologies: full-bleed colour blocks (orange #ff4d00, lime #dcf251, purple #6f57ff, pink #ffcbf1, charcoal #343434), Affairs serif display with Plain sans body, 4px radii, flat surfaces."
colors:
  canvas: "#ffffff"
  page-body: "#ffffff"
  ink: "#343434"
  surface-dark: "#343434"
  on-dark: "#ffffff"
  primary: "#ff4d00"
  surface-lime: "#dcf251"
  surface-purple: "#6f57ff"
  surface-pink: "#ffcbf1"
  surface-grey: "#fafafa"
  ink-3: "#ffffff50"
  ink-4: "#808080"
  ink-6: "#ccd4d6"
  hairline: "#e3e7e8"
typography:
  display:
    fontFamily: Affairs, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.48px"
  display-mobile:
    fontFamily: Plain, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: "-0.72px"
  heading:
    fontFamily: Affairs, sans-serif
    fontSize: 72px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-1.44px"
  subheading:
    fontFamily: Plain, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
    letterSpacing: "-2.4px"
  body:
    fontFamily: Plain, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  nav:
    fontFamily: Plain, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 16px
  s5: 21px
  s6: 30px
  s7: 32px
  s8: 40px
  s9: 64px
  s10: 84px
components:
  nav-link:
    textColor: "{colors.on-dark}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 32px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.ink-6}"
    padding: 16px
---

## Overview

native.inc presents Native, which describes itself as "the specialist insurance broker for crypto and emerging technologies". The tab title is "Welcome | Native | Insurance in tune with tech". The measured page is 1280px wide and 9,032px tall with 887 visible elements and `lang="en"`. Copy on the capture says the firm helps "crypto-native teams and financial institutions get insurance for digital asset risks", with "fully regulated Lloyd's-backed policies, onchain cover, or a mix of both", and that it unlocks liquidity for governments with large crypto balances.

The page is built from full-width colour blocks stacked down a long scroll. From the capture: an orange hero holding a large white geometric "N" cut-out; a pale grey intro band with a big serif statement and a dark "Speak to an expert" button; a white "What we do" band with a hairline above it and a two-column split (title left, copy right); a pink "Awards & Recognition" band with award badges; a charcoal testimonial band with a quote credit and arrow controls; a lime band with three numbered statements ("Regulated or Onchain", "Complex risks", "Tech defines us"); a light grey "Our clients" logo row (Cardano, Hedera and others); a purple band with three short columns; a grey band with white "Products" and "Services" cards; and an orange closing band with an outlined N, before a charcoal footer.

The brand relies on colour fields and a very large type scale instead of ornament. Photography is absent from the measured screens; imagery is the logo-derived N shape, award badges and client logos. Voice is plain, specific and confident, with short declarative headings.

A blue circular cookie-consent control sits at the lower left of the capture. It is page furniture, not brand UI, and the blue `#1093ff` it uses (measured on 2 area units) is excluded.

## Colors

Measured background colors by area: `#ffffff` (3,751), `#dcf251` (3,257), `#343434` (2,353), `#ff4d00` (1,849), `#e3e7e8` (1,767), `#6f57ff` (1,114), `#ffcbf1` (966), `#fafafa` (681). Text colors by character: `#343434` (5,459), `#ffffff` (1,563), `#ffffff50` (637), `#808080` (41), `#dcf251` (18), `#ccd4d6` (18), `#ff4d00` (7).

The extraction was run twice. The first pass resolved the canvas to pink `#ffcbf1` and the second (after removing the consent widget) to charcoal `#343434`, because the page has no single background. For this document the roles are set from the measured area and text counts: white `#ffffff` is the largest background area and `#343434` the most-read text color, so `canvas` is white and `ink` is charcoal; charcoal also appears as `surface-dark` with white `on-dark` text.

- **Primary orange `#ff4d00`** fills the hero and the closing band, and is the page's `--color-orange`.
- **Lime `#dcf251`**, **purple `#6f57ff`** and **pink `#ffcbf1`** are the three other full-width fields. The site's own variables name them `--color-yellow`, `--color-purple` and `--color-pink`.
- **Hairline `#e3e7e8`** is the grey band fill and the most frequent border color (261 elements); `#fafafa` is the pale intro band.
- **`#ffffff50`** is half-opaque white text on dark and colour fields; **`#ccd4d6`** is the footer text color; **`#808080`** is muted grey text.

The `:root` also defines `--color-salmon: #FFBA92`, `--color-green: #48F11E`, `--color-yellow-2: #EEFF42`, `--color-orange-2: #EB4519` and a grey scale; they exist in the CSS, but their placements were not measured, so they are not promoted to tokens. Hover was measured on the header links: opacity drops from 1 to 0.5, color stays white.

## Typography

Two families are loaded: Affairs and Plain (Plain regular, Plain italic and Plain at weight 600). By character count Affairs sets 4,290 characters and Plain 3,453. Every measured weight is 400. From the capture, Affairs is a high-contrast serif used for the hero tagline "Insurance in tune with tech" and the big intro statement; Plain is a grotesque sans for nav, section titles and body.

| Role | Family | Size | Line height | Letter spacing |
| --- | --- | --- | --- | --- |
| display (tagline) | Affairs | 24px | 24px | -0.48px |
| heading (intro statement) | Affairs | 72px | 72px | -1.44px |
| subheading (card titles) | Plain | 80px | 80px | -2.4px |
| body | Plain | 14px | 19.6px | normal |
| nav | Plain | 16px | 16px | normal |

The most used size is 32px (4,015 characters) with -0.64px tracking, then 14px, 12px, 48px, 18px, 56px, 72px, 80px, 24px and 16px. Tracking tightens as size grows (48px at -0.96px, 56px at -1.12px, 72px at -1.44px, 80px at -2.4px). The site exposes `--font-family-heading: Affairs` and `--font-family-body: Plain`.

## Layout

The header is 68px tall on desktop (`--header-height: 68px`; 52px on mobile). The "What we do" band splits into two halves (title left, copy right). Measured gaps: 16px (32), 8px (22), 32px (22), 120px (18), 64px (12), then 6px, 40px, 4px, 21px and 96px. Measured paddings: 16px (280 elements), 8px (260), 32px (21), 120px (8), and single 84px, 64px, 30px. The site's spacing variables are `--padding-xxs: 4px`, `xs: 8px`, `sm: 16px`, `md: 32px`, `lg: 64px`, `xl: 120px`, `xxl: 240px` and `xxxl: 300px`, matching those measurements.

## Elevation & Depth

Depth comes from colour blocks. The only box shadow measured is `rgba(255, 255, 255, 0.125) -1px 0px 0px 0px` (3 elements), a hairline divider on dark surfaces. No drop shadows were measured on cards.

## Shapes

Radii: 4px (264 elements), 50% (4), 2px (3), 8px (3). 4px is the working radius on buttons and small surfaces; 8px belongs to the white Products and Services cards, which also have 32px padding. The large white N shapes in the hero have rounded corners that are part of the artwork.

## Components

- **Header nav.** White Plain 16px links on the orange hero (Insurance products, Services, Industries, Partnerships with chevrons, Risk Collective, About, The Node), plus a white "Speak to an expert" button with dark text. Links fade to 50% opacity on hover.
- **Speak to an expert button.** Dark charcoal fill with white small text on the grey intro band and lime band, white fill on the orange header; the pixel size of the button was not isolated, so no button token is declared (`ctaPrimary` is null).
- **Card.** White fill, charcoal text, 8px radius, 32px padding, 80px title.
- **Award and client row.** Badges on pink, logos on pale grey.
- **Footer.** Charcoal `#343434`, `#ccd4d6` text, 16px padding, listing Company, Insurance products, Services, Industries, About and legal links.

## Design System Architecture

Native has no public design-system page that was opened. Its de-facto system is a set of CSS custom properties on `:root`: named colors (`--color-orange: #FF4D00`, `--color-yellow: #DCF251`, `--color-purple: #6F57FF`, `--color-pink: #FFCBF1`, `--color-black: #343434`, `--color-white: #FFFFFF`, a grey scale from `--color-grey-1: #FAFAFA` to `--color-grey-10: #F2F2F2`), a type scale (`--font-weight-regular: 400`, `--font-weight-bold: 600`), a padding ladder from `--padding-xxs` to `--padding-xxxl`, and header heights. Research: no brand guideline link was searched for; none was found in the measured data.

## Do's and Don'ts

Do:
- Use one full-width colour field per section: orange, lime, purple, pink, charcoal, white or grey.
- Pair Affairs for large statements with Plain for functional text, with negative tracking at large sizes.
- Keep surfaces flat and corners at 4px, using 8px only for the white cards.

Don't:
- Don't use drop shadows; none were measured on surfaces.
- Don't use the blue cookie widget color as a brand color.
- Don't invent a button token from the header button; it was not measured as a CTA.

## Responsive Behavior

The mobile pass recorded the h1-role text as Plain 24px, weight 400, line height 28.8px and tracking -0.72px (204px wide) and body text as Plain 14px with a 19.6px line height (341px wide). The header height variable for mobile is 52px. Other breakpoints, column stacking and nav collapse were not measured.

## Iteration Guide

1. Choose the section colour from the six fields, then set text to `#343434`, or white on orange, purple and charcoal.
2. Set big statements in Affairs with tracking tightening as size rises.
3. Space with the padding ladder (4, 8, 16, 32, 64, 120).
4. Keep radii to 4px and 8px.
5. Measure any new page before adding tokens: `node web/scripts/extract-tokens.mjs --slug=native--<page> --url=<url> --force --no-motion`.
