---
version: alpha
name: Barry's
category: "Sports & Fitness"
description: "Barry's (barrys.com), the boutique HIIT fitness brand: an immersive dark red-black video hero over a #f7f7f7 page, uppercase Antenna headlines at 48px/700, Benton Sans Pro body at 14px, pill buttons with a 40px radius in #111111 and white, and the brand red #d6001a reserved for labels, chips and the word LIFT."
colors:
  canvas: "#f7f7f7"
  ink: "#111111"
  ink-secondary: "#555659"
  link: "#333333"
  primary: "#d6001a"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-near-black: "#020202"
  surface-white: "#fafafa"
  surface-grey: "#dbd9d6"
  overlay-light: "#ebeae81a"
  border: "#aeaeae"
  accent-100: "#f9cacd"
  accent-200: "#f2989f"
  accent-300: "#ea6572"
  accent-400: "#e13345"
  accent-600: "#a60014"
  accent-700: "#76000e"
  accent-800: "#460008"
  accent-900: "#150003"
typography:
  display:
    fontFamily: Antenna, Arial, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 52.8px
    textTransform: uppercase
  heading:
    fontFamily: Antenna, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    textTransform: uppercase
  card-title:
    fontFamily: Antenna, Arial, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
    textTransform: uppercase
  subheading:
    fontFamily: Antenna, Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 0.5px
    textTransform: uppercase
  body:
    fontFamily: "\"Benton Sans Pro\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Antenna, Arial, sans-serif
    fontSize: 12.8px
    fontWeight: 600
    lineHeight: 19.2px
    textTransform: uppercase
  nav:
    fontFamily: Antenna, Arial, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
    textTransform: uppercase
  button-mobile:
    fontFamily: Antenna, Arial, sans-serif
    fontSize: 10px
    fontWeight: 600
    lineHeight: 10px
    textTransform: uppercase
  link:
    fontFamily: "\"Benton Sans Pro\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"Benton Sans Pro\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1428px
rounded:
  xs: 4px
  sm: 8px
  md: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 17px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 43px
  button-light:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.surface-near-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 44px
  button-ghost:
    backgroundColor: "{colors.overlay-light}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 44px
    borderColor: "{colors.on-primary}"
  button-ghost-mobile:
    backgroundColor: "{colors.overlay-light}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 26px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    height: 24px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 44px
    borderColor: "{colors.border}"
  card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.sm}"
    height: 416px
  chip:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
---

## Overview

`https://www.barrys.com/` (page title "Barry's: The Best HIIT Workouts & Full Body Fitness Classes") opens on a dark, blurred, red-tinted video hero with the headline "TRY THE BEST WORKOUT IN THE WORLD™" in white uppercase Antenna on the left and a "FIND A STUDIO" search on the right (an input and a grey "SEARCH" button, with "Use Current Location" and "View All Locations" links). The header floats over the hero: the BARRY'S wordmark, five uppercase links (LOCATIONS, THE WORKOUT, THE LIFESTYLE, BARRY'S X, SHOP) and two pills, a white "BOOK YOUR FIRST CLASS" and a ghost "MY ACCOUNT". The page is 5,893px tall at 1280px wide.

Below the hero the page alternates light and black bands: a `#f7f7f7` band with a large red brush-script "Welcome to Barry's" and a pale ghosted chevron-and-star mark; a black band with an angled top edge headed "THE RED ROOM" (red label), "WHAT TO EXPECT IN YOUR FIRST WORKOUT" and a framed video; then a "RUN x LIFT" band with two white cards (Cardio, Strength) separated by a red rule. Lower sections named on the page include "BEST-IN-CLASS FITNESS INSTRUCTORS", "JOIN THE HUSTLE", "Fuel Bar", "Locker Rooms" and "THE BARRY'S SHOP".

The voice is short, energetic and second-person: "Instructor led, driven by you.", "High energy, inclusive community", "Real nutrition, unreal convenience." A small floating circular control sits at the left edge of the capture; it is widget chrome and is not documented as brand UI.

## Colors

- **Surfaces:** `canvas` `#f7f7f7` is the largest background (5,773 area units); `ink` `#111111` (2,522) fills dark sections and the primary button; `surface-black` `#000000` (1,287) is the Red Room band; `surface-near-black` `#020202` (771) is a further near-black surface and the text colour on the white pill; white `#ffffff` (1,013) is the card fill; `surface-grey` `#dbd9d6` (420) is a warm light grey (declared as the secondary light grey); `surface-white` `#fafafa` is the declared brand white.
- **Text:** white (1,426 characters) on dark, `ink` `#111111` (954), `ink-secondary` `#555659` (944, the declared secondary dark grey), `surface-near-black` `#020202` (120), `surface-black` `#000000` (93), `primary` `#d6001a` (75) and `border` `#aeaeae` (74).
- **Brand red:** `primary` `#d6001a` is declared as `--_colors---brand--primary--barrys-red` and as accent step 500. It colours the "THE RED ROOM" label, the word LIFT in "RUN x LIFT", the card chips, the rule under the pro tip and the brush-script heading. The declared accent ramp is kept as tokens: `accent-100` `#f9cacd`, `accent-200` `#f2989f`, `accent-300` `#ea6572`, `accent-400` `#e13345`, `accent-600` `#a60014`, `accent-700` `#76000e`, `accent-800` `#460008`, `accent-900` `#150003`. Actions are not red: buttons are black, white or ghost pills.
- **Overlay:** `overlay-light` `#ebeae81a` is the 10%-alpha warm white behind the ghost "MY ACCOUNT" button.
- **Lines:** `border` `#aeaeae` for the input outline; `link` `#333333` for links and input text.

## Typography

Antenna (700 loaded; headings, nav, buttons; 584 measured characters), Benton Sans Pro (400 and 700; body; 3,080 characters) and United Sans Reg (700; 22 characters) are the measured families; Inter (300 to 500, 600, 700) is also loaded but no characters were measured in it. The declared stacks are `Antenna,Arial,sans-serif` (headings and primary), `"Benton Sans Pro",Arial,sans-serif` (body and secondary) and `"United Sans Reg"` (callouts). All three are proprietary or licensed faces, so only the declared Arial fallback is documented.

- `display` Antenna 48px / 700 / 52.8px uppercase (hero headline); `heading` 32px / 700 / 38.4px uppercase ("WHAT TO EXPECT IN YOUR FIRST WORKOUT"); `card-title` 20px / 700 / 20px uppercase ("RUN", "LIFT").
- `subheading` 12px / 700 / 18px with 0.5px letter-spacing, uppercase, for labels such as "THE RED ROOM".
- `body` Benton Sans Pro 14px / 400 / 21px; `link` 16px / 400 / 24px; `input` 12px / 400 / 17.1428px.
- `button` Antenna 12.8px / 600 / 19.2px uppercase; `nav` 12px / 600 / 18px uppercase; `button-mobile` 10px / 600 / 10px.

Sizes by characters: 14px (2,568), 12px (714), 32px (91), 28px (82), 20px (68), 12.8px (63), 22px (36), 48px (34), 16px (16) and 10px (14, with 1px letter-spacing). Weights: 400 (3,011), 700 (432), 600 (192) and 300 (51).

## Layout

The page is a sequence of full-width bands with centred content blocks. The hero is two columns: headline left, studio search right. Content bands centre a heading and a one-line standfirst, then the video frame and two cards (each 337px wide by 416px tall) in the middle of the band. The declared grid variables are `--_sizes---site--grid--margin` 16px and `--_sizes---site--breakpoints--min-width` 320px, `--_sizes---site--breakpoints--max-width` 375px.

Measured gaps: 8px (34 uses), 16px (30), 20px (17), 4px (10), 3px (6), 10px, 12px, 40px, 5px, 17px, 48px and 24px. Paddings: 40px (22), 20px (20), 12px (15), 16px (9), 24px (8), 60px (6) and single 112px, 80px and 56px values.

## Elevation & Depth

Depth comes from the light/black band alternation and the dark video, not shadows. One shadow was measured, `rgba(0, 0, 0, 0.15) 0px 4px 16px 0px`, on a single element. White cards sit on the `#f7f7f7` band with only their 8px corners to separate them. The ghost button uses the translucent `{colors.overlay-light}` fill over imagery.

## Shapes

Pills dominate. The measured radii are 8px (14 elements), 40px (10, all the buttons), `0px 0px 8px 8px` (8), 4px (8, the input), `8px 8px 0px 0px` (5, card tops), 999px (5) and `8px 0px 0px 8px` (2). Buttons use `rounded.md` (40px), cards `rounded.sm` (8px) and inputs `rounded.xs` (4px). The stylesheet also declares a radius scale of 0, 2px, 4px, 8px, 12px, 16px, 24px, 32px and 999px.

## Components

- **Primary button ("BOOK YOUR FIRST CLASS", "EXPLORE ALL AMENITIES"):** `{colors.ink}` fill, white Antenna 12.8px / 600 uppercase text, 40px radius, `12px 24px` padding, 43px tall (250px or 375px wide).
- **Light button (hero "BOOK YOUR FIRST CLASS"):** white fill, `{colors.surface-near-black}` text, Antenna 12px / 600, 40px radius, 44px tall, 213px wide.
- **Ghost button ("MY ACCOUNT"):** `{colors.overlay-light}` fill, white text and 1px white border, 40px radius, 44px tall, 250px wide; its measured hover record shows the same fill.
- **Studio search:** a 44px input (12px Benton Sans, 4px radius, 1px `{colors.border}` border, `0px 12px` padding) with a grey "SEARCH" button.
- **Card:** white, 8px radius, a photo on top, a 20px uppercase title with a small red chip ("CARDIO", "STRENGTH"), a bold subtitle ("Interval Cardio", "Strength Training") and 14px grey body copy.
- **Chip:** `{colors.primary}` fill, white 10px text with 1px letter-spacing.
- **Nav:** a 24px-tall row of white 12px / 600 uppercase links (461px wide).

## Design System Architecture

No public design-system or brand-guideline page was found: the home page lists no brand guidelines, press kit, media assets, design system or developer pages (footer links are About Us, Careers, Franchise, Terms of Service, Privacy Policy and Cookie Policy). The de-facto system is a token layer in the shipped CSS: 200 custom properties on `:root` named in three layers, `--_primitive-variables---*` (colour ramps, a type scale of 10px, 20px, 32px, 44px, 48px, 56px, 64px, 72px, 80px and 88px, and radii), `--_semantic-colors---*` (surface, text, border and icon roles such as `--_semantic-colors---color--text--accent--primary`, which points at the red accent) and `--_colors---brand--*` (barrys-red `#d6001a`, barrys-white `#fafafa`, secondary dark grey `#555659`, secondary light grey `#dbd9d6`). The neutral ramp runs `#fafafa`, `#dbd9d6`, `#aeaeae`, `#949494`, `#7a7a7a`, `#555659`, `#333`, `#272727`, `#020202`. A `webflow-icons` font is loaded, and some variables use the `--base-color-*` and `--text-color--*` naming; no more is claimed about the build.

## Do's and Don'ts

- Do keep surfaces light (`{colors.canvas}`) or black, and let video and photography carry the colour.
- Do set headlines and buttons in uppercase Antenna and body copy in Benton Sans Pro 14px / 21px.
- Do keep red `{colors.primary}` for labels, chips, one-word emphasis and thin rules.
- Do use 40px-radius pills for every button and 8px corners for cards.
- Don't fill buttons with red: the measured buttons are black, white or translucent.
- Don't add soft shadows to cards; only one 0.15-alpha shadow was measured.
- Don't treat the floating circular widget as part of the brand.

## Responsive Behavior

Measured at 390px: a "BOOK YOUR FIRST CLASS" link is 10px / 600 / 10px Antenna with `8px 12px` padding, 162px by 26px, on the `#ebeae81a` ghost fill; the "MY ACCOUNT" button is white with `{colors.ink}` text and a 1px `{colors.ink}` border, `12px 24px` padding, 350px by 44px, 40px radius; the h2-role heading "THE BEST WORKOUT IN THE WORLD" is Antenna 16px / 700 / 19.2px uppercase, 325px by 98px with `40px 0px 20px` padding; body text stays 14px / 400 / 21px (316px by 126px). By characters the mobile sizes are 14px (2,536), 12px (650), 20px (171), 16px (141), 10px (48) and 24px (9). The mobile pass detected no nav role; navigation layout, column counts and breakpoints are not measured (the stylesheet declares `--_sizes---site--breakpoints--min-width` 320px and `--_sizes---site--breakpoints--max-width` 375px).

## Iteration Guide

1. Set `canvas` `#f7f7f7`, `ink` `#111111`, `on-primary` `#ffffff` and the brand red `primary` `#d6001a`.
2. Load Antenna (700), Benton Sans Pro (400, 700) and use uppercase for every heading, nav item and button.
3. Open with a dark video hero, a white pill and a ghost pill in a floating header.
4. Alternate `#f7f7f7` and black bands; put red only on labels, chips and single emphasised words.
5. Build cards 337px wide with 8px corners; build all buttons as 40px-radius pills with `12px 24px` padding.
6. Check mobile against the 390px values above; nav behaviour is not measured.
