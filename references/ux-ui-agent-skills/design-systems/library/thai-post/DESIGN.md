---
version: alpha
name: Thai Post
category: "Thai Brands"
description: "Thai Post newspaper site (thaipost.net): white canvas, navy #003254 headlines in Prompt with Sarabun 18px body, red #e11612 accents, charcoal #363636 bands, flat rule-divided layout and #ededed pill buttons at 64px radius with #b82e24 hover."
colors:
  canvas: "#ffffff"
  ink: "#003254"
  primary: "#ededed"
  on-primary: "#424242"
  surface-dark: "#363636"
  accent-red: "#e11612"
  ink-body: "#4e4e4e"
  ink-text: "#333333"
  ink-scrim: "#000000d9"
  pager-blue: "#0b4c8f"
  primary-hover: "#b82e24"
  nav-text: "#555555"
  text-input-text: "#2f2f2f"
  text-input-border: "#98989833"
typography:
  display:
    fontFamily: Prompt
    fontSize: 34px
    fontWeight: 400
    lineHeight: 40.8px
    letterSpacing: 0.18px
  display-mobile:
    fontFamily: Prompt
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.18px
  subheading:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 500
  body:
    fontFamily: Sarabun
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30.6px
    letterSpacing: 0.18px
  button:
    fontFamily: Sarabun
    fontSize: 16px
    fontWeight: 400
  nav:
    fontFamily: Prompt
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.18px
  button-secondary:
    fontFamily: Sarabun
    fontSize: 11px
    fontWeight: 400
  input:
    fontFamily: Prompt
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20.4px
rounded:
  xs: 4px
  sm: 44px
  md: 48px
  lg: 64px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7.5px
  s3: 10px
  s4: 12.5px
  s5: 16px
  s6: 20px
  s7: 25px
  s8: 26px
  s9: 30px
  s10: 119.88px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 15px 43px
    height: 51px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.ink-scrim}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 10px 30px
    height: 35px
  link:
    textColor: "{colors.ink-text}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    typography: "{typography.nav}"
    padding: 0px 0px 105.75px
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 8px 45px 8px 17px
    height: 40px
    borderColor: "{colors.text-input-border}"
  footer:
    textColor: "{colors.ink-text}"
---

# Thai Post (ไทยโพสต์)

## Overview
The measured site is thaipost.net, the Thai-language newspaper site of Thai Post (the masthead reads "ไทยโพสต์" with the tagline "อิสรภาพแห่งความคิด"). It is a WordPress site (the extracted root variables include `--wp--preset` entries together with `--font-base`, `--font-headings` and `--font-input`, all set to Prompt). The language is Thai.

The capture shows a classic news-portal homepage on a white canvas. A masthead band carries the date and weather at the left, the large blue logo in the center, and a search field with social icons and a LINE handle at the right. Beneath it a thin gray-ruled navigation row lists politics, columnist "เปลว สีเงิน", columnists, economy, international, entertainment, newspaper and Thaipost TV, with a menu icon at the far right. A strip of four columnist teasers (round portrait plus small blue kicker and bold headline) leads into a large hero story with a navy gradient headline panel and a red line under it, five pager dots (four blue, one red) and a right-hand "NEWS UPDATE" list headed by a red rule. Below are two rows of three story cards, a pill-shaped "ข่าวเด่นทั้งหมด" button, and a "การเมือง" section with a three-column layout whose right column features a columnist's ink portrait.

Imagery is press photography; headlines are navy and bold, abstracts are gray. The voice is a newspaper's: short quoted names in single quotes inside headlines and truncated two-line summaries.

## Colors
Measured text colors by character count: `#003254` (dark navy, 6,315 characters, the main headline color and `ink`), `#4e4e4e` (3,076, body copy), white, `#333333`, `#ededed`, `#000000d9`, `#555555` (navigation) and grays `#6f6f6f`, `#999999`. Backgrounds by area: `#363636` (dark charcoal, 1,959, the footer/dark band), `#ededed` (766, the pill-button and light gray bands), `#e11612` (333, red accent), `#cf0000` (288, the active pager dot after hover), `#3e89cf` (194, a mid blue), and white.

The generator took the detected call-to-action ("ข่าวเด่นทั้งหมด") as the primary: fill `#ededed`, text `#424242`, hover `#b82e24` with white text. The brand colors visible in the capture are the red `#e11612` (kept as `accent-red`) and the navy `#003254`. The logo's blue and the `#0b4c8f` pager-dot blue (the hover table shows the dot going from `rgb(11, 76, 143)` to `rgb(207, 0, 0)`) are the other brand cues. The WordPress presets in the root variables (`#0693e3`, `#9b51e0`, `#8ed1fc`) are framework defaults and are not brand colors.

## Typography
Prompt dominates (11,261 characters), followed by Sarabun (3,964), THSarabunNew (802) and a little Arial. Loaded fonts are Prompt 300, 400, 500, 700, Sarabun 400, Roboto and a social icon font. Both Prompt and Sarabun are open Thai-and-Latin typefaces.

Measured roles: display 34px / 40.8px weight 400 with 0.18px letter-spacing (headline on the hero); at mobile (390px) the headline is 20px / 24px; subheading Prompt 16px weight 500; body Sarabun 18px / 30.6px weight 400, 0.18px spacing; navigation Prompt 18px / 18px; button Sarabun 16px; secondary button 11px; input Prompt 12px / 20.4px. By characters, the heaviest sizes are 20px (7,235, card headlines), 14px, 18px, 16px, 30px, 17px and 34px. Weights: 500 (8,014) and 400 (6,848) dominate, with 700 (1,154) for bold headings.

## Layout
The desktop page is 1280px wide and 14,880px tall. Content sits in a single centered column ruled off by thin gray lines (its exact width was not measured). The top section is two-thirds main story, one-third side rail; below it three-up cards, then a three-column section layout separated by vertical hairlines. Section titles ("การเมือง") are large light-weight Thai with a gray rule below. Measured spacing values include 5px, 7.5px, 10px, 12.5px, 16px, 20px, 25px, 26px and 30px.

The secondary navigation reached through the menu icon lists many topic categories (general news, X-CITE, crime, regional, sport, royal news, automotive, variety, public health and quality of life, travel and arts, environment, public relations, history, articles, news search), so the homepage is a gateway to a deep category tree rather than a flat page. The header also shows today's date and temperature, a small utility that reinforces the daily-newspaper character. Section headings and the NEWS UPDATE list use time stamps in a small gray size (the 11px and 13px sizes in the measured size table), while story headlines use the 20px size, which gives a clear three-tier reading order: stamp, headline, summary.

## Elevation & Depth
No box shadows were measured (the shadow list is empty), so the page is flat; hierarchy is created through rules (gray hairlines, a red rule above the update list and under the hero), a navy-to-transparent gradient panel behind the hero headline, and photo size.

The footer-level dark band  is the largest background area measured (1,959), larger than the white canvas share by the extractor's area weighting, so dark charcoal is a structural color of this site even though the first screen reads as white. Text on it is white (2,024 characters) or  (1,008 characters). The red  and the blue  appear as small bars and tags rather than as large fills.

## Shapes
Radii: 50% (16 elements, pager dots and round avatars), 100%, 4px, and large rounded values on form and button controls: 44px, 48px and 64px. Photos and cards are square-cornered (no radius measured for them). The pill button's radius is 64px.

## Components
- **button-primary ("ข่าวเด่นทั้งหมด"):** fill `#ededed`, text `#424242`, Sarabun 16px, radius 64px, padding 15px 43px, height 51px; hover fill `#b82e24` with white text.
- **button-secondary:** background `#000000d9`, white 11px text, radius 44px, padding 10px 30px, height 35px.
- **text-input (search):** text `#2f2f2f`, Prompt 12px, radius 48px, padding 8px 45px 8px 17px, height 40px, border `#98989833`.
- **nav:** items in `#555555`, Prompt 18px, with a gray rule above and below.
- **link / footer:** `#333333`.
- **Pager dots:** 10px circles, blue `#0b4c8f` with the active/hovered state `#cf0000`.
- **Story card:** photo above a two-line navy headline, no border.

## Design System Architecture
No public design system, brand guideline or press kit was found; the homepage navigation and sections open on news categories only. The de-facto system is a WordPress theme with three font variables (`--font-base`, `--font-headings`, `--font-input`, all Prompt) plus Visual Composer-style content blocks (a `vcv-socialicons` icon font is loaded) over the stock WordPress preset palette. Brand colors are hard-coded rather than exposed as variables.

## Do's and Don'ts
- Do set headlines in navy `#003254` and abstracts in gray `#4e4e4e`.
- Do use thin gray rules to divide the page rather than shadows or boxes.
- Do pair a 20px Prompt headline with an 18px Sarabun body at 30.6px line height.
- Do use red `#e11612` for rules and accents, sparingly.
- Don't add shadows or rounded photo corners; neither was measured.
- Don't use the WordPress preset colors.
- Don't use the fully rounded 64px radius on cards; it belongs to pill buttons.

## Responsive Behavior
Mobile (390px) was measured for type only: the lead headline is 20px / 24px weight 400 (Prompt), the body 18px / 30.6px, and the "ข่าวเด่นทั้งหมด" button keeps Sarabun 16px, `#ededed` fill and a 64px radius. Column collapse, menu behavior and breakpoints are not measured.

## Iteration Guide
1. White canvas, navy `#003254` headlines, `#4e4e4e` body, `#363636` dark bands.
2. Prompt for headings and navigation, Sarabun for body and buttons.
3. Divide with 1px gray rules; add red `#e11612` rules for emphasis.
4. Pill buttons: `#ededed` / `#424242`, 64px radius, 51px tall; hover `#b82e24`.
5. Keep images square-cornered.
6. Verify with `node web/scripts/verify-designs.mjs --slug=thai-post`.
