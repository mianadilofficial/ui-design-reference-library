---
version: alpha
name: "XOX by makemepulse"
category: "Culture & Events"
description: "XOX by makemepulse: playful avatar-game microsite on bubblegum pink #ffbbff with navy #204a78 labels, magenta #ff4fff and #ff34ff accents, Bangers 80px lettering, hand-lettered button face, Poppins 16px text and white 32px-radius pills."
colors:
  canvas: "#ffbbff"
  ink: "#204a78"
  primary: "#ff4fff"
  on-primary: "#204a78"
  surface: "#ffffff"
  ink-3: "#ff34ff"
typography:
  display:
    fontFamily: Poppins, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  subheading:
    fontFamily: Bangers, system-ui
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
  button:
    fontFamily: a_aksi_mosiregular, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
rounded:
  xs: 32px
  none: 0px
spacing:
  s1: 2.8px
  s2: 3.8px
  s3: 8px
  s4: 16px
  s5: 20px
  s6: 31px
  s7: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 56px
    transform: matrix(1, 0, 0, 1, 0, 0)
---

# XOX by makemepulse

## Overview

XOX (https://xox.makemepulse.com/, title "XOX by makemepulse") is an interactive web game and avatar-builder microsite from the studio makemepulse. The measured start screen is a single 1280 by 800 viewport (the measured scroll height is 800px) in a saturated bubblegum pink, with a hand-lettered magenta "XOX" logo at the top centre, a cartoon character head with curly navy hair in the middle, a white speech bubble "LET'S START" at the upper right of the head, a white pill "MEET THE TEAM" with a lightning-bolt icon at the top right, a small studio wordmark "makemepulse" at the foot of the screen, and a giant ghosted "WELCOME!" behind the character in a lighter pink. A paragraph in white Poppins reads "Craft your avatar, take on the makemepulse team in tic-tac-BOOM battles and share your custom profile picture to flex. Ready, set, XOX!". The tone is playful, comic-book and sticker-like.

The first extraction was covered by a cookie-consent card ("Just two cookies here: one to understand how this site is used, and a last one to remember the character you created. Nothing more."); the page was re-measured with the consent overlay hidden (the extraction records the overlay class "CookieConsentPopin" in consentOverlaysHidden) and none of the consent controls are documented as brand UI below.

## Colors

The palette is a candy set published as root variables. `canvas` #ffbbff is the measured page background (variable `--color-pink-light` is #fbf, the same colour); `primary` #ff4fff is the hot pink fill (`--color-fushia-light`) of the detected button element; `ink-3` #ff34ff (`--color-fushia`) is the logo and accent text colour (3 characters); `ink` #204a78 (`--color-blue`) is the dark navy of labels and button text (21 text characters); `surface` #ffffff is the white of pills and bubbles and of the paragraph text (114 characters). `on-primary` is #204a78. Further published values, not used on the start screen: `--color-pink` #ffacff, `--color-blue-light` #235182, `--color-blue-dark` #050f1a, `--color-cyan` and `--color-cyan-light` #83ecff, `--color-cyan-dark` #a4f1ff, `--color-yellow` and `--color-yellow-dark` #ffd426, `--color-yellow-light` #ffde5c, `--color-green` #97f935, `--color-green-light` #d0ff9e, `--color-black` #000 and `--color-white` #fff. The cyan #a4f1ff was measured on the consent card and is therefore not a start-screen colour.

## Typography

Three families. Poppins (`--font-default`, 114 characters of 16px weight 400 with 24px line-height) sets running text; it is the `display` token as measured by the extractor's role detection, and the paragraph is its main use. Bangers (`--font-bangers`, 80px, weight 400, line-height 80px; the token `subheading`) is the comic display face of the logo-scale lettering. `a_aksi_mosiregular` (`--font-handwritten`, 14px, weight 400, line-height 14px; the token `button`) is a hand-lettered face for button and bubble labels such as "MEET THE TEAM" and "LET'S START". Measured sizes: 16px (114 characters), 14px (11), 19px (10), 80px (3). The mobile pass records 14px, 19px and 60px, so the Bangers lettering measures 60px on mobile. Only weight 400 is used. Root text sizes `--text-sm` .875rem, `--text-4xl` 2.25rem and `--text-icon` 1.5rem are declared.

## Layout

The root variables describe a design grid: `--grid-design-desktop-max-width` 120rem, `--grid-design-desktop-padding` 1.25rem, `--grid-design-desktop-gutter-width` 1.25rem, `--grid-design-mobile-padding` .625rem and `--grid-design-mobile-gutter-width` .625rem. The start screen itself is a centred composition: the character sits at the horizontal centre, the logo above, the bubble and nav pill at the right, the studio wordmark at the bottom centre. Measured paddings are 16px (2 occurrences), 20px, 31px, 32px, 3.8px and 2.8px, and spacing tokens are 2.8px, 3.8px, 8px, 16px, 20px, 31px and 32px. Z-indexes are published as `--z-ui` 100 and `--z-popin` 200.

## Elevation & Depth

Flat colour with layered illustration. No box shadow and no border colour were measured. Depth is created by the 3D-rendered character with soft gradients on its face and hair, the translucent oversized "WELCOME!" lettering behind it. The ring and shadow variables are Tailwind resets (`--tw-ring-shadow` 0 0 #0000).

## Shapes

Bubble and pill shapes. 32px is the only measured radius (5 elements, the white pills and the speech bubble; token `rounded.xs`). The detected button element itself computes 0px (`rounded.none`) inside the white pill. The speech bubble has a small tail. The character is made of rounded blobs (curly hair, round ears, a round nose).

## Components

- Nav pill: white, 32px radius, a magenta lightning-bolt icon and the label "MEET THE TEAM" in navy hand-lettered type (the detected button element is 168px wide, 56px high, 16px padding, #ff4fff fill and #204a78 label at 14px).
- Speech-bubble CTA: white 32px bubble with a tail and the label "LET'S START", sitting beside the character.
- Logo: a skewed hand-lettered "XOX" in #ff34ff.
- Character avatar: the editable subject of the experience, drawn with navy hair, white eyes with black pupils, a peach face and a magenta mouth.
- Sound/menu control: a small icon at the lower left of the screen; not measured as a token.

## Design System Architecture

No public design system or brand guideline was found for the site; the measured page links to none. The shipped CSS is a Tailwind v4 build with a custom theme: colour names by hue and lightness suffix (`--color-fushia-light`, `--color-cyan-dark`, `--color-yellow-light`), font aliases (`--font-default`, `--font-bangers`, `--font-handwritten`), easing curves (`--ease-out-back` cubic-bezier(.17,.89,.32,1.27), `--ease-in-out-back` cubic-bezier(.68,-.55,.27,1.55), `--ease-out-quart` cubic-bezier(.26,1,.48,1), `--ease-smooth` cubic-bezier(.66,0,0,1)) and the design-grid variables listed above. Source: https://xox.makemepulse.com/ and web/data/extracted/xox.json.

## Do's and Don'ts

- Do use the pink ground #ffbbff with navy #204a78 labels and magenta #ff34ff or #ff4fff accents.
- Do use white 32px-radius pills and speech bubbles for actions.
- Do pair a comic display face for logos with a hand-lettered face for labels and Poppins for sentences.
- Do use overshoot easing (`--ease-out-back`) for entrances.
- Don't use hard shadows or outlines; none were measured.
- Don't document cookie-consent controls as brand UI.
- Don't use weights other than 400.

## Responsive Behavior

The 390px mobile pass recorded sizes 14px (11 characters), 19px (10) and 60px (3), a layout summary of 0 visible header links, no menu toggle and up to 5 card columns, and root variables for a mobile grid with 0.625rem padding and gutters. The mobile heading size measured 60px for the Bangers lettering versus 80px on desktop. Other mobile behaviour was not measured.

## Iteration Guide

1. Start with a #ffbbff field, a skewed magenta logo, and a central character illustration.
2. Place white 32px pills for navigation and a speech-bubble call to action with navy hand-lettered labels.
3. Set the running paragraph in white Poppins 16px with 24px line-height.
4. Add a faint oversized word behind the character for atmosphere.
5. Use the published colour variables for secondary screens (cyan, yellow, green).
6. Run `node web/scripts/verify-designs.mjs --slug=xox` after edits.
7. Voice: exclamatory and gamer-friendly ("Ready, set, XOX!"), short imperative labels in capitals, friendly cookie copy that promises "Nothing more."
8. Hierarchy on the start screen, top to bottom: logo, speech-bubble call to action, character, explanatory paragraph in white, studio credit. The explanatory paragraph is lightweight and sits over the character, so keep text short and high-contrast against the pink.
9. Interaction vocabulary published in the stylesheet: four easing curves with overshoot or smooth tails, a z-index of 100 (--z-ui) for controls and 200 (--z-popin) for dialogs, so consent and modal dialogs always sit above game controls.
10. Illustration language: flat rounded shapes with soft inner gradients, black pupil squares, a solid magenta mouth and navy hair; every secondary colour published as a variable (cyan, yellow, green) is available for other characters or states, each in a light, base and dark step.
