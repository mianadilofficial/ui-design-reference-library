---
version: alpha
name: CDG Group
category: "Thai Brands"
description: "CDG Group (cdg.co.th/website), Thai technology group site: white canvas, deep green #16351a text and footer, light cyan #bbe9f9 labels over photography, Aktiv Grotesk Ex uppercase headings (72px, 40px) with Anantason Reno Expanded Thai body, 8px-radius photo tiles."
colors:
  canvas: "#ffffff"
  ink: "#16351a"
  primary: "#bbe9f9"
  text-light: "#f1f1f1"
typography:
  display:
    fontFamily: "\"Aktiv Grotesk Ex\", \"Anantason Reno Expanded\""
    fontSize: 72px
    fontWeight: 500
    lineHeight: 86px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Aktiv Grotesk Ex\", \"Anantason Reno Expanded\""
    fontSize: 32px
    fontWeight: 500
    lineHeight: 45px
    textTransform: uppercase
  heading:
    fontFamily: "\"Aktiv Grotesk Ex\", \"Anantason Reno Expanded\""
    fontSize: 40px
    fontWeight: 500
    lineHeight: 60px
    textTransform: uppercase
  heading-mobile:
    fontFamily: "\"Aktiv Grotesk Ex\", \"Anantason Reno Expanded\""
    fontSize: 24px
    fontWeight: 500
    lineHeight: 34px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Aktiv Grotesk Ex\", \"Anantason Reno Expanded\""
    fontSize: 24px
    fontWeight: 300
    lineHeight: 36px
  body:
    fontFamily: "\"Anantason Reno Expanded\""
    fontSize: 36px
    fontWeight: 300
    lineHeight: 54px
  body-mobile:
    fontFamily: "\"Anantason Reno Expanded\""
    fontSize: 20px
    fontWeight: 300
    lineHeight: 32px
  nav:
    fontFamily: "\"Aktiv Grotesk Ex\", \"Anantason Reno Expanded\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: 0.8px
    textTransform: uppercase
  link:
    fontFamily: "\"Anantason Reno Expanded\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
rounded:
  xs: 7px
  sm: 8px
spacing:
  s1: 10px
  s2: 15px
  s3: 16px
  s4: 20px
  s5: 30px
  s6: 32px
  s7: 40px
  s8: 64px
  s9: 110px
components:
  nav:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  photo-tile:
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.ink}"
---

## Overview

The CDG Group site (https://www.cdg.co.th, which resolves to https://www.cdg.co.th/website/, title "CDG - Website", language th) is a corporate site for a technology group, written primarily in Thai with English headings. The measured page is 1280px wide and 3113px tall with 230 visible elements. The hero line is "TECHNOLOGY FOR A BETTER SOCIETY" with the Thai line "เทคโนโลยีเพื่อคุณภาพสังคมที่ดีขึ้น" beneath it, both set in light cyan (`#bbe9f9`) over a dark photographic band. The extraction records the h1 at 72px/86px in uppercase.

The capture also shows a temporary memorial tribute panel (a framed portrait with Thai condolence text and a thin ornamental rule) laid over the top of the page, with the header menu dimmed behind it. That panel is not part of the brand system, so its colors, radius and glow are excluded from the tokens below; the home page was re-measured once with the batch extractor after this was noticed.

Below the hero the page is a clean white section. A green uppercase heading "WHO WE ARE" sits above a large light-weight Thai paragraph ("เราจะนำเทคโนโลยีรอบด้านมาแก้ปัญหาทุกด้านในวงกว้าง เพื่อคุณภาพชีวิตที่ดีของทุกคน"), and beside and under it runs a two-column mosaic of six photo tiles: About (เกี่ยวกับเรา), Industries (กลุ่มอุตสาหกรรม), Contact (ติดต่อเรา) in the left column and Our Solutions (โซลูชัน), News & Events (ข่าวและกิจกรรม), Careers (ร่วมงานกับเรา) in the right column. Each tile is a blue-toned photograph (glass towers, silhouettes, a laptop with network icons, a swirl graphic) with an uppercase English label and a Thai subtitle in light cyan at the lower left. The page ends in a deep green footer with the CDG wordmark, four circular icons, link columns (Company, Careers) and a copyright line.

The tone is institutional and optimistic: short English labels paired with Thai translations, abstract technology imagery and a restrained green, white and ice-blue palette.

## Colors

The page is white (`#ffffff`) with deep green and light cyan. Measured text colors by character count: `#bbe9f9` (454), `#16351a` (89) and `#f1f1f1` (2). Measured backgrounds by area: `#000000` (1024), `#ffffff` (773) and `#16351a` (596). The `#000000` area sits behind the tribute panel in the capture and is not tokenised.

- **Canvas `#ffffff`**: the reading section background.
- **Ink `#16351a`**: the heading and paragraph color on white ("WHO WE ARE", the Thai paragraph), the link color, and the footer fill (596 units of area).
- **Primary `#bbe9f9`**: the light cyan used for the h1, the Thai subline, the menu items and the tile labels over dark or photographic backgrounds; it is also the one measured border color. No filled button or CTA was detected, so this accent is a text color, not a button fill.
- **Text light `#f1f1f1`**: 2 characters of near-white text.

The CSS root also carries WordPress and page-builder defaults (`--wp--preset--color--*`, `--wp--preset--color--colibri-color-1` `#03a9f4` and others, `--swiper-theme-color: #007aff`); none of those colors appears in the measured text or backgrounds, so they are not brand colors. The tile photographs in the capture are blue-toned, and no extra UI hue was measured.

## Typography

Two self-hosted families carry the page: **Aktiv Grotesk Ex** (396 measured characters; Light 300, Regular 400 and Medium 500 loaded) for English headings and labels, and **Anantason Reno Expanded** (149 characters; Light 300, Regular 400, Medium 500 and a 400 italic loaded) for Thai text. The font files are served from the site's own `/website/wp-content/uploads/fonts/` path (`AktivGroteskEx-Light.woff2`, `-Regular`, `-Medium`; `AnantasonReno-ExpandedLight.woff2`, `-Expanded`, `-ExpandedMedium`, `-ExpandedItalic`). The display stack is `"Aktiv Grotesk Ex", "Anantason Reno Expanded"`, so Thai glyphs fall through to the second family.

- **Display (h1):** 72px on 86px, weight 500, uppercase, light cyan. At 390px: 32px on 45px.
- **Heading (h2 "WHO WE ARE"):** 40px on 60px, weight 500, uppercase, deep green. At 390px: 24px on 34px.
- **Subheading (h3, the Thai hero line):** 24px on 36px, weight 300.
- **Body (the Thai introduction):** Anantason Reno Expanded 300, 36px on 54px, deep green. At 390px: 20px on 32px.
- **Navigation:** Aktiv Grotesk Ex 400, 16px on 26px, letter-spacing 0.8px, uppercase (69 characters measured with 16px/0.8px).
- **Link:** Anantason Reno Expanded 400, 16px on 25.6px.

Measured sizes by character count: 16px (185), 24px (104), 36px (79), 14px (68), 28px (55), 72px (30), 22px (14), 40px (10). Weights: 400 (253), 300 (183), 500 (109). The Thai text is set in a face named "Expanded" at a light weight and a large size, and the Latin family name ends in "Ex".

Font substitutes: both families are declared with no further fallbacks beyond each other in the measured stack. If they are unavailable, use an extended grotesque for Latin text and a Thai face with light weight and generous line-height (1.5) for Thai.

## Layout

The page is a single-column hero, a two-column content block and a footer. The extractor's band analysis puts the content between x = 65px and x = 1215px (a 1150px column; the h1 and h3 measure 1150px wide). The "WHO WE ARE" block and the Thai paragraph measure 560px wide; the tile grid has two columns (the layout probe recorded a maximum of 2 card columns). The tiles are of different heights in the capture, staggered between the left and right columns.

Measured gaps are 32px (12 occurrences), 40px (3), 10px (2), 20px (1) and 30px (1); measured paddings are 64px (2) and 110px, 10px, 40px, 15px and 16px (1 each). The spacing tokens list 10px to 110px. The extractor's layout probe recorded `headerLinksVisible: 0` and `menuToggleVisible: true` with the toggle label "About", so the header menu is exposed through a toggle in the probe, while the capture shows the menu labels dimmed behind the tribute panel.

The declared breakpoints are `--guten-screen-sm-min: 768px`, `--guten-screen-md-min: 1025px`, `--guten-screen-sm-max: 1024px` and `--guten-screen-xs-max: 767px`; the stylesheet corpus also uses media queries at min-width 768px (88 times), max-width 767px (57), min-width 1024px (51), max-width 1024px (39), min-width 1200px (27) and max-width 425px (26).

## Elevation & Depth

The reading section is flat. The measured shadows are few: the only shadow on a visible element is `rgb(100, 97, 97) 0px 0px 8px 3px` (1 occurrence), which matches the glow around the tribute panel in the capture and is excluded from the brand system. The CSS corpus lists plugin shadows (`0 0 3px 0 rgba(189,189,189,.4), 0 2px 3px 0 rgba(189,189,189,.3), 0 2px 3px rgba(0,0,0,.08)` 14 times and `0 0 1px 1px rgba(0,0,0,.1)` 12 times), none measured on the visible home page elements.

Depth comes from photography: blue-toned images with a darker gradient toward the bottom where the labels sit, the dark photographic hero band and the deep green footer block against the white section. The tiles show no outline.

## Shapes

Photo tiles have gently rounded corners: 8px is measured 6 times, matching the six tiles in the capture, and 7px once on an element that is not named in the record. The CSS corpus lists 4px, 3px, 5px, 2px, 10px, 50px, 9999px and 6px radii from plugin styles. The social icons in the footer are circles with thin outlines. The header's search control is an icon without a container.

Layout shapes are rectangles: the full-width hero band, the green footer and the tiles. The thin horizontal rule above the footer copyright line is the only divider in the capture.

## Components

**Navigation.** Seven uppercase items (About, Our Solutions, Industries, Sustainability, News & Events, Careers, Contact), a TH | EN language toggle and a search icon, in light cyan, Aktiv Grotesk Ex 400 16px with 0.8px tracking. On mobile (390px) the nav element measures 390px by 32px with 0px 16px padding and no recorded text. The links go to `/website/about/`, `/website/our-solution/`, `/website/industries/`, `/website/about/sustainability/`, `/website/news-events/`, `/careers` and `/website/contact/`.

**Photo tile.** A photograph with 8px corners, an uppercase English label in light cyan over a Thai subtitle, bottom-left aligned. Six tiles link to About, Industries, Contact, Our Solutions, News & Events and Careers.

**Text link.** Deep green Anantason Reno Expanded 400 at 16px on 25.6px. No hover record was captured.

**Footer.** Deep green `#16351a` background (the extractor found no footer role, so its text colors are not measured): the CDG wordmark, four circular icons (the page links Facebook, LinkedIn and two mailboxes), a "COMPANY" column (About, Industries, Careers, Our Solutions, News & Events, Contact), a "CAREERS" column (Explore & Apply, Student & Internship, CSR, Life at CDG, Blogs, FAQ), a thin rule, "2026 CDG Group All Rights Reserved." and "Terms & Conditions | Privacy Policy".

No filled buttons, inputs or cards with borders were detected; the extractor found no primary CTA, nav role, input or footer role on this page.

## Design System Architecture

No public design system, brand guidelines or press kit is published: the home page (opened at https://www.cdg.co.th/website/) links only to its section pages, social profiles, two contact mailboxes, career pages, Terms & Conditions PDFs and the Privacy Policy. The de-facto system is a WordPress build. Variables on the root are WordPress block presets (`--wp--preset--font-size--huge: 42px`, `--wp--preset--font-size--normal: 16px`, the default preset palette and gradients), page-builder breakpoint variables (`--guten-screen-*`) and a Swiper theme color. The brand itself lives in the self-hosted font files and in the section CSS, not in named brand variables.

Because there are no brand variables, the consistent decisions are the repeated measured values: 16px/0.8px uppercase navigation, 8px tile radius, `#16351a` for dark text and footer, `#bbe9f9` for text on dark imagery, and the two font families.

## Do's and Don'ts

**Do**
- Pair every English uppercase label with its Thai translation, with the Thai line set smaller and lighter.
- Use light cyan `#bbe9f9` for labels over dark or photographic backgrounds and deep green `#16351a` on white and for the footer.
- Set English headings in Aktiv Grotesk Ex 500 uppercase and Thai text in Anantason Reno Expanded 300.
- Use blue-toned technology photography in 8px-radius tiles.
- Keep the white reading section flat, without borders or shadows.

**Don't**
- Don't carry the memorial tribute panel, its glow or its black backdrop into the design tokens.
- Don't use WordPress preset colors or the Swiper blue as brand colors.
- Don't add filled buttons; none were measured on the home page.
- Don't set Thai in a condensed face; the measured Thai text is an expanded face at 300 to 500 weight.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: the h1 is 32px on 45px (72px on 86px at desktop) and 342px wide and 135px tall; the h2 "WHO WE ARE" is 24px on 34px (40px on 60px) and 350px wide; the Thai body paragraph is 20px on 32px (36px on 54px) in a 350px-wide, 96px-tall box; the nav element is 390px by 32px with padding 0px 16px and no text recorded; no CTA was detected.

Measured sizes by character count at 390px: 16px (186), 18px (156), 20px (79), 14px (68), 32px (29), 22px (14), 24px (10). The stylesheets declare breakpoints at 768px, 1024px, 1200px and 425px (see Layout). The tile grid column count, the footer arrangement and the navigation toggle at 390px were not measured.

## Iteration Guide

1. Start from canvas `#ffffff`, ink `#16351a` and the light-cyan accent `#bbe9f9`; use `#16351a` for the footer fill.
2. Set English headings in Aktiv Grotesk Ex 500 uppercase (72px/86px display, 40px/60px heading; 32px/45px and 24px/34px at 390px) and Thai paragraphs in Anantason Reno Expanded 300 (36px/54px; 20px/32px at 390px).
3. Build the navigation as seven uppercase items at 16px with 0.8px tracking in light cyan over the dark hero band, with a TH | EN toggle.
4. Lay out the content as a two-column mosaic of 8px-radius photo tiles with a light-cyan English label and a Thai subtitle at the lower left.
5. Close with a deep green footer: wordmark, social icons, two link columns, a thin rule and a copyright line.
6. Keep surfaces flat and imagery blue-toned; avoid adding new accent hues.
