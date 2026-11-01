---
version: alpha
name: "OUTFIT by ++hellohello"
category: "Fashion & Apparel"
description: "OUTFIT, the apparel store of the design studio ++hellohello: an #ede4dd page with signal-red #ff0001 text, a giant 163.2px wordmark, 24px / -0.6px tracked display, black and #d2cac3 surfaces, and a cyan #00c0eb nav-role colour; every corner is square."
colors:
  canvas: "#ede4dd"
  ink: "#ff0001"
  primary: "#ff0001"
  surface-sand: "#d2cac3"
  surface-black: "#000000"
  ink-cyan: "#00c0eb"
  hairline: "#e5e7eb"
typography:
  display:
    fontFamily: font, "font Fallback"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.6px"
  display-mobile:
    fontFamily: font, "font Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
  heading:
    fontFamily: font, "font Fallback"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  body:
    fontFamily: font, "font Fallback"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: "-0.35px"
  nav:
    fontFamily: font, "font Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 24px
  s6: 32px
  s7: 64px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    transform: matrix(1, 0, 0, 1, 0, 6.7054)
  nav:
    textColor: "{colors.ink-cyan}"
    transform: matrix(1, 0, 0, 1, 0, -11.5612)
  nav-link:
    textColor: "{colors.ink-cyan}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 24px
---

## Overview

OUTFIT® by ++hellohello (https://outfit.hellohello.is/) is a small apparel store and "signature collection" made by the design studio ++hellohello, whose footer places it in Montevideo, Uruguay. The page text states: "Created by the ++hellohello team, this store and signature collection celebrates our collective creativity and passion for apparel. Carefully designed." The nav has Shop, Bag (0) and Menu; the headings are "Why", "Made to be worn." and "Or judged. Or both."; footer links go to the studio's own pages (Work, Services, About, Careers, Let's talk, Privacy Policy) and social profiles (Dribbble, Instagram, LinkedIn, Twitter (X)). The page is 1280px wide and 3768px tall.

The products are named like typography jokes: "Off by Design" ($36.50), "Kerned Confidence" ($25.00), "Specimen No. HH01" ($30.00), "Grid System Go" ($30.00), "Neutral Grotesk" ($30.00), "Red Dot Not Award" ($20.00), "Gridlocked" ($25.00), "Hello Week 001" and "002" ($30.00 each), "Monochrome Manifest" ($30.00), "Positive Space", "Whitespace Matters" ($33.00) and "Command + K" ($15.00). The voice is design-literate self-parody. The capture opens with a full-width OUTFIT wordmark in red with an ® mark, a red rule beneath, a four-column caption row (OUTFIT / WHY plus the paragraph / VISIT ++ WEBSITE and SHIPPING & RETURNS / © 2026), and then a product grid on an irregular masonry layout: tall studio photographs of black garments, bags, caps and a red beanie on pale grey backdrops, each with a name at left, a price at right and an "APPAREL" tag with a small red dot below. Three dots at the top right (black, white, red) sit beside the Shop and Bag links.

## Colors

Measured backgrounds: #d2cac3 (weight 1357), #ff0001 (1040), #000000 (1024) and the body role background #ede4dd. Text colours: #ff0001 (889 characters) and #00c0eb (17). The body role's child colours are #ede4dd, #00c0eb, #000000 and #ff0001.

- **Canvas #ede4dd**: the warm paper-beige page.
- **Ink #ff0001** and **primary #ff0001**: the same signal red carries all text, the wordmark, the rule and the tag dots. There is no neutral text colour; red on beige is the identity.
- **Surface-sand #d2cac3**: a slightly darker beige used for image backdrops and panels.
- **Surface-black #000000**: black blocks (product photography is mostly black garments).
- **Ink-cyan #00c0eb**: the colour the extractor measured on the nav role and body role (17 characters).
- **Hairline #e5e7eb**: a single border colour measured once.

Neutral variables in the CSS are in Lab notation (`--color-neutral-200` lab(90.952% 0 0), `--color-neutral-300` lab(84.92% 0 0), `--color-neutral-500` lab(48.496% 0 0), `--color-neutral-600` lab(34.924% 0 0)), and `--cursor-color` references `--color-red`. The three dots at the top of the capture are black, white and red; whether they switch a theme was not measured.

## Typography

The page loads one family, registered under the generic name "font" (weights 400, 700, 800), with a fallback "font Fallback"; the actual typeface name is not exposed in the measurements and was not confirmed on any page opened for this brief. The capture shows a neo-grotesque with tight spacing. 906 characters are in it.

- **Display** 24px / 32px, weight 400, letter-spacing -0.6px: the Shop link and product names (161 characters); mobile 18px / 20px.
- **Heading** 12px / 16px, weight 700, uppercase: the "WHY" label.
- **Body** 14px / 16px, weight 700, letter-spacing -0.35px (132 characters).
- **Nav** 16px / 24px, weight 400.

Other sizes: 18px (271 characters, product names), 11px (91, the APPAREL tags), 76.8px (35 characters, -3.84px tracking) and 163.2px (3 characters, -8.16px, the OUTFIT wordmark). Tracking is about -2.5% on the 24px text and -5% on the oversized sizes. Weight 400 covers 530 characters, 700 covers 338 and 900 covers 38.

## Layout

A full-width header with a ++ logo at the left, Shop and Bag at the right and the three colour dots; a wordmark that spans the whole width; a rule; a four-column caption row; then a product area where items are placed on a column grid of equal-width columns with irregular vertical offsets and one large double-width feature item ("Gridlocked", $25.00). Measured gaps: 4px (28), 8px (26), 24px (12), 32px (4), 64px (4), 12px (4). Paddings: 24px (4 uses), 3px, 32px, 12px. The footer has padding 0px 24px. The side margin in the capture is the same 24px.

## Elevation & Depth

No external shadows were measured. Two inset shadows of a single 0.8px line, rgb(0, 0, 0) and rgb(255, 0, 1), act as 0.8px outlines on circular theme dots. Depth otherwise comes from product photography on grey backdrops and the one overlapping image pair in the feature tile.

## Shapes

Rectilinear except for circles: the only measured border radius is 3.35544e+07px (3 uses), effectively full pill for the three theme dots; the token is pill 9999px. Images, tags and rules are square-cornered. The red tag dots and the ® are round marks.

## Components

- **nav**: right-aligned links "Shop" (underlined in the capture) and "Bag (0)"; the measured nav-role colour is #00c0eb.
- **Product tile**: photograph on a grey backdrop, product name in 18px, price right-aligned, "APPAREL" tag with a red dot at 11px.
- **Theme dots**: three 0.8px-outlined circles (black, white, red).
- **link**: red 12px bold uppercase ("VISIT ++ WEBSITE", "SHIPPING & RETURNS").
- **footer**: red text, padding 0px 24px; links to the studio and socials as listed above.

The product tile pattern repeats thirteen times in the page text, always in the same order: product name, price, category tag. The tag reads "APPAREL" for every item, so the store has one category and no filtering controls were visible in the capture. Prices are shown in dollars with two decimals, and the cheapest item is "Command + K" at $15.00 while the most expensive is "Off by Design" at $36.50. The bag link carries a live count, "Bag (0)", in the same type style as the Shop link, which keeps the header to two words and an icon-free layout.

## Design System Architecture

No public design system or brand guidelines are linked; the store belongs to the studio's own website (https://www.hellohello.is/ with pages for work, services, about and careers). The CSS shows a Tailwind-style variable set (`--tw-ring-shadow`, `--text-lg` 1.125rem, `--text-2xl` 1.5rem, `--text-7xl` 4.5rem) with a large library of named easings (`--ease-soft-bounce` cubic-bezier(.34,1.56,.64,1), `--ease-back-out`, `--ease-out-extreme` cubic-bezier(.19,1,.22,1), `--ease-sine-in-out` and others) and Lab-notation neutrals. The de-facto system is therefore two colours (beige and red), one typeface, a single column grid and an unusually rich motion vocabulary; motion was not recorded for this brief.

## Do's and Don'ts

- Do set all text in the one signal red #ff0001 on beige #ede4dd.
- Do make the wordmark span the full width with tight negative tracking.
- Do write product names as design jokes and keep prices right-aligned.
- Do keep corners square, with circles only for dots.
- Don't add grey or black text; the measured palette has none.
- Don't use shadows beyond the 0.8px outline.
- Don't use decorative icons; tags use a plain red dot.
- Don't claim the cyan #00c0eb as a brand accent; it was measured on only 17 characters.

## Responsive Behavior

The 390px pass measured: a "Off by Design" line at 18px / 20px in #ff0001 (171px wide), the "WHY" heading at 12px / 16px, weight 700, uppercase (215px wide), and the paragraph at 14px, weight 700. Grid column counts and wordmark scaling at mobile width were not measured.

## Iteration Guide

1. Set canvas #ede4dd and all text #ff0001.
2. Make a full-width wordmark at 163.2px with -8.16px tracking and a red rule beneath.
3. Build the grid with 24px margins and gaps of 4px, 8px and 24px; place items with irregular vertical offsets.
4. Write product names with a typographic pun and tag each with a red-dot "APPAREL" label.
5. Measure the Shop and Bag pages with the extractor (`--slug=outfit--page --url=<url> --force --no-motion`) before adding tokens; the theme switch was not measured.
