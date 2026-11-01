---
version: alpha
name: Four Seasons
category: "Travel & Hospitality"
description: "Four Seasons Hotels and Resorts (fourseasons.com): a black-and-white luxury hospitality site. Saol Display 300 uppercase headlines at 60px, Monotype Garamond 18px/27px body copy, Neue Helvetica 10px bold uppercase labels with 3px tracking, square 0px buttons with a 1px #000000 border on #ffffff, and full-bleed photography on a #000000 page."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  hairline: "#d8d8d8"
  ink-muted: "#7d7d7d"
  ink-subtle: "#8c8c8c"
  nav-bg: "#00000080"
typography:
  display:
    fontFamily: "\"Saol Display\""
    fontSize: 60px
    fontWeight: 300
    lineHeight: 55px
    letterSpacing: 2px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Saol Display\""
    fontSize: 40px
    fontWeight: 300
    lineHeight: 35px
    letterSpacing: 2px
    textTransform: uppercase
  heading:
    fontFamily: "\"Neue Helvetica\", helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 21px
    letterSpacing: 4px
    textTransform: uppercase
  body:
    fontFamily: "\"Monotype Garamond\", garamond, serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 0.5px
  button:
    fontFamily: "\"Neue Helvetica\", helvetica, sans-serif"
    fontSize: 10px
    fontWeight: 700
    lineHeight: 13px
    letterSpacing: 3px
    textTransform: uppercase
  nav:
    fontFamily: "\"Neue Helvetica\", helvetica, sans-serif"
    fontSize: 10px
    fontWeight: 600
    lineHeight: 13px
    letterSpacing: 15%
    textTransform: uppercase
  input:
    fontFamily: "\"Neue Helvetica\", helvetica, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 13px
    letterSpacing: 2.05px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
  none: 0px
spacing:
  s1: 1px
  s2: 3px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 20px
  s9: 23px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 39px
    borderColor: "{colors.page-largest}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 39px
    borderColor: "{colors.page-largest}"
  button-inverse:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    borderColor: "{colors.page-largest}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 20px 0px 0px
    height: 13px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 80px 0px 45px
---

# Four Seasons

## Overview

Four Seasons Hotels and Resorts presents itself on fourseasons.com as a quiet, photographic, almost editorial brand. The measured home page (1280px wide, 4523px tall) is built from three bands: a 36px black utility strip (Download the App, All Hotels and Resorts, Sign In, a language select), a 1014px full-bleed hero video/photo with the headline "DISCOVER FOUR SEASONS", and one long black band of 3473px that holds the brand story card, the Featured Properties carousel, the "Explore more with Four Seasons" slider, "The Four Seasons Story" and the footer.

The palette is pure black and pure white. By painted area the page is dominated by `#000000` (the largest background) with `#ffffff` panels for the carousel's active property card and the "Explore more" section. All colour comes from the photography: lantern-lit rice fields, a florist arranging red roses in a candlelit room, the turquoise lagoon of Bora Bora. The interface itself stays monochrome so the imagery carries the warmth.

Typography is a three-family system with clear jobs: Saol Display for the one big headline, Monotype Garamond for every paragraph, and Neue Helvetica for every small uppercase label, button, tab and navigation link. By characters rendered, Monotype Garamond is the most-read face (4663 characters), Neue Helvetica second (2225) and Saol Display third (211). The voice is warm and second-person: "Every moment, a reflection of you", "Discover a world that doesn't just welcome you – but that truly knows you", "Lose yourself in a private island paradise".

## Colors

- **canvas `#ffffff`** — the body background and the fill of the outlined buttons and the active carousel card. The capture shows white as the reading surface for the "Explore more with Four Seasons" section and for the featured property card.
- **page-largest `#000000`** — the largest painted background (the long dark band and the footer) and also the border and label colour of the white buttons.
- **ink `#000000`** — the most-read text colour (4392 characters) on white surfaces: Garamond paragraphs and the property titles such as "BORA BORA".
- **primary `#ffffff` / on-primary `#000000`** — the measured primary call to action ("PLAN YOUR HOLIDAY ESCAPE", "DISCOVER NOW", "DISCOVER OUR STORY") is a white box with black uppercase text and a 1px black border. On the black band it reads as a white tile; on a white surface the border keeps its outline.
- **hairline `#d8d8d8`** — measured both as a small background area and as a border colour; it is the light grey used for dividers and the disabled-looking "CHECK RATES" field in the booking bar.
- **ink-muted `#7d7d7d`** and **ink-subtle `#8c8c8c`** — the two greys measured in text (60 and 11 characters): secondary labels and meta text.
- **nav-bg `#00000080`** — the 50% black wash behind the header and booking bar where it sits over the hero image.

Hover was recorded on the header links: "HOTELS & RESORTS" moves from `rgb(255, 255, 255)` to `rgb(118, 118, 118)` with its border colour following, with no background change. There is no accent hue anywhere in the measured UI. A footer link reported the browser default `#0000ee`; that is a user-agent colour, not a brand colour, and it is not a token.

## Typography

- **Display — Saol Display 300, 60px / 55px, 2px tracking, uppercase.** Used once, for the hero headline "DISCOVER FOUR SEASONS", set in two lines of white over the photograph. The line height is tighter than the size, so the two lines nest closely. Saol Display 400 italic is also loaded; the small italic kickers in the capture ("A World That Knows You by Heart", "Featured Properties") are set in an italic serif.
- **Heading — Neue Helvetica 700, 16px / 21px, 4px tracking, uppercase.** Section and card titles: "EVERY MOMENT, A REFLECTION OF YOU", "BORA BORA", "TAMARINDO, MÉXICO". The wide tracking is what makes the headings feel airy despite the bold weight.
- **Body — Monotype Garamond 400, 18px / 27px, 0.5px tracking.** All running copy. This is the most common size on the page (18px, 4441 characters). Monotype Garamond 400 italic is loaded as well.
- **Button — Neue Helvetica 700, 10px / 13px, 3px tracking, uppercase.** All CTAs.
- **Nav — Neue Helvetica 600, 10px / 13px, 15% tracking, uppercase.** Utility links in the top strip.
- **Input — Neue Helvetica 400, 10px / 13px, 2.05px tracking, uppercase.** The language select.

Other measured size/tracking pairs: 10px with 2.5px and 1.25px tracking, 12px with 3px, 2.1px and 1.2px tracking, 24px with 4px tracking (52 characters; weight 200 was also measured on 52 characters), and 16px with 0.42px tracking. The site also declares CSS variables `--font-family-display: "Saol Display"`, `--font-family-serif: "Monotype Garamond"` and `--font-family-sans: "Neue Helvetica"`.

**Substitutes** (all three faces are commercial): Saol Display → a high-contrast display serif such as Playfair Display at light weight; Monotype Garamond → EB Garamond (the site itself declares a `--font-eb-Garamond` variable); Neue Helvetica → Helvetica Neue or Inter with the same wide uppercase tracking.

## Layout

The page is a full-width, band-based layout. The hero is full bleed with the headline anchored at the left (content from x=70 to x=670). Under the headline a horizontal booking bar holds three select fields (Destination, Check in – Check out, Guests) and a "CHECK RATES" button, followed by a row of seven icon tiles (All Hotels and Resorts, Residences, Villa & Residence Rentals, Dining, Private Jet, Yachts, Holiday Travel). The long dark band measures seven columns at its widest row.

The site declares a wide-grid container in CSS variables: `--wide-grid-container-width-sm: 670px`, `-md: 714px`, `-lg: 1260px`, `-xl: 1680px`, with `--spacing-grid-gutter: 15px`. Named spacing variables describe the rhythm: `--spacing-section-margin: 40px`, `--spacing-body: 40px`, `--spacing-card-padding-l: 40px`, `--spacing-heading-l: 25px`, `--spacing-stack-m: 15px`, `--spacing-button-padding-x: 20px`, `--spacing-button-stack: 15px`, `--spacing-modal-padding-y: 40px`. The most frequent measured paddings are 30px, 20px, 12px and 25px, with 160px and 100px used for large section padding. The footer is padded 80px top and 45px bottom.

Density is low. Copy blocks are narrow (the "A world that knows you by heart" paragraph renders at 465px wide) and centred text is used for section intros. The Featured Properties carousel shows a centre card in white with neighbouring cards drawn only as 1px white outlines over the landscape photo, and a "1 / 9" pager below.

## Elevation & Depth

The interface is almost flat. Depth comes from photography and from translucent black washes rather than shadows: the header sits on `#00000080`, and measured backgrounds also include `#000000d9` and `#03030366` overlays on imagery. The only box shadow measured on rendered elements is `rgb(0, 0, 0) 0px 0px 30px 0px` (three elements). The stylesheet contains further shadows — `0 0 10px 0 rgba(0,0,0,.1)`, `0 5px 15px 0 rgba(3,3,3,.12)`, `0 0 15px 0 rgba(0,0,0,.2)` and `0 10px 25px 0 rgba(3,3,3,.2)` — which were not seen on the home page. Use a soft black glow at most; never a coloured or hard drop shadow.

## Shapes

Corners are square. Every button, card, input and the navigation measure 0px radius. Only two radii appear on rendered elements, 4px (four elements) and 5px (two elements), both on small controls, and the CSS variable scale (`--radius-sm: .25rem`, `--radius-lg: .5rem`, `--radius-2xl: 1rem`) is barely used on the home page. Lines are 1px: black borders on white buttons, white borders on dark carousel cards, and `#d8d8d8` hairlines. The logo is the Four Seasons tree mark above a spaced serif wordmark, shown in white in the hero and above the footer.

## Components

- **Primary button** — `#ffffff` fill, `#000000` text, 1px `#000000` border, 0px radius, 12px 20px padding, 39px tall, Neue Helvetica 700 10px uppercase with 3px tracking. Examples: "DISCOVER NOW", "DISCOVER OUR STORY", "PLAN YOUR HOLIDAY ESCAPE".
- **Secondary button** — measured identical to the primary ("DISCOVER NEW FLAVOURS", "FIND YOUR VOYAGE"); the brand does not distinguish button ranks by colour.
- **Inverse button** — "VIEW PROPERTY" on the white property card: `#000000` fill with `#ffffff` text and the same 1px border, size and type.
- **Text link CTA** — "LEARN MORE" and "VIEW ALL HOTELS AND RESORTS →" are uppercase Neue Helvetica labels with an underline or arrow and no box.
- **Header** — a 36px black strip of 10px uppercase links (weight 600, 15% tracking) right-aligned, over a hero whose nav band uses `#00000080`.
- **Booking bar** — labels such as "DESTINATION" and "GUESTS" in white uppercase above white select boxes ("Find a Hotel or Resort", "1 Room - 2 Adults") and a light grey "CHECK RATES" box.
- **Category tabs** — "RESIDENCES / HOTELS AND RESORTS / VILLA & RESIDENCE RENTALS" separated by dots, the active one underlined in white.
- **Property card** — white panel, centred 16px bold tracked title, photo, Garamond description, inverse button; inactive cards are 1px outlines with the title only.
- **Footer** — `#000000` background, 80px 0px 45px padding, centred logo, four columns headed in italic serif (About, Reservations, News, More) with 10px tracked uppercase links, social icons and a language select.

## Design System Architecture

No public Four Seasons design system or brand guideline was found. The press room at https://press.fourseasons.com/ links only to hotel press kits, an image library and logo image files. The shipped CSS shows the de-facto system: a Tailwind CSS v4 build (variables such as `--tw-shadow`, `--default-transition-timing-function: cubic-bezier(.4,0,.2,1)`) extended with a semantic token layer. Variable names include `--color-button-primary`, `--color-button-primary-hover`, `--color-button-on-image-primary`, `--color-button-primary-ghost-hover`, `--color-text-on-image-heading`, `--color-surface-raised`, `--color-surface-overlay`, `--color-img-overlay-20` to `-80`, `--color-border-subtle-inverse`, status families (`--color-error-*`, `--color-warning-*`, `--color-success-*`, `--color-info-*`), and palette ramps named `--color-neutral-0` to `-1700`, `--color-eci-powder-blue-*`, `--color-eci-burnt-orange-*`, `--color-eci-lime-green-*` and `--color-warm-stone`. The colour variables were empty at the root when measured, so their values are not recorded here. Spacing uses named roles (stack, inline, card-padding, heading, button) on a 10px-based numeric scale (`--spacing-100: 10px` up to `--spacing-1000: 100px`), and a `--breakpoint-header: 1101px` variable switches the header.

## Do's and Don'ts

**Do**
- Keep the UI black and white and let photography supply colour.
- Set headlines in Saol Display light uppercase with 2px tracking; set paragraphs in Monotype Garamond 18px/27px.
- Use Neue Helvetica only small and uppercase, with wide tracking (3px–4px or 15%).
- Use square, outlined buttons: white with a 1px black border, or black with white text on white panels.
- Place white type over images on a translucent black wash such as `#00000080`.
- Write warm, second-person copy about feeling known and cared for.

**Don't**
- Don't introduce an accent colour, gradients or coloured buttons.
- Don't round buttons or cards; the measured radius is 0px.
- Don't set Garamond in uppercase or Neue Helvetica in long paragraphs.
- Don't add heavy drop shadows; depth comes from imagery and overlays.
- Don't treat the `#0000ee` default link colour as part of the palette.

## Responsive Behavior

The extractor's mobile pass at 390px recorded the following. The hero headline drops to Saol Display 40px / 35px with the same 300 weight and 2px tracking (370px wide). The section heading drops from 16px/21px with 4px tracking to Neue Helvetica 700 12px/16px with 3px tracking. Body copy stays Monotype Garamond 18px/27px. The measured mobile primary CTA is "CHECK RATES": a `#000000` box with `#ffffff` Neue Helvetica 700 15px/19px text, 4.5px tracking, 12px 20px padding, 43px tall and 343px wide. The mobile nav band keeps the `#00000080` wash and shows "APP", "CHECK RATES" and "MENU"; the layout probe counted 2 visible header links on mobile versus 8 on desktop, with a menu toggle visible. Font sizes recorded on mobile include 18px, 10px, 12px, 15px, 40px, 8px and 24px. The stylesheet declares breakpoints at min-width 701px, 961px, 1101px and 1701px (and max-width 700px / 960px). Carousel and footer arrangement at 390px was not measured.

## Iteration Guide

1. Start with the two surfaces: a `#000000` page and `#ffffff` panels. Add full-bleed photography before any UI.
2. Set the hero headline in Saol Display 300 at 60px/55px uppercase (40px/35px on mobile) in white, left-aligned over the image.
3. Set every paragraph in Monotype Garamond 18px/27px with 0.5px tracking, in `#000000` on white or `#ffffff` on black.
4. Set labels, tabs, nav and buttons in Neue Helvetica uppercase: 16px/700/4px for headings, 10px/700/3px for buttons, 10px/600/15% for nav.
5. Build buttons as square outlined boxes: 12px 20px padding, 39px tall, 1px `#000000` border.
6. Use `#d8d8d8` for hairlines, `#7d7d7d` and `#8c8c8c` for secondary text, and `#00000080` for scrims over images.
7. Check spacing against the named scale (15px stacks, 20px button padding, 25px heading gaps, 40px section margins) and keep layouts sparse and centred around one image per section.
