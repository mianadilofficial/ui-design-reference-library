---
version: alpha
name: Centara Hotels & Resorts
category: "Thai Brands"
description: "Centara Hotels & Resorts (centarahotelsresorts.com): white canvas with black text, Centara red #b5121b buttons and accent words, Cardo serif headings (42px) with Karla body at 16px/24.48px and -0.4px tracking, cream #f8f6f3 bands and square-cornered buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#b5121b"
  on-primary: "#ffffff"
  primary-hover: "#c44149"
  primary-dark: "#a52825"
  discover-hover: "#cc232ce6"
  surface-cream: "#f8f6f3"
  surface-gold-tint: "#bba8881a"
  gold: "#bba888"
  surface-gray: "#f7f7f7"
  surface-gray-2: "#eeeeee"
  ink-muted: "#999999"
  hairline: "#d9d9d9"
  border-dark: "#666666"
typography:
  display:
    fontFamily: Cardo
    fontSize: 42px
    fontWeight: 400
    lineHeight: 44.94px
  subheading:
    fontFamily: Karla
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  body:
    fontFamily: Karla
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24.48px
    letterSpacing: "-0.4px"
  button:
    fontFamily: Karla
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-mobile:
    fontFamily: Karla
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  nav:
    fontFamily: Karla
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 5px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 10px
  s6: 11px
  s7: 13px
  s8: 16px
  s9: 17px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px 30px
    height: 64px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-book-now:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    height: 45px
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 13px 31px
    height: 50px
    borderColor: "{colors.ink}"
  button-light-hover:
    backgroundColor: "{colors.discover-hover}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.on-primary}"
  nav:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    height: 162px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 20px 27px
---

## Overview

The Centara Hotels & Resorts home page (https://www.centarahotelsresorts.com/, title "Centara Hotels & Resorts | Book an Exciting Escape Now", language en) is a hospitality booking site that leads with photography and uses a restrained palette of black, white and one red. The measured page is 1280px wide and 7183px tall with 1029 visible elements. The page text opens with the hero line "Your Golden Moment to Discover The World", and its section headings include Members Get More, Book Direct Benefits, Centara Signatures, Family at Heart, Featured Hotels, Featured Offers, Newly Opened Hotels, The Centara Experiences and Be Inspired By Centara Journal.

In the capture the top is a hero slider: a full-width resort photograph with a centered "CENTARA HOTELS & RESORTS" wordmark in red, utility links at the left (Centara Journal, Contact Us), a THB currency selector and an EN language selector, a Centara The 1 sign-in link, and a red "Book Now" button at the right, with a second row of menu items (Hotels & Resorts, Offers, Restaurants and Bars, Wellness, Events). The slide headline "Elevated Comfort with Premium Stays" is set in a white serif over the photograph with a short description and a white "Discover More" button, a vertical dot pager at the right edge and two round arrow buttons at the bottom.

A cream band follows with "Book Direct Benefits" and a red "More information" link beside four line-icon benefits (15% Member Discount, Best Rate Guarantee, Early Check-in or Late Check-out, 15% off Dining, Drinks & Spa). Next comes "Centara Signatures", a two-tone serif heading (black "Centara", red "Signatures") with a paragraph and round arrow buttons beside a row of photo cards with white captions ("Kids Stay and Eat For Free", "Exclusive Member Benefits") and circled arrow icons. "Featured Hotels" (again black plus red words) shows a carousel of large resort photographs captioned in white serif ("Centara Mirage Lagoon Maldives", "Centara Reserve Samui"), closed by a red "See all Hotels & Resorts" button. The voice is warm and promotional: "signature moments", "Golden Moment", "Elevated Comfort".

## Colors

Measured text colors by character count: `#000000` (3576), `#ffffff` (3282), `#999999` (167) and `#b5121b` (88). Backgrounds by area: `#ffffff` (6730), `#f8f6f3` (1780), `#bba8881a` (1539), `#000000` (1088), `#f7f7f7` (1002), `#eeeeee` (68), `#b5121b` (25), `#a52825` (17), `#cecece` (5) and `#bba888` (5).

- **Canvas `#ffffff`** with **ink `#000000`** carry almost all reading. Text on photography is white.
- **Primary `#b5121b`** (declared `--button-primary-bg`, and `--menu-hightlight` points to it) fills the buttons ("Book Now", "See all Hotels & Resorts") and colors accent words in headings and the "More information" link. Hover fill is `#c44149` (`--button-primary-bg-hov`); the text stays `#ffffff`. `#a52825` is a measured darker red area.
- **Cream `#f8f6f3`** is the benefits band and a calm section background; `#f7f7f7` and `#eeeeee` are light gray surfaces.
- **Gold `#bba888`** appears as a flat measured area and as the tinted `#bba8881a` (10% alpha) background; the second round arrow button in the capture is a gold-beige circle beside a gray one.
- **Muted `#999999`** is secondary text (167 characters); **hairline `#d9d9d9`** and **`#666666`** are measured border colors.

The "Discover" outlined button changes on hover from white fill, black text and black border to `rgba(204, 35, 44, 0.9)` (`#cc232ce6`) fill with white text and a white border plus a faint inset shadow.

## Typography

Two families carry the page: **Karla** (5231 measured characters; weights 300, 400, 500 and bold loaded) for interface text and paragraphs, and **Cardo** (2045 characters; the regular face is loaded and a `Cardo Bold` face is declared) for hero titles and section headings. Nunito Sans is declared as `--font-primary-brand` and appears in the CSS corpus, and an icon font (`icomoon`) is loaded. The site declares `--font-primary: 'Karla'`, `--font-secondary`, `--font-heading` and `--font-tertiary` as `'Cardo'`, and per-weight Karla face names (`Karla-light`, `Karla-regular`, `Karla-medium`, `Karla-bold`).

- **Display (hero title):** Cardo 400, 42px on 44.94px, white ("Himalayan Holiday Escape"); the same 42px/44.94px is measured at 390px.
- **Subheading (card caption):** Karla 400, 22px on 22px, white ("Kids Stay and Eat For Free").
- **Body:** Karla 400, 16px on 24.48px, letter-spacing -0.4px, black.
- **Button:** Karla 400, 16px on 24px (15px on 22.5px at 390px).
- **Nav links:** Karla 400, 14px on 21px.

Negative tracking is systematic: 16px/-0.4px on 1835 characters, 15px/-0.375px on 98, 20px/-0.5px on 32 and 13px/-0.195px on 23. Measured sizes by character count: 16px (4377), 25px (1021), 20px (768), 42px (282), 0px (193), 40px (114), 12px (106), 18px (103), 22px (100), 15px (98), 13px (84), 13.3333px (36). Weights: 400 (6388), 700 (712), 600 (175), 300 (29), 500 (23).

Section headings combine black and red words in Cardo (for example black "Featured" and red "Hotels" in the capture); their exact size is not assigned to a measured role, although 40px (114 characters) and 25px (1021 characters) are measured sizes.

Font substitutes: Karla and Cardo are the declared families and there is no further fallback in the measured stacks.

## Layout

The page is a sequence of full-width bands with content in a centered column. The header is 162px tall and carries a gradient background `linear-gradient(rgba(0, 0, 0, 0.6) 15.62%, rgba(0, 0, 0, 0) 100%)` over the hero. The hero is a slider whose neighboring slides are partly visible at the left; the featured-hotels carousel centers one large card with half-visible cards on both sides; the Signatures row places a text column at the left and a horizontally scrolling row of photo cards at the right.

Measured paddings are 6px (44 occurrences), 20px (37), 40px (31), 27px (20), 17px (19), 10px (17), 30px (16), 85px (13), 13px and 31px (11 each), 3px (10) and 55px (9). Measured gaps are 25px (4), 35px, 27px, 100px, 70px and 13px (2 each), 10px and 20px (1 each). The footer is black, 850px tall, with padding 20px 27px.

Section rhythm is generous: wide white or cream bands, large serif headings and image-led cards. A benefits band shows four equal columns divided by a thin vertical rule at the left.

## Elevation & Depth

Surfaces are flat. The only box shadow measured on visible elements is `rgba(0, 0, 0, 0.4) 0px 6px 15px 0px` (1 occurrence), and the Discover button gains `rgba(0, 0, 0, 0.2) 0px 0px 5px 0px inset` on hover. The CSS corpus also lists `0 4px 20px rgba(0,0,0,0.15)`, `0 1px 2px 0 rgba(0,0,0,0.1)`, `0rem .1875rem .25rem .0625rem #d8d8d8` and `0 .1875rem .25rem -.1875rem rgba(0,0,0,0.69)` (4 declarations each).

Depth comes from photography and from layering: text over images with a darkened lower gradient, cream bands against white, and round white arrow buttons floating over carousels. The header background is a gradient from 60% black at the top to transparent.

## Shapes

Buttons are square (0px radius): "Book Now" (45px tall), "See all Hotels & Resorts" (64px tall), the "Discover" and "Discover More" buttons. Radii measured on other elements: 50% (8 occurrences; round elements such as the arrow buttons appear in the capture), 4px (5) and 5px (1). The CSS corpus lists 4px (21), 5px (9), 2px (9), 3px (6), 6px (6), 18px (3) and a few others.

Imagery is cropped to rectangles with no radius in the capture (the photo cards, the hotel cards and the hero). Icons for benefits are thin-line illustrations, and circled arrows (an outlined circle with an arrow) mark linked cards. The vertical dot pager at the hero's right edge uses small circles, one with an outline ring for the active slide.

## Components

**Primary button.** `#b5121b` fill, white Karla 400 16px text on 24px, padding 20px 30px, 64px tall, 236px wide for "See all Hotels & Resorts", 0px radius; hover `#c44149`.

**Book Now.** Same red fill and white text, 45px tall, 0px radius in the header; at 390px it measures 35px by 90px with 15px/22.5px text.

**Light button ("Discover", "Discover More").** White fill, black text, black border, padding 13px 31px, 50px tall, 203px wide, 0px radius; hover fills `#cc232ce6` with white text and a white border.

**Header navigation.** 162px tall with a dark-to-transparent gradient; links are Karla 400 14px on 21px in white; a currency selector (THB) and language selector (EN) sit beside the sign-in link; the wordmark is centered.

**Photo cards.** Rectangular photographs with white Cardo or Karla captions at the bottom left and a circled arrow at the bottom right.

**Benefits band.** `#f8f6f3` background, four columns of line icons with short bold captions.

**Footer.** Black background, 850px tall, padding 20px 27px; the page text lists About Us links (Our Story, Our Brands, Sustainability, Careers, Investor Relations), brand logos and legal links (Terms & Conditions, Privacy Policy).

## Design System Architecture

No public design system, brand guidelines or brand asset library is published: the home page (https://www.centarahotelsresorts.com/) links to Our Story, Our Brands, Centara Complete Care, Sustainability, Careers, Investor Relations, a trade site, legal pages and brand logos in the footer, and none of these is a brand-guideline or design-system page. The logo files are theme assets (`logo.svg`, `logo_white.svg`).

The de-facto system is a short list of root variables: button tokens (`--button-primary-bg: #B5121B`, `--button-primary-bg-hov: #C44149`, `--button-primary-text: #fff`, `--button-primary-text-hov: #fff`), a menu highlight alias (`--menu-hightlight: var(--button-primary-bg)`), font roles (`--font-primary`, `--font-primary-light`, `--font-primary-regular`, `--font-primary-medium`, `--font-primary-bold`, `--font-primary-brand`, `--font-secondary`, `--font-secondary-bold`, `--font-heading`, `--font-tertiary`) and a viewport unit helper (`--vh: 8px`). Everything else (spacing, radii, shadows) is set directly in component CSS.

## Do's and Don'ts

**Do**
- Use `#b5121b` for the main buttons and for a single accent word in each serif heading.
- Set headings and hero titles in Cardo, set UI and body in Karla with -0.025em tracking at 16px.
- Keep buttons square-cornered; use white buttons with black borders on photography and red buttons on white or cream.
- Lead with full-bleed resort photography; caption cards in white text near the bottom edge.
- Use cream `#f8f6f3` bands to group benefits and promotions.

**Don't**
- Don't round button corners; every measured button reports 0px.
- Don't set body paragraphs in the serif; Cardo is for titles.
- Don't add shadows to cards; only one measured shadow exists on visible elements.
- Don't make red the page background; it is limited to buttons, accent words and links.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: the hero title stays 42px on 44.94px, 336px wide and 130px tall with 40px top padding; body copy stays 16px on 24.48px with -0.4px tracking in a 350px-wide, 245px-tall box with 0px 32px padding; "Book Now" is 15px on 22.5px, 90px by 35px; the header is 75px tall and its recorded text begins "Book Now / Hotels & Resorts / Offers / Restaurants And Bars / Wellne..." (the desktop header text begins "Centara Journal / Contact Us / THB / EN").

Measured sizes by character count at 390px: 16px (3425), 18px (1171), 20px (370), 42px (282), 15px (248), 22px (120), 28px (114), 12px (93). Breakpoint widths, the carousel behavior and the column counts at 390px were not measured.

## Iteration Guide

1. Start with canvas `#ffffff`, ink `#000000`, primary `#b5121b` (hover `#c44149`) and cream `#f8f6f3`.
2. Set hero and section titles in Cardo 400 (42px/44.94px for hero titles) and everything else in Karla; body is 16px/24.48px with -0.4px letter-spacing.
3. Build the header as a 162px band with a black-to-transparent gradient, centered wordmark, utility links at left, selectors and a red Book Now button at right, and a second row of menu items.
4. Build buttons as square rectangles: red with white text (padding 20px 30px, 64px tall) or white with black text and a black border (padding 13px 31px, 50px tall) that fills red on hover.
5. Use photo cards with white captions and circled arrows, a cream benefits band with four line-icon columns, and two-tone serif headings (black plus red accent word).
6. Keep surfaces flat and corners square; use round arrow buttons only for carousels.
