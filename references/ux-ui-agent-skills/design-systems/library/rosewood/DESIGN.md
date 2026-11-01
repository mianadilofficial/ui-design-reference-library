---
version: alpha
name: Rosewood Hotels & Resorts
category: "Travel & Hospitality"
description: "Rosewood Hotels (rosewoodhotels.com) measured home: off-white #fafbf5 canvas, cream #f0eee0 bands, forest green #013d2d square RESERVE button, Engravers Gothic Bold caps with wide tracking plus Austin Light Web serif, zero radius, almost no shadow."
colors:
  canvas: "#fafbf5"
  ink: "#000000"
  primary: "#013d2d"
  on-primary: "#fafbf5"
  surface-2: "#f0eee0"
  ink-bootstrap-body: "#212529"
  ink-body: "#363638"
  hairline: "#cfcbaf"
  primary-hover: "#013225"
typography:
  display:
    fontFamily: "\"Engravers Gothic Bold\""
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: 4.8px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Austin Light Web\""
    fontSize: 32px
    fontWeight: 300
    lineHeight: 32px
  heading:
    fontFamily: "\"Engravers Gothic Bold\""
    fontSize: 18px
    fontWeight: 700
    lineHeight: 21px
    letterSpacing: 3.6px
    textTransform: uppercase
  body:
    fontFamily: "\"Austin Light Web\""
    fontSize: 22px
    fontWeight: 300
    lineHeight: 22px
  button:
    fontFamily: "\"Engravers Gothic Bold\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 0px
    letterSpacing: 2.4px
    textTransform: uppercase
rounded:
  xs: 28px
  sm: 90px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 24px
    height: 54px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 24px
    height: 54px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
---

# Rosewood Hotels & Resorts

## Overview

The measured page is https://www.rosewoodhotels.com/en/default (title "Luxury Hotels | Luxury Resorts | Rosewood 5-Star Hotels"). It is a luxury-hospitality site that behaves like a magazine: a centered ROSEWOOD wordmark in wide-tracked capitals over a hairline rule, a quiet nav row in a light serif, a full-bleed photographic hero with a short serif strapline and one black "DISCOVER" button, then a pale page of large portrait photographs, small caps captions and an editorial split block ("The Autumn Reset") that pairs a photo with text on a cream panel.

The system is restrained. Color is two creams, black, and one deep green. There are no rounded buttons, no gradients and no decorative shadows in the measured data. All the richness is photographic, so the interface acts as a frame: type, hairlines and whitespace.

## Colors

`canvas` #fafbf5 (an off-white that the site's variables call off-white) covers the largest area (988 weight). `surface-2` #f0eee0 is the cream used for alternate bands and the editorial text panel (404 weight); it is the site's cream-500 variable. Pure black #000000 is `ink` (2085 characters of text) and also fills the secondary buttons ("DISCOVER", "JOIN OUR MAILING LIST") and the footer areas (167 weight). The single accent is forest green `primary` #013d2d, the fill of the RESERVE button; the measured hover darkens it to `primary-hover` #013225 (rgb(1, 50, 37)). `hairline` #cfcbaf is a warm beige used as a border color (4 uses), matching the variable beige-500. `ink-4` #363638 is the computed body color on the document root and `ink-3` #212529 appears on 152 characters. On the hero, text is #fafbf5 over photography.

The site's root variables also publish ramps for green (from #648264 down to #0b0e0b), cream, beige, neutral grays and interactive success, warning and alert colors, for example alert-500 #9e2e2e and warning-500 #d6ad5b. Those ramps are the site's own tokens; only the values above appear in the tokens in this file. The #0d6efd measured on 18 characters is a Bootstrap default link blue, not a brand color, and is dropped.

## Typography

Three families do the work. Engravers Gothic Bold (700) is the capital-letter face for labels, buttons and small headings; Austin Light Web (300) is a light high-contrast serif for body copy and large display lines; Austin Light Web Italic appears for the italic word in "The *Autumn* Reset". A condensed black face, Swiss 721 Black Condensed, is loaded for 4 characters.

Measured styles: `display` is Engravers Gothic Bold 48px / 48px with 4.8px letter-spacing, uppercase (the hero "GUIDED BY ROSEWOOD: SOUTHEAST ASIA" in the extraction). `heading` is the same face at 18px / 21px with 3.6px tracking, uppercase (used for hotel names such as "ROSEWOOD MIRAMAR BEACH"; the 18px / 3.6px pair covers 574 characters). `button` is 12px, weight 700, 2.4px tracking, uppercase. `body` is Austin Light Web 22px / 22px at weight 300. Austin is also set at 32px (330 characters, section titles such as "Your Next Vacation") and 16px (1084 characters, captions). Tracking on the capital face is measured at 4.8px (48px), 3.6px (18px), 3.2px (16px) and 2.4px (12px). Weights measured by character count: 300 (1775), 700 (875), 400 (172), 100 (30), 900 (4).

## Layout

The page opens with a logo row and a hairline, then a nav row: a GLOBAL region selector at the left, nine serif links (Discover, About, Offers, Hotels, Residences, Dining, Wellness, Events, Shop) centered, and the green RESERVE button at the right. The hero is edge to edge. Beneath it a small "4 — 4" slide counter and a centered title introduce a horizontal carousel of tall portrait images with the center slide fully visible and neighbors cropped. Captions are an uppercase hotel name, a serif location line and an underlined "Discover" link. The editorial block is a two-column split: photo left, cream panel right with centered text and a black button.

Measured gaps are 12px (40 uses), 10px (32), 4px (30), 16px (18), 36px, 24px and 100px. Paddings are 20px (25), 24px (15), 40px, 80px and 16px. The site's spacing variables run 4, 8, 16, 20, 24, 32, 48, 64, 80, 128, 160 and 200px.

## Elevation & Depth

Depth is almost absent. The only box shadow in the extraction is `rgba(0, 0, 0, 0.24) 0px 1px 2px 0px` (2 uses). Dimming overlays exist as variables (`dim-10`, `dim-40`, `dim-60` in black at 10, 40 and 60 percent). Separation otherwise relies on hairlines (1px stroke variable, #cfcbaf) and background change between #fafbf5 and #f0eee0.

## Shapes

The interface is square. The primary and secondary buttons measure `none: 0px` radius, and the site's variable `--rw-radius-none` and `--rw-radius-cap` are both 0px. A handful of measured rounded elements exist: 90px (2 uses), 50% (2 uses) and 28px (1); they are not the primary or secondary buttons, whose radius is 0. Photographs are rectangular.

## Components

**Primary button (RESERVE)**: green #013d2d, text #fafbf5, Engravers Gothic Bold 12px with 2.4px tracking, uppercase, padding 24px, 54px high, radius 0. Hover changes the fill to #013225; the text and border color stay #fafbf5.

**Secondary button**: black #000000 with #fafbf5 text, same type, padding 24px, 54px tall; on the 390px mobile pass the DISCOVER button measures 390px wide, full width.

**Nav links**: Austin Light serif, small; the "GLOBAL" selector is in the capital face with a chevron.

**Link**: uppercase 12px / 2.4px tracked text, black, for phone numbers and utility items; the "Discover" link in captions is an underlined serif link.

**Card**: a portrait image with caption below, no border and no shadow.

The round accessibility button at the right edge of the capture is a third-party widget and is not documented as brand UI.

## Design System Architecture

No public Rosewood design system, brand-guideline page or npm token package was opened for this brief, so there is no official source to cite. The shipped CSS shows the de-facto system: 246 root variables, of which a large set uses the `--rw-` prefix and a semantic naming pattern such as `--rw-color-surface-default-green-500` (#013d2d), `--rw-color-surface-default-off-white` (#fafbf5), `--rw-font-size-sm` through `--rw-font-size-5xl` (16, 18, 22, 24, 32, 48, 80 and 100px for the larger steps), `--rw-spacing-*`, `--rw-stroke-100` to `--rw-stroke-300` (1, 2, 3px), `--rw-icon-xs` to `--rw-icon-xl` (16 to 48px) and `--rw-radius-none`. Utility layers from Tailwind (`--tw-*`), Bootstrap (`--bs-*`) and a lightbox library (`--f-*`) also ship in the same stylesheet.

## Do's and Don'ts

- Do set labels, hotel names and buttons in Engravers Gothic Bold, uppercase.
- Do set body and display lines in Austin Light Web at weight 300.
- Do keep the one green accent for RESERVE and black for secondary actions.
- Do keep every corner square on buttons and cards.
- Do let photographs carry the color; frame them with #fafbf5 and #f0eee0.
- Don't add drop shadows or gradients to cards; the measured shadow is a 1px, 24% black hairline.
- Don't use Bootstrap blue #0d6efd for links.
- Don't use bold serif; Austin is measured at 300 and Engravers Gothic at 700 only.

## Responsive Behavior

A 390px mobile pass was recorded. The mobile display line is Austin Light Web 32px / 32px at weight 300 (`display-mobile`), and the DISCOVER button spans the full 390px width at 54px height with 24px padding. Mobile font-size counts show 16px (859), 22px (618), 18px (554), 12px (214), 32px (74), 24px (47) and 14px (20). Navigation behavior, breakpoints and image crops were not measured.

## Iteration Guide

1. Start from #fafbf5, #f0eee0, black and #013d2d; add #cfcbaf for hairlines.
2. Set caps with Engravers Gothic Bold and 10% tracking, and prose with Austin Light Web 300.
3. Build buttons at 54px height, 24px padding, square corners, 12px / 2.4px type.
4. Use the site's own `--rw-` variable ramps when a tint is needed rather than inventing new values.
5. Gate: `node web/scripts/verify-designs.mjs --slug=rosewood`.
