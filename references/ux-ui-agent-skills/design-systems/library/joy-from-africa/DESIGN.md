---
version: alpha
name: Joy from Africa to the World
category: "Culture & Events"
description: "Joy from Africa to the World, the V&A Waterfront Cape Town festive microsite (jfa-awards.snp.agency): an off-white stage (#f7f7f2) behind pastel blob-framed illustrations, navy (#003056) type only, Voyage display caps at 63.7px (43.68px mobile) and Gill Sans 600 at 12px uppercase for navigation. No radius, no buttons with fills, one soft shadow."
colors:
  canvas: "#f7f7f2"
  page-body: "#ffffff"
  ink: "#003056"
  primary: "#003056"
  surface-sky: "#d4ecf0"
  surface-sand: "#ffedbf"
  surface-mint: "#c4e7d5"
  surface-pink: "#f7c9cc"
  hairline: "#d6d2ca"
typography:
  display:
    fontFamily: Voyage, Arial, Helvetica, sans-serif
    fontSize: 63.7037px
    fontWeight: 400
    lineHeight: 63.7037px
    letterSpacing: "-1.27407px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Voyage, Arial, Helvetica, sans-serif
    fontSize: 43.68px
    fontWeight: 400
    letterSpacing: "-1.092px"
    textTransform: uppercase
  nav:
    fontFamily: "\"Gill Sans\", Arial, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 600
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 3px
  s2: 14.81px
  s3: 16px
  s4: 20px
  s5: 35.56px
  s6: 70.37px
  s7: 93.33px
components:
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

The measured site is `https://jfa-awards.snp.agency/` (document title "Joy from Africa to the World", language `en`), a festive microsite for the V&A Waterfront in Cape Town. On first load it shows an intro screen (a loading counter "100%", "SKIP INTRO" and "ENTER SITE" controls) over a large illustrated scene: a title lockup "Joy FROM Africa TO THE WORLD, BETWEEN THE MOUNTAIN AND THE SEA" with the V&A Waterfront Cape Town ship emblem, an octopus, aloes, a hyrax, a Ferris wheel and colored harbor houses. That intro overlay was treated as a splash screen, hidden, and the site proper was re-measured with the extractor (`--force --no-motion`).

The measured home is a full-viewport carousel with one slide at a time. The current slide in the capture is "ABOUT US / OUR STORY": a centered pastel sky-blue blob holding an illustration of a coral-colored musical note with snail shells, flanked by cropped neighbors on both sides (a sand-yellow blob with aloes on the left, a mint blob with protea flowers on the right). Underneath is a small caption "ABOUT US" between two dots and the slide title "OUR STORY" in large condensed capitals. A circular outlined menu button sits at the top right, the emblem at the top left, a round dotted control at the bottom left, and two arrow controls at the bottom center. The menu lists three numbered destinations: "01 OUR STORY", "02 OUR INSTALLATIONS" and "03 CENTRE COURT". The site also links `/about`, `/centre-court`, `/victoria-wharf` and the Facebook, Instagram and X pages of V&A Waterfront.

The page itself is exactly one viewport tall (scrollHeight 800 at a 1280px width, 387 visible elements); all further content arrives by slide navigation, not scrolling.

The brand voice is celebratory and place-led: the title lockup says "Joy from Africa to the World, between the mountain and the sea", and the illustrations feature local flora and fauna of the Cape (aloes, proteas, shells, an octopus, a hyrax) rather than photography. Illustration, not photography, is the imagery type on both the intro scene and the carousel slides, and each slide receives one pastel blob color so that the pages feel like a sequence of postcards. Typography is deliberately small next to the illustrations except for the single large slide title, so the artwork is the first read and the label second.

## Colors


The text color is a single navy, `#003056` (76 characters, all measured text). Surfaces are an off-white stage and a set of pastel fields that frame illustrations. All come from the site's own root variables:

- **Canvas `#f7f7f2`**: the stage behind the carousel (area weight 1289) with `#ffffff` as the body background (2048).
- **Ink / primary `#003056`**: `--color-navy`. It is the only text and icon-outline color; there is no separate action color because controls are outlined circles and arrows.
- **Surface sky `#d4ecf0`** (`--color-sky-blue`), **surface sand `#ffedbf`** (`--color-sand-yellow`), **surface mint `#c4e7d5`** (`--color-aero-blue`) and **surface pink `#f7c9cc`** (`--color-princess-pink`): the pastel blob colors that sit behind each slide's illustration (areas 1035, 1008 and 1008 for the first three).
- **Hairline `#d6d2ca`** (`--white-grey-border`): used for borders (3 measured occurrences).

Other root variables include `--color-blue #b3d7f3`, `--color-ocean #bfe0db`, `--color-mountain-green #c1e3d2`, `--color-dark-green #02192b`, `--color-off-white #fbfbf7`, `--white-grey #f8f8f0`, `--white-grey2 #e5e4d8`, `--white-smoke #f0f0f0` and `--color-whiteblue #cae0f6`. A navy overlay at 90% (`#003056e6`, area 1024) is measured on the page; what it overlays was not determined. The swiper accent `#007aff` is the Swiper library default, not a brand color.

## Typography

- **Voyage** (weight 400, fallback `Arial, Helvetica, sans-serif`) is the display face, always uppercase. The slide title "OUR STORY" measures 63.7037px with line-height 63.7037px and letter-spacing -1.27407px on desktop; on the 390px mobile pass the display measures 43.68px with letter-spacing -1.092px. A second display size of 53.0815px is measured for 35 characters.
- **Gill Sans** (weight 600, fallback `Arial, Helvetica, sans-serif`) carries the small interface text: nav and captions at 12px (27 characters), uppercase,, with a 11.8519px size measured for 5 characters.
- **Lato** (weight 400) is loaded and used for 5 characters.

Font usage by characters: Voyage 44, Gill Sans 27, Lato 5. The ladder is 53.0815px, 12px, 63.7037px and 11.8519px on desktop, and 43.68px, 12.48px and 16.64px on mobile. The only fallbacks measured are the declared Arial and Helvetica.

## Layout

A single-viewport stage. The illustration blob is centered; neighbors are cropped by the left and right edges, which communicates horizontal paging. The title and its caption are centered below the blob. Four fixed controls anchor the corners and bottom center: emblem top left, menu button top right, a circular dotted control bottom left, and previous/next arrows at the bottom center. The measured paddings are 35.5556px, 93.3333px, 70.3704px, 14.8148px and 20px; gaps are 3px and 16px.

## Elevation & Depth

One shadow is measured: `rgba(0, 0, 0, 0.1) -4px 4px 20px 0px`. Elsewhere depth comes from overlap: the title sits over the lower edge of the blob, the cropped neighbor slides sit partly behind the stage edge and a navy layer at 90% opacity (`#003056e6`) is measured on the page.

## Shapes

`borderRadii` is empty: every rendered DOM element computes 0px. In the capture the blob outlines and circular buttons appear round although no CSS radius was measured; the shape language is organic blobs for imagery and perfect circles for controls, with square CSS boxes underneath.

## Components

- **Menu button**: a circular outline in navy with a three-line icon, top right.
- **Numbered menu**: "01 OUR STORY", "02 OUR INSTALLATIONS", "03 CENTRE COURT" in Gill Sans 600 at 12px uppercase (measured nav style), each preceded by its two-digit number.
- **Slide**: pastel blob + illustration + caption ("ABOUT US" flanked by two small circles) + Voyage title.
- **Pager arrows**: two outlined rectangular arrow buttons (left and right) at the bottom center.
- **Intro controls**: "SKIP INTRO" and "ENTER SITE" in a rectangular outlined button; the intro was hidden before the final measurement.

## Design System Architecture

No public design-system or brand-guideline page is linked from the pages opened. The site is built with Next.js (`/_next/static/css/*.css` assets, styled-jsx class names such as `jsx-5c4b0947d024f46`) and a set of named CSS variables, mostly colors (`--color-navy`, `--color-sky-blue`, `--color-sand-yellow`, `--color-mountain-green` and so on), an easing curve (`--ease-out: cubic-bezier(.165,.84,.44,1)`) and a viewport-height unit (`--vh`). Everything the interface needs is therefore a palette plus two typefaces and one easing function.

## Do's and Don'ts

Do:
- Use navy `#003056` for all type and outlines; fill backgrounds with one pastel per slide.
- Set slide titles in Voyage uppercase at the measured size, with negative letter-spacing (-1.27407px at 63.7037px).
- Keep chrome minimal: circular outline buttons and arrows only.
- Use `cubic-bezier(.165,.84,.44,1)` for transitions.

Don't:
- Do not add fills to buttons or other accent colors; navy outlines are the control style.
- Do not use the Swiper default blue `#007aff`.
- Do not treat the intro loader or its "ENTER SITE" control as part of the persistent UI.

## Responsive Behavior

Measured on the 390px mobile pass: the h1/display is 43.68px (down from 63.7037px) with letter-spacing -1.092px and navy `#003056`; the menu items on mobile measure 43.68px; secondary sizes are 12.48px and 16.64px. Navigation layout, slide sizing and control placement on mobile were not measured.

## Iteration Guide

1. Off-white stage, navy type, a pastel blob behind each illustration.
2. One slide per viewport with centered Voyage uppercase title and a 12px Gill Sans caption.
3. Corner controls as navy outline circles and arrow rectangles; no filled buttons.
4. Keep all CSS radii at 0px and use a single soft shadow.
5. Verify with `node web/scripts/verify-designs.mjs --slug=joy-from-africa`.
