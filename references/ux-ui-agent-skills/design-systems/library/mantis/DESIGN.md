---
version: alpha
name: Mantis
category: "Portfolio"
description: "Mantis, a New York City experience studio: neutral grey #bdbdbd canvas with #cfcfcf surfaces, near-black #181818 ink, one electric green #00ff00 button with black text and 4px radii, set entirely in Denim (display 85px, -4.25px tracking, weight 500) with Graebenbach Mono declared for body."
colors:
  canvas: "#bdbdbd"
  ink: "#181818"
  primary: "#00ff00"
  on-primary: "#000000"
  surface-card: "#cfcfcf"
  surface-white: "#ffffff"
  ink-text: "#252525"
  ink-pale: "#e2e2e2"
  ink-muted: "#696969"
  button-secondary-bg: "#ffffff45"
typography:
  display:
    fontFamily: "Denim-a7daf203ab3d298d, \"Denim-a7daf203ab3d298d fallback: Arial\", sans-serif"
    fontSize: 85.0266px
    fontWeight: 500
    lineHeight: 70.5721px
    letterSpacing: "-4.25133px"
  display-mobile:
    fontFamily: "Denim-a7daf203ab3d298d, \"Denim-a7daf203ab3d298d fallback: Arial\", sans-serif"
    fontSize: 40.7463px
    fontWeight: 500
    lineHeight: 33.8194px
    letterSpacing: "-2.03731px"
  heading:
    fontFamily: "Denim-a7daf203ab3d298d, \"Denim-a7daf203ab3d298d fallback: Arial\", sans-serif"
    fontSize: 29.6077px
    fontWeight: 500
    lineHeight: 27.5352px
    letterSpacing: "-1.48039px"
  subheading:
    fontFamily: "Denim-a7daf203ab3d298d, \"Denim-a7daf203ab3d298d fallback: Arial\", sans-serif"
    fontSize: 108px
    fontWeight: 500
    lineHeight: 89.64px
    letterSpacing: "-5.4px"
  body:
    fontFamily: "Denim-a7daf203ab3d298d, \"Denim-a7daf203ab3d298d fallback: Arial\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "Denim-a7daf203ab3d298d, \"Denim-a7daf203ab3d298d fallback: Arial\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 18.4px
  nav:
    fontFamily: "Denim-a7daf203ab3d298d, \"Denim-a7daf203ab3d298d fallback: Arial\", sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 12.8px
  link:
    fontFamily: "Denim-a7daf203ab3d298d, \"Denim-a7daf203ab3d298d fallback: Arial\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 29.76px
    letterSpacing: "-1.6px"
  button-secondary:
    fontFamily: "Denim-a7daf203ab3d298d, \"Denim-a7daf203ab3d298d fallback: Arial\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3.2px
  s3: 4.8px
  s4: 7.2px
  s5: 8.8px
  s6: 9.6px
  s7: 11.2px
  s8: 12px
  s9: 19.2px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px 0px 24px
    height: 63px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 0px 20px 0px 24px
    height: 63px
  link:
    textColor: "{colors.ink-text}"
    typography: "{typography.link}"
    padding: 0px 0px 32px
  nav:
    textColor: "{colors.ink-pale}"
    padding: 8.8px 12px
  nav-link:
    textColor: "{colors.ink-pale}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 24px
  footer:
    textColor: "{colors.ink-text}"
    padding: 96px 12px 12px
---

## Overview

Mantis (`https://www.mantis.works/`, title "Mantis", measured 1280px wide and 12667px tall) is a New York City "experience studio specializing in experiential, digital, and brand activations" (the page's own og:description). The home page opens with a flat grey field (`#bdbdbd`) and almost no chrome: a top row with the "Mantis" wordmark at left, "Our Services", a live "New York City" clock, and "Contact Us". The headline "We create feelings." is set at 85.0266px in Denim weight 500 with very tight tracking (-4.25133px), beside a short three-line studio description in 29.6077px.

Three project tiles follow in a three-column row (Plaid Effects '26, Shopify DotDev '26, Google Cloud: Find Your Edge), each a photograph or video with a title in Denim and small grey chips for categories (Experiential, Event Production, Conference, Product Design, Web Design). Then a full-width dark video band, an "We're Mantis." statement with three short paragraphs ("We believe every great experience has a heartbeat..."), and a "Here's what we can offer your team." service list beside large imagery. The voice is warm and confident, in short sentences; there is almost no color except the photography and a single green action color (`#00ff00`, the CSS variable `--accent: #0f0`).

The page reads as a gallery wall: the neutral grey recedes so that event photography (a blue-lit vaulted hall, an orange commerce booth, a person with a pink beanie holding a tablet in snow) supplies all the saturation. Copy is short and personal ("We design for the nervous system, creating experiences that people don't just attend, but feel."), and sentence-case headings end with a period, which gives the page a calm, declarative tone. Contact is offered by email through the single green button.

## Colors

The page declares its palette as CSS variables, and measured values agree.

- **Canvas `#bdbdbd`** (`--color-bg`): the page background.
- **Surface-card `#cfcfcf`** (`--color-surface`, `--tag-bg`): the largest measured background area (5676 weight), used for panels and the category chips.
- **Ink `#181818`**: the most-read text color (2745 character-weight); **ink-text `#252525`** (`--color-text`) is used on the headline, studio description and body copy; also `--row-bg` and `--surface`.
- **Primary `#00ff00`** (`--accent`, `--color-accent`): the "Email Us" button fill, with black `#000000` text (`on-primary`).
- **Button-secondary-bg `#ffffff45`** (`--color-row`, `--color-light-grey`): a translucent white fill for the secondary button.
- **Ink-pale `#e2e2e2`**: navigation text (pale on image). **Ink-muted `#696969`** (`--color-muted`). **Surface-white `#ffffff`**.

Other declared variables: `--muted #8a8a8a`, `--color-pale-grey #e1e1e1`, `--nav-blend #fff`, `--bg #000`, `--text #fff`, `--color-black #000`. These last pairs (`--bg`/`--text`) are the dark-surface pair used for the dark video band; whether the site switches themes was not measured.

## Typography

Two families are loaded: **Denim** (`--font-title` / `--font-display`, weights 400 and 500, fallback Arial) and **Graebenbach Mono** (`--font-body` / `--font-mono`, weights 400 and 600). Every measured role (`h1`, `h2`, `h3`, body, buttons, nav) computed to Denim; the mono face is declared as the body variable and is loaded but its place on the page was not measured.

- **Display** (Denim 500, 85.0266px / 70.5721px, tracking -4.25133px): "We create feelings."; 40.7463px / 33.8194px (-2.03731px) in the mobile pass.
- **Heading** (500, 29.6077px / 27.5352px, -1.48039px): the studio description.
- **Subheading** (500, 108px / 89.64px, -5.4px): large section statements like "Best in class Experiential".
- **Body** (400, 20px / 22px).
- **Button** (500, 16px / 18.4px); **button-secondary** (400, 16px).
- **Nav** (400, 12.8px); **link** (500, 32px / 29.76px, -1.6px): the large service links.

Tracking is about -5% of font size on large text (the CSS values above are exact). Denim is a commercial typeface; Arial is the declared fallback.

## Layout

A fluid container is defined by variables: `--size-container` is `clamp(1023px, 100vw, 2560px)` with a 1920px ideal and a 16px size unit, so type and spacing scale with the viewport (`--size-font`). A design width of 1920 by 1080 (`--dw`, `--dh`) is declared. The home page content is edge to edge with a narrow outer margin; the project row is three equal columns. Measured spacing values: 2, 3.2, 4.8, 7.2, 8.8, 9.6, 11.2, 12, 19.2 and 20px; cards use 24px padding and the footer 96px top, 12px side and bottom padding. Easing variables: `--ease` .8s cubic-bezier(.84, 0, .16, 1), `--fast-ease` .6s, `--smooth` cubic-bezier(.76, 0, .24, 1), `--color-ease` .4s ease-out.

## Elevation & Depth

No box shadows were measured (the list is empty) and no borders were measured. Depth is created by photography and by contrast between the grey canvas, the darker video bands and the translucent white secondary buttons. A subtle noise grain is visible across the grey in the capture, but it was not measured as a token and is not documented further.

## Shapes

Measured radii: `4px` on 17 elements (buttons, cards, image tiles) and a pill value on 14 elements (computed as 3.35544e+07px, the tokens express it as `pill 9999px`), used for chips. Tokens: `xs 4px`, `pill 9999px`.

## Components

- **Primary button** ("Email Us"): `#00ff00` fill, black text, Denim 16px 500, 4px radius, 63px tall, padding `0px 20px 0px 24px`; label duplicated vertically in markup for a text-roll effect.
- **Secondary button**: `#ffffff45` fill, `#252525` text, same size and radius.
- **Category chips**: small pills in `#cfcfcf` with tiny text.
- **Project tile**: image or video at 4px radius, a Denim title below and chips under it.
- **Navigation**: 12.8px text in pale `#e2e2e2`; its measured container starts translated off-screen (hidden state), so the visible header in the capture is the top row of text links.
- **Service link**: 32px Denim 500 with `0px 0px 32px` bottom padding.
- **Footer**: `#252525` text with 96px top padding.

Tile titles ("Plaid Effects '26", "Shopify DotDev '26") are set in Denim at the same weight as the headline but much smaller, so hierarchy comes from scale and tracking rather than weight or color. The live New York City clock in the header is text in the same 12.8px nav style and is the only dynamic element visible in the capture. Large images sit directly on the grey with no frames, borders or captions boxes; chips beneath the titles are the only labelled UI.

## Design System Architecture

No public design system or brand guidelines were found; the home page was the only page opened and it links to none. The system is a Tailwind-based build (the page ships `--tw-*` custom properties and Tailwind size variables such as `--text-lg`, `--text-sm`, `--text-5xl`, `--font-weight-medium`) extended with brand variables: `--color-bg`, `--color-surface`, `--color-text`, `--color-muted`, `--color-accent`, `--font-title`, `--font-body` and the easing set. Sizing is viewport-relative through `--size-container`, `--multiplier` (.2) and `--size-font`.

## Do's and Don'ts

Do:
- Keep the canvas grey (`#bdbdbd`) and let imagery provide the color.
- Use the single green `#00ff00` for the primary action only, with black text.
- Set display type in Denim 500 with strongly negative tracking.
- Keep corners at 4px and chips as pills.

Don't:
- Don't add shadows or borders; none were measured.
- Don't introduce a second accent color.
- Don't set display type with default tracking.
- Don't use more than one green element in view at once; the page shows one.

## Responsive Behavior

The mobile pass recorded roles and font-size frequencies. Display text measured 40.7463px / 33.8194px (desktop 85.0266px), and the "Email Us" button computed to 14px text on mobile (desktop 16px). Mobile font-size weights were led by 15px (2319), then 7.76119px, 20px, 12px, 60.1493px and 27px. The container minimum width variable is 1023px (`--size-container-min`), but mobile layout, columns and menu pattern were not measured.

## Iteration Guide

1. Use `#bdbdbd` for the page, `#cfcfcf` for surfaces, `#181818` for text.
2. Set display in Denim 500 at 85px with -4.25px tracking; keep line-height at about 83% of size as measured (70.5721px).
3. Make the only button green (`#00ff00`) with black text, 63px tall, 4px radius.
4. Present work as three-column image tiles with titles and pill chips.
5. Measure hover and focus before documenting; none was recorded.
