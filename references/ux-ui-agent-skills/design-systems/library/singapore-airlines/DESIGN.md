---
version: alpha
name: Singapore Airlines
category: "Airlines"
description: Singapore Airlines' web system as measured on singaporeair.com — a deep navy primary "#00266b" (header gradient, SEARCH button, section headings) over a pale "#fafafa" canvas, gold "#f99f1c" hover accents in the header, and electric blue "#0254ec" links. Headlines are set in Arthur Baker's Sigvar Serial (served as sigvar / sigvar_serial-regular) at 26–32px, UI and body text in Mark Simonson's proxima-nova at 11–18px. Buttons are near-square (2px radius), 11px/600 uppercase with 1.5px tracking; destination cards are 4px-radius photo tiles with a soft 2px 4px 4px shadow that blooms on hover.

colors:
  primary: "#00266b"
  primary-hover: "#003494"
  header-gradient-start: "#134297"
  primary-mobile-gradient-end: "#174cab"
  secondary: "#2275d3"
  link: "#0254ec"
  accent-gold: "#f99f1c"
  accent-orange: "#ff9f00"
  canvas: "#fafafa"
  canvas-inner: "#f7f7f7"
  surface: "#ffffff"
  ink: "#222222"
  ink-inverse: "#ffffff"
  ink-black: "#000000"
  ink-light: "#efefef"
  ink-mute: "#666666"
  image-placeholder: "#808080"
  hairline: "#cccccc"
  hairline-soft: "#dddddd"
  scrim-dark: "#000000b3"
  scrim-light: "#ffffffbf"
  error: "#df0000"
  on-primary: "#ffffff"

typography:
  display-hero:
    fontFamily: "sigvar_serial-regular, sigvar, Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
  heading-page:
    fontFamily: "sigvar-regular, sigvar, Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
  heading-section:
    fontFamily: "sigvar, Helvetica, Arial, sans-serif"
    fontSize: 26px
    fontWeight: 500
    lineHeight: 22px
  heading-sub:
    fontFamily: "sigvar-regular, sigvar, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 30px
  heading-card:
    fontFamily: "sigvar, serif"
    fontSize: 20px
    fontWeight: 400
  display-signup:
    fontFamily: "baker-signet-web, serif"
    fontSize: 33px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 0.66px
  body-lead:
    fontFamily: "proximanova-regular, proxima-nova, \"Open Sans\", Arial, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  body:
    fontFamily: "proxima-nova, \"Open Sans\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
  body-light:
    fontFamily: "proxima-nova, \"Open Sans\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 200
    lineHeight: 28px
  body-sm:
    fontFamily: "proxima-nova-regular, proxima-nova, \"Open Sans\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  input-value:
    fontFamily: "proxima-nova, sans-serif"
    fontSize: 17px
    fontWeight: 700
  button:
    fontFamily: "proxima-nova, \"Open Sans\", Arial, Helvetica, sans-serif"
    fontSize: 11px
    fontWeight: 600
    letterSpacing: 1.5px
    textTransform: uppercase
  button-mobile:
    fontFamily: "proxima-nova, \"Open Sans\", Arial, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 1px
    textTransform: uppercase

rounded:
  none: 0px
  xs: 2px
  sm: 3px
  md: 4px
  lg: 10px
  login-pill: 30px
  circle: 50%

spacing:
  xxs: 5px
  xs: 10px
  sm: 15px
  md: 20px
  lg: 30px
  card-padding: 15px 15px 25px
  input-padding: 20px 15px 10px
  button-padding: 13px 30px
  header-padding: 0px 10px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 13px 30px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.login-pill}"
    padding: 6px 20px
    height: 28px
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    border: "1px solid #00266b"
    lineHeight: 50px
    height: 50px
  button-outlined-compact:
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    border: "1px solid #00266b"
    padding: 10px 20px
    height: 38px
    letterSpacing: 0.79px
  button-mobile-primary:
    backgroundColor: "{colors.primary-mobile-gradient-end}"
    backgroundImage: linear-gradient(to right, rgb(0, 38, 107) 0%, rgb(23, 76, 171) 100%)
    textColor: "{colors.on-primary}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.sm}"
    height: 50px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 4px 5px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    transition: color 0.4s ease 0s
  link-hover:
    textColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.primary}"
    backgroundImage: linear-gradient(315deg, rgb(19, 66, 151) 0%, rgb(15, 60, 142) 20%, rgb(11, 55, 133) 40%, rgb(7, 49, 124) 60%, rgb(3, 43, 116) 80%, rgb(0, 38, 107) 100%)
    textColor: "{colors.on-primary}"
    height: 81px
    padding: 0px 10px
  nav-link-hover:
    textColor: "{colors.accent-gold}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input-value}"
    rounded: "{rounded.none}"
    padding: 20px 15px 10px
    height: 50px
  destination-card:
    backgroundColor: "{colors.image-placeholder}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.md}"
    padding: 15px 15px 25px
    height: 265px
    width: 255px
    boxShadow: rgba(0, 0, 0, 0.1) 2px 4px 4px 0px
  destination-card-hover:
    boxShadow: rgba(0, 0, 0, 0.6) 0px 15px 60px -10px
---

## Overview

Singapore Airlines' website is a calm, photography-led booking surface: a deep navy header band, a
full-bleed cinematic hero, a white booking widget that overlaps the bottom of the hero, and then a
pale `#fafafa` page carrying a grid of destination photo cards. Everything is restrained — almost no
colour outside navy, white and photography, with a single warm gold used only as a hover accent and
as the thin vertical rule beside section titles and fares.

The brand voice is set by two typefaces. Headlines ("Expand Your Horizons", "Trending in Singapore",
"Highlights", "Seamless travel made easy") use **Sigvar Serial** — Arthur Baker's calligraphic sans
with flared, slightly pen-like terminals — served as `sigvar` / `sigvar_serial-regular`. All UI text,
labels and body copy use **proxima-nova**. The headline face is what makes the page feel like the
airline and not a generic OTA; the proxima-nova layer stays quiet and functional.

Measured key facts (desktop 1280px):

- Page canvas: `#fafafa` (body background, also the largest background by area).
- Header: 81px tall, navy linear gradient from `#134297` to `#00266b` at 315deg, white uppercase links.
- Primary CTA ("SEARCH"): `#00266b` fill, white 11px/600 uppercase text with 1.5px tracking,
  padding 13px 30px, 50px tall, 2px radius. Hover fills `#003494`.
- Secondary CTA ("LOG IN" in the KrisFlyer strip): `#2275d3`, 30px radius pill, 28px tall, padding 6px 20px.
- Links: `#0254ec`, hover `#00266b` with a 0.4s colour transition.
- Destination cards: 255 × 265px, 4px radius, shadow `rgba(0, 0, 0, 0.1) 2px 4px 4px 0px`,
  hover shadow `rgba(0, 0, 0, 0.6) 0px 15px 60px -10px`.
- Body ink on the `#fafafa` canvas is `#222222` (form values, body copy; the most-read colour on
  content pages). By raw count white `#ffffff` is the most-read colour on the homepage, but only because
  most homepage copy sits on photography (hero, card captions, app promo band) — it is `ink-inverse`.

The overall impression is premium-hospitality rather than tech: lots of photography, small
uppercase tracked UI labels, near-square controls, and a single navy that carries every action.

## Colors

### Brand & Accent

- **Primary navy** `#00266b` — the brand's action and identity colour: SEARCH button fill, the end
  stop of the header gradient, section heading text ("Trending in Singapore"), booking-card heading,
  outlined button text and border, and link hover colour.
- **Primary hover** `#003494` — measured hover fill of the SEARCH button (rgb(0, 52, 148)).
- **Header gradient start** `#134297` — the lighter start stop of the 315deg header gradient
  (rgb(19, 66, 151)); the gradient steps through rgb(15, 60, 142), rgb(11, 55, 133), rgb(7, 49, 124),
  rgb(3, 43, 116) to rgb(0, 38, 107).
- **Mobile CTA gradient end** `#174cab` — the right-hand stop of the mobile "BOOK FLIGHTS" button
  gradient (from `#00266b`).
- **Secondary blue** `#2275d3` — the KrisFlyer "LOG IN" pill and the "Get best flights quicker" chip.
- **Link blue** `#0254ec` — inline links ("Sign up now", "Apply promo code", "Multi-city / Stopovers").
- **Accent gold** `#f99f1c` — hover colour of every header link (PLAN TRAVEL, HELP, LOG IN, locale).
- **Accent orange** `#ff9f00` — a measured background fill of tiny area. In the capture the "BETA"
  tag and the thin rules before section titles and fares are orange; which element carries this
  exact hex was not isolated.

### Surface

- **Canvas** `#fafafa` — the page background between and below sections.
- **Canvas (inner pages)** `#f7f7f7` — measured page canvas on the KrisFlyer and registration pages.
- **Surface** `#ffffff` — booking widget, Highlights card, form fields.
- **Image placeholder** `#808080` — background behind destination-card photography while loading.
- **Scrim dark** `#000000b3` and **scrim light** `#ffffffbf` — translucent overlays on imagery
  (the KrisFlyer login strip over the hero reads as a light scrim).

### Text

- **Ink** `#222222` — body ink on the canvas: form values and body copy on light surfaces; dominant on inner pages.
- **Ink inverse** `#ffffff` — copy on photography and navy (the most-read colour on the homepage by raw count, never used on the canvas).
- **Ink black** `#000000` — body default colour.
- **Ink light** `#efefef` — body copy on the dark app-promo band ("Book and manage flights on the go").
- **Ink mute** `#666666` — secondary labels.

### Semantic

- **Error** `#df0000` — present in the site CSS and as a small measured background.
- **Hairline** `#cccccc` — the most frequent measured border colour (form fields, dividers).
- **Hairline soft** `#dddddd` — secondary border.

No success/warning palette is documented publicly; none is declared here.

## Typography

### Font Family

- **Sigvar Serial** — served under the family names `sigvar`, `sigvar_serial-regular`,
  `sigvar-regular` and `Sigvar Serial`. The site's own `fonts-n2619.css` maps `sigvar` to
  `/assets/fonts/sigvar_serial-regular-webfont.*`. MyFonts lists Sigvar Serial as designed by
  Arthur Baker, published by SoftMaker, 14 styles.
- **proxima-nova** — served from `/assets/fonts/proximanova-{light,regular,semibold,bold}-webfont.*`
  at weights 300, 400, 600 and 700; also referenced as `proximanova-regular` and
  `proxima-nova-regular`. Designed by Mark Simonson.
- **baker-signet-web** — used on the KrisFlyer registration page heading ("Sign up and take off").
- Fallback stack used by the site: `"Open Sans", Arial, Helvetica, sans-serif`.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Where |
|---|---|---|---|---|---|---|
| display-hero | sigvar_serial-regular | 28px | 400 | 33.6px | — | Hero "Expand Your Horizons" |
| heading-page | sigvar-regular | 32px | 400 | 36px | — | KrisFlyer page h1 |
| heading-section | sigvar | 26px | 500 | 22px | — | "Trending in Singapore", "Highlights" |
| heading-sub | sigvar-regular | 24px | 600 | 30px | — | KrisFlyer page h2 |
| heading-card | sigvar | 20px | 400 | — | — | "Hi, where would you like to go?" |
| display-signup | baker-signet-web | 33px | 400 | 40px | 0.66px | Registration heading |
| body-lead | proximanova-regular | 18px | 400 | 25.2px | — | Hero subtext, "Discover more" |
| body | proxima-nova | 16px | 400 | — | — | Default body |
| body-light | proxima-nova | 16px | 200 | 28px | — | App promo paragraph |
| body-sm | proxima-nova-regular | 14px | 400 | 20px | — | Content-page body |
| input-value | proxima-nova | 17px | 700 | — | — | "Singapore", "Economy", "1 Adult" |
| button | proxima-nova | 11px | 600 | — | 1.5px | SEARCH, LOG IN, VIEW MORE DEALS |
| button-mobile | proxima-nova | 12px | 400 | — | 1px | Mobile BOOK FLIGHTS |

Additional measured letter-spacing pairs on the homepage: 13px/1px and 12px/1.5px (tab labels and
small uppercase captions such as BOOK TRIP / MANAGE BOOKING), 8px/1px (micro field labels FROM,
CLASS, PASSENGERS). Their weights were not isolated, so they are not declared as tokens.

### Principles

- Headlines are Sigvar, sentence case or title case, never uppercase, never tracked.
- Every interactive label is proxima-nova uppercase with positive tracking (1–1.5px) at 11–13px.
- Form values are heavy (17px/700) so the chosen city/date reads instantly; the field label above
  is tiny (8px uppercase).
- Light weight 200 is reserved for long paragraphs on dark photography.

### Note on Font Substitutes

Both faces are commercial retail fonts (not airline-proprietary): Sigvar Serial is sold via MyFonts
(SoftMaker) and Proxima Nova via Mark Simonson Studio. If no licence is available, the site's own
fallback for UI is `"Open Sans", Arial, Helvetica, sans-serif`; for Sigvar the site falls back to
`Helvetica, Arial, sans-serif` — which loses the calligraphic character, so license Sigvar Serial
whenever brand fidelity matters.

## Layout

### Spacing System

Measured paddings cluster at 5px, 10px, 15px, 20px and 30px (15px is by far the most frequent);
measured gaps are 10px and 20px. Composite paddings:

- Primary button: 13px 30px.
- Destination card: 15px 15px 25px.
- Booking-form field: 20px 15px 10px (room for the 8px label above the value).
- Header: 0px 10px.

### Grid & Container

- Content sits in a centred container whose left edge aligns with the logo; at 1280px the
  destination grid is four 255px cards per row, two rows, with even gutters.
- The booking widget spans the full container width, overlapping the bottom of the hero.
- Highlights: one wide feature card (about two-thirds) next to one narrower card.
- The app promo is a full-bleed photographic band with text on the left third.

### Whitespace Philosophy

Generous vertical space between sections (Trending, Highlights, app promo) with tight internal
spacing inside cards and the booking form. The page breathes through photography rather than
through empty colour blocks.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| 0 | none | Header, booking widget body, buttons |
| 1 | `rgba(0, 0, 0, 0.06) 0px 2px 4px 0px` | Light lift on white panels |
| 2 | `rgba(0, 0, 0, 0.1) 2px 4px 4px 0px` | Destination cards at rest |
| 3 | `rgba(0, 0, 0, 0.15) 0px 4px 5px 0px` | Mobile primary CTA |
| Hover | `rgba(0, 0, 0, 0.6) 0px 15px 60px -10px` | Destination card hover — a deep, soft bloom |

Depth is mostly photographic: dark gradient scrims at the bottom of card photos carry white
captions, and the hero image darkens toward the left for the headline.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Form fields, header, tabs |
| xs | 2px | Primary and outlined buttons (most frequent radius in CSS) |
| sm | 3px | Mobile BOOK FLIGHTS button |
| md | 4px | Destination cards |
| lg | 10px | Small rounded elements |
| login-pill | 30px | KrisFlyer LOG IN pill |
| circle | 50% | Back-to-top button, radio dots |

Split radii like `2px 0px 0px 2px` and `0px 2px 2px 0px` appear on joined field groups (From/To,
Depart/Return), so the pair reads as one rounded 2px box.

### Photography Geometry

Destination photos fill the card edge to edge with 4px corners; hero photography is full-bleed with
no rounding. No skewed, notched or clipped shapes were measured.

## Components

### Buttons

- **Primary (SEARCH)**: bg `#00266b`, text `#ffffff`, 11px/600 uppercase, 1.5px tracking,
  padding 13px 30px, height 50px, radius 2px. Hover bg `#003494`.
- **Secondary (LOG IN pill)**: bg `#2275d3`, white 11px/600 uppercase, 1.5px tracking, padding
  6px 20px, height 28px, radius 30px.
- **Outlined (VIEW MORE DEALS / LEARN MORE)**: transparent, text and 1px border `#00266b`
  (white on dark bands), 11px/600 uppercase, line-height 50px, height 50px, radius 2px.
- **Outlined compact (KrisFlyer page)**: 1px solid `#00266b`, padding 10px 20px, height 38px,
  radius 2px, tracking 0.79px.
- **Mobile primary (BOOK FLIGHTS)**: gradient `linear-gradient(to right, rgb(0, 38, 107) 0%,
  rgb(23, 76, 171) 100%)`, white 12px/400 uppercase with 1px tracking, height 50px, radius 3px,
  shadow `rgba(0, 0, 0, 0.15) 0px 4px 5px 0px`.

### Cards & Containers

- **Destination card**: 255 × 265px, radius 4px, padding 15px 15px 25px, placeholder bg `#808080`,
  white caption stack bottom-left (city in proxima-nova bold, cabin "Economy" regular, then an
  orange rule and "From SGD 254"). Shadow `rgba(0, 0, 0, 0.1) 2px 4px 4px 0px`; on hover the shadow
  becomes `rgba(0, 0, 0, 0.6) 0px 15px 60px -10px` and the link colour shifts from `#0254ec` to
  `#00266b`.
- **Booking widget**: white panel, tab row on top (active tab white, inactive tabs dark translucent
  over the hero), heading "Hi, where would you like to go?" in Sigvar 20px `#00266b`.

### Inputs & Forms

- **Text input (booking fields)**: value 17px/700 proxima-nova `#222222`, padding 20px 15px 10px,
  height 50px, square corners inside a `#cccccc` hairline box; tiny uppercase label (8px) sits
  above the value inside the field.
- Radio buttons (Book flights / Redeem flights) use an orange-filled dot when selected.
- Checkbox "Try our new booking experience" with an orange "BETA" tag.

### Navigation

- **Header**: 81px, navy gradient, padding 0px 10px. Logo left; primary links PLAN TRAVEL,
  FLYING WITH US, TRAVEL INFO, PPS CLUB & KRISFLYER, CORPORATE in white uppercase; a utility row
  above (notifications, CHAT, HELP, FEEDBACK, SINGAPORE · ENGLISH) and LOG IN | SIGN UP right.
  Every header link hovers to gold `#f99f1c`.
- **Mobile header**: 60px, `linear-gradient(222.07deg, rgb(0, 48, 135) 0%, rgb(0, 38, 107) 100%)`,
  logo + hamburger.

### Pills, Tags, and Chips

- "Get best flights quicker" chip: `#2275d3` pill with white text.
- "BETA" tag: small orange `#ff9f00` pill with white uppercase text.

### Signature Components

- **Section title with gold rule**: a short vertical orange bar left of a Sigvar heading in navy.
- **Fare line**: an orange vertical bar then "From SGD 254" in white bold on photography.
- **KrisFlyer login strip**: a translucent white bar across the hero with a person icon, inline
  "Sign up now" link and a blue LOG IN pill on the right.

## Design System Architecture

Singapore Airlines publishes no public design system, brand portal or token package. Searches for
"Singapore Airlines design system", "Singapore Airlines brand guidelines typeface Sigvar font",
"singaporeair.com media centre logo brand assets download press kit", "Singapore Airlines github
design tokens UI component library" and "Sigvar typeface Singapore Airlines" returned only cabin and
lounge design press and unofficial font blogs. What follows is the de-facto system measurable in
the site's own served files.

- **Token architecture**: there are no CSS custom properties on the page (`rootVars` is empty) —
  values are hard-coded in stylesheets. Repetition is the system: `#00266b` appears 178 times in the
  CSS corpus, `#0254ec` 61 times, radius 2px 132 times, 14px font size 196 times.
- **Shared component bundle**: [digitalweb-components-v20.css](https://www.singaporeair.com/assets/digitalweb/build/digitalweb-components-v20.css)
  carries the header, login, search, cookie and locale components with `dwc--` prefixed
  Component__Element class names, verbatim: `dwc--SiaHeader__HeaderMain`, `dwc--SiaLogin__LoginWrapper`,
  `dwc--SearchBox__NavSearchInput`, `dwc--CheckBox__Root`, `dwc--SiaCookie__PopupCookieGDPR`,
  `dwc--LocaleList__Regions`. Its `._hfc` scope sets `font-family: proxima-nova, "Open Sans", Arial,
  Helvetica, sans-serif` at 16px, links `#0254ec` with `transition: color 0.4s ease 0s`, hover `#00266b`.
- **Fonts**: [fonts-n2619.css](https://www.singaporeair.com/assets/style/fonts-n2619.css) declares
  `proxima-nova` at 300/400/600/700 and `sigvar` from `sigvar_serial-regular-webfont`. Typeface
  origins: [Sigvar Serial on MyFonts](https://www.myfonts.com/fonts/softmaker/sigvar-serial) (Arthur
  Baker, SoftMaker) and [Proxima Nova](https://www.marksimonson.com/fonts/view/proxima-nova) (Mark Simonson).
- **Theming**: no dark mode, high-contrast mode or density switch was found; light theme only.
- **Type & spacing systems**: no documented base unit. Measured spacing repeats 5/10/15/20/30px
  (a 5px step); type sizes cluster at 11, 12, 13, 14, 16, 18, 20, 26, 28px with no modular ratio.
- **Component model / inventory**: not documented publicly. Observed: header, utility bar, hero,
  KrisFlyer login strip, booking widget with tabs, radio, checkbox, field groups, destination card,
  highlight card, app promo band, buttons (primary, secondary pill, outlined), chips/tags.
- **Accessibility**: no published rules. Measured: white on `#00266b` buttons; 50px primary
  touch height; links rely on colour (no underline).
- **Delivery**: no npm package, Figma kit or versioning found publicly; the bundle file name
  carries a version suffix (`-v20`).

## Do's and Don'ts

### Do

- Use `#00266b` for every primary action and for section headings.
- Set headlines in Sigvar (`sigvar`) — 28px hero, 26px/500 sections, 20px card headings.
- Keep buttons near-square: 2px radius, 11px/600 uppercase, 1.5px tracking.
- Use the gold `#f99f1c` only as a hover state in the header.
- Put white captions on photography with a dark bottom gradient for legibility.
- Use the 4px radius and `rgba(0, 0, 0, 0.1) 2px 4px 4px 0px` shadow for photo cards.
- Keep the page canvas `#fafafa` with white panels on top.

### Don't

- Don't round primary buttons into pills — only the small KrisFlyer LOG IN is a 30px pill.
- Don't introduce bright accent fills; orange appears only as thin rules, dots and tiny tags.
- Don't uppercase or track Sigvar headlines.
- Don't set body copy in Sigvar; it is a display face here.
- Don't use pure black backgrounds for sections; dark bands are photography.
- Don't underline links by default — colour carries them (`#0254ec` → `#00266b`).

## Responsive Behavior

### Breakpoints

The shared component CSS switches at `max-width: 767px` (seen in digitalweb-components-v20.css).
Measurements were taken at 1280px and 390px.

### Touch Targets

- Desktop SEARCH: 50px tall. Booking fields: 50px tall.
- Mobile BOOK FLIGHTS: 50px tall, full width (370px at 390px viewport), radius 3px.

### Collapsing Strategy

- At 390px the header becomes a 60px navy gradient bar with logo and menu toggle.
- Body text stays 16px/200 with 28px line-height for the promo paragraph; the most frequent mobile
  sizes are 14px and 16px. No h1 was detected on mobile, so no mobile display size is declared.

### Image Behavior


## Iteration Guide

1. Start with the canvas `#fafafa` and `#222222` body ink, the navy gradient header (81px) and a full-bleed hero photo.
2. Place the hero headline in Sigvar 28px/400 white, subtext proxima 18px/400.
3. Overlap a white booking panel with uppercase tabs and the navy SEARCH button (13px 30px, 2px).
4. Add a Sigvar 26px/500 navy section title with an orange rule, then 4-up 255px photo cards.
5. Check hover states: button `#003494`, links `#00266b`, header links `#f99f1c`, card shadow bloom.
6. Verify every colour against the Colors list; never add tints that are not listed.
7. Keep microcopy short and service-like: "Book flights", "Apply promo code", "From SGD 254",
   "Discover more", "VIEW MORE DEALS".

### Voice of microcopy

Polite and aspirational in headlines ("Expand Your Horizons", "Seamless travel made easy",
"Hi, where would you like to go?"), terse and functional in UI ("SEARCH", "LOG IN", "Return Date").
Prices always shown as "From SGD …" with the currency code.

### Imagery

Warm, golden-hour travel photography: cabin crew and passengers in the hero, landmark destinations
(Sydney Opera House, Petronas Towers, Angkor Wat) on cards, lifestyle shots for product features.
Photos are saturated but natural; text always sits on a darkened part of the image.
