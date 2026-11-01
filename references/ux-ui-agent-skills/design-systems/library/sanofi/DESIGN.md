---
version: alpha
name: Sanofi
category: "Pharma"
description: "Global biopharma corporate site at sanofi.com/en. White canvas, Sanofi Sans 16px body and 700-weight 48px headlines with Sanofi Serif italic accents, brand purple #7a00e6 for links, hover and arrows, 4px-radius buttons, 8px-radius bordered article cards and a #f5f5f5 Global selector."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#7a00e6"
  on-primary: "#ffffff"
  button-global-bg: "#f5f5f5"
  button-global-text: "#000000de"
  ink-strong: "#171717"
  ink-muted: "#434343"
  ink-subtle: "#5d5d5d"
  hairline: "#c9c9c9"
  brand-dark: "#5718b0"
  brand-darkest: "#23004c"
  brand-lightest: "#faf5ff"
typography:
  display:
    fontFamily: "\"Sanofi Sans\", \"Work Sans\", Raleway, Roboto, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 72px
  display-mobile:
    fontFamily: "\"Sanofi Sans\", \"Work Sans\", Raleway, Roboto, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 45px
  heading:
    fontFamily: "\"Sanofi Sans\", \"Work Sans\", Raleway, Roboto, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 54px
  subheading:
    fontFamily: "\"Sanofi Sans\", \"Work Sans\", Raleway, Roboto, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: "\"Sanofi Sans\", \"Work Sans\", Raleway, Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Sanofi Sans\", \"Work Sans\", Raleway, Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s3: 4px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.button-global-bg}"
    textColor: "{colors.button-global-text}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 24px
    height: 48px
    borderColor: "{colors.button-global-bg}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 0px 24px
    height: 44px
    borderColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    padding: 0px 32px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
---

# Sanofi

## Overview
The measured page is https://www.sanofi.com/en, titled "R&D-Driven and AI-Powered Biopharmaceutical Company | Sanofi". The home opens with a white 73px header (logo, Our Company, Our Science, Patients, Partnering on the left; Media, Investors, Careers, a purple search icon and a pale "Global" selector on the right) over a full-bleed video hero. The hero headline reads "We chase the miracles of science so you can chase your dream" with the words "chase", "science" and "dreams" set in italic serif, and an outlined "Learn more" button beneath. Below come "Our Latest Articles" as three bordered cards with photographs, a "The Power of Chasing A Dream" block with copy beside a video still, and "People Stories" with portrait photographs. The page is 6220px tall and 1280px wide at measurement. Tone is warm and human: patients, scientists and surfers are photographed outdoors, the copy is conversational ("you're not alone. We're right beside you"), and science imagery uses glowing violet microscopy renders that echo the purple brand color.

## Colors
Color is almost entirely neutral, with purple as the single brand voice. The root variables define `--elements-core-brand-base` as `rgba(122, 0, 230, 1)`, which is `#7a00e6`; it is the color of article arrows, the search icon, the 1px border of the video play control and the hover state of navigation links (measured: text turns from `#171717` to `#7a00e6` with an underline). On mobile the "Learn more" CTA is filled with `#7a00e6` and white text. Deeper steps are declared as brand-dark `rgba(87, 24, 176, 1)` (`#5718b0`), brand-darkest `rgba(35, 0, 76, 1)` (`#23004c`) and brand-lightest `rgba(250, 245, 255, 1)` (`#faf5ff`). A green scale (base `rgba(7, 148, 85, 1)`) is declared in the same system but not measured in visible UI, so it is not carried into the tokens. Text colors measured are `#000000`, `#171717`, `#434343` and `#5d5d5d`; card borders are `#c9c9c9`. The extractor's generated primary was the pale Global selector, `#f5f5f5` with `#000000de` text; it is kept as the `button-primary` fill, while the brand role is `#7a00e6`.

## Typography
Sanofi Sans (400 and 700) is the family everywhere, with fallbacks Work Sans, Raleway and Roboto. Sanofi Serif (400 and 700 italic) is used only for italic emphasis words inside the hero headline; it is declared as `--elements-core-font-family-serif` with IBM Plex Serif as fallback. Measured scale on desktop: h1 48px/72px weight 700, h2 36px/54px 700, h3 24px/36px 700, body 16px/24px 400, card meta 14px/21px, and 18px and 64px also appear in character statistics. Mobile reduces the h1 to 36px/45px and the h2 to 28px/35px. A tight letter-spacing token of `-.031rem` is declared in the root variables.

## Layout
Content sits in a wide container with 36px-ish outer gutters visible in the capture; header padding measures 32px horizontally on desktop and 16px on mobile. Article cards are measured at 384px wide and 519px tall in a three-column row. Spacing values measured include 1px, 2px, 4px, 5px, 8px, 12px, 16px, 24px, 32px and 48px, and vertical rhythm between sections is large, with a hairline rule above the article block. The declared breakpoints include a 2xl maximum of 3839px.

## Imagery and Voice
The capture shows three kinds of imagery. Aerial video of a crowded pedestrian crossing, with a red-painted lane, opens the page under a play control in the lower right. Editorial photographs of patients and scientists, shot outdoors with shallow depth of field, illustrate the "Power of Chasing A Dream" and "People Stories" blocks, including a woman holding a surfboard. Science stories use glowing violet cell and particle renders on dark backgrounds, which repeat the purple of the interface. Copy is direct and first-person plural: "We chase the miracles of science", "Read our latest articles", "Read the article". Each article card shows a category label, a long-form date such as "October 6, 2026", and a headline that runs to three lines at 24px. Section headings are plain noun phrases ("Our Latest Articles", "People Stories") with a bold one-line deck beneath, and calls to action end with a purple right arrow rather than a filled button.

## Elevation & Depth
No box-shadows were measured. Separation is made with 1px `#c9c9c9` borders on cards, a pale `#f5f5f5` fill on the Global selector, and photography. Media overlays use white at high opacity tokens such as `--elements-color-semantic-background-overlay-white-ultra_strong` (rgba(255, 255, 255, .88)).

## Shapes
Measured radii: 8px (the most frequent, on cards and media), 50% and 100% (circular icon controls), 9999px (pill chips) and 4px (buttons). Buttons are lightly rounded rectangles rather than pills; cards and images carry the larger 8px radius.

## Components
**Global selector (extracted primary):** 48px tall, `#f5f5f5` fill and border, 4px radius, 24px horizontal padding, Sanofi Sans 16px bold, text `#000000de`. **Outlined button:** "Learn more" in white 16px regular, 44px tall, 4px radius, 1px white border over the hero. **Navigation:** 16px text in `#171717` with weight 700 on the header, links `#000000`; hover turns purple and underlines. **Article card:** 8px radius, 1px `#c9c9c9` border, 14px `#434343` meta line ("Our Science" and a date), a 24px bold title in `#000000`, and a "Read the article" link with a purple arrow. **Footer:** white text on a dark band with Follow us, Back to top, Global Privacy, Contact and Terms of Use.

## Design System Architecture
Sanofi's site ships a token layer named "elements": root variables are prefixed `--elements-core-*` (brand, opacity, font families, letter-spacing, breakpoints) and `--elements-color-*` for semantic and component roles (for example `--elements-color-components-chips-bg-brand-hover` and `--elements-color-semantic-destruct-hover`). Core brand steps follow a lightest, lighter, light, base, dark, darker, darkest ladder, and secondary and tertiary brand ladders exist. Icons use Font Awesome 7 packs (Vellum, Etch). No public documentation page was opened; the research record is `none: true`. Source: https://www.sanofi.com/en measured into web/data/extracted/sanofi.json.

The extractor also measured a circular play control in the lower right of the hero video, drawn as a pale disc with a purple triangle and a thin purple border, and a purple magnifier icon for search. Both circular controls use the 50% radius found in the frequency data, which is why that value appears alongside the 8px card radius and 4px button radius.

## Do's and Don'ts
- Do use `#7a00e6` as the only chromatic accent for links, arrows and active states.
- Do set headlines in Sanofi Sans 700 and reserve Sanofi Serif italic for emphasis words.
- Do round buttons to 4px and cards to 8px.
- Do outline cards with `#c9c9c9` instead of shadows.
- Don't add drop shadows; none were measured.
- Don't use the green scale in UI without measuring it.
- Don't use pill buttons for primary actions; pills appear only on chips.

## Responsive Behavior
The 390px mobile pass measured: h1 36px/45px, h2 28px/35px, body 16px/24px, a header height of 63px with 16px horizontal padding and white background, and a "Learn more" CTA filled `#7a00e6` with white 16px text, 44px high, 4px radius. Column counts, menu behavior and card stacking on mobile are not measured.

## Iteration Guide
1. Canvas `#ffffff`, ink `#000000`, brand `#7a00e6` with `#5718b0` and `#23004c` for deeper states.
2. Sanofi Sans 700 at 48px/72px for page statements and 16px/24px body.
3. Buttons: 4px radius, 24px side padding, 44 to 48px high.
4. Cards: 8px radius, 1px `#c9c9c9` border, 14px meta, 24px bold title, purple arrow link.
5. Photograph people outdoors and pair with violet microscopy imagery.
6. Run `node web/scripts/verify-designs.mjs --slug=sanofi`.
