---
version: alpha
name: Skillshare
category: "Education"
description: "Skillshare's creative-learning marketing system, set entirely in Grilli Type's proprietary GT Walsheim Pro (served as \"GT Walsheim Pro\") at 700 for headlines and 400 for body text. Black (#000000) text on a white (#ffffff) hero and card surface, set between full-bleed black (#000000) canvas bands with white (#ffffff) body ink that cover most of the page. The only filled action is a mint-green #55da9b button with a 4px radius and black label (hover #50cf93). Accents are a #5620c1 violet text link, a #24c2f2 cyan active tab pill (100px radius) and #dcdee1 hairlines. Class cards use an 8px radius with a soft 0 2px 4px shadow, and the browse header and footer sit on near-black #0b1215."

colors:
  primary: "#55da9b"
  primary-hover: "#50cf93"
  on-primary: "#000000"
  canvas: "#000000"
  surface: "#ffffff"
  canvas-soft: "#fafafa"
  ink: "#ffffff"
  ink-inverse: "#000000"
  ink-strong: "#0b1215"
  ink-secondary: "#394649"
  ink-card-title: "#002333"
  surface-inverse: "#000000"
  surface-inverse-soft: "#0b1215"
  surface-stat: "#232424"
  hairline: "#dcdee1"
  border-outline: "#394649"
  accent-violet: "#5620c1"
  accent-purple: "#6927ef"
  accent-cyan: "#24c2f2"
  accent-neon: "#00ff84"
  on-dark: "#ffffff"
  hover-wash-dark: "#0b12150a"
  hover-wash-green: "#55da9b0a"
  shadow-card: "#0000001a"
  shadow-card-grey: "#b4b8b880"

typography:
  display-xl:
    fontFamily: "\"GT Walsheim Pro\", sans-serif"
    fontSize: 46px
    fontWeight: 700
    lineHeight: 57.96px
    letterSpacing: normal
  display-xl-mobile:
    fontFamily: "\"GT Walsheim Pro\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40.32px
    letterSpacing: normal
  display-lg:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 45px
  stat-number:
    fontFamily: "\"GT Walsheim Pro\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
  promo-name:
    fontFamily: "\"GT Walsheim Pro\", sans-serif"
    fontSize: 38.4px
    fontWeight: 700
    lineHeight: 34.56px
  heading-lg:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 40.04px
  heading-md:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 31.98px
  heading-sm:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 31.9px
  heading-xs:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27.9px
  button-lg:
    fontFamily: "\"GT Walsheim Pro\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 39px
    letterSpacing: normal
  button-md:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  button-sm-mobile:
    fontFamily: "\"GT Walsheim Pro\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 26px
  body:
    fontFamily: "\"GT Walsheim Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: normal
  body-sm:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 19.95px
  nav-link:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 700
    lineHeight: 15px
  sidebar-link:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 700
    lineHeight: 19.95px
  stat-label:
    fontFamily: "\"GT Walsheim Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  caption:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15.96px
  legal-link:
    fontFamily: "\"GT Walsheim Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 700
    lineHeight: 15.4px

rounded:
  sm: 4px
  md: 8px
  tab: 100px
  pill: 9999px
  circle: 50%

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  xxl: 24px
  "3xl": 32px
  "4xl": 40px
  "5xl": 48px
  "6xl": 64px
  "7xl": 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 40px
    border: "1px solid #55da9b"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 40px
    border: "1px solid #50cf93"
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm-mobile}"
    rounded: "{rounded.sm}"
    padding: 0px 10px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-md}"
    rounded: "{rounded.sm}"
    padding: 5px 15px
    height: 40px
    border: "1px solid #394649"
  button-secondary-hover:
    backgroundColor: "{colors.hover-wash-dark}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-md}"
    rounded: "{rounded.sm}"
    padding: 5px 15px
    height: 40px
    border: "1px solid #394649"
  link-violet:
    textColor: "{colors.accent-violet}"
    typography: "{typography.button-md}"
  link-violet-hover:
    backgroundColor: "{colors.hover-wash-green}"
    textColor: "{colors.accent-violet}"
    typography: "{typography.button-md}"
    textDecoration: underline
  link-legal:
    textColor: "{colors.ink-strong}"
    typography: "{typography.legal-link}"
  text-input-search:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.button-md}"
    rounded: "{rounded.sm}"
    padding: 0px 38px
    height: 40px
    border: "1px solid #dcdee1"
  nav-header-light:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.nav-link}"
  nav-header-dark:
    backgroundColor: "{colors.surface-inverse-soft}"
    textColor: "{colors.on-dark}"
    typography: "{typography.nav-link}"
  nav-header-dark-link-hover:
    textColor: "{colors.primary}"
    typography: "{typography.nav-link}"
  nav-sidebar-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.sidebar-link}"
    rounded: "{rounded.sm}"
    padding: 0px 0px 0px 16px
    height: 40px
  nav-sidebar-link-hover:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.sidebar-link}"
    rounded: "{rounded.sm}"
    padding: 0px 0px 0px 16px
    height: 40px
  tab-pill-active:
    backgroundColor: "{colors.accent-cyan}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.button-md}"
    rounded: "{rounded.tab}"
    padding: 4px 16px
    height: 34px
    border: "1px solid #24c2f2"
  tab-pill-on-dark:
    textColor: "{colors.on-dark}"
    typography: "{typography.button-md}"
    rounded: "{rounded.tab}"
    padding: 4px 16px
    height: 34px
    border: "1px solid #ffffff"
  card-class:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-card-title}"
    rounded: "{rounded.md}"
    padding: 0px
    shadow: "rgba(179, 183, 183, 0.5) 0px 2px 4px 0px"
  card-stat:
    backgroundColor: "{colors.surface-stat}"
    textColor: "{colors.on-dark}"
    typography: "{typography.stat-number}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.surface-inverse-soft}"
    textColor: "{colors.on-dark}"
    typography: "{typography.caption}"
  footer-heading:
    textColor: "{colors.on-dark}"
    typography: "{typography.heading-xs}"
---

## Overview

Skillshare's marketing site reads like a poster wall for a creative school. The first screen is a white hero surface (`{colors.surface}`, `#ffffff`) with a heavy two-line headline, "Creative Classes Taught by the Best Creative Pros", set in GT Walsheim Pro at 46px / 700 (`{typography.display-xl}`). A thick ribbon curls in from the left edge of the hero in green, cyan, violet and magenta. It is the "winding, wandering path" squiggle from the January 2020 identity ([Creative Review](https://www.creativereview.co.uk/skillshare-launches-new-identity/)). To the right sits a compact sign-up module: an h3 in `{typography.heading-sm}` ("Get 7 free days of Skillshare") with a green underline flourish, three outlined social buttons and a violet "Continue with email" text link.

Under the hero, the page switches to full-bleed photography and black bands. Four category tiles (Graphic Design, Illustration, Animation, Film & Video) run edge to edge with white 28px / 700 labels (`{typography.heading-lg}`) laid straight over the images. Next comes a black band (`{colors.surface-inverse}`) holding the 46px "Creative Learning Made Easy" statement, a four-line checklist with cyan check icons, and a row of `{colors.surface-stat}` (#232424) stat tiles showing "425k+ MEMBERS", "30k+ CLASSES", "9k+ TEACHERS" and "4.8 [U+2605 U+2605 U+2605 U+2605 U+2605] APP STORE RATING".

Most of the page area is black. By measured area the backgrounds are `#000000` 6277, `#ffffff` 5524, `#6927ef` 815 (a violet promo band below the captured fold) and `#232424` 116. The mint-green `{colors.primary}` (`#55da9b`) covers only 4 units of area, yet it is the one filled action color on the page. That ratio is the core of the brand: a monochrome editorial field with a single green "go" signal.

**Key Characteristics:**
- One typeface everywhere: GT Walsheim Pro at 700 for display and UI labels, 400 for reading text, and 600 only for the uppercase stat labels.
- Pure black `#000000` (`ink-inverse`) is the most-read text color by raw count, on the white surfaces; on the black canvas the body ink is white `#ffffff` (`ink`). Product chrome on the browse page uses the softer near-black `#0b1215`.
- The only filled button is mint `{colors.primary}` with a **black** label. It is never white text on green.
- Small 4px corners on buttons and inputs, 8px on cards, and fully round 100px / 9999px corners for tabs and topic tags.
- Hero and category art is full-bleed, saturated photography and illustration, laid down with no rounded corners.
- Accent colors are scarce and functional: violet `#5620c1` for the email link, cyan `#24c2f2` for the active tab and check icons, neon `#00ff84` for a few characters.

## Colors

> **Source pages:** home (`https://www.skillshare.com/en/`, `web/data/extracted/skillshare.json`) and browse (`https://www.skillshare.com/en/browse`, `web/data/extracted/skillshare--browse.json`). Skillshare publishes no official palette with hex values. The 2020 identity names its brand colour "Wander Green" but gives no hex ([Creative Review](https://www.creativereview.co.uk/skillshare-launches-new-identity/)). Every hex below was measured on the live site.

### Brand & Accent
- **Mint / Wander Green** (`{colors.primary}`, `#55da9b`): Fill and 1px border of the primary "Sign Up" / "Start for Free" button. It also tints the hero squiggle and the "New" badge on class cards. The CSS uses it at several alphas (`#55da9b1a`, `#55da9b4d`, `#55da9b99`, `#55da9be6`).
- **Mint Hover** (`{colors.primary-hover}`, `#50cf93`): Measured hover fill and border of the primary button on both pages.
- **Violet** (`{colors.accent-violet}`, `#5620c1`): The "Continue with email" text link and its border color. It appears 21 times in the CSS corpus.
- **Purple Band** (`{colors.accent-purple}`, `#6927ef`): A large background band (815 area units) below the captured fold on the homepage.
- **Cyan** (`{colors.accent-cyan}`, `#24c2f2`): The active "Featured" tab pill on the course explorer and the check-circle icons in the black value band.
- **Neon Green** (`{colors.accent-neon}`, `#00ff84`): A tiny text accent (5 weighted chars), measured but rare.

### Surface
- **Canvas** (`{colors.canvas}`, `#000000`): The color covering the most of the page — the full-bleed black bands ("Creative Learning Made Easy", stats, "Explore Inspiring Online Courses"). Measured as the largest background area (`backgroundColorsByArea[0]`, 6277 vs 5524 for white) and ~39% of capture pixels. The `<body>` itself is white; the hero and header sit on `{colors.surface}`.
- **Surface** (`{colors.surface}`, `#ffffff`): The `<body>` background — hero, header, sign-up module and class-card fill.
- **Canvas Soft** (`{colors.canvas-soft}`, `#fafafa`): The browse page's canvas behind the card grid and sidebar.
- **Surface Inverse** (`{colors.surface-inverse}`, `#000000`): Full-bleed black bands on the homepage. It is the largest background by area.
- **Surface Inverse Soft** (`{colors.surface-inverse-soft}`, `#0b1215`): Header bar and footer on the browse page.
- **Stat Tile** (`{colors.surface-stat}`, `#232424`): Charcoal fill of the four stat tiles inside the black band.
- **Hairline** (`{colors.hairline}`, `#dcdee1`): The 1px search-input border, and the hover fill of sidebar category links on browse.

### Text
- **Ink** (`{colors.ink}`, `#ffffff`, same value as `{colors.on-dark}`): Body ink on the black canvas — the value-band statements, stat tiles and course-explorer headings.
- **Ink Inverse** (`{colors.ink-inverse}`, `#000000`): By raw count the most-read text color (2,870 weighted chars vs 2,106 for white), used on the white `{colors.surface}` hero, sign-up module and cards: the h1, body paragraphs, FAQ copy and the label on the green button. Unreadable on the black canvas.
- **Ink Strong** (`{colors.ink-strong}`, `#0b1215`): Text on the browse page (h2 "Popular Classes", body, sidebar links) and in the sign-up module (outlined buttons, legal links).
- **Ink Secondary** (`{colors.ink-secondary}`, `#394649`): Card metadata (student counts, durations, teacher names) and the 1px border of outlined buttons.
- **Ink Card Title** (`{colors.ink-card-title}`, `#002333`): Class titles inside homepage course cards.
- **On Dark** (`{colors.on-dark}`, `#ffffff`): Text on black bands, image tiles, stat tiles, the dark header and the footer.

### State washes and shadows
- **Hover Wash Dark** (`{colors.hover-wash-dark}`, `rgba(11, 18, 21, 0.04)`): Measured hover background of the outlined social buttons.
- **Hover Wash Green** (`{colors.hover-wash-green}`, `rgba(85, 218, 155, 0.04)`): Measured hover background of the violet email link. The link also gains an underline on hover.
- **Shadow Card** (`{colors.shadow-card}`, `rgba(0, 0, 0, 0.1)`) and **Shadow Card Grey** (`{colors.shadow-card-grey}`, `rgba(180, 184, 184, 0.5)`): The two measured card-shadow colors.

### Semantic
No error, success or warning colors were observed on the measured pages, and Skillshare publishes no semantic palette. `#ff4a4a` appears 5 times in the CSS corpus, but its role was never seen on screen, so it is not declared as a token.

## Typography

### Font Family
All measured text uses **GT Walsheim Pro**. The @font-face declarations load a bold and a regular cut ("GT Walsheim Pro bold normal", "GT Walsheim Pro normal normal"), and the frequency table attributes 6059 weighted chars to `GT Walsheim Pro` plus 261 to a separately named `GT Walsheim Pro Regular` face. Two fallback stacks are served:
- Builder.io marketing blocks and the primary button use `"GT Walsheim Pro", sans-serif` (the button uses `"GT Walsheim Pro", Arial, sans-serif`).
- App chrome (header, sign-up module, browse page) uses `"GT Walsheim Pro", -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif` plus emoji fonts.

A second face, `Kumlien Pro`, is declared in @font-face and named in 4 CSS rules, but no measured element rendered in it.

### Hierarchy

| Token | Size | Weight | Line height | Where it was measured |
|---|---|---|---|---|
| `display-xl` | 46px | 700 | 57.96px | Home h1, "Creative Learning Made Easy", "Explore Inspiring Online Courses" |
| `display-xl-mobile` | 32px | 700 | 40.32px | Home h1 at 390px |
| `promo-name` | 38.4px | 700 | 34.56px | Teacher names in promo tiles |
| `display-lg` | 36px | 700 | 45px | Browse h1 "Online Classes" (desktop and mobile) |
| `stat-number` | 36px | 700 | 36px | "425k+" stat numbers |
| `heading-lg` | 28px | 700 | 40.04px | Home h2 category labels; value checklist lines |
| `heading-md` | 26px | 700 | 31.98px | Browse h2 "Popular Classes" |
| `heading-sm` | 22px | 700 | 31.9px | Home h3 "Get 7 free days of Skillshare" |
| `heading-xs` | 18px | 700 | 27.9px | Footer column headings ("Company") |
| `button-lg` | 18px | 700 | 39px | Primary "Sign Up" button |
| `button-md` | 16px | 700 | 24px | Outlined social buttons, tab pills, search input |
| `body` | 16px | 400 | 22px | Body paragraphs (FAQ answers) |
| `stat-label` | 16px | 600 | 16px | Uppercase "MEMBERS" / "CLASSES" labels |
| `body-sm` | 15px | 400 | 19.95px | Browse body copy |
| `nav-link` | 15px | 700 | 15px | Header "Browse" / "Sign In" |
| `sidebar-link` | 15px | 700 | 19.95px | Browse sidebar "All Classes" |
| `caption` | 14px | 400 | 15.96px | Footer links |
| `button-sm-mobile` | 13px | 700 | 26px | Primary button at 390px |
| `legal-link` | 11px | 700 | 15.4px | "Terms of Service" / "Privacy Policy" in the sign-up fine print |

By weighted characters on the homepage, the size distribution is 16px (2686), 22px (928), 15px (538), 14px (501), 28px (411), 18px (309), 11px (262), 13px (261), 46px (181), 38.4px (103), 36px (68), 34px (40) and 12px (32). Weights are 400 (3478), 700 (1710), 600 (654), 500 (260) and 100 (218).

### Principles
- Letter-spacing stays `normal` on every measured role. The one exception is a 12px style tracked at 1.2px (32 weighted chars), whose weight was not isolated, so it is not tokenized.
- Display lines use a line-height of about 1.26 (57.96 / 46). That is tight enough for a stacked, poster-like headline block.
- Bold carries the UI. Every button, link, tab, nav item and legal link is 700. Regular 400 is reserved for paragraphs, metadata and footer links.
- The only uppercase role is the stat label (`text-transform: uppercase`, 600).

### Note on Font Substitutes
GT Walsheim is a commercial typeface by Noël Leu from Grilli Type, licensed per use and inspired by Otto Baumberger's 1930s poster lettering ([Grilli Type](https://www.grillitype.com/typeface/gt-walsheim)). Skillshare serves it as `GT Walsheim Pro`. Without a licence, follow the served fallback order: `-apple-system`, `system-ui`, `Segoe UI`, `Roboto`, `Helvetica`, `Arial`. Any other geometric substitute is outside this specification and will change the round "a", "g" and "y" that give the headlines their friendly character.

## Layout

### Spacing System
The measured gaps and paddings cluster on a 4px rhythm:
- Gaps on the homepage are 16px (31), 8px (4), 32px, 40px and 48px. On browse they are 4px (132), 8px (38), 2px (20), 16px and 40px.
- Paddings on the homepage are 24px (40), 8px (33), 16px (22), 48px (20), 4px (15), 64px (7), 20px (6) and 80px (4). Browse adds 12px (53) for card bodies.
- The tokens are `{spacing.xxs}` 2px, `{spacing.xs}` 4px, `{spacing.sm}` 8px, `{spacing.md}` 12px, `{spacing.lg}` 16px, `{spacing.xl}` 20px, `{spacing.xxl}` 24px, `{spacing.3xl}` 32px, `{spacing.4xl}` 40px, `{spacing.5xl}` 48px, `{spacing.6xl}` 64px and `{spacing.7xl}` 80px.
- Large odd paddings (153px, 364.469px, 35.2031px) are centring offsets computed by the Builder.io layout, not spacing tokens.

### Grid & Container
- Measured at a 1280px viewport. The homepage is 8397px tall.
- The header is one row: wordmark at left, "Browse" with a caret, a 500px-wide search field (`text-input-search`), then "Sign In" and the green "Sign Up" at the far right.
- The hero is a two-column split, with the headline at left over the squiggle art and the sign-up module (320px-wide buttons) at right.
- The category strip is four equal full-bleed image tiles with no gutter.
- The course explorer uses a centered 46px heading, two rows of tab pills, and a four-column card grid with 272px-wide cards.
- The browse page has a left category sidebar (`nav` with 48px 16px padding) and a three-column card grid on `{colors.canvas-soft}`.

### Whitespace Philosophy
The homepage alternates dense and open zones. The white hero is airy, the image strip is packed and edge to edge, and the black band leaves a large empty field around a few lines of 28px statements. Content density rises only inside the card grid.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | No shadow | Buttons, tabs, inputs, black bands, image tiles |
| Card (home) | `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px` | Homepage course cards |
| Card (grey) | `rgba(180, 184, 184, 0.5) 0px 2px 4px 0px` | Homepage secondary cards |
| Card (browse) | `rgba(179, 183, 183, 0.5) 0px 2px 4px 0px` | Browse class cards (composed after two transparent Tailwind ring layers) |

The CSS corpus also contains the full Material UI elevation ramp, for example `0px 3px 1px -2px rgba(0,0,0,0.2),0px 2px 2px 0px rgba(0,0,0,0.14),0px 1px 5px 0px rgba(0,0,0,0.12)`. This shows MUI components are bundled, but none of those shadows rendered on the measured marketing surfaces. Depth comes from color blocking (white against black against photography), not from layering.

### Decorative Depth
The only decorative element is the hero squiggle: a thick, rounded ribbon that runs from mint through cyan to violet and magenta. It is placed behind and beside the headline, never behind body copy.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 4px | Primary and secondary buttons, search input, sidebar link hover, "View All" button |
| `{rounded.md}` | 8px | Browse class cards, stat tiles; the top corners of homepage card images (`8px 8px 0px 0px`) |
| `{rounded.tab}` | 100px | Course-explorer tab pills on the homepage (15 occurrences) |
| `{rounded.pill}` | 9999px | Topic tags and "New" badges on browse cards (26 occurrences) |
| `{rounded.circle}` | 50% | Avatars, check-circle icons |

Homepage course cards use an asymmetric `4px 8px 8px` radius (top-left 4px, the others 8px). Reproduce it literally on that card if fidelity matters.

### Photography Geometry
Category tiles are square-cornered and full-bleed. Card thumbnails are about 16:9 with rounded top corners only. Thumbnails carry a "Staff Pick." overlay in white bold type at the top-left.

## Components

### Buttons
- **Primary** (`button-primary`): `{colors.primary}` fill with a 1px `#55da9b` border, black `{colors.on-primary}` label in `{typography.button-lg}` (18px / 700 / 39px), `{rounded.sm}` 4px corners, `0px 20px` padding and 40px height. On hover (`button-primary-hover`) the fill and border both change to `#50cf93` and the label becomes `#0b1215`. Box-shadow stays `none`.
- **Primary, mobile** (`button-primary-mobile`): at 390px the same button shrinks to 13px / 700, `0px 10px` padding and 32px height.
- **Secondary / outlined** (`button-secondary`): `{colors.surface}` fill, 1px `#394649` border, `#0b1215` label in `{typography.button-md}` (16px / 700 / 24px), `5px 15px` padding, 40px height, 320px wide in the sign-up module, each with a brand glyph (Google, Facebook, Apple) at left. On hover the background becomes `rgba(11, 18, 21, 0.04)` and the border stays the same.
- **Text link** (`link-violet`): "Continue with email" in `#5620c1`, 16px / 700. On hover it gains an underline and a faint `rgba(85, 218, 155, 0.04)` wash.

### Cards & Containers
- **Class card** (`card-class`): white, `{rounded.md}`, no padding on the shell. The image comes first, then a 12px-padded body with teacher name and rating, a bold title (`#002333` on home, `#0b1215` on browse), topic tags, and a metadata row (level, students, duration, bookmark icon) in `#394649`. Shadow: `rgba(179, 183, 183, 0.5) 0px 2px 4px 0px`.
- **Stat tile** (`card-stat`): `#232424` on black, `{rounded.md}`, centered number in `{typography.stat-number}` over an uppercase `{typography.stat-label}`.

### Inputs & Forms
- **Search** (`text-input-search`): 40px tall, 500px wide in the header, 1px `#dcdee1` border, `{rounded.sm}`, `0px 38px` padding to leave room for the leading magnifier icon. The placeholder reads "Search classes, digital products, teachers, and more". On the dark browse header the input text is white.
- No other form fields appear on the measured pages. The checkout page returned HTTP 403 to the extractor.

### Navigation
- **Light header** (`nav-header-light`, homepage): white bar, `{typography.nav-link}` (15px / 700) black links "Browse" and "Sign In" with `0px 10px` padding, and the green "Sign Up" at right.
- **Dark header** (`nav-header-dark`, browse): `#0b1215` bar with white links. On hover, the "Browse" link and its border turn `{colors.primary}`.
- **Sidebar** (`nav-sidebar-link`, browse): 40px rows, `0px 0px 0px 16px` padding, 15px / 700 for the active "All Classes" and regular weight for the others. Hover adds a `#dcdee1` fill with `{rounded.sm}` corners.

### Pills, Tags, and Chips
- **Tab pill, active** (`tab-pill-active`): `#24c2f2` fill and border, black 16px / 700 label, `4px 16px` padding, 34px tall, 100px radius.
- **Tab pill, inactive** (`tab-pill-on-dark`): transparent fill, 1px white border, white label, same metrics. In the live computed styles, 15 of these pills carry white borders and text. The static capture rendered the same row with dark outlines on white, which suggests the section's theme varies between renders. Treat the measured white-outline version as the shipped style on a dark field.
- **Topic tag** (browse): fully rounded `{rounded.pill}` chips in light grey under each card title, with a "+N" overflow count. The "New" badge on thumbnails is a mint pill.

### Footer
`footer` on `#0b1215`: five columns (Company, Work With Us, Teach with Us, Shop, Mobile). Column headings use `{typography.heading-xs}` (18px / 700 / 27.9px) and links use `{typography.caption}` (14px / 400 / 15.96px), all white. App Store and Google Play badges sit in the Mobile column.

### Signature Components
- **Sign-up module**: an h3 with a green underline swash under "free days", three outlined social buttons, the violet email link, and an 11px fine-print paragraph with 700-weight inline legal links.
- **Value checklist on black**: 28px / 700 white statements, each led by a cyan check-circle.
- **Category image strip**: four full-bleed tiles with white labels top-left and a pause control on the video tile.

## Design System Architecture

**Skillshare publishes no public design system.** There is no documentation site, token package, Figma community kit or brand portal. The searches recorded in `SOURCES.json` (seven queries covering "design system", brand guidelines, press kit, GitHub and npm) turned up only third-party scrapes and unrelated projects that share the name. The only first-party-adjacent facts are the 2020 identity coverage in [Creative Review](https://www.creativereview.co.uk/skillshare-launches-new-identity/) (wordmark, "Explore your creativity", squiggles in "Wander Green", creative director Jeremy Perez-Cruz) and the typeface itself ([Grilli Type, GT Walsheim](https://www.grillitype.com/typeface/gt-walsheim)). Everything below describes the de-facto system visible in the shipped code.

- **Token architecture (de-facto):** the app chrome uses Tailwind with an `sk-` class prefix and semantic utility names. Examples read off live elements are `sk-text-heading-extraSmall` (footer h4, 18px / 700), `sk-text-text-small` (footer links, 14px), `sk-text-text-prim…` (header links) and arbitrary values such as `sk-mb-[23px]`. That points to a Tailwind config with semantic type ramps (`heading-*`, `text-*`) and color roles (`text-primary`). The live `:root` exposes only Tailwind's ring and shadow plumbing (`--tw-ring-color: rgba(59,130,246,.5)`, `--tw-ring-offset-color: #fff`), so the color tokens are compiled into classes rather than shipped as CSS custom properties. The CSS also references `var(--dg-primary-font)` and `var(--dg-secondary-font)`, a second font-variable namespace whose source is not public.
- **Two rendering layers:** marketing sections are Builder.io blocks (`builder-block`, `builder-text` classes with Emotion `css-*` hashes). That is why the homepage uses the shorter `"GT Walsheim Pro", sans-serif` stack, while the header, sign-up module and browse page use the system-font stack. The bundled CSS also carries the complete Material UI shadow ramp, which indicates MUI components in the product.
- **Theming:** no dark mode or theme switch was observed. "Dark" exists only as section-level color blocking (`#000000` bands, `#0b1215` header and footer on browse).
- **Type & spacing:** one family. The size steps measured are 11 / 12 / 13 / 14 / 15 / 16 / 18 / 22 / 26 / 28 / 32 / 36 / 38.4 / 46px, and spacing follows the 4px rhythm documented in Layout. No modular ratio is published.
- **Component model:** what is observable is a primary/secondary button pair at 40px height, a 32px mobile button, tab pills, topic tags, class cards and stat tiles. No official inventory, variants or state matrix is published.
- **Accessibility:** no published rules. Measured facts: the black label on `#55da9b` keeps the primary action high-contrast. Hover states are color-only (fill darkening, underline on the violet link). The `--tw-ring-color` variable implies Tailwind focus rings are available.
- **Delivery:** no npm package, Figma kit or versioning is public.

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#55da9b` with a **black** label for the single most important action, and darken it to `#50cf93` on hover.
- Set everything in GT Walsheim Pro: 700 for headlines, buttons, tabs and links, 400 for paragraphs.
- Keep display line-height at the measured 57.96px for 46px headlines. Stacked two- and three-line headlines are the signature.
- Alternate white sections with full-bleed `#000000` bands and edge-to-edge imagery.
- Use 4px corners on buttons and inputs, 8px on cards, and full rounding on tabs and tags.
- Use outlined `#394649`-bordered white buttons for secondary actions like social sign-in.
- Let class thumbnails carry the color. The UI around them stays black, white and grey.

### Don't
- Don't put white text on the mint button. The measured label is `#000000` / `#0b1215`.
- Don't introduce a second filled button color. Violet `#5620c1` is a text-link color, and cyan `#24c2f2` marks the active tab only.
- Don't add drop shadows to buttons or black bands. Shadows exist only on cards (`0 2px 4px`).
- Don't track out headlines. Letter-spacing is `normal` on every measured role.
- Don't round the category image strip. It is square-cornered and full-bleed.
- Don't use the MUI elevation ramp found in the CSS for marketing surfaces. It never rendered there.

## Responsive Behavior

### Breakpoints
Measured at 1280px (desktop) and 390px (mobile). Intermediate breakpoints are not published and were not measured.

| Role | Desktop 1280px | Mobile 390px |
|---|---|---|
| Home h1 | 46px / 700 / 57.96px | 32px / 700 / 40.32px |
| Home h2 (category label) | 28px / 700 / 40.04px | 28px / 700 / 40.04px |
| Browse h1 | 36px / 700 / 45px | 36px / 700 / 45px |
| Body | 16px / 400 / 22px | 16px / 400 / 22px |
| Primary button | 18px, `0px 20px`, 40px tall | 13px, `0px 10px`, 32px tall |

The mobile homepage frequency table also shows a 42px size (103 weighted chars); its role was not isolated.

### Touch Targets
The main desktop controls are 40px tall (primary, secondary, search, sidebar rows). On mobile the header "Sign Up" shrinks to 32px tall, so give it surrounding spacing.

### Collapsing Strategy
- The h1 drops from 46px to 32px, while body and section h2 sizes stay fixed.
- The header compresses to wordmark plus a small "Sign Up" button.
- The card grid steps down from four columns (home) or three (browse) toward a single column. The 272px card width suggests fixed-width cards.

### Image Behavior
Category tiles and class thumbnails keep their crop and scale with the column. The squiggle art is decorative and should not push content.

## Iteration Guide

1. Start the hero and cards on `{colors.surface}` with `{colors.ink-inverse}` (`#000000`) text, and the black `{colors.canvas}` bands with `{colors.ink}` (`#ffffff`) text, both in GT Walsheim Pro (`{typography.body}`, 16px / 22px).
2. Build the hero headline with `{typography.display-xl}` (46px / 700 / 57.96px), and switch to `{typography.display-xl-mobile}` at phone widths.
3. Place exactly one `button-primary` per view: `#55da9b`, black label, 4px radius, `0px 20px` padding, 40px tall.
4. Use `button-secondary` (white, `#394649` border) for alternatives and `link-violet` for tertiary text actions.
5. Break long pages with full-bleed `{colors.surface-inverse}` bands holding white `{typography.display-xl}` or `{typography.heading-lg}` statements.
6. Present classes in `card-class` (8px radius, 0 2px 4px grey shadow) with `#394649` metadata and pill topic tags.
7. Use `tab-pill-active` (`#24c2f2`, 100px radius) for the selected filter, and outlined pills for the rest.
8. Close with the `#0b1215` `footer` and its 18px / 700 headings over 14px / 400 links.
9. Before shipping, compare against `web/data/extracted/skillshare.json`. Every color, size and radius above appears in that extraction or in `skillshare--browse.json`.
