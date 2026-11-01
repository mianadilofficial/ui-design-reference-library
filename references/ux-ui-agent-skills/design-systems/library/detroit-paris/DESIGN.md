---
version: alpha
name: Detroit (Detroit Paris)
category: "Fashion & Apparel"
description: "AI production house in Paris for luxury brands: a stark black-on-white page with a 184px Mangogrotesque 700 uppercase headline, tiny 9.6px uppercase Barlow chrome, square-edged campaign imagery, hairline #0b0b0b1a borders and a difference-blended fixed nav. Built in Webflow."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  hairline: "#0b0b0b1a"
  grey-bold: "#0009"
  neutral-300: "#e3e1de"
  webflow-var-orange: "#ff4c24"
typography:
  display:
    fontFamily: Mangogrotesque, Arial, sans-serif
    fontSize: 25.6px
    fontWeight: 700
    lineHeight: 21.76px
    textTransform: uppercase
  display-mobile:
    fontFamily: Mangogrotesque, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 27.2px
    textTransform: uppercase
  display-hero:
    fontFamily: Mangogrotesque, Arial, sans-serif
    fontSize: 184px
    fontWeight: 700
    textTransform: uppercase
  display-hero-mobile:
    fontFamily: Mangogrotesque, Arial, sans-serif
    fontSize: 124px
    fontWeight: 700
    textTransform: uppercase
  body:
    fontFamily: Barlow, sans-serif
    fontSize: 9.6px
    fontWeight: 400
    lineHeight: 9.6px
    textTransform: uppercase
  nav:
    fontFamily: Barlow, sans-serif
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 19.2px
    textTransform: uppercase
  nav-mobile:
    fontFamily: Barlow, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    textTransform: uppercase
  link:
    fontFamily: Barlow, sans-serif
    fontSize: 25.6px
    fontWeight: 400
    lineHeight: 38.4px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 6.4px
  s3: 12.8px
  s4: 19.2px
  s5: 51.2px
  s6: 76.8px
components:
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
---

## Overview

Detroit is a Paris-based production house that sells AI, CGI, FX and 3D content to luxury brands. Its own homepage is the opposite of a SaaS landing page: there is no product screenshot, no pricing and no primary button. The page title measured on the live site is "Detroit | AI Production House in Paris for Luxury Brands", and the tagline in the hero reads "Detroit - AI Production House in Paris, Crafting Culture for Luxury Brands." followed by the capability line "PRINT & FILM. AI. 3D. CGI."

The whole first screen is one typographic gesture and one image field. The words "CRAFTING CULTURE" are set in Mangogrotesque 700, uppercase, at 184px on desktop (124px in the mobile pass), in `#000000` on a `#ffffff` page. Below the tagline, a staggered row of campaign images climbs from the lower left to the right edge, each tile taller than the one before it. The imagery carries all of the colour; the interface contributes only black, white and a barely visible hairline.

The voice, read from the opened Services page, is short and confident: "Studio creativity. Atelier precision.", "Technology enhances creative direction — it never replaces it." and "Responsibility is built into the system, not added as an afterthought." Headings on that page are uppercase and declarative, for example "BUILDING CONTENT FACTORIES FOR LUXURY BRANDS" and "MASS PRODUCTION WITH ARTISANAL-LEVEL QUALITY."

Role notes for this file. The extractor labelled a white "Our recent book" promo card as the primary CTA (white fill, black text, 2.56px radius, 1px `#0b0b0b1a` border). That card is a dismissible promo with a close icon, not a brand button, so it is recorded in SOURCES.json as a role override and is not documented as UI. `primary` here is the black `#000000` that the display type and wordmark use; `on-primary` is white.

## Colors

The palette is two values and their transparencies. Measured on the desktop pass: the most-read text colour is `#000000` (558 characters) and the second is `#ffffff` (38 characters, the five nav labels). The largest background by area is `#ffffff`, and the capture is dominated by white, so `canvas` is `#ffffff`. The `body` element itself measures `#000000`, which is why `page-body` is kept as a separate token even though the viewer sees white.

- `canvas` `#ffffff`: the visible page background behind the headline and image field.
- `ink` / `page-body` / `primary` `#000000`: headline, tagline, link text and the body element background.
- `on-primary` `#ffffff`: text colour measured on the nav; on the live page the fixed nav is blended against whatever is beneath it (see Elevation).
- `hairline` `#0b0b0b1a`: the site's `--grey` variable and the only border colour measured (weight 1 in the border frequency table).
- `grey-bold` `#0009`: the `--grey-bold` variable declared in the shipped `:root`.
- `neutral-300` `#e3e1de`: a warm light grey declared in `:root` as a Webflow variable that the stylesheet marks `<deleted|variable-…>`; it is not observed on the first screen.
- `webflow-var-orange` `#ff4c24`: declared in `:root` as `--color-primary<deleted|variable-…>`. The name says primary, but it does not appear in the measured hero, nav or promo card, so it is not used as the brand action colour. It is kept because it was measured in the shipped CSS.

Not brand colours: `--swiper-theme-color` `#007aff` is the Swiper carousel library's own default variable, and the CSS corpus also contains Webflow editor-style blues and greys (for example `#0092ff`, `#c0ccda`) that belong to the platform's default component styles.

## Typography

Two families are loaded: Mangogrotesque (weight 700 only) and Barlow (300, 400, 500, 600, 700). The `@font-face` list in the shipped CSS names exactly Mangogrotesque, Barlow and `webflow-icons`.

Mangogrotesque is the voice. It is a tall, condensed grotesque set uppercase. The character tallies from the desktop extraction add up exactly: 116 Mangogrotesque characters equal 15 characters at 184px (the "CRAFTING CULTURE" hero), 75 at 25.6px (the H1 tagline) and 26 at 19.2px. The hero line-height was not recorded, so `display-hero` omits it; the H1 tagline is 25.6px with a 21.76px line-height, tighter than 1:1, and the mobile H1 is 32px with a 27.2px line-height.

Barlow handles everything else. The most-read size on the page is 9.6px (480 characters) at weight 400, uppercase, with a 9.6px line-height as measured on the body element. Nav links measure 12.8px/19.2px uppercase on desktop and 16px/24px uppercase in the mobile pass, where the nav reads "MENU". The `link` role is Barlow 400 at 25.6px with a 38.4px line-height, measured on a project link tile.

Font substitutes. Both faces are proprietary or self-hosted on the site's Webflow account; the stack falls back to Arial and generic sans-serif as declared in the CSS (`Mangogrotesque, Arial, sans-serif`). Barlow is an open-source Google Fonts family, so it can be loaded directly. For Mangogrotesque, a condensed 700-weight uppercase grotesque is the nearest class of substitute, but this file does not claim a specific equivalent.

Letter-spacing was measured as `normal` on every sampled role.

## Layout

The page is a fixed header over a full-width canvas: the desktop pass ran at a 1280px viewport, no max-width container was measured, and in the capture the hero text starts near the left edge. The fixed nav uses a three-part flex row: a logo at the far left, Talents and Projects next to it, and Services, Insights and Contact justified to the right, with horizontal padding of 1.5rem, and a later `.nav-c` rule in the stylesheet sets 3vw.

Below the headline block the page becomes a mosaic. Image tiles are bottom-aligned and step upward in height from left to right in the capture, so the row forms a rising skyline. The homepage markup lists a talents grid and a projects grid; the Services page lists a hero with a grid of campaign visuals, a team section of role cards, alternating image and text blocks, a filterable project gallery, a Business Impact section with four pillars (Creativity, Responsibility, Scale, Security), a client logo wall grouped by category, a partner row (Everest, NVIDIA, Adobe, ComfyUI) and a footer with newsletter sign-up and Paris and Marseille addresses.

Spacing values measured on the desktop pass: paddings of 1px, 6.4px, 12.8px, 19.2px and 51.2px, and gaps of 6.4px and 76.8px. These are recorded as `s1` to `s6`.

## Elevation & Depth

There are no box shadows on the first screen (the box-shadow frequency table is empty) and no gradient backgrounds. Depth comes from three things only: image overlap order, the one-pixel `#0b0b0b1a` hairline on the promo card, and the fixed nav.

The nav is the single piece of layering logic. The shipped rule `.nav-boiler` is `position: fixed`, `z-index: 99`, `pointer-events: none`, `color: #000` and `mix-blend-mode: difference`, and the inner `.nav-c` sets `color: var(--white)`. That explains why the extractor measures the nav labels as `#ffffff` while the capture shows them as dark on the white page: white text under `difference` blending reads dark on a light surface and light on a dark one. Hover on the promo card changes only its border colour, from `rgba(11, 11, 11, 0.1)` to `rgba(0, 0, 0, 0.36)`; the box-shadow stays `none`.

## Shapes

Everything measured on the first screen is square. The body, header, H1, nav link and link roles all report a border radius of 0px, and the image tiles in the capture have square corners. The only non-zero radius on the page, 2.56px, belongs to the promo card that is excluded from the system, so the rounded scale is a single `none: 0px` token.

The shipped CSS corpus contains other radii (3px, 3.2px, 5px, 8px, 80px) from the platform's default component styles and the carousel; none was measured on a visible brand element, so none is a token.

Imagery is rectangular and borderless. Image size varies tile to tile, which is the shape language: rectangles of different heights sharing a baseline.

## Components

Nav. A fixed header with five text links (Talents, Projects, Services, Insights, Contact) and a logo mark at the left. On desktop the labels are Barlow 12.8px uppercase; the stylesheet and the extraction both show white text with a difference blend. In the mobile pass the nav measures as the single label "MENU" at 16px; the markup also contains a mobile menu with a "close" control and the same five links plus Instagram and LinkedIn.

Headline block. The H1 sits beside the hero image: Mangogrotesque 700 at 25.6px, uppercase, `#000000`. Under it, in the same family and size class, the capability line "PRINT & FILM. AI. 3D. CGI." The oversized "CRAFTING CULTURE" is the visual headline at 184px.

Project and talent tiles. Image-first links. The homepage markup lists project links (for example IMMERSIO, Perrier Jouët II, Louis Vuitton Grasse, Hermes) and talent links (for example Nastassia Brame, Squad, Chelios). The `link` role measured on a tile is Barlow 400 at 25.6px.

Promo card (excluded). "Our recent book — A Comparative Analysis of Carbon Impact in Production", with a thumbnail and a close icon, anchored top right. It is a promotion, not a component of the system.

There is no form, input, card shadow or button style measured on the first screen. A newsletter form exists in the Services page footer text, but its styling was not measured.

## Design System Architecture

No public design system, brand guidelines or press kit was found. The homepage and Services page list no design-system, brand or GitHub link, and the `/brand` path returned HTTP 404. The de-facto system is a Webflow project: the HTML links two Webflow-hosted stylesheets under `https://cdn.prod.website-files.com/6916ebf7b464c0b6f4525011/css/` (`detroit-talent.webflow.shared.cc923ede3.min.css` and `detroit-talent.webflow.6916ebf7b464c0b6f452500d.d9de9da73.opt.min.css`), the font list includes `webflow-icons`, and Swiper is present (`--swiper-navigation-size: 44px`).

Class naming is block-based and short: `.nav-boiler`, `.nav-c`, `.nav-l`, `.nav-r`. The `:root` block declares seven custom properties: `--black`, `--white`, `--grey` (`#0b0b0b1a`), `--grey-bold` (`#0009`), the two deleted Webflow variables for neutral-300 and primary, and Swiper's theme variables. Tokens in this file map directly to that set; nothing else is invented.

Source pages opened: https://www.detroit.paris/ and https://www.detroit.paris/services; the stylesheets above were fetched and read for the rules cited here.

## Do's and Don'ts

Do set display type in Mangogrotesque 700, uppercase, black on white, and make it very large (184px in the measured hero) so the headline is the primary graphic.

Do keep Barlow chrome tiny and uppercase: 9.6px for body-size text, 12.8px for nav links on desktop.

Do let campaign imagery supply all colour and keep the interface to `#000000`, `#ffffff` and the `#0b0b0b1a` hairline.

Do keep corners square (0px) on imagery and containers.

Do apply the fixed nav with `mix-blend-mode: difference` so it stays legible over both white and image areas.

Don't add shadows or gradients; none are measured.

Don't treat the "Our recent book" promo card, its white fill, 2.56px radius or 9.6px/600 text as a button style.

Don't use `#ff4c24`, `#e3e1de` or the Swiper blue `#007aff` as active brand colours; they are declared variables or library defaults not observed in the hero.

Don't introduce a rounded scale, a third typeface or a coloured accent without new measurements.

## Responsive Behavior

Only the extractor's 390px mobile pass was recorded, plus the breakpoints declared in the shipped stylesheet. The stylesheet declares `@media` rules at max-width 991px, 767px and 479px (and a min-width 768px rule). What each rule changes was not measured beyond the values below.

Measured at 390px: the H1 grows to 32px with a 27.2px line-height (from 25.6px/21.76px on desktop); the hero "CRAFTING CULTURE" measures 124px (from 184px); the nav is reduced to the single label "MENU" in Barlow 400 at 16px with a 24px line-height; and the most-read size is 12px. The mobile H1 box is 352px wide and 79px tall; the mobile nav box is 390px wide and 58px tall.

Image-tile arrangement, tile counts per row and menu behaviour on tap are not measured. The markup includes a mobile menu with a "close" control, but its visual layout was not captured.

## Iteration Guide

1. Start from `canvas` `#ffffff` and `ink` `#000000`; add no other colour to the interface layer. Put colour in photography and CGI.
2. Set the first heading in `display-hero` (Mangogrotesque 700, 184px desktop, 124px mobile) and the descriptor in `display` (25.6px desktop, 32px mobile). Keep the line-height under 1:1 as measured on the H1 (21.76px at 25.6px).
3. Build the nav in Barlow 400 uppercase (12.8px desktop, 16px mobile), fixed, with `mix-blend-mode: difference` and white text.
4. Lay out project tiles as square-cornered rectangles of rising height on a shared baseline; do not round them.
5. Use `hairline` `#0b0b0b1a` for any divider and nothing heavier.
6. Before adding a button, measure the live site again: none exists on the first screen today, and the promo card is not a template.
7. When in doubt about a value, check `custom-designs/detroit-paris/SOURCES.json` for where it was measured, and write "not measured" rather than guessing.
