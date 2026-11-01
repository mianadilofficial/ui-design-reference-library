---
version: alpha
name: Zentry
category: "Tech & AI"
description: "Zentry (zentry.com), a Human-Agentic OS and token project, measured on the live site: electric violet canvas #5542ff, lavender-mist text #dfdff2, black #000000 bands, ZentryScreamer 900 uppercase headlines up to 160px with negative tracking, Roboto Mono for all small text, and 4px, 6.4px and 8px radii."
colors:
  canvas: "#5542ff"
  page-largest: "#000000"
  ink: "#ffffff"
  primary: "#dfdff2"
  ink-gray: "#676666"
  ink-black-50: "#00000080"
  ink-lavender-40: "#dfdff266"
  ink-white-70: "#ffffff70"
  accent-yellow: "#edff66"
  accent-orange: "#ff6f2f"
  accent-red: "#ff264e"
typography:
  display:
    fontFamily: ZentryScreamer, "Helvetica Neue", sans-serif
    fontSize: 160px
    fontWeight: 900
    lineHeight: 131.2px
    letterSpacing: "-1.6px"
    textTransform: uppercase
  display-mobile:
    fontFamily: ZentryScreamer, "Helvetica Neue", sans-serif
    fontSize: 104px
    fontWeight: 900
    lineHeight: 85.28px
    letterSpacing: "-1.04px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Roboto Mono\", \"Helvetica Neue\", sans-serif"
    fontSize: 8px
    fontWeight: 500
    lineHeight: 8px
    letterSpacing: 0.16px
    textTransform: uppercase
  body:
    fontFamily: "\"Roboto Mono\", \"Helvetica Neue\", sans-serif"
    fontSize: 8px
    fontWeight: 400
    lineHeight: 9.6px
  nav:
    fontFamily: "\"Roboto Mono\", \"Helvetica Neue\", sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 15.36px
  link:
    fontFamily: "\"Roboto Mono\", \"Helvetica Neue\", sans-serif"
    fontSize: 9.6px
    fontWeight: 700
    lineHeight: 9.6px
    letterSpacing: 0.192px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 6.4px
  md: 8px
spacing:
  s1: 0.64px
  s2: 1px
  s3: 4px
  s4: 4.24px
  s5: 6.4px
  s6: 12.8px
  s7: 16px
  s8: 16.8px
  s9: 19.2px
  s10: 20px
components:
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.primary}"
  footer:
    textColor: "{colors.page-largest}"
    padding: 0px 0px 20.8px
---

## Overview

Zentry presents itself, in its page title, as "Human-Agentic OS Where Life, AI, and Data Converge", and is measured here at `https://zentry.com/`. The opened homepage lists navigation Home, Products (a zTerminal submenu), About and Contact; footer groups Explore, Products, Follow Us (Discord, X, YouTube, Medium) and Resources; and a Media Kit link. Its section headings are "Redefine", "Reality", "Welcome to Zentry", "Explore Zentry's Native Products", "Explore Zentry's Integrated apps", "The symbiotic world powered by ZENT", "Who we are", "Our key metrics", "Zentry at a glance", "Our partners" and "Join Zentry". Its calls to action are "Enter Vault", "Contact Us" and "Media Kit".

The scroll height is 12582px at 1280px. The captured first screens are a black opening frame with a violet angular "Z" mark and then a full violet field with a small centered statement: "A programmable reality for Human-AI co-evolution. Your journey fuels richer data, smarter agents, and civilization-scale intelligence, all while rewarding you." Much of the page is scroll-driven, so the still capture shows large empty fields of violet; sections that rely on scroll-triggered motion were not captured at rest.

The voice is visionary and futuristic: short punchy headlines, abstract terms such as "programmable reality", and a focus on community ownership and shared value. The visual language is a high-chroma violet, a lavender text color, black bands and a heavy, compressed display face.

## Colors

The canvas is `#5542ff`, a saturated violet that the root declares as `--rui-bgColor` and `--rui-colors-purple`. `primary` is `#dfdff2` (`--rui-colors-grey`, also `--rui-textColor`), the lavender-mist used for headlines and body on the violet; `ink` is `#ffffff` for navigation. Black `#000000` (`--rui-colors-black`, also `--rui-textColorInverted`) is the second major surface: the header and footer bands.

Measured surfaces: `#0000001a` (the largest area, 2048, a 10% black scrim), `#000000` (1626), `#dfdff2` (1444, light panels) and `#00000033` (a 20% scrim, weight 0). Text colors by characters: `#dfdff2` (1139), `#676666` (1053, `ink-gray`), `#00000080` (532, 50% black), `#000000` (486), `#dfdff266` (254, lavender at 40%), `#ffffff70` (191), `#ffffff` (170) and `#ffffff99` (27). Borders measured: `#dfdff2` (3 elements).

The root also declares `--rui-accentColor` and `--rui-colors-yellow` `#edff66`, `--rui-colors-orange` `#ff6f2f`, `--rui-colors-red` `#ff264e`, and a gradient `--rui-colors-purple-gradient: linear-gradient(to bottom, #5542FF 0%, #B28EF2 100%)`. These are the design system's declared accents; they are tokenized as `accent-yellow`, `accent-orange` and `accent-red` but were not measured as painted at rest in the captured screens.

## Typography

Two families: ZentryScreamer (267 characters, display only, weight 900 as measured though the font file loads at 500) and Roboto Mono (3585 characters, everything else, loaded at 400, 500 and 700). The root declares `--rui-fonts-base-size: 10px`, so the site's rem unit is 10px.

The `display` h1 "REDEFINE" is ZentryScreamer 900 uppercase at 160px on 131.2px with -1.6px tracking; on mobile 104px on 85.28px with -1.04px. Other measured display sizes use the same proportional tracking of -0.01em: 96px at -0.96px, 51.2px at -0.512px, 49px at -0.49px, 44.8px at -0.448px, 84.8px, 80px, 144px and 112px. Roboto Mono carries body at 8px weight 400 on 9.6px, labels (`heading`) at 8px weight 500 uppercase with 0.16px tracking, and the `link` style (ENTER VAULT) at 9.6px weight 700 uppercase with 0.192px tracking. Navigation measured 12.8px on 15.36px.

Other prominent sizes by characters: 14.4px (1625), 12px (723), 17.6px (252, -0.352px tracking), 10.8px and 11.2px. On the mobile pass the h2 is 10.4px and body 10.4px on 12.48px, with common mobile sizes 15.6px, 14.56px and 10.4px. ZentryScreamer is a proprietary face; a condensed heavy grotesque in uppercase is the closest stand-in, as a recommendation rather than a measurement.

## Layout

The root declares `--sideMargin: 1.6rem`, `--edgeMargin` (alias of side margin), `--headerMargin: 8rem`, and a spacing scale `--rui-spacing-1` to `-5` of 0.5rem, 1rem, 1.5rem, 2rem and 2.5rem. With the 10px base these are 5px, 10px, 15px, 20px and 25px. Measured paddings include 21.28px (14), 32px, 120px, 40px, 16px and 16.8px; gaps include 30px, 40px, 25.6px, 6.4px, 12.8px, 19.2px and 51.2px.

Sections are tall, full-bleed fields (violet or black) with centered text blocks. Cards measured 416px wide by 244px tall with a 1px lavender border and a 6.4px radius. A fixed header on black carries navigation in 12.8px Roboto Mono.

The header, footer and section fields do not share a grid that was measured; instead the measured evidence is the margin variables and the card dimensions above. The page title and headings treat the whole experience as one long vertical narrative, with the opening frame black and the next field violet, and the contrast between those two fields is the strongest layout device recorded. The hero headline is measured at 160px in the 1280px viewport.

## Elevation & Depth

No box shadows were measured. Depth is made with translucent black scrims (`#0000001a`, `#00000033`, `#00000080` text) and the violet-to-lilac gradient declared in the root. Cards are outlined in 1px `#dfdff2`, not elevated.

## Shapes

Measured radii: 6.4px (4 elements), 4px (3) and 8px (1). Cards use 6.4px (`sm`); `xs` is 4px and `md` is 8px. Elsewhere corners are square. The logo mark is a sharp angular "Z" built from two skewed triangles.

## Components

- **Header.** Black band, white 12.8px Roboto Mono navigation: Zentry Home, Products, Whitepaper, zTerminal and more.
- **Outline card.** Transparent with a 1px `#dfdff2` border, 6.4px radius, 416px by 244px, lavender text.
- **Link / CTA.** "Enter Vault" in black Roboto Mono 700, 9.6px, uppercase with 0.192px tracking. No filled button was detected by the extractor (its candidate list is empty).
- **Footer.** Uppercase Roboto Mono 500 at 8px with 0.16px tracking, black text, 20.8px bottom padding, columns Explore, Products, Follow Us, Resources.
- **Hero.** Huge ZentryScreamer headline words ("Redefine", "Reality") over motion backgrounds.

## Design System Architecture

No public design system or brand guidelines were found on the opened homepage; the only resource link is a Media Kit (a Google Drive folder), which was not opened. The shipped CSS exposes a prefixed token layer, `--rui-*` ("rui"): colors (`--rui-colors-purple`, `-grey`, `-black`, `-yellow`, `-orange`, `-red`, `-purple-gradient`), semantic roles (`--rui-bgColor`, `--rui-textColor`, `--rui-textColorInverted`, `--rui-accentColor`), spacing (`--rui-spacing-1..5`), and font stacks (`--rui-fonts-mono`, `--rui-fonts-sans-serif`, `--rui-fonts-serif`, `--rui-fonts-base-size`), plus layout variables `--sideMargin`, `--edgeMargin`, `--headerMargin`. The semantic aliases are what a theme would invert: background violet and text lavender are the defaults, with `--rui-textColorInverted` black.

## Do's and Don'ts

- Do use violet `#5542ff` as the field and lavender `#dfdff2` for type on it.
- Do set display type in ZentryScreamer 900 uppercase with tracking of -0.01em.
- Do use Roboto Mono for all small text, uppercase with 0.16px to 0.192px tracking for labels.
- Do use 6.4px outlined cards with a 1px `#dfdff2` border.
- Don't add drop shadows; no box shadow was measured.
- Don't fill buttons with the accent yellow, orange or red until they are measured in use.
- Don't treat the empty violet fields in the capture as design; they are scroll-driven states.

## Responsive Behavior

The mobile pass at 390px recorded the h1 at 104px on 85.28px with -1.04px tracking (160px, 131.2px and -1.6px on desktop), the h2 at 10.4px on 10.4px, body at 10.4px on 12.48px, and navigation at 14.56px on 17.472px. Mobile font sizes by characters were 15.6px (723), 14.56px (607), 10.4px (388), 8.32px (290) and 16.64px (252), 37.44px (122) and 49.92px (67). Layout reflow, menu pattern and card columns were not measured.

## Iteration Guide

1. Set the page to `#5542ff` with `#dfdff2` text; use black for header and footer.
2. Headlines: ZentryScreamer 900 uppercase, line height about 0.82 of the size as measured (131.2px at 160px), tracking -0.01em.
3. Labels and body in Roboto Mono, with uppercase labels at 0.16px tracking.
4. Cards: 1px `#dfdff2` border, 6.4px radius.
5. Check scroll-driven sections by measuring them at scroll positions before documenting them.
