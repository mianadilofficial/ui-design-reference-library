---
version: alpha
name: DaVincii
category: "Tech & AI"
description: "DaVincii, a self-described living intelligence system: a charcoal #1d1d1d canvas with light-grey #c3c3c3 type, a custom DaVinci serif at weight 300 (56px, -3.92px tracking) with italic emphasis, Kessler 17.7778px body, Inter 500 labels, circular 50% shapes and sand-toned stone textures."
colors:
  canvas: "#1d1d1d"
  ink: "#c3c3c3"
  primary: "#c3c3c3"
  surface-raised: "#323232"
  sand: "#918b7e"
  sand-light: "#bab9b8"
  graphite: "#121212"
  carbon: "#242424"
  logo: "#d9d9d9"
  error: "#ff2525"
typography:
  display:
    fontFamily: DaVinci, "DaVinci fallback", sans-serif
    fontSize: 56px
    fontWeight: 300
    lineHeight: 56px
    letterSpacing: "-3.92px"
  display-mobile:
    fontFamily: DaVinci, "DaVinci fallback", sans-serif
    fontSize: 33.28px
    fontWeight: 300
    lineHeight: 33.28px
    letterSpacing: "-2.3296px"
  subheading:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 14.2222px
    fontWeight: 500
    lineHeight: 17.0667px
    letterSpacing: "-0.711111px"
  body:
    fontFamily: Kessler, "Kessler fallback", sans-serif
    fontSize: 17.7778px
    fontWeight: 400
    lineHeight: 18.6667px
  body-mobile:
    fontFamily: Kessler, "Kessler fallback", sans-serif
    fontSize: 16.64px
    fontWeight: 400
    lineHeight: 17.472px
  link:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: "-0.8px"
  label:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 11.5556px
    fontWeight: 500
    lineHeight: 13.8667px
    letterSpacing: "-0.577778px"
    textTransform: uppercase
rounded:
  circle: 50%
spacing:
  s1: 1.76px
  s2: 1.78px
  s3: 3.52px
  s4: 5.33px
  s5: 6.22px
  s6: 7.11px
  s7: 8.44px
  s8: 11.56px
  s9: 14.22px
  s10: 21.33px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.circle}"
  footer:
    textColor: "{colors.ink}"
    padding: 288.889px 21.3333px 21.3333px
---

## Overview

DaVincii presents itself as "a living intelligence system that continuously senses, interprets, and adapts to real-world signals, transforming complexity into clear, actionable decisions." The measured home page (title "Homepage", 19121px tall at the 1280px viewport) is a cinematic dark site: a charcoal canvas `#1d1d1d`, light-grey type `#c3c3c3`, enormous circular forms, and a sparse ring of copy. The hero headline reads "Where Intelligence Becomes Living", with the word "Intelligence" in italic, and the rest of the page keeps that move: one or two italic words inside each serif headline ("Signal Domains", "From Vision to Reality: Case Studies", "Enter the System").

The art direction is Renaissance-workshop meets machine intelligence. In the capture, the hero is a large dark circle on a textured, scratched-plaster ground with a thin rectangular frame around the first viewport; an engraved curved wordmark sits at top center; a line drawing of a helical flying machine appears inside a "Signal Domains" disc; and a lens-shaped eye of sand-colored plaster surrounds that disc. Text runs along curved paths and rotates with the circle. The interface chrome is tiny and quiet: "MENU →" at the top left, "[ PARTNER ]" at the top right, the legal line "DAVINCII ©2026 ALL RIGHTS RESERVED." at the bottom left and "SUPPORT" at the bottom right, all at 11.5556px uppercase.

Copy is short and abstract: "DaVincii exists to bring order to complexity", sections called "Signal Domains", "Cipher" and "Applied Intelligence in Action", case studies labeled "Case 01" to "Case 08", and the closing line "Access follows alignment. Submit your details to initiate connection." The voice is declarative and quiet, with no promotional exclamation, and the calls to action are underlined text links: "Join DAVINCII", "Explore More", "Request Access".

## Colors

The measured palette is almost monochrome.

- **Canvas `#1d1d1d`**: the body background and by far the largest measured background area. It is declared as `--c-dark`.
- **Ink `#c3c3c3`**: the main text color (declared as `--c-light-grey`). It covers the headings, body copy and labels. `#1d1d1d` also measures as the text color of 1370 characters; where on the page it is used was not identified.
- **Primary `#c3c3c3`**: no filled button was detected, so the action color is the same light grey, used on underlined text links such as "Join DAVINCII".
- **surface-raised `#323232`**: the second measured background (declared as `--c-grey`); the lighter plates that sit above the canvas.
- **Declared palette variables**: `--c-sand: #918b7e`, `--c-sand-light: #bab9b8`, `--c-graphite: #121212`, `--c-carbon: #242424`, `--c-logo: #d9d9d9` and `--c-error: #ff2525`. The capture shows a sand-colored plaster shape, which corresponds in hue to the sand family, but the exact value of that artwork area was not measured; these six values are recorded as declared in `:root`, not as measured fills.

There are also declared `--c-pure-black: #000`, `--c-pure-white: #fff`, `--c-grey-muted: #5f5f5f`, `--c-dark-grey: #252525`, `--c-charcoal: #222` and several `--c-sand-*` shades, which were not measured on visible elements. `--swiper-theme-color: #007aff` belongs to the carousel library and is not part of the brand. The site has a single dark theme; a light theme was not measured.

## Typography

Three families, all declared with `@font-face` and a matching `fallback` face: **DaVinci** (weights 300 normal and 400 italic), **Kessler** (400) and **Inter** (500). The `:root` names them `--font-da-vinci`, `--font-kessler` and `--font-inter`.

| Role | Font | Size / line height | Weight | Tracking |
|---|---|---|---|---|
| display (h1, h2) | DaVinci | 56px / 56px | 300 | -3.92px |
| display-mobile | DaVinci | 33.28px / 33.28px | 300 | -2.3296px |
| body | Kessler | 17.7778px / 18.6667px | 400 | normal |
| body-mobile | Kessler | 16.64px / 17.472px | 400 | normal |
| subheading (h3 "Case 01") | Inter | 14.2222px / 17.0667px | 500 | -0.711111px |
| link | Inter | 16px / 16px | 500 | -0.8px |
| label (nav, footer) | Inter | 11.5556px / 13.8667px | 500 uppercase | -0.577778px |

The display line height equals the font size (56px over 56px), so headlines are set solid. Tracking is proportional: DaVinci runs at -7% of the size (3.92px of 56px), Inter at -5% (0.8px of 16px, 0.711111px of 14.2222px, 0.577778px of 11.5556px), and Kessler is untracked. The page also measures larger DaVinci-range sizes, 118.222px and 180.444px, plus 26.6667px and 38.2222px, each with the same -7% tracking (for example 118.222px at -8.27556px). Italic is used for emphasis words inside serif headlines. Body copy in Kessler is centered in the capture and its line height is only about 1.05 times its size, which makes paragraphs read as dense blocks.

## Layout

The page is a vertical sequence of full-viewport chapters, each built around a circle or ring rather than a grid. In the hero, a circle roughly as tall as the viewport holds the centered headline, a "Join DAVINCII" link, and a paragraph; the paragraph and headline are centered on the horizontal axis. Section two repeats this with a larger circle whose rim carries text on a curve. The third chapter places a disc inside an eye-shaped band; the capture shows the disc and its copy rotated slightly, and one measured card carries a rotation transform.

Spacing steps measured on the page are 1.76px, 1.78px, 3.52px, 5.33px, 6.22px, 7.11px, 8.44px, 11.56px, 14.22px and 21.33px; the frequent gaps are 7.11px and 14.2222px and the common padding is 21.3333px. The footer measures 1280px wide and 525px tall with padding 288.889px 21.3333px 21.3333px and a background image (`footer-bg.webp`). The `:root` declares an offset scale in rem (`--offset-8` through `--offset-256`), `--padding: 1.5rem`, and `--footer-gap: 11.6875rem`. Z-index layers are named in the stylesheet: `--z-bg`, `--z-default`, `--z-common`, `--z-texture`, `--z-header`, `--z-modal`, `--z-cursor` and `--z-preloader`, which shows a texture layer, a custom cursor (the page text includes the cursor label "Drag") and a preloader.

## Elevation & Depth

Depth comes from texture and lighting in the artwork, not from CSS shadows. The shadow frequency list contains a single entry, an inset double ring, `rgb(29, 29, 29) 0px 0px 0px 8.44444px inset, rgb(195, 195, 195) 0px 0px 0px 9.33333px inset`: an inner dark band and a light outer line, the same two colors as canvas and ink. There are no drop shadows on measured elements. The capture shows a soft light falling on the top of the hero circle, scratched plaster, and a thin outline frame around the first viewport. Layers are separated by the named z-index variables, not by elevation tokens.

## Shapes

The shape language is the circle. All 15 measured border-radius uses are `50%`, applied to square elements so they render as perfect circles (the measured cards are 698px by 698px and 686px by 686px with the canvas fill). The token is `rounded.circle: 50%`. No other radius was measured on visible elements; the stylesheet also lists 1px, 10px, 30px and 50px, which were not seen on measured nodes. Frames and rules elsewhere are thin straight lines (the first viewport has a rectangular outline), and the eye-shaped plaster area is an artwork element.

## Components

- **Link (`link`)**: Inter 16px weight 500, line height 16px, tracking -0.8px, color `#c3c3c3`, no padding. The measured instance is "Join DAVINCII" (89px wide, 16px high); the capture shows it underlined. "Explore More" and "Request Access" are the same type of element.
- **Circle card (`card`)**: a div with a `#1d1d1d` fill and `50%` radius, measured at 698px and 686px square; one measured card carries a rotation transform.
- **Footer (`footer`)**: `#c3c3c3` text on a background image, 11.5556px uppercase Inter, with HOME, PLATFORM, ESSENCE, PORTFOLIO, CONTACT, PRIVACY POLICY and DISCLAIMER in a row, plus FAQ, social links (X, Instagram, Telegram, Discord, YouTube) and a whitepaper block with a QR code.
- **Menu and partner controls**: small bracketed or arrowed labels, "MENU →" and "[ PARTNER ]", in the 11.5556px label style. Navigation items inside the menu are HOME, PLATFORM, ESSENCE, PORTFOLIO and CONTACT.
- **Case labels**: Inter 14.2222px "Case 01" to "Case 08" paired with project names, with "Prev", "Next" and "All Cases" controls.

The extractor detected no filled button, input or navigation bar role.

## Design System Architecture

No public design system, brand guideline or press kit is published for this site. The page opened for research was https://davincii.com/. It links a GitBook whitepaper ("Davincii WHITEPAPER", described as technology details) and an unlabeled footer link to `thefirstthelast.agency`; the whitepaper was not opened, and the page does not say what the agency link represents, so neither is used as a design source.

The de-facto system is the site's own CSS custom properties in `:root`, which are well organized. Colors are named by material: `--c-dark`, `--c-grey`, `--c-light-grey`, `--c-graphite`, `--c-carbon`, `--c-charcoal`, `--c-sand` with `-light`, `-dark`, `-muted`, `-deep` variants, and RGB triplets such as `--c-dark-rgb: 29,29,29`. Spacing is `--offset-8` to `--offset-256` plus `--padding`. Motion is `--default-duration: .4s`, `--default-ease: cubic-bezier(.24,1,.36,1)` and `--ease-out-quint: cubic-bezier(.22,1,.36,1)`, combined as `--transition`. Fonts are `--font-da-vinci`, `--font-kessler`, `--font-inter`. The viewport variables `--viewport-width: 1440` and `--viewport-height: 800` are declared as design reference dimensions; what reads them was not measured.

## Do's and Don'ts

Do:
- Keep the canvas `#1d1d1d` and the text `#c3c3c3`; let the artwork carry warmth through sand tones.
- Set headlines in DaVinci 300 with -7% tracking and solid line height, and italicize one or two words per headline.
- Use Kessler for paragraphs and Inter 500 for labels, links and numbers.
- Build chapters from circles (`50%` radius on square boxes) and thin outlines.
- Present actions as underlined text links, not filled buttons.
- Keep chrome tiny: 11.5556px uppercase labels in the corners.

Don't:
- Do not add drop shadows or rounded rectangles; only the circle radius and one inset ring were measured.
- Do not introduce bright accent colors; `#ff2525` is declared only as an error color.
- Do not use bold weights; measured weights are 300, 400 and 500 only.
- Do not use the carousel library's blue `#007aff` as a brand color.
- Do not reproduce the "Drag" cursor label or the preloader as a brand control.

## Responsive Behavior

A fresh 390px mobile pass was recorded. Measured: the h1 and h2 are 33.28px with a 33.28px line height and -2.3296px tracking (token `display-mobile`); body is 16.64px with a 17.472px line height (token `body-mobile`). The most-read mobile sizes were 16.64px (2654 characters), 33.28px, 66.56px, 18.72px, 29.12px, 13.52px, 24.96px and 55.12px. On mobile the h1 block measured 302px wide and the h2 390px wide.

The mobile pass found no navigation role and no filled call-to-action. How the circles are resized or cropped, how the menu is presented, and where breakpoints fall were not measured.

## Iteration Guide

1. Start with `#1d1d1d` and `#c3c3c3` only; add `#323232` for raised plates.
2. Load DaVinci (300 and 400 italic), Kessler 400 and Inter 500, each with a metric-matched fallback face as the site does.
3. Build the type ladder with the measured tracking: 56px at -3.92px, 17.7778px body untracked, 16px links at -0.8px, 11.5556px uppercase labels.
4. Compose each chapter around a 50%-radius circle; test rotation on the third-chapter disc.
5. Add sand-toned imagery from the declared `--c-sand` family, and measure the actual fill before copying it into a component.
6. For mobile, use 33.28px headlines and 16.64px body; leave everything else unmeasured until recorded.
