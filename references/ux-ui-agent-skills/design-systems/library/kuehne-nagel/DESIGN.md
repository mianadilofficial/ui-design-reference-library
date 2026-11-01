---
version: alpha
name: Kuehne+Nagel
category: "Logistics & Mobility"
description: "Kuehne+Nagel global home: white canvas with deep navy #003369 and #002954 bands, action blue #0073e9 buttons (6px radius, 40px tall), SuisseIntlRegular at 18px body and 32px display, mint #08c792 highlights, flat surfaces with photographic cards."
colors:
  canvas: "#ffffff"
  ink: "#6b6969"
  primary: "#0073e9"
  on-primary: "#ffffff"
  surface-navy: "#003369"
  surface-deep: "#002954"
  ink-strong: "#393737"
  ink-black: "#000000"
  link-blue: "#0068d2"
  nav-bg: "#00000080"
  text-input-border: "#8ca3bb"
  footer-text: "#bfccd9"
  accent-green: "#08c792"
  error: "#c41b24"
  warning: "#e26f01"
  success: "#24a148"
typography:
  display:
    fontFamily: SuisseIntlRegular, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 41.6px
  display-mobile:
    fontFamily: SuisseIntlRegular, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 39px
  subheading:
    fontFamily: SuisseIntlRegular, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 33.8px
  body:
    fontFamily: SuisseIntlRegular, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: SuisseIntlRegular, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20.8px
  nav:
    fontFamily: SuisseIntlRegular, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 8px
  2xl: 12px
  3xl: 24px
  4xl: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 9.5px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 9.5px 16px
    height: 40px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.lg}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
    padding: 8px 16px
    height: 39px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-navy}"
    rounded: "{rounded.2xl}"
  footer:
    backgroundColor: "{colors.surface-deep}"
    textColor: "{colors.footer-text}"
    padding: 96px 0px 48px
---

## Overview

The Kuehne+Nagel global home page (title "Global Freight Forwarding and Supply Chain Management | Kuehne+Nagel") is a logistics company site that mixes large aerial and transport photography with crisp blue UI. The measured page is 1280px wide and 7737px tall. A transparent header sits over a full-width hero carousel (the capture shows "Where Next Season 2 | Crisis, Hope and Opportunity" with a "Watch now" link and three slide dashes); the header carries the Kuehne+Nagel wordmark, links to Services, Industries, Company and Knowledge, search and language icons, an outlined "myKN" account button and a white "Contact" button.

Directly under the hero is a white "myKN" strip ("Quote, book and full control of your shipments.") with a two-part tool: "Get an instant quote" (outlined mode buttons All modes, Sea, Air, Road) and "Track a shipment" (a Tracking ID field with a full-width blue "Search shipment" button). The page then alternates white and deep-blue sections. Headlines are statements, not slogans: "Logistics experts deliver more efficiency and visibility at every touchpoint." and "Let us help you build a customised supply chain playbook." Body copy cites scale: "close to 88,000 employees at almost 1,300 sites".

Service cards are tall portrait photographs (a container ship, a cargo jet, a bridge) with a white title at bottom-left and two buttons, "Read more" (filled white) and "Talk to an expert" (outlined). Industry chips (Aerospace, Automotive and New Mobility, Consumer, Healthcare, Tech and Semicon, Industrial, Perishables) are outlined pills, with the active one filled mint green.

Art direction favors transport at scale seen from unusual angles: a cargo ship from directly above, an airliner climbing against open sky, a curved concrete bridge underside, wing and engine details, a hangar gantry. Photographs are cool-toned and blue-leaning, which ties them to the navy bands. Microcopy uses plain service nouns (Transportation, Fulfilment, Value-added services, Supply chain management, Digital services) as tab labels and British spellings ("customised", "optimise", "Fulfilment").

## Colors

- **Canvas #ffffff** is the dominant background (9906 area-weight). **#f3f3f1** and **#f2f5f7** are warm and cool pale greys for alternating sections; `--card-bg` and `--darkblue-010` are #e5ebf0.
- **Navy #003369** (3664) and deeper **#002954** (2453, the footer and `--bg`) are the dark bands. #003369 is also the title and card-text color (`--title`, `--text-shade-01`).
- **Action blue #0073e9** is the default primary button background (`--primary-default-bg`) and the focus color (`--focus`). **#0068d2** is the default link and text-button color (`--primary-default-text`), with hover shades #005cba and a pale hover fill #bfdcf9.
- **Mint green #08c792** marks emphasis: the active industry chip, a green underline under the active tab and the divider accent (`--divider-emphasis-high`). `--accent` is #069f75.
- **Text greys:** #393737 (body and `--emphasis-high`), #6b6969 (`--emphasis-low-special`, the most-read grey text, 1030 characters), #000000 on the white utility areas, #bfccd9 for footer text on navy.
- **Status colors from root variables:** error #c41b24, warning #e26f01, success #24a148.
- **Input border** #8ca3bb (`--darkblue-045`).

The header's nav fill is a translucent #00000080 over a navy-to-clear gradient, and carousel captions use #00295499; neither is a solid brand color.

## Typography

One family: **SuisseIntlRegular** (Suisse Int'l), loaded at 400 and 600. Everything on the page, from the 64px stat numerals to the 12px legal text, uses it.

- Display (hero and section titles): 32px/41.6px, weight 400 (mobile 30px/39px).
- Subheading (card and service titles): 26px/33.8px.
- Body: 18px/27px, #393737. Footer and utility body is 16px/24px.
- Button: 16px/20.8px at weight 600.
- Nav: 16px/24px (header items measure weight 700).
- Other measured sizes: 20px, 22px, 14px (chips, 403 characters), 12px and 64px (3 characters, stat numerals).

No letter-spacing is applied anywhere. Suisse Int'l is a commercial typeface from Swiss Typefaces; a neutral grotesque such as Inter is a visual stand-in if the file is unavailable.

## Layout

Layouts are two-column splits on desktop: a large headline on the left half and a labelled paragraph ("Services", "Industries") on the right half. Cards run in a row of tall portraits that scroll past the right edge. The most frequent gaps are 8px, 24px, 12px, 48px, 16px and 32px; paddings are 24px, 16px, 8px, 9.5px (button vertical), 48px, 12px, 32px, with 96px top and 48px bottom on the footer. Large vertical section padding of 128px and 80px also appears.

## Elevation & Depth

Almost flat. The only measured shadow is a faint `0 1px 2px rgba(0,0,0,0.05)` on two elements. Depth is built from photography, gradient overlays on cards (dark at the bottom so white titles stay readable), and the white/navy band rhythm.

## Shapes

Measured radii: 6px (44 elements, buttons), 12px (26, cards), 9999px (23, chips and pills), 4px (12), 24px (7), 2px (5), 3px, 8px (inputs) and 100px. Primary buttons use 6px; cards use 12px; filter chips are full pills.

## Components

- **Primary button**: #0073e9 fill, white 16px/600 label, 6px radius, 9.5px 16px padding, 40px tall ("Read more", "Search shipment").
- **Outlined button**: transparent with a 1px #ffffff border on dark photography ("myKN", "Talk to an expert"); on white, outlined mode buttons use #0068d2 text and a #0068d2 border.
- **White button**: white fill with blue text for the "Contact" header button; on hover it turns pale blue (#bfdcf9) with #003369 text.
- **Input**: white, 1px #8ca3bb border, 8px radius, 8px 16px padding, 39px tall.
- **Service card**: 12px radius portrait photograph, white title, two buttons.
- **Chip**: pill-shaped outline, white text on navy; active chip is mint #08c792.
- **Tabs**: #003369 bold text with a mint underline on the active tab.
- **Footer**: #002954 background, #bfccd9 text, 96px top padding.

## Design System Architecture

Kuehne+Nagel does not publish a public design system that was found: https://www.kuehne-nagel.com/ was opened and has no brand or design-system link, and `/en/about-us`, `/en/about-us/brand` and `/en/press` returned 404. The shipped CSS is a documented-by-name token system with about 400 root variables. Color scales follow `--darkblue-005 … 120`, `--actionblue-005 … 120`, `--lightblue-005 … 120`, `--lightgreen-005 … 110`, `--neutral-001 … 100` and `--alerts-{red,orange,green}-NNN`, plus semantic aliases (`--primary-default-bg`, `--primary-default-text`, `--emphasis-high`, `--emphasis-low-text`, `--border-default`, `--focus`, `--disabled-bg`, `--info-bg`, `--warning-bg`). The page also contains Shoelace (`--sl-*`) variables. The pattern is a numeric tonal ramp per hue with role-based aliases on top.

## Do's and Don'ts

- Do use #0073e9 for the primary action and #0068d2 for text links and outlined controls.
- Do alternate white sections and deep navy (#003369 / #002954) bands.
- Do set headlines in SuisseIntlRegular at 400 weight, 32px for page statements.
- Do use mint #08c792 sparingly for active state and dividers.
- Don't add heavy shadows; the page is flat.
- Don't use pure black for headings on white: titles are #003369.
- Don't round buttons beyond 6px; reserve full pills for chips.
- Don't put text directly on photographs without the dark gradient overlay.

## Responsive Behavior

The 390px mobile pass measured: display 30px/39px (white), card title scale 24px (measured as the mobile size for the 26px desktop subheading), body 18px/27px, primary button 16px/600 on #0073e9 with 6px radius, and a header with a translucent #00000080 fill. Column counts and menu behavior were not measured.

## Iteration Guide

1. Pull colors from the frontmatter; never write a raw hex that has a token.
2. New hero or card text on photography needs a navy gradient behind it.
3. Use the tonal root-variable names (`--actionblue-110` etc.) as the vocabulary for any further shade you need, but only add one after confirming it in `web/data/extracted/kuehne-nagel.json`.
4. Primary buttons are 40px tall with 6px radius.
5. Run `node web/scripts/verify-designs.mjs --slug=kuehne-nagel`.
