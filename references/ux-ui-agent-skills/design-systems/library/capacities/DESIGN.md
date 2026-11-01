---
version: alpha
name: Capacities
category: "Productivity & SaaS"
description: "Capacities (capacities.io), \"a studio for your mind\": a warm-neutral note-taking landing page. Inter 700 headline at 64px/67.2px with -1.92px tracking, system ui-sans-serif 16px/27.2px body in #5c5959, #454447 charcoal 8px-radius Start Free buttons, white 12px–16px cards with #ecebea borders, and #fbfaf9 alternate sections."
colors:
  canvas: "#ffffff"
  ink: "#5c5959"
  primary: "#454447"
  on-primary: "#f5f4f3"
  surface-section: "#fbfaf9"
  ink-heading: "#1a1a1d"
  ink-faint: "#a7a2a1"
  ink-brown: "#563929"
  nav-bg: "#ffffffcc"
  card-bg: "#fffffff2"
  card-border: "#ecebea"
typography:
  display:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 67.2px
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 42px
    letterSpacing: "-1.2px"
  heading:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 45px
    letterSpacing: "-0.9px"
  subheading:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28.0001px
    letterSpacing: "-0.45px"
  body:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  nav:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28.0001px
  button-secondary:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 6px 10px
    height: 32px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    boxShadow: oklch(0.9163 0.0017 67.07) 0px 0px 0px 1px inset
  link-hover:
    backgroundColor: "{colors.surface-section}"
    textColor: "{colors.ink-heading}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-heading}"
  nav-link:
    textColor: "{colors.ink-heading}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.xl}"
    padding: 14px
    borderColor: "{colors.card-border}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.08) 0px 4px 12px 0px, rgba(0, 0, 0, 0.04)
      0px 2px 4px 0px
    transform: matrix(0.996195, 0.0871557, -0.0871557, 0.996195, 0, 0)
  footer:
    textColor: "{colors.ink-faint}"
---

# Capacities

## Overview

Capacities is a note-taking and personal knowledge app, and capacities.io (title "A studio for your mind | Capacities") is a long, calm, product-led landing page: 1280px wide and 11029px tall. A translucent white header holds the circular Capacities logo and wordmark, centred links (Product, Resources, Download, Pricing), a theme toggle, an outlined "Sign In" and a dark "Get Started" button. Under it sits a pale yellow promo strip ("Back to School Season — 40% off annual Pro for students →").

The hero is centred: a soft yellow pill badge ("A studio for your mind"), the headline "A home for everything you think, learn, and create." with a yellow underline drawn under "home", a two-line grey intro, a charcoal "Start Free" button beside an outlined "Discover Product", and a faint trust line ("Trusted by 50,000+ active knowledge workers · Featured in Fast Company"). Floating around the headline are tilted white mini-cards that represent object types in the app — "Notes & snippets", "Task dashboard", "Meeting notes", "Saved links", "Project brief.pdf", "Daily notes", "Images" — each with a tiny coloured icon. A wide product video follows, then a long run of sections: a problem statement ("Your best thinking keeps slipping away"), a conceptual section ("What if your notes worked like your mind?") with diagrams, feature cards, social proof (4.8 Product Hunt rating, 50,000+ users, 10,000+ community members, press logos and testimonial cards), "Three steps to a clearer mind", persona tabs ("Loved by people who think for a living"), "Built different. On purpose." and a final "Ready to think clearly?" call.

The voice is reflective and direct, written as short paired sentences: "Notes everywhere. Ideas nowhere.", "No configuration. No markdown syntax to memorize. No plugin rabbit holes."

## Colors

The palette is warm neutral greys with tiny touches of pastel colour on icons.

- **canvas `#ffffff`** — the page background (the largest area by far).
- **surface-section `#fbfaf9`** — the alternate off-white section bands (second largest area); also the hover fill of outlined buttons.
- **ink `#5c5959`** — the most-read text colour (5937 characters), all paragraph copy. It matches the CSS variable `--landing-text-body: oklch(46.68% .0039 16.75)` and is the hover fill of the primary button.
- **ink-heading `#1a1a1d`** — headings, the wordmark and nav text (1309 characters); `--landing-text-heading` / `--ui-primary: oklch(21.91% .0058 285.84)`.
- **ink-faint `#a7a2a1`** — captions, testimonial attributions and footer text (1022 characters); `--landing-text-muted: oklch(71.61% .006 30.59)`.
- **primary `#454447`** — the charcoal button fill (`--btn-primary-bg: oklch(38.87% .0052 301.05)`), with **on-primary `#f5f4f3`** labels.
- **ink-brown `#563929`** — a warm brown measured on 55 characters of text.
- **card-border `#ecebea`** and `#f5f4f3` — the two most frequent border colours (23 and 46 elements).
- **nav-bg `#ffffffcc`** and **card-bg `#fffffff2`** — translucent whites for the sticky header and floating cards.

Small pastel tints are measured as backgrounds of icon chips and badges: `#fef3c7`, `#fffbeb` (the "Writers" persona chip with `#945424` text), `#fff7ed`, `#fef2f2`, `#eff6ff`, `#faf5ff`, `#f5f3ff`, `#f0f9ff`. Accent text colours include `#cc5d23`, `#3655aa`, `#16614c`, `#7339a5` and `#a558ee`, each under 20 characters.

## Typography

Two families do the work, with a third for code. The headline uses **Inter** (Inter 500 and 700 are loaded). Everything else renders in the **system UI stack** (`ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif`), which is the most-read family (8415 characters). **JetBrains Mono** 400/500 appears on 163 characters of code-like labels.

- **Display — Inter 700, 64px / 67.2px, -1.92px tracking** (-3% of size).
- **Heading — 700, 36px / 45px, -0.9px tracking** (-2.5%): "Your best thinking keeps slipping away". 48px headings are also measured with -1.44px and -1.2px tracking.
- **Subheading — 600, 18px / 28.0001px, -0.45px tracking**: card titles such as "Notes everywhere. Ideas nowhere."
- **Body — 400, 16px / 27.2px** (1.7 line height), in `#5c5959`. The most common size on the page is 15px (3078 characters), then 14px, 18px and 16px.
- **Nav / wordmark — 700, 18px / 28.0001px**.
- **Small button — 400, 14px / 20px** ("Get Started" in the header).

Uppercase overlines use positive tracking: 13px with 1.3px, 12px with 1.2px, 11px with 0.55px ("KNOWN FROM", "PRODUCT OF THE DAY"). Testimonials and quotes are set in italic.

## Layout

The page is a single centred column on white with full-width section bands. The header is 64px tall. Hero content is centred with a 768px-wide headline; paragraphs sit around 576px wide. Below the hero, content uses grids of up to 3 card columns (the widest measured row has 5 columns). Feature sections use two equal cards per row; stats and testimonials use three.

Spacing is generous between sections and tight inside components. The most frequent paddings are 28px, 8px, 24px, 12px, 14px, 16px and 32px, with 128px as section padding. The most frequent gaps are 6px, 8px, 12px, 4px, 10px, 16px, 24px and 32px. Floating hero cards use 14px padding. The stylesheet breakpoints are Tailwind's: 640px, 768px, 1024px, 1280px and 1536px.

## Elevation & Depth

Elevation is soft and layered, defined as CSS variables: `--landing-shadow-xs: 0 1px 2px #0000000a`, `--landing-shadow-sm: 0 2px 4px #0000000d, 0 1px 2px #00000008`, `--landing-shadow-md: 0 4px 12px #00000014, 0 2px 4px #0000000a` and `--landing-shadow-lg: 0 8px 24px #0000001a, 0 4px 8px #0000000d`. On the page, 28 elements carry the 1px/2px 4% shadow, 8 carry the small two-layer shadow and 4 the medium one (including the floating "Project brief.pdf" card). One element carries a deeper stack ending in `rgba(0, 0, 0, 0.08) 0px 40px 60px -8px`. Outlined buttons use a 1px inset ring of `oklch(0.9163 0.0017 67.07)` (`--ui-border`) instead of a border. The floating hero cards are rotated a few degrees (one measures `matrix(0.996195, 0.0871557, ...)`, a 5° tilt).

## Shapes

Rounded but not soft. Buttons and the outlined link use 8px. Cards use 12px (29 elements) and 16px (23), with 20px and 24px on larger panels. The pill radius (29 elements) is used for badges and persona chips ("Researchers", "Writers"). Other measured radii: 6px, 4px and 8px 8px 0px 0px. Icon chips are small rounded squares tinted in pastel with a matching outline icon. The logo is a circle-in-a-ring mark drawn in `currentColor`.

## Components

- **Primary button** — `#454447` fill, `#f5f4f3` label, 16px/24px system sans, 8px radius, 8px 12px padding, 40px tall, with a leading arrow icon ("Start Free", "Start your first note"). Hover: fill `#5c5959`, label white.
- **Header button** — "Get Started": same colours, 14px/20px, 6px 10px padding, 32px tall.
- **Outlined button** — "Discover Product", "Sign In": white fill, `#454447` label, 1px inset ring, 8px radius, 8px 12px padding; hover fill `#fbfaf9` and label `#1a1a1d`.
- **Badge** — pale yellow pill with a sparkle icon and dark text ("A studio for your mind").
- **Feature card** — white, 1px `#ecebea` border, 12px–16px radius, light shadow, a tinted icon chip, an 18px/600 title, `#5c5959` copy, a hairline and an italic user quote.
- **Floating object card** — `#fffffff2` fill, 1px `#ecebea` border, 16px radius, 14px padding, medium shadow, slight rotation.
- **Stat card** — centred icon chip, large bold number ("4.8", "50,000+"), label and faint caption.
- **Testimonial card** — italic quote, large faint quotation mark, hairline, avatar icon, name and source.
- **Persona chips** — pill buttons with a tinted fill when active.

## Design System Architecture

No public Capacities design system or brand page was found: https://capacities.io/brand and https://capacities.io/press both returned HTTP 404. The shipped CSS exposes the de-facto system as 400 root custom properties. It is a Tailwind CSS v4 build (`--color-zinc-*`, `--radius-md: .375rem`, `--radius-lg: .5rem`, `--radius-2xl: 1rem`, `--radius-3xl: 1.5rem`) with two semantic layers on top. A `--ui-*` layer (`--ui-primary`, `--ui-text`, `--ui-text-muted`, `--ui-text-dimmed`, `--ui-bg`, `--ui-bg-muted`, `--ui-bg-accented`, `--ui-border`, `--ui-border-accented`, `--ui-color-success-*`, `--ui-color-error-*`) and a `--landing-*` layer (`--landing-bg-page`, `--landing-bg-section`, `--landing-bg-card`, `--landing-text-heading`, `--landing-text-body`, `--landing-text-muted`, `--landing-border`, `--landing-shadow-xs/sm/md/lg`, `--landing-transition-fast: .15s cubic-bezier(.4,0,.2,1)`, `--landing-transition-slow: .3s`) plus button tokens (`--btn-primary-bg`, `--btn-primary-ring`, `--btn-secondary-border`, `--btn-secondary-bg-hover`). Plan colours have their own families (`--landing-pro: oklch(61.29% .175 259.87)`, `--landing-plus: oklch(60.27% .2044 293.24)`, `--landing-believer-*`), and personas use `--persona-accent-color`. All colours are authored in OKLCH with a slight warm hue (around 67°) in the neutrals.

## Do's and Don'ts

**Do**
- Keep the page warm-neutral: white, `#fbfaf9` bands, `#ecebea` borders, `#5c5959` body text.
- Use a charcoal `#454447` button for the main action and an outlined white button beside it.
- Set the headline in Inter 700 with about -3% tracking; use the system stack for everything else.
- Use 8px on buttons and 12px–16px on cards, with soft two-layer shadows.
- Add colour only as small pastel icon chips.
- Write short, paired, plain sentences.

**Don't**
- Don't use a saturated brand colour for buttons; the primary is a near-black grey.
- Don't use pure black text; headings are `#1a1a1d`.
- Don't use hard borders or heavy shadows.
- Don't mix more than one accent tint in a single card.
- Don't set body text tight; the measured line height is 27.2px on 16px.

## Responsive Behavior

The extractor's 390px mobile pass recorded: the headline at Inter 700 40px / 42px with -1.2px tracking (342px wide); section headings at 28px / 35px with -0.7px tracking; body copy unchanged at 16px / 27.2px `#5c5959`. The mobile "Start Free" button keeps its colours, 8px radius, 8px 12px padding and 40px height but spans 342px (full content width). The header stays 64px tall with the `#ffffffcc` background; the layout probe recorded 1 visible header link and a visible "Toggle menu" button on mobile, versus 5 links and no toggle on desktop. Max card columns measured 3 on both. Mobile font sizes recorded: 15px, 18px, 14px, 16px, 28px, 20px, 10px, 12px and 13px. Breakpoints in CSS: 640px, 768px, 1024px, 1280px, 1536px. Other section arrangements at mobile width were not measured.

## Iteration Guide

1. Start with a white page, a 64px `#ffffffcc` header and alternating `#fbfaf9` bands.
2. Centre a pill badge, an Inter 700 64px/67.2px headline (-1.92px), a `#5c5959` 16px/27.2px intro and two 40px buttons (charcoal + outlined).
3. Surround the hero with small tilted white object cards (16px radius, 14px padding, `#ecebea` border, medium soft shadow).
4. Build sections from white cards with 12px–16px radius, 1px `#ecebea` borders, tinted icon chips, 18px/600 titles and italic quotes.
5. Use 128px section padding and 24px–32px gaps between cards.
6. Keep accents pastel and local; the only dark colour is `#454447`/`#1a1a1d`.
7. Write problem/solution copy in short paired sentences.
