---
version: alpha
name: HAY
category: "Home & Furniture"
description: "HAY's brand site (hay.com) is a gallery-quiet editorial system on a flat #f2f2f2 grey canvas with #0a0a0a / #000000 ink: ITCNewBaskervilleRoman 20px/28px uppercase serif captions tracked 1.1px under square-cornered photographs, NeueHelvetica55Roman 12px uppercase navigation tracked 2px, a centred 100x35 HAY wordmark, 2px black underline bars for the current section, 56px-radius circular social icons, and no buttons, shadows or accent colour beyond a #d1dee7 newsletter tab."

colors:
  primary: "#0a0a0a"
  canvas: "#f2f2f2"
  ink: "#0a0a0a"
  ink-black: "#000000"
  ink-menu: "#404041"
  on-photo: "#ffffff"
  newsletter-tab: "#d1dee7"
  active-bar: "#000000"

typography:
  collection-title:
    fontFamily: "ITCNewBaskervilleRoman, Georgia, serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 1.1px
  menu-group:
    fontFamily: "ITCNewBaskervilleRoman, Georgia, serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: 2px
  menu-item:
    fontFamily: "ITCNewBaskervilleRoman, Georgia, serif"
    fontSize: 15.5px
    fontWeight: 400
    lineHeight: 24.8px
    letterSpacing: 0.4px
  base:
    fontFamily: "NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: 2px
  footer-link:
    fontFamily: "NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 2px
  body:
    fontFamily: "NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 23px
    letterSpacing: 1px
  product-name:
    fontFamily: "NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 23px
    letterSpacing: 1px
  label:
    fontFamily: "NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 1px
  company-info:
    fontFamily: "NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: 1px
  subnav:
    fontFamily: "NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 13.2px
    letterSpacing: 1.5px
  footer-base:
    fontFamily: "NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16.5px
    letterSpacing: 1px
  newsletter-tab:
    fontFamily: "Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px

rounded:
  none: 0px
  icon-circle: 56px

spacing:
  icon-gap-y: 5px
  skip-link: 10px
  tab: 12px
  icon-gap-x: 15px
  caption-y: 20px
  column-x: 25px
  page-edge: 30px
  block-bottom: 40px

components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 39px
    textTransform: uppercase
  nav-current:
    underline: "2px solid #000000 bar, 5px below the label (::after)"
  wordmark:
    width: 100px
    height: 35px
    textColor: "{colors.ink}"
  subnav:
    textColor: "{colors.ink}"
    typography: "{typography.subnav}"
    textTransform: uppercase
  mega-menu:
    backgroundColor: "{colors.canvas}"
    groupTypography: "{typography.menu-group}"
    itemTypography: "{typography.menu-item}"
    itemColor: "{colors.ink-menu}"
  editorial-tile:
    imageRadius: "{rounded.none}"
    captionTypography: "{typography.collection-title}"
    captionColor: "{colors.ink}"
    captionPadding: 20px 0px
    padding: 0px 25px
    marginBottom: 40px
    textTransform: uppercase
  product-tile:
    imageRadius: "{rounded.none}"
    typography: "{typography.product-name}"
    textColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.base}"
  newsletter-tab:
    backgroundColor: "{colors.newsletter-tab}"
    textColor: "{colors.ink-black}"
    typography: "{typography.newsletter-tab}"
    padding: 12px
    height: 48px
    rounded: "{rounded.none}"
  social-icon:
    size: 32px
    rounded: "{rounded.icon-circle}"
    textColor: "{colors.ink}"
    margin: 5px 15px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.footer-link}"
    textTransform: uppercase
---

## Overview

hay.com is HAY's **brand site** (the body carries the class `brandsite`): its navigation offers Products,
News, Inspiration, Professionals and Find Store, and no cart or price appears on the measured pages. It behaves like a printed
furniture catalogue laid on a grey table. The whole page — header, body, footer — sits on one flat
`#f2f2f2` grey; there are no section bands, no cards, no shadows and no buttons. Everything that is not a
photograph is small, black, uppercase and widely letter-spaced.

The capture reads top to bottom:

- A one-line centred navigation in 12px uppercase Neue Helvetica tracked 2px — PRODUCTS, NEWS, INSPIRATION,
  PROFESSIONALS, FIND STORE — with a thin magnifier icon at the far right.
- The bold black **HAY** wordmark centred beneath the nav (a 100×35px logo link).
- One full-width lifestyle photograph (a brown sofa in a pale room) with a centred serif caption underneath:
  "MIMI SOFA BY PHILIPPE MALOUIN /" — 20px ITC New Baskerville in uppercase, tracked 1.1px, ending in a slash.
- A row of three square-ish product photographs with the same serif captions ("ESSENTIAL STEEL COLLECTION /",
  "DORI COLLECTION BY DOSHI LEVIEN /", "CANELÉ TABLE LAMP BY LECLERCQ VIALLET /").
- A row of two landscape photographs, captioned the same way.
- A centred footer of uppercase 12px links (ABOUT, B2B, CAREER, CONTACT, DESIGNERS, CATALOGUES, DIGITAL
  LIBRARY…), "FOLLOW US", six circular line icons, and an address line ("HAY Havnen 3, 8700 Horsens, Denmark").
- A small pale-blue `#d1dee7` tab, "Want to stay in the loop?", pinned to the right edge of the viewport.

Colour comes only from the products in the photographs — rust, cobalt, forest green, oxblood. The interface
itself is monochrome. The trailing slash after each caption is the site's one typographic signature: it turns
every caption into a link that reads like a catalogue index entry.

## Colors

### Brand & Accent

- **Primary (action) `#0a0a0a`** — HAY's site has no coloured action colour. Interactive elements (nav links,
  captions, footer links) are near-black `#0a0a0a` text on grey, and the current section is marked with a
  2px `#000000` bar. Treat near-black as the "primary".
- **Newsletter tab `#d1dee7`** — the only non-neutral UI colour on the homepage: a pale grey-blue tab with black
  bold Arial text. It is set in a different family from the rest of the site and pinned to the viewport edge.

### Surface

- **Canvas `#f2f2f2`** — the body, header, mega menu, and photo placeholders all paint this grey. The capture
  is dominated by it. Never use pure white as a page background.

### Text

- **Ink `#0a0a0a`** — navigation, captions, headings, product names.
- **Black `#000000`** — footer links, address line, "FOLLOW US", the active underline bar.
- **Menu grey `#404041`** — secondary items inside the Products mega menu.
- **On photo `#ffffff`** — product names that sit over dark photographs on collection pages.

Hover on caption links shifts colour by a single unit (`#0a0a0a` → `#090909`), i.e. effectively no visible
hover colour change was measured.

## Typography

### Font Family

Two commercial faces carry the system, plus Arial for one widget:

- **NeueHelvetica55Roman** (Neue Helvetica 55 Roman, released 1983 by D. Stempel AG/Linotype per
  [MyFonts/Fonts.com](https://www.myfonts.com/pages/fontscom-learning-fyti-typefaces-helvetica-old-and-neue)) —
  all navigation, body, product names and footer. Stack: `NeueHelvetica55Roman, Helvetica, Roboto, Arial, sans-serif`.
- **ITCNewBaskervilleRoman** (ITC New Baskerville, John Quaranda, ITC, 1982 per
  [Fonts In Use](https://fontsinuse.com/typefaces/1860/itc-new-baskerville)) — collection captions and the mega
  menu. Stack: `ITCNewBaskervilleRoman, Georgia, serif`.
- **Arial** — only in the "Want to stay in the loop?" tab.

The stylesheets also declare `NeueHelvetica56Italic`, `NeueHelvetica76BoldItalic`, `ITCNewBaskervilleItalic`
and three `Meta W05` weights (Regular, Bold, Light); Meta was loaded but not seen rendering text on the measured pages.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Case | Use |
|---|---|---|---|---|---|---|---|
| collection-title | Baskerville | 20px | 400 | 28px | 1.1px | UPPER | Captions under photos, collection title |
| menu-group | Baskerville | 18px | 400 | 28.8px | 2px | UPPER | Mega-menu group heads (Furniture, Lighting) |
| menu-item | Baskerville | 15.5px | 400 | 24.8px | 0.4px | as set | Mega-menu items (Chairs, Bar Stools) |
| base | Helvetica | 16px | 400 | 24px | — | as set | Root text size, skip link |
| nav | Helvetica | 12px | 400 | 19.2px | 2px | UPPER | Top navigation |
| footer-link | Helvetica | 12px | 400 | 20px | 2px | UPPER | Footer links |
| body | Helvetica | 12px | 400 | 23px | 1px | as set | Collection intro paragraph |
| product-name | Helvetica | 12px | 300 | 23px | 1px | UPPER text | Product names on collection grids |
| label | Helvetica | 12px | 400 | 18px | 1px | UPPER | "FOLLOW US" |
| company-info | Helvetica | 12px | 400 | 19.2px | 1px | as set | Address line |
| subnav | Helvetica | 11px | 400 | 13.2px | 1.5px | UPPER | Collection sub-navigation |
| footer-base | Helvetica | 11px | 400 | 16.5px | 1px | — | Footer container base |
| newsletter-tab | Arial | 16px | 700 | 24px | — | as set | Newsletter tab |

### Principles

- **No large type.** The largest text on the homepage is the 20px serif caption; the brand is carried by the
  wordmark and the photographs, not by headlines.
- **Serif for names, sans for system.** Product and collection names are in Baskerville; anything functional
  (nav, footer, product grid names, paragraphs) is Neue Helvetica.
- **Uppercase + tracking everywhere.** Nav and footer are tracked 2px, captions 1.1px, small text 1–1.5px.
  Even the 12px body paragraph carries 1px tracking and a generous 23px line height.
- Two weights only in practice: 400 and a light 300 for product names.

### Note on Font Substitutes

Both faces are commercial (Linotype/Monotype and ITC). Licensed equivalents are the same families from Monotype.
For free substitutes, the site's own fallbacks are Helvetica/Arial and Georgia; for closer free matches use a
neo-grotesque (e.g. Inter or Arimo) for Neue Helvetica and Libre Baskerville for ITC New Baskerville — keep
uppercase, tracking and the 20px/12px sizes exactly.

## Layout

### Spacing System

Values are not on a 4/8 grid; they are the site's own: 5, 10, 12, 15, 20, 25, 30, 40px.

- 30px from the viewport edge to the content block (content 1220px wide at a 1280px viewport).
- 25px horizontal padding inside every tile column (`.mix-item.columns`), giving 50px between photos.
- 20px above and below each caption (`.section-text` padding `20px 0px`); h3 margin `0px 5px 15px`.
- 40px below each tile before the next row.
- Footer social icons: 32px circles spaced with `5px 15px` margins.

### Grid & Container

A 12-column float grid expressed in class names: `block columns-12 small-12 medium-12 large-12` for the
full-width hero, `columns-4 small-12 medium-4 large-4` for thirds. Rows mix 1-up, 3-up and 2-up tiles.
On collection pages the grid becomes an **asymmetric collage**: images of different sizes placed at
staggered heights with empty grey cells left deliberately open (see the Palissade page capture).

### Whitespace Philosophy

The grey canvas is the gallery wall. Generous, even gutters (50px between photos) and large vertical gaps
let each product photograph stand alone; text is kept small so it never competes.

## Elevation & Depth

None. No element on the measured pages carries a box-shadow; there are no borders except the hidden skip link's
`1px solid #0a0a0a`. Depth exists only inside the photographs. The newsletter tab is fixed to the viewport but
flat.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | All photographs, the newsletter tab, everything else |
| icon-circle | 56px | 32×32px social icon links (renders as a circle) |

### Photography Geometry

Photographs are rectangles with hard 0px corners, scaled to column width (`img.scaled-width`, max-width 100%).
The hero is a wide landscape crop; secondary tiles are near-square or portrait; collection pages mix sizes.

## Components

### Buttons

The measured pages contain no visible buttons. Actions are text links (captions with a trailing " /") and icons.
Do not invent a filled button for HAY; if one is unavoidable, use 12px uppercase Neue Helvetica tracked 2px in
`#0a0a0a`, with the 2px black underline bar as its active state — and note it is not from the live site.

### Cards & Containers

- **Editorial tile**: photograph (0px radius) + centred Baskerville caption, 20px/28px, uppercase, tracked 1.1px,
  ending in " /". The whole tile is a link (`a.box-hover`). Column padding 25px, 40px bottom margin.
- **Product tile (collection page)**: photograph + product name in 12px/300 Neue Helvetica tracked 1px; the
  name can sit in white over a dark photograph.

### Inputs & Forms

No input is visible on the homepage; there is a magnifier icon at the top right. The search UI was not measured.

### Navigation

- **Top nav**: centred, five uppercase 12px links tracked 2px, 39px tall, on the grey canvas; header total
  130px including the wordmark.
- **Current state**: a 2px `#000000` bar 5px below the label (`::after`), on both the top nav and the
  collection sub-nav.
- **Mega menu (Products)**: Baskerville group heads at 18px tracked 2px uppercase, items at 15.5px tracked
  0.4px in `#404041`.
- **Collection sub-nav**: a centred row of 11px uppercase links tracked 1.5px (OUTDOOR, SEATING, TABLES…).

### Pills, Tags, and Chips

None measured.

### Signature Components

- The centred serif caption with trailing slash under each photograph.
- The pale-blue `#d1dee7` "Want to stay in the loop?" side tab (Arial 16px/700, 12px padding, 48px tall).
- The centred footer: uppercase link rows, "FOLLOW US", six 32px circular icons, address line.

## Design System Architecture

HAY publishes **no public design system**. Searches for a HAY design system, token package, brand guidelines
or press kit returned nothing official (queries recorded in SOURCES.json); the official
[About HAY](https://www.hay.com/footer/about-hay/about-hay) page describes the company (founded 2002, Mette and
Rolf Hay as Creative Directors, "good design is everyone's right") but no visual identity rules. The footer's
PRESS / DIGITAL LIBRARY links open an image press cloud, not guidelines.

What is measurable is a small de-facto system:

- **Tokens**: no CSS custom properties are defined on `:root` (zero root variables measured). Values are
  hard-coded per rule: `#f2f2f2`, `#0a0a0a`, `#000000`, the 2px/1.5px/1px tracking set.
- **Theming**: a single light theme; no dark mode or theme switch observed.
- **Type & spacing**: two families (Neue Helvetica 55 Roman, ITC New Baskerville Roman) loaded as web fonts,
  plus declared italics and Meta W05. Spacing is a fixed set (5/10/12/15/20/25/30/40px) rather than a scale.
- **Component model**: class names describe a 12-column grid (`columns-4 small-12 medium-4 large-4`) and simple
  blocks (`mix-item`, `section-text`, `box-hover`, `site-header__logo`, `navigation__link top-level-link`,
  `link-text-wrapper`, `footer-link`, `company-info-item`). A stylesheet string declares named breakpoints
  `small=0em&medium=40em&large=64em&xlarge=75em&xxlarge=90em`.
- **Accessibility**: a "Skip to main content" link (16px, 10px padding, 1px border) is clipped off-screen until
  focused; some nav labels carry `visuallyhidden` duplicates for screen readers.
- **Delivery**: body classes `HomePageModel_DynamicProxy brandsite`; no published
  packages or Figma kit found. Careers and privacy links point to MillerKnoll pages.

## Do's and Don'ts

### Do

- Paint everything on `#f2f2f2`; let photographs supply all colour.
- Caption every image in uppercase ITC New Baskerville 20px/28px, tracked 1.1px, centred, ending in " /".
- Set navigation and footer in uppercase Neue Helvetica 12px tracked 2px.
- Keep photographs square-cornered and give them 50px gutters.
- Mark the current section with a 2px black bar beneath the label.
- Keep the wordmark centred under the nav as the largest typographic element.

### Don't

- Don't add buttons, cards, borders or shadows.
- Don't use headlines larger than 20px or bold weights in the content.
- Don't use pure white or a coloured background behind content.
- Don't introduce an accent colour; `#d1dee7` belongs only to the newsletter tab.
- Don't round photographs or icons other than the 32px social circles.
- Don't set navigation in sentence case or without tracking.

## Responsive Behavior

### Breakpoints

The stylesheet declares `small` 0em, `medium` 40em, `large` 64em, `xlarge` 75em, `xxlarge` 90em. Grid classes
are named `small-12 medium-4 large-4`; the 390px layout of these tiles was not separately measured.

### Touch Targets

At 390px the header measures 70px tall with `15px 0px` padding (130px on desktop). Social icons stay 32px.

### Collapsing Strategy

At 390px the mobile header shows only the skip link text in its measured content; the five-link navigation is
not in the measured mobile header text, so treat its mobile form as unmeasured. Captions keep their 20px size
on mobile (20px measured at 390px); the collection intro keeps 12px/23px.

### Image Behavior

Images scale to the column width (`max-width: 100%`) and keep their aspect ratio; no cropping or rounding.

## Iteration Guide

1. Set the body to `#f2f2f2`, text `#0a0a0a`, base 16px/24px Neue Helvetica (substitute a neo-grotesque).
2. Build the centred uppercase nav (12px, 2px tracking) and the centred 100×35 wordmark below it.
3. Place a full-width photograph with a centred 20px uppercase Baskerville caption ending in " /".
4. Add 3-up and 2-up rows with 25px column padding and 40px row spacing.
5. Build the centred footer: uppercase link rows, "FOLLOW US", 32px circular icons, address line in 12px.
6. Add the `#d1dee7` side tab last, in Arial 16px bold.
7. Check that no element besides photographs carries colour, radius or shadow.
