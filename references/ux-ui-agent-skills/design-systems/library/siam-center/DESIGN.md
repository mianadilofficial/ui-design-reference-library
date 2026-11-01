---
version: alpha
name: Siam Center
category: "Thai Brands"
description: "Design language of the Siam Center website: a near-black canvas (#000000 with #050505, #0b0b0b and #111111 steps) carrying white Montserrat text, one electric yellow #ffec00 accent for navigation and buttons, square corners, and loud multicolour poster illustration inside white editorial cards."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffec00"
  on-primary: "#000000"
  surface-1: "#050505"
  surface-2: "#0b0b0b"
  surface-3: "#111111"
  ink-muted: "#8b8b8b"
  ink-dim: "#2a2a2a"
  ink-translucent: "#ffffff99"
typography:
  display:
    fontFamily: Montserrat, "Noto Sans SC", "Noto Sans TC", "Noto Sans Thai", sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 52px
  display-mobile:
    fontFamily: Montserrat, "Noto Sans SC", "Noto Sans TC", "Noto Sans Thai", sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 39px
  heading:
    fontFamily: Montserrat, "Noto Sans SC", "Noto Sans TC", "Noto Sans Thai", sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 44.8px
  subheading:
    fontFamily: Montserrat, "Noto Sans SC", "Noto Sans TC", "Noto Sans Thai", sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: Montserrat, "Noto Sans SC", "Noto Sans TC", "Noto Sans Thai", sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 22.1px
  button:
    fontFamily: Montserrat, "Noto Sans SC", "Noto Sans TC", "Noto Sans Thai", sans-serif
    fontSize: 13px
    fontWeight: 600
    lineHeight: 16.9px
  nav:
    fontFamily: Montserrat, "Noto Sans SC", "Noto Sans TC", "Noto Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20.8px
    textTransform: uppercase
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 20px
  s7: 25px
  s8: 30px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 10px
    height: 37px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 5px 10px
  link:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.none}"
    padding: 50px 0px 0px
---

## Overview

Siam Center presents itself on its own site as "Thailand's Creative Cultural Capital" and "The Ideaopolis": a creative cultural capital and arena of imagination where breakthrough ideas are born, a dynamic idea marketplace and global trend hub across fashion, art, beauty and lifestyle, with emphasis on Thai creative talent alongside international influences. Its floors are named Fashion Avenue (ground), Fashion Galleria (mezzanine), Fashion Visionary (first) and Food Factory (second). The page title is "Home - SIAM CENTER".

The visual language follows that concept with a dark, gallery-like stage. The canvas is black, and slightly lighter blacks (#050505, #0b0b0b, #111111) separate bands without introducing hue. White Montserrat text sits on top, and a single saturated yellow, #ffec00, signs navigation labels and button text. Content is the colour: the campaign banner in the capture is a riot of pink, teal, orange and blue illustration on a yellow ground ("Neo-Thai" super-culture), and editorial cards are white boxes holding poster thumbnails. The contrast between a disciplined black and yellow interface and exuberant illustration is the identity.

A "Please select your customer type" dialog (Chinese, International / English, Thai) opens over the page and dims it. Its buttons are language-gate controls; the call-to-action documented below is the "VIEW DETAIL" button on the editorial cards.

## Colors

- **Canvas #000000**: the dominant background, with the 66% black overlay (#000000a6) used to dim the page behind the dialog.
- **Surface-1 #050505, Surface-2 #0b0b0b, Surface-3 #111111**: stepped near-blacks for stacked bands and link backgrounds.
- **Ink #ffffff**: the most-read text colour, on every dark band; **ink-translucent #ffffff99** is white at 60% for de-emphasised copy.
- **Primary #ffec00**: yellow for navigation labels (HOME, PROMOTION, EVENT, MEMBER, TOURIST, DIRECTORY, BLOG & NEWS), the active nav item, button text and the carousel's active dot.
- **On-primary #000000**: the fill of the black buttons that carry yellow text; also the text colour on white editorial cards.
- **Ink-muted #8b8b8b**: footer and secondary text; it is also the 1px border colour measured.
- **Ink-dim #2a2a2a**: used on a few low-contrast labels on light surfaces.

The extraction also contains Bootstrap's default variables (for example --bs-primary #0d6efd); those are framework defaults, not brand colours.

## Typography

Montserrat is the lead family, with Noto Sans SC, Noto Sans TC and Noto Sans Thai following it so that Chinese and Thai content renders in the same system. Hierarchy:

- Display (hero headline "THAILAND'S CREATIVE CULTURAL CAPITAL"): 40px, weight 700, 52px line height; 30px with 39px line height on phones.
- Heading ("EDITOR'S PICK"): 32px, weight 500, 44.8px line height.
- Subheading: 20px, weight 600, 24px line height.
- Body: 17px, weight 400, 22.1px line height.
- Nav: 16px, weight 700, 20.8px line height, uppercase.
- Button label (VIEW DETAIL): 13px, weight 600, 16.9px line height.

The site tracks its text slightly open: 0.51px on 17px text, 0.68px on 17px and 13px labels, 1.12px on 14px text and 1.44px on 36px text. Sizes in use by frequency are 17px, 16px, 13px, 20px and 40px; weights are 400, 600, 700 and 500.

Font substitutes: Montserrat is open-source (Google Fonts); any geometric sans such as Poppins or Raleway would be a close substitute, and the Noto Sans CJK and Thai families are open too.

## Layout

The page alternates full-width bands. A split hero places text on the left half and a night-time photograph of the building on the right half. Below are a full-width campaign carousel with side slides peeking at the edges, an EDITOR'S PICK section of four equal white cards, and a "GETTING HERE" band with opening hours (Monday to Sunday, 10:00 AM to 10:00 PM) beside a photographic collage.

Content starts about one standard gutter in from the viewport edge. Measured spacing steps are 5px, 8px, 10px, 12px, 15px, 20px, 25px, 30px, 40px and 48px; the most common paddings are 20px, 10px, 12px and 5px. Gaps between items are 15px, 8px and 5px.

## Elevation & Depth

There are no measured box shadows on this site. Depth is created by tonal steps between blacks and by the white cards that float against the dark canvas. A translucent black layer (#000000a6) provides the modal backdrop. Images do the rest of the work with their own lighting.

## Shapes

Everything is square. Buttons, nav links, cards and links all measure a 0px radius. The only rounding found is a 50% radius on the small circular carousel dots and a round chat launcher at the top right. Editorial cards are white rectangles with a small vertical category label ("SHOP", "DINE") rotated at the top left of each card.

## Components

- **Primary button ("VIEW DETAIL")**: black fill, yellow #ffec00 text, 13px weight 600, 0px radius, 0px 10px padding, 37px tall, about 109px wide. It sits at the bottom right of each editorial card.
- **Navigation**: a centred row of uppercase 16px 700 labels with 5px 10px padding; the active item is yellow and underlined, inactive items are lighter. A search icon and language code sit at the right.
- **Editorial card**: white, with a rotated category tag, poster thumbnail, bold uppercase title, a calendar icon with the date (for example 20 August 2026) and the button.
- **Carousel controls**: thin left and right arrows and dot pagination; the active dot is yellow.
- **Footer**: padding of 50px at the top and #8b8b8b text, with contact numbers +66-2-658-1000 and +66-2-687-5000.

## Design System Architecture

No public design system or brand guideline for Siam Center was found on the page I opened (https://www.siamcenter.co.th/en); the page documents the business and navigation only. The shipped CSS shows Bootstrap 5 variables (--bs-*) and a gallery or slider library that declares --f-button-width, with brand colours applied directly in component styles. The sister site Siam Discovery uses the same navigation set and language-select flow, which suggests a shared template, but that is an observation of the two pages, not a published system.

## Do's and Don'ts

- Do keep surfaces in the black ramp (#000000, #050505, #0b0b0b, #111111) and text in white.
- Do reserve #ffec00 for navigation, active states and button text.
- Do keep every corner square (0px) except circular dots.
- Do put colourful artwork inside white cards on the dark canvas.
- Don't add shadows; none were measured.
- Don't use Bootstrap blue for links.
- Don't treat the language-gate buttons as the main CTA.
- Don't set yellow as body-copy colour or as a large background in UI chrome.

## Responsive Behavior

The extraction measured a mobile (390px) display headline of 30px with 39px line height, compared with 40px on desktop; the other roles were not re-measured on mobile. The Bootstrap 5 grid underlies the layout, so its default breakpoints (992px and 1200px among them) apply, but the number of cards per row below those widths was not measured and is not claimed. Four editorial cards show on a single row at 1280px.

## Iteration Guide

1. Start from a #000000 canvas with white Montserrat 17px/400 body text.
2. Add uppercase 16px/700 yellow navigation.
3. Build editorial cards in white with black VIEW DETAIL buttons, square corners.
4. Use #050505 to #111111 to separate bands rather than lines or shadows.
5. Bring in colourful illustration only inside posters and cards.
6. Verify any new number against web/data/extracted/siam-center.json before using it.
