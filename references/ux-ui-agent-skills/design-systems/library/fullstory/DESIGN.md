---
version: alpha
name: Fullstory
category: "Product & SaaS"
description: "Fullstory's fullstory.com site: deep teal #0a2828 / #0e3c3c / #135050 bands with white text, neulis-neue display type (62px regular hero) over neulis-sans body (20px/30px), green #11ab85 uppercase 4px-radius 'GET A DEMO' buttons (hover #059573), and a three-color product code: green #07c799, pink #ff6f94 and purple #9e36f1 on 10px-radius outlined cards."
colors:
  canvas: "#0a2828"
  surface-teal: "#135050"
  surface-teal-mid: "#0e3c3c"
  surface-white: "#ffffff"
  surface-mint-light: "#f3fcfa"
  surface-grey: "#f3f6f6"
  surface-mint: "#c1f1e6"
  surface-lilac: "#e1bbff"
  ink: "#ffffff"
  ink-dark: "#000000"
  ink-teal: "#0e3c3c"
  primary: "#11ab85"
  on-primary: "#ffffff"
  primary-hover: "#059573"
  product-green: "#07c799"
  product-pink: "#ff6f94"
  product-pink-light: "#ffb7ca"
  product-purple: "#9e36f1"
  product-purple-dark: "#7729b5"
  product-lilac: "#d49eff"
  pink-fill: "#ff93af"
  card-border: "#c4d3d3"
  footer-border: "#888888"
typography:
  display:
    fontFamily: neulis-neue, sans-serif
    fontSize: 62px
    fontWeight: 400
    lineHeight: 68.2px
  display-mobile:
    fontFamily: neulis-neue, sans-serif
    fontSize: 50px
    fontWeight: 400
    lineHeight: 55px
  heading:
    fontFamily: neulis-neue, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 38.4px
  card-title:
    fontFamily: neulis-neue, sans-serif
    fontSize: 38.4px
    fontWeight: 700
    lineHeight: 46.08px
  eyebrow:
    fontFamily: neulis-neue, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.8px
    textTransform: uppercase
  body:
    fontFamily: neulis-sans, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: neulis-sans, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 36px
    textTransform: uppercase
  button-small:
    fontFamily: neulis-sans, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18.2px
    textTransform: uppercase
  nav:
    fontFamily: neulis-sans, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.2px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 16px
  2xl: 50px
  3xl: 80px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 17.6px
  s6: 19.2px
  s7: 20px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 32px
    height: 64px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    borderColor: "{colors.primary-hover}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 46px
  button-outlined:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 39px
    border: "1px solid #ffffff"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-teal}"
    typography: "{typography.nav}"
    height: 84px
  card:
    textColor: "{colors.product-green}"
    typography: "{typography.card-title}"
    rounded: "{rounded.lg}"
    padding: 0px 30px 16px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.surface-teal}"
    textColor: "{colors.ink}"
    padding: 32px 0px 0px
    borderColor: "{colors.footer-border}"
---

# Fullstory — fullstory.com

## Overview

Fullstory's home page (https://www.fullstory.com, title "Fullstory | The Intelligent Digital Experience Company") presents behavioral analytics as "Intelligent digital experiences. Powered by human context." The page is built from stacked bands of deep teal — `#0a2828`, `#0e3c3c` and `#135050` — interrupted by a vivid purple-pink-orange gradient panel, pale mint and grey content bands, and a lilac strip at the very bottom. Type is rounded and friendly; color is coded per product.

The capture opens with a white header (Fullstory wordmark with its burst icon, Platform, Solutions, Plans & Pricing, Resources, a purple "Log in" link and a green **GET A DEMO** button) above a lilac announcement strip ("Benchmark your digital experience against 18B+ sessions."). The hero on `#0a2828` sets the 62px headline in light lilac neulis-neue, a short white paragraph, a large green **GET A DEMO** and a "Watch the video →" link. A `#0e3c3c` logo band ("The most trusted name in AI analytics": TBC, Caesars, zipcar, Fanatics) leads to "OUR PRODUCTS" on `#135050`: three outlined cards — **Customer Journey** in green, **Employee Experience** in pink, **Data Activation** in purple — each with a matching round icon and "Fullstory Analytics →" style links. A "BEHAVIORAL INTELLIGENCE" gradient panel holds four white cards (AI Agents, Fullstory MCP, StoryAI Opportunities, Workflow Intelligence), then feature rows with pill labels (Fullcapture, StoryAI, Guides and Surveys) and pink-lilac headlines, a mint "SOLUTIONS" tab section (Retail, Food & Bev, Travel, FinServ, Gaming, SaaS), customer story photo cards with teal overlays (Klarna, Chipotle, Pizza Hut), "Additional resources" blog cards with purple "Read the blog →" links, and a `#135050` footer above the lilac legal strip.

## Colors

All values are measured in `web/data/extracted/fullstory.json`.

- **Canvas `#0a2828`** — the background with the largest measured area and the hero; with **surface teal `#135050`** and **surface teal mid `#0e3c3c`** it makes up the dark bands. The `body` element itself is white (`surface-white #ffffff`), seen in the header and light sections.
- **Ink `#ffffff`** — the most-read text color, on the teal bands; **ink dark `#000000`** — text on white and light bands; **ink teal `#0e3c3c`** — header nav text.
- **Primary `#11ab85`** — the GET A DEMO fill and border; hover **`#059573`**.
- **Product colors** — green **`#07c799`** (Customer Journey / Analytics), pink **`#ff6f94`** with light **`#ffb7ca`** (Employee Experience / Workforce), purple **`#9e36f1`** with dark **`#7729b5`** and lilac **`#d49eff`** (Data Activation / Anywhere, links, headline tints). **Pink fill `#ff93af`** and **lilac `#e1bbff`** are their background versions (icons, the announcement and legal strips).
- **Light bands** — **`#f3fcfa`** (solutions), **`#f3f6f6`** (resources), with **`#c1f1e6`** mint for the active industry tab and solution rows.
- **Card border `#c4d3d3`** and **footer border `#888888`**.
- The hero headline carries a measured layered gradient: `linear-gradient(210deg, rgba(7, 199, 153, 0.3) …)` over `linear-gradient(102deg, rgba(162, 60, 240, 0.3), rgba(255, 32, 89, 0.3) 67.77%, rgba(255, 184, 99, 0.3) 103.65%)`.

## Typography

Two related families, loaded as web fonts:

- **neulis-neue** (200, 400, 500, 700) for display: hero 62px / 68.2px at 400; section heads 32px / 38.4px at 300 ("The most trusted name in AI analytics"); product card titles 38.4px / 46.08px at 700; uppercase 14px / 16.8px at 700 for eyebrows and footer column titles ("OUR PRODUCTS", "SOLUTIONS", "PLATFORM").
- **neulis-sans** (300, 400, 500, 700) for text and UI: body 20px / 30px at 400; nav 14px / 18.2px at 500; buttons uppercase at 700 — 20px / 36px large and 14px / 18.2px small.

Measured sizes by character count: 20px, 14px, 16px, 36px, 24px, 48px, 22px, 62px, 38.4px, 20.8px, 32px. Both families are commercial; fall back to `sans-serif` as the stack does, keeping the rounded, geometric feel by choice of a similar face.

## Layout

At 1280px the header spans x = 336 to x = 1208 and the hero copy x = 72 to x = 640 (left half). Measured bands: white header (121px), `#0a2828` hero (603px), `#0e3c3c` logos (208px, 4 columns), `#135050` products (1,024px, 3 columns), `#0a2828` AI features (1,882px), `#f3fcfa` solutions (840px, 6 tabs), a media band of customer stories, `#f3f6f6` resources (653px, 3 columns), `#135050` footer (682px, 6 columns) and a media strip. Gaps cluster at 16px, 44px and 48px; paddings at 16px, 24px, 30px, 40px and 32px.

## Elevation & Depth

No box-shadows were measured. Depth comes from the stepped teal bands, the saturated gradient panel behind the "BEHAVIORAL INTELLIGENCE" cards, white cards on that panel, and teal photo overlays on customer stories. Cards on dark bands are outlined with 1px `#c4d3d3` borders rather than lifted.

## Shapes

Buttons are nearly square: **4px** (`rounded.xs`) on GET A DEMO, **6px** on outlined buttons. Product cards and content cards use **10px**; images and tabs **8px** and **16px**. Pill labels ("Fullcapture", "StoryAI") and the industry tab track use **50px** and **80px**; one decorative element measures `0px 0px 120px 120px`.

## Components

- **Primary button** — `#11ab85` with a 2px matching border, white neulis-sans 20px bold uppercase, 4px radius, padding 12px 32px, 64px tall; hover `#059573`.
- **Small button** — the same at 14px, padding 12px 20px, 46px tall (header).
- **Outlined button** — transparent, white text, 1px white border, 6px radius, padding 8px 16px, 39px tall ("START NOW").
- **Product card** — outlined 1px `#c4d3d3`, 10px radius, padding 0px 30px 16px, round colored icon on top, 38.4px bold title in the product color, white description and a colored arrow link.
- **Feature pill label** — a light pill with dark text and a small sparkle ("Fullcapture").
- **Industry tabs** — a rounded track with a `#c1f1e6` active tab in green text.
- **Story card** — full-bleed photo with teal overlay, brand logo, white headline and "Read their story →".
- The "Storybot" assistant panel in the hero is a chat widget and is not documented as brand UI.

## Design System Architecture

No public design system or brand guideline was found among the pages opened: https://www.fullstory.com/brand/ and https://www.fullstory.com/company/news/ returned 404. The site's root custom properties belong to the Osano consent manager (`--osano-*`), not to Fullstory's brand. The de-facto system visible in the shipped styles is: three teal surfaces, one green action color with a darker hover, a per-product color triad (green / pink / purple) applied to icons, titles and links, the neulis-neue + neulis-sans pairing, uppercase bold buttons with 4px corners, and 10px-radius outlined cards.

## Do's and Don'ts

**Do**
- Build pages from stacked `#0a2828`, `#0e3c3c` and `#135050` bands with white text.
- Use `#11ab85` uppercase bold buttons with 4px corners for the main action.
- Color-code products: green `#07c799`, pink `#ff6f94`, purple `#9e36f1`.
- Set headlines in neulis-neue at 300–400; reserve 700 for card titles and eyebrows.
- Use pale `#f3fcfa` / `#f3f6f6` bands for solutions and resources.

**Don't**
- Don't round buttons into pills; pills are for labels and tabs.
- Don't mix product colors within one product's card.
- Don't add drop shadows; use 1px outlines and band contrast.
- Don't treat the Osano consent variables or the chat widget as brand UI.

## Responsive Behavior

The 390px mobile pass recorded the hero headline at 50px / 55px (down from 62px / 68.2px), the section head unchanged at 32px / 38.4px at 300, one visible header link with a menu toggle labelled "Open Mobile Menu", a 143px white header band and a 707px `#0a2828` hero with content from x = 24 to x = 366. Mobile font sizes by frequency: 16px, 14px, 30px, 20px, 24px, 38px, 22px, 50px. The stylesheet's main breakpoints are min-width 768px, 1024px and 1200px, with others at 576px and 1800px. Other reflow behavior was not measured.

## Iteration Guide

1. Start with a `#0a2828` hero, white neulis-sans 20px / 30px text and a lilac-tinted neulis-neue 62px headline.
2. Add a `#11ab85` 64px uppercase button (4px radius) and a white text link with an arrow.
3. Follow with `#0e3c3c` and `#135050` bands; present products as outlined 10px-radius cards in their product color.
4. Switch to `#f3fcfa` / `#f3f6f6` for light content sections with mint `#c1f1e6` highlights.
5. Close with a `#135050` footer and a lilac `#e1bbff` legal strip.
6. Measure any value not in the frontmatter before adding it.
