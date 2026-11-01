---
version: alpha
name: Balance
category: "Agencies & Studios"
description: "Balance is a one-person portfolio template site (demo persona John Taylor, Digital Designer) built as a monochrome editorial page — a #fcfcfc canvas, #141414 ink, one pill button, a 184.32px uppercase Inter hero name and Inter Tight 700 statement text, with grey #9d9d9d fine print."
colors:
  canvas: "#fcfcfc"
  ink: "#141414"
  primary: "#141414"
  on-primary: "#fcfcfc"
  surface-grey: "#c8c8c8"
  ink-secondary: "#9d9d9d"
  ink-white: "#ffffff"
  ink-footer: "#f0f0f0"
typography:
  display:
    fontFamily: Inter, "Trebuchet MS", sans-serif
    fontSize: 184.32px
    fontWeight: 700
    lineHeight: 132.71px
    letterSpacing: "-9.216px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Inter, "Trebuchet MS", sans-serif
    fontSize: 53.235px
    fontWeight: 700
    lineHeight: 53.235px
    letterSpacing: "-2.1294px"
    textTransform: uppercase
  menu-mobile:
    fontFamily: "\"Inter Tight\", \"Trebuchet MS\", sans-serif"
    fontSize: 58.5px
    fontWeight: 700
    lineHeight: 61.425px
  heading:
    fontFamily: "\"Inter Tight\", \"Trebuchet MS\", sans-serif"
    fontSize: 29.312px
    fontWeight: 700
    lineHeight: 30.7776px
    letterSpacing: "-0.58624px"
    textTransform: uppercase
  nav-link:
    fontFamily: "\"Inter Tight\", \"Trebuchet MS\", sans-serif"
    fontSize: 25.984px
    fontWeight: 700
    lineHeight: 29.8816px
  body:
    fontFamily: "\"Inter Tight\", \"Trebuchet MS\", sans-serif"
    fontSize: 52.608px
    fontWeight: 700
    lineHeight: 44.7168px
  button:
    fontFamily: Inter, "Trebuchet MS", sans-serif
    fontSize: 12.672px
    fontWeight: 500
    lineHeight: 16.8538px
rounded:
  pill: 9999px
spacing:
  s1: 10.52px
  s2: 12.03px
  s3: 24.06px
  s4: 25.34px
  s5: 36.74px
  gap-wide: 186.624px
  offset-wide: 380.416px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 36.736px
    height: 55px
  project-link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  nav-link:
    textColor: "{colors.ink-white}"
    typography: "{typography.nav-link}"
  footer:
    textColor: "{colors.ink-footer}"
    typography: "{typography.button}"
---

## Overview

Balance is a portfolio website for a fictional freelance brand designer, "John Taylor, Digital Designer". The contact block shows the address `john[at]jt-studio[dot]com`, a placeholder phone number `+491234 56789`, and a link reading "You can buy this website." that points to michael-aust.com/shop. In other words, the page at balance.michael-aust.com is a sellable template demo, and every word of copy is sample content. The design is what matters here, and the design is austere: one off-white canvas, one near-black ink, grey fine print, a single pill-shaped button, and typography doing nearly all of the visual work.

The first screen is split. On the left a light #fcfcfc field carries a two-line caption in the lower left ("Digital Designer", then a grey sentence reading "I help designers and agencies elevate their branding with creative development support."), while the right half is a tall, cool-grey studio photograph of a person in a white suit beside a plinth with cut flowers. The four menu links (Home, About, Work with a small superscript "(6)", Contact) sit on top of that photograph in bold dark type. Across the bottom of the hero runs the name JOHN TAYLOR in 184.32px uppercase Inter, so large that it overlaps the photo edge and bleeds across the whole width of the 1280px measured viewport.

Below the hero the page slows down. A small blurred monochrome flower image floats in white space, followed by a manifesto paragraph — "I help brands craft meaningful stories and compelling visuals that deeply resonate with their audience…" — set at 52.608px Inter Tight 700 with a line height tighter than the font size (44.7168px). Two short two-column notes ("From A to Z", "Solo or Team") and one pill button ("More about me") follow, then three featured projects (Apex Architects, Dionysos Resorts, Argus Eyewear) over a dark, blurred grayscale band, an "All work (6)" button, a contact call to action ("Global presence, global recognition — Contact me to take your next step."), and a footer.

The voice is first person, confident and short. Section labels are parenthesised, as in "(Contact)", and project counts are shown as small superscripts. There is no accent hue anywhere in the measured palette; the only chroma on the page lives in photographs.

## Colors

The measured page is almost entirely two colors. Background area is dominated by `canvas` #fcfcfc (weight 5044 in the extraction), with `ink` #141414 as the only other significant fill (weight 58) and a lone #c8c8c8 patch (weight 1). In the full-page capture, #fcfcfc covers about 59% of the pixels the viewer sees.

- **canvas #fcfcfc** — the page background, not pure white. The extractor's body role confirms it, and the pixel check on the capture agrees.
- **ink #141414** — the most-read dark text color (293 characters), the hero name, the manifesto text, the button fill and the dark project band. It is deliberately the same value as `primary`, because the only action color on the page is black.
- **primary #141414 / on-primary #fcfcfc** — the "More about me" pill is #141414 with #fcfcfc text. The button is the page's color inversion: light label on the dark fill.
- **ink-secondary #9d9d9d** — the most-used text color by character count (447 characters): the small descriptive copy under "Digital Designer" and the two service notes. Against #fcfcfc its contrast ratio works out to about 2.6:1, so it reads as deliberately quiet fine print rather than body text.
- **ink-white #ffffff** — 23 characters; the body element's inherited text color, used on the photograph side of the page where text sits over imagery.
- **ink-footer #f0f0f0** — 9 characters in the footer, a slightly dimmed white used on the dark footer image.
- **surface-grey #c8c8c8** — appears in the page CSS 18 times and as a background once; it is the only mid-tone grey fill. Its role is not identified by the extractor, so it is kept as a measured neutral.

The shipped CSS also lists #ff0000, #2e2e2e and a set of social-network colors (#1877f2, #e4405f, #0077b5, #ea4c89, #1769ff, #006567). The social ones belong to the social-icon classes (`social instagram`, `social facebook`, `social linkedin`) and are third-party brand colors, not Balance palette entries, so they are not tokens here.

## Typography

Two families, both loaded as webfonts according to `loadedFonts`: **Inter** (regular, 500 and 700 faces) and **Inter Tight** (regular and 700), each with a `"Trebuchet MS", sans-serif` fallback in the CSS stack. A third face, `icomoon`, is the icon font for social glyphs. Only two weights are used by character count: 500 (569 characters) and 700 (424 characters). Nothing is set in a light or regular weight.

- **display — Inter 700, 184.32px / 132.71px, letter-spacing −9.216px, uppercase.** The hero name. The line height is about 72% of the size and tracking is tight, so the capitals sit as a solid block.
- **body — Inter Tight 700, 52.608px / 44.7168px.** The manifesto paragraph. The statement is the page's "body text", set heavier and larger than conventional prose.
- **heading — Inter Tight 700, 29.312px / 30.7776px, letter-spacing −0.58624px, uppercase.** The project name labels (for example APEX ARCHITECTS in a scrolling marquee, rendered in #fcfcfc on the dark band).
- **nav-link — Inter Tight 700, 25.984px / 29.8816px.** The body element's measured style; the 25.984px size covers 20 characters, which matches the letters of Home, About, Work and Contact.
- **button — Inter 500, 12.672px / 16.8538px.** The button label and also the small supporting copy, which is the most common size on the page (562 characters).

The remaining sizes in the extraction are 30.72px (61 characters), 10.8979px (24, the superscript counter), 80px (20), 99.968px (18), 14.72px and 33.28px (3 each). The contrast between 184.32px and 12.672px, with little in between, is the typographic signature: huge display against tiny captions.

## Layout

The measured page is 1280px wide and 6165px tall in the desktop pass. The shipped CSS (`assets/css/style.css`) defines a twelve-column grid through `row` and `col` classes, with width modifiers named `default-1` to `default-12` and `large-1` to `large-12`; the header markup uses `col default-6 large-2` for the menu column, for example. Spacing values measured on the page are 10.5216px, 12.032px, 24.064px, 25.344px and 36.736px, with two large structural values: a 186.624px gap and padding, and a 380.416px padding that pushes the lower content block to the right, as visible in the offset "From A to Z" columns.

Composition is asymmetric. Content blocks are anchored to different edges: the small caption to the far left, the manifesto indented from the left, the two notes and button pushed into the right two-thirds, and a hairline rule above those notes. Large amounts of empty canvas separate sections. The hero photograph is a full-height vertical slab rather than a background, and the dark project band at the bottom is a full-bleed section.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty, and the CSS corpus lists none). Depth is flat. Separation comes from three devices: the contrast between the #fcfcfc canvas and the dark #141414 band, a thin hairline rule above the service notes, and photographic imagery with blur (the floating flower image and the blurred grayscale project band). No borders were measured on any element (`borderColors` is empty); the hairline in the capture is a rule element and its color was not recorded as a token.

## Shapes

Corners are hard everywhere except the button. The only radius in the extraction and the CSS is `9999px`, used three times in the page and twice in the stylesheet, which gives the "More about me" button a full pill shape at 55px tall and 165px wide. Photographs and the flower image have square corners (every other measured element reports a 0px radius). Rules are straight hairlines. The pairing of a sharp, rectangular photo grid with a single pill is the page's only shape contrast.

## Components

**Primary button.** Fill #141414, label #fcfcfc, Inter 500 at 12.672px / 16.8538px, radius 9999px, padding `0px 36.736px`, height 55px, 165px wide for "More about me". There is no outlined or secondary button in the extraction.

**Navigation.** Four text links (Home, About, Work(6), Contact) in Inter Tight 700 at 25.984px stacked vertically at the top of the photo half. The markup contains a `hamburger` element and a `quickbar` header, and the root variable `--quickbar-height` is 77px. Hover styles were not captured (`hover` is empty), so nothing is documented for interaction state.

**Project links.** Project names are uppercase Inter Tight 700 at 29.312px in #fcfcfc, run twice in a marquee ("APEX ARCHITECTS APEX ARCHITECTS") over the dark band.

**Manifesto block, service notes.** Plain text blocks: a 52.608px statement, and two small 12.672px notes with a bold label and #9d9d9d body copy.

**Footer.** "(Contact)" label, the line "Global presence, global recognition — Contact me to take your next step.", contact details (inquiries email and phone), the menu repeated, and Imprint and Privacy Policy links, with text in #f0f0f0 at 12.672px / 500.

**Template sales link.** "You can buy this website." appears in the header and footer and, in the mobile pass, as a full-width 390px bar (#141414 fill, #fcfcfc text, 14.352px, 39px tall, square corners). It is the template author's storefront link, not brand UI, and should not be reproduced as a component of the design.

## Design System Architecture

No public design system or brand guideline exists for Balance. The homepage at https://balance.michael-aust.com/ and the About page at https://balance.michael-aust.com/about were opened and neither links to a design system, token file or brand guide; the only outbound item of this kind is the "You can buy this website." link to michael-aust.com/shop.

The de-facto system is a hand-written site, not a component library: the document ships `assets/css/style.css` and `assets/css/icomoon.css`, the body carries `data-barba="wrapper"` (the Barba page-transition library hook), and class names follow a plain `row` / `col default-N large-N` grid and helper class names such as `quickbar`, `branding`, `menu`, `hamburger` and `social instagram`. The only CSS custom property measured on the root is `--quickbar-height: 77px`. Colors, sizes and radii are therefore literals in the stylesheet rather than variables, which is why this file derives its tokens from measured computed styles and the stylesheet's own value counts.

## Do's and Don'ts

- Do keep the palette to #fcfcfc, #141414 and greys; let photography supply all color.
- Do set the hero name in Inter 700 uppercase at the 184.32px size with −9.216px tracking, and let it overlap the image edge.
- Do pair very large type (184.32px, 52.608px) with very small type (12.672px) and little in between.
- Do use one pill button, #141414 with #fcfcfc text, and no other button style.
- Do use #9d9d9d only for supporting copy, never for primary reading text.
- Don't add accent colors, gradients, shadows or borders; none were measured.
- Don't use rounded corners on photographs or panels; the only radius is the 9999px pill.
- Don't use weights lighter than 500; the page uses only 500 and 700.
- Don't copy the "You can buy this website." bar, the social-network colors or the placeholder contact details into a derived design.

## Responsive Behavior

Measured at a 390px-wide mobile pass: the name keeps its role but drops to Inter 700 at 53.235px / 53.235px with −2.1294px tracking, uppercase (`display-mobile`). A "Home" link was recorded at Inter Tight 700 58.5px (`menu-mobile`). Manifesto text measures 25.662px / 21.8127px, project labels 24.648px / 25.8804px, and the most common small size is 14.352px (586 characters), up from 12.672px on desktop. Other mobile sizes: 21.567px (61 characters), 64.662px (18), 29.757px (3).

The shipped stylesheet declares its breakpoint at 640px: 67 `@media (min-width: 640px)` rules and 18 `@media (max-width: 639px)` rules, plus the `screen`-prefixed variants (121 and 23). The markup includes a `hamburger` element inside `menu`. The exact mobile layout, spacing and hamburger behavior were not measured; no mobile capture image exists for this site. Tablet widths are not measured.

## Iteration Guide

1. Start from the canvas and ink pair, #fcfcfc and #141414; check any new surface against the capture before adding a color.
2. Build the hero first: Inter 700 uppercase at 184.32px with −9.216px tracking, line height 132.71px, then place the image slab to overlap it.
3. Use Inter Tight 700 for statements and nav, Inter 500 for small copy; keep two weights.
4. Add the pill button with `0px 36.736px` padding and 55px height, and keep it as the only call to action per section.
5. Re-measure hover, focus and mobile layout before documenting them; none were recorded here.
6. Verify with `node web/scripts/verify-designs.mjs --slug=balance-4` after every token edit.
