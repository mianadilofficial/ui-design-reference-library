---
version: alpha
name: Marshall
category: "Music & Audio"
description: "Marshall (marshall.com US store): black #000000 canvas over full-bleed gig photography, white #ffffff square buttons with black text, #8c8c8c body copy, uppercase NeueHelveticaPaneuropean 800 headlines (56px/56px) and NeueHelvetica 500 body at 18px, every corner square (0px)."
colors:
  canvas: "#000000"
  ink: "#8c8c8c"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-charcoal: "#333333"
  accent-red: "#e42a2a"
  accent-violet: "#8371f2"
  primary-hover: "#e6e6e6"
  state-error: "#f63131"
  state-confirmation: "#2a9e43"
typography:
  display:
    fontFamily: NeueHelveticaPaneuropean, system-ui, sans-serif
    fontSize: 56px
    fontWeight: 800
    lineHeight: 56px
    textTransform: uppercase
  heading:
    fontFamily: NeueHelveticaPaneuropean, system-ui, sans-serif
    fontSize: 36px
    fontWeight: 800
    lineHeight: 36px
    textTransform: uppercase
  body:
    fontFamily: NeueHelvetica, system-ui, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 25px
  button:
    fontFamily: NeueHelvetica, system-ui, sans-serif
    fontSize: 13px
    fontWeight: 500
    lineHeight: 16px
    textTransform: uppercase
  nav:
    fontFamily: NeueHelvetica, system-ui, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
    textTransform: uppercase
  link:
    fontFamily: NeueHelvetica, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
spacing:
  s1: 7px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 14px
  s6: 16px
  s7: 24px
  s8: 40px
  s9: 64px
  s10: 88.99px
components:
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.canvas}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 10px
    height: 44px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 0px 9px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 7px
---

## Overview

Marshall's US store (`https://www.marshall.com/us/en`, title "Marshall - 60 years of loud | Marshall.com", measured 1280px wide and 22798px tall) sells amplifiers, speakers, headphones, drums and clothing. The page description is "Discover premium amplifiers, wireless headphones, earbuds, home and portable speakers at Marshall. Secure payments, shipping worldwide." The look is a black, gig-poster mood: the hero is a collage of contact-sheet style photographs (people on a commute wearing Milton A.N.C. headphones) tiled edge to edge, with a headline "YOUR COMMUTE JUST GOT MORE COLOUR" in white 56px uppercase, a one-line subtext, and a white square "SHOP NOW" button.

The header is two stacked bars at the top right of the page over the imagery: a thin black utility bar (Support, Business Solutions, Membership, Find a Retailer, Outlet, a globe icon) and a white navigation bar with uppercase black links: Amps, Speakers, Headphones, Drums, Clothing, Backstage, Marshall Records, Hendrix (violet) and Special Offers (red), followed by search, account, bag and menu icons. The script "Marshall" logo sits in a black square at the top left. A round chat button floats at the edge of the viewport; it is a third-party widget and is not documented as brand UI.

Below the hero, sections such as "TAKE THE PARTY FURTHER" and "AMPS" continue in 36px uppercase headings, with body copy like "Ally Venable is a blues rock guitarist, singer and..." in grey. The tone is short, loud and imperative.

The imagery is the brand: color photographs shot like film contact prints, with visible borders, slight motion blur and mixed crops, set against the black. The text layer is deliberately minimal so that the pictures and the product (headphones in cream and black) carry the page. Accent colors appear only in two navigation labels: violet for "Hendrix" and red for "Special Offers", so the nav doubles as a promotional line without needing banners.

## Colors

Marshall publishes its colors in the page's Chakra theme as `--chakra-colors-marshall_colors-*` variables with light and dark counterparts. The measured page uses the dark set.

- **Canvas `#000000`** (`primitive_100`): the page and the logo plate.
- **Primary `#ffffff`** (`primitive_0`): the button fill, headline color and navigation bar; **on-primary `#000000`** is the text on it.
- **Ink `#8c8c8c`** (`primitive_45`, `text_secondary_disabled_light`/`selector_enabled_dark`): the most-read text color (1502 character-weight), used for body paragraphs on black.
- **Surface-charcoal `#333333`**: the largest measured background area (18889), seen behind the photographic tiles.
- **Accent-red `#e42a2a`** (`primitive_red_dark`): the "Special Offers" link. **Accent-violet `#8371f2`**: the "Hendrix" link.
- **Primary-hover `#e6e6e6`**: declared in the theme as the dark-mode button hover fill (`button_fill_hover_dark`, `button_outline_hover_dark`); the hover pass on the home page did not record a change, so this is a declared value.
- **State colors (declared)**: error dark `#f63131`, confirmation dark `#2a9e43`.

Other theme primitives declared: greys `#f2f2f2`, `#d9d9d9`, `#a6a6a6`, `#595959`, `#404040`, `#262626`, `#1a1a1a`, `#3d3d3d` (dark grain), error `#ca1d1d`, green `#1d7732`, and an overlay `rgba(26, 26, 26, 0.9)`. The Chakra default focus ring `0 0 0 3px rgba(66, 153, 225, 0.6)` is also present, which is a framework default rather than a brand value.

## Typography

Two loaded families: **NeueHelveticaPaneuropean** (weight 800, variable `--chakra-fonts-customHeader`) for headlines, and **NeueHelvetica** (weights 400 and 500) for text. Both fall back to `system-ui, sans-serif`.

- **Display** (Paneuropean 800, 56px / 56px, uppercase): the hero headline; unchanged at 56px in the mobile pass.
- **Heading** (800, 36px / 36px, uppercase): section titles ("TAKE THE PARTY FURTHER", "AMPS").
- **Body** (NeueHelvetica 500, 18px / 25px): paragraphs in `#8c8c8c`.
- **Button** (500, 13px / 16px, uppercase) and **nav** (500, 12px / 16px, uppercase).
- **Link** (400, 16px / 24px).

Headlines have a 1:1 line height, which gives dense stacked blocks. NeueHelvetica is a commercial face; the declared fallback is the system UI font.

## Layout

The page is long (22798px) and made of full-bleed imagery bands separated by sections of text and product rails. Spacing comes from the theme's Chakra scale, including custom named spaces `extraMicro` 0.4rem, `micro` 0.8rem, `thin` 1.2rem, `narrow` 1.4rem, `small` 1.6rem, `large` 4rem and `macro` 16rem, alongside Chakra numeric steps. Measured spacing steps: 7, 8, 9, 10, 14, 16, 24, 40, 64 and 88.99px. The header's utility and nav bars are right-aligned panels offset from the logo block.

## Elevation & Depth

No box shadows were measured. Depth is photographic: tile frames, motion blur and overlapping images, and text over a dark gradient or photograph. The only shadow-like value in the theme is the default Chakra focus outline.

Because nothing is raised, hover and press feedback has to come from color changes; the theme declares light/dark variants for buttons, selectors (`selector_enabled`, `selector_hover`, `selector_pressed`) and containers, but those states were not recorded in the hover pass.

## Shapes

Every element on the measured page has a computed radius of 0px (the radius frequency list is empty). Buttons, nav bars and the logo block are rectangles. The theme declares `--chakra-radii-md` 0.375rem, `2xl` 1rem and `full` 9999px, but none appears on the rendered home page, so the only token is `none: 0px`.

## Components

- **Primary button** ("SHOP NOW"): white `#ffffff` fill, black text, NeueHelvetica 500 13px uppercase, 0px radius, padding `14px 10px`, 44px tall.
- **Navigation**: white bar, black 12px uppercase links with `0px 7px` link padding and `0px 9px` container padding; accent items in violet and red.
- **Utility bar**: black bar with small uppercase links in white.
- **Hero**: photo collage with white 56px headline and a one-sentence subhead.
- **Section headings**: white 36px uppercase on black.
- **Chat bubble**: a floating widget; excluded from brand documentation.

## Design System Architecture

Marshall's shipped theme is a documented token system, though not published as a public site: the page exposes 400 root variables built on Chakra UI, with a `marshall_colors` namespace organized by role (`primitives`, `text`, `buttons`, `containers`, `outlines`, `selectors`, `state`) and by mode (`_light` / `_dark`), plus custom spacing names and font tokens (`customHeader`, `heading`, `body`, `mono`). Only the homepage (https://www.marshall.com/us/en) was opened; no public design-system or brand-guideline link was found on it, so no external source is cited. The role-based naming means a rebuild can map `text_primary_dark` to `#ffffff`, `text_secondary_disabled_light` to `#8c8c8c`, `outline_primary_dark` to `#262626` and `container_primary_hover_dark` to `#1a1a1a`, all as declared in the shipped variables.

## Do's and Don'ts

Do:
- Keep the canvas black and use white for headlines and primary buttons.
- Set headlines in uppercase NeueHelveticaPaneuropean 800 with 1:1 line height.
- Use full-bleed, grainy live-music or lifestyle photography.
- Keep every corner square.

Don't:
- Don't round buttons or cards; no radius was measured.
- Don't add drop shadows.
- Don't use the Chakra default blue focus ring as a brand color.
- Don't set body text brighter than `#8c8c8c` unless it is a headline or button.

## Responsive Behavior

Only font-size frequencies and roles were recorded on mobile. The hero headline measured the same 56px / 56px as on desktop, and mobile font-size weights were led by 18px (1611), 56px (513), 24px (212), 13px (151), 36px (112) and 12px (12). Mobile layout, menu pattern and breakpoints are not measured.

## Iteration Guide

1. Black canvas, white headline, `#8c8c8c` body at 18px / 25px in NeueHelvetica 500.
2. White rectangular buttons, black 13px uppercase labels, `14px 10px` padding, 44px tall.
3. Uppercase 56px and 36px headlines at 1:1 line height.
4. Use the theme's light/dark role names (text, buttons, containers, outlines, state) as the token structure.
5. Measure hover, focus and mobile layout before documenting them.
