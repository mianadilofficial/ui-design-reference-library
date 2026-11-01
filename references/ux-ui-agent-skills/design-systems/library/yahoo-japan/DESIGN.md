---
version: alpha
name: LY Corporation
category: "Design Systems"
description: "LY Corporation corporate site (lycorp.co.jp/en): a white canvas with near-black #2e2e2e ink and no saturated accent, set entirely in LINESeedJP (400 and 700) with 38px display headlines, 20px, 12px and 8px rounded image cards and a soft 25px rgba(0,0,0,0.1) shadow over candid photography."
colors:
  canvas: "#ffffff"
  page-largest: "#fdfdfd"
  ink: "#2e2e2e"
  primary: "#2e2e2e"
  surface-muted: "#ececec"
  surface-dark: "#353a3f"
  ink-black: "#000000"
  ink-muted: "#959595"
  hairline: "#eeeeee"
typography:
  display:
    fontFamily: LINESeedJP, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 38px
    letterSpacing: 0.76px
  display-mobile:
    fontFamily: LINESeedJP, sans-serif
    fontSize: 23px
    fontWeight: 700
    lineHeight: 23px
    letterSpacing: 0.46px
  heading:
    fontFamily: LINESeedJP, sans-serif
    fontSize: 60px
    fontWeight: 700
    lineHeight: 78px
    letterSpacing: 0.32px
  body:
    fontFamily: LINESeedJP, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
    letterSpacing: 0.32px
  link:
    fontFamily: LINESeedJP, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
    letterSpacing: 0.32px
rounded:
  xs: 8px
  sm: 12px
  md: 20px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 19px
  s6: 19.6px
  s7: 19.92px
  s8: 20px
  s9: 24px
  s10: 25.19px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 27px 30px 23px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 25px 0px
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured page is the English home of LY Corporation, https://www.lycorp.co.jp/en/ (page title "LY Corporation"). The queue slug says yahoo-japan, but the site documented here is the LY Corporation corporate site. It is a photographic portal: a large rounded hero image carries the white headline "WOW Our Users!" with a row of dot pagination and a play button beneath it, followed by wide rounded image cards for "About LY Corporation", "Service", "Recruitment", "IR", "Sustainability", "Privacy & Security" and "Technology & Design", and then a centred "Topics" list of dated news lines.

Everything is built from one typeface, LINESeedJP, in two weights, set in a near-black `{colors.ink}` on white. There is no saturated brand colour on the page chrome: the extractor found no conventional primary button, so `primary` is the same dark grey as the ink. Colour arrives through candid, naturally lit photography of people commuting, working and relaxing, plus the yellow character in the office photo. Cards float on a very soft shadow and darken slightly on hover. The mood is friendly, round and open, which suits a company whose product brands include LINE.

## Colors

Measured colour roles: canvas `{colors.canvas}` (white), a barely off-white card and section tone `{colors.page-largest}`, ink and primary `{colors.ink}` (the most-read text colour on the page), pure black `{colors.ink-black}` for a few high-contrast items, a grey `{colors.ink-muted}` for secondary text such as dates, `{colors.surface-muted}` as a light grey surface, `{colors.surface-dark}` as a charcoal surface, and `{colors.hairline}` for the thin border lines between news rows and around small controls.

Because ink and primary are the same value, emphasis is carried by weight and size rather than hue. Do not introduce a bright accent when extending this look; the photography supplies the colour. White text appears over photography in the hero headline.

## Typography

The page uses `LINESeedJP` exclusively (loaded in weights 400 and 700), with `sans-serif` as fallback. The hero and section headline token is `{typography.display}`: 38px, line height 38px, letter spacing 0.76px, weight 700; on a 390px viewport it becomes `{typography.display-mobile}` at 23px. The large "Topics" style heading is `{typography.heading}` at 60px / 78px. Body text is `{typography.body}`: 16px at weight 700 with a 22.4px line height, and the small link/meta size is `{typography.link}` at 13px, weight 400. Letter spacing of 0.32px is applied to nearly every measured size, which gives the rounded letterforms an airy rhythm.

### Font substitutes

LINE Seed JP is distributed under the SIL Open Font License 1.1 and is offered through Google Fonts, according to LY Corporation's release page (https://www.lycorp.co.jp/ja/news/release/020040/). The design community site design.lycorp.co.jp also loads it from Google Fonts. No substitute is needed; for offline fallback use any rounded Japanese sans-serif.

## Layout

Page width in the extraction is a standard desktop width, with large image cards inset from the viewport edges: the hero is wider than the lower card grid, which narrows into a centred column. The cards form a visual hierarchy: one full-width banner card (About), two half-width cards (Service, Recruitment), then four equal quarter-width cards (IR, Sustainability, Privacy & Security, Technology & Design). Each card is an image on top and a label row below with a small arrow at the lower right. Below the grid a centred "Topics" heading introduces a list of news rows, each showing date, category and a one-line headline separated by hairlines. Measured spacing steps include `{spacing.s1}`, `{spacing.s2}`, `{spacing.s3}`, `{spacing.s4}`, `{spacing.s5}`, `{spacing.s8}`, `{spacing.s9}` and 25.19px; padding of 30px and 32px is the most frequent on the page.

## Elevation & Depth

Cards use a single measured shadow: `rgba(0, 0, 0, 0.1) 0px 0px 25px 0px`, a wide diffuse glow with no offset. On hover the card background darkens and the shadow fades to transparent, so the card appears to settle onto the page. Border colour `{colors.hairline}` is used for list dividers. A white rounded label sits directly on top of photography in the banner card ("About LY Corporation" and its subtitle are set on white plates so the text stays legible over the image); the hero headline, by contrast, is white text placed directly on a photo.

## Shapes

Radii: `{rounded.xs}` (8px), `{rounded.sm}` (12px), `{rounded.md}` (20px, the most frequent value on the page and the one used on the large image cards and hero) and `{rounded.pill}` for full pills. Circular controls (50% radius) include the carousel play button and the scroll-to-top button. Everything is rounded; there are no sharp-cornered containers, echoing the rounded corners of the typeface.

## Components

- **Card** (`card`): background `{colors.page-largest}`, text `{colors.ink}`, radius `{rounded.sm}`, diffuse shadow; an image, a label row and a small arrow.
- **Link** (`link`): `{typography.link}` in `{colors.ink}`, with generous padding of 27px 30px 23px.
- **Hero**: rounded photo with centred white headline, three dots and a circular play control, then a small chevron-down cue.
- **News row**: date, vertical bar, category tag, bold one-line headline, hairline divider.
- **Footer** (`footer`): text in `{colors.ink}`.

## Design System Architecture

No public design-system documentation was found for this site. design.lycorp.co.jp, the dsUrl in the queue, is real and I opened it: its page title is "LINEヤフーDESIGN" and its own meta description calls it the official website of the designer community "LINEヤフーDESIGN", introducing LY's design case studies and initiatives. That is a community and case-study site, not a token or component library, so no values were taken from it. The corporate site's CSS declares only a few custom properties (an anchor offset for mobile and desktop and a viewport-height helper), and the typeface loaded is LINE Seed JP, which LY publishes on Google Fonts (https://www.lycorp.co.jp/ja/news/release/020040/). The de-facto system is therefore one typeface, one dark ink, three radii, one shadow and a card grid.

## Do's and Don'ts

- Do set all text in LINESeedJP at 400 or 700.
- Do keep ink and primary `{colors.ink}` and let photography supply colour.
- Do round every container; use `{rounded.md}` for large image cards.
- Do use the single soft shadow and let it fade on hover.
- Do show candid, natural-light photography of people.
- Don't add a bright accent colour or gradient chrome.
- Don't use sharp-cornered boxes or hard drop shadows.
- Don't set body text in a thin weight; the measured body weight is 700.
- Don't place small text directly on photos without a white plate.

## Responsive Behavior

At 390px the h1-level headline shrinks from 38px to 23px (`{typography.display-mobile}`) while keeping equal line height and letter spacing proportions. The measured root variables define a smaller anchor offset on mobile (72px) than on desktop (100px), which tells us the header is shorter on small screens. Other mobile layout details such as the card grid reflow were not measured, so they are not described here.

## Iteration Guide

1. Start from white with `{colors.ink}` text in LINESeedJP.
2. Build navigation as image cards: photo on top, bold label and arrow below, radius `{rounded.md}` or `{rounded.sm}`.
3. Add depth only with the 25px diffuse shadow; fade it on hover and darken the card.
4. Use hairline `{colors.hairline}` rows for lists.
5. Choose photography first: candid, natural light, people in daily scenes.
6. Re-run the gate after any rename.
7. Keep copy short and plain: the measured page uses concise section labels such as Service, Recruitment and IR, and one-line news headlines preceded by a date and a category.
