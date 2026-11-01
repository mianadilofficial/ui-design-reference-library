---
version: alpha
name: Akaru
category: "Retail & E-commerce"
description: "Akaru (akaru.fr), creative web agency in Lyon: beige #f1efeb canvas with #0e0e0e ink, Alliance Neue 85.33px section titles and Alliance Platt 8.89px labels, rotating blue, pink, green and terracotta panels, pill and circle controls."
colors:
  canvas: "#f1efeb"
  ink: "#0e0e0e"
  primary: "#0e0e0e"
  surface-2: "#bfccd8"
  ink-2: "#ffffff"
typography:
  display:
    fontFamily: "\"Alliance Neue\", sans-serif"
    fontSize: 17.7777px
    fontWeight: 700
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Alliance Neue\", sans-serif"
    fontSize: 33.28px
    fontWeight: 700
  heading:
    fontFamily: "\"Alliance Neue\", sans-serif"
    fontSize: 85.3328px
    fontWeight: 400
  subheading:
    fontFamily: "\"Alliance Neue\", sans-serif"
    fontSize: 28.4443px
    fontWeight: 500
  body:
    fontFamily: "\"Alliance Neue\", sans-serif"
    fontSize: 15.9999px
    fontWeight: 400
  nav:
    fontFamily: "\"Alliance Neue\", sans-serif"
    fontSize: 14.2221px
    fontWeight: 400
  link:
    fontFamily: "\"Alliance Neue\", sans-serif"
    fontSize: 14.2221px
    fontWeight: 500
  body-dominant:
    fontFamily: Alliance Platt
    fontSize: 8.88883px
    fontWeight: 600
rounded:
  xs: 26.67px
  sm: 88.89px
  pill: 9999px
spacing:
  s1: 1.78px
  s2: 3.56px
  s3: 4.44px
  s4: 5.33px
  s5: 6.22px
  s6: 8.89px
  s7: 12.44px
  s8: 16.89px
  s9: 17.78px
  s10: 24.89px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-2}"
    padding: 26.6665px 22.2221px 0px 26.6665px
  nav-link:
    textColor: "{colors.ink-2}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

# Akaru

## Overview
Akaru (akaru.fr, titled "Agence web lyon : création de site internet et design graphique", page language fr-fr) is a creative web agency in Lyon offering website creation and graphic design. Per the home page it presents "savoir-faire de précision" with "amour du détail qui tue", lists services (Stratégie & Conseil, Direction Artistique, Site e-commerce, Site Vitrine, Expérience Digitale), shows projects (Archidomo, Orlinski, Pikko, UBAC, Sanctuary, Entreautre, Moon Studio, Maison Yokō, Avoriaz) and reports 35 Awwwards and 19 FWA distinctions. The copy voice is playful and confident, with short lines and self-aware humour ("on dit non au déjà fait", "On vous met au défi de nous mettre au défi"). The page measured 22,422px tall at 1280px, so the home page is a very long scroll.

The capture shows a warm beige canvas (`{colors.canvas}` #f1efeb) with a stacked project reel: a dark green panel with the logo (a condensed blocky wordmark), the project title "Orlinski Editions" in white at the left edge with a circle-arrow button at right, then full-bleed project photographs stacked directly on top of each other without gaps (sneakers on rock; a person facing a wall of screens). A black pill "MENU" button with an orange dot is fixed at the top right. In the capture the stacked reel occupies only the left portion of the width and the rest is the beige canvas; the extracted nav links are Projets, Expertises, Agence and Contact. The h1 role detected by the extractor is an "AWWWARDS" badge label (17.7777px, uppercase, white), not the page title; the mobile pass recorded the real h1 "Akaru, agence web creative à lyon" at 33.28px / 700.

## Colors
Painted area: beige #f1efeb (8,280), blue-gray #bfccd8 (6,826), black #0e0e0e (6,600), pink #b692a1 (1,706), sage green #798e7b (1,160), terracotta #e49366 (1,024). Text: #0e0e0e (1,222 characters) and white (484).
- `{colors.canvas}` #f1efeb, `{colors.ink}` #0e0e0e, `{colors.primary}` #0e0e0e, `{colors.surface-2}` #bfccd8, `{colors.ink-2}` #ffffff.
- The shipped CSS names the full palette: `--beige` #f1efeb, `--blue` #bfccd8, `--black` #0e0e0e, `--dark-grey` #1a1a1a, `--mid-grey` #262626, `--grey` #666d73, `--light-grey` #f7f7f7, `--green` #798e7b, `--pink` #b692a1, `--terra` #e49366, `--purple` and `--highlight` #7345ff, `--white` #fff, `--primary` #fff and `--secondary` #0e0e0e. The purple #7345ff is published as highlight but was not measured in painted area. Colored panels (blue, pink, green, terracotta) change per project.

## Typography
Two families: **Alliance Neue** (400, 500 and 700 measured) for headings and text, and **Alliance Platt** (600) for the tiny dominant labels (8.88883px, weight 600, 682 characters).
- `heading` 85.3328px / 400: section titles such as "Projets" (86 characters).
- `subheading` 28.4443px / 500.
- `body` 15.9999px / 400.
- `nav` 14.2221px / 400 and `link` 14.2221px / 500; the body element is 14.2221px / 500.
- `display` 17.7777px / 700 uppercase: the badge label detected as h1.
- `display-mobile` 33.28px / 700: the real h1 on the 390px pass.
- `body-dominant` Alliance Platt 8.88883px / 600.
Measured sizes by characters: 8.88883px (682), 10.6666px (374), 15.9999px (321), 28.4443px (99), 85.3328px (86), 47.9997px (75), 14.2221px (30), 17.7777px (22), 42.6664px (9), 56.8885px (8). Weights: 600 (808), 400 (623), 500 (199), 700 (76). The system leans on one huge size (85.3px) and many tiny labels.

## Layout
Measured sizes are fractional pixel values (85.3328px, 47.9997px, 15.9999px); the arithmetic 85.3328 = 6.667 × 12.8 is noted but the sizing method in the CSS was not read. The scroll runs 22,422px. Spacing tokens: 1.78, 3.56, 4.44, 5.33, 6.22, 8.89, 12.44, 16.89, 17.78 and 24.89px; gaps include 115.555px (10 uses) between large blocks. The nav padding is 26.6665px 22.2221px 0px 26.6665px. Project panels are stacked full-bleed with their title overlaid at the top left.

### Voice and microcopy
Copy is French, short and playful. Navigation labels are one word (Projets, Expertises, Agence, Contact, plus a pricing heading, Nos prix). Project entries are a client name with a type, for example "Orlinski Editions". The agency signs its claims with counts rather than adjectives (35 Awwwards, 19 FWA, Site of the Month and Site of the Day for Akaru V4) and closes with a challenge to the visitor. Since the page is 22,422px tall and the extractor found only two text colors (black and white), the page relies on imagery and colored panels, not typographic color, to separate sections.

### Measured paddings and gaps
Spacing is recorded in small fractional steps (1.78, 3.56, 4.44, 5.33, 6.22, 8.89, 12.44, 16.89, 17.78 and 24.89px), and the recurring gap values are 4.44442px (8 uses), 8.88883px (8), 12.4444px (4), 17.7777px (4), 6.22218px (4) and 1.77777px (2), with one oversized gap of 115.555px used ten times between big blocks. In practice this means tight clusters of tiny labels inside sections, separated by very large empty intervals.

## Elevation & Depth
No drop shadows. The only shadow measured is an inset 0.888883px ring in black, `rgb(14, 14, 14) 0px 0px 0px 0.888883px inset` (7 elements), which draws hairline outlines on pills and chips. Depth in the capture comes from stacking full-bleed images and colored panels.

## Shapes
Radii: 26.6665px (10 elements, `{rounded.xs}`), 88.8883px (8, `{rounded.sm}`) and 100% (4, circles such as the arrow button). The MENU button is a fully rounded black pill.

## Components
- **nav** (MENU button): black #0e0e0e fill, white text, padding 26.6665px 22.2221px 0px 26.6665px, pill shape with an orange dot.
- **nav-link**: white 14.2221px links on the dark menu surface.
- **link**: black 14.2221px / 500.
- **circle arrow button**: 100% radius, outlined by the inset 0.888883px ring, with a northeast arrow.
- **footer**: black text on the canvas.
No hover states were recorded (empty hover list) and no standard button was detected.

## Design System Architecture
Akaru does not link a public brand guideline or design system from its home page. The system is the named-color CSS variable list above (`--beige`, `--blue`, `--black`, `--green`, `--pink`, `--terra`, `--purple`) plus the two Alliance families, with `--sbw: 0px` as the only layout variable. Sources opened: https://www.akaru.fr/ (page text; shipped CSS via extractor).

## Do's and Don'ts
- Do build on #f1efeb with #0e0e0e text and rotate project panels through blue, pink, green and terracotta.
- Do pair one huge Alliance Neue size (85.3328px) with tiny Alliance Platt labels (8.88883px, 600).
- Do use pill and circle controls with the thin inset ring.
- Do stack full-bleed images edge to edge.
- Don't add drop shadows.
- Don't use the purple #7345ff as a surface; it is a published highlight only.

## Responsive Behavior
Measured at 390px: the h1 "Akaru, agence web creative à lyon" is Alliance Neue 33.28px / 700, white. No mobile call to action was detected, and layout, breakpoints and menu behavior on mobile were not measured.

## Iteration Guide
The tiny label size deserves emphasis: 8.88883px and 10.6666px together account for 1,056 measured characters, more than the 650 characters of all other measured sizes combined, so small annotation text is the dominant texture of the page, with the 85.3328px titles as the only loud element.
Keep to the measured facts when extending the system: two text colors only (#0e0e0e and #ffffff), six painted colors (beige, blue-gray, black, pink, sage and terracotta), two type families, three radii (26.6665px, 88.8883px, 100%) and one inset ring shadow. Anything beyond that, including hover behavior, needs a new measurement first.
1. Beige canvas, black ink, one colored panel per project from the named palette.
2. Alliance Neue 85.3328px for section titles, 15.9999px body, Alliance Platt 8.88883px labels.
3. Black pill MENU button; outlined circle arrows.
4. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=akaru-2 --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=akaru-2`.
