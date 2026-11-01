---
version: alpha
name: "Montfort Group"
category: "Product & SaaS"
description: "Montfort Group site (mont-fort.com), a global commodity trading and asset investment company, in glacier blue #2d628c and #81a0bb on white, with wide-tracked uppercase Josefin Sans 62px wordmark (19.84px spacing), Century Gothic body and mountain photography."
colors:
  canvas: "#ffffff"
  ink: "#2d628c"
  primary: "#2d628c"
  ink-3: "#81a0bb"
  ink-4: "#ffffff4d"
  hairline: "#ffffff33"
typography:
  display:
    fontFamily: "\"Josefin Sans\", sans-serif"
    fontSize: 62px
    fontWeight: 300
    letterSpacing: 19.84px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Josefin Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 300
    letterSpacing: 5.76px
    textTransform: uppercase
  heading:
    fontFamily: "\"Century Gothic\", sans-serif"
    fontSize: 50px
    fontWeight: 400
    lineHeight: 70px
    letterSpacing: 2.24px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Century Gothic\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.8px
  body:
    fontFamily: "\"Century Gothic\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
    letterSpacing: 1.28px
  nav:
    fontFamily: "\"Century Gothic\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
    letterSpacing: 0.48px
    textTransform: uppercase
  link:
    fontFamily: "\"Century Gothic\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.8px
    letterSpacing: 3.36px
    textTransform: uppercase
rounded:
  xs: 8px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 17px
  s7: 20px
  s8: 32px
  s9: 36px
  s10: 40px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 0px 28px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 36px 12px 32px 48px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 163px 0px 141px
---

# Montfort Group

## Overview
The measured site is mont-fort.com (page title "Montfort Group", language en). The page states "MONTFORT IS A GLOBAL COMMODITY TRADING AND ASSET INVESTMENT COMPANY." and explains: "We trade, refine, store, and transport energy and commodities. We also invest in related assets and provide innovative services with integrity and efficiency to create long-term value for our clients." The top navigation lists the group's businesses: MONTFORT GROUP, MONTFORT TRADING, MONTFORT CAPITAL, MONTFORT MARITIME and FORT ENERGY, followed by a NEWS counter badge (27), MENU and a two-dot control. A hero section shows the Montfort wordmark and a dotted-tree logo over a photograph of a snow-covered peak rising through cloud, with "SCROLL DOWN TO DISCOVER" at the lower left.

The page is a very long scroll (17685px) built from large photographic stages and generous white spaces. Text is set in light, wide-tracked uppercase: a quiet, expensive, minimalist corporate tone that matches the mountain imagery. The first white section after the hero has a pale blue uppercase statement offset to the right and a smaller body paragraph offset to the left, with a bold tracked link "WHO WE ARE →" over a thin underline. The deeper sections (not visible in the capture) use white text, which is why white is the most-read text color in the data.

## Colors
The measured palette is small. `{colors.canvas}` white (#ffffff) is the page ground (1058 weighted area). `{colors.primary}` and `{colors.ink}` are both glacier blue #2d628c (navigation, wordmark, body text on white and the "WHO WE ARE" link), and `{colors.ink-3}` (#81a0bb) is the lighter blue of the large statement text and inactive nav items (394 weighted characters). White text is the most-read color (4783 weighted characters), used on the dark photographic sections; `{colors.ink-4}` (#ffffff4d, 30% white) is dimmed text on those sections. `{colors.hairline}` (#ffffff33, 20% white) is the most common border color (17 weighted occurrences), drawn on photography. Smaller translucent fills (#a9bfd24d, #2d628c1a) mark chips such as the news badge, and the border #a9bfd2 appears four times.

There is no accent color; blue tints and white are the entire interface. The one box-shadow measured is a white glow, `rgb(255, 255, 255) 0px 0px 12px 0px`.

## Typography
Two faces are loaded: Century Gothic (weights 400 and 700, 6191 weighted characters) for nearly everything, and Josefin Sans (weight 300, 41 weighted characters) for the large wordmark text. Both are declared with a generic sans-serif fallback. No foundry source was opened here.

`{typography.display}`: Josefin Sans 62px weight 300, letter-spacing 19.84px, uppercase (the MONTFORT wordmark). `{typography.display-mobile}`: 18px weight 300 with 5.76px tracking. `{typography.heading}`: Century Gothic 50px weight 400, line-height 70px, 2.24px tracking, uppercase (the company statement). `{typography.subheading}`: 20px, 28px line-height, 0.8px tracking (business names such as "Montfort Trading"). `{typography.body}`: 16px, 25.6px line-height, 1.28px tracking (0.08em). `{typography.nav}`: 12px, 14.4px line-height, 0.48px tracking, uppercase. `{typography.link}`: 14px weight 700, 16.8px line-height, 3.36px tracking, uppercase. Other sizes: 24px (955 weighted characters, with 0.48px tracking) and 40px (162, 1.6px tracking). Tracking is generous everywhere, with letter-spacing proportional to size (0.08em body, 0.045em headings) and extreme only on the wordmark (0.32em).

## Layout
The desktop page is 1280px wide with an 82px header. The root variables set `--container-padding-x` 18px and `--header-padding` 1rem. Content sits in an off-center grid: the statement begins around the right half of the page and the body paragraph around the left third, so text blocks stagger down the page rather than aligning to one column. Gaps measured: 20px (16 uses), 40px (12), 17px, 74px, 12px, 16px and 80px; paddings: 16px, 12px, 36px, 48px and large section values of 160px, 320px, 340px and 1200px. Nav links carry 36px 12px 32px 48px padding, and the footer has 163px top and 141px bottom padding and is 821px tall. The spacing tokens `{spacing.s1}` to `{spacing.s10}` list 3px to 40px.

## Elevation & Depth
There is almost no elevation. One white glow shadow (0 0 12px) was measured on one element, and borders are 20% white lines on photography. Depth is optical: soft clouds, layered mountain ridges and large white space.

## Shapes
Two radii were measured: 50% on 24 elements (`{rounded.pill}`, circular elements) and 8px on four (`{rounded.xs}`, chips such as the news badge). All other surfaces are square; the interface uses thin lines and underlines instead of boxes.

## Components
**Navigation** (`{components.nav}`, `{components.nav-link}`): 12px uppercase Century Gothic in #2d628c, active item underlined by a thin blue line, inactive items in lighter #81a0bb, each with 36px 12px 32px 48px padding; the header is 82px tall. **Text link** (`{components.link}`): 14px bold uppercase, 3.36px tracking, 28px bottom padding with a thin hairline below and an arrow icon. **Footer** (`{components.footer}`): white background, #2d628c text, the same five business names in 12px uppercase, 163px 0 141px padding. No filled buttons, inputs or cards were detected on the home page.

## Design System Architecture
No public design system or brand-guidelines page was opened. The shipped CSS holds only layout variables (`--vw`, `--svh`, `--dvh`, `--lvh`, `--header-padding`, `--container-padding-x`), and the font list is two families. Brand values live in the compiled styles. The de-facto system is a restrained set of blue tints on white, wide-tracked light type, and photographic sections.

## Imagery and Voice
The hero image is a single photograph of a snow-covered peak breaking through cloud, tinted in the same pale blue-grey as the interface text, so type, logo and picture read as one cool monochrome field. The logo is a tree-like mark built from small blue dots, set beside a thin vertical rule and the tracked wordmark. Copy is declarative and short, in the first person plural ("We trade, refine, store, and transport energy and commodities."), and the company statement is a single full-stop sentence in capitals. Business units are presented as peer names in the navigation instead of product pages, and the news count in the header (27) is shown as a small blue chip. The recurring micro-interaction cue is a short horizontal line beside "SCROLL DOWN TO DISCOVER", and an arrow beside "WHO WE ARE". Whitespace is used as a design element: large empty bands separate each statement, so only one idea is on screen at a time.

## Do's and Don'ts
- Do use #2d628c for text on white and #81a0bb for large statements and inactive items.
- Do set the wordmark in Josefin Sans 300 uppercase with very wide tracking (19.84px at 62px).
- Do use Century Gothic with positive tracking (0.08em) for body copy.
- Do let photography of mountains, cloud and structure carry the visual weight.
- Don't add accent colors, filled buttons or drop shadows.
- Don't round corners other than small 8px chips and circular markers.
- Don't tighten tracking; every measured size has positive letter-spacing.

## Responsive Behavior
The mobile pass measured the MONTFORT wordmark at 18px weight 300 with 5.76px tracking (against 62px and 19.84px on desktop), 150px wide. Menu behavior, column changes and other breakpoints were not measured.

## Iteration Guide
1. Start from white with #2d628c text in Century Gothic 16px at 25.6px line-height.
2. Use uppercase with positive tracking for headings, nav and links.
3. Introduce full-bleed misty photography for brand moments and switch to white text on it.
4. Make links bold 14px uppercase with 3.36px tracking and a thin underline.
5. Re-run `node web/scripts/verify-designs.mjs --slug=montfort` after edits.
