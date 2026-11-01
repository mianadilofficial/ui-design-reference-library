---
version: alpha
name: "Son Daven"
category: "Food & Beverage"
description: "Son Daven is a Ukrainian investment hotel project whose site uses a sand canvas (#a89474) with dark brown ink (#2c2824), KTF Metro Roman serif display in uppercase with -0.064em tracking, tiny 8.89px KTF Metro Blueline uppercase labels, square buttons and circular outlined call-outs over architectural renders."
colors:
  canvas: "#a89474"
  ink: "#2c2824"
  primary: "#a89474"
  on-primary: "#2c2824"
  surface-3: "#000000"
  ink-3: "#ffffff"
  ink-4: "#a8947480"
  alert: "#ffa800"
  success: "#1ba64b"
  error: "#e23d3d"
typography:
  display:
    fontFamily: "\"KTF Metro Roman\", \"Times New Roman\", sans-serif"
    fontSize: 49.7778px
    fontWeight: 400
    lineHeight: 49.7778px
    letterSpacing: "-3.18578px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"KTF Metro Roman\", \"Times New Roman\", sans-serif"
    fontSize: 40.625px
    fontWeight: 400
    lineHeight: 40.625px
    letterSpacing: "-2.6px"
    textTransform: uppercase
  heading:
    fontFamily: "\"KTF Metro Roman\", \"Times New Roman\", sans-serif"
    fontSize: 21.3333px
    fontWeight: 400
    lineHeight: 21.3333px
    letterSpacing: "-1.36533px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"KTF Metro Blueline\", Arial, sans-serif"
    fontSize: 8.88889px
    fontWeight: 400
    lineHeight: 14.2222px
    letterSpacing: 0.711111px
    textTransform: uppercase
rounded:
  xs: 1.78px
  sm: 10.67px
  md: 12.44px
  lg: 17.78px
  xl: 35.56px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.78px
  s2: 2px
  s3: 3.56px
  s4: 5.33px
  s5: 7.11px
  s6: 10.67px
  s7: 14.22px
  s8: 16px
  s9: 21.33px
  s10: 24.89px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 10.6667px 21.3333px
    height: 36px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 10.6667px 21.3333px
    height: 36px
  link:
    textColor: "{colors.ink-3}"
    typography: "{typography.subheading}"
    rounded: "{rounded.pill}"
    padding: 28.4444px 21.3333px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
---

# Son Daven

## Overview

Son Daven (sondaven.com/en) is the marketing site for an investment project, "Son Daven — Design Resort Hotel in Yaremche". The page is very long (scrollHeight 29515px at 1280px wide). The first screen is a full-bleed architectural render of a timber-and-stone terraced hotel set in forested hills at sunset, with a very large, glitch-striped black display wordmark "SON DAVEN" and, beside it, two return figures set in a light serif: "UP TO 10% EXPECTED ANNUAL RETURN" and "UP TO 30% CAPITALISATION POTENTIAL". Over the lower image sit the serif headline "RESORT DESIGN HOTEL IN YAREMCHE", three small fact blocks (location "YAREMCHE / IVANO-FRANKIVSK", "DEVELOPMENT BY BLAGO", "CONSTRUCTION PERIOD 2026 – 2029", with the values highlighted in small white tags) and a circular outlined call-out "INVEST IN SON DAVEN" in the lower right. The header carries a hamburger "MENU", "AEROTOUR", the centered wordmark, "UA" and a dark "CONSULTATION" pill. Further measured calls to action include "DOWNLOAD THE PDF PRESENTATION" and "CONSULTATION" buttons filled with the sand color.

Below the hero the capture shows large flat expanses of the sand color (sections not yet painted in the screenshot); the measured text reads like a pitch deck ("THE ARCHITECTURE OF THE COMPLEX GROWS FR…"). The tone is a premium, calm, investor-facing brand: warm taupe, dark brown, white overlay tags, and architectural photography. A cookie banner and a footer widget were hidden during measurement and are not documented.

## Colors

- **Canvas / primary `#a89474`**: a muted sand. It is the page background across the long scroll (6055 weight beyond the dark areas), the fill of the measured buttons and, as text, the dominant text color on the dark hero (3179 characters). The site's CSS variable is `--_colors---base-0--100`.
- **Ink / on-primary `#2c2824`**: a dark warm brown (`--_colors---base-1000--100`). It is the largest background area (33250 weight, which includes dark sections and image regions) and the text color on sand (822 characters).
- **Surface-3 `#000000`**: black behind the hero's bottom fade.
- **Ink-3 `#ffffff`**: white tags and call-out text (310 characters); the stylesheet also defines white at 20% (`#fff3`), 60% (`#fff9`) and 0%.
- **Ink-4 `#a8947480`**: half-opacity sand text (18 characters); variable `--_colors---base-0--50`.
- **Alert `#ffa800`, success `#1ba64b`, error `#e23d3d`**: status colors declared as `--_colors---additional--alert`, `--success` and `--error` in the stylesheet. They were not seen on the home page elements and come from the stylesheet only.

Two scales sit behind the brand: base-1000 (brown) at 100%, 50% (`#2c282480`) and 10% (`#2c28241a`), and base-0 (sand) at 100%, 50% and 10% (`#a894741a`). A faint `#0000001a` overlay is measured over imagery (1024 weight).

## Typography

Two KTF Metro faces carry the site: **KTF Metro Roman** (weight 400), a serif used for display and headings, and **KTF Metro Blueline** (weight 400), a wide sans used for body, nav and buttons. The stylesheet maps them to `--_fonts---font-display` ("KTF Metro Roman", "Times New Roman") and `--_fonts---font-body` ("KTF Metro Blueline", Arial). Everything is weight 400 and uppercase.

| Role | Family | Size / line-height | Tracking |
|---|---|---|---|
| display (large figure "10%") | KTF Metro Roman | 49.7778px / 49.7778px | -3.18578px |
| heading ("UP TO 10%") | KTF Metro Roman | 21.3333px / 21.3333px | -1.36533px |
| body, nav, buttons, labels | KTF Metro Blueline | 8.88889px / 14.2222px | 0.711111px |
| display-mobile | KTF Metro Roman | 40.625px / 40.625px | -2.6px |

The size ladder by characters: 8.88889px (3414), 14.2222px (515), 35.5556px (313), 17.7778px (45), 10.6667px (18), 21.3333px (12), 49.7778px (6), 85.3333px (3). The stylesheet defines a full scale in design pixels divided by a `--_special-units---scale-ratio` of 14.4: h1 144, h2 96, h3 72, h4 56, h5 40, h6 24; p1 32, p2 24, p3 20, p4 16, p5 12, p6 10. Heading tracking is -0.064em at every h level and paragraph tracking is 0.08em, with line-height from 83.333% (h1) to 166.667% (p5). Serif display runs tight and negative; sans labels run open and positive.

## Layout

The grid is defined by variables: `--_special-units---1-cell: 88px`, `--_special-units---1-c-cell: 120px`, a header height of `(24px × 2) + 28px`, and a 1800-unit maximum width. Spacing units in the stylesheet are 1, 2, 4, 6, 8, 12, 16, 20, 24, 28, 32, 40, 48, 72, 104, 136 and 176. Measured gaps: 14.2222px (48), 2px (44), 28.4444px (42), 21.3333px (32), 7.11111px (32), 42.6667px (16). Paddings: 10.6667px (45), 14.2222px (30), 21.3333px (9). The nav is 68px tall. Content is placed on a visible column system: hero text at the left margin, return figures at the right, facts in three columns along the bottom.

## Elevation & Depth

No box shadows were measured. A dark gradient at the bottom of the hero and the `#0000001a` overlay create depth over photography. The hero render itself provides depth; UI elements are flat fills or thin outlines (the circular call-out uses a thin white outline).

## Shapes

Radii measured: 35.5556px (15 elements), 50% (9), 17.7778px (8), 10.6667px (7), 12.4444px (3) and 1.77778px (3). The measured buttons are square (0px radius) while the header "CONSULTATION" control and the circular "INVEST IN SON DAVEN" call-out (156px by 156px, radius 50%) use round forms. The generated scale is xs 1.78px, sm 10.67px, md 12.44px, lg 17.78px, xl 35.56px, none 0px and pill 9999px.

## Components

- **button-primary and button-secondary**: `#a89474` fill, `#2c2824` text, KTF Metro Blueline 8.88889px uppercase with 0.711111px tracking, 10.6667px 21.3333px padding, 36px tall, square corners ("DOWNLOAD THE PDF PRESENTATION", 284px wide; "CONSULTATION", 140px wide).
- **link (round call-out)**: 156px circle, 50% radius, thin white outline, white 8.88889px uppercase text ("INVEST IN SON DAVEN"), 28.4444px 21.3333px padding.
- **nav**: 68px row of uppercase 8.88889px items in `#2c2824` (MENU, AEROTOUR, UA, CONSULTATION).
- **fact tag**: small white highlighted value tags in the hero facts.
- **stat figure**: light serif numerals ("10%", "30%") with an "UP TO" prefix and a small sans caption.

## Design System Architecture

No public design system or brand guideline link appeared on the page (the only brand-related link is the in-page anchor #about). The shipped stylesheet is a well-organized variable system: `--_colors---base-0--*`, `--_colors---base-1000--*`, `--_colors---white--*`, `--_colors---additional--*`; `--_fonts---h1` to `h6` and `p1` to `p6` with size, line-height and letter-spacing each; `--_units---u-*` spacing; `--_special-units---*` grid values; and easing curves `--ease`, `--ease-in`, `--ease-out`, `--ease-in-out` and `--ease-write`. All pixel sizes are rem values divided by a scale ratio (14.4 at 1280px), so the whole layout scales with viewport width. Reference: https://sondaven.com/en

## Do's and Don'ts

- Do set labels and buttons in KTF Metro Blueline 8.88889px uppercase with open tracking, and figures in KTF Metro Roman uppercase with tight negative tracking.
- Do use sand `#a89474` and brown `#2c2824` as the only brand pair; white appears only as small tags and call-out outlines.
- Do put circular outlined call-outs over photography.
- Don't add shadows or gradients to UI; none were measured.
- Don't use the stylesheet's status colors as decoration; they were not seen on the home page.
- Don't use weights other than 400; the only weight measured is 400.

## Responsive Behavior

The 390px mobile pass measured: the display figure drops to 40.625px (from 49.7778px) with -2.6px tracking; body text rises from 8.88889px to 10.1562px (16.25px line-height, 0.8125px tracking, 366px wide); the mobile size ladder is 10.1562px (3285 characters), 12.1875px (474), 24.375px (345), 8.88889px (247), 8.125px (172), 16.25px, 48.75px, 40.625px and 36.5625px. Because every size is rem divided by a ratio, the mobile sizes are not whole numbers. Navigation and column behavior on mobile were not measured.

## Iteration Guide

1. Start from sand `#a89474` with brown `#2c2824` text, then set dark photography sections with sand text.
2. Use KTF Metro Roman uppercase for figures and statements, KTF Metro Blueline uppercase for everything else.
3. Keep buttons square and 36px tall; use circles for the single hero call-out.
4. Express size in the h1 to p6 variable scale.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=son-daven --url=https://sondaven.com/en --force --no-motion` after changes.
