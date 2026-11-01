---
version: alpha
name: Paul Kalkbrenner
category: "Portfolio"
description: "Official site of electronic musician Paul Kalkbrenner: a white page with pure black ABC Diatype Plus Variable type at weight 700, a 133.333px display headline with -6.66667px tracking, a #c5c5c5 grey recordings band, #a7ff9c and #ff6831 accent blocks, and 13.33px or pill radii."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  surface-gray: "#c5c5c5"
  ink-muted: "#00000066"
  card-border: "#a9a9a9"
  accent-mint: "#a7ff9c"
  accent-orange: "#ff6831"
typography:
  display:
    fontFamily: "\"ABC Diatype Plus Variable\", Arial, sans-serif"
    fontSize: 133.333px
    fontWeight: 700
    lineHeight: 106.667px
    letterSpacing: "-6.66667px"
  display-mobile:
    fontFamily: "\"ABC Diatype Plus Variable\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: "-2.4px"
  subheading:
    fontFamily: "\"ABC Diatype Plus Variable\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 14.4px
    letterSpacing: "-0.32px"
    textTransform: uppercase
  body:
    fontFamily: "\"ABC Diatype Plus Variable\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
  nav:
    fontFamily: "\"ABC Diatype Plus Variable\", Arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 700
    lineHeight: 10.6667px
  input:
    fontFamily: "\"ABC Diatype Plus Variable\", Arial, sans-serif"
    fontSize: 9.33333px
    fontWeight: 700
    lineHeight: 13.3333px
    textTransform: uppercase
rounded:
  xs: 13.33px
  pill: 9999px
spacing:
  s1: 0.53px
  s2: 1.07px
  s3: 1.33px
  s4: 2.67px
  s5: 4px
  s6: 5.33px
  s7: 6.67px
  s8: 8px
  s9: 10.67px
  s10: 12px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 120px
    borderColor: "{colors.ink}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-muted}"
---

## Overview

Paul Kalkbrenner's official website is a single long scroll (9359px tall at the 1280px desktop measurement) for an electronic music producer. The page title is "Paul Kalkbrenner – Official Website". The first screen is almost empty: a white field, a tiny round "PK" mark at the top left, a row of eight small nav links at the top right (Music, Tour, About, Journey, Gallery, News, Contact, Store), and the artist's name set in enormous black type with a small portrait photograph inserted between the two words. Everything is typeset in one family, ABC Diatype Plus Variable, at weight 700, so hierarchy comes from size alone: a 133.333px headline against 12px body copy and 9.33333px to 10.6667px labels.

Below the hero the page moves through a "Now playing" bar, a tagline ("Explore his music, new releases, live performances and a body of work shaped by over two decades of electronic music."), a staggered headline reading "Experience the pulse of Electronic Music", a row of streaming-service logos, a full-bleed photograph, and a grey "RECORDINGS" band with year filters. The overall impression is a gallery-like Swiss grid: thin black hairlines, tiny uppercase captions, very large display words and big photography. Colour is almost entirely black and white with one grey band and two small accent blocks, mint green and orange, that appear in the measured backgrounds.

## Colors

The palette is measured from the live page. `canvas` is `#ffffff`, the dominant on-screen background, and `ink` is `#000000`, the most-read text colour. There is no separate action colour; `primary` is also `#000000` because links, hairlines and the circular "PK" mark are black. A second text colour, `ink-muted` (`#00000066`), is black at 40 percent opacity; it is used for secondary footer text and for the inactive year filters shown in the capture (2018, 2015).

`surface-gray` (`#c5c5c5`) fills the Recordings band. `card-border` (`#a9a9a9`) is the single grey border colour measured on a card element. Two accent backgrounds were measured in the extraction: `accent-mint` (`#a7ff9c`) and `accent-orange` (`#ff6831`). The site's own CSS variables name the same values `--color--green` and `--color--orange`, alongside `--color--gray: #c5c5c5`, `--color--dark: #000` and `--color--light: white`. The footer is a solid black block with white and 40 percent black-on-black text.

Use black on white for almost everything. Use grey for a whole section band, never as a text colour on white for primary content. Use the mint and orange only as flat blocks, never as gradients.

## Typography

One typeface carries the entire site: ABC Diatype Plus Variable (loaded as a variable font covering weights 100 to 700), with Arial and generic sans-serif as fallbacks. The measured usage is almost entirely weight 700; weight 400 appears on only a handful of characters. ABC Diatype is a commercial typeface; if it is unavailable, Arial is the declared fallback, and a neutral grotesque at bold weight with tight tracking is the closest stand-in.

The scale is extreme. `display` is 133.333px with 106.667px line height (0.8 ratio) and -6.66667px letter spacing, used for the artist name and for words such as "Experience". On a 390px mobile pass the h1 measures 48px with 38.4px line height and -2.4px letter spacing (`display-mobile`). `subheading` is 16px, uppercase, -0.32px tracking (for example "RECORDINGS"). `body` is 12px with 12px line height, which means copy is set solid with no extra leading. `nav` is 10.6667px, and `input` is 9.33333px uppercase. Other measured sizes include 32px (86 characters, letter spacing -0.64px) and an oversized 569.6px decorative size used on a few characters.

Tracking is always negative on large type, roughly -5 percent of the font size at every measured display size (133.333px with -6.66667px, 48px with -2.4px, 32px with -0.64px is closer to -2 percent). Copy it by size, not by percentage.

## Layout

The page is built on a visible grid. In the capture, a four-row, multi-column table of black hairlines frames the "Experience the pulse" headline, with small column numbers (01, 02) above the lines. The site defines column sizes as fractions of eight (`--col-size-1: calc(100% * 1 / 8)`, `--col-size-5: calc(100% * 5 / 8)`) and an experience-grid column of `35em`. Vertical spacing is also driven by variables: `--space-s: 1em`, `--space-m: 7.5em`, `--space-l: 10em`, `--padding-vertical-xxl: 18.75em`, `--gap-ml: 1.25em` and `--gap-xl: 2em`.

The font size itself scales with the viewport: `--size-font: calc(clamp(992px, 100vw, 2560px) / (1920 / 16))`, so one rem-like unit grows between 992px and 2560px wide. Small gaps measured on elements are 8px, 6.66667px, 5.33333px, 13.3333px and 26.6667px. Margins from the screen edge are narrow, about the 5px hairline inset visible in the capture, so type and imagery run edge to edge. Photography is placed full-bleed at the width of the viewport.

## Elevation & Depth

The site is flat. The only box shadow measured is a white shadow pair (`0px -21.3333px 0px 0px` and `0px 21.3333px 0px 0px`, both `rgb(255, 255, 255)`) used as a masking device, not as visible elevation. Depth comes from overlap and scale: a portrait photograph sits inline inside the headline, tilted circular cards rotate over the grid (one card measured a rotation transform), and black circular dots overlap the hairlines. Do not add drop shadows, blurs or glows to cards.

## Shapes

Two radii are measured: 13.3333px (16 elements) and 1066.67px, which is effectively a full pill or circle (8 elements). Every other element computes 0px, so most rectangles, photographs and bands are sharp-cornered. Circles are a recurring motif: the round "PK" logo, solid black dots on the hairline grid, and a card with a pill radius and a `#a9a9a9` 1px border. Inputs use a 1px solid black border and have a measured height of 120px.

## Components

**Navigation.** A white bar, 40px high, with eight links in 10.6667px bold type, black on white, no underline in the measured styles. The Store link is external. There is no filled button in the nav.

**Links.** Plain black text, 10.6667px, weight 700. "VIEW ALL ALBUMS" appears with an arrow icon in the Recordings band. No hover styles were recorded (the hover pass returned none).

**Inputs.** The newsletter form (CTA label "Join PK newsletter") uses 9.33333px uppercase text, a 1px black border and a 120px height. The extractor found no primary filled button, so this document declares none.

**Cards.** Pill-radius cards with a 1px `#a9a9a9` border; release cards on the grey band show cover art with titles in uppercase 12px type (for example "THE ESSENCE").

**Streaming strip.** A row of service logos (Deezer, iTunes Store, beatport, Apple Music in the capture; the page lists also Spotify, YouTube Music, Amazon Music and Tidal) in black, evenly spaced.

**Footer.** A 323px black block with four link columns (LINKS, SUPPORT and others) in 9.33333px type at `#00000066`, social links (Instagram, Facebook, X, YouTube, Spotify, TikTok, SoundCloud), Privacy Policy and Imprint.

## Design System Architecture

No public design system or brand guideline for this site was found; the pages opened were the home page itself (https://www.paulkalkbrenner.net/), and no link to a design system appears on it. The de-facto system is visible in the shipped CSS custom properties: a colour set (`--color--dark`, `--color--light`, `--color--gray`, `--color--green`, `--color--orange`, `--color--yellow: #fc0`, `--color--brown: #bc8556`), derived alpha steps (`--color--dark-20`, `-30`, `-40`, built with `color-mix(in srgb, var(--color--dark), transparent N%)`), space tokens (`--space-s`, `--space-m`, `--space-l`), gap tokens (`--gap-ml`, `--gap-xl`), column tokens (`--col-size-N`), and a shared easing: `--animation-default-half: .35s cubic-bezier(.625, .05, 0, 1)`. The naming (double-dash colour names, size-unit of 16) shows a hand-built, em-based system rather than a utility framework. The yellow and brown variables are defined but were not measured in rendered backgrounds, so they are not tokens here.

## Do's and Don'ts

- Do set everything in ABC Diatype Plus Variable at weight 700 and let size carry hierarchy.
- Do use `#000000` on `#ffffff`, with `#c5c5c5` as a whole-section band.
- Do pull display tracking tight (-6.66667px at 133.333px) and line height under the font size (106.667px).
- Do use hairline 1px black rules to build the grid and small numeric captions (01, 02).
- Do run photography full-bleed in high-contrast, cinematic, concert or portrait style.
- Don't add drop shadows, gradients or rounded rectangles other than 13.33px and full pill.
- Don't introduce a filled primary button; the site declares none.
- Don't use mint or orange as text colours; they are measured only as backgrounds.
- Don't write copy in a promotional register. The measured copy is short, lowercase or uppercase labels and poetic one-liners such as "Explore the latest releases."

## Responsive Behavior

The extraction's mobile pass (390px viewport) recorded only type roles: the h1 becomes 48px bold with 38.4px line height and -2.4px letter spacing, and body text is 18px at weight 700 with 18px line height. Nothing else about mobile layout, navigation behaviour or grid columns was measured, so those are not measured. The site's font-size variable clamps its base between 992px and 2560px viewport widths, as declared in the CSS variable `--size-font`.

## Iteration Guide

1. Start from `canvas` white and `ink` black; add `surface-gray` only for a full-width content band.
2. Set the display word at 133.333px/106.667px/-6.66667px, 700, and make it break across lines if long.
3. Set captions in 9.33333px to 12px bold, uppercase for section labels and form inputs.
4. Build the grid with 1px black hairlines before placing content; align items to eighths of the width.
5. Use circles (pill radius) for logos, dots and cards; use 13.33px only on small boxes.
6. Keep the footer black with 40 percent black-on-black link text, as measured.
7. Run `node web/scripts/verify-designs.mjs --slug=paul-kalkbrenner` after any token change.
