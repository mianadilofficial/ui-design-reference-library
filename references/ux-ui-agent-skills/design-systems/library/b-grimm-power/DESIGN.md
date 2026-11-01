---
version: alpha
name: B.Grimm Power
category: "Thai Brands"
description: "B.Grimm Power Public Company Limited English homepage (bgrimmpower.com/en/home): white canvas, Open Sans at 16px body and 80px weight-300 uppercase hero headline, #404040 text, orange #ff6727 brand accent with a 2px #ed713c header rule, outlined 4px-radius white buttons over dark photography and a #fafafa footer."
colors:
  canvas: "#ffffff"
  ink: "#404040"
  primary: "#ff6727"
  surface-dark: "#000000"
  surface-footer: "#fafafa"
  ink-muted: "#777777"
  ink-light: "#a5a5a5"
  ink-bootstrap: "#212529"
  hairline: "#dddddd"
  nav-border: "#ed713c"
typography:
  display:
    fontFamily: "\"Open Sans\", Kanit, sans-serif"
    fontSize: 80px
    fontWeight: 300
    lineHeight: 96px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Open Sans\", Kanit, sans-serif"
    fontSize: 30px
    fontWeight: 300
    lineHeight: 36px
    textTransform: uppercase
  body:
    fontFamily: "\"Open Sans\", Kanit, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Open Sans\", Kanit, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 30px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 16px 20px
    height: 54px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.nav-border}"
    boxShadow: rgba(178, 178, 178, 0.16) 0px 5px 15px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    padding: 45px 0px 0px
---

## Overview

B.Grimm Power Public Company Limited (page title "B.Grimm Power Public Company Limited") is a Thai independent power producer. The queue URL `https://www.bgrimmpower.com/` redirects to `/en/intro-page`, a memorial entry page (a gold-toned tribute for 13 October with a portrait, Thai text, and an "เข้าสู่หน้าหลัก | Enter Site" button). That interstitial is not the brand's working design: the first extraction measured only 34 visible elements in brown tones (`#5d3900`, `#894818`) and PSL Kanda Modern Extra Pro type. The "Enter Site" link (read from the page) points to `/en/home`, so the real homepage was measured as an extra page (`b-grimm-power--home`, 363 visible elements) and every token below comes from it. The memorial tokens were dropped.

The homepage opens with a dark video hero titled "EMPOWERING THE WORLD" in huge white light-weight capitals, a "VIEW FULL VIDEO" outlined button, then a white "Who We Are" section (large light-weight heading, a lead sentence in dark text, a paragraph in gray, three statistic labels and a "LEARN MORE" outlined button beside two photographs), then a full-bleed aerial photograph "Smart Energy Solutions" with white statistics ("Projects in Operation", "Projects in Development"). The header is a white bar with the logo (orange roof-shaped mark and "B.GRIMM, SINCE 1878"), twelve small uppercase links and a language selector. Voice is plain corporate English with a sustainability tagline, "Empowering the World Compassionately".

Two announcement modals (shareholder site-visit and an invitation to shareholders, with a close icon) and a cookie icon sit over the page in the capture. They are overlays and promotions, not brand UI, and are not documented as components.

## Colors

- **Canvas `#ffffff`** is the page and header background; **footer surface `#fafafa`** (area weight 558) is the footer; **`#000000`** is the dominant area weight (1,024), the dark video hero.
- **Ink `#404040`** is the most-read text color (1,294 characters), used for body and navigation; **muted `#777777`** (500 characters) is lead paragraph gray; **`#a5a5a5`** (93) a light gray; `#212529` (19) is Bootstrap's body color.
- **Primary orange `#ff6727`** (80 characters of text) is the brand accent and the second most-frequent stylesheet color (269 occurrences). **Nav border `#ed713c`** is the 2px solid line under the header. The logo mark is orange in the capture.
- **Hairline `#dddddd`** is the border color of the most bordered elements (8).

Stylesheet colors such as `#c67f00`, `#ffdf75` and `#c98407` (gold tones, the memorial page palette's family) appear in the corpus; they were not isolated on the homepage and are not declared. Bootstrap 5 root variables (`--bs-primary: #0d6efd`, `--bs-orange: #fd7e14`, `--bs-yellow: #ffc107`) are framework defaults, not brand colors.

## Typography

**Open Sans** (weights 300, 400, 600 and 700 loaded) with **Kanit** as Thai fallback and `sans-serif`; the family covers all 2,437 measured homepage characters. A custom icon face `bgrim` and Font Awesome 5 Pro supply icons. The memorial entry page instead used PSL Kanda Modern Extra Pro, which is not used on the homepage.

- **Display** 80px/300/96px uppercase (hero h1), mobile 30px/36px.
- **Body** 16px/400/24px; the document body is 14px/400/21px uppercase (header container).
- **Button** 12px/600/18px uppercase.
- Other measured sizes: 70px (75 characters, section headings such as "Who We Are" and "Smart Energy Solutions"), 22px (364), 12px, 14px, 10px, 30px, 48px and 35px. Weights: 400 (1,683 characters), 600 (465), 700 (194), 300 (95). No letter-spacing was recorded.

### Font substitutes

Open Sans and Kanit are open Google Fonts; `bgrim` is the site's own icon font.

## Layout

The page is 1,280px wide by 5,145px tall. The header is 100px high with twelve visible links on desktop (`headerLinksVisible: 12`). Content is a container with a two-column "Who We Are" row (text 509px wide for the paragraph; photographs at right), up to three card columns (`maxCardColumns: 3`), and full-bleed photographic bands. Spacing values: 3, 4, 7, 8, 10, 12, 15, 16, 20 and 30px; the footer pads 45px at top and is 436px tall, containing the address block (Dr. Gerhard Link Building, Krungthepkreetha road).

## Elevation & Depth

Shadows are light gray, low opacity: the header `rgba(178, 178, 178, 0.16) 0px 5px 15px 0px`, a second `rgba(178, 178, 178, 0.16) 0px 5px 20px 0px` and `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px`, each on one element. Dark photographic bands against white sections provide the main contrast; the orange 2px header rule marks the top edge.

## Shapes

Radii: 4px on nine elements (the outlined buttons), 8px on one and 999px on one pill. Photographs are rectangular. The memorial entry page's 100px/999px radii belong to its "Enter Site" pill and are not used on the homepage tokens.

## Components

- **Outlined button.** "VIEW FULL VIDEO": transparent over the dark hero, white 12px/600 uppercase label, 1px solid white border, radius 4px, padding 16px 20px, 212x54px. "LEARN MORE" on the white section is the same shape with dark text and a `#dddddd` hairline.
- **Header.** White, 100px high, `#404040` text at 14px uppercase, 2px solid `#ed713c` border and the soft gray shadow; a home icon starts the link row.
- **Navigation links.** 16px/400 `#404040` for sub-links; no hover change was recorded (hover list empty).
- **Footer.** `#fafafa` background, `#404040` text 14px, 45px top padding.
- **Not documented as brand UI:** announcement modals, cookie button, the memorial entry page.

## Design System Architecture

No public design system or brand guidelines were found: the entry page and homepage were opened and link only to corporate content, and no search was run. The de-facto system is a Bootstrap 5 site with an in-house icon font (`bgrim`). The root variables are the Bootstrap defaults (`--bs-*`, `--breakpoint-xl: 1200px`); the brand layer is the orange `#ff6727`, the 2px `#ed713c` header rule, Open Sans light display type and white-on-dark outlined buttons. Source: https://www.bgrimmpower.com/en/home and https://www.bgrimmpower.com/en/intro-page as measured by the repository extractor.

## Do's and Don'ts

- Do set hero headlines in Open Sans 300 uppercase at 80px, white on dark photography.
- Do use `#404040` text on white, `#777777` for lead paragraphs, and orange `#ff6727` sparingly for emphasis.
- Do use 4px-radius outlined buttons with 12px/600 uppercase labels.
- Do use a 2px `#ed713c` rule under a white header.
- Don't use Bootstrap's blue or orange as brand colors.
- Don't adopt the memorial page's brown and gold palette or its PSL Kanda Modern Extra Pro type for the homepage.
- Don't present announcement modals or cookie icons as components.

## Responsive Behavior

Measured on a 390px mobile pass of the homepage: the h1 falls from 80px to 30px (line-height 36px, 366px wide box); body text stays 16px/24px; the header stays 100px high with 14px uppercase text and the same shadow and `#ed713c` border. Header links visible fall from 12 to 5, a menu toggle with the label "Toggle navigation" is detected (`menuToggleVisible: true`), and the maximum card columns fall from 3 to 2. Other breakpoints are not measured.

## Iteration Guide

1. Use the tokens above; they were measured on `/en/home`, not on the memorial entry page.
2. Compose: white header with `#ed713c` rule, dark photographic hero with 80px light uppercase headline, white sections with `#404040` text.
3. Use outlined 4px buttons; keep orange `#ff6727` for emphasis only.
4. If the extractor lands on `/en/intro-page` again, measure `/en/home` as an extra page with `--allow-spa-404`.
5. Run `node web/scripts/verify-designs.mjs --slug=b-grimm-power` until it passes.
