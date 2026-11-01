---
version: alpha
name: Cigna Healthcare
category: "Healthcare & Wellness"
description: "Cigna Healthcare's US site pairs a confident cobalt blue (#0033ff) with deep indigo (#110081) headlines, leaf green (#00874d) and peach (#fad6bd) accents on a white and #f4f4f4 canvas. Value Serif Pro 700 carries display and feature headlines (64px hero), Value Sans Pro carries body (14px/16px), with fully round 9999px pill buttons and 30px leaf-cut cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f4f4f4"
  ink: "#333333"
  primary: "#0033ff"
  on-primary: "#ffffff"
  leaf-green: "#00874d"
  brand-indigo: "#110081"
  primary-hover: "#001f99"
  input-text: "#707070"
  peach: "#fad6bd"
typography:
  display:
    fontFamily: "\"Value Serif Pro\", serif"
    fontSize: 64px
    fontWeight: 700
    lineHeight: 80px
  display-mobile:
    fontFamily: "\"Value Serif Pro\", serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 36.4px
  heading:
    fontFamily: "\"Value Sans Pro\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 36.4px
  subheading:
    fontFamily: "\"Value Serif Pro\", serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 45.6px
  body:
    fontFamily: "\"Value Sans Pro\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"Value Sans Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 21.28px
  nav:
    fontFamily: "\"Value Sans Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 30px
  pill: 9999px
spacing:
  s1: 8px
  s2: 12px
  s3: 14px
  s4: 16px
  s5: 22px
  s6: 24px
  s7: 32px
  s8: 48px
  s9: 64px
  s10: 120px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 71px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 49px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.input-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 16px 48px 16px 16px
    height: 56px
    borderColor: "{colors.input-text}"
  card:
    backgroundColor: "{colors.peach}"
    textColor: "{colors.brand-indigo}"
    rounded: "{rounded.md}"
    padding: 32px
  footer:
    textColor: "{colors.ink}"
---

# Cigna Healthcare

## Overview

Cigna Healthcare presents itself on cigna.com as "an advocate for better health through every stage of life" (about-us page, opened for this document), and the home page capture backs that tone with warm portrait photography, a time-aware greeting ("Good Morning!" beside a sun icon), and plain-language headlines. The page is a member-and-shopper front door for a large insurer: a thin white utility bar with audience links ("For Providers", "For Brokers", "For Employers", Search, Español), a cobalt navigation band with a white pill "Log in to myCigna" button, then a full-bleed hero on a dark green gradient with a smiling portrait cropped against a graphic of bright green leaves.

The palette is disciplined. Cobalt `#0033ff` is the action color (navigation band, primary button, links, the Feedback tab). Deep indigo `#110081` is the voice color: it sets headlines, the footer fill and card text. Leaf green `#00874d` and peach `#fad6bd` are accent fills for illustration and callouts, and `#f4f4f4` is the quiet gray section background. The canvas under all of it is white `#ffffff`.

Type is a two-family system: Value Serif Pro 700 for display and feature headlines, Value Sans Pro for everything functional. The mix is the personality: a bookish serif at 64px on the hero, a sturdy humanist sans at 14px and 16px for reading text. Shapes echo the leaf logo: fully round pills for buttons, and cards cut with a 30px radius on two opposite corners (the measured value is `30px 0px`).

Density is moderate. The home page is 7152px tall at a 1280px viewport and alternates image-and-text feature blocks with large gray bands. The measured gaps are mostly 24px and 16px, with 32px, 8px and 120px for section rhythm.

## Colors

All values below are measured on the live page or read from the site's own `--leaf-*` custom properties.

- **Canvas `#ffffff`** is the page background behind the utility bar and the feature rows. It is the largest on-screen color in the capture.
- **Section gray `#f4f4f4`** (`page-largest`) is the largest background by DOM area and fills the "Solutions for your ever-changing health needs" band. The site also exposes it as `--leaf-color-header-bg-tertiary`.
- **Ink `#333333`** is the most-read text color (4057 characters in the measurement) and is the site's `--leaf-color-content-default`.
- **Primary cobalt `#0033ff`** fills the "Explore plans" button, the navigation band and the Feedback tab; it is also the link color ("Looking for another kind of coverage?") and `--leaf-color-content-brand`. On-primary text is white `#ffffff`.
- **Primary hover `#001f99`** is the measured hover fill of the "Explore plans" and Feedback buttons. The secondary white pill ("Log in to myCigna") hovers to a pale `#e6ebff` fill instead, with the cobalt label unchanged.
- **Brand indigo `#110081`** sets H2 and H3 headlines and card text, and fills the footer (`--leaf-color-footer-bg-inverse-default`). It is also `--leaf-color-bg-brand-xstrong`.
- **Leaf green `#00874d`** is `--leaf-color-accent-content-leaf-green-100`; it appears in the leaf illustration marks and the green section area of the page.
- **Peach `#fad6bd`** fills the "Important Benefits Update" notice card.
- **Input text `#707070`** colors the placeholder and the 1px border of the "Select a type of coverage" dropdown.

The measured text colors are only four: `#333333`, `#ffffff`, `#0033ff`, `#110081`. The site's custom-property list also carries danger reds, a lavender visited-link color and an orange accent; none of these were visible in the capture, so they are not tokens here.

The nav-link role in the extraction read `#0000ee`, which is the browser default link color and not a brand value. It is excluded. Header audience links in the capture are drawn in cobalt `#0033ff`.

## Typography

Two families are loaded: **Value Serif Pro** (a single 700 normal face) and **Value Sans Pro** (400, 500 and 700 normal faces). Value Sans Pro accounts for 7494 measured characters against 307 for Value Serif Pro, so serif is a headline-only voice.

| Role | Family | Size / line height | Weight |
|---|---|---|---|
| Display (hero H1) | Value Serif Pro | 64px / 80px | 700 |
| Display, mobile pass | Value Serif Pro | 28px / 36.4px | 700 |
| Subheading (H3, "Dental Care, Covered") | Value Serif Pro | 40px / 45.6px | 700 |
| Heading (H2, "Shop our plans") | Value Sans Pro | 28px / 36.4px | 700 |
| Body | Value Sans Pro | 14px / 21px | 400 |
| Button and link | Value Sans Pro | 16px / 21.28px | 500 |
| Nav | Value Sans Pro | 16px / 24px | 400 |

The size histogram by characters is led by 16px (5209) and 14px (2077), followed by 40px, 48px, 18px, 28px and 64px. The site's own tokens express the scale in rem (`--leaf-font-size-0` is 0.75rem, `--leaf-font-size-6` is 1.75rem, `--leaf-font-size-8` is 2.5rem, `--leaf-font-size-11` is 4rem).

The pairing rule visible in the capture: marketing headlines ("Stay Healthy This Flu Season", "Best Digital Experience for Commercial Health Plan Member Satisfaction") are Value Serif Pro in indigo; interface headings and labels ("Shop our plans", "Are you a member?") are Value Sans Pro bold. One feature headline sets the final word, "Covered", in italic; the loaded-face list records only normal-style files, so italic is a rendering detail to check before reuse.

**Font substitutes.** Value Sans Pro and Value Serif Pro are proprietary faces served by the site. No public license or download page was found on the pages opened. For prototypes outside the site, use a humanist sans for Value Sans Pro and a sturdy transitional or slab-leaning serif at bold weight for Value Serif Pro, and keep the 64px / 40px / 28px / 16px / 14px sizes above.

## Layout

The measured viewport is 1280px wide (page width 1280, content 1265px after the scrollbar). The home page is a stack of full-width bands: white utility bar, cobalt nav band, hero, a floating plan-finder card overlapping the hero's lower edge, a white feature area, and a `#f4f4f4` band for the "Solutions" feature, then a long indigo footer (measured footer height 1382px).

Text blocks in the feature rows are 542px wide (the measured widths of the H1 and H3 elements). Feature rows are two-column: an image on one side and headline, copy and link on the other, alternating sides down the page.

Spacing values measured: gaps of 24px (82 uses), 16px (36), 8px (8), 32px and 120px (2 each). Paddings: 16px, 32px, 8px, 24px, 64px, 22px, 14px, 12px, 48px. The site's own scale (`--leaf-spacing-*`) lists 4, 8, 12, 14, 16, 18, 24, 48, 56 and 96 among its steps in rem.

The plan-finder card is a white rounded panel with three columns: "Shop our plans" with a one-line question, a "Select a type of coverage" dropdown with an "Explore plans" button, and an "Are you a member?" column with a circular arrow link ("Activate your account now"). A small disclaimer line in italic sits below it.

Declared breakpoints in the site's stylesheet variables: `--leaf-breakpoint-sm` 560px, `--leaf-breakpoint-lg` 960px, `--leaf-breakpoint-xl` 1200px.

## Elevation & Depth

Depth is used sparingly. The only box shadow in the measured roles is `rgba(0, 0, 0, 0.1) 0px 8px 6px 0px`, which lifts the floating plan-finder card off the hero; it matches the site's `--leaf-shadow-default`. A stronger `--leaf-shadow-large` (`0 10px 12px 0 rgb(0 0 0 / 20%)`) is declared in the same list, and `--vocModalShadow` carries the same value.

Focus is drawn as a double ring (`--leaf-border-width-focus` 0.125rem white knockout ring plus a second ring), declared in the corpus. Buttons themselves are flat: the cobalt pill has no shadow and shows state through a darker fill on hover (`#001f99`).

Separation otherwise comes from color planes: white, `#f4f4f4`, dark green hero, indigo footer. There are no hairline dividers in the roles measured other than the vertical rule between the "Shop our plans" and member columns visible in the capture.

## Shapes

Radii measured on the live page: `900px` (three uses; the pill buttons), `30px 0px` (four uses; the leaf-cut cards), `8px` (the dropdown) and `4px` (the Feedback tab). Tokens: `xs` 4px, `sm` 8px, `md` 30px, `pill` 9999px (for the 900px measured pill).

The 30px radius is applied to two opposite corners only (`30px 0px`), which gives the cards the asymmetric leaf silhouette. The hero image and the family photograph in the "Dental Care, Covered" block are cropped by leaf-shaped masks, so image shapes repeat the logo's leaf motif. The site's own variables name the radii: `--leaf-border-radius-button` and `--leaf-border-radius-brand` are 900px, `--leaf-border-radius-large` is 30px, `--leaf-border-radius-field` is 8px, `--leaf-border-radius-small` is 4px.

## Components

- **Primary button ("Explore plans")**: fill `{colors.primary}`, white 16px/500 Value Sans Pro label, 2px border in the same cobalt, pill radius, padding 12px 24px; measured 71px tall and 144px wide in the plan finder (the same button at the mobile pass measures 49px tall). Hover fill `{colors.primary-hover}`.
- **Secondary button ("Log in to myCigna")**: white fill, cobalt label, 2px white border, pill radius, padding 12px 24px, 49px tall and 183px wide; sits on the cobalt nav band. Hover fill is `#e6ebff`.
- **Link**: cobalt, 16px at weight 500 with an underline in the capture ("Looking for another kind of coverage?").
- **Text input / select**: white fill, 1px border and text in `{colors.input-text}`, 8px radius, padding 16px 48px 16px 16px, 56px tall; a chevron icon is drawn at the right as a background image.
- **Card ("Important Benefits Update")**: peach `{colors.peach}` fill, indigo text, 28px bold heading, 32px padding, radius `30px 0px`, measured 542px by 253px.
- **Navigation**: the utility bar uses `{colors.ink}` 16px links with cobalt audience labels; the main band is cobalt with white 16px labels ("Shop For Plans" is weight 700) and a trailing external-link icon on "Find a Doctor".
- **Footer**: indigo `{colors.brand-indigo}` field with white text; opens with an "I want to..." quick-link list ("Get an ID card", "File a claim").

Not documented as brand UI: the Feedback side tab, the circular "TOP" back-to-top button and the OneTrust cookie banner (hidden during capture).

## Design System Architecture

Cigna's front end exposes a named design system through its CSS custom properties: every token is prefixed `--leaf-` ("Leaf", after the logo's leaf mark). The extraction captured at least 400 root custom properties, organised in layers: raw scales (`--leaf-spacing-*`, `--leaf-font-size-*`, `--leaf-font-families-value-sans-pro`), semantic roles (`--leaf-color-content-default`, `--leaf-color-bg-brand-strong-hover`, `--leaf-border-radius-field`) and component groups (`--leaf-color-button-primary-bg-active`, `--leaf-color-header-submenu-content-default`, `--leaf-color-footer-bg-inverse-default`). Typography tokens are named by role and size, such as `--leaf-typography-display-default-font-size`, `--leaf-typography-headline-large-font-family` and `--leaf-typography-body-default-strong-font-family`, with `-mobile` variants for display, headline and title roles. Components also carry `leaf-c-icon` class names in the inline SVG icons.

No public documentation was found: the about-us page (https://www.cigna.com/about-us) links a newsroom and social media pages but no brand guidelines, press kit or design-system site. There is no public Leaf repository link on the pages opened. The system described here is therefore the de-facto system measured from shipped CSS, not an official specification. Sources: https://www.cigna.com (measured), https://www.cigna.com/about-us (opened).

## Do's and Don'ts

Do
- Use cobalt `#0033ff` for actions and links, and fill the primary button solid with a white label and a pill radius.
- Set feature headlines in Value Serif Pro 700 in brand indigo `#110081`, and functional headings in Value Sans Pro 700.
- Keep body copy in Value Sans Pro at 14px/21px with `#333333` ink.
- Use the leaf shapes (30px two-corner radius, leaf masks on photography) as the signature shape language.
- Pair photography of real people in warm light with plain, sentence-case copy.

Don't
- Don't use the browser default `#0000ee` for links; the site uses cobalt.
- Don't round cards symmetrically; the measured card radius is `30px 0px`.
- Don't use serif for buttons, form labels or navigation.
- Don't add drop shadows to buttons; the single measured shadow belongs to the floating plan-finder card.
- Don't treat the Feedback tab, TOP button or cookie banner as brand components.

## Responsive Behavior

Only the mobile pass of the extraction is recorded here (390px viewport). At that width the H1 measures 28px / 36.4px Value Serif Pro (the 64px desktop display drops to 28px), the H2 measures 24px / 26.88px, body stays 14px / 21px, and the "Explore plans" button measures 49px tall and 150px wide with the same 12px 24px padding and pill radius. The mobile header text reads "Search, Español, Menu, Log in to myCigna" in cobalt 16px at weight 500, so the audience links of the desktop utility bar are not part of the measured mobile header text. The mobile character-weighted size list is led by 16px and 14px, followed by 32px, 40px, 28px and 24px.

The stylesheet variables declare breakpoints at 560px, 960px and 1200px. How each section rearranges between these widths was not measured, and hover or touch behavior on mobile was not measured.

## Iteration Guide

1. Start from the tokens: `canvas` `#ffffff`, `ink` `#333333`, `primary` `#0033ff`, `brand-indigo` `#110081`. Add `leaf-green` and `peach` only as accent fills.
2. Set the hero H1 in Value Serif Pro 700 at 64px / 80px on a dark green photographic field with white text; use 28px / 36.4px for the narrow pass.
3. Build the primary button as a 9999px pill, 12px 24px padding, 16px weight 500, solid cobalt with a 2px cobalt border; add the `#001f99` hover fill.
4. Build cards with a `30px 0px` radius and 32px padding; use peach for notices and white or `#f4f4f4` for content cards.
5. Keep section rhythm on 16px, 24px and 32px steps, with a 120px gap between major bands where the original uses it.
6. When extending, read the site's `--leaf-*` variables first (spacing, radius, typography roles) rather than inventing new values, and record any new measurement as a probe before adding a token.
7. Check every new color against the four measured text colors and the two measured background planes before shipping.
