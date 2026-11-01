---
version: alpha
name: Indigo
category: "Fashion & Apparel"
description: "Indigo (indigo-laboratory.it, '5 tales of being'), a contemporary jewelry house, builds an editorial experience on a warm paper canvas (#f4f3eb) and near-black ink (#030303) with violet (#6a15ff), in Hanken Grotesk 900 at 100px with -6px tracking, IBM Plex Mono labels, the display face Palette Mosaic at 240px, and square 0px corners."
colors:
  canvas: "#f4f3eb"
  page-largest: "#ffffff"
  ink: "#030303"
  primary: "#030303"
  on-primary: "#ffffff"
  ink-muted: "#b1b3c3"
  accent-violet: "#6a15ff"
typography:
  display:
    fontFamily: "\"Hanken Grotesk\", sans-serif"
    fontSize: 100px
    fontWeight: 900
    lineHeight: 90px
    letterSpacing: "-6px"
  display-mobile:
    fontFamily: "\"Hanken Grotesk\", sans-serif"
    fontSize: 50px
    fontWeight: 900
    lineHeight: 44px
    letterSpacing: "-3px"
  heading:
    fontFamily: "\"Palette Mosaic\", system-ui"
    fontSize: 240px
    fontWeight: 400
    letterSpacing: "-52.8px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"IBM Plex Mono\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
    textTransform: uppercase
  body:
    fontFamily: "\"Hanken Grotesk\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-1.08px"
  button:
    fontFamily: "\"Hanken Grotesk\", sans-serif"
    fontSize: 50px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: "-3px"
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 14px
  s5: 20px
  s6: 24px
  s7: 30px
  s8: 32px
  s9: 34px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 2px
    height: 44px
    transform: matrix(1, 0, 0, 1, -154.18, 0)
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 2px
  nav:
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
    padding: 0px 20px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
    padding: 120px 20px 12px
---

## Overview

Indigo is a contemporary jewelry house; the page title is "5 tales of being - Indigo" and the site is an audiovisual experience organized around five "tales". The first screen is an entry gate: a black field with the word INDIGO blown up as a blurred, grey, oversized wordmark, a small audio-meter glyph, the line "Welcome to Indigo, a contemporary jewelry house. A journey through five tales, made to be heard.", a white-on-black inverted button "ENTER THE EXPERIENCE" (in the measured hover state it flips to black fill with white text), and a small "CONTINUE WITHOUT SOUND" link at the bottom. After that the page switches to a warm paper canvas (#f4f3eb) for the story.

The first chapter is titled "THE INVISIBLE ECHO" in a three-line stack of heavy black grotesque. The copy beneath reads "Before the gesture, there is a sound. Before the form, an echo. Indigo gathers these invisible traces and transforms them into jewelry: five tales exploring matter, time and intimacy." and a smaller line, "An invitation to listen to the silence that still resonates within." Two narrow portrait photographs of hands wearing rings against a blue-grey backdrop flank the title, and a large full-bleed portrait of a woman with a pendant and rings follows. The remaining chapters include RHYTHM and product captions such as "BROKEN HEART RING". The footer is black with the line "FROM FIVE, EVERYTHING BEGINS." and links for WhatsApp, Email and Instagram, and a "REQUEST INFO" call to action.

The measured page is 39,940px tall at 1280px wide. The voice is poetic and spare, in English with uppercase titles; photography is intimate studio portraiture on cool blue-grey backgrounds, so the jewelry's metal and stones carry the color.

## Colors

- **Paper (#f4f3eb, `canvas`)** is the page background of the story sections (3968 area weight). The capture's pixel check confirms it as the visible background after the entry gate.
- **White (#ffffff, `page-largest`)** covers the most area (32651), and is the text color on dark surfaces (563 characters).
- **Ink (#030303, `ink` and `primary`)** is the text on paper (13045 of 13623 measured characters) and the fill of the "REQUEST INFO" button and the footer.
- **Violet (#6a15ff, `accent-violet`)** fills a 1024-weight area and appears as a translucent #6a15ff4d wash across a large 8346-weight area, so it is the brand's chromatic accent in image overlays; the neutral palette otherwise carries the page.
- **Muted (#b1b3c3, `ink-muted`)** colors 15 characters of small text.
- **Black overlays:** #0303034d (translucent) appears at 1024 area.
- **Error:** the stylesheet declares `--color-error: #f7323f` for forms; it was not measured on a visible element, so it is not a token. The stylesheet's shadow variable is `--shadow-default: 0 4px 8px var(--color-black-30)`; no shadow was measured on rendered elements.

## Typography

Three families carry the design: Hanken Grotesk (weights 400, 600, 700 loaded, and 900 measured on headlines), IBM Plex Mono 400 and Palette Mosaic 400. By characters: Hanken Grotesk 12395, IBM Plex Mono 1192, Palette Mosaic 36.

- **Display (h1):** Hanken Grotesk 900, 100px / 90px, -6px letter spacing; 50px / 44px and -3px on the 390px pass.
- **Mosaic heading (h2):** Palette Mosaic 400, 240px, uppercase, -52.8px letter spacing, used for the chapter word RHYTHM; 80px and -22px at 390px.
- **Body:** Hanken Grotesk 400, 18px / 24px, -1.08px letter spacing; 30px / 36px with -1.8px tracking on the page-level lead paragraph.
- **Mono label (h3):** IBM Plex Mono 400, 14px / 18px, uppercase (for example "BROKEN HEART RING").
- **Button:** Hanken Grotesk 400, 50px / 44px, -3px tracking, uppercase ("REQUEST INFO").
- **Navigation:** Hanken Grotesk 400, 16px / 20px, -0.96px, uppercase ("THE MAKER", "CONTACT").
- **Other measured sizes:** 22px (1078 characters).

The tracking is always negative and proportional (-6% of size on display, -6% on body, -6% on buttons), which is what makes the grotesque feel compressed. Palette Mosaic is used only for one huge word (36 characters measured).

## Layout

Spacings measured are 2px, 3px, 4px, 14px, 20px, 24px, 30px, 32px, 34px and 40px. The gate screen is centered on black; the story then runs in long vertical chapters with a centered text column (narrow compared with the full-bleed photographs) between two small portrait photographs, followed by large full-bleed photographs set inside wide margins. Stylesheet variables include Swiper navigation size `--swiper-navigation-size: 44px`. The header carries two uppercase links (THE MAKER, CONTACT) at 20px side padding; the footer has 120px top and 12px bottom padding.

## Elevation & Depth

No box shadows (`boxShadows` empty) and no borders (`borderColors` empty). Depth comes from blur and layering: the gate's blurred wordmark, the translucent violet and black washes (#6a15ff4d, #0303034d) (several elements carry translate transforms, for example `matrix(1, 0, 0, 1, -154.18, 0)` on the button).

## Shapes

`desktop.frequencies.borderRadii` is empty, so every rendered element computes 0px, and `rounded.none` is 0px. Buttons are plain rectangles (the entry button is a white rectangle hugging its text), and photographs are sharp-cornered rectangles.

## Components

- **Primary button ("REQUEST INFO").** #030303 fill, white label, Hanken Grotesk 400 at 50px / 44px, uppercase, -3px tracking, 0px radius, 0px 2px padding, 44px high.
- **Entry button ("ENTER THE EXPERIENCE").** White fill with black label at rest on the dark gate; the measured hover flips it to black text on a white field (height 44px, border color rgb(3, 3, 3)).
- **Chapter link ("RHYTHM").** White 50px uppercase text link with 0px 2px padding.
- **Navigation.** White uppercase 16px links at the top with 20px padding.
- **Footer.** Black, white text, a 100px / 900 headline "FROM FIVE, EVERYTHING BEGINS." with WhatsApp, Email, Insta links.
- **Inputs and cards.** Not measured.

## Design System Architecture

No public Indigo design system or brand guideline was found: https://indigo-laboratory.it/brand, /press, /about and /design all returned 404. The de-facto system is the shipped stylesheet at https://indigo-laboratory.it/, with named variables such as `--color-white`, `--color-placeholders`, `--font-sans`, `--font-base`, `--shadow-default`, `--color-error`, `--easing-in` and Swiper's `--swiper-navigation-size`. Fonts are bound to `--font-sans` ("Hanken Grotesk", sans-serif); the type sizes and tracking values above are applied per component.

## Do's and Don'ts

- Do set display type in Hanken Grotesk 900 with -6px tracking at 100px.
- Do use #f4f3eb paper with #030303 ink and let blue-grey photography provide color.
- Do keep corners at 0px and avoid shadows.
- Do use uppercase for titles, buttons and nav, and IBM Plex Mono for small captions.
- Don't use the violet #6a15ff as a flat button fill; it is measured as an overlay wash and a 1024-weight area.
- Don't add borders.
- Don't use the intro gate's blurred wordmark as a logo lockup.

## Responsive Behavior

The 390px pass measured: h1 at 50px / 44px weight 900 with -3px tracking, the Palette Mosaic h2 at 80px with -22px tracking, body at 18px / 24px with -1.08px, the "REQUEST INFO" button at 50px / 44px, and the uppercase 16px navigation. Column behavior and the layout of the portraits were not measured.

## Iteration Guide

1. Open with a black gate and a single white rectangular button.
2. Move to a #f4f3eb canvas and set a three-line 100px / 90px headline in Hanken Grotesk 900.
3. Add an 18px lead paragraph with -1.08px tracking and a 14px mono caption.
4. Use cool studio portraits and blue-grey backdrops.
5. Use #6a15ff only as a translucent overlay.
6. Close on black with the 100px footer statement and a 50px uppercase button.
