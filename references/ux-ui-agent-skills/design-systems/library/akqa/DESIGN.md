---
version: alpha
name: AKQA
category: "Agencies & Studios"
description: "AKQA (akqa.com), frontier design and AI agency: black on white with seasonMix 97.36px uppercase display, seasonSerif 44px statements, gradient-clipped link text, translucent pill controls, one 0.05 shadow, Tailwind token system."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#000000"
  surface-3: "#191919"
  ink-2: "#555555"
  ink-3: "#e9e9e9"
  ink-5: "#adadad"
  ink-6: "#d9d9d9"
  hairline: "#00000029"
  button-secondary-bg: "#ffffff0a"
typography:
  display:
    fontFamily: seasonSans, "seasonSans Fallback", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  display-mobile:
    fontFamily: seasonSerif, "seasonSerif Fallback", serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18px
  heading:
    fontFamily: seasonMix, "seasonMix Fallback", serif
    fontSize: 97.3563px
    fontWeight: 400
    lineHeight: 84.9655px
    letterSpacing: "-3px"
    textTransform: uppercase
  subheading:
    fontFamily: seasonSerif, "seasonSerif Fallback", serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 34px
  body:
    fontFamily: seasonSerif, "seasonSerif Fallback", serif
    fontSize: 44px
    fontWeight: 400
    lineHeight: 48px
  button:
    fontFamily: seasonSerif, "seasonSerif Fallback", serif
    fontSize: 44px
    fontWeight: 420
    lineHeight: 48px
  nav:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
    letterSpacing: "-0.325px"
  input:
    fontFamily: seasonSans, "seasonSans Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 1px
  sm: 8px
  md: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 4px 0px
    height: 62px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink-5}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 6px 14px
    height: 34px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink-5}"
    rounded: "{rounded.none}"
    padding: 16px
  nav-link:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink-5}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 6px 14px
  text-input:
    textColor: "{colors.ink-3}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 24px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# AKQA

## Overview
AKQA (akqa.com, titled "AKQA | Frontier Agency for Design, Innovation and AI") calls itself "THE FRONTIER AGENCY", working "at the edge of imagination and technology". The measured page is 7,379px tall at 1280px and is almost entirely black on white. The hero is two lines of enormous uppercase light type, "IMAGINE WHAT'S NEXT" and "MAKE WHAT MATTERS", which wrap a full-width cinematic video frame (a car on a presentation stage in front of an audience) with a dark, rounded floating pill reading "Show me all Nike projects" and a menu glyph. Below, case studies appear as short sentences in a serif face with a muted gray client name and a down-right arrow ("A world first. A new category of writing instrument. Introducing Digital Paper for Montblanc ↘", "A renewed app to challenge corporate giants. UPS ↘"), each placed beside or above a single image, staggered left and right on a loose two-column grid. The first element in the page text is an "Ask AKQA" input with a "No suggestions available" state.

Imagery is editorial photography and video stills with one illustrated piece (a green planet with a snake inside a circular text ring on pale cream). The copy is bold, aspirational and punchy, with frontier metaphors and short fragments ("We unite the 'What if' with the 'How to'."). Other headings on the page: "THE FRONTIER AGENCY", "Latest & Greatest", "At the frontier of gaming", "What's your next frontier?". Navigation entries listed are Work, News, Perspectives, AKQA Companies and Sustainability. Clients named: Montblanc, UPS, Nestlé (Goodnes), Lexus, Google, Bethesda Softworks, Netflix, Proximus and Nike.

## Colors
The visible palette is monochrome. Painted area: white #ffffff (7,564), black #000000 (1,108), #00000047 (1,092, a translucent black layer), #191919 (789), #e9e9e9 (492), #555555 (29), #000000eb (18), #ffffff0a (12), #00000029 (3). Text: #000000 (1,029 characters), #555555 (206, muted client names), #e9e9e9 (85), #ffffff (35), #adadad (30), #d9d9d9 (25).
- `{colors.canvas}` #ffffff, `{colors.ink}` #000000, `{colors.primary}` #000000; `{colors.surface-3}` #191919 for dark blocks, `{colors.ink-2}` #555555, `{colors.ink-3}` #e9e9e9, `{colors.ink-5}` #adadad, `{colors.ink-6}` #d9d9d9, `{colors.hairline}` #00000029, `{colors.button-secondary-bg}` #ffffff0a (the translucent pill fill).
- The measured primary call to action is a text link ("Learn more ↘", 44px) whose text is clipped to a horizontal gradient (`background-clip: text`) running transparent, copper rgb(201, 144, 103), cream rgb(216, 219, 181), teal rgb(118, 183, 179), navy rgba(33, 59, 107, 0.85), transparent; that is why `{colors.on-primary}` equals black in the tokens.
- The shipped CSS publishes a 400-variable token set with many more colors that are not used by the visible chrome: primary brand 1 is the gray ramp (`primary-brand-1-100` #fff through `-900` #000, `-800` #191919, `-600` #797979), primary brand 2 is a green ramp (`-500` #17dc62, `-700` #08a041, `-900` #174221), secondary brand 1 is pink-magenta (`-500` #ca249c), secondary brand 2 is blue (`-500` #1370f1, `-900` #132c59), plus supporting ramps for blue, purple, turquoise, red, orange, yellow, green and pink, and functional fills for error, warning and success. Brand elevation tints are `#132c5917`, `#132c590d` and `#132c591a`.

## Typography
A three-face custom family: **seasonMix** (display, headings), **seasonSerif** (body and statements) and **seasonSans** (small UI), each with a metric-matched fallback, plus the system sans stack for navigation. Published font roles: `--font-h1` seasonMix; `--font-h2-alt` and `--font-h3-alt` seasonSans; `--font-paragraph-lg` seasonSerif.
- `heading` seasonMix 97.3563px / 400 / 84.9655px, letter-spacing -3px, uppercase: the hero lines (a 110px size is also measured on 25 characters).
- `body` seasonSerif 44px / 400 / 48px, and `button` the same at weight 420: the case-study sentences and links.
- `subheading` seasonSerif 28px / 400 / 34px.
- `display` seasonSans 14px / 400 / 21px: the "Show me all Nike projects" pill text, in #d9d9d9.
- `display-mobile` seasonSerif 16px / 400 / 18px, as measured on the 390px pass.
- `input` seasonSans 16px / 400 / 24px.
- `nav` system sans 13px / 400 / 19.5px, letter-spacing -0.325px.
Sizes by characters: 20px (388), 44px (362), 28px (299), 14px (132), 16px (116), 97.3563px (58), 13px (30), 110px (25). Weight is 400 for nearly all text (1,399 characters), 420 for 11.

## Layout
The shipped tokens define a flexible spacing scale (`--spacing-flex-sm` 8px, `-base` 16px, `-md` 32px, `-4xl` 128px). Measured gaps: 8px (20), 32px (8), 4px (8), 16px (6), 48px (3), 80px (2), 40px (2). Pages are single-column with edge-to-edge hero lines and a staggered two-column editorial grid; images vary in width and are offset left and right, leaving large white areas between items.

## Elevation & Depth
One shadow: `rgba(0, 0, 0, 0.05) 0px 8px 40px 0px`, a very diffuse lift. A translucent black layer (#00000047) and a darker #000000eb layer are measured as backgrounds. Brand elevation colors are published as navy-tinted transparencies (#132c5903 to #132c591a) for use as shadow tints.

## Shapes
Radii are 3.35544e+07px (8 elements, a fully rounded pill, `{rounded.pill}`), 8px (5, `{rounded.sm}`), 1px (2, `{rounded.xs}`) and 100px (1, `{rounded.md}`). The published radius tokens include `--radius-sm` 8px, `--radius-md` 32px, `--radius-lg` 48px, `--radius-flex-xl` 64px, `--radius-flex-4xl` 128px, `--components-button-radius-tr` 128px, input and accordion 32px, tabs 8px.

## Components
- **button-primary**: the gradient-clipped text link, 44px seasonSerif weight 420, no radius, padding 4px 0px, height 62px.
- **button-secondary / nav-link**: translucent white fill #ffffff0a with #adadad text, 13px system sans, pill radius, padding 6px 14px, height 34px.
- **floating pill** ("Show me all Nike projects"): dark translucent fill, 14px seasonSans #d9d9d9 text, rounded ends, with a menu icon.
- **text-input** ("Ask AKQA"): seasonSans 16px, #e9e9e9 text, height 24px, no radius.
- **link**: black seasonSerif 28px with the arrow glyph.
- **footer**: black fill, white text.
No hover states were recorded.

## Design System Architecture
No public design system or brand guideline is linked from the home page. The shipped CSS is a Tailwind-based token system: variables like `--tw-inset-shadow-alpha`, `--blur-lg: 128px`, and semantic groups `--color-fill-*` (primary, secondary, functional, grey-neutral, components such as `--color-fill-components-navigation-default: #ffffffa3` and `--color-fill-components-tag-opacity: #00000014`), `--color-*-brand-*` ramps, `--components-*` radius tokens, `--layout-radius-level-0-*` 64px, `--spacing-flex-*`, and typography tokens (`--font-h1`, `--font-weight-h5` 400, `--leading-code` 24px). Sources opened: https://www.akqa.com/ (page text and shipped CSS).

## Do's and Don'ts
- Do keep the interface black and white and let photography and video carry color.
- Do set display lines in seasonMix uppercase with -3px tracking.
- Do write case studies as one serif sentence plus a gray client name and a ↘ arrow.
- Do use fully rounded translucent pills for floating controls.
- Don't introduce brand-ramp colors (pink, green, blue) into chrome; they are published but not measured on visible elements.
- Don't add heavy shadows; the one measured shadow is 0.05 alpha.

## Responsive Behavior
Measured at 390px: the first statement is seasonSerif 16px / 400 / 18px (against 44px on desktop), and the "Learn more ↘" link keeps the gradient-clipped text treatment. Layout, breakpoints and navigation on mobile were not measured.

## Iteration Guide
When extending the page, remember what the measurement shows: type hierarchy is made almost entirely by size and case, since weight is 400 on nearly every character; color hierarchy is made by black against #555555 for secondary text; and spatial hierarchy is made by large white gaps (up to 80px measured between items) rather than rules or borders. Keep each case study to one sentence, one client name in gray and one image.
1. White canvas, black ink, #555555 for client names.
2. Hero lines seasonMix 97.3563px uppercase, -3px tracking; statements seasonSerif 44px.
3. One diffuse shadow only; pills for floating controls.
4. Pull any further color from the published `--color-*` ramps after measuring the live page.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=akqa --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=akqa`.
