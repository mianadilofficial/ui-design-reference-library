---
version: alpha
name: Honda Global Corporate Website
category: "Automotive"
description: "Honda Motor Co.'s global corporate site global.honda/en measured live — white #ffffff and #f6f6f6 bands, charcoal #35363b text and outlined CTAs, black #000000 hero and legal strip, #cc0000 Honda red in the CSS, the custom HondaGlobalFontEN Regular/Light at weight 400 (32px tracked section titles, 16px body) and square 0px corners everywhere."
colors:
  canvas: "#ffffff"
  page-largest: "#f6f6f6"
  ink: "#35363b"
  primary: "#35363b"
  on-primary: "#ffffff"
  surface-black: "#000000"
  hairline: "#cccccc"
  banner-overlay: "#00000099"
  hover-navy: "#041d41"
  nav-hover-grey: "#7f7f7f"
  honda-red: "#cc0000"
typography:
  display:
    fontFamily: HondaGlobalFontEN-Regular, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
    letterSpacing: 1.6px
  display-mobile:
    fontFamily: HondaGlobalFontEN-Regular, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: 1.2px
  banner:
    fontFamily: HondaGlobalFontEN-Regular, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: HondaGlobalFontEN-Regular, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  nav-header:
    fontFamily: HondaGlobalFontEN-Regular, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: -0.2px
  nav:
    fontFamily: HondaGlobalFontEN-Regular, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: 0.8px
  footer:
    fontFamily: HondaGlobalFontEN-Light, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.8px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 14px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    border: "1px solid #35363b"
    padding: 23px 28px
    height: 70px
  hero-banner-link:
    backgroundColor: "{colors.banner-overlay}"
    textColor: "{colors.canvas}"
    typography: "{typography.banner}"
    padding: 14px 32px
    boxShadow: rgba(0, 0, 0, 0.5) 0px 0px 20px 0px
  hero-banner-link-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.hover-navy}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-black}"
    typography: "{typography.nav-header}"
  nav-link-hover:
    textColor: "{colors.nav-hover-grey}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer}"
  tag:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
    rounded: "{rounded.none}"
---

## Overview

This is Honda Motor Co., Ltd.'s global corporate website at `https://global.honda/en/`, titled "Honda Motor Co.,Ltd.｜Honda Global Corporate Website", measured live on 2026-10-17 at 1280px desktop width (5,239px tall) and in a mobile pass. It is an investor-, press- and brand-facing portal, not a car shop.

A white 120px header carries the red HONDA wordmark with "The Power of Dreams" beneath it and the "How we move you. CREATE • TRANSCEND. AUGMENT" lockup next to it, then a two-tier navigation: utility links (World Links, Motorsports, JP / EN) above six section links (Corporate Profile, Businesses, Technology / Innovation, Sustainability, Investors, Newsroom) plus "Discover Honda" and a search icon. The extractor counted 13 header links visible.

The hero is a full-width black field with a large white HONDA wordmark and a semi-transparent caption box linking to the "New corporate advertisement 'Bringing Joy to Everyone'". The body alternates white and #f6f6f6 bands with centred 32px section titles: "Highlights" (three cards with small outlined category tags), "Latest News" (two columns of thumbnail + date + headline), "Discover Honda" (three story cards and an outlined "View Discover Honda" button), and "About Honda" (six image tiles in two columns for Corporate Profile, Businesses, Technology / Innovation, Sustainability, Investor Relations and Newsroom, each with a chevron link and a two-line description). A #35363b footer with social icons, link columns and a featured report card, and a black legal strip close the page.

The voice is corporate, measured and factual ("Introducing Honda's management policy, company overview, history, and brand…"). The visual system is monochrome — charcoal, white, light grey, black — with colour coming from photography and from the red Honda logo.

## Colors

- **canvas #ffffff** — header and white content bands (Highlights, Discover Honda); 28% of the capture.
- **page-largest #f6f6f6** — the light grey bands (Latest News, About Honda); the largest painted area in the extraction (weight 2,966) and 27% of the capture.
- **ink #35363b** — the most-read text colour (2,044 characters) for titles, body and outlined-button labels; also the most frequent colour in the stylesheets (369).
- **primary #35363b** — no filled CTA exists on the page; the primary action is the outlined "View Newsroom" button in this charcoal, and the footer band is filled with it.
- **on-primary #ffffff** — text on the charcoal footer and the black hero (969 characters).
- **surface-black #000000** — hero background, legal strip and header utility/nav text (128 characters).
- **hairline #cccccc** — tag borders and dividers (the most frequent border colour, 16 elements).
- **banner-overlay #00000099** — the 60% black caption box over the hero.
- **hover-navy #041d41** — the hero caption box turns white with this navy text and border on hover (measured); 29 occurrences in the CSS.
- **nav-hover-grey #7f7f7f** — main navigation links fade from black to this grey on hover (measured).
- **honda-red #cc0000** — present 13 times in the stylesheets; the red of the logo is an image/SVG and was not measured as a CSS fill on the home page, so use it for the brand mark only.

## Typography

The site loads two custom webfonts from `/en/font/`: **HondaGlobalFontEN-Regular** (2,874 characters) and **HondaGlobalFontEN-Light** (267 characters, footer). Bold, SemiBold and ExtraBold faces are declared in `@font-face` rules but were not used on measured text. Every measured character is weight 400; hierarchy comes from size and tracking. If the Honda font is unavailable, the declared fallback is the generic `sans-serif`; a neutral grotesk keeps the tone.

Scale:

- **display** 32px / 38.4px, +1.6px tracking — centred section titles ("Highlights", "Latest News", "About Honda"). The page has no visible h1; see `_roleOverrides`.
- **display-mobile** 24px / 28.8px, +1.2px — the same titles on mobile.
- **banner** 20px / 28px — the hero caption link.
- **body** 16px / 22.4px — card headlines, descriptions and button labels; the most-read size (2,263 characters). Body copy carries -0.2px tracking on some runs (`16px/-0.2px`, 429 characters).
- **nav-header** 15px / 21px, -0.2px — header navigation and the document default.
- **nav** 18px / 25.2px, +0.8px — mega-menu link titles (white, in the opened menu layer).
- **footer** HondaGlobalFontEN-Light 14px / 23.8px — footer links.

12px is used for dates and tags.

## Layout

Desktop content is centred with three-column card rows (Highlights, Discover Honda), a two-by-two news grid, and a two-column tile grid for About Honda; the extractor recorded up to five card columns in a row. Bands are tall and airy: Highlights 688px, Latest News 818px, Discover Honda 861px, About Honda 1,500px, footer 390px, legal strip 142px.

Measured gaps: 18px (most frequent), 24px, 54px, 10px, 40px, 16px and 64px. Paddings: 5px, 10px, 8px and 20px on small elements; 23px 28px on outlined buttons; 120px on large section padding. Section titles sit centred, about 120px below each band's top edge per the extractor's heading positions.

## Elevation & Depth

The page is flat. The only measured shadow is `rgba(0, 0, 0, 0.5) 0px 0px 20px 0px` on the hero caption box, which lifts it off the hero image. Cards have no shadows or borders around photographs; separation comes from white versus #f6f6f6 bands and from the black hero and footer. The stylesheets declare a few other shadows (for example `0 4px 5px rgba(0, 0, 0, .4)`) for elements not seen in the measured state.

## Shapes

Everything is square. `desktop.frequencies.borderRadii` is empty: every rendered element computes a 0px radius — buttons, tags, cards, images and the caption box. The stylesheets do declare small radii (4px, 8px, 6px) for widgets outside the home page; do not bring them into this layout. Borders are 1px: #35363b on outlined buttons, #cccccc on category tags.

## Components

- **Outlined button (button-outlined)** — "View Newsroom", "View Discover Honda": transparent fill, 1px solid #35363b border, #35363b 16px label, 23px 28px padding, 70px high, 300px wide, square, with a small right chevron.
- **Hero banner link** — 60% black box, white 20px text, 14px 32px padding, soft 20px black glow; on hover the box turns white and the text and border turn #041d41.
- **Header navigation** — white, black 15px links; hover fades link text to #7f7f7f. The mega-menu layer uses 18px white titles with +0.8px tracking.
- **Category tag** — "Corporate", "Feature", "Honda Stories": small text in a 1px #cccccc square outline above card headlines.
- **News item** — square thumbnail left, date then three-line headline in 16px charcoal on the right.
- **About tile** — wide photograph or collage, 16px title with a chevron, two-line description.
- **Footer** — #35363b band, white Light 14px links, social icons, a featured "Honda Report 2026" card; then a black strip with Site Map, Terms and Conditions, Privacy Policy, Social Media Terms of Use, Cookie Policy.

## Design System Architecture

Honda's brand page https://global.honda/en/brand/ presents the global brand slogan "The Power of Dreams" and the philosophy behind it, but it does not publish logo rules, colours or typefaces. No public digital design system, token package or brand guideline was linked from the home page or the brand page.

The de-facto system is visible in the shipped assets: a bespoke type family served as separate font files per weight (`HondaGlobalFontEN-Light`, `-Regular`, `-SBold`, `-Bold`, `-ExBold`) rather than a variable font; no CSS custom properties on `:root` (rootVars is empty), so colours are hard-coded — #35363b dominates the stylesheet, followed by #ffffff, #cccccc, #000000 and #f6f6f6. Carousels use the `slick` library (its icon font is loaded). Media queries are written mobile-last around a 768/769px split (797 `min-width: 769px` declarations), with further breakpoints at 1024px, 1200px, 1440px and 1921px.

## Do's and Don'ts

**Do**
- Keep the palette monochrome: #35363b text, #ffffff and #f6f6f6 bands, #000000 for hero and legal strip.
- Use square corners on every element.
- Set section titles at 32px with +1.6px tracking, centred, regular weight.
- Use outlined charcoal buttons with generous 23px 28px padding for section CTAs.
- Let photography and the red logo provide colour.

**Don't**
- Don't fill buttons with Honda red; no filled button was measured.
- Don't use bold type for headings; all measured text is weight 400.
- Don't add rounded corners or card shadows.
- Don't treat the Bootstrap blue #007bff found in the stylesheets as a brand colour.
- Don't crowd the bands; the measured section padding is 120px.

## Responsive Behavior

From the mobile pass (content between x=16 and x=374):

- Section titles drop from 32px / 38.4px (+1.6px) to 24px / 28.8px (+1.2px).
- Paragraph copy changes from 16px / 22.4px to 14px / 23.8px.
- The header is 80px tall (120px on desktop) and shows a visible "open menu" toggle; two header links are visible on mobile versus 13 on desktop.
- The hero media band is 375px high, followed by a 144px black band.
- The content band is #fafafa on mobile and runs 4,266px; the extractor recorded one content column (two in the footer) and at most two card columns, against five on desktop.

The CSS splits at 768px/769px. Hover states on mobile were not measured.

## Iteration Guide

1. Start with a white header, a black hero and alternating #ffffff / #f6f6f6 bands.
2. Centre a `display` title in each band; use `body` 16px for every card headline and description.
3. Use `button-outlined` for the band's call to action; never a filled button.
4. Keep `rounded.none` (0px) on all components.
5. Close with a #35363b footer in HondaGlobalFontEN-Light 14px and a black legal strip.
6. Check `web/data/extracted/honda.json` before adding colours; the stylesheet also holds category accent hues (#73b53c, #d1cd0d, #ed7f02, #19b1d2) whose roles were not measured.
