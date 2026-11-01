---
version: alpha
name: "The White House"
category: "Government & Nonprofit"
description: "Official US presidential website: deep navy #0d132d and white with a burgundy #8b1a1a pill accent, Instrument Serif statements at 30px, Instrument Sans body at 14px, wide uppercase Nord navigation with 1.8px tracking, full-bleed photographic tiles."
colors:
  canvas: "#ffffff"
  ink: "#293340"
  primary: "#8b1a1a"
  on-primary: "#fbf6e9"
  surface: "#0d132d"
  surface-3: "#151a30"
  ink-3: "#000000"
  ink-4: "#141f4d"
  hairline: "#d9dee8"
typography:
  display:
    fontFamily: "\"Instrument Serif\", \"Iowan Old Style\", Georgia, serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 17px
  display-mobile:
    fontFamily: "\"Instrument Serif\", \"Iowan Old Style\", Georgia, serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
  heading:
    fontFamily: "\"Instrument Serif\", serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 35.4px
    letterSpacing: 0.76px
  subheading:
    fontFamily: NORD, sans-serif
    fontSize: 12px
    fontWeight: 300
    lineHeight: 12px
    letterSpacing: 2px
    textTransform: uppercase
  body:
    fontFamily: "\"Instrument Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  nav:
    fontFamily: Nord, serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.16px
    letterSpacing: 1.8px
    textTransform: uppercase
  link:
    fontFamily: "\"Instrument Sans\", sans-serif"
    fontSize: 17.68px
    fontWeight: 400
    lineHeight: 28.288px
    letterSpacing: 0.2px
  input:
    fontFamily: "\"Instrument Sans\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px
    letterSpacing: 0.4px
rounded:
  xs: 10px
  sm: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 7px
  s6: 7.8px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
    rounded: "{rounded.pill}"
    padding: 12px 20px 12px 16px
    height: 42px
    boxShadow: rgba(139, 26, 26, 0.5) 0px 10px 30px -8px, rgba(21, 25, 43, 0.15) 0px 2px 6px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 10px 16px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 6px 0px
    height: 28px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-4}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(255, 255, 255, 0.1) 0px 0px 6px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.canvas}"
---

# The White House

## Overview

whitehouse.gov is the official website of the White House, and its current homepage is presented as a cinematic, magazine-like front page rather than a document index. The measured page is 4702px tall at 1280px wide. A scrolling text ticker ("Download the Official White House App • Real-time news • Live updates • A direct line to the administration") sits above a dark hero that carries a menu control, the White House logotype, a search control and a row of uppercase navigation links. Below it, a white reading section holds a centred statement attributed to Donald J. Trump, "45th & 47th President of the United States", followed by full-bleed photographic tiles titled by priority (for example "SECURE THE BORDER").

The design language is deep navy `#0d132d` and white with a single burgundy accent `#8b1a1a`, a refined serif for display, a neutral sans for reading, and a wide, geometric uppercase face (Nord) for navigation and labels. Pages open with a dismissible overlay panel in the capture; that panel, its scrim and its red numeric stat cards were treated as a popup and excluded from the measured tokens.

## Colors

- `canvas` `#ffffff` is the reading background; `surface` `#0d132d` (deep navy) is the largest painted area on the page, used for the hero and footer. `surface-3` `#151a30` is a slightly lighter navy panel.
- `ink` `#293340` is the body text color (1061 measured characters). `ink-4` `#141f4d` is a navy used for card text (80 characters), and `ink-3` `#000000` appears in 327 characters of very small type. White `#ffffff` text (638 characters) sits on navy and photography.
- `primary` `#8b1a1a` is a dark red used for the "Freedom 250 Events" pill; its text `on-primary` is cream `#fbf6e9`. A brighter red `#b50000` and `#ff0000` also appear in small amounts (15 and 5 units) and are not promoted to tokens here.
- `hairline` `#d9dee8` is the light divider and border color.
- Photography and video supply the rest; the colors in them are not tokens.

## Typography

Three families carry the site. Display and statement type use Instrument Serif: the heading role is 30px, weight 400, line height 35.4px with 0.76px letter spacing (the signature line "Donald J. Trump"), and the pill label is Instrument Serif at 17px with a 17px line height (15px on the measured mobile pass). Body copy is Instrument Sans: 14px with a 22.4px line height for the measured paragraph role, and the page body is 17.68px with 28.288px line height and 0.2px letter spacing. The shipped CSS sets the body size with `clamp(1rem,0.2vw + 0.945rem,1.125rem)`.

Navigation and labels are set in Nord (also written NORD), a wide geometric face, uppercase with generous tracking: nav links are 12px at weight 400, line height 14.16px, 1.8px letter spacing; the tile labels are 12px at weight 300 with 2px tracking; the footer links are 13px with 2.8px tracking. The smallest dominant label size is 9.6px with 1.92px tracking (327 characters). The input text is 13px with 0.4px tracking. Weights in use are 300, 400, 500 and 600. By character count, 14px dominates (1031), then 13px (335), 9.6px (327) and 12px (265). Instrument Sans and Instrument Serif are open fonts; Nord is a proprietary face, for which a wide geometric sans in uppercase is the nearest substitute.

## Layout

The reading column is narrow and centred (the paragraph measured 760px wide) on a full-width white band, justified text in the capture. Photographic tiles run edge to edge and carry a small uppercase caption at the lower right. The nav is 1216px wide in a 45px row, each link padded 10px 16px, with the menu control and search control at either end of the logo row. The footer is a 534px navy block with columns of uppercase links, a newsletter field and store badges. Spacing values measured include 1px, 2px, 4px, 6px, 7px, 7.8px, 8px, 9px, 10px and 12px, and the CSS defines WordPress preset spacing variables such as `--wp--preset--spacing--4` as 4px and `--wp--preset--spacing--15` as 15px.

## Elevation & Depth

Two shadows were measured after excluding the popup. The pill button has a red glow, `rgba(139, 26, 26, 0.5) 0px 10px 30px -8px, rgba(21, 25, 43, 0.15) 0px 2px 6px 0px`, and on hover this strengthens to a larger offset (`rgba(139, 26, 26, 0.55) 0px 14px 36px -8px`). A card carries a faint white halo, `rgba(255, 255, 255, 0.1) 0px 0px 6px 0px`. Elsewhere depth comes from dark scrims over imagery and the navy-versus-white banding.

## Shapes

Shapes are mostly rectangular with fully rounded controls. `pill` is 9999px (7 uses) and 999px (the Freedom 250 pill computes 999px). `sm` is 100px (2 uses) and `xs` is 10px, measured as a top-rounded corner on a card (10px 10px 0px 0px). Photographic tiles and the nav have 0px radii.

## Components

- **button-primary** ("Freedom 250 Events"): `#8b1a1a` fill, cream `#fbf6e9` Instrument Serif 17px label, pill radius, padding 12px 20px 12px 16px, 42px high, with the red glow shadow above. A calendar icon precedes the label in the capture.
- **nav-link**: 12px Nord uppercase, 1.8px tracking, padding 10px 16px, white on the dark hero.
- **text-input** (search/newsletter): 13px Instrument Sans, 0.4px tracking, padding 6px 0px, 28px high, white text on navy.
- **card**: a top-rounded 10px panel with a white halo and `#141f4d` text.
- **link**: Instrument Sans 17.68px in `#293340`.
- **footer**: `#0d132d` background, white uppercase Nord links at 13px.
- A secondary action in the dismissed overlay switched from `rgb(115, 0, 0)` to `rgb(181, 0, 0)` on hover (measured before the overlay was hidden); this is noted as a measurement and not documented as a component.

## Design System Architecture

No public design system or brand guideline is published or linked on https://www.whitehouse.gov/ (the opened homepage links to news, media, administration, priorities, about and get-involved sections, an app, and social channels, but no style guide). The de-facto system is a WordPress block theme: the shipped CSS declares `--wp--preset--*` variables (for example `--wp--preset--spacing--4`), `--wp--custom--typography--*` font variables that resolve to Instrument Sans, and a site-specific `--wh--*` layer such as `--wh--custom--typography--body--font-size` and `--wh--topper--color`. Tokens in this file were measured from the rendered page.

## Do's and Don'ts

- Do pair the navy `#0d132d` surface with white text and the burgundy `#8b1a1a` accent for one primary action.
- Do set navigation and labels in wide uppercase type with 1.8px to 2.8px tracking.
- Do use the serif for the statement and signature line and the sans for reading text.
- Do keep photographic tiles full-bleed, with a small uppercase caption.
- Don't use the scrim, overlay, stat cards or ticker as brand tokens.
- Don't add shadows beyond the red button glow and the white card halo.
- Don't use browser-default blue links.

## Responsive Behavior

The extraction's mobile pass recorded the pill label at 15px (line height 15px, width 104px) against 17px on desktop, and the heading role stayed at 30px with 35.4px line height. Menu behaviour, column changes and touch targets on small screens were not measured. Breakpoints are not measured.

## Iteration Guide

1. Start with `#ffffff`, `#293340`, `#0d132d` and the single accent `#8b1a1a` with cream `#fbf6e9` text.
2. Set statements in Instrument Serif at 30px, reading text in Instrument Sans at 14px, labels in Nord uppercase at 12px with 1.8px tracking.
3. Build the primary action as a 42px pill with the red glow shadow.
4. Re-measure with the extractor after changes, and exclude any dismissible overlay from the tokens.
