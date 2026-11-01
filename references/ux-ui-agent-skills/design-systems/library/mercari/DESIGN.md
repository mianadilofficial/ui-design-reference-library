---
version: alpha
name: Mercari
category: "Design Systems"
description: "Mercari corporate site (about.mercari.com) — a white-canvas Japanese-English editorial layout in near-black #222222 ink with Mercari Red #ff0211 reserved for eyebrow labels, hover states and circular icon buttons, set in Avenir-Black and Avenir-Roman with Yu Gothic fallbacks and MercariSans on mission headings, using 4px, 10px and 34px radii and a pale blue #e4eefa service band."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#ff0211"
  surface-band: "#e4eefa"
  surface-soft: "#f7f7f7"
  ink-body: "#333333"
  ink-muted: "#999999"
  hairline: "#dddddd"
typography:
  display:
    fontFamily: Avenir-Black, Arial, 游ゴシック体, YuGothic, 游ゴシック, "Yu Gothic", sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 46px
  display-mobile:
    fontFamily: Avenir-Black, Arial, 游ゴシック体, YuGothic, 游ゴシック, "Yu Gothic", sans-serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 34px
  heading:
    fontFamily: MercariSans-Regular, Avenir-Roman, Arial, 游ゴシック体, YuGothic, "游ゴシック Medium", "Yu Gothic Medium", 游ゴシック, "Yu Gothic", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 42px
  subheading:
    fontFamily: Avenir-Black, Arial, 游ゴシック体, YuGothic, 游ゴシック, "Yu Gothic", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 38px
  body:
    fontFamily: Avenir-Roman, Arial, 游ゴシック体, YuGothic, "游ゴシック Medium", "Yu Gothic Medium", 游ゴシック, "Yu Gothic", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 34px
  nav:
    fontFamily: Avenir-Black, Arial, 游ゴシック体, YuGothic, 游ゴシック, "Yu Gothic", sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 38px
rounded:
  xs: 4px
  sm: 10px
  md: 34px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 13px
  s4: 30px
  s5: 36px
  s6: 55px
  s7: 60px
  s8: 80px
  s9: 160px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    padding: 60px
---

## Overview

The measured page is the corporate site of Mercari at about.mercari.com, a bilingual (English and Japanese) company portal rather than the marketplace app. It reads as an editorial brochure: a white canvas, generous vertical rhythm, large Japanese headlines in near-black ink, and a single saturated accent, Mercari Red `{colors.primary}`, used sparingly. The header carries the wordmark on the left, seven navigation items, each shown as a small English label above a smaller Japanese gloss, and a round red menu button on the right. Below it a featured-news carousel presents an eyebrow label in red, a date chip, a headline, a short red rule with a "read more" link, and a wide banner image strip whose neighbouring slides peek in from the left and right edges.

The imagery is flat vector illustration: friendly people holding phones, isometric city and payment scenes, and an infinity-loop drawing of people sharing objects. Colour inside the illustrations is varied (greens, blues, yellows), while the page chrome stays almost monochrome. That contrast is the signature of the page: restrained typography and neutral surfaces around colourful, warm illustrations. Copy is bilingual and calm, with short mission-style statements and descriptive paragraphs rather than marketing slogans.

## Colors

The canvas is `{colors.canvas}` white. Primary text is `{colors.ink}`, the most-read text colour on the page, with `{colors.ink-body}` used for running paragraph text and `{colors.ink-muted}` for the lowest-emphasis labels such as the date chip. `{colors.hairline}` is the lightest measured grey. The accent is `{colors.primary}`, Mercari Red: it colours eyebrow labels ("Featured", "New Group Mission", "Services"), the thin rule beside the read-more link, the filled round buttons and the active carousel dot, and every navigation link turns this red on hover (measured on the nav items). Two quiet surfaces support the layout: `{colors.surface-band}` is a pale blue band behind the services block, and `{colors.surface-soft}` is a light grey used for small chips and panels.

Rule of thumb from the measurements: red is text-sized or button-sized, never a large fill. White cards sit on the blue band, and the band itself fills the width of the viewport.

## Typography

Latin text uses Avenir: `Avenir-Black` for headings, navigation and the 30px display, `Avenir-Roman` for body. Japanese text falls through to Yu Gothic (the stack lists 游ゴシック体, YuGothic and Yu Gothic) and generic sans-serif. `MercariSans-Regular` appears in the h2 stack and is among the loaded web fonts (MercariSans-Regular and MercariSans-Bold). The display token is `{typography.display}` at 30px / 46px line height, shrinking to 26px / 34px on a 390px viewport (`{typography.display-mobile}`). Section heading is 18px with a generous 42px line height; subheading 16px; body 18px with a 34px line height, loose leading suited to Japanese text; navigation labels are 22px in the measured stack.

### Font substitutes

Avenir and MercariSans are licensed. Takram's project page states Mercari Sans was designed by Akira Kobayashi and Monotype Studio and pairs with Tazugane Gothic as the Japanese corporate font (https://Takram.com/projects/mercari-sans). For open substitutes, use a geometric humanist sans such as Nunito Sans for Latin and Noto Sans JP for Japanese; these are suggestions, not measured values.

## Layout

The page width measured at desktop is 1280px. Content sits in a left-aligned column with a wide left gutter; text blocks run about 973px wide at most for headlines. Sections alternate two-column compositions: copy on the left, illustration on the right, then a white card on the blue band with the illustration beside it. Spacing tokens measured on the page are `{spacing.s1}`, `{spacing.s2}`, `{spacing.s3}`, `{spacing.s4}`, `{spacing.s5}`, `{spacing.s6}`, `{spacing.s7}`, `{spacing.s8}` and `{spacing.s9}`; the larger values (80px and 160px) separate major sections, 30px and 60px are card padding scales, and the small values space eyebrow labels and chips.

## Elevation & Depth

No box shadows were measured on the page and no border colours were detected. Depth comes only from surface contrast: a white card on the `{colors.surface-band}` band, and chips on `{colors.surface-soft}`. The carousel adds layering by letting adjacent slides peek behind the active one. Do not add drop shadows when extending the system; separate content with surface colour and spacing.

## Shapes

Radii measured: `{rounded.xs}` (4px) on cards and chips, `{rounded.sm}` (10px), `{rounded.md}` (34px) on larger rounded panels, and `{rounded.pill}` for pill shapes. Circular elements, measured as 50% radius, are the menu button, the arrow button and the external-link button. Corners are soft but never exaggerated; images in the carousel are square-cornered.

## Components

- **Navigation link** (`nav-link`): `{typography.nav}` in `{colors.ink}`; hover colour becomes `{colors.primary}`. Each item is a two-line stack of English and Japanese labels.
- **Card** (`card`): white background, `{rounded.xs}`, 60px padding, red eyebrow label, product logo, short paragraph, round red icon button with a label beside it.
- **Round icon button**: a filled red circle holding a white arrow, menu glyph or external-link glyph, followed by a bold "see more" or "open site" label. The extractor found no conventional rectangular primary button on this page, so no `button-primary` token is declared.
- **Carousel**: dot pagination with the active dot ringed in red, slide banners peeking left and right.
- **Date chip**: tiny pale pill with grey text.

## Design System Architecture

The page was captured on the corporate site, and no design-system stylesheet variables were found (the extracted CSS root variables are empty). The dsUrl in the queue, https://design.mercari.com, is a real Mercari design site: the page I opened announces the rebrand, describes the new logo, motion and colour approach with Mercari Red, and states it applies to Mercari marketplace products, not the corporate site. Its colour values are not published there, and I cannot verify that about.mercari.com is built from it, so no values were taken from it. The about.mercari.com header and footer links I opened mention no design-system or brand-guideline pages. The de-facto system is therefore visible only in shipped styles: a single accent colour, Avenir plus MercariSans, three radii and a spacing ladder.

## Do's and Don'ts

- Do keep the canvas `{colors.canvas}` white and body text near-black `{colors.ink}`.
- Do use `{colors.primary}` for small accents: eyebrow labels, hover states, round icon buttons.
- Do pair English labels with Japanese glosses in navigation.
- Do keep Japanese body leading loose (34px at 18px).
- Don't fill large areas with red; the blue `{colors.surface-band}` is the only large tinted area.
- Don't add shadows or borders; none were measured.
- Don't use Avenir-Black for long paragraphs; it is reserved for headings and navigation.
- Don't treat the illustrations' greens, yellows and blues as UI colours.

## Responsive Behavior

At 390px the h1 becomes `{typography.display-mobile}` (26px / 34px). The mobile layout of the two-column sections and navigation was not measured, so it is not described here. Because spacing is generous (the 160px section gap), reduce it proportionally rather than removing it. Only the h1 was re-measured on mobile; other mobile values are unmeasured and omitted.

## Iteration Guide

1. Start from white and near-black; add Mercari Red only for an eyebrow or a hover.
2. Pick one illustration style (flat vector, human figures) and let it carry colour.
3. For new cards use `{rounded.xs}` with 60px padding on the blue band.
4. For round buttons use a red circle with a white glyph and a bold label.
5. Keep bilingual labels paired. Re-run the gate after any token rename.
6. When adding a new section, begin with a small red eyebrow label, then a heading in the display style, then a paragraph at body size, then a round button; this is the order the captured sections follow.
