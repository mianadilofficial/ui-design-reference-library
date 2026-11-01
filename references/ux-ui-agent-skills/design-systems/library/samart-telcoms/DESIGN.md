---
version: alpha
name: Samart Telcoms
category: "Thai Brands"
description: "Samart Telcoms (samtel.com), Thai ICT and telecom group: Kanit at weights 300 and 500, orange #f05a22 pill buttons (25px radius, 47px high, 2px tracking), blue #1b67cc headings, white cards with a 5px radius on a #dedede page, dark #1e252d footer and #1c1918 top bar."
colors:
  canvas: "#ffffff"
  ink: "#1c1c1c"
  primary: "#f05a22"
  on-primary: "#ffffff"
  surface: "#dedede"
  surface-3: "#1e252d"
  ink-4: "#ffffffcc"
  ink-5: "#717171"
  nav-bg: "#1c1918"
typography:
  display:
    fontFamily: kanit, sans-serif
    fontSize: 38.4px
    fontWeight: 500
    lineHeight: 49.92px
  display-mobile:
    fontFamily: kanit, sans-serif
    fontSize: 25.2px
    fontWeight: 500
    lineHeight: 37.8px
  subheading:
    fontFamily: kanit, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 29.92px
  body:
    fontFamily: kanit, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25.6px
  button:
    fontFamily: kanit, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 27.2px
    letterSpacing: 2px
  nav:
    fontFamily: kanit, sans-serif
    fontSize: 12px
    fontWeight: 300
    lineHeight: 19.2px
rounded:
  xs: 5px
  sm: 10px
  md: 25px
  lg: 30px
  xl: 50px
  2xl: 99px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 10px
  s4: 15px
  s5: 16px
  s6: 18px
  s7: 20px
  s8: 30px
  s9: 32px
  s10: 38px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 10px 40px
    height: 47px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 10px 40px
    height: 47px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 0px 0px 0px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
---

# Samart Telcoms

## Overview

The measured page is https://www.samtel.com/ (title "SAMART TELCOMS"), the Thai-language home of Samart Telcoms PCL, a Thai telecommunications and ICT group. Its first load in the captured session carried a black memorial pop-up with a portrait, a dark scrim and a closing bar; the extraction was re-run from the Thai batch file with overlays hidden, and the figures below come from that second measurement. The page is a corporate portal: a dark utility strip with small links (privacy policy, partners, subsidiaries, sitemap) and a TH / EN switch; a blue-gradient hero slider with the "SAMART TELCOMS LEADING TO SUSTAINABLE FUTURE" artwork and arrow controls; a floating white panel titled "Latest News" with three news cards and an orange "View All" pill; a dark "Full Range of ICT Solution" carousel with an image, a title ("Smart ICT Solutions"), copy and a "Read more" pill; two shortcut cards ("Shareholders Information", "Smart ICT References"); and a dark footer with "SUBSIDIARIES" and "OUR STANDARDS" columns (ISO and CMMI badges).

The tone is formal and corporate, bilingual: Thai headlines with English section titles in blue and a small orange Thai subtitle under a short rule ("ข่าวและกิจกรรม" under "Latest News"). Orange is the single action color.

## Colors

The page background is `surface` #dedede (4449 weight) with white `canvas` #ffffff panels (4128) floating on it; the extraction also lists #f2f2f2 and #f7f7f7 as lighter section fills. Dark areas are `surface-3` #1e252d (1694, the footer fill), the deep indigo-navy #211f2e (787, the ICT carousel band) and `nav-bg` #1c1918 (136, the top utility bar). The action color is orange `primary` #f05a22, the fill of every pill button and the color of "Read more" text links (57 characters). Headings and card links use blue #1b67cc (55 characters; "Latest News", "Shareholders Information"), and a darker navy #17337c (45 characters) appears on text. Body text is `ink` #1c1c1c on white (307 characters) and #1e252d (256); secondary text is `ink-5` #717171 (121 characters) and #808080 (2); white is the dominant text color on dark (5021 characters) and `ink-4` #ffffffcc (white at 80 percent opacity, 147 characters) is the soft white used for secondary text and 1px borders on dark areas. The memorial pop-up and its black #000000cc scrim are not brand tokens.

## Typography

One family: Kanit (written "kanit" in the stylesheet, loaded at 300 and 400, with 500 in use), a Thai-and-Latin sans. Measured roles: `display` Kanit 500, 38.4px / 49.92px in blue (section titles such as "Latest News"); `subheading` Kanit 500, 22px / 29.92px (news card titles); `body` Kanit 300, 16px / 25.6px; `button` Kanit 500, 16px / 27.2px with 2px letter-spacing; `nav` Kanit 300, 12px / 19.2px (utility links). Size counts: 16px (4661 characters), 22px (495), 18px (206), 19.2px (179), 12px (131), 36px (104), 15px (95), 32px (95). Weights: 300 (4636 characters), 500 (1101), 400 (192), 700 (76), 600 (27). Light 300 body with 500 for titles and buttons is the system. On the 390px mobile pass the title style is Kanit 500 at 25.2px / 37.8px.

## Layout

A centered white container sits over the gray page and overlaps the lower edge of the hero. Inside it, the news list is three equal columns, each with a landscape photo, a two-to-four-line Thai title, a two-line excerpt in gray and a "Read more" link with a chevron. The ICT band is full width in dark indigo with the title centered over a thin blue rule, then an image at left and text at right with pagination dots. The shortcut cards are a two-column row inside a light-gray band. The footer is two columns of links on a dark fill, over a black copyright strip ("Copyright © 2023 – Samart Telcoms PCL"). Paddings measured: 10px (55 uses), 15px (32), 20px (26), 5px (20), 40px (18), 50px (10), 43.4688px (5).

## Elevation & Depth

White cards and panels float with soft, wide shadows: `rgba(33, 37, 71, 0.1) 0px 6px 30px 7px` (2 uses), a navy-tinted diffuse shadow, and `rgba(0, 0, 0, 0.5) 0px 4px 15px 0px` (1 use, a stronger floating layer). The most frequent measured shadow, `rgba(0, 0, 0, 0.44) 0px 0px 0px 0px` (12 uses), is a zero-size value and draws nothing. Dark sections give depth through photographic background images with overlay.

## Shapes

Buttons are pills. Measured radii: 50px (9 uses), 5px (6 uses, `xs`, cards and top corners as `5px 5px 0px 0px`), 25px (5 uses, `md`, the Read more pill), 99px (4 uses), 10px (2), 800px (2, a full pill), 30px (1, the View All pill) and 6px. Images and cards have small 5px corners; buttons are fully rounded.

## Components

**Primary button**: orange #f05a22, white Kanit 500 16px with 2px letter-spacing, `10px 40px` padding, 47px high, 25px radius ("Read more"); the "View All" variant has a 30px radius and a `rgba(0, 0, 0, 0.15)` zero-size shadow value, and a fully rounded 800px variant is also measured.

**Text link**: orange "Read more" with a small chevron.

**Card**: white, 5px radius, news photo on top, 22px / 500 title, 16px gray excerpt; the shortcut cards add a blue 500 title, a small Thai caption and a centered orange pill.

**Nav (utility strip)**: #1c1918 fill, white Kanit 300 12px links separated by vertical bars.

**Section title**: blue Kanit 500 38.4px with an orange Thai subtitle between two short orange rules.

**Footer**: #1e252d with white text; column heads in capitals with an orange underline.

The two image cards in the shortcut row show a dark photographic header over a white body, so the card face alternates between imagery and plain white. Their captions are bilingual: the English title in blue with a Thai descriptor beneath in the darker ink.

## Design System Architecture

No public Samart Telcoms design system, brand-guideline page or token package was opened for this brief, so there is no official source to cite. The shipped CSS is a WordPress theme with 162 root variables, mostly `--wp--preset--*` and `--wp-admin-theme-color-*` platform defaults, a Swiper carousel set (`--swiper-theme-color`, `--swiper-navigation-size`) and theme variables prefixed `--s-` (for example `--s-heading`, `--s-heading-weight`, `--s-body-line-height`). The brand's actual values are the repeated literals above: orange #f05a22, blue #1b67cc, navy #17337c and the dark fills.

## Do's and Don'ts

- Do use orange #f05a22 with white Kanit 500 for every button and "Read more" link.
- Do use blue #1b67cc for section titles and card links.
- Do float white cards (5px radius) on #dedede with soft navy-tinted shadows.
- Do use 300 for body copy, 500 for titles, 2px tracking on buttons.
- Do keep dark #1e252d and #211f2e bands for ICT and footer sections.
- Don't use WordPress preset colors for brand UI.
- Don't document the memorial overlay or its scrim as brand UI.
- Don't use square buttons; pills are the measured shape.

## Responsive Behavior

A 390px mobile pass was recorded. The title style measured Kanit 500 at 25.2px / 37.8px (against 38.4px on desktop). Mobile size counts include 16px (4643 characters), 20px (495), 18px (238), 10.8px (147), 25.2px (104) and 28px (95). Column counts, navigation behavior and breakpoints were not measured.

## Iteration Guide

1. Start with #dedede page, white panels, #1c1c1c text, #f05a22 actions, #1b67cc titles.
2. Use Kanit 300 16px / 25.6px for body, 500 38.4px / 49.92px for section titles.
3. Build pills at 47px high, `10px 40px` padding, 25px radius, 2px letter-spacing.
4. Use `rgba(33, 37, 71, 0.1) 0px 6px 30px 7px` for floating cards.
5. Gate: `node web/scripts/verify-designs.mjs --slug=samart-telcoms`.
