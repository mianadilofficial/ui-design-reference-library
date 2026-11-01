---
version: alpha
name: One Medical
category: "Healthcare & Wellness"
description: 'Amazon One Medical''s primary-care marketing system — warm editorial serif headlines in GT Super Display (72–88px, weights 500/600) over light Ginto 200 body copy at 18px/31.5px, set in deep jade #004d49 on white #ffffff with a jade #005450 pill CTA (36px radius, 16px 40px padding, hover #068466), avocado #abcc76 and melon #ffc776 secondary pills, clear-day #eef6f4 and warm #f5f3ef bands, 10px-radius photo cards and a jade footer.'

colors:
  primary: "#005450"
  primary-hover: "#068466"
  on-primary: "#ffffff"
  ink: "#004d49"
  ink-legal: "#2a2927"
  dark-sage: "#068466"
  hero-blue: "#0578ff"
  canvas: "#ffffff"
  hero-warm: "#f5f3ef"
  clear-day: "#eef6f4"
  salt-gray: "#f4f4f4"
  tint-sesame: "#ffedce"
  sazerac: "#f1dfca"
  fog: "#e2e0de"
  avocado: "#abcc76"
  avocado-light: "#bcde85"
  melon: "#ffc776"
  link-hover: "#009e87"
  link-hover-alt: "#09ad87"
  focus-ring: "#88c0fb"

typography:
  display-hero:
    fontFamily: "\"GT Super Display\", \"Times New Roman\", serif"
    fontSize: 72px
    fontWeight: 500
    lineHeight: 72px
  display-rotating:
    fontFamily: "\"GT Super Display\", \"Times New Roman\", serif"
    fontSize: 88px
    fontWeight: 600
    lineHeight: 94.248px
  display-section:
    fontFamily: "\"GT Super Display\", \"Times New Roman\", serif"
    fontSize: 72px
    fontWeight: 600
    lineHeight: 72px
  menu-display:
    fontFamily: "\"GT Super Display\", \"Times New Roman\", serif"
    fontSize: 50px
    fontWeight: 600
    lineHeight: 53.55px
  heading-callout:
    fontFamily: "\"GT Super Display\", \"Times New Roman\", serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 60px
  heading-card:
    fontFamily: "\"GT Super Display\", \"Times New Roman\", serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  display-hero-mobile:
    fontFamily: "\"GT Super Display\", \"Times New Roman\", serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 50px
  body-lg:
    fontFamily: "Ginto, helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 200
    lineHeight: 31.5px
  body-lg-strong:
    fontFamily: "Ginto, helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 31.5px
  body-mobile:
    fontFamily: "Ginto, helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 200
    lineHeight: 28px
  link-lg:
    fontFamily: "Ginto, helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 30px
  button-md:
    fontFamily: "Ginto, helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button-sm:
    fontFamily: "Ginto, helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  eyebrow:
    fontFamily: "Ginto, helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 24.5px
    letterSpacing: 1.4px
    textTransform: uppercase
  body-sm:
    fontFamily: "Ginto, helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 200
    lineHeight: 24.5px
  fine-print:
    fontFamily: "Ginto, helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 24px

rounded:
  card: 10px
  button: 36px
  pill: 5000px
  circle: 50%

spacing:
  xxs: 2px
  xs: 12px
  sm: 14px
  md: 16px
  lg: 24px
  xl: 40px
  gap-md: 44px
  gap-lg: 60px
  row-gutter: 45.7143px
  page-gutter: 91.4286px
  section: 120px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.button}"
    padding: 16px 40px
    height: 56px
    minWidth: 189px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-mobile:
    padding: 14px 32px
    height: 52px
  button-nav-pill:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    padding: 12px 14px
    height: 45px
  button-nav-pill-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.avocado}"
    textColor: "{colors.ink}"
    typography: "{typography.button-md}"
    rounded: "{rounded.button}"
    padding: 16px 40px
    height: 56px
  button-melon:
    backgroundColor: "{colors.melon}"
    textColor: "{colors.ink}"
    typography: "{typography.button-md}"
    rounded: "{rounded.button}"
    padding: 16px 40px
    height: 56px
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-md}"
    rounded: "{rounded.button}"
    border: "1px solid #e2e0de"
    padding: 16px 40px
    height: 58px
  button-outlined-hover:
    backgroundColor: "{colors.avocado-light}"
  link-arrow:
    textColor: "{colors.dark-sage}"
    typography: "{typography.button-md}"
  link-legal:
    textColor: "{colors.ink-legal}"
    typography: "{typography.fine-print}"
    textDecoration: underline
  link-legal-hover:
    textColor: "{colors.link-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    height: 78px
  nav-link-hover:
    textColor: "{colors.dark-sage}"
    textDecoration: underline
  announcement-banner:
    backgroundColor: "{colors.tint-sesame}"
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
    height: 64px
  card-preview:
    backgroundColor: "{colors.salt-gray}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-card}"
    rounded: "{rounded.card}"
  eyebrow-label:
    textColor: "{colors.dark-sage}"
    typography: "{typography.eyebrow}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-lg}"
    padding: 120px 91.4286px 0px
  footer-legal-link:
    textColor: "{colors.avocado}"
    typography: "{typography.body-sm}"
---

## Overview

One Medical (branded on the live site as **amazon one medical**) is a membership primary-care practice. Its marketing site reads like a well-kept health magazine rather than a clinic portal: very large, warm serif headlines, airy ultra-light sans body copy, real photography cropped tight on hands and faces, and small hand-drawn spot illustrations. Everything sits on a white canvas (`{colors.canvas}` — `#ffffff`) that is broken into horizontal bands of soft tints: a warm stone hero (`{colors.hero-warm}` — `#f5f3ef`), a pale mint "clear day" band (`{colors.clear-day}` — `#eef6f4`), and a full-bleed deep jade footer (`{colors.primary}` — `#005450`).

The brand voice is calm, reassuring and slightly witty ("Comprehensive healthcare just got less painful", "Fall in love with your doctor's office"). The headline is the hero — set in **GT Super Display**, the serif the brand guidelines describe as a custom "One GT Super" with "a balance of organic forms and precise serifs" ([brand guidelines](https://www.onemedical.com/brand-guidelines/)). Body copy is **Ginto** at weight 200, an unusually light weight for running text that gives the site its soft, unhurried texture.

Color is almost monochrome green. Text is deep jade (`{colors.ink}` — `#004d49`), the filled CTA is jade (`{colors.primary}` — `#005450`), and highlighted words in headlines, arrow links and eyebrows are dark sage (`{colors.dark-sage}` — `#068466`). Warm accents — avocado (`{colors.avocado}` — `#abcc76`), melon (`{colors.melon}` — `#ffc776`) and the peach announcement banner (`{colors.tint-sesame}` — `#ffedce`) — appear as secondary pills and banners. The current homepage hero headline is the exception: it renders in a bright blue (`{colors.hero-blue}` — `#0578ff`) next to an Amazon Prime offer, together with a blue arc line drawn over the photo.

**Key Characteristics:**
- Serif-led hierarchy: GT Super Display at 72px / 88px for heroes and section openers, 48px for callouts and 32px for card titles.
- Ultra-light Ginto 200 body at 18px with a generous 31.5px line height (1.75).
- One filled jade pill CTA per band: `16px 40px` padding, 56px tall, 36px radius, min-width 189px.
- Hover never changes shape — the jade pill lightens to dark sage `#068466`, text links shift to sage and underline.
- Pale tinted bands (`#f5f3ef`, `#eef6f4`, `#ffedce`) separate sections; there are no visible card shadows on the homepage.
- Photo cards with 10px corners, uppercase tracked eyebrows (14px, 1.4px letter-spacing) and serif titles.
- Full-bleed jade footer with white and avocado text.

## Colors

> Source pages measured: home (`/`), `/business/`, `/locations/`. Color names in this section are the site's own utility-class names from its stylesheet (`.-bg-color-jade`, `.-bg-color-dark-jade`, `.-bg-color-dark-sage`, `.-bg-color-avocado`, `.-bg-color-melon`, `.-bg-color-clear-day`, `.-bg-color-salt-gray`, `.-bg-color-fog`, `.-bg-color-tint-sesame`, `.-bg-color-sazerac`).

### Brand & Action
- **Jade** (`{colors.primary}` — `#005450`): The primary pill CTA ("Get Started", "Sign up", "Get in touch"), the footer band and the locations page background. Stylesheet name: `jade`.
- **Dark Sage** (`{colors.primary-hover}` / `{colors.dark-sage}` — `#068466`): Hover color of every jade pill (measured `rgb(0, 84, 80)` → `rgb(6, 132, 102)`), color of arrow links ("See all our services ›", "Learn more ›"), eyebrows and the rotating highlighted word in the "Get care today for…" headline.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Text on jade.
- **Hero Blue** (`{colors.hero-blue}` — `#0578ff`): The homepage h1 color in the current Amazon Prime hero only. Not used elsewhere in the measured pages — treat it as a campaign color, not a system color.

### Accent Pills & Banners
- **Avocado** (`{colors.avocado}` — `#abcc76`): Secondary pill fill ("Get in touch" on `/business/`) and footer legal-link color.
- **Avocado Light** (`{colors.avocado-light}` — `#bcde85`): Measured hover fill of the white outlined pill on `/business/` ("See our results").
- **Melon** (`{colors.melon}` — `#ffc776`): Melon pill ("Join now") with jade-ink text.
- **Tint Sesame** (`{colors.tint-sesame}` — `#ffedce`): The 64px announcement banner at the very top ("Medicare Annual Enrollment…").

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): Page background, nav bar, centered content sections.
- **Hero Warm** (`{colors.hero-warm}` — `#f5f3ef`): Warm stone behind the homepage hero (largest measured background area).
- **Clear Day** (`{colors.clear-day}` — `#eef6f4`): Pale mint band behind the three preview cards; also large bands on `/business/`.
- **Salt Gray** (`{colors.salt-gray}` — `#f4f4f4`): Card/image placeholder fill (10px radius cards) and the overlay-menu text color.
- **Sazerac** (`{colors.sazerac}` — `#f1dfca`): Warm tan band on `/business/`.
- **Fog** (`{colors.fog}` — `#e2e0de`): 1px border of the white outlined pill.

### Text
- **Ink / Dark Jade** (`{colors.ink}` — `#004d49`): All body copy, nav items and headlines (except the campaign hero). The most-read text color on every measured page.
- **Ink Legal** (`{colors.ink-legal}` — `#2a2927`): Near-black for the hero offer paragraph and its fine print ("*Purchase terms apply.").
- **Link Hover** (`{colors.link-hover}` — `#009e87`): Hover color of underlined legal links on the homepage.
- **Link Hover Alt** (`{colors.link-hover-alt}` — `#09ad87`): Hover color of sage "Click here" links on `/business/`.

### Focus
- **Focus Ring** (`{colors.focus-ring}` — `#88c0fb`): The stylesheet's focus treatment is `box-shadow: 0 0 2px 2px #88c0fb` (8 rules) and `0 0 0 5px #88c0fb`.

### Semantic
No success/warning/error palette is exposed on the marketing pages measured. The stylesheet does contain `.-bg-color-red` `#fa645a` and `.-bg-color-tint-red` `#fac5bf`, but their usage was not observed, so they are not declared as tokens.

## Typography

### Font Families
- **GT Super Display** — served as `"GT Super Display"` (fallbacks `"Times New Roman", "serif"`). Loaded font-face on the homepage: GT Super Display 600; headlines are computed at weights 500 and 600. The brand guidelines name the primary serif "One GT Super", a custom version of GT Super ([brand guidelines](https://www.onemedical.com/brand-guidelines/)). GT Super is a Grilli Type family with Text and Display subfamilies ([Grilli Type](https://www.grillitype.com/typeface/gt-super)).
- **Ginto** — served as `Ginto` (fallbacks `helvetica, "sans-serif"`). Loaded weights: 200 and 600. Ginto is a geometric-humanist sans by Dinamo ([ABC Ginto](https://abcdinamo.com/typefaces/ginto)); the guidelines say its circular forms echo the One Medical atom.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Use |
|---|---|---|---|---|---|
| `{typography.display-rotating}` | GT Super Display | 88px | 600 | 94.248px | "Get care today for / heart health" rotating headline |
| `{typography.display-hero}` | GT Super Display | 72px | 500 | 72px | Homepage h1 |
| `{typography.display-section}` | GT Super Display | 72px | 600 | 72px | Section h2 ("Fall in love with your doctor's office"), `/business/` h1 |
| `{typography.menu-display}` | GT Super Display | 50px | 600 | 53.55px | Full-screen menu items ("Office locations") |
| `{typography.heading-callout}` | GT Super Display | 48px | 600 | 60px | Jade callout headline ("Membership costs only $99/year.") |
| `{typography.heading-card}` | GT Super Display | 32px | 500 | 40px | Preview-card titles |
| `{typography.display-hero-mobile}` | GT Super Display | 48px | 500 | 50px | h1 at 390px |
| `{typography.body-lg}` | Ginto | 18px | 200 | 31.5px | Default body, banner, nav container |
| `{typography.body-lg-strong}` | Ginto | 18px | 600 | 31.5px | Banner CTA, bold inline |
| `{typography.body-mobile}` | Ginto | 16px | 200 | 28px | Body at 390px |
| `{typography.link-lg}` | Ginto | 20px | 600 | 30px | "Learn more about membership" arrow link |
| `{typography.button-md}` | Ginto | 16px | 600 | 24px | Pill labels, arrow links |
| `{typography.button-sm}` | Ginto | 14px | 600 | 21px | Nav "Sign up" pill, nav items |
| `{typography.eyebrow}` | Ginto | 14px | 600 | 24.5px | Uppercase, 1.4px tracking ("MENTAL HEALTH") |
| `{typography.body-sm}` | Ginto | 14px | 200 | 24.5px | Footer legal links |
| `{typography.fine-print}` | Ginto | 14px | 300 | 24px | "*Purchase terms apply." |

### Principles
- **Serif for voice, sans for information.** Every headline from card title upward is GT Super Display; everything functional (nav, buttons, eyebrows, body) is Ginto.
- **Light body, heavy actions.** Body runs at weight 200; every interactive label (pills, arrow links, nav items) jumps to 600. There is almost nothing in between (300 appears only in fine print, 700 only in `<strong>`).
- **Tight display leading.** Display lines are set solid (72px/72px) or near-solid (88px/94.248px, ≈1.071); body leading is loose (1.75).
- **Tracking only on eyebrows.** The only measured letter-spacing is 1.4px on 14px uppercase eyebrows. Headlines and body use normal tracking.
- **Two-tone headlines.** The rotating headline sets its changing word in `{colors.dark-sage}` against the `{colors.ink}` lead-in.

### Note on Font Substitutes
Both faces are commercial. GT Super is licensed from Grilli Type and the brand uses a custom cut; Ginto is licensed from Dinamo. If they are unavailable, the served fallbacks are `"Times New Roman"` for the serif and `helvetica` for the sans — that is what the site itself specifies. No open-source substitute is named by any official source, so none is prescribed here.

## Layout

### Spacing System
Measured paddings and gaps cluster around a few values rather than a strict 4/8 grid:
- `{spacing.xxs}` 2px · `{spacing.xs}` 12px · `{spacing.sm}` 14px · `{spacing.md}` 16px · `{spacing.lg}` 24px · `{spacing.xl}` 40px.
- Gaps: `{spacing.gap-md}` 44px and `{spacing.gap-lg}` 60px between columns.
- Grid: rows carry `{spacing.row-gutter}` 45.7143px side padding; full-width sections and the footer carry `{spacing.page-gutter}` 91.4286px. These fractional values come from percentage-based gutters at the 1280px measuring width.
- Section rhythm: the footer opens with `{spacing.section}` 120px top padding.

### Grid & Container
- 12-column bootstrap-style grid (`row`, `col-md-8`, `col-md-10`, `col-xs-12` classes) with percentage gutters.
- Homepage hero: two columns — headline, offer copy and CTA on the left, cropped photo bleeding off the right edge with a thin blue arc.
- Preview band: three equal columns of photo cards on `{colors.clear-day}`.
- Service and feature sections: centered single column (`col-md-8`) for headline + paragraph + arrow link, followed by a three-up icon grid of small illustrations with centered captions.

### Whitespace Philosophy
Generous and quiet. Headlines get a full band to themselves; body paragraphs are short and centered under them; icon-grid captions are two lines of 18px light text. Density only increases in the footer's location list.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Every measured card, button and band on the homepage |
| Focus | `box-shadow: 0 0 2px 2px #88c0fb` | Keyboard focus ring (stylesheet) |
| Overlay | `box-shadow: 0 0 8px rgba(0,0,0,.16)` | Present in the stylesheet (2 rules); placement not observed |

Depth comes from color bands and photography, not shadows. The nav bar is a flat white strip (78px); in the capture it sits over the hero photo, and no shadow was measured on it.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.card}` | 10px | Preview-card images and salt-gray cards |
| `{rounded.button}` | 36px | All pill buttons (56px tall → fully rounded ends) |
| `{rounded.pill}` | 5000px | Stylesheet pill radius (5 rules), measured on `/business/` |
| `{rounded.circle}` | 50% | Circular stat/photo tiles on `/business/` (240×240px) |

No clip-paths, skews or notched shapes were measured. The only non-rectangular graphic is the thin blue arc drawn over the hero photo, which is part of the image art.

### Photography & Illustration Geometry
Photography is intimate and cropped — a smile and a hand holding a phone, a stethoscope against a shirt — exactly as the guidelines describe: "intimate crops of people together" ([brand guidelines](https://www.onemedical.com/brand-guidelines/)). Card photos sit in 10px-radius rectangles. Spot illustrations (a calendar page, people on a sofa, a building) are small, hand-drawn, flat-colored in jade, sage, peach and red, centered above captions.

## Components

### Buttons

**`button-primary`** — jade pill.
- Background `{colors.primary}` `#005450`, text `{colors.on-primary}`, `{typography.button-md}` (Ginto 16px/600), padding `16px 40px`, height 56px, min-width 189px, radius `{rounded.button}` 36px.
- Hover `button-primary-hover`: background `{colors.primary-hover}` `#068466`. No shadow or transform.
- Mobile `button-primary-mobile`: padding `14px 32px`, height 52px.

**`button-nav-pill`** — compact "Sign up" in the nav.
- Same jade fill, `{typography.button-sm}` (14px/600), padding `12px 14px`, height 45px, radius 36px. Hover → `#068466`.

**`button-secondary`** — avocado pill ("Get in touch" on `/business/`): background `{colors.avocado}`, text `{colors.ink}`, same geometry as primary.

**`button-melon`** — melon pill ("Join now"): background `{colors.melon}`, text `{colors.ink}`, same geometry.

**`button-outlined`** — white pill with a 1px `#e2e0de` (`{colors.fog}`) border, text `{colors.ink}`, height 58px. Hover `button-outlined-hover` fills with `{colors.avocado-light}` `#bcde85`.

The stylesheet names these families `.-btn-pill--primary`, `--secondary`, `--tertiary`, `--quaternary`, `--melon`, `--outline`, plus Amazon-specific `--primary-squid-ink` (`#232f3e`) and `--primary-dandelion`; every variant shares `min-width:189px; padding:16px 40px`.

### Links

**`link-arrow`** — the dominant secondary action: "Learn more ›", "See all our services ›". `{typography.button-md}` in `{colors.dark-sage}` (or `{colors.ink}` under preview cards), no underline, trailing chevron.

**`link-legal`** — underlined fine print in `{colors.ink-legal}` `#2a2927`, `{typography.fine-print}` 14px/300. Hover `link-legal-hover` → `{colors.link-hover}` `#009e87`.

### Navigation

**`nav`** — white bar, 78px tall (66px at 390px). Left: "amazon one medical" wordmark. Right: "Locations ▾", "For You ▾", "For Business ▾" (Ginto 14px/600 in `{colors.ink}`), a thin vertical divider, "Log in" in `{colors.primary}`, the jade "Sign up" pill, a search icon and a hamburger.
- Hover `nav-link-hover`: text shifts to `{colors.dark-sage}` with underline (measured on the dropdown buttons); "Log in" shifts `#005450` → `#068466` without underline.
- The hamburger opens a full-screen menu set in `{typography.menu-display}` (GT Super Display 50px/600) in `{colors.salt-gray}` on jade.

**`announcement-banner`** — 64px peach strip (`{colors.tint-sesame}`) above the nav: light 18px text plus a bold 18px/600 arrow link.

### Cards

**`card-preview`** — the three-up preview on `{colors.clear-day}`: a 10px-radius photo (`{colors.salt-gray}` placeholder), then a `{typography.eyebrow}` label in `{colors.dark-sage}` (e.g. "ANNUAL WELLNESS"), a `{typography.heading-card}` serif title in `{colors.ink}`, and a "Learn more ›" arrow link. No border, no shadow, no card background — the image is the only container.

**Icon-grid item** — small illustration, two-line centered caption in `{typography.body-lg}`, then a sage arrow link.

### Callouts
**Jade callout** (`.callout.-bg-color-jade`): full-width jade band with a white serif headline (`{typography.display-section}` 72px/600 or `{typography.heading-callout}` 48px/600) and a white `{typography.link-lg}` arrow link.

### Footer

**`footer`** — full-bleed `{colors.primary}` jade, padding `120px 91.4286px 0px`. Contains a location selector ("Your Location (ALL)", Ginto 14px/600 white), a long list of city links in white, then a sub-footer row of legal links in `{colors.avocado}` at `{typography.body-sm}` 14px/200 (`footer-legal-link`). On `/locations/` the white links hover to avocado.

## Design System Architecture

**No public design system, component library, token package or Figma kit exists** for One Medical — searches for a One Medical design system, GitHub tokens and Figma libraries returned nothing official (see `SOURCES.json`). What exists is the [official brand guidelines page](https://www.onemedical.com/brand-guidelines/), plus the de-facto system visible in the site's own CSS ([app stylesheet](https://www.onemedical.com/static/css/app.061a5be3d43f75fb0173.css)).

### Token architecture (de-facto)
- **Single tier of named colors.** There are no CSS custom properties (`rootVars` is empty). Colors are hard-coded hex values exposed through paired utility classes `.-bg-color-{name}` / `.-font-color-{name}`. Names are evocative rather than semantic: `jade` `#005450`, `dark-jade` `#004d49`, `dark-sage` `#068466`, `ocean-green` `#4aad96`, `avocado` `#abcc76`, `light-avocado` `#bccca1`, `melon` `#ffc776`, `mac-and-cheese` `#ffc877`, `clear-day` `#eef6f4`, `tint-agave` `#eef6f4`, `salt-gray` `#f4f4f4`, `fog` `#e2e0de`, `tint-sesame` `#ffedce`, `sazerac` `#f1dfca`, `alabaster` `#f7f6f2`, `prime-blue` `#1d98ff`, `red` `#fa645a`.
- **Modifier-first BEM-ish naming.** Utility modifiers start with a hyphen (`-btn-pill--primary`, `-bg-color-jade`, `-font-color-white`, `-off-screen`); blocks use BEM (`page-hero-three-col-preview__title`, `navigation__menu-anchor`, `footer__subfooter-link`).
- **Component variants as modifier classes.** Buttons: `.-btn-pill--primary | --secondary | --tertiary | --quaternary | --melon | --outline | --link | --link-arrow | --primary-squid-ink | --primary-dandelion`, plus `--active-filter`, `--inactive-filter`, `--select`, `--current-location` for the locations finder.

### Theming
No dark mode or theme switching. Section "themes" are per-band background modifiers (`-bg-color-jade`, `-bg-color-clear-day`) combined with font-color modifiers (`-font-color-white`). Amazon-related variants (`squid-ink` `#232f3e`, `dandelion`, `prime-blue`) coexist with the One Medical palette.

### Type & spacing systems
- Two families only (GT Super Display + Ginto), as the guidelines prescribe.
- No modular scale is published. The stylesheet's most frequent font sizes are 25.6px, 76.8px, 57.6px, 38.4px and 115.2px (1.6rem, 4.8rem, 3.6rem, 2.4rem, 7.2rem), while the computed sizes on the measured pages are 14 / 16 / 18 / 20 / 32 / 48 / 50 / 72 / 88px.
- Breakpoints in the stylesheet: `min-width:768px` (836 rules), `min-width:1280px` (407), `min-width:1024px` (47), `max-width:520px`, `min-width:1160px`.

### Component model
Inventory observed: global banner, navigation with dropdowns and full-screen menu, page heroes (`page-hero-single-col-alt`, `hero-media-block`), three-column preview, rotating-services headline, callout (`gradient-callout`, jade callout), icon grid with video lightbox, pill buttons, arrow links, footer with location selector. No published anatomy or state documentation.

### Accessibility
The stylesheet defines a visible focus ring (`0 0 2px 2px #88c0fb`) and an `.-off-screen` class used to add "Opens in a new window." to external links for screen readers. No published contrast or touch-target policy was found.

### Delivery
No npm package, no Figma community file and no versioned design system. Logo assets are downloadable from the brand-guidelines page.

## Do's and Don'ts

### Do
- Set every headline in GT Super Display, 500 or 600, with solid leading (72px/72px).
- Set body copy in Ginto 200 at 18px/31.5px in `{colors.ink}` `#004d49`.
- Use one jade pill (`#005450`, 36px radius, `16px 40px`) per band; hover to `#068466`.
- Prefer sage arrow links ("Learn more ›") for secondary actions.
- Separate sections with flat tinted bands (`#f5f3ef`, `#eef6f4`, `#ffedce`) instead of shadows or borders.
- Use tight, human photo crops in 10px-radius frames and small hand-drawn illustrations.
- Put uppercase 14px/600 eyebrows with 1.4px tracking above serif card titles.

### Don't
- Don't set body text in pure black — the reading color is dark jade `#004d49` (near-black `#2a2927` is only for fine print and the Prime offer).
- Don't add drop shadows to cards or buttons.
- Don't use Ginto at medium weights for body; it is 200 for reading, 600 for actions.
- Don't track headlines; letter-spacing exists only on eyebrows.
- Don't introduce square or small-radius buttons — every button is a fully rounded pill.
- Don't use the hero blue `#0578ff` as a system color; it is campaign-specific.

## Responsive Behavior

### Breakpoints (from the stylesheet)

| Name | Width | Key Changes |
|---|---|---|
| Tablet | 768–1023px | Multi-column grid enabled (`min-width:768px`) |
| Desktop | 1024–1279px | Additional layout rules (`min-width:1024px`) |
| Wide | ≥ 1280px | Full gutters (91.4286px) and widest container |

### Measured at 390px
- h1: GT Super Display 48px/500, line-height 50px (`{typography.display-hero-mobile}`).
- Rotating h2: 48px/600, line-height 51.408px.
- Body: Ginto 16px/200, line-height 28px (`{typography.body-mobile}`).
- Primary pill: padding `14px 32px`, height 52px, radius 36px.
- Nav: 66px, white.
- Most frequent mobile sizes: 16px, 14px, 24px, 36px, 32px, 18px, 48px.

### Touch Targets
The primary pill is 52px tall on mobile and 56px on desktop; the nav pill is 45px.

### Collapsing Strategy

## Iteration Guide

1. Start from the white canvas and pick the band color first (`#ffffff`, `#f5f3ef`, `#eef6f4` or jade `#005450`).
2. Write the headline in `{typography.display-section}` or `{typography.display-hero}`; keep it to two or three lines.
3. Add at most one `button-primary` per band; use `link-arrow` for everything else.
4. Keep body copy in `{typography.body-lg}` and `{colors.ink}`; never bold whole paragraphs.
5. For card grids, use `card-preview`: 10px-radius photo, eyebrow, serif title, arrow link — no card container.
6. Use hover colors exactly as measured: jade → `#068466`; legal links → `#009e87`; outlined pill → `#bcde85`.
7. Close every page with the jade `footer` (120px top padding).
8. Re-check every new value against the measured pages (`/`, `/business/`, `/locations/`) before adding it.
