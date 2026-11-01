---
version: alpha
name: Permian
category: "Fashion & Apparel"
description: "Sneaker brand site for Permian (permianworld.com): cool grey #dddddd canvas with product photography, electric blue #1f35f9 for text, buttons and footer, white #ffffff panels, supplyMono 12px uppercase labels, ballinger bold headlines, square 0px corners and dashed blue frame lines."
colors:
  canvas: "#dddddd"
  page-body: "#ffffff"
  ink: "#1f35f9"
  primary: "#1f35f9"
  on-primary: "#ffffff"
  ink-black: "#000000"
  primary-hover: "#f2f4ff"
typography:
  display:
    fontFamily: supplyMono, "supplyMono Fallback", monospace
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15px
    letterSpacing: 0.12px
    textTransform: uppercase
  headline:
    fontFamily: ballinger, "ballinger Fallback", sans-serif
    fontSize: 21px
    fontWeight: 700
    letterSpacing: -0.42px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 9.5px
  s7: 12px
  s8: 14.5px
  s9: 15.5px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 9.5px 6px
    height: 34px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
    padding: 0px 20px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
    boxShadow: rgb(31, 53, 249) 0px 1px 0px 1px
---

## Overview

Permian is a London-based sneaker brand whose home page (https://www.permianworld.com/, title "Home — Permian") sells itself as a community project. The footer reads "Driven by culture. Telling untold stories — soul by sole." and the closing lines say "Join us to co-create the sneaker brand of the future." The navigation lists Home, Shop the drop, Our story and Chat to us. A hero section is titled "Horizon Hike", and a second block reads "Our community is open to anyone with creative ideas".

The look is a gallery wall for a single product. The capture shows one large black technical sneaker with electric-blue laces floating on a soft grey backdrop (#dddddd measured as the dominant background by area), thin dashed blue frame lines running around the viewport with solid blue square markers at the corners, a compact white-and-blue tab navigation at the top centre and a blue "SHOP THE DROP" bar at the bottom. At the bottom right a small feed of "signed up N mins ago" cards with portrait thumbnails shows the community theme.

One voice is used almost everywhere: supplyMono, a monospace face, at 12px in uppercase with 0.12px tracking. Only 49 characters on the page use a second face, ballinger bold, for large statements such as "Follow @permian.world & join us." The result reads as technical, coded and playful rather than luxurious.

Key characteristics:
- Grey canvas #dddddd, white panels #ffffff, one saturated blue #1f35f9 for text, fills and lines.
- supplyMono uppercase labels at 12px with ballinger 700 for headlines.
- Every measured border radius is 0px: the borderRadii list is empty, so all elements compute a radius of 0px.
- Product photography carries the page; interface chrome is thin and flat.

## Colors

All colors are measured on the live page.

- **Canvas #dddddd:** the largest background by area (8,151 area weight) and the backdrop of the hero photograph.
- **Page body #ffffff:** the second background (1,731 area weight): the navigation tabs, the "Horizon Hike" label box and the text color on blue fills (409 characters, the most of any text color).
- **Ink and primary #1f35f9:** the text color on grey and white surfaces (283 characters), the primary button fill, the footer fill, the border color of the dashed frame (5 elements) and the 1px footer box-shadow color.
- **On-primary #ffffff:** text on the blue button, the footer and the active "HOME" tab.
- **Ink black #000000:** 16 characters of text and a 13-weight background area; it appears as a minor tone.
- **Primary hover #f2f4ff:** a very pale blue measured as the hover and focus background of the nav and "Shop the drop" controls (10 area weight). In the measured hover state the text goes from #1f35f9 to #ffffff.

The root variable `--swiper-theme-color: #007aff` belongs to the Swiper carousel library and was not used as a brand color, so it is not tokenised.

## Typography

Two fonts are loaded: supplyMono 400 and ballinger 700.

- **display (supplyMono):** 12px, weight 400, line height 15px, letter spacing 0.12px, uppercase. It is used for navigation, buttons, cookie text, link labels and the footer (the footer line height is 15.6px). 659 of the measured characters are 12px.
- **headline (ballinger):** 700, 21px with -0.42px letter spacing, uppercase. In the mobile pass the 21px text measures a line height of 18.9987px; the large 64px size with -1.28px letter spacing is also measured, and its family is not recorded separately.
- **Root variables:** `--fontSupplyMono` and `--fontBallinger` hold the two stacks, each with a "Fallback" companion family.

Hierarchy is created by case, size jumps (12px, 21px, 64px) and color flips (blue on grey, white on blue), not by weight changes inside supplyMono. Font substitutes: supplyMono and ballinger are the site's own licensed fonts; the stack falls back to the generic `monospace` and `sans-serif` families.

## Layout

Root variables define the grid in rem: `--wrapperWidth: 144rem`, `--margin: 2rem`, `--gutter: 2rem`, `--marginExpanded: 4rem`, `--frameOffsetX: 2rem`, `--frameOffsetY: 0rem`, `--headerHeight: 6.8rem`, `--footerHeight: 38rem`, `--dotSize: 1rem` and `--dotSafezone: 0.5rem`. The "dot" variables correspond to the square blue markers at the frame corners.

On desktop the header is 69px high and 1280px wide, with 0px 20px padding and 5 visible header links. The hero image fills the first screen inside a dashed frame inset by 2rem. The document scroll height is 2,400px and an inner scroller reports 2,823px. The footer is 380px high (matching 38rem) with a blue fill. The densest measured card grid has 3 columns.

Measured gaps are 20px, 32px, 8px, 2px and 14.5px; paddings include 8px, 20px, 6px, 48px, 50px, 9px, 12px, 9.5px, 25px, 15.5px, 30px and 5px. The spacing tokens carry the small values.

## Elevation & Depth

The system is flat. One box-shadow was measured: the footer's `rgb(31, 53, 249) 0px 1px 0px 1px`, which is a 1px solid-blue spread, not a blur. Depth otherwise comes from photography and from layered flat panels: white boxes over the grey image, the blue bar over the white label ("[ HORIZON HIKE ]" sits on top of the blue "SHOP THE DROP" bar), and the "signed up" cards whose older entries are faded.

Frames: 1px dashed blue (#1f35f9) rules mark the page frame and the card outlines. The focus state measured on the nav and shop links is a 1px dashed outline in #1f35f9 with a 1px offset.

## Shapes

No radius was measured: `desktop.frequencies.borderRadii` is empty, so every rendered element has a computed radius of 0px. Buttons, tabs, panels, cards and the cookie bar are all square. The only non-rectangular forms are the photographed product and the portrait thumbnails. Border colors measured: #1f35f9 (5) and #ffffff (1), both thin line weights.

## Components

- **button-primary ("SHOP THE DROP"):** fill #1f35f9, white supplyMono 12px uppercase text, padding 9.5px 6px, 34px high, 0px radius. Measured width: 320px on desktop and 358px at 390px viewport.
- **button-primary-hover:** background #f2f4ff; the text turns white in the recorded after state.
- **nav (header):** 69px high, 0px 20px padding, white tabs on grey; the active tab ("HOME") is a blue fill with white text. Link tabs use blue text on white. Desktop shows the five items inline; mobile shows a MENU / Close toggle (see Responsive Behavior).
- **link ("SEE DETAILS"):** white 12px uppercase mono text (on the blue cookie bar).
- **footer:** blue #1f35f9 fill, white text, 380px high, with the sentence "Driven by culture. Telling untold stories — soul by sole." and link groups Links, Social media (Instagram, Twitter, Discord, WhatsApp), Privacy policy and Cookie policy.
- **Community feed:** small outlined cards in the bottom-right corner showing a name, "SIGNED UP N MINS AGO" and a portrait thumbnail.

The cookie notice ("We use cookies to improve your website experience", "See details", "Accept and close") is a compliance control and is not a brand component.

## Design System Architecture

No public design system or brand guideline was found: the home page links only to the shop, story, contact, privacy and cookie pages and to Instagram, TikTok, Twitter, Discord and WhatsApp. The page was fetched at https://www.permianworld.com/ and it is a Next.js site (assets under /_next/static/). The de-facto system consists of the root variables listed under Layout, two font variables and utility spacing in rem. The Swiper library variable is the only third-party token visible.

## Do's and Don'ts

Do:
- Let a single product photograph fill the grey canvas #dddddd.
- Use #1f35f9 for every active element, frame line and the footer.
- Set all interface text in supplyMono 12px uppercase.
- Keep corners at 0px and frames as 1px dashed lines.
- Use ballinger 700 for the few large statements.

Don't:
- Do not round buttons or cards; no radius was measured.
- Do not add soft shadows; the only shadow is a 1px solid-blue spread.
- Do not use #007aff (carousel library default) as a brand color.
- Do not reuse the cookie bar as a design element.

## Responsive Behavior

Measured at 390px: the header is 65px high with 0px 16px padding and shows a single header link plus a menu toggle labelled "Menu / Close"; the first role text is "MENU" in #1f35f9. The "SHOP THE DROP" button is 358px wide, 34px high. The 21px ballinger statement "Follow @permian.world & join us." is 358px wide. The stylesheet declares media queries including max-width 767px (61 rules), max-width 1023px (45), max-width 519px (21), max-width 1279px (11), min-width 1024px (10), min-width 768px (4), max-width 1439px (3), min-width 520px (3), min-width 1366px (2), max-width 374px, min-width 1921px, max-width 1365px and min-width 1280px. Layout details beyond the measured values above are not measured.

## Iteration Guide

1. Set the page to #dddddd and place one product image; keep it free of rounded masks.
2. Build the header as white tabs with blue supplyMono labels; make the active tab a #1f35f9 fill.
3. Draw 1px dashed #1f35f9 frame lines inset 2rem with 1rem square corner markers.
4. Make the call to action a full-width #1f35f9 bar, 34px high, white 12px uppercase text, padding 9.5px 6px.
5. Close with a blue footer (38rem) in white text.
6. Use ballinger 700 at 21px (-0.42px tracking) only for brief community statements.
7. Verify any new color against the measured set before adding it.
