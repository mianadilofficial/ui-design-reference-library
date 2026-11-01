---
version: alpha
name: The Nation Thailand
category: "Thai Brands"
description: "English-language Thai news site (nationthailand.com): white canvas with navy #17205c trending and hero bands, royal-blue #1f299a links and borders, Poppins in 300/400/600 plus Buenard serif, 64px capitalised hero headlines, 6px thumbnail radius, round 100% social icons, and a Bootstrap-derived stylesheet."
colors:
  canvas: "#ffffff"
  page-largest: "#17205c"
  ink: "#0f0f0f"
  primary: "#1f299a"
  accent-template: "#7367f0"
  surface-soft: "#f5f5f5"
  surface-dark: "#272626"
  ink-muted: "#4b465c99"
  ink-black: "#000000"
typography:
  display:
    fontFamily: Poppins, "Poppins Fallback", sans-serif
    fontSize: 38px
    fontWeight: 400
    lineHeight: 52.06px
  display-mobile:
    fontFamily: Poppins, "Poppins Fallback", sans-serif
    fontSize: 27.065px
    fontWeight: 400
    lineHeight: 37.0791px
  subheading:
    fontFamily: Poppins, "Poppins Fallback", sans-serif
    fontSize: 64px
    fontWeight: 600
    lineHeight: 80px
    textTransform: capitalize
  body:
    fontFamily: Poppins, "Poppins Fallback", sans-serif
    fontSize: 12.8px
    fontWeight: 300
    lineHeight: 18.816px
  link:
    fontFamily: Poppins, "Poppins Fallback", sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 23.4px
    textTransform: capitalize
rounded:
  xs: 6px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 5.6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12.8px
  s8: 15px
  s9: 15.2px
  s10: 18px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.accent-template}"
    padding: 0px 15px
  nav-link:
    textColor: "{colors.accent-template}"
    typography: "{typography.display}"
---

## Overview

The Nation Thailand is the English-language news site of The Nation group in Bangkok (title: "Nation Thailand news website, thai news, thailand news, Bangkok thailand, aec, breaking news : Nation Thailand"). The measured home page is a dense news portal: a promotional banner at the very top, a centered "the nation" wordmark with social icons (Facebook, X, TikTok, YouTube), search and account icons, a single nav row (News, Business, Life, Health & Wellness, Women of the nation, The Journey, VDO, THE OPINION, Thailand, SustaiNation), then a navy "TRENDING NEWS" band with a numbered carousel of five portrait cards, then a large navy hero slider with a 64px white headline over a photograph, followed by rows of three-up story cards with blue titles.

Imagery is news photography, with the publication's logo watermarked onto lead images. The tone is institutional and information-dense, with navy as the signature surface.

## Colors

- **Canvas `#ffffff`** with **ink `#0f0f0f`** (2,097 characters) on light surfaces. White text (2,354 characters) sits on the dark bands and over the hero photograph.
- **Page-largest `#17205c`** is the navy of the trending and hero bands (area weight 2,280, the largest). A second blue, `#10287a`, appears at smaller area. **Primary `#1f299a`** is the royal blue used for card-title links (911 characters), for the 4 measured borders and as the measured `#17205c` heading text (1,083 characters). `--tertiary-color` in the shipped CSS is `#1e2896`, a neighbor of this blue.
- **Surface-soft `#f5f5f5`** (area 1,206) is the light gray band between sections; **surface-dark `#272626`** (area 1,061) is the dark footer-style fill. **Ink-muted `#4b465c99`** carries secondary text; `#6f6b7d` appears for 14 characters.
- **Accent-template `#7367f0`** is the generator's default primary. It measures as the color of the logo link (the h1 text, 61 characters) and is `--bs-primary` in the shipped Bootstrap-based stylesheet, which also defines the stock `--bs-*` palette (orange, success green, cyan, code pink and so on). Those template colors are not shown as brand UI in the capture, apart from the logo link's hover change from `rgb(115, 103, 240)` to `rgb(104, 93, 216)`. The stylesheet also holds section accent variables such as `--newspaper` `#ff8500` and `--lottery` `#4a240a`; the capture does not show them.

## Typography

Two families are measured by characters: **Poppins** (5,027) and **Buenard** (1,804, a serif). Loaded files are Poppins 400 and 600 and Buenard 400, with fallback faces. Weights in use are 400 (3,383 characters), 600 (3,165), 300 (216), 700 (48) and 900 (19).

- **Display** (the logo-link h1 role) is Poppins 400, 38px, line height 52.06px; on mobile 27.065px with 37.0791px.
- **Subheading** is the hero headline: Poppins 600, 64px, line height 80px, capitalised, white.
- **Body** role is Poppins 300 at 12.8px, line height 18.816px (the editorial contact paragraph in the footer area).
- **Link** is Poppins 600 at 18px, line height 23.4px, capitalised (card titles in blue).
- Size distribution by characters: 13px (1,829), 15px (1,310), 14.4px (1,198), 64px (696), 24.96px (633), 11.2px (556), 18px (231), 12.8px (216). No letter-spacing was measured.

Poppins is a public Google font; Buenard is an open serif, so no substitute is required.

## Layout

The page is 1280px wide in the desktop pass and 8,652px tall. A centered masthead sits above a full-width nav row; below it come alternating full-bleed bands (navy trending carousel, light gray gap, navy hero slider, white card grid). Cards are three-up with thumbnails above blue titles. The numbered carousel prints oversized outlined digits 1 to 5 behind each card. Measured gaps are 5px (32 occurrences) and 10px; paddings include 0px 15px on the nav.

## Elevation & Depth

Two soft shadows are measured: `rgb(183, 183, 183) 0px 0px 2px 0px` (10 elements) and `rgb(248, 248, 248) 0px 0px 2px 0px` (3). They are 2px gray glows, not drops. Depth otherwise comes from the color contrast between navy bands and white or gray sections. A dark gradient scrim sits under the hero headline over the photograph; it is part of the image treatment, not a token.

## Shapes

Measured radii: **6px** (9) for thumbnails and small cards, and **100%** (8) for the round social icon buttons and similar circular controls. Photos in the hero slider and the card grid read as square-cornered in the capture, and the radii that were measured are only the two above.

## Components

- **Masthead.** Wordmark logo, four round outlined social icons, search and user icons.
- **Navigation.** One row of Poppins links with small chevrons for sections that expand; the logo link hovers from `#7367f0` to `rgb(104, 93, 216)`.
- **Trending carousel.** Navy band, "TRENDING NEWS" heading in white, five 6px-radius portrait cards with white captions and a large outlined numeral behind each.
- **Hero slider.** Navy band, a wide photograph with a 64px white capitalised headline and four pill-shaped progress bars below.
- **Story card.** Thumbnail, blue (`#1f299a`) Poppins 600 title, grid three-up.
- No filled primary button was measured (the mobile pass finds no `ctaPrimary`); the promotional banner's "Read More" button is advertising content and is not documented.

## Design System Architecture

No brand guideline or public design system was found. The shipped stylesheet is a Bootstrap 5 build whose `:root` includes the standard `--bs-*` variables (for example `--bs-primary: #7367f0`, `--bs-body-font-weight: 400`, `--bs-root-font-size: 16px`) plus site-specific section colors and `--white-color` and `--tertiary-color`. The system is therefore a customised Bootstrap template layered with news-section accents. The only page opened is https://www.nationthailand.com/ (see SOURCES.json).

## Do's and Don'ts

- Do use navy `#17205c` for full-bleed feature bands and white text on top of it.
- Do use royal blue `#1f299a` for story-title links and borders.
- Do set hero headlines in Poppins 600 at 64px, capitalised.
- Do keep thumbnails at 6px radius and social icons fully round.
- Don't use `#7367f0` as a button color; it is a template default measured only on the logo link.
- Don't show the section accent variables (orange, brown) unless a page measured them.
- Don't present third-party or promotional banner content as brand UI.

## Responsive Behavior

Measured at 390px: the h1 role falls from 38px to 27.065px (line height 37.0791px); the header is 358px wide, 38px tall with padding 0px 15px 0px 10px; the body role stays Poppins 300 at 12.8px. Mobile font sizes by characters are 14.4px, 15px, 24px, 23.18px, 11.2px, 13px, 18px and 12.8px; the 64px hero size is not in the mobile list (it shows 24px and 23.18px instead). The mobile pass found no CTA. Breakpoint widths and column counts on mobile were not measured.

## Iteration Guide

1. Set a white page; add navy `#17205c` bands for trending and hero content.
2. Titles in blue `#1f299a` Poppins 600; body copy in `#0f0f0f`, secondary in `#4b465c99`.
3. Hero headline 64px/80px Poppins 600 capitalised, 24px on mobile as measured.
4. Cards: 6px radius thumbnails, three-up grid with 5px to 10px gaps.
5. Use round (100%) for social icons only.
6. Re-measure before adding dark mode, tablet layout or hover states beyond the logo link.

## Content and Voice

Story titles are English news headlines in sentence-like phrasing ("Thailand plans Bangkok Declaration for IMF-World Bank...", "Webull shares plunge as US House panel raises China..."), truncated with an ellipsis inside cards and the hero. The hero uses the same headline capitalised word by word by CSS (text-transform capitalize), so the source text need not be title-cased. The nav mixes plain section names with named editorial franchises ("Women of the nation", "The Journey", "THE OPINION", "SustaiNation"), where the capitalisation of each is the publication's own. The footer paragraph addresses readers directly with editorial contact lines. Photography is documentary and political or business news, with generous use of the watermarked logo on lead images, and commissioned graphics for explainers.
