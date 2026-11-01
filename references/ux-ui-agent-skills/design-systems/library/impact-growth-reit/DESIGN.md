---
version: alpha
name: IMPACT Arena, Exhibition and Convention Center
category: "Thai Brands"
description: "Event-venue site for IMPACT Muang Thong Thani, set in Helvetica Neue on a light grey #ededed canvas with a #1c3fa3 pill call-to-action (9999px radius, 15px type, 1px tracking), black #000000 body ink, 44px display headings and 8px-radius white event cards."
colors:
  canvas: "#ededed"
  ink: "#000000"
  primary: "#1c3fa3"
  on-primary: "#ffffff"
  surface-dark: "#202020"
  ink-muted: "#696969"
  ink-nav: "#242733"
  ink-on-dark: "#ffffffb3"
  logo-blue: "#005da5"
  logo-orange: "#f26c21"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 57.2px
  display-mobile:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 39px
  subheading:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 35px
    letterSpacing: 1px
  nav:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 42px
rounded:
  xs: 2px
  sm: 8px
  md: 20px
  lg: 25px
  pill: 9999px
spacing:
  s1: 3px
  s2: 3.5px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8.5px
  s8: 10px
  s9: 15px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 25px
    height: 37px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px
---

## Overview

This file describes the site that answers at `https://www.impact.co.th/` (redirecting to `/en/`): the venue website of **IMPACT Arena, Exhibition and Convention Center** in Muang Thong Thani, Thailand. The page title is "IMPACT Arena, Exhibition and Convention Center" and the body copy says "At IMPACT Exhibition Management Co., Ltd., we proudly operate IMPACT Arena, Exhibition and Convention Center in Muang Thong Thani". The queue entry for this slug names a REIT, but the measured site is the venue operator's own website, so this DESIGN.md is named after the measured site, not after the REIT.

The visual character is that of a public-facing venue and ticketing hub. The header is a white bar 100px tall holding the IMPACT MUANG THONG THANI logo, six uppercase letter-spaced links (VISITORS, ORGANIZERS, WHO WE ARE, MEDIA, Plan Your Event, Contact), a language switch (EN) and a search icon. Below it a full-width photographic hero (an interior concourse in the capture) leads into a light grey page. The homepage then runs as a sequence of bands: a "What's On" carousel of event posters with dates and venue names, a centred "All events" pill, an "IMPACT BEYOND THE SPACE" brand block with a photo of the complex, and a "Services | Packages" tab block with a row of tall photographs. The tagline on the page is "IMPACT BEYOND THE SPACE", with the word IMPACT set in the blue #1c3fa3.

The brand voice is plain and service-oriented: short nouns for navigation, event names in the posters' own art direction, and button labels such as "More updates", "Who we are" and "All events". The posters are the colour in the page; the interface itself stays restrained, with one saturated blue for actions and links in hover state.

## Colors

The page background is `canvas` #ededed (the body role and the largest on-screen area in the capture). Content cards sit on white (#ffffff). Primary text is `ink` #000000, the most-read text colour (2582 characters). Navigation and headings such as "What's On" use `ink-nav` #242733, secondary copy such as event venue lines uses `ink-muted` #696969. A dark footer band uses `surface-dark` #202020, and its small legal text uses `ink-on-dark` #ffffffb3 (white at partial alpha), as measured on the "Contact Us | Privacy Policy | Terms and Conditions" line.

`primary` #1c3fa3 is the fill of every pill call-to-action ("More updates", "Who we are", "All events") with `on-primary` #ffffff text. The same blue is the hover colour of the navigation links (measured: VISITORS, ORGANIZERS and WHO WE ARE change from #242733 to #1c3fa3 on hover) and the colour of the "IMPACT" lead word in the brand block. The primary button's measured hover state is the same blue at 0.8 alpha (rgba(28, 63, 163, 0.8)).

Two further colours come from the venue's own Corporate Identity manual (version August 2026, a PDF linked from `/en/news-media/corporate-identity`), page 7 "Colour Codes": the logo blue, RGB 0 / 93 / 165 (Pantone 2935 C), recorded as `logo-blue` #005da5, and the logo orange, RGB 242 / 108 / 33 (Pantone 1505 C), recorded as `logo-orange` #f26c21. The manual says blue is the dominant of the two corporate colours and that in two-colour printing blue should always be used; it describes blue as trustworthy and dependable, orange as eagerness, energy and vitality. These two values are logo colours cited from the manual; the live-site measurement did not record them as page colours, and an orange pill labelled "Plan Your Event" in the header of the capture was not measured, so its colour is not documented here.

## Typography

The site sets everything in the stack `"Helvetica Neue", Helvetica, Arial, sans-serif` (4599 of the measured characters are Helvetica Neue). A secondary family, Roboto at 400 and 500, appears only inside an embedded map widget (the Satellite and Map buttons), which is a third-party control and not brand typography.

The measured scale is: `display` 44px / 57.2px at weight 400 (section headings such as "What's On"); `display-mobile` 30px / 39px at weight 400 in the 390px pass; `subheading` 16px / 24px for event titles; `body` 12px / 19.2px for footer and small copy (the page body itself is measured at 16.5px / 24.75px); `button` 15px / 35px with 1px letter-spacing; `nav` 28px / 42px at weight 500 for the measured nav anchor. Header links are 16px uppercase with 2px letter-spacing (measured on the header element). Weights are light: 400 dominates (4047 characters), with 500 for emphasis.

The Corporate Identity manual specifies different typefaces for documents: Cordia for Thai text and Arial for English text in formal documents (page 13), and the typeface Sukhumvit (Light, Regular, Bold) for Thai media publications (page 14). The website itself does not load these; its loaded web fonts are Roboto 400/500 and Font Awesome 5 Free. If a substitute is needed for the Helvetica Neue stack, Arial is the manual's English document face.

## Layout

The measured desktop page is 1280px wide and 4884px tall. Sections are separated by large vertical gaps on the grey canvas; the event carousel shows five poster cards across with arrow controls at the edges and a "What's On" heading centred above. The brand block is a two-column split: text and a pill button on the left, a wide landscape photograph on the right. The "Services | Packages" block is a centred two-word tab heading followed by a row of five tall portrait photographs with tight gutters.

Measured gaps are small (3.5px, 4px, 8.5px, 15px) for inline icon-and-label pairs; measured paddings are 10px (156 uses), 40px (75 uses) and 20px (55 uses), which the page uses for card interiors and section insets. The header is 100px tall and the footer is a dark band with centred legal links.

## Elevation & Depth

Depth is almost absent. The only card-level shadow measured is `rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px` on an 8px-radius white card (the parking and directions card). The embedded map controls carry `rgba(0, 0, 0, 0.3) 0px 1px 4px -1px`, which belongs to the third-party widget. Buttons and the header carry no shadow. Elevation is otherwise communicated by white cards against the #ededed canvas and by full-bleed photography.

## Shapes

Radii measured on the page are 2px (map control corners), 8px (cards), 20px and 25px (single elements), 50% (round icon buttons) and 888px, which renders as a full pill on 37px-high buttons. The token `pill` is 9999px for that reason. The overall shape language is rectangular photographs and posters with square corners, plus one pill-shaped action style.

## Components

**Primary button.** Pill, `primary` #1c3fa3 fill, `on-primary` #ffffff text, 15px type with 1px tracking, 0px 25px padding, 37px tall, widths from 127px to 157px depending on label (All events 127px, Who we are 141px, More updates 157px). Hover lowers the fill to 0.8 alpha. The extraction found the same style on three buttons, so no separate secondary style is documented.

**Navigation.** White `nav` bar, text `ink-nav` #242733, uppercase, 16px, 2px tracking, 100px tall; hover turns link text and border to #1c3fa3. "Contact Us" in the utility strip hovers to a light grey rgb(178, 178, 178).

**Event card.** A poster image on top, then a bold date range ("09-11 OCT 26"), the event title and a small pin-labelled venue line (IMPACT Exhibition Center, IMPACT Arena, IMPACT Challenger), on a white surface.

**Info card.** White, 8px radius, with the two-layer grey shadow above, used for the parking guidance ("Nearest parking spots").

**Link.** Black `ink`, 16px / 24px, no underline in the measured state.

## Design System Architecture

No public design system exists for the website. The venue publishes a Corporate Identity manual (78 pages, "IMPACT CORPORATE IDENTITY", Corporate Communications Department, August 2026) at `https://www.impact.co.th/documents/corporate-identity/impact-corporate-identity-2026-08-14.pdf`, which covers the brand attributes (Proficient Partner, Passionate Professional, Progressive Platform, Personalised Solution), the brand promise "IMPACT = Value of Place + People", logo clear space (x1 on every side; total area x15.3 horizontally and x5 vertically), a minimum logo width of 2.5 cm, permitted logo colourways (blue, black, gold, grey, reversed on blue/black/gold/grey) and signage, stationery and PowerPoint templates. The manual does not define a web component library.

The shipped site CSS exposes Bootstrap-style variables (`--bs-body-color`, `--bs-primary` and similar) and UIkit breakpoints (`--uk-breakpoint-s` 640px, `-m` 960px, `-l` 1200px, `-xl` 1600px). The values of the Bootstrap variables (for example `--bs-primary-rgb` 13,110,253 and a yellow `--bs-primary` #f3c565) do not match what the page renders for its buttons, so they are framework variables, not brand tokens, and none of them is used here. The real system is de facto: one blue (#1c3fa3), black text, grey canvas, white cards.

## Do's and Don'ts

- Do use #1c3fa3 for actions and hover states, with #ffffff text inside pill buttons 37px tall.
- Do keep the canvas #ededed and white cards; let event posters carry the colour.
- Do set the logo only in the manual's permitted colourways; the manual forbids recolouring, distortion and placing the logo on busy imagery (page 12 shows a boxed or light-background treatment instead).
- Do write logo text in capitals: the manual says "IMPACT MUANG THONG THANI" must be all capitalised.
- Don't add shadows to buttons or header; the measured buttons have none.
- Don't use the third-party map widget's Roboto or its #565656 button text as brand type or colour.
- Don't treat the framework variable --bs-primary as the brand blue.

## Responsive Behavior

Measured at a 390px viewport: the heading "What's On" renders at 30px / 39px (token `display-mobile`), body text at 14px / 20px, and the primary button keeps the same 15px type, 37px height and pill radius. The mobile measurement recorded no layout, navigation or breakpoint behaviour, so how the header, carousel and brand block rearrange is not measured. The shipped CSS declares UIkit breakpoints at 640px, 960px, 1200px and 1600px, but which rules attach to them was not measured.

## Iteration Guide

1. Start from the tokens above; change a value only after a new measurement.
2. For a new page, set the canvas to #ededed, headings to `display` 44px, and place one pill button in #1c3fa3.
3. Keep event posters full-bleed in their card with a bold date line, a 16px title and a small venue line.
4. For print or signage consult the August 2026 Corporate Identity manual, not the website, for logo blue #005da5 and orange #f26c21 usage.
5. Re-run `node web/scripts/verify-designs.mjs --slug=impact-growth-reit` after edits.
