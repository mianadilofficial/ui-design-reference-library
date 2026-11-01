---
version: alpha
name: Convex
category: "Backend, Database & DevOps"
description: "Convex's backend-platform site: warm near-black bands (#221f1d, #281d1d, #191919) with an antique-white #f6eedb section, the official yellow #f3b01c pill, red #ee342f and purple #8d2676 stripes, uppercase neue-haas-grotesk-display 60px/900 headlines, gtAmerica body, vcr pixel labels and IBM Plex Mono commands."
colors:
  canvas: "#f6eedb"
  page-largest: "#221f1d"
  ink: "#141414"
  primary: "#f3b01c"
  on-primary: "#141414"
  primary-hover: "#f8d077"
  brand-red: "#ee342f"
  brand-purple: "#8d2676"
  accent-vermillion: "#de5d33"
  surface-dark: "#191919"
  nav-bg: "#281d1d"
  ink-inverse: "#ffffff"
  ink-muted: "#6d6d70"
  ink-half-white: "#fffff9"
  ink-silver: "#c2c2c2"
  hairline: "#272424"
  link: "#f1d4c5"
  button-secondary-bg: "#f1f1f1"
  card-bg: "#ffffff0d"
  card-text: "#000000"
  footer-text: "#a9a9ac"
typography:
  display:
    fontFamily: neue-haas-grotesk-display, gtAmerica, sans-serif
    fontSize: 60px
    fontWeight: 900
    lineHeight: 51px
    letterSpacing: "-2.4px"
    textTransform: uppercase
  display-mobile:
    fontFamily: neue-haas-grotesk-display, gtAmerica, sans-serif
    fontSize: 46px
    fontWeight: 900
    lineHeight: 39.1px
    letterSpacing: "-1.84px"
    textTransform: uppercase
  label-pixel:
    fontFamily: vcr, "vcr Fallback", monospace
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
    letterSpacing: 0.6px
    textTransform: uppercase
  subheading:
    fontFamily: gtAmerica, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  body:
    fontFamily: gtAmerica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: gtAmerica, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
  link:
    fontFamily: gtAmerica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.5px
    letterSpacing: 0.22px
  button-secondary:
    fontFamily: gtAmerica, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 22px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 10px
    height: 28px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 10px 20px
    height: 46px
  button-closing:
    backgroundColor: "{colors.accent-vermillion}"
    textColor: "{colors.ink-inverse}"
    rounded: "{rounded.pill}"
    padding: 8px 24px
    height: 39px
  section-label:
    textColor: "{colors.ink}"
    typography: "{typography.label-pixel}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-inverse}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.lg}"
    padding: 12px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.footer-text}"
    padding: 48px 0px 32px
---

# Convex

## Overview

Convex is a reactive backend platform for TypeScript apps, and convex.dev presents it with a warm, retro-technical look: dark chocolate-brown bands, an antique-white trust section, chunky uppercase headlines and pixel-font labels. The page opens with a thin #141414 announcement bar ("Ship AI features, not model integrations") carrying a small yellow #f3b01c "AI Gateway" pill. The header and hero share a #281d1d brown; the hero sets "ALL GAS NO BREAKAGES" in neue-haas-grotesk-display at 60px, weight 900, uppercase, with a 51px line height and -2.4px tracking. Next to it, a terminal-style panel offers "Copy the setup prompt for your agent", `npm create convex@latest` and "Build a multiplayer poker game!" commands. Behind the hero, thick diagonal stripes in the official brand colors — yellow, red and purple — sweep across the band like a vintage racing livery.

The page then moves through an antique-white #f6eedb "Trusted by" logo strip and a "Solved." checklist with a pixel-grid illustration, a #191919 "Ready for agentic workloads" component gallery, an olive #444435 testimonial band set in a large serif quote, a #1d1313 founders section with portrait photos, a rust #73312b "Enterprise ready" strip, a closing "Build a production app this afternoon" call-to-action over a pixel-art grid, and a #221f1d footer. The #221f1d footer brown is the largest painted area on the page.

Microcopy is punchy and slightly irreverent ("All gas, no breakages", "Convex is better than your stack", "Here's the proof"), and the art direction mixes 1970s stripes, VCR pixel type and 8-bit tiles with crisp developer UI.

## Colors

The official brand page (https://www.convex.dev/brand) names three primary brand colors — **Red #EE342F**, **Yellow #F3B01C**, **Purple #8D2676** — "used sparingly through our product alongside a range of warm whites and black shades meant to reflect technological nostalgia in an understated manner". The site ships them as `--color-red-r3`, `--color-yellow-y3` and `--color-plum-p4`.

- **Primary #f3b01c** — the official yellow, measured as the fill of the yellow pill button; its hover fill is **#f8d077** (`--color-yellow-y2`), measured in the hover pass.
- **On-primary / ink #141414** — `--color-neutral-n12`, the dark text on yellow and light surfaces.
- **Brand-red #ee342f** and **brand-purple #8d2676** — the stripe colors; use them for brand graphics, not for UI fills.
- **Accent-vermillion #de5d33** — `--color-mediumVermillion`, the fill of the closing "Start building" button.
- **Canvas #f6eedb** — `--color-antiqueWhite`, the body background and the "Trusted by / Solved." section.
- **Page-largest #221f1d** — the footer brown and largest painted area; **nav-bg #281d1d** for header and hero; **surface-dark #191919** for the components band.
- **Ink-inverse #ffffff** — the most-read text color, since most copy sits on dark bands; **ink-half-white #fffff9** and **ink-silver #c2c2c2** for secondary text on dark; **ink-muted #6d6d70** on light.
- **Link #f1d4c5** — the small blush-colored helper links in the hero panel.
- **Button-secondary-bg #f1f1f1** — the light "Start building" pill in the hero.
- **Card-bg #ffffff0d** — a 5% white wash for cards on dark bands; **hairline #272424** for borders on dark.
- **Footer-text #a9a9ac** — `--color-neutral-n6`.

The CSS also declares a long named palette (camel, tikkaMasala, congoPink, orchid, grape, mayaBlue and more) used for component icons and illustrations.

## Typography

Five families are loaded:

- **neue-haas-grotesk-display** (weight 900) — display only. Display: 60px / 51px, weight 900, -2.4px, uppercase. Mobile display: 46px / 39.1px, -1.84px.
- **gtAmerica** (300, 400, 500, 700, 900) — `--font-primary`, the workhorse for body, navigation and buttons. Body 16px / 24px weight 400; subheading 20px / 30px weight 500 (speaker names); button 14px / 14px weight 500; secondary button 16px / 24px weight 500; link 12px / 16.5px with 0.22px tracking. Section headlines such as "Solved." and "Ready for agentic workloads" measure 40px at weight 700 in the band analysis.
- **vcr** (400) — `--font-pixel`, a VCR-style pixel face used for boxed uppercase labels ("TRUSTED BY", "BUILT FOR THE FRONTIER", "ENTERPRISE READY") at 10px / 15px with 0.6px tracking.
- **publico** (400 roman and italic) — `--font-serif`, used for the large testimonial quote.
- **IBM Plex Mono** (400, 500) — `--font-plex`, for terminal commands and install snippets at 12px.

The logomark uses Kanit, per the brand page. gtAmerica, Neue Haas Grotesk Display and Publico are licensed web fonts served by the site; open substitutes are Inter or Söhne-like grotesks for gtAmerica, Archivo Black for the display, and Source Serif for Publico. IBM Plex Mono is open source.

## Layout

At 1280px the content area runs from 48px to 1232px. The hero is two-column: headline, intro and two buttons at left, the terminal command panel at right. Later sections vary between a five-column component grid (the #191919 band), a centred two-column testimonial area spanning 224px to 1056px, and the six-column logo wall (maxCardColumns 6). Header navigation shows 17 visible link targets including the mega-menu items.

Spacing is compact inside components: the measured gaps are dominated by 8px, then 4px and 12px; paddings by 12px, 8px and 4px. Larger 48px and 60px paddings define section blocks, and the footer pads 48px top and 32px bottom. The spacing tokens step 2, 4, 6, 8, 10, 12, 16, 20, 24 and 32px.

## Elevation & Depth

Depth is created by stacked color bands and translucent cards rather than shadows. The most common measured shadow is a faint 5% black 0px 2px 11px blur on cards; a layered long shadow (up to 13% black at 0px 91px 100px) lifts the hero command panel; a 30% black 0px 15px 22px shadow appears twice. The CSS declares `--shadow-md` (0 4px 6px -1px, 0 2px 4px -2px at 10% black) and `--drop-shadow-sm`. Cards on dark bands use the #ffffff0d wash and a thin #272424 or 15% white border.

## Shapes

All buttons are full pills (computed radius reported as 3.35544e+07px, i.e. 9999px). Cards and panels use 8px (most frequent) and 12px; labels and the command buttons use 4px; 6px, 16px and 22px appear on smaller elements. The pixel-font section labels are tiny 4px-radius boxes with a 1px solid #000000 border on light backgrounds. The brand's own shapes are the Reuleaux triangle symbol and the diagonal stripes; the closing section adds square 8-bit tiles.

## Components

- **Yellow pill (primary)** — #f3b01c fill, #141414 label, gtAmerica 14px weight 500, 6px 10px padding, 28px tall, pill radius; hover fill #f8d077.
- **Secondary pill** — #f1f1f1 fill, #141414 label, gtAmerica 16px weight 500, 10px 20px padding, 46px tall ("Start building" in the hero). Paired with an outlined "Read the docs" pill with white text.
- **Closing button** — #de5d33 fill, white 14px label, 8px 24px padding, 39px tall.
- **Command button** — #1a0f0f fill, 15% white border, 4px radius, IBM Plex Mono 12px, 4px 8px 4px 4px padding, with a copy icon.
- **Section label** — vcr 10px uppercase, 4px 8px padding, 4px radius, outlined.
- **Component card** — dark card with a pixel label, title, muted description and an `npm install @convex-dev/...` command row; 12px radius.
- **Integration tiles** — Stripe, Resend, Twilio, WorkOS and PostHog tiles with brand icons.
- **Testimonial** — publico serif quote, centred, with uppercase pixel-font attribution, followed by two #ffffff0d quote cards.
- **Footer** — #221f1d, #a9a9ac links in gtAmerica 14px, four link columns plus social and compliance lists.

## Design System Architecture

Convex publishes brand guidelines at https://www.convex.dev/brand (logo, symbol, three primary colors, logo do's and don'ts) but no public component library or design-token package. The de-facto system is the site's Tailwind v4 theme in the shipped CSS: neutral steps `--color-neutral-n1` to `--color-neutral-n13`, ramps `--color-yellow-y1`…`y4`, `--color-red-r1`…`r4`, `--color-plum-p1`…`p6`, `--color-green-g1`…`g4`, a set of named colors (`--color-antiqueWhite`, `--color-mediumVermillion`, `--color-rifleGreen`), font variables (`--font-primary`, `--font-serif`, `--font-pixel`, `--font-plex`) and radius steps `--radius-sm` to `--radius-4xl`.

## Do's and Don'ts

**Do**
- Use the official yellow, red and purple sparingly — in stripes, the logo and one pill — against warm browns and antique white.
- Set hero statements in heavy uppercase grotesk with tight negative tracking.
- Label sections with tiny boxed vcr pixel type.
- Show real commands in IBM Plex Mono inside dark command panels.
- Keep every button a pill.

**Don't**
- Don't alter the logo or recolor it; the brand page asks for sufficient contrast or a black/white fallback.
- Don't flood surfaces with the brand red or purple.
- Don't use cool greys or pure black for large bands; the measured bands are warm browns (#281d1d, #221f1d, #1d1313).
- Don't treat the announcement bar's close control as part of the system.

## Responsive Behavior

The extractor's mobile pass at 390px measured: the display headline at 46px / 39.1px with -1.84px tracking (still uppercase, weight 900); body text stays 16px / 24px; the pixel label stays 10px. Only one header link stays visible and a menu toggle labelled "Open the menu" appears. Card grids measure one column at most, and mobile content spans 12px to 378px. The stylesheet declares min-width media queries at 640px, 768px, 1024px (most used), 1280px and 1536px. Other mobile behaviour was not measured.

## Iteration Guide

1. Set the warm base: #281d1d hero, #f6eedb light section, #191919 and #221f1d dark bands.
2. Add the brand stripes in #f3b01c, #ee342f and #8d2676 as graphics only.
3. Build the hero headline in 60px weight 900 uppercase with -2.4px tracking.
4. Use gtAmerica 16px / 24px for copy and pill buttons for every action; the yellow pill is the brand action.
5. Add vcr pixel labels and IBM Plex Mono command rows to signal developer tooling.
6. Keep spacing on the 4/8/12px ladder with 48–60px section padding.
7. Validate the mobile display at 46px and the single-column card layout.
