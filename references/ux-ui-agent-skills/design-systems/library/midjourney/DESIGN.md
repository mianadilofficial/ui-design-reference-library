---
version: alpha
name: Midjourney
category: "AI"
description: "Midjourney's home page: a near-black indigo #06051d canvas under a blue ASCII-text hero, JetBrains Mono 16px/26px body in #cad5e2 with #63b3ed underlined links, DM Sans 16px/500 pill buttons (9999px) each tinted its own hue, and 8px-radius glassy #96c8ff33 image tiles."
colors:
  canvas: "#06051d"
  ink: "#cad5e2"
  primary: "#2d0e36"
  on-primary: "#fff1f2"
  surface-slate: "#314062"
  link: "#63b3ed"
  ink-bright: "#ebf8ff"
  white: "#ffffff"
  signup-bg: "#0f1c36"
  on-signup: "#ecfdf5"
  login-bg: "#281730"
  on-login: "#fefce8"
  hairline: "#ffffff1a"
  tile-glass: "#96c8ff33"
  indigo-glass: "#1919af33"
typography:
  display:
    fontFamily: "\"JetBrains Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 48.75px
  body:
    fontFamily: "\"JetBrains Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: >-
      "DM Sans", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  tile: 8px
  pill: 9999px
spacing:
  s1: 8px
  s2: 12px
  s3: 14px
  s4: 16px
  s5: 20px
  s6: 32px
  s7: 48px
  s8: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 42px
    borderColor: "{colors.hairline}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1)
      0px 2px 4px -2px
  button-signup:
    backgroundColor: "{colors.signup-bg}"
    textColor: "{colors.on-signup}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 42px
    borderColor: "{colors.hairline}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1)
      0px 2px 4px -2px
  button-login:
    backgroundColor: "{colors.login-bg}"
    textColor: "{colors.on-login}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 42px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.tile-glass}"
    textColor: "{colors.ink}"
    rounded: "{rounded.tile}"
    borderColor: "{colors.hairline}"
---

## Overview

Midjourney is an independent AI research lab best known for its image and video generation models. Its public home page (measured at https://www.midjourney.com/home) is unusually small and quiet for a company of its reach: a single 2,262px-tall page at a 1280px viewport with about 111 visible elements, reading more like a lab's README than a product landing page. The page title is simply "Midjourney".

The capture shows a full-width hero made of thousands of tiny blue monospace letters arranged into a curved, scan-lined field — a kind of ASCII-art planet or eye — with the Midjourney wordmark drawn in outline in the middle. Three small pill buttons ("Sign up", "Log in", "Explore") sit on a dark rounded tray beneath it. Below the hero, everything is set in JetBrains Mono on a near-black indigo canvas: four short sections ("About", "Projects", "Careers", "Contact"), each introduced by a small line icon in its own colour (violet, blue, green, amber), a two-row grid of eight square images in a monochrome blue, stipple-like rendering (an eye, a pen drawing a wave, a row of figures, a head in profile, a heart, a brain, a hand, lips), and three plain footer links.

The voice is plain and earnest, in the first person plural: "We're a community-funded research lab of 60 people known for building the most beautiful AI models in the world." There is no feature marketing, no pricing table, no testimonial — the art and the words carry it.

## Colors

All colours are measured on the live page:

- **Canvas `#06051d`** — the body background and by far the largest area (2,895 by area). It is a near-black with a strong indigo cast, not neutral black.
- **Hero band** — the 515px ASCII hero reads as a slightly bluer navy than the canvas in the capture.
- **Ink `#cad5e2`** — the main reading colour, a cool light grey-blue (903 characters).
- **Link `#63b3ed`** — a sky blue for underlined inline links ("community-funded research", "Discord", "help page", email addresses).
- **Ink bright `#ebf8ff`** and **white `#ffffff`** — section headings and tile labels.
- **Primary `#2d0e36`** with **on-primary `#fff1f2`** — the "Explore" pill: a dark plum fill with a rose-white label.
- **Sign-up `#0f1c36`** with **`#ecfdf5`** — a dark navy pill with a mint-white label.
- **Log-in `#281730`** with **`#fefce8`** — a dark aubergine pill with a cream label.
- **Hairline `#ffffff1a`** — 10% white, the border on every pill and tile (17 uses).
- **Tile glass `#96c8ff33`** — a 20% light-blue wash on the image tiles; **indigo glass `#1919af33`** a 20% indigo wash.
- **Surface slate `#314062`** — a small slate-blue fill.

The colour logic is "one dark field, many tinted labels": every pill has its own hue family in both fill and text, and the hover state measured on each one moves the fill to a brighter, more saturated tone of that same hue (green for Sign up, amber for Log in, rose for Explore) while the hairline rises from 10% to 20% white.

## Typography

Two families are loaded and used:

- **JetBrains Mono** (400) — almost all of the text (1,070 of 1,123 measured characters). Section headings ("About", "Projects") are 30px with a 48.75px line height; body paragraphs are 16px/26px; a 14px size is also measured. No letter spacing is applied. Setting the whole page in a monospace face gives it the feel of a terminal or a research notebook.
- **DM Sans** (500) — only on the pill buttons, 16px/24px. The site's `--font-sans` and `--default-font-family` variables name DM Sans as the default UI face; JetBrains Mono is the `--font-mono` / `--default-mono-font-family`.

Both are open-source Google Fonts, so no substitute is needed. Weights stay at 400 and 500; there is no bold anywhere on the page.

## Layout

The page is a single centred column. The measured body paragraphs are 768px wide (the h1 too), sitting inside the 1280px viewport with wide empty margins. The band map shows three zones: a 515px hero band, a 1,032px media band (the About and Projects text plus the image grid), and a 715px dark band (Careers, Contact and footer links). The image grid has 4 columns (the widest measured grid) of 196px square tiles in two rows. Spacing is measured on an 8px rhythm: gaps of 8, 12, 16, 32 and 64px; paddings of 8, 12, 14, 16, 20, 32, 48 and 64px.

Section headings hang slightly left of the body text, with their icon in the margin; paragraphs are indented under them. The density is very low: short paragraphs separated by full blank lines.

## Elevation & Depth

The page is flat. The only shadow is the Tailwind-style stack on the pill buttons, ending in `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px` — barely visible on the dark canvas. Depth instead comes from translucency: tiles use a 20% blue wash (#96c8ff33) and 10% white hairlines over the indigo, and the hero's scan-lined ASCII field glows against the darker canvas. The pill tray in the hero is a darker rounded panel sitting over the letters.

## Shapes

Only two radii are measured: 9999px for pills (9 uses) and 8px for image tiles (8 uses). The CSS also declares a Tailwind-style radius scale (`--radius-sm` 2px, `--radius` 4px, `--radius-md` 6px, `--radius-lg` 8px, `--radius-xl` 12px, `--radius-2xl` 16px, `--radius-2p5xl` 20px, `--radius-3xl` 24px, `--radius-full` 9999px), but on the home page only the pill and 8px values render. Icons are thin line drawings in a circle, gear, person and envelope shape.

## Components

- **Pill buttons** — DM Sans 16px/24px at 500, 9999px radius, 8px 20px padding, 42px tall, a 1px #ffffff1a border and the soft shadow stack. Each has its own tint: Explore #2d0e36 / #fff1f2, Sign up #0f1c36 / #ecfdf5, Log in #281730 / #fefce8. Each carries a small coloured icon before the label.
- **Image tile** — 196px square, #96c8ff33 fill, 1px #ffffff1a border, 8px radius, holding a blue monochrome artwork. Labels such as "Image and Video Models" and "TBA / Software" are attached to the tiles; hovering keeps the fill and label colour unchanged.
- **Section heading** — JetBrains Mono 30px/48.75px with a coloured line icon on the left.
- **Inline link** — #63b3ed, underlined, same mono 16px/26px as the body.
- **Language button** — a small circular globe icon in the top-right corner of the hero.
- **Footer** — three centred links ("Terms of Service", "Privacy Policy", "Privacy settings") in a smaller mono size.

## Design System Architecture

Midjourney publishes no public design system or brand guidelines that we could open: https://www.midjourney.com/brand and https://docs.midjourney.com/ both returned HTTP 403 to our fetch. The shipped CSS shows a Tailwind v4-style token layer on `:root`: Tailwind colour ramps in oklch (`--color-sky-500`, `--color-violet-600`, …), container sizes (`--container-mjm-main` 58rem, `--container-mjm-grid` 52rem, `--container-mjm-prose-wide` 44rem), a radius scale, and a Midjourney-specific `mjm` namespace: text sizes (`--text-mjm-fine` .72rem, `--text-mjm-small` .78rem, `--text-mjm-micro` .6rem), tracking (`--tracking-mjm-eyebrow` .22em, `--tracking-mjm-caps` .14em) and a warm palette (`--color-mjm-gold` #e8b455, `--color-mjm-gold-bright` #f8d488, `--color-mjm-amber` #cdb185, `--color-mjm-red` #b4503f, `--color-mjm-green` #6f9f5b, `--color-mjm-orange` #c8803f, `--color-mjm-soot` #0a0805). It also declares paired light/dark app themes (`--color-dark-bg` #0d0e12, `--color-light-bg` #fcfcfd, `--color-dark-primary` #ebecef, `--color-light-primary` #2e3038). None of the warm `mjm` colours or app-theme colours render on the measured home page, so they are documented here as declared variables only, not as tokens.

## Do's and Don'ts

**Do**
- Use the #06051d indigo-black as the only page background.
- Set reading text in JetBrains Mono 16px/26px, #cad5e2, with no tracking adjustments.
- Keep buttons as small DM Sans pills with 10% white hairlines, each tinted to its own hue.
- Let artwork carry the page: monochrome, textured, square tiles with 8px corners.
- Write short, first-person, plain-spoken paragraphs.
- Use #63b3ed underlined links inside running text.

**Don't**
- Don't introduce bold weights or large marketing headlines; the largest text measured is 30px.
- Don't use a bright, solid CTA colour; the pills are dark tinted fills with light labels.
- Don't use pure black or pure white surfaces.
- Don't add heavy shadows or gradients to cards; translucency and hairlines do the work.
- Don't mix in more typefaces; the page uses exactly two.
- Don't render the declared gold `mjm` palette on this home page style; it was not measured here.

## Responsive Behavior

Not measured. The extractor's 390px mobile pass did not reach the Midjourney page: it recorded a security-verification interstitial ("Performing security verification", system-ui text on white), so no mobile type sizes, layout or navigation data exist for the real site. The CSS declares a `--breakpoint-max-col` of 1608px, but how the layout changes at narrower widths was not measured.

## Iteration Guide

1. Start with a #06051d page and a single centred 768px text column.
2. Set headings in JetBrains Mono 30px/48.75px and body in JetBrains Mono 16px/26px, #cad5e2.
3. Put a coloured thin-line icon next to each section heading (violet, blue, green, amber in the measured order).
4. Build the action row from three DM Sans 16px/500 pills, 42px tall, 8px 20px padding, 9999px radius, 1px #ffffff1a border, each with its own dark tint and light label.
5. Add a 4-column grid of 196px square art tiles with #96c8ff33 fill, #ffffff1a border and 8px radius.
6. Use #63b3ed for inline links and keep them underlined.
7. Compare with the capture: the page should feel like a calm research notebook under a glowing ASCII sky, not like a SaaS landing page.
