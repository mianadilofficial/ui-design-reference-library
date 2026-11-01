---
version: alpha
name: Urban Jürgensen
category: "Fashion & Apparel"
description: "Urban Jürgensen (urbanjurgensen.com), a Swiss watchmaker founded in 1773, uses a #600b1a burgundy entry screen, a #f9f5ef paper page with a tiled paper texture, uppercase uj serif display type at 64px with 1.92px tracking, wea sans at 14px, hairline #c7c4bf outlined buttons and square corners."
colors:
  canvas: "#600b1a"
  page-body: "#f9f5ef"
  ink: "#ffffff"
  primary: "#600b1a"
  on-primary: "#ffffff"
  surface-black: "#0e0e0e"
  burgundy-light: "#6a121f"
  ink-black: "#000000"
  ink-muted: "#7d7b78"
  ink-faint: "#afaeab"
  ink-blue: "#0057b7"
  hairline: "#c7c4bf"
  button-fill: "#d9d9d99c"
typography:
  display:
    fontFamily: uj, "uj Fallback", serif, serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: 1.92px
    textTransform: uppercase
  heading:
    fontFamily: uj, "uj Fallback", serif, serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 1px
    textTransform: uppercase
  subheading:
    fontFamily: uj, "uj Fallback", serif, serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: 0.84px
    textTransform: uppercase
  body:
    fontFamily: wea, "wea Fallback", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: wea, "wea Fallback", sans-serif, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: wea, "wea Fallback", sans-serif
    fontSize: 14.0332px
    fontWeight: 400
    lineHeight: 21.0498px
rounded:
  none: 0px
spacing:
  s1: 3.51px
  s2: 7.02px
  s3: 10.52px
  s4: 14.03px
  s5: 17.54px
  s6: 21.05px
  s7: 26.31px
  s8: 28.07px
  s9: 35.08px
  s10: 42.1px
components:
  button-primary:
    backgroundColor: "{colors.button-fill}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10.5249px 14.0332px
    height: 44px
    borderColor: "{colors.hairline}"
  button-secondary:
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10.5249px 14.0332px
    height: 44px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 7.0166px 0px
  nav:
    textColor: "{colors.surface-black}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 3.5083px 0px 10.5249px
  text-input:
    textColor: "{colors.ink-black}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 43px
  footer:
    textColor: "{colors.ink-black}"
    rounded: "{rounded.none}"
---

## Overview

Urban Jürgensen's site (`https://urbanjurgensen.com/`, page title "Urban Jürgensen - Home") is the online house of a Swiss watchmaker whose monogram on the entry screen carries the year 1773. It opens on a full-screen burgundy field (`#600b1a`) with the cream "UJ" monogram, "1773" below it and a single underlined "ENTER" button in white at the bottom. After entering, the home page is a paper world: a warm off-white `#f9f5ef` background with a tiled paper-texture image (`bg-paper-tile.png`), a grey "URBAN JÜRGENSEN" wordmark centered at the top, a torn-edge sheet holding the six uppercase navigation links (HOME, WATCHES, THE MAISON, ARTICLES, HISTORY, CONTACT), and a strip of paper carrying the headline "TIME kept AND spent BEAUTIFULLY".

The headline mixes sizes within one line: "TIME" and "AND" are large display caps while "kept" and "spent" are set smaller, and the "A" glyphs have a distinctive cut. Photographs are presented as prints with white paper borders: a black-and-white portrait of a watchmaker with a loupe, and a vintage wooden stool with a watch resting on it and a toy monkey beside it. The visual language is archival and analog, handled with tactility rather than ornament.

The DOM text shows three model sections (UJ-1, UJ-2, UJ-3, each with "Discover More"), an article teaser (about Flynn McGarry, a 27-year-old chef), "Watch Inquiry" and "Service Inquiry" buttons and a contact heading. Copy is quiet and editorial.

A cookie notice card was present in the measured DOM and is excluded here. The extraction covers both the burgundy entry screen and the paper home; the queued URL is the brand's own site, so no other site was substituted.

## Colors

Two worlds are measured. The entry screen and dark sections use burgundy `#600b1a` (1,024 area weight) and a slightly lighter `#6a121f` (294), with near-black `#0e0e0e` as the largest area fill (3,466). The paper page uses `#f9f5ef` as the body background (with the tile image on top). Text is mostly white `#ffffff` (7,228 characters, on the dark and burgundy surfaces), black `#000000` (1,048, on paper) and `#0e0e0e` (657, navigation).

Secondary colors: warm grey `#7d7b78` (185 characters; button label color), light grey `#afaeab` (10) and the hairline `#c7c4bf` (11 border occurrences, the 1px outline of the buttons). The buttons fill with a translucent grey `#d9d9d99c`. A blue `#0057b7` was measured on 504 characters of text; its element was not identified in the capture, so it is kept only as `ink-blue` and is not used by any component.

The token `canvas` is the burgundy entry-screen color because it dominates the first screen of the capture; the paper page color is `page-body`. The brand's identity color in the capture (monogram field) is `primary` `#600b1a`, with white `#ffffff` as the on-primary text color measured on the ENTER button.

## Typography

Two custom families are loaded: **uj** (400, serif, 1,371 characters, used for navigation, headings and the display lines) and **wea** (400, sans-serif, 8,261 characters, used for body, buttons, links and forms). Both declare a generated "Fallback" family.

- Display: uj 400, 64px / 64px, letter-spacing 1.92px, uppercase, black on paper (the h1).
- Heading: uj 400, 40px / 40px, 1px tracking, uppercase ("CONTACT").
- Subheading: uj 500, 28px / 28px, 0.84px, uppercase ("UJ-1" and the model titles).
- Navigation: uj 16px / 24px uppercase for the paper menu sheet; wea 14.0332px / 21.0498px for the compact nav links.
- Body: wea 400, 14px / 21px (5,916 characters).
- Large sizes seen in the headline: 96px (22 characters, 2.88px tracking) and 48px (742 characters, 1.44px tracking).
- Buttons and inputs: wea 14px / 21px.

All tracking is positive on uppercase serif (about 3% of the size), which gives the capitals their engraved spacing. Weight is 400 almost everywhere (9,601 characters), with 500 on 31 characters.

## Layout

The page is centered and sparse. The paper navigation sheet and the headline strip are narrow centered objects (the headline box measures 773px wide and 212px tall with 42.0996px padding); the photographs sit side by side in two columns beneath. Spacing is built on a 3.5083px base: gaps of 17.5415px (44 occurrences), 7.0166px (11), 26.3122px, 14.0332px, 21.0498px, 35.083px, 42.0996px, 56.1328px, 70.166px and 94.7241px, and paddings of 7.0166px (53), 17.5415px (27), 70.166px (22) and 84.1992px (9). Each is a whole multiple of 3.5083px, so the scale is a strict 3.5083px ladder.

The header is 82px tall at the full 1280px width. The contact form input measures 519px wide and 43px high.

## Elevation & Depth

No box-shadows were measured. Depth is simulated with materials: torn paper edges, a paper-texture tile, and white-bordered photographic prints, all placed flat on the page. The grey wordmark at the top is faded rather than raised. The translucent button fill (`#d9d9d99c`) is the only transparency measured on components. Fade and scale transitions are declared in the stylesheet (`--fade-in-scale: fade-in-scale .3s cubic-bezier(.16,1.08,.38,.98)`), and a view-transition slide offset `--uj-vt-slide-offset: 60px`.

## Shapes

All brand elements compute to a 0px radius: buttons, inputs, navigation, headings. The only measured non-zero radius (3.5083px, one element) belongs to the cookie notice card, which is excluded from the tokens. Edges are made irregular by artwork (the torn paper) rather than by CSS radius. Buttons are outlined by a 1px `#c7c4bf` border.

## Components

- **Enter button**: text-only, white, underlined; hover recorded opacity 1 to 0.8.
- **Primary button**: translucent grey fill `#d9d9d99c`, `#7d7b78` text, wea 14px, `10.5249px 14.0332px` padding, 44px tall, 253px wide, 1px `#c7c4bf` border ("Watch Inquiry").
- **Secondary button**: same size and border without fill ("Service Inquiry").
- **Text link**: uppercase wea 14px, black, `7.0166px 0px` padding, 35px tall ("DISCOVER").
- **Form input**: 43px high, 519px wide, black text, no radius.
- **Navigation sheet**: uppercase uj links on a torn paper image.
- **Model block**: title in uj 500 28px uppercase (UJ-1, UJ-2, UJ-3), followed by "Discover More".

## Design System Architecture

No public or official Urban Jürgensen design system was found, and none was searched for. The stylesheet is utility-driven (`--tw-*` variables, `--leading-relaxed: 1.625`, `--leading-snug: 1.375`, `--blur-lg: 16px`) with brand-specific custom properties limited to `--uj-vt-slide-offset: 60px` and animation variables (`--fade-in-scale`, `--fade-out-scale`); a phone-input component supplies `--PhoneInput-color--focus: #03b2cb`, which belongs to a third-party widget and is not a brand color. The system lives in the fonts (`uj`, `wea`), the 3.5083px spacing ladder and the paper assets. Source: `https://urbanjurgensen.com/`, measured in `web/data/extracted/urban-jurgensen.json`.

## Do's and Don'ts

Do:
- Use uppercase uj serif with positive tracking for headings and navigation.
- Keep surfaces to burgundy, near-black and paper, and place photographs as bordered prints.
- Use square corners and 1px `#c7c4bf` outlines for buttons.
- Space on the 3.5083px ladder.

Don't:
- Don't round corners; the brand elements measure 0px.
- Don't use the phone widget's `#03b2cb` or the unplaced `#0057b7` as brand colors.
- Don't add shadows; none were measured.
- Don't document the cookie notice as brand UI.

## Responsive Behavior

Measured at the 390px mobile pass: the contact h2 is 24px (desktop 40px), body text stays 14px, the primary button keeps its translucent fill `#d9d9d99c` and 0px radius, and the navigation text is 16px in `#0e0e0e`. The mobile font-size table lists 10px (1,854 characters), 24px, 14px, 12px, 15.3027px and 7.65135px. Menu behavior and column changes on mobile were not measured.

## Iteration Guide

1. Begin with the burgundy `#600b1a` entry field and white underlined ENTER.
2. Move to `#f9f5ef` paper with the tiled texture.
3. Set headings in uppercase uj with 3% tracking and mix two sizes in one headline.
4. Use translucent-grey outlined buttons, 44px tall, 0px radius.
5. Present photographs as bordered prints.
6. Re-run `node web/scripts/verify-designs.mjs --slug=urban-jurgensen` after any rename.
