---
version: alpha
name: Climeworks
category: "Energy & Climate"
description: "Climeworks (climeworks.com), the Swiss direct-air-capture carbon removal company: white #ffffff pages with neutral #f0f1f1 bands and a black #000000 footer, Climeworks dark blue #008fe8 for the primary 'Remove CO2' button (hover #007fca) and light blue #78c5e5 for banners. Headlines are the serif Reckless Neue (served as WebRecklessNeue) at 71.9661px/400 with -1.49996px tracking; everything else is Haffer (served as WebHaffer) at 18px/26.1px. Buttons are 8px-radius, 44px tall with 12px 24px padding; media cards round to 16px."

colors:
  primary: "#008fe8"
  primary-hover: "#007fca"
  primary-deep: "#036dab"
  on-primary: "#ffffff"
  light-blue: "#78c5e5"
  yellow: "#ffcc24"
  canvas: "#ffffff"
  ink: "#000000"
  footer: "#000000"
  neutral: "#f0f1f1"
  near-black: "#161718"
  border-light: "#e2e3e4"
  border-mid: "#c5c7c9"
  disabled: "#a7acae"
  glass: "#ffffff8c"
  scrim: "#00000080"
  alert-red: "#ff144d"

typography:
  display-h1:
    fontFamily: "WebRecklessNeue, ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 71.9661px
    fontWeight: 400
    lineHeight: 71.9661px
    letterSpacing: -1.49996px
  page-h1:
    fontFamily: "WebRecklessNeue, ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 55px
    fontWeight: 400
    lineHeight: 60.5px
  heading-xl:
    fontFamily: "WebRecklessNeue, ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 43.9962px
    fontWeight: 400
    lineHeight: 50.5956px
  heading-lg:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 31.9991px
    fontWeight: 400
    lineHeight: 39.9989px
  lead:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 35px
  card-title:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 23.9998px
    fontWeight: 400
    lineHeight: 29.9997px
  body:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26.1px
  body-strong:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 26.1px
  button:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
  button-quiet:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
  meta:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23.2px
  footer-link:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.3px
  legal:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.4px
  mobile-h1:
    fontFamily: "WebRecklessNeue, ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 44.4642px
    fontWeight: 400
    lineHeight: 48.9106px
    letterSpacing: -0.02523px
  mobile-h2:
    fontFamily: "WebRecklessNeue, ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 30.2305px
    fontWeight: 400
    lineHeight: 33.2536px
  mobile-body:
    fontFamily: "WebHaffer, ui-sans-serif, system-ui, sans-serif"
    fontSize: 16.0331px
    fontWeight: 400
    lineHeight: 23.2481px

rounded:
  button: 8px
  nav-item: 6px
  card: 16px

spacing:
  xs: 8px
  sm: 12px
  md: 16px
  grid-gap: 20px
  lg: 24px
  xl: 40px
  2xl: 48px
  3xl: 56px
  4xl: 80px
  section: 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "1px solid {colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 12px 24px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid {colors.primary}"
    typography: "{typography.button-quiet}"
    rounded: "{rounded.button}"
    padding: 12px 24px
    height: 44px
  button-black:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    border: "1px solid {colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 12px 24px
    height: 44px
  button-neutral:
    backgroundColor: "{colors.neutral}"
    textColor: "{colors.ink}"
    border: "1px solid {colors.neutral}"
    typography: "{typography.button-quiet}"
    rounded: "{rounded.button}"
    padding: 12px 24px
    height: 44px
  nav-item:
    textColor: "{colors.near-black}"
    typography: "{typography.button-quiet}"
    rounded: "{rounded.nav-item}"
    height: 42px
  nav-item-hover:
    backgroundColor: "{colors.canvas}"
  cookie-banner:
    backgroundColor: "{colors.light-blue}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card-media:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.card}"
    typography: "{typography.card-title}"
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer-link}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body-strong}"
---

## Overview

Climeworks' homepage (measured at `https://climeworks.com/`, title "High-quality carbon removal
company") is quiet, photographic and typographic. The first screen is a full-bleed aerial photograph
of a misty forest with a large white serif headline — "We remove CO₂ from the air for good" — and a
28px white sans lead line. A floating, translucent grey-white navigation bar sits on top of the
photo with the climeworks wordmark, four plain text links (Solutions, Direct Air Capture, Investors,
About), a small square account icon button and a single bright blue **"Remove CO₂"** button.

Below the hero, a light-blue `#78c5e5` cookie strip ("No cookies = No worries") spans the width,
then the page turns white: a narrow centred column with a serif h2 ("Two parts to our business"),
two sans h3 sub-sections each with an outlined "Learn more" button, then a neutral `#f0f1f1` band
for the customer-logo row ("Join hundreds of forward-thinking enterprises"), then a carousel of news
cards with 16px-rounded photographs of Mammoth / Orca plants and partner imagery. The footer is
solid black `#000000`.

The voice is a pairing the brand guidelines call out explicitly: the serif **Reckless Neue** "speaks
the human voice of Climeworks", the sans **Haffer** "adds a more technical yet friendly complementary
tone" ([Climeworks brand guidelines PDF](https://climeworks.com/uploads/documents/climeworks-brand-guidelines.pdf)).
Both run at weight 400 almost everywhere; only buttons and inline emphasis use 700.

Colour is sparse: black text on white, one saturated blue for action, a light blue for notices, a
neutral grey band. Every button carries a small "↗" arrow glyph before its label (visible in the
capture on "Remove CO₂", "OK" and "Learn more").

**Key characteristics**
- Primary action: `#008fe8` fill, white 18px/700 label, 1px same-colour border, 8px radius, `12px 24px`, 44px tall; hover `#007fca`.
- Serif display h1: WebRecklessNeue 71.9661px / 400 / 71.9661px line height / −1.49996px tracking.
- Body: WebHaffer 18px / 400 / 26.1px in `#000000` (most-read text colour).
- White canvas, `#f0f1f1` neutral bands, `#000000` footer.
- Outline secondary: white fill with a 1px `#008fe8` border and black 400-weight label.
- Fluid type: sizes like 43.9962px and 31.9991px are computed from `clamp()`-style rules.

## Colors

### Brand
| Token | Hex | Source | Role |
|---|---|---|---|
| primary | `#008fe8` | live CTA bg; guidelines "dark blue" #008FE8, Pantone 2925C | primary buttons, outline borders, `--btn-arrow-color` |
| primary-hover | `#007fca` | live hover of "Remove CO₂" | primary hover |
| primary-deep | `#036dab` | site CSS | deeper blue step in the stylesheet |
| light-blue | `#78c5e5` | live cookie banner bg; guidelines "light blue" #78C5E5, Pantone 291C | notices, highlights |
| yellow | `#ffcc24` | site CSS; guidelines "yellow" #FFCC24, Pantone 123C | accent present in CSS, not in the capture's first 2400px |

### Neutrals
| Token | Hex | Role |
|---|---|---|
| canvas | `#ffffff` | page background (body bg; dominant colour of the capture) |
| ink | `#000000` | most-read text (2,304 weighted chars), h2/h3, links |
| footer | `#000000` | footer band (also the largest-area background) |
| neutral | `#f0f1f1` | logo band, "OK" cookie button, footer legal text |
| near-black | `#161718` | nav link text |
| border-light | `#e2e3e4` | stylesheet hairline |
| border-mid | `#c5c7c9` | stylesheet border |
| disabled | `#a7acae` | `--btn-color-disabled` |
| glass | `#ffffff8c` | 55% white fill of the floating nav bar |
| scrim | `#00000080` | 50% black overlay in CSS |
| alert-red | `#ff144d` | stylesheet red |

The site's button variables name the system's states directly: `--btn-color: black`,
`--btn-text-color: black`, `--btn-color-hover: black`, `--btn-color-pressed: black`,
`--btn-color-disabled: #A7ACAE`, `--btn-arrow-color: #008FE8`.

**Guidelines vs live.** The 2024 guidelines also list secondary colours green `#00A395`, purple
`#B96CFF`, warm red `#FF5408` and greys `#EBEBEB` / `#969696`. None of these were measured on the
homepage, so they are not tokens here. The guidelines also describe sky-inspired gradients ("a
reference to the light and colors in the sky"); none were measured on the homepage.

## Typography

### Families
- **WebRecklessNeue** — the web name of *Reckless Neue* (Displaay Type Foundry). Used for h1 and h2.
  Only weight 400 is loaded.
- **WebHaffer** — the web name of *Haffer SQ* per the guidelines ("Secondary typeface: Haffer SQ …
  Main use: Body texts and graphs"). Loaded at 400 and 700. 2,811 of 2,916 weighted characters are
  Haffer.

Guideline rules worth honouring: "the bigger the texts are, the lighter the font weight should be";
"Don't use bold weights for big text sizes"; "As general rule, Reckless serves as headline and
Haffer as body font … the font hierarchy may be switched" for technical or editorial tone. The live
h3 ("Direct Air Capture") is Haffer — an example of that switch.

### Scale (measured, 1280px)
| Token | Family | Size | Weight | Line height | Tracking |
|---|---|---|---|---|---|
| display-h1 | WebRecklessNeue | 71.9661px | 400 | 71.9661px | −1.49996px |
| page-h1 | WebRecklessNeue | 55px | 400 | 60.5px | — (contact page h1) |
| heading-xl | WebRecklessNeue | 43.9962px | 400 | 50.5956px | — |
| heading-lg | WebHaffer | 31.9991px | 400 | 39.9989px | — |
| lead | WebHaffer | 28px | 400 | 35px | — (hero sub-line, white) |
| card-title | WebHaffer | 23.9998px | 400 | 29.9997px | — (news card h4) |
| body | WebHaffer | 18px | 400 | 26.1px | — |
| body-strong | WebHaffer | 18px | 700 | 26.1px | — ("Learn more", inline bold) |
| button | WebHaffer | 18px | 700 | 18px | — |
| button-quiet | WebHaffer | 18px | 400 | 18px | — (outline/neutral buttons, nav) |
| meta | WebHaffer | 16px | 400 | 23.2px | — (card category "News", dates) |
| footer-link | WebHaffer | 14px | 400 | 20.3px | — |
| legal | WebHaffer | 12px | 400 | 17.4px | — |
| mobile-h1 | WebRecklessNeue | 44.4642px | 400 | 48.9106px | −0.02523px |
| mobile-h2 | WebRecklessNeue | 30.2305px | 400 | 33.2536px | — |
| mobile-body | WebHaffer | 16.0331px | 400 | 23.2481px | — |

Body line height is 1.45× (26.1/18, 23.2/16, 20.3/14, 17.4/12) throughout. Only the hero h1 is
tracked negative.

### Note on Font Substitutes
Reckless Neue and Haffer SQ are commercial Displaay fonts. The guidelines name the official
office substitutes: **Georgia** for Reckless and **Aptos** for Haffer ("Office fonts" page). On the
web, the site's own fallback stacks are `ui-serif, Georgia, Cambria, "Times New Roman", Times, serif`
and `ui-sans-serif, system-ui, sans-serif`.

## Layout

- **Hero:** full-bleed photograph, 800px tall at desktop (header element measured 1280 × 800); text
  block bottom-left, h1 776px wide.
- **Floating nav:** a translucent `#ffffff8c` bar inset from the top and sides, wordmark left, links
  centred, account icon + primary CTA right.
- **Content column:** narrow, ~776px wide (h2/h3 measured 776px), offset to the centre-left; generous
  white space around.
- **Bands:** white → `#f0f1f1` logo band → white news carousel → black footer.
- **News carousel:** three-and-a-bit cards visible, each a 16px-rounded image over category/date
  meta (16px) and a 23.9998px title; the fourth card is cropped at the right edge to signal scroll.
- **Grid variables:** `--w-grid-gap: 1.25rem` (20px), `--w-container-gap: 1.25rem`, `--w-card: 1.25rem`.
- **Measured gaps:** 40px (15×), 56px, 8px. **Paddings:** 12px (17×), 24px (10×), 96px (3×), 80px, 48px, 16px.

## Elevation & Depth

The page is almost flat. Two shadows were measured:
- `rgba(0,0,0,0.1) 0px 15px 20px 10px` — a soft, wide shadow under the light-blue cookie strip
  (visible in the capture as a grey haze below the banner).
- `rgba(0,0,0,0.7) 0px 0px 4px -2px` — a tight edge on a small control.

The floating nav uses translucency (`#ffffff8c` fill) over the photograph rather than a shadow.

## Shapes

| Token | Value | Where |
|---|---|---|
| button | 8px | all buttons (primary, outline, black, neutral) |
| nav-item | 6px | nav link hover chips (42px tall) |
| card | 16px | news card images and rounded panels (most frequent radius, 14×) |

The stylesheet also contains 2px, 4px, 12px, 24px, 60px and 9999px radii, but those were not seen on
rendered homepage elements. No skewed, clipped or notched shapes were measured.

## Components

### Buttons
All buttons share: WebHaffer 18px, line height 18px, 8px radius, `12px 24px` padding, 44px height,
a 1px border in the fill colour, and a leading "↗" arrow icon.

- **button-primary** — `#008fe8` fill and border, white 700 label. Hover (measured): fill `#007fca`,
  border stays `#008fe8`.
- **button-outline** — white fill, 1px `#008fe8` border, black 400 label ("Learn more").
- **button-black** — `#000000` fill and border, white 700 label (contact page: "Contact our team",
  "Get in touch", "Email us").
- **button-neutral** — `#f0f1f1` fill and border, black 400 label (cookie "OK").

### Navigation
- Links: WebHaffer 18px/400, `#161718`, 42px tall, 6px radius. Hover (measured): background becomes
  `#ffffff` — a white chip on the translucent bar.
- Account button: square icon button with a thin dark outline (visible in the capture).

### Cookie banner
Full-width `#78c5e5`, black 18px/26.1px text with bold lead-in, neutral "OK" button at the right.

### Cards
- **card-media (news)** — 16px-rounded image, then a row with category (e.g. "News", "Blog") left and
  date right in 16px/23.2px, then a 23.9998px/29.9997px title in black.

### Footer
Solid `#000000`, white text, link lists at 14px/20.3px, bold 18px column heads ("Solutions"), legal
line 12px/17.4px in `#f0f1f1`.

### Not declared
No form input was detected on the homepage or `/contact`, so no input component is specified.

## Design System Architecture

**Climeworks publishes brand guidelines (a 2024 PDF), not a public digital design system.** The
[Climeworks brand guidelines PDF](https://climeworks.com/uploads/documents/climeworks-brand-guidelines.pdf)
covers Our Story (who we are, positioning, narrative, brand DNA), Brand essentials (logo, symbol,
sound trademark + animation, typography, colour palette, icons, solutions imagery) and Applications
(corporate, documents, communication, merchandising). No npm token package, Storybook or Figma kit
was found. [MetaDesign's Climeworks case study](https://metadesign.com/en/work/climeworks) states
it supported Climeworks "with a new brand identity on its path to the end consumer business"; the
case study does not say whether the 2024 guidelines or the current website derive from that work.

**Token architecture.** The guidelines define colour as *Primary colors* (dark blue `#008FE8`, light
blue `#78C5E5`, yellow `#FFCC24` — each with RGB, CMYK and Pantone values), *secondary* colours
(green `#00A395` "to represent nature", purple `#B96CFF`, warm red `#FF5408` "as highlight") and
neutrals (`#FFFFFF`, `#EBEBEB`, `#969696`, `#000000`, with RAL references). There is no published
semantic or component tier. On the live site the CSS is Tailwind-based (`--tw-*` variables) with a
small set of site variables, verbatim: `--btn-color`, `--btn-color-hover`, `--btn-color-pressed`,
`--btn-color-disabled`, `--btn-text-color`, `--btn-arrow-color`, `--w-grid-gap`, `--w-container-gap`,
`--w-card`, `--w-container-gap-capped`.

**Theming.** No light/dark or high-contrast theme was documented or observed. The guidelines specify
three logo versions — coloured, black and white (negative) — and when to use each on light, colour
and image backgrounds.

**Type & spacing systems.** Two families (Reckless Neue for headlines, Haffer SQ for body and
graphs), each available in Thin → Heavy. Rule: larger text → lighter weight. On the site, type is
fluid (computed sizes such as 71.9661px desktop / 44.4642px mobile) and body line height is a
constant 1.45. Spacing on the site rests on 20px grid/container gaps (`1.25rem`) with 40px vertical
gaps between blocks.

**Component model.** Not publicly documented for digital. The guidelines define an icon style
(outline icons, single colour, no shadows, fixed stroke) and imagery rules. On the site: one button
anatomy (arrow icon + label, 8px radius, 44px) in four fills, nav chips, cookie banner, media cards.

**Accessibility.** The guidelines' do/don't pages require: "Only use color with enough contrast",
"Only use text on clean areas of images", "Don't use low contrast combinations", "Don't use colored
font on a colored background". No numeric contrast target or focus-style rule is published.

**Delivery.** Brand guidelines as a downloadable PDF from climeworks.com. The site uses Tailwind CSS
utilities plus Livewire (`--livewire-progress-bar-color` is defined) and Swiper for carousels.

## Do's and Don'ts

**Do**
- Pair a Reckless Neue serif headline (400) with Haffer body copy (400, 18px/26.1px).
- Use `#008fe8` for exactly one primary action per view; hover to `#007fca`.
- Keep every button at 8px radius, 44px tall, `12px 24px`, with the leading ↗ arrow.
- Use large, calm landscape or plant photography full-bleed with white type on it.
- Use `#78c5e5` for notices and soft highlights, `#f0f1f1` for neutral bands.
- Keep text black on white; let white space carry the hierarchy.

**Don't**
- Don't set large headlines in bold — the guidelines forbid bold weights for big sizes.
- Don't put coloured text on coloured backgrounds or apply gradients to text (guidelines don'ts).
- Don't add heavy drop shadows to cards or buttons.
- Don't use colours outside the palette, or the secondary colours as UI chrome on the website.
- Don't put text over busy areas of photographs.

## Responsive Behavior

Measured at 390px:
- h1 scales from 71.9661px to **44.4642px / 48.9106px** (tracking −0.02523px).
- h2 scales from 43.9962px to **30.2305px / 33.2536px**; h3 from 31.9991px to 26.0993px.
- Body scales from 18px to **16.0331px / 23.2481px**; news titles from 23.9998px to 22.0329px.
- Buttons keep 8px radius; horizontal padding tightens to `12px 16px` (cookie "OK", 42px tall).
- The hero remains a full-height photograph (header measured 390 × 844).
- Content column goes full width at 350px (20px side gaps from `--w-container-gap`).

## Iteration Guide

1. Canvas `#ffffff`; footer `#000000`; one `#f0f1f1` band for logos or secondary content.
2. Hero: full-bleed nature/plant photo, white Reckless Neue h1 at 71.9661px/400 with −1.49996px
   tracking, white Haffer 28px/35px lead line.
3. Floating nav: translucent white bar, plain 18px links, blue "Remove CO₂" CTA at right.
4. Section heads in Reckless Neue 43.9962px; sub-heads in Haffer 31.9991px; body Haffer 18px/26.1px.
5. Buttons: primary blue, outline (white + blue border), black, neutral grey — never other fills.
6. News/media: 16px-rounded images, 16px meta row, 23.9998px titles.
7. Check every value against this file before shipping; do not round the fluid sizes.
