---
version: alpha
name: "Truus"
category: "Portfolio"
description: "Truus, an Amsterdam advertising agency: warm off-white canvas (#f0ebe6) against pure black, lowercase Epilogue 900 headlines with tight negative tracking (-2.56px at 85.33px), DM Sans 400 body at 17.78px, Lora italic accents, and bright pops of blue #4b69f0, berry #a0325a, lilac #f0befa and orange #f5693c."
colors:
  canvas: "#f0ebe6"
  ink: "#000000"
  primary: "#f0ebe6"
  surface-3: "#4b69f0"
  charcoal: "#2d2d2d"
  berry: "#a0325a"
  lilac: "#f0befa"
  orange: "#f5693c"
  periwinkle: "#82a0ff"
typography:
  display:
    fontFamily: Epilogue, Arial, sans-serif
    fontSize: 85.3333px
    fontWeight: 900
    lineHeight: 81.0667px
    letterSpacing: "-2.56px"
    textTransform: lowercase
  display-mobile:
    fontFamily: Epilogue, Arial, sans-serif
    fontSize: 40px
    fontWeight: 900
    lineHeight: 38px
    letterSpacing: "-1.2px"
    textTransform: lowercase
  heading:
    fontFamily: Epilogue, Arial, sans-serif
    fontSize: 113.778px
    fontWeight: 900
    lineHeight: 85.3333px
    letterSpacing: "-2.27556px"
    textTransform: lowercase
  subheading:
    fontFamily: Epilogue, Arial, sans-serif
    fontSize: 28.4444px
    fontWeight: 900
    lineHeight: 28.4444px
    letterSpacing: "-0.284444px"
    textTransform: lowercase
  body:
    fontFamily: "\"DM Sans\", Arial, sans-serif"
    fontSize: 17.7778px
    fontWeight: 400
    lineHeight: 24.8889px
  nav:
    fontFamily: "\"DM Sans\", Arial, sans-serif"
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 19.9111px
rounded:
  xs: 7.11px
  sm: 10.67px
  md: 17.78px
  lg: 142.22px
  xl: 177.78px
  pill: 9999px
spacing:
  s1: 3.56px
  s2: 5.33px
  s3: 6.67px
  s4: 7.11px
  s5: 8px
  s6: 8.89px
  s7: 10.67px
  s8: 14.22px
  s9: 21.33px
  s10: 24.89px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
---

## Overview

Truus (https://truus.co/, title "Truus - We make advertising for the new mainstream", language `en`) is the site of an agency whose footer gives the address "papaverhof 21, 1032 lX amsterdam". The home page opens on a full-width black-framed video hero with a rounded outline, over which the h1 "we make advertising for the new mainstream" is set in lowercase, heavy Epilogue (weight 900) with the word "advertising" in an italic serif (Lora, 400 italic is among the loaded fonts) and the word "mainstream" circled by a thin outline ellipse. A small blue smiley badge and a lilac four-point sparkle decorate the headline. The nav is minimal: an orange starburst labelled "work" at the top-left, the hand-lettered "truus" wordmark at the center, and a WhatsApp glyph at the top-right.

Under the hero the canvas turns to the warm off-white #f0ebe6, with a short centered paragraph: "Audiences are more scattered and more reachable than ever. We help brands become leaders on the channels of the new mainstream." Further down (read on the live page with WebFetch) come the headings "We wanna be where the people are", "An agency built for the future. from TV to TikTok.", "girls just wanna have fun!", "mainstream is not a dirty word", "arrogance = old fashioned", "call us if you need:" and "Proud to have worked with:", followed by a client-logo list and a team portrait grid.

The voice is playful and self-aware, written entirely in lowercase on headlines. The footer joke reads "we're millennials and gen-z: please do not call us." and invites a WhatsApp instead. The extraction counted 866 visible elements on a 9,746px-tall page.

## Colors

The palette is two neutrals plus a set of party colors:

- **canvas `#f0ebe6`**: warm off-white, the second-largest background by area (5,131) after black (7,751). It is also the text color on dark areas (459 characters).
- **ink `#000000`**: black; the text color on the light canvas (983 characters) and the header/nav background.
- **primary `#f0ebe6`**: the generator assigned this to primary because no button was detected; the site has no measured primary button. Treat the off-white as the signature color, not as a button fill.
- **surface-3 `#4b69f0`** (root variable `--color-darkblue`): a saturated blue background area (823), used on sections and badges.
- **periwinkle `#82a0ff`** (`--color-blue`): lighter blue, seen in the smiley sticker.
- **berry `#a0325a`** (area 337), **lilac `#f0befa`** (276), **orange `#f5693c`** (200): additional measured background areas; the orange matches the "work" starburst in the capture.
- **charcoal `#2d2d2d`** (`--color-darkgrey`, area 577): the dark-grey surface.

Other root variables the stylesheet declares: `--color-green: #2d7864`, `--color-lightgreen: #e6fab9`, `--color-pastelpink: #ffe1f0`, `--color-white: white`, `--color-black: black`, `--color-offwhite: #f0ebe6`, and `--color-primary: var(--color-pink)`. Only the colors in the frontmatter are tokenized; the green and pastel variables were not found among rendered backgrounds on the home page.

Only two text colors were measured on the page: #000000 and #f0ebe6, which makes every readable line either black on off-white or off-white on black or photographic darkness.

## Typography

Three families are loaded: **Epilogue** (400 and 900), **DM Sans** (400, 600, 700) and **Lora** (400 italic). By character count DM Sans carries 842 characters, Epilogue 542 and Lora 58.

| Token | Family | Size / line height | Weight | Letter spacing |
|---|---|---|---|---|
| display (h1) | Epilogue | 85.3333px / 81.0667px | 900 | -2.56px |
| heading (h2) | Epilogue | 113.778px / 85.3333px | 900 | -2.27556px |
| subheading (h3) | Epilogue | 28.4444px / 28.4444px | 900 | -0.284444px |
| body | DM Sans | 17.7778px / 24.8889px | 400 | normal |
| nav | DM Sans | 14.2222px / 19.9111px | 400 | normal |

All Epilogue display text is `text-transform: lowercase`. Line height is under 1.0 times the font size for display sizes (81.07 over 85.33; 85.33 over 113.78), so lines nearly touch, and the heavy weight plus negative tracking forms dense, poster-like blocks. The font-size ranking by characters is 17.7778px (813), 14.2222px (189), 28.4444px (156), 56.8889px (121), 85.3333px (85), 12.4444px (52) and 113.778px (26). The sizes are multiples of 1.7778px, which is consistent with a viewport-width unit (the stylesheet declares `--unit-width: 16px` and `--size-font: var(--unit-width)`); this is reported as a measurement of the numbers, not as a statement about the build.

The mobile pass at 390px measured the h1 at 40px / 38px, weight 900, letter spacing -1.2px, and the body text at 20px / 28px.

No font substitutes are documented: all three families are loaded by the site itself.

## Layout

The page is built from full-width bands: the hero (800px nav/hero area at desktop), the off-white statement band, a black work section, and colored feature bands. Paddings measured include 189.312px (20 uses), 506.641px (15), 365.016px (5), 49.7778px (5), 96px (4), 21.3333px (5), 8.88889px and 5.33333px. Gaps are 8px (52), 21.3333px (16), 7.11111px (12), 24.8889px (6), 3.55556px (2) and 14.2222px (2). The root variables include `--gap: 2.5em`, `--container-padding-s: .75em`, `--container-padding-l: 6.75em`, `--container-padding-xl: 10.625em` and `--size-container-min: 992px`.

The work cards are 338px wide and 507px high (a tall portrait ratio) with a 17.7778px radius; an outlined variant adds a 5px solid #f0ebe6 border at 340px by 509px. The spacing tokens s1 to s10 (3.56px to 24.89px) come from the measured gaps and paddings.

## Elevation & Depth

No box shadows were measured. Depth is made with full-bleed video, overlapping stickers (the smiley and sparkle), the outline ellipse around "mainstream", and a `#0000004d` (30% black) overlay measured among the background areas (190). The page uses colour blocks and photography instead of shadows.

## Shapes

Measured radii: 17.7778px (56 elements), 10.6667px (29), `142.222px 142.222px 142.222px 0px` (7, a speech-bubble shape with one square corner), 7.11111px (3), 711.111px (3, pill), 50% (1) and `177.778px 177.778px 177.778px 0px` (1). The root variables set `--border-radius-s: .5em` and `--border-radius-m: .75em`, and `--border-radius` references `--border-radius-l`. The tokens are xs 7.11px, sm 10.67px, md 17.78px, lg 142.22px, xl 177.78px and pill 9999px. The bubble shapes with a single flat corner are the identity shape of the sticker graphics.

## Components

**Nav**: black background, off-white labels, Epilogue 900 28.4444px lowercase for the "work" label and DM Sans 14.2222px for the link text. **Link**: off-white text, DM Sans 14.2222px/400, 128px by 36px hit area. **Card**: black fill, 17.7778px radius, text color black on a black card (the card text is the "jumbo" client tile, where the label sits on imagery). No buttons, inputs or footer role were detected by the extractor, so none are tokenized.

The "work" starburst, the WhatsApp icon button and the outlined headline ellipse are graphic elements whose dimensions were not measured.

## Design System Architecture

No public design system, brand guideline or press kit exists for Truus: the home page opened with WebFetch lists a work page, a WhatsApp link, a job application form and social links (LinkedIn, Instagram, TikTok), and no guidelines link. The de-facto system is visible in the stylesheet's root variables, which use a `--color-*` naming scheme (black, white, offwhite, darkgrey, darkblue, blue, green, lightgreen, pastelpink, primary), `--border-radius-*` size steps, `--animation-default-fast: 0.4s cubic-bezier(0.625, 0.05, 0, 1)` and `--animation-bounce-fast: 0.6s cubic-bezier(0.35, 1.75, 0.6, 1)`, plus `--container-padding-*` steps. The page footer credits "Design by Jordan" and "code by Dennis". Source of the page: https://truus.co/.

## Do's and Don'ts

- Do set headlines in Epilogue 900, lowercase, with negative letter spacing and a line height below 1.
- Do use DM Sans 400 for reading text and Lora italic only for single emphasised words.
- Do alternate black and #f0ebe6 bands and add blue, berry, lilac or orange as colour blocks.
- Do keep copy casual and lowercase.
- Don't add drop shadows; none were measured.
- Don't introduce a solid primary button color: the site has no measured primary button.
- Don't use the unmeasured root-variable colors (green, lightgreen, pastelpink) as page backgrounds.

## Responsive Behavior

Only the mobile typography was measured at 390px: h1 40px / 38px at weight 900 with -1.2px tracking, h2 56px / 42px, body 20px / 28px, and nav 24px / 24px. The mobile by-character sizes were 20px, 18px, 24px, 32px, 16px and 40px. Layout changes at mobile width (columns, nav form) were not measured. The stylesheet declares `--size-container-min: 992px`; no media-query breakpoint list was recorded.

## Iteration Guide

1. Start with canvas #f0ebe6 and ink #000000; introduce accent blocks in #4b69f0, #a0325a, #f0befa and #f5693c.
2. Set display copy in Epilogue 900 lowercase with the measured tracking.
3. Use 17.78px DM Sans for body copy.
4. Keep cards portrait (about 338px by 507px as measured) with 17.78px corners.
5. Re-gate with `node web/scripts/verify-designs.mjs --slug=truus`.
