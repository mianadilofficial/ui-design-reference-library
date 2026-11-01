---
version: alpha
name: TitanGate Equity
category: "Tech & AI"
description: "Dark, invitation-only private-markets site: black canvas with white Fellix display at 87.04px and 32px body, PP Supply Sans mono-style uppercase labels at 12px with 3.2px tracking, a translucent white button (#ffffff1a, 2.4px radius) and ghosted greys #606060 and #202020."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  ink-dim: "#202020"
  ink-muted: "#606060"
  ink-ghost: "#363636"
  button-primary-bg: "#ffffff1a"
typography:
  display:
    fontFamily: Fellix, Arial, sans-serif
    fontSize: 87.04px
    fontWeight: 400
    lineHeight: 78.336px
    letterSpacing: "-3.84px"
  display-mobile:
    fontFamily: Fellix, Arial, sans-serif
    fontSize: 58.5px
    fontWeight: 400
    lineHeight: 52.65px
    letterSpacing: "-1.17px"
  heading:
    fontFamily: Fellix, Arial, sans-serif
    fontSize: 22.4px
    fontWeight: 400
    lineHeight: 24.64px
    letterSpacing: "-0.32px"
  subheading:
    fontFamily: Fellix, Arial, sans-serif
    fontSize: 66.56px
    fontWeight: 400
    lineHeight: 66.56px
    letterSpacing: "-1.6px"
  body:
    fontFamily: Fellix, Arial, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 35.2px
    letterSpacing: "-0.32px"
  button:
    fontFamily: "\"PP Supply Sans\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: 3.2px
    textTransform: uppercase
rounded:
  xs: 2.4px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6.4px
  s3: 8px
  s4: 10px
  s5: 11.2px
  s6: 12.8px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 20px
    height: 32px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
---

## Overview

TitanGate Equity (https://titangatequity.com/, title "TitanGate Equity | A New Class of Ownership") presents itself as an invitation-only network offering tokenised access to private-market opportunities. A fetch of the page lists the structure: Vision, Opportunities, Pioneers and Manifesto anchors, a "Titan's Gate" member link, sectors (Artificial Intelligence, Financial Technology, Space Exploration, Enterprise Infrastructure, Healthcare, Biotech, Next-Gen Defense, Cybersecurity), a four-step process (Selection, Alignment, Access, Compounding), an "Access Denied / Initializing" admission widget and a manifesto. Footer: "©2026 TitanGate Equity. All Rights Reserved." and "Made by Somefolk".

The look is a cinematic black stage. The capture shows a dark robotic-arm render with blue rim light behind a centred logo, the label "A CLOSED NETWORK" in small tracked capitals, the headline "A New Class of Ownership" in a thin geometric sans, a segmented nav pill (VISION / OPPORTUNITIES / PIONEERS / MANIFESTO) and the line "Invitation Only. Unmatched access to the world's most coveted opportunities." with the second sentence greyed. Further down: "Elite Private Market Opportunities. Tokenized." with "Tokenized." in grey, a plus-grid ornament and a lit circuit-board render. The tone is exclusive, minimal and technological. The extraction measured 1171 visible elements.

## Colors

The palette is black and white with greys; no chromatic accent is measured on the page.

- Canvas `#000000` (largest area, 2058) and ink `#ffffff` (2692 characters). Primary is also white because the only action is a white-on-dark translucent button; on-primary `#000000` is the label colour of the light button variant (the secondary CTA measured as `#000000` text).
- Button-primary-bg `#ffffff1a` (white at 10%) is the measured button fill (23 area weight).
- Ink-dim `#202020` (614 characters), ink-muted `#606060` (48) and ink-ghost `#363636` (12) are the ghosted greys used for the deactivated halves of sentences and the decorative tiny mono labels.
- The stylesheet also contains `#222222`, `#f6efe5`, `#ad1a1a`, `#ff4c24`, `#dddddd`, `#cccccc`, `#383838` and `#fafafa` in small counts; none appear as measured text or fills on the first screen and they are not tokenised. The extractor's `#0000ee` was the browser default link colour and is dropped.

## Typography

Two families: Fellix (400, 500) for headlines and prose (2567 characters) and PP Supply Sans (400) for labels (843 characters). The stylesheet names them `--_typography-styles---font-family` (Fellix) and `--font--mono-typography` (PP Supply Sans).

- Display: Fellix 87.04px/78.336px, -3.84px (hero). Mobile 58.5px/52.65px, -1.17px.
- Subheading: 66.56px/66.56px, -1.6px ("Unseen Possibilities.").
- Heading: 22.4px/24.64px, -0.32px ("Invitation Only.").
- Body: 32px/35.2px, -0.32px (1270 characters).
- Button/label: PP Supply Sans 12px/12px, uppercase, 3.2px tracking; 9.6px at 1.28px for micro labels (662 characters); 14.4px at 3.2px.
- Other sizes with tracking: 51.2px/-1.6px, 60.8px/-1.6px, 52.48px/-1.28px, 72.96px/-2.56px, 40px/-0.64px.

Line height is below 1.0 for large type (0.9 at 87.04px) and 1.1 for body. Substitute (design): Fellix is commercial, so a geometric sans such as Outfit approximates it, and a monospace such as JetBrains Mono approximates PP Supply Sans; these are not measured.

## Layout

A single-column, full-bleed scroll narrative on a 1280px desktop. Section rhythm is large: gaps of 128px (14), 48px (12), 24px (22), 12.8px (19), 224px (4), 80px (4) and 520px (2); paddings 48px (24), 24px (11), 6.4px (43), 160px (5) and 128px (2). A thin dotted-line grid of four columns at the foot carries the micro labels. The nav is a centred pill-shaped bar under the hero headline and a "TITAN'S GATE" button sits top right.

## Elevation & Depth

No box shadows or borders were measured. Depth is made with light in the 3D renders (blue rim light on black), translucent layers (`#ffffff1a`) and ghosted text in greys. Cards are measured as black rectangles with 2.4px radius and no elevation.

## Shapes

Radii: 2.4px on 131 elements (buttons, cards, nav segments) and 50% on 3 circular elements. Corners are barely softened; the geometric signature is the plus-grid and the dotted column rules rather than rounding.

## Components

- Primary button "TITAN'S GATE": fill `#ffffff1a`, text `#ffffff`, PP Supply Sans 12px uppercase 3.2px tracking, padding `8px 20px`, 32px high, 170px wide, 2.4px radius. A light variant uses `#00000014` fill with `#000000` text.
- Nav pill: uppercase 9.6px to 12px labels separated by slashes; hover (recorded) swaps the label text through a scramble or roll effect ("OPPORTUNITIES" to "TUNITIESOPPOR" mid-state) with colour unchanged.
- Card: black fill, 2.4px radius, white text.
- Admission widget: animated "Access Denied / Initializing" status (from the page text, not measured visually).

## Design System Architecture

No public design system was found; the page https://titangatequity.com/ (extractor and fetch) shows a Somefolk credit and Webflow-hosted assets (the fetch reports a cdn.prod.website-files.com image host). The stylesheet's 64 root variables follow Webflow-style naming (`--_responsive-sizes---font-size--h5` 2.5rem, `--_responsive-sizes---font-size--body-regular` 1.1rem, `--_responsive-sizes---spacing--xs` .8rem) plus named easing curves (`--ease-out-back`, `--ease-in-out-back`, `--ease-smooth-in-out` cubic-bezier(.75, 0, .25, 1), `--ease-out-power1`, `--ease-in-power3`, `--ease-out-gentle`). The de-facto system is therefore a responsive-size token set, two font roles and a motion-easing library.

## Do's and Don'ts

- Do keep the canvas pure black with white Fellix headlines and negative tracking.
- Do dim half of a sentence with `#606060` to create a two-tone statement.
- Do set labels in PP Supply Sans uppercase with 3.2px tracking.
- Do keep radii at 2.4px.
- Don't add chromatic accent colours or drop shadows.
- Don't use the browser blue `#0000ee` for links.
- Don't present unpopulated figures (the fetched page shows "0%" placeholders) as real data.

## Responsive Behavior

Mobile (390px) measurements: h1 58.5px/52.65px with -1.17px tracking, body 23.4px; sizes by characters 23.4px (1030), 19.2px (762), 9.6px (538), 31.2px (404), 15px (291), 12px (131). Layout reflow, nav behaviour and image crops were not measured.

## Iteration Guide

1. Black canvas, white text, Fellix at 87.04px/78.336px for the hero.
2. Add PP Supply Sans uppercase labels at 12px and 3.2px tracking.
3. One translucent button, 8px 20px padding, 2.4px radius.
4. Dim secondary phrases with `#606060`.
5. Gate: `node web/scripts/verify-designs.mjs --slug=titangate-equity`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: Fellix (2567), PP Supply Sans (843).
- Font sizes by characters: 32px (1270), 9.6px (662), 17.6px (291), 51.2px (155), 60.8px (151), 52.48px (149), 20.8px (137), 72.96px (126), 14.4px (107), 12px (74), 22.4px (74), 40px (63).
- Font weights by characters: 400 (3402), 500 (8).
- Letter spacing by size: 32px/-0.32px (1270), 9.6px/1.28px (606), 51.2px/-1.6px (155), 60.8px/-1.6px (151), 52.48px/-1.28px (149), 72.96px/-2.56px (126), 14.4px/3.2px (107), 12px/3.2px (74), 22.4px/-0.32px (74), 40px/-0.64px (63), 9.6px/3.2px (56), 66.56px/-1.6px (52).
- Text colours by characters: #ffffff (2692), #202020 (614), #606060 (48), #000000 (44), #363636 (12).
- Background colours by area: #000000 (2058), #ffffff (1727), #ffffff1a (23), #00000014 (5).
- Border radii: 2.4px (131), 50% (3).
- Box shadows: none recorded.
- Border colours: none recorded.
- Gaps: 24px (22), 12.8px (19), 128px (14), 48px (12), 224px (4), 80px (4), 16px (2), 28px (2), 520px (2).
- Paddings: 1px (126), 6.4px (43), 48px (24), 24px (11), 11.2px (7), 160px (5), 10px (4), 8px (2), 20px (2), 128px (2), 102.391px (1), 64px (1).
- Stylesheet colours by count: #00000000 (28), #000000 (20), #ffffff (19), #222222 (12), #f6efe5 (8), #ffffff1a (7), #dddddd (6), #ffffff00 (6), #75869600 (5), #ad1a1a (5), #333333 (4), #cccccc (4), #ff4c24 (4), #efeeec1a (4).
- Stylesheet font sizes: 14px, 12px, 18px, 24px, 9.6px, 32px, 11.2px, 19.2px, 38px, 10px, 15px, 40px, 17px, 8px.
- Stylesheet radii: 3px.
- Fonts loaded: Fellix 400 normal, Fellix 500 normal, PP Supply Sans 400 normal.
- Visible elements: 1171; document language: en; hover states recorded: 2.
