---
version: alpha
name: Canon Global
category: "Consumer Electronics"
description: "Canon Global (global.canon/en) is a white #ffffff and pale grey #f5f5f5 corporate site set entirely in Roboto 400/700, with #333333 text, a Canon red #be000b accent bar under 46px bold section headings, square 0px corners everywhere and #c8c8c8 hairline borders."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#333333"
  primary: "#be000b"
  ink-black: "#000000"
  hairline: "#c8c8c8"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 46px
    fontWeight: 700
    lineHeight: 57.5px
    letterSpacing: 2.76px
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 23px
    fontWeight: 700
    lineHeight: 28.75px
    letterSpacing: 1.38px
  subheading:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 26.3529px
    letterSpacing: 0.96px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: 0.72px
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  none: 0px
spacing:
  s1: 3px
  s2: 4px
  s3: 8px
  s4: 10.83px
  s5: 12px
  s6: 15px
  s7: 16.88px
  s8: 20px
  s9: 26.66px
  s10: 27px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 3px 0px 2px
    height: 42px
    borderColor: "{colors.hairline}"
    rounded: "{rounded.none}"
  section-heading:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    accentColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
---

# Canon Global

## Overview

This file documents Canon Global, the English corporate portal at https://global.canon/en/ (the queued URL https://global.canon redirects there). It is the group-level site for Canon Inc., not a camera store: its top navigation reads About Canon, Our Business, News, Sustainability, Investor Relations and Technology, with Support, Search and a 日本語 language switch in the top-right utility area. The page is a long, calm, editorial scroll built from photography and very little chrome.

The capture shows a full-bleed hero photograph of the Tokyo skyline at sunrise with a white caption box reading "Creating New Value" and a red-arrow "Click here to see the video introducing Canon today" link, plus square red carousel controls (pause, previous, next) at the lower left. Below it sit a News block with three image cards, an "Update" list row, then five alternating feature panels: About Canon, Our Business, Sustainability, Investor Relations and Technology. Each panel is a large photograph with a white text tab overlapping its left edge that carries a bold heading, a short red underline and a "Learn more" link with a chevron. A "MORE CONTENTS" carousel of four-up cards, a centred "For Product and Support Information" outline link and a dense grey footer close the page.

The design language is restrained and institutional. Colour is used almost exclusively as one accent: Canon red #be000b, the same red the corporate logo page describes as "vivid red". Everything else is greyscale: #333333 text on #ffffff and #f5f5f5, true black #000000 for a share of the copy, and #c8c8c8 for thin borders. All measured corners are square. Roboto is the only family loaded (weights 400 and 700), and headings carry generous positive tracking (2.76px at 46px, i.e. 0.06em), which gives the page its airy, slightly technical voice.

Microcopy is short and declarative: "Learn more", "Creating New Value", "For Product and Support Information", dated news headlines with a "JAPAN" region tag. There is no selling language and no prices; the site addresses investors, press, job seekers and the curious public.

## Colors

The palette is six measured colours and nothing decorative.

- **canvas #ffffff** is the body background and the fill of the header, the hero caption box, the News cards and the white heading tabs on the feature panels.
- **page-largest #f5f5f5** is the background colour covering the most measured area: the News and Update band, the More Contents area and the footer. The site also declares it as the CSS custom property `--gray_light: #F5F5F5`.
- **ink #333333** is the most-read text colour (2,169 measured characters). Headings, nav links, footer links and body copy all use it, so even the 46px section titles are a soft charcoal rather than pure black.
- **primary #be000b** is Canon red. It is declared as `--primary: #BE000B` in the root variables and appears as the short bar under every section heading (the heading's `::before` shape is filled #be000b), as the colour of the "Learn more" chevrons and pagination arrows, as the fill of the carousel control buttons, and as the hover colour of the header utility links (text and border change from #333333 to #be000b on hover).
- **ink-black #000000** is the second most-read text colour (583 characters), used for smaller text such as card dates and captions.
- **hairline #c8c8c8** is the only measured border colour, used on the bordered 日本語 language switch.

White #ffffff is also measured as a text colour (563 characters), used where copy sits on red or on photography. The root variables additionally declare `--gray_mediumdark: #4C4C4C` and `--gray_dark: #222`; they are part of the shipped CSS but did not appear as rendered colours on the home page, so they are not tokens here. The `--swiper-theme-color: #007aff` variable is the carousel library's default and is not a Canon colour.

Use red sparingly. On the home page it covers five measured background units out of nearly three thousand; its job is to mark, not to fill.

## Typography

Roboto is the only family measured (3,375 characters, 100% of the page), loaded at 400 and 700. There is no display face and no serif; hierarchy comes from size, weight and letter-spacing alone.

- **display** — Roboto 700, 46px, line-height 57.5px, letter-spacing 2.76px. Used for the section titles "News", "Update", "About Canon", "Our Business" and the other feature panels. On mobile this becomes **display-mobile**, Roboto 700, 23px / 28.75px with 1.38px tracking (again 0.06em).
- **subheading** — Roboto 700, 16px, line-height 26.3529px, letter-spacing 0.96px. News card headlines such as "Canon wins Grand Award for Aquilion Rise CT scanner…".
- **nav** — Roboto 400, 16px, line-height 18.4px, normal tracking. Header navigation and general links.
- **body** — Roboto 400, 12px, line-height 12px, letter-spacing 0.72px. The extractor's body sample is the footer legal row ("Terms of Use", "Privacy Policy").

Letter-spacing is the signature. The measured size/tracking pairs show the same rule everywhere: 17px with 1.02px or 0.51px, 19px with 1.14px, 15px with 0.9px, 14px with 0.84px, 35px with 2.1px. Roboto is set wide, usually at 0.06em, which reads as clean and engineered. By character count the most-read size on the page is 17px (1,795 characters), used for card descriptions in More Contents; 13px is second.

Roboto is an open-source Google font, so no substitute is needed. If Roboto is unavailable, a neutral grotesque with similar proportions (for example Inter or Arial) keeps the tone, but keep the tracking.

## Layout

The desktop capture is 1,280px wide and 5,881px tall. The header band is 105px tall on #ffffff, with content running from x 40 to x 1237: the Canon logo (an SVG, 234 × 26px) and the "Global" label on the left, utility icons on the right, and the six primary links on a second row. Four header links were visible on desktop and no menu toggle.

Below the header the hero band (537px tall) is a full-bleed image. The News band uses a two-part composition: the heading and "Learn more" in a narrow left column, three cards to the right. The extraction reports a maximum of three card columns on desktop. The five feature panels alternate a large photograph with an overlapping white tab, always anchored to the left edge, so the page has a strong left reading line.

Measured spacing is small and irregular because it comes from a fluid layout: 3px, 4px, 8px, 10.83px, 12px, 15px, 16.88px, 20px, 26.66px and 27px are the spacing tokens. The most frequent padding is 10.8333px (45 uses), followed by 30px (17 uses); larger section paddings of 44px, 60px, 94px and 204px also appear. Gaps are 4px, 8px, 12px, 15px and 26.66px.

Density is low. Each feature panel gives one photograph almost the full width and one heading; there are no multi-column text grids outside the footer, which runs five link columns (About Canon, Our Business, Sustainability, Investor Relations, Technology).

## Elevation & Depth

The page is flat. The extraction recorded no box-shadows at all (`boxShadows` is empty). Depth comes from overlap instead: the white heading tabs and the hero caption box sit on top of photographs, and white News cards sit on the #f5f5f5 band. Separation between rows (for example in the Update list) is done with thin horizontal rules, not shadows. Do not add drop shadows, glows or blurred cards.

## Shapes

Every measured element has a computed border-radius of 0px (`borderRadii` is empty in the extraction), so the single shape token is `rounded.none: 0px`. Cards, buttons, the language switch, the carousel controls and image frames are all square. The red heading underline is a short, flat rectangle drawn with a `::before` pseudo-element filled #be000b. Arrows and chevrons are thin line icons in red.

The squareness matches the logo page's description of the Canon wordmark, whose "C" ends in a sharp point; the identity is crisp and angular rather than soft.

## Components

**Header (nav).** #ffffff background, 105px tall on desktop, #333333 text. Logo left, Support / Search / 日本語 utilities right, six primary links (nav typography, Roboto 400 16px) below. On hover, the utility links change text and border colour from #333333 to #be000b; no background change was measured.

**Language switch (button-secondary).** The 日本語 control is the only bordered button on the page: 1px solid #c8c8c8, 0px radius, height 42px, padding 3px 0px 2px, #333333 text in Roboto 400 12px.

**Section heading.** Roboto 700 46px #333333 with 2.76px tracking, followed by a short red #be000b bar beneath it (the heading has 23px bottom padding to make room for the bar on desktop and 11.5px on mobile). This is the brand's most repeated pattern.

**Learn more link.** Small #333333 text with a red chevron, placed under each section heading.

**News card.** White card on the #f5f5f5 band with a photo, a date line, a bold 16px headline (subheading token) and a "JAPAN" region tag at the bottom right.

**Feature panel.** Full-bleed photograph with a white tab overlapping its top-left area containing a section heading, red bar and Learn more link.

**Carousel controls.** Square buttons filled #be000b with white icons (pause, previous, next) on the hero, and a "1/3" pager with grey and red square arrows under More Contents. Keyboard focus on these buttons shows a 3px auto black outline.

**Outline link.** "For Product and Support Information" is a centred, square, thin-bordered link with a globe icon and a chevron.

**Footer.** #f5f5f5 background, #333333 text, Roboto 700 14px column titles with chevrons, Roboto 400 small links beneath, and a bottom row with "© Canon Inc." and Site Map / Contact Us / Terms of Use / Privacy Policy.

## Design System Architecture

Canon does not publish a public web design system or UI component library for global.canon. What it does publish is identity history: the Canon Logo page (https://global.canon/en/corporate/logo/) explains that the name was registered as a trademark in 1935, that a unified logo was created in 1953, that the current logo was perfected in 1955, and that the logo has a "vivid red color" and a "C" whose top curls inward to a sharp point. The Design page (https://global.canon/en/design/) covers product design stories, an "Icon Design System" story and a "Designing Brand Value" philosophy page, but gives no web colour or type rules.

The de-facto system is visible in the shipped CSS. The root custom properties are small and semantic: `--primary: #BE000B`, `--gray_light: #F5F5F5`, `--gray_mediumdark: #4C4C4C`, `--gray_dark: #222`, plus the Swiper carousel variables. The stylesheet's media queries are organised around a 767px / 768px split (123 `max-width: 767px` rules and 41 `min-width: 768px` rules), with smaller sets at 1023px, 1024px, 1260px, 1400px, 896px, 880px, 640px, 550px and 425px. The system is therefore: one family (Roboto), one accent (#be000b), two surfaces (#ffffff, #f5f5f5), one text grey (#333333), one border grey (#c8c8c8), square corners, wide tracking.

## Do's and Don'ts

**Do**
- Set everything in Roboto 400/700 with positive tracking around 0.06em (2.76px at 46px, 0.96px at 16px).
- Put the short #be000b bar under each section heading; it is the brand's main visual signature.
- Use #333333 for text, including large headings.
- Alternate #ffffff and #f5f5f5 bands to separate sections.
- Keep every corner at 0px and every surface flat.
- Lead each section with one large, high-quality photograph.
- Use red for small marks only: bars, chevrons, carousel controls, hover states.

**Don't**
- Don't fill large areas or primary buttons with red; the home page has no red-filled call-to-action button.
- Don't round corners or add shadows.
- Don't introduce a second typeface or a second accent hue.
- Don't use the Swiper default blue #007aff; it is library chrome, not Canon.
- Don't write promotional or salesy microcopy; keep it short, factual and institutional ("Learn more").

## Responsive Behavior

The mobile pass at 390px measured the following. The section heading shrinks from 46px to 23px (Roboto 700, 28.75px line-height, 1.38px tracking), and its bottom padding drops from 23px to 11.5px. The header is 46px tall on #ffffff (105px on desktop). A menu toggle was visible on mobile and three header links remained visible (four on desktop). Body text stays at Roboto 400 12px.

The mobile capture shows the logo and 日本語 / globe / menu icons in the header; the hero image with the carousel controls below it and the "Creating New Value" caption as text under the image; the News items as rows with the thumbnail on the right and the date and "JAPAN" tag above the headline; and the five feature panels with the white heading tab above each photograph. The footer on mobile shows only the utility links and "© Canon Inc."

The stylesheet's main breakpoint is the 767px / 768px split described above. Behaviour at intermediate widths was not measured.

## Iteration Guide

1. Start from the surfaces: #ffffff canvas, #f5f5f5 bands and footer, #333333 text. Check that nothing else has crept in.
2. Load Roboto 400 and 700 only. Apply the display token (46px / 57.5px / 2.76px) to section titles and display-mobile (23px / 28.75px / 1.38px) below 768px.
3. Add the red #be000b heading bar and red chevrons. Count how much red is on screen; if it fills more than a few small marks, pull it back.
4. Set all radii to 0px and remove every shadow.
5. Build sections as photograph plus overlapping white tab, left-anchored, one idea per band.
6. Use the measured spacing tokens (4px, 8px, 12px, 15px, 20px, 27px) for internal spacing; prefer the 10.83px rhythm for repeated item padding where you need to match the site exactly.
7. Compare against the capture at 1,280px and the mobile capture at 390px before adding anything new. Hover, dark mode and intermediate widths were not measured; do not invent them.
