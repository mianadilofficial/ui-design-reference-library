---
version: alpha
name: Bangkok University
category: "Thai Brands"
description: "Bangkok University's English site (bu.ac.th/en) is a dark, photo-led university home page: near-black #1d1e20 canvas, off-white #f8f8f8 text, Noto Sans Thai at 48px/700 for headings, Karnvayla for buttons, and a pale #dfe1e3 pill 'Apply Now' button with a 22px radius, accented by orange #e56436, amber #fab751 and green #00a960."
colors:
  canvas: "#1d1e20"
  page-largest: "#0f0f10"
  ink: "#f8f8f8"
  ink-muted: "#c4c9ce"
  ink-subtle: "#a3a9b1"
  ink-faint: "#8c9299"
  white: "#ffffff"
  primary: "#dfe1e3"
  on-primary: "#000000"
  surface-card: "#383a3d"
  surface-raised: "#5a5e63"
  nav-bg: "#00000099"
  accent-orange: "#e56436"
  accent-amber: "#fab751"
  accent-green: "#00a960"
  accent-green-deep: "#00874d"
  accent-purple: "#3f194b"
  faculty-accounting: "#00b8f1"
  faculty-arch: "#70431b"
  faculty-arts: "#ce3374"
  faculty-buci: "#e02c2c"
  faculty-business: "#ce381e"
  faculty-busem: "#24727d"
  faculty-comarts: "#034ea1"
  faculty-digital-media: "#b5882d"
  faculty-engineering: "#780c1c"
  faculty-it-innovation: "#672829"
  faculty-law: "#6850a0"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 72px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 54px
  body:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body-regular:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21.6px
  button:
    fontFamily: Karnvayla, sans-serif
    fontSize: 17px
    fontWeight: 700
    lineHeight: 20.4px
  button-mobile:
    fontFamily: Karnvayla, sans-serif
    fontSize: 15px
    fontWeight: 700
    lineHeight: 20.4px
  button-secondary:
    fontFamily: Karnvayla, sans-serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 26px
  button-pill:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 17px
    fontWeight: 700
    lineHeight: 25.5px
  nav:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 22px
  2xl: 48px
  3xl: 160px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 7.5px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 12.8px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 5px 29.5px
    height: 30px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgb(51, 51, 51) 0px 0px 2px 0px inset
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-primary-hover:
    backgroundColor: "{colors.ink-subtle}"
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.xl}"
    padding: 5px 16px
    height: 30px
  button-secondary:
    backgroundColor: "{colors.accent-green}"
    textColor: "{colors.white}"
    typography: "{typography.button-secondary}"
    height: 69px
  button-pill:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
    padding: 12px 32px
    height: 50px
  language-button:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 7.5px 9px
    height: 33px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 8px 12px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 60px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.ink-muted}"
  footer:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
---

## Overview

Bangkok University presents itself on `https://www.bu.ac.th/en` as "The Creative University" (the page title is "The Creative University | Bangkok University"). The home page is a dark, editorial, photo-led layout: a hero slide with a portrait, four progress segments above it and a large bilingual headline (Thai plus English), a five-tab quick-link bar (Programs, International Programs, Tuition Fees, Admission Info, Scholarships), a two-column "Featured Stories" news grid, and a "Bangkok University" brand section that pairs a paragraph of campus copy with flat geometric illustrations in green, orange and amber. The measured page is 1280px wide and 8,723px tall.

The canvas is `#1d1e20` with a still darker `#0f0f10` band (the largest measured background by area) behind the hero and the brand section. Text is `#f8f8f8`, stepping down through `#c4c9ce`, `#a3a9b1` and `#8c9299` for captions and metadata. The one light action color is a pale grey `#dfe1e3` pill with black text; hue comes from the content (photography, faculty colors, illustrations) rather than from the chrome.

The voice is plain, English-first and promotional: "We're all about sparking your creativity and getting your hands dirty with real-world experience." Story cards carry a date line ("06 Aug 2026"), a bold headline, a one-line grey standfirst and a thin arrow glyph. A floating chat button at the right edge of the capture is widget chrome and is excluded from this system.

## Colors

The palette is a neutral dark ramp plus a small set of warm and green accents.

- **Canvas and surfaces:** `canvas` `#1d1e20` is the page background and the `--surface-bg` variable. `page-largest` `#0f0f10` is the darkest ramp step and the background with the largest measured area. `surface-card` `#383a3d` is the footer fill and the language-switch button fill. `surface-raised` `#5a5e63` appears as a border color and a mid-grey background. `nav-bg` `#00000099` is a 60% black bar behind the header links.
- **Ink ramp:** `ink` `#f8f8f8` is the most-read text color (2,424 characters), `ink-muted` `#c4c9ce` the second (1,070), `ink-subtle` `#a3a9b1` the third (260) and `ink-faint` `#8c9299` the fourth (146). `white` `#ffffff` is used on the green tile buttons and `on-primary` `#000000` on the pale button.
- **Action:** `primary` `#dfe1e3` is the "Apply Now" fill. Its hover background is `ink-subtle` `#a3a9b1`.
- **Accents:** `accent-orange` `#e56436` is the primary orange (`--tw-color-primary-orange-500`), `accent-amber` `#fab751` the amber (`--tw-color-faculty-humanities-600`), `accent-green` `#00a960` and `accent-green-deep` `#00874d` the two greens used on the tile buttons ("BU VISIT CAMPUS", "Atmosphere", "VIRTUAL TOUR"), and `accent-purple` `#3f194b` the purple step (`--tw-color-primary-purple-500`).
- **Faculty colors:** the stylesheet defines a 100-to-900 ramp for each faculty variable name. The 500 steps kept here, by variable name, are accounting `#00b8f1`, arch `#70431b`, arts `#ce3374`, buci `#e02c2c`, business `#ce381e`, busem `#24727d`, comarts `#034ea1`, digital-media `#b5882d`, engineering `#780c1c`, it-innovation `#672829` and law `#6850a0`. The economics 500 step equals `accent-green` `#00a960`, and the humanities 600 step is `accent-amber` `#fab751`. Mapping these variable names to the schools named on the downloads page is not measured.


## Typography

Two families are loaded: Noto Sans Thai (variable, weights 100 to 900) for nearly all text (4,013 measured characters) and Karnvayla (weight 700 only) for button labels and the heading font variable (144 characters). A third face, `bu-web-icon`, is an icon font.

- `display`: Noto Sans Thai 48px / 700 / 72px line height, used for "Featured Stories" and the "Bangkok University" section title. On the 390px mobile pass the same role measures 36px / 700 / 54px (`display-mobile`).
- `body`: Noto Sans Thai 16px / 700 / 24px for the measured body-text role (link-like labels such as "Register Info"); `body-regular` is the same size at weight 400 and 21.6px line height, which is what the `body` element itself declares.
- `nav`: Noto Sans Thai 16px / 400 / 24px for header links.
- `button`: Karnvayla 17px / 700 / 20.4px for "Apply Now" (15px on mobile). `button-secondary`: Karnvayla 26px / 700 / 26px for the green tiles. `button-pill`: Noto Sans Thai 17px / 700 / 25.5px for "HOW TO APPLY".
- Other measured sizes by characters: 14px (1,360), 16px (1,233), 24px (914), 36px (181), 12px (150), 40px (109), 48px (57). Weights by characters: 400 (2,611), 600 (888), 700 (620), 900 (38).

No letter-spacing was measured on any size. The measured h1 role is the "Featured Stories" heading; the typeface of the large hero headline was not measured as a text role.

Font substitutes: Karnvayla is a named face that the site loads itself (it also appears on the downloads page as "Karnvayla™" under E-books); its declared fallback is `sans-serif`, and no other substitute was measured or evaluated.

## Layout

The page was measured at 1280px wide; in the capture the hero text, the "Featured Stories" heading and the "Bangkok University" section title share one left margin. The header is a 60px-tall bar (`nav` `#00000099`) holding a white logo block at top left, four links (Programs, Campus Life, News, About Us), a search icon, a language button ("EN") and the "Apply Now" button.

Under the hero sits a five-cell quick-link bar; each cell is a 64px-tall link with a 1px border at 24% white (`oklab` alpha 0.24) and a 12% white wash on hover. "Featured Stories" is a two-column grid: a left column with two story cards and a right column with two more, each image followed by a date, a bold headline, a hairline rule, a two-to-three-line grey standfirst and an arrow. An "All News" outlined button closes the grid.

Measured gaps in order of frequency are 30px, 40px, 20px, 14px, 5px, 16px, 8px, 120px, 6px and 60px; measured paddings are 32px, 12px, 2px, 20px, 8px, 10px, 80px, 18px, 6px and 60px. The spacing tokens (`s1` to `s10`) list the small component paddings measured on buttons and links. Tailwind spacing variables on the root go from 0.25rem (`--tw-spacing-4xs`) up to 6rem (`--tw-spacing-8xl`).

## Elevation & Depth

Depth is mostly tonal rather than shadowed: the `#0f0f10` and `#1d1e20` bands alternate, and the capture also shows faint diagonal polygons behind the lower part of the stories grid. Two box-shadows were measured. The "Apply Now" button carries an inset `0 0 2px` shadow in `rgb(51, 51, 51)` over a vertical gradient from white through `rgb(204, 204, 204)` (the `linear-gradient` on its `background-image`), which gives it a faint glossy edge. One further element carries `rgba(0, 0, 0, 0.24) 0px 12px 16px 0px`, a soft downward drop shadow. The Tailwind root defines `--tw-drop-shadow-lg` as `0 4px 4px #00000026` and blur steps of 4px (`--tw-blur-xs`), 8px (`--tw-blur-sm`) and 40px (`--tw-blur-2xl`).

## Shapes

Measured radii by frequency: 4px (28 elements), 8px (27), a fully rounded pill (22), 2px (8), 6px (1), 22px (1), 160px (1), 48px (1) and 15984px (1), plus one `8px 8px 0px 0px` top-rounded value. The "Apply Now" button uses 22px (`rounded.xl`), the "HOW TO APPLY" button is a full pill (`rounded.pill`), the language button 6px (`rounded.md`), and the green tile buttons have 0px corners. The Tailwind root declares `--tw-radius-xs` 0.125rem, `--tw-radius-sm` 0.25rem, `--tw-radius-md` 0.375rem, `--tw-radius-lg` 0.5rem, `--tw-radius-xl` 0.75rem, `--tw-radius-2xl` 1rem and `--tw-radius-3xl` 1.5rem.

## Components

- **Primary button ("Apply Now"):** `{colors.primary}` fill with `{colors.on-primary}` text, Karnvayla 17px/700, 22px radius, 5px 29.5px padding, 126px by 30px, glossy gradient and inset shadow. Hover changes the background to `{colors.ink-subtle}` (`#a3a9b1`); text and border stay the same. Mobile pass: 15px type, 5px 16px padding, 91px wide.
- **Pill button ("HOW TO APPLY"):** `{colors.ink}` fill, `{colors.page-largest}` text, Noto Sans Thai 17px/700, full pill, 12px 32px padding, 191px by 50px.
- **Tile buttons:** `{colors.accent-green}` (and `{colors.accent-green-deep}` for "VIRTUAL TOUR") fill, white Karnvayla 26px/700 labels, square corners, 69px tall, widths of 217px to 268px.
- **Language button ("EN"):** `{colors.surface-card}` fill, `{colors.ink}` 12px/700 text, 6px radius, 67px by 33px.
- **Nav links:** Noto Sans Thai 16px/400 in `{colors.ink}`; hover changes the color to `{colors.ink-muted}` (`#c4c9ce`) with no background.
- **Quick-link tiles:** 16px/700 labels with an icon, 24%-white border and a 12%-white hover wash.
- **Story card:** image, date, 700-weight headline, hairline rule, grey standfirst, arrow.
- **Footer:** `{colors.surface-card}` fill, 14px text, heading groups "About BU", "Contact Us", "For Student", "For Staff", and 363px tall.

## Design System Architecture

No public design-system documentation or brand-guideline page was found: `https://www.bu.ac.th/en/brand` returned 404, and the downloads page (`https://www.bu.ac.th/en/about/downloads`) lists the "BU Official Logo" (AI / PNG / JPG), per-school asset packages whose entries show school colors with HEX codes, and the "Karnvayla™" e-book, but names no guideline document. The de-facto system is therefore read from the shipped CSS.

It is a build whose tokens sit on `:root` as 291 custom properties named in the Tailwind `--tw-` convention. A semantic layer sits on top: `--surface-bg` resolves to `--tw-color-base-200` (`#1d1e20`), `--surface-card` to `--tw-color-base-300` (`#383a3d`), `--surface-fg` to `--tw-color-base-1100` (`#f8f8f8`), `--surface-fg-muted` to `--tw-color-base-700` (`#8c9299`) and `--surface-accent` to `--tw-color-faculty-current-500`. The neutral ramp is `base-100` to `base-1100` (`#0f0f10`, `#1d1e20`, `#383a3d`, `#4a4d51`, `#5a5e63`, `#6d7277`, `#8c9299`, `#a3a9b1`, `#c4c9ce`, `#dfe1e3`, `#f8f8f8`). Brand ramps exist for `primary-orange` and `primary-purple`, and a 100-to-900 ramp for each faculty variable name; the `faculty-current` ramp is declared with empty values on the measured home page, so `--surface-accent` is unset there. The type variables are `--tw-font-sans` ("Noto Sans Thai", sans-serif) and `--tw-font-heading` ("Karnvayla", sans-serif), with sizes from `--tw-text-2xs` 0.5rem to `--tw-text-7xl` 4.5rem, each paired with a 1.5 line-height variable.

## Do's and Don'ts

- Do keep the page dark: `{colors.canvas}` with `{colors.page-largest}` bands and `{colors.ink}` text.
- Do use `{colors.primary}` with black text for the single main call to action, and Karnvayla for button labels.
- Do keep hue in content (photography, illustrations, one accent) and leave the chrome neutral, as measured.
- Do use 700-weight Noto Sans Thai for headlines and card titles and keep standfirsts in the grey `{colors.ink-muted}` step.
- Don't use the per-faculty ramps for the global header or footer: the measured header and footer use only the neutral ramp (`{colors.nav-bg}` and `{colors.surface-card}`).
- Don't treat the floating chat widget, or any overlay captured at the page edge, as brand UI.
- Don't use browser-default link blue or purple; links are `{colors.ink}` with a `{colors.ink-muted}` hover.
- Don't add drop shadows to cards: the measured system relies on tone, and only one 0.24-alpha shadow was measured.

## Responsive Behavior

Measured at a 390px viewport: the `display` heading drops from 48px/72px to 36px/54px (`display-mobile`); body text stays 16px/700/24px; the "Apply Now" button changes from 17px type with 29.5px side padding (126px wide) to 15px type with 16px side padding (91px wide); the nav bar is 56px tall instead of 60px, its nav-role text lists only "EN" and "Apply Now" (desktop lists Programs, Campus Life, News, About Us, EN and Apply Now), and its font is 12px/700 instead of 16px/400. Measured mobile font sizes by characters were 14px, 12px, 17px, 27px, 16px, 32px, 15px, 36px, 26px, 20px and 10.5px.

Breakpoint values, grid column changes, image behavior and touch-target sizes are not measured. Hover states were measured on desktop only.

## Iteration Guide

1. Start from the tokens: set `canvas` `#1d1e20`, `ink` `#f8f8f8`, `primary` `#dfe1e3`, `on-primary` `#000000`.
2. Load Noto Sans Thai (100 to 900) and Karnvayla 700; use `display` for section titles and `button` for the main action.
3. Build the header as a 60px bar with four 16px/400 links, an "EN" language button and the pale "Apply Now" pill.
4. Compose sections as alternating `#0f0f10` and `#1d1e20` bands; put one photo-led story grid under the hero.
5. Choose one accent per page from `accent-orange`, `accent-amber`, `accent-green` or a faculty color.
6. Verify against the 390px values above before claiming parity; anything not listed there is not measured.
