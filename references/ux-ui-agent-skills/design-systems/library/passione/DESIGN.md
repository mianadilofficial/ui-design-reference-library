---
version: alpha
name: Passione Shopping Destination
category: "Thai Brands"
description: "Passione Shopping Destination (แพชชั่น), a Thai shopping mall site: white canvas and a solid magenta #ed0281 directory panel, Celias display type at weight 800 with DB HeaventRounded body text, 10px and 20px radii, rounded promo photography."
colors:
  canvas: "#ffffff"
  page-largest: "#ed0281"
  ink: "#1a1a1a"
  primary: "#ed0281"
  surface-light: "#f8f9fa"
  ink-black: "#000000"
  hairline-dark: "#343a40"
  nav-link-text: "#000000e6"
typography:
  display:
    fontFamily: Celias, "DB HelvethaicaMon X"
    fontSize: 40px
    fontWeight: 800
    lineHeight: 48px
  display-mobile:
    fontFamily: Celias, "DB HelvethaicaMon X"
    fontSize: 27.85px
    fontWeight: 800
    lineHeight: 33.42px
  heading:
    fontFamily: Celias, "DB HelvethaicaMon X"
    fontSize: 32px
    fontWeight: 800
    lineHeight: 38.4px
  body:
    fontFamily: "\"DB HeaventRounded\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  nav:
    fontFamily: Celias, "DB HelvethaicaMon X"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: Celias, "DB HelvethaicaMon X"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 10px
  sm: 20px
spacing:
  s1: 6px
  s2: 8px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 48px
  s9: 96px
  s10: 140px
components:
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 16px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 16px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.surface-light}"
    padding: 16px 0px
---

## Overview

Passione (stylised PASSiONE, "Shopping Destination") is a shopping mall website in Thai and English. The homepage navigation lists Promotion, Directory, Happening and Career, plus a magenta "Business mode" button in the header corner. Content blocks cover "Promotion of the month", a floor guide (floor 1 for boutique fashion and brand names, floor 2 for mobile phone zone, menswear, leather goods, shoes, bags and bank branches, floor 3 for relaxation, a cinema, toy shops, games and the Passione Cuisine food court), a directory, an events list and a gallery.

The page opens with a floating white header card carrying the magenta wordmark with a small "Shopping Destination" line, four dark nav links, and the magenta Business mode block flush to the right. Directly below is a rounded-corner hero carousel of promotional posters (at capture time a hot-pot restaurant offer in red and orange with a cartoon mascot). A pale pink circular wash sits behind the next sections. "Promotion of the month" is a left-aligned black heading with two small square magenta arrow buttons, beside a horizontal strip of rounded photo cards of drinks and cafes. The floor guide uses line-drawn stair graphics and thin magenta rules, and the directory is a solid magenta panel with a soft pink glow and white uppercase category rows separated by thin white lines, each with a small line icon (Food & Beverage, Fashion & Accessories, Beauty & Health, Education & Entertainment, Bank & Service, Mobile & IT, Electronic & Other). The event copy is emoji-rich Thai promotional text.

Overall tone is energetic and promotional, led by tenant and event imagery rather than architecture.

## Colors

Canvas is white (#ffffff). The single brand color is the vivid magenta `primary` #ed0281, which is also the largest non-white page area (`page-largest` #ed0281, the directory panel) and the footer background. The stylesheet itself declares --primary: #ed0281 in its root variables, confirming it as the theme primary. Ink is a near-black `ink` #1a1a1a, with pure black `ink-black` #000000 for some text and #000000e6 (`nav-link-text`) for navigation links. A light gray `surface-light` #f8f9fa and a dark gray hairline `hairline-dark` #343a40 round out the set.

In the capture, magenta appears on the wordmark, the Business mode block, arrow buttons, rules, line icons and the directory panel, while white sits on top of it for text. Promotional banners bring their own saturated colors, which are imagery and not site tokens. The root variables also include Bootstrap's standard palette (blue #007bff, indigo, danger #dc3545 and so on), which are framework defaults rather than brand colors.

## Typography

Headings use `Celias`, with `DB HelvethaicaMon X` as the Thai fallback; both are loaded by the page. Body copy uses `DB HeaventRounded` (loaded at 400 and 700), a rounded Thai face. Measured styles: display 40px at 800 with 48px line height; display-mobile 27.85px at 800 with 33.42px line height; heading 32px at 800 with 38.4px line height; body 24px at 400 with 36px line height; navigation 20px at 400 with 30px line height; link 16px at 400 with 24px line height.

The 24px body size is large for a web page and gives Thai text, which has tall ascenders and stacked marks, plenty of room. Celias and DB fonts are commercial; Poppins or Prompt can stand in for Latin and Thai respectively, though they are not measured on this site.

## Layout

The page uses a wide, mostly centred composition built on Bootstrap (the stylesheet declares --breakpoint-sm 576px, --breakpoint-md 768px and --breakpoint-lg 992px). Blocks alternate: a full-width hero, an offset heading plus a horizontally scrolling card strip, and a two-column area where the floor guide sits on the left and the magenta directory panel on the right. The measured spacing scale is 6, 8, 12, 15, 16, 20, 24, 48, 96 and 140px, so large section separation uses the 96 and 140px steps while controls use 6 to 24px. Navigation blocks use 16px padding and the footer uses 16px 0px padding.

## Elevation & Depth

Surfaces are mostly flat. The one clear depth cue in the capture is the magenta directory panel, which has a diffuse magenta glow around it, and the header card, which floats over the page with a subtle edge. Pale pink circular washes behind sections add background depth without borders. The measured nav hover state shows no shadow at rest. No shadow values were recorded as tokens.

## Shapes

Two measured radii: 10px (xs) and 20px (sm). Promotion photo cards and the hero carousel use rounded corners in this range; the header card is also softly rounded. The arrow buttons and the directory panel are square-cornered, giving a contrast between soft photography and hard-edged magenta blocks. Dividers are thin lines rather than boxes.

## Components

**Navigation**: four links at 20px/400 in #000000e6 with 16px padding on a white header; the nav surface text is `ink` #1a1a1a. A magenta "Business mode" block with a briefcase icon is part of the header.

**Link**: 16px/400 Celias, colored the page's magenta (`page-largest`).

**Footer**: magenta #ed0281 background, text in #f8f9fa, with 16px 0px padding.

**Directory panel**: a magenta block listing seven categories in white uppercase text with line icons and thin dividers (observed in the capture; no tokens beyond the colors above).

**Promotion carousel**: rounded photo cards with small square magenta previous/next buttons.

The extractor found no primary or secondary button, so no button tokens are declared.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened (the homepage links only to a business about page). The de-facto system is a Bootstrap 4 theme with a customised primary: the root stylesheet exposes --primary #ed0281 and Bootstrap's standard palette and breakpoints (576px, 768px, 992px). Fonts are Celias and DB HelvethaicaMon X for headings, DB HeaventRounded for body copy. Source: https://www.passione.co.th/ (homepage and stylesheet as measured by the extractor).

## Do's and Don'ts

Do use magenta #ed0281 as the one brand color, with white text on it, and black or #1a1a1a text on white. Do set headlines in Celias at weight 800 and Thai body text in DB HeaventRounded at a generous 24px. Do use 10px or 20px radii for photography.

Don't introduce additional brand hues; campaign posters carry their own colors and are not tokens. Don't use Bootstrap's default blue for links. Don't treat the cookie or floating controls as brand UI. Don't add heavy shadows beyond the soft glow on the directory panel.

## Responsive Behavior

The extraction includes a mobile pass, which produced a 27.85px display-mobile style at weight 800, versus 40px on desktop. The stylesheet root declares --breakpoint-sm 576px, --breakpoint-md 768px and --breakpoint-lg 992px. Other mobile layout values are not measured.

## Iteration Guide

Build from the frontmatter tokens only. Start with a white page and a floating white header card; make the key content block a solid magenta panel with white uppercase rows and thin dividers. Set headings at 32 to 40px weight 800 and body at 24px/36px. Use 10px or 20px radii on photos. Any new color or component must be measured on the live site first, then the gate re-run.

Token reference for iteration: colors are canvas #ffffff, page-largest #ed0281, ink #1a1a1a, primary #ed0281, surface-light #f8f9fa, ink-black #000000, hairline-dark #343a40, nav-link-text #000000e6. Radii are xs 10px, sm 20px. Spacing steps are s1 6px, s2 8px, s3 12px, s4 15px, s5 16px, s6 20px, s7 24px, s8 48px, s9 96px, s10 140px. Every value here is measured on the live site; anything not listed is not measured.
