---
version: alpha
name: Depo Luxe
category: "Culture & Events"
description: "Depo Luxe, a film production company for luxury brands: a pure black #000000 canvas with white #ffffff EB Garamond type (36px capitalized titles, 13px and 16px serif labels at slightly negative tracking), roman-numeral work index, 0px corners and video imagery as the only color."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  grey: "#999999"
  accent-red: "#ff4f23"
  accent-blue: "#0000fe"
  focus: "#ff00ff"
  success: "#4dc247"
typography:
  display:
    fontFamily: "\"EB Garamond\", serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-0.36px"
    textTransform: capitalize
  body:
    fontFamily: "\"EB Garamond\", serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
    letterSpacing: "-0.13px"
  link:
    fontFamily: "\"EB Garamond\", serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.16px"
rounded:
  none: 0px
spacing:
  s1: 21.33px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 21.3331px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 0px 11.999px
---

## Overview

Depo Luxe describes itself in one line, shown under the logo and in the footer: "A strategic and cinematic approach to contemporary luxury." The measured home page (title "Depo Luxe", scroll height 800px, that is, a single fixed screen) is a full-viewport portfolio index for a film production company. Behind everything sits full-bleed video; on top, a header with "Depo" at the left and "Luxe" at the right, the italic tagline, and a five-item navigation (Featured, Archive, Talent, Approach, Contact). The work list is a cascade of thumbnails, each preceded by a roman numeral and followed by the director or artist and the brand: I "Número France" (Gus and Lo), II "Romeo" (Turbo, Anitta), III "Blue Voyage" (Rafael Cetin, Koton), IV "Holiday" (Fabio de Frel, Kenzo), V "Spring / Summer" (Jonas Åkerlund, Alexander McQueen), VI "Most Wanted" (Christian Larson, Azzaro) and VII "Precioso" (Daniel M. Cox, Precioso). The list repeats to XIV, and a full-screen overlay shows the title of the hovered or active work ("Romeo", set at 36px).

The design is almost entirely typographic restraint on black. One serif typeface, EB Garamond, appears in only three sizes, 13px, 16px and 36px, every character is white `#ffffff`, and nothing has a fill, a border, a shadow or a radius. In the capture, the page background is a dark video with a warm brown glow at the right, thumbnails are rectangular stills and clips (blue fabric, a figure with white angel wings, a woman on a seaside balcony, portraits) scattered diagonally down the left side, and each numeral and name floats beside its thumbnail.

The footer states "All work © DEPO LUXE (and respective owners), 2026" and links Instagram, Vimeo and Linkedin plus Information Security Policy, Privacy Policy, Legal Notice and Cookies Policy. A cookie consent notice (with Settings, Cancel and Accept) also exists in the page text; it is a consent layer and is not documented as brand UI.

## Colors

The measured colors are only two.

- **Canvas `#000000`**: the body background (also declared as `--black: #000` and `--primary: var(--black)`).
- **Ink `#ffffff`**: all 152 measured text characters (declared as `--white` and `--secondary`). **Primary `#ffffff`** is the same value: there is no filled button, so the action color is white type, with an underline on the active navigation item.
- The only other measured color is a translucent white `#ffffff66` background area (10 weight), a small element.

The root also declares a set of utility colors that were not measured on visible elements: `--grey: #999`, `--red: #ff4f23`, `--blue: #0000fe` (and `--yellow: #0000fe`, which holds the same blue), `--assertive` and `--focus` both `#f0f` (magenta), `--color-sucess: #4dc247` and `--color-error: red`. They are recorded as declared tokens: grey, accent-red, accent-blue, focus and success. The page is dark only; no light theme was measured.

## Typography

One family, **EB Garamond**, in 400 normal and 400 italic; the declared variables are `--font-serif` and `--font-serif-italic`. The root also sets `--font-size-base: 16px`, `--font-size-s: 13px`, `--font-size-l: 36px`, a fluid `--font-size: clamp(var(--min-font-size), 1.1111vw * var(--zoom), var(--max-font-size))` with `--min-font-size: 12px` and `--max-font-size: 48px`, `--line-height: 1.375` and `--letter-spacing: 0`.

| Role | Size / line height | Tracking | Case |
|---|---|---|---|
| display (work title overlay) | 36px / 36px | -0.36px | capitalize |
| link (work entries) | 16px / 16px | -0.16px | as written |
| body and navigation | 13px / 13px | -0.13px | as written |

Tracking is -1% of the size at every step, and measured line heights equal the font size (solid), even though the declared base line height is 1.375. The most-read size is 13px (101 characters), then 16px (44) and 36px (7). Roman numerals, directors and brands are set in the same face and size as the labels, so hierarchy comes from position and the occasional italic tagline.

## Layout

The page is one 1280px by 800px screen with no scroll (scroll height 800px). The header has padding 21.3331px at top and bottom and spans the width; its items sit in a central column. The work list uses the full viewport: each entry is an absolutely placed thumbnail with a numeral and name, so the cascade runs diagonally. The root declares a grid: `--cols: 12`, `--gap: var(--padding-s)`, and a column width formula `--col-size: calc((100vw - var(--padding-xxs)*2 - var(--gap)*(var(--cols) - 1))/var(--cols))`. Padding steps are declared in rem: `--padding-xs: 0.75rem`, `--padding-s: 0.75rem`, `--padding-m: 1.5rem`, `--padding-l: 3rem`, `--padding-xl: 8rem`; `--header-height: 7.5rem`, `--scrollbar-height: 2.5rem`. The only measured padding is 21.3331px (35 weight), which matches `s1` at 21.33px.

## Elevation & Depth

None. No shadow, no border color and no translucent panel was measured on text elements. Depth is the video itself and the stacking of thumbnails over it. Each entry's overlay link starts at opacity 0 and becomes visible on hover (the hover probe lists the "Romeo" link with opacity 0 before hover).

## Shapes

All measured corners are 0px. The thumbnails are rectangles of varying size and aspect ratio. The token is `rounded.none: 0px`; no other radius exists in the stylesheet.

## Components

- **Navigation (`nav`, `nav-link`)**: five links in 13px EB Garamond, white; each has bottom padding 11.999px, and the active item ("Featured") is underlined in the capture. The header is 1280px wide with padding 21.3331px 0px.
- **Logo lockup**: "Depo" at the left and "Luxe" at the right of the header, with the italic tagline centered below.
- **Work entry (`link`)**: a full-viewport link in 16px white serif containing a thumbnail, a roman numeral, a director name and a brand; on hover a title overlay in 36px capitalized serif appears.
- **Footer**: the tagline, copyright line, three social links (Instagram, Vimeo, Linkedin) and four legal links.
- **Cookie notice**: excluded from the system.

## Design System Architecture

No public design system, brand guideline or press kit is published for this site: its navigation lists only Featured, Archive, Talent, Approach and Contact, and the footer lists social and legal links. The page opened for research was https://depoluxe.xyz/ (rendered). The de-facto system is the site's `:root` custom-property set: colors (`--black`, `--white`, `--grey`, `--red`, `--blue`), semantic colors (`--primary`, `--secondary`, `--focus`, `--assertive`), fonts, a 12-column grid, rem-based padding steps, and a large library of named easing curves (`--ease-in-out-quint: cubic-bezier(0.86,0,0.07,1)`, `--ease-out-expo: cubic-bezier(0.19,1,0.22,1)`, `--ease-in-out-circ`, `--ease-out-quart` and others), which indicates motion is a core part of the interface. A `--zoom: 1` variable scales the fluid font size.

## Do's and Don'ts

Do:
- Use pure black `#000000` and white `#ffffff` only; let video and film stills supply color.
- Set everything in EB Garamond 400, with -1% letter-spacing and solid line height.
- Use roman numerals, director and brand names as the list syntax.
- Keep corners square and add no shadows, borders or fills.
- Underline the active navigation item and reveal titles on hover.

Don't:
- Do not use bold weights or other typefaces.
- Do not add buttons or cards; none exist.
- Do not use the declared red, blue or magenta as brand fills; they were not seen on visible elements.
- Do not reproduce the cookie notice as part of the style.

## Responsive Behavior

A fresh 390px mobile pass was recorded: the 36px title keeps 36px (390px by 844px overlay, padding 12px), the navigation text stays 13px, and the header measured padding 24px 12px (21.3331px 0px on desktop). Mobile character sizes were 13px (145) and 36px (7). The thumbnail cascade, navigation arrangement and any breakpoints were not measured.

## Iteration Guide

1. Make the page `#000000` with `#ffffff` text and load EB Garamond (400 and 400 italic).
2. Set 13px, 16px and 36px sizes with -1% tracking and solid line heights.
3. Build the header: "Depo" left, "Luxe" right, italic tagline, five links with an underline on the active one.
4. Place thumbnails in a diagonal cascade with roman numerals and director-brand captions.
5. Add a hover title overlay at 36px capitalized.
6. Test mobile at 390px with 12px page padding.
