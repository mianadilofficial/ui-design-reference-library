---
version: alpha
name: Readymag
category: "Design & Creative Tools"
description: "Readymag's site is a white #ffffff gallery of customer work with black #000000 type in uploaded custom fonts (30px/31px hero at -1.6px tracking, 12px/500 body), #ec520b orange 200px-radius pill buttons that hover to #282828, frosted #f4f4f4f5 nav pills, and a bento grid of 8px-radius tiles in #ff5900 orange, black, blue and lime."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ec520b"
  on-primary: "#ffffff"
  ink-charcoal: "#282828"
  ink-muted: "#00000066"
  ink-inverse-muted: "#ffffff66"
  ink-inverse-soft: "#ffffff99"
  orange: "#ff5900"
  amber: "#ff9c00"
  lime: "#d9ff00"
  blue: "#0a85ff"
  surface-grey: "#e4e4e4"
  surface-black: "#000000"
  surface-dark: "#313131"
  nav-pill: "#f4f4f4f5"
typography:
  display:
    fontFamily: custom_157067
    fontSize: 30px
    fontWeight: 400
    lineHeight: 31px
    letterSpacing: "-1.6px"
  body:
    fontFamily: custom_190030
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
  button:
    fontFamily: "-apple-system, system-ui, \"system-ui\", \"Segoe UI\", Roboto, Ubuntu, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.1px"
  button-secondary:
    fontFamily: custom_190030
    fontSize: 14px
    fontWeight: 400
    lineHeight: 45px
rounded:
  xs: 4px
  sm: 8px
  md: 20px
  lg: 45px
  xl: 102px
  2xl: 142px
  3xl: 200px
  4xl: 290px
spacing:
  s1: 11px
  s2: 15px
  s3: 16px
  s4: 20px
  s5: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 24px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.ink-charcoal}"
  nav-pill:
    backgroundColor: "{colors.nav-pill}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    height: 40px
  nav-pill-hover:
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.orange}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    height: 45px
    boxShadow: rgb(0, 0, 0) 0px 0px 0px 0px inset
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 0px 1px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    padding: 0px 20px
    height: 46px
  card:
    backgroundColor: "{colors.orange}"
    textColor: "{colors.ink-charcoal}"
    rounded: "{rounded.sm}"
---

## Overview

Readymag sells a design tool for "outstanding websites" (the measured page title is "Readymag – the design tool for outstanding websites"), and its home page is built to look like a portfolio rather than a SaaS landing page. The desktop capture opens with a full-width collage of customer work — a yellow typographic poster with a black hand, "THE TRIPTYCH" headline, a green book, a digital-clock UI, a blue "Birthday Discounts" sticker — with a white card floating in the middle: "Make the web more like you." in black, a grey subline ("A human-powered design tool for creating distinctive websites") and a wide orange "Try Readymag" pill.

Below the hero, "What you can publish" shows six screenshots of real projects (portfolios, studio websites, presentations, landing pages, passion projects, graduate projects) with tiny captions. A black band demonstrates the editor ("Start with a blank page or a template. Drag, resize, arrange, animate, and publish.") over a four-colour mock canvas. "Everything you need for your site" is a dense bento grid of tiles in orange, black, blue, lime, grey and white — Shots, Animations, Figma import, Custom cursors, Grids & guides, Advanced typography, Collaboration, Control and security, Support, Templates, PDF export, Video upload — some with playful stickers ("make", "anything", "draggable"). A grey "Made with Readymag" editorial block, a giant orange "Get started" pill, a row of client logos (Accenture, DEPT, Sleeper, MUBI, Complex…) and a black footer complete the page.

The voice is confident and design-literate — short claims, lowercase sticker words, captions that complete a sentence ("Portfolios that open new doors"). Colour lives in the customer work and the tiles; the chrome itself is black, white and one orange.

## Colors

- **Canvas `#ffffff`** — the page background.
- **Ink `#000000`** — headlines and body text; also the editor-demo band and footer background (`surface-black`).
- **Primary `#ec520b`** — the "Sign up" and "Try Readymag" pills; it is also the hover text color of the nav pills and the hover fill of "Log in". "Sign up" hovers to **`#282828`** (`ink-charcoal`), which is also the text color on orange tiles.
- **Orange `#ff5900`** — bento tiles and the "Open" button inside the security tile; it is the largest saturated background by area.
- **Tile accents** — amber `#ff9c00`, lime `#d9ff00`, blue `#0a85ff` and dark grey `#313131`, all measured as tile backgrounds.
- **Grey `#e4e4e4`** — the "Made with Readymag" panel and light tiles.
- **Nav pill `#f4f4f4f5`** — a 96%-opaque near-white used for the floating navigation pills.
- **Muted text** — `#00000066` (40% black) is the most-read text color by character count, used for secondary lines such as the hero subline and captions; on dark tiles the equivalents are `#ffffff66` and `#ffffff99`.

## Typography

Readymag sets its own site in fonts uploaded through its own font hosting, so the browser reports them only as internal IDs: `custom_190030` (weight 500, the main UI and body face, about 1,600 measured characters), `custom_157067` (weight 400, the hero line), `custom_189785` (500) and `custom_37866` (400). Their commercial names are not exposed in the measured CSS. Buttons in the header use the system stack (`-apple-system, system-ui, "Segoe UI", Roboto, Ubuntu, Arial, sans-serif`).

| Role | Family | Size / line-height | Weight | Tracking |
|---|---|---|---|---|
| Display (hero line) | custom_157067 | 30px / 31px | 400 | -1.6px |
| Body / captions | custom_190030 | 12px / 16px | 500 | normal |
| Header button | system stack | 16px / 20px | 400 | -0.1px |
| Tile button / input | custom_190030 | 14px | 400 | normal |

Measured sizes by character count: 12px, 10px, 28px, 40px, 30px, 16px, 18px, 15px, 11px and 38px. Every size above 15px is tracked tightly negative — 28px at -1px or -1.2px, 30px at -1.6px, 38px at -2.1px, 40px at -1.8px, 18px at -0.6px — which gives the section titles their compressed, poster-like look. Weights are only 500 and 400.

**Substitutes:** the faces are not identified by name, so match them by role: a neutral grotesque at 500 for 10–12px UI text and a slightly condensed grotesque at 400 with strong negative tracking for headlines.

## Layout

The page uses full-width bands with a left-aligned content column inset from the viewport edge. Section titles ("What you can publish", "Everything you need for your site", "Design the website you want to see") sit left-aligned at 28px above their grids. The project grid is three columns (the extractor's maximum card columns on desktop is three); the bento grid mixes tiles of different spans so that one large black "Animations" tile sits beside small Figma, Grids and Custom cursor tiles. The few measured paddings are 24px, 11px, 16px, 20px and 15px; no gap values were recorded. The root variable `--min-desktop-width: 769px` marks the desktop threshold.

Density is high in the bento grid and very low everywhere else: the hero card holds one line and one button, and the closing call to action is a single huge pill spanning almost the full width.

## Elevation & Depth

The site is flat. The only measured box-shadow is a zero-size inset (`rgb(0, 0, 0) 0px 0px 0px 0px inset`) on the orange "Open" button — a placeholder, not a visible shadow. Depth is suggested by overlap instead: the hero card sits over the collage, stickers rotate across tile edges, and screenshots are cropped by their tiles. A 10%-black overlay (`#0000001a`) was measured over large areas, darkening media behind content.

## Shapes

Two shape families coexist. Tiles and screenshots use small radii — 8px (most frequent) and 4px — and the bottom-only `0px 0px 8px 8px`. Buttons and pills are fully round: 200px on header pills and "Sign up", 45px on the 45px-tall "Open" button, and very large radii (102px, 142px, 290px). A 20px radius was measured on six elements.

## Components

- **Primary pill** — "Sign up": `#ec520b`, white 16px/400 system text, 0 24px padding, 40px tall (48px at 390px), 200px radius; hover fill `#282828`.
- **Nav pill** — "Solutions", "Pricing", "Examples", "Templates", "Learn", "Log in": `#f4f4f4f5` fill, black text, 40px tall, 200px radius; hover turns the text `#ec520b`, and "Log in" fills `#ec520b` with white text.
- **Hero card** — white, holding the display line, a 40%-black subline and a full-width orange pill.
- **Tile button** — "Open": `#ff5900`, white custom_190030 14px, 45px tall, 45px radius.
- **Input** — "Password": 46px tall, 0 20px padding, black 14px text inside a white pill (capture).
- **Bento tile** — 8px radius, solid fill from the tile palette, a small label top-left in white or `#282828`, an illustration or UI fragment, and a one-line description at the bottom.
- **Project thumbnail** — screenshot with a 12px caption where the category is black and the rest is muted ("Portfolios that open new doors").
- **Link** — black 12px/500 with a 1px bottom padding for the underline ("Readymag web specials").
- **Footer** — black, five link columns (Company, Product, Case studies, Resources, Editorials) in small white text.

## Design System Architecture

No public design system or brand guideline was found: the opened page https://readymag.com/about returned only its heading, with no links to a press kit, logo assets or brand guidelines. The site itself is built in Readymag, which shows in the shipped CSS: only one root custom property (`--min-desktop-width: 769px`), fonts referenced by numeric upload IDs (`custom_190030`, `custom_157067`), and a font-face list of about sixty families served from Readymag's font CDN (`c-p.rmcdn.net/hosted-fonts/…`, including Benton Sans RE, Farnham, Graphik, Kazimir, Druk) that powers the editor rather than this page. The de-facto system is therefore a small set of repeated values — black/white/orange, 8px tiles, 200px pills, negative tracking on large type — rather than a token layer.

## Do's and Don'ts

**Do**
- Let customer work and colourful tiles carry the page; keep chrome black, white and `#ec520b`.
- Use fully round pills for every button, and 8px corners for tiles and screenshots.
- Track large type tightly negative (about -1px at 28px, -1.6px at 30px, -1.8px at 40px).
- Use 40%-black secondary text next to black primary text inside the same sentence.
- Mix tile sizes in the bento grid and let stickers overlap edges.

**Don't**
- Don't add drop shadows; nothing on the page uses a visible one.
- Don't use the orange for body text; it is for actions and hover states.
- Don't square off buttons; no rectangular button was measured.
- Don't fill the hero with product UI — the hero is customer work.
- Don't use weights above 500.

## Responsive Behavior

Measured at 390px: the hero line stays at 30px in custom_157067, body stays 12px/500, and the "Sign up" pill grows from 40px to 48px tall while keeping 0 24px padding and the `#ec520b` fill. A "Menu" toggle is visible at 390px (on desktop the extractor also found an "open menu" toggle, with zero plain header links), and the maximum card columns drop from three to two. A 24px size appears in the mobile size list that was not on desktop. The stylesheet declares only three breakpoints: `max-width 1024px`, `max-width 768px` and `max-width 478px`. Other mobile layout changes were not measured.

## Iteration Guide

1. Start white; set headlines black in a grotesque at 400 with strong negative tracking, and captions at 12px/500.
2. Every action is a pill: `#ec520b` fill, white text, hover `#282828`.
3. Navigation as separate `#f4f4f4f5` pills; hover recolours text to `#ec520b`.
4. Show real work in 8px-radius frames with one-line captions.
5. Feature grids as bento tiles in `#ff5900`, `#000000`, `#0a85ff`, `#d9ff00`, `#e4e4e4` and white.
6. Close with one oversized pill CTA.
7. Keep the system tiny — Readymag's own page has a single CSS variable.
