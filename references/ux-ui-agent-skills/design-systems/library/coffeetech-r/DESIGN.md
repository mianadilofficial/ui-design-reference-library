---
version: alpha
name: CoffeeTech®
category: "Tech & AI"
description: "CoffeeTech® (coffee-tech.com), an Israeli maker of commercial coffee roasters. A near-black #0d0e13 canvas with cream #f3ede3 type and a terracotta #c8603d Products button, set in Inter with a 192px/500 hero headline, square 0px buttons and 11.11px beige cards on #e5e2dd bands."
colors:
  canvas: "#0d0e13"
  page-largest: "#e5e2dd"
  ink: "#f3ede3"
  ink-dark: "#0d0e13"
  primary: "#c8603d"
  on-primary: "#fbf8f3"
  on-primary-hover: "#14151a"
  surface-card: "#dcd8d3"
  ink-muted: "#67625e"
  ink-med: "#6f6f73"
  card-border: "#ffffff"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 192px
    fontWeight: 500
    lineHeight: 182.4px
    letterSpacing: "-13.44px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 58.5px
    fontWeight: 500
    lineHeight: 55.575px
    letterSpacing: "-4.095px"
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 56.32px
    fontWeight: 600
    lineHeight: 54.6304px
    letterSpacing: "-3.6608px"
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 44.992px
    fontWeight: 600
    lineHeight: 44.992px
    letterSpacing: "-2.69952px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 12.8px
    fontWeight: 450
    lineHeight: 17.92px
    letterSpacing: "-0.256px"
  button:
    fontFamily: Inter, sans-serif
    fontSize: 13.824px
    fontWeight: 450
    lineHeight: 13.824px
    letterSpacing: "-0.41472px"
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: Inter, sans-serif
    fontSize: 11.52px
    fontWeight: 450
    lineHeight: 17.28px
    letterSpacing: "-0.2304px"
rounded:
  xs: 3.2px
  sm: 11.11px
  none: 0px
  pill: 9999px
spacing:
  s1: 3.84px
  s2: 6.4px
  s3: 8.96px
  s4: 10.24px
  s5: 11.52px
  s6: 12.8px
  s7: 19.2px
  s8: 25.6px
  s9: 32px
  s10: 36.99px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 34px
  button-dark:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 36px
  button-dark-hover:
    textColor: "{colors.on-primary-hover}"
  button-outline:
    textColor: "{colors.ink-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10.24px 19.2px
    height: 36px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 43.52px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 6.4px 25.6px 6.4px 12.8px
    height: 30px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.canvas}"
    borderColor: "{colors.card-border}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 59.264px 0px
---

## Overview

CoffeeTech® is the brand of Coffee Tech Engineering, a manufacturer of commercial coffee roasters. The page title reads "CoffeeTech® - Advanced Commercial Coffee Roasters", the meta description says the company produces "the most advanced commercial coffee roasting, shop & lab roasters", and the About page says that for over three decades it has been "pioneering technological breakthroughs in coffee roasting". The footer of the measured page lists an address in Matsli'ah, Israel, and the language selector offers English, Français, Español, Hebrew and Deutsch. The About page quotes "2,000+" machines installed, "600+" roasting businesses and "120+" countries.

The visual identity is an industrial product catalogue staged like a cinema title card. The page opens on a 1280px-wide near-black field (`#0d0e13`, which covers roughly 71% of the capture) with a three-line, centered headline, "Coffee Roasting Reinvented", set at 192px in a cream `#f3ede3`. Below it a single black roaster floats in the dark, lit only at its edges so that it nearly dissolves into the background. The page then cuts to a warm beige band (`#e5e2dd`) carrying a portrait photograph on the left and a short mission statement on the right ("Always pushing the coffee industry forward with revolutionary technology, we design and manufacture premium roasting machines…"), followed by an underlined "Read more about us" text link. Later sections, from the page text, are "Our Products" (FZ94 Evo, Silon ZR7, Ghibli R90, Lab Extractor), specialty coffee, cocoa and nuts, and a testimonial slider.

The tone is confident and technical: short declaratives ("Reinventing coffee roasting with new technology for over three decades"), product model names as proper nouns, and customer quotes signed with the roastery and city. One terracotta accent (`#c8603d`) is used for the logo mark and the Products button; everything else is black, cream and beige. The measured page is 7448px tall.

## Colors

The palette is declared in the Webflow stylesheet as root variables, and every value below was read back by the extractor.

- **Canvas — `#0d0e13`** (`--dark-blue`, despite the name it renders as a blue-tinted black). It is the page background of the hero and the footer, and it doubles as the text color on beige sections (1769 weighted characters), so it is also stored as `ink-dark`.
- **Ink — `#f3ede3`** (`--creme`). Text on the dark canvas: the hero headline, the navigation and the footer. A lighter cream, `#fbf8f3` (`--creme-light`), is the label color on buttons and is stored as `on-primary`.
- **Page-largest — `#e5e2dd`** (`--beige`). The largest background area by weight (11057, against 5410 for the black); it fills the About band and other light sections.
- **Primary — `#c8603d`** (`--orange`). The terracotta of the "Products" button and the logo mark; it is also the hover color of the "Products" link. The extractor's own primary-CTA pick was the black "Contact Us" button (`#0d0e13`); the orange Products button is the brand's visible accent, so `primary` was reassigned to it. The black button's values are kept as `button-dark`.
- **Card surface — `#dcd8d3`** (`--product-bg`), with `#efece8` as its hover variant (`--product-bg-hover`, declared but its hover not separately measured) and `#ffffff` as the card stroke (`--product-stroke`, measured as the 1px card border).
- **Muted text — `#67625e`** (`--grey-beige`) is the most-read text color overall (3352 weighted characters): body paragraphs. `#6f6f73` (`--med-beige`) is a second, lighter grey used for 215 characters.
- **Hover text — `#14151a`**, measured as the hover color of the "Contact Us" link.

Contrast patterns on the page: cream on near-black for hero and navigation, near-black on beige for mission copy, and cream on terracotta for the Products button. The CSS corpus also contains neutral values such as `#222222`, `#333333`, `#cccccc`, `#dddddd` and a Webflow-style `#3898ec`; they were counted in the stylesheet but are not part of any measured role, so they are not tokens.

## Typography

One family carries the interface: Inter. The page's loaded-font record lists Inter at 400, 500 and 600, and the computed weights measured on text are 450 (3527 weighted characters), 600 (872), 500 (843), 400 (267) and 700 (10). The `--primary-font` variable is `'Inter',sans-serif`. The stylesheet also names Google Sans (75 declarations) and an icon font, but no characters were measured in Google Sans — 100% of measured text (5519 characters) is Inter. Inter is an open-source family, so no substitute is needed.

The scale is dramatic at the top and tiny at the bottom, with negative tracking on every size:

- **Display** — 192px / 500, line-height 182.4px, letter-spacing -13.44px (h1, "Coffee Roasting Reinvented"). On the mobile pass this becomes 58.5px / 500, line-height 55.575px, letter-spacing -4.095px.
- **Heading** — 56.32px / 600, line-height 54.6304px, letter-spacing -3.6608px (h2, "See all products").
- **Subheading** — 44.992px / 600, line-height 44.992px, letter-spacing -2.69952px (h3, "Technology").
- **Intermediate sizes** — 17.4208px (779 weighted characters) and 22.8096px (453) are the next most-used sizes after 12.8px, at -0.522624px and -1.14048px tracking.
- **Body** — 12.8px / 450, line-height 17.92px, letter-spacing -0.256px.
- **Button** — 13.824px / 450, line-height 13.824px, letter-spacing -0.41472px.
- **Navigation** — 12.8px / 400, line-height 20px; **input** — 11.52px / 450.
- **Tags** — 7.9232px (249 weighted characters).
- **Footer display** — 131.958px / 500, letter-spacing -9.23704px.

The root variable `--tag-font-size` is `0.619vw`, which computes to 7.9232px at the 1280px viewport and matches the measured tag size exactly.

## Layout

The layout is full-bleed and band-based. A 121px-tall header (43.52px top and bottom padding) holds the logo at the left, four text links (About, Technology, Efficiency, Sustainability) in the center, and at the right a terracotta Products button, an outlined Contact Us button and a language select. The hero centers a headline across the full width, with the product image below. Light sections alternate with dark ones; the footer is a dark block 868px tall with 59.264px of vertical padding and a very large footer headline.

Measured spacing values are 3.84px, 6.4px, 8.96px, 10.24px, 11.52px, 12.8px, 19.2px, 25.6px, 32px and 36.99px, with larger paddings of 59.264px and 89.6px (9 uses). Gaps are most often 12.8px (32 uses) and 36.992px (19 uses). Many of these values are fractions of the viewport width rather than round pixel numbers: `--border-radius` is `0.868vw`, which computes to 11.1104px at 1280px and matches the measured card radius.

Density: sparse. The hero is one headline and one product image on an otherwise empty field; body copy is small (12.8px) in narrow columns beside generous empty space.

## Elevation & Depth

The page does not use elevation on its components: the extractor recorded no box-shadow on any rendered element. Depth is made with light and photography: the roaster image is lit against black, the portrait photograph sits on beige with rounded corners, and cards are separated from their band by a 1px white stroke (`--product-stroke`) rather than by a shadow.

The stylesheet does define shadows whose use on the page was not measured: `0 1px 4px rgba(13,14,19,.18)`, `0 2px 8px rgba(0,0,0,.12)`, `0 10px 28px rgba(0,0,0,.4)`, `0 0 10px rgba(255,255,255,.5)`, and two three-layer offset shadows of `.4vw` in cream-light and orange. They are listed here as declared, not as observed UI.

## Shapes

Shapes are mostly hard-edged. Buttons, the header, the footer and the nav links all measure a 0px radius, which makes the square button the brand's default. Rounded forms are reserved for content: cards use 11.11px (40 measured occurrences), the language select uses 3.2px, and tags use `--tags-border-radius: 100vw`, a full pill. The border-radius frequency table also records `1280px` (32 occurrences, full-width elements) and `100%` (1). Borders are 1px solid `#0d0e13` on outlined buttons (34 occurrences), `#ffffff` on cards (4) and `#c8603d` on the Products button (1).

## Components

- **Primary button (`button-primary`).** The "Products" button: `#c8603d` fill and border, `#fbf8f3` text, 13.824px / 450, 0px radius, 34px tall on desktop (41px tall with 11.7px / 15.6px padding and 15.6px / 600 text on the 390px mobile pass). Its measured hover leaves the fill at `#c8603d` and moves the text color to rgb(202, 100, 66).
- **Dark button (`button-dark`).** "Contact Us": `#0d0e13` fill, `#fbf8f3` text, 36px tall, 110px wide. Measured hover on the "Contact Us" link changes the text to `#14151a` and on the "Contact Us" button to `#0d0e13`.
- **Outlined button (`button-outline`).** "Products Catalog": transparent, `#0d0e13` text, 1px solid `#0d0e13` border, padding 10.24px 19.2px, 36px tall, 148px wide.
- **Navigation links.** 12.8px / 400 cream text; measured hover reduces opacity from 1 to 0.6 for the About, Technology, Efficiency and Sustainability links.
- **Text link.** "Read more about us", 13.824px / 450 in `#0d0e13`, underlined in the capture.
- **Language select (`text-input`).** 83px wide, 30px tall, 3.2px radius, 11.52px text, padding 6.4px 25.6px 6.4px 12.8px, listing English, Français, Español, Hebrew and Deutsch.
- **Card (`card`).** `#dcd8d3` fill, 1px `#ffffff` border, 11.11px radius; the measured cards are 363px wide and 256px tall.
- **Footer.** `#0d0e13`, cream text, 59.264px vertical padding, with an address block and large type.

Motion tokens are declared as root variables: `--standard-easing: cubic-bezier(.50,0,0,.99)`, `--cta-motion-easing: cubic-bezier(.60,.50,0,1)` and `--underline-motion: fadein 2.5s cubic-bezier(.60,0,0,1)`.

## Design System Architecture

No public design-system documentation, brand-guideline page or press kit is linked from the pages opened (the home page and the About page), so no official design system is documented. The site is built in Webflow: the HTML root carries `data-wf-domain="www.coffee-tech.com"` and the page links a Webflow-hosted stylesheet (`https://cdn.prod.website-files.com/6978cf5d8e122e23793db0cd/css/coffee-tech.webflow.shared.28773aee4.min.css`) plus a custom stylesheet at `https://coffee-tech.netlify.app/style.css`. The pages are at https://www.coffee-tech.com/ and https://www.coffee-tech.com/about.

The de-facto system is a small set of root variables with color-name tokens (`--dark-blue`, `--creme`, `--creme-light`, `--beige`, `--grey-beige`, `--med-beige`, `--orange`), surface tokens (`--product-bg`, `--product-bg-hover`, `--product-stroke`), shape tokens in viewport units (`--border-radius`, `--tags-border-radius`, `--tag-font-size`, `--tag-border-width: 1px`), gallery-position tokens (`--product-gallery-side-y`, `--product-gallery-prev-x`, `--product-gallery-next-x`) and three easing tokens. Note that `--dark-blue` is `#0D0E13`, so a name does not reliably describe the hue.

## Do's and Don'ts

Do:
- Keep the hero black (`#0d0e13`) with a cream (`#f3ede3`) headline set tight: 192px / 500 with -13.44px tracking.
- Use terracotta `#c8603d` only for the primary action and the logo mark.
- Alternate dark and beige (`#e5e2dd`) bands, and use `#0d0e13` and `#67625e` for text on beige.
- Keep buttons square (0px radius) and reserve 11.11px for cards and photographs.
- Apply negative letter-spacing to every size, in line with the measured scale.

Don't:
- Don't add shadows to components; none were measured on rendered elements.
- Don't round buttons or the header.
- Don't use pure white or pure black for text: the measured inks are cream, near-black and the two beige greys.
- Don't use Google Sans or other families: all measured text is Inter.
- Don't copy the generic Webflow colors (`#3898ec`) from the stylesheet; they are not used in any measured role.

## Responsive Behavior

Measured at 390px wide: the hero headline falls from 192px to 58.5px / 500 (line-height 55.575px, letter-spacing -4.095px) and occupies a 351px-wide, 167px-tall block; body text moves from 12.8px to 14.547px (line-height 20.3658px) in a 277px-wide block; the Products button measures 41px tall at 15.6px / 600 with padding 11.7px 15.6px and keeps its 0px radius and `#c8603d` fill; the header measures 72px tall with a `#0d0e13` background and its text reports 31.2px / 600. The header text at this width lists the same six entries (About, Technology, Efficiency, Sustainability, Products, Contact) as on desktop. Character-weighted sizes on the mobile pass are 14.547px, 18.72px, 22.893px, 8.19px, 35.1px, 31.2px, 15.6px and 21.45px.

Breakpoints and the exact menu behavior were not measured. Dark/light mode switching and tablet layouts were not measured.

## Iteration Guide

1. Start with three surfaces: `#0d0e13` for hero and footer, `#e5e2dd` for light bands, `#dcd8d3` for cards.
2. Type everything in Inter. Set the headline at 192px / 500 with -13.44px tracking on desktop and 58.5px on a 390px viewport, then 56.32px / 600 and 44.992px / 600 for section headings.
3. Make buttons square: orange `#c8603d` with `#fbf8f3` label for the main action, black with cream label and outlined black for secondary.
4. Use 11.11px radius for cards, 3.2px for form fields, full pills for tags.
5. Keep copy short and technical; name machines (FZ94 Evo, Silon ZR7, Ghibli R90) and sign testimonials with roastery and city.
6. Run `node web/scripts/verify-designs.mjs --slug=coffeetech-r` after any token change.
