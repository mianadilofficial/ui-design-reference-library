---
version: alpha
name: ESA
category: "Government & Nonprofit"
description: "The European Space Agency home page: photography-first editorial layout, NotesESAbold headlines at 48px and 75px over Arial 14px body, petrol ink #003247 on an off-white #e8e8e4 canvas, white 2px-radius READ buttons."
colors:
  canvas: "#e8e8e4"
  ink: "#003247"
  primary: "#ffffff"
  on-primary: "#335e6f"
  surface-2: "#0b1d26"
  ink-2: "#8197a6"
  ink-6: "#f1666a"
typography:
  display:
    fontFamily: NotesESAbold, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 60px
  display-mobile:
    fontFamily: NotesESAbold, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: NotesESAbold, sans-serif
    fontSize: 75px
    fontWeight: 700
    lineHeight: 93.75px
  body:
    fontFamily: Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Arial, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: 3.5px
    textTransform: uppercase
  link:
    fontFamily: Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 0px
rounded:
  xs: 2px
  sm: 20px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 30px
    height: 50px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 30px
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 20px 30px 0px
---

# ESA — The European Space Agency

## Overview
The measured home page, https://www.esa.int/, is titled "European Space Agency" and reads as an editorial news front door rather than a corporate brochure. A full-bleed satellite photograph fills the first screen, with a dark navy header bar carrying a hamburger, a search glyph, the label "THE EUROPEAN SPACE AGENCY" and the lowercase "esa" logotype. Under the hero sits a four-column dark mega-footer of links (ESA Vision, ESA Pillars, ESA Programmes, ESA and You), and below that a warm grey-white page headed "In the spotlight" with filter buttons (ALL, STORIES, VIDEOS, IMAGES) and a grid of image cards. The language is English, and the whole page is 12,616px tall at the 1280px desktop width.

The look is photography-first: NASA-style Earth imagery, solar disks, astronauts and illustrated explainer thumbnails do the emotional work, while the interface stays quiet. Color is restrained to a deep petrol navy (`colors.ink`, #003247), a warm off-white canvas (`colors.canvas`, #e8e8e4) and white. Small coloured category labels are the only saturated accents: red for Science & Exploration, blue for Space Safety, green for Applications, amber for Enabling & Support. Microcopy is terse and uppercase-tracked: READ, OPEN, PLAY, STORY, VIDEO, MISSION.

## Colors
- **Canvas `#e8e8e4`** is the page background measured on the body and confirmed against capture pixels; the dark navy footer band `#0b1d26` (`colors.surface-2`) is the second-largest on-screen area.
- **Ink `#003247`** is the deep petrol used for the large "In the spotlight" heading and card titles on the light canvas.
- **Primary `#ffffff`** is the fill of the detected CTA, the READ button, with **on-primary `#335e6f`** as its text; the same white is the text color over photography and over the navy footer.
- **`colors.ink-2` `#8197a6`** is the muted blue-grey used for link lists and metadata in the dark footer, and is the most-read body text color on the page.
- **`colors.ink-6` `#f1666a`** is a coral tint used for the Science & Exploration link in the footer.

The CSS corpus also contains the category label hues #ed1b2f (red), #009bdb (blue), #00ae9d (teal-green) and #fbab18 (amber), and a white-on-black overlay system built from translucent values such as #0b1d2680. These are category and overlay colors, not general brand fills, so they are described here rather than promoted to tokens. Never use the category colors as button fills.

## Typography
Two families carry the site. **NotesESAbold** (declared with a `sans-serif` fallback) is the headline face: `typography.display` is 48px / weight 700 / line-height 60px, `typography.heading` is 75px / 700 / 93.75px for section titles such as "In the spotlight", and `typography.display-mobile` is 32px / 700 / 40px, the size measured on the 390px pass. Its siblings NotesESAregular and NotesStyle are loaded as well; NotesESAregular accounts for a very small share of characters and NotesStyle a handful.

**Arial** is the body and interface face: `typography.body` is 14px / 400 / 21px, `typography.link` is 20px / 400. Buttons use `typography.button`, Arial 12px at weight 500 with 3.5px letter spacing in uppercase. Navigation labels in the header measure 12px with 2.5px tracking. The wide tracking on tiny uppercase labels is the interface signature; headlines are tight, heavy and mixed case.

Font substitutes: NotesESA is a custom face. Where it cannot be licensed, use a heavy humanist or grotesque sans at weight 700 and keep the 48px / 75px sizes; Arial needs no substitute. Font Awesome 6 Pro and a flexslider icon font are also loaded for glyphs and carousel arrows.

## Layout
The home page is a vertical sequence of full-width bands: hero carousel (pagination dots sit at the lower left), a dark mega-footer link band, and a light content band. The content grid in the spotlight band is a three-column card grid with gaps between cards; cards are narrow portrait or landscape tiles beside a filter row aligned to the right of the heading. The hero text is left-aligned and constrained to roughly the left half of the frame, leaving the photograph visible.

Measured spacing values in the token set are `spacing.s1` 3px up to `spacing.s10` 48px; the dominant paddings by count are 30px (the button's horizontal padding), 40px, 96px and 20px. Density is medium: large headings and generous bands, but small metadata rows (date, views, likes) in tiny type under each card title.

## Elevation & Depth
Depth comes from photography and a single shadow: `rgba(0, 0, 0, 0.1) 0px 20px 30px 0px`, measured 34 times and used on the cards (`components.card`). It is a soft, long, low-opacity drop shadow that lifts light cards off the off-white canvas. The dark footer band and navy header are flat colour with no shadow. Over images, readability is handled by translucent dark overlays (#0b1d2680) rather than by borders.

## Shapes
Corners are almost square. `rounded.xs` is 2px and applies to the READ buttons and cards; `rounded.sm` is 20px and was measured on the small round carousel pagination dots (10px high). The CSS corpus also holds 3.2px, 4px and 24px radii, which were not promoted. Borders are 1px-style outlines in `#335e6f` on the outline filter buttons.

## Components
- **Button primary** (`components.button-primary`): white fill, `#335e6f` text, 2px radius, 50px tall, padding 0px 30px, Arial 12px uppercase with 3.5px tracking, followed by an arrow glyph. In the capture it appears on the hero (READ) and on each card (READ, OPEN, PLAY).
- **Filter buttons**: ALL, STORIES, VIDEOS, IMAGES; the active one is filled, the others outlined. Measured hover on the pagination dots changes fill from `#ffffff` to `#8197a6`.
- **Nav / nav-link**: uppercase 12px labels with 2.5px letter spacing on the dark header.
- **Card** (`components.card`): navy ink fill with white text for video and mission tiles, white body panels for story tiles, 2px radius and the 20px / 30px shadow.
- **Category chip**: small coloured label over the photo edge (APPLICATIONS, SCIENCE & EXPLORATION, SPACE SAFETY, AGENCY) in uppercase white text.

## Design System Architecture
No public design-system documentation or brand-guideline site was located from the pages opened for this entry; the only page read was the live home page at https://www.esa.int/, measured by the extractor. The de-facto system is visible in shipped CSS: custom font-face names (NotesESAbold, NotesESAregular, NotesStyle), Font Awesome 6 Pro for icons, and a flexslider carousel. The only root custom properties recorded are Font Awesome's (`--fa-style-family-classic`, `--fa-font-solid`); the brand has no colour or spacing variables on `:root`, so values live in component CSS.

## Do's and Don'ts
- Do lead with a full-bleed photograph and place left-aligned white NotesESAbold text over it.
- Do keep buttons white, 2px-cornered, 50px tall, with wide-tracked uppercase labels.
- Do use `#003247` for headings on the `#e8e8e4` canvas.
- Do reserve the red, blue, green and amber hues for category labels.
- Don't round buttons or cards beyond 2px; the 20px radius belongs to pagination dots.
- Don't set body copy in the display face or headlines in Arial.
- Don't add heavy shadows; the only measured shadow is the soft 10% black one.
- Don't use the category colours as brand fills.

## Responsive Behavior
Only two things were measured on the 390px mobile pass: the first headline renders at 32px in NotesESAbold (`typography.display-mobile`), and the characters-by-size distribution on mobile is led by 16px, 10px, 12px, 32px and 9.6px type. The desktop headline is 48px. Mobile navigation structure, column counts and breakpoints were not measured, so none are described here. The capture shows a hamburger at the left of the header on desktop; what it opens was not measured.

## Iteration Guide
1. Start from `colors.canvas` and `colors.ink`; add the navy `colors.surface-2` band only for link directories and video cards.
2. Use `typography.heading` (75px) once per band, `typography.display` for hero headlines.
3. Build every action from `components.button-primary`; do not invent a second button style.
4. Put a photograph behind any hero; keep overlay text white.
5. Verify with `node web/scripts/verify-designs.mjs --slug=esa`.
6. To extend, measure an inner page with the extractor (`--slug=esa--page --url=<page>`) before adding a token.
