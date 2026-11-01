---
version: alpha
name: "EL PAÍS"
category: "News & Publishing"
description: "EL PAÍS, Spanish daily newspaper: white canvas, #111111 ink, MajritTx serif headlines at 30px with -1.15px tracking, MajritTxRoman 15px body, 11px uppercase MarcinAntB navigation, one yellow #f7cf3c subscribe accent."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#111111"
  surface-2: "#f4f4f4"
  surface-3: "#001722"
  ink-2: "#4a4a4a"
  ink-3: "#666666"
  ink-4: "#000000"
  ink-5: "#222222"
typography:
  display:
    fontFamily: MajritTx, serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36.8px
  heading:
    fontFamily: MajritTx, serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 32.1px
    letterSpacing: "-1.15px"
  subheading:
    fontFamily: MajritTxRoman, serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 29.9px
    letterSpacing: "-0.6px"
  body:
    fontFamily: MajritTxRoman, serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 19.05px
  nav:
    fontFamily: MarcinAntB, sans-serif
    fontSize: 11px
    fontWeight: 700
    lineHeight: 23.98px
    textTransform: uppercase
rounded:
  xs: 2px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 13px
  s10: 15px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 1px 0px
---

# EL PAÍS

## Overview

EL PAÍS (https://elpais.com/, page title "EL PAÍS: el periódico global", language `es-ES`) is a Spanish daily newspaper. The measured home page is 21510px tall at 1280px and holds 1964 visible elements, so it is a long, dense front page. The masthead in the capture is centred: the EL PAÍS wordmark in black serif capitals with a "50" mark and the line "EL PERIÓDICO GLOBAL", a hamburger icon at left, and at right a yellow "SUSCRÍBETE" button next to a thin-outlined "INICIAR SESIÓN" control. Above it a small strip shows the date and "Actualizado" time with an edition selector ("Seleccione: ESPAÑA"). Under the masthead a single-line section menu in tiny uppercase sans runs across the page (INTERNACIONAL, OPINIÓN, ESPAÑA, ECONOMÍA, SOCIEDAD, MEDIO AMBIENTE, CIENCIA, TECNOLOGÍA, CULTURA, DEPORTES, BABELIA, EL PAÍS SEMANAL, CINCO DÍAS, EXPRÉS and a bold "50 ANIVERSARIO"), framed by black rules.

Below, the front page is a multi-column editorial grid: a lead story with a large photograph and a bold serif headline, secondary stories in narrower columns each with a photo, serif headline, grey summary and small uppercase byline with the city. Section headers such as "Elecciones 29-N" are set in bold serif with a heavy black rule above. A small yellow square with a black "E" marks exclusive subscriber content. Video items carry a circular play button.

The voice is journalistic and restrained: black text on white, serif headlines, almost no colour besides photographs and a single yellow accent. At the time of the first capture an advertising banner with a close button covered part of the lead story; it is not documented here as brand UI. The extraction recorded `consentOverlaysHidden` for two scrim elements, which were removed before measurement.

## Colors

The palette is near-monochrome.

- Canvas `#ffffff` (5438 by area).
- Ink and primary `#111111`: the most-read text colour (14972 characters) and the colour of the main headlines. `ink-4` `#000000` is used for the menu and rules (1225 characters; 21 black borders), `ink-5` `#222222`.
- `ink-2` `#4a4a4a` for article summaries (5567 characters) and `ink-3` `#666666` for bylines and metadata (3016).
- `surface-2` `#f4f4f4` for light panels (200) and `surface-3` `#001722`, a very dark teal-navy used for dark blocks (57).
- Yellow `#f7cf3c`: the "SUSCRÍBETE" button fill, with `#111111` text; the same yellow is a measured border colour (one instance). It is the one brand accent, though the extractor did not assign it to a primary role, so `primary` repeats `#111111`.
- Minor measured fills: `#016ca2`, `#717684`, `#f1f2f4`, `#efefef`; `#ebebeb` hairlines (5 borders). Blue and red items in the first extraction came from third-party widgets and are not tokens.

## Typography

Three families, all proprietary web fonts named in the CSS: MajritTx (serif, weights 500, 600, 700, 900 and italics), MajritTxRoman (serif, 400) and MarcinAntB (sans-serif, 400, 500, 700). MajritTx covers 15048 characters, MajritTxRoman 5666 and MarcinAntB 4608. Public substitutes were not researched.

- `display`: MajritTx 700, 32px/36.8px.
- `heading` (lead and section headlines): MajritTx 700, 30px/32.1px, letter-spacing -1.15px.
- `subheading`: MajritTxRoman 400, 26px/29.9px, letter-spacing -0.6px, used for large quotes and opinion headings.
- `body`: MajritTxRoman 400, 15px/19.05px (8911 characters).
- `nav`: MarcinAntB 700, 11px, uppercase, line-height 23.98px.
- Other sizes: 20px (3732 characters, most story headlines, weight 600, -0.29px tracking in the first measurement), 16px, 18px, 14px, 13px, 17px and 27px.

Letter-spacing is tightened in proportion to size across the first measurement: 30px at -1.08px, 26px at -0.65px, 20px at -0.29px, 18px at -0.4px, 16px at -0.09px, 15px at -0.2px and 14px at -0.2px. Weights in use are 400 (10088 characters), 600 (8338), 700 (6195), 900 (446) and 500 (265), so the 600 weight carries most story headlines and 900 appears on 446 characters. The two serif families split the work: the heavier MajritTx face sets headlines and section titles, while the lighter MajritTxRoman face sets summaries and long quotations.

Hierarchy comes from serif weight and size; sans is reserved for navigation, bylines and utility text.

## Layout

The grid uses CSS custom properties: `--grid-column-gap: 1.3125rem`, `--grid-offset: 1.25rem`, and families of column-content variables for 6, 8, 10 and 12-column grids (for example `--grid-8-4-column-content`). The measured gap is 31px repeatedly. Content is a centred column with the lead story spanning the left column and secondary stories in two narrower columns beside it; no container width was measured. Heavy black rules and thin `#ebebeb` rules divide sections. The header block measures 216px tall.

## Elevation & Depth

The page is flat. Two shadows were measured, `rgba(0, 0, 0, 0.1) 0px 1px 4px 0px` and `rgba(0, 0, 0, 0.21) 0px 0px 5px 2px`, one instance each, on overlay elements; they are not part of the editorial layout. Depth in the editorial grid comes from rules and white space only.

## Shapes

Corners are almost square. The measured radius is 2px (seven instances, `xs`) and 50% once (round play or icon controls); the generated set also includes a 9999px pill. Photographs are rectangular and uncropped by rounding. The yellow subscribe button has a 2px radius class of corner.

## Components

- Masthead: centred wordmark with tagline, edition selector and date line.
- Subscribe button: yellow `#f7cf3c`, bold uppercase sans, `#111111` text, thin yellow border. Its colours did not change on hover in the first extraction's hover record.
- Login control: outlined, uppercase sans, with a dropdown caret.
- Section nav: MarcinAntB 11px bold uppercase, text `#000000`, 24px line.
- Story block: photo, MajritTx headline, MajritTxRoman summary in `#4a4a4a`, byline in uppercase sans `#666666`, "|" and city in lighter text.
- Related links: short bold serif lines each preceded by a dash.
- Exclusive marker: small yellow square with black "E".
- Video marker: round play button over the photo.

## Design System Architecture

No public design system or brand guideline was found; none is linked from the page. The de-facto system in the shipped CSS is a set of grid variables (`--grid-column-gap`, `--grid-offset`, `--grid-6-1-column-content` through the 12-column variants, `-gap` variants), SVG colour variables (`--svg-circle: #fff`, `--svg-action: #fff`), and a `--core_background_color: #333` seen in the re-extraction. Type is carried by named font faces rather than variables. Source: root variables in the extraction of https://elpais.com/.

## Do's and Don'ts

Do:
- Use `#111111` serif headlines on white with `#4a4a4a` summaries and `#666666` bylines.
- Use MajritTx 700 at 30px for lead headlines with -1.15px tracking.
- Set navigation in 11px bold uppercase sans.
- Separate sections with black rules.
- Use yellow `#f7cf3c` only for the subscribe action and the exclusive marker.

Don't:
- Do not add rounded corners beyond 2px.
- Do not use shadows in editorial layouts.
- Do not document ad banners, consent scrims or third-party widget colours as brand UI.
- Do not set story headlines in sans.

## Responsive Behavior

The 390px pass measured: h1 32px/36.8px (141px wide), the lead h2 at 30px/32.1px with -1.08px tracking (350px wide), and body text in MajritTxRoman at 15px. Mobile character sizes are 15px, 20px, 11px, 16px, 18px and 14px, essentially the desktop set. Menu layout, column count and breakpoints on mobile were not measured.

## Iteration Guide

1. White canvas, `#111111` ink, `#4a4a4a` secondary, `#666666` metadata, yellow `#f7cf3c` for subscribe.
2. Headlines in a heavy serif (30px/32.1px, -1.15px); body serif 15px/19.05px; navigation 11px bold uppercase sans.
3. Build a centred masthead and a one-line section menu between black rules.
4. Use a multi-column grid with 31px gaps; keep corners at 2px.
5. Run `node web/scripts/verify-designs.mjs --slug=el-pais`.
