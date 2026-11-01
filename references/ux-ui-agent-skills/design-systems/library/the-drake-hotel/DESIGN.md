---
version: alpha
name: "The Drake Hotel"
category: "Food & Beverage"
description: "Toronto boutique hotel and arts venue: Sequel Sans headlines with negative tracking, Maison Mono uppercase copy at 10px, charcoal #222223 canvas, white buttons with 2px radius, boxed outlined headings, wine #672b3c and cream #f0eeeb panels."
colors:
  canvas: "#222223"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#222223"
  surface-3: "#672b3c"
  ink-3: "#b5b7d8"
  ink-4: "#20a556"
  ink-5: "#ffffff66"
typography:
  display:
    fontFamily: "\"Sequel Sans Medium Disp\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 60.736px
    fontWeight: 415
    lineHeight: 60.736px
    letterSpacing: "-1.82208px"
  display-mobile:
    fontFamily: "\"Sequel Sans Medium Disp\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 42.313px
    fontWeight: 415
    lineHeight: 42.313px
    letterSpacing: "-1.26939px"
  heading:
    fontFamily: "\"Sequel Sans Medium Disp\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 28.544px
    fontWeight: 415
    lineHeight: 31.3984px
    letterSpacing: "-0.28544px"
    textTransform: capitalize
  body:
    fontFamily: "\"Maison Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 13px
    textTransform: uppercase
  button:
    fontFamily: "\"Maison Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    textTransform: uppercase
  link:
    fontFamily: "\"Sequel Sans Medium Disp\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 5.35px
  lg: 6.69px
  xl: 11.39px
spacing:
  s1: 1px
  s2: 1.4px
  s3: 3.57px
  s4: 4px
  s5: 4.46px
  s6: 7.59px
  s7: 8px
  s8: 12px
  s9: 12.25px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 16px
    height: 36px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 4px
    height: 36px
  footer:
    textColor: "{colors.canvas}"
    padding: 0px 16px 16px
---

## Overview

The Drake Hotel (thedrake.ca) is a Toronto boutique hotel and cultural venue group with additional properties in Prince Edward County; the document title is "The Drake | Boutique Hotels in Toronto + Prince Edward County". The home page opens on a full-bleed, slightly blurred lifestyle photograph (guests at a window facing Lake Ontario) with a boxed white label "Meet The Drake", a pick-a-location selector, a framed navigation (About, Our Hotels, Food + Drink, Art + Culture, Blog, Gift Cards, Careers, Contact Us) and "Menu" and "Book" buttons at top right. A three-item property strip (01 The Drake Hotel, Toronto; 02 Drake Devonshire, Prince Edward County; 03 Drake Motor Inn, Prince Edward County) with thumbnails and arrow controls sits on the hero, followed by a tall interior photograph of a bar and lounge, then a light "Explore Our Locations" section with a green hand-drawn squiggle underline, a Toronto block with a building photo and uppercase mono copy.

The identity is editorial-hospitality with an art-gallery edge: each heading is a lightly outlined, boxed label like a museum wall card, labels and navigation are set in a monospace face in uppercase, and imagery is warm, moody interior and people photography. Surfaces alternate between a charcoal #222223, white and a warm cream #f0eeeb, with a wine-red (#672b3c) section color. The effect is playful but refined.

## Colors

The body background is charcoal #222223 and its text is white (#ffffff). Primary actions are white buttons with charcoal text (#222223), so primary and ink are both #ffffff in the generated tokens and on-primary is #222223. The brand's named palette lives in the root variables: --color-wine #672b3c (the deep red used for large section fills), --color-cream #f0eeeb, --color-lavender #b5b7d8, --color-sapphire #3e64cf, --color-coral #e25856 and --color-pistachio #d5e7b5. The measured background areas on the page are #222223, #ffffff, #672b3c, #f0eeeb and #b5b7d8. A green, #20a556, is measured as a text/graphic color (the underline squiggle). A translucent white #ffffff66 appears as a muted text color on dark.

The WordPress preset variables (vivid purple, pale pink, luminous orange, vivid cyan blue) are platform defaults and are not brand colors. A cookie-consent component adds its own --cc-* variables (overlay rgba(0,0,0,.65)) that are separate from the brand.

- Dark: #222223 with #ffffff text.
- Light panels: #ffffff and cream #f0eeeb with #222223 text.
- Feature color: wine #672b3c; accents lavender #b5b7d8 and green #20a556.

## Typography

Two families. The display and link face is Sequel Sans (loaded as Sequel Sans Medium Disp at weight 500, Medium Body at 500 and Book Body at 400), with ui-sans-serif and system fallbacks. The label, body and button face is Maison Mono at 400 with the generic monospace stack as fallback.

Measured sizes: the h1 ("Meet") is 60.736px at weight 415 (the variable setting) with a 60.736px line height and -1.82208px letter spacing; on mobile 42.313px with -1.26939px letter spacing. The h2 ("Wine Tours In The County") is 28.544px, weight 415, line height 31.3984px, letter spacing -0.28544px, capitalised; mobile 26.052px with a 28.6572px line height. Body paragraphs are Maison Mono 10px, weight 400, line height 13px, uppercase; the page's base text is 12px with 15.6px line height. Buttons are Maison Mono 14px (12px on mobile), weight 400, line height 18.2px, uppercase. Links and input text are Sequel Sans at 16px with a 24px line height. The sharp contrast between large, tight, mixed-case grotesque headlines and tiny uppercase mono copy is a defining trait.

## Layout

The layout is full-bleed photography with a framed navigation overlaid at the top: boxed cells in white with 1px charcoal rules, arranged like a table, with the logo cell at left. Below the hero come full-width image panels (a very tall photograph with one rounded top-right corner), then a three-column composition for locations: the large heading at left, a vertical rule, a city label in a boxed chip, a photograph and a paragraph. The grid gutter is 16px (--grid-gutter). The nav row height variable is 44px and the standard button height variable is 50px. Spacing values measured: 1px, 1.4px, 3.57px, 4px, 4.46px, 7.59px, 8px, 12px, 12.25px and 14px.

## Elevation & Depth

No box shadows were measured on the page. Hierarchy is by boxing (1px charcoal outlines around headings and nav cells), by full-bleed imagery and by alternating light and dark bands. The site's WordPress shadow presets (for example "crisp" 6px 6px 0px rgba(0, 0, 0, 1)) exist as variables but no measured element uses them.

## Shapes

Measured radii: 2px (buttons), 4px, 5.352px (the most frequent, used on boxed heading labels), 6.69px and 11.388px (image panels and feature cards). The primary button uses 2px; boxed heading labels use 5.35px; large image blocks use an 11.39px corner. Corners are modest and consistent, which keeps the boxed-label motif crisp.

## Components

- Primary button: #ffffff fill, #222223 text, Maison Mono 14px uppercase, 36px high, padding 4px 16px, 2px radius (the SUBSCRIBE button).
- Boxed heading label: heading text in a white box with a 1px #222223 border and 7.592px padding.
- Navigation: boxed white cells with 1px charcoal borders, Maison Mono uppercase labels, "Menu" and "Book" buttons at right with icon.
- Location picker: boxed "Pick a location" cell with a map-pin icon.
- Property strip item: small thumbnail, number, uppercase location name; arrow buttons in white circles.
- Text input: Sequel Sans 16px, 36px high, padding 0px 4px, transparent background.
- Footer: white text, padding 0px 16px 16px.

## Design System Architecture

No public design system or brand guideline was found on the home page; the only brand-like link in the markup is the WordPress RSD endpoint. The de-facto system is a Tailwind-style utility CSS on WordPress with named color tokens (--color-wine, --color-cream, --color-lavender, --color-sapphire, --color-coral, --color-pistachio), underline-width tokens for hand-drawn underlines (--underline-width-underline-1 4.6875em, -2 2.57813em, -4 2.75em), form tokens (--input-padding-top, --input-border-color, --input-background-color), size tokens (--_button-height 50px, --_button-nav-height 44px, --grid-gutter 16px) and fluid type via clamp(). The brand colors are tokens, while the --wp--preset--* values are platform defaults.

The capture's art direction is candid rather than polished: the hero photograph is deliberately motion-blurred with people mid-conversation, and the second image is a styled interior with brick, brass shelving, orange-red bar fronts, mustard stools and olive leather armchairs, shot with natural contrast. The copy voice is calm and local, with sentences set in tiny uppercase mono ("Set along the picturesque shores of Lake Ontario...") that invite reading closely. Section titles use hand-drawn green squiggles under a word, a small human gesture against the rigid boxed grid.

## Do's and Don'ts

- Do box headings and navigation cells with 1px charcoal outlines.
- Do pair large, tight Sequel Sans headings with small uppercase Maison Mono copy.
- Do use full-bleed, warm, human photography.
- Do use wine #672b3c, cream #f0eeeb and lavender #b5b7d8 as supporting surfaces.
- Don't add drop shadows.
- Don't use the WordPress default colors as brand colors.
- Don't use rounded pills; button radius is 2px.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 is 42.313px with a 42.313px line height in a 102px box; the h2 is 26.052px with a 28.6572px line height in a 233px box; body text stays 10px with a 13px line height in a 358px box; button text is 12px with a 15.6px line height in a 358px box. Menu behavior and layout changes were not measured.

## Iteration Guide

1. Charcoal #222223, white #ffffff, cream #f0eeeb, wine #672b3c.
2. Sequel Sans 415 for headlines with negative letter spacing; Maison Mono uppercase for copy and buttons.
3. Box key headings and navigation with 1px charcoal borders; 2px button radius.
4. Lead with large photography.
5. Hover, dark-mode and animation states were not measured.
