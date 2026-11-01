---
version: alpha
name: Vocom International Telecommunication
category: "Thai Brands"
description: 'Vocom International Telecommunication (vocom.com): telecom wholesaler home page with a data-center photo hero, VOCOM wordmark in white Lato 700 70.6667px on an indigo #20124d label, mint #9dcfc4 services field, three-column square photo tiles, no shadows or buttons.'
colors:
  canvas: '#9dcfc4'
  page-body: '#ffffff'
  ink: '#20124d'
  primary: '#20124d'
  ink-soft: '#434343'
  ink-black: '#000000'
  ink-dark: '#212121'
  ink-light: '#dadce0'
typography:
  display:
    fontFamily: Lato, Arial
    fontSize: 70.6667px
    fontWeight: 700
    lineHeight: 117.78px
  display-mobile:
    fontFamily: Lato, Arial
    fontSize: 48px
    fontWeight: 700
    lineHeight: 80.0016px
  body:
    fontFamily: Lato, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
  nav:
    fontFamily: Lato, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 10px
  sm: 18px
  md: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 14.8px
  s8: 16px
  s9: 24px
  s10: 48px
components:
  nav:
    textColor: '{colors.page-body}'
  nav-link:
    textColor: '{colors.page-body}'
    typography: '{typography.nav}'
  footer:
    textColor: '{colors.ink}'
---

# Vocom International Telecommunication

## Overview
Vocom International Telecommunication, Inc. (`https://www.vocom.com`, measured at `https://www.vocom.com/`, page title "VOCOM") is a telecom wholesaler whose home page is a catalogue of services. The extractor found 401 visible elements on a 1280px-wide, 3281px-tall page. The copy states "With over 20 years of industrial experience, we have expande..." and the page tagline reads "TODAY'S COMMUNICATION FOR TOMORROW'S WORLD". The footer reads "Contact Us" and "Vocom International Telecommunication, Inc ⓒ2...".

The capture opens on a full-bleed photograph of a data-center aisle with blue-lit server racks. Over it, the wordmark "VOCOM" is set in white 70.6667px bold inside a solid deep-purple label (#20124d), and beneath it "INTERNATIONAL TELECOMMUNICATION INC" in white capitals on the same purple. A small top bar holds the maroon checkered Vocom emblem, the name, and the links "Home", "Products & Services" (with a dropdown chevron), "About Us" and a search icon. Below the hero, the tagline sits on white, then a mint-teal field (#9dcfc4) holds a three-column grid of square-cornered photographs, each with a bold centered caption: "Fiber Optic Cables", "Voice Termination", "IP Transit", "IEPL/IPLC", "Local Loop", "MNO", "Data Center", "SMS", "Supermicro AI Servers", "Security Solutions", "AI Docs", "AI Agents", and a thirteenth tile. The imagery is stock-style technology photography and illustration (fiber optics, phones, towers, servers, padlock graphics, AI scenes). The voice is plain and descriptive, with no marketing flourish.

## Colors
- `canvas` #9dcfc4: the mint-teal field behind the services grid (666 weighted area, second only to white at 1024).
- `page-body` #ffffff: the tagline band and caption areas.
- `ink` #20124d: deep indigo-purple, the dominant text color (395 weighted characters), the hero label background and footer text. `primary` is the same #20124d: the brand's one strong color. The hover probe shows nav links brightening from rgba(255, 255, 255, 0.87) to rgb(255, 255, 255).
- `ink-soft` #434343: tile captions (142 weighted characters). `ink-dark` #212121, `ink-black` #000000 and `ink-light` #dadce0: secondary text colors.
- `#d3d3d3` appears as a minor measured background; `#ffffffde` (87% white) is the nav link color over the hero.

The generated tokens had assigned #0000ee to `primary`; it is the browser's default link color and not a brand color, so it was replaced. The generated link component and its sans-serif typography were removed for the same reason (the measured link is an unstyled empty anchor).

## Typography
The main family is Lato, loaded at weights 300, 400 and 700 (701 weighted characters), declared as `Lato, Arial` for headlines and `Lato, sans-serif` for body. Google Sans (500) and Roboto (400, 500) are loaded as well and account for 38 and 36 weighted characters, used for the search and toolbar chrome rather than for brand copy.
- `display` Lato 70.6667px/700, line-height 117.78px: "VOCOM" in the hero label.
- `body` Lato 24px/400, line-height 28.8px: the company paragraph (384 weighted characters, the dominant size).
- Caption size 18.6667px (187 weighted characters), tagline 26.6667px (42), and the footer 18.6667px with 31.1117px line-height.
- `nav` Lato 16px/400.
Letter-spacing is not set except 0.15px on 14px chrome text. `display-mobile` is 48px/700 with 80.0016px line-height, the h1 measured at the mobile viewport.

## Layout
A centered single column on a 1280px page. The services grid has three equal columns with wide gutters; the thirteenth tile sits alone in the middle column of the last row. Text boxes measure 1138px wide for the paragraph. Paddings measured: 8px (24 uses), 14.7969px (19), 14px (13), 48px (11), 24px (9), 12px, 4px, 10px, 6px, 16px, 60px. No gap values were recorded. The nav bar is 56px tall with the nav group 833px wide at the right of the hero.

The capture shows the rhythm clearly: full-bleed photograph, narrow white tagline band, then a long mint field in which every row repeats the same three tile shapes with equal image heights and equal gaps between rows. Captions are centered under their own image, and there is no body copy inside the tiles. The result is a very regular, index-like page where scanning a list of services is the whole task, and the only large type on the page is the wordmark and the tagline.

## Elevation & Depth
None. No box shadows were measured and no borders are recorded; separation comes from color fields (white, mint, purple) and full-bleed photography. A thin gray rule separates the hero from the tagline in the capture.

## Shapes
The service tiles and hero photograph are square-cornered rectangles. Measured radii are few: 24px (4 elements), 50% (1), 18px (1) and 10px (1), recorded as `md` 24px, `sm` 18px, `xs` 10px and `pill` 9999px; these belong to small interface elements, because the tile images compute no radius.

## Components
- **Hero label**: "VOCOM" in white Lato 700 70.6667px on a #20124d rectangle with a second rectangle for the subtitle line.
- **Top nav** (`nav`, `nav-link`): white Lato 16px links ("Home" is 43x19) over the photograph, with 87% white at rest and full white on hover; the active item "Home" is bold.
- **Service tile**: a square-cornered photograph with a bold 18.6667px centered caption in #434343 below; the tile is the page's only card-like unit.
- **Tagline band**: a white band with the 26.6667px capitalised tagline in #20124d.
- **Footer** (`footer`): 130px tall, text in #20124d, with "Contact Us" and the copyright line.
- Not brand UI: the small info icon at the left edge of the capture.

No buttons were detected (`ctaCandidates` is empty), so no `button` token is declared.

## Design System Architecture
No public Vocom design system or brand guidelines were found among the pages opened here; none is cited. The page declares no CSS custom properties (`rootVars` is empty), and the CSS corpus lists only the Lato, Google Sans and Roboto families and a handful of radii (24px, 50%, 18px, 10px), so the de-facto system is a handful of hard-coded values: indigo #20124d, mint #9dcfc4, white, Lato at three weights. Source: measured page https://www.vocom.com/ via `web/data/extracted/vocom-international-telecommunication.json`.

## Do's and Don'ts
Do
- Use indigo #20124d for the wordmark label, tagline and body text; set it on white or mint.
- Keep one saturated hero photograph of infrastructure and let the wordmark sit on a solid label.
- Show each service as a square photo with a bold centered caption in a three-column grid.
- Set type in Lato; bold for the wordmark and captions, regular for body.

Don't
- Don't use #0000ee; it is a browser default link color.
- Don't add shadows, gradients or card chrome; none were measured.
- Don't round the photographs.
- Don't use Google Sans or Roboto for brand copy; they only appear in the toolbar chrome.

## Responsive Behavior
The mobile pass recorded: the "VOCOM" h1 at 48px/700 with 80.0016px line-height in a 196x57 box (desktop 70.6667px, 288x85); the company paragraph at 22.6667px/400 with 27.2px line-height in a 336px-wide, 354px-tall box (desktop 24px/28.8px, 1138px wide). The mobile size ranking is 22.6667px (384), 18.6667px (187), 13.3333px (47), 24px (42), 14px (38) and 48px (5). Grid columns, the nav treatment and breakpoints are not measured.

## Iteration Guide
1. Set canvas #9dcfc4, page-body #ffffff, ink and primary #20124d.
2. Open with a full-bleed data-center photograph and a 70.6667px Lato 700 white wordmark on an indigo label.
3. Add a white tagline band at 26.6667px.
4. Lay out three-column photo tiles on the mint field with 18.6667px bold captions in #434343.
5. Keep corners square and shadows off.
6. Run `node web/scripts/verify-designs.mjs --slug=vocom-international-telecommunication`.
