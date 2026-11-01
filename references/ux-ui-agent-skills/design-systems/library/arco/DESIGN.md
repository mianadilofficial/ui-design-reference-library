---
version: alpha
name: ByteDance
category: "Design Systems"
description: "ByteDance corporate site: solid blue #3c8cff navigation, near-black #333333 text on white, DouyinSans-Bold display (52px, falls back to a serif in capture) with DM Sans 22px body, 22px card radius, circular portraits and soft gradient circles."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#3c8cff"
  link: "#569cfe"
  ink-muted: "#848484"
  ink-muted-2: "#828282"
  hairline: "#ffffff80"
typography:
  display:
    fontFamily: DouyinSans-Bold
    fontSize: 52px
    fontWeight: 500
    lineHeight: 65px
  display-mobile:
    fontFamily: DouyinSans-Bold, -apple-system, "Sofia Pro", "Microsoft YaHei", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 56px
  body:
    fontFamily: "\"DM Sans\", Gilroy, -apple-system, \"Sofia Pro\", \"Microsoft YaHei\", Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28.6px
rounded:
  xs: 2px
  sm: 18px
  md: 22px
  pill: 9999px
spacing:
  s1: 10px
  s2: 15px
  s3: 39px
  s4: 43px
  s5: 102.4px
  s6: 115.2px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.md}"
    padding: 181px 42px 0px 39px
---

## Overview

This entry documents the ByteDance corporate website at https://www.bytedance.com/en, which is the page the queue assigned to the slug `arco`. The queue pairs it with the Arco Design documentation site (https://arco.design), but the measured CSS of the corporate site contains no Arco class prefixes, variables or package names, so no value in this file comes from Arco. Arco is described only in the Design System Architecture section.

The page is a short corporate profile. The top is a solid blue navigation bar ({colors.primary}) carrying the ByteDance logo on the left and three text links on the right: "About Us", "Press", "Join Us". Under it, a full-width photograph of an office tower carrying the ByteDance sign fills a blue-sky hero, and a white card with one large rounded corner overlaps the top-left, labelled "Our Mission" with the line "Inspire Creativity, Enrich Life". Below, the page rests on a near-white field with large soft gradient circles in blue, yellow and mint behind the content. A "Culture" block pairs a short paragraph about the company's "ByteStyles" values with a white card holding a photograph of three colleagues around a laptop, a title ("Always Day 1") and four bullet lines, with left and right chevrons to step through the values. A "Board Members" block shows circular headshots with names and titles (Rubo Liang, Chairman of the Board, and four other board members). The page also lists a company history and contact addresses.

The voice is declarative and corporate: short value statements, imperative bullets ("Reject complacency." "Stay open and humble."), and no marketing superlatives.

## Colors

The palette is three working colors on a white field. `canvas` is {colors.canvas}; the capture's dominant pixel color of the lower page is a very slightly warmer off-white (#fdfdfd), and the white cards sit on it. `ink` is {colors.ink}, used for essentially all text. `primary` is the bright blue {colors.primary}: it fills the navigation bar and appears as the pagination and chevron color. The slightly lighter blue `link` {colors.link} is measured on link text, while `ink-muted` {colors.ink-muted} and `ink-muted-2` {colors.ink-muted-2} are two near-identical grays used for secondary text such as the "Our Mission" label and board titles. `hairline` {colors.hairline} is a half-transparent white used as a border on translucent controls.

Decorative gradient circles (blue, yellow, mint) sit behind the Culture and Board sections. Their exact fills are gradients and are not captured as tokens, so they are described, not specified. The hero blue in the photograph is part of the image, not a UI token.

## Typography

Two families are declared. Headings use `DouyinSans-Bold`: the measured h1 "Inspire Creativity, Enrich Life" is 52px / 65px line height at weight 500, and section titles such as "Culture" are 24px / 56px at weight 700 in the 390px mobile capture. The loaded-font list for the page contains Gilroy, Sofia Pro and DM Sans only, and in the capture the mission line renders in a serif face, which indicates the declared display face did not load there and the headline fell back to the browser's serif. Treat the serif mission line as what the capture shows, not as a designed pairing.

Body copy is DM Sans (with Gilroy, -apple-system, Sofia Pro, Microsoft YaHei, Helvetica, Arial as fallbacks) at 22px / 28.6px weight 400. Other sizes measured by character count are 20px, 18px, 30px, 16px, 48px and 24px; weights used are 400, 500 and 700. Board names render in the same serif fallback while the "Culture" and "Board Members" headings render in a geometric sans, which matches the Gilroy/DM Sans family.

### Font Substitutes

DouyinSans-Bold is proprietary and was not among the loaded fonts. For a faithful rebuild use DM Sans at weight 500 to 700 for headings. Gilroy and Sofia Pro are commercial; DM Sans is an open-source substitute.

## Layout

The page is a vertical stack of full-width bands inside a centered column. The nav bar spans the full width with logo and links inset roughly 90px from each edge at the 960px-wide capture scale. The hero is a photograph about 490px tall at that scale. Content bands use a two-column pattern: heading and paragraph on the left, a card on the right (Culture), then a three-column grid of circular portraits (Board Members) wrapping to a second row. Measured spacing values are large and irregular (`s1` 10px up to `s6` 115.2px) because the page positions content with generous padding, such as `padding: 181px 42px 0px 39px` on the culture card container.

## Elevation & Depth

Depth is minimal. The one measured shadow is `rgba(0, 0, 0, 0.15) 0px 4px 5px 0px`, a soft downward shadow used on a small number of elements. The white cards are separated from the field mostly by contrast and by the colored gradient circles behind them, not by borders or heavy shadows.

## Shapes

Radii measured on the page: 2px, 18px, 22px, a 51% radius (circular portraits), and a pill value of 9999px. The hero mission card has one very large rounded corner at its bottom-right, giving a distinctive leaf shape; the culture card has a gentle corner radius of 22px (`rounded.md`) and the portraits are circles. Corners are generously rounded where they carry imagery and nearly square (2px) for small details.

## Components

**Navigation bar.** Solid {colors.primary} bar, white logo and white 14px-class text links; no visible button chrome.

**Mission card.** White rectangle anchored top-left over the hero with a single large rounded corner; small gray label "Our Mission" above a larger serif-rendered line.

**Culture card.** White card, 22px radius, photograph on top, title in the sans display, bullet list in {colors.ink}, chevron arrows in light blue at each side. Carousel dots appear at the bottom of the hero.

**Portrait.** Circular headshot above a name and a gray role label, centered.

The page has no primary call-to-action button; navigation links are the only actions, so no button token is declared.

## Design System Architecture

No public ByteDance corporate-site design system was found in the pages opened. The de-facto system is: one blue, one near-black ink, off-white canvas, three decorative gradient circles, DM Sans-class body type, and a mix of large radii and circles for imagery.

Separately, Arco Design (https://arco.design, source at https://github.com/arco-design/arco-design) is a React UI library with 60+ components, an npm package `@arco-design/web-react`, a Vue library, Design Lab theme tooling and dark mode, MIT licensed. The docs home page describes it as a complete design and development solution for enterprise-level products. The pages opened do not state who owns it, and the corporate site's CSS shows no use of it; the Arco docs were measured only to confirm it differs from this site, and none of its tokens appear here.

## Do's and Don'ts

- Do use {colors.primary} as a solid band for navigation and as the only chromatic UI color.
- Do keep text in {colors.ink} on {colors.canvas} or white cards.
- Do pair photography of real offices and people with white cards.
- Do use large rounded corners and circles around imagery.
- Don't add a primary button style; the page has none.
- Don't treat the browser serif fallback as brand typography.
- Don't use heavy shadows; the single measured shadow is 4px offset at 15% black.
- Don't invent additional accent hues beyond the decorative gradients.

## Responsive Behavior

A 390px mobile capture was measured for type: the h1 role resolves to a 24px / 56px weight-700 "Culture" heading, down from the 52px hero line on desktop. Layout rearrangement at mobile width is not documented in detail here. The desktop card on the culture block carries a `matrix(0.75, 0, 0, 0.75, 0, 0)` transform at capture time, indicating the page scales content to fit the capture width.

## Iteration Guide

1. Begin with {colors.canvas}, {colors.ink} and a {colors.primary} nav band.
2. Use real photography in a full-bleed hero with a white label card.
3. Round image containers (22px) or crop them to circles; keep small details square at 2px.
4. Specify a display face that loads; the measured one did not.
5. Keep copy short and declarative, in value statements and imperative bullets.
