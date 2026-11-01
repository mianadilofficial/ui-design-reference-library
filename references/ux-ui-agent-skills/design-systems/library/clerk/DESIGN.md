---
version: alpha
name: Clerk
category: "Developer Tools & IDEs"
description: "Clerk's authentication site: a cool off-white #f7f7f8 canvas alternating with #131316 near-black bands, #131316 ink, violet #6c47ff section eyebrows, suisse 56px/700 headlines tracked -1.96px, 13px/20px body copy, pill buttons and 2.4%-opacity layered hairline shadows on product-UI cards."
colors:
  canvas: "#f7f7f7"
  page-body: "#f7f7f8"
  ink: "#131316"
  primary: "#6c47ff"
  on-primary: "#ffffff"
  accent-violet-light: "#9785ff"
  accent-cyan: "#5de3ff"
  surface-white: "#ffffff"
  surface-dark: "#212126"
  ink-grey: "#747686"
  ink-muted: "#9394a1"
  ink-secondary: "#5e5f6e"
  ink-charcoal: "#37373c"
  hairline: "#0000000f"
  chip-bg: "#ffffff0d"
  nav-bg: "#f8f8f8e6"
  nav-link-text: "#000000"
typography:
  display:
    fontFamily: geistNumbers, suisse, "suisse Fallback"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 64px
    letterSpacing: "-1.96px"
  display-mobile:
    fontFamily: geistNumbers, suisse, "suisse Fallback"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.84px
    letterSpacing: "-0.48px"
  mock-heading:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 17px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.17px"
  eyebrow:
    fontFamily: geistNumbers, suisse, "suisse Fallback"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: geistNumbers, suisse, "suisse Fallback"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: geistNumbers, suisse, "suisse Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 12.5px
  3xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 3.27px
  s5: 4px
  s6: 6px
  s7: 6.4px
  s8: 8px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.chip-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.eyebrow}"
    rounded: "{rounded.pill}"
    padding: 0px 12px 0px 6.24px
    height: 30px
  section-eyebrow:
    textColor: "{colors.primary}"
    typography: "{typography.eyebrow}"
  announcement-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface-white}"
    typography: "{typography.eyebrow}"
    padding: 8px 0px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  card:
    rounded: "{rounded.pill}"
    boxShadow: >-
      rgba(19, 19, 22, 0.024) 0px 0px 0px 1px, rgba(19, 19, 22, 0.024) 0px 1px 1px -0.5px, rgba(19, 19, 22, 0.024) 0px 3px 3px -1.5px, rgba(19, 19, 22, 0.024) 0px 6px 6px -3px, rgba(19, 19, 22, 0.024)
      0px 12px 12px -6px, rgba(19, 19, 22, 0.024) 0px 24px 24px -12px
  footer:
    textColor: "{colors.ink-muted}"
---

# Clerk

## Overview

Clerk sells authentication and user management, and clerk.com reads as a precise, monochrome product showroom where the product's own UI components are the art. The page starts with a slim near-black announcement bar ("Clerk raises $50m Series C — Learn more"), then a translucent off-white header with Products, Docs, Changelog, Company, AI and Pricing menus plus Sign in and Sign up. The hero sets "Everything you need for authentication" left-aligned in suisse at 56px, weight 700, with a tight -1.96px tracking, and a one-line subtitle ("More than APIs. The complete user layer for modern apps."). On the right, a small pill chip copies an agent prompt ("Build with agents") above a monospace command.

Below, a tabbed showcase (User Authentication, Multi-tenancy, Enterprise Authentication, Agent Authentication) presents a live "Create your account" sign-in card in the centre, flanked by faded ghost variants, with a toggle row (Sign In & Sign Up, User Button, User Profile). A logo strip follows (Meta, braintrust, OpenRouter, upstash, Consensus). The page then alternates dark #131316 bands and light #f7f7f8 bands: "Auth that keeps evolving" — a dark bento of feature tiles with greyscale illustrations; "Everything your B2B SaaS needs" — organization UI cards with portrait avatars; "Subscription billing, without the headache" — a pricing-table mock for a fictional Acme, Inc.; "Build with SDKs for modern frameworks" and "Integrate with the tools you love" — dark grids of framework and integration icons; then testimonials in a masonry of tweet-style cards, and a light footer.

Microcopy is short and confident ("Auth that keeps evolving", "Everything your B2B SaaS needs"). Each section is introduced by a small colored eyebrow word — violet on light bands, violet or cyan on dark bands — the only saturated color on the page.

## Colors

Clerk's palette is almost entirely neutral, cool-tinted greys from its CSS (`--color-gray-*`, `--color-ceramic-gray-*`).

- **Canvas #f7f7f7** and **page-body #f7f7f8** — the light background; #f7f7f8 is the body color and the largest painted area.
- **Surface-white #ffffff** — the hero band and cards on light sections.
- **Ink #131316** — the most-read text color (`--typography-heavy`, `--typography-link`) and the fill of dark bands and the announcement link.
- **Surface-dark #212126** — tiles inside the dark bento.
- **Primary #6c47ff** — the violet section eyebrow ("Multi-tenancy") on light bands, Clerk's only brand accent on the page. No violet-filled button was measured; actions are neutral.
- **On-primary #ffffff** — text on violet or dark fills.
- **Accent-violet-light #9785ff** and **accent-cyan #5de3ff** — eyebrows on dark bands ("User authentication", "Integrations", "Frameworks").
- **Ink-grey #747686** (`--color-gray-500`), **ink-muted #9394a1** (`--color-gray-400`, also the footer text), **ink-secondary #5e5f6e** and **ink-charcoal #37373c** — the grey text ladder.
- **Hairline #0000000f** — a 6% black border, the most common border.
- **Chip-bg #ffffff0d** — the translucent fill of the "Build with agents" pill.
- **Nav-bg #f8f8f8e6** — the 90% translucent header.
- **Nav-link-text #000000** — pure black on nav link targets.

A red (#ef4444) appears in small error-state text inside the auth mocks; it is a state color, not a brand color.

## Typography

The site loads **suisse** at weights 400, 450, 500, 600 and 700, preceded in the font stack by **geistNumbers** (a face named for numerals, listed first), plus **soehneMono** for code and **Inter** for some embedded UI.

- **Display** — 56px / 64px, weight 700, -1.96px tracking.
- **Section headings** — measured at 32px weight 600 with -0.48px tracking on every band ("Auth that keeps evolving", "Everything your B2B SaaS needs"); the same metrics as the display-mobile token (32px / 35.84px).
- **Eyebrow** — 13px / 24px, weight 500, colored.
- **Body** — 13px / 20px, weight 400. 13px is by far the most-used size on the page; Clerk's marketing copy is small and dense.
- **Nav** — 16px / 24px weight 400 on link targets; header labels themselves are 13px weight 500.
- **Mock heading** — the UI demo cards ("Create your account", "Create Organization") use the system ui-sans-serif stack at 17px / 24px, weight 700, -0.17px.
- **Micro labels** — 10px with 1px tracking (uppercase) is the second most common setting by characters, used for tile labels; 11px and 10px sizes are frequent.

suisse and soehneMono are self-hosted brand faces; for prototypes, Inter (already loaded on the page) at the same weights and tracking is the closest available substitute.

## Layout

At 1280px the content spans from 40px to 1240px (32px to 1248px on the light multi-tenancy band). The hero is a left-aligned headline above a full-width tab showcase; dark bands use a centred title and a three-column bento; light bands switch to a two-column text-plus-visual layout. The grid is fine-grained — maxCardColumns reached 12 in the icon grids. Only three header items were counted as visible links in the desktop pass.

Spacing is compact: the most common gaps are 8px, 12px and 6px; paddings are 16px, 12px, 4px, 10px and 8px, with 20px, 24px, 32px and 40px for larger blocks. Spacing tokens include odd computed values (3.27px, 6.4px) that come from scaled UI mocks.

## Elevation & Depth

Clerk's signature elevation is a stack of six very faint shadows at 2.4% opacity of #131316 — a 1px ring plus 1, 3, 6, 12 and 24px blurs with matching negative spreads — which gives cards a crisp edge and a soft long falloff without any visible grey. This stack was measured 60 times. A standard 10% black 0px 1px 3px shadow is used on smaller controls, and dark-band tiles use a 1px inset white ring at 5% opacity instead of a shadow. The header is 90% translucent so content scrolls faintly beneath it.

## Shapes

Pills are the most frequent radius (buttons, chips, tabs, toggles). 6px is next, on nav hover targets and small controls; 8px, 4px, 12px and 16px follow on inputs and cards; 10px and 12.5px appear inside mocks. Image cards use percentage-based elliptical radii (for example 2.22222% / 2.03046%), which keep corner rounding proportional when illustrations scale.

## Components

- **Agent chip (button-primary)** — pill, #ffffff0d fill, #131316 text, 13px weight 500, 0px 12px 0px 6.24px padding, 30px tall, with an icon at the left and a "Prompt copied" state.
- **Header actions** — "Sign in" and "Sign up" are 26px-tall 6px-radius text buttons; on hover they gain a 2% #131316 fill and a 12% border (measured hover).
- **Announcement link** — #131316 bar with white 13px weight 500 text, 8px 0px padding.
- **Section eyebrow** — 13px weight 500 in #6c47ff (light bands) or #9785ff / #5de3ff (dark bands).
- **Auth card mock** — white card with "Continue with Google / GitHub" buttons, email and password inputs and a dark "Continue" button, showing Clerk's own components.
- **Feature tile** — dark #212126 tile with a greyscale illustration, a 13px white title and grey description.
- **Testimonial card** — white card with avatar, name, handle and 13px quote text in a masonry layout.
- **Footer** — light, #9394a1 13px links in five columns with uppercase micro headings.

## Design System Architecture

Clerk publishes no public marketing design system or brand guideline document; its official brand page, https://clerk.com/brand-assets, provides only logotype, symbol and avatar files (PNG and SVG, light and dark). The de-facto system is visible in the shipped CSS: a Tailwind v4 theme extended with Clerk-specific variables — a cool grey ramp `--color-gray-25` to `--color-gray-*` (#fafafb, #eeeef0, #b7b8c2, #9394a1, #747686), a `--color-ceramic-gray-*` ramp, semantic typography variables (`--typography-heavy`, `--typography-link`, `--typography-color`), `--font-mono` set to soehneMono, and size-specific letter-spacing variables such as `--text-5_5xl--letter-spacing` (-0.035em).

## Do's and Don'ts

**Do**
- Keep the page monochrome: #131316 ink and bands, #f7f7f8 and #ffffff surfaces, cool greys for secondary text.
- Spend color only on small section eyebrows (#6c47ff on light, #9785ff or #5de3ff on dark).
- Set headlines in suisse with tight negative tracking (-1.96px at 56px, -0.48px at 32px).
- Show the product's real UI components as the illustrations.
- Use the layered 2.4% shadow stack for cards instead of a single heavy shadow.

**Don't**
- Don't fill large areas or buttons with violet; no violet button was measured.
- Don't enlarge body copy beyond the measured 13px/15px range for dense sections.
- Don't use warm greys; every measured neutral is cool-tinted.
- Don't alter the downloadable logo files.

## Responsive Behavior

The extractor's mobile pass at 390px measured: the h1 at 32px / 35.84px, weight 600, -0.48px tracking (down from 56px / 700); body text stays 13px / 20px; the eyebrow stays 13px weight 500 (rendered in #9785ff on the dark band). Two header items remain visible and a menu toggle labelled "Open navigation" appears. Content spans 24px to 366px, and the announcement bar grows to 91px tall. The stylesheet declares many breakpoints, chiefly min-width 640px, 768px, 1024px, 1280px and 1536px, plus component-level queries at 360px, 375px, 425px, 432px, 440px, 448px, 512px, 514px and 744px. Other mobile behaviour was not measured.

## Iteration Guide

1. Lay out alternating bands: #ffffff hero, #131316 dark sections, #f7f7f8 light sections.
2. Set the display in suisse 56px / 700 with -1.96px tracking and section heads at 32px / 600.
3. Introduce each section with a 13px colored eyebrow — the only accent color.
4. Build cards with the 2.4% layered shadow stack and pill-shaped controls.
5. Use real auth, organization and billing component mocks as the imagery.
6. Keep body copy at 13px / 20px in #131316 and greys from #5e5f6e to #9394a1.
7. Verify the 32px mobile headline and the 390px layout.
