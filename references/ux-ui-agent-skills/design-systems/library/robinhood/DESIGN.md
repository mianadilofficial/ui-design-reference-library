---
version: alpha
name: Robinhood
category: "Banking & Insurance"
description: "Robinhood's 2024 identity as shipped on robinhood.com: a black #000000 canvas of full-bleed photography, Robin Neon #ccff00 for every primary pill button and the lime footer, warm near-black #110e08 as the dark text and button colour. Headlines alternate between Martina Plantijn (110px/400 hero, -0.5px) and Phonic (52px/40px/400 with -2px to -1px tracking); all running text is Phonic 16px/24px at -0.25px. Buttons are 44px-tall 36px-radius pills with 0px 32px padding that fade to 0.85 opacity on hover."

colors:
  primary: "#ccff00"
  on-primary: "#110e08"
  canvas: "#000000"
  canvas-near-black: "#010101"
  surface-dark: "#1c180d"
  surface-ink: "#110e08"
  surface-light: "#ffffff"
  ink: "#ffffff"
  ink-dark: "#110e08"
  ink-soft: "#d9d9d9"
  ink-gold-card: "#bfbfbf"
  ink-muted: "#4d4a46"
  hairline-dark: "#35322d"
  border-card: "#808080"
  gold-sand: "#dad3c0"
  signal-green: "#00c805cc"

typography:
  display-hero:
    fontFamily: "\"Martina Plantijn\", serif"
    fontSize: 110px
    fontWeight: 400
    lineHeight: 110px
    letterSpacing: -0.5px
  display-hero-mobile:
    fontFamily: "\"Martina Plantijn\", serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 63px
    letterSpacing: -0.5px
  display-gold:
    fontFamily: "\"Martina Plantijn\", serif"
    fontSize: 100px
    fontWeight: 400
    lineHeight: 100px
    letterSpacing: -0.5px
  display-serif:
    fontFamily: "\"Martina Plantijn\", serif"
    fontSize: 72px
    fontWeight: 400
    lineHeight: 78px
    letterSpacing: -1px
  display-serif-mobile:
    fontFamily: "\"Martina Plantijn\", serif"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: -1px
  heading-xl:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 62px
    letterSpacing: -2px
  heading-xl-alt:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 62px
    letterSpacing: -1.5px
  heading-lg:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: -1px
  heading-gold-card:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: -1px
  heading-lg-mobile:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 34px
    letterSpacing: -0.33px
  heading-md-mobile:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 25px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: -0.34px
  subtitle:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.25px
  lead:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: -0.5px
  lead-mobile:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: -0.25px
  body:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.25px
  body-bold:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: -0.25px
  button-label:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.25px
  button-label-mobile:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: -0.1px
  button-chrome:
    fontFamily: "\"Capsule Sans Text\", sans-serif"
    fontSize: 13px
    fontWeight: 400
  disclosure:
    fontFamily: "Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19px
    letterSpacing: -0.1px

rounded:
  none: 0px
  card: 20px
  pill: 36px

spacing:
  xxs: 2px
  xs: 6px
  sm: 8px
  md: 12px
  lg: 24px
  xl: 32px
  2xl: 48px
  3xl: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-label}"
    rounded: "{rounded.pill}"
    border: "1px solid #ccff00"
    padding: 0px 32px
    height: 44px
  button-primary-hover:
    opacity: 0.85
  button-dark:
    backgroundColor: "{colors.surface-ink}"
    textColor: "{colors.ink}"
    typography: "{typography.button-label}"
    rounded: "{rounded.pill}"
    border: "1px solid #110e08"
    padding: 0px 32px
    height: 44px
  button-outlined-neon:
    textColor: "{colors.primary}"
    typography: "{typography.button-label}"
    rounded: "{rounded.pill}"
    border: "1px solid #ccff00"
    padding: 0px 32px
    height: 44px
  button-white:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-label}"
    rounded: "{rounded.pill}"
    padding: 0px 32px
    height: 44px
  link:
    textColor: "{colors.ink-dark}"
    typography: "{typography.body}"
  link-hover:
    opacity: 0.5
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 64px
  promo-banner:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.body}"
  card-gold:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    border: "1px solid #808080"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.body}"
---

## Overview

robinhood.com is a dark, cinematic marketing site. The page body is black `#000000` and almost every
section is a full-bleed photograph or product render: a lone figure walking along a curved concrete
wall behind the hero headline, a trading desktop on a monitor against a dusk sky, a chrome chain
link on pale blue for Robinhood Crypto. Text sits directly on the images in white.

The brand colour, **Robin Neon** `#ccff00`, is used sparingly and always with the same meaning: act.
It fills the "Sign up" / "Get started" / "Learn more" pills, outlines the "Log in" pill, colours a
few eyebrow headlines ("Intuitive trading tools"), fills the thin promotional strip under the nav,
and finally floods the entire footer.

Typography is a two-voice system. Big emotional headlines are set in the serif **Martina Plantijn**
at regular weight (110px "Trade All in One Place"); product headlines and all running text are in
**Phonic**, also at regular weight, with tight negative tracking at every size. Bold is almost absent
(only short lead-ins such as "It's officially HOOD month.").

The site reads as restrained and premium: no shadows, no gradients on UI, one radius for buttons,
lots of black. Robinhood's own description of the identity is "less is more" with "a focused color
palette, rooted in black, white and neutrals, with purposeful pops of Robin Neon"
(https://robinhood.com/us/en/newsroom/a-new-visual-identity).

**Key characteristics**
- Black canvas `#000000`, white text, full-bleed photography per section.
- Robin Neon `#ccff00` for primary pills, the promo strip, and the footer.
- Warm near-black `#110e08` (not pure black) for dark text on neon/light and for dark buttons.
- Serif display (Martina Plantijn) + ink-trap sans (Phonic), both at weight 400.
- Negative tracking everywhere: -0.25px on body, -1px to -2px on headlines.
- Single button shape: 44px tall, 36px radius, 0px 32px padding.
- Hover is an opacity fade (0.85 on buttons, 0.5 on text links), not a colour change.

## Colors

### Brand & Accent
- **Robin Neon / primary** `#ccff00`: primary pill background and border, outlined pill text and
  border, eyebrow headlines, promo strip, footer background. Officially paired with black
  (`#000000 on #ccff00`) in the Robinhood Chain brand guidelines
  (https://docs.robinhood.com/chain/brand-guidelines/).
- **On primary** `#110e08`: text on neon pills and in the neon footer.
- **Signal green** `#00c805cc`: present in the CSS (also `#00c80566` and a glow
  `0 0 8px rgba(0,200,5,0.4)`); not seen on a rendered homepage element.

### Surface
- **Canvas** `#000000`: body background and nav.
- **Canvas near-black** `#010101`: large dark sections on the Gold page.
- **Surface dark** `#1c180d`: a warm dark section band on the homepage.
- **Surface ink** `#110e08`: dark pill buttons ("Learn more" on light photography, "Sign up to access
  Robinhood Learn").
- **Surface light** `#ffffff`: white pills on the Gold page ("Unlock Gold", "Request access").

### Text
- **Ink** `#ffffff`: headlines and body on photography and black sections.
- **Ink dark** `#110e08`: the most-read text colour by character count — body copy in light sections,
  the promo strip and the footer.
- **Ink soft** `#d9d9d9`: disclosures on dark backgrounds.
- **Ink gold card** `#bfbfbf`: secondary copy inside Gold feature cards.
- **Ink muted** `#4d4a46`: secondary disclosure links ("Crypto Risk Disclosures").
- **Gold sand** `#dad3c0`: accent text on the Gold page.

### Borders
- **Hairline dark** `#35322d`: thin dividers.
- **Border card** `#808080`: 1px outline of Gold feature cards.

### Gold sub-brand
The Gold page footer is a gradient `linear-gradient(270deg, rgb(148, 129, 76) 0%, rgb(207, 185, 125) 100%)`
instead of neon; its hero headline is `#110e08` Martina Plantijn 100px.

## Typography

### Font Family
- **Phonic** (`Phonic, Helvetica, system-ui, -apple-system, Arial, sans-serif`) — 400 and 700 loaded.
  Porto Rocha's case study names it "Robinhood Phonic", a custom sans by Schick Toikka with "delicate
  ink-traps" (https://portorocha.com/robinhood).
- **Martina Plantijn** (`"Martina Plantijn", serif`) — 400 loaded; Klim Type serif per the same case study.
- **Capsule Sans Text** — the `body` and button-anchor font. It is the face COLLINS derived from
  Milieu Grotesque's Maison Neue for the 2020 identity
  (https://the-brandidentity.com/feed/collins-robinhood-combine-make-investing-accessible-affordable-engaging/).
  On the current homepage almost all visible text overrides it with Phonic.
- The CSS corpus also declares `Nib Pro Display`, `Capsule Sans Display`, `Capsule Sans Text Mono`,
  `Maison Neue Extended`, `ITC Garamond Std`, `Instrument Serif` and `Geist` @font-faces; none
  were measured on homepage text.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Example |
|---|---|---|---|---|---|---|
| display-hero | Martina Plantijn | 110px | 400 | 110px | -0.5px | "Trade All in One Place" |
| display-hero-mobile | Martina Plantijn | 60px | 400 | 63px | -0.5px | same at 390px |
| display-gold | Martina Plantijn | 100px | 400 | 100px | -0.5px | "Supercharge your next move" |
| display-serif | Martina Plantijn | 72px | 400 | 78px | -1px | "Join a new generation of investors" |
| display-serif-mobile | Martina Plantijn | 44px | 400 | 48px | -1px | same at 390px |
| heading-xl | Phonic | 52px | 400 | 62px | -2px | "Become a better investor…" |
| heading-xl-alt | Phonic | 52px | 400 | 62px | -1.5px | "Robinhood Protection Guarantee" |
| heading-lg | Phonic | 40px | 400 | 48px | -1px | "Intuitive trading tools" |
| heading-gold-card | Phonic | 32px | 400 | 36px | -1px | "High-yield cash" |
| heading-lg-mobile | Phonic | 28px | 400 | 34px | -0.33px | eyebrow at 390px |
| heading-md-mobile | Phonic | 25px | 400 | 27px | -0.34px | 40px heading at 390px |
| subtitle | Phonic | 22px | 400 | 24px | -0.25px | hero subtitle |
| lead | Phonic | 22px | 400 | 30px | -0.5px | security block h5 |
| lead-mobile | Phonic | 18px | 400 | 26px | -0.25px | same at 390px |
| body | Phonic | 16px | 400 | 24px | -0.25px | running text |
| body-bold | Phonic | 16px | 700 | 24px | -0.25px | promo lead-in |
| button-label | Phonic | 16px | 400 | 24px | -0.25px | pill labels |
| button-label-mobile | Phonic | 14px | 400 | 22px | -0.1px | pill labels at 390px |
| button-chrome | Capsule Sans Text | 13px | 400 | — | — | anchor font under the label |
| disclosure | Phonic | 12px | 400 | 19px | -0.1px | legal lines |

### Principles
- Weight is almost always 400; scale and the serif/sans switch create hierarchy.
- The serif is reserved for one emotional headline per section; Phonic carries product facts.
- Tracking tightens with size: -0.1px (12px), -0.25px (16px), -0.5px (22px), -1px (40px), -2px (52px).
- Headline line heights are tight (1.0 for the 110px hero, about 1.2 for Phonic headings).

### Note on Font Substitutes
Phonic (as served) is a custom version for Robinhood; Martina Plantijn is a commercial Klim Type
family; Capsule Sans is custom. For prototypes without licences, keep the declared fallbacks
(`Helvetica, system-ui, Arial` for Phonic; a regular-weight book serif for Martina Plantijn) and keep
the measured sizes, weights and tracking.

## Layout

### Spacing System
- Gaps measured: 8px (most frequent), 12px, 6px, 48px.
- Paddings measured: 24px, 32px (button side padding), 10px, 64px, 2px.
- Buttons use `0px 32px` with a fixed 44px height rather than vertical padding.

### Grid & Container
- Measurement viewport 1280px. Text columns are narrow: the 52px h2 box measured 700px wide, the
  hero h1 568px, body paragraphs 592px.
- Product sections are split: image on one side, a left-aligned text column on the other (capture:
  monitor left, text right; chain left, text right).
- The Gold page lays out feature cards at 578px wide, two per row.

### Whitespace Philosophy
Each section is roughly a viewport tall with one message, one paragraph and one button. Large empty
areas of photograph are part of the composition.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| 0 | none | all cards, buttons and sections |
| glow | `0 0 8px rgba(0,200,5,0.4)` | declared in CSS; not seen rendered |

No box shadows were measured on rendered homepage elements. Depth comes from photography (lit
subjects against dark grounds) and from translucent ticker tiles that sit over the hero image in the
capture.

### Decorative Depth
Technical chart illustrations (thin red/green price lines) on the ticker tiles echo Porto Rocha's
"highly technical illustration style inspired by financial graphs".

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | sections, images, nav |
| card | 20px | Gold feature cards |
| pill | 36px | every button (44px tall, so fully rounded) |

The CSS corpus also contains a 3px radius (2 declarations) not seen on rendered elements.

### Photography Geometry
Full-bleed, edge-to-edge images with no radius; single subjects, low saturation, cool or dusk light.

## Components

### Buttons
- **button-primary** — `#ccff00` background, 1px `#ccff00` border, `#110e08` label in Phonic 16px/400
  (24px line height, -0.25px), padding 0px 32px, height 44px, radius 36px. Hover: opacity 0.85.
- **button-dark** — `#110e08` background and border, `#ffffff` label; otherwise identical. Used on
  light photography ("Learn more" in the crypto section).
- **button-outlined-neon** — transparent background, 1px `#ccff00` border, `#ccff00` label ("Log in").
- **button-white** — `#ffffff` background, `#000000` label (Gold page "Unlock Gold", "Request access").
- All buttons fade to opacity 0.85 on hover; the anchor carries `transition: all`.
- The anchor element itself is set in Capsule Sans Text 13px with per-button tracking (-0.5px, -1px,
  -2px measured), but the visible label is a Phonic span.

### Links
- Text links: `#110e08` (or white on dark) Phonic 16px/24px, -0.25px; hover opacity 0.5.
- Inline legal links are underlined (capture: "Learn more", "Fee Schedule").

### Navigation
- Black `#000000` bar, 64px tall. Feather logo + "Robinhood" wordmark left; region selector "US",
  outlined neon "Log in", neon "Sign up" and a hamburger icon right.
- Directly below: a full-width `#ccff00` promo strip with `#110e08` 16px text and a bold lead-in.

### Cards & Containers
- **card-gold** — 20px radius, 1px `#808080` border, white headline 32px/36px (-1px), `#bfbfbf`
  secondary copy, 578px wide (Gold page).
- Hero ticker tiles (ETH, BTC, XLM) are translucent grey rounded tiles with a sparkline; the centre
  tile carries a neon "Get started" pill (capture only — not measured).

### Footer
- Full-width `#ccff00` footer (2003px tall on the homepage) with `#110e08` Phonic text: link lists
  ("Customer Relationship Summaries", "FINRA's BrokerCheck"), social links and long legal copy.

### Signature Components
- The neon footer: the only place the whole viewport turns Robin Neon.
- Serif hero headline over a single-subject photograph.
- Disclosure lines in 12px/19px directly under each product section.

## Design System Architecture

Robinhood publishes **no public web design system** (no token package, component documentation or
Figma kit was found; searches in `SOURCES.json`). What is documented officially:
- The identity principles — black/white/neutrals plus Robin Neon, a simplified logo symbol and
  wordmark, and "an intentional modular layout system"
  (https://robinhood.com/us/en/newsroom/a-new-visual-identity).
- Logo and colour pairing rules for Robinhood Chain: black on white, white on black, black on
  `#ccff00`; feather symbol minimum 20px (https://docs.robinhood.com/chain/brand-guidelines/).
- The agency rationale: Phonic + Martina Plantijn, technical chart illustration, single-subject
  photography, a modular system flexing across stocks, crypto and Gold (https://portorocha.com/robinhood).

### Token architecture (de facto)
The homepage exposes **no CSS custom properties** on `:root` (rootVars is empty), so there are no
public token names. The repeated literal values form the system: `#ccff00`, `#110e08`, `#000000`,
`#ffffff`, `#35322d`, radius `36px`, button height 44px, padding `0px 32px`.

### Theming
Sections switch between dark (white text on black/photo) and light (`#110e08` on neon or pale photo)
per block; the Gold sub-brand swaps neon for a gold gradient footer and white pills. No dark/light
toggle or high-contrast mode was found.

### Type & spacing systems
Two families (Phonic, Martina Plantijn) at weight 400, tracking tied to size (see Typography).
Spacing values cluster on 8px / 12px / 24px / 32px / 48px / 64px.

### Component model
Measured inventory: pill button in four colourways (neon, dark, outlined neon, white), text link,
nav bar, promo strip, Gold feature card, footer. No inputs, tabs or modals appear on the measured pages.

### Accessibility
No published web accessibility rules were found. Measured: buttons are 44px tall; `#110e08` on
`#ccff00` and white on black are high-contrast pairings; disclosures are 12px.

### Delivery
No public npm packages or framework information is published.

## Do's and Don'ts

### Do
- Keep the page black with full-bleed, single-subject photography.
- Use `#ccff00` only for actions, the promo strip, eyebrow accents and the footer.
- Put `#110e08` text on neon, never pure black.
- Set one serif headline (Martina Plantijn 400) per hero, product copy in Phonic 400.
- Track tightly: -0.25px body, -1px to -2px headings.
- Use 44px pills with 36px radius and 0px 32px padding for every button.
- Fade to 0.85 opacity on hover.

### Don't
- Don't use bold headlines; weight stays 400.
- Don't add shadows or rounded image corners.
- Don't introduce extra accent colours — the palette is black, white, neutrals and neon.
- Don't recolour or alter the logo (Robinhood Chain guidelines).
- Don't place neon text on white backgrounds; neon text appears on dark.
- Don't use the Gold gradient outside Gold pages.

## Responsive Behavior

### Breakpoints
Only 1280px and 390px were measured; the site's breakpoint values were not extracted.

### Touch Targets
All pills stay 44px tall at 390px (Get started measured 137×44).

### Collapsing Strategy
- Hero serif: 110px/110px → 60px/63px.
- Serif display: 72px/78px → 44px/48px.
- Phonic headings: 52px → 40px/48px/-1px; 40px → 25px/27px/-0.34px (body copy blocks) or
  28px/34px/-0.33px (eyebrows).
- Lead h5: 22px/30px → 18px/26px.
- Button labels: 16px/24px → 14px/22px (-0.1px).
- Promo strip: 16px → 14px/18px.
- Body stays 16px/24px; disclosures stay 12px/19px.
- Nav keeps 64px height; only "Sign up" and the menu remain visible.

### Image Behavior
Photography stays full-bleed and is re-cropped around the subject.

## Iteration Guide

1. Black `#000000` canvas, white Phonic 16px/24px (-0.25px) body.
2. Hero: one photograph, Martina Plantijn 110px/400 white headline, 22px subtitle, neon pill.
3. Product sections: image + text column, Phonic 40px/48px heading (-1px), optional neon eyebrow.
4. Buttons: 44px, radius 36px, padding 0px 32px; neon/`#110e08`, dark/white, outlined neon, white/black.
5. Disclosures under each section: 12px/19px, `#d9d9d9` on dark, `#110e08` on light.
6. End with the full-width `#ccff00` footer and `#110e08` text.
7. At 390px apply the measured mobile sizes above.
