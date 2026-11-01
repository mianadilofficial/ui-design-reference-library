---
version: alpha
name: West Midlands Combined Authority
category: "Design Systems"
description: "The WMCA public site (wmca.org.uk) is a civic-service design built on the shipped wmcads stylesheet: a warm near-white canvas (#fcfcfc), charcoal ink (#231f20), Furnace-style orange (#c05701) for the hero panel, buttons and icons, and a teal-blue (#007da8) for underlined headline links. DM Sans 700 sets headings (46px display), Noto Sans Display sets body at 16px/24px, corners are a restrained 5px, and the header and footer sit on charcoal."
colors:
  canvas: "#fcfcfc"
  ink: "#231f20"
  primary: "#c05701"
  on-primary: "#ffffff"
  surface-white: "#ffffff"
  surface-black: "#000000"
  link: "#007da8"
  primary-text-on-white: "#c05701"
typography:
  display:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 46px
    fontWeight: 700
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40.8px
  subheading:
    fontFamily: "\"Noto Sans Display Bold\", sans-serif"
    fontSize: 23px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "\"Noto Sans Display\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Noto Sans Display Bold\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: "\"Noto Sans Display Bold\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 5px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 24px
  s9: 32px
components:
  button-primary:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.primary-text-on-white}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px
    height: 50px
  hero-panel:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
    padding: 15px
  link:
    textColor: "{colors.link}"
    typography: "{typography.display-mobile}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
  nav-link:
    backgroundColor: "{colors.link}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    padding: 16px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
---

## Overview

The West Midlands Combined Authority (WMCA) home page reads as a confident, plain-spoken public-sector site. A charcoal header bar carries the ring-shaped logo and four short navigation items (The Mayor, Who we are, What we do, Contact us) plus a search icon. Beneath it, a full-width photograph of a Birmingham canal with brick apartment blocks is overlaid with a solid orange panel holding the white H1 "Together, we are making the West Midlands the best place to live, work and visit". Below the hero the page drops to a calm near-white canvas (#fcfcfc) with two intro blocks, an eight-item "What we do" icon grid, a four-card "Latest News" row, and a large tram-visualisation image with caption.

The personality is civic and practical rather than corporate: headings are written as questions ("What is the Combined Authority?", "Who is the Mayor of the West Midlands?"), news cards carry plain dates ("08 October 2026"), and links are underlined by default so they are unmistakable. Colour is used sparingly: orange (#c05701) for emphasis and iconography, teal-blue (#007da8) for linked headlines, charcoal (#231f20) for text and chrome. Photography of real people and places supplies the warmth; the interface itself stays quiet.

## Colors

- **Canvas (#fcfcfc)** is the page background below the hero, measured as the dominant surface in the capture.
- **Ink (#231f20)** is the most-read text colour (body paragraphs, card summaries) and also the fill of the header and footer bars.
- **Primary orange (#c05701)** is the brand action colour. It fills the hero headline panel, tints the "What we do" line icons, colours the "Latest News" heading and the thick rule at the foot of the featured block. The shipped design-system stylesheet gives the standard `wmcads-btn--primary` button this same fill with white text (#ffffff).
- **Link teal-blue (#007da8)** colours the large H2 links, news-card headlines and the "See all..." text links, always underlined.
- **White (#ffffff)** is the text colour on dark chrome and the fill of the "Sign up to updates" button, which the stylesheet defines as the `wmcads-btn--dark-bg` variant: orange text on white, intended for placement on dark or coloured bands.
- **Black (#000000)** appears as a large dark background area elsewhere on the page.

The design system's colour page lists named palettes (brand colours such as WM Furnace Orange, Steel Blue, Gunmetal Grey and Carbon Black; web colours such as Primary Orange, Text, Call to Action, Error, Warning and Success; background-only colours) but its published page does not show the hex values, so only the measured hexes above are recorded here. It states that all colours meet the W3C AA 3:1 contrast minimum, and advises writers not to refer to colours in instructions.

## Typography

Headings use **DM Sans** at weight 700: 46px/48px for the H1, and the 32px/40.8px size used for the H2 on narrow screens (the design system states H1 and H2 shrink by 15% below 768px wide). Card headlines and the "What we do" labels use a bold Noto face at 23px/24px. Body copy is **Noto Sans Display** at 16px/24px, regular weight; buttons and navigation share a 16px/24px setting, with buttons in the bold cut (700).

The design-system typography page documents DM Sans (700) for headings and Noto Sans (400/700) for everything else, with H3 at 23px and H4 at 18px, and says user testing found Noto Sans easiest to read for the greatest share of respondents. Both fonts are bundled in the design system CSS as web-font files, so no substitutes are needed; if the files fail, the stylesheet falls back to generic sans-serif.

## Layout

The page uses a centred container with a column grid built from `wmcads-container`, `wmcads-grid` and `wmcads-col-*` classes. The intro section is a two-column split; "What we do" is a four-column by two-row icon grid; "Latest News" is four equal cards with image on top, date, linked headline and a truncated summary ending in an ellipsis; the featured block spans the full container width with an image above its caption.

Spacing is built from a small measured scale: 4px, 5px, 8px, 10px, 12px, 15px, 16px, 24px and 32px, with 32px the common gap between grid columns and 16px the usual nav-link padding. Vertical rhythm is generous, with a clear gap between each section so that headings anchor their blocks. The hero is the only full-bleed element; the rest of the content respects the container edges.

## Elevation & Depth

Depth is almost entirely flat. The only layering is the orange headline panel laid over the hero photograph and the dark header bar sitting over the top edge of the image. Cards are separated from the canvas by their photographs and whitespace rather than shadows or borders; the single measured shadow is a spread used for a full-width dark overlay, not a decorative drop shadow. Do not add elevation to cards or buttons.

## Shapes

Corners are restrained. The one measured radius is 5px, applied to buttons, matching the `border-radius` of the shipped `wmcads-btn` rule. Photographs, the hero panel and news images are square-cornered rectangles. Icons are outlined line drawings in orange. The effect is rectilinear and civic, with a very slight softening on interactive controls only.

## Components

- **Primary action button.** As measured on the home page: white fill (#ffffff), orange text (#c05701), 16px bold Noto, 12px padding, 50px tall, 5px radius ("Sign up to updates"). The standard button in the stylesheet inverts this: orange fill, white text; the white form is the variant for dark backgrounds.
- **Hero panel.** Solid orange block, white 46px DM Sans bold headline, 15px padding, inset from the left over the photograph.
- **Header.** Charcoal bar (#231f20), white 16px nav text, logo at left, search icon at right. The nav-link style includes a teal-blue (#007da8) background state used by the skip link.
- **Linked headline.** Teal-blue DM Sans or bold Noto, underlined, wraps to several lines in the four-card news row.
- **News card.** Image, date in regular body type, underlined headline, short summary.
- **Icon tile.** Orange outline icon above an underlined bold label, laid out four across.
- **Footer.** Charcoal band with white text.

The stylesheet also ships `wmcads` accordion, table, pagination, autocomplete, search-filter, message-summary, content-card and mega-menu classes, which this page's header uses (`wmcads-header--mega-menu`).

## Design System Architecture

WMCA builds on its own open design system, referred to in the shipped CSS as `wmcads`. The home page loads `https://cloudcdn.wmca.org.uk/wmcaassets/ds/1.5.9/css/wmcads.min.css` and a templates stylesheet from the same CDN, and its markup uses `wmcads-html`, `wmcads-header`, `wmcads-container`, `wmcads-grid` and `wmcads-col-*` classes (BEM-style `block__element--modifier` naming). The system is documented at [designsystem.wmca.org.uk](https://designsystem.wmca.org.uk/) (typography, colour palettes, icons, images, layout, utilities; components and patterns) and its source is the [wmcadigital/wmca-design-system](https://github.com/wmcadigital/wmca-design-system) repository, a Sass and Gulp project with a `tokens.config.json`.

The supplied design-system link, [designsystem.tfwm.org.uk](https://designsystem.tfwm.org.uk/), is a sibling system: the "Transport for West Midlands Design System", maintained by the WMCA Digital and Data team (repository wmcadigital/wmn-design-system, version 2.4.0 on its page). Its class names and tokens were not found on wmca.org.uk, so no values are taken from it; the values in this file come from the live page, the shipped `wmcads` stylesheet and the WMCA design-system documentation.

## Do's and Don'ts

- Do keep the canvas near-white (#fcfcfc) and let orange (#c05701) mark only the hero, icons, section accents and the primary button.
- Do underline links and use teal-blue (#007da8) for linked headlines.
- Do pair DM Sans 700 headings with 16px/24px Noto Sans Display body text.
- Do use real photography of the region and its people.
- Don't use the white-on-orange and orange-on-white button variants interchangeably: orange-on-white is for dark or coloured bands.
- Don't round corners beyond 5px or add card shadows.
- Don't describe controls by colour in copy; the design system asks writers to avoid colour references.
- Don't introduce purple, yellow or other palette colours as primary accents.

## Responsive Behavior

The system states that H1 and H2 are reduced by 15% below 768px wide; the capture at 390px shows the H1 at 32px/40.8px in DM Sans bold. The `wmcads-col-*` grid has breakpoint variants (sm, md, lg, xl), so the four-up news and icon grids are expected to collapse to fewer columns on narrow screens, and the header uses a mega-menu pattern that scrolls rather than shrinking the type. Touch targets stay large: buttons are 50px tall and nav links carry 16px padding.

## Iteration Guide

1. Start from the canvas #fcfcfc and ink #231f20; add orange (#c05701) only after the layout reads well without it.
2. Set headings in DM Sans 700 at 46px/48px (display) and body in Noto Sans Display 16px/24px.
3. Build links in #007da8 with underline; keep hover states darker rather than recoloured.
4. Use 5px radius for any control and no shadows.
5. Pick the button variant by background: orange fill on light, white fill with orange text on dark or coloured bands.
6. Compose layouts from the spacing scale (4px up to 32px) inside a centred container and a column grid.
7. Check each pair against the 3:1 minimum the design system claims, and keep copy plain, question-led and dated.
