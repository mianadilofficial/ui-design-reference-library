---
version: alpha
name: Darknode
category: "Tech & AI"
description: "Darknode (darknode.army/en), the site of an anti-Shahed drone unit of Ukraine's 412th Nemesis Brigade: a near-black navy HUD interface (#14181e, #0f1318) with pale #eef2f9 text, signal red #f90000 accents, Uafsans Cond 600 uppercase headlines at 99.5584px with -5.6px tracking, Geist Mono 14px labels and square 0px-radius controls."
colors:
  canvas: "#14181e"
  page-body: "#0f1318"
  ink: "#eef2f9"
  primary: "#f90000"
  on-primary: "#140000"
  surface-panel: "#13161d"
  surface-black: "#010202"
  ink-muted: "#999ea6"
  hairline: "#eef2f91a"
  footer-bg: "#ff0000"
typography:
  display:
    fontFamily: "\"Uafsans Cond\", Arial, sans-serif"
    fontSize: 99.5584px
    fontWeight: 600
    lineHeight: 83.6291px
    letterSpacing: "-5.6px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Uafsans Cond\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 40.32px
    letterSpacing: "-1.44px"
    textTransform: uppercase
  display-xl:
    fontFamily: "\"Uafsans Cond\", Arial, sans-serif"
    fontSize: 213.338px
    fontWeight: 700
    lineHeight: 179.204px
    letterSpacing: "-12px"
    textTransform: uppercase
  body:
    fontFamily: "\"Geist Mono\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 10.56px
    letterSpacing: 0.24px
    textTransform: uppercase
  footer:
    fontFamily: "\"Geist Mono\", sans-serif"
    fontSize: 10px
    fontWeight: 500
    lineHeight: 8.8px
    letterSpacing: 0.2px
    textTransform: uppercase
  button:
    fontFamily: "\"Uafsans Cond\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 13.44px
    letterSpacing: "-0.32px"
    textTransform: uppercase
  link:
    fontFamily: "\"Geist Mono\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.2px
  s4: 4px
  s5: 7px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 14.22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 1px 16px 0px
    height: 32px
    borderColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 1px 16px 0px
    height: 32px
    borderColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.footer}"
    rounded: "{rounded.none}"
    padding: 24px 14.2208px 0px
---

## Overview

Darknode (https://www.darknode.army/en, document title "Darknode - Anti-shahid battalion of the 412th Nemesis Brigade") is the public site of a Ukrainian anti-drone unit that intercepts Shahed-type kamikaze drones with interceptor UAVs, recruits personnel and sells merchandise to fund its crews. The interface is a heads-up display: near-black navy fields, pale cool-white text, a single signal red, hairline rings and crosshairs, corner brackets, bracketed indices such as "[01]" and "[ ABOUT US ]", and a small mono typeface for every label.

The first screen in the capture is almost entirely black. A thin top bar holds the logo (a boxed arrow mark and the wordmark "DARKNODE"), four links (ABOUT US, OUR DESIGNATION, OUR GOAL, DARKNODE STORE) and at the right a red "NIGHT MODE" toggle, "JOIN US" with an arrow, and a "UA EN" language switch with EN active. At the bottom left sit the eyebrow "DARKNODE ANTI-SHAHED UNIT" and the headline "GUARDING YOUR DAWNS" in white condensed capitals with the logo mark inline; at the bottom right a "SOUND OFF / ON" slider. A "SCROLL" cue is at top right.

The second section, on #14181e, is centered: the label "[ ABOUT US ]", a radar-like circle with crosshair hairlines and corner brackets, a "WHO ARE WE?" tag at left, and the headline "WE DESTROY SHAHEDS, PROTECTING UKRAINIAN CITIES" with the word "SHAHEDS," in red, over the line "OVER 1,500 SHAHED DRONES SHOT DOWN. OUR CREWS ARE THE MOST EFFECTIVE IN DESTROYING RUSSIAN KAMIKAZE DRONES USING INTERCEPTOR UAVS." Next comes a full-bleed red section: a red-tinted photograph of drone silhouettes on the left with a circular HUD ring and "[01] / [03]" counter, and on the right "MISSION" with the text "TO BUILD AN EFFECTIVE AIR DEFENSE SYSTEM CAPABLE OF PROVIDING THE HIGHEST POSSIBLE LEVEL OF SECURITY FOR OUR FAMILIES, CITIES, AND CRITICAL INFRASTRUCTURE FACILITIES." The page continues (17,701px tall) with Vision and Purpose, "OUR GOAL", threat profiles, recruitment, merchandise ("OUR MERCH" at 213px), an FAQ and a red footer with media and partnership contacts.

The two recruitment buttons, "I'M A CIVILIAN" and "I'M IN MILITARY", are links to application forms, not an entry gate. The voice is direct and military-technical, uppercase throughout.

## Colors

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #14181e | Largest background by area (weight 11500); the "About us" field |
| `page-body` | #0f1318 | Body background |
| `ink` | #eef2f9 | Text on 1,328 characters |
| `primary` | #f90000 | Primary button fill; red words (130 characters); hover color of UA/EN |
| `on-primary` | #140000 | Text on the primary button; fill of the secondary button |
| `surface-panel` | #13161d | Background (weight 1024) |
| `surface-black` | #010202 | Background (weight 1024); the near-black hero in the capture |
| `ink-muted` | #999ea6 | Text on 221 characters |
| `hairline` | #eef2f91a | Border color on 2 elements (rings and rules) |
| `footer-bg` | #ff0000 | Footer background (weight 1024) |

Text on the red footer is #14181e (330 characters). Another measured border color is #eef2f929 and #14181e. A 95%-opaque black (#000000f2, weight 5120) was measured as a background and is not tokenized because its element was not recorded. The browser default link color #0000ee was recorded on a link and is not a brand color.

The palette is red on blue-black. Red appears in three forms: #f90000 for accents and buttons, #ff0000 for the footer slab, and red-tinted photography in the Mission section. Text hierarchy is #eef2f9 against #999ea6.

## Typography

Two families: Uafsans Cond (condensed grotesque, 470 characters, weight 600 and 700) for headlines and buttons, and Geist Mono (1,553 characters, weights 300-700) for everything else. The CSS also declares Uafsans and a `webflow-icons` font.

| Token | Family | Size / line-height | Weight | Tracking | Use |
|---|---|---|---|---|---|
| `display` | Uafsans Cond | 99.5584px / 83.6291px | 600 | -5.6px | "GUARDING YOUR DAWNS", section headlines |
| `display-mobile` | Uafsans Cond | 48px / 40.32px | 600 | -1.44px | Mobile headline |
| `display-xl` | Uafsans Cond | 213.338px / 179.204px | 700 | -12px | "OUR MERCH" (h3) |
| `body` | Geist Mono | 12px / 10.56px | 500 | 0.24px | Body role, uppercase |
| `link` | Geist Mono | 14px / 20px | 400 | 0.28px | Navigation and most text |
| `footer` | Geist Mono | 10px / 8.8px | 500 | 0.2px | Footer, uppercase |
| `button` | Uafsans Cond | 16px / 13.44px | 600 | -0.32px | Buttons |

Sizes by character count: 14px (1,014 characters), 12px (488), 21.3376px (244, tracking -0.48px), 99.5584px (93), 10px (51), 35.5584px (45, -1.2px), 16px (29), 213.338px (26), 87.04px (15, -5.6px), 20px (11). The condensed face is set with line-heights below the font size (0.84 ratio on the display) and heavy negative tracking, so headlines read as dense slabs; mono labels have positive tracking (0.2-0.28px). Everything is uppercase. Hovering a nav link replaces its letters with scrambled glyphs (measured hover text such as "OUR DESR%RATION"), a text-scramble effect.

The faces are not redistributed here; if unavailable, use any condensed bold grotesque and any monospace with uppercase transform; no substitute was measured.

## Layout

The document is 17,701px tall at 1280px wide. The top bar is a thin strip with a divider after the logo block. Content alternates full-bleed fields: black hero, navy "About us", red "Mission" split in two halves (image left, text right), then further sections. Headlines are left-aligned in the hero and centered in the About section. Corner brackets, concentric rings and crosshair hairlines frame centered text.

Measured gaps: 8px (26 elements), 60px (8), 2px (8), 10px (7), 12px (4), 4px (4), 16px (4), 7px (4), 32px (2), 24.8832px (2). Paddings: 16px (13), 4px (8), 32px (3), 9px (2), 1px (2), 40px (1), 2.2px (1), 64px (1), 48px (1), 160px (1). The footer is 800px tall with padding 24px 14.2208px 0. Density is low for text blocks and high for HUD ornament.

## Elevation & Depth

No shadows were measured (the box-shadow list is empty). Depth comes from full-bleed color changes, red-tinted photography with blurred light, and hairline rings at 10% white (#eef2f91a). The CSS lists `0 0 0 2px #fff`, `0 0 3px #3336` and `0 0 0 1px #0000001a,0 1px 3px #0000001a`, none tied to a measured element.

## Shapes

No border radius was measured on any element (`borderRadii` is empty); the primary and secondary buttons, the footer and links are square (0px). The CSS contains a single 3px radius. Circles appear only as thin hairline rings in the HUD ornament; corner brackets and crosshairs are drawn lines. The logo mark is a boxed angular arrow.

## Components

**Primary button.** "I'M A CIVILIAN": #f90000 fill, #140000 text, Uafsans Cond 16px/600 uppercase with -0.32px tracking, padding 1px 16px 0px, 32px tall, 104px wide, `1px solid #14181e` border, square corners.

**Secondary button.** "I'M IN MILITARY": #140000 fill, #f90000 text, same geometry, 111px wide.

**Top navigation.** Mono labels at 14px with 0.28px tracking in #eef2f9; a "NIGHT MODE" toggle in red, "JOIN US" with an arrow icon, "UA / EN" where the hover color is #f90000.

**HUD frame.** Centered section label in square brackets, corner brackets, a ring with crosshair lines, numbered counters "[01]" and "[01] / [03]".

**Sound slider.** "SOUND" with an OFF / ON track at the lower right of the hero.

**Footer.** #ff0000 slab, text #14181e in Geist Mono 10px/500 uppercase, "FOR MEDIA INQUIRIES" and "FOR PARTNERSHIP" contact blocks, 800px tall.

## Design System Architecture

No public design system, brand guideline or press kit is linked (the home page was opened via WebFetch; the only press-related item is a media contact email). The site exposes no root custom properties (the extraction's rootVars is empty), so the system is carried in the stylesheet itself: two font families (Uafsans Cond, Geist Mono), a four-color palette (#14181e, #eef2f9, #f90000, #ff0000) and zero radius. The stylesheet declares a `webflow-icons` font face. The footer credits the page design to "qream". Source of truth for the look: https://www.darknode.army/en.

## Do's and Don'ts

**Do**
- Keep the canvas #14181e / #0f1318 and text #eef2f9; use #f90000 for single emphasized words and buttons.
- Set headlines in Uafsans Cond 600 uppercase with heavy negative tracking; labels in Geist Mono uppercase with positive tracking.
- Keep every control square (0px radius) with a 1px border.
- Frame centered text with hairline rings, crosshairs and corner brackets, and number sections with "[01]" markers.
- Use red-tinted photography for the mission section and a solid #ff0000 footer.

**Don't**
- Don't round corners; none was measured.
- Don't add shadows; none was measured.
- Don't use sentence case; every measured text role is uppercase.
- Don't use the default link color #0000ee.

## Responsive Behavior

The extractor re-loaded the page at 390px and recorded the h1, h2 and CTA roles. Measured: the headline is Uafsans Cond 600 at 48px / 40.32px with -1.44px tracking, 247px wide and 40px tall (99.5584px, 479px by 84px on desktop); the primary button keeps its 16px type, 32px height and 104px width. Mobile sizes by character count: 14px (845), 12px (545), 24px (232), 10px (122), 32px (65), 40px (45), 48px (38), 16px (29), 64px (20), 88px (12). A navigation role was not recorded at 390px; whether the top bar changes is not measured. Breakpoints and media queries are not measured.

## Iteration Guide

1. Start with tokens: #14181e canvas, #0f1318 page, #eef2f9 ink, #f90000 and #ff0000 reds, Uafsans Cond + Geist Mono, 0px radius.
2. Build the top bar, then the black hero with the 99.5584px headline anchored bottom-left.
3. Build the centered "About us" HUD section (ring, brackets, red keyword), then the red split "Mission" section.
4. Add the square red and dark buttons for the two application links.
5. Run `node web/scripts/verify-designs.mjs --slug=darknode` after any token edit.
