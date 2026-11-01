---
version: alpha
name: Equinox
category: "Sports & Fitness"
description: "Equinox's equinox.com as measured — an all-black canvas (#000000) with white uppercase display type in the proprietary Equinox Sans at weight 400 and tight negative tracking (72px/-1.44px, 104px/-2.08px), grey reading copy (#aaaaaa), Messina Sans Mono 11px eyebrows, square 0px-radius buttons (solid white #ffffff with black text, hover #ededed; or 1px translucent-white outline), and a white, hairline-bordered sign-up form."

colors:
  primary: "#ffffff"
  primary-hover: "#ededed"
  on-primary: "#000000"
  canvas: "#000000"
  surface-raised: "#151515"
  surface-tint: "#ffffff12"
  ink: "#aaaaaa"
  ink-strong: "#ffffff"
  ink-muted: "#7a7a7a"
  ink-dim: "#ffffff4d"
  outline: "#ffffff99"
  outline-subtle: "#ffffff26"
  form-canvas: "#ffffff"
  form-ink: "#000000"
  form-label: "#5a5a5a"
  form-body: "#333333"
  form-border: "#00000026"
  form-border-hover: "#000000de"
  disabled-bg: "#ededed"
  link-blue: "#0047ff"

typography:
  display-xxl:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 104px
    fontWeight: 400
    lineHeight: 93.6px
    letterSpacing: -2.08px
    textTransform: uppercase
  display-xl:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 72px
    fontWeight: 400
    lineHeight: 64.8px
    letterSpacing: -1.44px
    textTransform: uppercase
  display-lg:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: -1.28px
    textTransform: uppercase
  display-join:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 64px
    fontWeight: 600
    lineHeight: 64px
    letterSpacing: -1.28px
    textTransform: uppercase
  display-md:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: -0.96px
    textTransform: uppercase
  display-mobile:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: -0.96px
    textTransform: uppercase
  display-join-mobile:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: -0.8px
    textTransform: uppercase
  lead:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
  heading-caps:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.48px
    textTransform: uppercase
  heading-form:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.8px
  body-lg:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
  body:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  card-title:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: -0.48px
    textTransform: uppercase
  button-form:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 19.8px
    letterSpacing: 0.36px
  button:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
    letterSpacing: 0.8px
    textTransform: uppercase
  nav-link:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  body-sm:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button-mobile:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 19.6px
    letterSpacing: 0.7px
    textTransform: uppercase
  footer-link:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    textTransform: uppercase
  legal-link:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  caption-caps:
    fontFamily: "'Equinox Sans', sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    textTransform: uppercase
  eyebrow-mono:
    fontFamily: "'Messina Sans Mono', monospace"
    fontSize: 11px
    fontWeight: 600
    lineHeight: 11px
    letterSpacing: 0.66px
    textTransform: uppercase

rounded:
  none: 0px
  circle: 50%

spacing:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 32px
  xxl: 48px
  3xl: 56px
  4xl: 64px
  5xl: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 21px 32px
    height: 64px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.form-body}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.none}"
    padding: 10px 24px
    height: 56px
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid #ffffff99"
    padding: 21px 32px
    height: 66px
  button-outlined-hover:
    border: "1px solid #ffffff"
  link-cta:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    borderBottom: "1px solid #ffffff"
    padding: 0px 32px
    height: 64px
  link-cta-hover:
    opacity: 0.6
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav-link}"
    height: 80px
  link-legal:
    textColor: "{colors.ink-dim}"
    typography: "{typography.caption-caps}"
  link-legal-hover:
    textColor: "{colors.ink-strong}"
    textDecoration: underline
  text-input:
    backgroundColor: transparent
    textColor: "{colors.form-ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    border: "1px solid #00000026"
    padding: 29.5px 16px 9.5px
    height: 64px
  select-button:
    backgroundColor: transparent
    textColor: "{colors.form-ink}"
    typography: "{typography.button-form}"
    rounded: "{rounded.none}"
    border: "1px solid #00000026"
    padding: 22px 60px
    height: 66px
  select-button-hover:
    border: "1px solid #000000de"
  button-disabled:
    backgroundColor: "{colors.disabled-bg}"
    textColor: "{colors.form-label}"
    typography: "{typography.button-form}"
    rounded: "{rounded.none}"
    border: "1px solid #ededed"
    height: 64px
  eyebrow:
    textColor: "{colors.ink-muted}"
    typography: "{typography.eyebrow-mono}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.footer-link}"
    height: 715px
---

## Overview

equinox.com is a black page. The body background, the 80px header, every content band and the footer are `{colors.canvas}` `#000000`; the capture is 56% pure black. On that ground the site sets very large white uppercase headlines in **Equinox Sans** at weight 400 with tight negative tracking — "EARN A MONTH ON US" (72px), "IT'S NOT FITNESS. IT'S LIFE." (72px), "118 CLUBS WORLDWIDE" (64px), "UNLIMITED SIGNATURE CLASSES" (104px) — and keeps reading copy in a quiet grey `{colors.ink}` `#aaaaaa`. Photography does the rest: warm, architectural interiors of the clubs (arched doorways, timber floors, floor-to-ceiling glass) and athletes mid-movement, framed as hard-edged rectangles with no rounding and no shadow.

The interaction language is equally reduced. The primary button is a solid white rectangle with black uppercase 16px/600 text tracked at 0.8px ("VISIT A CLUB", "FIND A CLUB"); it greys to `#ededed` on hover. The secondary button is the same rectangle drawn as a 1px 60%-white outline ("FIND YOUR CLUB", "EXPLORE MEMBERSHIP"), which firms up to solid white on hover. The header's "JOIN TODAY" is text with a 1px white underline that fades to 60% opacity on hover. There is no accent colour, no radius, no shadow anywhere on the homepage.

The join flow (`/join/step1`) flips polarity: a black image panel on the left with a 64px/600 headline, and a white form panel on the right with hairline-bordered (`rgba(0,0,0,0.15)`) floating-label inputs and a grey disabled "Choose Your Membership" button.

**Key Characteristics:**
- Black canvas, white display type, grey `#aaaaaa` body copy.
- Equinox Sans 400 for display (uppercase, -0.02em tracking at every size: 104/-2.08, 72/-1.44, 64/-1.28, 48/-0.96, 24/-0.48).
- Uppercase 16px/600 button labels with +0.05em (0.8px) tracking.
- Messina Sans Mono 11px/600 uppercase eyebrows in `#7a7a7a` (class/category labels like "BEATS RIDE").
- Square corners everywhere (`{rounded.none}`); the only radius is a 50% circle on a small counter badge.
- Hover changes are tonal only: white → `#ededed`, outline 60% → 100%, text link → 60% opacity.
- Generous black space: 64px and 80px paddings, sections separated by thin horizontal rules.

### Art Direction (from the capture)
- **Interiors as protagonist.** The hero is a wide, softly lit club floor with floor-to-ceiling windows onto trees; the "118 CLUBS WORLDWIDE" band pairs a tall photo of an arched steel-and-glass doorway opening onto a timber studio with a small, dark lounge photo below the copy.
- **Warm light on black.** Photos are warm (timber, amber ceiling light, daylight through glass) and sit on the black page with no frame, so they read as lit windows in a dark room.
- **People mid-movement, unposed.** A man stretching on the floor in the hero, a woman stepping through a doorway — athletes are part of the space rather than looking at the camera.
- **Asymmetric two-column rhythm.** Text blocks hug the left margin while images take the right half, and the small secondary photo breaks the grid under the copy.

### Voice of Microcopy
- Headlines are short declaratives in caps: "EARN A MONTH ON US", "IT'S NOT FITNESS. IT'S LIFE."
- Supporting copy is sentence case and aspirational ("Show up to get rewarded. Join today. Offer ends soon.", "…designed to help you perform at the highest level.").
- CTAs are two or three words, verb-first, in caps: "VISIT A CLUB", "FIND A CLUB", "JOIN TODAY", "EXPLORE MEMBERSHIP".
- The brand's recurring phrase is "High-Performance Living" ("WELCOME TO HIGH-PERFORMANCE LIVING.", footer "THE HOME OF HIGH-PERFORMANCE.").

## Colors

> **Source pages:** homepage `https://www.equinox.com/` (extraction `equinox.json` + probes), join form `https://www.equinox.com/join/step1` (extraction `equinox--join.json` + probes).

### Action
- **Primary White** (`{colors.primary}` — `#ffffff`): Fill of the primary CTA ("VISIT A CLUB" in the header, "FIND A CLUB" in the hero). On a black site the action colour is white.
- **Primary Hover** (`{colors.primary-hover}` — `#ededed`): CTA fill on hover (measured).
- **On Primary** (`{colors.on-primary}` — `#000000`): CTA label.

### Surface
- **Canvas** (`{colors.canvas}` — `#000000`): Body, header, sections, footer.
- **Surface Raised** (`{colors.surface-raised}` — `#151515`): Small raised areas measured by area on the homepage.
- **Surface Tint** (`{colors.surface-tint}` — `#ffffff12`): 7%-white fill measured on the homepage (third-largest background by area).
- **Outline** (`{colors.outline}` — `#ffffff99`): 1px border of outlined buttons.
- **Outline Subtle** (`{colors.outline-subtle}` — `#ffffff26`): Hairline borders on black (section dividers visible in the capture).

### Text on Black
- **Ink** (`{colors.ink}` — `#aaaaaa`): The most-read text colour — paragraphs ("We collaborate with AD100 architects…"), footer link columns.
- **Ink Strong** (`{colors.ink-strong}` — `#ffffff`): Headlines, nav links, outlined-button labels, footer headings.
- **Ink Muted** (`{colors.ink-muted}` — `#7a7a7a`): Mono eyebrows, the footer countdown number.
- **Ink Dim** (`{colors.ink-dim}` — `#ffffff4d`): 30%-white "TERMS & CONDITIONS" link over the hero; turns `#ffffff` + underline on hover.

### Form (join flow)
- **Form Canvas** (`{colors.form-canvas}` — `#ffffff`): Right-hand form panel.
- **Form Ink** (`{colors.form-ink}` — `#000000`): Input values, "Select a Club" label, form heading.
- **Form Label** (`{colors.form-label}` — `#5a5a5a`): Floating input labels ("First Name"), disabled-button text.
- **Form Body** (`{colors.form-body}` — `#333333`): Body default colour; "Exit" link; mobile CTA label.
- **Form Border** (`{colors.form-border}` — `#00000026`): 1px border of input labels and the "Select a Club" button; hover `{colors.form-border-hover}` `#000000de`.
- **Disabled** (`{colors.disabled-bg}` — `#ededed`): Fill and border of the inactive "Choose Your Membership" button.
- **Link Blue** (`{colors.link-blue}` — `#0047ff`): "Terms" / "Privacy" links in the join form's fine print.

## Typography

### Font Family
- **Equinox Sans** — served from Equinox's own CSS at weights 400 and 600; used for every role except eyebrows. No public foundry listing for a typeface named "Equinox Sans" was found (searches return unrelated "Equinox" display fonts by Tugcu Design Co. and ITC); treat it as proprietary.
- **Messina Sans Mono** — weight 600, used for 11px uppercase eyebrows. Messina Sans is a Luzi Type family with "three subfamilies: Normal, Condensed, and Mono" ([luzi-type.ch/messina-sans](https://luzi-type.ch/messina-sans)); it is a commercial font.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Case | Measured on |
|---|---|---|---|---|---|---|
| `{typography.display-xxl}` | 104px | 400 | 93.6px | -2.08px | upper | "Unlimited Signature Classes" |
| `{typography.display-xl}` | 72px | 400 | 64.8px | -1.44px | upper | hero h1, "It's not fitness" h2 |
| `{typography.display-lg}` | 64px | 400 | 64px | -1.28px | upper | "118 Clubs Worldwide" |
| `{typography.display-join}` | 64px | 600 | 64px | -1.28px | upper | `/join/step1` h1 |
| `{typography.display-md}` | 48px | 400 | 48px | -0.96px | upper | "Visit" block |
| `{typography.display-mobile}` | 48px | 400 | 48px | -0.96px | upper | hero h1 at 390px |
| `{typography.display-join-mobile}` | 40px | 600 | 40px | -0.8px | upper | join h1 at 390px |
| `{typography.lead}` | 24px | 400 | 28.8px | normal | — | hero subline "Show up to get rewarded…" |
| `{typography.heading-caps}` | 24px | 400 | 24px | -0.48px | upper | footer "The home of high-performance." |
| `{typography.heading-form}` | 24px | 600 | 28.8px | normal | — | "3 steps, and you're in." |
| `{typography.body-lg}` | 18px | 400 | 21.6px | normal | — | paragraphs |
| `{typography.body}` | 18px | 400 | 25.2px | normal | — | body default, form inputs |
| `{typography.card-title}` | 18px | 400 | 18px | -0.48px | upper | "Personal Training" card h4 |
| `{typography.button-form}` | 18px | 600 | 19.8px | 0.36px | — | form buttons |
| `{typography.button}` | 16px | 600 | 22.4px | 0.8px | upper | all CTAs |
| `{typography.nav-link}` | 16px | 400 | 20.8px | normal | — | header nav |
| `{typography.body-sm}` | 16px | 400 | 22.4px | normal | — | join-form paragraph |
| `{typography.button-mobile}` | 14px | 600 | 19.6px | 0.7px | upper | CTA at 390px |
| `{typography.footer-link}` | 14px | 400 | 18.2px | normal | upper | footer links |
| `{typography.legal-link}` | 14px | 400 | 19.6px | normal | — | join "Terms & Conditions" |
| `{typography.caption-caps}` | 12px | 400 | 16.8px | normal | upper | hero T&C link |
| `{typography.eyebrow-mono}` | 11px | 600 | 11px | 0.66px | upper | Messina Sans Mono eyebrow |

### Principles
- **Display at 400, not bold.** The big uppercase headlines are regular weight; size and tracking create the impact. Only the join-flow h1 uses 600.
- **Constant -0.02em display tracking.** Every uppercase display size carries letter-spacing of exactly -2% of its size; line-height is ≤ 1.0 (0.9 at 104/72px, 1.0 at 64/48/24px).
- **Positive tracking on labels.** Buttons use +0.05em (0.8px at 16px, 0.7px at 14px); mono eyebrows +0.06em (0.66px at 11px); form buttons +0.02em (0.36px at 18px).
- **Grey for reading, white for shouting.** Paragraph copy is `#aaaaaa`; anything uppercase and large is white.

### Note on Font Substitutes
Equinox Sans has no public release; no substitute is cited or measured. When it cannot be loaded, fall back to a neutral grotesque sans (`sans-serif`) while keeping the measured sizes, weight 400 for display, uppercase, and the -0.02em tracking. Messina Sans Mono is licensable from Luzi Type ([luzi-type.ch/messina-sans](https://luzi-type.ch/messina-sans)); otherwise fall back to `monospace` at 11px/600 with 0.66px tracking.

## Layout

### Spacing System
- **Measured gaps** (homepage): 16px (most frequent), 8px, 32px, 12px, 24px, 56px, 64px, 80px, 48px.
- **Measured paddings** (homepage): 64px and 24px (most frequent), 80px, 21px/32px (buttons), 10px, 48px, 40px.
- **Tokens**: `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px · `{spacing.lg}` 24px · `{spacing.xl}` 32px · `{spacing.xxl}` 48px · `{spacing.3xl}` 56px · `{spacing.4xl}` 64px · `{spacing.5xl}` 80px.
- `:root` exposes layout variables `--global-header-height: 64px`, `--global-navigation-height: 6.4rem` and `--mobile-page-hero-block-size: 70svh`.

### Grid & Container
- **Header** (80px): letter-spaced EQUINOX wordmark at left, nav (Clubs, Membership, Classes, Personal Training, Pilates, Spa, More ▾) beside it, white "VISIT A CLUB" button and underlined "JOIN TODAY" at the right.
- **Hero**: a full-width photograph inset by a thin black margin (visible in the capture at ~12px of the 960px frame), with left-aligned headline, subline and button in the upper-left and the T&C link bottom-left.
- **Manifesto**: centred-right three-line "IT'S NOT FITNESS. IT'S LIFE." with a small two-line uppercase caption below.
- **Two-column feature bands** below: headline + grey paragraph + outlined button on the left, a large photograph on the right, with a small secondary photo under the copy; bands separated by full-width 1px hairlines.
- **Join flow**: 50/50 split — 640px image panel left, 640px white form panel right with 24px/64px inner padding; inputs 248px (half) or 512px (full) wide.

### Whitespace Philosophy
Black space is the luxury signal: 64–80px paddings, one headline per screen-height, and copy blocks narrow (paragraph measured 520px wide).

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | none | Every measured element — no box-shadow was recorded on the homepage or join page |
| Tone | `#151515` and `#ffffff12` fills | Slight lift on black without shadows |
| Hairline | 1px `#ffffff26` / `#ffffff99` | Dividers and outlined buttons |

Depth comes from photography and from the contrast between black ground and white type.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Every button, input, image and card |
| `{rounded.circle}` | 50% | The one measured radius — the footer countdown badge ("164 days to Equinox") |

### Geometry
- All CTAs are hard rectangles: 64px tall (solid) or 66px (outlined, +1px border each side).
- The join page's "Exit" link draws its icon with a pseudo-element rotated 45° (`transform: matrix(0.707107, 0.707107, -0.707107, 0.707107, 0, 0)`, black fill) — a cross built from rotated bars rather than an icon font.
- Images are cropped rectangles with no rounding.

## Components

### Buttons

**`button-primary`** — "VISIT A CLUB", "FIND A CLUB".
- Background `{colors.primary}` `#ffffff`, label `{colors.on-primary}` `#000000`, `{typography.button}` (16px/600/22.4px, 0.8px, uppercase), radius 0, padding 21px 32px, height 64px.
- Hover `button-primary-hover`: background `#ededed`. Text and size unchanged.
- At 390px (`button-primary-mobile`): full-width (358px), 14px/600/19.6px, 0.7px tracking, padding 10px 24px, height 56px, label `#333333`.

**`button-outlined`** — "FIND YOUR CLUB", "EXPLORE MEMBERSHIP".
- Transparent, label `{colors.ink-strong}`, same type, 1px solid `#ffffff99`, padding 21px 32px, height 66px.
- Hover `button-outlined-hover`: border becomes solid `#ffffff`.

**`link-cta`** — header "JOIN TODAY".
- White 16px/600 uppercase text with a 1px white underline (bottom border), 64px hit area with 0 32px padding. Hover `link-cta-hover`: opacity 0.6.

### Navigation
**`nav`** — black, 80px. Links are `{typography.nav-link}` (16px/400/20.8px) in white, sentence case, separated by small gaps; "More" opens a menu (chevron). The skip link "Skip to main content" is black with white 18px text and 10px padding.

### Links
**`link-legal`** — "TERMS & CONDITIONS" over the hero: 12px/400 uppercase, 30% white (`#ffffff4d`), underlined in the capture; hover full white + underline.

### Eyebrows
**`eyebrow`** — Messina Sans Mono 11px/600/11px, 0.66px tracking, uppercase, `#7a7a7a` (e.g. "BEATS RIDE" class label).

### Forms (join flow)

**`text-input`** — floating-label field.
- The label element is the visible box: 1px solid `rgba(0,0,0,0.15)`, 0 radius, 64px tall (248px half-width / 512px full-width); label text 18px/400 `{colors.form-label}` `#5a5a5a`.
- The input inside has transparent background, black 18px/400/25.2px text, padding 29.5px 16px 9.5px (value sits below the floated label), 62px tall.

**`select-button`** — "Select a Club".
- Transparent, black 18px/600/19.8px with 0.36px tracking, 1px `#00000026` border, padding 22px 60px, 66px tall, 512px wide. Hover border `#000000de`.

**`button-disabled`** — "Choose Your Membership" before the form is complete.
- Background and border `#ededed`, text `#5a5a5a`, 18px/600 with 0.36px tracking, 64px tall, full width (512px).

Fine print in the form is `{typography.legal-link}` / 16px grey `#7a7a7a` with "Terms" and "Privacy" links in `{colors.link-blue}` `#0047ff`.

### Footer
**`footer`** — black, 715px tall. A countdown badge ("164 DAYS TO EQUINOX", number in a 50% circle, `#7a7a7a`), the uppercase tagline "THE HOME OF HIGH-PERFORMANCE." (24px/400, -0.48px), and link columns headed by white 14px uppercase labels ("EXPLORE") with `#aaaaaa` 14px uppercase links ("CLUBS"). Hovering a footer link ("Alumni") drops opacity to about 0.63.

## Design System Architecture

**Equinox publishes no public design system, token package, component library or brand guideline.** Searches for an official design system, brand guidelines/press kit, GitHub/npm tokens and the "Equinox Sans" typeface returned no Equinox-owned documentation (queries in `SOURCES.json`; press-kit searches only surfaced the unrelated company Equinix). The one external source opened is the type foundry for the eyebrow face, [Luzi Type — Messina Sans](https://luzi-type.ch/messina-sans).

What follows is the **de-facto system measurable on equinox.com**:

- **Token architecture**: only six custom properties on `:root`, all layout/animation: `--global-header-height: 64px`, `--global-navigation-height: 6.4rem`, `--mobile-page-hero-block-size: 70svh`, `--animate-duration: 1s`, `--animate-delay: 1s`, `--animate-repeat: 1`. No colour or type tokens are exposed; the stylesheet corpus is dominated by a third-party chat widget's Salesforce Lightning (`--slds-*`) styles, which are not part of the Equinox look.
- **Theming**: dark marketing pages (black canvas) and a light form panel in the join flow — a per-page/per-panel inversion, not a user-switchable theme.
- **Type & spacing systems**: two families (Equinox Sans 400/600, Messina Sans Mono 600). Display tracking is a constant -0.02em; spacing values sit on an 8px grid (8, 16, 24, 32, 48, 56, 64, 80px) with 12px and the 21px button padding as exceptions.
- **Component model (observed)**: solid and outlined rectangular buttons, underlined text CTA, header nav with "More" dropdown, floating-label inputs, select button, disabled button, mono eyebrow, countdown badge, two-column feature band.
- **Accessibility (observed)**: a "Skip to main content" link exists; CTAs are 56–66px tall; body grey `#aaaaaa` on black. No published accessibility standard was found.
- **Delivery**: no npm package, Figma kit or versioned release found.

## Do's and Don'ts

### Do
- Keep the canvas pure black `#000000` and use white `#ffffff` as the action colour.
- Set display copy in uppercase Equinox Sans 400 with -0.02em tracking and ≤ 1.0 line-height.
- Use `#aaaaaa` for paragraphs and `#7a7a7a` for mono eyebrows.
- Keep every corner square (0px).
- Pair one solid white CTA with outlined or underlined secondary actions.
- Use large, warm architectural photography as the main colour source.

### Don't
- Don't add a brand accent colour to buttons or links on the marketing pages (the only blue, `#0047ff`, lives in the join form's fine print).
- Don't round buttons or images.
- Don't bold display headlines on marketing pages — they are 400.
- Don't add drop shadows; none are measured.
- Don't set body paragraphs in pure white; reading copy is grey.

## Responsive Behavior

### Breakpoints
Exact breakpoints were not measured; the comparison is 1280px vs 390px.

| Element | 1280px | 390px |
|---|---|---|
| Hero h1 | 72px/400/64.8px, -1.44px | 48px/400/48px, -0.96px |
| Largest display | 104px | 56px (mobile size table) |
| Body paragraph | 18px/400/21.6px | 16px/400/20.8px |
| Primary CTA | 16px label, 21px 32px, 64px tall | 14px label, 10px 24px, 56px tall, full width |
| Join h1 | 64px/600 | 40px/600/40px, -0.8px |
| Join body | 16px/22.4px | 14px/18.2px |

### Touch Targets
All CTAs are ≥ 56px tall on mobile; form fields are 64px tall.

### Collapsing Strategy
- Display sizes in the mobile size table: 56, 48, 40, 32, 20px vs desktop 104, 72, 64, 48, 24px.
- The mobile header carries the "VISIT A CLUB" CTA; the CTA goes full-width.
- `--mobile-page-hero-block-size: 70svh` sets mobile hero height.

### Image Behavior
Photography stays full-bleed or column-filling with square corners; the hero keeps its text over the image at all widths.

## Iteration Guide

1. Start on `#000000`; make the first action a white rectangle with black uppercase 16px/600 text (0.8px tracking), 21px 32px padding, 64px tall.
2. Headlines: Equinox Sans 400, uppercase, letter-spacing = -0.02 × size, line-height 0.9–1.0.
3. Paragraphs `#aaaaaa` 18px/21.6px; eyebrows Messina Sans Mono 11px/600 `#7a7a7a`.
4. Secondary actions: 1px `#ffffff99` outline (hover `#ffffff`) or underlined text (hover opacity 0.6).
5. Never round a corner; never add a shadow.
6. Forms invert to white with 1px `rgba(0,0,0,0.15)` boxes, 18px inputs and `#5a5a5a` floating labels.
7. Reference tokens by name (`{colors.primary}`, `{typography.display-xl}`, `{rounded.none}`).
