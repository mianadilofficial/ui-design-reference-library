---
version: alpha
name: SPIN A TALE (IVRESS Brand Site)
category: "Tech & AI"
description: "Dark, story-driven brand microsite for the Japanese company IVRESS: near-black canvas #000203, warm off-white ink #faf5f0, amber highlight #f9b639, Basilia Compress D condensed display, Josefin Sans UI labels, A-OTF Ryumin serif for Japanese narrative text, and 48px pill outline buttons."
colors:
  canvas: "#000203"
  ink: "#faf5f0"
  primary: "#f9b639"
  on-primary: "#000203"
  ink-bright: "#ffffff"
  hairline: "#ffffff4d"
typography:
  display:
    fontFamily: Roboto, "Open Sans", Lato, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", "Hiragino Sans", Meiryo, "Hiragino Kaku Gothic ProN", sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
  display-mobile:
    fontFamily: "\"Josefin Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
  body:
    fontFamily: "\"A-OTF Ryumin Pr6N\", a-otf-ryumin-pr6n, ryumin-pr6n, ryo-gothic-plusn, \"Hiragino Sans\", Meiryo, \"Hiragino Kaku Gothic ProN\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 55.2px
    letterSpacing: 3px
  page-body:
    fontFamily: "\"Josefin Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  body-dominant:
    fontFamily: Basilia Compress D
    fontSize: 12px
    fontWeight: 400
rounded:
  pill: 48px
spacing:
  s1: 3px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.pill}"
    padding: 4px 16px
    height: 36px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display-mobile}"
    padding: 8px 12px
---

## Overview

SPIN A TALE (紡ぐ物語) is a brand-story microsite published by 株式会社イヴレス (IVRESS) at brand.ivress.co.jp. Its page title reads "SPIN A TALE ー 紡ぐ物語 ー｜株式会社イヴレス ブランドサイト" and its meta description says it is a brand story that depicts the company's philosophy. The site is not a product catalogue or a corporate brochure: it is a long, scroll-driven narrative with a prologue and numbered chapters, built for atmosphere first. The measured document is 18,400px tall at a 1280px viewport, and the measured band map shows a single dark band, with the readable chrome limited to a narrow strip at the right edge.

The visual identity is a night scene. The canvas is #000203, a black with a trace of blue, and it fills essentially the whole viewport area (the area-weighted background measurement is dominated by it). Text is a warm off-white, #faf5f0, which the site itself names `--color-white` and `--default-color`. A single amber, #f9b639, is declared as `--hl-color` in the root variables and is the one warm accent. The capture shows a dim, blue-black photographic scene of a corridor with a large condensed "PROLOGUE" title at the top left and a large "01" chapter numeral at the lower left, with vertical Japanese text running down the right side.

The tone is literary and cinematic. The first screen asks the reader to "CLICK TO START" (and "TAP TO BEGIN"), a sound toggle ("SOUND") and a language link ("EN") sit in the header, and the narrative copy is in Japanese: it describes a traveller who keeps exploring the edge of the world, meets a nameless figure with shadows trembling on its back, and releases light to drive darkness away. A body paragraph quoted in the extraction begins "―逆境を進化の糧としろ―" ("Make adversity the fuel of evolution"). A corporate-site link in a pill outline button is the only conventional call to action.

Key characteristics:
- Near-black canvas #000203 with warm ink #faf5f0 and one amber accent #f9b639.
- Three typeface voices: Basilia Compress D (display), Josefin Sans (interface labels), A-OTF Ryumin Pr6N (Japanese narrative).
- A single measured radius, 48px, used on outlined pill buttons with a 1px translucent white border.
- No box shadows measured: depth comes from photography and darkness.

## Colors

The palette is deliberately tiny. All values below were measured on the live page or declared in its root variables.

- **Canvas (#000203):** the page background and `--color-black`. It is also the text color that appears on the amber highlight (12 characters measured in this color), so it is recorded as `on-primary`.
- **Ink (#faf5f0):** the most-read text color (124 characters) and `--color-white`. Navigation, the corporate-site button and the display lettering use it.
- **Ink bright (#ffffff):** a second text white measured on 44 characters; the root variables do not name it.
- **Primary (#f9b639):** `--hl-color`. The extractor reported #0000ee as the generated primary, which is the browser default link color and not a brand color, so it was replaced by the declared highlight. No filled button using the amber was measured in the capture; the token records the declared accent only.
- **Hairline (#ffffff4d):** the 1px border color on the pill button, a white at roughly 30 percent alpha (the measured value is the 8-digit hex).

Additional narrative-layer colors appear only inside body text runs: the story paragraph's measured text color is #02092b with child colors #feedb5, #feeaaa, #fee79f and #fee594, a run of pale golds that the extraction reports as child colors of the narrative paragraph. They are not promoted to tokens because the measurement does not show them as standalone interface roles.

Usage guidance: keep the canvas dark everywhere; use ink for all reading text; reserve amber for emphasis, never for large fills.

## Typography

Three families are loaded by the page (`loadedFonts`): Josefin Sans 400, Basilia Compress D 400 (served as /fonts/basilia_compress_d.woff2) and a Ryumin serif (a-otf-ryumin-pr6n, via the `--story-font` stack) with ryo-gothic-plusn at 500 as its gothic partner.

- **Display / heading lettering:** `--main-font` is "Basilia Compress D", serif. By character count it is the dominant face (77 characters) and the large sizes in the measurement (64px at 1px letter spacing, 160px, 56px) belong to this narrative display layer. The token `body-dominant` records the face at 12px, the measured dominant size and family pairing.
- **UI labels:** `--secondary-font` is "Josefin Sans", sans-serif at 12px / 18px, weight 400, with 0.48px letter spacing on 12px text. This is the page body font (`page-body`) and the navigation face.
- **Corporate button:** the pill button label uses a Roboto-led system stack at 14px, weight 300, line height 21px (`display`).
- **Narrative copy:** A-OTF Ryumin Pr6N at 24px, weight 500, line height 55.2px (2.3 times the size) with 3px letter spacing. The very open leading and tracking set the reading rhythm of the story.
- **Mobile pass:** the 390px measurement recorded the "CLICK TO" prompt in Josefin Sans 12px / 12px (`display-mobile`), narrative text at 18px / 39.6px with 4px letter spacing, and display sizes of 40px and 149.76px.

Font substitutes: Basilia Compress D and A-OTF Ryumin are commercial typefaces. The site's own fallback chain for narrative text is Hiragino Sans, Meiryo, Hiragino Kaku Gothic ProN, sans-serif; for the display face it is serif.

## Layout

The page is one continuous vertical canvas of 18,400px (desktop) with the viewport height exposed as `--app-height: 100vh`. The extractor's band map found one full-height dark band and a content column hugging the right edge (content left 1104, right 1240 on desktop) where the vertical Japanese text sits. Header links visible: 1; a menu toggle was not detected. The maximum card-column count recorded is 7, which comes from the narrative's per-character spans rather than from a card grid.

Measured spacing values, taken from gaps and paddings: 3px, 4px, 8px, 12px, 16px, 24px and 32px. The pill button uses 4px 16px padding and is 36px high and 174px wide. The navigation link uses 8px 12px padding and is 34px high.

Composition pattern: a full-bleed photographic scene fills the viewport, a very large condensed title and chapter numeral anchor the lower-left, and small utility controls (SOUND, EN) sit at the top right. Narrative text is set in vertical lines along the right edge instead of a centred column.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Depth is produced by photography, vignette-like darkness and the contrast between the black canvas and warm-white lettering. The only line treatment is the 1px #ffffff4d outline on the pill button. The scrim element named "prologue" was hidden for measurement, so any overlay opacity is not recorded here.

Interaction depth is minimal: the measured hover on the EN link changes opacity from 1 to 0.7 with no color, border or shadow change. Keyboard focus on the EN link produced a 1px auto outline in rgb(0, 95, 204) with a 1px offset, which is the browser default focus ring and not a brand token.

## Shapes

A single radius, 48px, was measured (three elements). It is applied to the outlined corporate-site button, which is 36px high, so the corners are fully rounded in effect. Everything else computes a 0px radius, including the body and narrative paragraphs. The shape language is therefore: one pill-shaped control, everything else rectilinear and borderless.

Border: 1px solid #ffffff4d, a translucent white that reads as a hairline on the dark canvas.

## Components

- **button-secondary (corporate site link):** text コーポレートサイト, ink #faf5f0, Roboto stack 14px / 300 / 21px, radius 48px, padding 4px 16px, height 36px, 1px #ffffff4d border, transparent fill. This is the extractor's secondary and outlined CTA; no primary filled CTA was measured, so none is declared.
- **nav:** a header 42px high and 148px wide on desktop (40px by 83px at 390px) holding the "SOUND" button and the "EN" language link in Josefin Sans, ink color.
- **nav-link:** "EN", Josefin Sans 12px, 8px 12px padding, 34px high; hover opacity 0.7.
- **Start prompt:** the "CLICK TO / START" and "TAP TO / BEGIN" overlay on the loading state, set in Josefin Sans. It is documented as measured and is a one-time entry gesture rather than reusable navigation.
- **Counter:** the loading state shows a percentage counter ("00 %") and a line "ここは、光を拒む世界" ("This is a world that refuses light") with "A BRAND SITE BY IVRESS" beneath it.

## Design System Architecture

No public design system, brand guideline or token package was found. The page was fetched at https://brand.ivress.co.jp/ and its links point only to the sitemap, the Japanese and English versions (/ja and /en), the corporate site https://www.ivress.co.jp/, a contact page, a privacy page and the company's Facebook, Instagram and X profiles. The site is built with Astro (its stylesheet is served from /_astro/).

The de-facto system is a small set of root custom properties measured on the page: `--main-font`, `--secondary-font`, `--story-font`, `--color-white` (#FAF5F0), `--color-black` (#000203), `--default-color` (#FAF5F0), `--hl-color` (#f9b639), `--main-ease` (cubic-bezier(.25, 1, .5, 1)) and `--app-height` (100vh). Motion uses the shared `--main-ease` curve. The asset record notes the fonts and imagery are owned by the site owner, so this entry is reference and prototype material only.

## Do's and Don'ts

Do:
- Keep the canvas #000203 and set reading text in #faf5f0.
- Use Basilia Compress D for very large titles and chapter numerals, Josefin Sans for small utility labels, and Ryumin for Japanese narrative.
- Give narrative paragraphs generous leading (55.2px on 24px) and 3px tracking.
- Use the 48px pill with a 1px #ffffff4d border for outbound links.
- Use amber #f9b639 sparingly as the highlight.

Don't:
- Do not use #0000ee as a link color; it is a browser default.
- Do not add drop shadows or rounded cards; none were measured.
- Do not use the loading counter, the scrim or the focus ring as brand components.
- Do not put filled amber buttons into the system; none were measured.

## Responsive Behavior

Only the 390px measurement pass is documented here. It recorded: the start prompt "CLICK TO" in Josefin Sans 12px; the narrative paragraph at 18px with 39.6px line height and 4px letter spacing; a header 40px by 83px; display sizes of 40px and 149.76px; and a content strip at 328px to 370px. The stylesheet declares media queries at max-width 767px (5 rules), 980px (2), 768px, 374px, 1024px, 420px, 375px, 380px and 579px. A menu toggle was not detected at either width. Behavior beyond these numbers, including how the vertical text reflows, is not measured. Tablet widths were not captured.

## Iteration Guide

1. Start from canvas #000203 and ink #faf5f0; add amber #f9b639 only after the base is in place.
2. Set the three font roles first: Basilia Compress D display, Josefin Sans 12px labels, Ryumin 24px/55.2px narrative.
3. Build one pill button: 36px high, 48px radius, 4px 16px padding, 1px #ffffff4d border, ink text.
4. Compose each chapter as a full-bleed dark scene with a huge condensed title at lower left and utility links at top right.
5. Apply hover as opacity 0.7 and the shared easing cubic-bezier(.25, 1, .5, 1) for motion.
6. Re-measure at 390px before declaring any mobile value; the numbers above are the only mobile data recorded.
