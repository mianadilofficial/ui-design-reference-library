---
version: alpha
name: "Max Mara Untamed Heroine"
category: "Fashion & Apparel"
description: "Max Mara Untamed Heroine story microsite entry screen, measured live: painted sage background (largest area #c6c4b0), cream #ebe1bd type, Libre Baskerville 60px title and 20px italic body with Inter 12px notes, 8px radius."
colors:
  canvas: "#c6c4b0"
  page-body: "#fafafa"
  ink: "#645b41"
  ink-on-media: "#ebe1bd"
  primary: "#ebe1bd"
  ink-2: "#fdf9e4"
  nav-text: "#212121"
typography:
  display:
    fontFamily: "\"Libre Baskerville\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 60px
    fontWeight: 400
    lineHeight: 70.0002px
  display-mobile:
    fontFamily: "\"Libre Baskerville\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 39.6946px
    fontWeight: 400
    lineHeight: 49.6182px
  body:
    fontFamily: "\"Libre Baskerville\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 8px
spacing:
  s1: 3px
  s2: 8px
  s3: 12px
  s4: 20px
  s5: 40px
components:
  nav:
    textColor: "{colors.nav-text}"
    padding: 0px 40px
---

# Max Mara Untamed Heroine

## Overview
Untamed Heroine (untamedheroinegame.maxmara.com) is an interactive story microsite from Max Mara, built around the house's FW25 runway collection. The measured entry screen is a single full-viewport scene. Behind everything lies a soft green-grey watercolour of torn paper layers, an image rather than a CSS colour. On top sit a two-line title, "Untamed" in italic over "HEROINE" in capitals, an italic intro paragraph, a button labelled "Start the Experience", and a small note at the bottom saying that the immersive story features narration and music and that the best experience comes with sound on. The intro paragraph reads: "Walk as the Untamed Heroine through a journey of torn pages and personal truths. Inspired by Max Mara's FW25 Runway Collection, this coming-of-age story explores growth, strength and self-discovery."

The page is 1280px wide and 800px tall on desktop: one screen, no scroll. The identity is literary and tactile. The art direction pairs a painterly paper texture with a classical serif and cream-coloured type, so the page feels like a book cover rather than an app. A "CLOSE" control is also present in the header text, which belongs to the experience that follows the entry screen.

Only this entry screen was measured; the story screens behind the button were not opened.

## Colors
The measured palette is small.
- `canvas` #c6c4b0 is the largest background area in the area-weighted measurement: a pale sage tone that stands in for the watercolour image. It is the colour the screen reads as, though the actual painted surface varies between lighter and darker greens in the capture.
- `page-body` #fafafa is the computed body background that sits behind the full-bleed image.
- `ink` #645b41 is the warm dark brown of the experience's reading text. It is in the CSS corpus, and a Playwright probe after "Start the Experience" measured it as the computed colour of the first story dialog ("Coat of Bravery", "Press … to begin your journey.") set on `{colors.ink-2}` #fdf9e4 paper (`.dialog__inner`), and as the background of the header counter (`.header-state__counter`). It reads at 3.83:1 on the sage `canvas` and 6.37:1 on the #fdf9e4 paper. This is the colour for body copy on light surfaces.
- `ink-on-media` and `primary` #ebe1bd is a warm cream, the most-read text colour on the entry screen (184 characters weight). It colours the title and intro paragraph, which sit on the painted watercolour image, not on a flat colour: on the flat sage #c6c4b0 it would read at only 1.34:1, so it is reserved for type over imagery. Because the one interactive element is cream-on-image text rather than a filled button, `primary` takes the same value.
- `ink-2` #fdf9e4 is a lighter cream used for the second measured text colour (115 characters weight), which is also the resting colour of the "Start the Experience" label.
- `nav-text` #212121 is the near-black the header role reports.

Usage rule: cream type on a green-grey painted surface; near-black is reserved for header text. The golden fill visible on the start button in the capture is part of the page's rendered artwork and was not measured as a background colour, so it is not tokenised.

## Typography
Two families are used. **Libre Baskerville** (loaded at 400, 400 italic and 700) sets the title and the paragraph and covers most of the page's characters (204 weight). **Inter** (loaded as a variable font from 100 to 900) sets the small interface text (95 weight), including the bottom note and the header.
- `display` is Libre Baskerville 60px, weight 400, line height 70.0002px: the two-line title, first line italic, second line in capitals.
- `body` is Libre Baskerville 20px, weight 400, line height 30px: the italic intro paragraph.
- `display-mobile` is 39.6946px, weight 400, line height 49.6182px from the 390px mobile pass.
- The most-used sizes by character weight are 20px (170), 12px (95), 13.3334px (20, the button label) and 60px (14).
The declared stack after the first family is -apple-system, system-ui, Segoe UI, Roboto, Helvetica, Arial and sans-serif.

Font substitutes: both Libre Baskerville and Inter are open fonts that the site loads itself; no proprietary substitute is involved.

## Layout
The composition is centred. The wordmark area and a close control sit in a header with 40px horizontal padding, and the title, paragraph and button stack in the middle of the screen with a note anchored near the bottom edge. Measured gaps are 8px (six occurrences) and 40px (two), and paddings are 3px, 12px, 20px and 40px, which map to the `spacing` tokens s1 3px, s2 8px, s3 12px, s4 20px and s5 40px. The stylesheet defines a 26-column unit grid through two root properties, `--col-numb: 26` and `--grid-val: calc(100/var(--col-numb))`, versus the 15 columns of the sibling Jacket Circle microsite.

The title block and the paragraph are centre-aligned and the paragraph wraps to three lines at the desktop width, producing a narrow, book-like text measure.

## Elevation & Depth
No box shadows were measured. Depth is carried by the image: the layered torn-paper watercolour creates a sense of overlapping planes behind the text, while the interface itself is flat. There are no cards, modals or overlays on the entry screen.

## Shapes
The only radius in the measurement is 8px, on two elements (`rounded.xs`). It belongs to the start button region as reported by the extraction. The hover probe, however, reports a border radius of 0px on the "Start the Experience" button element, so the 8px value comes from another element and the exact owner is not resolved in the extraction. The torn-paper edges in the artwork are an image characteristic, not a CSS shape.

## Components
- **nav**: header text colour `{colors.nav-text}` (#212121) in Inter 12px, horizontal padding 40px; it contains the close control.
- **Start button**: label "Start the Experience" in Libre Baskerville at about 13.3334px, height 31px. Measured: transparent background, border colour rgb(33, 33, 33), no shadow. Hover changes the label colour from `{colors.ink-2}` (#fdf9e4) to `{colors.ink-on-media}` (#ebe1bd); height, background and radius did not change in the hover probe. The golden pill fill seen in the capture is not part of the measured computed background, so no fill token is declared.
- **Title and paragraph**: `{typography.display}` and `{typography.body}` in cream.
- **Bottom note**: Inter 12px in cream about narration and music.
Because the button's fill was not measured, no `button-primary` component token is declared.

## Design System Architecture
No public design system was found for this microsite, and no search was run; the page opened was https://untamedheroinegame.maxmara.com/. The de-facto system is the same compact structure as its sibling microsite: two grid custom properties (`--col-numb` and `--grid-val`), a serif and an Inter family, cream text, and a large background image. The values are literal in the stylesheet rather than named tokens. No Max Mara brand guideline was opened, so no claim is made about a wider house system.

## Do's and Don'ts
Do:
- Place cream (`{colors.ink-on-media}`) type directly on the painted watercolour image, and brown `{colors.ink}` type on flat light surfaces such as the #fdf9e4 dialog paper.
- Use Libre Baskerville for the title and paragraph, italic for "Untamed" and the intro, capitals for "HEROINE".
- Keep the interface minimal: one title, one paragraph, one start control, one note.
- Use Inter only for small functional text.

Don't:
- Do not reproduce the golden button fill as a token; it was not measured.
- Do not add shadows or cards; none were measured.
- Do not use #212121 for the title or paragraph; it is the header text colour.
- Do not assume styles for story screens beyond the entry screen and the first dialog that was probed.
- Do not set cream `{colors.ink-on-media}` on the flat sage `{colors.canvas}`; it reads at 1.34:1.

## Responsive Behavior
Mobile measurement at 390px: the title size is 39.6946px with a 49.6182px line height, the intro paragraph is 17.8626px with a 26.7939px line height, and the navigation text is 12px with a 14px line height, all weight 400. How elements are positioned or stacked on mobile was not measured.

## Iteration Guide
1. Start from a full-viewport painted background and set the title with `{typography.display}` in `{colors.ink-on-media}`; use `{colors.ink}` for copy on flat light surfaces.
2. Add the italic intro with `{typography.body}` and a single start button.
3. Keep header text in `{colors.nav-text}` with 40px side padding.
4. Re-measure the golden start button before documenting a fill, using `node web/scripts/extract-tokens.mjs --slug=max-mara-untamed-heroine--start --url=https://untamedheroinegame.maxmara.com/ --force --no-motion`.
5. After edits, run `node web/scripts/verify-designs.mjs --slug=max-mara-untamed-heroine`.
