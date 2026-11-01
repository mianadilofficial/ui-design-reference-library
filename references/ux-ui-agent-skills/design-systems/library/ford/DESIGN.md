---
version: alpha
name: Ford
category: "Automotive"
description: "Ford.com's US home page: black #000000 hero and spotlight bands alternating with white #ffffff, #333333 body ink, Ford blue #066fef pill buttons (hover #044ea7) with 400px radius at 40px tall, #0562d2 links and promo bars, 8px media corners, and FordFont throughout from 54px/600 headlines to 14px/700 button labels."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#333333"
  ink-secondary: "#5e5e5e"
  ink-muted: "#666666"
  ink-on-dark: "#f0f0f0"
  primary: "#066fef"
  primary-hover: "#044ea7"
  on-primary: "#ffffff"
  ford-blue: "#0562d2"
  navy: "#00095b"
  brand-deep: "#00142e"
  surface-gray: "#f0f0f0"
  surface-subtle: "#fafafa"
  tile-fill: "#0000000d"
  ghost-fill: "#00000033"
  hover-gray: "#e5e5e5"
  hairline: "#808080"
typography:
  display:
    fontFamily: FordFont
    fontSize: 54px
    fontWeight: 600
    lineHeight: 64px
  display-mobile:
    fontFamily: FordFont
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  heading:
    fontFamily: FordFont
    fontSize: 48px
    fontWeight: 600
    lineHeight: 56px
  tile-title:
    fontFamily: FordFont
    fontSize: 40px
    fontWeight: 600
  card-title:
    fontFamily: FordFont
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
  subheading:
    fontFamily: FordFont
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  eyebrow:
    fontFamily: FordFont
    fontSize: 16px
    fontWeight: 600
  nav:
    fontFamily: FordFont, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: FordFont
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: FordFont
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  input:
    fontFamily: FordFont, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 22.8576px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 20px
  xl: 24px
  2xl: 400px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14.07px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 8px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-white:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 8px
    height: 40px
  button-white-hover:
    backgroundColor: "{colors.hover-gray}"
    textColor: "{colors.page-largest}"
  button-outlined:
    textColor: "{colors.ford-blue}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    border: "1px solid #0562d2"
    padding: 0px 8px
    height: 40px
  button-ghost:
    backgroundColor: "{colors.ghost-fill}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 8px
    height: 40px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 40px
  action-card:
    backgroundColor: "{colors.tile-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.md}"
    padding: 24px
  footer:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.ink-secondary}"
---

## Overview

The measured page is ford.com in the US (finalUrl `https://www.ford.com/`, title "Ford® - New Hybrid & Electric Vehicles, SUVs, Crossovers, Trucks, Vans & Cars"). It is long (10283px at desktop) and rhythmically alternates black and white bands. A 56px navigation bar carries the blue-oval logo and four menu buttons (Vehicles, Shop, Support & Service, For Business) over a black hero carousel; in the capture the hero shows an electric-vehicle teaser with a "FATHOM" wordmark, colourful circular image crops and the 54px headline "The Electric Vehicle You've Been Waiting For" in near-white `#f0f0f0`, with a white "Learn More" pill and carousel pause control.

The white section that follows starts with "Pick Up Where You Left Off", then an awards row ("Unmatched New-Vehicle Quality Among Mainstream Brands") of three dark photo cards with award badges, the blue "Explore Awards" pill and an outlined "View All Awards" pill, and an F-150 feature. Full-width Ford-blue bars (56px) frame a large promotional carousel. A black "Find Your Ford" band offers category tabs (SUVs & Cars, Trucks & Vans, Electric & Hybrid, Performance) over tall vehicle cards with 40px model names ("Bronco® Raptor®", "Ranger® Raptor®", "F-150® Raptor®"). Further white sections cover technology ("Create Your Perfect Drive", BlueCruise), buying ("Get a Quote. Get Keys. Get Going." with a blue Build & Price panel and grey action cards: Find a Dealer, Pre-Qualify, Search Inventory), owner services ("AT YOUR SERVICE" in heavy blue display type), parts, community stories, a black "Picture Yourself in One" gallery, a "Send Me Updates" signup row and a light grey footer.

The voice is direct and confident ("Sharp New Stance. Same Heavy Lifting."), set in a single bold, slightly rounded corporate face.

## Colors

- **canvas `#ffffff`** (`--primaryBackgroundColor`) and **page-largest `#000000`**: the two alternating band colours; black covers the largest measured area.
- **ink `#333333`** (`--secondary-font-color`, `--link-color`): body copy and white-band headings such as "Pick Up Where You Left Off".
- **ink-secondary `#5e5e5e`** (`--footer-main-link-color`): footer links, the second most-read text color.
- **ink-muted `#666666`**: eyebrows ("Technology", "Buying A Ford") and mega-menu headings.
- **ink-on-dark `#f0f0f0`**: the hero headline colour on black.
- **primary `#066fef`** (`--button-background-color`): the filled blue pill. **primary-hover `#044ea7`** (`--button-background-color-on-hover`).
- **ford-blue `#0562d2`**: links, outlined pills, the carousel crumb, and the full-width blue promo bars.
- **navy `#00095b`**: the measured hover colour of the Vehicles menu button. **brand-deep `#00142e`** (`--brandPrimaryBackgroundColor`) is the deepest brand background token.
- **surface-gray `#f0f0f0`**: the footer band; **surface-subtle `#fafafa`**: secondary white surfaces.
- **tile-fill `#0000000d`**: 5% black fill on grey action cards; **ghost-fill `#00000033`**: 20% black fill of pills over imagery.
- **hover-gray `#e5e5e5`**: the hover fill of white pills and tab borders. **hairline `#808080`**: the most common border.

## Typography

FordFont is the only text family (all 4913 measured characters). It is loaded in weights 100–300, 400, 500, 600 and 700–900, plus a separate display family, FordMotion (400 and 700–900).

- **display**: 54px/64px, weight 600, the hero headline.
- **heading**: 48px/56px, weight 600, section headings.
- **tile-title**: 40px, weight 600, model names on vehicle cards and the Build & Price panel.
- **card-title**: 24px/32px, weight 600, action cards such as "Find a Dealer".
- **subheading**: 20px/28px, weight 600, card titles in black bands ("SUVs & Cars").
- **eyebrow**: 16px, weight 600, in `#666666` above headings.
- **nav**: 16px/28px, weight 500, the navigation bar.
- **body**: 16px/24px, weight 400.
- **button**: 14px/20px, weight 700, every pill label.
- **input**: 16px/22.8576px, weight 300, search and signup fields.

By characters the most common sizes are 14px, 16px and 11px (small print), and weights spread across 400, 600 and 300 with 700 for buttons. Headlines are always 600, never 700+. FordFont is proprietary; the shipped fallback in form fields is Arial.

## Layout

At 1280px the page uses a 56px side margin (`--navigation-menu-padding-inline: 56px`, `--promo-banner-padding-inline: 56px`), so most content runs between x=56 and x=1224. 56px is also the most frequent padding (127 uses) and appears as `--footer-spacing` and `--navigation-height`. Recorded bands include: a 665px black hero, a 2049px white band, 56px `#0562d2` blue bars around a 501px promo, a 308px black "Find Your Ford" header with three columns, a 675px vehicle-card carousel, white technology and buying bands, an 852px black gallery band in two columns, a 348px signup band, and a 1148px `#f0f0f0` footer in two main columns.

The most frequent gap is 16px (146 uses), then 4px and 8px; paddings after 56px are 24px, 8px, 16px and 12px. Carousels show partial next cards at the right edge, and card grids run three across.

## Elevation & Depth

The page records no box-shadows on content; depth comes from photography, full-bleed black bands and translucent fills (`#0000000d` on cards, `#00000033` on pills over images, `#000000b3` and `#00000080` overlays). The only measured shadow is on the back-to-top button (`rgba(0, 0, 0, 0.08) 0px 6px 8px -1px, rgba(0, 0, 0, 0.06) 0px -1px 2px 0px`), a utility control rather than brand UI. Focus is drawn with a 1px solid `#0276b3` outline offset by 5px on carousel controls.

## Shapes

The most common radius is 8px (94 uses; `--nameplateBorderRadius: 8px`) on photos and vehicle cards. All buttons use 400px (22 uses), which renders as a full pill on a 40px button. Action cards use 16px; 20px and 24px appear on larger panels; 4px on small elements; circles (`50%`) on carousel arrows and icon buttons. Bands and bars are square.

## Components

- **Primary pill** ("Explore Awards"): `#066fef` fill, white FordFont 14px/700, 400px radius, `0px 8px` padding, 40px tall; hover `#044ea7`.
- **White pill** ("Learn More" on dark): white fill, black label, same geometry; hover fill `#e5e5e5`.
- **Outlined pill** ("View All Awards"): transparent, `#0562d2` label and 1px border.
- **Ghost pill** ("Go to F-150®" over images): 20% black fill, white label.
- **Navigation bar**: 56px tall, FordFont 16px/500; menu buttons turn navy `#00095b` on hover.
- **Category tabs**: text tabs (SUVs & Cars, Trucks & Vans, Electric & Hybrid, Performance); the tab-panel border token is `#e5e5e5`.
- **Vehicle card**: tall photo with 8px corners, year label, 40px/600 model name, "Starting at MSRP" price, small links.
- **Action card**: 5% black fill, 16px corners, 24px padding, icon above a 24px/32px title and 16px description.
- **Footer**: `#f0f0f0`, a search input, five link columns in `#5e5e5e`, social icons.

## Design System Architecture

No public Ford design-system documentation was found. Ford's media site (media.ford.com, which redirects to https://www.fromtheroad.ford.com/us/en/home) offers logo files but no brand guidelines, media kit or design-system link. The shipped page exposes 253 custom properties that work as a component-token layer rather than a primitive scale: colours named by component and role (`--button-background-color`, `--button-background-color-on-hover`, `--footer-main-link-color`, `--mega-menu-shop-all-color`, `--carouselActiveCrumbbackground`), spacing and sizing by component (`--navigation-height`, `--footer-spacing`, `--form-group-size: 40px`), layering (`--z-navigation-menu: 425`, `--z-popup: 700`) and a motion curve (`--motion-easing: cubic-bezier(0.4,0,0.2,1)`). Names mix camelCase and kebab-case, which shows tokens contributed by several teams. Rebuild by defining a small brand palette (black, white, `#333333`, `#066fef`, `#0562d2`) and mapping component tokens onto it.

## Do's and Don'ts

**Do**
- Alternate full-bleed black and white bands; use blue bars to frame promotions.
- Use FordFont 600 for every heading and 700 for 14px pill labels.
- Make every button a 40px pill (400px radius): blue on white, white on black, 20% black over photos.
- Round photos and vehicle cards at 8px; keep bands square.
- Lead sections with a 16px/600 grey eyebrow.

**Don't**
- Don't add drop shadows to cards.
- Don't use `#0000ee` (a browser-default link colour on the hidden skip link) as a brand blue.
- Don't use heavier than 600 for headlines.
- Don't treat the language selector, cookie banner or back-to-top button as brand components.

## Responsive Behavior

The extractor's mobile pass recorded: the hero headline shrinks from 54px/64px to 40px/48px; the measured h2 becomes a 16px/24px weight-600 eyebrow-style heading ("New Updates for 2027 F-150®"); body stays 16px/24px; the blue "Explore Awards" pill keeps its 40px height and 400px radius. One header link is visible (two on desktop) and the menu toggle remains visible. Mobile bands are single-column with content between x=16 and x=374, the blue bars shrink to 42px and 88px, and the page ends with a `#f0f0f0` footer band. Mobile font sizes by frequency are 16, 14, 11, 24, 36, 32, 20, 28, 40 and 12px.

The stylesheet's breakpoints are mostly `max-width 991px` (378 rules), `max-width 767px` (194), `min-width 992px` (66), `min-width 768px` (43) and `min-width 1440px` (28). Carousel and card-grid behaviour between breakpoints is not measured.

## Iteration Guide

1. Set FordFont for everything; headings 600, buttons 700.
2. Build the page as alternating `#000000` and `#ffffff` bands with 56px side margins.
3. Use `#066fef` filled pills for the primary action and `#0562d2` for links and outlines.
4. Round imagery at 8px and action cards at 16px; buttons always 400px.
5. Use translucent black fills instead of shadows for layering.
6. Measure the vehicle configurator and inventory pages before adding tokens for forms, filters or price tables.
