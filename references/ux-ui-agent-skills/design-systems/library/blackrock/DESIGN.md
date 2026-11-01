---
version: alpha
name: BlackRock
category: "Banking & Insurance"
description: "BlackRock's corporate home page on its published ONEDS design system (data-brand=blackrock): white #ffffff and black #000000 bands, BLK Fort Condensed bold headings at -1px tracking (58.6634px hero) over BLK Fort body at 19.7738px, signal yellow #ffce00 for the Local websites button, cream #f5f5eb cards with 12px radius, 4px-radius solid buttons and orange #ff4713 accents."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffce00"
  on-primary: "#000000"
  surface-cream: "#f5f5eb"
  alert-bar: "#ffe67f"
  accent-orange: "#ff4713"
  ink-subtle: "#656560"
  border-subtle: "#9b9b91"
  border-subtlest: "#d7d7cd"
  success-gain: "#008b5c"
  error-loss: "#c00b28"
  warning: "#ff8200"
typography:
  display:
    fontFamily: "\"BLK Fort Condensed\", \"BLK Fort\", -apple-system, blinkmacsystemfont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 58.6634px
    fontWeight: 700
    lineHeight: 67.4629px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: "\"BLK Fort Condensed\", \"BLK Fort\", -apple-system, blinkmacsystemfont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 45.4451px
    fontWeight: 700
    lineHeight: 52.2618px
    letterSpacing: "-1px"
  heading:
    fontFamily: "\"BLK Fort Condensed\", \"BLK Fort\", -apple-system, blinkmacsystemfont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 46.4672px
    fontWeight: 700
    lineHeight: 53.4373px
    letterSpacing: "-1px"
  subheading:
    fontFamily: "\"BLK Fort Condensed\", \"BLK Fort\", -apple-system, blinkmacsystemfont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 37.4931px
    fontWeight: 700
    lineHeight: 44.2419px
    letterSpacing: "-1px"
  body:
    fontFamily: "\"BLK Fort\", -apple-system, blinkmacsystemfont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 19.7738px
    fontWeight: 400
    lineHeight: 28.672px
  body-m:
    fontFamily: "\"BLK Fort\", -apple-system, blinkmacsystemfont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  legal:
    fontFamily: "\"BLK Fort\", -apple-system, blinkmacsystemfont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.5px
  button:
    fontFamily: "\"BLK Fort\", -apple-system, blinkmacsystemfont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
  button-secondary:
    fontFamily: "\"BLK Fort\", -apple-system, blinkmacsystemfont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 800
    lineHeight: 20px
rounded:
  xs: 1px
  sm: 2px
  md: 2.5px
  lg: 4px
  xl: 5px
  2xl: 12px
  3xl: 16px
  pill: 1000px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 11.42px
  s6: 12px
  s7: 13.42px
  s8: 16px
  s9: 21px
  s10: 22.83px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 8px 12px
    height: 36px
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 13.4155px 28.8311px
    height: 47px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 13.4155px 28.8311px
    height: 47px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  alert-bar:
    backgroundColor: "{colors.alert-bar}"
    textColor: "{colors.ink}"
    typography: "{typography.legal}"
  card:
    backgroundColor: "{colors.surface-cream}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    padding: 32px 24px 24px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body-m}"
---

## Overview

`https://www.blackrock.com` redirects to BlackRock's corporate home page, `https://www.blackrock.com/corporate` (page title "Homepage | BlackRock"), and this file describes that measured page. It is built on BlackRock's own design system, which the markup names ONEDS: the root carries `data-ds-version="v2026.11.20"` and `data-brand="blackrock"`, and components use `oneds-*` classes such as `oneds-alert-bar`, `oneds-hero-banner`, `oneds-navigation`, `oneds-button-v2` and `oneds-eyebrow`. The same stylesheet also defines themes for iShares, Aladdin and Aladdin Hub, so this page shows the BlackRock-brand theme.

The page reads top to bottom as: a header with hamburger, the "BlackRock" wordmark, a yellow "Local websites" button and a search icon; a pale-yellow alert strip ("Access BlackRock's Q3 2026 earnings") with a close control; a rounded black hero panel with the headline "2026 Midyear Global Outlook: Abundance vs. scarcity", a paragraph in white, a white button "Read the 2026 Midyear Global Outlook" and a yellow illustration of coloured strands on the right; a white band with a "PRESS RELEASE" label and "Powering the next generation of American workers" beside "Stay current with the latest news and announcements from BlackRock." and a black "Visit the Newsroom" button; two cream cards ("BlackRock launches $100 million philanthropic initiative", "Global Weekly Commentary") each ending in a bold link with an orange arrow; a black band with a portrait photo and "Growing with your country: Thoughts from a long-term optimist" plus a white "Read Larry Fink's letter" button; a cream "Learn more" band with About BlackRock and Careers links; a black footer with three columns (BlackRock® blurb, Corporate, Legal); and a long white legal-disclaimer section.

The voice is institutional and plainly worded: report and press-release titles, sentence-case headings, and regulatory disclosures by region. A cookie dialog (OneTrust) appears over the hero in both captures; the extractor reports hiding the consent modal and its scrims before measuring, so the dialog, its Reject All and Accept All buttons and its scrims are not documented as brand UI.

## Colors

The page is mostly black and white with one signal yellow. All colors below were measured on the page or are declared in the stylesheet `https://www.blackrock.com/_astro/global-css-CXvSkefK.css` under `[data-brand=blackrock]`.

- **Canvas `#ffffff`** (`--oneds-bg-default`) is the default surface; **ink `#000000`** (`--oneds-text-default`, `--oneds-bg-inverse`) is text, the black bands and the footer. Measured area is `#ffffff` 10090, `#000000` 2862, `#f5f5eb` 670; text is `#000000` (6265 weighted characters) and `#ffffff` (1357).
- **Primary `#ffce00`** (`--oneds-bg-accent`, `--oneds-bg-yellow`) fills the "Local websites" button and the hero illustration; text on it is `#000000`. The iShares theme declares a different yellow, `#fedc00`, and Aladdin a teal `#00cfba`, which do not apply here.
- **Surface cream `#f5f5eb`** (`--oneds-bg-subtlest`) is the card and "Learn more" band background. **Alert bar `#ffe67f`** is the notification strip under the header (measured, 55 weighted area).
- **Accent orange `#ff4713`** is declared for this brand as `--oneds-bg-eyebrow`, `--oneds-text-accent`, `--oneds-border-accent` and the tertiary-button icon color; the card links in the capture end in orange arrows.
- **Support greys:** `#656560` (`--oneds-text-subtle`), `#9b9b91` (`--oneds-border-color-subtle`, disabled text) and `#d7d7cd` (`--oneds-border-color-subtlest`, `--oneds-bg-subtle`).
- **Status colors** declared in the theme: success text `#008b5c` (background `#e6fae9`), error text `#c00b28` (background `#ffefee`), warning text `#ff8200` (background `#fff0e9`), informative background `#eff7ff` with border `#205bbc`.

The DS also defines accent banners (`--oneds-banner-bg-accent: #ffce00`, edge `#000`) and skeleton colors; none is measured at rest on this page beyond those listed.

## Typography

Two families, both self-hosted and declared with `@font-face` in the global stylesheet as WOFF2: **BLK Fort** at 400, 400 italic, 700, 700 italic, 800 and 800 italic (`BLKFort-Book`, `-Bold`, `-Extrabold` files) and **BLK Fort Condensed** at 700. Fallbacks are `-apple-system, blinkmacsystemfont, Segoe UI, Roboto, Oxygen, Ubuntu, Fira Sans, Helvetica Neue, sans-serif`. By weighted characters BLK Fort covers 6813, a family named FortBook 572 and BLK Fort Condensed 237.

The type scale is a set of named classes with fluid `clamp()` sizes; the measured 1280px values match them:

| Token | DS class | Size / line | Weight | Tracking |
|---|---|---|---|---|
| display | `oneds-heading-xxl` | 58.6634px / 67.4629px | 700 | -1px |
| heading | `oneds-heading-xl` | 46.4672px / 53.4373px | 700 | -1px |
| subheading | `oneds-heading-l` | 37.4931px / 44.2419px | 700 | -1px |
| body | `oneds-body-l` | 19.7738px / 28.672px | 400 | normal |
| body-m | `oneds-body-m` | 16px / 24px | 400 | normal |
| legal | `oneds-body-s-compact` | 14px / 17.5px | 400 | normal |
| button | button label | 16px / 20px | 700 | normal |
| button-secondary | `oneds-button-v2` label | 16px / 20px | 800 | normal |

The heading classes are declared as BLK Fort Condensed 700 with line heights of 1.15 (xxl, xl), 1.18 (l), 1.22 (m, s) and `-1px` tracking (`-.5px` for m and s); `oneds-heading-display-1` goes from `3.5rem` to `5rem` at line height 1.1. Body classes are BLK Fort at 12px, 14px, 16px and fluid sizes up to `1.25rem` (l) and `1.5625rem` (xl), with line heights of 1.25 (compact) to 1.5. Eyebrows are uppercase with `.5px` tracking. Buttons are forced to weight 800 by the `.oneds-button-v2 span` rule, though the yellow button measured 700. The hero H1 is 58.6634px at 1280px and 45.4451px at 390px.

Font substitutes: the BLK Fort files are BlackRock's own and no license page was found on the pages opened; the site's stack falls back to system sans-serifs, which is the only substitute documented.

## Layout

The page is 4009px tall at 1280px (the legal section accounts for the length). Sections are full-width bands that alternate white, black and cream, with the hero as a rounded black panel inset from the viewport edges (one measured element has a 16px radius, matching `--oneds-radius-container-lg`) and content in a centred multi-column container (`oneds-multi-column-container`). Measured gaps: 16px (6 uses), 22.8311px (3), 30.8311px (2), 12px (2), 53.6621px (1). Paddings: 8px (19), 48px (14), 60.4931px (7), 13.4155px (5), 12px (4), 22.8311px (3), 11.4155px (3), 28.8311px (3), 32px (3), 4px (2), 30.8311px (2), 24px (2).

The DS defines the spacing tokens `--oneds-space-s: 16px`, `-m: 24px`, `-l: 32px`, `-xl: 40px`, layout spacing of 64px, 80px and 96px, and fluid spacing (`--oneds-space-fluid-xxxs` to `-xxxl`, from 8px to 96px, computed as `min(max, base + n * (100vw - 345px) / 1095)`). Media queries are declared at `37.5rem`, `48rem`, `64rem` and `90rem`. The hero is a two-column block (text left, illustration right) inside a black rounded panel; the news band is a two-column block (press release left, newsroom call right); cards sit side by side in two columns; the black feature band puts the portrait left and text right; the footer has three equal columns.

## Elevation & Depth

Depth is limited to two named shadows in the DS, `--oneds-depth-1: 0px 0px 12px 0px rgba(0, 0, 0, .0980392157)` and `--oneds-depth-2: 0px 5px 24px 0px rgba(0, 0, 0, .1490196078)` (with `--oneds-depth-0` as none). The only shadow measured on a visible element is `rgba(0, 0, 0, 0.2) 0px 0px 18px 0px` (1 element). Cards, buttons and bands are otherwise flat; separation comes from color blocks (white, cream, black) and 1px or thicker rules (`--oneds-border-width-1` to `-8` are declared as solid black borders).

Motion tokens: durations `115ms`, `.25s`, `.35s`, `.4s` and `.55s`, and easings `cubic-bezier(.4, 0, 1, 1)` (in), `cubic-bezier(.1, 0, .4, 1)` (out) and `cubic-bezier(.5, 0, .5, 1)` (in-out). Buttons declare overlay colors for hover (`rgba(255, 255, 255, .2)` on black, `rgba(0, 0, 0, .2)` on white, `rgba(0, 0, 0, .1490196078)` on accent); hover is not measured on this page.

## Shapes

Radii are tokenised and measured: `--oneds-radius-button: 4px`, `--oneds-radius-card: 12px`, `--oneds-radius-container-lg: 16px`, `--oneds-radius-container-sm: 12px`, `--oneds-radius-media-lg: 12px`, `--oneds-radius-media-sm: 8px`, `--oneds-radius-eyebrow: 2px`, `--oneds-radius-form-input: 4px`, and `--oneds-radius-full: 1000px` (the `pill` token). Measured radii by count: 4px (5 elements), 12px (4), 2px (4), 1px (3), 5px (1, the yellow button), 16px (1), 2.5px (1). The other brand themes set the same tokens to 0px.

The "Local websites" button uses a 5px radius and the solid buttons 4px, so buttons read as slightly softened rectangles rather than pills. Cards are 12px, the hero panel is rounded (one element measured 16px), and photos use the declared media radii of 8px and 12px. The eyebrow marker is a 16px square (12px small) in `--oneds-bg-eyebrow` with a 2px radius. Icons are thin line glyphs (hamburger, search, close, arrows); tertiary-link arrows are orange.

## Components

**Primary yellow button (`button-primary`).** `#ffce00` fill, black 16px / 700 label, padding `8px 12px`, 36px high, 5px radius: "Local websites" in the header.

**Solid black button (`button-dark`).** `#000000` fill, white 16px / 800 label, padding `13.4155px 28.8311px`, 47px high, 4px radius, with a trailing arrow icon: "Visit the Newsroom →".

**White button (`button-secondary`).** `#ffffff` fill, black 16px / 800 label, same padding and 47px height, 4px radius, used on black bands ("Read the 2026 Midyear Global Outlook", "Read Larry Fink's letter"). On a 390px viewport it stretches to the full width, 350px, at 60px high.

**Text link (`link`).** Black 16px bold with an underline, for example "Read the press release", "About BlackRock" and "Careers". Tertiary links add an orange trailing arrow.

**Alert bar (`alert-bar`).** `#ffe67f`, with 14px / 700 / 17.5px black link text and a close control; it is not a fixed brand element and carries news of the quarter.

**Card (`card`).** `#f5f5eb`, 12px radius, padding `32px 24px 24px`, 247px high at 573px wide: a 19.7738px bold title, a 16px body paragraph and a bold link with an orange arrow.

**Header (`nav`).** White; the measured header element is 1280px wide and 43px high, with hamburger, wordmark, yellow button and search.

**Footer (`footer`).** Black with white text: an H4 "BlackRock®" at 19.7738px / 700, a blurb, link columns in 16px / 400 / 24px white text, then a white legal section in 14px / 17.5px black text with bold regional disclosures and an internal reference code.

## Design System Architecture

BlackRock's design system is shipped in the page rather than documented on it. The home page does not link a public documentation site, so none was opened; the evidence is the markup and CSS of `https://www.blackrock.com/corporate`: `data-ds-version="v2026.11.20"`, `data-brand="blackrock"` and 576 occurrences of `oneds` in the HTML, with component classes (`oneds-alert-bar`, `oneds-basic-text`, `oneds-button-v2`, `oneds-disclaimer`, `oneds-eyebrow`, `oneds-hamburger`, `oneds-hero-banner`, `oneds-navigation`, `oneds-notification-container`).

The site is built with Astro (per-component stylesheets under `/_astro/`, such as `Button-Eeq_bF53-BKEq7x_w.css`, `Headline-CzChXgP7-Cz1YzTKn.css` and `Eyebrow-psDuc6gh-psDuc6gh.css`) plus a global stylesheet `https://www.blackrock.com/_astro/global-css-CXvSkefK.css` (about 432 KB) that defines the tokens under `[data-ds-version="v2026.11.20"] [data-brand=blackrock]` and sibling blocks for `ishares`, `aladdin` and `aladdin-hub`. Token families: `--oneds-bg-*`, `--oneds-text-*`, `--oneds-border-*`, `--oneds-button-primary|secondary|tertiary-*` (default, inverse and accent variants plus disabled states), `--oneds-icon-*`, `--oneds-radius-*`, `--oneds-space-*` (fixed, layout and fluid), `--oneds-depth-*`, `--oneds-duration-*` and `--oneds-ease-*`.

Theming works by swapping the `data-brand` attribute, which changes the accent (`#ffce00`, `#fedc00` or `#00cfba`), eyebrow color, radii (0px in the other themes) and spacing; the front matter here records the BlackRock theme's values.

## Do's and Don'ts

Do
- Use black and white surfaces with the yellow `#ffce00` reserved for the primary header action and brand artwork, and cream `#f5f5eb` for cards.
- Set headlines in BLK Fort Condensed 700 with `-1px` tracking and body text in BLK Fort at 16px or 19.7738px.
- Use 4px-radius solid buttons in black or white by background, labels at weight 800 with a trailing arrow icon.
- Round cards to 12px and the hero panel to 16px; keep shadows to the two DS depths.
- Put regulatory text at 14px / 17.5px with regional disclosures in bold lead-ins.

Don't
- Do not use the iShares yellow `#fedc00` or the Aladdin teal `#00cfba` on this theme.
- Do not make pill buttons; the button radius is 4px (5px for the header button).
- Do not copy the OneTrust cookie dialog, its scrims or the alert-bar close control as brand components.
- Do not use orange `#ff4713` as a fill for buttons here; on this page it appears in eyebrow markers and link arrows.
- Do not add decorative gradients or strong shadows; none is measured.

## Responsive Behavior

The stylesheet declares `@media(min-width:37.5rem)`, `(min-width:48rem)`, `(min-width:64rem)` and `(min-width:90rem)`, and typography is fluid through `clamp()` expressions.

The 390px mobile pass measured: the hero H1 at 45.4451px / 52.2618px (350px wide, desktop 58.6634px); the second heading at 33.3308px / 38.3304px (desktop 46.4672px); body text at 18.5215px / 26.8562px (desktop 19.7738px); the large button at 16px / 800 / 20px with padding `10.1644px 22.3288px`, 350px wide and 60px high; and the alert strip at 14px / 700 / 17.5px, 390px wide and 36px high. By weighted characters the mobile sizes are 14px (4799), 16px (1507), 18.5215px (451), 28.7676px (125), 33.3308px (61), 45.4451px (51) and 13.3333px (42). Other reflow behavior is not measured, and no mobile capture image exists.

## Iteration Guide

1. Set `data-brand="blackrock"` tokens: surfaces `#ffffff` and `#000000`, cream `#f5f5eb`, accent `#ffce00`, eyebrow and tertiary arrows `#ff4713`.
2. Load BLK Fort (400, 700, 800) and BLK Fort Condensed (700); set headings with the `heading-xxl`, `-xl` and `-l` sizes (58.6634px, 46.4672px, 37.4931px at 1280px), `-1px` tracking and line heights of 1.15 to 1.18.
3. Build buttons from the DS: 16px / 800 labels, `13.4155px 28.8311px` padding, 4px radius, black on white bands and white on black bands, plus the small yellow header button with `8px 12px` padding and 5px radius.
4. Compose pages as bands: black rounded hero panel, white news block, two cream 12px-radius cards, black feature band with a 12px-radius photo, cream "Learn more" band, black footer.
5. Add alert strips in `#ffe67f` at 14px / 700 and put regulatory text in 14px / 17.5px.
6. Use only DS values (`--oneds-*`) for new tokens and verify against `web/data/extracted/blackrock.json` and the stylesheet before adding them.
