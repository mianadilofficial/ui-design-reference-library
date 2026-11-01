---
version: alpha
name: Hello Monday
category: "Agencies & Studios"
description: "Hello Monday (Hello Monday/DEPT®) presents its studio site as a quiet editorial page: white #ffffff canvas, #000000 text, Clarendon BT Light (ClarendonBTWXX-Light) display at 80px/300 over NB International Pro body at 14px, a warm off-white #f8f6f5 footer, a #191919 feature panel, translucent #0000004d rules and 0px corners everywhere."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  ink-soft: "#2c2d2e"
  surface-footer: "#f8f6f5"
  surface-dark: "#191919"
  hairline: "#0000004d"
  hairline-light: "#cacaca"
  bg-pink: "#db7093"
typography:
  display:
    fontFamily: ClarendonBTWXX-Light
    fontSize: 80px
    fontWeight: 300
    lineHeight: 64px
  display-mobile:
    fontFamily: ClarendonBTWXX-Light
    fontSize: 40px
    fontWeight: 300
    lineHeight: 32px
  subheading:
    fontFamily: nb_internationalproregular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21.98px
  body:
    fontFamily: nb_internationalproregular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.06px
  body-mobile:
    fontFamily: nb_internationalproregular
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.48px
  link:
    fontFamily: nb_internationalprolight
    fontSize: 19px
    fontWeight: 400
    lineHeight: 26.41px
rounded:
  none: 0px
spacing:
  s1: 9px
  s2: 20px
  s3: 40px
  s4: 56.39px
  s5: 62.5px
  s6: 71px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 71px 0px 0px
  feature-panel:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# Hello Monday

## Overview

Hello Monday (hellomonday.com, page title "Hello Monday") describes itself on its About page as "a creative studio that makes digital (and magical) ideas, products and experiences". The About page signs as "HELLO MONDAY/DEPT®", links to the DEPT privacy statement, and lists offices in New York (36 East 20th Street), Copenhagen (Langebrogade 6E) and Aarhus (Banegardspladsen 20A), with an Amsterdam address (Generaal Vetterstraat 66) in the footer map links.

The home page is built like a magazine cover with a single changing word. A small line "We make digital (and magical)…" sits centred at the very top, and directly under it the H1 swaps through service words — "Experiences" in the desktop measurement, "Products" in the desktop capture, "Branding" on the mobile pass — set in Clarendon BT Light at 80px. At the top right a small calendar icon reads "2 days until Monday". There is no visible navigation bar in either measurement (0 visible header links, no menu toggle).

Below the headline the project grid follows; on the mobile capture it is a two-column list of project thumbnails with short titles ("Google - Gemini Developer Competition", "The best things are the Simple Things") and grey tag lines. In the desktop capture this grid area rendered as blank white space, so the desktop grid itself is not documented here. A centred underlined "View all projects" link closes it. Then comes a dark #191919 panel holding a muted video still with the white serif headline "A booster rocket for digital product teams", a short paragraph ("We collaborate with startups and product departments around the world to invent and reinvent the products of tomorrow.") and an underlined "Discover more". The page ends in a warm off-white footer with a black-and-white line illustration of a person working at a desk under a night window, contact prompts ("Want to collaborate?", "Want to say hi?", "Want to join us?", "Want to learn?") and the four office addresses.

The tone is friendly and understated: ellipses, a countdown to Monday, "Become a Mondayteer", "Apply here".

## Colors

- **Canvas `#ffffff`** — body background and the largest measured area.
- **Ink `#000000`** — the most-read text colour: H1, the tagline, body copy, link text.
- **Primary `#000000`** — the page has no filled call-to-action button; its actions are underlined black text links ("View all projects", "Apply here"), so the action colour is the ink. The generator's original primary, `#2c2d2e`, is a measured text colour used on 33 characters and is kept as **ink-soft**.
- **Surface-footer `#f8f6f5`** — the warm off-white of the footer band (and the illustration tile within it).
- **Surface-dark `#191919`** — the feature panel behind the "booster rocket" video; text inside is #ffffff.
- **Hairline `#0000004d`** — black at 30% alpha, the rules above each footer contact group.
- **Hairline-light `#cacaca`** — the second measured border colour.
- **Bg-pink `#db7093`** — measured as the fourth-largest background area on the desktop page (647 area units). It does not appear in the desktop capture, where the project grid area rendered blank, so its role is not identified.

Footer secondary text (labels such as "Want to collaborate?" and addresses) shows as grey in the capture; its exact value was not isolated by the extractor beyond the colours above. Colour otherwise comes from project imagery.

## Typography

Three self-hosted web fonts are loaded from https://www.hellomonday.com/assets/fonts/:

- **ClarendonBTWXX-Light** (file `383D05_0_0.woff2`) — a light Clarendon slab serif for display. The H1 is 80px, weight 300, with a tight 64px line-height (0.8). On mobile the H1 is 40px/300/32px. The capture shows the same serif in the "booster rocket" headline (63px on desktop, 36px on mobile), the footer email addresses and city names.
- **nb_internationalproregular** (file `nb_international_pro_regular-webfont.woff2`) — NB International Pro Regular, the main text face (457 measured characters). The tagline "We make digital (and magical)…" is 14px/400/21.98px; the address paragraphs are 14px/400/18.06px on desktop and 12px/400/15.48px on mobile.
- **nb_internationalprolight** (file `nb_international_pro_light-webfont.woff2`) — NB International Pro Light, used for the 19px/400/26.41px "View all projects" link.

Measured desktop sizes by frequency: 14px, 15px, 18px, 63px, 13px, 19px and 80px. Weights are only 400 and 300. Letter-spacing is normal and nothing is uppercased. The pairing is the identity: a soft, old-style slab serif in light weight against a neutral geometric grotesk at small sizes.

Substitutes: none are named by the site. When the files cannot be used, keep the structure — a light slab serif for display, a neutral grotesk for text — and say which faces replaced them.

## Layout

Desktop content spans x = 63 to 1236 at 1280px. The upper band (y 0–1942) is single-column and centred: tagline, H1, project area, "View all projects", then the dark feature panel inset from the page edges. The footer band (y 1942–2699, fill #f8f6f5) is two columns of content from x = 471 to 1217, with the illustration to the left; contact groups sit in a 2×2 arrangement, each headed by a hairline rule, and the four office addresses below in a second 2×2 arrangement.

Measured paddings are 62.5px (most frequent), 9px, 56.3906px, 40px, 20px and 71px (the footer's top padding). No flex/grid gaps were recorded. `maxCardColumns` is 6 on desktop and 2 on mobile. The page is short (2,699px measured height) and very open: large white margins around the centred headline and generous vertical spacing before and after the dark panel.

## Elevation & Depth

None. No box-shadow is measured (`boxShadows` is empty). Depth is created by flat colour planes only: the white page, the #191919 panel with its full-bleed video still, and the #f8f6f5 footer. Separation inside the footer uses #0000004d hairlines. The video still in the panel is darkened, which keeps the white serif headline legible without a scrim or shadow.

## Shapes

Everything is square. `borderRadii` in the extraction is empty — every rendered element computes 0px — so the only radius token is `none: 0px`. The feature panel, the video still, the project thumbnails on mobile and the illustration tile all have hard corners. Links are marked with a thin underline rather than a container. The only organic shapes on the page are the hand-drawn line illustrations (the footer figure at a desk, the two characters above the mobile headline) and the small calendar pictogram beside "2 days until Monday".

## Components

- **Rotating headline** — a centred one-word H1 in Clarendon BT Light, 80px/300/64px, under a 14px tagline; the word changes (Experiences / Products / Branding).
- **Text link** — "View all projects": NB International Pro Light 19px/400/26.41px, #000000, underlined, centred. "Discover more" and "Apply here" follow the same underlined-text pattern.
- **Feature panel** — #191919 block with a video still, a centred white serif headline, a short white paragraph and an underlined white link.
- **Footer contact group** — a #0000004d hairline, a grey prompt ("Want to collaborate?"), a small black label ("Work with us") and a serif email or "Apply here" link.
- **Office address** — city in the serif, three lines of small text beneath (street, city/postcode, phone).
- **Countdown chip** — calendar icon plus "2 days until Monday", top right.
- **Focus** — focused links show the browser default `1px auto` ring (rgb(0, 95, 204)); that is not a brand colour.

## Design System Architecture

No public Hello Monday design system, brand-guideline page or press kit was found on the pages opened (the About page https://www.hellomonday.com/about links only to social accounts, office maps, job applications and the DEPT privacy statement). There are no CSS custom properties on the root (`rootVars` is empty), so the measurable system lives in the stylesheet and the three `@font-face` families: ClarendonBTWXX-Light for display, nb_internationalproregular and nb_internationalprolight for text. A VideoJS icon font is also embedded for the video player and is not part of the brand typography.

The stylesheet is mobile-first: every recorded media query is a `min-width` query, at 412, 640, 768, 769, 900, 1024, 1025, 1440, 1850 and 2550px, with 768px (38 rules), 1024px (23) and 1440px (18) the most used, plus one `(min-width:768px) and (max-height:770px)` rule.

## Do's and Don'ts

**Do**
- Lead with one large word in a light slab serif, centred, with a tight line-height.
- Keep text black on white and set everything else in a neutral grotesk at 12–19px.
- Use underlined text links as the only call-to-action style.
- Use flat planes (#191919, #f8f6f5) instead of cards or shadows.
- Separate footer groups with 30%-black hairlines.
- Let hand-drawn line illustrations add warmth.

**Don't**
- Don't add rounded corners or drop shadows; none are measured.
- Don't introduce filled buttons or a bright accent for actions.
- Don't use bold weights; only 300 and 400 are measured.
- Don't treat the VideoJS icon font or the browser focus ring as brand assets.
- Don't crowd the hero; the headline sits alone with wide margins.

## Responsive Behavior

Measured at 390px wide:

- The H1 drops from 80px/64px to 40px/32px (ClarendonBTWXX-Light, 300).
- The "booster rocket" headline drops from 63px to 36px.
- Address text drops from 14px/18.06px to 12px/15.48px.
- The most-read mobile size is 15px (project titles, weight 300), followed by 13px, 12px and 14px.
- Content spans x = 19 to 371.
- The project grid shows 2 columns (`maxCardColumns` 2).
- No header links and no menu toggle are visible, as on desktop.

The mobile capture shows hand-drawn illustrations above the tagline, the project grid with many thumbnails still blank at capture time, then the dark panel and the footer contact groups in a single column. The stylesheet's breakpoints are all `min-width` (412 to 2550px). Behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. Start with #ffffff, #000000 text and the three web fonts (light slab serif display, NB International Pro Regular and Light).
2. Set a centred 14px tagline and, beneath it, one 80px/300 word with a 64px line-height.
3. Present work as an image grid with short light-weight titles; on 390px use two columns.
4. Close sections with a centred underlined 19px link.
5. Add a #191919 feature panel with a darkened image and white serif headline.
6. End with a #f8f6f5 footer: illustration, 2×2 contact groups under #0000004d rules, office addresses.
7. Keep every corner at 0px and add no shadows.
