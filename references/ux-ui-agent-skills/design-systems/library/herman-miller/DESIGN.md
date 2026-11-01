---
version: alpha
name: Herman Miller
category: "Home & Furniture"
description: "Herman Miller's site (hermanmiller.com) is a bright, photo-led corporate system set entirely in FF Meta (served as 'Meta' at 400/500/700) with slight negative tracking: #252525 ink on #ffffff, a #ebebeb footer, the #e62b00 red circle-M logo as the only brand colour, 40px/52px bold white headlines over full-bleed photography, white 5px-radius 'Discover Now' buttons with a 4px white border that turn #ebebeb on hover, and a 1px #cccccc 5px-radius search field."

colors:
  primary: "#e62b00"
  canvas: "#ffffff"
  ink: "#252525"
  ink-secondary: "#4c4c4c"
  ink-tertiary: "#616161"
  ink-hover: "#464646"
  ink-nav: "#323131"
  ink-ghost: "#090807"
  on-photo: "#ffffff"
  surface-footer: "#ebebeb"
  surface-soft: "#fafafa"
  surface-blush: "#fff6f4"
  hairline: "#cccccc"
  button-light: "#ffffff"
  button-light-hover: "#ebebeb"

typography:
  display-hero:
    fontFamily: "Meta, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 52px
    letterSpacing: -0.5px
  display-hero-mobile:
    fontFamily: "Meta, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: -0.2px
  statement:
    fontFamily: "Meta, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 52px
    letterSpacing: -0.5px
  hero-copy:
    fontFamily: "Meta, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: -0.2px
  hero-copy-mobile:
    fontFamily: "Meta, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: -0.2px
  display-4:
    fontFamily: "Meta, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: -0.2px
  nav:
    fontFamily: "Meta, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 74px
    letterSpacing: -0.2px
  display-6:
    fontFamily: "Meta, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: -0.2px
  body:
    fontFamily: "Meta, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: -0.2px
  button:
    fontFamily: "Meta, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: -0.2px
  footer-link:
    fontFamily: "Meta, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 22px
  micro:
    fontFamily: "Meta, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.2px
  input:
    fontFamily: "Meta, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: -0.2px
  utility:
    fontFamily: "Meta, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
  button-small:
    fontFamily: "Meta, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 32px

rounded:
  none: 0px
  button: 5px
  circle: 50%

spacing:
  xs: 8px
  sm: 15px
  md: 16px
  lg: 32px
  xl: 48px
  btn-ghost-x: 56px
  page-x: 80px
  section: 96px

components:
  button-primary:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    border: "4px solid #ffffff"
    padding: 0px 32px
    height: 48px
    maxWidth: 266px
  button-primary-hover:
    backgroundColor: "{colors.button-light-hover}"
    border: "4px solid #ebebeb"
  button-ghost:
    backgroundColor: transparent
    textColor: "{colors.ink-ghost}"
    typography: "{typography.button-small}"
    rounded: "{rounded.button}"
    border: "1px solid #090807"
    padding: 0px 56px
    height: 32px
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "#000000"
    typography: "{typography.input}"
    rounded: "{rounded.button}"
    border: "1px solid #cccccc"
    padding: 10px 10px 10px 40px
    height: 40px
  carousel-arrow:
    backgroundColor: "{colors.button-light}"
    rounded: "{rounded.circle}"
    size: 48px
    shadow: "rgba(0, 0, 0, 0.3) 0px 0px 8px 0px"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 75px
  utility-bar:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.utility}"
  utility-link-hover:
    textColor: "{colors.ink-hover}"
  category-card:
    imageRadius: "{rounded.none}"
    titleTypography: "{typography.display-4}"
    titleColor: "{colors.ink}"
  hero:
    textColor: "{colors.on-photo}"
    titleTypography: "{typography.display-hero}"
    copyTypography: "{typography.hero-copy}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    headingTypography: "{typography.display-6}"
    linkTypography: "{typography.footer-link}"
    linkColor: "{colors.ink-secondary}"
---

## Overview

Herman Miller's homepage is a clean, confident corporate showroom: white canvas, very dark grey `#252525` type,
large photography, and one brand colour — the red `#e62b00` circle-M logo in the header. Every glyph is set in
**FF Meta** (served under the family name `Meta`), mostly bold, with a consistent slight negative tracking
(-0.2px at text sizes, -0.5px at 40px). Headlines are short statements in sentence case ("An expression of
modern collaboration", "At Herman Miller, we believe in the power of design to make things better for people.").

From the capture, top to bottom:

- A slim utility row: a flag icon and "Change Location" at left; "Where to Buy · Customer Service · Contact Us"
  centred, all 12px/500 `#4c4c4c`.
- The header: red circle-M + "HermanMiller" wordmark lockup (199×40), six bold 18px nav items (Products,
  Solutions, Resources, Knowledge, Stories, Work from Home) and a small outlined search field at right.
- A full-bleed hero carousel (a meeting room with black high-back office chairs around a long table) with left-aligned white text: 40px bold
  title, 24px regular copy, and a white 5px-radius "Discover Now" button; 48px white circular arrows sit at the
  left and right edges; pagination dots below.
- "Product Categories": four portrait photographs (258×343) in a row with 24px bold captions (Seating, Desks and
  Workspaces, Tables, Storage).
- A large 40px bold mission statement on white.
- A second full-bleed editorial feature (an illustrator's studio) with white headline, copy and a "Read the
  interview" button.
- A `#ebebeb` footer: grey M mark, five columns of 16px bold heads and 14px bold `#4c4c4c` links, a newsletter
  "Email sign up" ghost button and social icons.

The tone is warm and editorial: people in real studios and offices, natural light, mid-century furniture.

## Colors

### Brand & Accent

- **Herman Miller red `#e62b00`** — the logo fill (`.hm-logo-fill{fill:#E62B00;}` in the served SVG). The
  logo is the only place the red appears on the homepage; it is the brand accent, not an interactive colour.
  The stylesheets also contain `#e22d00`, which is not used for any rendered element measured on the homepage.

### Surface

- **Canvas `#ffffff`** — page background, header, buttons on photography.
- **Footer `#ebebeb`** — the full footer band; also the hover fill of the white button.
- **Soft `#fafafa`** and **blush `#fff6f4`** (the latter on the Seating page) — light panels.
- **Hairline `#cccccc`** — search border, inactive carousel dots.

### Text

- **Ink `#252525`** — headings, nav, captions, body.
- **Secondary `#4c4c4c`** — utility links, footer links; hover darkens slightly to `#464646`.
- **Tertiary `#616161`** — secondary product text on the Seating page.
- **Ghost `#090807`** — the outlined newsletter button text and border.
- **On photo `#ffffff`** — hero titles and copy.

## Typography

### Font Family

**FF Meta** by Erik Spiekermann; per Herman Miller's own story
[“That’s So Meta”](https://www.hermanmiller.com/stories/why-magazine/thats-so-meta/), it became the corporate
font in the late 1990s, introduced by Steve Frykholm, replacing Helvetica. The site loads `Meta` at 400, 500
and 700 and declares `FF Meta Headline W05`; icons come from `Material Icons`.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| display-hero | 40px | 700 | 52px | -0.5px | Hero titles over photography (white) |
| statement | 40px | 700 | 52px | -0.5px | Mission statement (`#252525`) |
| display-hero-mobile | 32px | 700 | 40px | -0.2px | Hero/statement at 390px |
| hero-copy | 24px | 400 | 36px | -0.2px | Hero supporting copy (20px/32px mobile) |
| display-4 | 24px | 700 | 32px | -0.2px | "Product Categories", card captions |
| nav | 18px | 700 | 74px | -0.2px | Main navigation (16px/21px mobile) |
| display-6 | 16px | 700 | 24px | -0.2px | Footer column heads |
| body | 16px | 400 | 26px | -0.2px | Paragraphs |
| button | 16px | 700 | 40px | -0.2px | White CTA button |
| footer-link | 14px | 700 | 22px | — | Footer links |
| micro | 14px | 400 | 24px | -0.2px | Copyright |
| input | 14px | 400 | 18px | -0.2px | Search field |
| utility | 12px | 500 | 18px | — | Utility row |
| button-small | 12px | 700 | 32px | — | Ghost "Email sign up" |

### Principles

- Bold (700) dominates: headings, nav, buttons and even footer links are bold; regular is for paragraphs.
- Negative tracking is part of the voice: -0.2px for nearly everything, -0.5px at 40px.
- Sentence case only; no uppercase labels.
- Class names map to a named scale: `text-display-4`, `text-display-6`, `text-micro-1`, `text-micro-bold-1`.

### Note on Font Substitutes

FF Meta is a commercial typeface (FF Meta® is a Monotype trademark). For a free substitute, choose a humanist
sans with open apertures and compare metrics before use; keep 700 for headings and the negative tracking.

## Layout

### Spacing System

Measured paddings: 8, 15, 16, 32, 48, 56, 96px. The content column starts 80px from the viewport edge at 1280px
(1120px wide). Footer columns end with 48px bottom padding; 96px separates major sections; nav items use 15px
side padding.

### Grid & Container

- Content: 1120px column centred (80px side margins at 1280px).
- Product categories: 4 equal columns of 258px images with gutters.
- Heroes break out to full bleed (1280px) with text aligned to the 80px content edge.
- Footer: logo mark + five columns (Herman Miller, For Business / For Healthcare, Get Help / Contacts, Shop,
  newsletter + Follow Us).

### Whitespace Philosophy

Comfortable rather than sparse: generous padding around the statement, tight 24px captions directly under
images, and photographs doing the visual work.

## Elevation & Depth

Mostly flat. Measured: `rgba(0, 0, 0, 0.3) 0px 0px 8px 0px` on the white circular carousel arrows. The
stylesheets also define soft card shadows (`0 4px 8px 0 rgba(37,37,37,.05)`, `0 8px 16px 0 rgba(37,37,37,.1)`)
that were not seen on the homepage elements measured.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Photographs, category images |
| button | 5px | Buttons, search field |
| circle | 50% | Carousel arrow buttons |

### Photography Geometry

Category images are portrait rectangles (258×343) with square corners; heroes are full-bleed landscape crops.

## Components

### Buttons

- **White CTA** (`.button-cta-white`): white fill, `#252525` 16px/700 label (line-height 40px), 4px white border,
  5px radius, `0px 32px`, 48px tall, max-width 266px. Hover: fill and border `#ebebeb`. Transition
  `background-color 0.1s, border-color 0.1s`. Used on photography.
- **Ghost** (`.button-cta-ghost`): transparent, 1px `#090807` border, `#090807` 12px/700 label, `0px 56px`,
  32px tall, 5px radius ("Email sign up").

### Cards & Containers

- **Category card**: portrait photo (0px radius) with a 24px/700 caption beneath, left-aligned.
- **Feature band**: full-bleed photograph with white title, copy and white CTA aligned left.

### Inputs & Forms

- **Search**: white, 1px `#cccccc` border, 5px radius, 40px tall, 14px/400 text, 40px left padding for the
  magnifier icon, placeholder "Search".

### Navigation

- **Utility row**: 12px/500 `#4c4c4c` links; hover `#464646`.
- **Main nav**: 18px/700 `#252525` labels in 75px-tall items (`li.tabs-nav-item`), no underline. A hover state
  was recorded on the anchors but its visual result was not verified, so it is not specified here.

### Carousel

48px white circular arrows with an 8px soft shadow, positioned at the hero's left and right edges; pagination
dots beneath (active `#252525`, inactive `#cccccc`).

### Signature Components

- The red circle-M lockup.
- Full-bleed photography with a white 5px-radius CTA.
- Bold FF Meta headings with negative tracking.

## Design System Architecture

Herman Miller publishes **no public digital design system** or token package (searches recorded in
SOURCES.json). Official identity sources found: the
[“That’s So Meta”](https://www.hermanmiller.com/stories/why-magazine/thats-so-meta/) story (FF Meta as corporate
font since the late 1990s) and the [served logo SVG](https://www.hermanmiller.com/content/dam/hmicom-application/icons/logos/hm-logo-caption.svg)
(fill `#E62B00`). Trade press reports a rebrand by the studio Order
([Interior Daily](https://www.interiordaily.com/article/9594815/herman-miller-revealed-first-rebrand-in-more-then-two-decades/)),
without published values. The de-facto system on the live site:

- **Tokens**: no CSS custom properties on `:root` (zero root variables measured); colours are literal values in
  utility classes (`text-white`, `text-gray-90`).
- **Type scale**: named utility classes — `text-display-4`, `text-display-6`, `text-micro-1`,
  `text-micro-bold-1`, `header-override`.
- **Components**: `button-cta-white`, `button-cta-ghost`, `tabs-nav-item`, `richText component section
  col-xs-12`, `paragraphSystem` — a column grid expressed as `col-xs-12` classes, with content assets served from
  `/content/dam/…`.
- **Theming**: one light theme; text colour flips to white over photography via `text-white`.
- **Accessibility (observed)**: buttons are 48px tall; carousel arrows 48px; a hover darkening on links.
- **Delivery**: no public npm package or Figma kit found. The footer states "Part of the MillerKnoll collective".

## Imagery & Voice

### Photography

- Real interiors photographed in daylight: a glass-walled meeting room with a long oak table and black
  high-back chairs in the hero; a home office with a black mesh task chair; a bright studio crowded with colourful
  illustrations for the editorial feature.
- People appear in their own spaces, candid rather than posed (the illustrator leaning on her desk).
- Product category images are lifestyle shots, not cut-outs on white.
- Text sits directly on the photograph in white; there is no scrim box behind it.

### Microcopy

- CTAs are short verb phrases in title case: "Discover Now", "Read the interview", "Email sign up".
- Headlines are statements, not slogans: "An expression of modern collaboration".
- The footer groups links by audience: "For Business", "For Healthcare", "Get Help", "Shop".

## Do's and Don'ts

### Do

- Use FF Meta (or a close humanist substitute) bold for headings, with -0.2px / -0.5px tracking.
- Keep `#252525` ink on white; use `#ebebeb` for the footer band.
- Use the red `#e62b00` only in the logo mark.
- Put white 5px-radius CTAs on photography, never coloured ones.
- Caption category images with 24px bold text directly below.
- Use full-bleed photography of real people and furniture in natural light.

### Don't

- Don't use red for buttons, links or backgrounds.
- Don't use uppercase or wide tracking.
- Don't round photographs.
- Don't add heavy shadows; only the carousel arrows carry one.
- Don't use pill shapes; buttons are 5px.
- Don't set headlines in a light weight.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px. At 390px: hero/statement 40px/52px → 32px/40px (-0.2px); hero copy 24px/36px →
20px/32px; nav labels 18px → 16px/21px; display-4 stays 24px/32px; buttons stay 48px tall.

### Touch Targets

CTAs 48px, carousel arrows 48px, search 40px, ghost button 32px.

### Collapsing Strategy

At 390px the footer links use the `mobile-navigation-footer-link` style (14px/700) and body paragraphs gain
`0px 12px` padding. Other layout re-arrangements were not measured.

### Image Behavior

Hero photographs stay full-bleed; category images keep their portrait ratio and square corners.

## Iteration Guide

1. White canvas, `#252525` text, FF Meta (or substitute) with -0.2px tracking.
2. Build the utility row (12px/500 `#4c4c4c`) and the header with the red circle-M logo and 18px bold nav.
3. Add a full-bleed hero with left-aligned white 40px/52px title, 24px copy and a white 5px CTA (hover `#ebebeb`).
4. Add four 24px-captioned portrait category images.
5. Add a 40px bold mission statement.
6. Close with the `#ebebeb` footer: 16px bold heads, 14px bold `#4c4c4c` links, ghost "Email sign up".
