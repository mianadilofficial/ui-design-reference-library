---
version: alpha
name: Izanami
category: "Product & SaaS"
description: "Japanese-harmony brand site (Dubai and Tokyo) set on a near-black warm field #0a0801 with soft stone-grey #d9d7d4 text, a Cinzel, Playfair Display and Shippori Mincho serif trio at 12.8px to 16px, 30.72px reading line-height, a full-bleed fog-forest hero and every corner square (0px)."
colors:
  canvas: "#0a0801"
  ink: "#d9d7d4"
  primary: "#d9d7d4"
  ink-2: "#ffffff"
typography:
  display:
    fontFamily: "\"Playfair Display\", serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  display-mobile:
    fontFamily: Cinzel, serif
    fontSize: 23.2836px
    fontWeight: 400
    lineHeight: 23.2836px
  heading:
    fontFamily: Cinzel, serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  subheading:
    fontFamily: Cinzel, serif
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 14.4px
  body:
    fontFamily: "\"Shippori Mincho\", serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 30.72px
  nav:
    fontFamily: "\"Helvetica Neue\", Arial, \"Hiragino Kaku Gothic ProN\", \"Hiragino Sans\", Meiryo, sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 1.12px
  s2: 1.28px
  s3: 1.44px
  s4: 1.6px
  s5: 2.4px
  s6: 4.8px
  s7: 6.4px
  s8: 8px
  s9: 8.4px
  s10: 9.6px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 16px 0px 16px 16px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8.4px
  footer:
    textColor: "{colors.ink}"
    padding: 24px 0px 29.6px
---

## Overview

The measured page is `https://izanami-official.com/`, titled "Izanami | Sharing the Japanese Spirit of Harmony." Izanami describes itself, in the text of its own page, as a company with offices in Dubai and Tokyo built on the Japanese idea of harmony ("和", Wa). Its stated line is "Harmony is not something to be created. It is something to be remembered." The site presents three practices: School ("Mama School"), Craft (objects and spaces inspired by Japanese aesthetics, centred in Dubai) and Retreat (private ceremonies), plus Philosophy, Company and Contact sections.

Visually the capture is a slow, cinematic, almost silent page. The first viewport is a full-bleed photograph of conifers emerging from fog, tinted grey-green and darkening toward the bottom. A small white logo mark with the word IZANAMI sits at the top left; "EN / JA" language toggles and a "MENU" label sit at the top right. The h1, "Remember who you are", is set tiny (16px Playfair Display) and floats left of centre above the trees. A footer-style strip at the bottom of the hero carries "©2026", two timestamps (08 12 21 GST, Dubai UAE; 13 12 21 JST, Tokyo JPN) and the word SCROLL. Below the hero the page falls to near-black (`#0a0801`), a vertical "PHILOSOPHY" label runs down the left edge, and body copy begins at the bottom of the capture.

The page is 1,280px by 7,703px at desktop. It is bilingual (EN/JA toggles), and a consent overlay in the navigation was hidden during measurement.

## Colors

- **Canvas `#0a0801`** (`colors.canvas`): the root `--color-black` variable; a warm black, not a neutral one. It accounts for essentially all measured background area (1,024 against 5 for the light value).
- **Ink `#d9d7d4`** (`colors.ink`, `colors.primary`): the root `--color-white`, a warm stone grey. It carries 1,230 weighted characters. The site has no separate action color; the same grey is used for links and navigation.
- **Pure white `#ffffff`** (`colors.ink-2`): the h1 and the logo mark over the photograph; 20 weighted characters. Root variable `--color-white-pure`.
- Root variables also name `--color-black-pure` `#000` and `--color-yellow` `#caa100`. The yellow was not seen on any measured text or fill in the capture, so no token is declared for it.
- The photograph supplies a desaturated green-grey palette that is image content, not UI color.

## Typography

Fonts loaded: Satoshi, Cinzel 400, Playfair Display 400 and Shippori Mincho 400. All measured text is weight 400.

- **Display / h1 (Playfair Display)**: 16px / 16px, white, used for "Remember who you are".
- **Heading (Cinzel)**: 16px / 16px; section labels such as "philosophy". The 40px Cinzel/serif size appears for 94 characters (large decorative or numeric headings).
- **Subheading (Cinzel)**: 14.4px / 14.4px; project titles like "01 School".
- **Body (Shippori Mincho)**: 12.8px with a 30.72px line-height (2.4 times the size), the page's dominant reading style (771 characters).
- **Nav (Helvetica Neue / Arial / Hiragino fallbacks)**: 16px, for links and language toggles; the extractor also measured the nav list in Cinzel 11.2px.
- By characters: Shippori Mincho 771, Cinzel 424, Playfair Display 131. Sizes: 12.8px (824), 16px (201), 11.2px (129), 40px (94), 14.4px (78).
- Mobile (390px) display token: Cinzel 23.2836px / 23.2836px, used for the full-screen menu entries (home, philosophy, projects, school, craft).

Cinzel, Playfair Display and Shippori Mincho are all open families available from Google Fonts; no substitute is needed.

## Layout

- Desktop 1,280px wide, 7,703px tall. A 12.8px `--vw` and 8px `--vh` unit pair are published as root variables, which suggests viewport-unit scaling of the layout.
- Content is offset from the left edge: the hero h1 and the philosophy paragraph start at about the same left inset, well inside the logo column.
- Spacing scale (measured paddings and gaps): 1.12, 1.28, 1.44, 1.6, 2.4, 4.8, 6.4, 8, 8.4, 9.6px at the small end, with 16px gaps (18 uses), 24px, 32px and 64px paddings (9 uses) for sections.
- Vertical text is used for section labels (the h2 "philosophy" measures 16px wide by 98px tall).
- Z-index layers are named in the root variables: grid 100, loader 90, header 80, transition 70, nav webgl 60, nav 50, aside 40.

## Elevation & Depth

No shadows and no borders were measured (`boxShadows` and `borderColors` are empty). Depth comes from photography, a dark gradient that dissolves the hero into the black canvas, and a WebGL navigation layer (the root variable `--nav-webgl-index` is 60). Text is placed over the image without panels or scrims.

## Shapes

`desktop.frequencies.borderRadii` is empty: every rendered element computes a 0px radius. The token `rounded.none: 0px` records this. Buttons, language toggles and links are unboxed text; the only shape in the page is the rectangular logo mark and the photographs.

## Components

- **Navigation**: unboxed text links, ink `#d9d7d4`, 16px nav face, 8.4px padding per link; a MENU label opens a full-screen list in Cinzel 23.2836px on mobile with a `#0a0801` background.
- **Language toggle**: "EN" and "JA" text links with a small dot indicator above; hover did not change color (measured identical rgb(217, 215, 212)).
- **Text link ("View Philosophy")**: 16px, padding 16px 0 16px 16px, a long hover-reveal link, no box.
- **Footer**: `#d9d7d4` text with 24px top and 29.6px bottom padding.
- **Project index**: numbered entries (01 School, 02 Craft, 03 Retreat) in 14.4px Cinzel with 24px right padding.
- No filled buttons, cards or inputs were detected.

## Design System Architecture

No public design system or brand-guidelines page was found; the page does not link to one. The site's CSS publishes a small variable set: color variables (`--color-black`, `--color-black-pure`, `--color-white`, `--color-white-pure`, `--color-yellow`), viewport units (`--vw`, `--vh`) and layer indices (`--grid-index`, `--loader-index`, `--header-index`, `--transition-index`, `--nav-webgl-index`, `--nav-index`, `--aside-index`). Everything else is component-level CSS. The layering names indicate a loader, page transitions and a WebGL nav as first-class parts of the build.

## Do's and Don'ts

- Do set text in warm stone grey `#d9d7d4` on warm black `#0a0801`.
- Do use serif faces only: Cinzel for labels, Playfair Display for the opening line, Shippori Mincho for reading text.
- Do give reading text a 30.72px line-height at 12.8px.
- Do keep every corner square.
- Don't add buttons, cards or shadows; none exist in the measured page.
- Don't use the root yellow `#caa100` as a UI accent without a new measurement.
- Don't put panels behind text over photography.

## Responsive Behavior

Measured at 390px: the navigation becomes a full-height (844px) `#0a0801` list set in Cinzel 23.2836px / 23.2836px; body text shrinks to Shippori Mincho 11.6418px / 27.9403px; no call to action was detected. Mobile sizes by characters: 11.6418px (1,250), 10.6716px (397), 15.5224px (144), 13.5821px (95), 29.1045px (94). Other breakpoints are not measured.

## Iteration Guide

1. Canvas `#0a0801`, text `#d9d7d4`, white `#ffffff` only over photography.
2. Pair Cinzel (labels), Playfair Display (opening statements), Shippori Mincho (body at 12.8px/30.72px).
3. Keep headings small; let imagery carry scale.
4. Use only text links; keep corners at 0px.
5. Compose from the spacing scale: small tracking-like steps (1 to 10px), 16px gaps, 24 to 64px section padding.
6. For new pages keep the hero as a full-bleed photograph fading to the black canvas.

## Imagery and Microcopy

The hero is a single misty-forest photograph, cool grey-green at the top and falling to black, with no people and no product. The copy is short, reflective and written in the second person: "Remember who you are". Metadata is treated as ornament: the copyright line, the two city timestamps (Dubai and Tokyo) and the SCROLL cue are all set in small Cinzel capitals along one baseline. Section names (Philosophy, Projects, School, Craft, Retreat, Company, Contact) are single words, and the kanji "和" (Wa) is quoted inside the philosophy text rather than used as a graphic.
