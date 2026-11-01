---
version: alpha
name: Marie Antoinette
category: "Agencies & Studios"
description: "Marie Antoinette, a Paris communications, PR, influence and events agency: a pure black #000000 canvas with off-white #f3f4f2 type, full-bleed campaign imagery, giant uppercase Arnika serif titles (80px, -3.2px tracking) and Suisse BP Intl 20px sans captions, with every corner square (0px)."
colors:
  canvas: "#000000"
  page-body: "#f3f4f2"
  ink: "#f3f4f2"
  primary: "#f3f4f2"
  surface-white: "#ffffff"
  accent-red: "#aa0d1b"
typography:
  display:
    fontFamily: SuisseBPIntl, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.4px"
    textTransform: uppercase
  body:
    fontFamily: SuisseBPIntl, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.4px"
  heading:
    fontFamily: Arnika, serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-3.2px"
    textTransform: uppercase
  subheading:
    fontFamily: Arnika, serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.4px"
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 34px
  s9: 40px
  s10: 80px
components:
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-white}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
    height: 24px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    padding: 80px 0px 0px
---

## Overview

Marie Antoinette (`https://www.marie-antoinette.fr/`, page title "Agence de com, RP, d'influence et événementiel - Marie Antoinette", language fr-FR, measured 1280px wide and 6636px tall) is a French communications, public-relations, influence and events agency. Its home page is a vertical reel of client campaigns rather than a conventional landing page. A pill-less, square white plate at the top center holds the spaced-out agency wordmark and a hamburger icon. Each campaign then takes a full screen: a title in enormous uppercase serif letters centered on the screen, and below it a two-line caption with the campaign name and, in parentheses, the services rendered.

The visible sequence in the capture is WARNER BROS ("LE GRAND EXAMEN - RETOUR À POUDLARD", with a photograph of a Harry Potter novel behind the title, "( Evénementiel, Relations Publics, Influence )"), TRAINLINE ("TRAINLINE MUSIC FEST", same service tags), AMNESTY INTERNATIONAL (FRANCE) and KIDTOK SHOP ("( Stunt RP )"). Between photo-backed screens the background is plain black, so the titles appear as white lettering floating in the dark. The tone is minimal, theatrical and editorial; there are no buttons, cards, shadows or rounded corners in the measured home page. The measured body paragraph, in off-white, reads "Regards sur les coulisses, nouvelles de l'agence &..." which belongs to a news/behind-the-scenes block further down.

Language is French throughout ("Campagnes", "Relations Publics", "Evénementiel"), with the services vocabulary of an agency: events, public relations, influence and stunt PR. The structure is repetitive by design: title, caption, void, next title. The repetition makes the scroll feel like a showreel in which every client gets identical billing, and the variations come only from the image behind the title and from the length of the client name, which sometimes wraps onto two or three lines (as with "AMNESTY INTERNATIONAL (FRANCE)").

## Colors

The palette is two-tone plus one rarely used red.

- **Canvas `#000000`**: the page background, 18669 weight by area, by far the dominant surface.
- **Ink `#f3f4f2`** (also `page-body` and the `primary` role): a warm off-white used for most text (456 character-weight) and the footer text. The site's variable for it is `--color-off-white: #f3f4f2`. It is also the second background area measured (5120 weight), used on light sections.
- **Surface-white `#ffffff`**: titles over photographs (245 weight) and the white logo plate.
- **Accent-red `#aa0d1b`**: measured once as a border color (`--color-red`).

The shipped CSS also declares other palette variables that were not measured on the rendered home page: orange `#f50`, green `#05bb56` and yellow `#ffe600`, plus grey-text `#0000003d` and grey-border `#00000029`. They are listed only as declared values, not as documented usage. No dedicated call-to-action color exists in the measurement, so `primary` simply takes the off-white used for interactive and emphasized text. WordPress preset colors (such as `--wp--preset--color--vivid-purple`) also appear in the variable list; those are WordPress editor defaults, not brand colors.

## Typography

Two families are loaded, both at weight 400: **Arnika** (serif) for campaign titles and **SuisseBPIntl** (a Suisse sans) for captions, navigation and body text. Variables: `--font-arnika` and `--font-suisse`, with every Gutenberg heading and paragraph variable (`--font-h1-gutenberg` through `--font-h6-gutenberg`, `--font-paragraph-gutenberg`) pointing to SuisseBPIntl.

- **Heading** (Arnika 400, 80px / 72px, tracking -3.2px, uppercase): the client titles such as "WARNER BROS". In the mobile pass the same `h2` measured 40px / 36px with -1.6px tracking.
- **Subheading** (Arnika 400, 20px / 20px, -0.4px, uppercase): the campaign subtitles such as "LE GRAND EXAMEN - RETOUR À POUDLARD".
- **Display** (SuisseBPIntl 400, 20px / 16px, -0.4px, uppercase): the first heading element measured, a navigation-like label ("CAMPAGNES").
- **Body** (SuisseBPIntl 400, 20px / 24px, -0.4px).

Tracking is a constant -4% of the size on every role (-3.2px at 80px, -0.4px at 20px). Arnika and Suisse BP Intl are commercial fonts; their declared fallbacks are the generic `serif` and `sans-serif`.

## Layout

The page is a sequence of full-viewport blocks, center-aligned, each with one title and one caption. The wide grid is not visible: the content column is centered, with large black voids between campaigns. The header is a small centered plate rather than a full-width bar. The shipped CSS uses Tailwind size variables (`--text-xs` through `--text-8xl`, container widths `--container-xs` to `--container-6xl`) and custom spacers: `--spacer-xs` .75rem, `--spacer-s` 1.5rem, `--spacer-m` 2.5rem, `--spacer-l` 3rem, `--spacer-xl` 5rem, `--spacer-2xl` 6.25rem. The measured spacing steps are 4, 5, 6, 8, 12, 16, 24, 34, 40 and 80px, and the footer has an 80px top padding.

## Elevation & Depth

None. No box shadow was measured on any rendered element (the one recorded shadow value is entirely transparent), no borders beyond a single 1-weight white and a 1-weight red border, and no layering effects other than text over photography with a darkening treatment visible in the capture. Depth comes from scale contrast and the black void.

## Shapes

The extraction found no border radius: the radius frequency list is empty, so every rendered element computes 0px. The tokens declare `rounded: none: 0px`. The shipped CSS declares radius variables (`--radius-xs` .125rem, `--radius-lg` .5rem, `--radius-xl` .75rem, `--radius-2xl` 1rem) but nothing on the measured home page uses them. Buttons were not found, so no button shape is documented.

## Components

- **Header plate**: a square white block holding the wordmark and a three-line menu icon; the navigation panel opens from it and is white with black text (its measured clip-path starts fully collapsed).
- **Nav link**: SuisseBPIntl 20px uppercase, black on the white panel.
- **Campaign block**: Arnika title, SuisseBPIntl caption with the services in parentheses, optional full-bleed photo or video behind.
- **Text input**: off-white text, 24px tall, SuisseBPIntl 20px uppercase (measured, transparent background).
- **Footer**: black background, off-white text, 80px top padding.

## Design System Architecture

No public design system or brand guideline is available: the home page returns its content to a browser, and fetching the page with `curl` returned `403 Forbidden`, so only the headless-browser extraction was used. The shipped stylesheet reveals the de-facto system: a WordPress theme using Gutenberg block typography tokens (`--text-h1-gutenberg` 5rem down to `--text-h6-gutenberg` 1.5rem, `--text-paragraph-gutenberg` 1rem, `--text-paragraph-gutenberg-medium` 1.25rem, `--text-paragraph-gutenberg-xs` .875rem, matching `--leading-*` values) combined with a Tailwind theme (colors `--color-*`, fonts, container, spacing and radius scales). The extraction listed 164 root variables, including WordPress preset variables such as `--wp--preset--shadow--outlined`.

## Do's and Don'ts

Do:
- Keep the canvas pure black and the type off-white `#f3f4f2` or white.
- Set titles in Arnika uppercase at very large sizes with -4% tracking.
- Tag every campaign with its services in parentheses under the title.
- Let one campaign fill each screen.

Don't:
- Don't round corners; every measured corner is square.
- Don't add shadows, cards or filled buttons.
- Don't use the declared orange, green or yellow variables as UI colors on the home page; they were not measured in use.
- Don't set body text in the serif; Suisse BP Intl carries all non-title text.

## Responsive Behavior

Only the mobile font measurements were recorded: the client title (`h2`) shrinks from 80px / 72px to 40px / 36px (-3.2px to -1.6px tracking), and mobile font-size weights were led by 20px (438), 40px (158), 16px (145), 14px (143) and 12px (14). Mobile layout, menu behavior and breakpoints are not measured.

## Iteration Guide

1. Start from black `#000000` and off-white `#f3f4f2`.
2. Set a client title in Arnika 400 uppercase, 80px / 72px, -3.2px tracking, centered.
3. Add a two-line caption in SuisseBPIntl 20px (24px line height for body) with parenthesized services.
4. Keep every element square (`rounded: none: 0px`).
5. Place a small white plate with the wordmark at top center as the only persistent header.
6. Measure anything not listed (hover, focus, form states) before documenting it.
