---
version: alpha
name: Metalab
category: "Agencies & Studios"
description: "Metalab's site is a pure-black (#000000) stage with white (#ffffff) type, set in PP Eiko (Pangram Pangram) at ultra-light weight 240 for 88px display lines and Basis Grotesque Pro (Colophon) at 16px/400 for everything else. Actions are translucent-grey 32px pills (#bababa33, 50px radius) that turn transparent with a 1px white outline on hover; the only chroma is the brand purple #584dff carried by a 3D star render."

colors:
  primary: "#584dff"
  canvas: "#000000"
  ink: "#ffffff"
  text-regular: "#cac5ca"
  text-subtle: "#79767a"
  bg-subtle: "#171717"
  border-subtle: "#313033"
  hairline-row: "#ffffff4d"
  button-bg: "#bababa33"
  nav-glass: "#bababa99"
  transparent: "#00000000"
  dark-purple: "#100037"
  text-error: "#ff6060"
  text-error-invert: "#b60000"
  bg-subtle-invert: "#edf1f5"
  border-subtle-invert: "#c7c7c7"
  text-subtle-invert: "#605d62"

typography:
  display-xl:
    fontFamily: "\"PP Eiko\", sans-serif"
    fontSize: 140px
    fontWeight: 300
    lineHeight: 168px
    letterSpacing: -2.1px
  display:
    fontFamily: "\"PP Eiko\", sans-serif"
    fontSize: 88px
    fontWeight: 240
    lineHeight: 88px
    letterSpacing: -1.76px
  display-lg:
    fontFamily: "\"PP Eiko\", sans-serif"
    fontSize: 64px
    fontWeight: 240
    letterSpacing: -1.28px
  display-xl-mobile:
    fontFamily: "\"PP Eiko\", sans-serif"
    fontSize: 64px
    fontWeight: 300
    lineHeight: 76.8px
    letterSpacing: -0.96px
  display-mobile:
    fontFamily: "\"PP Eiko\", sans-serif"
    fontSize: 44px
    fontWeight: 240
    lineHeight: 44px
    letterSpacing: -0.88px
  body-lg:
    fontFamily: "\"Basis Grotesque Pro\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: -0.2px
  body-lg-mobile:
    fontFamily: "\"Basis Grotesque Pro\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.4px
    letterSpacing: -0.18px
  body:
    fontFamily: "\"Basis Grotesque Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: -0.16px
  body-mobile:
    fontFamily: "\"Basis Grotesque Pro\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: -0.14px
  button:
    fontFamily: "\"Basis Grotesque Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 350
    lineHeight: 32px
    letterSpacing: -0.16px
  button-lg:
    fontFamily: "\"Basis Grotesque Pro\", sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 36.4px
    letterSpacing: -0.26px
  nav:
    fontFamily: "\"Basis Grotesque Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 400

rounded:
  none: 0px
  xs: 2px
  button: 50px
  nav: 1000px

spacing:
  xxs: 4px
  xs: 8px
  sm: 10px
  md: 16px
  lg: 24px
  xl: 40px
  xxl: 60px
  section: 180px

components:
  button-primary:
    backgroundColor: "{colors.button-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.transparent}"
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.button-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 32px
  button-submit:
    backgroundColor: "{colors.button-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 36px
  tag-filter:
    backgroundColor: "{colors.button-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 32px
  text-input:
    backgroundColor: "{colors.transparent}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px
  link-footer-cta:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 24px 4px
    height: 80px
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.nav}"
    padding: 0px 24px
    height: 54px
  nav-mobile:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.nav}"
    padding: 0px 16px
    height: 48px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

Metalab ("We make interfaces") presents itself as a dark, gallery-like stage. Every page measured — home (`/`), `/work`, `/about`, `/contact` — renders on a pure black canvas (`{colors.canvas}` — `#000000`) with white type (`{colors.ink}` — `#ffffff`). There is no light section, no card grid, no shadow, no gradient in CSS. The drama comes from two sources only: a very large, very light serif headline, and full-bleed imagery — on the homepage a glossy 3D render of the Metalab star in deep violet and black that fills the viewport behind the headline.

The homepage at 1280×800 is a single composed viewport. Top-left a small `Menu` pill, top-centre the "Metalab" wordmark, top-right a world clock ("CDG 4:28 AM") and a white dot toggle. Down the left edge a vertical stack of client pills (Robinhood, Midjourney, Uber, Suno, Ro, Atoms, The Atlantic, Calvin Klein, Headspace, All Work) acts as the work index. A short 16px intro paragraph sits upper-right ("Since 2006, we've helped the most innovative startups and reputable brands design, build, and ship products worth talking about."), and the headline "We make / interfaces" is set in PP Eiko 88px weight 240, broken over two staggered lines across the lower centre.

Typography is a two-family system. **PP Eiko** — a high-contrast display serif from Pangram Pangram — is used only for headlines, always at hairline weights (240 or 300) with tight negative tracking (-2% of size). **Basis Grotesque Pro** — Colophon's grotesque — carries every other character: body, pills, nav, form labels, footer. On the homepage Basis accounts for 243 of 260 measured characters; PP Eiko for 17 (the headline).

Buttons are not colored. The single action shape is a translucent grey pill (`{colors.button-bg}` — `#bababa33`, i.e. `hsla(0,0%,73%,.2)` as the site's own `--button-bg`) 32px tall, 50px radius, white 16px/350 text. On hover the fill drops to transparent and a 1px white outline appears — the button turns from frosted glass into a line drawing.

**Key Characteristics:**
- Pure black canvas `#000000`, white ink `#ffffff`; secondary greys `#cac5ca` and `#79767a` for long-form and metadata.
- PP Eiko at weight 240/300 with -1.76px tracking at 88px — an ultra-light editorial serif headline.
- Basis Grotesque Pro 16px/400, 22.4px line height, -0.16px tracking for body.
- Frosted pill buttons `#bababa33`, 50px radius, 32px height, `0px 16px` padding; hover = transparent + 1px white border.
- Floating header as a 1000px-radius capsule (54px desktop, 48px mobile).
- Brand purple `#584dff` exists as a token (`--purple`, `--bg-highlight`, `--border-highlight`) but appears in UI only as a tiny highlight; its main carrier is imagery (the 3D star).
- No box-shadows anywhere in the measured pages.
- Live world clocks in the header (YYZ, LDN, CDG, TST) — the studio's distributed-team signal.

## Colors

> **Source pages:** `/` (home), `/work`, `/about`, `/contact`, plus the site's own CSS custom properties (`rootVars`), identical on all four pages.

### Brand & Accent
- **Purple** (`{colors.primary}` — `#584dff`): The site's `--purple`, `--bg-highlight`, `--border-highlight` and `--bg-highlight-invert`. It is the brand color, but it is used as a highlight, not as a button fill: on `/about` it covers only a tiny area (background weight 2). The large violet you see on the homepage is in the 3D render, not CSS.
- **Dark Purple** (`{colors.dark-purple}` — `#100037`): `--dark-purple`, a near-black violet present in the stylesheet; it fits the shadow tone of the star render.

### Surface
- **Canvas** (`{colors.canvas}` — `#000000`): `--bg` / `--black` / `--neutral-0`. Every page background.
- **BG Subtle** (`{colors.bg-subtle}` — `#171717`): `--bg-subtle`. Used on `/about` for raised bands (background weight 367 there).
- **Button BG** (`{colors.button-bg}` — `#bababa33`): `--button-bg`, `hsla(0,0%,73%,.2)`. The fill of every pill.
- **Nav Glass** (`{colors.nav-glass}` — `#bababa99`): A 60%-alpha version of the same grey measured on `/work` and `/about`; it matches the floating header capsule seen as a lighter grey pill once the page scrolls.
- **Border Subtle** (`{colors.border-subtle}` — `#313033`): `--border-subtle` / `--neutral-20`. Measured as the form-field underline on `/contact`.
- **Hairline Row** (`{colors.hairline-row}` — `#ffffff4d`): 30% white border measured on `/work` and `/about`; the thin rules between project rows.
- **Transparent** (`{colors.transparent}` — `#00000000`): The measured hover fill of pills.

### Text
- **Ink** (`{colors.ink}` — `#ffffff`): `--fg` / `--text-bold`. The most-read text color on every page (260 of 260 characters on home).
- **Text Regular** (`{colors.text-regular}` — `#cac5ca`): `--text-regular` / `--neutral-80`. Long-form body on `/about` (529 chars there).
- **Text Subtle** (`{colors.text-subtle}` — `#79767a`): `--text-subtle` / `--neutral-50`. Form labels/placeholders on `/contact`, service tags on `/work` ("Product Design", "Brand").

### Semantic
- **Error** (`{colors.text-error}` — `#ff6060`): `--text-error` and `--border-error` on the dark theme.
- **Error (invert)** (`{colors.text-error-invert}` — `#b60000`): `--text-error-invert` / `--border-error-invert` for the light theme.
- No success/warning tokens exist in the stylesheet.

### Invert (light theme) tokens
The stylesheet defines a mirrored set used when the theme toggle flips to light: `--bg-invert: #fff`, `--fg-invert: #000`, `--bg-subtle-invert` (`{colors.bg-subtle-invert}` — `#edf1f5`), `--border-subtle-invert` (`{colors.border-subtle-invert}` — `#c7c7c7`), `--text-subtle-invert` (`{colors.text-subtle-invert}` — `#605d62`), `--text-regular-invert: #313033`. The light theme itself was not rendered in our measurements, so treat these as declared-but-unmeasured.

### Neutral ramp
`--neutral-0 #000`, `-10 #1c1b1e`, `-20 #313033`, `-25 #3d3b3e`, `-30 #48464a`, `-35 #545156`, `-40 #605d62`, `-50 #79767a`, `-60 #938f94`, `-70 #aeaaae`, `-80 #cac5ca`, `-90 #e6e1e6`, `-95 #f4eff4`, `-99 #fffbff`, `-100 #fff`. Note the slight violet cast of the mid greys (R≈B > G) — even the neutrals lean toward the brand purple.

## Typography

### Font Family
- **PP Eiko** — display serif by Caio Kondo, published by Pangram Pangram; offered in Thin (100) through Heavy (800) and as a variable font ([pangrampangram.com/products/eiko](https://pangrampangram.com/products/eiko)). The site loads it at 300 and 400 faces and renders weights 240 and 300 — the 240 value is only reachable through the variable axis.
- **Basis Grotesque Pro** — grotesque by The Entente, released by Colophon Foundry (2015). Loaded at 300 and 400; rendered at 350 (pills) and 400 (body), with 500 seen on `/about`.

Both are declared with a bare `sans-serif` fallback (`"PP Eiko", sans-serif` — the serif falls back to a sans, a site quirk).

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Where |
|---|---|---|---|---|---|---|
| `display-xl` | PP Eiko | 140px | 300 | 168px | -2.1px | `/about` h1 "Global talent, Canadian home" |
| `display` | PP Eiko | 88px | 240 | 88px | -1.76px | Home h1; `/work`, `/contact` h1 (there with 103.84px line height) |
| `display-lg` | PP Eiko | 64px | 240 | — | -1.28px | `/about` section display ("A global team", city list) |
| `display-xl-mobile` | PP Eiko | 64px | 300 | 76.8px | -0.96px | `/about` h1 at 390px |
| `display-mobile` | PP Eiko | 44px | 240 | 44px | -0.88px | Home/work/contact h1 at 390px |
| `body-lg` | Basis Grotesque Pro | 20px | 400 | 26px | -0.2px | `/contact` intro copy |
| `body-lg-mobile` | Basis Grotesque Pro | 18px | 400 | 23.4px | -0.18px | `/contact` intro at 390px |
| `body` | Basis Grotesque Pro | 16px | 400 | 22.4px | -0.16px | All body copy, inputs, links |
| `body-mobile` | Basis Grotesque Pro | 14px | 400 | 19.6px | -0.14px | Body at 390px on `/work`, `/about` |
| `button` | Basis Grotesque Pro | 16px | 350 | 32px | -0.16px | Pills, filter tags, footer CTA links |
| `button-lg` | Basis Grotesque Pro | 26px | 400 | 36.4px | -0.26px | `/contact` Submit |
| `nav` | Basis Grotesque Pro | 16px | 400 | normal | normal | Header, footer link lists |

A 12px size (-0.12px tracking, 32 chars) is the header world clock; its weight was not isolated in the measurement, so it is not tokenised. Other sizes measured on `/about` (84px and 40px, PP Eiko-adjacent) appear only a few characters each.

### Principles
- **Tracking is always -1% of size** for Basis (16px → -0.16px, 20px → -0.2px, 26px → -0.26px, 14px → -0.14px) and **-2% for Eiko at 88px/64px** (-1.76px, -1.28px); the 140px about headline uses -1.5% (-2.1px). This is a rule, not a coincidence — reproduce it.
- **Display is always light.** Eiko never goes above 300 on the site. Do not bold a headline.
- **Body line height ≈ 1.4** (22.4/16, 19.6/14) and **1.3** for the larger intro (26/20, 23.4/18).
- Headlines break deliberately: "We make / interfaces" staggers the second line right; "Say hey." sits alone. Line breaks are part of the composition.
- No uppercase, no letterspaced labels; casing is sentence case throughout ("Get in Touch" in the icon label is the exception).

### Note on Font Substitutes
Both faces are commercial. PP Eiko offers a free trial for personal use and paid licences ([Pangram Pangram](https://pangrampangram.com/products/eiko)); Basis Grotesque is sold by Colophon. When neither is licensed, a light high-contrast didone-style serif for display and a neutral grotesque for text approximate the pairing — but the 240 hairline weight is the signature and needs a variable serif with a sub-300 axis. Keep the -1%/-2% tracking rules whatever substitute you use.

## Layout

### Spacing System
Measured gaps and paddings across the four pages:
- `{spacing.xxs}` 4px — inline padding of footer CTA links (`24px 4px`), small row paddings.
- `{spacing.xs}` 8px — gap between stacked client pills and between filter chips.
- `{spacing.sm}` 10px — column gap inside `/work` project rows (170 occurrences).
- `{spacing.md}` 16px — pill horizontal padding; mobile page gutter (header `0px 16px`).
- `{spacing.lg}` 24px — desktop page gutter (header `0px 24px`); the dominant gap on `/work` (176).
- `{spacing.xl}` 40px — project-row vertical padding on `/work` (85), form column gap on `/contact`.
- `{spacing.xxl}` 60px — form row gap on `/contact`.
- `{spacing.section}` 180px — top padding of the `/contact` and `/about` content blocks.

The stylesheet's own spacing tokens are rem-based: `--gutter: 1.6rem`, `--gutter-sm: 1.6rem`, `--gutter-xs: 0.8rem`, `--vertical-gutter: 14rem`, `--button-padding: 1.6rem`. Rendered values (16px pill padding for `--button-padding`, 32px pill height for `--button-height-md: 3.2rem`, 24px Menu button for `--button-height: 2.4rem`) show the root font size is 10px (62.5%), so 1rem = 10px on this site.

### Grid & Container
- Full-bleed: the header spans the viewport with 24px side padding (16px mobile); content starts at the gutter, not inside a centred max-width box.
- `/work` is a three-column table-like list: client logo (left), a ~250px description column, service tags (right, `{colors.text-subtle}`), each row separated by a `{colors.hairline-row}` rule and padded 40px vertically.
- `/contact` is two halves: headline + 20px intro on the left, a two-column form on the right (Name / Email, Source / Stage, full-width Message, then Newsletter checkbox and Submit on one line).
- `/about` centres the 140px headline with inline portrait photos set between words, then a large image overlapped by a horizontal rule and a right-hand 64px city list.

### Whitespace Philosophy
Black space is the material. The homepage uses no section dividers; elements float at the four corners and centre of one viewport. Density is reserved for lists (work rows, cities, client pills) and always set in small type against large emptiness.

## Elevation & Depth

There are no box-shadows in any measured page (`boxShadows: []` on all four). The only shadow in the CSS corpus is `0 0 0 1000px var(--bg) inset`, an autofill-masking trick for form inputs, not elevation.

Depth is created by:
1. **Translucency** — `#bababa33` pills and the `#bababa99` header capsule let the imagery show through, a frosted-glass effect.
2. **Tone steps** — `#000000` → `#171717` (`{colors.bg-subtle}`) for raised bands and hovered rows.
3. **Imagery** — the 3D star render with real lighting, reflections and violet rim light is the only true three-dimensional object.

## Shapes

### Border Radius Scale
- `{rounded.none}` 0px — inputs, images, project rows, all content blocks. Photography is square-cornered.
- `{rounded.xs}` 2px — the newsletter checkbox on `/contact`.
- `{rounded.button}` 50px — every pill (client pills, Menu, filter chips, Submit). At 32px height this reads as a full capsule.
- `{rounded.nav}` 1000px — the floating header capsule.

The stylesheet also declares `--border-radius: 0.8rem` and `--border-radius-lg: 1.6rem` (8px / 16px at the 10px root), but no rendered element on the measured pages used them.

### Photography Geometry
Rectangular, square-cornered crops. On `/about`, small portrait crops sit inline within the headline like glyphs, and a tall 4:5 photo is overlapped by text and a 1px rule — the image is a layer in the typography, not a framed card.

## Components

### Buttons

**`button-primary`** — the frosted pill (homepage client index, "All Work").
- Background `{colors.button-bg}` (`#bababa33`), text `{colors.ink}`, `{typography.button}` 16px/350, line height 32px, padding `0px 16px`, height 32px, radius `{rounded.button}` 50px. A 1px border is present but transparent (`rgba(0,0,0,0)`).

**`button-primary-hover`** — measured on every client pill and filter chip.
- Background becomes `{colors.transparent}`, border becomes 1px `{colors.ink}` (`rgb(255,255,255)`), text stays white, no shadow, opacity 1, no text decoration, height unchanged.

**`button-secondary`** — Metalab has no visually distinct secondary; the second detected CTA ("Calvin Klein") is identical to the primary. Keep one button style.

**`button-submit`** — `/contact` Submit.
- Same pill and hover, but `{typography.button-lg}` 26px/400 with -0.26px tracking, height 36px. The button contains stacked "Submit / Sending / Message received" labels that swap as the form state changes.

**Menu button** — header, 24px tall, `#bababa33` fill, 50px radius; its hover keeps the fill and adds the 1px white border. On mobile it is 32px tall with 14px/400 text.

### Pills, Tags, and Chips

**`tag-filter`** — `/work` "Filter By:" chips (Startup, Leader, AI, Ecommerce, Finance, Health & Wellness, Productivity, SaaS, Media).
- Identical geometry to `button-primary`: `#bababa33`, 16px/350, 32px tall, `0px 16px`, 50px radius, 8px gap; hover → transparent + white border.

Service labels on `/work` rows ("Product Design", "Product Strategy", "Brand") are not pills — plain 16px text in `{colors.text-subtle}`.

### Inputs & Forms

**`text-input`** — `/contact`.
- No background, no radius, no padding: `{typography.body}` 16px/400, 22.4px line height, -0.16px tracking, white text, 40px tall. The field is defined by a single bottom rule (measured border color `{colors.border-subtle}` `#313033`).
- Labels sit above in `{colors.text-subtle}` with an asterisk for required ("Name*", "Email*"); placeholders ("Enter your name") also in the subtle grey.
- Select ("What stage is your company?") uses the same underline style with a small chevron and "Select One" in white.
- Message is a tall textarea with the same underline treatment.
- Checkbox ("Signup to Newsletter") is a small 2px-radius square.
- Error colors are `{colors.text-error}` `#ff6060` (dark theme).

### Navigation

**`nav`** — floating capsule header.
- 54px tall desktop, padding `0px 24px`, radius `{rounded.nav}` 1000px, text 16px/400 white. Contents: `Menu` pill left, "Metalab" wordmark centre, world clock (YYZ / LDN / CDG / TST times) + theme toggle + "Get in Touch" icon right.
- At the top of the homepage it is transparent and full width (1280px); after scroll on `/work` and `/about` it narrows to a centred 645px capsule filled with grey glass (`{colors.nav-glass}`).
- **`nav-mobile`**: 48px tall, padding `0px 16px`, same radius; the clock collapses away and only "Menu/Close" remains as a 14px pill.

### Links

**`link`** — inline text links ("Looking for a job?", "Diversity, Equity, & Inclusion→") are white, 16px/400, underlined (visible in the `/contact` capture), no color change.

**`link-footer-cta`** — the footer "How can we help?" list (Work together / Join our team / Just say hello): 16px/350, line height 32px, padding `24px 4px`, 80px tall rows.

### Footer

**`footer`** — black (`{colors.canvas}`), white 16px/400 text. Large "How can we help?" block with the CTA list, then link columns: Linkedin / Instagram / X / Medium, Careers / Contact, Privacy / Accessibility. Bottom-right, outlined line icons of the star and a gear-like mark.

### Signature Components
- **Client pill index** — a vertical stack of `button-primary` pills down the left edge of the homepage, 8px apart, ending in "All Work".
- **World clock** — four airport codes with live local times in the header, set at 12px.
- **Inline-image headline** — portrait photos dropped between words of a 140px Eiko headline (`/about`).
- **3D star** — the Metalab star rendered as a glossy extruded object in violet light; seasonal variants per the studio's identity.

## Design System Architecture

**Metalab publishes no public design system, brand portal, token package or component library.** Searches for an official system ("MetaLab design system brand guidelines metalab.com", "MetaLab github design tokens OR design system", "MetaLab press kit logo brand assets", "metalab.com blog rebrand new identity star wordmark purple") returned only job listings, third-party write-ups and unrelated Meta resources. The studio's own case study of the site on Awwwards ([awwwards.com/metalab-com-case-study.html](https://awwwards.com/metalab-com-case-study.html)) speaks of "a flexible system supporting an ownable digital choreography" and "a classic foundational grid" but names no tokens, fonts or colors. What follows is therefore the **de-facto system measurable on metalab.com**.

### Token architecture (de-facto)
The site ships CSS custom properties on `:root` in two tiers:
- **Primitive**: a 15-step neutral ramp `--neutral-0` … `--neutral-100` (e.g. `--neutral-20: #313033`, `--neutral-50: #79767a`, `--neutral-80: #cac5ca`), plus named colors `--black`, `--white`, `--purple: #584dff`, `--dark-purple: #100037`, `--mid-grey: #c7c7c7`, `--cool-grey: #edf1f5`.
- **Semantic**: role names in a `{layer}-{emphasis}` pattern — `--bg`, `--fg`, `--bg-subtle`, `--bg-highlight`, `--text-bold`, `--text-regular`, `--text-subtle`, `--text-error`, `--border-bold`, `--border-subtle`, `--border-highlight`, `--border-error` — each with an `-invert` twin (`--text-subtle-invert: #605d62`, `--bg-subtle-invert: #edf1f5`).
- **Component**: `--button-bg: hsla(0,0%,73%,.2)`, `--button-bg-invert`, `--button-height: 2.4rem`, `--button-height-md: 3.2rem`, `--button-height-lg: 3.6rem`, `--button-padding: 1.6rem`, `--navigation-height`.

### Theming
Dark is the default. The header's moon/dot toggle switches to a light theme; the token set implies the switch swaps the plain semantic variables for their `-invert` counterparts (a CSS-variable theme, not separate stylesheets). Only the dark theme was measured. No density modes or high-contrast mode are declared.

### Type & spacing systems
- Root font size 10px (derived: `--button-height-md: 3.2rem` renders 32px), so tokens are written in rem with a 1rem = 10px mental model: gutters 1.6rem (16px), 0.8rem (8px), vertical gutter 14rem (140px).
- Type follows a fixed tracking rule (Basis -1% of size, Eiko -2%) and a responsive step-down: 88px → 44px display, 140px → 64px about display, 20px → 18px intro, 16px → 14px body at 390px.

### Component model
Measured inventory: one pill button (default + hover outline, two sizes: 32px and 36px Submit, plus 24px Menu), filter chips sharing the pill, underline text input / select / textarea, checkbox, floating capsule nav, footer CTA list, project list rows. No cards, modals, tabs, tooltips or tables were found on the measured pages.

### Accessibility
The official accessibility statement ([metalab.com/accessibility](https://www.metalab.com/accessibility)) references WCAG without naming a conformance level and commits to: descriptive alt text, a site "navigable using only a keyboard", "a readable font size and … sufficient colour contrast", and compatibility with assistive technologies. No focus style, contrast ratio or target size is specified. Computed from measured colors: white on black is 21:1; `#cac5ca` on black about 12.4:1; `#79767a` on black about 4.7:1 — passes AA (4.5:1) for normal text with little margin, so keep it to labels and metadata as the site does.

### Delivery
No npm package, Figma community kit or public repo exists. Fonts are licensed commercial faces (PP Eiko from [Pangram Pangram](https://pangrampangram.com/products/eiko); Basis Grotesque Pro from Colophon). The class-level styling of the site was not inspected beyond computed styles.

## Do's and Don'ts

### Do
- Keep the canvas pure `#000000` and text pure `#ffffff`.
- Set headlines in PP Eiko at weight 240 (300 for the 140px about display) with -2% tracking.
- Use Basis Grotesque Pro 16px/400, 22.4px line height, -0.16px tracking for body.
- Make every action the same frosted pill: `#bababa33`, 50px radius, 32px tall, `0px 16px`, 16px/350 text.
- On hover, drop the fill to transparent and show a 1px white border — nothing else changes.
- Let imagery (3D star, photography) carry color; keep `#584dff` for small highlights.
- Use `#79767a` for labels, placeholders and metadata; `#cac5ca` for long reading text.
- Separate list rows with 1px `#ffffff4d` rules and 40px vertical padding.
- Keep everything square-cornered except pills and the header capsule.

### Don't
- Don't fill buttons with purple or any solid color — Metalab has no solid CTA.
- Don't add drop shadows, cards with radii, or gradients in CSS.
- Don't bold PP Eiko or set it above 300.
- Don't use uppercase eyebrow labels or wide letter-spacing.
- Don't box form fields — inputs are bare text over a single underline.
- Don't centre everything in a narrow container; the layout is full-bleed with 24px gutters.
- Don't invent a light-mode palette beyond the declared `-invert` tokens.

## Responsive Behavior

### Breakpoints
Measured at 1280px (desktop) and 390px (mobile). Intermediate breakpoints were not measured.

| Element | 1280px | 390px |
|---|---|---|
| Home / work / contact h1 | 88px / 240, -1.76px | 44px / 240, 44px lh, -0.88px |
| About h1 | 140px / 300, 168px lh | 64px / 300, 76.8px lh, -0.96px |
| About section display | 64px | 36px |
| Contact intro | 20px / 26px | 18px / 23.4px |
| Body (work, about) | 16px / 22.4px | 14px / 19.6px |
| Header | 54px, `0px 24px` | 48px, `0px 16px` |
| Menu pill | 24px tall | 32px tall, 14px/400 text |

### Touch Targets
Pills stay 32px tall on mobile (Menu grows from 24px to 32px). This is below the common 44px guidance; the official accessibility page sets no target size.

### Collapsing Strategy
- Header drops the world clock; only the Menu pill, wordmark and icons remain.
- The `/contact` two-column form and `/work` three-column rows stack to one column.
- Display type halves (88 → 44); body steps down 2px.

### Image Behavior
The homepage star render stays full-bleed behind the headline; photographs remain square-cornered and scale to the column.

## Iteration Guide

1. Start from black: `{colors.canvas}` `#000000` and `{colors.ink}` `#ffffff`; add greys only from the measured set (`#cac5ca`, `#79767a`, `#171717`, `#313033`).
2. Build one button (`button-primary`) and reuse it for chips, filters and Submit; implement only the measured hover (transparent + 1px white border).
3. Apply the tracking rule automatically: Basis = -1% of font size; Eiko = -2% (except 140px: -2.1px).
4. Headlines: `{typography.display}` 88px/240 desktop, `{typography.display-mobile}` 44px mobile. Never heavier.
5. Body: `{typography.body}` 16px/400/22.4px; mobile `{typography.body-mobile}` 14px/19.6px.
6. Radii: 0 everywhere, 50px pills, 1000px header. Nothing in between on rendered UI.
7. Spacing from the measured set: 4, 8, 10, 16, 24, 40, 60, 180px. Gutter 24px desktop, 16px mobile.
8. Color accents come from imagery; reach for `{colors.primary}` `#584dff` only for small highlights.
9. Forms: bare inputs, `{colors.text-subtle}` labels with asterisks, `{colors.border-subtle}` underline, error `{colors.text-error}` `#ff6060`.
10. If you need a component not listed here (card, modal, tab), it was not measured — do not invent one.
