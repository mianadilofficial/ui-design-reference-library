---
version: alpha
name: Unseen Studio Year in Review 2025
category: "Agencies & Studios"
description: "Unseen Studio's Year in Review 2025 microsite (2025.unseen.co) is a near-black #111111 scroll story with gold #e8b900 New Icon Script display type at 74.07px, bracketed uppercase DM Mono labels at 11.85px, Neue Montreal navigation, 7.41px image corners and per-client chapter colors."
colors:
  canvas: "#111111"
  page-body: "#e2e2e2"
  page-largest: "#151515"
  ink: "#ffffff"
  primary: "#e8b900"
  surface-black: "#0a0901"
  ink-secondary: "#332f22"
  ink-muted: "#b8b8b8"
  ink-grey: "#ababab"
  ink-red: "#e50913"
  chapter-lilac: "#b88cd7"
  chapter-pink: "#ff98fc"
  chapter-navy: "#051f33"
typography:
  display:
    fontFamily: "\"New Icon Script\", serif"
    fontSize: 74.0741px
    fontWeight: 500
    lineHeight: 66.6667px
    letterSpacing: "-4.44444px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"New Icon Serif\", serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: "-2.4px"
    textTransform: uppercase
  nav:
    fontFamily: "\"Neue Montreal\", sans-serif"
    fontSize: 14.8148px
    fontWeight: 400
    lineHeight: 22.2222px
  link:
    fontFamily: "\"DM Mono\", monospace"
    fontSize: 11.8519px
    fontWeight: 400
    lineHeight: 17.7778px
    textTransform: uppercase
  body-dominant:
    fontFamily: Times
    fontSize: 11.8519px
    fontWeight: 400
rounded:
  xs: 7.41px
spacing:
  s1: 4.44px
  s2: 5.93px
  s3: 11.85px
  s4: 12.8px
  s5: 15px
  s6: 26.67px
  s7: 35.56px
  s8: 36px
  s9: 38.4px
  s10: 53.33px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-grey}"
    padding: 15px 36px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

This is the 2025 "Year in Review" site of Unseen Studio at `https://2025.unseen.co/` (page title "Year in Review 2025 - Unseen Studio"; the queued name was "Unseen Studio 2025 Wrapped"). It is a horizontal, chaptered story: the capture shows a left panel with a framed glowing-cube artwork and a caption, and a right panel that is almost entirely black, where a large gold calligraphic headline ("STAY ...") sits over a texture of monospaced letters and numbers (U, N, S, E and digit rows) that fades toward the bottom.

Everything on the chrome is small and technical. The header is a single 33px strip of `[U_S_25]`, "Unseen Studio®", and `[X] [IG] [LI]`, set in 11.85px DM Mono. The only call to action is a text link in the same mono face, `[START A PROJECT WITH US]`, uppercase and gold. A `[2026]` marker in gold sits above the headline. The contrast between tiny bracketed mono labels and a giant script headline carries the identity.

The site is the studio's own editorial piece, not a product: there are no cards, no forms and no buttons with fills. The measured root variables name the client chapters (`--netflix`, `--klook`, `--kikk`, `--oceanx`), which means each story section takes its background from the client it features.

## Colors

The measured page background (`--site-background`) is `#e2e2e2`, but the story areas that fill the screen are dark: `#151515` is the largest area fill (2,611 weight), followed by `#e2e2e2` (2,048), `#0a0901` (2,048, the `--main-bg` variable) and `#111111` (1,155). The captured screen is dominated by `#111111`, so it is the canvas token, and `#e2e2e2` is kept as `page-body` for the light story pages.

The brand accent is gold `#e8b900`, measured as the h1 color, the `[2026]` marker, the link color and a 1px border color. Text on dark is white `#ffffff` (500 characters). Greys are `#b8b8b8`, `#ababab` (the `--grey` variable, the header text) and a warm dark brown-grey `#332f22` (1,607 characters, the dominant text color on the light story pages, `--text`).

Chapter colors come from the client sections: lilac `#b88cd7` (`--klook`), pink `#ff98fc` (`--kikk`), deep navy `#051f33` (`--oceanx`), and `#151515` (`--netflix`). `#e50913` appears as text for 22 characters (where it is used was not recorded). Other measured text hues, such as `#4c50b5`, `#91775a`, `#2b006b`, `#2f57e6`, `#52697b` and `#ff4894`, appear on 7 to 19 characters each and are not tokens here (their source elements were not recorded).

The root also declares a brownish `--yellow: #9D6E46` and `--menu-accent: #9D6E46`; these are the active-menu and chevron accents, a different color from the gold `#e8b900`.

## Typography

Six families were measured by character count: Times (1,364, a generic serif name; where it is used was not recorded), Neue Montreal (591), DM Mono (195), Bootzy Condensed TM (176), New Icon Serif (79) and New Icon Script (16). Loaded fonts are DM Mono 500, Bootzy Condensed TM 400, New Icon Script 400, New Icon Serif 400 and Neue Montreal 400.

- Display (desktop): New Icon Script 500, 74.0741px / 66.6667px, letter-spacing -4.44444px, uppercase, gold `#e8b900`.
- Display (mobile pass): New Icon Serif 500, 40px / 36px, letter-spacing -2.4px, uppercase.
- Navigation: Neue Montreal 400, 14.8148px / 22.2222px.
- Labels and links: DM Mono 400, 11.8519px / 17.7778px, uppercase; this is the most frequent size (1,806 characters).
- Oversized display sizes measured on story typography: 296.296px, 222.222px, 177.778px, 153.6px, 139.259px and 204.8px, with letter-spacing from -13.824px to +5.33333px depending on the size. Their families were not recorded per size.
- Mid sizes: 50.3704px (196 characters, letter-spacing -1.51111px), 37.037px (letter-spacing -1.11111px) and 20.7407px.

Weights measured: 400 (1,857 characters), 100 (290), 500 (274). Body-size tracking is 0.237037px at 11.8519px for mono labels.

## Layout

The page is a story, not a document grid. Measured paddings are large: 118.519px (41 occurrences), 59.2593px, 66.6667px and 111.111px, with small label paddings of 5.92593px and 11.8519px. Gaps are 53.3333px (12) and 94.8148px (9). The header spans the full 1280px width with `15px 36px 0px` padding, and the headline box carries 26.6667px of padding.

The page width at measurement was 1280px with a scroll height recorded for the story panel; the capture shows two side-by-side panels, the left one holding image and caption, the right one holding the headline and the glyph texture, each bounded by a straight vertical edge. Captions and footers are placed at the bottom of each panel and the call-to-action link sits at the lower left of the right panel.

## Elevation & Depth

Depth is atmospheric. The one measured box-shadow is a very large soft one, `rgb(226, 226, 226) 64px 0px 256px 192px`, a pale `#e2e2e2` halo, not a card shadow; which element carries it was not recorded. Images such as the glowing cube sit flat, with a 7.41px corner. The glyph texture and the headline overlap, so the headline reads through a field of small letters and digits; no z-order tokens were measured.

## Shapes

One radius was measured: 7.40741px (45 elements), applied to framed imagery. Everything else computes to 0px, including the mono links and header. The shape language is rectangular panels with a slight softening on images; there are no pills and no circles measured.

## Components

- **Header strip**: 33px tall, full width, `15px 36px 0px` padding, `#ababab` text in DM Mono 11.85px for `[U_S_25]`, the "Unseen Studio®" wordmark link in Neue Montreal 14.81px (white), and bracketed social links.
- **Link (call to action)**: `[START A PROJECT WITH US]`, DM Mono 11.8519px, uppercase, `#e8b900`, 18px tall, no fill, no border, 0px radius.
- **Headline**: New Icon Script 500 at 74.0741px, gold, with negative tracking.
- **Framed image**: 7.41px radius.
- **Primary button**: none detected (`ctaCandidates` is empty), so no button token is declared.

## Design System Architecture

No public or official Unseen Studio design system was found, and none was searched for; this document is built from the measured site `https://2025.unseen.co/`. The de-facto system is the root custom-property set: color variables (`--main-bg: #0A0901`, `--site-background: #E2E2E2`, `--grey: #ABABAB`, `--text: #332F22`, `--header-dark: #322E21`, `--button-dark: #3F3838`, `--button-light: #F6F4F1`, `--menu-bg: #090A02`) and client chapter variables (`--netflix`, `--klook`, `--kikk`, `--oceanx`), with story-specific colors for text (`--story-colored-light-text`, `--story-colored-dark-text`) and vintage-themed accents (`--vintage-text`, `--vintage-highlight`). The naming shows a themed, per-chapter color system rather than a component library. Source data: `web/data/extracted/unseen-studio-2025-wrapped.json`.

## Do's and Don'ts

Do:
- Set the headline in gold `#e8b900` New Icon Script, uppercase, with negative tracking.
- Use bracketed uppercase DM Mono 11.85px for labels, social links and the call to action.
- Keep chrome minimal: a 33px header strip and one text link.
- Use the chapter color variables for chapter backgrounds.

Don't:
- Don't add filled buttons, cards or pills; none were measured.
- Don't mix the brown `#9D6E46` menu accent with the gold `#e8b900` headline color.
- Don't use radii other than 7.41px on images.
- Don't present Times as a brand typeface; it is not among the loaded fonts.

## Responsive Behavior

Measured at the 390px mobile pass: the display heading switches from New Icon Script 74.0741px to New Icon Serif 40px (line-height 36px, letter-spacing -2.4px), and the navigation text measures 14px DM Mono in `#ababab` (desktop is 11.8519px). The mobile pass recorded only roles and font sizes; breakpoints, menu behavior and panel arrangement on mobile were not measured.

## Iteration Guide

1. Start with a `#111111` canvas and white `#ffffff` text.
2. Set one giant uppercase script headline in `#e8b900` with negative letter-spacing.
3. Add bracketed DM Mono 11.85px labels for header, markers and the single call to action.
4. Give each chapter its client color from the root variables and keep image corners at 7.41px.
5. Re-run `node web/scripts/verify-designs.mjs --slug=unseen-studio-2025-wrapped` after any rename.
