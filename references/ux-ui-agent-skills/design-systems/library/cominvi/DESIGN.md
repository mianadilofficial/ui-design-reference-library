---
version: alpha
name: CoMinVi
category: "Architecture & Interiors"
description: "CoMinVi (cominvi.com.mx), an underground mining contractor in Guanajuato, Mexico. Near-black #151515 hero over mine footage, pale #ebf0ed and white sections, orange #f47920 accent, Helvetica Now Display 700 headlines with PP Supply Mono 300 uppercase labels and 7.11px clipped buttons."
colors:
  canvas: "#151515"
  ink: "#ebf0ed"
  surface-light: "#ebf0ed"
  primary: "#ffffff"
  on-primary: "#151515"
  accent: "#f47920"
  gray: "#e0e0e0"
  overlay: "#02020233"
  link-border: "#ffffff33"
typography:
  display:
    fontFamily: "\"Helvetica Now Display\", Arial, sans-serif"
    fontSize: 49.7778px
    fontWeight: 700
    lineHeight: 54.7556px
  display-mobile:
    fontFamily: "\"Helvetica Now Display\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 35.2px
  heading:
    fontFamily: "\"PP Supply Mono\", Arial, sans-serif"
    fontSize: 9.95556px
    fontWeight: 300
    lineHeight: 8.96px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Helvetica Now Display\", Arial, sans-serif"
    fontSize: 28.4444px
    fontWeight: 700
    lineHeight: 31.2889px
    letterSpacing: "-0.711111px"
  body:
    fontFamily: "\"Helvetica Now Display\", Arial, sans-serif"
    fontSize: 14.2222px
    fontWeight: 700
    lineHeight: 17.0667px
  button:
    fontFamily: "\"PP Supply Mono\", Arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 300
    lineHeight: 8.53333px
    textTransform: uppercase
  nav:
    fontFamily: "\"Helvetica Now Display\", Arial, sans-serif"
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 14.2222px
  link:
    fontFamily: "\"PP Supply Mono\", Arial, sans-serif"
    fontSize: 9.6px
    fontWeight: 300
    lineHeight: 9.6px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 3.56px
  md: 4px
  lg: 7.11px
  cta: 7.11px
  pill: 9999px
spacing:
  s1: 1.92px
  s2: 2.67px
  s3: 3px
  s4: 3.56px
  s5: 4px
  s6: 4.27px
  s7: 7.11px
  s8: 10.67px
  s9: 11.38px
  s10: 13px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    height: 36px
    clipPath: inset(0px round 7.11111px)
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    height: 36px
    clipPath: inset(0px round 7.11111px)
  thumb-card:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 7.11111px
    borderColor: "{colors.link-border}"
  service-card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    padding: 28.4444px
    height: 398px
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
---

## Overview

CoMinVi is an underground mining contractor with its corporate office and central workshop in Guanajuato, Mexico. The page title is "CoMinVi | Underground Mining Contractor in Mexico", and the meta description calls it a "leading underground mining contractor in Mexico with 20+ years experience", specialising in "tunnel development, ground support, and mineral extraction". The site is built in Webflow and is organised as numbered sections labelled in a mono face: S.01 About us, S.02 Our services, S.03 Minerals, S.04 Safety Policy and S.05 Technology.

The first screen is a full-viewport film still of an underground vehicle in a dark tunnel with its headlamp on, under the white headline "Your trusted partner in underground mining". The top-left holds the outlined CoMinVi logo with a miner icon; the top-right a "Menu" label beside a circular outlined hamburger button. A small counter reads "OVER TIME + 1.000.000 LINEAR METERS" over the footage, and at the bottom right two video-thumbnail cards, "OUR SERVICES" and "TECHNOLOGY", each with a white label strip and a triangle arrow. The rest of the page moves onto white and pale-green-grey sections: an About block with figures (1M linear meters, 20M tons of mineral extracted, 5.1k indirect jobs, 1.7k current direct jobs, 7 active projects, 36 projects delivered), five service cards (Engineering, Ground Support & Fortification, Development, Production, Hauling), a minerals block listing element symbols and numbers (Gold AU #79, Silver AG #47, Lead PB #82, Copper CU #29, Zinc ZN #30), a safety-policy statement, and a fleet section that says "Over 360 machines for underground performance" with items such as Motor Grader, Telehandler and Compactor.

The voice is plain and engineering-led: short declarative sentences ("We design and plan safe, efficient, and sustainable underground mining infrastructure"), numbers as proof, and a safety statement in the first person plural. The measured extraction was taken at the 1280 by 800 viewport, so its page height is 800px; the later sections were measured through their element styles and not through a taller capture.

## Colors

The palette is declared as Webflow variables on `:root` and read back by the extractor.

- **Canvas — `#151515`** (`--primary`). The hero and dark-section background (area weight 4254) and the label color on white buttons.
- **Ink and light surface — `#ebf0ed`** (`--light-green`, despite the name a pale grey-green). It is the text color on dark (972 weighted characters) and a large light background (area weight 6519), so it is stored twice: `ink` and `surface-light`.
- **White — `#ffffff`** (`--white`): the largest background area (13541), the fill of the primary button and the service cards, and white headline text on the hero (275 characters). It is stored as `primary` because it is the measured fill of the main call-to-action.
- **Accent — `#f47920`** (`--accent`). The orange accent: the declared hover background for buttons (`--_ui-colors---button-bg-hover: var(--accent)`) and the second arrow color. It appears in only 2 measured text characters on the first screen.
- **Gray — `#e0e0e0`** (`--gray`, area weight 153) and **overlay — `#02020233`** (area weight 1024), a measured 20%-opacity near-black background area.
- **Link border — `#ffffff33`**, the 1px outline of the video-thumbnail cards.
- Text on light areas is `#151515` (3021 weighted characters, the most-read color).

The variables describe the button system: `--_ui-colors---button-bg: var(--primary)`, `--_ui-colors---button-text: var(--white)`, hover text `var(--primary)`, and arrow pairs (`--_ui-colors---button-arrow-1-bg: var(--white)`, `--_ui-colors---button-arrow-2-bg: var(--primary)`). The stylesheet corpus also carries Webflow's default `#3898ec` focus color and `#0082f3`, which are framework defaults, not brand colors.

## Typography

Two commercial families are loaded as web fonts from the Webflow CDN: **Helvetica Now Display** in Bold (700) and Medium (500), and **PP Supply Mono** in Light (300). The declared fallback is Arial, so Arial is the documented substitute. Measured weights are 700 (3330 weighted characters), 300 (454), 400 (316) and 500 (170); the 400 measurements are not among the loaded faces.

Roles:

- **Display** — Helvetica Now Display 49.7778px / 700, line-height 54.7556px ("Your trusted partner"). On a 390px viewport it is 32px / 700 with line-height 35.2px.
- **Subheading** — 28.4444px / 700, line-height 31.2889px, letter-spacing -0.711111px (service titles such as "Engineering").
- **Body** — 14.2222px / 700, line-height 17.0667px, set in bold, `#151515` on light sections; on mobile it is 19.2px / 700 with line-height 23.04px.
- **Lead statements** — a 42.6667px size with -0.418133px letter-spacing was measured on 999 weighted characters.
- **Section labels** — PP Supply Mono 9.95556px / 300 uppercase ("ABOUT US", "S.01").
- **Buttons** — PP Supply Mono 10.6667px / 300 uppercase (13.6px on mobile).
- **Thumbnail labels** — PP Supply Mono 9.6px / 300 uppercase.
- **Navigation** — Helvetica Now Display 14.2222px / 400 for links; the nav container measures 14px / 500.

The scale is fluid by construction. The root variables define `--size-font: calc(var(--size-container) / (var(--size-container-ideal) / var(--size-unit)))` with `--size-container: clamp(var(--size-container-min), 100vw, var(--size-container-max))`, a minimum of 992px, a maximum of 1920px, an ideal width of 1440 and a unit of 16. At 1280px that computes to 14.2222px, and the measured sizes are multiples of it: 28.4444px is 2x, 42.6667px is 3x, 49.7778px is 3.5x and 99.5556px is 7x.

## Layout

A site margin of `2em` is declared (`--_spacings---site-margin`), which is 28.4444px at the measured width, and the service card padding measures 28.4444px (46 occurrences). The first screen is full-bleed footage with the headline at the lower left, the counter near the centre-right, and the two thumbnail cards stacked to the lower right. Below it, sections use wide light panels. The service cards are 398px square. Measured gaps are 14.2222px (62), 11.3778px (30), 10.6667px (28), 7.11111px (26), 3.55556px (22), 16.3556px (20), 28.4444px (19) and a very large 227.556px (10); paddings are 28.4444px, 3.55556px, 1.92px, 4.26667px, 14.2222px and 21.3333px. The header nav measures 48px tall and 1223px wide.

Density: open and cinematic on the first screen, then compact on the light sections, where bold 14px body copy sits in narrow 295px columns beside large figures.

## Elevation & Depth

The page is flat. The extractor recorded no box-shadow on any element; the only shadows in the stylesheet corpus are Webflow focus rings (`0 0 3px 1px #3898ec`, `0 0 0 2px #fff`). Borders measured are `#151515` (18), `#00000033` (6), `#ffffff` (3), `#ffffff33` (2) and `#00000080` (2). Depth on the first screen comes from the footage, the measured `#02020233` area and the thin translucent outlines of the thumbnails.

## Shapes

Corners are small and consistent: 7.11111px (27 measured) for buttons and the service cards, 3.55556px (21), 4px (2) and 2px (2), plus one 1000px and one 100% radius (the menu button in the capture is circular). In the Webflow stylesheet the small label button `.button-sm` uses a 2px radius. The primary buttons apply their 7.11111px rounding through a clip-path (`inset(0px round 7.11111px)`), which is why the generated tokens include a `clipPath` value.

## Components

- **Primary button (`button-primary`).** "OUR SERVICES / SEE MORE ABOUT OUR SERVICES": white fill, `#151515` PP Supply Mono 10.6667px / 300 uppercase label, 36px tall and 149px wide, 7.11111px rounded corners.
- **Dark button (`button-secondary`).** "JOB OFFERS", "READ MORE" and "ABOUT US": `#151515` fill, white label, 36px tall (136px, 130px wide); same typography.
- **Thumbnail card (`thumb-card`).** 192px by 128px, 4px radius, 1px `#ffffff33` border, 7.11111px padding, with a white label strip in PP Supply Mono 9.6px uppercase and a triangle arrow.
- **Service card (`service-card`).** White, 398px by 398px, 7.11111px radius, 28.4444px padding, title in 28.4444px bold and a short description beneath.
- **Menu.** A "Menu" label and a circular outlined button with a hamburger icon; the open menu lists Our Services, Technology, Safety, About us, Blog, Contact, Join the Team and a language switch (En / Es).
- **Counter.** A small mono HUD over the hero footage ("OVER TIME + 1.000.000 LINEAR METERS").
- **Fleet accordion.** Machine entries (Motor Grader, Telehandler, Compactor, Backhoe Loaders With Baskets) each with OPEN and CLOSE controls and a short description.

## Design System Architecture

No public design-system documentation or brand-guideline page is linked from the home page, so no official design system is documented. The site is a Webflow project (`data-wf-domain="www.cominvi.com.mx"`) whose stylesheet is https://cdn.prod.website-files.com/6899a2f3f7995d5e3e31b7c6/css/cominvi-staging.webflow.shared.451204bcb.min.css (about 27 KB). The system lives in a handful of root variables: palette (`--primary`, `--white`, `--accent`, `--gray`, `--light-green`), the container and fluid-size variables, a site margin, and a block of button variables named `--_ui-colors---button-*` (background, text, hover background, hover text and two arrow pairs). Components use em-based sizes, for example `.button-sm` with `font-size: .75em`, `height: 1.75em`, `padding: .25em` and a mono label at `.9em`, so the same component scales with the fluid base size. The fonts are uploaded to the Webflow asset CDN and declared with `font-display: swap`.

## Do's and Don'ts

Do:
- Open on dark footage with a white 49.7778px bold headline at the lower left, and put the evidence (figures, counters) in small mono type.
- Use `#151515`, `#ebf0ed` and white for surfaces; keep `#f47920` for hover and arrow accents.
- Label sections with numbered mono tags (S.01 to S.05) in PP Supply Mono Light uppercase.
- Round buttons to 7.11111px, keep thumbnails at 4px with a 1px translucent white border.
- Size everything in multiples of the fluid base (14.2222px at 1280px).

Don't:
- Don't use drop shadows; none are measured.
- Don't use the Webflow default focus blue `#3898ec` as a brand color.
- Don't set body copy in a light weight: the measured body is bold (700).
- Don't treat the orange as a fill for large areas; it is measured on 2 text characters only.
- Don't replace the mono labels with a sans: PP Supply Mono carries every small label and button.

## Responsive Behavior

Measured at 390px wide: the headline is 32px / 700 (line-height 35.2px) in a 292px-wide block; the body paragraph is 19.2px / 700 (line-height 23.04px) in a 358px-wide, 207px-tall block; the "OUR SERVICES" button measures 13.6px / 300 with line-height 10.88px, 182px by 40px, with an 8px radius; the navigation shows only "open menu". The page also displays the line "Turn your phone for a better experience" in its markup.

Declared in the Webflow stylesheet: `@media screen and (max-width: 991px)` (4 rules), `@media screen and (max-width: 767px)` (4), `@media screen and (max-width: 479px)` (5), `@media screen and (min-width: 1440px)` (2) and `@media (min-width: 768px)` (1). The fluid size variable clamps between 992px and 1920px. How sections reflow between these widths was not measured. Dark mode was not measured.

## Iteration Guide

1. Set the first screen on `#151515` with full-bleed footage; put a white 49.7778px / 700 headline at the lower left.
2. Use `#ebf0ed` and white for the following sections, with `#151515` text.
3. Build buttons as 36px-tall capsules clipped at 7.11111px, white with a dark mono label or dark with a white label.
4. Use PP Supply Mono Light uppercase for labels and Helvetica Now Display Bold for everything else; fall back to Arial.
5. Define a base size from the viewport (`clamp(992px, 100vw, 1920px) / (1440 / 16)`) and size components in em.
6. Verify with `node web/scripts/verify-designs.mjs --slug=cominvi`.
