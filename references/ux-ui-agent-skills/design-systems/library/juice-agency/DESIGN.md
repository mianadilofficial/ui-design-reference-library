---
version: alpha
name: Juice
category: "Agencies & Studios"
description: "Juice, a creative branding and web agency in Orlando (juice.agency): a pale cream canvas (#ffffeb) with near-black ink (#1d1c1b), Riposte grotesque at 300/400 for headlines and copy (47.001px h2, 31.334px uppercase h1) and Juice Mono, an all-caps monospace, for buttons and metadata. Pastel pill-less buttons (#b6dedb mint, #d8dbc6 sage) with 1.96px corners; no shadows."
colors:
  canvas: "#ffffeb"
  body-green: "#5ea85e"
  ink: "#1d1c1b"
  primary: "#b6dedb"
  on-primary: "#1d1c1b"
  surface-sage: "#d8dbc6"
  accent-yellow: "#f7f780"
typography:
  display:
    fontFamily: Riposte, system-ui, sans-serif
    fontSize: 31.334px
    fontWeight: 400
    lineHeight: 39.1675px
    textTransform: uppercase
  display-mobile:
    fontFamily: Riposte, system-ui, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26.4px
    textTransform: uppercase
  heading:
    fontFamily: Riposte, system-ui, sans-serif
    fontSize: 47.001px
    fontWeight: 300
    lineHeight: 51.7011px
  body:
    fontFamily: Riposte, system-ui, sans-serif
    fontSize: 17.7037px
    fontWeight: 300
    lineHeight: 24.7852px
  button:
    fontFamily: "\"Juice Mono\", monospace"
    fontSize: 11.7503px
    fontWeight: 300
    lineHeight: 11.7503px
    textTransform: uppercase
  nav:
    fontFamily: Riposte, system-ui, sans-serif
    fontSize: 15.667px
    fontWeight: 400
    lineHeight: 23.5005px
  link:
    fontFamily: "\"Juice Mono\", monospace"
    fontSize: 13.787px
    fontWeight: 400
    lineHeight: 13.787px
    textTransform: uppercase
rounded:
  xs: 1.96px
  sm: 3.92px
  md: 5.88px
  cta: 1.96px
spacing:
  s1: 1px
  s2: 3.92px
  s3: 7.83px
  s4: 9px
  s5: 11.75px
  s6: 15.67px
  s7: 16px
  s8: 19.58px
  s9: 23.5px
  s10: 29.77px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 9px 19.5838px 8px
    height: 29px
  button-secondary:
    backgroundColor: "{colors.surface-sage}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.cta}"
    padding: 11.7503px 15.667px
    height: 40px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 11.7503px 0px
  nav:
    textColor: "{colors.canvas}"
    padding: 15.667px 31.334px 0px
  nav-link:
    textColor: "{colors.body-green}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

The measured page is `https://www.juice.agency/`, titled "Creative Branding & Web Agency in Orlando | Juice". Juice presents itself as a small, playful brand and web studio: the hero is an oversized "JUICE" wordmark built from pale blocks on a cream field, with an orange basketball illustration sitting in the middle of it, the all-caps headline "THE CREATIVE AGENCY THAT LOVES TO SHOW OFF A THING OR TWO." and the subline "STARTING WITH YOUR BRAND." at the left, a small monospace tagline "IMPACTFUL DIGITAL EXPERIENCES FOR AMBITIOUS BRANDS" at the right, and monospace metadata at the bottom corners: a phone number on the left ("407-99-JUICE") and a live Orlando clock on the right. A hamburger menu button and the purple logo mark sit in the top corners.

The next sections read as an editorial portfolio: a centered statement in light Riposte ("We partner with ambitious brands to create digital experiences that feel true and drive momentum.") with an illustrated hand pointing at the text, a two-column intro ("Juice is where strategy, design, and technology come together to build brands people believe in") with a photograph, "Featured work where design drives clarity and brand growth." and large colorful case-study tiles (Upwork Cookbook, an orange "IT'S LIGHT" tile). The page is 7278px tall with 1091 visible elements. The voice is confident and a little cheeky; captions use monospace small caps like technical labels. Work is shown as full-color tiles in brand colors of the clients, so the agency's own interface stays quiet.

The top banner pill "WE REBRANDED WITH PURPOSE. READ THE STORY" is the measured primary call to action.

## Colors

- **Canvas `#ffffeb`**: the cream used for large hero shapes and nav text; the capture's dominant screen color is a pale cream-green (sampled #f5fae3 in the capture analysis), which is the closest on-screen match to this measured CSS color.
- **Body green `#5ea85e`**: the computed background of the `body` element and the color of the nav link text in the extraction. It is measured but is not the dominant visible field in the capture; it is recorded as measured, not as the page's visual canvas.
- **Ink `#1d1c1b`**: near-black, the text color (1140 characters of text weight) and the dominant area-weighted background (2320), which comes from the dark footer block ("Partner with a creative agency that's ambitious as you are.") where text is `#ffffeb`.
- **Primary `#b6dedb`**: mint. The fill of the banner button "WE REBRANDED WITH PURPOSE. READ THE STORY", with ink label.
- **Surface sage `#d8dbc6`**: the fill of the secondary button "SEE ALL WORK", which also carries a 1px solid `#1d1c1b` border.
- **Accent yellow `#f7f780`**: the hover fill of the mint button (measured `rgb(247, 247, 128)`) and the color and border of the outlined "CONTACT" button on the dark footer.

Other measured background colors with small area are `#ffbab4`, `#ff8356`, `#cfa46c` and `#5ea85e`; they come from tiles and illustration. Tailwind's default ring and border variables (`rgb(59 130 246 / .5)`, `#e5e7eb`) appear in the stylesheet as framework defaults and are not brand colors.

## Typography

Two families, both self-hosted (`/fonts/Riposte-Light.woff2`, `/fonts/Riposte-Regular.woff2`, `/fonts/JuiceMonumentGroteskMono-Regular.woff2`):

- **Riposte** (weights 300 and 400, fallback `system-ui, sans-serif`) is the voice: the h1 is 31.334px weight 400 uppercase with a 39.1675px line-height; the h2 statement is 47.001px weight 300 with a 51.7011px line-height; body copy is 17.7037px weight 300 with a 24.7852px line-height; the overlay menu items are 54.8345px weight 400; nav links are 15.667px.
- **Juice Mono** (weight 400, fallback `monospace`) is the label face for buttons and metadata: 11.7503px for the banner button, 13.787px uppercase for links and secondary buttons.

On the 390px mobile pass the h1 is 24px (line-height 26.4px), body is 16px weight 300, and the secondary button label is 14.08px. The font-size ladder on desktop by character weight is 17.7037px, 11.7503px, 31.334px, 21.5421px, 47.001px, 39.1675px, 13.787px and 54.8345px.

Font substitutes: Riposte and Juice Mono are the studio's own files; the site declares only `system-ui, sans-serif` and `monospace` as fallbacks.

## Layout

Single-column editorial flow with generous vertical whitespace and a wide left margin for headlines. Hero text is left-aligned in the lower-left; the metadata labels are pinned to the left and right edges. Mid-page blocks alternate between a centered statement and a two-column text/photo pair, and the work section places large tiles at irregular horizontal offsets (one tile near the left edge, the next pushed to the right), so the grid is staggered rather than strict. The measured gap scale is 23.5005px (22), 7.83351px (10), 16px (8), 15.667px (6), 3.91675px and 31.334px.

## Elevation & Depth

No box-shadow is used (`boxShadows` is empty); the Tailwind `--tw-shadow` variables resolve to `0 0 #0000`. Depth comes from layering: the illustrated basketball and the pointing hand overlap text, photographs sit on the cream field, and the dark `#1d1c1b` footer block provides the strongest value contrast. Separation otherwise comes from color fields.

## Shapes

Radii are small and measured at 1.95838px (11 elements; buttons), 3.91675px (15 elements; images and tiles) and 5.88px (3). Buttons are rectangles with barely-rounded corners, not pills. The hamburger button and logo mark in the capture are square-ish purple shapes. Photography carries a small radius in the capture, consistent with 3.92px. Large illustrated shapes (the basketball, the hand) are freeform.

## Components

- **Banner button (primary)**: mint `#b6dedb` fill, ink `#1d1c1b` label in Juice Mono 300 at 11.7503px uppercase, padding 9px 19.5838px 8px, 29px tall, 1.96px radius. On hover the fill becomes `#f7f780` (measured).
- **Secondary button ("SEE ALL WORK")**: sage `#d8dbc6` fill, 1px solid `#1d1c1b` border, Juice Mono 400 at 13.787px uppercase, padding 11.7503px 15.667px, 40px tall.
- **Outlined button ("CONTACT")**: transparent fill, `#f7f780` label and 1px `#f7f780` border, used on the dark footer.
- **Text link ("MORE ABOUT JUICE →")**: Juice Mono 400 at 13.787px uppercase, ink color, underlined by a rule in the capture.
- **Menu overlay**: full-screen list HOME, ABOUT, WORK, JOURNAL, CONTACT plus LINKEDIN, TWITTER, INSTAGRAM at 54.8345px in `#ffffeb`.
- **Footer**: `#1d1c1b` background with `#ffffeb` 31.334px light statement and the outlined contact button.

## Design System Architecture

No public design-system or brand-guideline page was linked from the pages opened (the word "Brand Guidelines" on the home page is a service the agency offers to clients, not its own documentation). The shipped site is an Astro build (`/_astro/*.css` assets) using Tailwind utility classes (`--tw-*` root variables, `max-md:` and `md:` prefixes in markup). The brand layer is therefore expressed in the utility classes and the two typefaces rather than in named CSS variables; only `--bg-color: transparent` is a custom property in the root.

## Do's and Don'ts

Do:
- Use Riposte 300 for sentences and 400 uppercase for the headline; use Juice Mono uppercase for every label and button.
- Keep buttons rectangular with about 2px corners, mint or sage fill, ink label, and a yellow `#f7f780` hover.
- Let client work supply the saturated color; keep the interface cream, ink and mint.
- Take type sizes from the measured ladder above.

Don't:
- Do not add drop shadows or gradients.
- Do not round buttons into pills.
- Do not use Tailwind default blues or grays as brand colors.

## Responsive Behavior

Measured on the 390px mobile pass: h1 24px weight 400 (line-height 26.4px); body 16px weight 300; the secondary "SEE ALL WORK" button 14.08px with a 2px radius, padding 12px 16px and a 1px solid `#1d1c1b` border; the size ladder becomes 16px, 24px, 12px, 22px, 20px, 32px, 14.08px, 40px and 10px. Column stacking, menu behavior and tile layout on mobile were not measured.

## Iteration Guide

1. Cream `#ffffeb` ground, ink `#1d1c1b` text, dark footer block.
2. Headline in Riposte 400 uppercase; statements in Riposte 300 at large sizes; metadata in Juice Mono uppercase.
3. Buttons: mint fill primary, sage fill with 1px ink border secondary, 1.96px radius.
4. Show work as colorful, staggered tiles with a small radius.
5. Verify with `node web/scripts/verify-designs.mjs --slug=juice-agency`.
