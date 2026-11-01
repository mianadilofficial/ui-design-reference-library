---
version: alpha
name: National Geographic
category: "News & Publishing"
description: "National Geographic's home page nationalgeographic.com measured live — a black #000000 magazine wall with white #ffffff type, logo yellow #ffcc00 for square Subscribe / WATCH NOW buttons, a #f2f2f2 Society band, and two in-house families: GeoBrand (Bold, uppercase, +3px tracking for 32px section heads) and GeoEdit (Medium 38px story headlines, Regular 12px legal), with 0px corners everywhere."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#ffcc00"
  on-primary: "#000000"
  surface-light: "#f2f2f2"
  link-blue: "#0066cc"
  link-blue-hover: "#004d9a"
  nav-hover-grey: "#6c6e6f"
  ink-legal: "#999999"
  ink-muted: "#555555"
  image-scrim: "#0000004d"
typography:
  display:
    fontFamily: GeoEditMedium, "Open Sans", AppleGothic, Georgia, sans-serif
    fontSize: 38px
    fontWeight: 400
    lineHeight: 46.018px
  display-mobile:
    fontFamily: GeoEditMedium, "Open Sans", AppleGothic, Georgia, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.992px
  heading:
    fontFamily: GeoBrandBold, "Open Sans", AppleGothic, Georgia, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 3px
    textTransform: uppercase
  subheading:
    fontFamily: GeoBrandBold, "Open Sans", AppleGothic, Georgia, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 3px
    textTransform: uppercase
  body:
    fontFamily: GeoBrandRegular, "Open Sans", AppleGothic, Georgia, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  legal:
    fontFamily: GeoEditRegular, "Open Sans", AppleGothic, Georgia, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15px
    letterSpacing: 0.2px
  button:
    fontFamily: GeoEditMedium, "Open Sans", AppleGothic, Georgia, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.006px
    letterSpacing: 0.1px
  label:
    fontFamily: GeoBrandBold, "Open Sans", AppleGothic, Georgia, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 3px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 10px
  s3: 12px
  s4: 13px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 25px
  s10: 30px
  s11: 40px
  s12: 100px
components:
  button-subscribe:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 68px
  button-subscribe-hover:
    textColor: "{colors.page-body}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 45px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    border: "2px solid #ffffff"
    padding: 0px 20px
    height: 45px
  story-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
  story-link-hover:
    textColor: "{colors.link-blue-hover}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
  nav-link-hover:
    textColor: "{colors.nav-hover-grey}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    padding: 20px
---

## Overview

This is the home page of `https://www.nationalgeographic.com/` ("National Geographic"), measured live on 2026-10-17 at 1280px (10,210px tall) and in a mobile pass. It reads like the magazine laid out on a black table: full-bleed photography, a black ground under almost every section, white type, uppercase tracked section labels, and the yellow of the logo rectangle used for every call to action.

The header is a white bar with the yellow-rectangle logo (SVG, 109 × 32px) at the left, the section links Animals, History & Culture, Travel, Health, Science & Nature, Shows and More, and at the right a search icon, "Log In" and a yellow "Subscribe" block that runs the full header height (68px).

Then, on black: "LATEST STORIES" — a vertical list of thumbnails with small uppercase category labels (HEALTH, HISTORY & CULTURE, ANIMALS, FROM THE VAULT …) beside a large lead story ("Inside the New Expedition to Find Amelia Earhart's Plane") and smaller story cards; "MORE FROM NAT GEO" (a five-across photo row); a full-bleed feature ("WEEKEND READ — AS LAKE POWELL DRIES UP, MUD THREATENS ITS FUTURE") with an outlined "READ MORE"; a newsletter strip ("STAY AHEAD OF STORIES IMPACTING OUR LIVES", yellow "SIGN UP"); category hubs (ANIMALS with a four-across row and "SEE MORE"); "SECRETS OF THE BEES" with "WATCH NOW"; "DISCOVER MORE ON DISNEY+"; a "NAT GEO TV" poster carousel; "TRAVEL" over a landscape; the "OCTOBER 2026 ISSUE" with "IN THIS ISSUE" list; and, on light grey, the "NATIONAL GEOGRAPHIC SOCIETY MISSION". Light grey #f2f2f2 bands labelled "ADVERTISEMENT" separate several sections; those are ad slots, not brand UI.

The voice is editorial and curious; the design gets out of the way of the photographs.

## Colors

- **canvas #000000** — the dominant background: the largest painted area (weight 15,554) and 36% of the capture. Nearly every content band is black.
- **page-body #ffffff** — the computed `body` background and the header.
- **ink #ffffff** — the most-read text colour (4,687 characters) on the black bands.
- **primary #ffcc00** — National Geographic yellow: the Subscribe block, WATCH NOW, SEE MORE, SIGN UP and SUBSCRIBE TO NAT GEO buttons; the most frequent non-neutral colour in the CSS (268 declarations).
- **on-primary #000000** — black text on yellow and in the header. Hovering Subscribe turns its text white (measured).
- **surface-light #f2f2f2** — the Society Mission band (1,426px tall) and the ad-slot bands.
- **link-blue #0066cc** — the computed colour of story-card link elements (3,307 characters), with a measured hover of **link-blue-hover #004d9a**. In the capture these story headlines render white, so the blue is not visible on the home page.
- **nav-hover-grey #6c6e6f** — header links and Log In turn this grey on hover.
- **ink-legal #999999** — copyright lines; **ink-muted #555555** — secondary text.
- **image-scrim #0000004d** — a 30% black overlay on photographs (weight 1,006) that keeps white text legible.

## Typography

Two custom families, both loaded as webfonts (the CSS declares full weight ranges for each: Thin to Black, with italics):

- **GeoBrand** — the brand voice in capitals. **heading** GeoBrandBold 32px / 40px, +3px, uppercase ("LATEST STORIES", "STAY AHEAD OF STORIES…", "NATIONAL GEOGRAPHIC SOCIETY MISSION"); **subheading** 18px / 27px, +3px ("MORE FROM NAT GEO", "DISCOVER MORE ON DISNEY+"); **label** 12px / 18px, +3px — buttons, category kickers and footer heads (1,025 characters at 12px/3px). Hub titles are set larger at 54px with +3px (ANIMALS, TRAVEL, OCTOBER 2026 ISSUE) and the feature headline at 42px with +3.5px. **body** GeoBrandRegular 16px / 18.4px is the most-read face (3,754 characters) and 16px the most-read size (6,144).
- **GeoEdit** — the editorial voice. **display** GeoEditMedium 38px / 46.018px — the lead story headline; **button** GeoEditMedium 14px / 20.006px (+0.1px) — the Subscribe label; **legal** GeoEditRegular 12px / 15px (+0.2px) — copyright lines.

Everything computes to weight 400 except 393 characters at 700; weight comes from choosing the Bold or Medium file. Fallback stack: "Open Sans", AppleGothic, Georgia, sans-serif. For substitutes, a geometric sans in tracked capitals approximates GeoBrand and a humanist sans approximates GeoEdit.

## Layout

The page is a stack of full-width bands (black, media, light grey) with content between about x=130 and x=1150. Latest Stories uses a narrow list column beside a wide lead story and a three-card row; hub sections use four-across photo rows with centred hub titles; the Disney+ row runs five posters; the issue section pairs a large cover story with an "In this issue" list. Section titles are centred or left-aligned in white capitals.

Measured paddings: 30px (most frequent, 85 elements), 20px (60), 100px (27), 18px, 15px and 67px; gaps: 40px, 12px and 25px.

## Elevation & Depth

The page is flat except for one recurring shadow: `rgba(0, 0, 0, 0.5) 0px 2px 27px 0px` on 27 elements, which the extraction does not identify individually. Depth also comes from 30% and 50% black overlays on photographs (#0000004d, #00000080). The CSS uses focus rings built from box-shadows such as `0 0 0 2px #fff, 0 0 0 4px #000`.

## Shapes

Square. `desktop.frequencies.borderRadii` is empty: every rendered element computes a 0px radius — buttons, the Subscribe block, cards, images and the logo frame. The CSS declares small radii (5px, 4px, 8px) for widgets outside this page. The yellow rectangle of the logo and the hard-edged yellow buttons are the brand's main shape. Outlined buttons use a 2px white border.

## Components

- **Subscribe** — the header block: #ffcc00, black GeoEditMedium 14px label, 0px 20px padding, 68px (full header height), square; hover turns the label white.
- **Yellow button (button-primary)** — WATCH NOW, SEE MORE, SIGN UP: #ffcc00, black GeoBrandBold 12px uppercase with +3px tracking, 0px 20px padding, 45px (also 38px and 33px variants), square.
- **Outlined button** — READ MORE: transparent, white label, 2px solid white border, 45px.
- **Story card** — photograph, uppercase 12px category kicker, headline; card links hover to #004d9a.
- **Header** — white, logo, section links in GeoBrandRegular 16px black that fade to #6c6e6f on hover.
- **Category kicker** — white uppercase 12px with +3px tracking; underlines on hover (measured).
- **Footer** — black, uppercase 12px link heads, 20px padding.

## Design System Architecture

No public design system or brand guideline was linked from the home page; its brand-related links go to the press site (https://www.dgepress.com/natgeo/) and an advertising sales page, neither of which was used as a source for values. The shipped CSS carries a token layer as root variables: a type scale named `--t05` … `--t90` and `--tc05` … `--tc90`, each a CSS `font` shorthand (for example `--t70: 900 48px/56px -apple-system,…`, `--t20: 400 16px/24px …`, `--tc20: 400 12px/16px …`) with split `…Size`, `…Weight` and `…LineHeight` variables, plus `--FontPrimary` (system UI stack) and `--FontSecondary` ("Georgia", serif). These system-font tokens did not match the GeoBrand/GeoEdit text measured on the home page, so they belong to another component layer. Brand fonts are declared as separate families per weight and style (GeoBrandBlack … GeoEditThinItalic). Breakpoints: 375px, 480px, 767/768px, 1023/1024px, 1120px, 1240px and 1439/1440px.

## Do's and Don'ts

**Do**
- Put content on black and let full-bleed photography lead.
- Use #ffcc00 for every call to action, square, with black text.
- Set section heads in GeoBrandBold capitals with +3px tracking; set story headlines in GeoEdit Medium.
- Keep everything square; use the 2px white outline for secondary actions.
- Overlay photographs with 30–50% black before placing white text.

**Don't**
- Don't round buttons or images.
- Don't use yellow as a background for large areas; it is reserved for actions and the logo.
- Don't treat the grey advertisement slots as content sections.
- Don't set body copy in uppercase; tracking and capitals are for labels and section heads.
- Don't introduce new accent colours beyond yellow.

## Responsive Behavior

From the mobile pass (content between x=0–20 and x=360–376):

- The lead headline drops from 38px / 46.018px to 28px / 33.992px.
- Section heads such as "LATEST STORIES" stay 32px / 40px with +3px tracking; hub titles drop from 54px to 42px.
- The yellow button detected on mobile is WATCH NOW (12px, 0px 20px, 45px), unchanged.
- The header band measures 52px on mobile; the extractor recorded no visible header links and no menu toggle on mobile, against nine links and a toggle on desktop.
- Bands become single-column; the Latest Stories band runs 3,982px.

Hover on touch was not measured.

## Iteration Guide

1. Start with a white header (logo, sections, yellow Subscribe block), then black bands.
2. Title each band with `heading` (GeoBrandBold 32px, +3px, uppercase) or a 54px hub title.
3. Lead stories: photograph plus `display` headline in GeoEdit Medium.
4. Calls to action: `button-primary` yellow, square; secondary `button-outlined`.
5. End with the Society band on `surface-light` and a black footer.
6. Look up new values in `web/data/extracted/national-geographic.json`; ignore ad-slot colours.
