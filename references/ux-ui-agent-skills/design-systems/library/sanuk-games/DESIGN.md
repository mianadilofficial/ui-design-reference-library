---
version: alpha
name: Sanuk Games
category: "Thai Brands"
description: "Indie game studio site at sanukgames.com. White canvas with #767676 Source Sans Pro 16px text, deep red #ce1a1a links and hover, Raleway navigation over an illustrated dark header, a #1c1c1c footer, and square corners throughout with no shadows."
colors:
  canvas: "#ffffff"
  ink: "#767676"
  primary: "#ce1a1a"
  surface-2: "#252525"
  surface-3: "#1c1c1c"
  ink-2: "#666666"
  ink-5: "#c5c5c5"
typography:
  display:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  subheading:
    fontFamily: Raleway, sans-serif
    fontSize: 16px
    fontWeight: 600
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 14px
  s2: 15px
  s3: 20px
  s4: 30px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.canvas}"
    padding: 20px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink-2}"
    padding: 15px 0px
---

# Sanuk Games

## Overview
The measured page is http://www.sanukgames.com/, titled "Sanuk Games – We mean fun!", the home of a veteran indie game studio. The page is 1280px wide and 2630px tall and very short in vocabulary: a dark game-art header band, a single intro sentence, a Discord invitation graphic and a vertical stack of embedded media. The header band is a cropped illustration of an industrial scene (green girders, a red railing, a stack of wooden crates and a hexagonal up-arrow sign) with the round orange-and-red "S" emblem and the two-line logotype "SANUK GAMES" at the top left. Four white navigation links, Home, Game legacy, Careers and Contact, are right-aligned over the art. Under the band a narrow centered column carries the sentence "Sanuk Games is a veteran indie game studio. We develop arcade games on consoles and PC.", a "JOIN US ON DISCORD" badge in Discord's own blue-violet, then a YouTube embed of the "Jump Man Announcement Trailer - PlayStation 5/4, Xbox" and four further blank embed frames that had not rendered at capture time. The footer is a thin near-black bar reading "© Sanuk Games. All rights reserved." The tone is a plain studio page where the game artwork supplies all personality; the interface itself is almost unstyled.

## Colors
The measured brand accent is a deep red, `#ce1a1a`, which colors all links and the hover state of the white navigation links (measured: Home, Game legacy, Careers and Contact change from `rgb(255, 255, 255)` to `rgb(206, 26, 26)` on hover). Text is a mid grey `#767676` on the white canvas `#ffffff`; the section label "FOLLOW US" uses `#c5c5c5` on a dark surface; footer text is `#666666` on `#1c1c1c`; `#252525` is another dark surface measured in the extraction. The only border color measured is `#767676`, on five elements. The site is a WordPress build and its root variables list the WordPress preset palette (vivid red `#cf2e2e`, pale pink, luminous orange and so on). Those are theme defaults that the page does not use as brand UI, so they are not tokenised. The Discord badge's blue-violet is third-party artwork and is also not tokenised.

## Typography
Source Sans Pro 400 is the body face: 16px on a 24px line height, in `#767676`, and also the face of every link. Raleway (500 and 600) is the navigation and heading face: header links are Raleway 500 16px on 24px, white, with 20px of vertical padding on the header, and the section label "FOLLOW US" is Raleway 600 16px uppercase in `#c5c5c5`. FontAwesome is loaded for icons. The whole page measures a single font size, 16px (205 characters), so hierarchy comes from face, weight, case and color rather than from scale. The logotype in the header is an image, not text. The WordPress theme declares preset sizes of 16px (normal) and 42px (huge); only 16px is used on the measured page.

## Layout
The content column is narrow and centered in the capture, with about 300px of empty margin at the left of a 960px-wide capture, and stacked media blocks of equal width and height one beneath another with about 10px gaps. The header band is 140px tall with 20px vertical padding on the nav and the art continues behind it. Spacing values measured: 14px, 15px, 20px and 30px. The WordPress theme also declares spacing presets from 0.44rem to 5.06rem, which supply the unmeasured vertical rhythm. The footer is 65px tall with 15px vertical padding and a 35px line height.

## Imagery and Voice
The only photographic-quality content is game art. The header illustration is flat-shaded, saturated and cartoon-like, with teal and green steel, red and brown wooden crates and a glowing orange-and-yellow hexagon sign. The embedded trailer thumbnail shows the title "JUMP MAN" in pink and yellow block letters flanked by two characters (a cat-eared astronaut and a helmeted red-suited figure) in front of a moon and Earth, with platform logos for PlayStation 5, PlayStation 4 and Xbox Series X|S and the Sanuk Games logo. Colors in the artwork are far more saturated than the interface, which stays white, grey and red. Copy is a single plain sentence and the page title adds the slogan "We mean fun!"; navigation labels are two words at most (Home, Game legacy, Careers, Contact). The community call to action is a ready-made Discord badge rather than a styled button, and the "FOLLOW US" label in the footer area is the only uppercase heading.

## Elevation & Depth
No box shadows or border radii were measured on the page (`boxShadows` and `borderRadii` are empty). The WordPress shadow presets (natural, deep, sharp, outlined, crisp) are declared on the root but no element on the measured page uses one. Depth comes only from the illustrated header and the YouTube embed.

## Shapes
`desktop.frequencies.borderRadii` is empty, so every rendered element computes a 0px radius. Tokens declare `rounded.none: 0px`. Media embeds and the Discord badge are rectangular; the round shape in the page is part of the logo image.

## Components
**Navigation link:** Raleway 500 16px white on the dark header, turning `#ce1a1a` on hover, no underline and no fill change. **Body link:** Source Sans Pro 16px in `#ce1a1a`. **Intro paragraph:** `#767676` Source Sans Pro 16px, 24px line height. **Section label:** Raleway 600 16px uppercase `#c5c5c5` with 24px bottom padding. **Media embed:** full-column YouTube iframe with a play button. **Footer:** `#1c1c1c` bar with `#666666` centered copyright. No buttons, inputs or cards were detected by the extractor.

## Design System Architecture
No public design system, brand guideline or press kit was opened; `_research` records `none: true`. The de-facto system is a stock WordPress theme: root variables are `--wp--preset--*` for colors, gradients, font sizes, spacing and shadows, with the page body, header and footer styled by theme CSS. Fonts are Source Sans Pro for text and Raleway for headings and navigation, plus FontAwesome. Source: http://www.sanukgames.com/ measured into web/data/extracted/sanuk-games.json.

## Do's and Don'ts
- Do use `#ce1a1a` for links and hover, and white for nav text on the dark header.
- Do let the game illustration carry the visual identity.
- Do keep body copy at 16px Source Sans Pro on a 24px line height.
- Do keep corners square; no radius was measured.
- Don't use the WordPress preset palette (`#cf2e2e`, `#ff6900`, `#fcb900`) as brand colors.
- Don't add shadows; the theme's shadow presets are unused.
- Don't set headings in Source Sans Pro; Raleway is used for labels and navigation.

## Responsive Behavior
The 390px mobile pass recorded the intro paragraph at 16px on a 24px line (72px tall, wrapping to three lines) and a header 183px tall with a `#000000` background and 20px vertical padding. Menu toggle behaviour, column counts and the embed sizing on mobile are not measured.

## Iteration Guide
1. Canvas `#ffffff`, text `#767676`, accent `#ce1a1a`, dark surfaces `#1c1c1c` and `#252525`.
2. Source Sans Pro 16px/24px body and Raleway 500 and 600 for navigation and labels.
3. A tall illustrated header with four right-aligned white links that turn red on hover.
4. One narrow centered column: intro sentence, community badge, trailer embed.
5. A 65px dark footer with a `#666666` copyright.
6. Run `node web/scripts/verify-designs.mjs --slug=sanuk-games`.
