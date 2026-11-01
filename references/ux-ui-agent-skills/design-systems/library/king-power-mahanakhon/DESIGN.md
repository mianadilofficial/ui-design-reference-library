---
version: alpha
name: King Power Mahanakhon
category: "Thai Brands"
description: "King Power Mahanakhon (kingpowermahanakhon.co.th) is the Bangkok tower attraction site: deep navy #052142 and footer blue #133b64 with a gold #eba600 Get Tickets button, King Power Headline and Text typefaces, and pill-shaped outlined controls with 35.2px radius."
colors:
  canvas: "#ffffff"
  ink: "#052142"
  primary: "#eba600"
  on-primary: "#ffffff"
  surface-grey: "#c6c6c6"
  surface-light: "#f0f0f0"
  ink-soft: "#dad8d8"
  ink-dark: "#222221"
  ink-muted: "#5c5c5c"
  ink-black: "#1b1d1e"
  hairline: "#1b1d1e14"
  navy-action: "#0e2140"
  link-border: "#ffffff3d"
  footer-navy: "#133b64"
typography:
  display:
    fontFamily: "\"King Power Text\", sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"King Power Text\", sans-serif"
    fontSize: 27.85px
    fontWeight: 500
    lineHeight: 33.42px
  heading:
    fontFamily: "\"King Power Headline\", sans-serif"
    fontSize: 41.6px
    fontWeight: 400
    lineHeight: 49.92px
  subheading:
    fontFamily: "\"King Power Text\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22px
  body:
    fontFamily: "\"King Power Text\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"King Power Headline\", sans-serif"
    fontSize: 11.264px
    fontWeight: 700
    lineHeight: 19.712px
  link:
    fontFamily: "\"King Power Text\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button-secondary:
    fontFamily: "\"King Power Headline\", sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 21px
  input:
    fontFamily: "\"King Power Text\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 8px
  sm: 14.21px
  md: 16px
  lg: 30px
  xl: 35.2px
  2xl: 38px
  3xl: 41.6px
  4xl: 56px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3.2px
  s3: 4px
  s4: 4.86px
  s5: 6px
  s6: 6.4px
  s7: 7.04px
  s8: 7.68px
  s9: 8px
  s10: 8.06px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 49px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy-action}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 6px 6px 6px 20px
    height: 46px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 16px 32px
    borderColor: "{colors.link-border}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 0px 0px 0px 4.864px
    height: 21px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.footer-navy}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

King Power Mahanakhon (https://kingpowermahanakhon.co.th/, title "KING POWER MAHANAKHON") is the visitor site for a Bangkok landmark tower with an observation deck, SkyWalk and other attractions. The capture opens with a full-screen video hero, a square gold "Get Tickets +" button at the top right and the stacked white wordmark KING POWER MAHA NAKHON at the top left. Below, a centered introduction reads "Bangkok's Most Iconic Urban Destination", with the word "Bangkok's" in gold and "Urban Destination" in a lighter blue, set among circular photo medallions of the SkyWalk, food and fashion scenes floating on blue and amber color blocks. A segmented switch (Mahanakhon Tower, Mahanakhon CUBE) leads to an "Explore Mahanakhon Tower" pill. A giant repeating "TICKET PRICES" marquee in pale grey introduces a row of five attraction cards (Mahanakhon SkyWalk, Bangkok I-Tilt, SkyVerse, SkyRides, TukTuk Quest) with opening hours in gold, "from THB" prices and a pill "Get Tickets" button each. Further sections: a navy Events band, "The Mahanakhon Journal" article row, a visitor testimonial slider ("Definitely worth a visit!"), a "Visitor Info & Contact" panel with map, and a blue footer with newsletter field.

The capture also shows a black tribute dialog with a monochrome portrait and Thai condolence text, with a gold close button. It is a temporary overlay (the extractor logged it as a hidden consent overlay and scrim) and is not documented as brand UI or tokens here.

## Colors

The base is white #ffffff with a deep navy ink #052142, which is both the most-read text color and the fill of the Events band. A mid footer blue #133b64 fills the footer. Gold #eba600 is the action color: the "Get Tickets" button fill, the opening-hours text and the highlighted word in the hero heading. Grey neutrals set the page rhythm: #c6c6c6 (a large background area), #f0f0f0 (light section background), #dad8d8 and #222221 (text colors measured in banners and hero overlays), #5c5c5c for body copy, and #1b1d1e for darker text, with #1b1d1e at 8% alpha (#1b1d1e14) as the hairline on outlined buttons. A secondary navy #0e2140 colors the pill-button labels. White at 24% alpha (#ffffff3d) draws borders on dark-hero controls. Bootstrap root variables (--bs-primary: #0d6efd, --bs-orange, --bs-success and so on) exist in the shipped CSS but are framework defaults, not brand colors.

## Typography

Two custom families are loaded: King Power Headline and King Power Text, both at weight 400 (bold appearances are synthesized through CSS weights 500 and 700). The h1 role is King Power Text 500 at 40px/48px (27.85px/33.42px on mobile), measured in #5c5c5c. The section heading "Bangkok's Most Iconic Urban Destination" is King Power Headline 400 at 41.6px/49.92px. Card titles ("Mahanakhon SkyWalk") are King Power Text 700 at 16px/22px in navy. Body copy is King Power Text 400 at 12px/21px with a 16px/28px variant for larger paragraphs and links. Buttons use King Power Headline 700: 11.264px/19.712px for "Get Tickets" and 12px/21px for the pill buttons. Inputs are King Power Text 14px/21px.

## Layout

The page is 1280px wide and 5634px tall. Sections are centered single columns for introductions, a five-up card row for ticket prices, a two-column events layout (large featured image beside a stacked list of events), a four-up journal row, and a split contact panel (photo left, details and map right). Section transitions use full-bleed color bands: white, navy, light grey, mid grey and footer blue. Decorative circular photos and colored rectangles overlap the heading area on both sides. Spacing values measured from paddings and gaps include 1px, 3.2px, 4px, 4.86px, 6px, 6.4px, 7.04px, 7.68px, 8px and 8.06px, a fine-grained scale suited to small controls.

## Elevation & Depth

The extraction recorded no box shadows. Depth comes from overlapping circular medallions, full-bleed color bands, thin 1px hairline borders (#1b1d1e14) and white cards on grey or navy backgrounds. The events section places white cards over the navy band without a measured shadow.

## Shapes

Radii are large and varied: 100% (18 elements, circular medallions and icon buttons), 56.832px, 160px, 41.6px, 56px, 38px, 60.8px, 35.2px, 8px, 30px and 16px. The primary "Get Tickets" button is square (0px) while secondary controls are pills: the outlined "View All" button is 35.2px on desktop and 38px on the mobile pass. Cards use 16px. The contrast between a sharp gold block button and soft pill secondary buttons is a defining trait.

## Components

- Primary button ("Get Tickets"): gold #eba600 fill, white King Power Headline 700 11.264px text, 0px radius, 49px high, with a circled plus icon at the right end.
- Secondary button ("View All", "Explore Mahanakhon Tower"): white fill, navy #0e2140 label in King Power Headline 700 12px, 1px solid #1b1d1e14 border, 35.2px radius, padding 6px 6px 6px 20px, height 46px, with a circular plus badge at the right.
- Ticket card: white card with photograph on top, bold navy title, gold opening hours, grey price line and a full-width pill "Get Tickets" button; 16px radius.
- Segmented tab switch: pill track with an active blue pill (Mahanakhon Tower) and an inactive label (Mahanakhon CUBE).
- Navigation: white King Power Headline 700 11.264px links (About us, Experience, Events, Articles, Contact, Location) over the hero; the language switch reads "En".
- Outline control on dark: transparent, white text, 1px solid #ffffff3d border ("Turn sound on").
- Input: transparent with white 14px text, padding 0px 0px 0px 4.864px.
- Footer: #133b64 fill, white links, newsletter input and a circular submit arrow.

## Design System Architecture

No public design system or brand-guideline page was opened for this document. The site ships Bootstrap 5 variables (--bs-primary, --bs-border-radius-2xl: 2rem, --bs-body-font-weight: 400), a --font-family-main variable set to "King Power Text", a --base-font-size of 1rem and Fancybox variables (--f-thumb-clip-width), so the build combines Bootstrap utilities with custom CSS. The measured brand layer is gold, navy, King Power fonts and pill controls.

## Do's and Don'ts

Do pair navy #052142 with gold #eba600 and white, use the gold square button for the single main action per screen, and use outlined pill buttons with a circular plus badge for secondary actions. Do use giant pale marquee type as section dividers and circular photo medallions as decoration.

Don't use Bootstrap blue (#0d6efd) for actions. Don't round the gold primary button. Don't treat the tribute dialog, its black ground or its gold close square as part of the standard UI. Don't set long body copy above 16px; the measured copy sizes are 12px and 16px.

## Responsive Behavior

The mobile pass (390px) measured: a menu toggle labeled "Toggle Menu", one header link visible, the h1 at King Power Text 500 27.85px/33.42px, body text at 16px/28px in #5c5c5c, a "View All" pill with 38px radius at 12px, and a maximum of 12 card columns detected. Other breakpoints and tablet behavior were not measured.

## Iteration Guide

1. Start with white pages and navy #052142 text; use #133b64 for the footer and #052142 for the events band.
2. Use King Power Headline 41.6px for section titles with one word in gold #eba600.
3. Use one square gold button per view; use white pill buttons with a 1px #1b1d1e14 border for the rest.
4. Present attractions as five-up white cards with gold opening hours and "from THB" prices.
5. Add a pale oversized marquee of repeated words between sections, and never document the temporary tribute overlay as a component.
