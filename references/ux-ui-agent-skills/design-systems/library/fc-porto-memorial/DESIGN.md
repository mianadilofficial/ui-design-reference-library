---
version: alpha
name: FC Porto Memorial
category: "Retail & E-commerce"
description: "FC Porto Memorial (memorial.fcporto.pt), a Portuguese-language tribute microsite for Jorge Nuno Pinto da Costa: a midnight navy #01060e canvas, warm cream #e8e1d2f2 type, GT Super Display serif at 111.424px with -5.5712px tracking, system sans body at 16px, an EN/PT switch and a scrolling timeline."
colors:
  canvas: "#01060e"
  ink: "#e8e1d2f2"
  primary: "#e8e1d2f2"
  surface-black: "#000000"
  white: "#ffffff"
  ink-secondary: "#ffffffb3"
typography:
  display:
    fontFamily: "\"GT Super Display\", serif"
    fontSize: 111.424px
    fontWeight: 400
    lineHeight: 100.282px
    letterSpacing: "-5.5712px"
  display-mobile:
    fontFamily: "\"GT Super Display\", serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 57.6px
    letterSpacing: "-3.2px"
  heading:
    fontFamily: "\"GT Super Display\", serif"
    fontSize: 75.2px
    fontWeight: 400
    lineHeight: 75.952px
    letterSpacing: "-1.88px"
  body:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 12.96px
    fontWeight: 400
    lineHeight: 19.44px
    textTransform: uppercase
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 4px
  s2: 7.14px
  s3: 8px
  s4: 10.69px
  s5: 11.42px
  s6: 13.06px
  s7: 16px
  s8: 20px
  s9: 22.69px
  s10: 29.54px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 10.688px 10.688px 72.736px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8px
---

## Overview

The measured page is the memorial microsite for Jorge Nuno Pinto da Costa, published by FC Porto (https://memorial.fcporto.pt/, title "Memorial Jorge Nuno Pinto da Costa | FC Porto", language Portuguese). It is a narrative scroll rather than a conventional website: a cinematic, darkened photograph of a supporter holding a blue and white scarf behind the centred title "Jorge Nuno Pinto da Costa" in a large high-contrast serif, the subtitle "O PRESIDENTE DOS PRESIDENTES" in tracked capitals, and a prompt "Clica para começar" with a chevron. Above this the header has the FC Porto crest with the wordmark "FC Porto" at the left, a white "M" monogram at the centre, and at the right "Som ligado" (sound on) with an EN and PT language switch.

Below the hero the story proceeds as a timeline. The first block is a large quotation set in the serif, partly faded in the capture: "Eu não sou Presidente, eu assumi o lugar de Presidente. O que eu sou é adepto. Antes de ser sócio, eu sou adepto." attributed to JORGE NUNO PINTO DA COSTA in tracked capitals. A thin vertical line with a small glowing dot runs down the centre of the page and links chapters, each shown as a dim photograph card with a serif title and a date, the first being "A Eleição, 17 abril, 1982". The page markup includes further chapters ("Anos de História para o Mundo", "Clica para reproduzir"), a process sequence (Transporte, Catalogação, Construção) describing how objects left at the stadium were collected, catalogued and moved into a permanent memorial at the Estádio do Dragão started in September 2025, a visitor counter and a "Visite o Museu" call to action.

The tone is solemn, narrative and editorial. The interface is nearly invisible; type, photography and darkness carry the emotion.

## Colors

- Canvas `#01060e` is a near-black midnight blue and by far the largest area (7168), the page background for the whole scroll. Surface black `#000000` (area 1536) is a deeper band colour.
- Ink / primary `#e8e1d2f2` is a warm cream at 95% opacity (the CSS expresses it as `oklch(0.8757 0.0215 88.93 / 0.95)`): the colour of all headings, nav links and quotations (1672 characters). There is no separate action colour on the desktop pass, so primary equals ink.
- Ink secondary `#ffffffb3` (white at 70%, 673 characters) is the body paragraph colour; the stylesheet also declares `--color-foreground-secondary: oklch(87.57% .0215 88.93/.7)`, the cream at 70%.
- White `#ffffff` appears in the declared `--color-white`, with black declared as `--color-black`.
- A measured translucent area `#0000007a` (black at 48%) is a scrim over photography; as a scrim it is not documented as a brand token. On the mobile pass a call-to-action fill of `#ffffff0f` (white at 6%) is measured.

The crest's blue and white appear only in photographs and the logo, not in the interface palette.

## Typography

Two voices. The display face is GT Super Display (a single weight 300 face is loaded; the measured roles read 400), a high-contrast serif used for all titles and quotations (549 characters). The body uses the default system sans stack (`ui-sans-serif, system-ui, sans-serif` and the emoji fonts), 1796 characters. A monospace `--font-mono: "IBM Plex Mono", monospace` is declared in the CSS but not measured on the page.

Measured scale (desktop):

- Display: GT Super Display 111.424px, line height 100.282px, letter spacing -5.5712px (-0.05em), for the main title.
- Heading: GT Super Display 75.2px, line height 75.952px, letter spacing -1.88px, for chapter titles.
- Body: system sans 16px on 24px.
- Nav: system sans 12.96px on 19.44px, uppercase.
- Frequent sizes by character count: 16px, 13.632px, 45.536px, 17.632px, 75.2px, 59.2px, 52.352px and 30.688px.

The serif is set with very tight leading (about 0.9 of the font size at display size) and strongly negative tracking. The stylesheet exposes the tracking tokens `--tracking-tighter: -.05em` and `--tracking-wider: .05em`. Capitalised subtitles and attributions use the sans with wide tracking.

## Layout

A single centred column over a long vertical canvas (scroll height 38808px at 1280px, 481 visible elements). The hero is viewport-height with the title centred. The timeline runs down the centre axis with a hairline and dots, and every chapter card, quote and paragraph is centred on it. The header is full width with three zones. Spacing values measured: 4, 7.14, 8, 10.69, 11.42, 13.06, 16, 20, 22.69 and 29.54px; the language nav has padding 10.688px 10.688px 72.736px (a tall bottom padding that places the switch in the header band). The stylesheet is Tailwind-based (`--spacing: .25rem`).

## Elevation & Depth

No box shadows are measured. Depth is created with darkness: photographs are dimmed to near black, text sits on the dark, and chapter cards are dim images that brighten as they come into view in the capture (the quote shows a faded state). A blur token `--blur-md: 12px` is declared in the CSS. The only translucent layers measured are the 48% black scrim and the 6% white fill.

## Shapes

Minimal. The measured radii are 4px (the mobile call-to-action) and the 9999px pill token. Photographs and chapter cards are rectangles with no rounding. The timeline is a 1px line with a dot marker. The FC Porto crest and the monogram "M" provide the only graphic shapes.

## Components

- Header: crest and "FC Porto" wordmark at the left (the "Porto" part is bold), "M" monogram at the centre, "Som ligado" with a dot and the EN | PT switch at the right.
- Language nav: 12.96px uppercase, colour `#e8e1d2f2`; the hover state drops the opacity to 0.8.
- Hero prompt: "Clica para começar" with a chevron, sans 16px.
- Quote block: serif at large size, attribution in tracked capitals.
- Timeline: central hairline, glowing dot, chapter card with the serif title and date.
- Call to action (mobile pass): "VISITE O MUSEU", 11.04px, text `#e8e1d2f2`, fill `#ffffff0f`, radius 4px, height 36px, padding 12.6408px. A desktop version was not extracted.

## Design System Architecture

No public design system or brand guideline was found: the page https://memorial.fcporto.pt/ was opened and has no link to a design system, brand guideline, press kit or GitHub organisation, so none is cited. The de-facto system is Tailwind CSS v4: the root carries Tailwind variables (`--tw-*`, `--spacing`, `--default-transition-timing-function: cubic-bezier(.4,0,.2,1)`) plus a small custom layer: `--color-foreground-secondary`, `--color-white`, `--color-black`, `--font-mono`, text-size letter-spacing tokens (`--text-lg--letter-spacing: -.0125em`, `--text-xl--letter-spacing: -.025em`, `--text-2xl--letter-spacing: -.025em`, `--text-3xl--letter-spacing: -.025em`, `--text-sans-lg--letter-spacing: 0em`) and tracking tokens. Colours are defined in oklch.

## Do's and Don'ts

Do:
- Keep the canvas at `#01060e` and set text in warm cream `#e8e1d2f2` and white at 70% for body.
- Set titles in the display serif with tracking near -0.05em at display size.
- Let photography be dim and monochrome-leaning, and keep interface chrome to a header and a hairline timeline.
- Offer the language switch (EN, PT) and a sound indicator in the header.

Don't:
- Use pure white or bright accent colours for text or buttons.
- Add shadows or rounded cards; none are measured.
- Treat the dark scrim over photographs as a brand colour.
- Set body copy in the serif; body is the system sans.

## Responsive Behavior

Measured with the 390px mobile pass: h1 "Jorge Nuno Pinto da Costa" is GT Super Display 64px, line height 57.6px, letter spacing -3.2px; h2 "A Eleição" is 48.055px; body copy is 16px in `#ffffffb3` with 24.008px horizontal padding; the "VISITE O MUSEU" button is 36px high with a 4px radius; the language nav is 12.07px with padding 4px 4px 32.063px and an 86px height. Frequent mobile font sizes by character count: 16px, 12px, 32.008px, 32.055px, 15.051px and 48.055px. Reflow of the timeline and image cards at mobile width is not otherwise measured.

## Iteration Guide

1. Start with `#01060e` as the only background, cream `#e8e1d2f2` for titles and `#ffffffb3` for paragraphs.
2. Set the title in GT Super Display at 111.424px with -5.5712px tracking and 100.282px leading; chapter titles at 75.2px.
3. Build the narrative as a centred vertical timeline with a hairline and dots.
4. Keep controls minimal: an uppercase EN | PT switch and a single 4px-radius ghost button.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=fc-porto-memorial --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=fc-porto-memorial`.
