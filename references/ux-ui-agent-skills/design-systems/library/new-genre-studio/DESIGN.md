---
version: alpha
name: New Genre
category: "Portfolio"
description: "New Genre studio site newgenre.studio: serrif serif display at 64px over a dawn-sky gradient, saans sans body at 16px and weight 450, ink #0c1018, slate #535a65, translucent white pill buttons, 16px tile radii and #ffffff0f logo tiles."
colors:
  canvas: "#ffffff"
  ink: "#0c1018"
  primary: "#535a65"
  on-primary: "#ffffff"
  surface-grey: "#e5e7eb"
  hairline: "#ffffff1f"
  button-primary-bg: "#ffffff29"
  button-secondary-bg: "#aeaeff13"
  link-bg: "#ffffff0f"
typography:
  display:
    fontFamily: serrif, "serrif Fallback"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 67.2px
    letterSpacing: "-1.28px"
  display-mobile:
    fontFamily: serrif, "serrif Fallback"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 37.8px
    letterSpacing: "-0.72px"
  heading:
    fontFamily: saans, "saans Fallback"
    fontSize: 28px
    fontWeight: 450
    lineHeight: 30.8px
    letterSpacing: "-0.28px"
  body:
    fontFamily: saans, "saans Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: saans, "saans Fallback"
    fontSize: 16.4762px
    fontWeight: 570
    lineHeight: 16.4762px
    letterSpacing: "-0.164762px"
rounded:
  xs: 8px
  sm: 16px
  pill: 9999px
spacing:
  s1: 1.6px
  s2: 2px
  s3: 3.5px
  s4: 4px
  s5: 6px
  s6: 7.2px
  s7: 8px
  s8: 8.75px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.sm}"
    padding: 6px 10px
    height: 44px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 21px
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 64px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px
    height: 51px
  card:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 21px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

newgenre.studio is the site of New Genre, a studio whose page title reads "New Genre — Global Design & Technology Studio" and whose headline states "New Genre is a global design & technology studio accelerating tomorrow's ideas." The measured page is 1280px wide and 12,605px tall with 577 visible elements and `lang="en"`. It is a long scroll built around full-bleed atmosphere and quiet, tile-based content.

The capture opens on a vertical gradient sky: near-black brown and deep navy at the top, mid blue in the middle, then pale white-blue, a warm cream band and a soft off-white. The white NEW GENRE wordmark sits at the upper left and the navigation (Work, Services, News, About, a thin dash, Join, Work with us) at the upper right in white 16px type. The headline is set in a large light serif over the dark blue. A translucent white pill, "Our work", sits beneath it. Much of the scroll is empty gradient, which gives the page its slow, cinematic pacing.

Lower down, a 28px line "Our trusted partners, from bold startups to global icons." introduces a grid of client logo tiles in two rows of six (Accel, ElevenLabs, Forme Partners, Sylvera, Tessian, electrokare, zid, Ello, Lightberry, UK Research and Innovation, Knotel, Quaisr). Each tile is a very pale rounded square with the logo in black. The footer carries "Work with us", a London local time, an email address and a phone number on a warm multi-stop gradient (dark brown through red and orange to amber).

A small black vertical "Site of the Day" award badge at the right edge is a third-party widget and is not documented as brand UI. The tone is confident and editorial, with short promise lines ("from idea to icon").

## Colors

Measured background areas: `#ffffff0f` (1,432), `#e5e7eb` (174), `#ffffff29` (6), `#ffffff` (0 area, the base). Text colors by characters: `#0c1018` (1,733), `#ffffff` (293), `#535a65` (273). The only border color is `#ffffff1f` (7 elements).

- **Canvas `#ffffff`** under the gradient layers.
- **Ink `#0c1018`**, a very dark blue-black, is the dominant text color. **`#535a65`** is the slate secondary text (and the generated `primary`). **`#ffffff`** is text over the dark hero and footer.
- **Glass whites** carry the interface: `#ffffff29` (16% white) fills the "Our work" pill, `#ffffff0f` (6% white) fills the logo tiles, cards, links and inputs, `#aeaeff13` tints the "Read all" button and `#ffffff1f` is the hairline.
- **`#e5e7eb`** is a light grey surface.
- The hero and footer are CSS gradients: the footer's gradient runs from a dark brown (lab 7.2) at 25% to a red (lab 37) at 65%, orange at 85% and amber at 100%. Their exact RGB stops were not converted, so no hex is claimed for them.
- Hover: the "Our work" pill fill changes from 16% white to 32% white (`lab(100 0 0 / 0.16)` to `0.32`).

The CSS also carries `--global-neutral-400-dark: #808793`, `--global-spring-700-dark: #78c85b`, `--semantic-bg-page: lab(100% 0 0)` and cookie-manager variables (`--c15t-*`). The `--c15t-*` variables belong to a consent library and are not brand tokens.

## Typography

Two commercial families are used: saans (2,133 characters) and serrif (166 characters), each with a fallback face (`"saans Fallback"`, `"serrif Fallback"`). saans is the neutral grotesque for everything except the main headline; serrif is the display serif for the headline only. Weights: 450 (1,850), 570 (283), 400 (166), which shows saans is a variable font used at non-integer weights.

| Role | Family | Size / line | Weight | Tracking |
| --- | --- | --- | --- | --- |
| display (h1) | serrif | 64px / 67.2px | 400 | -1.28px |
| display-mobile | serrif | 36px / 37.8px | 400 | -0.72px |
| heading (h2) | saans | 28px / 30.8px | 450 | -0.28px |
| body | saans | 16px / 24px | 400 | normal |
| button | saans | 16.4762px / 16.4762px | 570 | -0.164762px |

Other sizes by characters: 17.5px (1,044, with -0.175px tracking), 12.3571px (396), 28px (225), 21px (185), 64px (166), 16.4762px (153), 14.2381px (130). All sizes use tracking of about -1% of the size, tightening headlines to -2%.

## Layout

The page is 1280px wide with 64px horizontal padding on the nav (`0px 64px`). Measured gaps: 4px (58), 56px (18), 32px (12), 2px (12), 16px (10), 8px, 12px, 84px (6) and 48px (2). Paddings: 21px (24 elements), 6px (16), 10px (16), 32px (11), 16px (9), 12px (9), 64px (8), 112px (5), 24px, 128px, 56px and 84px. The logo grid is two rows of six equal tiles with 21px padding in the measured card role. Text blocks sit on the left margin with the 64px offset.

## Elevation & Depth

No box shadows were measured. Depth comes from the translucent white layers over the gradient, the 1px `#ffffff1f` hairline and the shifts between the dark top, bright middle and warm footer.

## Shapes

Radii: 16px (42 elements), 8px (15) and a pill value of about 9999px (3). Tiles, cards and the secondary button use 16px, inputs use 8px, and the "Our work" pill is fully round.

## Components

- **Primary pill ("Our work").** `#ffffff29` fill, white saans 16.4762px weight 570 label, pill radius, 48px high, `16px 24px` padding; hover raises the fill to 32% white.
- **Secondary button ("Read all").** `#aeaeff13` fill, ink text in saans 28px weight 450, 16px radius, 44px high, `6px 10px` padding.
- **Logo tile.** `#ffffff0f` fill, 16px radius, 21px padding, centred black logo.
- **Navigation.** White 16.4762px labels, no background, 64px side padding, with a thin dash separating the secondary items.
- **Text input.** `#ffffff0f` fill, 8px radius, 51px high, 16px padding, saans 16.4762px weight 570.
- **Footer.** White text over a gradient of brown, red, orange and amber.

## Design System Architecture

No public New Genre design-system or brand page was opened or searched for; the source is the shipped CSS of https://www.newgenre.studio/. The page uses Tailwind (variables like `--tw-inset-shadow-alpha`) alongside a two-level color vocabulary: `--global-*` primitives (such as `--global-neutral-400`, `--global-summer-100`, `--global-spring-700-dark`) and `--semantic-*` aliases (such as `--semantic-bg-page`, `--semantic-summer-weak`). Light and dark variants exist as separate variables (`-dark` suffix). Which of these map to rendered elements beyond the measured values was not measured. Fonts saans and serrif are loaded as custom faces with fallbacks.

## Do's and Don'ts

Do:
- Set the main statement in the serrif display at 64px with -1.28px tracking and everything else in saans.
- Build UI from translucent white layers (6%, 16%, 32%) and a 1px `#ffffff1f` hairline.
- Use 16px radii for tiles and cards, pills for the main action and 8px for inputs.
- Let a long gradient background carry the mood.

Don't:
- Don't add drop shadows; none are measured.
- Don't document the Site of the Day badge or the consent library variables as brand UI.
- Don't use bold weights; measured weights are 400, 450 and 570.

## Responsive Behavior

On the mobile pass the h1 drops from 64px to 36px (37.8px line height, -0.72px tracking, 63px wide for the word "New") and the h2 from 28px to 24px (26.4px line height, -0.24px tracking). The "Our work" button label grows to 18px with 18px line height and -0.18px tracking, weight 570, with the same translucent white fill. Breakpoints and other mobile layout were not measured.

## Iteration Guide

1. Start with a gradient background and white text for the hero; use `#0c1018` on light bands.
2. Use the serrif face only for the headline; saans at weights 400, 450 and 570 elsewhere.
3. Build controls from translucent white fills, a 48px pill for the main action and 16px tiles.
4. Keep tracking at about -1% of the font size.
5. Measure any new page before adding tokens: `node web/scripts/extract-tokens.mjs --slug=new-genre-studio--<page> --url=<url> --force --no-motion`.
