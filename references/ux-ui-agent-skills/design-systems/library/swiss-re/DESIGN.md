---
version: alpha
name: "Swiss Re"
category: "Banking & Insurance"
description: "Swiss Re Group home page (swissre.com) measured live: a white corporate page with slate #3c4150 text in Swiss Re Sans at weight 200 and 22px, a single teal #006e73 accent on outlined capsule buttons, a black and steel-blue lattice hero, and wide soft shadows (0 10px 60px at 20% black) under overlapping white cards."
colors:
  canvas: "#ffffff"
  ink: "#3c4150"
  primary: "#006e73"
  surface-black: "#000000"
  hairline-grey: "#d4d4d4"
  ink-muted: "#636363"
typography:
  display:
    fontFamily: >-
      "Swiss Re Sans", "Univers LT", Univers, "Helvetica Neue", Helvetica, Gulim, "Malgun Gothic", "Apple Gothic Neo", "Noto Sans KR", "Microsoft YaHei UI", "Microsoft JhengHei", "PingFang SC",
      "PingFang TC", "Yu Gothic", Meiryo, "Hiragino Sans", sans-serif
    fontSize: 30px
    fontWeight: 200
    lineHeight: 39px
  heading:
    fontFamily: >-
      "Swiss Re Sans", "Univers LT", Univers, "Helvetica Neue", Helvetica, Gulim, "Malgun Gothic", "Apple Gothic Neo", "Noto Sans KR", "Microsoft YaHei UI", "Microsoft JhengHei", "PingFang SC",
      "PingFang TC", "Yu Gothic", Meiryo, "Hiragino Sans", sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
    letterSpacing: 1.5px
    textTransform: uppercase
  subheading:
    fontFamily: >-
      "Swiss Re Sans", "Univers LT", Univers, "Helvetica Neue", Helvetica, Gulim, "Malgun Gothic", "Apple Gothic Neo", "Noto Sans KR", "Microsoft YaHei UI", "Microsoft JhengHei", "PingFang SC",
      "PingFang TC", "Yu Gothic", Meiryo, "Hiragino Sans", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: 0.334619px
  body:
    fontFamily: >-
      "Swiss Re Sans", "Univers LT", Univers, "Helvetica Neue", Helvetica, Gulim, "Malgun Gothic", "Apple Gothic Neo", "Noto Sans KR", "Microsoft YaHei UI", "Microsoft JhengHei", "PingFang SC",
      "PingFang TC", "Yu Gothic", Meiryo, "Hiragino Sans", sans-serif
    fontSize: 22px
    fontWeight: 200
    lineHeight: 33px
rounded:
  xs: 4px
  sm: 13.3px
  pill: 9999px
spacing:
  s1: 4.2px
  s2: 5px
  s3: 10px
  s4: 11.55px
  s5: 12px
  s6: 15px
  s7: 17px
  s8: 20px
  s9: 30px
  s10: 31px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    padding: 17px 0px
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 3, 1)
  nav:
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.hairline-grey}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 394.172px 0px 0px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 10px 60px 0px
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline-grey}"
---

## Overview

The measured page is swissre.com, titled "Swiss Re Group | Swiss Re". It is the reinsurer's own corporate home page, 5,825px tall at 1280px, in English. The queue flagged it as potentially blocked, but the extraction returned a full page (4,899 characters of text), so it was used.

A white rounded navigation panel floats over the hero. Its top strip is a grey tab bar with the entities Swiss Re Group (the active tab, white), Swiss Re Institute, Reinsurance, Corporate Solutions and Swiss Re Foundation. Its lower row holds the green Swiss Re logo and seven links: Risk Knowledge, Sustainability, About us, Our business, Investors, Media and Careers, plus a globe icon and a search icon separated by a hairline. The hero is a dark steel-blue photograph of a lattice of nodes and beams. At the left, over a gradient, sit a small label "Collaboration", the title "The age of interconnected risks", a subtitle and a white capsule button "Read more". A three-column ticker at the bottom of the hero lists "Publication sigma 4/2026", "Collaboration The age of interconnected risks" and "Article The Great Miami Hurricane at 100".

A large white card with a big soft shadow overlaps the bottom of the hero and splits into two columns: TOOLBOX ("Client tools and services" with a teal outlined capsule button) and SHARE PRICE PERFORMANCE ("CHF 142.30", a small grey change chip "-1.01", the date "08 Oct 2026, 17:30 CEST" and "Explore Investor Relations"). Below, an "OUR GROUP" label sits beside a long statement paragraph. The "Our businesses" section centers four columns separated by vertical hairlines (Property & Casualty Reinsurance, Life & Health Reinsurance, Commercial Insurance, Risk Data Solutions), each with a short blurb and a "Discover" capsule button. "LATEST PRESS RELEASES" closes the captured part with dated rows (08 Oct 2026) and bold headlines.

## Colors

The palette is restrained. `canvas` is white (#ffffff, weight 1773). `surface-black` (#000000, weight 1041) is the hero ground behind the photograph. `hairline-grey` (#d4d4d4, weight 818) is a grey fill and the border color (measured on 4 elements, and the card token's fill and the footer border). #f9f9fa (weight 208) is a very pale grey and #ecececb3 (weight 49) is a translucent light grey, as in the change chip. `primary` (#006e73) is a deep teal used for button labels and outlines (332 characters).

Text: `ink` (#3c4150, 3993 characters) is a blue-slate and the default for body, headings and navigation; `ink-muted` (#636363, 304 characters) is for small labels such as OUR GROUP and TOOLBOX; white (270) is on the hero. There is no saturated fill color in the measured data; the teal appears only as text and outlines, so `on-primary` is not declared.

## Typography

One family, "Swiss Re Sans" (4,899 characters), with a long fallback list: "Univers LT", Univers, "Helvetica Neue", Helvetica, then Korean, Chinese and Japanese system fonts (Gulim, "Malgun Gothic", "Apple Gothic Neo", "Noto Sans KR", "Microsoft YaHei UI", "Microsoft JhengHei", "PingFang SC", "PingFang TC", "Yu Gothic", Meiryo, "Hiragino Sans") and sans-serif. Loaded faces are Swiss Re Sans regular, 200 and bold.

The defining choice is the light weight: weight 200 covers 3034 characters, 400 covers 894 and 700 covers 971. `body` is 22px, weight 200, on 33px (2856 characters, the most-used size). `display` is 30px, weight 200, on 39px (the extractor read the hero ticker label "sigma 4/2026" as the h1). `heading` is 15px, regular, uppercase, with 1.5px tracking on 22.5px, used for small section labels. `subheading` is 14px on 19.6px with 0.334619px tracking. Other sizes measured: 18px (805 characters), 16px (572, with 0.152969px tracking) and 50px (66). The headline "Our businesses" and the hero title are set large and light. Bold is reserved for press-release headlines and the first navigation row.

## Layout

The page is a centered 1280px layout with generous side margins: the hero text starts well inside the left edge, and the overlapping card is inset from both edges. Sections are stacked with large vertical gaps. The "Our businesses" row is four equal columns with 1px vertical hairlines, centered text and capsule buttons at the foot of each column. The press list uses a left date column and a right headline column, divided by horizontal hairlines. Spacing values measured: 4.2, 5, 10, 11.55, 12, 15, 17, 20, 30 and 31px; the card token's top padding is 394.172px (the hero overlap area). No container gaps were recorded (`gaps` is empty) and `rootVars` is empty.

## Elevation & Depth

Depth is the one place the page is expressive. `rgba(0, 0, 0, 0.2) 0px 10px 60px 0px` is measured on 8 elements (the white panels in the capture float visibly above the hero) and `rgba(0, 0, 0, 0.1) 0px 20px 70px 0px` on one. These are long, soft, downward shadows that make white panels float above the hero. Everything else is flat on white.

## Shapes

`xs` 4px is the most common radius (10 elements, including the card). `sm` 13.3px was measured on 2 elements. 100% and 50% (7 elements together) are circular elements (element roles were not recorded), and `4px 4px 0px 0px` and `0px 0px 4px 4px` shape the nav tab strip and panel. The "Read more", "Explore..." and "Discover" buttons render as fully rounded capsules in the capture, with a 1px teal outline and teal text; the white hero button has the same shape. `pill` 9999px is declared for this reason.

## Components

- **link**: white 14px text with 17px vertical padding on the hero ticker.
- **nav**: #3c4150 text, white panel with the large soft shadow and 4px corners.
- **card**: #d4d4d4 fill as generated, #3c4150 text, 4px radius and the 60px soft shadow. In the capture the visible overlapping card is white.
- **footer**: #3c4150 text with a #d4d4d4 border.
- **Capsule button**: transparent fill, teal 14px label, 1px teal outline (and a white fill with teal text over the hero). The extractor detected no primary button, so no `button-primary` token is declared.
- **Eyebrow label**: 15px uppercase with 1.5px tracking in grey, above sections.

## Design System Architecture

No public design-system documentation was opened, and no CSS custom properties are exposed (`rootVars` is empty). The system is read from computed styles: Swiss Re Sans with a light 200 weight, slate #3c4150, a teal accent, and a few shared radii and shadows. No tokens repository or brand-guideline page was consulted.

## Do's and Don'ts

- Do set body copy in Swiss Re Sans at weight 200 and 22px in slate #3c4150.
- Do use teal (#006e73) only for text and outlines on capsule buttons.
- Do use uppercase 15px labels with 1.5px tracking for eyebrows.
- Do float white panels over photography with the soft 60px shadow.
- Don't fill buttons with saturated color; none was measured.
- Don't use heavy weights for large headings.
- Don't add colors beyond the slate, grey, teal and black listed above.

## Responsive Behavior

Measured at 390px: the mobile h1 text is "The Great Miami Hurricane at 100" (the carousel had advanced). The mobile size census is led by 20px (1917 characters) and 18px (1725), then 16px (541), 14px (181), 22px (120), 30px (114) and 15px (72). Breakpoints, panel behavior and column stacking were not measured.

## Iteration Guide

1. Start with a dark photographic hero and a floating white navigation panel with an entity tab strip.
2. Overlap a white card with a 0 10px 60px, 20% black shadow, in two hairline-divided columns.
3. Set copy at weight 200, 22px in #3c4150; use 15px uppercase eyebrows.
4. Use teal-outlined capsule buttons.
5. Divide multi-column rows with 1px #d4d4d4 lines rather than boxes.
