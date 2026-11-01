---
version: alpha
name: BTS Skytrain
category: "Thai Brands"
description: "BTS Skytrain (bts.co.th/eng) is Bangkok's elevated-rail operator site, set entirely in Sarabun, with a royal-blue #2758aa header and footer, a signal-green #189008 action colour for Search buttons and hover states, white cards with 5px to 10px radii and a soft 0 2px 7px shadow, and full-bleed promotional posters."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  ink-body: "#2e383c"
  ink-link: "#333333"
  ink-secondary: "#3f3f3f"
  ink-muted: "#9f9f9f"
  primary: "#189008"
  on-primary: "#ffffff"
  brand-blue: "#2758aa"
  brand-blue-deep: "#20498e"
  brand-blue-tint: "#2758aa1f"
  text-light-blue: "#96cfff"
  text-lime: "#76b82a"
  hairline: "#f2f2f2"
  placeholder: "#999999"
  text-input-border: "#e0e0e0"
typography:
  display:
    fontFamily: Sarabun, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 30.8px
  subheading:
    fontFamily: Sarabun, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 19.8px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
  nav:
    fontFamily: Sarabun, sans-serif
    fontSize: 13px
    fontWeight: 400
    letterSpacing: 1px
  link:
    fontFamily: Sarabun, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: Sarabun, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1429px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 20px
  3xl: 44px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 15px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 1px 6px
    height: 33px
  button-secondary:
    backgroundColor: "{colors.brand-blue-tint}"
    textColor: "{colors.brand-blue}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.2xl}"
    padding: 10px 15px
    height: 37px
  shortcut-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-link}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 10px
    boxShadow: rgba(0, 0, 0, 0.12) 0px 2px 7px 0px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 3px 8px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.placeholder}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 8px 10px
    height: 37px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-link}"
    rounded: "{rounded.sm}"
    padding: 24px
  footer:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.canvas}"
---

## Overview

BTS Skytrain is the English home page of the Bangkok elevated-rail operator, https://www.bts.co.th/eng/index.html (page title "BTS Skytrain", document language attribute `th`). The site is a transit service portal: its first job is to get a passenger from "where am I" to "route, fare, timetable", and its second job is to advertise ticket promotions. The page is 1,280px wide and 3,883px tall in the desktop capture.

The look is set by two brand colours and one typeface. Royal blue `#2758aa` fills the top utility bar and the footer; a deeper blue `#20498e` is the pressed and header-box colour in the shipped CSS; signal green `#189008` is the action colour (the Search button, the hover colour on every link, the green icon squares on the shortcut tiles). Everything else is white. The only typeface is Sarabun, a Thai-and-Latin family, loaded from Google Fonts at weights 100 to 800.

The capture shows, from the top: a blue utility bar with small white links (Home, BTS E-Library, News & Activities, Safety Information on the left; Join BTS, Contact Us, FAQs and an "EN" language pill with a globe icon on the right); a white main bar with the red-and-blue BTS logo and uppercase menu items (ABOUT US, CARD INFO, SERVICE INFO, BUSINESS & SERVICE, TRIP PACKAGES, PROMOTIONS); a full-width carousel poster ("XTREME SAVINGS — Short distance package") with previous and next arrows; a "Routes and Fares" band over a dark photograph of a train, holding a white journey-planner card (Origin, Destination, green Search button) beside six white shortcut tiles (Route and Fares, Places and Activities, Area Map, Park & Ride, Timetable, Lost & Found), each with a green rounded-square icon; a "BTS SKY TRAIN" block with a train illustration and Vision, Mission and Shared values paragraphs; a "Promotions" row of three poster cards with a pale-blue "more" pill; and an "E-Library" band of dark photo cards with white "More" pills.

Voice is plain and institutional: "We aim to be the best mass transit train service provider." Promotional posters are the only expressive element, and they are raster artwork with their own colours (orange and blue 3D lettering), not UI tokens.

## Colors

Measured from the rendered page and its shipped CSS:

- **Green `#189008` (primary).** Fill of the "Search" button (293px wide, 33px tall), and the colour every shortcut link turns on hover (measured on Route and Fares, Places and Activities, Area Map, Park & Ride, Timetable, Lost & Found, and the header links Home, BTS E-Library, News & Activities, Safety Information). In `style.css` and `home2.css` it also fills the hover, active and focus state of the left top-bar links (`border-radius: 50px`), appears in border rules (`2px solid`, `3px solid`, a `4px` left border and a `6px` bottom border) and colours text.
- **Blue `#2758aa` (brand-blue).** Header utility bar and footer fill (353 units of area, second to white). Also the text colour of the "more" pill, over its own tint `#2758aa1f`.
- **Deep blue `#20498e` (brand-blue-deep).** Declared in `style.css` as the background of `.box-header1` and the hover and focus fill of `.btn-page`; measured on 46 units of background area.
- **White `#ffffff` (canvas, on-primary).** Page canvas, cards, tiles, and text on blue and green.
- **Black `#000000` (ink).** The most-read text colour (2,629 characters). **`#2e383c` (ink-body)** is the body and subheading colour (1,011 characters); **`#333333` (ink-link)** is link and card text; **`#3f3f3f` (ink-secondary)** and **`#9f9f9f` (ink-muted)** (311 characters) are secondary text.
- **`#96cfff` and `#76b82a`.** Text colours measured on 87 and 25 characters respectively; where they sit on the page was not recorded, so they are listed as `text-light-blue` and `text-lime` without a usage claim.
- **Hairlines and inputs.** `#f2f2f2` is the border colour measured on 21 elements; `#e0e0e0` is the input border; `#999999` is the input text.

The shipped CSS also contains Bootstrap 3.3.7 defaults (for example `#337ab7`, 25 occurrences, `#3c763d`, `#8a6d3b`, `#a94442`). The site loads `css/bootstrap.min.css` (header: "Bootstrap v3.3.7"), and those are framework defaults, not brand colours.

## Typography

Sarabun is the only family used: 5,468 of the page's characters, with the fallback `sans-serif`. The page loaded Sarabun at 200, 300, 400, 500, 600 and 700, plus FontAwesome for icons; the stylesheet link requests weights 100 to 800. Weight use by characters: 500 on 2,689, 400 on 1,535, 300 on 745, 700 on 280, 200 on 127, 600 on 92.

Scale: section titles such as "Routes and Fares" measure 28px/30.8px at weight 400 (white over the dark photograph); sub-headings ("Vision", "Mission") 18px/19.8px at weight 500; body paragraphs 14px/24px at weight 300 in `#2e383c`; the Search button 16px at 400; links and inputs 14px/20px at 400; header links 13px at 400 with 1px letter spacing; the "more" pill 12px. By character count: 16px 2,823, 14px 1,483, 12px 512, 20px 280, 13px 157, 18px 106, 26px 45, 30px 36, 28px 26. The 26px size carries a 0.8px letter spacing on 45 characters, 16px carries 0.4px on 70 characters, and 13px carries 1px on 46 characters. The main menu items render in capitals. Sarabun is a free Google Fonts family, so no substitute is needed; the declared fallback is generic `sans-serif`.

## Layout

The page is a stack of full-width bands: utility bar, white main bar (the whole header measures 127px tall), carousel, photo band with the planner, white information band, promotions, and a light-blue E-Library band, then the blue footer (306px tall). Content columns are 960px wide on the measured desktop page (the section title block). The shipped CSS declares Bootstrap 3.3.7's `.container` at 750px from 768px, 970px from 992px and 1170px from 1200px with 15px side padding.

Inside the planner band the white journey card is 341px wide and 292px tall with 24px padding, and the six tiles sit in a 2-column by 3-row grid to its right. Promotion and news cards are 300px wide and 357px tall. Measured gaps cluster on 5px (30 elements), 10px (24), 20px (11) and 30px (3); paddings on 10px (108 elements), 5px, 15px, 20px and 8px. Photography is full-bleed and mostly dark; text on it is white.

## Elevation & Depth

Depth is one soft shadow. `rgba(0, 0, 0, 0.12) 0px 2px 7px 0px` is on 27 elements (the tiles and the poster and news cards); `rgba(0, 0, 0, 0.12) 0px 0px 15px 0px` is on 4 and `rgba(0, 0, 0, 0.1) 0px 1px 10px 0px` on 1. The white cards float over the dark photograph in the planner band because of colour contrast more than shadow. The shipped CSS also carries Bootstrap's `inset 0 1px 1px rgba(0, 0, 0, .075)` and `0 2px 5px 0 rgba(0, 0, 0, 0.2)`; their use on this page was not measured.

## Shapes

Radii measured on the page: 10px on 33 elements, 20px on 25, 8px on 21, `10px 10px 0px 0px` (card image tops) on 21, 5px on 16, 4px on 5, 44px on 4, 12px on 1. Tiles are 10px; the journey card is 5px; poster and news cards are 8px with 10px-rounded image tops; the Search button and inputs are 4px; the "more" pill is 20px; the 44px radius is a pill-scale value measured on four elements. The shipped CSS gives the hover, active and focus state of the left top-bar links a `50px` radius. Icons sit in green rounded squares.

## Components

- **Search button (`button-primary`).** Green `#189008` fill, white Sarabun 16px/400 text, 4px radius, `1px 6px` padding, 33px tall, 293px wide in the planner card.
- **"more" pill (`button-secondary`).** Blue `#2758aa` text at 12px on `#2758aa1f`, 20px radius, `10px 15px` padding, 37px tall, 69px wide; a small trailing chevron.
- **Shortcut tile (`shortcut-tile`).** White, 10px radius, 10px padding, `rgba(0, 0, 0, 0.12) 0px 2px 7px 0px` shadow, 269px wide and 84px tall, Sarabun 14px/400 text in `#333333` that turns `#189008` on hover, with a green icon square at the left.
- **Journey planner card (`card`).** White, 5px radius, 24px padding, a 18px title ("Station and Places"), two select fields ("Select Origin", "Select Destination") and a swap button between them.
- **Text input.** White, 4px radius, `8px 10px` padding, 37px tall, `1px solid #e0e0e0`, 14px text in `#999999`.
- **Header.** Blue utility bar with white 13px links (`3px 8px` padding, 1px letter spacing; hover goes green), then a white bar with the logo and uppercase menu items with dropdown carets.
- **Footer.** Blue `#2758aa`, white 14px/20px text, and a passenger statistics counter.
- **Promotion and news cards.** White, 8px radius, 300px wide and 357px tall, a poster image on top and a 16px/500 caption.

## Design System Architecture

No public or official design system for BTS Skytrain was found; the opened pages (https://www.bts.co.th/eng/index.html and its stylesheets) link to no brand guideline or token package. The de-facto system is a Bootstrap 3 site: the home page loads `css/bootstrap.min.css` (Bootstrap v3.3.7, MIT), `css/swiper/swiper.min.css`, `css/font-awesome.min.css`, `css/themify-icons.css`, jQuery UI's base theme, slick-slider 1.8.2 from jsDelivr, and the site's own `css/style.css`, `css/home2.css` and `css/magazine.css`. The font comes from `https://fonts.googleapis.com/css2?family=Sarabun:wght@100;200;300;400;500;600;700;800`.

The site's own CSS sets the brand through literal hex values (`#189008`, `#20498E`, `#2758AA`) in class rules such as `.btn-page`, `.box-header1` and the `.top li.link-left a` pills; no `:root` custom properties were found (the extractor recorded zero root variables). Class naming is Bootstrap's (`btn`, `container`, `col-*`, `glyphicon`) plus page-specific names (`btn-page`, `box-header1`, `title-head-library`). Consequently tokens here are measured values, not published ones, and the Bootstrap defaults in the corpus are not brand tokens.

## Do's and Don'ts

Do:
- Use green `#189008` for the single primary action per view and for hover states on links.
- Use the royal blue `#2758aa` for the top bar and footer, and the deeper `#20498e` for pressed and header-box states.
- Set everything in Sarabun, body at 14px weight 300 in `#2e383c`.
- Put white cards (5px to 10px radius, `0 2px 7px` shadow at 12% black) over photographs.
- Keep menu items in capitals and header links at 13px with 1px letter spacing.

Don't:
- Don't use Bootstrap's `#337ab7` link blue; it is a framework default.
- Don't recolour promotional posters to the UI palette; they are artwork.
- Don't round the Search button beyond 4px; pills are reserved for the "more" and language controls.
- Don't use a second typeface; the measured page uses only Sarabun.
- Don't treat the carousel arrows or the footer counter as navigation patterns to extend.

## Responsive Behavior

Measured at a 390px viewport: the type scale is unchanged (the mobile pass recorded 16px on 2,467 characters, 14px on 1,387, 12px on 464, 20px on 251, 13px, 18px, 26px, 30px and 28px unchanged), the "Routes and Fares" title is 28px/30.8px in a 350px-wide box, body copy is 14px/24px in a 270px-wide box, the Search button is 302px wide and 33px tall, and the header block measured 500px tall. The site's own stylesheets declare `@media` rules at `max-width: 992px`, `768px`, `765px`, `462px`, `425px` and `320px` widths and Bootstrap's `.container` widths at 768px, 992px and 1200px; what each rule changes on screen was not measured.

## Iteration Guide

1. Start with tokens: canvas `#ffffff`, brand-blue `#2758aa`, primary `#189008`, ink `#000000`, Sarabun everywhere.
2. Build the two-row header: blue utility bar with 13px white links, then a white bar with uppercase menu items.
3. Add the planner band: dark photograph, white 5px-radius card with 24px padding, a 33px-tall green Search button, and 10px-radius white tiles with a green icon square.
4. Use 8px-radius white cards with the 0 2px 7px shadow for promotions and news.
5. Add the blue footer with white 14px text.
6. Run `node web/scripts/verify-designs.mjs --slug=bts-skytrain` and compare with `web/data/captures/bts-skytrain.jpg`.
