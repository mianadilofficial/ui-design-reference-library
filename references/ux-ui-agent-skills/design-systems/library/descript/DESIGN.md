---
version: alpha
name: Descript
category: "Design & Creative Tools"
description: "Descript, the text-based AI video and audio editor: deep maroon #390a1a page with a #fff7fa blush canvas, coral-red #f73b3b primary buttons at 12px radius, gamuthDisplay serif headlines at 88px over booton sans body at 18px/25.2px, near-black #190308 testimonial cards and a #110a0d footer."
colors:
  canvas: "#fff7fa"
  page-largest: "#390a1a"
  ink: "#390a1a"
  primary: "#f73b3b"
  on-primary: "#fff7fd"
  primary-hover: "#b81b1e"
  surface-deep: "#190308"
  surface-ember: "#180101"
  maroon-700: "#772a4d"
  maroon-800: "#5b142e"
  cream: "#fff8f4"
  white: "#ffffff"
  ink-nav: "#26171d"
  ink-muted: "#4c343e"
  ink-on-dark-muted: "#d1c7cb"
  neutral-50: "#f1eaed"
  lilac-50: "#ebebff"
  hairline: "#e4dde0"
  footer-bg: "#110a0d"
typography:
  display:
    fontFamily: gamuthDisplay, "gamuthDisplay Fallback", Georgia, serif
    fontSize: 88px
    fontWeight: 400
  display-mobile:
    fontFamily: gamuthDisplay, "gamuthDisplay Fallback", Georgia, serif
    fontSize: 48px
    fontWeight: 400
  subheading:
    fontFamily: gamuthDisplay, "gamuthDisplay Fallback", Georgia, serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 44px
  body:
    fontFamily: booton, "booton Fallback", system-ui, Roboto, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  body-sm:
    fontFamily: booton, "booton Fallback", system-ui, Roboto, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: booton, "booton Fallback", system-ui, Roboto, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 12px
  xl: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 16px 32px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-secondary:
    backgroundColor: "{colors.maroon-700}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 16px 24px
    height: 54px
    boxShadow: rgba(0, 0, 0, 0.16) 0px 2px 4px 0px
  button-secondary-hover:
    backgroundColor: "{colors.maroon-800}"
    textColor: "{colors.white}"
  button-demo:
    backgroundColor: "{colors.ink-muted}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 16px 32px
    height: 56px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.lg}"
    padding: 24px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.button}"
  nav-link-hover:
    backgroundColor: "{colors.neutral-50}"
    textColor: "{colors.ink-nav}"
  card:
    backgroundColor: "{colors.surface-deep}"
    textColor: "{colors.canvas}"
    typography: "{typography.body-sm}"
    rounded: "{rounded.md}"
    padding: 32px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-on-dark-muted}"
    padding: 86px 64px 104px
---

## Overview

Descript is an AI video and audio editor built around one idea: you edit media by editing its transcript. The measured home page ("Descript: AI Video & Audio Text-based Editor — Try Free") is a 9,740px-tall page at a 1280px viewport, and it looks unlike most SaaS sites. Instead of white with a blue accent, it is wrapped in a deep wine maroon (#390a1a, the largest painted area by far at 10,396) with near-black maroon bands (#190308, #180101), a blush off-white canvas (#fff7fa) for the light middle of the page, and a single loud coral-red (#f73b3b) for every "Get started for free" button.

The type pairing does the rest: a high-contrast serif display face (gamuthDisplay) for headlines such as "AI-editing for every kind of video", "The whole workflow, right here" and "From raw footage to finished video, faster", set against a friendly geometric sans (booton) for all body copy, buttons and navigation. The result reads like an editorial magazine or a film festival site rather than a developer tool.

The capture shows, top to bottom: a light blush navigation bar with a maroon wordmark; a maroon hero with a centred serif headline, a red CTA and a product mock-up of the transcript editor with the Underlord AI assistant side panel; a logo row (Spotify, Vox, Reuters, CBS, Microsoft, The New York Times); a row of three dark quote cards; a tabbed "workflow" carousel (Record, Edit, Polish, Share, Multiply); an "AI tools" carousel; a vertical list of use cases next to a video still; a light blush enterprise section with SOC 2, SAML and GDPR badges and big stat numbers ("50%", "116 HRS", "+100%"); a G2-rated review row; an FAQ accordion; a closing maroon CTA band with a strip of creator photos; and a near-black footer.

## Colors

Descript ships a full named palette as CSS custom properties on `:root` (Maroon, Neutral, Red, Lilac, Green, Gray and "Tools-Glow" ramps). The tokens above map to those names:

- **Maroon-900 `#390a1a`** (`page-largest`, `ink`) — the dominant page background and also the most-read text colour (2,370 characters) on light sections. On the blush canvas it is the heading and body ink.
- **Neutral-0 `#fff7fa`** (`canvas`) — the body background and the nav bar fill; a warm pinkish white, never pure white.
- **Red-450 `#f73b3b`** (`primary`) — every primary CTA. Its hover is **Red-600 `#b81b1e`**, measured on "Get started for free".
- **Maroon-0 `#fff7fd`** (`on-primary`) — text on red buttons.
- **Maroon-950 `#190308`** (`surface-deep`) and **Red-950 `#180101`** (`surface-ember`) — near-black bands and the testimonial cards on the maroon page.
- **Maroon-700 `#772a4d`** — the "Sign up" button in the nav, with white text; hover darkens to **Maroon-800 `#5b142e`**.
- **Neutral-750 `#4c343e`** (`ink-muted`) — secondary text on light sections and the fill of the "Book a demo" button.
- **Neutral-900 `#26171d`** (`ink-nav`) — navigation link text. Nav items take a **Neutral-50 `#f1eaed`** fill on hover.
- **Red-0 `#fff8f4`** (`cream`) — the hero headline colour on maroon.
- **Neutral-200 `#d1c7cb`** — muted text on dark, used for the footer.
- **Neutral-100 `#e4dde0`** — hairline borders.
- **Lilac-50 `#ebebff`** — a pale lilac fill (391 by area).
- **Neutral-950 `#110a0d`** — the footer background.

The palette also declares "Tools-Glow" pastels (video #d9f3ff, write #bfd0f9, convert #ffdbe6, collaborate #ffe5bf, ai #ebd6ff, audio #ffd4bf, record #ffbfbf, transcribe #c7e9c7) that colour-code product tools; they were not among the measured painted areas on the home page, so they are not tokens here.

## Typography

Three web fonts are loaded:

- **gamuthDisplay** — the serif display face. The hero headline measured at 88px, weight 400, normal line height; card and carousel titles such as "Record" use 40px/44px at weight 700. The frequency table also records 56px and 72px headline sizes (72px with -1.44px tracking).
- **booton** — the workhorse sans, 7,077 of about 7,570 measured characters. Body copy is 18px/25.2px at 400; quote cards use 16px/22.4px; buttons and navigation use 16px/24px at 600. An 18px size with +0.72px tracking is also measured (93 characters).
- **brett** — a third face used sparingly (118 characters), for small accents.

Weights stay in a narrow band: 400 for reading, 600 for actions, 700 for serif card titles. Font substitutes: all three are proprietary webfonts. The site's own fallback stacks are Georgia, serif for gamuthDisplay and system-ui, Roboto, Arial for booton and brett, so Georgia (or another high-contrast serif) plus a geometric sans are the declared substitutes.

## Layout

The page is a 1280px composition. The band map shows a 15px maroon strip, a 97px blush navigation band, a 1,793px maroon hero-and-proof section (3 columns at its widest, the quote cards), several dark bands of 299px to 1,208px for carousels and the use-case list, a 2,933px blush canvas band (3 columns: the enterprise badges and the review cards), a 1,009px maroon closing band, and a 1,161px footer in 4 columns. The widest measured grid has 5 columns (the footer link columns).

Spacing follows a 4px base: gaps of 8, 12, 16, 24, 32, 40, 56, 72 and 96px, and paddings of 16, 24, 32, 40, 48 and 80px. Headlines are centred over each section; body copy blocks stay narrow (the hero paragraph is 969px wide at 18px). The density is moderate: each band has one headline, one short paragraph and one large visual.

## Elevation & Depth

Depth comes from tonal stacking of maroons rather than shadows: #390a1a page, #190308 cards, #110a0d footer. Only light shadows are measured: `rgba(0, 0, 0, 0.16) 0px 3px 3px 0px` (12 uses) and `rgba(0, 0, 0, 0.16) 0px 2px 4px 0px` on the "Sign up" button. Product mock-ups sit on the maroon with white UI surfaces, so the screenshots themselves are the brightest objects on dark bands. The light enterprise section uses soft lilac-tinted tiles and #e4dde0 hairlines instead of shadows.

## Shapes

Radii are modest. Buttons use 12px (`rounded.lg`), quote cards 8px, small tags and controls 4px and 5px, larger panels 16px, and chips and carousel arrows the 9999px pill. Nothing is sharp-cornered and nothing is very round except the pill controls. The capture shows the workflow tab chips ("Record", "Edit", "Polish") as small pills and the carousel previous/next buttons as red circles.

## Components

- **Primary button** — "Get started for free": #f73b3b fill, #fff7fd text, booton 16px/24px at 600, 12px radius, 16px 32px padding, 56px tall. Hover fill #b81b1e.
- **Secondary (Sign up) button** — #772a4d fill, white text, 12px radius, 16px 24px padding, 54px tall, `rgba(0, 0, 0, 0.16) 0px 2px 4px 0px` shadow; hover fill #5b142e.
- **Demo button** — "Book a demo": #4c343e fill, #fff7fd text, same size and radius as the primary.
- **Navigation** — #fff7fa bar with 24px padding and a 12px radius; links in #26171d booton 16px/24px at 600 ("Features", "Underlord", "Solutions", "Resources", "Pricing", "Contact sales", "Sign in"). Hover gives the link a #f1eaed fill.
- **Quote card** — #190308 fill, #fff7fa text, booton 16px/22.4px, 8px radius, 32px padding, 368px wide in a row of three, with the customer logo and name at the bottom.
- **Workflow carousel** — dark panel with a serif 40px title, a short paragraph, a checklist, and a product mock-up; pill tabs above, red round arrows on the sides.
- **Stat block** — large numerals ("50%", "116 HRS", "+100%") over a short caption and a customer logo, on the blush canvas.
- **FAQ accordion** — a single column of rows separated by hairlines with chevrons on the right.
- **Footer** — #110a0d background, #d1c7cb text at 18px/25.2px, padding 86px 64px 104px, link columns for Features, Product, Resources and Company.

## Design System Architecture

Descript publishes no public design system or brand guidelines that we could open: /brand and /press return 404, and the About page (https://www.descript.com/about) links only to Careers, Research, Ethics, Privacy and Terms. The shipped CSS, however, exposes a clear de-facto system on `:root`: numbered colour ramps named by hue (`--Maroon-0` … `--Maroon-950`, `--Neutral-0` … `--Neutral-950`, `--Red-0` … `--Red-950`, `--Lilac-*`, `--Green-*`, `--Gray-*`), semantic "core" colours (`--Core-White` #fffafc, `--Core-Canvas-White` #fff7f2, `--Core-Canvas-Beige` #faf8f7, `--Core-Screen-Black` #27181e), a "Tools-Glow" family that gives each product tool its own pastel, and font variables (`--font-gamuth-display`, `--font-booton`, `--font-brett`). Tailwind ring variables (`--tw-ring-*`) show the site is styled with Tailwind on top of these custom properties. Components then pick from the ramps: primary actions use Red-450 with Red-600 hover; secondary actions use Maroon-700 with Maroon-800 hover; text uses Maroon-900 and Neutral-900.

## Do's and Don'ts

**Do**
- Use maroon #390a1a as the main page colour and #fff7fa blush for light sections.
- Reserve #f73b3b coral-red for the main call to action, with #b81b1e on hover.
- Pair a serif display headline (gamuthDisplay) with a clean sans body (booton).
- Keep buttons at 12px radius with generous 16px 32px padding.
- Show real product UI (the transcript editor, the Underlord panel) and real creators in photography.
- Use the numbered ramps (Maroon, Neutral, Red) rather than ad-hoc hexes.

**Don't**
- Don't use pure white #ffffff as the page background; the canvas is a warm #fff7fa.
- Don't use pure black text; ink is maroon #390a1a or #26171d.
- Don't add blue accents; the only cool hue is the pale lilac family, used in small areas.
- Don't put the coral-red on large surfaces; it is a button colour.
- Don't set body copy in the serif; serif is for headlines and card titles only.
- Don't add heavy drop shadows; depth comes from darker maroons.

## Responsive Behavior

The extractor's mobile pass at 390px recorded:
- The hero headline drops from 88px to 48px in gamuthDisplay, weight 400, over a 342px width.
- Body copy stays booton 18px/25.2px (353px wide).
- The primary CTA "Get started for free" measured at booton 15px/22.5px, 600, with an 11.25px radius, 11.25px 30px padding and 45px height (desktop: 16px, 12px radius, 16px 32px padding, 56px).
- The navigation bar measured 84px tall; 2 header links were visible on mobile against 6 on desktop, and the extractor detected no menu toggle.
- Mobile font sizes recorded include 15px, 16.875px, 24px, 32px, 40px and 48px.

Breakpoint values and how the carousels, quote cards and footer columns rearrange at small widths were not measured.

## Iteration Guide

1. Lay down the colour structure: #390a1a maroon page, #fff7fa blush light section, #190308 dark bands and #110a0d footer.
2. Set headlines in gamuthDisplay (or Georgia as the declared fallback) at 88px for the hero and 40px/44px bold for card titles; set everything else in booton (or a geometric sans) at 18px/25.2px.
3. Add a single #f73b3b primary button per section, 12px radius, 16px 32px padding, 56px tall, with #b81b1e hover.
4. Use #772a4d for secondary sign-up actions and #4c343e for "Book a demo".
5. Build quote cards in #190308 with 8px radius and 32px padding, three across.
6. Keep shadows to the measured `rgba(0, 0, 0, 0.16)` 2-4px values.
7. Check the result against the capture: the page should read as warm, dark and editorial, with the red buttons as the only saturated colour.
