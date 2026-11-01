---
version: alpha
name: Dulcedo
category: "Fashion & Apparel"
description: "Dulcedo (dulcedo.com), a Montreal talent agency: near-black #0a0a0a pages with champagne-gold #c5ae79 text, light #f4f4f4 sections with black type, Helvetica Now Display in uppercase weight 800 at 100px with -3px tracking, Saol Display serif for the wordmark, black pill buttons 34px high and 2px-cornered cards."
colors:
  canvas: "#f4f4f4"
  page-largest: "#0a0a0a"
  ink: "#000000"
  primary: "#0a0a0a"
  on-primary: "#ffffff"
  gold: "#c5ae79"
  gold-dark: "#7c735c"
  gray-200: "#e0e0e0"
  stroke-dark: "#393939"
  stroke-light: "#cccccc"
typography:
  display:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 100px
    fontWeight: 800
    lineHeight: 80px
    letterSpacing: "-3px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 36.2091px
    fontWeight: 800
    lineHeight: 28.9673px
    letterSpacing: "-1.08627px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 18px
    fontWeight: 800
    lineHeight: 18px
    letterSpacing: "-0.54px"
    textTransform: uppercase
  body:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
  body-mobile:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 14.1519px
    fontWeight: 500
    lineHeight: 19.8126px
rounded:
  xs: 2px
  sm: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
  s11: 32px
  s12: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    height: 34px
  button-secondary:
    backgroundColor: "{colors.gold}"
    textColor: "{colors.page-largest}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    height: 34px
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
  nav:
    textColor: "{colors.gold}"
  text-input:
    textColor: "{colors.gold}"
    typography: "{typography.body}"
    padding: 0px 16px 0px 0px
    height: 22px
  card:
    backgroundColor: "{colors.gold}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.xs}"
    padding: 8px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.gold}"
---

## Overview

Dulcedo's site (https://dulcedo.com/, title "Talent Management Agency in North America - Dulcedo") presents a full-service agency that represents influencers, models, athletes and gaming creators, with offices in Montreal and Toronto. The look is editorial and luxurious: a near-black page (#0a0a0a) with champagne-gold (#c5ae79) text, switching to a light #f4f4f4 section with solid black type, and always set in compressed, heavy uppercase grotesk.

The capture opens on a black hero. A centred DULCEDO wordmark in a high-contrast serif sits between a left navigation (Talents, Models, Blog, Agency, a search glyph) and a right group (Contact, "My Cast (0)", an EN language switch). Thin gold concentric circles are drawn behind a single black-and-white portrait photograph in a tall rectangle flanked by tiny gold labels "WE ARE" and "DULCEDO®". The manifesto follows as a stack of gold uppercase lines, "We elevate voices that shape culture: building influence, impact, and lasting legacy.", centred and tightly leaded. Beneath it a champagne-gold card holds the serif wordmark, a short caps description ("DULCEDO® is a culture-first talent management agency elevating talent through brand partnerships, creative growth, and global influence."), a line-drawn circle glyph, and outlined pill links Manifesto, History and Our Vision. The page then turns light: huge black headings "MODELS (+)", "INFLUENCERS", "ATHLETES" follow. Page sections named in the source are Featured Profiles, CAST YOUR PROFILES, CHOOSE YOUR PROFILES, SEND A REQUEST, CAST THE TALENT, Get in touch and Latest Articles.

Copy is assertive and short, in capitals for display lines and sentence case for utility text.

## Colors

Two surfaces alternate: `page-largest` #0a0a0a (the largest background area, 8244 units; the stylesheet's `--color-black`, `--theme-color-bg`) and `canvas` #f4f4f4 (6376 units; `--color-gray-100`). The brand accent is `gold` #c5ae79 (`--color-gold`, `--theme-color-text`), used for text on black (795 characters), the manifesto headline, the footer and the navigation, and as the fill of the featured card and the Subscribe button. Text on light surfaces is `ink` #000000 (1675 characters, the most-read colour), and white #ffffff (429 characters) is used on black buttons.

Supporting values from the stylesheet: `--color-dark-gold` #7c735c, `--color-stroke-dark` #393939, `--color-stroke-light` #ccc, `--color-gray-200` #e0e0e0. A 5%-alpha black (#0000000d, 2189 area units) tints large panels. Tailwind default palettes (oklch greens, reds and greys) and the cookie-consent library's colours (`--cc-*`) are present in the stylesheet but are not brand values.

## Typography

Two families. Helvetica Now Display carries almost everything (3161 characters) in two weights: 800 for display and 500 for body. Display lines are uppercase with heavy negative tracking: 100px/80px at -3px (the manifesto and section headings), 130px at -3.9px and 140px at -4.2px for the largest section words, 50px at -1.5px, 28px at -0.84px, 18px at -0.54px (profile names such as "CHLOE CHRISTIAN") and 12px at -0.36px for small labels (783 characters). Body and navigation text is 16px/22.4px weight 500; the leading on the display sizes is tighter than the size (80px lines for 100px type).

Saol Display (32 characters; 300 italic and 400 normal faces) is the serif wordmark face used in the DULCEDO logotype and the card heading. Sizes by characters: 16px (1724), 12px (783), 50px (169), 28px (163), 100px (136), 18px (113), 14px (71), 130px (17). Weights: 500, 800, 400, 300.

Helvetica Now Display and Saol Display are commercial; if they cannot be licensed, keep uppercase 800 weight, the negative tracking ratios and 80% line-height, and use a heavy grotesque; the exact substitute is not measured.

## Layout

The page is 1280px wide and 11779px tall at desktop. The stylesheet declares `--header-height: 144px`, spacing units `--spacing-unit-sm` 12px, `--spacing-unit-md` 20px, `--spacing-unit-lg` 32px, `--spacing-unit-xl` 60px, and `--spacing-gutter` 20px. Measured gaps: 20px (38 uses), 2px (28), 10px (26), 12px (24), 8px (20), 24px (16); paddings 60px (15), 14px (13), 6px (12). The footer is 1265px wide and 1730px tall on #0a0a0a.

Composition is centred and vertical: single-column stacks of enormous headings, a narrow gold card centred in the dark area, then wide light sections that run to the container edges. The header is a three-part bar (navigation left, wordmark centre, utilities right).

## Elevation & Depth

The page is flat; no box shadow was measured on an element. Depth comes from the dark and light section change, the gold card sitting across the dark-light boundary, thin gold circle outlines in the hero, and photography. The stylesheet declares a modal shadow `0 .625em 1.875em rgba(0,0,2,.3)` (belonging to the cookie dialog) and Tailwind ring variables; these are not part of the visual identity.

## Shapes

Two shape rules coexist. Controls are fully pill-shaped: the button and link radii measure 3.35544e+07px (the browser's computed value for a fully rounded end), which the token file stores as 9999px. Cards and image tiles are almost square at 2px (32 elements). A 32px radius (12 elements) appears on larger panels and a 100% radius on 4 round elements. The hero has circle outlines and a rectangular portrait with square corners.

## Components

**Primary button** (`button-primary`): #0a0a0a fill, white 16px weight-500 text, fully rounded, 34px high (widths 104px for "Contact us", 128px for "Go to My Cast", 65px for "Read"); at 390px the label text is 14.1519px and the height stays 34px.

**Secondary button** (`button-secondary`): gold #c5ae79 fill with #0a0a0a text, pill, 34px tall, 100px wide ("Subscribe").

**Outlined pill link** (`link`): "Manifesto", "History", "Our Vision", 36px tall, 124px wide for Manifesto, black text; borders in #0a0a0a were measured on 3 elements.

**Navigation** (`nav`): gold 16px/22.4px weight 500 on the dark header; the language list (EN, FR, ES) uses the same style with 16px right padding and a 22px height.

**Card** (`card`): gold fill, 2px radius, 8px padding, black caps text.

**Footer**: #0a0a0a with gold links in columns (Home, Models, Montreal, Toronto, Talents, Influencers and more).

**Profile tiles**: portrait photograph above an 18px/800 uppercase name.

A "I understand" button measured by the extractor belongs to a cookie banner and is not a design component.

## Design System Architecture

No public design system, brand guidelines or press kit is published on the pages opened (https://dulcedo.com/, with navigation and footer). The de-facto system is a Tailwind CSS build: the stylesheet exposes `--tw-*` variables, `--spacing: .25rem`, `--radius-sm` 2px and `--radius-4xl` 2rem, alongside bespoke tokens `--color-gold`, `--color-black`, `--color-gray-100`, `--color-gray-200`, `--color-stroke-dark`, `--color-stroke-light`, `--theme-color-bg`, `--theme-color-text`, `--unit-sm/md/lg/xl` and `--header-height`. The only external stylesheet in the static HTML is the cookie-consent library (orestbida cookieconsent 3.0.1 from cdn.jsdelivr.net), which is third-party and excluded.

## Do's and Don'ts

Do alternate #0a0a0a and #f4f4f4 sections and use gold #c5ae79 only for text and accents on black. Do set display text in uppercase weight 800 with strongly negative tracking. Do use pill buttons at 34px height and 2px-cornered cards. Do keep the serif wordmark for the logo only.

Don't add drop shadows. Don't use gold for body text on light backgrounds; light sections use #000000. Don't round cards beyond 2px for tiles. Don't treat the cookie dialog buttons as brand buttons. Don't use Tailwind's default colours as brand colours.

## Responsive Behavior

At 390px: display text becomes 36.2091px with a 28.9673px line-height and -1.08627px tracking (the h2 block is 227px wide), body text 14.1519px/19.8126px, and buttons 34px tall. The mobile navigation text switches to #0a0a0a on #f4f4f4 (desktop: gold on dark), and `--mobile-header-height` is 0px. Mobile size frequencies: 14.1519px (1766 characters), 10.6139px (657), 30.3964px (169), 21.6923px (163), 36.2091px (136), 15.9208px (113). The mobile sizes are fractional values, consistent with continuously scaled type. Layout reflow was not measured.

## Iteration Guide

Start with page-largest #0a0a0a, canvas #f4f4f4, ink #000000 and gold #c5ae79. Write display lines in uppercase Helvetica Now Display 800 at -3% tracking, 80% leading. Use pill buttons 34px high (black or gold), a 2px-cornered gold card, and alternate dark and light sections. Re-check the gold on black contrast and keep photography black-and-white. Ignore cookie-banner components.
