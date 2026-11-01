---
version: alpha
name: Balmoral Running
category: "Fashion & Apparel"
description: "Balmoral Running is a Canadian running-apparel store built on a Shopify theme: a #ffffff canvas, #171614 ink, pale #eaeaec product tiles and black hero bands, ABCArizonaMix serif display at 40px over FTKunstGrotesk sans body at 15px, all corners square, no brand accent hue."
colors:
  canvas: "#ffffff"
  ink: "#171614"
  primary: "#171614"
  on-primary: "#ffffff"
  surface-tile: "#eaeaec"
  surface-black: "#000000"
  gray-400: "#e8e9eb"
  gray-600: "#828282"
  ink-muted: "#302c2880"
  ink-soft: "#26252199"
  ink-faded: "#00000080"
  border-hairline: "#0000000d"
typography:
  display:
    fontFamily: ABCArizonaMix, serif
    fontSize: 40px
    fontWeight: 400
  display-mobile:
    fontFamily: ABCArizonaMix, serif
    fontSize: 20px
    fontWeight: 400
  subheading:
    fontFamily: FTKunstGrotesk, sans-serif
    fontSize: 16px
    fontWeight: 400
  body:
    fontFamily: FTKunstGrotesk, sans-serif
    fontSize: 15px
    fontWeight: 400
  nav:
    fontFamily: FTKunstGrotesk, sans-serif
    fontSize: 14px
    fontWeight: 500
  link:
    fontFamily: FTKunstGrotesk, sans-serif
    fontSize: 14px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 4.2px
  s2: 5px
  s3: 5.4px
  s4: 6px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-cta:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 40px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  product-tile:
    backgroundColor: "{colors.surface-tile}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 0px 11px
    height: 27px
  footer:
    textColor: "{colors.ink}"
    padding: 30px 10px 12px
---

## Overview

Balmoral Running (balmoralrunning.com) sells technical and lifestyle running apparel. Its own About page opens with "Balmoral was founded in Canada to create timeless garments shaped by the country's distinct climate and way of life," and the homepage prices products in CAD while offering English and Français and a country and currency selector. The site is a storefront, but it is art-directed like a lookbook: large photographic tiles, serif titles set directly over the photographs, and almost no interface chrome.

The measured home page opens on a black band. The wordmark BALMORAL sits centered in a thin top bar, with Collection, Tops, Bottoms and Accessories to the left and The brand, Search, Login and Cart to the right, all in small white sans text. At the bottom-left of that band the headline "New Arrivals" is set in white 40px serif with a small underlined link beside it ("SHOP WINTER 26" in the latest capture, "SHOP FALL 26" in the earlier one). Below it, the page is a mosaic of tiles: a full-height editorial photograph (a model in a balaclava for Winter 26, a model in a hat and sweater for Fall 26) with a serif title, a short paragraph and an underlined link overlaid; two pale-grey product tiles next to it (Winston Facemask and Finchsley Insulated Mittens in the Winter 26 capture); pairs of white-background model photos for Race Day items (Oakwood Tank Top, St-Ambroise Half Tights); and a full-bleed abstract red architectural photograph for the Race Day story.

Further down come two four-column product rows labelled "Cotton T-shirts" and "Bottoms", each with a small "SHOP" link at the right edge, an About Us pair of tiles (a grey flat-lay photograph and an orange gradient tile with a DISCOVER link), four information tiles (Shipping & returns, Contact, Lookbook, Press) and a footer with a newsletter field ("Subscribe to our newsletter"), the language and country selector, and the line "© 2026 Balmoral Running" plus a credit to the theme studio MILL3.

The voice is brief and product-led. Copy is declarative ("Race Day", "Headwear", "Bottoms"), product names are proper nouns (Belmore 4-Panel Hat, Melrose Joggers, Miller Running Pants), and the longer paragraphs read like catalogue notes about weather and use. A language and country dialog and a cookie banner appeared over the capture; they are consent and locale controls, not brand components, and are not documented here.

## Colors

The palette is neutral and the photographs carry all the chroma.

- **canvas #ffffff** — the body background (`--body-bg-color` resolves to `--color-white` in the CSS) and the background of the lower tile rows.
- **ink #171614** — a warm near-black, declared as `--color-black` and used as `--body-text-color`. It is the second most-read text color (687 characters) after white text on imagery. It is also the theme's button fill, declared as `--btn-bg-color: var(--color-black)`.
- **primary #171614 / on-primary #ffffff** — the theme CSS declares its call-to-action button as black with white text. No filled CTA was detected on the measured home page, so `primary` is the ink value taken from that declaration.
- **surface-tile #eaeaec** — `--gray-200`, the tile background behind isolated product photographs, and the largest measured background area (1384). The CSS also applies it to the page body on collection pages (`body.collection{--body-bg-color: ...gray-200}`).
- **surface-black #000000** — the hero band, 1014 area units, and the black used for text in some links (184 characters).
- **gray-400 #e8e9eb and gray-600 #828282** — declared root variables; their on-page usage was not measured individually.
- **ink-muted #302c2880, ink-soft #26252199, ink-faded #00000080** — semi-transparent text colors measured on small captions (56, 45 and 29 characters).
- **border-hairline #0000000d** — the one measured light border color. The CSS also declares `--border-color: rgba(3, 5, 4, .1)`.

White text is the most common color overall (1118 characters), because titles, paragraphs and links sit on photographs. The shipped CSS also contains #007aff (the Swiper carousel's default theme color, declared as `--swiper-theme-color`), plus #9edafa-family blues from a focus ring, and #006646; none is used as a brand color on the measured page.

## Typography

Two typefaces are loaded: **ABCArizonaMix** (400, serif fallback) for display and **FTKunstGrotesk** (400 and 500, sans-serif fallback) for everything else. The CSS exposes them as `--ff-heading` and `--ff-body`, and a monospace variable `--ff-mono: SFMono-Regular, monospace`. The font files are self-hosted woff2 files named in the theme's @font-face rules (ABCArizonaMix-Regular, FTKunstGrotesk-Regular and FTKunstGrotesk-Medium). A separate Neue Montreal family is declared for the theme-studio credit label. The site publishes no substitute stack beyond the generic `serif` and `sans-serif` fallbacks, so any substitute is a judgement to be checked against the capture.

- **display — ABCArizonaMix 400, 40px.** Tile titles: "New Arrivals", "Winter 26", "Headwear", "Race Day". Line height and letter spacing are `normal`.
- **subheading — FTKunstGrotesk 400, 16px.** Product names such as "Belmore 4-Panel Hat".
- **body — FTKunstGrotesk 400, 15px.** The most common size (987 characters): tile paragraphs.
- **nav and link — FTKunstGrotesk 500 and 400, 14px.** Navigation links are weight 500; ordinary links and form text are 400.

Other measured sizes are 11px (85 characters), 18px (68), 12px (45); the CSS declares `.btn.--link` at 12px and at 14px from 1200px up. Weights are 400 (1962 characters) and 500 (157). Display is the only serif use on the page, and it is always regular weight, so hierarchy comes from the face change and the 40px size rather than from bolding.

## Layout

The page is a tile mosaic on a fluid grid. Root variables define `--container-fluid-margin: 10px`, `--default-column-gap: 10px`, `--default-column-count: 4`, and the CSS raises the count to 8 at 768px and above. The header is 47px high with a 69px spacer (`--site-header-height`, `--site-header-spacer-height`). The desktop page measured 1280px wide and 4920px tall.

Large photograph tiles span two columns and the full height of their row; product tiles are single-column and sit beside them, so rows are intentionally uneven and leave white gaps below shorter tiles, as the capture shows beside the Headwear and Race Day tiles. Section labels ("Cotton T-shirts", "Bottoms") sit flush left above four equal columns, with the "SHOP" link flush right. Gaps measured most often are 6px (48 occurrences), 10px (29), 5.4px and 4.2px (24 each) and 12px (13); larger paddings are 20px, 28px, 30px and 40px. The tight 10px gutter and 10px outer margin keep photographs almost edge to edge.

## Elevation & Depth

Depth is essentially flat. The extraction recorded no box shadows on the page. The theme CSS lists `none` eight times, a zero shadow, a 4px blue focus ring (`0 0 0 4px hsl(201deg, 90%, 80%, 100%)`) and one soft drop shadow `0px 4px 10px rgb(63 63 68 / 40%)`, whose element was not identified in the measurement. Separation is made by color fields: black bands, #eaeaec tiles and white gaps. Text over photographs relies on image choice rather than scrims on the tiles themselves; the one translucent surface measured (#ffffffcc) belongs to the locale dialog and cookie banner.

## Shapes

All measured corners are square. The theme declares `--btn-radius: 0px`, and the stylesheet's radius list contains only 0px, 2px and 3px; no component with a 2px or 3px radius was identified, so only `none: 0px` is tokenized. Photographs, product tiles, buttons and the language and cookie dialog (measured at 0px) are rectangles. Underlined text links replace pill or rounded buttons on tiles. Thin 1px rules appear as #171614 on outlined buttons and the light #0000000d on dividers.

## Components

**Navigation.** A 47px header strip with the centered BALMORAL wordmark, four category links at the left and four utility links at the right, in FTKunstGrotesk 500 at 14px, white on the black hero band. The menu lists Collection (Winter 26, Fall 26, Performance, Lifestyle), Tops, Bottoms, Accessories and The brand (About us, Press, Stockists), according to the pages opened.

**CTA button.** The theme's `.btn.--cta` is declared as a black rectangle: fill `--btn-bg-color` (black #171614), white text, height 40px, padding `0 12px`, radius 0px, with an outlined variant (`--cta-outlined`) that has a transparent background and a #171614 border. The measured outlined example was the 40px-high "Save preferences" button inside the locale dialog, which inverts to white text and a white border on hover; that is a consent control, so it is only cited here to confirm the 40px height and square corners.

**Text link CTA.** The primary call to action on tiles is a small underlined text link in capitals ("SHOP HEADWEAR", "DISCOVER", "SHOP"), white on photographs. The theme declares `.btn.--link` at 12px, 14px from 1200px up.

**Product tile.** A #eaeaec rectangle with an isolated product photograph and a 16px name below; no radius, border or shadow.

**Text input.** The newsletter field and other inputs measure 14px FTKunstGrotesk 400, 27px high with 11px bottom padding and no visible box, an underline-style field as seen in the footer.

**Footer.** Help, shipping, brand and newsletter columns in 14px type with `30px 10px 12px` padding, language and country selector, and the copyright line.

## Design System Architecture

No public design system or brand guideline exists for Balmoral. The homepage https://www.balmoralrunning.com and the About page https://www.balmoralrunning.com/pages/about-us were opened, and the footer links (Contact Us, FAQs, Shipping & returns, Press, Terms & policies) lead to store pages, not guidelines.

The de-facto system is the theme. The page declares `data-theme-name="Mill3 Shopify Boilerplate"` with `data-theme-version="2.0.0"`, and a single stylesheet at `/cdn/shop/t/26/assets/app_style.css` that defines the tokens as CSS custom properties on `:root`: `--color-black`, `--color-white`, `--gray-200`, `--gray-400`, `--gray-600`, `--ff-heading`, `--ff-body`, `--ff-mono`, `--container-fluid-margin`, `--default-column-gap`, `--default-column-count`, `--btn-radius` and the `--btn-*` family used by the `.btn.--cta` and `.btn.--link` classes. The footer credit links to https://mill3.studio/, the studio that built the theme. Motion tokens in the CSS include three easing curves repeated five times each: cubic-bezier(.19,1,.22,1), cubic-bezier(.645,.045,.355,1) and cubic-bezier(.215,.61,.355,1), and hover effects are gated by `prefers-reduced-motion: no-preference`.

## Do's and Don'ts

- Do keep surfaces to white, #eaeaec and black, and let photography supply color.
- Do set tile titles in ABCArizonaMix 400 at 40px and everything else in FTKunstGrotesk.
- Do overlay titles, a short paragraph and an underlined capital link directly on photographs.
- Do keep corners square (0px) on buttons, tiles, dialogs and images.
- Do hold the 10px outer margin and 10px column gap so tiles read as a mosaic.
- Don't add a brand accent color, gradient UI chrome or shadows; none were measured.
- Don't use rounded or pill buttons; the theme declares `--btn-radius: 0px`.
- Don't bold the serif display face; it is only used at weight 400.
- Don't treat the locale dialog, cookie banner or Swiper's #007aff as brand UI.

## Responsive Behavior

Measured at a 390px mobile pass: tile titles drop from 40px to ABCArizonaMix 20px (`display-mobile`), tile body text measures 14px with a 17px line height, and the most common mobile sizes are 14px (987 characters), 13px (419), 12px (199), 11px (101), 16px (68) and 20px (29). The mobile pass recorded no primary CTA.

The theme stylesheet declares its breakpoints: `@media (min-width: 768px)` (56 rules), `@media (max-width: 767.98px)` (23), a 768px to 1199.98px range (16), `@media (min-width: 1200px)` (58) and `@media (min-width: 1024px)` (3). In the CSS the grid column count is 4 below 768px and 8 from 768px; `.btn.--link` goes from 12px to 14px at 1200px. Mobile layout of the menu, tile arrangement and touch targets were not measured, and no mobile capture exists.

## Iteration Guide

1. Set the canvas to #ffffff, ink to #171614, and add #eaeaec only as a tile background behind product photographs.
2. Use ABCArizonaMix 400 at 40px for tile titles and FTKunstGrotesk 400 or 500 at 14 to 16px for all else.
3. Build the home page as tiles on a 10px gutter with a 4-column grid below 768px and 8 columns above.
4. Use underlined capital text links on photographs; reserve the 40px-high black rectangular button for forms and checkout actions.
5. Keep every radius at 0px.
6. Re-measure hover and focus on brand components before documenting them; only a consent-dialog button was recorded.
7. Run `node web/scripts/verify-designs.mjs --slug=balmoral` after editing tokens.
