---
version: alpha
name: Cat Motors Motorbike & Scooter Rentals
category: "Thai Brands"
description: "Cat Motors (catmotors.net), Chiang Mai motorbike rental: #f7fafc canvas with #edf2f7 panels, slate #4a5568 / #2d3748 / #1a202c text, Source Sans Pro 20px/32px body with 700 headlines, a full-width #377e99 teal CTA bar, 3px card radius."
colors:
  canvas: "#f7fafc"
  page-largest: "#edf2f7"
  ink: "#4a5568"
  ink-strong: "#2d3748"
  ink-heading: "#1a202c"
  ink-alt: "#1f2124"
  ink-muted: "#52606d"
  on-dark: "#ffffff"
  primary: "#377e99"
  on-primary: "#ffffff"
  primary-hover: "#38758c"
  link-hover: "#3182ce"
  notice-info: "#abebc6"
  notice-warning: "#ffaaaa"
  surface-gray: "#e9e9e9"
  hairline: "#d5d8dc"
  photo-frame: "#ffd700"
typography:
  display:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
    textTransform: capitalize
  display-mobile:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 22px
    textTransform: capitalize
  heading:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 34px
    fontWeight: 700
    lineHeight: 34px
  heading-mobile:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 24px
  subheading:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 28px
    textTransform: capitalize
  body:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  link:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 32px
  nav:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: 2px
    textTransform: capitalize
  cta-mobile:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
  xs: 3px
  sm: 5px
  md: 12px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 12px
  s4: 15px
  s5: 20px
  s6: 24px
  s7: 30px
components:
  button-cta-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.cta-mobile}"
    rounded: "{rounded.none}"
    height: 60px
    borderColor: "{colors.on-primary}"
  button-cta-bar-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    typography: "{typography.link}"
  nav:
    textColor: "{colors.on-dark}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.xs}"
    padding: 10px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
---

## Overview

Cat Motors Motorbike & Scooter Rentals (catmotors.net, document language en-US, title "Motorbike & Scooter Rental Chiang Mai | No Passport Deposit") is a motorbike and scooter rental business in Chiang Mai, and the home page reads like a personal letter (the intro panel is signed by a co-founder) rather than a corporate brochure. The measured page is 1280px wide and 13129px tall. The first screen is a full-width photograph of a winding mountain road with riders, the white 40px headline "Motorbike & Scooter Rental In Chiang Mai | Trusted Since 2010" across its lower edge, a logo (a black cat in a yellow circular badge beside the white words "Cat Motors") at the top left, and a transparent navigation row: Home, Terms, Routes, Tips with a caret, Contact, plus three white square icon buttons for Facebook, Tripadvisor and Google at the top right.

Below the hero, the page is a calm, pale-gray reading surface (`#f7fafc`) holding a rounded `#edf2f7` panel of introductory copy signed "Siri, Co-founder of Cat Motors", a portrait photograph in a yellow `#ffd700` frame, and a Tripadvisor "Travelers' Choice 2026" badge. A red-tinted notice ("PS: Riding in Thailand is not for complete beginners...") and a green-tinted rates note use flat colored blocks instead of icons. Then comes "Our Rental Fleet", "Automatic Scooter Rentals" and a row of three fleet cards (Yamaha Fino 125i, Yamaha GT 125i, Honda Click 125i) with a photo, a bold model name and a gray specification line.

The voice is direct and practical: "No passport deposit. Medical insurance included. Flexible daily, weekly, and monthly rentals." Calls to action are plain ("Rent Your Bike & Go"). The visual language comes from a content-management theme and is deliberately modest: light slate neutrals, one teal action color, bold sans headlines and real photography.

## Colors

The theme is a gray-blue neutral ramp plus one teal. Measured text colors by character count are `#4a5568` (4826), `#2d3748` (4169), `#1a202c` (688), `#1f2124` (473), `#52606d` (446), `#ffffff` (143), `#0000ee` (99) and `#3182ce` (6). Measured backgrounds by area are `#edf2f7` (8961), `#f7fafc` (1269), `#abebc6` (394), `#e9e9e9` (391), `#ffaaaa` (161), `#ffffff` (141), `#377e99` (77), then `#cad7e9` and `#46468a` (6 each).

- **Canvas `#f7fafc`** (declared `--global-palette8`) and **panel `#edf2f7`** (`--global-palette7`) are the surfaces. The page-largest area is the `#edf2f7` panel and card color.
- **Ink `#4a5568`** (`--global-palette5`) is the most-read text; **`#2d3748`** (`--global-palette4`) is the paragraph role color; **`#1a202c`** (`--global-palette3`) sets headings, card titles and the footer text. `#52606d` and `#1f2124` are additional measured text colors.
- **Primary `#377e99`** is the measured fill of the "Rent Your Bike & Go" bar (desktop hover record and the 390px mobile CTA). On hover it measures `rgb(56, 117, 140)`, kept as `#38758c`. The extractor reported no desktop CTA and generated `#0000ee` as primary; that value is the browser-default link blue and is not a brand color, so it is dropped as a token. The body links ("route guides", "rental terms", "riding advice", "contact us") measure `#0000ee` in the capture, and the theme variable `--global-palette-highlight` holds the same value; on hover they measure `#3182ce` (`--global-palette1`).
- **Notices:** `#abebc6` (green rates note) and `#ffaaaa` (red riding warning) are flat color blocks. `#e9e9e9` is a measured gray background.
- **Hairline `#d5d8dc`** is the most frequent border color (17 occurrences). **`#ffd700`** is the single measured border on the portrait photo frame.

The theme also declares a wider palette that is not all visible in the capture: `--global-palette2 #2B6CB0`, `--global-palette11 #13612e`, `--global-palette12 #1159af`, `--global-palette13 #b82105`, `--global-palette14 #f7630c`, `--global-palette15 #f5a524`, `--global-palette6 #718096`, and grays `--global-gray-400 #CBD5E0` and `--global-gray-500 #A0AEC0`. The purple chat bubble in the capture is the chat widget the page lists (WhatsApp, Messenger, email) and is not part of the palette.

## Typography

A single family, **Source Sans Pro**, carries all 10850 measured characters. Loaded faces are 400 normal, 400 italic and 700 normal; Poppins 600 and an icon font (`eicons-local`) are also loaded but no measured text uses them. The theme sets `--global-body-font-family: 'Source Sans Pro', sans-serif`, and headings inherit it (`--global-heading-font-family: inherit`).

- **Display (h1):** 40px on 40px, weight 700, `text-transform: capitalize`, white over the hero photo. At 390px it measures 22px on 22px.
- **Heading (h2, "Our Rental Fleet"):** 34px on 34px, 700, `#1a202c`. At 390px it measures 24px on 24px.
- **Subheading (h3, "Automatic Scooter Rentals"):** 28px on 28px, 700, capitalized.
- **Body:** 20px on 32px, weight 400, `#2d3748`.
- **Link:** 20px on 32px, weight 700.
- **Navigation:** 20px on 28px, 700, letter-spacing 2px, capitalized, white (this 20px/2px pair is the only letter-spacing measured, on 26 characters).
- **Mobile CTA:** 24px on 24px, weight 400.

Measured sizes by character count: 20px (9796), 22px (473), 28px (174), 18px (148), 34px (121), 40px (80), 30px (52), 75px (6). Weights: 400 (9132), 700 (1675), 900 (37), 200 (6). The theme also declares fluid size variables such as `--global-font-size-xxlarge: clamp(2.25rem, 1.728rem + 1.63vw, 3rem)` and `--global-font-size-medium: clamp(1.1rem, 0.995rem + 0.326vw, 1.25rem)`.

Font substitutes: if Source Sans Pro is unavailable, use a neutral humanist sans at 20px/32px with a bold weight for headings. Poppins 600 appears in the loaded fonts but no measured text uses it.

## Layout

The theme declares a content width of 1290px (`--global-content-width`), a narrow width of 842px (`--global-content-narrow-width`), a wide width of 1290px plus 230px, an edge padding of 1.5rem and spacing steps from `--global-xs-spacing: 1em` to `--global-xxl-spacing: 5rem`. On the 1280px capture the introduction is a two-column row: a rounded `#edf2f7` text panel at left and a portrait photograph with its badge at right. Notices span the content width. The fleet is a three-column grid of 350px-wide cards.

The header is 100px tall and sits transparently over the hero photograph; nav items are centered, social icon buttons are right-aligned and the logo is left-aligned. The measured gaps are 20px (78 occurrences), 10px (55), 30px (12) and 5px (12). Measured paddings are 10px (138), 20px (33), 30px (12), 15px (7), 24px (3), 5px, 12px and two values of about 237px (237.328px and 237.312px).

The full-width teal "Rent Your Bike & Go" bar is 60px tall on desktop and spans the whole viewport width; its link target is /contact/, and the opened page lists it in the footer area.

## Elevation & Depth

The design is almost flat. The only box shadow measured in the visible element set is `rgba(0, 0, 0, 0.15) 4px 4px 10px 0px` (1 occurrence). The WordPress preset shadows are declared as variables: `--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2)`, `--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4)`, `--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2)`, `--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0)` and an outlined variant; the cards in the capture do not show them.

Depth comes from tonal blocks: `#edf2f7` cards and panels on the `#f7fafc` canvas, saturated notice blocks, the full-bleed hero photograph, and the 1px `#d5d8dc` borders. Text over the hero photograph is white; no overlay color was measured.

## Shapes

Corners are small. Measured radii by frequency: 3px (20 occurrences), 5px (1), 12px (1) and 50% (1); the CSS corpus lists 3px 225 times and 0px 81 times. Cards use 3px with 10px padding. The CTA bar reports `0px` radius and a white border at rest. The social icon buttons in the header are white squares with slightly softened corners, and the logo sits in a circular yellow badge. Photographs are rectangles; the portrait photograph carries a thick `#ffd700` frame.

The tokens keep `none: 0px` (CTA), `xs: 3px` (cards), `sm: 5px`, `md: 12px` and `pill: 9999px`. The single measured 50% radius is not tied to a named element in the record; the capture shows a circular logo badge and a circular chat bubble.

## Components

**CTA bar ("Rent Your Bike & Go").** Fill `#377e99`, white text, 1px white border, 0px radius, 60px tall on desktop; hover fill `#38758c`. At 390px the bar is 390px wide and 44px tall with padding 10px and text at 24px/24px weight 400.

**Inline links.** Bold (700) 20px text; color `#0000ee` at rest and `#3182ce` on hover, with the border color following the text color in the hover record.

**Header navigation.** White 700 text, 20px, letter-spacing 2px, capitalized; the active item (Home) carries an underline in the capture; Tips has a caret. Three white square icon buttons (Facebook, Tripadvisor, Google) sit at the right.

**Fleet card.** `#edf2f7` background, `#1a202c` text, 3px radius, 10px padding, 350px wide and 673px tall in the measured cards; a photo on top, the model name in bold 20px and a specification line (for example "125cc, 4th gen, street scooter, seat 745mm, ground clearance 135mm") in gray.

**Notice blocks.** A red-tinted block (`#ffaaaa`) with italic text for the riding warning and a green-tinted block (`#abebc6`) for rates information, both full content width.

**Footer.** `#f7fafc` background, `#1a202c` text at 18px/28.8px, 219px tall, beginning "Copyright © 2026 Cat Motors Motorbike & Scooter Rentals".

## Design System Architecture

No public design system, brand guidelines or press kit is published: the home page (https://catmotors.net/) links only to Terms, Routes, Tips (Local Attractions, Safety Advice, Traffic Rules, Insurance), Contact, Facebook, Tripadvisor, Google reviews and a chat widget, and none of its content refers to brand guidelines or brand colors. The de-facto system is a content-management theme's CSS custom properties, recorded on the root.

Color is a numbered palette (`--global-palette1` through `--global-palette15`, with `palette7` `#EDF2F7` and `palette8` `#F7FAFC` as the surfaces) and button variables (`--global-palette-btn-bg: #6796be`, `--global-palette-btn-bg-hover: #4682b4`, `--global-palette-btn: #ffffff`, `--global-palette-btn-hover: #dedede`, `--global-palette-btn-sec-bg`). The visible teal CTA (`#377e99`) does not match any declared button variable. Layout and type use `--global-*` variables (content widths, spacing steps `--global-xs-spacing` to `--global-xxl-spacing`, fluid `--global-font-size-*` clamps) and WordPress block presets (`--wp--preset--*`). The CSS corpus also contains an Elementor-prefixed variable (`--e-global-typography-text-font-family`) and the `eicons` icon font. The palette values `#EDF2F7`, `#F7FAFC`, `#4A5568`, `#2D3748`, `#1A202C`, `#CBD5E0` and `#A0AEC0` form a consistent cool-gray ramp.

## Do's and Don'ts

**Do**
- Keep a pale gray canvas (`#f7fafc`) with `#edf2f7` panels and slate text (`#4a5568`, `#2d3748`, `#1a202c`).
- Use a single teal action color, `#377e99`, for the primary call to action, with square corners.
- Set everything in Source Sans Pro; use weight 700 for headings, nav and links.
- Use real photography of roads, riders and the actual fleet, and flat tinted blocks for notices.
- Write short, practical copy in the owner's voice ("No passport deposit.").

**Don't**
- Don't use the browser-default `#0000ee` as a brand color; it is only the link rest color on the page.
- Don't add heavy shadows to cards; the visible cards are flat with 3px corners.
- Don't style the chat bubble, the Tripadvisor badge or the social icon buttons as brand components.
- Don't use the extra palette entries (`#f7630c`, `#b82105`, `#f5a524`) as primary colors; they are declared but not measured on visible components.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: the h1 is 22px on 22px, 340px wide and 44px tall (desktop 40px on 40px, 1120px wide, 40px tall); the h2 is 24px on 24px (desktop 34px); body text stays 20px on 32px, in a 300px-wide column that is 512px tall (desktop 628px wide and 224px tall); the "Rent Your Bike & Go" CTA is measured as the primary CTA at 390px wide and 44px tall with 24px text; the header is 100px tall and 390px wide with an empty text recording, so the mobile navigation items were not measured.

Measured sizes by character count at 390px are 20px (9785), 22px (708), 18px (148), 24px (140), 30px (37) and 50px (6). Breakpoint widths, the number of columns in the fleet grid and the behavior of the intro panel at 390px were not measured.

## Iteration Guide

1. Start from canvas `#f7fafc`, panels `#edf2f7`, ink `#4a5568`, strong ink `#2d3748`, heading ink `#1a202c`, primary `#377e99`.
2. Set Source Sans Pro: 40px/40px 700 capitalized for the hero headline (22px on mobile), 34px/34px for section headings (24px on mobile), 20px/32px 400 for body.
3. Build the CTA as a full-width bar: `#377e99`, white text, 1px white border, 60px tall, 0px radius, hover `#38758c`.
4. Build cards as `#edf2f7` blocks with 3px radius and 10px padding holding a photo, a bold model name and a gray spec line.
5. Use `#abebc6` and `#ffaaaa` blocks for informational and warning notices, with italic text for the warning.
6. Place the logo top left over a full-bleed photograph, a transparent 100px header, and white 700 nav items with 2px letter-spacing.
