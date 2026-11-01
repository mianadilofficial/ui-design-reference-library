---
version: alpha
name: Produx Design
category: "Agencies & Studios"
description: "Produx (produx.design), a branding studio whose site is a near-black #0e0e0e canvas with a huge thin PRØDUX wordmark, At Aero grotesque headlines at 56.832px, DM Mono 12-17px uppercase labels in bracket syntax, and large tilted flat panels in olive #303930 and #545e54; radii are pill-only."
colors:
  canvas: "#0e0e0e"
  page-largest: "#303930"
  ink: "#a9a9a9"
  primary: "#303539"
  panel-olive: "#545e54"
  ink-light: "#f2f2f2"
  ink-faint: "#ffffff33"
  ink-silver: "#c6c6c6"
  hairline: "#303030"
  text-input-bg: "#ffffff0d"
  text-input-border: "#ffffff26"
  panel-stone: "#d4cccc"
  panel-bronze: "#5f5136"
typography:
  display:
    fontFamily: "\"At Aero\""
    fontSize: 56.832px
    fontWeight: 400
    lineHeight: 62.5152px
  display-mobile:
    fontFamily: "\"At Aero\""
    fontSize: 46.41px
    fontWeight: 400
    lineHeight: 51.051px
  heading:
    fontFamily: "\"At Aero\""
    fontSize: 40.704px
    fontWeight: 400
    lineHeight: 50.88px
  subheading:
    fontFamily: "\"At Aero\""
    fontSize: 21.376px
    fontWeight: 400
    lineHeight: 26.72px
  body:
    fontFamily: "\"DM Mono\""
    fontSize: 14.208px
    fontWeight: 400
    lineHeight: 21.312px
  nav:
    fontFamily: "\"DM Mono\""
    fontSize: 12.416px
    fontWeight: 400
    lineHeight: 12.416px
  link:
    fontFamily: "\"DM Mono\""
    fontSize: 17.664px
    fontWeight: 400
    lineHeight: 26.496px
    textTransform: uppercase
rounded:
  pill: 9999px
spacing:
  s1: 2.94px
  s2: 3.12px
  s3: 3.2px
  s4: 4px
  s5: 4.25px
  s6: 5.12px
  s7: 5.25px
  s8: 6.37px
  s9: 7.04px
  s10: 7.94px
components:
  link:
    textColor: "{colors.ink-light}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-light}"
    padding: 43.2px 70.4px 0px
  nav-link:
    textColor: "{colors.ink-light}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-light}"
    typography: "{typography.nav}"
    padding: 10.624px
    height: 39px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-light}"
    padding: 93.6px 70.4px 31.2px
---

## Overview

`https://www.produx.design/` (title "PRODUX | Design that Speaks") is the site of a branding studio. The copy states its offer in the first screen: "You feel the brand before it speaks®" as the h1, and "Produx builds brand identities for companies that care how things feel and how they are perceived over time." The page is long, 18,666px at a 1280px viewport with 1,303 visible elements, and behaves like a showreel: a gigantic thin wordmark PRØDUX (with a slashed Ø) spans the full width at the top; a small "[SCROLL DOWN]" bracket label sits at the top left; a large olive panel then tilts across the viewport carrying the word "Branding company" at an angle, with further sections for works (case names such as "Edgerun Industries" set as h3), a section whose h2 begins "In 14 days, we shape a …" and a footer menu.

The mood is dark, minimal and editorial. Almost no colour appears except large flat olive-green and stone panels used as stages for the studio's work. The interface language is typographic: square-bracket labels like "[WORK]", "[STUDIO]", "MENU/" and uppercase mono links like "VIEW ALL WORKS". The cookie notice has a playful tone ("A long time ago, in a browser far far away…", "May the cookies be with you", "I'll pass, thanks"); it is a consent overlay and not documented as brand UI.

Reading the capture from the top: the wordmark is drawn in a thin monoline grotesque with a slashed Ø, tinted a light grey rather than pure white against the black; the h1 is two lines at the left; the paragraph and the cookie card sit in a narrow column at the right; and below the fold the first work panel arrives as a skewed rectangle that bleeds off both edges. Imagery in this first screen is absent; the colour field itself is the image. Copy is short, confident and wry, written in the first person plural ("we shape") with small jokes in the consent notice.

## Colors

Text colours by characters: `#303539` (1,007), `#a9a9a9` (718), `#f2f2f2` (506), `#ffffff33` (136), `#0e0e0e` (106), `#c6c6c6` (42), `#303930` (17), `#ffffff` (8). Backgrounds by area: `#303930` (5,132), `#545e54` (1,945), `#0e0e0e` (1,721), `#d4cccc` (840), `#5f5136` (391), `#141414`, `#6e6554`, `#ffffff0d`.

- **canvas `#0e0e0e`**: the body background and footer. **ink-light `#f2f2f2`**: the body text colour, nav, links and headlines on the dark canvas. **ink `#a9a9a9`**: the intro paragraph grey.
- **page-largest `#303930`** and **panel-olive `#545e54`**: the olive-green flat panels that dominate the scroll; the large tilted panel in the capture is the lighter olive.
- **panel-stone `#d4cccc`** and **panel-bronze `#5f5136`**: further panel fills measured lower on the page.
- **primary `#303539`**: the colour of the largest share of measured text characters, a dark slate-grey text used on light or tinted panels. The site has no filled call-to-action button, so no brand action colour exists beyond this; the name `primary` follows the generator's role assignment.
- **ink-faint `#ffffff33`**, **ink-silver `#c6c6c6`**, **hairline `#303030`**, **text-input-bg `#ffffff0d`**, **text-input-border `#ffffff26`**: translucent whites and greys for secondary text, dividers and the newsletter-style input.

## Typography

Two families: **At Aero** (a variable grotesque, weights 100-900, loaded as At Aero, Regular and Medium) for headings and statements, and **DM Mono** (300, 400, 500) for body copy, labels and navigation. By characters: DM Mono 1,384, At Aero Regular 907, At Aero 311, At Aero Medium 74. No fallback beyond the family names is declared in the measured stacks.

- **display**: At Aero 400, 56.832px/62.5152px (h1); mobile 46.41px/51.051px.
- **heading**: At Aero 400, 40.704px/50.88px.
- **subheading**: At Aero 400, 21.376px/26.72px (h3 case names).
- **body**: DM Mono 400, 14.208px/21.312px.
- **nav**: DM Mono 400, 12.416px, line-height equal to size; labels are wrapped in brackets.
- **link**: DM Mono 400, 17.664px/26.496px, uppercase.

Other sizes by characters: 21.248px (884), 8.96px (167), 14.08px (135), 10.624px (53). Weights: 400 (2,508), 300 (120), 200 (48). All headings use regular weight; the page gets its hierarchy from scale and the sans/mono pairing.

## Layout

A single full-width column with generous margins: the nav and footer carry 70.4px side padding (nav `43.2px 70.4px 0px`, footer `93.6px 70.4px 31.2px`). The footer is 670px high. The intro sets the h1 at the left and a short mono paragraph at the right on the same row. Panels are full-bleed and can be rotated, so the grid is broken deliberately. Spacing values measured are small (2.94 to 7.94px steps) for interface details, with the large gaps coming from section padding.

## Elevation & Depth

No box-shadow was measured. Depth comes from large flat colour planes overlapping the black canvas, rotation of panels, and low-opacity white fills (`#ffffff0d` for fields, `#ffffff33` for faded text). The site also uses a fixed full-screen menu overlay (`nav-overlay bg-outer-space text-white-smoke fixed`), hidden at capture, which is not documented as a component.

## Shapes

The only radius measured is a computed 3.35544e+07px (six elements), the browser value for a fully rounded pill. Everything else computes to 0px: the input has 0 radius with a 1px `#ffffff26` border, panels are sharp-cornered polygons, and the wordmark is hard-edged.

## Components

- **Nav**: bracketed uppercase DM Mono 12.416px labels ("[WORK]", "[STUDIO]"), duplicated for a rollover effect, in `#f2f2f2`; padding `43.2px 70.4px 0px`, 56px high.
- **Link**: "VIEW ALL WORKS", DM Mono 17.664px uppercase, `#f2f2f2`.
- **Text input**: `#ffffff0d` fill, `1px solid #ffffff26`, 0 radius, 10.624px padding, 39px high, DM Mono 12.416px.
- **Panels**: full-bleed olive planes (`#303930`, `#545e54`) with a mono caption such as "Branding company" set at an angle.
- **Footer**: `#0e0e0e`, "MENU/" and the same bracketed links, uppercase 300-weight 12.416px, 670px high.
- **Pill elements**: six rounded elements measured as pills (the pill token).

## Design System Architecture

No public design system or brand guideline was opened for this site, and none is cited. The stylesheet is Tailwind-based: the root exposes Tailwind variables (`--text-2xl: 1.5rem`, `--tracking-tight: -.025em`, `--leading-tight: 1.25`, `--leading-snug: 1.375`, `--blur-lg: 16px`, `--blur-2xl: 40px`, `--font-weight-extralight: 200`, easing curves such as `--ease-in-out: cubic-bezier(.4,0,.2,1)`), and element class names use named colours such as `bg-outer-space` and `text-white-smoke`. The brand layer is therefore a small set of named colours and two typefaces applied through utility classes. Measured from `https://www.produx.design/` (`web/data/extracted/produx-design.json`).

## Do's and Don'ts

- Do keep the canvas `#0e0e0e` and set text in `#f2f2f2` with `#a9a9a9` for supporting paragraphs.
- Do use At Aero at regular weight for statements and DM Mono for everything functional.
- Do write nav labels in square brackets, uppercase.
- Do use full-bleed olive panels as stages and allow them to tilt.
- Don't add shadows or gradients; none were measured.
- Don't round rectangles; radii are 0 except true pills.
- Don't bold headings; the weights measured are 400, 300 and 200.
- Don't document the cookie banner or the fixed menu overlay as brand components.

## Responsive Behavior

The mobile pass recorded type only: the h1 went from 56.832px/62.5152px to 46.41px/51.051px (At Aero 400, `#f2f2f2`), and the mobile size distribution was 15.522px (1,013 characters), 13.572px (870), 14px (225), 23.283px (187), 12px (82) and 24px (68). Nav form, panel behaviour and breakpoints on mobile were not measured.

## Iteration Guide

1. Canvas `#0e0e0e`, text `#f2f2f2`, supporting grey `#a9a9a9`.
2. Statements in At Aero 400 at 56.832px (display) and 40.704px (heading); functional text in DM Mono 12.416-17.664px.
3. Make navigation bracketed and uppercase; make links uppercase.
4. Introduce colour only through flat olive panels (`#303930`, `#545e54`).
5. Keep corners square except true pills; keep fields at `#ffffff0d` with a `#ffffff26` border.
6. Re-measure: `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=produx-design --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=produx-design`.
