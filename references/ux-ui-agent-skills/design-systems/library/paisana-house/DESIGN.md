---
version: alpha
name: "PAISANA(House)"
category: "Architecture & Interiors"
description: "PAISANA(House) design membership site measured live with a white and near-black #111010 band system, indigo #332eca Subscribe buttons with white text at 0px radius, neue-haas-grotesk-display 400 at 57.28px with -0.32px tracking, lavender #e1dffd band and pastel plan tints."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#332eca"
  on-primary: "#ffffff"
  surface: "#111010"
  surface-3: "#e1dffd"
  ink-warm: "#f0eeeb"
  plan-mint: "#b5ffd2"
  plan-butter: "#ffeeb2"
  plan-periwinkle: "#adc4ff"
  hairline: "#ffffff26"
typography:
  display:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 32px
    fontWeight: 400
    letterSpacing: "-0.32px"
  display-mobile:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 34.14px
    fontWeight: 400
    lineHeight: 34.14px
    letterSpacing: "-0.32px"
  heading:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 57.28px
    fontWeight: 400
    lineHeight: 57.28px
    letterSpacing: "-0.32px"
  button:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 16px
    fontWeight: 400
    letterSpacing: "-0.32px"
  link:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 18px
    fontWeight: 400
    letterSpacing: "-0.32px"
rounded:
  xs: 2px
  sm: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 30px
  s10: 35px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 72px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 40px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 10px
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 20px 35px
---

# PAISANA(House)

## Overview

house.paisana.studio is the design-membership site of the studio Paisana, titled "PAISANA.House — Design Membership" and branded in the header as PAISANA(House). It sells "Creative project membership with an exclusive team for unlimited use. Month to month." in three plans (Standard, Pro, Premium) and lists eleven services, four client testimonials and an FAQ, according to the page copy opened with WebFetch. Visually the page is a stack of full-width bands: a photographic hero (a phone mockup on a woven grey textile with a large white headline over it), a white band with a long statement set in very large type, a product-shot band with a short sentence and a "Discover our plans" link, an accordion list of plans with hairline rules, and dark sections (`#111010`) with the plan names tinted in light pastels. The system is typographic: one grotesque at 400 weight in a few big sizes, almost no shadow, square corners on buttons, and generous white space. Pastel mint, butter yellow and periwinkle appear only as text tints on the dark plan sections, and lavender `#e1dffd` fills a large band.

## Colors

Backgrounds by area: `#111010` (weight 8731), `#ffffff` (8255), `#e1dffd` (2379), `#151414` (520), `#332eca` (60), `#ffffff1a`, `#000000`, `#b5ffd2`, `#adc4ff`, `#9fe9ad` and `#ffeeb2`. Text by characters: `#000000` (3512), `#f0eeeb` (1171, warm off-white on dark), `#ffffff` (395), then `#b5ffd2` (8), `#ffeeb2` (7), `#adc4ff` (3). The primary action fill is `#332eca` (a saturated indigo) with `#ffffff` text on the "Subscribe" buttons of the plan sections (278px by 72px). The header "Subscribe" button in the capture sits on the hero photograph and renders as a white tile with black text; that is the nav styling, with nav background `#ffffff` and text `#000000`. Borders are `#ffffff26` (36 elements, hairlines on dark sections) and `#000000` (5, black rules). The tokens keep the measured names `primary`, `surface` (`#111010`) and `surface-3` (`#e1dffd`), and rename the three pastel text colors `plan-mint` (`#b5ffd2`, the "Standard" title in the capture), `plan-butter` (`#ffeeb2`) and `plan-periwinkle` (`#adc4ff`); which plan carries which tint was seen only for Standard. `ink-2` becomes `ink-warm` (`#f0eeeb`). Other CTA candidates measured: black fill with white text ("Contact Us", "Start project", both 50px tall, 18px) and white fill with black text ("Contact us").

## Typography

Two families. The main face is neue-haas-grotesk-display (an Adobe Fonts-style kit name; loaded at 500 per the font list, used at 400 for almost all text), carrying 5005 characters. The second is input-mono-narrow (loaded at 400, used for 91 characters at weight 300 or 400) for small label-like text. Every size is tracked at -0.32px except a 16px run at 0.2px (275 characters). Sizes by characters: 24px (2344), 18px (933), 57.28px (615), 16px (478), 43.2px (182), 45.6px (142), 32px (141), 14px (114), 12px (97), 40px (42) and 62.4px (8). Roles: h1 "PAISANA(House)" 32px, weight 400; h2 57.28px / 57.28px (the hero headline); h3 57.28px / 57.28px (the statement band); body 32px / 32px; button 16px; link 18px; footer headings 40px. Mobile: the hero headline measured 34.14px / 34.14px, body 32px, button 16px. Weights used are 400 (5020 characters), 300 (58) and 500 (18). Neue Haas Grotesk is a commercial face; a neutral grotesque such as Helvetica Neue or Arial would be the nearest installed substitute, though the site itself declares only `sans-serif`.

## Layout

The page is 1280px wide and 10655px tall. The header is a floating bar: a white nav tile on the left (Solutions, Plans, Services; 297px by 43px, 40px horizontal padding, each link 12px by 10px), the wordmark centred, and a white Subscribe tile on the right. Sections follow as full-bleed bands. Paddings seen most often are 10px (49 elements), 20px (26), 6px (25), 35px (18), 4px, 15px and 30px, with large section paddings of 84px, 199.5px and 605px recorded. The only measured gap is 4px. Text runs are left-aligned at the page margin; the two-column product band puts an image left and a short sentence plus link right; the plans list lives in the right column under an "Our Plans" label in grey. Spacing tokens: 2, 4, 6, 10, 12, 15, 16, 20, 30, 35px.

## Elevation & Depth

No box shadows were measured. Separation is by color band (`#ffffff`, `#e1dffd`, `#111010`, `#151414`), by hairlines (`#ffffff26` on dark, `#000000` rules on white), and by photography. The footer is `#111010` with `#ffffff` text and 20px by 35px padding.

## Shapes

Mostly square. Measured radii: 4px (21 elements), 50% (6, circular elements) and 2px (3). Buttons and nav measured 0px. The tokens: `none` 0px, `xs` 2px, `sm` 4px, `pill` 9999px (kept from the generated tokens). The primary button uses `none`.

## Components

- **Primary button ("Subscribe")**: fill `#332eca`, text `#ffffff`, 16px at 400, tracking -0.32px, 0px radius, padding 0px 20px, 278px by 72px, with an arrow glyph in the header version.
- **Secondary buttons**: "Contact Us" and "Start project" in black with white text (18px, 15px by 60 to 70px padding, 50px tall); "Contact us" in white with black text.
- **Nav**: white tile, black text 16px, links padded 12px 10px.
- **Text link**: 18px black with a small down arrow ("Discover our plans").
- **Plan accordion rows**: black hairline rules, plan name left, arrow right (Standard, Pro, Premium). The plan copy says Standard is "Ideal for small brands or specific projects."
- **Plan content**: per the page copy, Standard offers one request at a time with one dedicated senior creative, Pro two requests with two creatives and Premium three requests with three, with delivery averaging 2 to 3 days, unlimited revisions and project management in Notion; the page offers annual or monthly payment.
- **Footer**: `#111010`, white, 40px headings, email address and copyright.

## Design System Architecture

No public design system or brand guideline: the WebFetch of https://house.paisana.studio/ found no link to one, and no search was run. The de-facto system is minimal: only two root variables exist (`--swiper-theme-color: #007aff` and `--swiper-navigation-size: 44px`, both from the Swiper carousel library, so `#007aff` is not a brand color), so styling is class-level rather than token-level. The consistent signals are the single -0.32px tracking across sizes, the three-size rhythm (16/18/24 for text, 32 to 62 for statements), the 4px base radius, and the use of Adobe-style kit fonts. The carousel icons font swiper-icons is also loaded.

## Do's and Don'ts

- Do set statements in large neue-haas-grotesk at 400 with -0.32px tracking.
- Do alternate white, lavender `#e1dffd` and near-black `#111010` bands.
- Do use `#332eca` with white text for the subscribe action and keep corners at 0px.
- Do use pastel tints only as text on `#111010`.
- Don't use the Swiper blue `#007aff`.
- Don't add shadows or rounded buttons; none were measured.
- Don't use weights beyond 300, 400 and 500.

## Responsive Behavior

Measured at 390px: the hero headline 34.14px / 34.14px, two further measured sizes of 29.85px and 27.8px, body 32px (the measured body role), button 16px at 72px tall and 0px radius, and the size list 20px, 18px, 34.14px, 16px, 14px, 29.85px, 27.8px, 12px, 32px, 24px, 19.85px, 35.7px. Column behavior and the nav at mobile width are not measured.

## Iteration Guide

1. Canvas `#ffffff`, ink `#000000`; dark bands `#111010` with `#f0eeeb` or `#ffffff` text.
2. Use neue-haas-grotesk-display 400, -0.32px tracking, headline 57.28px / 57.28px.
3. Build the subscribe button 72px tall, padding 0px 20px, fill `#332eca`, radius 0.
4. Separate sections by band color and hairlines, never shadow.
5. Tint plan titles with `#b5ffd2`, `#ffeeb2` and `#adc4ff` on dark only.
