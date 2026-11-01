---
version: alpha
name: "What The Duck"
category: "Thai Brands"
description: "Dark record-label site for What The Duck (Thailand): black #000000 canvas, white text, amber #fcb93d accent on nav and pill buttons, Lulo Clean bold headings with 3.6px tracking, Avenir light body at 15px, square art tiles and 9999px pill buttons."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#fcb93d"
  on-primary: "#ffffff"
  surface-2: "#2f2e2e"
typography:
  display:
    fontFamily: lulo-clean-w01-one-bold, sans-serif
    fontSize: 33px
    fontWeight: 700
    letterSpacing: "-3.3px"
  heading:
    fontFamily: lulo-clean-w01-one-bold, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 41.4px
    letterSpacing: 3.6px
  subheading:
    fontFamily: avenir-lt-w01_35-light1475496, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19px
  body:
    fontFamily: avenir-lt-w01_35-light1475496, sans-serif
    fontSize: 15px
    fontWeight: 400
  nav:
    fontFamily: lulo-clean-w01-one-bold, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 41px
rounded:
  xs: 17px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 10px
  s6: 14px
  s7: 15px
  s8: 20px
  s9: 24px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
    rounded: "{rounded.pill}"
    padding: 0px 30px
    height: 40px
  button-secondary:
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
    height: 29px
    borderColor: "{colors.page-body}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
    borderColor: "{colors.page-body}"
  nav:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
    padding: 0px 26px
    height: 42px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
---

# What The Duck

## Overview

What The Duck is a Thailand-based record label, and its homepage at whattheduckmusic.com is built as a black stage for album art, music-video thumbnails and a hero collage of its artists. The page title reads "What The Duck l Record Label l Thailand". The measured design is dark and image-led: a `#000000` canvas, white text, a single warm amber accent `#fcb93d`, and a charcoal `#2f2e2e` header bar. The hero is a full-width illustrated collage of artist portraits with hand-drawn yellow marker strokes and handwritten artist names; the interface around it stays quiet so the artwork carries the personality.

The page is a Wix site (the font names `lulo-clean-w01-one-bold`, `avenir-lt-w01_35-light1475496` and `proxima-n-w01-reg` are Wix-hosted font identifiers, and the root variables are `--wst-*` Wix theme variables). Content is organised around release cadence: the section heading "NEW MUSIC VIDEO" sits beside the line "Fresh Music Releases Every Thursday", followed by three release tiles, a large video player and a row of four thumbnails with a "Next" control. The official site copy lists pathways for artists, collaborators and job seekers (Audition, Collab, Recruit Jobs) in the navigation.

## Colors

The palette is three working colors. `canvas` `#000000` is the page background and covers by far the largest painted area. `ink` and `page-body` are both `#ffffff`, used for 757 of the measured text characters. `primary` `#fcb93d` is amber and is used for the logo wordmark "DUCK", every navigation link and the pill "Play Video" button. `surface-2` `#2f2e2e` is the header bar behind the logo and menu. Measured translucent black overlays (`#00000059` and `#0000001a`) sit over imagery, and `#ffffff` is the only measured border color apart from one amber border. `on-primary` is `#ffffff`: the Play Video label is white on amber, as measured on the live button.

The amber accent is the one decorative color the interface uses; it echoes the yellow brush strokes of the hero artwork. Colors inside thumbnails and the hero (pink, blue, purple) come from the releases themselves and are not interface tokens.

## Typography

Two families do the work. Display, heading and navigation use `lulo-clean-w01-one-bold` (a wide, geometric, all-caps-feeling face from the Wix font set). The logo "DUCK" is 33px at weight 700 with a letter spacing of -3.3px. The section heading "NEW" is 36px, weight 700, line height 41.4px and a loose letter spacing of 3.6px, which gives the spaced-out headline look "N E W  M U S I C  V I D E O". Navigation links are 12px in the same face with a 41px line height.

Body and supporting copy use `avenir-lt-w01_35-light1475496` at weight 400: 15px for the body role, 14px for card titles, button labels and links (line height 19px for the card-title role). By character count 14px is the dominant size (451 characters), followed by 12px (154) and 18px (80). `proxima-n-w01-reg` and `HelveticaNeueW01-55Roma` also appear in small amounts (101 and 13 characters). Weights are only 400 and 700. No fallback beyond `sans-serif` is declared in the measured stacks; these are proprietary Wix-served fonts, so if they cannot be licensed, a wide geometric bold sans for headings and a light humanist sans for body is the closest substitute in character.

## Layout

The page width measured is 1280px and the scroll height of the home page is 2596px. The header is a full-width bar (105px tall in the measurement) with the logo at left and a single row of navigation links. Below the hero the content sits in a centred column with a thin white rule above and below the release block. Release tiles are three equal squares across; the large player is centred in the same column; the thumbnail strip holds four equal items. A footer with "Back to Top" and social links closes the page on the black canvas.

The spacing values measured on the page are 2px, 3px, 4px, 5px, 10px, 14px, 15px, 20px, 24px and 26px. There is no clean multiple scale; they come from Wix element positioning.

## Elevation & Depth

No box shadows were measured (the shadow list is empty). Depth comes from imagery and overlays instead: translucent black layers (`#00000059`, `#0000001a`) sit over the thumbnails so white titles stay readable, and the charcoal header `#2f2e2e` separates the navigation from the artwork below it. Thin white rules divide the release section from the rest of the page.

## Shapes

Two radii were measured: `xs` 17px and `pill` 9999px (the live button computes 999px). The pill is used by the amber Play Video button and the amber arrow button next to "NEW MUSIC VIDEO". Almost every other element, including the release tiles, the video player and the text input, computes a radius of 0px. The contrast is deliberate in the capture: hard-edged rectangular art against a few fully rounded amber controls.

## Components

- **button-primary**: amber `#fcb93d` fill, white label in the 14px Avenir style, pill radius, padding 0px 30px, height 40px. Example label: "Play Video".
- **button-secondary**: transparent, white 2px outline `#ffffff`, no radius, height 29px, 14px label, for example "DUCK HOME".
- **link**: white 14px Avenir with a white border treatment as measured.
- **nav**: `#2f2e2e` background bar; **nav-link** amber `#fcb93d` text in the 12px Lulo face.
- **text-input**: the video search field is 14px white text, padding 0px 26px, height 42px, placeholder "Search video...".
- **footer**: `#000000` background, white 14px text.
- Release tiles carry a title in white spaced capitals over the artwork with view, comment and like counters beneath a thin rule (as seen in the capture).

Hover and focus states were not recorded (the hover list is empty), so they are not documented here.

## Design System Architecture

No public design system or brand guideline exists for What The Duck: the homepage at https://www.whattheduckmusic.com/ links only to social channels (YouTube, Facebook, Instagram, Twitter), and the navigation offers Home, News, Artists, Collab, Audition, Entertainment, Gallery, Recruit Jobs, About Duck and More. The de-facto system is the Wix theme: root variables such as `--wst-color-fill-background-primary` and `--wst-font-style-body-small` resolve to palette slots `--color_*` and font slots `--font_*` (for example `--font_9` is "normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,sans-serif"). Tokens in this file were measured from the rendered page, not copied from a source file.

## Do's and Don'ts

- Do keep the canvas `#000000` and set body text in `#ffffff`.
- Do reserve amber `#fcb93d` for the logo, navigation and the primary action.
- Do round only the action buttons (pill) and leave art and panels square.
- Do use wide letter spacing (3.6px) on the 36px section headline.
- Don't add shadows; none were measured.
- Don't use amber for body text or large fills outside buttons.
- Don't treat colors inside artwork and thumbnails as interface tokens.
- Don't invent a light theme; only the dark page was measured.

## Responsive Behavior

The extraction's mobile pass returned the same role measurements as desktop (same font sizes and widths), so a distinct mobile layout was not measured. Breakpoints, menu behaviour on small screens and touch target sizes are not measured. The only recorded viewport is the 1280px desktop width.

## Iteration Guide

1. Start from `canvas` `#000000`, `ink` `#ffffff`, `primary` `#fcb93d`.
2. Set headings in the Lulo-style bold face at 36px with 3.6px tracking; body in the light Avenir style at 15px.
3. Build buttons as 40px-high amber pills with 0px 30px padding.
4. Keep tiles and players at 0px radius, imagery full-bleed with a translucent black scrim.
5. Re-run the extractor on the live site after any change to confirm the measured values still hold.
