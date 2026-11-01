---
version: alpha
name: Iventions
category: "Culture & Events"
description: "Iventions, an international event, exhibit and sports agency: electric lime #e0ff98 sections and warm off-white #f3efeb, near-black #1e1e1e ink, Soehne at 500 with a 106.667px wordmark-scale display and tight negative tracking, ABC Arizona Mix 24px nav, lavender #9c93e8 and purple #8072ff accents."
colors:
  canvas: "#e0ff98"
  page-body: "#f3efeb"
  ink: "#1e1e1e"
  primary: "#e0ff98"
  on-primary: "#141415"
  sand: "#eae3dc"
  white: "#ffffff"
  ink-near-black: "#101417"
  nav-bg: "#00000052"
typography:
  display:
    fontFamily: Soehne, "Soehne Fallback"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 35.2px
    letterSpacing: "-0.64px"
  display-mobile:
    fontFamily: Soehne, "Soehne Fallback"
    fontSize: 49.8916px
    fontWeight: 500
    lineHeight: 54.8808px
    letterSpacing: "-0.997833px"
  heading:
    fontFamily: Soehne, "Soehne Fallback"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 22.4px
  subheading:
    fontFamily: Soehne, "Soehne Fallback"
    fontSize: 53.3333px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-1.6px"
  button:
    fontFamily: Soehne, "Soehne Fallback"
    fontSize: 9.33333px
    fontWeight: 500
    lineHeight: 9.33333px
    letterSpacing: 0.186667px
    textTransform: uppercase
  nav:
    fontFamily: ABCArizonaMix, "ABCArizonaMix Fallback"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: "-0.96px"
  link:
    fontFamily: Soehne, "Soehne Fallback"
    fontSize: 8px
    fontWeight: 500
    lineHeight: 8px
    letterSpacing: 0.16px
    textTransform: uppercase
rounded:
  xs: 5.33px
  sm: 26.67px
  none: 0px
  pill: 9999px
spacing:
  s1: 2.67px
  s2: 5.33px
  s3: 8px
  s4: 9.33px
  s5: 10.33px
  s6: 10.67px
  s7: 13.33px
  s8: 16px
  s9: 17.33px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 0px 0px 21.3333px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 23.3333px 0px 21.3333px
    height: 40px
  link:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 9.33333px 10.3333px
    transform: matrix(1, 0, 0, 1, 0, 7.84477)
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.white}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is the English home page of Iventions (iventions.com), titled "International Event Agency | Events, Exhibits & Sports | Iventions". The page is 1280px wide and 13240px tall. The top of the page is a collage: a tiny lime MENU tab at the left, the centered IVENTIONS wordmark, a lime "GOT A PROJECT?" tab at the right, then a hero where the heading "Step into the Spotlight" and the sentence "We craft world-class spaces & events that create memories, initiate conversations and elevate ambitions." flank a tilted rounded video card captioned "Built by people", all over two huge diagonal lavender shapes and an oversized IVENTIONS logotype in purple and sand.

Further sections include a lime statement ("Designed to be remembered. We build experiences that audiences feel, not just attend."), "Highlight projects" (La Terminal: The Living Circuit at F1 Madring; Etihad Euroleague Final Four 2026: From raw venue to premium hospitality; Adevinta Ignite: Empowering connection & growth; Midas at ISE: Where six metres of LED sounds impeccable; Menzies Congress: Shaping leadership experiences), "quote", "contact", a closing "Step into the Spotlight" and the footer groups "Explore" and "Connect".

The tone is bold, confident and playful: saturated flat colour planes, giant tightly tracked type, tilted media cards and short second-person promises.

## Colors

- **Lime `#e0ff98`**: both canvas and primary in the generated tokens. It fills the large statement section (3081 weighted units) and the MENU and GOT A PROJECT? tabs, and is also text colour (566 characters) on dark.
- **Dark ink `#1e1e1e`** (`--primary-black`): the largest area (8982 units: the dark footer/sections) and the most-read text colour (1043 characters).
- **Page body `#f3efeb`** (`--primary-white`): the off-white page ground (413 characters as text, and the background below the hero).
- **Sand `#eae3dc`** (1024 units): the hero background and the "TIONS" letters of the logotype.
- **On-primary `#141415`** (`--header-menu-text-color`) and **`#101417`**: near-black text on the lime tabs.
- **White `#ffffff`** (399 characters) and a 32% black nav background `#00000052`.
- Declared palette: purple `#9c93e8` (the hero diagonals), primary purple `#8072ff`, pink `#bfb8ff`, blue `#d1f3f5`, orange `#ffddc4` and a half-opacity purple `#ddd9ff80`. Opacity helpers `--black-60` (`rgba(30,30,30,0.6)`) and `--black-20`.

Pastel sections `#f7ffdc`, `#d1f3f5`, `#ddd9ff` and `#ffddc4` each occupy a measured area of 1024 units.

## Typography

Soehne (weights 300 and 400 loaded, 500 and 600 in use) sets 2287 characters, and ABCArizonaMix (300) sets 210 characters (the menu labels). Each has a metric fallback. Both are licensed families and are not bundled here; a neutral grotesque is the generic substitute for Soehne and a light sans for ABC Arizona Mix.

Measured roles:

- Hero heading ("Step into the Spotlight"): Soehne 500, 32px / 35.2px, letter-spacing -0.64px.
- Giant statement and logotype: 106.667px with -3.2px tracking (1127 characters).
- Subheading: Soehne 500, 53.3333px / 48px, letter-spacing -1.6px.
- Paragraph: Soehne 300, 16px / 22.4px.
- Button: Soehne 500, 9.33333px / 9.33333px, uppercase, letter-spacing 0.186667px.
- Small link/label: Soehne 500, 8px / 8px, uppercase, letter-spacing 0.16px.
- Navigation: ABCArizonaMix 300, 24px / 24px, letter-spacing -0.96px.

Weights by characters: 500 (1727), 300 (620), 400 (133) and 600 (17). Display type is tightened at about -0.03em throughout. On the 390px pass the display role is 49.8916px / 54.8808px with -0.997833px tracking.

## Layout

Sections are full-width colour planes stacked vertically: a hero collage, a pale ground, a lime statement, project highlights, quote and contact blocks and a dark footer. Gaps recorded: 21.3333px (42 uses), 16px (10), 135.333px (8), 5.33333px (6), 8px (6) and 200px (2). Paddings: 21.3333px (19), 53.3333px (5), 2.66667px (4) and one very large 213.333px. The site defines `--gap-x: 1.6rem`. Spacing tokens are multiples of 2.67px (2.67, 5.33, 8, 10.67, 13.33, 16).

Art direction and copy: the hero is built from geometry rather than imagery, with two huge lavender diagonals cutting through a sand ground and a single tilted photograph of two people talking in an event hall, captioned "Built by people". Project titles are written as a pair, a place or event name, a colon, then an outcome sentence ("From raw venue to premium hospitality", "Where six metres of LED sounds impeccable"), which gives the highlights a headline-and-payoff rhythm. Short imperative or inviting microcopy (Step into the Spotlight, Got a project?, Explore, Connect) is used for every call to action, and labels are set in tiny uppercase type so that the large type can dominate. The lime statement section sets a four-line manifesto in near-white `#f3efeb` on lime at display size; the capture shows a soft, pale-on-pale reading.

Pastel planes: besides lime, the page measures four further flat backgrounds of equal weight (`#f7ffdc`, `#d1f3f5`, `#ddd9ff`, `#ffddc4`), matching the declared blue, purple and orange variables.

## Elevation & Depth

No box shadows are measured and no border colours. Depth comes from overlap: the tilted video card sits across two coloured planes, the logotype crosses the diagonal boundary and changes colour at the edge, and the nav bar uses a 32% black tint. Motion eases are declared as `--easeOutQuart` and `--easeInOutQuart`.

## Shapes

Radii: 50% (7 uses, circles), 26.6667px (4, the media card and large tabs), 5.33333px (2) and two single-corner values `0 0 16px` and `0 0 0 16px` (the lime corner tabs, rounded only at their inner bottom corner). Buttons in the tokens are square (0px).

## Components

- **Corner tabs**: lime `#e0ff98` blocks pinned to the top left (MENU with a two-line icon) and top right (GOT A PROJECT?), text `#141415`, 9.33px uppercase, height 40px, padding 0 0 0 21.3333px, rounded at the inner corner only.
- **Tilted media card**: a rotated rounded video card (26.6667px radius) with a white "Built by people" caption.
- **Logotype**: the IVENTIONS wordmark at 106.667px in purple with the right half in sand.
- **Small label link**: an 8px uppercase label on a white chip with padding 9.33333px 10.3333px.
- **Footer**: dark `#1e1e1e` with white text and Explore / Connect link groups.

## Design System Architecture

No public design-system documentation or brand-guidelines page was found: the home page HTML was opened and held no brand, press, design-system, guideline or GitHub link. The site is a CSS-in-JS build (emotion-style class names such as `css-3w1c3c`) with root variables: `--primary-black`, `--primary-white`, `--primary-blue`, `--primary-purple`, `--primary-pink`, `--primary-orange`, `--purple`, `--black-60`, `--black-20`, `--header-menu-text-color`, `--gap-x` and two easing curves. Font variables such as `--font-abc-arizona-mix` select the second typeface.

## Do's and Don'ts

- Do use lime `#e0ff98` as a full-bleed statement colour and for corner tabs.
- Do pair the lime with `#1e1e1e` ink and the off-white `#f3efeb` ground.
- Do set display type huge (106.667px) with -3.2px tracking.
- Do use lavender `#9c93e8` and purple `#8072ff` for hero shapes only.
- Don't add shadows or borders; none are measured.
- Don't use pill buttons; the buttons are square-cornered tabs.
- Don't set body text above weight 500.

## Responsive Behavior

Measured at 390px: the display role is 49.8916px / 54.8808px (-0.997833px tracking); the most common sizes are 18.72px (750 characters), 14.56px (383), 33.28px (363), 22.88px (185), 12.48px (169) and 52px (50). Layout stacking, menu behaviour and hover were not measured.

## Iteration Guide

1. Pick a flat colour plane per section: lime `#e0ff98`, off-white `#f3efeb`, dark `#1e1e1e`, lavender `#9c93e8`.
2. Set Soehne at 500 with -0.03em tracking; use ABC Arizona Mix 300 for navigation.
3. Make the logotype or a statement huge and let it cross a colour boundary.
4. Add corner tabs in lime with 9.33px uppercase labels.
5. Tilt a rounded media card (26.6667px) across two colour planes.
6. Verify values against `web/data/extracted/iventions.json`.
