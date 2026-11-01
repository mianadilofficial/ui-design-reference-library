---
version: alpha
name: Data Zone Thailand
category: "Thai Brands"
description: "Data Zone Thailand (datazonedc.com), a Tier III carrier-neutral data center: a white page under a charcoal #3a3b3d header, red #d71921 links and CONTACT button with 5px radius, Century Gothic Bold 48px/51.2px headlines, Open Sans 18px/28px body, a full-width night photograph slider, and a metal-tile textured footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#d71921"
  on-primary: "#ffffff"
  surface-header: "#3a3b3d"
  surface-input: "#f9fbfb"
  surface-hover: "#f5f5f5"
  nav-text: "#939291"
  ink-muted: "#999999"
  hairline: "#dddddd"
typography:
  display:
    fontFamily: CenturyGothic-Bold, arial, sans-serif
    fontSize: 48px
    fontWeight: 900
    lineHeight: 51.2px
  display-mobile:
    fontFamily: CenturyGothic-Bold, arial, sans-serif
    fontSize: 30px
    fontWeight: 900
    lineHeight: 34px
  body:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
  nav-label:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
rounded:
  xs: 3px
  sm: 5px
  md: 10px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 10px
  s8: 12.8px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-label}"
    rounded: "{rounded.sm}"
    height: 31px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 4px 20px
    height: 40px
    border: "2px solid #ffffff"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.surface-header}"
    textColor: "{colors.nav-text}"
    typography: "{typography.nav-label}"
    padding: 25px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.surface-input}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 5px 20px 5px 10px
    height: 50px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.canvas}"
    padding: 76.7969px 64px 0px
---

## Overview

Data Zone Thailand (document title "Data Zone Thailand Tier III Data Center and Cloud Services - datazonedc") is a corporate site for a carrier-neutral data center, in English with a Thai edition (the markup carries a parallel Thai menu: หน้าหลัก, เกี่ยวกับเรา, ศูนย์ข้อมูล, บริการ, ติดต่อเรา). The home page at https://www.datazonedc.com/ is 3,172px tall at 1280px wide and reads as a conventional B2B infrastructure page: charcoal header, big hero photograph, a bold statement headline, long-form proof copy and a wall of certification badges.

The header is a #3a3b3d bar (136px tall in the role scan, padding 25px 0) with the white "DATAZONE" wordmark at left, the gray uppercase links ABOUT, DATA CENTERS and SERVICES, a red CONTACT button and a search icon; US and Thai flags sit above the right end. Below, a full-width slider shows a night photograph of a data-center entrance with red architectural trim and a red door, with white chevrons at both edges. Under it the headline "Data Zone Thailand is the most advanced, multi-tenant, carrier-neutral, tier III data center in Thailand and Asia." is set in Century Gothic Bold. The text that follows is a column of paragraphs with bold key phrases ("colocation, cloud and hybrid solutions", "99.99% uptime", "33kW", "renewable energy", "60MW", "global standards") beside an exploded isometric illustration of the facility in gray and red. A red underlined link, "www.datazonedc.com/tour/", follows "Book a tour of our data center:". Two Uptime Institute Tier badges and a row of certification logos (ISO/IEC 20000-1, ISO/IEC 27001, PCI DSS, AICPA SOC 2, TVRA) close the content. A call-to-action band reads "Ask our experts about your specific needs" with a "SALES CENTER" button, followed by "Join our mailing list" and the footer.

The voice is formal and factual: capacity numbers, certifications and uptime claims rather than slogans.

## Colors

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #ffffff | Body background |
| `ink` | #000000 | Text on 1,572 characters |
| `primary` | #d71921 | Link color, CONTACT button fill (hover record), border color on 1 element |
| `on-primary` | #ffffff | Text on the CONTACT button |
| `surface-header` | #3a3b3d | Header background (weight 182) |
| `surface-input` | #f9fbfb | Search/mailing-list input background |
| `surface-hover` | #f5f5f5 | Button background on hover |
| `nav-text` | #939291 | Header link color (219 characters) |
| `ink-muted` | #999999 | Text on 213 characters |
| `hairline` | #dddddd | Input border (3 elements) |

Largest background by DOM area is #000000 (weight 2816), which in the capture is the full-width slider; #0000004d and #00000080 are translucent black overlays. The CONTACT button changes on hover from a #d71921 fill with white text to a #f5f5f5 fill with #d71921 text and a #d71921 border. The header links ABOUT and similar are #939291 before hover. The stylesheet also contains #3eb049 and #0c4da2 and many grays whose elements were not measured, so they are not tokens.

## Typography

Century Gothic Bold (CenturyGothic-Bold, with Arial as fallback) for headlines and Open Sans for everything else; the page also loads Nunito and icon fonts (FontAwesome, fontello). By characters: Open Sans 2,066, CenturyGothic-Bold 114.

| Token | Family | Size / line-height | Weight | Use |
|---|---|---|---|---|
| `display` | CenturyGothic-Bold | 48px / 51.2px | 900 | Home h1 (1152px wide, 154px tall) |
| `display-mobile` | CenturyGothic-Bold | 30px / 34px | 900 | h1 at the mobile pass |
| `body` | Open Sans | 18px / 28px | 400 | Paragraphs (732px wide) |
| `nav` | Open Sans | 16px | 400 | Navigation link element |
| `nav-label` | Open Sans | 14px / 16px | 700 | Uppercase header labels (body role) |
| `button-secondary` | Open Sans | 18px / 28px | 700 | "SALES CENTER" |

Sizes by character count: 18px (1,535), 16px (234), 14px (226), 48px (114), 11px (58), 13.104px (13) and 51.2px (2). Weights: 400 (1,834 characters), 700 (234), 900 (114). The h1 is one long three-line sentence; body copy is a roomy 18px with 28px leading, and bold inline emphasis marks key facts. Century Gothic Bold and Open Sans are loaded as web fonts here; if a file is unavailable use Arial for the display role (the declared fallback) and any humanist sans for text.

## Layout

The header spans the full 1280px; the hero slider is full-bleed; the h1 is 1152px wide, and body paragraphs sit in a 732px column beside an illustration on the right. Certification logos are laid out in a left-aligned row below the text.

Measured paddings: 5px (21 elements), 20px (18), 3px (14), 10px (6), 70px (2), 25px (1), 39px (1), 200px (1), 7px (1), 12.8px (1). No gaps were measured. The body element has 89px top padding, and the footer is 708px tall with padding 76.7969px 64px 0px and a metal-tile photographic texture background (/wp-content/uploads/2019/11/metal-tile-2.jpg) behind white text. Density is moderate: long paragraphs with generous leading, large whitespace around the headline.

## Elevation & Depth

No box shadow was measured. The stylesheet declares several (for example `0 5px 15px 0 rgba(0,0,0,.25)`, `0 0 30px 0 rgba(35,35,35,.1)` and `inset 2px 4px 2px #f1f3f3`) without a measured element. Depth in the capture comes from photography (the lit entrance and the isometric illustration) and from the dark header over a white page; the footer uses a textured image. WordPress shadow presets are published as variables (`--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2)`, among others) and were not tied to elements.

## Shapes

Radii are small and few. Measured: 3px (4 elements), 5px (2) and 10px (1). The input uses 3px, the CONTACT button 5px and the SALES CENTER outlined button 10px. The stylesheet also lists 4px, 8px, 15px, 25px and 9999px radii. Badges and photographs are rectangles; flags are small rectangles.

## Components

**CONTACT button.** #d71921 fill, white uppercase Open Sans 14px/700 label, 5px radius, 31px tall; hover inverts to #f5f5f5 with red text and a red border.

**SALES CENTER button.** Transparent over the dark footer or band, white Open Sans 18px/700 text, `2px solid #ffffff` border, 10px radius, padding 4px 20px, 40px tall and 170px wide.

**Header.** #3a3b3d, 25px vertical padding, gray uppercase links (ABOUT, DATA CENTERS, SERVICES) with sub-menus listed in the markup (About, AUP, Awards And Certifications; Resiliency & Scalability, Sustainability, Ecosystem, Security; Colocation, Connectivity, Internet Exchange (IX), Cloud, DDoS Solutions, Smart Hands Services), plus Contact, Sales Center and Tour. The measured navigation link element is red (#d71921) at 16px.

**Text input.** 576px wide, 50px tall, #f9fbfb fill, `1px solid #dddddd` border, 3px radius, black Open Sans 18px text, padding 5px 20px 5px 10px (mailing list and search).

**Inline link.** Red (#d71921) Open Sans 18px/28px, underlined in the capture ("www.datazonedc.com/tour/").

**Slider.** Full-width photograph with white chevron controls at the left and right edges.

**Certification badges.** Raster images in a row (Tier III Facility and Design, ISO/IEC 20000-1, ISO/IEC 27001, PCI DSS, AICPA SOC 2, TVRA).

**Footer.** Textured background, white text, mailing-list field, repeated link lists, and the line "Copyright © 2026 Data Zone Thailand. All Rights Reserved."

## Design System Architecture

No public design system, brand guideline or press kit is linked from the home page (read via curl; WebFetch returned a certificate error, recorded in SOURCES.json). The de-facto system is the WordPress theme stack visible at https://www.datazonedc.com/: the markup references a `switch` theme under /wp-content/themes/, WordPress block-editor preset variables (`--wp--preset--font-size--large: 36px`, `--wp--preset--font-size--small: 13px`, `--wp--preset--color--vivid-cyan-blue: #0693e3` and the other stock presets), Font Awesome 5 and 6 icon fonts, fontello and VideoJS styles, and a GDPR cookie-settings plugin whose banner and settings text are in the page.

Brand decisions are not exposed as variables: the red #d71921 appears in link, button and border rules, and the type pairing (Century Gothic Bold with Open Sans) is declared in font-face rules. A Thai translation of the entire menu is carried in the same markup.

## Do's and Don'ts

**Do**
- Use #d71921 for links and the single CONTACT call to action; keep everything else neutral.
- Set the headline in Century Gothic Bold at 48px/51.2px and body in Open Sans 18px/28px.
- Bold the key numbers and phrases inside paragraphs (uptime, kW, MW).
- Pair a dark #3a3b3d header with a white page and a large night photograph.
- Show certifications as a row of badges below the copy.

**Don't**
- Don't add shadows to buttons; none were measured.
- Don't use large radii; the measured maximum is 10px.
- Don't set body text below 18px in the main column; the measured body text is 18px.
- Don't treat the cookie banner or the WordPress stock presets (for example #0693e3) as brand UI.

## Responsive Behavior

The extractor re-loaded the page at 390px. Measured: the h1 is CenturyGothic-Bold 30px/34px weight 900, 351px wide and 204px tall (48px, 1152px by 154px on desktop); body text is 14.112px / 24.192px at 315px by 121px (18px / 28px on desktop); the header is 390px wide and 108px tall with 12px/700 text and its links recorded as "About", "About AUP Awards And Certifications", "Data Centers" and so on. Mobile character counts by size: 14.112px (1,593), 12px (226), 30px (114), 16px (53), 13.104px (13), 8px (4), 15.6px (2). The layout of the slider, illustration and badge row at 390px is not measured; breakpoints and media queries are not measured.

## Iteration Guide

1. Start with white canvas, black ink, red #d71921, charcoal #3a3b3d header, Century Gothic Bold plus Open Sans.
2. Build the header (wordmark, three gray links, red CONTACT button), then the full-width slider.
3. Add the 48px/51.2px headline and an 18px/28px paragraph column with an illustration at the right.
4. Add the badge row, the "Ask our experts" band with the outlined SALES CENTER button and the textured footer.
5. Run `node web/scripts/verify-designs.mjs --slug=data-zone` after any token edit.
