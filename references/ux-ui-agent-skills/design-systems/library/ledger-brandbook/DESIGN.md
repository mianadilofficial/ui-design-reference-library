---
version: alpha
name: Ledger Brandbook
category: "Architecture & Interiors"
description: 'Ledger Brand Book (brand.ledger.com) measured on its Guidelines page: white canvas with #fbfbfb cards, black text and #0000008c body copy, orange #ff5300 accents, Ledgermono display, Brut Grotesque text, Hmalphamono tags and zero radius.'
colors:
  canvas: '#ffffff'
  page-largest: '#fbfbfb'
  ink: '#000000'
  primary: '#ff5300'
  surface-grey: '#d3d3d3'
  hairline: '#00000033'
  ink-muted: '#0000008c'
  accent-red: '#f04f52'
  accent-pink: '#d4a0ff'
  accent-green: '#6ec85c'
typography:
  display:
    fontFamily: Ledgermono, sans-serif
    fontSize: 102.4px
    fontWeight: 400
    lineHeight: 81.92px
    textTransform: uppercase
  display-mobile:
    fontFamily: Ledgermono, sans-serif
    fontSize: 42.9px
    fontWeight: 400
    lineHeight: 34.32px
    textTransform: uppercase
  heading:
    fontFamily: '"Brut Grotesque Bold", sans-serif'
    fontSize: 47.001px
    fontWeight: 700
    lineHeight: 47.001px
    letterSpacing: '-2px'
  body:
    fontFamily: '"Brut Grotesque Boook", sans-serif'
    fontSize: 18.8004px
    fontWeight: 400
    lineHeight: 22.5605px
    letterSpacing: '-0.5px'
  nav:
    fontFamily: '"Brut Grotesque Boook", sans-serif'
    fontSize: 12.5336px
    fontWeight: 400
    lineHeight: 12.5336px
  link:
    fontFamily: Hmalphamono, sans-serif
    fontSize: 10.9669px
    fontWeight: 500
    lineHeight: 12.0636px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 3.13px
  s3: 3.92px
  s4: 5.01px
  s5: 6.27px
  s6: 10.97px
  s7: 14.1px
  s8: 15.67px
  s9: 25.6px
  s10: 28.2px
components:
  link:
    textColor: '{colors.canvas}'
    typography: '{typography.link}'
    padding: 14.1003px 31.334px
  nav:
    textColor: '{colors.canvas}'
    padding: 0px 31.334px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: '{colors.canvas}'
    typography: '{typography.nav}'
---

## Overview

The Ledger Brand Book (`brand.ledger.com`) is the hardware-wallet company's own guidelines site. Its entry URL is a splash gate: a white screen with a bracketed LEDGER wordmark, a notched "ENTER" button, the notice "This website uses sound" and the headline "FREE FROM COMPROMISE". Because that gate holds almost no content, the real page was re-measured at `https://brand.ledger.com/brand-design/overview`, the Guidelines page, which is on the same site; the name stays "Ledger Brandbook".

The Guidelines page opens with an enormous black "GUIDELINES" title in the Ledger display face, a header nav (Nano, Flex, Stax, About Ledger, Guidelines, HUD Design, Press Kit, Back to City) and a boxed "Menu" panel listing Guidelines, Human Touch, HUD & 3D and Tone of Voice. A heading, "Approach to creative: Techniques and Principals", introduces the overview paragraph: Ledger's brand team designs and adds humanity to creatives, expressing "security, safety, transparency, and a touch of humanity". Five personality traits follow as accordion rows with plus icons: Human, Invitational, Revolutionary, Retrofuturistic and Informative. Four technique cards (Light, The grid, Iconography as language, Emotional technology) stagger left and right down the page, each with a photograph or graphic, a bold title and small gray text. A gigantic LEDGER wordmark and a "Buy a Ledger hardware wallet" call to action close the page.

The look is retro-futuristic, game-like and technical: corner brackets, notched corners, HUD-style labels and tiny monospaced uppercase tags, all in black on near-white.

## Colors

Values are from `web/data/extracted/ledger-brandbook.json`.

- **Canvas `#ffffff`** and **page-largest `#fbfbfb`**: the page and the card surfaces (`#fbfbfb` has area weight 924).
- **Ink `#000000`**: headings and labels (900 characters). The generator's first pick was the translucent `#0000008c`, the body paragraph color (1435 characters), kept as `ink-muted`.
- **Primary `#ff5300`**: orange, declared as `--orange` and used for eight border uses (the plus icons and accent outlines in the capture). The generator's original primary `#ffffff` was the nav link color on a black bar and was not a brand action color, so it was reassigned.
- **Accent red `#f04f52`, pink `#d4a0ff`, green `#6ec85c`**: declared as `--red`, `--pink` and `--green` in the page's root variables.
- **Surface-grey `#d3d3d3`**: a minor background (weight 2).
- **Hairline `#00000033`**: the most-used border color (12 uses); `#0000004d` (3) and `#0000001a` (1) also appear.

The official brand page opened for this file lists no color values (the word "Colour" appears only as a Kit of Parts item), so the numbers here are measurements, not published specifications.

## Typography

Four families, matching the typefaces named on the official page: **Ledgermono** (display), **Brut Grotesque** (Bold and "Boook" faces for headings and body, described on the page as the web font for websites and apps), and **Hmalphamono** (HM Alpha Mono, described as the web font for tags and highlights). The page text states Ledger Mono is "for printing only"; the measured site nevertheless loads a face named Ledgermono at weight 400.

| Token | Size / line-height | Weight | Notes |
|---|---|---|---|
| `display` | 102.4px / 81.92px | 400 | Ledgermono, uppercase, h1 "GUIDELINES" |
| `display-mobile` | 42.9px / 34.32px | 400 | mobile h1 |
| `heading` | 47.001px / 47.001px | 700 | Brut Grotesque Bold, letter-spacing -2px |
| `body` | 18.8004px / 22.5605px | 400 | Brut Grotesque Boook, letter-spacing -0.5px |
| `nav` | 12.5336px / 12.5336px | 400 | Brut Grotesque Boook |
| `link` | 10.9669px / 12.0636px | 500 | Hmalphamono, uppercase |

Character counts: 14.1003px (1436, paragraph text), 10.9669px (455), 18.8004px (344), 25.0672px (112), 47.001px (75), 21.1505px (42). Letter-spacing pairs: 14.1003px with -0.25px, 18.8004px with -0.5px, 25.0672px with -1px, 47.001px with -2px and 21.1505px with -0.5px, so tracking tightens as size grows. Weights 400 (1790), 500 (455), 700 (229).

## Layout

The page is a single long column (5429px high on desktop) with generous empty space. The staggered cards alternate between the left and right halves of the content width, so the vertical rhythm is deliberately uneven. Hairline rules and small uppercase section tags (OVERVIEW, PERSONALITY, TECHNIQUES) separate regions. A progress indicator appears at the upper right of the first view.

Spacing tokens: 1px, 3.13px, 3.92px, 5.01px, 6.27px, 10.97px, 14.1px, 15.67px, 25.6px and 28.2px. Padding: 31.334px (20 uses), 6.26681px (18), 15.667px (8), 28.2006px (8). Gaps: 15.667px (26), 10.9669px (10), 25.6px (4), 31.334px and 125.336px (one each). The nav bar has padding `0px 31.334px` and is 63px high.

## Elevation & Depth

No box shadows were measured. Depth is expressed with fine borders and bracket corners (`#00000033`, `#0000004d`), pale surfaces (`#fbfbfb`) and imagery with dramatic light, which the page itself names as "the primary driver of Ledger's creative direction". Cards have thin outlines and notched corners rather than shadows.

## Shapes

`borderRadii` is empty, so every element computes 0px (`rounded.none: 0px`). Shape is instead built from clipped geometry: corner brackets around the wordmark, a notched upper-right corner on the ENTER button and on the technique cards, as visible in the capture. These are not radii and are not tokenized.

## Components

**Link (`link`)**: Hmalphamono 10.9669px uppercase, white text on a black bar, padding `14.1003px 31.334px`, 38px high (for example "LEDGER.COM").

**Nav (`nav`, `nav-link`)**: white text on black, padding `0px 31.334px`; the hover probe showed link text scrambling (letters briefly replaced by random characters) and opacity moving from 0.6 to 1.

**Accordion row**: a bordered white row with a bold Brut Grotesque title and an orange plus icon, used for the five personality traits.

**Technique card**: pale `#fbfbfb` card with a notched corner, an image, a bold title and small body text.

**Section tag**: a tiny gray-filled uppercase label with corner ticks (OVERVIEW, PERSONALITY, TECHNIQUES).

**Sound toggle**: a small bordered square button at the lower left; the splash notes the site uses sound.

No filled primary button was detected on the measured page, so no `button-primary` token is declared.

## Design System Architecture

Ledger publishes its brand system itself at https://brand.ledger.com/brand-design/overview: guideline pages for Typography, Color, Logo, Taglines and Human Touch; HUD Guidelines, HUD Design, 3D Overview and 3D Assets; and Tone of Voice pages (The Voice, The Tone, Grammar & Mechanics, Inclusive & Accessible, Product Design). A "Kit of Parts" lists HUD, Typography, Colour and Gradients, and asset downloads (Brand Book, Logo, HUDs, Backgrounds, Fonts, Sound, 3D Assets, Press Kit) are linked as Google Drive folders. The guideline pages state the typefaces and four design techniques (Light, The Grid, Iconography as Language, Emotional Technology). They list no color or spacing values, so those come from measurement. The page's CSS declares only four root variables: `--red`, `--pink`, `--green` and `--orange`.

## Do's and Don'ts

Do:
- Use uppercase Ledgermono at display scale for titles.
- Use Brut Grotesque for headings and text and Hmalphamono for tags.
- Keep surfaces white and `#fbfbfb`, text black and `#0000008c`.
- Keep corners square and use clipped, notched shapes.
- Tighten letter-spacing as size grows.

Don't:
- Do not use rounded corners; none are measured.
- Do not add shadows.
- Do not use Ledger Mono for web text on the strength of this file alone; the official page says it is for printing only.
- Do not fill large areas with orange; it appears only as small accents.

## Responsive Behavior

The 390px mobile pass recorded: h1 42.9px / 34.32px (desktop 102.4px), h2 35.087px (desktop 47.001px), body 18.3063px / 21.9675px, and a nav bar on a black background, 61px high, with padding `0px 21.3573px` and the label "ALL ASSETS" at 10.6787px. Column counts and menu behavior at that width are not measured.

## Iteration Guide

1. Set `canvas` `#ffffff`, `ink` `#000000`, `ink-muted` `#0000008c`, accent `#ff5300`.
2. Set page titles in Ledgermono 102.4px uppercase, headings in Brut Grotesque Bold 47.001px with -2px tracking.
3. Set tags in Hmalphamono 10.9669px uppercase weight 500.
4. Keep `rounded.none` and use notched corners for emphasis.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=ledger-brandbook --url=https://brand.ledger.com/brand-design/overview --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=ledger-brandbook`.
