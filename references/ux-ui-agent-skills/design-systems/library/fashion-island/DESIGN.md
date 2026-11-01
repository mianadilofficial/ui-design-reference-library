---
version: alpha
name: Fashion Island
category: "Thai Brands"
description: "Design language of the Fashion Island mall website: Helvetica with Kanit as Thai companion, black text on white, a hot magenta #ec098d for the active tab, 10px-radius tab buttons with a soft 13% black gradient overlay, a #5f6062 grey quick-link bar, and a four-colour (orange, green, red, blue) letter-block motif for large display words."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ec098d"
  on-primary: "#ffffff"
  surface-bar: "#5f6062"
  surface-grey: "#828282"
  tab-border: "#f3f3f3"
  letter-orange: "#f78f1e"
  letter-green: "#54b948"
  letter-red: "#ef4135"
  letter-blue: "#0093d0"
typography:
  display:
    fontFamily: Helvetica, Kanit, Arial
    fontSize: 18px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: Helvetica, Kanit, Arial
    fontSize: 32px
    fontWeight: 200
    lineHeight: 60px
  body:
    fontFamily: Helvetica, Kanit, Arial
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
rounded:
  xs: 2px
  sm: 3.2px
  md: 4px
  lg: 6px
  xl: 10px
  2xl: 20px
spacing:
  s1: 4px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 20px
  s9: 22px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.xl}"
    padding: 10px 60px 10px 30px
    height: 62px
    borderColor: "{colors.tab-border}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.xl}"
    padding: 10px 60px 10px 30px
    height: 62px
    borderColor: "{colors.tab-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 7px 0px
    height: 37px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

Fashion Island is a large shopping mall in the Rama Intra area of Bangkok; its website (page title "Fashion Island") carries the tagline "The Joy of Shopping" and a companion property called The Promenade. The About page positions the mall as "One Stop Shopping" for families, with zones that include Grand Station, a European-style section, and Island Hall, its largest event venue. The site is a promotional portal: a rotating banner of campaign posters (a vegetarian-festival food promotion, a VIP sale day, a lucky-reward campaign were on show), tabbed content for Highlight, Events, Promotions and Privileges, a grey quick-link bar for Location, Contact and Directory, and large editorial image blocks below.

The system is white and black with one loud accent: magenta #ec098d. It marks the active "Highlight" tab and appears in a thin underline under the tab row. Everything else relies on the posters and photographs, which supply an enormous variety of colour so that the interface itself stays neutral.

A cookie consent banner sits across the top edge of the capture with a small green Accept button. That is consent UI and is not part of the brand palette; the green accept button is excluded from the tokens.

## Colors

- **Canvas #ffffff**: the dominant page background by area.
- **Ink #000000**: body text and navigation labels; white (#ffffff) text is the second most read colour, used on the magenta tab and the grey bar.
- **Primary #ec098d**: the active tab fill, with white text and a very subtle darkening gradient (a 270 degree linear gradient from 13% black to transparent) across the button.
- **Surface-bar #5f6062**: the dark grey quick-link bar holding Location, Contact and Directory icons with white labels.
- **Surface-grey #828282**: a mid-grey background colour measured on the page (77 area-weight units).
- **Tab-border #f3f3f3**: the 1px border on tabs.
- **Letter blocks**: orange #f78f1e, green #54b948, red #ef4135 and blue #0093d0 are each measured as background areas and correspond to the multicoloured letters of the oversized display word in the capture. Use them as a set, never individually as UI states.

The site also declares Bootstrap's default variables (--primary #007bff and the standard greens and reds). Those are framework defaults, not part of Fashion Island's palette.

## Typography

Helvetica is the only measured family, with Kanit and Arial next in the stack for Thai and fallback. Body copy is 15px weight 400 with a 22.5px line height. Tab and button labels are 18px weight 400 with a 40px line height, in sentence-case uppercase words (HIGHLIGHT, EVENTS, PROMOTIONS) as the site writes them. The section heading role measured is 32px weight 200 with a 60px line height: a very light weight that gives headings an elegant, airy feel against the heavier bold labels. Sizes by frequency on the page are 15px, 24px, 14px, 17px, 36px, 18px, 11px and 32px; weights used are 400, 700, 200 and 300. Navigation labels are bold uppercase around 14 to 17px.

Because the heading role is white in the extraction and is placed over imagery, the heading is a graphic overlay rather than ordinary page text; the hero "SHOP FASHION" lettering is far larger and bold, set in the four-colour letter blocks.

Font substitutes: Helvetica is a proprietary family; Arial or any neo-grotesque is a safe substitute, and Kanit supplies Thai glyphs.

## Layout

The page is a vertical sequence: cookie banner, a navigation row with links (About Us, Promotions & Privileges, Events, Directory, Services, Contact) and a search icon and language flags, a wide banner carousel with large peek-through side slides and a segmented progress bar, the tab row, a row of three equal poster cards, a grey three-column quick-link bar, then an editorial section with large staggered photographs overlaying wave-shaped colour. The navigation measures 144px tall including the language flags.

Padding values measured include 10px (most common), 15px and 30px, and the spacing scale runs 4px, 5px, 7px, 8px, 10px, 12px, 15px, 20px, 22px and 30px. Breakpoints declared in CSS are 576px, 768px, 992px and 1200px.

## Elevation & Depth

Depth is nearly absent. Two shadows were measured: a transparent rgba(0, 0, 0, 0) 0px 0px 2px 1px on tabs and a grey rgb(128, 128, 128) 0px 0px 5px 0px on a single element. Visual layering comes from overlapping photographs with text in white placed over them, and from the wave-shaped colour band in the editorial section.

## Shapes

Radii are small and varied: 2px, 3.2px, 4px, 6px, 10px and 20px. Tabs use 10px. Poster cards are rectangular. The wave shape under the editorial section is the only decorative curve and is built from the page's artwork.

## Components

- **Tab button, active**: magenta #ec098d fill, white 18px text, 10px radius, 1px #f3f3f3 border, padding 10px 60px 10px 30px (extra right padding leaves room for an icon), 62px tall.
- **Tab button, inactive**: same geometry, no fill, black text, with a faint grey gradient.
- **Navigation**: bold uppercase links with dropdown carets on About Us, Promotions & Privileges, Services and Contact.
- **Banner carousel**: full-width posters, arrows left and right in white circles, a row of thin segment bars with the current one in red.
- **Quick-link bar**: #5f6062 with outlined white icons and tiny uppercase labels.
- **Text input**: white, 37px tall, 7px vertical padding, black text.
- **Footer**: white background with black text.

## Design System Architecture

No public design system or brand guideline for Fashion Island was found on the pages I opened: https://www.fashionisland.co.th/ and https://www.fashionisland.co.th/about-us describe the business and navigation only. The de-facto system is Bootstrap-style variables (--primary, --breakpoint-* and colour variables are present in the extracted root variables) with a custom layer for the magenta accent. Contents are mostly poster images authored per campaign, which means the visual identity is driven by marketing artwork rather than by tokens.

## Do's and Don'ts

- Do keep the interface white, black and grey and let campaign posters carry colour.
- Do use #ec098d only for the active state of the tab group and similar single highlights.
- Do keep tab labels in white on magenta with 10px radius.
- Do use weight 200 for light display headings and 400 for labels.
- Don't use the green cookie Accept color or Bootstrap blue as brand colours.
- Don't use the four letter-block colours as UI states.
- Don't add heavy shadows; the system is flat.
- Don't crop campaign posters with rounded corners.

## Responsive Behavior

The CSS declares breakpoints at 576px, 768px, 992px and 1200px. The site serves different banner images for mobile and desktop. No mobile typography differences were measured for this site, so none are claimed. The three-column quick-link bar and three-card poster row are single rows at 1280px; how they reflow below the declared breakpoints was not measured.

## Iteration Guide

1. Start with Helvetica 15px body and 18px labels.
2. Build the tab row with magenta active state and 10px radius.
3. Add the grey #5f6062 quick-link bar with white icons.
4. Bring in the four letter-block colours only for a single oversized display word.
5. Keep surfaces white and let imagery supply colour.
6. Check values against web/data/extracted/fashion-island.json before editing them.
7. When adding copy, follow the site's microcopy voice: short English labels (HIGHLIGHT, EVENTS, PROMOTIONS, DIRECTORY) for navigation and tabs, with Thai campaign titles living inside the poster artwork, and the tagline "The Joy of Shopping" as the only slogan taken from the site itself.
8. Review any new component at 1280px first, since that is the width at which every number in this document was measured.
