---
version: alpha
name: Audemars Piguet
category: "Luxury"
description: "Audemars Piguet's homepage is a black-canvas (#000000) cinematic site: Helvetica Neue Web at weight 100 uppercase 56px for display, white ink, a deep green accent #2b4f4f, square 0px buttons and italic serif Times Now accents over full-bleed watch and jewellery photography."

colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-green: "#2b4f4f"
  ink-beige: "#f6f5f3"
  ink-muted: "#757575"
  ink-dark: "#1b1b1b"
typography:
  display:
    fontFamily: "\"Helvetica Neue Web\", sans-serif"
    fontSize: 56px
    fontWeight: 100
    lineHeight: 56px
    letterSpacing: "-0.56px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Helvetica Neue Web\", sans-serif"
    fontSize: 40px
    fontWeight: 100
    lineHeight: 40px
    letterSpacing: "-0.36px"
    textTransform: uppercase
  body:
    fontFamily: "\"Helvetica Neue Web\", sans-serif"
    fontSize: 17px
    fontWeight: 300
    lineHeight: 22.95px
    letterSpacing: 0.26px
  button:
    fontFamily: "\"Helvetica Neue Web\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.21px
  nav:
    fontFamily: "\"Helvetica Neue Web\", sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 20px
    letterSpacing: 0.21px
rounded:
  xs: 14px
  none: 0px
spacing:
  s1: 1px
  s2: 2.5px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px 16px
    height: 64px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
---

# Audemars Piguet

## Overview

The measured page is audemarspiguet.com/en/home. It is a cinematic, dark-first luxury site: the canvas is pure black (`#000000`), body ink is white (`#ffffff`), and every chromatic moment comes from full-bleed photography and video: an emerald-and-black ceramic necklace on linen, the movement of a watch seen through a sapphire back, a rectangular Neo Frame watch on dark fabric. The site's own homepage text frames the house as "Crafting time since 1875" and "Our craftsmanship thrives at the crossroads of tradition and innovation" (opened on audemarspiguet.com).

Each homepage band is a tall image or video with a left-aligned headline in two registers: the first line in ultra-thin uppercase sans ("INTRODUCING"), the following lines in a slanted serif italic ("Royal Oak Joaillerie Collection"). Under it sit a short paragraph and a text link made of a hairline rule plus the label "Discover more". There are no filled hero buttons. The tone is curatorial and calm; copy is sentence case, descriptive, a few lines long.

Colour apart from black and white is rare. The measured palette includes a deep green accent (`#2b4f4f`) that covers a notable background area, warm off-white (`#f6f5f3`), a mid grey (`#757575`) and a near-black (`#1b1b1b`). The page itself exposes these as CSS custom properties with names like `--color-reference-contrast-accent` and `--color-reference-normal-neutral7`, which shows a two-theme token system (a "normal" light theme and a "contrast" dark theme).

## Colors

- **Canvas** `#000000`: the page background and the largest area by measurement.
- **Ink** `#ffffff`: headlines, body copy, nav and link text, all set white on black or on photography.
- **Primary** `#000000` with **on-primary** `#ffffff`: the only detected filled button ("Subscribe", measured) is a black fill with white text. It is the same value as the canvas, so on this site the "primary" button is a tonal control, not a colour pop. The visible hero calls to action are text links, not filled buttons.
- **Accent green** `#2b4f4f`: a deep green panel colour (890 weight in the area survey). It is the site's declared "accent" in its custom properties.
- **Beige ink** `#f6f5f3`: warm off-white used for light-theme surfaces and text.
- **Muted ink** `#757575`: secondary text and disabled states.
- **Dark ink** `#1b1b1b`: text on light surfaces.

## Typography

Two families, both declared in the page's variables as `--font-family-primary` and `--font-family-secondary`:

- **Helvetica Neue Web** (loaded at 100, 200, 300, 400, 500 and 700): the primary family for everything functional.
  - Display: 56px / 56px, weight 100, letter-spacing -0.56px, uppercase. On a 390px viewport: 40px / 40px, -0.36px.
  - Body: 17px / 22.95px, weight 300, letter-spacing 0.26px.
  - Button and link label: 14px / 24px, weight 500, 0.21px tracking.
  - Navigation links: 14px / 20px, weight 300, 0.21px tracking. The nav landmark measured 12px uppercase with wide tracking, a small-caps label style.
- **Times Now** (italic, loaded at 400, declared at weight 250 in the page's own variables): the secondary family, used for italic headline lines that follow the thin uppercase line. Times Now is a commercial typeface; no measured token is declared for it here because its sizes were not captured as a role. A free fallback with similar high-contrast italic is Cormorant Garamond, which the site itself lists for its Russian-language serif.

Helvetica Neue Web is a commercial face. If unavailable, use Helvetica Neue from the system or Inter at weights 200 to 500, keeping the thin weight for display.

## Layout

The page is 7901px tall at 1280 wide and is built from full-viewport-height bands. Text is left-aligned in a narrow column (headline block about 360px wide in the capture) with a large left gutter, and the media fills the whole band behind or to the right. The header is a slim overlay: menu icon at left, the "Audemars Piguet" wordmark centred, and three icons (watch finder, location, account) at right; the page defines an `--ap-nav-height` variable for it. Spacing values measured on the page are 1, 2.5, 4, 5, 6, 8, 12, 14, 16 and 20px; the site also publishes a larger scale in its variables for section gaps. Density is low: roughly one idea per viewport.

## Elevation & Depth

Depth comes from photography and from a text-over-image treatment, not from shadows. No box shadow was measured on the rendered components. The stylesheet does declare shadow tokens (a "none" shadow and two soft shadows), so shadows exist in the system but are not used on the homepage. On black panels the only separation device is the hairline rule in the "Discover more" link and the change of image.

## Shapes

Radius is minimal. The measured primary button has a `none` (0px) radius; the one non-zero radius measured, 14px (`xs`), appears on 18 elements, such as media controls and small chips. The page's own variables define a graduated radius scale, but the homepage composition is dominated by square edges: full-bleed images, square buttons, straight rules. Keep corners hard.

## Components

- **Primary button** (`button-primary`): black fill, white text, Helvetica Neue 14px weight 500, 0px radius, padding 20px 16px, 64px tall (measured on the "Subscribe" button, 260px wide).
- **Text link CTA**: a short hairline rule followed by a label such as "Discover more" or "Discover", white, same label style. This is the hero's real call to action.
- **Navigation**: icon-led header (menu, wordmark, three utility icons); nav links in Helvetica Neue 14px weight 300.
- **Media controls**: small play/pause triangles at the right of video bands; utility only.
- **Cards and carousels**: Swiper-based sliders (the page exposes `--swiper-theme-color` and navigation size variables); slides are full-bleed, not boxed cards.

## Design System Architecture

No public design system exists that I could open (https://www.audemarspiguet.com/en/home is the page measured). The de-facto system is shipped in the page CSS and is clearly tokenised: a `--color-palette-*` layer (raw greys, beige, green, black, white), a `--color-reference-normal-*` and `--color-reference-contrast-*` layer (semantic roles: primary, secondary, accent, neutral1 to neutral7, error, focus), then named type styles like `--font-primary-display-xl`, `--font-primary-body-md`, `--font-secondary-headline-md`, plus `--spacing-*`, `--radius-*`, `--font-size-*`, `--line-height-*`, `--letter-spacing-*`, `--shadow-*` and `--border-width-*` scales. It also declares font families for Chinese, Japanese, Korean, Arabic and Russian, so the system is built for multi-script locales. Research notes: only the official audemarspiguet.com homepage was opened; no brand-guidelines page was found.

## Do's and Don'ts

Do:
- Use white thin uppercase Helvetica Neue for the lead line and Times Now italic for the follow-on line.
- Let photography and video carry colour; keep UI black, white and grey.
- Use the rule-plus-label text link as the standard hero CTA.
- Keep corners square on buttons and media.

Don't:
- Do not add gradients, glows or drop shadows to controls.
- Do not set display type above weight 200; the measured display weight is 100.
- Do not use the green accent for text or buttons; it is a panel colour.
- Do not treat the "Subscribe" button as a brand-wide pattern: it is a form control on a black field.

## Responsive Behavior

At 390px the display headline falls from 56px to 40px and the tracking from -0.56px to -0.36px, still weight 100 and uppercase. Body stays a light Helvetica Neue. Bands remain full width; the header keeps the menu, wordmark and icons. The system's variables include a nav height and a graduated spacing scale used to compress gaps on small viewports. Verify at 390, 768 and 1280.

## Iteration Guide

1. Begin with black canvas, white ink, and the two type families; get the thin uppercase plus italic pairing right before anything else.
2. Compose each band as media plus a narrow left text column (headline, 2 to 5 lines of light body, rule-plus-label link).
3. Introduce the green `#2b4f4f` only as a flat panel behind content, never as a button.
4. Keep radius at 0px unless matching the 14px small-control radius.
5. Re-run `node web/scripts/verify-designs.mjs --slug=audemars-piguet` after any change.
