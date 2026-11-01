---
version: alpha
name: /zeroz Official Site (Otsuka Pharmaceutical)
category: "Food & Beverage"
description: "The official site of /zeroz (ゼロズ), Otsuka Pharmaceutical's Active Inner Resource supplement (otsuka-air.jp), measured live: near-black canvas #111312, signature green #00a852, white text, HelveticaNowDisplay for English display and TazuganeGothic for Japanese body at 18px with 1.8px tracking, and square 0px corners."
colors:
  canvas: "#111312"
  ink: "#ffffff"
  primary: "#00a852"
  on-primary: "#ffffff"
  surface-grey: "#a9b1ae"
  ink-black: "#000000"
typography:
  display:
    fontFamily: HelveticaNowDisplay-Regular, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
  display-mobile:
    fontFamily: HelveticaNowDisplay-Regular, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 30px
  heading:
    fontFamily: TazuganeGothicStdN-Medium, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 54px
    letterSpacing: 6px
  body:
    fontFamily: TazuganeGothicStdN-Regular, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: 1.8px
  button:
    fontFamily: HelveticaNowDisplay-Regular, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  nav:
    fontFamily: HelveticaNowDisplay-Regular, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18px
    textTransform: capitalize
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 10px
  s5: 14px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 34px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 52px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    height: 51px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 5px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 60px 0px 40px
---

## Overview

This file documents the official site of /zeroz (ゼロズ), a "Self Conditioning Food" supplement from Otsuka Pharmaceutical, measured at `https://otsuka-air.jp/` (page title "/zeroz（ゼロズ）公式サイト | 大塚製薬", lang ja). The site is the product's own brand site, not the corporate site, though it links to the Otsuka Pharmaceutical homepage, terms of use, privacy policy and an inquiry form. Its concept line is "Active Inner Resource".

Navigation on the opened page is About, Science & Technology, Product, Interview and an external Online store link. Section headings (paraphrased from Japanese on the opened page) are: life energy as the source of well-being; how the body's ability to use oxygen changes with age and lifestyle; the plant-derived ingredient kaempferol as the key to using oxygen; the "Active Inner Resource" concept; experts and top athletes endorsing the approach; and use cases split into ON (for work, sports, hobby, housework) and OFF (for break, holiday, relax, rest). The only explicit call to action is the Online store link, in the header and menu.

The 1280px desktop capture is 40773px tall. The first screen is a dark green three-dimensional room lit from above, with a green pouch and a white capsule at the center, and large English words stacked around them ("Awaken Energy," above and "Drive Everything" below), side captions "Self Conditioning Food" and "Active Inner Resource", and the Japanese line 本来の自分の力を、今日から。 The rest of the long scroll was rendered as an empty near-black field in the capture, so only the hero is visible at rest.

The voice is calm, encouraging and aspirational: it speaks to the reader, invites them to start today, promises solutions for "everyone" in "every scene", and balances scientific credibility with plain language.

## Colors

The canvas is `#111312`, a green-tinted near-black, with text in `#ffffff` on it. The brand color is a vivid green, `#00a852`, which was the largest painted area (2182), used for the menu and footer bands, the primary link blocks and the visible fill of the product scene. White `#ffffff` is the second surface (820) and appears as the Online store button, whose text is green. A grey `#a9b1ae` (167) is the third surface.

Text colors by characters: `#ffffff` (746), `#000000` (701, `ink-black`), `#111312` (516, dark text on light/green panels) and `#00a852` (41, green text on white). Sections alternate dark and green fields; the h1 "Active Inner Resource" and h2 are `#111312` when set on a light or green field.

The root also contains `--header-color: #ffffff` and `--progress-bar-color: #ffffff` (the header and progress UI adopt white), and Tailwind ring and shadow variables that are all zero. No borders and no shadows were measured.

## Typography

Three Japanese and Latin families work together. HelveticaNowDisplay-Regular (826 characters) sets English display and UI: the display h1 at 40px on 40px (30px on mobile), the navigation at 15px capitalized, and buttons at 14px. TazuganeGothicStdN (Regular 927 characters, Medium 184, Bold 14) sets Japanese: body at 18px on a 36px line (double leading) with 1.8px tracking, and the h2 `heading` in Medium at 30px on 54px with 6px tracking. IwaOGoPro-Db (8 characters) appears for a small accent, and ui-sans-serif (45) is a fallback.

Tracking is generous and scales with size at 0.1em: 18px/1.8px (742 characters), 30px/6px (0.2em, 184), 16px/1.6px, 14px/1.4px and 20px/2px. Weights are 400 for almost everything (1996 characters) and 500 for 8. The hero's English words measured 80px and 60px for a few characters. On mobile the h2 is 20px on 32px with 4px tracking and the body is 15px on 30px with 1.5px tracking. Both HelveticaNow and Tazugane are licensed faces; a neutral grotesque for Latin and a clean gothic for Japanese is the nearest stand-in, as a recommendation rather than a measurement.

## Layout

The page is a long vertical narrative with a fixed header: the wordmark at the left, centered navigation, and the Online store button at the right edge. Spacing values measured are 4px, 5px, 6px, 10px, 14px, 20px, 24px, 30px, 34px and 60px; frequent paddings are 5px (28 elements, nav links) and 10px (26). The footer has `60px 0px 40px` padding. Gaps of 4px, 6px, 14px, 20px, 30px, 10px and 60px were measured. The root exposes `--l-padding-left: 34px` and `--l-padding-right: 10px`. Body copy sets a 36px line height on an 18px size, so Japanese paragraphs breathe.

## Elevation & Depth

No box shadows were measured. Depth is created by the hero's rendered 3D scene, a downward spotlight, and floating particles. Interface elements are flat color fields.

## Shapes

`desktop.frequencies.borderRadii` is empty: every rendered element computes a radius of 0px, so all buttons, bands and links are square. The only rounded-looking form is the circular scroll-down control in the hero, which is drawn as an outlined circle in the capture, but no radius was measured on it.

## Components

- **Header.** Transparent over the hero; wordmark "/zeroz" at left; nav links in HelveticaNowDisplay 15px, capitalized, white, 5px padding.
- **Online store button.** White fill, green `#00a852` text, 15px, 51px tall, square, with a small external-link glyph at its top right.
- **Primary link block.** Green `#00a852` fill, white 14px text, 52px tall, 0px radius; the extractor found it on the About / Concept, Interview, Science & Technology and Product menu group.
- **Section link.** `#111312` on green, HelveticaNowDisplay 30px, for About and the other chapter links.
- **Footer.** Green `#00a852`, white 18px capitalized links (Home, About, Science & Technology, Product, Interview), padding `60px 0px 40px`.
- **Product visuals.** A green pouch and capsule rendered in 3D; imagery is part of the brand.

## Design System Architecture

No public design system, brand guidelines or press kit was found: the opened homepage links only to its own sections, the online store and the Otsuka Pharmaceutical corporate pages. The shipped CSS is Tailwind-based (the `--tw-*` ring and shadow variables are present) with a few custom properties for header color (`--header-color`, `--header-color-duration` .5s, `--header-color-easing` cubic-bezier(.3, .26, .38, 1)), a progress bar color and left and right padding. Fonts are loaded as named web fonts with weights baked into the family names, which is why every family appears at weight 400.

## Do's and Don'ts

- Do use `#111312` for the page and `#00a852` for brand bands, with white text on both.
- Do pair English display (HelveticaNowDisplay) with Japanese body (Tazugane Gothic).
- Do open tracking to 0.1em on body and 0.2em on Japanese headings.
- Do keep every corner square; the measured radius is 0px.
- Don't add shadows or borders; none were measured.
- Don't invent a second accent color; the palette is dark, green, white and a grey.
- Don't tighten the Japanese line height below 2 times the size at body size.

## Responsive Behavior

The mobile pass at 390px recorded: h1 30px (40px on desktop), h2 20px on 32px with 4px tracking (30px on 54px with 6px), body 15px on 30px with 1.5px tracking (18px on 36px with 1.8px), and the menu CTA at 13px (14px). The mobile header text is "Menu | About | Science & Technology | Product | Interview" with 6px 6px 0px padding in green `#00a852`. The most common mobile sizes are 15px, 20px, 14px, 30px, 13px, 12px, 36px, 17px, 16px and 48px. Column behaviour and menu mechanics were not measured.

## Iteration Guide

1. Start with `#111312` canvas, white text; use `#00a852` for navigation, footer and highlight bands.
2. English display in HelveticaNowDisplay at 40px; Japanese heading in Tazugane Medium at 30px with 6px tracking.
3. Body: 18px on 36px with 1.8px tracking.
4. Buttons: square; green fill with white text, or white fill with green text for the store link.
5. Capture the page after scrolling before extending it, since only the hero was rendered at rest.
