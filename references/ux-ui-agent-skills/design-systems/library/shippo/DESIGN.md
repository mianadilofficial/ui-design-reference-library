---
version: alpha
name: Shippo
category: "Logistics & Mobility"
description: Shippo (goshippo.com), the multi-carrier shipping software and API, runs its marketing site on a saturated mint-green canvas (#25d695) with a deep teal action color (#00484e), black text, Rethink Sans 700 headlines (64px hero, 48px sections) over neue-haas-unica body copy (24px/32px lead, 600 buttons), 8px-radius buttons 56–60px tall, and flat green cards outlined with a 3px black border that echo its bold-outline illustration style.

colors:
  primary: "#00484e"
  on-primary: "#ffffff"
  canvas: "#25d695"
  ink: "#000000"
  ink-soft: "#1c1c1c"
  ink-body: "#1c212b"
  card-green: "#09c68d"
  aquamarine: "#abf4c3"
  white: "#ffffff"
  select-text: "#222222"
  muted: "#838383"
  pricing-canvas: "#ffedbc"
  pricing-footer: "#ffe18a"
  floral-white: "#fffbf0"
  outline: "#000000"
  green-cyan: "#26d990"
  mountain-meadow: "#1dc982"
  deep-green-cyan: "#17826d"
  perano: "#b2b2ff"
  salmon: "#ff8077"
  dark-purple: "#7540bf"
  ripe-mango: "#ffc624"
  cool-grey-80: "#112229"

typography:
  display-xl:
    fontFamily: "\"Rethink Sans\", sans-serif"
    fontSize: 64px
    fontWeight: 700
    lineHeight: 80px
    letterSpacing: normal
  display-xl-mobile:
    fontFamily: "\"Rethink Sans\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  display-lg:
    fontFamily: "\"Rethink Sans\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  heading-md:
    fontFamily: "\"Rethink Sans\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading-md-mobile:
    fontFamily: "\"Rethink Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  lead-xl:
    fontFamily: "neue-haas-unica, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 40px
  lead:
    fontFamily: "neue-haas-unica, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: "neue-haas-unica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-roboto:
    fontFamily: "Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  label-strong:
    fontFamily: "neue-haas-unica, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button-lg:
    fontFamily: "neue-haas-unica, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 20px
  button-md:
    fontFamily: "neue-haas-unica, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px

rounded:
  sm: 5px
  md: 8px
  lg: 24px
  round: 100px

spacing:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 20px
  xl: 28px
  xxl: 32px
  gutter: 30px
  section: 64px

components:
  button-primary-lg:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.md}"
    padding: 20px
    height: 60px
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    border: "2px solid #00484e"
    padding: 16px
    height: 56px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    border: "2px solid #000000"
    padding: 16px
    height: 56px
  link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.label-strong}"
    textDecoration: underline
  card-audience:
    backgroundColor: "{colors.card-green}"
    textColor: "{colors.ink-body}"
    typography: "{typography.lead}"
    rounded: 0px
    border: "3px solid #000000"
    padding: 30.08px 22.4px 22.08px
  select-pricing:
    backgroundColor: "{colors.white}"
    textColor: "{colors.select-text}"
    typography: "{typography.body-roboto}"
    rounded: "{rounded.sm}"
    padding: 11.2px 11.2px 11.2px 16px
    height: 46px
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 89px
    padding: 0px 30px
  footer:
    textColor: "{colors.ink-body}"
    typography: "{typography.body-roboto}"
    padding: 0px 30px 64px
  footer-pricing:
    backgroundColor: "{colors.pricing-footer}"
    textColor: "{colors.ink-body}"
    typography: "{typography.body-roboto}"
    padding: 0px 30px 64px
---

## Overview

Shippo's marketing site (measured at https://goshippo.com/, title "Best Multi-Carrier Shipping Software for Businesses | Shippo") is loud, flat and friendly. The whole page sits on a saturated mint green (`{colors.canvas}` #25d695, the site's own `--medium-aquamarine`), with black type, a deep teal action color (`{colors.primary}` #00484e, `--dark-slate-grey`), and illustrations drawn with heavy black outlines.

The hero is a two-column split: a very large left-aligned Rethink Sans headline ("Your one-stop solution for shipping", 64px / 700 / 80px line height, three lines at 523px wide), a 30px neue-haas-unica paragraph, a large teal "Get started" button (60px tall, 24px label), and an underlined "Contact an expert" link. On the right, stacked carrier "discount tickets" (USPS, UPS, DHL with "68% OFF", "$7.46") sit on hard offset shadows, plus a floating "Ask Shippo" chat bubble.

Below the hero, three audience cards ("Small businesses", "High volume shippers", "Software providers") in a slightly darker green (`{colors.card-green}` #09c68d) are outlined with a 3px black border and square corners — the outline is the system's signature shape. Each card has an outlined illustration, centred 24px copy, a teal button and an underlined link.

The next band switches to pale aquamarine (`{colors.aquamarine}` #abf4c3) with a thin grid-paper pattern, carrier and store logos in circles linked by dotted lines, and a centred 48px headline. Testimonials follow back on the mint canvas, again in black-outlined boxes.

Shippo's own October 2024 rebrand post (https://goshippo.com/blog/shippos-new-brand-look) describes exactly this: "an illustration style that intentionally feels approachable and simple. We use bold, black outlines and fresh colors to give our brand the sense of visual clarity", with founders responding to "the approachable bright colors" of one concept and "the focus on merchants" of another.

**Key Characteristics:**
- Mint canvas `{colors.canvas}` #25d695 fills the page; the pricing page uses a butter yellow (`{colors.pricing-canvas}` #ffedbc) instead.
- One action color: teal `{colors.primary}` #00484e with white text.
- Headlines in Rethink Sans 700, normal letter spacing; body and buttons in neue-haas-unica.
- Large, generous body type: the most-used size is 24px (lead copy), not 16px.
- 8px-radius rectangular buttons, 56px or 60px tall.
- Square cards with a 3px solid black outline, no shadow, no radius.
- Text is pure black #000000 (most-read color) with #1c1c1c for headings.

## Colors

All values measured on https://goshippo.com/ and https://goshippo.com/pricing (computed styles and `:root` custom properties). Names in parentheses are the site's own CSS variables, which are descriptive color names rather than semantic roles.

### Brand & Accent
- **Primary teal** `{colors.primary}` #00484e (`--dark-slate-grey`) — fill and 2px border of every filled button.
- **On primary** `{colors.on-primary}` #ffffff.
- **Mint canvas** `{colors.canvas}` #25d695 (`--medium-aquamarine`) — the page background (body background and largest area).
- **Card green** `{colors.card-green}` #09c68d (`--medium-sea-green`) — audience cards.
- **Aquamarine** `{colors.aquamarine}` #abf4c3 (`--aquamarine`) — the grid-paper partners band.
- Further declared brand hues (in `:root`, used by illustrations and other pages): `{colors.green-cyan}` #26d990 (`--green-cyan`), `{colors.mountain-meadow}` #1dc982, `{colors.deep-green-cyan}` #17826d (`--deep-green-cyan-turquoise`), `{colors.perano}` #b2b2ff, `{colors.salmon}` #ff8077, `{colors.dark-purple}` #7540bf, `{colors.ripe-mango}` #ffc624, `{colors.cool-grey-80}` #112229.

### Surface
- **Canvas** `{colors.canvas}` #25d695 — homepage.
- **Pricing canvas** `{colors.pricing-canvas}` #ffedbc (`--blond`) — body background of /pricing.
- **Pricing footer** `{colors.pricing-footer}` #ffe18a (`--crayola`) — footer on /pricing.
- **Floral white** `{colors.floral-white}` #fffbf0 (`--floral-white`) — panels on /pricing.
- **White** `{colors.white}` #ffffff — the pricing tier select box.

### Text
- **Ink** `{colors.ink}` #000000 — the most-read text color (h1, lead paragraphs, nav links, outlined button).
- **Ink soft** `{colors.ink-soft}` #1c1c1c (`--blacklight`) — h2 and section headings, underlined links.
- **Ink body** `{colors.ink-body}` #1c212b — the Roboto base text color of `body`, audience-card text and the footer.
- **Select text** `{colors.select-text}` #222222 — pricing select.
- **Muted** `{colors.muted}` #838383 (`--old-silver`) — small secondary text on /pricing.

### Lines
- **Outline** `{colors.outline}` #000000 — 3px card borders and 2px outlined-button borders (most frequent border color, 12 uses on the homepage).

### Color Principles
The palette is a set of flat, fully saturated fills with black line work on top. There are no gradients and no tints derived by opacity on the measured pages. Each page gets its own canvas hue (mint for the homepage, butter yellow for pricing) while the teal button and black outlines stay constant.

## Typography

### Font Family
Three families are used for text on the homepage:
- **Rethink Sans** (served as `"Rethink Sans", sans-serif`) — all h1/h2 headlines, weight 700. Rethink Sans is an open-source (OFL) variable sans by Hans Thiessen, weight axis 400–800, added to Google Fonts in 2023 (google/fonts METADATA: https://raw.githubusercontent.com/google/fonts/main/ofl/rethinksans/METADATA.pb).
- **neue-haas-unica** (served as `neue-haas-unica, sans-serif`) — lead copy, buttons, links, nav labels. Neue Haas Unica is a Monotype typeface designed by Toshi Omagari, distributed through Adobe Fonts (https://fonts.adobe.com/fonts/neue-haas-unica); the site loads weights 400 and 600.
- **Roboto** (`Roboto, sans-serif`) — the `body` default (16px / 26px), used in the footer and in some Webflow-default text.

Character share on the homepage: neue-haas-unica 2231, Rethink Sans 1411. The site also loads Funnel Display, Source Code Pro, Courier Prime, Inter, lft-etica, lft-etica-sheriff and indivisible faces that were not observed in homepage text.

### Hierarchy (measured, desktop 1280px)

| Token | Family | Size | Weight | Line height | Used for |
|---|---|---|---|---|---|
| `display-xl` | Rethink Sans | 64px | 700 | 80px | h1 hero (homepage and pricing) |
| `display-lg` | Rethink Sans | 48px | 700 | 56px | section headings ("All of the carriers and stores you need") |
| `heading-md` | Rethink Sans | 32px | 700 | 40px | card titles ("Small businesses") |
| `lead-xl` | neue-haas-unica | 30px | 400 | 40px | hero paragraph ("Whether you use our app…") |
| `lead` | neue-haas-unica | 24px | 400 | 32px | section and card paragraphs (most-used size) |
| `body` | neue-haas-unica | 16px | 400 | 24px | nav labels |
| `label-strong` | neue-haas-unica | 16px | 600 | 24px | underlined links, testimonial names |
| `button-lg` | neue-haas-unica | 24px | 600 | 20px | hero "Get started" |
| `button-md` | neue-haas-unica | 16px | 600 | 20px | standard buttons |
| `body-roboto` | Roboto | 16px | 400 | 26px | base body, footer, select |

Letter spacing is `normal` everywhere on the measured pages.

### Mobile (390px)
| Token | Size | Weight | Line height |
|---|---|---|---|
| `display-xl-mobile` | 40px | 700 | 48px |
| `heading-md-mobile` | 24px | 700 | 32px |
| `lead` (unchanged) | 24px | 400 | 32px |
| `button-lg` (unchanged) | 24px | 600 | 20px |

### Principles
- Headlines are short, bold, sentence case, tight line counts; the hero wraps to three lines by design (523px column).
- Body type is big: 24px lead on desktop and mobile. Keep copy short to match.
- Only three weights in text: 400, 600, 700.
- Buttons use a 20px line height inside 16px or 20px padding, which is what produces the 56px / 60px heights.

### Note on Font Substitutes
Rethink Sans and Roboto are free on Google Fonts. Neue Haas Unica is a commercial Monotype face (Adobe Fonts subscription). If it is unavailable, a neutral grotesk such as Inter or Helvetica Neue is the nearest freely available option; expect slightly wider set width. Keep weights 400 / 600.

## Layout

### Spacing System
Homepage gap frequencies: 20px (10), 4px (10), 16px (3), 28px, 24px, 64px, 8px, 48px. Padding frequencies: 16px (31), 32px (17), 20px (11), 28px (8), 30px (6). The pricing page is dominated by 16px gaps (246) and 16px / 32px paddings. The container gutter is 30px (`padding: 0px 30px` on the nav container and the footer).

### Grid & Container
- Nav container: 1088px wide header region, inner container padding 0px 30px.
- Hero: two columns — left text column 523px wide, right column with carrier ticket illustrations.
- Audience cards: three equal columns, each 380px wide at 1280px, separated by about 16px, cards 672px tall.
- Partners band: centred 48px heading over a 979px-wide 24px paragraph.

### Section Recipes (seen in the capture)
1. **Hero split** — mint canvas, left text stack, right illustration stack, chat bubble bottom-right.
2. **Audience card row** — three black-outlined #09c68d cards that overlap the boundary between the mint hero and the aquamarine band below.
3. **Partners band** — #abf4c3 with thin darker-green grid lines, logo bubbles connected by dotted curves.
4. **Testimonials** — mint canvas, centred 48px heading, outlined cards with circular avatars.

### Whitespace Philosophy
Big type, few words, generous padding inside cards (30.08px top, 22.4px sides). Sections are separated by color changes rather than by dividers.

### Voice & Microcopy
Plain and merchant-centred: "Your one-stop solution for shipping", "Connect your stores, get the best rates from 40+ global carriers, and quickly print labels.", "Get started", "Learn more", "Contact an expert", "Explore our network". The rebrand post states the brand promise as "shipping is easy with Shippo".

### Motion
No hover state change was recorded on the filled button, the outlined button or the underlined links (both the extractor and a direct probe compared computed styles before and after hover and found them identical). Motion was not otherwise measured.

## Elevation & Depth

The measured components have no box-shadow. Depth comes from outlines and from color steps (mint → darker green card).

The site's CSS corpus does contain hard, unblurred offset shadows — `.5rem .5rem 0 0 var(--perano)`, `9px 9px 0 -3px #8080ff`, `6px 8px 0 -2px var(--light-blue-box-shadow)`, `6px 6px #462673` — and the capture shows the hero carrier tickets sitting on solid black offset blocks. These are illustration-style "sticker" shadows: solid color, zero blur, offset down-right. Their mapping to specific homepage elements was not measured, so no shadow token is declared.

### Decorative Depth
- Grid-paper background lines in the partners band.
- Dotted connector curves between logo bubbles.
- Outlined illustrations (boot, truck, dashboard) with flat fills of yellow, lavender and blue.

## Shapes

### Border Radius Scale

| Token | Value | Where |
|---|---|---|
| `sm` | 5px | pricing select box |
| `md` | 8px | every button (filled and outlined) |
| `lg` | 24px | 2 elements on /pricing |
| `round` | 100px | circular logo bubbles / avatars (8 elements) |
| — | 0px | audience cards and testimonial cards (square corners) |

### Outlines
The defining shape language is the **black outline**: 3px solid #000000 on cards, 2px solid on buttons. Corners of cards stay square. Do not soften them with radius or shadow.

## Components

### Buttons

**`button-primary-lg`** — hero "Get started".
- Background `{colors.primary}` #00484e, text #ffffff, `{typography.button-lg}` (neue-haas-unica 24px / 600 / 20px).
- Padding 20px, height 60px, radius `{rounded.md}` 8px, no border.

**`button-primary`** — "Get started" in the header and in cards, "Learn more", "Contact an expert" on /pricing.
- Background #00484e, text #ffffff, `{typography.button-md}` 16px / 600 / 20px.
- Border 2px solid #00484e, padding 16px, height 56px, radius 8px.

**`button-outline`** — header "Contact sales".
- Transparent background, text `{colors.ink}` #000000, border 2px solid #000000, padding 16px, height 56px, radius 8px, 16px / 600.

**Hover:** no change in color, border, shadow or opacity was measured for any of these buttons.

The cookie banner in the capture uses the same outlined-button shape ("Accept all", "Reject all", "More choices") on a pale mint panel with a black outline.

### Cards & Containers

**`card-audience`** — "Small businesses", "High volume shippers", "Software providers".
- Background `{colors.card-green}` #09c68d, text `{colors.ink-body}` #1c212b, border 3px solid #000000, radius 0px, padding 30.08px 22.4px 22.08px, 380px × 672px.
- Contents (centred): 32px Rethink Sans title, outlined illustration, 24px neue-haas-unica paragraph, `button-primary`, underlined `link`.

### Inputs & Forms

**`select-pricing`** — the label-volume dropdown on /pricing ("1-200 labels per month").
- Background #ffffff, text #222222, Roboto 16px / 400 / 26px, padding 11.2px 11.2px 11.2px 16px, height 46px, radius 5px.

No text input was measured.

### Navigation

**`nav`** — sticky, transparent bar, 89px tall, container padding 0px 30px.
- Left: Shippo logo (black mark + wordmark). Then dropdown triggers "App", "API", "Solutions", "Pricing", "Partners", "Resources" in neue-haas-unica 16px / 400 / 24px, #000000.
- Right: underlined "Login", then `button-primary` "Get started" and `button-outline` "Contact sales".

### Links

**`link`** — "Contact an expert", "Learn more", "Explore API docs", "Explore our network".
- Text `{colors.ink-soft}` #1c1c1c, neue-haas-unica 16px / 600 / 24px, underlined. On /pricing a 700-weight variant ("See API pricing") was measured.

### Footer

**`footer`** — homepage footer, transparent over the page color, text #1c212b, Roboto 16px / 26px, padding 0px 30px 64px, 532px tall. Columns start with "What you can do", "App", "API", "40+ carriers".
**`footer-pricing`** — same structure with a #ffe18a background on /pricing.

## Design System Architecture

Shippo publishes **no public design system**, token package or component library for its marketing or product UI. Searches: "Shippo brand guidelines logo press kit colors", "Shippo rebrand 2024 Rethink Sans neue haas unica new brand identity agency", "goshippo design system github components tokens \"shippo\"", plus the official blog. The developer docs (https://docs.goshippo.com/shipping-elements/quickstart) document "Shipping Elements", an embeddable shipping UI SDK, but not a design-token system.

The only official description of the visual system is the rebrand post, "Shipping should be simple: Shippo's new brand look" (Oct 28, 2024, https://goshippo.com/blog/shippos-new-brand-look):
- Four brand attributes became "the foundation of how our visual system was created"; recurring themes were "easy-to-use, modern, and seamless".
- Illustration: "bold, black outlines and fresh colors", "removing the nuances and details to create a minimal style".
- Photography tells merchant stories; illustrations explain abstract concepts like "API" or "tracking packages".
- The system had to work for both the Web App and the API product, "in both product and marketing"; the product design team ran an "intensive study of typefaces, color, and accessibility tests".
- The new brand was A/B tested on the homepage; the post reports "a 200% increase in contact sales requests" on the API page.
No numeric tokens, contrast targets, focus styles or component inventory are published.

**De-facto system measurable on the site** (from `:root` and class names on https://goshippo.com/):
- **Token tier.** A single primitive tier of 51 custom properties named after colors, not roles: `--medium-aquamarine: #25d695`, `--dark-slate-grey: #00484e`, `--medium-sea-green: #09c68d`, `--aquamarine: #abf4c3`, `--blacklight: #1c1c1c`, `--blond: #ffedbc`, `--crayola: #ffe18a`, `--perano: #b2b2ff`, plus a short numeric grey ramp `--cool-grey-10: #ebf1f4`, `--cool-grey-20: #dfe8ec`, `--cool-grey-30: #c2d4db`, `--cool-grey-80: #112229`. There is no semantic layer (no `--color-primary`-style names); a few role variables exist (`--bodyBgColor: white`, `--buttonHoverColor: white`).
- **Theming.** Per-page canvas colors (mint homepage, butter-yellow pricing) rather than a light/dark mode. No dark mode was observed.
- **Type & spacing.** Rethink Sans for display, neue-haas-unica for text, Roboto as body default. Spacing values cluster on 4 / 8 / 16 / 20 / 28 / 32px with a 30px gutter; some fluid values (12.8px, 22.4px, 30.08px) come from rem/em-based rules.
- **Component model.** Class names follow a `sw_` prefix (`sw_navbar`, `sw_navlink`, `sw_navdropdowntoggle`) alongside `w-nav`, `w-dropdown`, `w-container` classes and a `webflow-icons` font face in the CSS. Measurable components: two filled button sizes, outlined button, underlined link, outlined card, select, sticky nav, footer.
- **Accessibility.** Not documented. Measured contrast: white on #00484e and black on #25d695 are both high-contrast pairings.
- **Delivery.** No npm package or public Figma kit found.

## Do's and Don'ts

### Do
- Use the mint canvas #25d695 as the page color and the teal #00484e for every filled button.
- Outline cards with 3px solid #000000 and keep corners square.
- Set headlines in Rethink Sans 700 (64px / 80px hero, 48px / 56px sections, 32px / 40px card titles).
- Set lead copy at 24px / 32px neue-haas-unica 400 — large and airy.
- Make buttons 8px-radius rectangles: 16px padding / 56px tall, or 20px padding / 60px tall for the hero.
- Pair a filled teal button with an underlined 600-weight text link underneath.
- Illustrate with flat fills and heavy black outlines; use hard, unblurred offset shadows for sticker-like objects.
- Change the canvas hue per page or section (mint, aquamarine, butter yellow) while keeping teal and black constant.

### Don't
- Don't use pill-shaped or fully rounded buttons — the measured radius is 8px.
- Don't add soft blurred drop shadows to cards.
- Don't use the mint green as a button color; the action color is the dark teal.
- Don't letter-space headlines; tracking is normal.
- Don't set body copy small and grey — the site's text is black and large.
- Don't introduce gradients; every measured fill is flat.
- Don't invent hover effects; none were measured.

## Responsive Behavior

### Breakpoints
Only desktop (1280px) and mobile (390px) were measured; breakpoint values themselves were not captured.

### Measured changes
| Element | Desktop | Mobile |
|---|---|---|
| h1 | 64px / 80px | 40px / 48px |
| h2 card title | 32px / 40px | 24px / 32px |
| Lead paragraph | 24px / 32px | 24px / 32px (unchanged) |
| Hero CTA | 24px label, 60px tall, 166px wide | identical |

Mobile size frequencies: 16px (1492), 18px (1119), 14px (468), 24px (223), 30px, 12px, 40px, 48px.

### Touch Targets
Buttons are 56px and 60px tall at both widths, comfortably above common 44–48px targets.

### Collapsing Strategy

### Image Behavior
Illustrations are fixed-aspect artwork centred inside cards; logo bubbles in the partners band are scattered around the centred heading.

## Iteration Guide

1. Set the body to the mint canvas #25d695 and load Rethink Sans (700), neue-haas-unica (400/600) and Roboto (400).
2. Build the hero: left 64px / 700 / 80px Rethink Sans headline in #000000, 30px / 40px paragraph, 60px teal "Get started" button, underlined "Contact an expert" link.
3. Add the three outlined #09c68d audience cards (3px black border, square corners, 30.08px 22.4px 22.08px padding, centred content).
4. Add the #abf4c3 grid-paper band with a 48px / 56px heading and logo bubbles.
5. Check: teal only on buttons, black outlines on every card, 8px button radius, no blur shadows, letter spacing normal.

### Common Mistakes When Recreating Shippo
- Using the green as the CTA color — CTAs are #00484e.
- Rounding the cards — they are square with a 3px outline.
- Shrinking the body copy to 16px — the dominant size is 24px.
- Swapping Rethink Sans for a geometric display face; the measured headline face is Rethink Sans at 700.
- Using soft material shadows instead of hard offset "sticker" shadows on illustrated objects.
