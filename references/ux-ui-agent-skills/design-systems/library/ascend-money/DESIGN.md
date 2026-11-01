---
version: alpha
name: Ascend Money
category: "Thai Brands"
description: "Ascend Money is the regional fintech arm of Ascend Group: a white header with the ascend money wordmark and a red active-link underline, deep red #8b0304 bands with white anuyart_light type at 21px body and 36px headlines, light grey #ececec sections and full-bleed portrait photography."
colors:
  canvas: "#ffffff"
  ink: "#706d6d"
  primary: "#8b0304"
  on-primary: "#ffffff"
  accent-red: "#ff0000"
  surface-grey: "#ececec"
  ink-body: "#626161"
  ink-rose: "#bc8788"
  ink-pale: "#a7a7a7"
  accent-hero: "#fb2626"
  ink-nav: "#4c4b4b"
typography:
  display:
    fontFamily: anuyart_light, Helvetica, Arial, sans-serif
    fontSize: 38px
    fontWeight: 500
    lineHeight: 38px
  display-mobile:
    fontFamily: anuyart_light, Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: anuyart_light, Helvetica, Arial, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: anuyart_light, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 10px
spacing:
  s1: 8px
  s2: 10px
  s3: 14px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 25px
  s8: 32px
  s9: 50px
  s10: 64px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.accent-red}"
    boxShadow: rgb(136, 136, 136) 0px -3px 21px -1px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 88px 0px 42px
---

## Overview

Ascend Money's site (https://www.ascendmoneygroup.com/home/, redirected from ascendmoney.com) introduces itself with the headline "Enriching Lives in Southeast Asia" over a rotating photographic hero. According to the page text read through the fetch, Ascend Money lists four brands: TrueMoney, Ascend Nano, Ascend Wealth and Ascend Assurance Broker, and reports "USD14 billion" processed and "50 million" users and customers across six countries (Thailand, Myanmar, Cambodia, Indonesia, Vietnam and the Philippines).

The page is a single long scroll made of stacked colour fields. A white header carries the centred "ascend money" wordmark above a narrow row of six uppercase links (Home, About, Our service, Our culture, Our people, Contact us) with the active link in red and underlined; beneath it a pale grey strip shows the four brand logos, each in its own colour (TrueMoney in orange and red, Ascend Nano, Wealth and Assurance in grey and red). A full-bleed carousel of smiling portraits follows, with the lockup "ascend money" in semi-transparent white and the headline beneath it; the word "Enriching" is picked out in a brighter red (`{colors.accent-hero}`). Then comes a deep-red band (`{colors.primary}`) with a centred statement in white, a light-grey band with a quieter grey headline, a dark testimonial carousel (a shop owner's story with a portrait giving two thumbs up), and a second red band with milestone numerals.

The voice is humane and simple: short sentences about "financial peace of mind", individual stories ("Meet Win Aong"), and big round numbers. Photography is documentary, close-cropped faces and storefronts in Southeast Asia, slightly darkened under text.

Copy is centred almost everywhere, in short paragraphs separated by blank lines, which gives each band the feel of a statement rather than an article. The grey band headline "Changes lives for the better" is quieter than the white-on-red statements above it: same family, lighter ink, so the page alternates between emphasis and rest. The milestones band repeats the red field of the first statement band, closing the scroll with the same colour it used to open the content, and sets its two figures side by side in large capitals ("USD14 BILLION", "50 MILLION") with one-line captions below.

## Colors

Area-weighted backgrounds on the capture: white `{colors.canvas}` (2,271), deep red `{colors.primary}` (1,875), light grey `{colors.surface-grey}` (1,432), a dark grey (#484848, the testimonial overlay) and a black scrim at about 25% opacity. Text by character count: white first (on red and photographs), then `{colors.ink}` (#706d6d) for grey-section copy, `{colors.ink-body}` for body copy, `{colors.ink-rose}` for muted text on red, `{colors.ink-pale}`, `{colors.accent-hero}` and `{colors.accent-red}`.

- **Deep red `{colors.primary}`**: the signature field colour; also the footer background.
- **Bright red `{colors.accent-red}`**: the active nav link colour and underline, measured on the nav element.
- **Hero accent `{colors.accent-hero}`**: the highlighted word in the headline.
- **Greys**: `{colors.ink-nav}` for nav links, `{colors.surface-grey}` as the neutral band.

There is no filled button colour; the site has no measured primary button.

## Typography

Everything is set in one custom face family: anuyart_light (5,395 characters) with a small amount of anuyart_regular (13 characters). It is a self-hosted light geometric sans, so the numerical weight is 400 for text and 500 for headlines (the same light face with a synthetic or heavier weight request).

- **Display** (`{typography.display.fontSize}` / `{typography.display.lineHeight}`, weight `{typography.display.fontWeight}`): hero headline "Enriching Lives in Southeast Asia" in white; mobile `{typography.display-mobile.fontSize}`.
- **Body** (`{typography.body.fontSize}` / `{typography.body.lineHeight}`): the dominant size across the page (4,778 characters), centred paragraphs in white or grey.
- **Link** (`{typography.link.fontSize}`): footer and nav links.

The h2 statements are 36px with a 36px line height (measured on the red band). The wordmark is an image, not text. Kanit Light or Prompt Light would be reasonable free substitutes for the proprietary face.

## Layout

Vertical rhythm is regular: each band has about the same generous padding above and below its centred text, and the transition between bands is a hard edge rather than a gradient or curve.

The page is 1280px wide and about 5,505px tall. Content is centred in a column about 1,070px wide for statement text, with full-bleed bands and carousels at the full width. Spacing measured: `{spacing.s1}`, `{spacing.s2}`, `{spacing.s5}`, `{spacing.s6}`, `{spacing.s8}`, `{spacing.s9}` and `{spacing.s10}`; the footer has 88px of top padding and 42px at the bottom.

## Elevation & Depth

Only the header carries a shadow, measured as rgb(136, 136, 136) 0px -3px 21px -1px, a soft glow. Photographic bands are darkened by overlays of about 25% black (the `#00000040` area) so that white text reads over them. All other depth comes from colour alternation.

## Shapes

One radius was measured, `{rounded.xs}`, on six elements (small photographs and carousel dots). Otherwise surfaces are square full-width bands, and carousel arrows are simple chevrons.

## Components

- **Header and nav**: white, uppercase links in `{colors.ink-nav}`, active link in `{colors.accent-red}` with a red underline; shadow as above.
- **Brand strip**: a pale grey row of four brand logos below the nav.
- **Hero carousel**: full-bleed photographs, previous/next chevrons at left and right edges (opacity 0.5 at rest, 0.9 on hover in the measurement) and three dots.
- **Statement band**: deep red background, white centred text.
- **Testimonial carousel**: dark overlay, white text at left, portrait at right.
- **Footer**: `{colors.primary}` fill, white links (Home, About, Our service, Our culture, Our people, Contact, Call centre details), padding 88px 0 42px.

## Design System Architecture

No public design system for Ascend Money was found. The about and home pages (https://www.ascendmoneygroup.com/home/) describe the business, not the interface. The de-facto system is a small hand-built site on Bootstrap (the extraction shows the Glyphicons Halflings icon font, which ships with Bootstrap 3) with two custom font files, anuyart_light and anuyart_regular, and no CSS custom properties on the root. Colour and spacing are therefore authored directly in the stylesheet.

Because there are no root custom properties, any reuse of this identity should start from the measured values in the frontmatter instead of expecting named variables. The two red values are deliberately distinct: the deep red is a surface and the bright red is a signal, and mixing their roles would flatten the hierarchy that the page establishes between large calm fields and small active accents. The grey `{colors.surface-grey}` band is the neutral that separates the two red bands and lets the testimonial photograph breathe.

## Do's and Don'ts

- Do alternate full-width bands of deep red, grey and photography.
- Do set text in anuyart_light at 21px for body copy.
- Do use real portraits of customers and agents under a light dark overlay.
- Do keep headline copy short and warm.
- Don't add button fills; the measured site uses text links and carousel controls.
- Don't use the bright red for large fields; it is reserved for active links and a highlighted word.
- Don't round large surfaces.
- Don't set body text in pure black; the site uses `{colors.ink}` greys.

## Responsive Behavior

At 390px the h1 wraps to five short lines ("We enable / everyone access / innovative / financial services / lead") at `{typography.display-mobile.fontSize}`, compared with `{typography.display.fontSize}` on desktop. Other mobile layout behaviour was not individually measured and is not stated here.

## Iteration Guide

1. Start with a white header and uppercase grey links with a red active state.
2. Add a full-bleed photographic hero with a white headline at `{typography.display.fontSize}`.
3. Alternate `{colors.primary}` bands with white copy and `{colors.surface-grey}` bands with grey copy.
4. Use carousel arrows and dots instead of buttons.
5. Keep numbers large and centred in the milestones band.
6. Re-measure anything new before adding a token.
