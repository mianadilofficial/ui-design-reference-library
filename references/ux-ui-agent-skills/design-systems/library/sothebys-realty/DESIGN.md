---
version: alpha
name: Sotheby's International Realty
category: "Real Estate & PropTech"
description: >-
  Sotheby's International Realty's website is a luxury-property system in deep navy #002349 with a gold #c29b40 hairline accent, white pages, and a three-serif type stack: FreightBigBook for the 46px hero headline, MercuryDisplay-Roman for 28px section titles, and BentonSans-Book at 16px for body, with small 4px-radius outlined buttons.
colors:
  canvas: "#ffffff"
  ink: "#666666"
  primary: "#002349"
  primary-deep: "#001731"
  border-light: "#d6d6d6"
  surface-dark: "#151b17"
  ink-muted: "#999999"
  ink-black: "#000000"
  ink-footer: "#5b5b5b"
  accent-gold: "#c29b40"
typography:
  display:
    fontFamily: FreightBigBook, Arial, sans-serif
    fontSize: 46px
    fontWeight: 400
    lineHeight: 51.98px
    letterSpacing: 1px
  display-mobile:
    fontFamily: FreightBigBook, Arial, sans-serif
    fontSize: 38px
    fontWeight: 400
    lineHeight: 42.18px
    letterSpacing: 0.8px
  heading:
    fontFamily: MercuryDisplay-Roman, Arial, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 34px
  subheading:
    fontFamily: FreightBigBook, Arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: BentonSans-Book, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 32px
  nav:
    fontFamily: BentonSans-Book, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: MercuryDisplay-Roman, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Adelle Sans\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.25px
rounded:
  xs: 4px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 15px
  s9: 16px
  s10: 17px
components:
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 5px 10px
    height: 31px
    borderColor: "{colors.accent-gold}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 0px 0px 20px
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-footer}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-footer}"
    padding: 55px 0px 40px
---

## Overview

Sotheby's International Realty sells homes the way a fine-art house sells lots: the site is quiet, serif-led and image-first. The homepage opens on a deep navy header band holding a one-line promise, "Find a home that suits your lifestyle.", set in a high-contrast serif at 46px, beside a tabbed search field (Buy, Rent, Developments, Sell, More). Under it a full-width listing carousel shows one extraordinary property at a time, with place name, country, price and a "View listing" arrow.

The mood is heritage and discretion rather than urgency. There are no promotional badges and no bright call-to-action colour. Navy carries authority, a thin gold rule carries refinement, and white leaves room for large photographs and large numerals. A network-statistics block (offices, countries, sales associates, annual sales) uses oversized serif numerals with tiny tracked caps captions.

Key characteristics:
- Navy `{colors.primary}` header, nav and primary action surfaces; a darker navy `{colors.primary-deep}` for the utility strip.
- A 1px gold `{colors.accent-gold}` hairline used for button outlines, tab underlines and section rules.
- Serif display type (FreightBigBook, MercuryDisplay-Roman) paired with a sans (BentonSans-Book) for navigation and body.
- Uppercase, widely tracked micro-labels for navigation and captions (12px to 14px with 1.2px to 1.6px tracking measured).
- Outlined, small, 4px-radius buttons; no filled heavy CTAs.
- Photography is full-bleed, atmospheric and high-end residential.

## Colors

All hex values are measured on the live homepage (a bot wall initially returned an unrelated verification page; the page was re-measured with the stealth extractor, see Doubts in `SOURCES.json`).

### Brand
- **Primary** (`{colors.primary}`): `#002349`, the navy of the header, nav, cookie bar and the Accept button.
- **Primary deep** (`{colors.primary-deep}`): `#001731`, the darker navy of the utility strip (Join / Log In, Preferences).
- **Accent gold** (`{colors.accent-gold}`): `#c29b40`, used as the 1px border on buttons and the rule above the statistics block and under active tabs.

### Surfaces
- **Canvas** (`{colors.canvas}`): white, the dominant page background (about 62% of the capture).
- **Surface dark** (`{colors.surface-dark}`): `#151b17`, a near-black green measured as a large background area; where it is used was not isolated.
- **Border light** (`{colors.border-light}`): `#d6d6d6`, a neutral rule on light surfaces.

### Text
- **Ink** (`{colors.ink}`): `#666666`, the most-read text colour (body paragraphs on white).
- **Ink muted** (`{colors.ink-muted}`): `#999999`, secondary text and placeholder-style copy.
- **Ink footer** (`{colors.ink-footer}`): `#5b5b5b`, footer and nav text colour in the extracted roles.
- **Ink black** (`{colors.ink-black}`): `#000000`, occasional pure black text.
- White text is used on navy and over photography.

### Usage rules
- Navy and white do the structural work; gold is only a line, never a fill.
- Do not introduce a second saturated colour; property photography supplies colour.
- Status chips and map markers exist in the product (the stylesheet carries many `--color-flag-*` and `--color-poi-*` variables for them) but are not part of the homepage identity.

## Typography

### Families
- **FreightBigBook**: hero headline and card titles (`{typography.display}`, `{typography.subheading}`).
- **MercuryDisplay-Roman** (and -Italic): section headings and link text (`{typography.heading}`, `{typography.link}`).
- **BentonSans-Book** and **BentonSans-Medium**: body, navigation and footer (`{typography.body}`, `{typography.nav}`).
- **Adelle Sans**: the cookie-banner buttons (`{typography.button-secondary}`).
- An `icons` font supplies glyphs.

The Sotheby's brand identity (the auction house, redesigned by Pentagram under Abbott Miller in 2014) specifies Mercury as primary, Benton Sans as secondary and Freight Display as tertiary typefaces (fontsinuse.com/uses/6387/sotheby-s-2014-redesign). That page describes the parent Sotheby's brand, not the Realty website; the shipped Realty fonts above match the same families but the match is an observation, not a documented specification.

### Hierarchy

| Token | Font | Size | Weight | Line | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display}` | FreightBigBook | 46px | 400 | 51.98px | 1px | Hero promise |
| `{typography.display-mobile}` | FreightBigBook | 38px | 400 | 42.18px | 0.8px | Hero at 390px |
| `{typography.heading}` | MercuryDisplay-Roman | 28px | 400 | 34px | none | Section headings |
| `{typography.subheading}` | FreightBigBook | 22px | 400 | 24px | none | Story / card titles |
| `{typography.link}` | MercuryDisplay-Roman | 18px | 400 | 24px | none | City links |
| `{typography.body}` | BentonSans-Book | 16px | 400 | 32px | none | Body copy |
| `{typography.nav}` | BentonSans-Book | 14px | 400 | 24px | none | Navigation |
| `{typography.button-secondary}` | Adelle Sans | 14px | 400 | 19.25px | none | Consent buttons |

### Principles
- Serif for voice (headlines, prices, place names, big numerals); sans for function (nav, forms, captions).
- Weights stay at 400 for serif; the only heavier weights measured on the page are 500 and 600 in sans labels.
- Display tracking is slightly positive (1px at 46px), unusual for large serifs, and gives the headline a spaced, couture feel.
- Body line height is generous (32px for 16px type), so paragraphs read airy.
- Navigation and captions are uppercase with wide tracking.

### Font substitutes
These are commercial fonts. Reasonable substitutes: a high-contrast book serif such as Cormorant Garamond or Source Serif for display, and a neutral humanist sans such as Source Sans or Open Sans for body. Keep the 1px display tracking and the open line height.

## Layout

### Spacing
The extracted scale is `{spacing.s1}` 1px, `{spacing.s2}` 2px, `{spacing.s3}` 5px, `{spacing.s4}` 6px, `{spacing.s5}` 10px, `{spacing.s6}` 12px, `{spacing.s7}` 13px, `{spacing.s8}` 15px, `{spacing.s9}` 16px, `{spacing.s10}` 17px. Larger gaps measured on the page are 20px, 30px, 32px, 40px and 100px; section paddings reach 80px. The footer uses 55px top and 40px bottom padding.

### Grid and container
- The header is full-width: cookie bar, utility strip, main nav, then a headline-and-search band.
- Below it, the listing carousel is full-bleed on the right with a plain white area on the left in the capture, where lazy-loaded content had not painted at capture time.
- The statistics block is a single right-aligned column of four stats under a gold rule.
- Footer: a tall block (965px in the measurement) with link columns in `{colors.ink-footer}`.

### Whitespace
- Large white fields between the carousel and the statistics; the brand lets content breathe.
- Search band: headline on the left, search on the right, both aligned on one baseline row.

## Elevation & Depth

The system is essentially flat. No box shadows were measured. Separation comes from colour blocks (navy to white), 1px gold or grey rules and photography. A white translucent surface (`#ffffff80`) is measured as a background area, used for overlays on imagery. Do not add card shadows.

## Shapes

- `{rounded.xs}` (4px) is the only radius measured: the Accept / Decline / Manage Preferences buttons.
- Everything else is square: the SELL WITH US outlined button, tabs, carousel indicators (short flat bars), and image blocks.
- Hairline rules are 1px.

## Components

### Buttons
- **button-secondary** (cookie Accept): `{colors.primary}` fill, `{colors.canvas}` text, `{typography.button-secondary}`, `{rounded.xs}`, padding 5px 10px, height 31px, 1px `{colors.accent-gold}` border. Decline and Manage Preferences use the same outlined form with a transparent fill.
- "Sell with us" in the header is an outlined, square gold-bordered button with tracked uppercase text.
- No filled primary CTA was measured on the homepage; the site relies on outlined buttons and text links with arrows ("View listing →").

### Navigation
- **nav**: navy `{colors.primary}` background, 130px tall in the measurement, with logo left (Sotheby's wordmark with INTERNATIONAL REALTY beneath), then Search, Properties, Agents, Stories, and the outlined Sell with us.
- **nav-link**: `{typography.nav}`, white text, uppercase tracked captions.
- A utility strip above holds Join / Log In and Preferences with a gear icon.
- Search tabs (Buy, Rent, Developments, Sell, More) underline the active tab in gold.

### Search field
- A single underlined input on the navy band with a magnifier at left, placeholder "Country, City, Address, Postal Code or ID", and a right arrow at the end. Measured placeholder and text use the serif at a muted tone.

### Links
- **link**: `{typography.link}` in white on navy bands, padding 0px 0px 20px; popular-city links ("New York") are stacked serif lines.

### Footer
- **footer**: `{colors.canvas}` background, `{colors.ink-footer}` text, padding 55px 0px 40px; columns such as Contact Us, Company, Apps.

### Signature components
- Listing hero carousel with place name in large serif, a tiny country + price line separated by a gold dot, and "View listing" with an arrow; four short bar indicators below.
- Statistics column: big serif numerals (1,100 offices worldwide; 86 countries and territories; 26,000 sales associates; $182 Billion annual sales) with tracked caption labels. These figures are taken from the capture and are the site's own claims.
- Cookie bar across the top of the page.

## Design System Architecture

No public Sotheby's International Realty design system or token package was found; see `SOURCES.json`. Observable facts:
- The parent Sotheby's identity (Pentagram, 2014) documents Mercury, Benton Sans and Freight Display: https://fontsinuse.com/uses/6387/sotheby-s-2014-redesign.
- The shipped stylesheet defines hundreds of custom properties named `--color-*` and `--m-*` (for example `--color-global-text-30`, `--color-global-primary-20`, `--color-flag-sold-l`, `--m-carousel-*`, `--m-featured-listing-background-color`). Colours are stored as bare channel or HSL component values (such as `35,36,37`), so tokens are consumed as `rgb(var(--...))` or with separate h / s / l / a parts.
- Naming suggests a module-based architecture: `--color-global-*` for site-wide tokens, `--m-*` for module-level tokens, `--color-flag-*` for listing status flags (sold, coming soon, virtual open house, contract pending) and `--color-poi-marker-*` for map markers.
- Font names are PostScript style (`BentonSans-Book`, `MercuryDisplay-Roman`) rather than family names, which is typical of self-hosted webfont kits.
- De-facto system: navy + white + gold line, three serif/sans roles, 4px radius, no shadows.

## Do's and Don'ts

### Do
- Use serif display type with 1px tracking for headlines.
- Keep navy as the structural colour and gold as hairlines only.
- Let a single large photograph lead each section.
- Write short, aspirational headlines ("Find a home that suits your lifestyle.").
- Use uppercase tracked micro-labels for navigation and statistics captions.
- Keep buttons small, outlined and 4px-radius at most.
- Use generous line height (32px) for body.

### Don't
- Don't fill buttons with bright colours or use red, orange or green calls to action.
- Don't add shadows, gradients or rounded pills.
- Don't use gold for text or large fills.
- Don't mix more than two serif faces on one screen.
- Don't use exclamation marks or urgency language.
- Don't set body copy in serif; body is sans.

## Responsive Behavior

### Breakpoints
- Measurements exist at 1280px (desktop) and 390px (mobile). No official breakpoint list was found.

### Mobile
- Hero headline drops from 46px to 38px with tracking 0.8px (`{typography.display-mobile}`).
- Other type roles were measured only on desktop.

### Touch targets
- Outlined buttons are 31px tall on the consent bar, which is under common 44px guidance; treat that as a measured fact, not a recommendation.

### Collapsing
- The multi-item nav is a desktop pattern; its collapse behaviour at small widths was not measured.

### Images
- Listing photography is full-bleed behind overlaid text; keep overlay text white and short.

## Voice and Microcopy

- Headline: "Find a home that suits your lifestyle."
- Search placeholder: "Country, City, Address, Postal Code or ID".
- Calls to action: "View listing", "Sell with us", "Join / Log In".
- Statistic captions: "Offices worldwide", "Countries & territories", "Sales associates", "Annual sales (USD)".
- Listing lines are minimal: place, country, price.

## Iteration Guide

1. Begin with a navy band, a white page and one gold rule.
2. Set the headline in the display serif at 46px with 1px tracking.
3. Use sans for navigation and body; serif for anything that sounds like a title, price or number.
4. Buttons: outline, 4px radius, 1px gold border, tracked caps.
5. Replace emphasis with scale (large numerals) rather than colour.
6. When adding a token, measure it on the live site first (re-run the extractor with `--stealth`, the site blocks plain headless browsers).
7. Compare to the capture: if the page feels busy or colourful, remove elements.

## Imagery and Art Direction

- The capture's hero is a single residential photograph (a courtyard entrance with a planted terracotta pot, tiled fountain and arched gate) shown at near-full width, warm and softly darkened so white serif text stays legible.
- Photographs are place-led: the overlay names the town first (a very large serif), then country and price in a smaller line.
- Carousel position is shown by four thin horizontal bars, the active one brighter, rather than dots.
- The header band is flat navy with no imagery, so the photograph below it reads as the first "object" on the page.
- The statistics block is typographic only: no icons, just numerals and captions over white.
- The Sotheby's wordmark is a serif with INTERNATIONAL REALTY in small caps beneath; it is the only logo-like element and stays top-left.
- Density is low: after the header band the viewport holds one photograph and white space.
