---
version: alpha
name: SEGA
category: "Gaming"
description: "SEGA home page: black #000000 and navy #0d1126 bands with electric blue #0057ff primary, Inter Tight 800 uppercase headings at 108px, Poppins 16px body, 48px-radius tag buttons, skewed clip-path action buttons, 8px card radius and large soft shadows."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#0057ff"
  on-primary: "#f4f6f9"
  surface-2: "#e1eaff"
  surface-3: "#002366"
  ink-2: "#0d1126"
  ink-4: "#c3c5d5"
typography:
  display:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 108px
    fontWeight: 800
    lineHeight: 81px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 36px
    fontWeight: 800
    lineHeight: 36px
    textTransform: uppercase
  heading:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 40px
    fontWeight: 800
    lineHeight: 40px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 50px
    fontWeight: 800
    lineHeight: 50px
    textTransform: uppercase
  body:
    fontFamily: Poppins, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 12px
    fontWeight: 800
    lineHeight: 18px
    textTransform: uppercase
  link:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 16px
    fontWeight: 800
    lineHeight: 24px
    textTransform: uppercase
rounded:
  xs: 8px
  sm: 12px
  md: 40px
  lg: 48px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 34px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 16px 24px
  nav:
    backgroundColor: "{colors.ink-2}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface-3}"
    typography: "{typography.body}"
    padding: 0px 0px 0px 8px
    height: 48px
    clipPath: polygon(0% 0%, 100% 0px, calc(100% - 15px) 100%, 0% 100%)
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 16px
  footer:
    backgroundColor: "{colors.ink-2}"
    textColor: "{colors.ink}"
---

# SEGA

## Overview
The measured page is sega.com's home page (title "Homepage | SEGA"), 1280px wide and 9821px tall. It is a dark, saturated, game-publisher portal built on a deep navy and electric blue palette. A 64px navy (#0d1126) header carries the SEGA logotype at left and, at right, a hamburger icon, a skewed electric-blue "REGISTER" tab and a user icon. A split hero follows: on the left a near-black panel with a title animation in progress, on the right a photographic panel for Virtua Fighter ("VIRTUA FIGHTER CROSSROADS / WHERE FIGHT LIVES") with a skewed blue "LEARN MORE" button and a skewed outlined "STAY CONNECTED" button. Below is the "OUR WORLDS" band on #002366 with a huge outlined blue title and a "SEE ALL WORLDS" underlined link; two tall key-art tiles (Sonic the Hedgehog, Like a Dragon & Yakuza) sit side by side with white all-caps titles over a dark bottom gradient and round carousel arrows. Next is a bright #0057ff band, "NEW GAME RELEASES", holding rounded cards on a darker frame, including Football Manager 26. The footer starts with "SIGN UP FOR SEGA NEWS". The voice is energetic, all-caps and franchise-led.

Art direction and microcopy: key art is full-bleed and character-led (Sonic with colored gems, the two Yakuza leads in aloha shirts), cropped so faces and figures fill the tile. The hero uses a motion title treatment with large ghosted lettering ("VIRTU..." in dark red-blue behind the buttons) over atmospheric photography. Section titles are franchise-neutral and imperative or declarative ("OUR WORLDS", "NEW GAME RELEASES", "THE LATEST NEWS", "SIGN UP FOR SEGA NEWS"); links are short verbs with an arrow glyph ("SEE ALL WORLDS", "SEE ALL GAMES"). Density is high on the lower bands, with carousels of cards, and low in the hero where one message dominates.

## Colors
- Canvas: #000000 (largest background area, 5120), then #e1eaff (4953), #002366 (3562), #0d1126 (2753), #ffffff (1814) and #0057ff (182 weighted area, much more visible as full bands).
- Primary: #0057ff, SEGA electric blue (buttons, tags, the New Releases band). On-primary: #f4f6f9.
- Ink: #ffffff on dark (2980 characters), #0d1126 on light (283), #c3c5d5 muted (102), #e1eaff pale blue text (44).
- Surface/accent tones: #e1eaff pale blue, #002366 deep navy, #0d1126 header and footer navy.
The root variable list includes dozens of per-franchise tokens, such as `--color-sthbl-success-900`, `--color-fm26-quinary-800: #560066`, `--color-sthv2-quaternary-300: #ffe666` and `--color-ladtm-success-100`, which belong to individual game sites and are not part of the corporate palette.

## Typography
Two families: Inter Tight (variable, weights 100-900) for headings, labels and nav, and Poppins (400, 800) for body. Both are served as webfonts with `sans-serif` fallback; no proprietary face is involved.
- Display: Inter Tight 800, 108px / 81px, uppercase ("OUR WORLDS"); mobile pass: 36px / 36px, uppercase.
- Subheading: Inter Tight 800, 50px / 50px, uppercase. Heading: 800, 40px / 40px, uppercase ("THE LATEST NEWS").
- Body: Poppins 400, 16px / 24px. Link: Inter Tight 800, 16px / 24px, uppercase. Button: Inter Tight 800, 12px / 18px, uppercase.
Character counts: Poppins 2700, Inter Tight 1009; sizes 16px (2306), 20px (442), 12px (297), 40px (208), 50px (128).
Headline lines are tightly leaded (line height below or equal to font size), which gives the heavy, compressed look.

## Layout
Content bands alternate by background color rather than by container: black/navy for worlds and news, electric blue for new releases, pale #e1eaff for lighter sections. Key-art tiles run edge to edge in a two-up row. Cards in the New Releases band sit on a darker frame with 16px padding. Spacing values: 1px, 4px, 8px, 10px, 12px, 16px, 24px, 30px, 32px and 40px. The footer block is 1253px tall and holds a newsletter sign-up with a text input 48px high with a clipped, slanted right edge. Diagonal cuts appear on the Register tab and the two hero buttons.

## Elevation & Depth
Use the large soft shadow only for cards that float over a band, and the small offset shadow for compact controls. Everything else is flat, with contrast supplied by the alternation of black, navy, pale-blue and electric-blue fields.
Two shadows recorded: `rgba(0,0,0,0.2) 0 16px 48px 0` (17 uses, large soft shadow for floating cards) and `rgba(0,0,0,0.15) -2px 2px 6px 0` (8 uses, small offset). Additional depth comes from dark bottom gradients on key art and from the huge outlined titles that sit behind the content layer.

## Shapes
Radii: 8px (62), 48px (25), 9999px (18), 12px (17), 50% (6), plus the asymmetric `0 40px 40px 0` and `40px 0 0 40px` pairs. Cards use 8px, tags and pills use 48px or 9999px, and carousel arrows are circles. Buttons and the Register tab get a parallelogram silhouette via clip-path rather than via radius; the text input uses `polygon(0% 0%, 100% 0px, calc(100% - 15px) 100%, 0% 100%)`.

## Components
- **Tag button (button-primary token)**: the extractor's detected primary is the genre chip, e.g. "TURN-BASED STRATEGY": #0057ff fill, #f4f6f9 text, Inter Tight 12px 800 uppercase, 48px radius, 8px 16px padding, 34px high. An outlined sibling ("ACTION + ADVENTURE") has a 1px solid #ffffff border and is 36px high.
- **Hero buttons**: skewed "LEARN MORE" (blue) and "STAY CONNECTED" (outlined). Hover recorded on a "LEARN MORE" link changes the text color from white to black.
- **Nav**: #0d1126, white 16px 800 uppercase links, 64px high.
- **Card**: #0057ff background, 8px radius, 16px padding.
- **Text input**: white background, #002366 text, 48px high, 8px left padding, slanted right edge.
- **Footer**: #0d1126 with a 40px 800 uppercase sign-up heading.

## Design System Architecture
SEGA's page is assembled from a multi-brand token system: the root variables are namespaced per franchise or site (prefixes such as `sega`, `sth`, `sthv2`, `sthbl`, `fm26`, `fm27`, `ladtm`, `smtv`, `per4r`, `per6`, `vf`, `ct`, `aiw`) with a shared scale of 0 to 900 and semantic names (primary, secondary, tertiary, quaternary, quinary, success, warning, danger, info, light). The corporate site uses the `sega` set (for example `--color-sega-success-600: #3f8d5a`, `--color-sega-warning-100: #f8ecd3`). The page was scanned for brand, press, design-system and guideline links and none were found; no public system documentation was opened.

## Do's and Don'ts
These rules reflect what the measurement and capture show; hover and focus beyond the one recorded sample are not measured.
- Do use heavy uppercase Inter Tight for every heading and label.
- Do alternate full-bleed navy, black and electric-blue bands.
- Do use slanted clip-path cuts for primary action shapes.
- Don't use franchise-specific colors (e.g. #560066, #ffe666) in corporate UI.
- Don't round card corners beyond 8px; reserve 48px for tags and pills.
- Don't treat the cookie gear at the bottom-left of the capture as brand UI.

## Responsive Behavior
Scope: one desktop pass at 1280px and one mobile pass at 390px were measured; no tablet widths were recorded.
At 390px the first measured heading (a dated news headline, "NOV. 12, 2026") is 36px with a 36px line height, uppercase 800. Other behavior (menu collapse, tile stacking) was not measured.

## Iteration Guide
1. Tokens: canvas #000000, ink #ffffff, primary #0057ff, navy #0d1126, deep navy #002366, pale #e1eaff.
2. Type: Inter Tight 800 uppercase headings, Poppins 400 body.
3. Build bands, then two-up key-art tiles with gradient and white caps titles.
4. Add skewed action buttons and the slanted newsletter input.
5. Run `node web/scripts/verify-designs.mjs --slug=sega`.
Not measured: dark/light mode switching, motion, nav menu overlay.
