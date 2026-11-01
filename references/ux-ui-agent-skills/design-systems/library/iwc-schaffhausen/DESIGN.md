---
version: alpha
name: IWC Schaffhausen
category: "Luxury"
description: "Swiss luxury watchmaker's worldwide home page (iwc.com/ww-en): pure white canvas #ffffff, black #000000 ink, a single HelveticaNeue family at 400 and 500, 32px display with 0.32px tracking, 12px uppercase buttons with 0.6px tracking, a round 73px black PLAY control, and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-muted: "#6f6f6f"
typography:
  display:
    fontFamily: HelveticaNeue, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 36.8px
    letterSpacing: 0.32px
  display-mobile:
    fontFamily: HelveticaNeue, Helvetica, Arial, sans-serif
    fontSize: 28.0619px
    fontWeight: 500
    lineHeight: 32.2712px
    letterSpacing: 0.280619px
  subheading:
    fontFamily: HelveticaNeue, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 17.6px
    letterSpacing: 0.16px
  body:
    fontFamily: HelveticaNeue, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.9px
    letterSpacing: 0.14px
  button:
    fontFamily: HelveticaNeue, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: 0.6px
    textTransform: uppercase
rounded:
  pill: 9999px
spacing:
  s1: 6px
  s2: 13px
  s3: 14px
  s4: 20px
  s5: 27px
  s6: 42px
  s7: 58px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 13px
    height: 73px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 13px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 0px 13px
    height: 33px
---

## Overview

IWC Schaffhausen's worldwide English home page (the extractor landed on `https://www.iwc.com/ww-en`) is a restrained, almost editorial piece of web design. The measured page is 1,280px wide and 6,296px tall. Its background is white (`#ffffff`) and its text is black (`#000000`); a single grey (`#6f6f6f`) is used for secondary and hover states. There is one type family, HelveticaNeue, loaded in only two weights (400 and 500), so hierarchy is made by size, tracking and case rather than by weight contrast or a second face.

The capture opens with a full-bleed black video hero with a white round PLAY button at its right edge and a thin white navigation bar above it (MENU and a search icon at left, the IWC wordmark centred, a phone icon at right). Below the hero the page alternates between large two-column text blocks and full-height product imagery. The first text block reads "Celebrating 50 Years of Gérald Genta's Ingenieur SL" in the 16px/500 subheading style at the left, with a 14px paragraph and an underlined uppercase "DISCOVER MORE" link at the right. A second block pairs a vintage black-and-white Ingenieur SL advertisement with a 32px headline, "The Ingenieur SL from Gérald Genta: A Design for Eternity". The imagery does the luxury work; the typography stays out of the way.

The voice is declarative and historical: "In 1976, IWC Schaffhausen introduced the Ingenieur SL, designed by Gérald Genta." Calls to action are plain verbs in capitals: DISCOVER MORE, DISCOVER NOW, PLAY, SKIP INTRODUCTION.

## Colors

The palette is deliberately achromatic. Everything below was measured from the live page.

- **Canvas `#ffffff`** (`colors.canvas`): the page background outside the hero video, and the navigation bar background.
- **Ink `#000000`** (`colors.ink`, also `colors.primary`): measured text color for 2,022 weighted characters, the fill of the round PLAY button, and the border of that button. Because the only detected call to action is black on white, primary and ink are the same value.
- **On-primary `#ffffff`** (`colors.on-primary`): the glyph color on the PLAY button and on the hero headline, which sits on the video.
- **Muted ink `#6f6f6f`** (`colors.ink-muted`): 29 weighted characters, and the color a "DISCOVER MORE" link moves to on hover (measured: black to rgb(111, 111, 111), opacity about 0.6).
- The root variables also publish neutral steps `#d9d9d9` (outline) and `#f9f9f9`, plus functional `#ee3e3e` (error) and `#24ad63` (green). These are system variables, not colors seen in the hero or the first text blocks, so they are not promoted to tokens here.
- Black occupies most of the measured background area (about 2,719 against 209 for white by area weight) because the hero video and image blocks are dark; the reading surface is still white.
- Third-party colors in the CSS corpus (such as the `#007aff` Swiper theme color and the `#00b2ff` accent) belong to embedded widgets, not to the brand.

## Typography

The family is `HelveticaNeue, Helvetica, Arial, sans-serif` (the root variable `--ref-typeface-plain`). Loaded faces: HelveticaNeue 400 and 500. The root variables also name a second face, Arshid, but it was not among the loaded fonts in this capture.

| Role | Size / line-height | Weight | Tracking |
| --- | --- | --- | --- |
| Display (h1, h2) | 32px / 36.8px | 500 | 0.32px |
| Display, 390px viewport | 28.0619px / 32.2712px | 500 | 0.280619px |
| Subheading (h3) | 16px / 17.6px | 500 | 0.16px |
| Body | 14px / 18.9px | 400 | 0.14px |
| Button, nav, link | 12px / 12px | 500, uppercase | 0.6px |

Tracking is a consistent 1% of the font size for text (0.14px at 14px, 0.16px at 16px, 0.32px at 32px) and 5% for the uppercase 12px labels (0.6px). The root variables confirm this: `--ref-tracking-base: .01em` and `--ref-tracking-md: .05em`. Display sizes are fluid: `--sys-typography-heading-large-size` clamps between 1.75rem and 2rem, which is where the 28.0619px mobile value comes from. Body text sizes by character count are 14px (1,404), 16px (287), 12px (263), 32px (105), 10px (29) and 24px (16).

HelveticaNeue is a commercial face and is not served with the page as a downloadable open font. Substitutes: Helvetica or Arial (already the declared fallbacks), or Inter with tracking set to the values above.

## Layout

- Desktop viewport 1,280px; the root variables define breakpoints at 375px (xs), 568px (sm), 768px (md), 1024px (lg), 1280px (xl), 1440px (2xl) and 1920px (3xl).
- The navigation is a fixed 64px bar (`--comp-navigation-height: 64px`; a separate `--crown-navigation-height` is 60px).
- Spacing steps measured from gaps and paddings: 6px, 13px, 14px, 20px, 27px, 42px, 58px. The most common gap is 27px (25 occurrences) followed by 6px and 20px.
- Content blocks are two columns: a narrow left column holds the heading, a wider right column holds the paragraph and link. A hairline rule (`#d9d9d9`, the only non-black border color measured) separates the hero from the first block.
- Large horizontal paddings of 184px and 217.594px appear on the editorial blocks, leaving generous white margins.
- Product and archive imagery runs edge to edge in the half-width image blocks.

## Elevation & Depth

The extraction recorded no box shadows at all (`boxShadows` is empty). Depth comes from contrast between black media blocks and white text blocks, from a gradient darkening at the bottom of the hero video, and from a hairline border. A floating grey chat bubble at the right of the capture is a third-party widget and is not brand UI. The root variable `--sys-color-scrollbar` is black at 20% opacity.

## Shapes

Measured border radii are 50% (4 elements) and 100% (1 element); nothing else is rounded. The generated token `rounded.pill: 9999px` represents this fully round shape. The PLAY control is 73px by 73px with a 1px solid `#000000` border and 13px padding; the navigation link in the extraction also reports 50%. Images, text blocks and the text input are square-cornered. The root variable `--sys-shape-corner-default` is 4px, but no rendered element in the capture computes that radius.

## Components

- **Play button (`button-primary`)**: black `#000000` fill, white 12px/500 uppercase label with 0.6px tracking, 73px circle, 13px padding, 1px black border. It is the only detected primary control and sits over the hero video.
- **Text link (`link`)**: 12px/500 uppercase, 0.6px tracking, underlined, black; hover changes the color to `#6f6f6f` at about 0.6 opacity. "SKIP INTRODUCTION" (white on video) fades to opacity 0.6 on hover.
- **Navigation (`nav`)**: white background, black 12px/500 uppercase items, 64px high at 1,280px and 390px wide on mobile. Nav links measured 46px high with 0 13px padding.
- **Text input (`text-input`)**: 14px/400 black text, 33px high, 0px 0px 13px padding, no border radius; measured as an underlined-field style (no background fill).
- **Product cards**: none were detected by the extractor.

## Design System Architecture

No public design system or brand-guidelines site was found. The site's own CSS publishes a three-layer variable system: `--ref-*` reference tokens (`--ref-color-neutral-0` `#000000`, `--ref-color-neutral-50` `#6f6f6f`, `--ref-color-neutral-80` `#d9d9d9`, `--ref-color-neutral-95` `#f9f9f9`, `--ref-color-neutral-100` `#ffffff`, `--ref-typeface-weight-regular` 400, `--ref-typeface-weight-medium` 500), `--sys-*` system tokens (`--sys-color-foreground`, `--sys-color-background`, `--sys-color-muted`, `--sys-color-outline`, `--sys-color-focus-outline`, `--sys-color-error`, `--sys-typography-*-size`, `--sys-motion-easing-*`) and `--comp-*` component tokens (`--comp-navigation-height`). Motion easings published as variables include `cubic-bezier(.2, 0, 0, 1)` (standard) and `cubic-bezier(.15, 1, .22, 1)` (emphasized decelerate). The page was fetched from its own host, but an attempt to read the about page returned HTTP 403, so no corporate brand statements are cited here.

## Do's and Don'ts

- Do keep the page white with black type and let photography carry colour.
- Do use only HelveticaNeue 400 and 500; make hierarchy with size and tracking.
- Do set uppercase labels at 12px with 0.6px tracking.
- Do underline text links and fade them to `#6f6f6f` on hover.
- Don't add shadows, gradients on UI controls or accent colors; none were measured.
- Don't round rectangles; only circular controls are rounded in the capture.
- Don't document the chat bubble or the video intro controls as brand components.
- Don't use bold (700) for body copy; 700 appears on only 16 characters.

## Responsive Behavior

Measured at a 390px viewport: the display size drops from 32px to 28.0619px (line-height 32.2712px, tracking 0.280619px); body text stays 14px/18.9px; the navigation stays 64px high and the labels stay 12px/500 uppercase. The mobile pass detected no primary call to action. Mobile text sizes by character count: 14px (1,708), 12px (290), 16px (287), 28.0619px (105), 21.0465px (31), 10px (29). Layout reflow, column stacking and image behavior at other widths were not measured.

## Iteration Guide

1. Start from `canvas` `#ffffff` and `ink` `#000000`; add `ink-muted` `#6f6f6f` only for hover or secondary states.
2. Set all type in HelveticaNeue (fallback Helvetica, Arial) at 400 or 500.
3. Headlines 32px/36.8px at 0.32px tracking; subheads 16px; body 14px/18.9px; labels 12px uppercase at 0.6px.
4. Build calls to action as underlined uppercase text links; reserve the 73px black circle for media controls.
5. Use spacing from 6, 13, 14, 20, 27, 42, 58px.
6. Check any change against the measured values in this file, never against the video hero.
