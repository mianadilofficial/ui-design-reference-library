---
version: alpha
name: SXSW
category: "Culture & Events"
description: "SXSW (sxsw.com) is a white #ffffff WordPress site set entirely in Founders Grotesk, Founders Grotesk Text and Founders Grotesk Mono, with black #000000 25px-radius pill CTAs, a #ffc107 SXSW-yellow 'Buy' pill, an orange #f59830 hero gradient, #f4f4f4 8px-radius stat cards and a #0f1012 footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-stat: "#f4f4f4"
  surface-subtle: "#f9f9f9"
  ink-very-dark: "#0f1012"
  ink-medium: "#707070"
  ink-dark: "#202020"
  sxsw-yellow: "#ffc107"
  hero-orange: "#f59830"
  butter: "#fff2cc"
  sxsw-blue: "#19afff"
  lime: "#ccf16d"
  purple: "#b986e7"
  kelly-green: "#4eae78"
  red: "#e0492a"
  true-blue: "#3a79e2"
typography:
  display:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 45.2625px
    fontWeight: 400
    lineHeight: 45.2625px
    letterSpacing: 0.226313px
  display-mobile:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.16px
  heading:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 44.8px
    fontWeight: 400
    lineHeight: 44.8px
    letterSpacing: 0.224px
  body:
    fontFamily: "\"Founders Grotesk Text\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.32px
  nav:
    fontFamily: "\"Founders Grotesk Mono\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.5px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: 0.36px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 25px
  2xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 14px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 10px 14px 11px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.ink-dark}"
  button-secondary:
    backgroundColor: "{colors.sxsw-yellow}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 48px
    height: 34px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 10px 14px 11px
    borderColor: "{colors.ink}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-stat}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 32px
  footer:
    backgroundColor: "{colors.ink-very-dark}"
    textColor: "{colors.ink-medium}"
---

# SXSW

## Overview

SXSW (South by Southwest) is the Austin, Texas conference and festival organisation, founded in 1987, whose yearly March event covers technology, film and TV, music and comedy. The measured site is the official home page at https://sxsw.com/ (title "Homepage - SXSW", `lang="en-US"`), captured at 1280px wide with a scroll height of 7484px and at 390px for the mobile pass.

The page reads as an editorial festival poster sitting on a quiet white system. The top 34px is a butter-yellow (`#fff2cc`) announcement strip in uppercase Founders Grotesk Mono ("MARCH 15–21, 2027 | AUSTIN, TX", "BADGES ON SALE NOW", "LOCK IN BIG SAVINGS"). Below a 65px white header with the black SXSW wordmark, a yellow "Buy" pill and six visible menu links, the 894px hero is an orange (`#f59830`) gradient carrying a huge three-dimensional "SXSW" illustration in lime and purple, two buttons ("Latest Announcements" outlined, "Buy Platinum" filled black) and the centred line "Where business and creative communities converge". The rest of the page alternates white sections with full-bleed media strips: a horizontal "Creating iconic moments since 1987" photo timeline, the four experiences (Innovation, Film & TV, Music, Comedy) as huge stacked words beside a photo, a wavy lime-and-yellow ribbon illustration, giant scrolling track names (Tech & AI, Brand & Marketing, Workplace, Health, Gaming), cartoon mascot illustrations, a "The business value is real" grid of grey statistic cards, a badge pricing section ("What are you waiting for?"), partner logos, a news carousel and a near-black footer.

The voice is short, confident and commercial: "Shape what's next", "Convince your boss", "What are you waiting for?", "Buy Badge". Tiny monospace eyebrow labels ("4 EXPERIENCES. 1 WEEK. AUSTIN, TX.", "SXSW BY THE NUMBERS") introduce each block.

## Colors

The interface itself is almost monochrome; colour arrives through illustration, photography and section tints.

- **Canvas `#ffffff`** — the body background and the largest measured background area (1130 area weight). The capture's dominant on-screen colour is `#fefefe`.
- **Ink `#000000`** — the most-read text colour (2701 chars) and the fill of the primary button. The site declares it as `--wp--preset--color--sxsw-black`.
- **Primary `#000000` / on-primary `#ffffff`** — "Buy Platinum" is a black pill with white text; on hover the fill changes to `#202020` (measured hover: `rgb(32, 32, 32)`).
- **Ink very dark `#0f1012`** (`--wp--preset--color--sxsw-very-dark`) — the second most-read text colour (580 chars) and the footer band fill.
- **Ink dark `#202020`** (`--wp--preset--color--sxsw-dark`) — the yellow button's text and the lowest footer strip.
- **Ink medium `#707070`** (`--wp--preset--color--sxsw-medium`) — footer link text and muted metadata.
- **Surface stat `#f4f4f4`** (`sxsw-very-light`) and **surface subtle `#f9f9f9`** (`sxsw-very-very-light`) — the statistic cards and quiet section fills.
- **SXSW yellow `#ffc107`** (`--wp--preset--color--sxsw-yellow`) — the header "Buy" pill and the "Buy Badge" pills in the pricing and experience blocks.
- **Hero orange `#f59830`** (`--wp--preset--color--orange`) — the home-page hero. The declared `--wp--preset--gradient--hero` runs orange from 0% to 62% before fading into a lighter tone.
- **Butter `#fff2cc`** — the announcement strip; it is also the target of `--sxsw-color-accent-hover`.
- **SXSW blue `#19afff`** — the measured keyboard focus ring (`2px solid rgb(25, 175, 255)` on the "Buy" pill).
- **Program palette** — the stylesheet declares one hero gradient per programme, each built on a named preset: `--wp--preset--gradient--hero-music` on kelly green `#4eae78`, `hero-comedy` on red `#e0492a`, `hero-film-tv` on true blue `#3a79e2`, `hero-edu` on purple `#b986e7`. Lime `#ccf16d` is the declared lime preset that matches the illustrated wordmark.

Pale category tints `#ebfeff`, `#edfff1` and `#fff3e7` were measured behind the Innovation, Film & TV and Music price cards; the Platinum card uses the declared `--wp--preset--gradient--platinum` (253deg, cyan to mint to peach to cream).

## Typography

The whole site runs on the Founders Grotesk superfamily, loaded as web fonts in three cuts:

- **Founders Grotesk Text** (300–700 loaded) carries the reading text: 2286 measured characters, the dominant family. Body copy is 16px/20px weight 400.
- **Founders Grotesk** (400, 500, 700 loaded) carries headlines and buttons: 1148 characters. The largest hero text is 45.2625px/45.2625px weight 400 with +0.226313px tracking; section headings ("Shape what's next") are 44.8px/44.8px with +0.224px. The giant experience and track words are 89.6px with −0.896px tracking, and statistic numbers in the cards are 80px/68px.
- **Founders Grotesk Mono** (400) carries every eyebrow, the announcement strip, the menu and the footer: 14px/17.5px, uppercase.

Buttons are Founders Grotesk 500: 16px/16px with +0.32px tracking for the black and outlined pills, 18px/18px with +0.36px for the yellow "Buy" pill. The weight range is narrow — 400 dominates (3699 chars), with 500 for buttons and 600/700 only in small details. Headlines never go bold; scale, not weight, makes the hierarchy. A Founders Grotesk Condensed family is also declared in `--wp--preset--font-family--founders-grotesk-condensed`, but it was not measured on the home page.

Substitutes if Founders Grotesk is unavailable: a neutral grotesk with similar narrow apertures (e.g. Inter Tight or Neue Haas Grotesk) for display and text, and a monospace such as JetBrains Mono or IBM Plex Mono for the uppercase labels. Keep the mono for labels — it is a defining part of the voice.

## Layout

The desktop page is a single 1280px column with 16px outer padding: the announcement strip content runs from x=16 to x=1264, and `--wp--style--root--padding-left/right` resolve to `--wp--preset--spacing--space-default` (1rem). The stylesheet declares a 792px content size and a 1440px wide size. Hero content is centred (content left 358, right 922). The measured band sequence is: 34px butter strip, 65px white header, 894px orange hero, a 131px eyebrow band, a 329px photo strip, a 798px experiences section, then alternating white sections and media strips, a 3029px stats-and-pricing block laid out in up to four columns, a 374px media strip, a 241px `#0f1012` footer and a 123px `#202020` legal strip.

Spacing is built on a 4px Tailwind-style base (`--spacing: .25rem`). The most frequent gaps are 16px, 8px and 32px; the most frequent paddings are 16px, 8px and 32px. Statistic cards use 32px inner padding. Larger WordPress spacing presets are declared: `space-medium` 2rem, `space-expanded` 3rem, `space-large` 4rem and `space-xl` 5rem. Up to seven card columns were measured in a single row on desktop.

## Elevation & Depth

The page is flat. Only one shadow was measured on rendered elements — `rgba(0, 0, 0, 0.12) 0px 1px 2.5px 0px` (four instances). Depth instead comes from the illustration: the hero wordmark is drawn as an extruded 3D letterform with a purple side face. The stylesheet declares a set of graphic offset shadows — `--wp--preset--shadow--crisp` (`6px 6px 0px rgb(0, 0, 0)`), `sharp` (`6px 6px 0px rgba(0, 0, 0, 0.2)`), `outlined`, `natural` and `deep` (`12px 12px 50px rgba(0, 0, 0, 0.4)`) — which match the poster-like, hard-shadow attitude of the artwork, though none was measured on a home-page element. Cards separate from the page by tint (`#f4f4f4` on white), not by elevation.

## Shapes

Measured radii: 8px and 4px (19 elements each), 12px (12), pills at 9999px / 999px / computed 3.35544e+07px, 16px (6), 25px (2) and one 32px top-only radius (`32px 32px 0px 0px`). In practice:

- **25px** — the 48px-tall primary and outlined buttons, which read as full pills at that height.
- **9999px** — the yellow "Buy" pills, the "Become a Partner" button and small tags.
- **8px** — statistic and promo cards.
- **12px / 16px** — larger content panels and pricing cards.
- **4px** — small chips and media corners.

Photography in the timeline strip is shown in rectangles; the hero art and mascots are free-form illustrations with no container.

## Components

**Primary button** — black `#000000` fill, white text, Founders Grotesk 16px/500 with +0.32px tracking, 25px radius, `10px 14px 11px` padding, 48px tall ("Buy Platinum", 274px wide in the hero). Hover changes the fill to `#202020`.

**Outlined button** — transparent fill, `1px solid #000000` border, black text, same size and type as the primary ("Latest Announcements"). On hover the border colour changes to `#707070` (measured `rgb(112, 112, 112)`).

**Yellow buy pill** — `#ffc107` fill, `#202020` text, Founders Grotesk 18px/500, fully rounded, `8px 48px` padding, 34px tall. A smaller variant ("Buy Badge", 16px/500, `0px 14px` padding, 32px tall) appears next to each experience. Keyboard focus draws a `2px solid` `#19afff` outline.

**Partner button** — black pill, 16px/500, `18px 20px` padding, 52px tall ("Become a Partner").

**Navigation** — a 99px header (34px strip + 65px bar). Links are Founders Grotesk Mono 14px uppercase in black; the strip link "LOCK IN BIG SAVINGS" is underlined and loses its underline on hover, while "Login" gains an underline on hover. Six header links were visible on desktop plus a submenu toggle.

**Stat card** — `#f4f4f4` fill, 8px radius, 32px padding, a mono uppercase label and an 80px/68px Founders Grotesk number ("1,732", "76", "67", "500K+").

**Pricing cards** — the Platinum card on the declared pastel platinum gradient, three programme cards on pale tints, each with a price, short description and a yellow "Buy" pill, and a lanyard badge illustration on the right.

**Footer** — `#0f1012` band with a large white SXSW wordmark, uppercase mono column headings (COMPANY, SXSW PROPERTIES, RESOURCES) and links in `#707070` / white, then a `#202020` legal strip.

## Design System Architecture

No public SXSW design system or brand guideline site exists. The pages opened — https://www.sxsw.com/about/, https://www.sxsw.com/press/, https://sxsw.com/press-center/ and https://www.sxsw.com/trademark-guidelines/ — publish no colours or typefaces; the trademark page says the SXSW marks "must be displayed exactly as written" and that detailed Logo Guidelines are supplied only to licensees.

The de-facto system is the WordPress block theme's `theme.json`, visible in the shipped root variables. Colours are named presets (`--wp--preset--color--sxsw-black`, `sxsw-very-dark`, `sxsw-dark`, `sxsw-medium`, `sxsw-medium-light`, `sxsw-light`, `sxsw-very-light`, `sxsw-very-very-light`, `sxsw-white`, `sxsw-yellow`, `sxsw-blue`, plus festival hues orange, butter, lime, purple, kelly-green, red, true-blue, peach, pink, brown). Type is four font-family presets for the Founders Grotesk family and fluid heading sizes declared with `clamp()` (e.g. `heading-1`: 40px at 393px rising to 80px). Breakpoints are declared as custom properties (`sm` 393px, `md` 834px, `lg` 1512px, `xl` 1600px, `xxl` 1800px). A Tailwind v4 layer adds `--spacing: .25rem`, radius steps (`--radius-sm` .25rem to `--radius-2xl` 1rem) and easing (`cubic-bezier(.4, 0, .2, 1)`). Each programme has its own hero gradient preset (`hero`, `hero-music`, `hero-comedy`, `hero-film-tv`, `hero-edu`, `hero-platinum`, `hero-night`), so a section can be re-themed by swapping a single preset.

## Do's and Don'ts

**Do**
- Keep the chrome black and white and let illustration, photography and the programme hue carry colour.
- Use Founders Grotesk Mono uppercase at 14px for every eyebrow, nav item and footer link.
- Set headlines in Founders Grotesk 400 and build hierarchy with size (45–90px), not weight.
- Use the black 48px pill for the main action and the `#ffc107` yellow pill for "Buy".
- Put statistics in `#f4f4f4` 8px-radius cards with oversized numbers.
- Re-theme a programme page by swapping its hero gradient preset (orange, kelly green, red, true blue, purple).

**Don't**
- Don't use bold headlines or heavy drop shadows on UI elements.
- Don't introduce a second typeface family outside Founders Grotesk.
- Don't recolour the primary button — black is the action colour; yellow is reserved for buying.
- Don't alter or redraw the SXSW logo; the trademark guidelines require it exactly as supplied.
- Don't treat the Osano cookie-banner variables (`--osano-*`) as brand colours.

## Responsive Behavior

Measured at 390px wide:

- The hero line drops from 45.2625px to 32px/32px (+0.16px tracking); the experience headings measured 40px/34px.
- The header became 90px tall with three visible header links and a "Menu" toggle (desktop: six links and a submenu toggle).
- Content runs from x=16 to x=374, keeping the 16px gutter.
- The primary button kept its desktop spec (16px/500, 25px radius, 48px tall, `10px 14px 11px` padding).
- Body text stayed 16px/20px.
- The hero band is 879px tall on mobile.
- The mobile capture shows the experiences (Innovation, Film & TV, Music, Comedy) each with its own photo and "Dive in" / "Buy Badge" buttons, and the statistic cards in a single column.

The stylesheet declares breakpoints at 393px, 834px, 1512px, 1600px and 1800px and fluid `clamp()` heading sizes; behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. Start from white `#ffffff`, black `#000000` text and the three Founders Grotesk cuts.
2. Add the butter `#fff2cc` mono announcement strip and a white header with the wordmark, mono links and a yellow `#ffc107` "Buy" pill.
3. Build the hero on the orange gradient (`#f59830` to 62%), centre a 45px Founders Grotesk 400 line, and pair a 1px-black outlined pill with a black filled pill, both 48px tall with 25px radius.
4. Introduce sections with a 14px mono uppercase eyebrow and a 44.8px heading; use 89.6px words with −0.896px tracking for lists of programmes or tracks.
5. Put numbers in `#f4f4f4` cards with 8px radius and 32px padding.
6. Close with the `#0f1012` footer, mono column heads and `#707070` links, over a `#202020` legal strip.
7. Check: no bold headlines, no UI shadows, focus ring `#19afff`, hover darkens black to `#202020`.
