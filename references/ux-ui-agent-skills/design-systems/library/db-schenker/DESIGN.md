---
version: alpha
name: DSV
category: "Logistics & Mobility"
description: "DSV global transport and logistics site, which now serves dbschenker.com after the Schenker merger: white #ffffff canvas, #181818 text in FoundrySterling (800-weight headlines at 48px and 36px, 15px body), sharp 0px corners, DSV blue #0a34a1 buttons and a #002664 navy footer."
colors:
  canvas: "#ffffff"
  ink: "#181818"
  primary: "#0a34a1"
  on-primary: "#ffffff"
  primary-hover: "#072779"
  surface-subtle: "#eff0f0"
  surface-navy: "#1c4178"
  surface-footer: "#002664"
  ink-muted: "#83878d"
  ink-secondary: "#646768"
  link-on-dark: "#4b87e0"
  hairline: "#cdd0d3"
typography:
  display:
    fontFamily: FoundrySterling, Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 800
    lineHeight: 57.6px
  display-mobile:
    fontFamily: FoundrySterling, Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 48px
  heading:
    fontFamily: FoundrySterling, Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 800
    lineHeight: 43.2px
  heading-mobile:
    fontFamily: FoundrySterling, Helvetica, Arial, sans-serif
    fontSize: 30px
    fontWeight: 800
    lineHeight: 36px
  subheading:
    fontFamily: FoundrySterling, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 800
    lineHeight: 24px
  body:
    fontFamily: FoundrySterling, Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: FoundrySterling, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
  nav:
    fontFamily: FoundrySterling, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  caption:
    fontFamily: FoundrySterling, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16.8px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
  s11: 24px
  s12: 48px
  s13: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 30px
    height: 45px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    height: 116px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 12px 15px
    height: 46px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.link-on-dark}"
    typography: "{typography.caption}"
    rounded: "{rounded.none}"
---

## Overview

The queued address, dbschenker.com, no longer hosts a separate DB Schenker site: it redirects to https://www.dsv.com/en, and that page carries the notice "dbschenker.com has been merged into DSV.com." and the heading "DSV and Schenker have joined forces". The measured site is therefore DSV's global transport and logistics website (page title "Global Transport and Logistics | DSV"), and this file is named after the measured site, DSV. The Schenker legacy shows up only as labels: the login block reads "myDSV (formerly DB Schenker Connect)", and the tracking area offers "Track Schenker shipment".

The design is a corporate, task-first logistics portal. The hero is a full-bleed photograph with a dark overlay, white 800-weight headline "50 years of keeping the world connected", a one-line subtitle ("From humble beginnings to driving global growth through supply chain excellence. And we're just getting started.") and a single blue button, "See what´s next". Immediately under the hero, a three-column white panel overlaps the photograph and lets visitors log in ("Existing customer"), get a quote with mode tabs (Road Freight, Air Freight, Sea Freight, Contract Logistics) or track a shipment with an ID field. Below, "Access all your digital logistics solutions in one place" introduces a row of photographic cards ("Quote, book & manage shipments", "Manage warehouse & inventory insights", "Track and monitor your shipments in real time", "Control your supply chain end to end") each ending with a blue arrow link such as "Start with myDSV" or "Explore SCMS". A purple-dusk banner titled "Driven by curiosity" with a "Read more" button, news, and a navy footer follow.

Everything is rectangular and sharp: buttons, inputs and panels have 0px radius. One typeface, FoundrySterling, carries every one of the 5222 measured characters. Blue is the only action color, and photography (people at work, containers, ships) supplies warmth.

## Colors

- **Canvas `#ffffff`** is the page background (the largest measured area) and the nav bar background.
- **Ink `#181818`** is the most-read text color (3747 characters): headings, body, link titles and input text.
- **Primary `#0a34a1`** is the fill of every measured call-to-action: "See what´s next", "Track", "Login", "Ask our chatbot", "Register now", plus the "Book" and "Track" buttons in the header. **on-primary `#ffffff`** is the label color. On hover the fill changes to **`#072779`** (measured hover: `rgb(10, 52, 161)` to `rgb(7, 39, 121)`).
- **surface-subtle `#eff0f0`** is the pale grey section background (the second-largest area), **surface-navy `#1c4178`** a mid-navy panel color, and **surface-footer `#002664`** the footer background; a 40%-alpha navy `#00266466` is also measured as a background.
- **ink-muted `#83878d`** and **ink-secondary `#646768`** are secondary text colors measured on 99 and 76 characters; **link-on-dark `#4b87e0`** is the link color inside the footer; **hairline `#cdd0d3`** is the 1px border color of inputs.

The measured `#0000ee` on the "Back to Homepage" link is the browser default link color on a hidden skip link and is not a brand color. The cookie consent overlay (`coiOverlay`) loads its own greens such as `#2C622C` and `#234923` as root variables; it is a third-party layer and is excluded. No dark theme was measured.

## Typography

A single family, **FoundrySterling**, declared with `@font-face` in three weights, 400, 600 and 800, with the fallback stack `Helvetica, Arial, sans-serif`. Letter-spacing is `normal` on every measured role.

| Role | Size / line height | Weight |
|---|---|---|
| display (h1) | 48px / 57.6px | 800 |
| display-mobile | 40px / 48px | 800 |
| heading (h2) | 36px / 43.2px | 800 |
| heading-mobile | 30px / 36px | 800 |
| subheading (h3 and card titles) | 20px / 24px | 800 |
| body | 15px / 21px | 400 |
| button | 16px / 19.2px | 600 |
| nav | 16px / 18.4px | 400 |
| caption (footer) | 12px / 16.8px | 600 |

Line heights are consistently 1.2 for headlines (57.6px over 48px, 43.2px over 36px, 24px over 20px) and 1.4 for body (21px over 15px). The most-read size is the 15px body (2713 characters), followed by a 28px size (1081 characters) whose role was not identified, then 20px and 16px. Weights measured are 400, 600, 700, 800 and 900. Headlines are sentence case and bold-heavy, with a "title, then link" rhythm in the cards.

## Layout

The measured page is 7316px tall at the 1280px viewport. The header is 116px high on desktop, with the DSV wordmark at the top left, small utility items (Search, Login, Global) and the "Book" and "Track" buttons at the right, and a second row of text navigation: Solutions, Insights, Sustainability, About DSV, Careers and Self-service. The content area follows a left margin shared by the logo, headlines and cards.

The quote panel is a three-column white card that overlaps the hero's lower edge: customer login and registration on the left, the quote form in the middle (From and To location selects with city or postal code inputs and a "Next" button, next to the sentence "Get instant price - no registration needed"), and tracking with a "Track" button on the right. Cards below form a row that extends past the right edge of the capture, with a progress bar beneath it, and the footer is 917px tall with link columns on navy.

Measured spacing: 1px, 2px, 4px, 6px, 8px, 10px, 12px, 15px, 16px, 20px, 24px, 48px and 60px. The most frequent gap and padding is 24px; the next most frequent gaps are 10px, 60px and 48px, and paddings 16px and 12px.

## Elevation & Depth

Depth is limited. One shadow was measured on the page: `rgba(0, 0, 0, 0.2) 0px 8px 16px 0px`; the element that carries it was not identified, but the capture shows the quote panel lifted above the hero photograph. Everything else is flat: input fields use a 1px `#cdd0d3` border, and cards are separated from the page by photography and white space, not by shadows. The hero uses a dark photographic overlay to make white text readable. A cookie consent overlay (`coiOverlay`) was hidden before measuring and is not a design element.

## Shapes

Every measured element has a 0px radius: buttons (`button-primary`), inputs, the nav bar, the footer, and panels (`rounded.none: 0px`). The shipped CSS also lists 2px, 4px, 5px, 18px, 30px and 100px radii, but none were seen on a measured visible element, so no rounded tokens exist. The only soft shapes on the page are in the photography and the small circular check icons in the "New to DSV?" list in the capture.

## Components

- **Primary button (`button-primary`)**: `#0a34a1` fill, `#ffffff` text, FoundrySterling 16px weight 600, padding 12px 30px, 45px high, 0px radius. Every measured call-to-action shares these values (the "Ask our chatbot" button measures padding 12px 16px). Hover fill `#072779`.
- **Text input (`text-input`)**: `#ffffff` fill, `#181818` text at 15px, 1px solid `#cdd0d3` border, padding 12px 15px, 46px high, 0px radius. The select fields and placeholders ("Select Location", "Provide City or Postal code", "Enter ID number") use the same outlined style in the capture.
- **Link / card title (`link`)**: `#181818`, FoundrySterling 20px weight 800, with a blue arrow link beneath each card.
- **Navigation (`nav`)**: white, 116px high header; the text links use the 16px regular nav style.
- **Mode tabs**: in the capture, the selected tab ("Road Freight") is a filled blue button with an icon and the others are outlined; measurements of the tab styles were not recorded separately.
- **Footer (`footer`)**: `#002664` background, `#4b87e0` link text at 12px weight 600, sections titled "Online Tools", "Our Solutions", "DSV", "Legal" and "Follow Us"; the copyright line reads "© DSV 2026 - All rights reserved".

## Design System Architecture

No public design system exists for this site: the home page and the press page link no brand guidelines. The official brand material found is a media kit at https://www.dsv.com/en/about-dsv/press/media-kit with a logo page (https://www.dsv.com/en/about-dsv/press/media-kit/the-dsv-logo), which states: "The minimum margin of space around the logo should be equal to the height of the logo." It offers the logo as ".gif, .jpg and .eps" downloads and gives no colors or typefaces. The home page was opened at https://www.dsv.com/en.

The de-facto system is visible in the measurements. There are no brand custom properties on `:root` (the ones found belong to the cookie consent layer). The visual vocabulary is small: one family in three weights, one blue button, white and pale-grey sections, a navy footer. The same button measurements (12px 30px, 45px high) repeat across the measured calls to action; the class names were not recorded.

## Do's and Don'ts

Do:
- Use `#0a34a1` as the single action color with white 600-weight labels, 45px high, 0px radius, and darken to `#072779` on hover.
- Set headlines in FoundrySterling 800 at 48px and 36px with line heights of 1.2.
- Keep corners square on buttons, inputs, panels and nav.
- Group tasks (login, quote, track) in one white panel that overlaps the hero photograph.
- Pair photography of people, containers and ships with short blue arrow links.
- Leave the logo a margin equal to the logo's height, as DSV's logo page states.

Don't:
- Do not use `#0000ee` (browser default) or the cookie layer's greens as brand colors.
- Do not round corners; none were measured.
- Do not add colored accents beyond the blue family and the navy footer.
- Do not add heavy shadows; one soft 0.2-alpha shadow was measured.
- Do not use light weights; the measured weights are 400 and above.

## Responsive Behavior

A fresh 390px mobile pass was recorded. Measured: the h1 changes from 48px to 40px (line height 48px), the h2 from 36px to 30px (line height 36px), the 28px size becomes 22px, and body text stays 15px with a 21px line height. The primary button keeps its desktop measurements (16px, padding 12px 30px, 45px high). The header measured 73px high on mobile (116px on desktop), and its text reads "Back to Homepage" and "Mobile Menu". The h1 and h2 blocks measured 351px wide in the 390px viewport.

How the quote panel columns, card carousel and footer columns rearrange on a phone was not measured. Breakpoints were not recorded.

## Iteration Guide

1. Set the page to `#ffffff`, text to `#181818`, and load FoundrySterling at 400, 600 and 800 with the Helvetica and Arial fallbacks.
2. Build the scale: 48px and 36px at 800 for headlines, 20px at 800 for card titles, 15px at 400 for body, 16px at 600 for buttons.
3. Create the one button: `#0a34a1`, white label, 12px 30px padding, 45px high, 0px radius, hover `#072779`.
4. Create the outlined input: 1px `#cdd0d3`, 46px high, 12px 15px padding.
5. Compose the home page as hero photo, overlapping three-column task panel, photo cards with arrow links, then a `#002664` footer.
6. On mobile use 40px and 30px headlines and verify the unmeasured layout changes before copying them.
