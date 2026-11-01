---
version: alpha
name: Thai Credit Bank
category: "Thai Brands"
description: "Thai Credit Bank (ธนาคารไทยเครดิต) homepage: a white Bootstrap 5 page set in the self-hosted db_helvethaica Thai face at 24px body, charcoal #333333 text, deep navy #021a45 headline accents, 4px-radius promo cards with a faint 0 2px 6px shadow, and a charcoal footer."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#021a45"
  surface-soft: "#f9f9f9"
  ink-disabled: "#bdbdbd"
  ink-bootstrap: "#212529"
  hairline: "#e0e0e0"
typography:
  display:
    fontFamily: db_helvethaica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 28px
  nav:
    fontFamily: db_helvethaica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 12px
  s5: 15px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 50px
  s10: 88px
components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink-bootstrap}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.07) 0px 2px 6px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

The Thai Credit Bank homepage (https://www.thaicreditbank.com/, measured at 1280px wide, 4,510px tall) is a calm, white, promotion-led page. A thin dark rule and a white navigation bar sit above a full-width rotating banner; below it a two-column grid places one large product card on the left and four smaller cards on the right. The capture shows lending and savings campaigns: a Happy Senior fixed-deposit offer, micro-loans, SME loans and refinancing. Every card is a photographic poster with the bank's own promotional typography baked into the image, followed by a short Thai title and an "อ่านเพิ่มเติม" (read more) link with an arrow.

The page itself stays quiet so that the posters carry the colour. Canvas is #ffffff (the dominant background by area), running text is #333333, and the deep navy #021a45 is the measured colour of the most prominent headline text. The footer inverts to the #333333 charcoal with white text. The overall tone is institutional and approachable rather than slick: plain Thai microcopy, generous white space, no gradients in the chrome.

Two floating controls (a scroll-to-top button and a messenger chat bubble) sit at the right edge of the capture. They are third-party or utility widgets and are not part of the brand's visual language, so they are not documented as components here.

## Colors

All values below were measured from the live page.

- **canvas #ffffff** is the page background and card background. It covers by far the largest area of the page.
- **ink #333333** is the most-read text colour (about 3,300 characters) and also the footer background, which gives the page a single neutral anchor.
- **primary #021a45** is a very dark navy. It is the second most-read text colour (about 770 characters) and also appears as a border colour. It is the brand's measured deep blue; the logo in the capture uses a brighter blue and an orange mark, which are raster artwork and are not tokenised here.
- **surface-soft #f9f9f9** backs small utility controls such as the language switcher "TH" button; on hover that control changes to #bdbdbd with white text.
- **ink-disabled #bdbdbd** is used for muted text and the inactive carousel pagination dots.
- **ink-bootstrap #212529** is the Bootstrap body colour used for links and navigation labels.
- **hairline #e0e0e0** is the border colour for dividers and outlined elements.

The shipped stylesheet also carries Bootstrap's stock palette (for example the default blue #0d6efd and the success/danger/warning hues) as root variables. These are framework defaults, not brand colours, and should not be used when imitating the site.

## Typography

One family does everything: **db_helvethaica**, loaded as a web font in weights 300, 400, 500 and 700, with `Arial, sans-serif` as the fallback. It is a Thai-first face with a Helvetica-like Latin set, which is why Latin strings such as "FORTUNE SOUTHEAST ASIA 500" in the banner sit comfortably next to Thai.

The measured sizes by character count are 24px (about 3,265 characters, the working body size), 20px (about 900), 40px (about 770), 28px, 18px and 32px. Weight 400 dominates, 500 is used for headings and card titles, 300 and 700 are rare. The display role is the 28px / weight 500 / 28px line-height card headline. Navigation labels are 16px / 400 / 24px line-height. The body element itself measures 24px with a 28px line-height, so Thai text is set larger than a typical Latin site because Thai glyphs have small x-height relative to the em.

If db_helvethaica is unavailable, Arial renders Latin text but not Thai; use a Thai-capable sans such as Noto Sans Thai or Sarabun as a substitute and bump the size by roughly the same ratio.

## Layout

The page is a Bootstrap 5 container layout. At 1280px the banner runs edge to edge while the card grid sits inside the page margins. Below the banner is a two-column promotional grid: one tall card on the left, a 2x2 set on the right, separated by roughly 20px gaps (the measured gap is 20px). Spacing values measured on the page are 2, 3, 5, 12, 15, 20, 24, 30, 50 and 88px; 15px is the most common padding (73 occurrences) and 5px the second. The 88px value is the large section spacing, 50px a mid-level break.

The header holds the logo at left, five dropdown nav items (about us, products and services, investors, sustainability, contact us), a search button and a TH language toggle at right. Vertical rhythm is open: after the card block the capture shows empty white space, so the page leans on whitespace rather than dividers.

## Elevation & Depth

Depth is minimal. Cards use a soft shadow measured as `rgba(0, 0, 0, 0.07) 0px 2px 6px 0px`; two heavier shadows also exist in the CSS, `rgba(0, 0, 0, 0.1) 0px 2px 8px 0px` and `rgba(0, 0, 0, 0.21) 0px 2px 12px 0px`; the page's own elements that use them were not isolated in the extraction. There are no layered gradients in the chrome. Cards otherwise sit flat on white with the shadow as the only separation, so the posters appear to rest just above the page.

## Shapes

Corners are small. The most common radius is 4px (30 uses) on cards and buttons, 8px (11 uses) on larger containers, and 50% on circular items, which the tokens express as the 9999px pill. Photographic posters inside cards are clipped to the card's 4px radius. There is no heavy rounding and no sharp 0px corner on the cards, giving a restrained, slightly friendly feel.

## Components

- **Navigation bar**: white background, #333333 text, db_helvethaica 16px labels with small dropdown chevrons; the language switcher and search are square-ish 4px-radius buttons on #f9f9f9.
- **Promo card**: white, 4px radius, `0 2px 6px` shadow at 7% black. A poster image on top, a 20-24px title in weight 500, and a "read more" text link with an arrow icon. The hover state in the extraction keeps the card white with the same shadow.
- **Banner carousel**: full-width image slides with a row of small pagination dots beneath; the active dot is darker than the others.
- **Text link**: #212529, no underline in the capture.
- **Footer**: #333333 background with white text.

The site does not expose a conventional filled primary button in the measured area, so no button token is declared.

## Design System Architecture

No public design system or brand-guideline site was found on the pages opened. The de-facto system is Bootstrap 5: the homepage links `bootstrap/dist/css/bootstrap.min.css`, `bootstrap-icons`, and `bootstrap-select`, and the root variables include the usual `--bs-*` set (82 variables in total, including some `--ck-*` variables from a CKEditor content area). Brand customisation is applied on top: the db_helvethaica web font, the #021a45 navy and the soft 4px/8px radii. Class naming follows Bootstrap utilities rather than a bespoke token naming scheme. Teams extending the site should therefore reuse Bootstrap's grid and spacing utilities and override fonts, colours and radii in a theme layer rather than inventing new components.

## Do's and Don'ts

- Do keep the canvas white and let product posters provide colour.
- Do set Thai body text at about 24px in db_helvethaica with a 28px line height.
- Do use the soft 7% shadow and 4px radius for cards.
- Do keep copy short and direct: product name, one line, "อ่านเพิ่มเติม".
- Don't use Bootstrap's default #0d6efd blue or other `--bs-*` hues as brand colours.
- Don't add heavy shadows, gradients or large radii to the chrome.
- Don't treat the chat bubble or back-to-top button as brand UI.
- Don't set Thai text in a Latin-only fallback.

## Responsive Behavior

The mobile capture keeps the same font and a 28px display headline, the same as desktop. The extraction records the mobile h1 only; no mobile layout was measured, so breakpoint behaviour is not documented beyond the framework: the site is built on Bootstrap 5, whose grid is responsive by design. The language and search buttons are 40px tall in the desktop hover measurement, a size that is already finger-friendly.

## Iteration Guide

1. Start from a white canvas, #333333 text and db_helvethaica at 24px body.
2. Use #021a45 only for emphasis text and active states, not as a large fill.
3. Build cards with a 4px radius, white fill and the 7% shadow; put the poster first, then title, then the read-more link.
4. Keep spacing to the measured scale: 5, 12, 15, 20, 24, 30, 50, 88px.
5. Verify Thai rendering with the real web font before adjusting sizes.
6. Re-measure with the extractor if the homepage changes, since campaign banners rotate and the posters will change the page's apparent colour without changing the system.
