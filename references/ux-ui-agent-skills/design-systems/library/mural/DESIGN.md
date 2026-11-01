---
version: alpha
name: Mural
category: "Productivity & SaaS"
description: "Mural's mural.co marketing site: white #ffffff canvas with a black #000000 hero, light STK Bureau serif headlines (80px, -4px tracking) over ABC Social sans body at weight 300, jade #00c27a 8px-radius CTAs with black text, 16px-radius cards, and the official multicolor brand palette (Mural Red #ff4b4b, Blue #5887ff, Yellow #ffaa00, Green #00843f, Pink #fc83ff)."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#00c27a"
  on-primary: "#000000"
  surface-soft: "#fbfbfb"
  surface-nav-hover: "#f0f0f0"
  ink-faint: "#808080"
  ink-grey: "#8c8c8c"
  ink-green: "#007b3b"
  hairline: "#dce1e5"
  hairline-hover: "#b8c1cc"
  text-input-border: "#4f5457"
  mint: "#b4f5c8"
  spring: "#8fec7f"
  mural-green: "#00843f"
  mural-red: "#ff4b4b"
  mural-blue: "#5887ff"
  mural-yellow: "#ffaa00"
  mural-pink: "#fc83ff"
  natural: "#ededdb"
typography:
  display:
    fontFamily: "\"STK Bureau\", \"Times New Roman\", sans-serif"
    fontSize: 80px
    fontWeight: 300
    lineHeight: 88px
    letterSpacing: "-4px"
  display-mobile:
    fontFamily: "\"STK Bureau\", \"Times New Roman\", sans-serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 52.8px
    letterSpacing: "-2.4px"
  eyebrow:
    fontFamily: "\"ABC Social\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 15.4px
    letterSpacing: 3.5px
    textTransform: uppercase
  subheading:
    fontFamily: "\"STK Bureau\", \"Times New Roman\", sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 48px
    letterSpacing: "-1.6px"
  body:
    fontFamily: "\"ABC Social\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 27px
  button:
    fontFamily: "\"ABC Social\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: "\"ABC Social\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 16px
  legal:
    fontFamily: "\"ABC Social\", Arial, sans-serif"
    fontSize: 11px
    fontWeight: 300
    lineHeight: 11px
rounded:
  xs: 6px
  sm: 7.36px
  md: 8px
  lg: 14px
  xl: 16px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5.6px
  s3: 8px
  s4: 10px
  s5: 14.4px
  s6: 16px
  s7: 23.01px
  s8: 24px
  s9: 27.52px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 40px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 40px
    border: "2px solid #dce1e5"
  button-outlined-hover:
    borderColor: "{colors.hairline-hover}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 40px
  link:
    textColor: "{colors.ink-faint}"
    typography: "{typography.legal}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 8px 16px
  nav-link-hover:
    backgroundColor: "{colors.surface-nav-hover}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 40px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 11.04px 17.92px 22.08px
    boxShadow: rgba(0, 0, 0, 0.08) 0px 5.53px 7.38px 0px
---

# Mural — mural.co

## Overview

Mural markets itself on its home page (https://www.mural.co, title "AI-powered visual workspace for team collaboration | Mural") as "the visual AI platform that turns alignment into an ongoing way of working". The page is long (the desktop pass measured a 14,885px scroll height) and alternates between two moods: an editorial black-and-white frame set in a light serif, and bursts of the multicolor brand — the red, yellow, green, blue and pink letterforms of the wordmark, sticky-note colors, and jade green buttons.

The capture opens with a floating white header pill on a black hero. The headline "Sync up. Speed up. Stand out." is set in STK Bureau at 80px with the first line in grey `#8c8c8c` and the last in white. Below sit a dark email field and a jade **Get started free** button with a chevron box. The hero ends with a product screenshot — a whiteboard canvas with dotted grid, team portraits connected by hand-drawn colored arrows, a tool rail and an avatar dock — overlapping the boundary into the white page. Further down: a "TRUSTED BY BRANDS AROUND THE WORLD" logo strip, a "Seeing is how™ Mural gets you to faster outcomes" section, big-number stats (50%, 1.5, 800), solution tiles with photography, a black-and-green **LUMA System** feature card, a testimonial carousel on a dotted grid, a three-card blog row with small green "Blog" tags, a mint "Designed for businesses of all sizes" banner and a footer ending in a giant multicolor Mural wordmark.

The microcopy is confident and compact ("We don't just talk about results, we show them."), with sentence-case CTAs that always end in a chevron.

## Colors

Measured colors come from `web/data/extracted/mural.json`; brand palette colors are published on Mural's brand assets page (https://www.mural.co/brand-assets).

- **Canvas `#ffffff`** — the page; **ink `#000000`** — the most-read text color and the fill of the hero, LUMA card and dark buttons.
- **Primary `#00c27a`** — jade (root variable `--jade`), the fill of every main CTA ("Sign up free", "Start innovating", "Explore resources"), with black `#000000` text.
- **Mural Green `#00843f`** — the official brand green (also `--mural-green` in the CSS), used on the LUMA card's color blocks; **ink green `#007b3b`** is the text on green blog tags.
- **Mint `#b4f5c8`** and **spring `#8fec7f`** — light greens on tags, banner backgrounds and the LUMA card's geometric blocks.
- **Surface soft `#fbfbfb`** — quiet section and card fills (the dotted testimonial card); **surface nav hover `#f0f0f0`** — the nav item hover background.
- **Ink grey `#8c8c8c`** — the dimmed first line of headlines; **ink faint `#808080`** — the 11px legal links under the email field.
- **Hairline `#dce1e5`** — the 2px border of outlined buttons and card borders; on hover it darkens to **`#b8c1cc`**. **Text input border `#4f5457`** — the dark email field.
- **Brand palette** (published): Mural Red `#ff4b4b`, Mural Blue `#5887ff`, Mural Yellow `#ffaa00`, Mural Green `#00843f`, Mural Pink `#fc83ff`, Natural `#ededdb`, plus Black and White. These appear in the wordmark and in illustration, not in UI controls.

## Typography

Two families carry the whole site.

- **STK Bureau** (weight 300) for display: the 80px / 88px hero with -4px tracking, 70px section headlines with -2.8px tracking, and 40px / 48px subheadings with -1.6px tracking. The fallback in the stack is "Times New Roman".
- **ABC Social** for everything else, mostly at weight 300: body 18px / 27px, nav 16px / 16px, buttons 16px at weight 500, uppercase eyebrows at 14px with 3.5px tracking ("TRUSTED BY BRANDS AROUND THE WORLD") or 2.45px, and 11px legal text.

Measured sizes by character count: 18px, 16px, 32px, 70px, 14px, 12px, 26px, 22px, 54px, 20px, 11px, 40px, 80px, 17.6px, 100px. Weights: 300 dominates, then 500, 400 and 600. The extraction also loaded Inter 400, which the CSS references for some components.

**Substitutes:** both families are commercial. Keep the contrast of a light, tightly tracked serif for headlines against a light grotesque body; the stack's own fallbacks are Times New Roman and Arial.

## Layout

At 1280px the content runs from x = 40 to x = 1190. The page is one long white band after a 1,072px media hero, with up to 4 columns detected inside it and card grids of up to 3 columns. Section headings sit left-aligned in the upper sections and centred in the lower ones ("What our customers say", "Latest insights and updates"), each preceded by a small uppercase eyebrow. Measured gaps cluster at 16px, 24px, 8px and 32px, with larger 48px, 64px, 80px and 100px gaps between blocks; large section paddings of 112px and 128px give the page its airy rhythm.

## Elevation & Depth

Shadows are faint. Cards measure `rgba(0, 0, 0, 0.08) 0px 5.53px 7.38px 0px` or `rgba(0, 0, 0, 0.08) 0px 4px 4px 0px`; a two-layer `rgba(11, 41, 70, 0.32) 0px 0px 1px 0px, rgba(42, 82, 121, 0.08) 0px 24px 20px 0px` lifts floating product UI. Most separation comes from the black/white contrast between hero, LUMA card and white page, and from thin `#dce1e5` borders.

## Shapes

The control radius is **8px** (`rounded.md`, also the CSS's `--_semantics---radius--button-radius`): buttons, nav-item hovers and inputs. **16px** (`rounded.xl`) rounds cards; **24px** (`rounded.2xl`) rounds large feature panels such as the LUMA card; **6px** rounds small tags; 14px and 7.36px appear on scaled UI. A computed 15984px pill appears on fully rounded elements. Primary CTAs carry a separate square chevron box at their right end, giving a two-part button silhouette.

## Components

- **Primary button** — jade `#00c27a`, black ABC Social 16px weight 500, 8px radius, 40px tall, chevron box at the right.
- **Outlined button** — transparent, black text, 2px `#dce1e5` border, 8px radius, 40px tall ("Book a demo"); hover darkens the border to `#b8c1cc`.
- **Dark button** — black fill, white text, 8px radius ("Map your sales funnel now"); hover measured as `rgba(0, 0, 0, 0.9)`.
- **Nav link** — black 16px weight 300, 8px 16px padding, 8px radius; hover fills `#f0f0f0`. The header is a white floating bar with logo, six menu items, Login, Book a demo and Sign up free.
- **Email input** — black fill, white text, 2px `#4f5457` border, 8px radius, 8px 16px padding, 40px tall.
- **Card** — white, 16px radius, padding 11.04px 17.92px 22.08px, faint shadow; blog cards add an image, a mint tag and a 20px title.
- **Eyebrow** — uppercase ABC Social 14px with 3.5px tracking above every section title.
- The "Muriel" assistant panel in the hero is a third-party chat widget and is not documented as brand UI.

## Design System Architecture

Mural publishes brand assets (wordmark, symbol, product imagery and the color palette with hex values) at https://www.mural.co/brand-assets, linked from https://www.mural.co/press; that page does not name typefaces. No public UI design system was found among the pages opened. The shipped CSS (a Webflow build served from `cdn.prod.website-files.com`) exposes a layered token system in root variables: `--_primitives---color--*` (e.g. `--_primitives---color--jade: #00c27a`, `--_primitives---color--grey-700: #4f5457`), `--_semantics---*` aliases (e.g. `--_semantics---radius--button-radius` pointing to `radius-8`, `--_semantics---color--surface-inverse` pointing to black), legacy `--_typography-old---*` and `--_spacing-old---*` groups, and named swatches such as `--spring`, `--mint`, `--natural`, `--ice` and `--flamingo`.

## Do's and Don'ts

**Do**
- Set headlines in a light serif with strong negative tracking, and dim the first clause in `#8c8c8c`.
- Use jade `#00c27a` with black text for the main action and add the chevron box.
- Keep controls at 8px radius and cards at 16px.
- Use the multicolor palette for the wordmark, illustration and board content.
- Precede section titles with a small, widely tracked uppercase eyebrow.

**Don't**
- Don't use Mural Red, Blue, Yellow or Pink for buttons; UI actions are jade, black or outlined.
- Don't set body text heavier than 300 except buttons (500).
- Don't add strong shadows; depth stays faint.
- Don't treat the AI chat widget as part of the brand UI.

## Responsive Behavior

The 390px mobile pass recorded the hero headline at 48px / 52.8px with -2.4px tracking, body text at 18px / 27px, the eyebrow unchanged at 14px with 3.5px tracking, zero visible header links with a menu toggle labelled "menu", and a maximum of 1 card column. The mobile hero band measured 1,172px tall with content from x = 16 to x = 374. Mobile font sizes by frequency include 16px, 19.2px, 14px, 18px, 32px and 12px. The stylesheet declares breakpoints at max-width 991px, 767px and 479px. Other reflow details were not measured.

## Iteration Guide

1. Start with white `#ffffff`, black `#000000` text and a black hero band.
2. Set the headline in STK Bureau 300 at 80px / 88px, -4px tracking; body in ABC Social 300 at 18px / 27px.
3. Add a jade `#00c27a` 40px button with 8px radius and black 16px weight-500 text, paired with an outlined 2px `#dce1e5` button.
4. Use 16px-radius white cards with the faint 0.08 shadow and mint tags.
5. Bring in the official multicolor palette only in imagery and the wordmark.
6. Measure before adding values not in the frontmatter.
