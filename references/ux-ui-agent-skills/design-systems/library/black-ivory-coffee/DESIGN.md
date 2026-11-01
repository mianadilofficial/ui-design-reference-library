---
version: alpha
name: Black Ivory Coffee
category: "Thai Brands"
description: "Online store and brand site of Black Ivory Coffee, the elephant-refined coffee from Thailand, in trajan-sans-pro capitals and GeneralSans body on a warm #f1efe8 canvas with black ink, #ded9ca panels, white 1px outlined buttons over full-bleed cinematic photography and a black footer."
colors:
  canvas: "#f1efe8"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#ffffff"
  surface-panel: "#ded9ca"
  ink-muted: "#a9a9a9"
  nav-bg: "#0000001a"
  input-border: "#ded9d4"
typography:
  display:
    fontFamily: trajan-sans-pro, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: "-0.6px"
  subheading:
    fontFamily: GeneralSans, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
    letterSpacing: "-0.32px"
  body:
    fontFamily: GeneralSans, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  nav:
    fontFamily: trajan-sans-pro, sans-serif
    fontSize: 12.06px
    fontWeight: 500
    lineHeight: 18.09px
    letterSpacing: "-0.2412px"
  button-secondary:
    fontFamily: trajan-sans-pro, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.72px
  input:
    fontFamily: GeneralSans, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
components:
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    padding: 0px 24px
    height: 36px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.primary}"
    padding: 0px 24px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 16px 0px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 70px 0px 16px
    height: 38px
    borderColor: "{colors.input-border}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    padding: 24px 0px 30px
    borderColor: "{colors.input-border}"
---

## Overview

The measured page is the home page of blackivorycoffee.com, titled "The World's Rarest Coffee. Naturally Refined By Elephants." It sells Black Ivory Coffee, which the page describes as the world's only elephant-refined coffee: elephants in rural Surin province in northeast Thailand eat ripe Arabica cherries and a natural fermentation follows, giving notes of cacao, date, plum and pu'erh tea with a lingering sugarcane finish. The site is a Shopify-style store with a short menu (All Products, Black Ivory Coffee, Mahout's Blend, Q&A, Press, Sustainability, Contact), a "SHOP ONLINE" link, Search, Account and a cart counter.

The look is luxury-editorial. The first screen is a full-bleed film-like image of a tree silhouette and an elephant in amber dust, with a wide-tracked serif-flavoured headline and a single outlined button, "Explore the Collection". Below it a dark chocolate-textured band lists flavour notes in large capitals (Velvety chocolate, Seductive dark berries, Tangy tamarind, Fragrant cacao and spices), then a warm cream band pairs an elephant portrait with a short explainer and a "Learn More" text link. Further down are sections on rarity (each annual harvest yields only a few hundred kilograms), sustainability, gifting, two product lines (Black Ivory Coffee and Mahout's Blend), four priced products from $90 to $900, an FAQ and a black footer.

The voice is hushed and aspirational: short capitalised statements ("A STORY IN EVERY SIP", "THE MOST COVETED COFFEE ON EARTH") followed by one or two plain sentences. Prices are shown in dollars.

## Colors

The canvas is a warm bone color, #f1efe8, which the theme also exposes as its background variable. Text on it is pure black (#000000), the most-read text color by character count. The second large area color is black itself: the dark photographic bands and the footer are #000000, and white (#ffffff) carries text and 1px button outlines over them. A deeper cream, #ded9ca, appears as a panel color, and #ded9d4 is the border color of the search input and the footer rule. Secondary text on black is #a9a9a9, with a few #b0b0b0 and #929292 items for dimmer labels.

The header is nearly transparent: its measured fill is #0000001a, a 10% black veil so the white menu text stays legible over the hero. A 30% black scrim (#0000004d) also appears in measured areas as an overlay layer.

Primary is declared as white because the only branded call-to-action measured, the outlined "Explore the Collection" link, is white text and a white 1px border on image or black. The extractor's own first guess at a primary button was the live chat widget ("Chat", a #000000b3 pill with a 19.69px radius), which is a third-party support control; it was removed from the tokens and is not part of the brand UI. Other palette variables in the theme root belong to apps or are not visible in the capture: the review-widget copper #B87333, Swiper's #007aff and a "goldDark" #7C644A. They are not used here.

## Typography

Two typefaces carry everything. trajan-sans-pro, a Trajan-inspired sans loaded at weight 400 (the header measures 500), sets headlines, navigation and buttons; GeneralSans, loaded at 400, 500 and 700, sets body, product titles, inputs and the footer. The pairing gives classical, inscription-like capitals for the brand voice and a neutral grotesque for reading.

Measured values: the hero h2 is 20px, weight 400, with a 26px line height and -0.6px letter spacing; product titles ("The Treasure 40 g") are GeneralSans 16px with a 20.8px line height and -0.32px tracking; body paragraphs are 18px with a 27px line height; navigation is 12.06px weight 500 with -0.2412px tracking; buttons are 12px with +0.72px tracking, which gives the spaced small-capital look; inputs are 12px. The page's actual h1 is the logo mark, an empty-text element 55px wide, so the h2 headline is used for display. Character counts favour 16px, 12px and 18px, with 20px, 24px and 30px used sparingly.

## Layout

The page is 1280px wide and 7922px tall. Sections are full-bleed bands of equal visual weight, each roughly one image tall: hero (about 600px at the 960px capture width), the dark flavour band, then a 50/50 split of elephant portrait and text on the cream canvas. The header is overlaid on the hero in three groups: menu and shop link at left, the stacked logo mark in the center, search, account and cart at right.

Text blocks are narrow and left-aligned inside the split sections, centered in the hero and flavour bands. The flavour band places four label-and-value columns in a row, with the active one in white and the others dimmed. Spacing values in use are small: 3, 4, 5, 6, 8, 10, 12 and 16px for components, with 24px horizontal padding for the nav and buttons. The theme defines a spaced-section variable of 5rem for vertical rhythm between sections.

## Elevation & Depth

Depth comes from photography, scrims and transparency, not from shadow. The header is a 10% black veil, hero imagery darkens toward the bottom so the headline can sit on it, and the dark band uses a vignetted chocolate image. Cards and buttons in the brand's own sections are flat. The only measured shadow stack (five soft layers from 5% to 8% black) belongs to the third-party chat pill and is not declared as a brand token. Hover feedback in the theme is handled through color variables such as a secondary button hover text of rgb(209, 209, 209), not elevation.

## Shapes

Brand controls are square-cornered: the outlined button has a 0px radius and a 1px solid white border, the search input has a 0px radius and a 1px solid #ded9d4 border, and the header and footer are rectangles. Round shapes (50% radius) appear on nine small elements such as slider dots and icon holders. Imagery is rectangular and bleeds to the viewport edge. The one larger radius on the page, 19.69px, belongs to the chat widget and is excluded.

## Components

Outlined button: white 12px trajan-sans-pro text with 0.72px tracking, 24px horizontal padding, 36px height and a 1px white border; used for "Explore the Collection" and "See the coffee collection". Text link: a short underlined label in small capitals, as in "Learn More", "BROWSE THE COLLECTION" and "SEE OUR SUSTAINABILITY PLEDGE".

Header: 10% black veil, white 12.06px labels with 16px vertical padding, a hamburger "MENU" control, and a cart label with a count in brackets, "(0)". Flavour selector: four columns, each a small label (FLAVOUR, NOTES, FINISH, AROMA) over a large capitalised value in trajan-sans-pro, with the current one at full white. Product card: GeneralSans title, "Regular price" and a dollar amount. Search input: 330px wide, 38px high, 16px left padding, 1px #ded9d4 border. Footer: black, 24px top and 30px bottom padding, 12px GeneralSans, with a welcome line and the tagline. The "Chat" button at the lower right is a customer-support widget, not brand UI.

## Design System Architecture

No public design system or brand guideline was found on the pages opened; the home page links to Q&A, Press, Sustainability and Contact only. The de-facto system is a Shopify theme exposing its settings as CSS custom properties: --color-background (241,239,232), --color-button (0,0,0), --color-button-text (255,255,255), --font-heading-family and --font-body-family (trajan-sans-pro and GeneralSans), --font-button-letter-spacing (0.6em), --font-heading-line-height (1.3), --spaced-section (5rem), plus per-component scale variables (heading card scale 1.09, header menu scale 1.34). Colors are stored as bare RGB triplets so they can take alpha. Third-party apps (a product-review widget, a Shopify chat widget, a Swiper slider) add their own variables.

## Do's and Don'ts

Do let a single cinematic image own each band, with one short statement and one outlined button. Do set headlines and buttons in trajan-sans-pro capitals with open tracking and body in GeneralSans. Do keep the canvas the warm #f1efe8 and use pure black for the dark bands and footer.

Don't fill buttons with solid brand color; the pattern is a 1px outline. Don't round corners on controls. Don't add drop shadows. Don't use the review-copper or Swiper blue found in the theme root. Don't reproduce the chat widget, or any other support or cookie overlay, as part of the brand.

## Responsive Behavior

A 390px mobile measurement exists, and its h1 role reads the same logo element at 30px with an empty text, so no mobile type change can be reported from it. The theme's navigation is a hamburger "MENU" control plus a drawer at desktop width (not measured at mobile width). Large images are full-bleed; narrow-screen behaviour of the 50/50 split block was not captured and is not asserted.

## Iteration Guide

Start from #f1efe8 and black, and give every section a single full-bleed image. Use trajan-sans-pro for any heading or button (20px with -0.6px tracking for the hero line, 12px with +0.72px for buttons) and GeneralSans 18px with 27px line height for body. Build buttons as 36px-high rectangles with a 1px white border and 24px side padding, text-only links in small capitals. Keep the header translucent with a 10% black fill, and use #ded9ca for quiet panels. Keep copy short and declarative, with prices shown plainly in dollars and rarity stated as fact. Measure anything new with the extractor before adding it, and capture pages with support widgets hidden or ignored.
