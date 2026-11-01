---
version: alpha
name: "Paper Tiger"
category: "Portfolio"
description: "Paper Tiger NYC web design agency measured live: white #ffffff and black #000000 with lavender #9589d3, lagoon #6dc9bc and tart #fa435b accents, giant Rightgrotesk 900 capitals, Onsitestandard 18px body, DMMono caps labels and square corners."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  ink: "#000000"
  primary: "#9589d3"
  lagoon: "#6dc9bc"
  tart: "#fa435b"
  maureen: "#f19ec2"
  lemon: "#fdf9c9"
  pink: "#ffdce0"
  gray: "#b3b3b3"
typography:
  display:
    fontFamily: Onsitestandard, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  heading:
    fontFamily: Dmmono, Arial, sans-serif
    fontSize: 11px
    fontWeight: 500
    lineHeight: 13.75px
    letterSpacing: 0.66px
    textTransform: uppercase
  subheading:
    fontFamily: Onsitestandard, Arial, sans-serif
    fontSize: 24.8889px
    fontWeight: 400
    lineHeight: 28.6222px
    letterSpacing: 0.248889px
  body:
    fontFamily: Onsitestandard, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.96px
    letterSpacing: 0.36px
  nav:
    fontFamily: Onsitestandard, Arial, sans-serif
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 17.0667px
  button-secondary:
    fontFamily: Suisseworks, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    textTransform: uppercase
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 3.56px
  s2: 8.89px
  s3: 10px
  s4: 10.67px
  s5: 14px
  s6: 14.22px
  s7: 16px
  s8: 17.78px
  s9: 20px
  s10: 21.33px
components:
  button-secondary:
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    padding: 0px 14px
    height: 34px
    borderColor: "{colors.page-body}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    padding: 24.8889px 0px
    transform: matrix(1, 0, 0, 1, 0, -176.691)
---

# Paper Tiger

## Overview

www.papertiger.com (title "Paper Tiger | B2B Web Design and Webflow Agency, NYC") is the site of a New York web design and Webflow agency. The measured home page is bold, black-on-white and poster-like: the hero reads "CLARITY FIRST" in massive condensed black capitals at the top and "IMPACT FOREVER" at the bottom of the first screen, with a small black card tilted over lavender and red cards in the middle carrying a cropped photograph, a "PAPER TIGER" wordmark top left, centred nav links (Work, Expertise, Agency, News) and an outlined italic "CONTACT" button top right. Small stat lines at the lower left read "18+ years / 600+ projects / 2 days w/o incident / 0 scrubs" and a short statement at the lower right ("Paper Tiger is a strategic design partner helping brands win new customers, engage users, and outdo their competition") has one word set in bold italic serif. The page is 1280px wide with a measured scroll height of 2400px and an inner scroller of 9526px. The voice is witty and confident, with playful stat tiles (17 awards, 3 dogs, 2 brothers, 6 countries, per the fetched copy). The system is built on Webflow variables, and the palette is monochrome with a few candy accents.

## Colors

Backgrounds by area: `#ffffff` (12585), `#000000` (6284, the footer and black card), `#9589d3` (3250, lavender), `#6dc9bc` (3072, lagoon green) and `#fa435b` (1484, tart red). Text: `#000000` (2795), `#ffffff` (468) and `#9589d3` (2). The primary token is the lavender `#9589d3` (the generator's choice; the actual action button, "CONTACT", is outlined black with no fill). Root variables name the accents: `--accent--lavender: #9589d3`, `--accent--maureen: #f19ec2`, `--accent--lemon: #fdf9c9`, `--accent--tart: #fa435b`, `--accent--pink: #ffdce0`, `--accent--lagoon: #6dc9bc`; neutrals `--neutral--black`, `--neutral--white`, `--neutral--gray: #b3b3b3`, `--neutral--border-10: #0000001a` and `--neutral--border-30: #0000004d`; the theme roles `--_theme---background` (white), `--_theme---text` (black) and `--_theme---border` (border-30). The tokens keep `lagoon`, `tart`, `maureen`, `lemon`, `pink` and `gray` alongside the generated colors, all from those variables. The generated `page-body` (`#000000`) is the dark footer and is also the text color of the navigation and outlined button.

## Typography

Four families, all custom (loaded as web fonts): Onsitestandard (2622 characters, nav, body, h3 and h1 "Work"), Rightgrotesk at weight 900 (416 characters, the giant hero words; it is the `--_typography---fonts--primary`), Dmmono (185 characters, weights 400 and 500, the uppercase micro labels; `--_typography---fonts--mono`), and Suisseworks italic at weight 500 (42 characters, the "CONTACT" button and the italic accent word; `--_typography---fonts--decoration`). Onsitestandard is the secondary face (`--_typography---fonts--secondary`). Measured roles: display (h1 "Work", the nav label) 16px / 16px; heading (the micro label "WE WORK WITH BRANDS THAT CARE ABOUT THE DETAILS") DMMono 500 11px / 13.75px uppercase with 0.66px tracking; subheading 24.8889px / 28.6222px with 0.248889px tracking; body 18px / 21.96px with 0.36px tracking; nav 14.2222px / 17.0667px; the button face Suisseworks 14px uppercase. Giant sizes by characters: 152.889px (338, tracked -1.52889px), 184.889px, 181.333px, 243.556px and 332.8px, plus 42.6667px (757, at -0.853333px). Weights: 400 (3111), 900 (78), 500 (76).

## Layout

Webflow container variables: `--size-container-min: 992px`, `--size-container-ideal: 1440`, `--size-container-max: 1920px`, `--size-unit: 16`, and the font size scales with the container (`--size-font`). Section spacing variables run in em (for example `--_layout---grid--section-spacing--24: 1.5em` and `--40: 2.5em`). Gaps measured: 16px (84 elements), 14.2222px, 21.3333px, 28.4444px, 17.7778px; paddings: 3.55556px (40), 35.5556px (14), 21.3333px, 28.4444px. The first screen is symmetric: nav row, huge word, image stack in the middle, huge word, a stats list at lower left and a statement at lower right, and white space between. The footer is black with white 24.8889px links (Work, Expertise, Agency, News, new-business call to action) at 707px tall.

## Elevation & Depth

One shadow was measured: `rgba(0, 0, 0, 0.08) 4px 4px 12px 12px` (3 elements, a very soft spread shadow). Depth in the capture comes from the tilted overlapping cards (lavender, red, black) that fan out like stacked paper, which gives the agency name a literal sense of paper stock.

## Shapes

Mostly square. The only measured radius is 50% (3 elements, round items), and the CONTACT button and navigation measure 0px. Tokens: `none` 0px and `pill` 9999px. Cards are rectangular and rotated, not rounded.

## Components

- **Contact button**: transparent, `#000000` text with a `#000000` border color, Suisseworks italic 14px uppercase, 34px tall, padding 0px 14px, 0px radius; hover turns the text `#fbfbfb` (the fill on hover was recorded as transparent).
- **Navigation**: Onsitestandard 14.2222px in black on white, with an underline on the active item (News in the capture).
- **Micro label**: DMMono uppercase 11px with 0.66px tracking.
- **Stats list**: small Onsitestandard lines with right-aligned numbers.
- **Stacked paper cards**: tilted rectangles in lavender, red and black framing a photograph.
- **Footer**: `#000000`, white 24.8889px links, 24.8889px vertical padding.

## Design System Architecture

No standalone brand guideline or design-system page was found: the WebFetch of https://www.papertiger.com/ described the agency as building design systems for clients (naming the Betterment project as "design system & product website redesign") but linked none of its own, and no search was run. The de-facto system is Webflow's variable collections: 135 custom properties named in layers (`--accent--*`, `--neutral--*`, `--_theme---*`, `--_typography---*` per role such as h2, h2-alt, huge-0, huge-1, text-base, text-base-mono and text-micro with font-family, weight and letter-spacing variables, `--_responsive---*` scale factors such as `--_responsive---huge-0: 13em` and `--_responsive---heading-2: 4em`, `--_layout---grid--section-spacing--N` and `--size-*`). Some variables carry `<deleted|variable-...>` in their names (leftover Webflow variables) and are not documented as live.

## Do's and Don'ts

- Do open with giant condensed capitals in Rightgrotesk 900, tight tracking (-1.52889px at 152.889px).
- Do keep the base white and black and use lavender, lagoon and tart as sparing accents.
- Do set micro labels in DMMono uppercase and the single decorative word in Suisseworks italic.
- Do keep corners square; rotate cards for energy.
- Don't use heavy shadows; the single measured one is 0.08 alpha.
- Don't fill the Contact button; it is outlined.
- Don't treat the `<deleted>` Webflow variables as tokens.

## Responsive Behavior

Measured at 390px: nav label "Menu" 16px / 19.52px at 0.32px tracking; the micro label stays 11px; body 16px / 19.52px at 0.32px; the giant display is 90px (338 characters), with other sizes 24px (757), 13.6px, 12px, 11px, 10px, 72px, 44px, 14px, 64px and 32px. The nav is shown as a "Menu" label at that width. Other layout changes were not measured.

## Iteration Guide

1. Canvas `#ffffff`, ink `#000000`, accents `#9589d3`, `#6dc9bc`, `#fa435b`.
2. Rightgrotesk 900 for giant words, Onsitestandard 18px / 21.96px for body, DMMono 11px caps for labels.
3. Outlined 34px Contact button in Suisseworks italic caps.
4. Compose with stacked, rotated rectangles and generous white space.
5. Pull colors and sizes from the `--accent--*`, `--neutral--*` and `--_typography---*` variables.

## Content and Voice

Per the fetched page, the sections run: hero (headline "Clarity First, Impact Forever", intro and stats), client logos introduced by "We work with brands that care about the details" (names include Egglife, Just Salad, Insider Inc., Betterment, Quicken, The New York Times, Pentagram, PBS and Barclays), latest work (M13, Hudson County NJ, Betterment, Titan, Inspiren, Narvar), services (Design, Engineering, Strategy), latest news, testimonials and the footer. The agency calls itself a Webflow Enterprise Premium Partner and lists Webflow, Framer and Figma as tools. Microcopy is dry and self-aware: "2 days w/o incident", "0 scrubs", "150B pages wireframed", "590 sites birthed". Headlines are two-word imperatives in capitals, and body copy is plain sentences with one emphasised word in italic serif. Social links are LinkedIn, Instagram and Threads, and the footer ends with a new-business inquiry call to action.
