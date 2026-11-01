---
version: alpha
name: Jitter
category: "Design & Creative Tools"
description: "Jitter motion-design tool site: black TWK Lausanne 800 headlines (80px hero, 72px sections) with Inter 16px body, #19171c ink on white and #f2f1f3 cards with 40px corners, a lavender #b593ff pill CTA and black #19171c pill buttons with 50px radius, and violet, blue and yellow accent cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f1f3"
  ink: "#19171c"
  primary: "#b593ff"
  on-primary: "#19171c"
  surface-mid: "#e5e4e7"
  surface-black: "#000000"
  ink-secondary: "#6e6e73"
  ink-faint: "#97979b"
  ink-ghost: "#d7d7db"
  ink-violet-dark: "#17082c"
  violet-link: "#7a40ed"
  card-violet: "#a981ff"
  card-blue: "#01b2fd"
  card-blue-pale: "#e6f4ff"
  card-lavender: "#f2ecfd"
  highlight-yellow: "#f5ff63"
typography:
  display:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 80px
    fontWeight: 800
    lineHeight: 72px
    letterSpacing: "-2.4px"
  heading:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 72px
    fontWeight: 800
    lineHeight: 68.4px
    letterSpacing: "-3.2px"
  statement:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 40px
    fontWeight: 800
    lineHeight: 40px
    letterSpacing: "-1.5px"
  cta-label:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 27.6px
    letterSpacing: "-0.4px"
  eyebrow:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.4px"
  announcement:
    fontFamily: Inter, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.32px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.32px"
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.352px"
rounded:
  xs: 20px
  sm: 40px
  md: 50px
  lg: 375px
  none: 0px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 20px
  s9: 21px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.cta-label}"
    rounded: "{rounded.md}"
    padding: 8px 50px
    height: 60px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.cta-label}"
    rounded: "{rounded.md}"
    height: 60px
  announcement-pill:
    textColor: "{colors.ink}"
    typography: "{typography.announcement}"
    rounded: "{rounded.sm}"
    padding: 7px 20px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 0px 0px 44px
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

Jitter (https://jitter.video/) is a browser-based motion design tool, and its home page follows the approach its own brand guide describes: "simple black typography" on "white backgrounds" with "very little visual noise". The hero is a centered two-line headline, "Design in motion. Now with AI.", in heavy black TWK Lausanne at 80px, above a single lavender "Try Jitter for free" pill. A small announcement pill sits above it ("Superagents: AI agents, built right into Jitter — Learn more", with "Learn more" in violet). Below: "Over 20,000 creative teams use Jitter to create stunning animations online" and a monochrome logo row (Google, Gamma, Perplexity, DEPT, Deliveroo, TikTok).

The rest of the page is a long sequence of light-grey rounded cards showing product UI and finished animations: a template carousel (poster designs with "Open template ↗"), a scroll-revealed statement in pale grey type ("Jitter helps creative teams design and ship polished animations at scale…"), a search demo, "From idea to motion in seconds" with tall cards in grey, bright blue and violet ("Animate with agents", "Refine with full control", "Ship motion at scale" with a big "5x"), "Supercharge your creativity" with a black "Explore all the features" pill and a feature grid, "Details worth obsessing over" (pen tool, gradients, blur, blend modes, audio and video, 1,500+ fonts), two large customer quotes with a hand-drawn highlight word ("no time", "motion"), team features, "Never start from scratch again" (400+ templates), customer and pricing cards, and a closing "Try Jitter today".

Every section opens with a small grey label pill ("Creative range", "Animation, accelerated", "Built for teams", "Templates").

## Colors

The CSS names the core pair: `--primary-color: #19171c`, `--secondary-color: #6e6e73`, `--bg-color: #fff`, plus `--primary-color-alt: #fba6ec` and a violet gradient (`--gradient-start-plain` rgb(122, 64, 237) to `--gradient-end-plain` rgb(141, 93, 239)).

- **canvas #ffffff** — about 62% of the capture.
- **page-largest #f2f1f3** — the light grey of almost every card (the largest background by DOM area); **surface-mid #e5e4e7** for inner panels and borders.
- **ink #19171c** — headlines, body and the black pill buttons.
- **primary #b593ff** — the lavender "Try Jitter for free" pill, with **on-primary #19171c** text.
- **ink-secondary #6e6e73**, **ink-faint #97979b** — paragraph and caption greys; **ink-ghost #d7d7db** — the pale state of the scroll-revealed statement text.
- **violet-link #7a40ed** — the "Learn more" link in the announcement pill; **ink-violet-dark #17082c** — text on violet.
- **Accent cards** — violet #a981ff, blue #01b2fd, pale blue #e6f4ff, lavender #f2ecfd; **highlight-yellow #f5ff63** for small badges such as "Read customer stories".
- **surface-black #000000** — the computed background of the footer element.

## Typography

Two families. **TWK Lausanne** (loaded at 600, 700, 750, 800) for headlines, CTAs and labels; **Inter** (400, 600) for body and navigation. Tracking is negative everywhere.

- **display** — the hero h1, probed at TWK Lausanne 80px / 800 / 72px, −2.4px. The closing "Try Jitter today" h2 uses the same 80px / 800 with 76px line height.
- **heading** — 72px / 800 / 68.4px, −3.2px for section heads such as "From idea to motion in seconds". 48px (−1.92px) and 36px (−0.6px) are smaller heading steps.
- **statement** — 40px / 800 / 40px, −1.5px for the scroll-reveal paragraph.
- **cta-label** — 20px / 600 / 27.6px, −0.4px for the big pill buttons; the header "Sign up" label is 18px / 600.
- **eyebrow** — 20px / 600 / 24px, −0.4px (h3 labels such as "Creative range").
- **body** — Inter 16px / 400 / 24px, −0.32px; 18px with −0.36px is the other common body size, and bold lead phrases use Inter 18px / 600.
- **nav** — Inter 16px / 600 / 24px, −0.352px; **announcement** — Inter 15px / 400 / 18px.

If TWK Lausanne is unavailable, substitute a neo-grotesque with an extra-bold weight and declare it.

## Layout

At 1280px the page is 15,495px tall — a long scroll. The header has the wordmark, Product, Customers, Templates and Pricing at left and "Log in" plus a black "Sign up" pill at right. Sections are centered columns with large headings over card grids: two-up grids of tall cards, three-up template cards, a two-column feature grid, and horizontal carousels with round arrow controls.

The most common gap is 12px (484 elements) — the gutter between cards — with 5px, 10px, 20px and 50px next. Paddings are dominated by 50px, 40px and 60px inside cards and sections, with 8px, 4px and 10px on small elements.

## Elevation & Depth

Jitter uses long, layered, very soft shadows on floating UI (each on 114 elements):

- `rgba(25, 23, 28, 0) 0px 237px 66px 0px, rgba(25, 23, 28, 0.01) 0px 152px 61px 0px, rgba(25, 23, 28, 0.05) 0px 85px 51px 0px, rgba(25, 23, 28, 0.09) 0px 38px 38px 0px, rgba(25, 23, 28, 0.1) 0px 9px 21px 0px`
- `rgba(0, 0, 0, 0.01) 0px 63px 25px 0px, rgba(0, 0, 0, 0.05) 0px 35px 21px 0px, rgba(0, 0, 0, 0.09) 0px 16px 16px 0px, rgba(0, 0, 0, 0.1) 0px 4px 9px 0px`

These stacked shadows fade gradually over a long distance, so screenshots float above the grey cards without hard edges. Cards themselves are flat.

## Shapes

Big rounded containers and pill buttons. 40px is the most common radius (131 elements, cards and the announcement pill), 50px on 125 elements (including the pill buttons), 50% on 117, 20px on 7, a single 375px and a `0 0 80px 80px` bottom-rounded section. The brand guide says "there's no strict rule for when to use sharp or rounded corners" and recommends mixing them for contrast; on the home page, rounding dominates. The primary CTA's outer link computes 0px radius; its visible lavender shape is an inner element with 50px radius and 8px 50px padding.

## Components

- **Primary button** — lavender #b593ff, #19171c TWK Lausanne 20px/600 label, 50px radius, 8px 50px padding, 60px tall ("Try Jitter for free").
- **Black button** — #19171c with white 20px/600 label, 60px tall ("Explore all the features", "Browse 400+ free templates", "Get started for free"); in the header, "Sign up" is an 18px/600 black pill with 50px radius.
- **Announcement pill** — 40px radius, 7px 20px padding, Inter 15px text with a violet link.
- **Section label** — small grey pill with dark text above each heading.
- **Feature card** — #f2f1f3, 40px radius, product visual at top, a label chip ("Animate with agents") and a short grey paragraph; variants in blue #01b2fd and violet #a981ff.
- **Template card** — #f2f1f3, 40px radius, 44px bottom padding, a poster preview, a round Jitter avatar and the template name.
- **Quote** — large bold centered quote with a hand-drawn sticker word, and a small author chip below.
- **Nav link** — Inter 16px/600; on hover only the opacity changes (from 0.85 to 1).

## Design System Architecture

Jitter publishes brand guidelines at https://jitter.video/brand ("Brand guidelines · Jitter"), described as "a collection of creative shortcuts from behind the scenes", with sections on creative thinking, visual language and production tricks, and a "brand playground" Figma file (https://www.figma.com/design/fJJmPsuYoL1QYvmE4mwQv2/Jitter-2026%C2%AE?node-id=0-1). The visual-language page (https://jitter.video/brand/visual-language) calls for simple black typography on white backgrounds, mixing sharp and rounded corners for hierarchy, tight crops, a fixed camera with UI moving underneath, and never fully static frames. It lists no hex values or font names.

The site's CSS is Tailwind-based (`--tw-*` variables) with a few named tokens: `--primary-color`, `--secondary-color`, `--primary-color-alt`, `--bg-color`, the violet gradient start/end, and a spring-like `--ease-overshoot-linear` easing curve built with `linear()`.

## Do's and Don'ts

**Do**
- Set headlines in an extra-bold grotesque (TWK Lausanne 800) with tight negative tracking and line height below 1.
- Keep the page white with black type, and put everything else in #f2f1f3 cards with 40px corners.
- Use the lavender #b593ff pill for the main action and black pills for the rest.
- Use long, layered, low-opacity shadows for floating UI.
- Add one playful element per section — a sticker word, a 3D character, a bright card.

**Don't**
- Don't use pure black for type; ink is #19171c.
- Don't use short, dark drop shadows.
- Don't fill the page with colour; colour is reserved for a few accent cards.
- Don't leave frames fully static in motion work, per the brand guide.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the section heading "From idea to motion in seconds" at 40px / 800 / 40px with −1.6px tracking (72px on desktop), the lavender CTA unchanged at 20px/600 with 50px radius and 8px 50px padding, 16px as the most frequent text size, and 2 visible header links with a menu toggle labelled "Open menu" (11 on desktop). The mobile size of the hero h1 was not measured. The stylesheet's media queries are `min-width 640px`, `768px`, `1024px`, `1280px` and `1536px`.

## Iteration Guide

1. Load TWK Lausanne (600/800) or a declared substitute, plus Inter; body Inter 16px/24px, −0.32px, #19171c on #ffffff.
2. Hero: centered 80px/800/72px headline, −2.4px, then the lavender #b593ff pill (20px/600, 50px radius, 60px tall).
3. Section heads at 72px/800/68.4px, −3.2px, each with a small grey label pill above.
4. Cards: #f2f1f3, 40px radius, 12px gutters, 40px–60px padding; add blue and violet variants sparingly.
5. Float screenshots with the layered long shadows.
6. Use black #19171c pills for secondary actions.
7. Compare with https://jitter.video/ at 1280px and 390px.
