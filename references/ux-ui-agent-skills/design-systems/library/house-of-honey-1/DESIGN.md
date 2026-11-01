---
version: alpha
name: House of Honey
category: "Architecture & Interiors"
description: "House of Honey (houseofhoney.com), a female-led interior design studio in South Pasadena, measured live: peach #edccbe and deep brown #331917 sections, hot pink #fc72c4 script wordmark, noeText serif uppercase display, neueHaasGrotesk body, square corners and a 32px Get in Touch button."
colors:
  canvas: "#331917"
  page-body: "#0e0e0e"
  ink: "#edccbe"
  primary: "#edccbe"
  on-primary: "#331917"
  surface-3: "#ffffff"
  ink-3: "#fc72c4"
  hairline: "#ffffff4d"
  primary-hover: "#f2adc0"
typography:
  display:
    fontFamily: noeText, "noeText Fallback"
    fontSize: 29.9102px
    fontWeight: 400
    lineHeight: 29.9102px
    letterSpacing: "-0.598204px"
    textTransform: uppercase
  display-mobile:
    fontFamily: noeText, "noeText Fallback"
    fontSize: 24.098px
    fontWeight: 400
    lineHeight: 24.098px
    letterSpacing: "-0.481959px"
    textTransform: uppercase
  heading:
    fontFamily: noeText, "noeText Fallback"
    fontSize: 41.7306px
    fontWeight: 400
    lineHeight: 41.7306px
    letterSpacing: "-0.834612px"
    textTransform: uppercase
  subheading:
    fontFamily: neueHaasGrotesk, "neueHaasGrotesk Fallback"
    fontSize: 17.4776px
    fontWeight: 400
    lineHeight: 22.7208px
  body:
    fontFamily: neueHaasGrotesk, "neueHaasGrotesk Fallback"
    fontSize: 19.4776px
    fontWeight: 400
    lineHeight: 25.3208px
  button:
    fontFamily: neueHaasGrotesk, "neueHaasGrotesk Fallback"
    fontSize: 15.4776px
    fontWeight: 400
    lineHeight: 20.1208px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20.96px
  s7: 24px
  s8: 42px
  s9: 72px
  s10: 80px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 4px 0px 8px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 32px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 12px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 8px
---

## Overview
House of Honey (https://www.houseofhoney.com/, title "House of Honey | Interior Design Studio", lang `en`) is the site of a female-led interior design collective whose address in the footer is 1518 Mission Street, South Pasadena, CA 91030 (coordinates 34.1477° N, 118.1443° W are printed beside "A STUDY IN EXPRESSION"). The first screen is a peach field (`#edccbe`) with a slim top bar (a small logo mark, Studio, Spaces, The Buzz, Dear Honey, Press Room at the left, and a "Get in Touch" button with an arrow at the right), a full-width wordmark "HOUSE of HONEY" in extra-heavy black-brown capitals with a delicate italic script "of", two taglines ("INTERIORS, OBJECTS & ATMOSPHERES" left, "DESIGNED WITH PLEASURE" right) and a full-bleed interior photograph of a bathroom with pink terrazzo and brass hardware.

The second section turns deep brown (`#331917`): a small "STUDIO" label, the statement "HOUSE OF HONEY IS A FEMALE COLLECTIVE OF INTERIOR DESIGNERS BORN OUT OF A DESIRE TO CREATE MEANINGFUL EXPERIENCES" in capitals, an oversized hot-pink calligraphic "House of Honey" that bleeds off both edges, and the line "WE HAVE A TASTE FOR THE UNEXPECTED AND A DEEP RESPECT FOR DETAIL". Next the page returns to peach for "PROJECTS / SPACES WITH STORY". The tone is warm, editorial and a little theatrical, with a bee illustration near the navigation.

## Colors
- **Canvas** `#331917` (deep brown): the dominant background by area (4476) and the footer; text on it is peach.
- **Peach / ink / primary** `#edccbe`: the other large background (3829) and the colour of text on the brown sections (561 characters). The "Get in Touch" button is filled with it, with brown text (`#331917`, 455 characters) on top.
- **Hot pink** `#fc72c4`: the script wordmark (82 characters in an oversize 493.796px display size) and the active progress line under the hero.
- **Translucent plum** `#68343080` (1011): an overlay tone measured as a background.
- **White** `#ffffff`, with `#ffffff4d` as the hairline colour.
- **Hover pink** `#f2adc0` is the measured hover fill token for the primary button; nav links measure a hover background of rgb(248, 139, 194).
- The tokens also record `#0e0e0e` as the page-body value.
The root variables include `--color-theme-bg-primary: #331917` and `--color-base-cream: #fff8ef`; the cream is declared but did not measure on a rendered element.

## Typography
Three families are loaded: "noeText" (a high-contrast serif, 324 characters) for headings, "neueHaasGrotesk" (692) for body, navigation and buttons, and "canora" (82), the calligraphic script used for the giant wordmark. Every measured weight is 400.

- **display**: noeText 29.9102px, line-height 29.9102px, letter-spacing -0.598204px, uppercase ("INTERIORS, OBJECTS & ATMOSPHERES").
- **display-mobile**: 24.098px, letter-spacing -0.481959px.
- **heading**: noeText 41.7306px, letter-spacing -0.834612px, uppercase (the studio statement).
- **subheading**: neueHaasGrotesk 17.4776px / 22.7208px.
- **body**: neueHaasGrotesk 19.4776px / 25.3208px (address and footer).
- **button**: neueHaasGrotesk 15.4776px / 20.1208px.

Letter-spacing on the serif is -0.02em at each size. The script wordmark is set at 493.796px on desktop and 254.041px on mobile. All three fonts are self-hosted and proprietary; no substitute was measured.

## Layout
Desktop pass: 1280px wide, 7297px tall. The page alternates full-width colour bands (peach, brown, peach) with full-bleed photographs. Content is centred on the bands, with small uppercase labels ("STUDIO", "PROJECTS") above each headline. The header is a slim 32px-tall row; the footer is 946px tall with 8px padding and repeats the nav links and Get in Touch. Spacing tokens run 2, 6, 8, 12, 16, 20.96, 24, 42, 72 and 80px.

## Elevation & Depth
No box shadows were measured. Depth is created by photographic scale, the overlap of the giant pink script across the brown band, the translucent plum layer and the contrast between peach and brown surfaces.

## Shapes
Every element measures 0px radius except one pill (`9999px`, a single element). Buttons and nav links are sharp rectangles. The curves come from the calligraphic script and the rounded forms in the interior photography, which uses pink terrazzo and brass hardware.

## Components
- **button-primary** ("Get in Touch"): peach `#edccbe` fill, brown `#331917` neueHaasGrotesk 15.4776px text, 0px radius, 32px tall, padding 0 4px 0 8px, with an arrow icon at the right; the hover fill token is `#f2adc0`.
- **nav-link**: 32px tall text links with padding 0 12px; hover fills them with pink.
- **link**: brown text at 17.4776px.
- **statement text**: uppercase noeText on brown.
- **footer**: `#331917` background, peach text, 8px padding, nav repeated.
- **bee illustration**: a small pink and black bee sits by the nav.
No form fields were detected.

## Design System Architecture
No public design system or brand guideline was found; the "Press Room" and "Spaces" pages on the site are content pages (the home page links to /press and /spaces/a-study-in-expression). The shipped CSS is a Tailwind v4 build with 71 root variables, including a semantic scale of type tokens (`--text-title-20--font-weight`, `--text-title-100--font-weight`, `--text-subtitle-30-normal--letter-spacing: -.02em`), the font variable `--font-noe-text`, the colour variables `--color-theme-bg-primary: #331917` and `--color-base-cream: #fff8ef`, and Tailwind ring and shadow plumbing. The scale therefore couples size, weight and letter spacing per named style.

## Do's and Don'ts
- Do alternate peach `#edccbe` and deep brown `#331917` sections with full-bleed photography.
- Do set headings in uppercase noeText with negative tracking (-0.02em) and body in neueHaasGrotesk.
- Do reserve hot pink `#fc72c4` for the script wordmark and small progress accents.
- Do keep corners square; use one fully rounded pill only where it was measured.
- Don't add shadows or gradients; none were measured.
- Don't set body copy in the script face.
- Don't use bold weights; every measured weight is 400.

## Responsive Behavior
Mobile pass at 390px: the first heading is noeText 24.098px (versus 29.9102px), the second heading 24.2939px (versus 41.7306px), the script wordmark 254.041px (versus 493.796px), and the "Privacy Policy" button measured 97px wide by 42px tall at 14.0245px. Common mobile body sizes are 18.0245px, 16.0245px and 14.0245px. The nav block was not detected at this width; other layout changes are not measured.

## Iteration Guide
1. Open with a `#edccbe` band, a full-width heavy wordmark in `#331917` and two uppercase taglines.
2. Add a full-bleed interior photograph, then a `#331917` band with an uppercase serif statement.
3. Overlay a huge `#fc72c4` script wordmark that bleeds off the edges.
4. Use a 32px peach button with brown text and an arrow for the single call to action.
5. Keep all corners square and set every weight to 400.

## Notes for Rebuilding
Three details separate this site from a generic studio template. First, the wordmark is a typographic collision rather than a logo lock-up: heavy sans capitals for "HOUSE" and "HONEY" with a thin italic "of" between them, all in `#331917` on peach, filling the viewport width. Second, the hot-pink script appears only as an enormous background gesture at 493.796px on desktop, where it is cropped by the viewport and passes behind the uppercase serif statement; it is never used for readable body text. Third, the whole interface is quiet: 32px controls, weight 400 everywhere and 15.4776px button labels, so the photographs of rooms and the colour bands carry the personality.

The hover behaviour measured on the "Studio" link changes only the background, from peach `#edccbe` to rgb(248, 139, 194), while text and border stay brown. The footer repeats the navigation and the Get in Touch action on the brown band, so the same two colours appear in both polarities across the page.
The footer address block is set in the 19.4776px body style, so it reads at the same size as other running text.
