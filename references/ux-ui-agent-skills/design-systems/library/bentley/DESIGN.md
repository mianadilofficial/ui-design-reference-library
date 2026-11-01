---
version: alpha
name: Bentley Motors
category: "Luxury"
description: "Bentley Motors' global site: near-black #040404 and charcoal surfaces under full-bleed car photography, white #ffffff text in the light (300) Bentley typeface at 14px/20px with 0.14px tracking, 30–36px light headlines, square 'Living Green' #394d45 buttons with uppercase 16px labels tracked 1.6px, and white 1px outlined secondary buttons."
colors:
  canvas: "#040404"
  surface-charcoal: "#333333"
  surface-white: "#ffffff"
  ink: "#ffffff"
  ink-dark: "#242526"
  primary: "#394d45"
  on-primary: "#ffffff"
  green-deep: "#335b4c"
  teal: "#637a77"
  focus: "#7d908e"
  moss: "#dcd8c0"
  moss-light: "#f8f7f2"
  blush: "#e7cfb9"
  alert: "#eb1124"
  glass: "#ffffff33"
  scrim: "#04040466"
typography:
  display:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 30px
    fontWeight: 300
    lineHeight: 36px
  display-mobile:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 28px
    fontWeight: 300
    lineHeight: 34px
  feature-title:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 42px
  card-title:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 24px
  eyebrow:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 12px
    fontWeight: 300
  body:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 20px
    letterSpacing: 0.14px
  caption:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 10px
    fontWeight: 300
    letterSpacing: 0.1px
  button:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.6px
    textTransform: uppercase
  button-small:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.3px
    textTransform: uppercase
  nav:
    fontFamily: Bentley, arial, helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 1.2px
    textTransform: uppercase
rounded:
  none: 0px
  xs: 4px
spacing:
  s1: 4px
  s2: 8px
  s3: 11px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 17px
  s9: 21px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid #394d45"
    padding: 15px 21px
    height: 58px
  button-outlined:
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.none}"
    border: "1px solid #ffffff"
    padding: 11px 17px
    height: 40px
  header:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 40px 40px 24px
    height: 104px
  carousel-control:
    backgroundColor: "{colors.scrim}"
    textColor: "{colors.ink}"
---

## Overview

The measured page is Bentley Motors' English global home page (finalUrl `https://www.bentleymotors.com/en.html`, title "Official Bentley Motors | The Art of Handcrafted Luxury and Performance"). It is dark, cinematic and quiet. A transparent 104px header floats over the hero with "MODELS" and "≡ MENU" at left, the winged Bentley emblem and wordmark centred, and an outlined "REQUEST TEST DRIVE" button at right.

The hero is a full-bleed photographic carousel (the capture shows a car on a coastal road, slide "2 / 8" with a thin progress line and arrow controls). Its caption, "New Flying Spur", is set in a light 36px headline with a line of small grey copy and two buttons: a green "EXPLORE" and an outlined "CREATE YOUR OWN". Below, a black introduction band centres the 30px h1 "Bentley Motors" over two paragraphs about W.O. Bentley and the Beyond100 strategy, with an "ABOUT BENTLEY" button and an outlined "CREATE YOUR OWN BENTLEY" button.

Then comes a horizontal card carousel (Models, Pre-Owned Bentley, Accessories…) of tall portrait photos with 20px titles and small captions, followed by three full-bleed feature panels: MULLINER (a silver coupé against a deep red wall), "Configure your perfect car" (a gold grille in close-up with an X44 BML plate) and Ownership (a phone app on quilted leather). Each panel has a translucent glass text card with a small "Explore" eyebrow, a 30px title, a sentence and a green button. The page closes on a dark green "About Bentley" section with archive photography of early Bentley drivers, a link row (Newsletter, Configurator, Locate Dealer, Download Brochure), social icons and a five-column footer.

Everything is restrained: thin type, wide tracking on capitals, square buttons, dark surfaces and deep green.

## Colors

The page exposes a small brand palette as `--bm-*` custom properties.

- **canvas `#040404`**: the near-black page surface behind the introduction band and between photographic sections. The CSS body background is **surface-white `#ffffff`**, visible only where no section covers it (the last mobile band is white).
- **surface-charcoal `#333333`**: a large charcoal background area in the measurement.
- **ink `#ffffff`**: almost all text (4068 of the measured characters) is white on dark.
- **ink-dark `#242526`**: a dark text colour recorded on 44 characters.
- **primary `#394d45`** (`--bm-primary-living-green`): Living Green, the fill and border of every primary button. **on-primary `#ffffff`**.
- **green-deep `#335b4c`**: a deeper green background area.
- **teal `#637a77`** (`--bm-primary-teal`) and **focus `#7d908e`**: the teal family; `#7d908e` is the measured 2px focus outline.
- **moss `#dcd8c0`** (`--bm-primary-moss`), **moss-light `#f8f7f2`** (`--bm-primary-moss--10`) and **blush `#e7cfb9`** (`--bm-primary-blush`): warm neutrals in the brand palette, not visible on the home page.
- **alert `#eb1124`** (`--bm-statuses-alert`): status red.
- **glass `#ffffff33`**: 20% white for translucent panels and focused controls; **scrim `#04040466`**: 40% near-black behind carousel controls.

## Typography

Bentley sets everything in its own typeface, "Bentley", loaded at 300, 400 and 700 (fallbacks arial, helvetica, sans-serif). The light 300 weight dominates (2975 characters), 400 is used for capitals and buttons (1629), and 700 appears only in the privacy dialog.

- **display**: 30px/36px, weight 300, the h1 "Bentley Motors" and panel titles (MULLINER, Ownership, About Bentley).
- **feature-title**: 36px/42px, weight 300, hero captions ("New Flying Spur", "The all-new Torcal").
- **card-title**: 20px/24px, weight 300, carousel card titles.
- **eyebrow**: 12px, weight 300, the small "Explore" label over panel titles.
- **body**: 14px/20px, weight 300, 0.14px tracking; the most common size (3309 characters).
- **caption**: 10px with 0.1px tracking for card captions and legal lines.
- **button**: 16px/16px, weight 400, uppercase, 1.6px tracking. **button-small**: 13px/16px, uppercase, 1.3px tracking. **nav**: 12px/20px, uppercase, 1.2px tracking.

The rule is consistent: tracking is 1% of the size for running text (0.14px at 14px, 0.1px at 10px) and 10% for uppercase labels (1.6px at 16px, 1.3px at 13px, 1.2px at 12px). Headlines are never bold.

## Layout

At 1280px the page is 5502px tall. The grid tokens set a 40px outer margin (`--bm-grid-margin`) and a 16px gutter (`--bm-grid-gutter`), and the header has 40px side padding. Recorded bands: a 563px hero image, a 245px caption band, a 464px intro band with content centred between x=141 and x=1139, a 587px card carousel from x=64 to x=1216, then large feature panels (607px, 304px, 429px) where the text card sits left, centre or right over the photograph, and a 1639px footer area in up to five columns from x=40 to x=1240.

Spacing tokens are named `--bm-spacer--N`: 16px (3), 40px (7), 48px (9), 56px (10), 64px (11), 80px (12), 88px (13). On the page the most frequent gaps are 16px, 14px, 12px and 24px; the most frequent padding is 8px, then 40px and 32px; sections use paddings up to 134px and 150px.

## Elevation & Depth

Depth comes from photography and translucency, not shadow. Feature panels place a semi-transparent glass card over the image; carousel and slider controls sit on a 40% near-black scrim (`#04040466`) and switch to 20% white (`#ffffff33`) when focused. The only box-shadow recorded belongs to the privacy-settings dialog, which is not brand UI. Separation between sections is done with hard cuts between full-bleed images and near-black or deep-green bands.

## Shapes

Bentley is square. Buttons, panels, cards, photos and the header have 0px corners. The only radii measured are 4px (four small elements) and the 8px corners of the privacy dialog, which is not part of the brand UI. Thin 1px borders, white or Living Green, outline every button.

## Components

- **Primary button** ("EXPLORE", "SHOP NOW"): Living Green `#394d45` fill with a 1px border of the same colour, white uppercase 16px/400 label tracked 1.6px, 15px 21px padding, 58px tall (48px in one carousel), square, often with a small icon before the label.
- **Outlined button** ("REQUEST TEST DRIVE", "CREATE YOUR OWN"): transparent, 1px white border, white uppercase 13px label tracked 1.3px, 11px 17px padding, 40px tall, square.
- **Header**: transparent over the hero, 40px 40px 24px padding, 104px tall, 12px uppercase links tracked 1.2px, centred emblem.
- **Carousel card**: tall portrait photograph, 20px light title and small caption over a dark gradient at the bottom, progress bar and arrows below the row.
- **Feature panel**: full-bleed photo with a translucent text card (eyebrow, 30px title, 14px copy, green button).
- **Carousel control**: arrow buttons on a 40% scrim, 2px `#7d908e` focus outline with 2px offset.
- **Footer**: dark green band with link row, emblem, social icons and five link columns.

## Design System Architecture

No public Bentley design system or brand guideline was found. The Bentley media site (https://www.bentleymedia.com/) offers news and an image library for editorial use but no brand guidelines, logo rules or design-system link. The shipped page exposes 24 custom properties with a `--bm-` prefix: named brand colours (`--bm-primary-living-green`, `--bm-primary-teal`, `--bm-primary-moss`, `--bm-primary-moss--10`, `--bm-primary-blush`, `--bm-basic-black`, `--bm-basic-white`, `--bm-statuses-alert`), a numbered spacer scale (`--bm-spacer--3` … `--bm-spacer--13`), grid settings (`--bm-grid-margin`, `--bm-grid-gutter`), viewport-unit helpers (`--bm-vh`, `--bm-dvh`, `--bm-svh`) and writing-direction helpers (`--bm-dir`, `--bm-inline-start`). It is a compact brand layer; components apply the values directly. Rebuild with the same named palette and spacer scale.

## Do's and Don'ts

**Do**
- Keep surfaces dark and let full-bleed car photography lead every section.
- Set text in the Bentley typeface at weight 300, with 1% tracking on text and 10% on uppercase labels.
- Use square Living Green `#394d45` buttons for primary actions and square white-outlined buttons for secondary ones.
- Place copy on translucent glass cards over imagery.
- Use the `--bm-spacer` scale (16, 40, 48, 56, 64, 80, 88px).

**Don't**
- Don't round corners on buttons or cards.
- Don't use bold headlines; 300 is the headline weight.
- Don't add drop shadows to brand UI.
- Don't treat the privacy-settings dialog (white card, 8px corners, shadow) as a Bentley component.

## Responsive Behavior

The extractor's mobile pass recorded: the h1 drops from 30px/36px to 28px/34px; the feature-title size drops from 36px to 32px (by the size frequencies); card titles stay 20px/24px; body stays 14px/20px with 0.14px tracking; the primary CTA is still the green "EXPLORE" button with uppercase 16px label. The header keeps two visible links and the "Menu" toggle in both passes. The extraction counted up to two card columns on mobile (five on desktop). Mobile bands are mostly dark and media bands, with content between x=16 and x=374 where recorded, ending in a 414px `#ffffff` band.

The stylesheet declares only two breakpoint queries: `max-width 768px` (9 rules) and `min-width 767px` (2 rules). Panel and carousel layouts at intermediate widths are not measured.

## Iteration Guide

1. Start dark: `#040404` and charcoal surfaces, white text, full-bleed imagery.
2. Use the Bentley typeface at 300 for headlines (30–36px) and body (14px/20px, 0.14px tracking).
3. Add square Living Green buttons with 16px uppercase labels tracked 1.6px; outline secondary buttons in white.
4. Put section copy on translucent cards over photography with an "Explore" eyebrow.
5. Space with the `--bm-spacer` scale and a 40px page margin.
6. Measure the configurator and model pages before adding tokens for forms, swatches or specification tables.
