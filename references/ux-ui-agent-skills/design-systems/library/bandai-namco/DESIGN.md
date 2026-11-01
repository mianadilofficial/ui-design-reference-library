---
version: alpha
name: Bandai Namco Entertainment America
category: "Gaming"
description: "Bandai Namco's Americas game-publisher site (bandainamcoent.com): a black header, hero and footer around white content bands, source-sans-pro at 60px/700 headlines and 16px body, white 40px pill buttons with 30px radius that turn #f6b700 on hover, and key-art tiles."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  neutral-200: "#cbcbcb"
  ink-muted: "#969696"
  ink-footer: "#a3a3a3"
  accent-red: "#e60000"
  hover-yellow: "#f6b700"
  accent-teal: "#00b0b9"
  accent-blue: "#0169b2"
typography:
  display:
    fontFamily: source-sans-pro, sans-serif
    fontSize: 60px
    fontWeight: 700
    lineHeight: 64px
  display-mobile:
    fontFamily: source-sans-pro, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: source-sans-pro, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: source-sans-pro, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: source-sans-pro, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 26px
  nav:
    fontFamily: source-sans-pro
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 0.16px
    textTransform: uppercase
  input:
    fontFamily: source-sans-pro, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 2px
  sm: 10px
  md: 30px
  lg: 100px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 33px
components:
  button-primary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 20px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.hover-yellow}"
    textColor: "{colors.canvas}"
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 20px
    height: 40px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    height: 50px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    padding: 0px 10px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 10px 16px
    height: 52px
    borderColor: "{colors.canvas}"
---

## Overview

This file documents bandainamcoent.com, the website of Bandai Namco Entertainment America Inc., which is the Americas operator and publishing arm of the Bandai Namco group. The queued brand is Bandai Namco; the measured site is its Americas entity, and the file is named for the measured site. On first load the site shows a region dialog ("We Think You Are Not Located In The Americas", with the buttons "Visit Your Local Website" and "Stay On The Current Website (AMERICAS)"). That splash is a geolocation gate and was hidden by a second measurement pass; the tokens below come from the real home page behind it.

The page is a game-industry storefront and news hub, designed as a stack of key-art panels. A black header bar (50px, `--global-nav-height`) holds the BANDAI NAMCO logo in a red outline, uppercase white navigation (GAMES, NEWS, COMPANY, SHOP, STUDIO ODYSSEY LIVESTREAMS, UNPAC PODCASTS) and search and account icons, with a thin multicolor segmented bar along the very top edge. Below it a full-width hero carousel shows game key art (ACE COMBAT 8: WINGS OF THEVE in the latest capture) with a white pill "Available Now" and an outlined pill "Learn More", dark square arrow buttons at each side and carousel dots.

The page then switches to a white content field: "Featured Games" in 60px bold black, a two-by-two grid of rounded key-art tiles with overlaid titles ("BECOME THE PILOT YOU WERE BORN TO BE", "Together with Heart!", "Season the Seas", "From Opposite Skies, Voices Unite") and a pair of pills on each ("Pre-Order Now" or "Wishlist Now", plus "Learn More"); "Featured News" with four tall image tiles and a black "View All Recent News" pill; and "Bandai Namco Store Features", four product cards, each with a red "Promotion" label, a bold product title, a short description and a "Shop Now" link with a circled arrow. Next comes a black newsletter band ("MORE FUN FOR EVERYONE", "Get Bandai Namco News Right in Your Inbox!", a white pill input and a "Sign Up Now" button) and a black footer with Games, Company and Follow Us columns, a "Browse All Games" pill, a "Select a Country" pill and legal links.

The voice is enthusiastic and gamer-direct: imperative calls to action (Pre-Order Now, Wishlist Now, Learn More, Shop Now), exclamation marks in headlines ("Together with Heart!"), and full-caps franchise names preserved from the games' own branding. Imagery is the entire visual interest; the interface uses black, white and one red.

## Colors

The shell is black and white with a single red and a single yellow hover.

- **canvas #000000** — the header, hero, newsletter band and footer (the largest measured background area, 3610 units).
- **page-body #ffffff** — the content bands behind "Featured Games", "Featured News" and the store cards (73 units) and the fill of primary buttons.
- **ink #ffffff** — text on black, measured at 1011 characters; **#000000** is the text color on the white bands (1022 characters), so black text on white and white text on black both occur.
- **primary #ffffff / on-primary #000000** — buttons are white pills with black labels; this is the detected primary CTA ("Available Now").
- **hover-yellow #f6b700** — the fill that every white pill ("Available Now", "Wishlist Now", "Pre-Order Now") switches to on hover, with the label staying #000000. It equals `--color-pac-man-500` (246, 183, 0) in the CSS.
- **accent-red #e60000** — red text (66 characters: the four "Promotion" labels and the Privacy Policy and Terms of Service links in the newsletter consent copy) and a small bar; equals `--color-primary-500`.
- **neutral-200 #cbcbcb** — consent copy on the black band (149 characters), equal to `--color-neutral-200`.
- **ink-muted #969696** — 194 characters of mid-grey text.
- **ink-footer #a3a3a3** — 51 characters in the footer legal text, which the mobile pass records for the footer nav.
- **accent-teal #00b0b9 and accent-blue #0169b2** — small measured background areas (1 and 5 units); #00b0b9 equals `--color-inky-500`. Their elements were not identified; the capture shows a thin multicolor bar along the top edge.

The CSS declares full tonal ramps for the yellow ("pac-man" 50 to 900), a teal ("inky" 50 to 900), a red primary scale and a link blue (`--color-link-400`, 50 112 166), echoing the group's own game franchises. Only the values listed above were measured on the page.

## Typography

One family: **source-sans-pro** (loaded in 400, 600, 700 and 900; 2514 characters measured), with a `sans-serif` fallback, plus an icon font `bnea`. The stylesheet is shared with many game microsites and declares further families (learnedhand, Jost, Montserrat and others) for those; none was measured on the home page. The root exposes a heading scale as variables: `--h1-font-size: 60px` / 64px, `--h2` 48px / 52px, `--h3` 32px / 36px, `--h4` 24px / 28px, `--h5` 20px / 24px, `--h6` 16px / 20px, `--h7` 14px / 18px, with mobile values of 32px, 28px, 24px, 20px, 16px, 14px and 14px, all at weight 700.

- **display — 60px / 64px, 700.** "Featured Games", "Featured News" section titles in black.
- **display-mobile — 32px / 36px, 700.** The same title in the 390px pass.
- **heading — 20px / 24px, 700.** Tile titles, white over key art.
- **body — 16px / 26px, 400.** Descriptive and consent copy.
- **button — 16px / 26px, 700.** All pill labels.
- **nav — 16px / 16px, 700, tracking 0.16px, uppercase.** Header navigation.
- **input — 18px / 28px, 400.** The newsletter email field.

Sizes by character count are 16px (1610), 24px (385), 20px (319), 32px (146) and 60px (54). Weights are 400 (1200), 700 (1181), 600 (91) and 900 (42). The hierarchy is made by weight 700 against 400 at a few sizes, not by additional families.

## Layout

The desktop page measured 1280px wide and 3960px tall. CSS variables give the container widths: `--desktop-max-width: 1400px`, `--laptop-max-width: 1380px`, `--tablet-max-width: 1040px`, and a spacing scale `--s-4` through `--s-120` (4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 48, 64, 72, 100 and 120px) plus section paddings (`--padding-small: 16px`, `--padding-medium: 24px`, `--padding-large: 32px`, `--padding-xlarge: 54px`, `--padding-xxlarge: 100px`).

The hero is full-bleed. Content bands center in the container: the Featured Games grid is two columns by two rows of wide tiles; Featured News and Store Features are four equal columns; the footer is three columns. Measured gaps are 5px (42), 10px (16), 20px (8), 30px (8) and 15px (8); paddings are 20px (32), 12px (21), 10px (9), 24px (9) and 33px (8).

## Elevation & Depth

Mostly flat. Two box shadows were measured on the home page: `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2 elements) and `rgb(128, 128, 128) 0px 0px 5px 0px` (1); which elements carry them was not mapped. Depth otherwise comes from dark overlays on key art (title text sits on darkened gradient areas), the contrast between black bands and the white content field, and 2px borders on outlined buttons (10 measured #ffffff borders).

## Shapes

Roundness is large and consistent. Buttons and the email input use a 30px radius (23 elements), which reads as a pill at 40px or 52px height; mid-size tiles use 10px (16 elements); circular elements use 50% or 100% (3 and 2 elements) for icon buttons; one 2px radius and two 100px radii were also measured. Key-art tiles and product images in the capture have rounded corners, while the carousel arrow buttons at the hero edges are dark squares with square corners. Dividers are flat rules.

## Components

**Primary button.** White (#ffffff) fill, #000000 label, source-sans-pro 700 at 16px / 26px, radius 30px, padding `12px 20px`, height 40px; widths measured include 144px ("Available Now"), 197px ("Select a Country") and 288px in the 390px pass. Hover changes only the fill, to #f6b700.

**Outline button.** Transparent fill, 2px #ffffff border, white label, same size and radius ("Learn More", 123px wide).

**Header navigation.** 50px bar, uppercase 16px / 700 links with 0.16px tracking and `0px 10px` padding (the GAMES link is 86px wide), white on black; some items carry a small dropdown arrow.

**Tile title link.** White, 700 at 20px / 24px over key art; the whole tile is the link.

**Email input.** White field, black 18px text, 2px border, radius 30px, padding `10px 16px`, height 52px, 346px wide; the adjacent "Sign Up Now" button appears greyed in the capture, and the page contains an error message, "Please enter a valid e-mail address."

**Product card.** Image, red "Promotion" label, bold title, description in grey and "Shop Now" with a circled arrow.

**Footer.** Black field, grey legal links with slash separators and the copyright "© Bandai Namco Entertainment America Inc. All third party content, brands, names, and logos are used under license and remain property of their respective owners. All rights reserved."

## Design System Architecture

No public brand-guidelines or design-system site was found for Bandai Namco Entertainment America. The home page https://www.bandainamcoent.com/ was opened; its content lists games, news, store and company links, with no brand-guideline, press-kit or design-system page.

The shipped system is an Angular application (`ng-version="15.2.2"`) with one global stylesheet (`/styles.d98ae04b9d31d57a.css`, about 4 MB) shared with per-game microsites. The root declares about 300 custom properties: typography tokens (`--h1-font-size` through `--h7-font-size`, `--p-*` sizes with mobile variants, `--font-family: source-sans-pro, sans-serif`), a spacing and margin scale (`--s-*`, `--padding-*`, `--margin-*`, with desktop, tablet and mobile variants), layout widths, and color ramps named after Bandai Namco's own characters and franchises (`--color-pac-man-*`, `--color-inky-*`) alongside `--color-primary-*`, `--color-neutral-*` and `--color-link-*`. Breakpoints in the stylesheet cluster around 1080px (1078 to 1080px) and 723px (722 to 724px). Angular CDK's overlay container held the region and consent overlays hidden by the extractor.

## Do's and Don'ts

- Do use white pills with black labels (16px / 700, 30px radius) for actions and #f6b700 for hover.
- Do use black for header, hero, newsletter and footer, and white for editorial content bands.
- Do set section titles in source-sans-pro 700 at 60px and navigation in uppercase 16px with 0.16px tracking.
- Do let franchise key art fill tiles, with titles in white 20px bold over darkened areas.
- Do mark promotional items with red #e60000 text.
- Don't introduce further typefaces on the shared shell; the measured page uses only source-sans-pro.
- Don't use square buttons; the measured radii are 30px for buttons and inputs.
- Don't document the region splash or consent overlays as brand UI.
- Don't use yellow as a resting fill; it is only measured as the hover state.

## Responsive Behavior

Measured at the 390px mobile pass: the page title drops to 32px / 36px, 700; tile titles measure 16px / 20px; body and consent copy stay at 16px / 26px; the primary button keeps 40px height, 30px radius and `12px 20px` padding but measures 288px wide; the footer legal links measure 16px / 40px in #a3a3a3 inside a 313px-wide nav block. The most common mobile sizes are 16px (1650 characters), 20px (468), 14px (199), 24px (63) and 32px (54).

The shipped stylesheet declares breakpoints near 1080px and 723px; its container variables are 1400px, 1380px and 1040px for desktop, laptop and tablet. How the hero, tile grids and header reflow at these widths was not measured, and no mobile capture image exists.

## Iteration Guide

1. Build the shell in black (#000000) and white (#ffffff); use #e60000 only for text labels and links that mark promotions.
2. Set all type in source-sans-pro: 60px / 64px titles, 20px / 24px tile titles, 16px / 26px copy, 700 for actions.
3. Make every action a 40px pill (radius 30px, padding `12px 20px`); white fill with black text, hover #f6b700; outlined variant with a 2px white border on dark art.
4. Put full-bleed key art in the hero and rounded tiles in a two-column grid; overlay titles in white.
5. Keep the newsletter field a 52px white pill with 18px text.
6. Re-measure the shadows, hover on tiles and mobile layout before documenting them.
7. Gate with `node web/scripts/verify-designs.mjs --slug=bandai-namco`.
