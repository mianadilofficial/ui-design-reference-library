---
version: alpha
name: Standard Chartered Thailand
category: "Thai Brands"
description: "Standard Chartered Bank (Thai) country site on sc.com/th: SC Prosper Sans in Regular, Medium and Bold at 16px body and 56px display with 1px letter-spacing, brand blue #0473ea, indigo #020b43 toolbar and footer, green #38d200 accent, pill buttons with a 25px radius and 50px height."
colors:
  canvas: "#ffffff"
  ink: "#525355"
  ink-black: "#000000"
  primary: "#0473ea"
  on-primary: "#ffffff"
  primary-hover: "#0c3a66"
  primary-deep: "#0061c8"
  indigo: "#020b43"
  accent-green: "#38d200"
  blue-tint: "#c3defa"
  blue-wash: "#e7f1fd"
  surface-grey: "#f7f7f7"
  border-grey: "#e5e5e5"
typography:
  display:
    fontFamily: "\"SC Prosper Sans Medium\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 73px
    letterSpacing: 1px
  display-mobile:
    fontFamily: "\"SC Prosper Sans Medium\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 47px
    letterSpacing: 1px
  body:
    fontFamily: "\"SC Prosper Sans Regular\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 1px
  button:
    fontFamily: "\"SC Prosper Sans Bold\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 19.2px
    letterSpacing: 1px
rounded:
  xs: 25px
  sm: 100px
spacing:
  s1: 3px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 13px
  s6: 13.13px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 13px 62px 13px 25px
    height: 50px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 15px
    boxShadow: rgba(4, 115, 234, 0.1) 0px 0px 64px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.indigo}"
    textColor: "{colors.canvas}"
---

## Overview

The Standard Chartered Thailand site (https://www.sc.com/th/) is the Thai country page of the global bank, and it uses the group's web theme: a slim indigo utility bar (Login, Thailand, TH | EN), a white primary navigation bar with the stacked "standard chartered" wordmark and the green-and-blue "S" symbol on the left, and a full-width night-skyline photograph for the hero. The H1 "ธนาคารสแตนดาร์ดชาร์เตอร์ด ประเทศไทย" sits on the image in white, beside a vertical bar that is blue at the top and green at the bottom (the theme variables name this pair as the left and right heading accent colours). A single blue pill button, "ค้นหาเพิ่มเติม" with a chevron, follows the copy.

Below the hero a centred paragraph of welcome text leads to a stack of full-width announcement images. In the capture these are two black-and-white memorial tribute images, an indigo scam-warning card about misuse of the bank's name in investment solicitation, and a large "DPA Protecting" banner. They are content banners, not part of the system, and the cookie-preferences round icon at left and the page widgets are utilities that are not documented as brand UI.

The tone is corporate, global and reassuring: generous white space, a restrained blue, and short formal Thai copy.

## Colors

The site publishes its palette as CSS custom properties (119 root variables), so the values below are measured, with names from the theme.

- **canvas #ffffff** (the theme's `--color-white`) is the page background; **ink #525355** is the theme's primary grey (`--color-grey-primary`) used for body and heading text, and measured on about 340 characters. **ink-black #000000** is the theme black.
- **primary #0473ea** is the theme's `--color-blue-primary`, the fill of the primary button, with white text and a 2px #0473ea border. The same blue colours links and the navigation text (about 60 characters).
- **primary-hover #0c3a66** (`--color-blue-2`) is the hover background of the primary button (the hover text switches to the blue). **primary-deep #0061c8** is `--color-blue-4`, used for sub-navigation borders.
- **indigo #020b43** (`--color-indigo-primary`) is the toolbar and footer colour; the toolbar text is white.
- **accent-green #38d200** (`--color-green-primary`) is the right-hand heading accent and the highlight colour, a nod to the green half of the logo.
- **blue-tint #c3defa** and **blue-wash #e7f1fd** are table-header and soft-fill tints; **surface-grey #f7f7f7** is the alternate background; **border-grey #e5e5e5** is a light border.

Additional theme steps exist (`--color-blue-1` #061d33, `--color-blue-3` #2c3a88, `--color-blue-5` #7bb6f5, `--color-green-1` #238500, `--color-green-2` #cdf4bf, `--color-grey-2` #ccc), but only the tokens above are promoted.

## Typography

The family is **SC Prosper Sans**, loaded in three web-font files: Regular (400), Medium (500) and Bold (700). The names are used as separate font-family values instead of weights: the hero H1 uses "SC Prosper Sans Medium" at 56px / 73px line-height, body copy "SC Prosper Sans Regular" at 16px / 24px, and buttons and navigation "SC Prosper Sans Bold" at 16px / 19.2px. Every measured size carries 1px letter-spacing (16px, 20px, 14px, 40px, 48px and 56px all report 1px). On mobile the display role drops to 36px / 47px and body to 14px.

Weight values in CSS are low (300 for 763 characters, 400 for 178) because the face supplies the visual weight. Helvetica, Arial and Lucida Grande are the fallbacks; The extraction does not record which file supplies Thai glyphs; a Thai-capable sans such as Noto Sans Thai is the practical substitute.

## Layout

A full-width hero image is followed by a narrow centred column (the welcome paragraph and announcement images are centred in the capture). Navigation has four primary items: เกี่ยวกับเรา (with a dropdown), บริการธนาคาร, สื่อมวลชน, ติดต่อเรา. The utility bar above holds Login, the country selector and the TH | EN switch. The footer is an indigo block with column navigation. Measured paddings are 20px, 10px, 3px and 16px; gaps are 10px, 30px and 32px. The page is 1280px wide and 3,880px tall in the extraction.

## Elevation & Depth

Elevation is subtle. The navigation bar has a very wide, very faint blue glow, `rgba(4, 115, 234, 0.1) 0px 0px 64px 0px`, instead of a hard drop shadow, and one other shadow was measured: `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2 uses). Depth is otherwise made by full-bleed photography with a dark overlay and by solid colour blocks (indigo, blue).

## Shapes

Buttons are pills: the measured primary button radius is 25px on a 50px-tall control, and 100px appears on another control. All other elements are square-cornered: images, cards and the announcement banners have no rounding. The hero's two-colour accent bar is a thin vertical line, not a rounded shape.

## Components

- **Primary button**: #0473ea fill, white text, 2px #0473ea border, 25px radius, 50px height, padding 13px 62px 13px 25px (extra right padding leaves room for the chevron icon), SC Prosper Sans Bold 16px with 1px tracking. On hover the fill becomes #0c3a66.
- **Secondary and reverse buttons** are defined in the theme variables: the secondary uses a white fill with a blue border and blue text, the reverse is transparent with white border and text.
- **Navigation**: white bar, blue Bold 16px labels, drop-down chevrons; a sub-navigation uses `--color-blue-3` as its background.
- **Utility bar**: indigo with white labels.
- **Hero heading accent**: a vertical bar split blue and green.
- **Tables**: header fill #c3defa with blue text, blue borders.

## Design System Architecture

No public design-system site was found on the pages opened (https://www.sc.com/th/ was the page read), but the shipped CSS exposes a clear token layer in `:root`. Colour is a scale: `--color-blue-primary` and `--color-blue-1` to `--color-blue-7`, `--color-green-primary`, `--color-green-1`, `--color-green-2`, `--color-indigo-primary`, `--color-grey-primary` and `--color-grey-1` to `--color-grey-5`, plus white and black. Semantic variables point at that scale by name: `--button-primary-background-color: var(--color-blue-primary)`, `--cta-hover-background-color: var(--color-blue-1)`, `--nav-link-color-active`, `--heading-one-color` through `--heading-six-color`, `--toolbar-background-color`, `--table-header-background-color`, `--input-border-color` and cookie-notice variables. The page also carries WordPress admin variables (`--wp-admin-theme-color*`), which are not brand tokens. When extending the site, define new colours in the scale and reference them through semantic variables rather than hard-coding hex values.

## Do's and Don'ts

- Do use #0473ea for the primary action and links, with white text.
- Do keep headings in grey #525355 on white, and white on dark imagery.
- Do set all text with 1px letter-spacing in the SC Prosper Sans family.
- Do pair the blue with the green #38d200 only as a small accent.
- Don't round images or cards; only buttons are pills.
- Don't add heavy shadows; use the faint blue glow on the bar.
- Don't use WordPress admin colours (#005a87, #0073aa) from the root variables.
- Don't treat cookie widgets or memorial banners as brand components.

## Responsive Behavior

The mobile extraction at 390px shows the display role at 36px / 47px and the body at 14px, both with the same family. Other mobile behaviour (menu pattern, button stacking) was not measured and is not documented here. The button's 50px height is a comfortable touch target at any width.

## Iteration Guide

1. Define the colour scale as CSS variables and reference it semantically.
2. Use SC Prosper Sans (or a substitute) with 1px letter-spacing everywhere.
3. Build hero blocks as photography with a white H1 and one blue pill CTA.
4. Keep content on white with #525355 text and an indigo footer.
5. Use green #38d200 only for small accents such as the heading bar.
6. Re-measure when campaign banners change; the system tokens stay stable.
