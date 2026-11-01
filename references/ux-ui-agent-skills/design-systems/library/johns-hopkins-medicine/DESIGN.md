---
version: alpha
name: Johns Hopkins Medicine
category: "Healthcare & Wellness"
description: "Johns Hopkins Medicine home page: white canvas with #eaeff1 bands and navy and teal message blocks, Noto Serif display at 42.6421px with 8px tracking over Noto Sans 16px body, square #0078d3 buttons and a #09141e footer."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#0078d3"
  on-primary: "#ffffff"
  surface-2: "#eaeff1"
  surface-3: "#09141e"
  ink-3: "#000000"
  ink-4: "#6da5c5"
  ink-5: "#006dc7"
  ink-6: "#002c77"
  hairline: "#dcdcdc"
  nav-text: "#0070c9"
typography:
  display:
    fontFamily: "\"Noto Serif\", serif"
    fontSize: 42.6421px
    fontWeight: 400
    lineHeight: 59.6989px
    letterSpacing: 8px
  display-mobile:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 36px
    fontWeight: 300
    lineHeight: 43.2px
  heading:
    fontFamily: "\"Noto Serif\", serif"
    fontSize: 37.008px
    fontWeight: 400
    lineHeight: 51.8112px
  subheading:
    fontFamily: "\"Noto Serif\", serif"
    fontSize: 28.1341px
    fontWeight: 400
    lineHeight: 39.3877px
  body:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  link:
    fontFamily: "\"Noto Serif\", serif"
    fontSize: 25.008px
    fontWeight: 400
    lineHeight: 35.0112px
rounded:
  xs: 20px
  none: 0px
spacing:
  s1: 8px
  s2: 9.6px
  s3: 12px
  s4: 16px
  s5: 17.6px
  s6: 19.2px
  s7: 20px
  s8: 21.6px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px 48px 16px 21.6px
    height: 58px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px 48px 16px 21.6px
    height: 58px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 8px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

Johns Hopkins Medicine (https://www.hopkinsmedicine.org/) is the health system's public home page. The measured page is 1280px wide and 6396px tall with 388 visible elements, titled "Johns Hopkins Medicine". The first extraction in this run (default browser) returned an unstyled page because the site's CSS did not load; it was re-measured with the extractor's `--stealth` mode, which returned the styled site, and the tokens here come from that second measurement. The extraction also recorded a hidden "menu-overlay" scrim, which is not documented as brand UI.

The page opens with a navy header carrying the Johns Hopkins Medicine shield logo, a "Menu" button, "Search" and "MyChart Login". Under it, a full-width hero photograph of two hands clasped carries the h1 "Johns Hopkins Medicine" in white serif letters with wide tracking (8px). Then a pale blue-grey band (#eaeff1) holds four large icon tiles (Doctors, Locations, Appointments, MyChart) with big blue line icons and small arrow glyphs. Further down are: "Payments and Billing Assistance" with two columns of links; an outlined box "Feeling Sick? Learn Where to Go for Care" with a grey "Learn more" button; two story cards ("#1 in Maryland, #1 in Florida*", "Top Ranked"); a solid navy notice band for UnitedHealthcare patients with a white-outlined "Learn more." button; a "Research Saves Lives" panel; a "News and Features" row with three photo cards; four blue "Further reading" buttons (Publications, Health Information, Newsroom, E-Newsletters); a School of Medicine panel; a deep teal research panel; and a near-black footer with language links and social icons.

The tone is institutional and reassuring: plain declarative headings, large serif titles, factual rankings, and photography of clinicians and patients. Color bands (navy, teal, pale blue) signal separate message blocks.

## Colors

- **canvas #ffffff** is the page background (weight 3567).
- **surface-2 #eaeff1** is the pale blue-grey band behind the icon tiles and story cards (1987).
- **surface-3 #09141e** is the near-black navy of the footer (636). Other measured band fills not tokenised: teal #007078 (583), navy #002d74 (424), light grey #f5f5f5 (89), #dcdcdc (16) and #e9e8e6 (15, "Learn more" buttons).
- **ink #333333** is the main text color (1249), **ink-3 #000000** (681) is for headings such as the card titles.
- **primary #0078d3** is the bright blue fill of the "Further reading" buttons (78), with **on-primary #ffffff** text.
- **ink-4 #6da5c5** (388) is the light blue text used on dark backgrounds, **ink-5 #006dc7** (114) is the blue for inline links and **ink-6 #002c77** (45) is a dark navy text.
- **nav-text #0070c9** is the blue of nav and skip links.
- **hairline #dcdcdc** is the 1px border color of cards.

The social icon colors (#3b5998 Facebook, #00aced Twitter) are third-party brand colors and are not tokens.

## Typography

"Noto Serif" (400) is the display and heading face (640 weighted characters) and "Noto Sans" (400 and 700; 2793) is the text and button face; "Trebuchet MS" appears on 50 characters and "Material Icons" supplies glyphs.

- **display** Noto Serif 42.6421px / 59.6989px, weight 400, letter-spacing 8px (the hero h1).
- **heading** Noto Serif 37.008px / 51.8112px (h2 such as "Payments and Billing Assistance").
- **subheading** Noto Serif 28.1341px / 39.3877px (h3 such as "Feeling Sick? Learn Where to Go for Care").
- **link** Noto Serif 25.008px / 35.0112px, for the large icon-tile labels ("Doctors").
- **body** Noto Sans 16px / 28px, weight 400.
- **display-mobile** measured in the 390px pass: the h1 is 36px / 43.2px, weight 300, in a system sans stack (-apple-system, system-ui, Segoe UI, Roboto, Oxygen, Ubuntu, Helvetica Neue, Arial).

Light-weight serif headings at large sizes paired with a regular sans body give the page an academic, journal-like tone. Both families are open-source Google Fonts.

## Layout

A centered content column on a 1280px page. Sections alternate between white and tinted bands that run full width, with content cards of equal width in rows of four (icon tiles), two (story cards) or three (news cards). Outlined framed panels (a thick navy or light border around "Research Saves Lives" and "Feeling Sick?") break the flow.

Spacing tokens measured: 8px, 9.6px, 12px, 16px, 17.6px, 19.2px, 20px, 21.6px, 24px and 32px. Buttons have padding 16px 48px 16px 21.6px and a 58px height (the right padding leaves space for an arrow). Navigation links have 8px padding. The root variables declare form dimensions: --input-height 56 (48 at tablet-large), --select-border-radius 5px, --input-border-width 2px.

## Elevation & Depth

No box shadows were measured on the page. The only declared shadow is in the select dropdown variable (--select-dropdown-shadow: 0 2px 4px rgba(0,0,0,.2)). Cards sit on the pale band with 1px #dcdcdc outlines, and depth comes from tinted bands, the dark footer and framed panels.

## Shapes

The page is almost entirely square. The measured radii list contains one entry, 20px 0px 0px (weight 12, a single rounded top-left corner whose element was not identified). Tokens: xs 20px and none 0px. Buttons, cards, bands and photographs have 0px radius; the select control variable declares 5px but was not used on the measured page.

## Components

- **button-primary** and **button-secondary**: #0078d3 fill, white Noto Sans 16px text, square corners, padding 16px 48px 16px 21.6px, 58px height, trailing chevron ("Publications", "Newsroom", "Health Information", "E-Newsletters").
- **neutral button**: #dcdcdc or #e9e8e6 fill with dark text at 18px ("See more stories", "Learn more").
- **outlined button**: transparent or navy (#002d74) fill, 3px solid white border, 18px white text ("Learn more." on the navy notice band).
- **nav / nav-link**: white background, #0070c9 text, 8px padding.
- **icon tile**: pale background, large blue line icon, serif label, small arrow corner.
- **footer**: #09141e with white text.

Hover on a neutral "Learn more" button: the background stays #e9e8e6 and the text gains an underline (measured).

## Design System Architecture

No public design system for Johns Hopkins Medicine is linked from the home page, so none is cited. The shipped CSS shows form-component variables on the root: `--input-height`, `--input-height--tablet-l`, `--select-bg`, `--select-border`, `--select-border-radius`, `--select-chevron-size`, `--select-dropdown-shadow`, indicating a small component token set for selects and inputs, with a tablet-large breakpoint suffix. The rest of the system is implicit: two Noto families, a blue accent ladder (#0078d3, #006dc7, #0070c9, #002c77) and full-width color bands. Source: the measured root variables in web/data/extracted/johns-hopkins-medicine.json from https://www.hopkinsmedicine.org/.

## Do's and Don'ts

- Do set titles in Noto Serif regular at large sizes and body copy in Noto Sans 16px / 28px.
- Do keep corners square on buttons, cards and bands.
- Do use #0078d3 for the standard button fill and navy #002d74 or teal #007078 for full-width message bands.
- Do frame important notices with a thick outlined panel.
- Do pair each message block with human photography.
- Don't add shadows or rounded pills.
- Don't use the social brand colors as UI colors.
- Don't treat the unstyled first extraction (browser-default Times and #0000ee links) as the brand; it was a CSS-load failure.

## Responsive Behavior

Measured in the 390px mobile pass: h1 36px (weight 300, system sans stack, 43.2px line-height) against 42.6421px serif on desktop; body 15px. The root variables declare a smaller input height at the tablet-large breakpoint (48 versus 56). Other mobile layout behavior is not measured.

## Iteration Guide

1. White page with #eaeff1 bands; text #333333.
2. Headline in Noto Serif 42.6421px with 8px tracking on a photographic hero.
3. Body in Noto Sans 16px / 28px.
4. Blue (#0078d3) square buttons 58px high with a trailing chevron.
5. Navy or teal message bands with white outlined buttons.
6. Footer #09141e.
7. Run `node web/scripts/verify-designs.mjs --slug=johns-hopkins-medicine`.
