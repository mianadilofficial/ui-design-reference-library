---
version: alpha
name: MAYA Lifestyle Shopping Center
category: "Thai Brands"
description: "MAYA Lifestyle Shopping Center, Chiang Mai: warm ivory #f5f3ef canvas, champagne gold #c1ac69 square buttons, Chonburi serif display at 50px with Kanit light body, zero-radius geometry and collage-style category art."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f3ef"
  ink: "#42403b"
  primary: "#c1ac69"
  on-primary: "#ffffff"
  surface-sand: "#d5c797"
  surface-ivory: "#f0efe5"
  ink-muted: "#848274"
  ink-pale: "#bbb8ab"
  ink-olive: "#76756e"
  primary-hover: "#b8972d"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  display-mobile:
    fontFamily: Chonburi, cursive
    fontSize: 40px
    fontWeight: 700
    lineHeight: 50px
  heading:
    fontFamily: Chonburi, cursive
    fontSize: 50px
    fontWeight: 700
    lineHeight: 62.5px
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 36px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 11px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 21px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 43px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 50px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 32px 0px
---

## Overview

MAYA Lifestyle Shopping Center is a mall in Chiang Mai. The homepage footer gives the address as 55 Moo 5, Huay Kaew Rd., Chang Phuak, Muang Chiang Mai 50300, opening hours 10:00 - 22:00, a telephone number and the copyright line "MAYA development Co., Ltd." The About Us text calls it "ที่สุดแห่งไลฟ์สไตล์ช็อปปิ้งเซ็นเตอร์" (the ultimate lifestyle shopping center) and a meeting point for creative entertainment. The menu items are Place, Promotions, News & Articles, Activities, About us and Contact us, with a language switch (TH, EN, CH) and an ADD LINE button.

The capture reads as an upscale, editorial mall site. A white header carries a thin, spaced MAYA wordmark with "LIFESTYLE SHOPPING CENTER" in tiny type, six light nav links, a TH language dropdown and a gold ADD LINE button with a chat icon. The hero is a full-bleed rendering of the mall's lattice facade at dusk against a blue sky, with arrow controls on both edges. Below it, a "Highlight" label flanked by small diamond ornaments introduces a large serif headline ("[NOW OPEN] POP MART") with an underlined gold "Explore" link, next to a photo of the new store. Faint pale line-pattern ornaments in a diamond lattice repeat behind sections, echoing the facade. Three equal columns follow, "SHOPPING", "DINING" and "HIGHLIGHT", each a pale panel with a gold serif title and a collage-style illustration cut from fashion, food and lifestyle photographs, with a thin gold plus sign at the lower right. A "FLOOR" selector (B1, G, 2F to 6F) with a gold underline for the active floor leads to floor plans.

The voice is concise and English-led with Thai content, the visuals polished and calm. Section labels are single English words (Place, Highlight, Floor, Shopping, Dining), the headline treatment is capitalised bracketed announcements such as "[NOW OPEN]", and calls to action are short verbs: Explore, Read more, ADD LINE. The page invites exploration by floor and by category rather than pushing offers, which suits a destination mall that presents tenants as part of an architectural landmark. The footer repeats the address, hours, telephone and the Terms & Conditions and Privacy Policy links on a gold band, so contact facts are always at the bottom of the page.

## Colors

The canvas is white (#ffffff) and the largest background area is a warm ivory, `page-largest` #f5f3ef. Further neutrals are `surface-ivory` #f0efe5 and `surface-sand` #d5c797. Body ink is a warm dark gray `ink` #42403b; supporting inks are `ink-muted` #848274, `ink-pale` #bbb8ab and `ink-olive` #76756e.

The brand accent is champagne gold, `primary` #c1ac69, with white `on-primary` text. It fills the ADD LINE and "Read more" buttons and the footer, and colors the section titles and the active floor tab. A darker gold, `primary-hover` #b8972d, is the measured hover fill. There are no saturated secondary colors in the chrome: color comes from photography and the collage illustrations. The stylesheet declares one custom root variable, --swiper-theme-color #007aff, which belongs to the carousel library, not the brand. The browser default link blue #0000ee, which appeared in the generated tokens, was removed.

## Typography

Two families: `Chonburi` (cursive fallback), a high-contrast Thai/Latin display serif, for headlines, and `Kanit` (sans-serif fallback) for everything else. Loaded weights are Chonburi 400 and Kanit 300 and 400. Measured styles: heading 50px at 700 with 62.5px line height in Chonburi; display-mobile 40px at 700 with 50px line height; body 24px at weight 300 with 36px line height in Kanit; and the "display" token, 16px at 300 with 24px line height, which is actually the small UI text style used by buttons and links.

The pairing is serif capitals for section titles and thin, light sans for reading. Both families are Google Fonts, so no substitution is required.

## Layout

The page is full-bleed: the hero image spans the viewport, content blocks are centred or split into halves, and the three category panels each take one third of the width edge to edge. The measured spacing scale is 4, 5, 8, 10, 11, 12, 16, 20, 21 and 25px. Footer padding is 32px 0px, buttons use 20px horizontal padding, and the secondary button 12px 20px. Sections are separated by generous vertical space and the diamond lattice ornament rather than rules. The floor selector is a centred row with a thin baseline.

## Elevation & Depth

The site is flat. The extraction recorded no shadow on the ADD LINE button at rest, and the design relies on color blocks, thin gold lines and photographic depth. Light panels sit on the ivory canvas without borders; the faint lattice pattern is the only decorative layering.

## Shapes

All measured radii are 0px: buttons, nav, links and footer are square-cornered. This sharp, architectural geometry matches the lattice facade and the serif type. Photography is also shown in plain rectangles. Small ornamental diamonds and plus signs are the only non-rectangular details.

## Components

**Primary button** (ADD LINE): gold #c1ac69 fill, white 16px light Kanit text, 0px radius, 0px 20px padding, 43px tall; hover fill #b8972d.

**Secondary button** ("Read more"): gold fill, white text, gold border, 0px radius, 12px 20px padding, 50px tall.

**Link**: gold text in the small UI style, as seen in the "Explore" link with a gold underline.

**Navigation**: white background, #848274 text in the 16px light style, no radius.

**Footer**: gold #c1ac69 background with white text and 32px 0px padding.

**Category panel and floor tabs**: pale panels with gold serif titles, plus-sign affordance and a floor selector with an active gold underline (observed in the capture; no extra tokens).

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened. The de-facto system is a small custom theme: the stylesheet exposes only the Swiper carousel variable --swiper-theme-color, and visual rules are expressed through bespoke classes with two Google Fonts (Chonburi, Kanit). Colors are a warm neutral ramp with one gold accent, and every measured radius is 0px. Source: https://mayashoppingcenter.com/ (homepage and stylesheet as measured by the extractor).

## Do's and Don'ts

Do keep the ivory-and-white canvas with warm dark gray text and a single champagne gold accent. Do use square corners everywhere, serif capitals (Chonburi) for section titles and light Kanit for reading. Do let photography and collage artwork provide color, and use the lattice pattern lightly behind sections.

Don't round buttons or add pills. Don't add shadows or saturated accent colors. Don't use the browser default blue for links; links are gold. Don't reproduce cookie or chat widgets as brand UI.

## Responsive Behavior

The extraction includes a mobile pass, which produced a 40px display-mobile style; the desktop heading is 50px. Breakpoints and other mobile layout values are not measured.

## Iteration Guide

Use the frontmatter tokens only. Start with a white header, a full-bleed hero image and ivory sections. Titles in Chonburi 50px gold or dark; body in Kanit 300 at 24px/36px. Buttons are square gold blocks, 43 to 50px tall, with a darker gold hover. Keep ornaments minimal. When adding a new element measure it on the live site and re-run the gate.

Token reference for iteration: colors are canvas #ffffff, page-largest #f5f3ef, ink #42403b, primary #c1ac69, on-primary #ffffff, surface-sand #d5c797, surface-ivory #f0efe5, ink-muted #848274, ink-pale #bbb8ab, ink-olive #76756e, primary-hover #b8972d. Radii are none 0px. Spacing steps are s1 4px, s2 5px, s3 8px, s4 10px, s5 11px, s6 12px, s7 16px, s8 20px, s9 21px, s10 25px. Every value here is measured on the live site; anything not listed is not measured.
