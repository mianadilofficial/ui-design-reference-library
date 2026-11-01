---
version: alpha
name: iHeartRadio
category: "Music & Audio"
description: "iHeartRadio web player home (iheart.com) measured: a light app shell in Open Sans Variable with a #f6f8f9 page, white sidebar, #cc032e iHeart red pill buttons (990px radius, 32px high), #27292d ink, 6px radius tiles, 0.15-alpha elevation shadows and an internal 'accomplice' token set."
colors:
  canvas: "#ffffff"
  page-body: "#f6f8f9"
  ink: "#27292d"
  primary: "#cc032e"
  on-primary: "#ffffff"
  surface-gray: "#e6eaed"
  ink-black: "#000000"
  ink-grey: "#55565b"
  link-blue: "#0055b7"
  hairline: "#767676"
  primary-hover: "#e22c3a"
  text-input-bg: "#dadfe3"
typography:
  display:
    fontFamily: "\"Open Sans Variable\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: "\"Open Sans Variable\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.5px"
  body:
    fontFamily: "\"Open Sans Variable\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.5px"
  button:
    fontFamily: "\"Open Sans Variable\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: "-0.2px"
  link:
    fontFamily: "\"Open Sans Variable\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button-secondary:
    fontFamily: "\"Open Sans Variable\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.2px"
rounded:
  xs: 2.5px
  sm: 5px
  md: 6px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 18px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 32px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 3px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link-blue}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 32px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 3px 0px
  link:
    textColor: "{colors.ink-grey}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-grey}"
    typography: "{typography.body}"
    height: 24px
  footer:
    textColor: "{colors.ink-grey}"
    padding: 40px 32px 32px
---

## Overview

The measured page is the iHeartRadio web player home (https://www.iheart.com/, title "Listen to Your Favorite Music, Podcasts, and Radio Stations for Free!"). It is an app shell rather than a marketing page: a white left sidebar with the red iHeart logo and three items (Home, Search, Podcasts) in which Home is the active item with a grey pill background and a red house icon; a top search bar with the placeholder "What do you want to listen to?"; a "Recently Played" empty-state card with a pink-to-white gradient, the text "Listen to live radio, artists, podcasts and playlists to see your listening history." and a red "Search" button; a "Top Podcasts" carousel with outlined numerals 1-5 beside square cover art (Stuff You Should Know, Dateline NBC, iHeartRadio 24/7 News: The Latest, Emergency Intercom) and an "All Categories" dropdown pill; and a fixed bottom player bar with a round play button, a red "LIVE" tag, a volume slider and a "Presets" strip of empty "+" tiles. The page is only 1105px tall because the player is the viewport.

Voice is plain and utility-first ("Dismiss", "Presets", "Search"). Cover art supplies all the colour variety; chrome stays neutral grey with a single red brand colour. A consent banner (OneTrust) was hidden by the extractor and is not described here.

## Colors

- **Canvas** `#ffffff` is the sidebar, cards and player; the page body is `#f6f8f9` (1476 area units; token `page-body`).
- **Surface gray** `#e6eaed` (461 units) is used for active sidebar items and placeholder tiles; `#dadfe3` is the search input fill.
- **Primary** `#cc032e` (`--accomplice-color-red550`) fills the red pill buttons with white labels; hover is `#e22c3a` (`red400`). The brand ramp is declared from `red100` `#F4ADB1` to `red650` `#B30027`, including `red350` `#F94E5C` (240 area units, the gradient and active accents), `red500` `#D2252A` and `red600` `#C6002B`, the last of which is also the measured colour of the body element's text.
- **Ink** `#27292d` is the main text colour (278 characters), `#000000` headings (129), `#55565b` secondary text and footer (86).
- **Link blue** `#0055b7` is used for the "All Categories" label (28 characters).
- **Hairline** `#767676` is the only border colour measured (the native input).
- Pale text `#f6f8f9` and white appear on red surfaces.

## Typography

One family: **Open Sans Variable** (loaded range 300-800), with a sans-serif fallback. Letter-spacing is negative on text: -0.5px on headings and body, -0.2px on buttons.

| Role | Measured |
|---|---|
| Display ("Recently Played") | 24px / 700 / 30px, -0.5px; 20px / 24px at 390px |
| Body | 16px / 400 / 24px, -0.5px; 14px / 18px at 390px |
| Button | 14px / 600 / 16px, -0.2px |
| Secondary button | 16px / 600 / 24px, -0.2px |
| Link / footer | 12px / 400 / 16px |

Sizes by characters: 16px (350), 12px (72), 24px (41), 14px (38), 10px (30), and a 90px outlined numeral for the ranking (11 characters). Weights: 600 (315), 400 (186), 700 (45). The system's own size tokens are rem-based (`--accomplice-fontSize-10` = 1rem through `-24` = 2.4rem).

## Layout

The desktop pass is 1280px wide. A fixed left sidebar (its pixel width was not measured), a search header, a scrolling content column with horizontal carousels, and a docked player bar at the bottom. Carousel headings are paired with circular previous/next arrow buttons (grey disabled, black active). The preset strip is a row of square tiles with plus icons. Spacing values: 2, 4, 6, 8, 12, 16, 18, 24, 32 and 40px; the footer has padding 40px 32px 32px.

## Elevation & Depth

Elevation is tokenised and low: `--accomplice-shadow-elevation1` `0 1px 3px rgba(0,0,0,.15)` is used on 50 elements, including the red and white pill buttons; `elevationUp1` `0 -1px 3px rgba(0,0,0,.15)` (2 elements) lifts the player bar; further steps are elevation4 `0 3px 5px`, elevation6 `0 5px 8px` and elevation8 `0 8px 24px`, all at 0.15 alpha. Focus outlines are `0 0 0 .2rem #FFFFFF` (dark surfaces) and `#000000` (light surfaces).

## Shapes

Radii measured: 6px (136 elements: tiles, cards, sidebar items), 990px (23 elements, pill buttons), 5px (2), 2.5px (1) and `6px 6px 0 0` (2). The token radius scale (`--accomplice-radius-1` .125rem to `-6` .6rem, `-16` 1.6rem, `-18`, `-999` 99rem) matches these. Buttons are full pills; content tiles are 6px.

## Components

- **button-primary** ("Search"): `#cc032e` fill, white 14px/600 label, padding 8px 16px, height 32px, pill radius, elevation1 shadow; hover fill `#e22c3a`.
- **button-secondary** ("All Categories"): white fill, `#0055b7` 16px/600 label, pill radius, padding 8px 16px, height 32px, elevation1.
- **Sidebar item**: icon plus 14px label; active state has a `#e6eaed` rounded background and a red icon.
- **Text input**: `#dadfe3` fill, `#55565b` text, 16px, height 24px, with a leading search icon.
- **Cover tile**: square art with a 6px radius and a centred two-line title below.
- **Player bar**: white, up-shadow, black circular play button, red "LIVE" tag, red volume fill.
- **Footer**: `#55565b` 12px text, padding 40px 32px 32px, links Help, Privacy Policy, Terms of Use.

## Design System Architecture

iHeartRadio's CSS carries its own named system: 241 custom properties on `:root`, all prefixed `--accomplice-` (for example `--accomplice-color-red550`, `--accomplice-fontSize-14`, `--accomplice-radius-4`, `--accomplice-borderWidth-1`, `--accomplice-letterSpacing-5`, `--accomplice-lineHeight-10`, `--accomplice-shadow-elevation1`). The colour ramps run in 50-step numeric scales (red, magenta, green and others), type uses numeric size keys in rem, and shadows are named by elevation. No public documentation of this system was linked from https://www.iheart.com/ and none was searched, so the tokens are cited from the shipped CSS only.

In practice the visual identity is carried by three things: the red pill, the six-pixel tile and the outlined rank numeral. Everything else is deliberately quiet so that thousands of third-party cover images and station logos can sit side by side without competing with the interface. The empty states (Recently Played, Presets) use the same grammar as populated states: a tile or card at the same radius with a plus or search glyph, which keeps the layout stable before a listener has any history. Each of those empty-state treatments is visible in the capture and needs no extra colour beyond the tokens above.

## Do's and Don'ts

- Do keep the shell neutral (`#f6f8f9`, white, `#e6eaed`) and let cover art provide colour.
- Do use iHeart red `#cc032e` only for primary actions, the active nav icon and the LIVE tag.
- Do use pill buttons (full radius) and 6px tiles.
- Do keep shadows at the 0.15-alpha elevation steps.
- Don't use red as a large background; the only red-tinted area is the pink empty-state gradient.
- Don't use heavy type weights beyond 700 or any second family.
- Don't document the cookie banner as brand UI.

## Responsive Behavior

Measured at 390px: the "Recently Played" heading is 20px / 24px weight 700, body copy is 14px / 18px, and the Search button is unchanged (14px/600, padding 8px 16px, `#cc032e`, 990px radius). Mobile character counts by size: 14px (339), 12px (90), 20px (41), 16px (31), 50px (11). The mobile navigation was not detected; sidebar collapse and layout changes are not measured.

## Iteration Guide

1. Build the shell: white sidebar, `#f6f8f9` content, docked white player with an up-shadow.
2. Use Open Sans Variable with -0.5px tracking on text and -0.2px on buttons.
3. Add pill buttons in `#cc032e` and white pills with blue text for filters.
4. Use 6px-radius square covers with outlined 90px rank numerals for charts.
5. Use the `--accomplice` red ramp for states: hover `#e22c3a`, accent `#f94e5c`.
6. Check every value against the frontmatter; leave unmeasured responsive behavior as "not measured".
