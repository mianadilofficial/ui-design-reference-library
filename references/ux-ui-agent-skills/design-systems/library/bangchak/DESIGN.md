---
version: alpha
name: Bangchak Corporation
category: "Thai Brands"
description: "Bangchak Corporation (bangchak.co.th/en), a Thai energy group: a white page with BCP black #2d2926 ink, green #3aa537 to lime #91bd27 gradient pill links with 30px radius, DB Ozone X at 65px light hero titles and 700-weight 22 to 36px text, dark photographic heroes and translucent stat cards."
colors:
  canvas: "#ffffff"
  ink: "#2d2926"
  primary: "#3aa537"
  on-primary: "#ffffff"
  primary-light: "#91bd27"
  brand-green: "#48a23f"
  brand-lime: "#84bd00"
  brand-orange: "#ea7600"
  brand-light-orange: "#ffb81c"
  brand-turquoise: "#00b2a9"
  brand-blue: "#0047bb"
  brand-gray: "#888b8d"
  brand-light-gray: "#bbbcbc"
  surface-black: "#000000"
  surface-light: "#efefef"
  surface-dark: "#22201f"
  neutral-300: "#cecfce"
  ink-body: "#212529"
  ink-muted: "#8e8e8e"
  accent-red: "#ff0000"
  hairline: "#dee2e6"
  card-overlay: "#0000004d"
  card-border: "#505050"
typography:
  display:
    fontFamily: "\"DB Ozone X\""
    fontSize: 65px
    fontWeight: 400
    lineHeight: 52px
  subheading:
    fontFamily: "\"DB Ozone X\""
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
  body:
    fontFamily: "\"DB Ozone X\""
    fontSize: 22px
    fontWeight: 700
    lineHeight: 26.4px
  nav:
    fontFamily: "\"DB Ozone X\""
    fontSize: 20px
    fontWeight: 700
    lineHeight: 26.4px
  link:
    fontFamily: "\"DB Ozone X\""
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
rounded:
  xs: 3.8px
  sm: 4px
  md: 4.8px
  lg: 10px
  xl: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 30px
  s9: 32px
  s10: 45px
components:
  button-pill:
    backgroundGradient: "linear-gradient(90deg, #3aa537, #91bd27, #91bd27, #3aa537)"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 10px 30px
    height: 50px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 3px 10px 0px
  nav:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    padding: 20px 15px
    height: 110px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  stat-card:
    backgroundColor: "{colors.card-overlay}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.lg}"
    padding: 20px
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.on-primary}"
---

## Overview

Bangchak Corporation is a Thai energy group (refining, fuel retail, biofuels, power, new businesses), and its English corporate site at bangchak.co.th/en presents itself with the "Greenovation" tagline: "Towards Becoming a Leading Asian Greenovation Group for Sustainable Future". The page is an investor-and-stakeholder portal, not a consumer shop: it carries a multi-level menu (The Leading Greenovation Group, About Bangchak, Corporate Governance, Sustainability, Investor Relations, Career, News, Contact), an oil price widget, a stock widget and a "Can we help?" link block.

The page opens with a dark, full-bleed hero carousel with five rotating slides (the first reads "Towards Becoming a Leading Asian Greenovation Group for Sustainable Future" in white 65px light type; the others are "World-class Complex Refinery", "Good Corporate Governance as a Foundation of Sustainable Business Development", "Greenovate Our Tomorrow" and "Winnonie - Greenovation for Better Livelihood of Motorbike Taxi Riders"). A 110px header floats over it with a white wordmark, small bold navigation, a "TH" language switch, a search icon and a menu icon. A black memorial tribute lightbox (a black-and-white portrait with Thai text, "สถิตอยู่ในใจตราบนิรันดร์") was open over the captured hero; it is an overlay and is not documented as brand UI.

Below the hero the page turns white. "Bangchak Group Business" appears as a small bold eyebrow above the 5-line headline "To be the Leading Asian Greenovation Group", with a thin green outline drawing of a leaf or droplet shape overlapping the text. Beside it a horizontal slider shows business groups as photo collages with bold captions (Refinery, Marketing and Biofuels Business Group; Trading Business Group; Upstream; Power and Infrastructure; New Businesses and Holdings; Frontier Technology & BiiC). An "At a Glance" row of three translucent dark cards with count-up numbers ("The refining capacity", "Service Station", "Operates Business") sits on a photographic background, followed by a green-gradient "The Bangchak Way" band with a circular image, a quote mark and a gradient "Explore Here" pill. After that come "Sustainability Performance" and "What's Happening at Bangchak" news-card rows with green "Explore More" pills, oil-price and stock widgets, an "Everlasting Economy" feature, and a dark footer with Download Center, Career, Member Club, hotline 1651 and social icons.

The voice is corporate and aspirational: abstract nouns (Greenovation, Sustainability, Governance), capitalized program names and short pill labels ("Explore More", "Get Direction", "Stock Information").

## Colors

The brand palette is published: the Bangchak Logo page (https://www.bangchak.co.th/en/download-center/bangchak-logo) lists nine "BCP" colors with RGB and CMYK values and no hex codes, which are converted here as plain arithmetic. The live page uses a slightly different green than the logo green.

- **canvas #ffffff** — page background of the content bands.
- **ink #2d2926** — "BCP Black" (R45 G41 B38); the most-read dark text color (876 characters in the latest pass) and a background in 413 area units.
- **primary #3aa537** — the green measured on the live page: the navigation link color and the first and last stops of the pill gradient `linear-gradient(90deg, rgb(58, 165, 55), rgb(145, 189, 39), rgb(145, 189, 39), rgb(58, 165, 55))`.
- **primary-light #91bd27** — the gradient's middle stops (91 uses in the stylesheet).
- **brand-green #48a23f, brand-lime #84bd00, brand-orange #ea7600, brand-light-orange #ffb81c, brand-turquoise #00b2a9, brand-blue #0047bb, brand-gray #888b8d, brand-light-gray #bbbcbc** — the published BCP Green (R72 G162 B63), Lime Green (132, 189, 0), Orange (234, 118, 0), Light Orange (255, 184, 28), Turquoise (0, 178, 169), Blue (0, 71, 187), Gray (136, 139, 141) and Light Gray (187, 188, 188). Their use on the measured home page was not mapped except where the green tones appear.
- **surface-black #000000** — hero and tribute-lightbox fields (1024 area units); **surface-dark #22201f** (165) and **surface-light #efefef** (277) are the other measured section backgrounds; **neutral-300 #cecfce** (16).
- **ink-body #212529** — 217 characters; this is the Bootstrap body color inherited by the page's framework styles, not a Bangchak-specific value.
- **ink-muted #8e8e8e** — 23 characters of muted text; **hairline #dee2e6** — 28 measured borders, also a Bootstrap default border color.
- **accent-red #ff0000** — 24 characters of red text; the element was not identified.
- **card-overlay #0000004d and card-border #505050** — the translucent stat-card fill and its 1px border.

White is the most-read text color (2075 characters) because the hero, stat cards and footer sit on dark fields. The CSS declares Bootstrap's blue (#007bff) and other framework colors as root variables; none is used as Bangchak brand color.

## Typography

One typeface: **DB Ozone X** (3226 characters measured), loaded in weights 300, 400, 500 and 700 from the site's own `build/fonts-db_ozone_x_*` files, with Font Awesome 5 and an icomoon font for icons. Arial appears for 85 characters, and Sarabun is requested from Google Fonts. The type covers Thai and Latin in the measured copy. The official logo page lists no typeface, and the site names no substitute stack beyond the Arial occurrences, so any substitute is a judgement.

- **display — 65px / 52px, 400.** The hero title in white; the line height is 80% of the size.
- **subheading — 36px / 43.2px, 700.** Business-group captions in #2d2926.
- **body — 22px / 26.4px, 700.** The "Bangchak Group Business" eyebrow in #212529, and the nav-link measurement (22px / 700).
- **nav — 20px / 26.4px, 700.** The header navigation.
- **link — 20px / 30px, 700.** Pill-button labels.

Sizes by character count: 22px (881), 18px (509), 20px (479), 26px (417), 65px (376), 36px (326), 30px (144) and 16px (64). Weights: 700 (1433), 400 (1285), 500 (592), and 100 (1). Weight 700 is the working weight for UI and headings; weight 400 is reserved for large display.

## Layout

The desktop page is 1280px wide and 9209px tall. Header: 110px high with `20px 15px` padding. The structure is a stack of full-width bands: hero carousel, white business section with a two-column intro (text left, photo-collage slider right), stats on a photo background, the green gradient "Bangchak Way" band, white news sections, a widgets row (oil price table, stock chart, feature cards), a refinery image tile and the footer. The capture shows large empty vertical gaps between some sections. Measured paddings: 1px (48 elements), 5px (43), 30px (31), 15px (28), 10px (10), 50px (9), 20px (8) and 100px (5). The stat card is 223px wide by 257px tall.

## Elevation & Depth

Shadows are soft and sparse: `rgba(0, 0, 0, 0.2) 0px 3px 10px 0px` on 8 elements (the pill links) and `rgba(0, 0, 0, 0.15) 0px 8px 16px 0px` on 2. The hero is darkened to carry white type; stat cards are translucent (#0000004d) over photography, with a 1px #505050 border; the white sections are flat with #dee2e6 hairlines (28 measured).

## Shapes

Round and soft. Pill links and some buttons use 30px (8 elements), the stat cards use 10px, small controls use 4px, 4.8px and 3.8px, and circles (50%, 14 elements) are used for circular images and carousel controls. Five elements have a `0px 20px 0px 0px` radius (one rounded corner on card images) and one has `3.8px 3.8px 0px 0px`. The leaf-loop outline over the headline is a thin green line shape.

## Components

**Gradient pill link.** Text #ffffff in DB Ozone X 700 at 20px / 30px, background `linear-gradient(90deg, #3aa537, #91bd27, #91bd27, #3aa537)`, radius 30px, padding `10px 30px`, height 50px, shadow `rgba(0, 0, 0, 0.2) 0px 3px 10px 0px` ("About Bangchak" measures 166px wide). "Explore More" and "Explore Here" use the same green pill in the capture.

**Header navigation.** 110px, white 20px / 700 text over the hero, with a green link color (#3aa537) measured on the nav anchors; a "TH" language switch, a search icon and a three-dot menu icon.

**Stat card.** Translucent #0000004d, 1px #505050 border, radius 10px, padding 20px, 223px by 257px, white 22px text with a large number (the extracted text reads 0 for each figure); an icon sits above each.

**News card.** Photograph with a bold dated caption; three cards in "Sustainability Performance", four in "What's Happening at Bangchak".

**Widgets.** An oil price table with brand logos and prices, and a BCP stock chart with a "Stock Information" action.

**Footer.** Dark field with the "Can we help?" heading (36px / 700, white), link columns (Download Center, Career, Bangchak Group Contact, Quick Links, Bangchak Member Club, Promotions, Bangchak Mobile App, Sitemap, Contact, Oil Price Widget, Baimaipunsook Foundation), the hotline "1651" and social icons.

Hover and focus states were not captured (only the lightbox close button, whose opacity goes from 1 to 0.75, was recorded and is not brand UI).

## Design System Architecture

Bangchak publishes brand assets but not a design system. The Download Center page https://www.bangchak.co.th/en/download-center/bangchak-logo offers logo files (Color Logo - Vertical and Horizontal in AI and PNG, Single Color Logo - Horizontal and Vertical in AI) and a "Logo System" PDF (13.02 MB, not opened), and lists the nine BCP colors; https://www.bangchak.co.th/en/document/toolkits is a navigation page with no listed toolkits, colors or typefaces. No public UI design system exists.

The site's de-facto system is a Bootstrap-based theme: the root exposes Bootstrap's variables (`--primary: #007bff`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`) while brand values are literals in `/assets/app.d428c.css`. The page comment credits Optiwise as its builder, the stylesheet bundle is `node.5416a.css`, `vendor.9f44c.css` and `app.d428c.css`, and a OneTrust consent script is loaded. Media queries in the app stylesheet: `max-width: 1199.98px` (124 rules), `max-width: 767.98px` (112), `max-width: 991.98px` (64), `max-width: 1559.98px` (23), `min-width: 992px` (15) and `min-width: 768px` (13).

## Do's and Don'ts

- Do use #2d2926 (BCP Black) for text on white and white on dark photographic fields.
- Do style the main call to action as a 50px green-to-lime gradient pill with 30px radius, white 700-weight label and the soft 3px 10px shadow.
- Do use DB Ozone X at 65px weight 400 for hero titles and weight 700 for everything else.
- Do keep stat cards translucent (#0000004d) with a 1px #505050 border over imagery.
- Do reserve the published secondary palette (orange, light orange, turquoise, blue) for charts and highlights as the logo page lists them.
- Don't use Bootstrap's #007bff or #212529 defaults as brand colors.
- Don't use the memorial lightbox, consent banners or the bot-wall page as brand UI.
- Don't set hero titles in bold; the measured display weight is 400.
- Don't use square buttons for the main call to action; the measured radius is 30px.

## Responsive Behavior

Not measured. The mobile pass of the extractor was served a bot-wall page ("We apologize for the inconvenience... ...but your activity and behavior on this site made us think that you are a bot."), so no mobile values were recorded for the real site, and the generated mobile typography was discarded. The stylesheet declares the breakpoints listed above (768px, 992px, 1200px and 1560px). The way the hero, slider and card rows reflow at those widths was not measured.

## Iteration Guide

1. Start from white, #2d2926 text, and the green pair #3aa537 / #91bd27; check any other hue against the published BCP palette before use.
2. Set everything in DB Ozone X; 65px / 400 for hero, 36px / 700 for headings, 22px / 700 for body emphasis.
3. Build calls to action as 50px gradient pills with 30px radius.
4. Use full-bleed dark photographic heroes with white type and translucent stat cards.
5. Re-measure mobile before documenting responsive rules.
6. Gate with `node web/scripts/verify-designs.mjs --slug=bangchak`.
