---
version: alpha
name: Ferrari
category: "Automotive"
description: "Ferrari's site is a cinematic black-and-white editorial grid: #181818 bar and footer, white #ffffff content bands, full-bleed photography with uppercase Title-Font headlines, a Ferrari red #da291c accent and FerrariSans / Body-Font at 12-16px."

colors:
  canvas: "#ffffff"
  ink: "#181818"
  primary: "#da291c"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-dark: "#303030"
  surface-light: "#eeeded"
  ink-grey: "#646464"
  ink-muted: "#8f8f8f"
  grey-100: "#ebebeb"
  grey-200: "#d2d2d2"
  red-deep: "#b01e0a"
  danger: "#f13a2c"
  success: "#03904a"
  info: "#4c98b9"
  yellow-hypersail: "#fff200"

typography:
  display:
    fontFamily: Title-Font
    fontSize: 28px
    fontWeight: 400
    lineHeight: 34.44px
    textTransform: uppercase
  title:
    fontFamily: Title-Font
    fontSize: 19px
    fontWeight: 400
    lineHeight: 26.6px
    textTransform: uppercase
  title-small:
    fontFamily: Title-Font
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.4px
    textTransform: uppercase
  menu-heading:
    fontFamily: FerrariSans
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
    letterSpacing: 0.08px
  body:
    fontFamily: FerrariSans
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
    letterSpacing: 0.195px
  body-media:
    fontFamily: Body-Font
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px
  label:
    fontFamily: Body-Font
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.24px
    letterSpacing: 1px
    textTransform: uppercase
  label-small:
    fontFamily: Body-Font
    fontSize: 11px
    fontWeight: 400
    lineHeight: 13.97px
    letterSpacing: 1px
    textTransform: uppercase
  caption:
    fontFamily: Body-Font
    fontSize: 9px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.195px

rounded:
  pill: 9999px

spacing:
  xxxs: 4px
  xxs: 8px
  xs: 16px
  s: 24px
  m: 32px
  l: 48px
  xl: 64px
  xxl: 96px
  super: 128px

components:
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    height: 40px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
  menu-item:
    textColor: "{colors.on-primary}"
    typography: "{typography.menu-heading}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.label-small}"
  band-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.title}"
  band-light:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink}"
    typography: "{typography.title-small}"
---

## Overview

Ferrari's website reads as a film title sequence rather than a catalog. The top of the page is a 40px-high near-black bar (`{colors.ink}` `#181818`) carrying the Prancing Horse mark, five uppercase links (Racing, Sports Cars, Collections, Experiences, About Us) and "Search". Directly beneath it, a full-bleed video slideshow fills the viewport: a centered small eyebrow ("Collections"), a very large uppercase headline ("FW 26 RUNWAY COLLECTION"), a "DISCOVER" label with a circular arrow button, slide dots with a red ring on the active one, and a pause button at the lower right. After the hero, white content bands (`{colors.canvas}`) alternate with edge-to-edge photographic tiles that carry white uppercase headlines.

The color system is strictly black, white and grey, with one accent: Ferrari red (`{colors.primary}` `#da291c`, the site's `--f-color-accent-100`, which is also its focus color). Red appears in small touches — the active slide indicator and, on the media-centre pages, red text and accents — rather than as filled buttons. Everything else is photography: dark studio portraits, race cars in motion, a yellow body-sketch, museum posters.

The official About Us page states the brand's positioning in words that match the design's tone: "Born of the spirit of racing, Ferrari epitomises the power of a lifelong passion and the beauty of limitless human achievement, creating timeless icons for a changing world", and "The Prancing Horse symbolises exclusivity, performance and quality all over the world."

**Key Characteristics:**
- Black/white/grey frame: `{colors.ink}` bar and footer, `{colors.canvas}` content bands, `{colors.surface-light}` (`#eeeded`) light tiles on the media centre.
- Uppercase everywhere: nav, labels, headlines and calls to action are set in capitals; headlines use the Title-Font face, labels use Body-Font with 1px tracking.
- Photography as the main surface: full-bleed hero video, 50/50 image tiles, news photo.
- Circular arrow buttons (`DISCOVER ›`, `READ MORE ›`) instead of filled rectangles; the only measured corner radius is 100% (circles).
- A single red accent (`{colors.primary}`), with a deeper `{colors.red-deep}` (`#b01e0a`) in the token scale and a racing yellow (`{colors.yellow-hypersail}` `#fff200`) reserved for the Hypersail project.
- Headline text is split into one element per word in the live DOM (the media-centre headlines are read as individual word elements), which is why the hero headline style is not recorded on the home page.

### Imagery and Voice

- **Hero.** A looping full-bleed video; the captured slide is a dark portrait for the FW 26 Runway Collection, and a second live visit showed a different slide (a grey car in motion among trees), so the hero rotates.
- **News row.** White band with a left-aligned uppercase headline ("FERRARI OPENS ITS GATES TO THE NEXT GENERATION"), a short paragraph in sentence case, "READ MORE" with a circular arrow, and a portrait photo on the right with side arrows and dot pagination ("VIEW ALL NEWS").
- **Tile grid.** Two-by-two full-bleed tiles — Ferrari Hypersail Replica Collection (studio portrait, blue), Greatest Hits (museum carousel of cars on a grey gradient), A Natural Beauty (teal car in motion), Sketch Body (yellow bodywork with pen sketch) — each with a small category label ("Collections", "Ferrari Museums", "Magazine"), a large uppercase title and "DISCOVER".
- **Voice.** Italian-luxury understatement: short nouns, no exclamation, category labels in sentence case above uppercase titles; press copy such as "Ferrari opens its gates to the next generation".
- **Information architecture.** Top-level sections are Racing, Sports Cars, Collections, Experiences and About Us; the megamenu lists, for example, Scuderia Ferrari HP, Hypercar, Hypersail and Esports under Racing; Range, Configure your Ferrari, MyFerrari, Pre-owned and Dealers under Sports Cars; Men, Women, Kids, Shoes, Eyewear under Collections.

### Capture Observations

- The capture is mostly white (`{colors.canvas}`, the largest area measured) and black (`{colors.surface-black}`, from the hero and tiles), with `{colors.ink}` for the bar and footer.
- Text over imagery is always white; text on the white band is `{colors.ink}`.
- The hero's headline is much larger than any measured DOM text style on the page; its size is therefore described, not tokenized.

### Mega Menu (from the page text)

| Column | Entries |
|---|---|
| Racing | Scuderia Ferrari HP (SF-26, Charles Leclerc, Lewis Hamilton), Hypercar, Competizioni GT, Hypersail, Esports, Scuderia Ferrari Driver Academy, Scuderia Ferrari Club |
| Sports Cars | Range, Configure your Ferrari, MyFerrari, Pre-owned, Dealers, Recall information, TechInfo |
| Collections | Men, Women, Kids, Shoes, Eyewear, Collectibles, Scuderia Ferrari Selection |
| Experiences | Corse Clienti, Ferrari Esports Series, Ristorante Cavallino, Ferrari Museums, Ferrari World Abu Dhabi, Ferrari Land Barcelona |
| About Us | Corporate, Sustainability, Media Centre, News, Magazine, History, Join us |

Each column heading uses `{typography.menu-heading}` in white; entries follow in the smaller Body-Font sizes.

### Media Centre Pattern

The media centre reuses the same palette on three bands: a `{colors.ink}` hero with a white uppercase `{typography.title}` headline and a dated press paragraph in `{typography.body-media}`; white sections with `{colors.ink}` `{typography.display}` category headers (Scuderia Ferrari, Hypercar, Sports Cars, Lifestyle, Corporate) and a "VIEW ALL" link; and `{colors.surface-light}` list areas of dated items (for example "14 AUG — Personalization, one-off — Ferrari CZ26") with relative times ("13 HOURS", "4 DAYS"). Dates use a short day-month format, categories are in capitals, and headlines run in capitals across several lines.

### States and Behavior

| Element | Default | Notes |
|---|---|---|
| Hero slide | Video background, centered text | Slide dots and a pause button; the active dot is ringed in `{colors.primary}` |
| Nav link | White 12px uppercase | Hover state not recorded |
| Circle arrow | Outlined circle with a chevron | Hover state not recorded |
| Cookie layer | Dark panel with white buttons | A separate consent overlay on first load |

## Colors

> **Source pages:** home (`/en-TH`) and the media centre (`/en-EN/media-centre`) measured with the extractor; the site's own `--f-color-*` root variables supply names and the extended scales.

### Brand & Accent
- **Primary / Ferrari Red** (`{colors.primary}` — `#da291c`): `--f-color-accent-100` and `--f-color-focus`; measured as 459 characters of text on the media centre page.
- **Red Deep** (`{colors.red-deep}` — `#b01e0a`): `--f-color-global-red-700`, also `--f-color-accent-90`; the darker step of the red ramp.
- **Yellow Hypersail** (`{colors.yellow-hypersail}` — `#fff200`): `--f-color-yellow-hypersail`; reserved for the Hypersail project.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Text over photography and on dark surfaces.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): Page background and white content bands (`--f-color-background-0`).
- **Ink / Dark** (`{colors.ink}` — `#181818`): The 40px header bar, footer and dark bands (`--f-color-ui-100`, `--f-color-global-grey-900`).
- **Surface Black** (`{colors.surface-black}` — `#000000`): Hero and tile backing.
- **Surface Dark** (`{colors.surface-dark}` — `#303030`): Secondary dark surface (`--f-color-ui-90`).
- **Surface Light** (`{colors.surface-light}` — `#eeeded`): Light grey areas on the media centre page.
- **Grey 100** (`{colors.grey-100}` — `#ebebeb`) and **Grey 200** (`{colors.grey-200}` — `#d2d2d2`): hairlines and light fills in the global grey scale.

### Text
- **Ink** (`{colors.ink}` — `#181818`): Text on white.
- **Ink Grey** (`{colors.ink-grey}` — `#646464`): Secondary text on the media centre.
- **Ink Muted** (`{colors.ink-muted}` — `#8f8f8f`): Muted text on dark surfaces (`--f-color-ui-50`; 518 characters measured on the home page).

### Semantic (from root variables, not used on the captured home page)
- **Danger** (`{colors.danger}` — `#f13a2c`), **Success** (`{colors.success}` — `#03904a`), **Info** (`{colors.info}` — `#4c98b9`); the site also publishes `--f-color-accessible-alert` `#f6e500`.
- Gradients: `--f-color-gradient-red` (`linear-gradient(180deg,#a00c01 0%,#da291c 64%)`), `--f-color-gradient-dark-grey`, and light/dark shadow gradients used over photography.
- Overlays: `--f-color-overlay` `rgba(0,0,0,.3)` and `--f-color-overlay-darker` `hsla(0,0%,7%,.8)`.

## Typography

### Font Family
Ferrari ships its own faces, declared on the page as `@font-face` families:
- **Title-Font** — uppercase display face for headlines (measured on the media centre page).
- **Body-Font** and **Body-Font-Medium** — UI labels, nav and body copy; labels are set uppercase with 1px tracking.
- **FerrariSans** (weights 400 and 500) — the home page's mega-menu headings and body paragraph; `--f-ferrari-font` is `"FerrariSans"`.
All are proprietary; none is available as an open font.

### Hierarchy

| Token | Font | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `{typography.display}` | Title-Font | 28px | 400 | 34.44px | Section titles (uppercase) |
| `{typography.title}` | Title-Font | 19px | 400 | 26.6px | Page headline on the media centre |
| `{typography.title-small}` | Title-Font | 18px | 400 | 23.4px | Card and list headlines |
| `{typography.menu-heading}` | FerrariSans | 16px | 500 | 22.4px | Mega-menu headings (Racing, Sports Cars, Collections) |
| `{typography.body}` | FerrariSans | 13px | 400 | 19.5px | Paragraphs, 0.195px tracking |
| `{typography.body-media}` | Body-Font | 13px | 400 | 20.8px | Press-release body |
| `{typography.label}` | Body-Font | 12px | 400 | 15.24px | Nav and footer labels, uppercase, 1px tracking |
| `{typography.label-small}` | Body-Font | 11px | 400 | 13.97px | Footer link rows, uppercase, 1px tracking |
| `{typography.caption}` | Body-Font | 9px | 400 | 16px | Smallest menu links |

### Principles
- **Two voices.** Title-Font for narrative headlines and Body-Font for structural labels; FerrariSans for menus and paragraph text.
- **Uppercase as default.** Navigation, headlines and calls to action are uppercase; running text is sentence case.
- **Tracking by role.** 1px on small uppercase labels, about 0.2px on body, normal on titles.
- **Light weights only.** Only 400 and 500 are measured; there are no bold weights in the design (the cookie banner shown on first load uses weights 600 and 700 in its buttons and links; it is a separate overlay).

### Note on Font Substitutes
Title-Font and FerrariSans have no public substitutes. For a stand-in use a wide grotesque in uppercase for headlines (for example Archivo Expanded or Unbounded) and a neutral sans for labels, keeping the sizes and tracking above.

## Layout

- **Header.** A 40px bar in `{colors.ink}` with the shield mark at left, links starting near x=90 and "Search" at the far right.
- **Hero.** Full viewport width, about the full viewport height; content centered both ways.
- **News band.** Two columns on white: text at left, a narrow portrait photo at right, side arrows at the outer edges.
- **Tiles.** Edge-to-edge, two columns by N rows, each tile about half the viewport wide; titles centered.
- **Spacing scale (official tokens).** `--f-space-xxxs` 4px, `xxs` 8px, `xs` 16px, `s` 24px, `m` 32px, `l` 48px, `xl` 64px, `xxl` 96px, `super` 128px — mirrored in `{spacing.xxxs}` to `{spacing.super}`.
- **Page structure.** The page is an `f-page-wrapper` custom element containing `main`, with Swiper carousels (`swiper-container`, `swiper-slide`) for hero and news.
- **Footer.** Social lists (Facebook, Instagram, LinkedIn, TikTok, Twitch, X, YouTube) in 11px uppercase labels, corporate registration text, and a legal row (Legal, Privacy Policy, Cookie Policy, Preference Center, Accessibility…).

## Elevation & Depth

Depth comes from photography and gradients, not shadows. The site publishes `--f-shadow-small` (`0px 4px 8px 0px rgba(0,0,0,.1)`) but no larger shadow steps. Over images, `--f-color-gradient-shadow-light` (`linear-gradient(180deg, rgba(24,24,24,0), rgba(24,24,24,.85))`) is the site's published gradient for darkening the lower part of imagery under white text (the "Greatest Hits" tile in the capture darkens toward the bottom), and `--f-color-overlay` (`rgba(0,0,0,.3)`) is the published overlay color.

## Shapes

The design is rectilinear: header, bands and tiles have square corners. The only measured radius is `100%`, on circular controls (the arrow buttons and the slide indicators). The site publishes `--f-radius-full` as `{rounded.pill}` (9999px).

## Components

### Navigation
- **nav** — 40px bar, `{colors.ink}` fill, white `{typography.label}` links, uppercase, 1px tracking; "Search" at the right.
- **menu-item** — in the mega menu, columns headed by `{typography.menu-heading}` (Racing, Sports Cars, Collections), each followed by lists at `{typography.caption}`.

### Calls to action
- **Circle arrow** — "DISCOVER ›" and "READ MORE ›": an uppercase label followed by a circular outlined button with a chevron. White on photography, `{colors.ink}` on white bands. No filled rectangular button exists on the home page; the sizes of these controls were not recorded.
- **Slide indicators** — small dots; the active one is a red ring (`{colors.primary}`).
- **Pause control** — a circular outlined button at the lower right of the hero.

### Bands and Tiles
- **band-dark** — `{colors.ink}` background, white text, `{typography.title}`; used on the media centre for category headers (Scuderia Ferrari, Hypercar).
- **band-light** — `{colors.surface-light}` background with `{colors.ink}` `{typography.title-small}` text.
- **Photo tile** — full-bleed image, small category label in sentence case, uppercase title, "DISCOVER".

### Footer
- **footer** — `{colors.ink}` background, white `{typography.label-small}` text; link lists in uppercase.

### Accessibility Notes

- White text over photography relies on darkening (video overlay and the lower gradient); keep any new text-on-image block under a gradient.
- `{colors.ink}` on `{colors.canvas}` is a very high contrast pair; `{colors.ink-muted}` (`#8f8f8f`) on white is low and is only measured on dark surfaces.
- The page provides a screen-reader mode, an accessibility guide link and an accessibility settings control, so new templates should keep those entry points.
- Carousels carry a visible pause control; keep it when adding autoplay.

## Design System Architecture

No public Ferrari design system, token package or brand-guideline page was found for the website; searches returned third-party aggregator pages, which were not used. The de-facto system is visible in the shipped site:

- **Token variables.** The root exposes a `--f-*` namespace: global scales (`--f-color-global-grey-050` … `-950`, red 050–900, blue, green, orange, yellow), semantic aliases (`--f-color-ui-0` … `-100`, `--f-color-background-0`, `--f-color-background-10`, `--f-color-accent-80/90/100`, `--f-color-accessible-*`, `--f-color-focus`), gradients, overlays, `--f-space-*`, `--f-radius-full`, `--f-shadow-small`, and `--f-ferrari-font`.
- **Components.** Custom elements (`f-page-wrapper`) and Swiper web components (`swiper-container`, `swiper-slide`).
- **Brand statement.** The official [About Us](https://www.ferrari.com/en-EN/corporate/about-us) page gives the brand positioning quoted above.
- **Media centre.** [Media centre](https://www.ferrari.com/en-EN/media-centre) pages use Title-Font, Body-Font and Body-Font-Medium on `#181818`, white and `#eeeded` bands.
- **Site map.** The home page links to corporate, investor, governance and press-release sections, all under `ferrari.com/en-EN/`.

## Do's and Don'ts

**Do**
- Use `{colors.ink}` and `{colors.canvas}` as the frame and let photography carry the page.
- Set navigation, labels and headlines in uppercase; set running text in sentence case.
- Use `{colors.primary}` as a small accent (active indicator, emphasis text), never as a large fill.
- Use circular arrow buttons for calls to action and keep them light on dark imagery.
- Keep corners square on bands and tiles.
- Darken the lower part of image tiles (the published shadow gradient) so white text stays legible.

**Don't**
- Do not use bold weights; the measured design uses 400 and 500 only.
- Do not add drop shadows beyond the single small token.
- Do not use red or yellow as page backgrounds; yellow (`{colors.yellow-hypersail}`) is reserved for the Hypersail project.
- Do not substitute rounded rectangular buttons for the circular arrow controls.
- Do not set headlines in sentence case.

## Responsive Behavior

- **Mobile.** The extractor records a mobile h1 of 16px (the menu heading); the page's behavior at narrow widths was not otherwise measured.
- **Breakpoints.** None were recorded.
- **Hero.** Because the hero is a full-viewport video slideshow, its content scales with the viewport.
- **Tiles.** In the capture they sit two across; the stacking behavior on mobile was not measured.
- **Accessibility.** The page begins with a screen-reader mode link (Option+1 to enter, Option+0 to cancel), an accessibility guide link and an "Accessibility settings" control in the footer.

## Iteration Guide

1. Build the frame: a 40px `{colors.ink}` bar, white bands and a black or photographic hero.
2. Set labels and nav in `{typography.label}` (12px, uppercase, 1px tracking) and headlines in Title-Font uppercase.
3. Use photography for every large surface and add a bottom gradient for text.
4. Make each call to action a label plus a circular arrow button.
5. Use `{colors.primary}` only for small marks (active dots, emphasis) and keep neutrals for the rest.
6. Keep corners square and shadows absent; use the 4-128px spacing scale.
7. Test every headline in uppercase at several lengths; the real site wraps long titles over two or three lines.
