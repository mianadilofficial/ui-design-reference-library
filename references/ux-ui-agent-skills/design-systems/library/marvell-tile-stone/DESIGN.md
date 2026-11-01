---
version: alpha
name: Marvell Tile & Stone
category: "Architecture & Interiors"
description: "Marvell Tile & Stone, Perth tiling and natural stone artisans: warm stone canvas #e9e4df with #e3ded9 panels, brass-olive #b1a781 and #9b926a type, dark umber #35311f sections, neueMontreal in light 400 at very large sizes (80px and 48px) with negative tracking, and a floating 8px-radius dark nav pill."
colors:
  canvas: "#e9e4df"
  page-largest: "#e3ded9"
  ink: "#000000"
  primary: "#b1a781"
  ink-white: "#ffffff"
  ink-white-70: "#ffffffb3"
  ink-gold: "#9b926a"
  surface-dark: "#35311f"
  surface-cream: "#f3efeb"
  surface-teal: "#072933"
typography:
  display:
    fontFamily: neueMontreal, "neueMontreal Fallback", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 14px
    fontWeight: 500
    letterSpacing: 0.56px
    textTransform: uppercase
  heading:
    fontFamily: neueMontreal, "neueMontreal Fallback", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 76px
    letterSpacing: "-0.8px"
  subheading:
    fontFamily: neueMontreal, "neueMontreal Fallback", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.2px"
  body:
    fontFamily: neueMontreal, "neueMontreal Fallback", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 62.4px
    letterSpacing: "-0.48px"
  nav:
    fontFamily: neueMontreal, "neueMontreal Fallback", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 8px
  sm: 4px
spacing:
  s1: 4px
  s2: 8px
  s3: 11.5px
components:
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    padding: 4px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 8px
---

## Overview

Marvell Tile & Stone (`https://www.marvellco.com.au/`, title "Marvell Tile & Stone | Perth's Tiling and Natural Stone Artisans") is the site of a Perth tiling and natural-stone contractor. Per its Profile page, founder William Marvell, originally from London, worked on Kensington residences and commercial projects and established Marvell Tile and Stone in Perth in 2018; the company describes a seven-member team of five master tradesmen and two apprentices. The site is built as a quiet, gallery-like portfolio rather than a brochure. Two pages were measured: the home page (1280px wide, only 800px tall: a single screen) and `/profile/` (11788px tall).

The home screen is almost empty on purpose. On a warm stone-grey field (`#e9e4df`; the measured background area is `#e3ded9`) three small photographs float at scattered positions (a pale bathtub against dark mosaic tile and stone, a white kitchen with marble, and tall black towel rails on a wall), and a dark rounded navigation capsule sits at top center containing a monogram "M" and the links PROJECTS, PROFILE and CONTACT. There is no headline or hero copy at all in the measured home page. Navigation lists ten projects, most named after streets (Ainslie Street, Beach Street, Duncraig Road, Eco Outdoor, Excelsior Street, Forrest Street, Hubble Street, Sewell Street, St. Leonards Ave, Vivaldi Avenue).

The Profile page is a long editorial scroll with sections Story, Team, Services and Clients, intertwined with full-bleed photography (a hero slide reads "Modern Delivery" in large white type; others include "Artisan Methods"). Copy is plain and craft-focused: "Natural Stone", "Specialist Feature Tiling", "Bathroom Renovations", "Meticulous Implementation". Client logos link out to builders and architects (TALO Construction, Statuo Group, Red Cloud Building Co, Xon Construction, Arklen, Gavin Hestelow Architect, Robeson Architects).

## Colors

All values measured on the home page or on `/profile/` (extracted as `marvell-tile-stone--profile`).

- **Canvas `#e9e4df`** and **page-largest `#e3ded9`**: the warm stone-grey page and panel color. A lighter cream `#f3efeb` (4064 weight on the profile page) and a grey `#efefef` also appear as backgrounds.
- **Ink `#000000`**: the most-read text on the home page (517 character-weight).
- **Primary `#b1a781`**: a brass-olive used for the Home link and the page's default text color on the dark navigation; hovering it changes the text to white (measured).
- **Ink-gold `#9b926a`**: the dominant text color on the profile page (2191 character-weight), used for headings and paragraphs on dark sections.
- **Surface-dark `#35311f`**: a deep umber, the largest background area on the profile page (12868 weight).
- **Surface-teal `#072933`**: a dark teal background area (1024 weight).
- **Ink-white `#ffffff`** and **ink-white-70 `#ffffffb3`**: navigation text; inactive items are white at 70% opacity and become pure white on hover.

The profile page also measured `#0000ee`; that is the browser default link color, not a brand color, and it is dropped. A translucent black overlay (`#0000001a`) and a scrim from a page transition were measured and are not tokens.

## Typography

One typeface family is loaded: **neueMontreal** (weights 400 and 500) with the fallback stack `"neueMontreal Fallback", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif`. Everything is set in it.

- **Display** (500, 14px, +0.56px tracking, uppercase): the navigation labels (PROJECTS, PROFILE, CONTACT).
- **Nav** (400, 16px): the Home link.
- **Heading** (400, 80px / 76px, -0.8px tracking): service titles on the profile page such as "Natural Stone". A 128px size with -1.28px tracking also appears (67 characters-weight).
- **Subheading** (400, 20px / 24px, -0.2px): "Overview" and similar labels.
- **Body** (400, 48px / 62.4px, -0.48px): the long introductory paragraph about the founder is set at this very large size; most characters on the page are at 28px with -0.28px tracking (1792 weight).

Tracking is always exactly -1% of the font size on text above 14px. The weight scale is light: 400 on 3109 character-weight, 500 on 49, 700 on 7. neueMontreal is a commercial typeface, and the declared fallback is Helvetica Neue / Helvetica / Arial.

## Layout

The site is a Next.js build (static asset paths under `/_next/static/`) with a layout driven by CSS variables: `--container-width` 1824px, `--container-gutter` 20px, `--nav-height` 3rem, `--nav-margin` 1.5rem, section paddings (`--padding-section--sm` 1.5rem, `--md` 3rem, `--lg` 5rem, `--xl` 10rem) and gaps (`--gap-section--sm` 2rem through `--gap-section--xl` 6.25rem, `--gap-container--sm/md/lg` 1rem/1.25rem/1.5rem, `--gap-component--sm/md/lg/xl` .25rem/.5rem/.75rem/1.125rem). The home page uses viewport units for a single locked 800px screen; photos are absolutely scattered at different sizes with measured gaps of 300px and 200px. The measured spacing steps are 4, 8 and 11.5px on the home page, and the profile page adds 48px, 9.6px, 64px and 200px paddings.

## Elevation & Depth

No box shadows were measured on either page. The only layering is the dark navigation capsule floating over imagery, photographs overlapping the flat canvas, and a translucent black wash used as an overlay on image slides. Dividers are drawn with typographic rules ("–––") in the profile copy rather than lines.

## Shapes

Measured radii: `8px` (the navigation capsule; token `xs`) on the home page and `4px` (5 elements) and `8px` (3 elements) on the profile page (token `sm 4px`). Photographs are square-cornered in the capture. There is no pill or circular radius.

## Components

- **Navigation capsule**: a dark, 8px-radius bar fixed near the top center, 48px tall (`--nav-height: 3rem`), 4px padding, holding a monogram and three uppercase labels. Items have `11.5px 8px` padding, 40px tall touch areas, white-70% text that turns white on hover.
- **Home link**: 16px brass `#b1a781`, underlined, turning white on hover.
- **Photo tiles**: borderless rectangles that float on the canvas at different scales.
- **Slide**: full-bleed photograph with a giant centered white title ("Modern Delivery") and small control labels at the bottom.
- **Editorial paragraphs**: very large, light-weight text with paragraph markers "–––".
- **Client list**: text links to builders and architects that open in a new tab.
No filled buttons, forms or cards were measured, so no button tokens are declared.

## Design System Architecture

No public design system or brand guideline is published; the pages opened (`/`, `/profile/`) link to none. The de-facto system is a bespoke Next.js stylesheet exposing 469 root variables (the extraction count), mostly layout variables in the `--padding-section--*`, `--gap-*`, `--container-*`, `--nav-*` families, plus viewport helpers (`--vw`, `--vh`, `--100svh`, `--100lvh`) and the default Swiper variables (`--swiper-navigation-size: 44px`, `--swiper-theme-color: #007aff`, which is the Swiper library's default and not a brand color). Colors and fonts are not exposed as variables.

## Do's and Don'ts

Do:
- Let imagery and white space lead; keep the home screen almost empty.
- Use very large light-weight neueMontreal with slightly negative tracking.
- Keep palette to warm stone greys, brass `#b1a781`, `#9b926a`, deep umber `#35311f` and white.
- Use one dark, 8px-radius navigation capsule for all navigation.

Don't:
- Don't add filled call-to-action buttons or shadows; none were measured.
- Don't use the browser-default link blue (`#0000ee`) or the Swiper default `#007aff`.
- Don't set body copy at normal web sizes on the editorial pages; the measured paragraphs are 28px to 48px.
- Don't use bold weights; 700 appears on only 7 characters.

## Responsive Behavior

Mobile-pass font-size weights on the home page were led by 12px (528), then 56px (41), 14px (22), 112px (20) and 16px (4); on the profile page by 24px (3318), 16px (766), 36px (311), 12px (85), 40px (64), 14px (49) and 56px (42). That is, the profile body text is 24px and its headings 36px to 56px on mobile, versus 28px/48px and 80px/128px on desktop. Mobile layout, nav behavior and breakpoints are not otherwise measured.

## Iteration Guide

1. Canvas `#e9e4df` with `#e3ded9` panels, black `#000000` text on light and brass `#9b926a` / `#b1a781` on dark `#35311f`.
2. Set all text in neueMontreal 400; headings 80px / 76px, tracking -1% of size.
3. Build a single floating dark nav capsule with 8px radius and three uppercase 14px labels.
4. Use big photographs as the content; avoid cards and buttons.
5. Measure `/projects/` pages before documenting project layouts.
