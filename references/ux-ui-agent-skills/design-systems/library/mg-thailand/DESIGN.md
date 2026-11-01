---
version: alpha
name: MG Cars Thailand
category: "Thai Brands"
description: "MG Cars Thailand (MG SALES (THAILAND)) home page measured at mgcars.com/th: Thai-language car showroom on a white #ffffff canvas with #000000 ink, brand red #d2232a for underlines and accents, Sukhumvit typeface at 18px body and 40px uppercase section titles, rounded cards (17px), pill and 30px buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#d2232a"
  surface-3: "#d11010"
  ink-4: "#d6d6d6"
  ink-5: "#161616"
  ink-6: "#111827"
  hairline: "#d4d4d4"
  text-input-border: "#d1d5db"
typography:
  display:
    fontFamily: __sukhumvit_2fe6f3, __sukhumvit_Fallback_2fe6f3
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    textTransform: uppercase
  display-mobile:
    fontFamily: __sukhumvit_2fe6f3, __sukhumvit_Fallback_2fe6f3
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
    textTransform: uppercase
  heading:
    fontFamily: __sukhumvit_2fe6f3, __sukhumvit_Fallback_2fe6f3
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: __sukhumvit_2fe6f3, __sukhumvit_Fallback_2fe6f3
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
  body:
    fontFamily: __sukhumvit_2fe6f3, __sukhumvit_Fallback_2fe6f3
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  nav:
    fontFamily: __sukhumvit_2fe6f3, __sukhumvit_Fallback_2fe6f3
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: __sukhumvit_2fe6f3, __sukhumvit_Fallback_2fe6f3
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
    textTransform: uppercase
  input:
    fontFamily: __sukhumvit_2fe6f3, __sukhumvit_Fallback_2fe6f3
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 6px
  sm: 8px
  md: 14px
  lg: 16px
  xl: 17px
  2xl: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-secondary:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
    rounded: "{rounded.2xl}"
    padding: 0px 16px
    height: 48px
    borderColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
    rounded: "{rounded.2xl}"
    padding: 0px 16px
    borderColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-5}"
    typography: "{typography.nav}"
    padding: 8px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-6}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 4px 16px 0px 24px
    height: 38px
    borderColor: "{colors.text-input-border}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.canvas}"
    padding: 40px
---

# MG Cars Thailand

## Overview

This file documents the page measured at `https://www.mgcars.com/th`, titled "MG Cars | MG SALES (THAILAND)", with the document language set to `th`. It is the Thai storefront of the MG car brand: a full-bleed promotional hero carousel at the top, a "รุ่นรถ" (models) section with a dropdown filter and a carousel of model cards (MG URBAN, MG IM5 and others) each showing a starting price and the two actions "ทดลองขับ" (test drive) and "จองออนไลน์" (book online), and a "โปรโมชัน" (promotions) section of image cards on a light grey band. The measured body copy states that MG offers seven electric models, and a white-on-dark block reports charging stations every 150 km.

The visual identity is plain and commercial. The canvas is white (`{colors.canvas}` #ffffff), the most-read text is black (`{colors.ink}` #000000), and one red does the brand work: `{colors.primary}` #d2232a appears as the short underline under every section heading, as the colored model-name suffix ("URBAN", "IM5") in card titles, and as the carousel arrows and the round red plus button at the right edge. A second, more saturated red, `{colors.surface-3}` #d11010, appears as a background and border color in a small area. Photography carries the page: campaign key visuals with Thai lettering baked into the images, studio car shots on white cards, and lifestyle promotion posters. The interface chrome stays quiet so the posters stay loud.

The extraction found no detected primary call-to-action button on desktop. The only button-like element recorded is the translucent "ทดลองขับเอ็มจี" pill over the hero, so this file declares a secondary button and a link rather than inventing a filled primary button.

## Colors

All values come from the live-site measurement of the home page.

- `{colors.canvas}` #ffffff is the dominant background by area, followed by black #000000 areas (the dark feature band) and semi-transparent white overlays.
- `{colors.ink}` #000000 is the most-read text color; `{colors.ink-5}` #161616 is used for navigation links on the white state and `{colors.ink-6}` #111827 for the section h1 and form input text.
- `{colors.ink-4}` #d6d6d6 is the light grey used for the "รายละเอียดเพิ่มเติม" link text where it sits on dark imagery.
- `{colors.primary}` #d2232a is the brand red (text weight 421 characters in the extraction, plus underline and arrow accents).
- `{colors.surface-3}` #d11010 is the second red, measured as a background and as a 4-weight border color.
- `{colors.hairline}` #d4d4d4 is the card border, and `{colors.text-input-border}` #d1d5db is the select/input border.

The page also exposes a daisyUI-style set of root variables (`--p`, `--b2`, `--b3`, `--bc`, `--rounded-btn`, `--rounded-box`, `--rounded-badge`), expressed in OKLCH; the primary variable `--p` is `55.7411% 0.207591 25.797904`, a red-orange consistent with the measured red. Only values present as measured hexes are used as tokens here.

## Typography

One family is loaded, a Next.js-hosted face named `__sukhumvit_2fe6f3` (the root variable `--font-sukhumvit`) with a `__sukhumvit_Fallback_2fe6f3` fallback; faces for weights 400 and 700 were recorded. The name indicates the Thai typeface Sukhumvit; no official foundry page was opened, so no license or substitute claim is made. Because it is a Thai-first page the type is sized generously: 18px/27px body (`{typography.body}`), 20px/30px bold card titles (`{typography.heading}`), 18px/27px bold subheads, 16px/24px navigation, and 14px/14px 600-weight uppercase link labels (`{typography.link}`).

The section titles ("รุ่นรถ", "โปรโมชัน") are `{typography.display}`: 40px on a 48px line, weight 400, `text-transform: uppercase`, which affects only Latin text. On the 390px mobile pass the same h1 is 24px on a 28.8px line (`{typography.display-mobile}`). Size distribution by characters: 20px (1132), 18px (847), 14px (672), 16px (583), 17.15px (304), 40px (27). Weights by characters: 400, 700, 500 and 600. No letter-spacing is applied at any size.

## Layout

The page is a vertical stack of full-width bands on a 1280px-wide desktop measurement: hero carousel, white models band, grey promotions band, a dark feature band, and a footer. Content inside bands is centered, with section titles centered over a short red rule. The model cards are laid out two to a view with arrow controls on both sides and a dot pager beneath; promotion cards follow the same pattern.

The measured spacing scale is `{spacing.s1}` 2px, 4px, 6px, 8px, 10px, 12px, 16px, 20px, 24px and `{spacing.s10}` 32px. Observed padding by frequency: 32px (62), 16px (54), 20px (35), 24px (27), 8px (21). Observed gaps: 8px (74), 4px (40), 16px (39), 20px (24). One body paragraph carries 240px of horizontal padding to hold a narrow reading column inside a 1256px block, and the footer is padded 40px.

## Elevation & Depth

Depth is very light. The most common shadow (25 elements) is `0 1px 2px` at 5% black; the next (16 elements) is a two-layer `0 1px 3px` plus `0 1px 2px -1px` at 10% black, a standard small card lift. One large shadow, `0 25px 50px -12px` at 25% black, appears on 2 elements. Cards are separated from the white band mainly by a 1px `{colors.hairline}` border and by the grey (#e8e8e8) background of the promotions band. Translucent white overlays (`#ffffff66`, `#ffffff4d`) sit on top of the hero photography for buttons and info tiles.

## Shapes

Radii measured: 9999px (33 elements: dots, round controls), 30px (25: pill buttons), 17px (18: cards), 8px (16: inputs and tabs), 14px (16), `0 0 8px 8px` (12: dropdown panels), `14px 14px 0 0` (5: card tops), 16px and 6px. The tokens are `{rounded.pill}`, `{rounded.2xl}` 30px, `{rounded.xl}` 17px, `{rounded.md}` 14px, `{rounded.lg}` 16px, `{rounded.sm}` 8px and `{rounded.xs}` 6px. Root variables confirm the same family: `--rounded-btn` 0.5rem, `--rounded-box` 1rem, `--rounded-badge` 1.9rem.

## Components

- **Secondary button / link** (`button-secondary`, `link`): 48px tall, `0 16px` padding, 30px radius, 14px/600 uppercase label in `{colors.ink-4}`, a 1px border in `{colors.canvas}` and the 5% shadow. On the hero it renders over a `#ffffff66` fill; the recorded hover changes the text to black and the fill to a light grey (oklab 0.837).
- **Navigation** (`nav`, `nav-link`): a transparent top bar over the hero with white text; links "หน้าแรก", "รุ่นรถ", "ทดลองขับ", "ค้นหาผู้จำหน่าย", "โปรโมชัน", "จองออนไลน์" and a "เมนู" control. Measured nav link is 16px/24px with `8px 0` padding in `{colors.ink-5}`.
- **Text input / select** (`text-input`): 38px tall, white fill, 1px `{colors.text-input-border}` border, 8px radius, 14px/20px text in `{colors.ink-6}`, padding `4px 16px 0 24px`. The models filter reads "ทั้งหมด".
- **Card** (`card`): 17px radius, 1px `{colors.hairline}` border, black text; model cards show a starting price at top, the car, then two text actions separated by a vertical bar.
- **Footer** (`footer`): white text, 40px padding.

## Design System Architecture

No public design system, brand guideline or token package was found for the Thai site. The only link containing a relevant keyword on the home page was `/th/about`, which was opened and returned no readable text without JavaScript. The de-facto system is a Tailwind plus daisyUI build: Tailwind ring and shadow variables (`--tw-ring-*`, `--tw-shadow`) and daisyUI semantic variables (`--p`, `--pc`, `--b2`, `--b3`, `--bc`, `--nc`, `--in`, `--su`, `--wa`, `--er`) are present at `:root`, together with `--tab-radius` 0.5rem, `--rounded-btn`, `--border-btn` 1px and the font variable `--font-sukhumvit`. The font is self-hosted through the Next.js font loader (hashed `__sukhumvit_2fe6f3` names).

## Do's and Don'ts

- Do keep the canvas white and let campaign photography carry color.
- Do use `{colors.primary}` for the short heading underline, model-name accents and carousel arrows.
- Do set Thai text at 18px/27px or larger for body and keep 40px uppercase titles for section heads.
- Do pair card radius 17px with a 1px `{colors.hairline}` border.
- Don't introduce a filled primary button color that was not measured; the hero action is a translucent pill.
- Don't treat the round red plus button, the chat/shortcut widgets or the carousel dots as general brand components.
- Don't use heavy shadows; the measured system stays at 1px to 3px lift.
- Don't add letter-spacing; none was measured.

## Responsive Behavior

Measured at 390px wide only. The section h1 drops from 40px/48px to 24px/28.8px; the h2 is 16px/24px (weight 400, `#161616`); body text is 16px/24px; the hero action stays 14px/600 with 48px height and 30px radius; the navigation collapses to a single "เมนู" control at 16px/24px in white, 61px tall. Character-weighted sizes at 390px: 18px (1343), 16px (967), 14px (726), 20px (243), 24px (27). Breakpoint widths, tablet behavior and the layout of the card carousels at mobile were not measured.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; add `{colors.primary}` only for rules, accents and arrows.
2. Use the `{typography.display}` / `{typography.body}` pair at 40px and 18px, switching to `{typography.display-mobile}` below the measured 390px pass.
3. Build cards with `{rounded.xl}`, a `{colors.hairline}` border and the 5% shadow, then add the two-action footer row.
4. Re-run `node web/scripts/extract-tokens.mjs --slug=mg-thailand --url=https://www.mgcars.com/th --force --no-motion` after any site change and diff the tokens before editing values.
5. If a filled primary button is needed, measure it on a model detail page first (not measured here).
