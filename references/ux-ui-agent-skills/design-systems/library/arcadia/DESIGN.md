---
version: alpha
name: Arcadia
category: "Energy & Climate"
description: "Arcadia (arcadia.com), the energy intelligence platform: deep Evening Sea greens (#0b2c24 full-bleed bands, #104336 cards and buttons) over a warm Pampas #f3f1ec page top, with Arcadia Green #0fff87 reserved for the primary call to action. Everything is set in DM Sans (served as __DMSans_cff41e), light 300 for 56px/61.6px hero headlines with +0.56px tracking, 16-20px regular body in cream #f9f3e8 on the dark canvas and #535e5d on the light Pampas top. Buttons are 8px-radius rectangles 42-48px tall; product cards use 16px corners and 24px padding."

colors:
  primary: "#0fff87"
  primary-dark: "#0cc769"
  on-primary: "#104336"
  canvas: "#0b2c24"
  pampas: "#f3f1ec"
  pampas-light: "#f8f7f4"
  evening-sea: "#104336"
  evening-sea-dark: "#0b2c24"
  evening-sea-mid: "#4c7c6f"
  evening-sea-light: "#afc4bf"
  mid-green: "#004d42"
  light-green: "#4e6c67"
  black: "#101f1e"
  black-hover: "#515c5b"
  heading: "#000000"
  ink: "#f9f3e8"
  ink-on-light: "#535e5d"
  gray: "#798281"
  cream: "#f9f3e8"
  cream-muted: "#f7f6f380"
  off-cream: "#fffaf0"
  white: "#ffffff"
  electric-violet: "#7c18d3"
  blue-marguerite: "#6666d9"
  viking: "#5cc4dc"
  viking-light: "#d5f0f6"
  lime: "#c4ff45"
  lime-hover: "#afdf3e"
  coral: "#ff6b78"
  danger: "#d80e20"
  scrim: "#00000099"
  nav-hover-tint: "#0040370d"

typography:
  display-h1:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 56px
    fontWeight: 300
    lineHeight: 61.6px
    letterSpacing: 0.56px
  heading-xl:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 52.8px
    letterSpacing: 0.48px
  heading-lg:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 36px
    fontWeight: 300
    lineHeight: 43.2px
    letterSpacing: 0.36px
  heading-md:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: 0.24px
  title:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.2px
  body-lg:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  body-md:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  body:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav-item:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: -0.36px
  button:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  eyebrow:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.1px
    textTransform: uppercase
  date-label:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 0.98px
    textTransform: uppercase
  stat-label:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
    letterSpacing: -0.28px
  legal:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16.5px
  mobile-h1:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 42px
    fontWeight: 300
    lineHeight: 46.2px
    letterSpacing: 0.42px
  mobile-body:
    fontFamily: "__DMSans_cff41e, __DMSans_Fallback_cff41e, \"DM Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px

rounded:
  button: 8px
  card: 16px
  nav-item: 18px
  circle: 50%

spacing:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  2xl: 40px
  3xl: 48px
  4xl: 64px
  section-sm: 88px
  section-md: 110px
  section-lg: 120px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 24px
    height: 42px
  button-dark:
    backgroundColor: "{colors.black}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 48px
  button-dark-hover:
    backgroundColor: "{colors.black-hover}"
  button-evening-sea:
    backgroundColor: "{colors.evening-sea}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 24px
    height: 42px
  button-evening-sea-hover:
    backgroundColor: "{colors.evening-sea-dark}"
  button-outline:
    backgroundColor: transparent
    textColor: "{colors.evening-sea}"
    border: "1px solid {colors.evening-sea}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 24px
    height: 42px
  button-outline-hover:
    backgroundColor: "{colors.evening-sea}"
    textColor: "{colors.cream}"
  button-outline-on-dark:
    backgroundColor: transparent
    textColor: "#f3eee3"
    border: "1px solid {colors.cream}"
    rounded: "{rounded.button}"
    padding: 0px 24px
    height: 42px
  nav:
    backgroundColor: "{colors.pampas}"
    height: 68px
  nav-dark:
    backgroundColor: "{colors.evening-sea-dark}"
    textColor: "{colors.cream}"
    height: 68px
  nav-item:
    textColor: "{colors.evening-sea}"
    typography: "{typography.nav-item}"
    rounded: "{rounded.nav-item}"
    height: 34px
  nav-item-hover:
    backgroundColor: "{colors.nav-hover-tint}"
  card-product:
    backgroundColor: "{colors.evening-sea}"
    textColor: "{colors.cream}"
    rounded: "{rounded.card}"
    padding: 24px
  card-light:
    backgroundColor: "{colors.white}"
    textColor: "{colors.black}"
    rounded: "{rounded.card}"
  footer:
    backgroundColor: "{colors.black}"
    textColor: "{colors.cream}"
    typography: "{typography.body}"
  link:
    textColor: "{colors.cream}"
    typography: "{typography.body}"
---

## Overview

Arcadia's marketing site (measured at `https://www.arcadia.com/`, title "Arcadia: The leading energy
intelligence platform") is a calm, editorial B2B page built from three ingredients: a warm off-white
**Pampas** (`#f3f1ec`) page top, very deep **Evening Sea** greens (`#0b2c24` for full-bleed bands,
`#104336` for cards and buttons, `#101f1e` "black" for the footer) and a single electric
**Arcadia Green** (`#0fff87`) used almost exclusively as the call-to-action fill.

The capture reads in two movements. First: a light Pampas header and a rounded hero panel with a soft
lavender-to-sage gradient wash, a centred light-weight headline ("Energy management to save money,
mitigate risk, and cut carbon."), a short centred paragraph, one dark "Request demo" button, and a large
product screenshot (white dashboard cards, purple/cyan/lime waterfall charts) sitting inside the panel.
Below it a single-line "Trusted by…" sentence and a greyscale customer-logo marquee (Cargill, EVgo,
Oracle, Costco, Ford, Iron Mountain, FedEx). Second: the page drops into a long full-bleed `#0b2c24`
band — that dark band is what covers the most pixels in the capture (about 45%), so it is the
**canvas** in this file, with Pampas as the light surface above it. Because the canvas is dark, the
file's `ink` is the cream `#f9f3e8` that the site sets on those bands (`--color-cream`); the grey-green
`#535e5d` that reads on Pampas is kept as `ink-on-light`.

Typography is one family — DM Sans — and the signature is lightness: headlines are weight **300**
with slight *positive* tracking (+0.01em: 56px → 0.56px, 48px → 0.48px, 36px → 0.36px). Body copy is
regular 400 in a grey-green `#535e5d`. Bold 700 is used only inside buttons and small uppercase
eyebrows. Nothing is condensed, nothing is italic, nothing shouts.

Shape language is soft but restrained: 8px buttons, 16px cards and hero panel, 18px pill-ish nav
hover chips, 50% circles for icons. No shadows were measured on the page (the `boxShadows` frequency
table is empty); depth comes from tone changes between Pampas, white and the greens.

**Key characteristics**
- Arcadia Green `#0fff87` with Evening Sea text `#104336` = the primary CTA (42px tall, 8px radius, `0px 24px` padding).
- Hero headline DM Sans 56px / 300 / 61.6px line height / +0.56px tracking, black `#000000`.
- Body ink on the dark canvas is cream `#f9f3e8` (905 weighted chars); on Pampas it is `#535e5d` (920 weighted chars, the most-read colour), 16px/24px.
- Dark product cards: `#104336`, 16px radius, 24px padding, cream `#f9f3e8` text.
- Full-bleed bands alternate Pampas `#f3f1ec` → Evening Sea dark `#0b2c24` → black `#101f1e` footer.
- Accent colours (violet `#7c18d3`, viking `#5cc4dc`, lime `#c4ff45`) appear only in charts, eyebrows and illustration.

## Colors

All hex values below come from the live page's computed styles or its own CSS custom properties
(`desktop.rootVars`, e.g. `--color-eveningSea=#104336`). Official names are from
[Arcadia's brand guidelines – Color](https://guidelines.arcadia.com/color).

### Core
| Token | Hex | Live CSS variable | Role |
|---|---|---|---|
| primary | `#0fff87` | `--color-springGreen` | CTA fill ("Arcadia Green" in the guidelines) |
| primary-dark | `#0cc769` | `--color-springGreen-dark` | darker green step in the site's CSS |
| evening-sea | `#104336` | `--color-eveningSea` | buttons, product cards, text on green |
| evening-sea-dark | `#0b2c24` | `--color-eveningSea-dark` | full-bleed dark bands, dark header state |
| canvas | `#0b2c24` | — | largest-area colour in the capture (≈45%) |
| pampas | `#f3f1ec` | `--color-pampus` | body background / light page top |
| pampas-light | `#f8f7f4` | `--color-pampus-light` | lighter surface ("Paper White" in the guidelines) |
| black | `#101f1e` | `--color-black` | footer, "Request demo" button |
| cream | `#f9f3e8` | `--color-cream` | text on dark bands, footer text |

### Text
| Token | Hex | Where measured |
|---|---|---|
| ink | `#f9f3e8` | body text on the dark canvas (905 weighted chars); `--color-cream` |
| ink-on-light | `#535e5d` | most-read text (920 weighted chars), body paragraphs on Pampas; `--color-darkGray` |
| heading | `#000000` | h1, light-section h2/h3 |
| evening-sea-light | `#afc4bf` | paragraphs on dark bands (18px/27px) |
| cream-muted | `#f7f6f380` | footer legal (11px) and "Cookie settings" |
| gray | `#798281` | `--color-gray` |

### Accents (charts, eyebrows, illustration)
| Token | Hex | Guideline name |
|---|---|---|
| electric-violet | `#7c18d3` | Electric Violet — measured on 14px/700 uppercase eyebrows and dates |
| blue-marguerite | `#6666d9` | Blue Marguerite |
| viking | `#5cc4dc` | Viking |
| viking-light | `#d5f0f6` | — |
| lime | `#c4ff45` | Aurora |
| lime-hover | `#afdf3e` | — (`--color-lime-hover`) |
| coral | `#ff6b78` | — |
| danger | `#d80e20` | — (`--color-danger`) |

### Alpha / state
- `scrim` `#00000099` — 60% black overlay measured over a large area (modal/video layer).
- `nav-hover-tint` `#0040370d` — `rgba(0,64,55,.05)`, the background a nav button takes on hover (`--color-eveningSea05`).
- `black-hover` `#515c5b` — measured hover fill of the `#101f1e` "Request demo" button.

The site also defines opacity ladders as variables: `--color-eveningSea05 … eveningSea90`,
`--color-cream05 … cream90` and `--color-black05 … black60`. Use those rather than inventing tints.

**Guidelines vs live.** The brand guidelines give proportions — Evening Sea ~20%, Arcadia Green ~15%
"use sparingly", Pampas ~25% — and secondary colours Deep Sea `#0E382D` and Dark Green `#145242`.
Those two secondary hexes were not found on the live homepage; the live dark band is
`#0b2c24`. The live site wins; they are not tokens in this file.

## Typography

### Family
DM Sans is the only family rendered on the homepage (4,034 of 4,034 weighted characters). It is
served through Next.js font optimisation as `__DMSans_cff41e` with a metric-matched fallback
`__DMSans_Fallback_cff41e`; loaded weights are 300–700. The site's CSS also declares
`--font-heading: '__TTBluescreens_0cdbc8'` with a matching `@font-face`, but no measured text on the
homepage or the contact page used it, so it is not a token here.

[Arcadia's typography guidelines](https://guidelines.arcadia.com/typography) confirm DM Sans as "the
sole typeface across the system" and state: "We favor lighter weights (300-400) for headlines …
Heavier weights (500-600) are reserved for emphasis and UI elements."

### Scale (measured)
| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| display-h1 | 56px | 300 | 61.6px | 0.56px | hero h1 (also contact-page h1) |
| heading-xl | 48px | 300 | 52.8px | 0.48px | section h2 ("One platform. Every energy decision.") |
| heading-lg | 36px | 300 | 43.2px | 0.36px | secondary section h2 |
| heading-md | 24px | 400 | 28.8px | 0.24px | "Join our mailing list" |
| title | 20px | 500 | 24px | 0.2px | card titles (h3), "Trusted by…" line |
| body-lg | 20px | 400 | 30px | — | intro paragraphs |
| body-md | 18px | 400 | 27px | — | hero paragraph, dark-band paragraphs |
| body | 16px | 400 | 24px | — | default paragraph, footer links |
| nav-item | 18px | 500 | 18px | -0.36px | header menu buttons |
| button | 16px | 700 | 24px | — | all buttons |
| eyebrow | 14px | 700 | 16.1px | — | uppercase category labels, violet |
| date-label | 14px | 700 | 14px | 0.98px | uppercase dates, violet |
| stat-label | 14px | 600 | 14px | -0.28px | "$100B in utility spend under management" chips |
| legal | 11px | 400 | 16.5px | — | footer copyright |
| mobile-h1 | 42px | 300 | 46.2px | 0.42px | h1 at 390px |
| mobile-body | 14px | 400 | 21px | — | body at 390px |

Rules visible in the measurements:
- Headings ≥ 20px carry tracking of exactly +1% of the size (0.2px at 20px … 0.56px at 56px).
- Small UI labels go the other way: −0.28px at 14px, −0.36px at 18px.
- Headline line height is 1.1× (61.6/56, 52.8/48) on display sizes and 1.2× at 36px and below; body is 1.5×.

**Guidelines vs live.** The guidelines list H1 at 88px and H2 at 72px (Light 300, 100% line height,
0.02em tracking). The live homepage h1 is 56px / 61.6px with 0.01em tracking. The live site wins.

### Note on Font Substitutes
DM Sans is an open-source family (Google Fonts), so the real face can be used directly. Load it with
weights 300, 400, 500, 600 and 700 and name it `"DM Sans"` after the served family names.

## Layout

- **Viewport measured:** 1280px desktop (body measured 1265px wide), 390px mobile.
- **Header:** 68px tall (the site defines `--navbar-height: 5.6rem`; its rem base is not 16px);
  logo left, four menu buttons (Products, Solutions, Partners, Resources) with chevrons, then
  "Sign in" outline + "Contact us" filled on the right.
- **Hero panel:** inset from the page edges, 16px radius, gradient wash background, centred text
  column ~900px wide (h1 measured 900px wide), product screenshot overlapping the panel's bottom.
- **Logo marquee:** single row of greyscale customer logos on Pampas, with a centred 20px/500 lead-in.
- **Dark band:** full-bleed `#0b2c24`, h2 48px/300 in white left-aligned, then a three-up row of
  `#104336` product cards (each 379px × 230px, 24px gap).
- **Grid variables:** `--grid-columnCount: 4`, `--grid-gutter: 1.6rem`, `--grid-outerGutter: 1.6rem`
  (as read from `:root`).
- **Fluid section spacing:** the site's own `--spacing-*` variables are `clamp()` expressions, e.g.
  `--spacing-100: clamp(5.6rem,5.952vw,10rem)`, `--spacing-64-md: clamp(4rem,5vw,6.4rem)`,
  `--spacing-24-md: clamp(1.4rem,1.428vw,2.4rem)`.
- **Measured gaps:** 24px (17×), 64px (14×), 14px (12×), 16px (9×), 32px (7×), 48px, 100px.
- **Measured paddings:** 24px (21×), 40px (13×), 16px (8×), 88px, 110px, 120px, 64px.

## Elevation & Depth

No `box-shadow` was measured on any rendered element of the homepage. Depth is created by:
1. **Tone steps** — Pampas page → white dashboard screenshot → deep green bands → near-black footer.
2. **The hero panel gradient** — a soft lavender/sage wash inside a 16px-radius panel.
3. **Overlays** — a 60% black scrim (`#00000099`) measured over a large area.

The CSS does ship two shadow definitions — `--dropShadow: 0 5rem 8rem rgba(0,0,0,.12)` and a
three-layer `0 8px 24px rgba(0,35,29,.18), 0 32px 72px rgba(0,35,29,.28), 0 72px 120px rgba(0,35,29,.2)`
— but neither was observed on a visible element; treat them as available, not as the default look.

## Shapes

| Token | Value | Where |
|---|---|---|
| button | 8px | every CTA ("Contact us", "Request demo", "Sign in") |
| card | 16px | product cards, hero panel, contact-page cards (16px measured 11×) |
| nav-item | 18px | header menu buttons (34px tall) — hover chip shape |
| circle | 50% | icon buttons / avatars (measured 10×) |

One element uses `8px 8px 0px 0px` (top-only rounding, e.g. a tab or panel header). No skew, clip-path
or notched shapes were measured.

## Components

### Buttons
**button-primary (Arcadia Green)** — `#0fff87` fill, `#104336` text, DM Sans 16px/700/24px, 8px radius,
`0px 24px` padding, 42px tall (header "Contact us" in the dark header state). The same fill appears as
a 48px, `0px 16px` "Request demo"/"Request a demo" button (contact page hero, line height 16px).

**button-dark** — `#101f1e` fill, white text, 16px/700, 8px radius, `0px 16px` padding, 48px tall —
this is the hero "Request demo" seen in the capture. Hover (measured): fill becomes `#515c5b`.

**button-evening-sea** — `#104336` fill, white text, `0px 24px`, 42px — header "Contact us" in the
light header state visible in the capture. Hover (measured): fill becomes `#0b2c24`.

**button-outline** — transparent, 1px `#104336` border, `#104336` text, 42px, `0px 24px`, 8px radius
("Sign in" on the light header). Hover (measured): fill `#104336`, text `#f9f3e8`.

**button-outline-on-dark** — on the dark header state: transparent, 1px `#f9f3e8` border, text `#f3eee3`.

### Navigation
- Header 68px. Light state: Pampas background, Evening Sea text (capture). Dark state measured by the
  extractor: background `#0b2c24`, text `#f9f3e8`.
- Menu buttons: 18px/500, −0.36px tracking, 34px tall, 18px radius; hover background
  `rgba(0,64,55,.05)` (`#0040370d`), text stays `#104336`.

### Cards
- **card-product** — `#104336`, 16px radius, 24px padding, 379 × 230px, cream `#f9f3e8` text; title
  20px/500/0.2px, description 16px/24px in `#afc4bf`.
- **card-light** — white `#ffffff`, 16px radius, `#101f1e` text (contact page, 379 × 440px).

### Eyebrows and chips
- Uppercase violet `#7c18d3` eyebrows: 14px/700, line height 16.1px (categories) or 14px with
  0.98px tracking (dates).
- Stat chips: 14px/600, −0.28px tracking, `#101f1e` text.

### Footer
`#101f1e` background, cream `#f9f3e8` link text at 16px/24px, column heads in Arcadia Green
`#0fff87` (measured child colour), legal line 11px/16.5px in `#f7f6f380`. A mailing-list block uses
a 24px/400 heading.

### Not declared
No text input was detected on the homepage or on `/contact` (the contact form did not render a
measurable input in the extractor), so no input component is specified here.

## Design System Architecture

**Arcadia publishes brand guidelines, not a public component design system.** The guidelines site is
[guidelines.arcadia.com](https://guidelines.arcadia.com/logo) with sections Intro, Brand personality,
[Logo](https://guidelines.arcadia.com/logo), [Color](https://guidelines.arcadia.com/color),
[Typography](https://guidelines.arcadia.com/typography), Art direction, Using the brand and Resources.
No npm token package, public Storybook or Figma community kit was found.

**Token architecture (brand level).** The [Color page](https://guidelines.arcadia.com/color) groups
colours in three tiers: *Core* (Evening Sea `#104336`, Arcadia Green `#0FFF87`, Pampas `#F3F1EC`),
*Secondary* (Black `#101F1E`, Deep Sea `#0E382D`, Dark Green `#145242`, Paper White `#F8F7F4`) and
*Brand accents* (Electric Violet `#7C18D3`, Blue Marguerite `#6666D9`, Viking `#5CC4DC`, Aurora
`#C4FF45`), each with RGB and (for core) Pantone values, plus usage proportions ("Core colors should
comprise 75%+ of designs").

**Token architecture (live site, de-facto).** The production CSS exposes flat custom properties named
`--color-{colorName}[-light|-dark|-mid|NN]`, verbatim e.g. `--color-eveningSea`,
`--color-eveningSea-dark`, `--color-springGreen`, `--color-pampus`, `--color-electricViolet`,
`--color-lime-hover`, and opacity ladders `--color-eveningSea05` … `--color-eveningSea90`,
`--color-cream05` … `--color-cream90`. There is no separate semantic tier in the variable names
(no `--color-text-primary`-style aliases were observed); semantics live in component CSS.
Other variables: `--font-base`, `--font-heading`, `--ease-arcadia: cubic-bezier(0.22,1,0.36,1)`,
`--navbar-height`, `--grid-columnCount`, `--grid-gutter`, and fluid `--spacing-{n}-{bp}` clamps.

**Theming.** No dark-mode or high-contrast theme switch was found in the guidelines or observed on the
site. "Dark" vs "light" is a per-section treatment: the header switches between a Pampas/Evening Sea
state and a `#0b2c24`/cream state. The [Logo page](https://guidelines.arcadia.com/logo) documents
standard colour, reversed (dark backgrounds) and monochrome logo versions.

**Type & spacing systems.** Per the [Typography page](https://guidelines.arcadia.com/typography):
one typeface (DM Sans), headings H1–H11 (H1 88px, H2 72px, Light 300, H7 24px Regular, H8–H11 20→14px
Medium) and body sizes 20/18/16/14/12px at 150% line height, "Minimum 16px for body text". The live
homepage uses a reduced scale (56/48/36px headlines) and 150% body line height (24/16, 27/18, 30/20),
consistent with that rule.

**Component model.** Not publicly documented. On the site the repeated components are: 8px-radius
buttons in four fills (green, evening sea, black, outline), 34px pill-ish nav buttons, 16px-radius
dark and light cards, uppercase violet eyebrows, and a logo marquee.

**Accessibility.** The [Color page](https://guidelines.arcadia.com/color) states: "All combinations
must meet WCAG AA minimum (4.5:1 contrast ratio)". Logo backgrounds are restricted to Evening Sea,
Arcadia Green, Pampas, white or transparent; secondary colours are never used as solid backgrounds.

**Delivery.** Assets (Arcadia-logos.zip, press documents) are distributed from the guidelines'
Resources page. The site itself is a Next.js build (font class names `__DMSans_cff41e` are Next.js
`next/font` output). No versioned package is public.

## Do's and Don'ts

**Do**
- Use `#0fff87` only for the single most important action per view, with `#104336` text on it.
- Set headlines in DM Sans 300 with +1% tracking; let size, not weight, create hierarchy.
- Alternate light Pampas `#f3f1ec` sections with full-bleed `#0b2c24` bands.
- Put cream `#f9f3e8` or `#afc4bf` text on the dark greens; `#535e5d` on light.
- Keep buttons at 8px radius and cards/panels at 16px.
- Use violet `#7c18d3` uppercase 14px/700 eyebrows for categories and dates.
- Use the site's opacity ladders (`--color-eveningSea05` etc.) for tints and hovers.

**Don't**
- Don't use Arcadia Green as a section background or for body text.
- Don't use bold (600–700) for headlines — 700 is for buttons and eyebrows only.
- Don't add drop shadows to cards; depth is tonal.
- Don't use accent colours (viking, lime, coral) as large solid backgrounds — the guidelines restrict
  secondary/accent colours to icons, illustration and graphics.
- Don't use pure black for body text; body ink is cream `#f9f3e8` on the dark canvas and `#535e5d` (`ink-on-light`) on Pampas.
- Don't introduce a second typeface on the marketing surface.

## Responsive Behavior

Measured at 390px:
- h1 drops from 56px/61.6px to **42px/46.2px**, still weight 300 with +0.42px tracking.
- Section h2 drops from 48px to **36px/39.6px** (+0.36px).
- Body paragraphs drop from 16px/24px to **14px/21px**; the most frequent mobile sizes are 16px,
  14px, 20px, 18px and 36px.
- Header becomes 56px tall with Evening Sea `#104336` text; menu collapses.
- The hero "Request demo" button keeps its desktop spec: `#101f1e`, 48px tall, `0px 16px`, 8px radius.
- Text columns become 311–343px wide (16px outer gutter: `--grid-outerGutter: 1.6rem`).
- Fluid section padding comes from the `clamp()` spacing variables, so vertical rhythm compresses
  smoothly rather than at fixed breakpoints.

## Iteration Guide

1. Start every page on Pampas `#f3f1ec` with the 68px header; switch to `#0b2c24` for the first deep
   content band.
2. Hero: one 56px/300 headline (61.6px leading, 0.56px tracking, `#000000`), one 18px/27px paragraph
   in `#101f1e`, one button — then a product visual in a 16px-radius panel.
3. Buttons: choose fill by background — green `#0fff87` (primary), `#101f1e` or `#104336` (secondary
   on light), outline `#104336` (tertiary). Always 8px radius, 16px/700 label, 42–48px tall.
4. Cards on dark: `#104336`, 16px radius, 24px padding, cream title 20px/500, `#afc4bf` body.
5. Copy: 16px/24px `ink` `#f9f3e8` (or `#afc4bf`) on the dark canvas, `ink-on-light` `#535e5d` on Pampas.
6. Accents only inside data visualisation and eyebrows.
7. Before shipping, check every hex against the tables above and every type size against the scale.
