---
version: alpha
name: Are.na
category: "Agencies & Studios"
description: "Are.na's homepage is a quiet, document-like page: #ffffff canvas, #333333 ink, a single 568px text column set in Areal (Dinamo's custom Arial revival, served as areal, \"areal Fallback\", Arial) at 19.2px/400, and one deep navy #00075f used for the Sign up button and the footer. Buttons are 34px tall with a 3px radius and 700-weight 14.4px labels; surfaces are #f7f7f7 greys with #ededed hairlines and a soft 0 0 34px shadow."

colors:
  primary: "#00075f"
  primary-hover: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#333333"
  foreground: "#000000"
  slate: "#696969"
  gray4: "#999999"
  gray3: "#dedede"
  gray2: "#ededed"
  gray1: "#f7f7f7"
  background-light: "#f7f7f799"
  focus: "#3d46c2"
  brand-light: "#ebecf7"
  channel-public-1: "#f4f8f3"
  channel-public-2: "#b4d6b3"
  channel-public-3: "#238020"
  channel-private-1: "#faf4f3"
  channel-private-2: "#dfbebe"
  channel-private-3: "#b93d3d"
  alert: "#e15100"
  notification: "#a87253"

typography:
  page-title:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: normal
  page-title-mobile:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 35px
    letterSpacing: normal
  breadcrumb:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 35px
    letterSpacing: normal
  heading-lg:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 19.2px
    fontWeight: 400
    lineHeight: 27.84px
    letterSpacing: normal
  heading-lg-bold:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 19.2px
    fontWeight: 700
    lineHeight: 27.84px
    letterSpacing: normal
  heading-tab:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 19.2px
    fontWeight: 400
    lineHeight: 23.04px
    letterSpacing: normal
  base:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: normal
  input:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23.2px
    letterSpacing: normal
  link-bold:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 23.2px
    letterSpacing: normal
  body:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 20.88px
    letterSpacing: normal
  body-mobile:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 12.5px
    fontWeight: 400
    lineHeight: 16.875px
    letterSpacing: normal
  button:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 14.4px
    fontWeight: 700
    lineHeight: 1
    letterSpacing: normal
  button-sm:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 12.5px
    fontWeight: 700
    lineHeight: 1
    letterSpacing: normal
  small:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 12.5px
    fontWeight: 400
    lineHeight: 1.35
    letterSpacing: normal
  micro:
    fontFamily: "areal, \"areal Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 10px
    fontWeight: 600
    lineHeight: 1
    letterSpacing: normal

rounded:
  none: 0px
  radii-1: 3px
  panel: 10px
  device: 18px
  round: 50%
  pill: 9999px

spacing:
  nudge: 2px
  space-1: 5px
  space-2: 10px
  space-3: 15px
  space-4: 20px
  space-5: 25px
  space-6: 35px
  space-7: 45px
  space-8: 65px
  space-9: 80px
  space-10: 100px
  space-11: 130px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.radii-1}"
    padding: 0px 15px
    height: 34px
    border: 1px solid transparent
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.radii-1}"
    padding: 0px 15px
    height: 34px
    border: "1px solid {colors.foreground}"
  button-primary-active:
    backgroundColor: "{colors.focus}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.radii-1}"
    padding: 0px 15px
    height: 34px
    border: "1px solid {colors.primary}"
  button-primary-disabled:
    backgroundColor: "{colors.brand-light}"
    textColor: "{colors.gray4}"
    typography: "{typography.button}"
    rounded: "{rounded.radii-1}"
    padding: 0px 15px
    height: 34px
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.radii-1}"
    padding: 0px 20px
    height: 47px
  button-secondary:
    backgroundColor: "{colors.gray1}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.radii-1}"
    padding: 0px 15px
    height: 34px
    border: 1px solid transparent
  button-secondary-hover:
    backgroundColor: "{colors.gray1}"
    textColor: "{colors.foreground}"
    typography: "{typography.button}"
    rounded: "{rounded.radii-1}"
    padding: 0px 15px
    height: 34px
    border: "1px solid {colors.gray3}"
  button-outlined:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.radii-1}"
    padding: 0px 15px
    height: 34px
    border: "1px solid {colors.gray3}"
  nav-button:
    backgroundColor: "{colors.gray1}"
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.radii-1}"
    padding: 0px 10px
    height: 24px
  link:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.base}"
    rounded: "{rounded.none}"
    padding: 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.foreground}"
    typography: "{typography.base}"
    rounded: "{rounded.none}"
    height: 55px
    padding: 0px
  text-input:
    backgroundColor: "{colors.gray1}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.radii-1}"
    padding: 0px 10px
    height: 40px
    border: 1px solid transparent
  search-input-hero:
    backgroundColor: "{colors.background-light}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-lg}"
    rounded: "{rounded.radii-1}"
    padding: 0px 20px 0px 45px
    height: 54px
    border: "1px solid {colors.gray3}"
    shadow: 0 0 34px 0 rgba(0, 0, 0, 0.05)
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 10px
    border: "1px solid {colors.gray2}"
  card-channel:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.small}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.gray3}"
  card-channel-public:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.channel-public-3}"
    typography: "{typography.small}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.channel-public-2}"
  nav-search:
    backgroundColor: "transparent"
    textColor: "{colors.slate}"
    typography: "{typography.base}"
    rounded: "{rounded.radii-1}"
  nav-search-hover:
    backgroundColor: "{colors.gray1}"
    textColor: "{colors.ink}"
    typography: "{typography.base}"
    rounded: "{rounded.radii-1}"
    border: "1px solid {colors.gray2}"
  product-panel:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.small}"
    rounded: "{rounded.panel}"
    padding: 0px
    border: "1px solid {colors.gray2}"
    shadow: 0 0 34px 0 rgba(0, 0, 0, 0.05)
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.base}"
    rounded: "{rounded.none}"
    padding: 65px
---

## Overview

Are.na's logged-out homepage reads less like a SaaS landing page and more like a well-set text file. A white `{colors.canvas}` (`#ffffff`) page carries a single left-weighted column of type, 568px wide, beginning about 356px from the left edge at 1280px. There is no hero image, no headline in the conventional sense: the `h1` is the phrase "Are.na is" at the same 19.2px / weight 400 as the paragraphs around it, followed by a lettered list ("a. Online software for saving and organizing the content that is important to you / b. A toolkit for assembling new worlds from the scraps of the old / c. +"). The page's typographic hierarchy is almost flat: 19.2px is the dominant size by character count, and emphasis is achieved with weight 700 (section titles, the "15 years and 59 days" counter) rather than size.

Everything is set in **Areal**, the custom typeface Dinamo drew for Are.na as a "revival" of Arial (Johannes Breyer and Fabiola Mejía, based on screenshots of Arial 2.82 from Windows 2000). It is served as `areal, "areal Fallback", Arial, Helvetica, sans-serif`, so the system's honest fallback is literally the typeface it was revived from.

Colour is spent once. A deep navy `{colors.primary}` (`#00075f`, the site's `--colors-brandDark` / `--colors-blue3`) fills the "Sign up" button and the entire footer. Everything else is a ladder of neutral greys — `#333333` text, `#696969` secondary, `#999999` tertiary, `#dedede` / `#ededed` hairlines, `#f7f7f7` fills — exactly as named in the site's own `--colors-gray0` … `--colors-gray7` tokens. A second set of tokens (green / red / grey triplets) encodes Are.na's channel privacy states: public, private, closed.

**Key Characteristics:**
- One narrow text column, left-weighted; content reads top-to-bottom like an essay.
- Areal throughout; 19.2px / 400 for heading-and-body alike, 700 for emphasis.
- `#00075f` navy is the only chromatic brand colour — the primary button and the footer.
- 3px radius (`--radii-1`) on every button and input; 34px button height; 700-weight 14.4px labels.
- Greys on greys: `#f7f7f7` fills, `#ededed` hairlines, `#dedede` borders; no saturated decoration.
- Product shown as a faithful, light, softly shadowed UI screenshot rather than illustration.
- Very large vertical gaps (130px) separated by full-width hairlines between sections.

### Art Direction (from the 1280px capture)
- **Logo**: a small two-asterisk mark ([U+2731 U+2731]) above "Are.na is" — no wordmark in a header bar.
- **Header**: there is no visible nav bar; only a tiny "Log in" grey button sits at the top-right corner.
- **Product imagery**: a desktop Are.na channel ("Are.na / Pierre Marteau / Commonplace") rendered at reduced scale inside a white panel with a hairline border and a soft ambient shadow; a phone mockup (on-screen keyboard, "Type text or paste content") overlaps its left edge. Content inside the screenshot is archival and bookish — black-and-white photographs, quotations from Yasunao Tone, scanned PDF pages.
- **Feature list**: to the right of the screenshot, a vertical tab list — "Capture", "Arrange", "Search", "Connect", "Network" — the active item in black with a short description in 12.5px beneath and a 2px vertical rule at its left, inactive items in grey `#999999`.
- **Block grid**: lower on the page a large rounded panel shows Are.na "blocks" side by side: a grayscale image, a text block quoting Rosalind Krauss with a "Work cited" list fading to grey, and a PDF thumbnail with a small "PDF" label and filename ("63157430.pdf").
- **Motion cues**: the "c. +" list item and the live day counter suggest small interactive moments; nothing on the page animates decoratively.

### Voice & Microcopy
- Declarative, unhurried, slightly literary: "A toolkit for assembling new worlds from the scraps of the old".
- Values stated plainly as headings: "No ads, no personalized recommendations".
- Paragraph copy argues rather than sells ("The result is a kind of texture of a network that is both difficult to replicate and rewarding to traverse.").
- Buttons are two words or fewer: "Sign up", "Download the app", "Log in", "View API documentation".

## Colors

> **Source:** live homepage `https://www.are.na/` measured at 1280px and 390px (computed styles, hover states, frequency tables) and the site's own `:root` custom properties (`--colors-*`, `--space-*`, `--radii-*`, `--fontSizes-*`). Token names below follow the site's names.

### Brand & Accent
- **Primary / Brand Dark** (`{colors.primary}` — `#00075f`): "Sign up" button fill and the footer background (`--colors-brandDark`, `--colors-blue3`).
- **Primary Hover** (`{colors.primary-hover}` — `#000000`): measured hover state of the primary button — background and border both go to pure black.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): button label and footer text on navy.
- **Focus** (`{colors.focus}` — `#3d46c2`): focus ring colour (`--colors-focus`, `--colors-blue2`), applied as `0 0 0 2px` in the CSS.
- **Brand Light** (`{colors.brand-light}` — `#ebecf7`): pale navy tint (`--colors-brandLight`, `--colors-blue1`) for selected/subdued brand surfaces.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background (`--colors-background`, `--colors-gray0`).
- **Gray 1** (`{colors.gray1}` — `#f7f7f7`): secondary button and "Log in" fill; the largest background by measured area (panels and mockups).
- **Background Light** (`{colors.background-light}` — `#f7f7f799`): translucent `#f7f7f7` at 60% — the search input fill (`--colors-backgroundLight`).
- **Gray 2** (`{colors.gray2}` — `#ededed`): the dominant border colour — card and panel hairlines, section dividers.
- **Gray 3** (`{colors.gray3}` — `#dedede`): stronger border — outlined button, input, secondary-button hover border.

### Text
- **Ink** (`{colors.ink}` — `#333333`): body text, headings, links (`--colors-gray6`, `--colors-link`). Most-used text colour by far.
- **Foreground** (`{colors.foreground}` — `#000000`): active tab label, hover text, `h3` labels (`--colors-foreground`, `--colors-gray7`).
- **Slate** (`{colors.slate}` — `#696969`): secondary text, footer sub-links (`--colors-slate`, `--colors-gray5`).
- **Gray 4** (`{colors.gray4}` — `#999999`): tertiary text — inactive feature tabs, footer meta.

### Channel States (Semantic)
Are.na colours channels by privacy; the triplets (light fill / mid border / strong text) come from the site's tokens:
- **Public**: `{colors.channel-public-1}` `#f4f8f3`, `{colors.channel-public-2}` `#b4d6b3`, `{colors.channel-public-3}` `#238020` (green).
- **Private**: `{colors.channel-private-1}` `#faf4f3`, `{colors.channel-private-2}` `#dfbebe`, `{colors.channel-private-3}` `#b93d3d` (red).
- **Closed**: `#f7f7f7`, `#dedede`, `#333333` (the neutral greys above).
- **Alert** (`{colors.alert}` — `#e15100`) and **Notification** (`{colors.notification}` — `#a87253`) are declared tokens for system messages; neither is visible on the logged-out homepage.

## Typography

### Font Family

**Areal** — a custom typeface by Dinamo (ABC Dinamo) for Are.na, a redrawn, variable "revival" of Arial based on the 1996 Arial 2.82. It includes proportional, mono and semi-mono versions and a dark-mode axis that adjusts weight slightly for light-on-dark text. The site loads it as `@font-face { font-family: "areal" }` with a metric-matched `"areal Fallback"` face, then Arial and Helvetica.

The site's `--fonts-sans` and `--fonts-mono` both begin with `'areal'` (mono falls through to SFMono-Regular, Menlo …), and `--fonts-serif` is `Times New Roman, Times, serif`, not used on the homepage.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.page-title}` | 32px | 400 | 40px | normal | Article/page `h1` on Are.na Editorial (`#000000`) |
| `{typography.page-title-mobile}` | 28px | 400 | 35px | normal | Same `h1` at 390px |
| `{typography.breadcrumb}` | 28px | 700 | 35px | normal | "Are.na / Explore" breadcrumb title on app pages |
| `{typography.input}` | 16px | 400 | 23.2px | normal | Sign-up form fields |
| `{typography.link-bold}` | 16px | 700 | 23.2px | normal | Bold inline links in editorial articles |
| `{typography.heading-lg}` | 19.2px | 400 | 27.84px | normal | `h1` "Are.na is", lead paragraphs, list items, search input |
| `{typography.heading-lg-bold}` | 19.2px | 700 | 27.84px | normal | Section titles ("How it works", "No ads, no personalized recommendations"), inline emphasis |
| `{typography.heading-tab}` | 19.2px | 400 | 23.04px | normal | Feature tab labels ("Capture", "Arrange" …) |
| `{typography.base}` | 16px | 400 | 16px | normal | Root size, nav, footer |
| `{typography.body}` | 14.4px | 400 | 20.88px | normal | Block text, product copy |
| `{typography.button}` | 14.4px | 700 | 1 | normal | Button labels |
| `{typography.small}` | 12.5px | 400 | 1.35 | normal | Tab descriptions, captions, filenames |
| `{typography.button-sm}` | 12.5px | 700 | 1 | normal | "Log in" nav button |
| `{typography.body-mobile}` | 12.5px | 400 | 16.875px | normal | Block text at 390px |
| `{typography.micro}` | 10px | 600 | 1 | normal | Tiny labels (e.g. "PDF") |

The sizes map to the site's rem scale: `--fontSizes-1` 0.78125rem (12.5px), `--fontSizes-2` 0.9rem (14.4px), `--fontSizes-3` 1rem (16px), `--fontSizes-4` 1.2rem (19.2px). Larger steps exist in the token set (`--fontSizes-5` 1.5rem through `--fontSizes-9` 3rem). The marketing homepage never goes above 19.2px; app and editorial pages use 24px (channel titles in blocks), 28px (breadcrumb, mobile article title) and 32px (article title). Measured pages: `/sign_up`, `/explore`, `/editorial/introducing-areal-are-nas-new-typeface`.

The 10px size and the 600 weight were each measured on the same 36 characters; they are recorded together as `micro`.

### Principles
- **No display type.** The biggest text on the homepage is 19.2px; the largest anywhere measured is the 32px article title. Do not introduce a hero headline.
- **Weight, not size, for hierarchy.** Section titles are 19.2px at 700; everything else at 19.2px is 400.
- **Generous leading.** 1.45 on 19.2px (27.84px) and 14.4px (20.88px) — airy, book-like.
- **No tracking adjustments.** Letter-spacing is `normal` everywhere.
- **Ink is `#333333`, not black.** Pure black is reserved for active / hover states.

### Note on Font Substitutes
Areal is proprietary to Are.na (made by Dinamo). The site's own fallback chain is the correct substitute: **Arial**, then Helvetica. Because Areal is a cleaned-up Arial, Arial at the same sizes, weights and line-heights reproduces the page closely; Areal's differences (more even stems, refined details) are subtle at 12.5–19.2px. Do not substitute Inter or Helvetica Neue as the first choice — they change the texture away from Arial's.

## Layout

### Spacing System
- **Tokens (site's own `--space-*`)**: `{spacing.nudge}` 2px · `{spacing.space-1}` 5px · `{spacing.space-2}` 10px · `{spacing.space-3}` 15px · `{spacing.space-4}` 20px · `{spacing.space-5}` 25px · `{spacing.space-6}` 35px · `{spacing.space-7}` 45px · `{spacing.space-8}` 65px · `{spacing.space-9}` 80px · `{spacing.space-10}` 100px · `{spacing.space-11}` 130px.
- The scale is built on 5px, not 4 or 8. Measured gaps: 5px (most frequent), 15px, 10px, 25px, 35px, 20px, 130px. Measured paddings: 10px, 2.5px, 6px, 5px, 7.5px, 65px, 15px.
- **Button padding**: 0 15px (0 10px for the small "Log in" button; 0 20px on mobile).
- **Footer padding**: 65px on all sides.

### Grid & Container
- Text column: 568px wide (measured `h1`/`h2` width), offset ~356px from the left at 1280px — not centred; the right side is left open.
- "How it works" breaks out of the column: the product screenshot spans roughly 820px wide starting near the left edge of the content area, with the feature tab list in a narrow column to its right, and a phone mockup overlapping the screenshot's lower-left.
- The block-grid panel spans ~1035px, centred, holding three blocks with large internal margins.

### Whitespace Philosophy
Section breaks are huge: ~130px of white (`--space-11`), a full-width hairline (`#ededed`) inset from the page edges, then another large gap. Within a section the rhythm is tight and paragraph-based (≈25px between paragraphs at 19.2px). The page feels like a long letter with chapter breaks.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Page, text column, buttons |
| 1 | `0 0 34px 0 rgba(0, 0, 0, 0.05)` (`color-mix(in srgb, var(--colors-foreground) 5%, transparent)`) | Search input, product screenshot panel, phone mockup |
| 2 | `0 0 20px 0 rgba(0, 0, 0, 0.08)` (`--shadows-1`) | Declared token for floating UI; not seen on the homepage |
| Focus | `0 0 0 2px #3d46c2` | Keyboard focus ring |
| Hairline | `0 0 0 1px #ededed` / `inset 1px 0 0 #ededed` | Shadow-based borders in the CSS |

Shadows are always ambient (0 offset, large blur, very low opacity) — a glow rather than a drop.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Blocks, images, text column |
| `{rounded.radii-1}` | 3px | Every button and input (`--radii-1`) — by far the most-used radius |
| `{rounded.panel}` | 10px | Large panels (product screenshot, block-grid panel) |
| `{rounded.device}` | 18px | Device-frame corners |
| `{rounded.round}` | 50% | Avatars and circular controls (`--radii-round`) |
| `{rounded.pill}` | 9999px | Declared `--radii-pill`; not seen on the homepage |

The phone mockup itself uses an elliptical `14% / 6.46%` radius; it is an illustration frame, not a reusable card shape.

### Photography Geometry
Images inside blocks are square-cornered and grayscale or archival. Are.na's content blocks are always rectangles; only chrome (buttons, panels) is rounded.

## Components

### Buttons

**`button-primary`** — "Sign up".
- Background `{colors.primary}` `#00075f`, text `{colors.on-primary}`, type `{typography.button}` (14.4px / 700), padding 0 15px, height 34px, radius `{rounded.radii-1}` 3px, 1px transparent border.
- **Hover** (`button-primary-hover`, measured): background `#000000`, border `#000000`, text stays `#ffffff`.
- **Mobile** (`button-primary-mobile`, measured at 390px): full column width (360px), height 47px, padding 0 20px.

**`button-secondary`** — "Download the app".
- Background `{colors.gray1}` `#f7f7f7`, text `{colors.ink}` `#333333`, same geometry as primary.
- **Hover** (`button-secondary-hover`, measured): text `#000000`, border `#dedede`, background unchanged.

**`button-outlined`** — "View API documentation".
- Transparent background, 1px `{colors.gray3}` `#dedede` border, text `{colors.ink}`, `{typography.button}`, 34px tall, 3px radius.

**`nav-button`** — "Log in" (top-right).
- Background `{colors.gray1}`, text `{colors.ink}`, `{typography.button-sm}` (12.5px / 700), padding 0 10px, height 24px, radius 3px.

Primary and secondary sit side by side with a 10px gap, left-aligned under the paragraph.

### Cards & Containers

**`card`** — Are.na block (measured on `/explore`; borders `#dedede`, `#ededed`, `#b4d6b3` all present on that page).
- Text block: background `{colors.canvas}`, 1px `{colors.gray2}` `#ededed` border, square corners, 10px inner padding, `{typography.body}` (14.4px) text top-left. Square, ~276px at 1280px in a four-column grid.
- Image block: no frame — the image is centred inside the square cell at its own aspect ratio; the filename or title sits centred below in `{typography.small}` `{colors.slate}` `#696969`, truncated with an ellipsis.

**`card-channel`** — a channel shown as a block.
- 1px `{colors.gray3}` `#dedede` border, white, square. Centred: channel title at 24px (measured size) in `#333333`, then "by **Name**" (700), "N blocks", and "less than a minute ago" in `{typography.small}`.

**`card-channel-public`** — public channel variant: border `{colors.channel-public-2}` `#b4d6b3`, all text `{colors.channel-public-3}` `#238020`. Private channels use the red triplet the same way (tokens only; not seen on `/explore`).

**`product-panel`** — framed screenshot of the app.
- Background `{colors.canvas}`, 1px `{colors.gray2}` border, radius `{rounded.panel}` 10px, Level 1 ambient shadow.

### Inputs & Forms

**`text-input`** — form field (measured on `/sign_up`).
- Background `{colors.gray1}` `#f7f7f7`, text `{colors.ink}`, `{typography.input}` (16px / 23.2px), padding 0 10px, height 40px, radius 3px, 1px transparent border, full form width (373px). The sign-up button below it is the same width with 0 20px padding and 34px height.

**`search-input-hero`** — homepage search field.
- Background `{colors.background-light}` `#f7f7f799`, text `{colors.ink}`, `{typography.heading-lg}` (19.2px / 27.84px), height 54px, padding 0 20px 0 45px (left slot for the search icon), 1px `{colors.gray3}` border, radius 3px, shadow `0 0 34px 0 rgba(0, 0, 0, 0.05)`.
- Focus: `0 0 0 2px {colors.focus}` ring (from the CSS).

### Navigation

**`nav`** — 55px top strip on `{colors.canvas}`. On the logged-out homepage it only holds the `nav-button` "Log in" at the far right. On app/editorial pages (measured) it holds the [U+2731 U+2731] mark, `nav-search` "Search Are.na" in `{colors.slate}` 16px, and at the right "Log in" (`nav-button`) beside a navy "Sign up" at the same 24px height.
- **`nav-search` hover** (measured): text `#696969` → `#333333`, background becomes `#f7f7f7`, a 1px `#ededed` border appears, and a "/" keyboard-shortcut hint is revealed.
- **Breadcrumb hover** (measured): "Are.na" in the "Are.na / Explore" title goes `#696969` → `#000000`.
- At 390px the extractor's mobile "nav" was the footer link list ("Discover", "Explore", "Search", "Are.na Editorial", "Community Projects") in white.

**`link`** — `{colors.ink}` `#333333` (`--colors-link`), no colour change from body text; links are distinguished by context and weight rather than hue.

**Feature tabs** — vertical list of 19.2px labels; active label `#000000` with a 12.5px description and a 2px black vertical rule on a 1px grey track; inactive labels `#999999`.

### Footer

**`footer`** — background `{colors.primary}` `#00075f`, text `{colors.on-primary}`, `{typography.base}`, padding 65px. Opens with "A platform for connecting ideas and building knowledge."; secondary links in `#999999` and `#696969`.

## Design System Architecture

Are.na publishes **no public design-system documentation site, token package or component library**. Searches for an Are.na design system, brand guidelines/press kit and token packages turned up nothing official (see `SOURCES.json`); the only published system artefacts are the Areal typeface ([editorial announcement](https://www.are.na/editorial/introducing-areal-are-nas-new-typeface), [Dinamo](https://abcdinamo.com/newsletter/the-dinamo-update-areal-custom-typeface-arena)) and an icon package ([`@aredotna/icons`](https://github.com/aredotna/icons)). Everything below is therefore the **de-facto system read from the CSS the site ships** — the inline `<style id="stitches">` block served with [are.na/explore](https://www.are.na/explore) (fetched 2026-10-07) and the `:root` variables captured by the extractor — plus the public docs of the CSS-in-JS library it is built on.

### Token architecture
- **Engine**: the class names (`c-bUIkFP`, `c-bUIkFP-dEIUR-variant-primary`, `t-eceoMW`) and the `<style id="stitches">` tag identify [Stitches](https://stitches.dev/docs/tokens); Are.na also maintains a fork of it ([aredotna/stitches](https://github.com/aredotna/stitches), forked from `stitchesjs/stitches`). The page is a Next.js app (`__NEXT_DATA__` in the HTML).
- **Naming convention**: Stitches emits every theme token as `--{scale}-{token}` ([Stitches theming docs](https://stitches.dev/docs/theming): `theme.colors.primary` → `var(--colors-primary)`). Are.na's scales are `colors`, `fonts`, `fontSizes`, `space`, `sizes`, `radii`, `shadows`, `blurs`.
- **Two tiers** (no component tier):
  1. *Primitive* ramps — `--colors-gray0` … `--colors-gray7`, and three-step hue ramps `--colors-red1/2/3`, `--colors-green1/2/3`, `--colors-blue1/2/3`, plus alpha tokens `--colors-foregroundShadow`, `--colors-foregroundLight`, `--colors-backgroundLight`, `--colors-backgroundHeavy`.
  2. *Semantic aliases* that point at primitives with `var()`, verbatim from the light theme: `--colors-background:var(--colors-gray0)`, `--colors-foreground:var(--colors-gray7)`, `--colors-link:var(--colors-gray6)`, `--colors-slate:var(--colors-gray5)`, `--colors-focus:var(--colors-blue2)`, `--colors-brandLight:var(--colors-blue1)`, `--colors-brandDark:var(--colors-blue3)`, `--colors-channelPublic1..3 → green1..3`, `--colors-channelPrivate1..3 → red1..3`, `--colors-channelClosed1/2/3 → gray1/gray3/gray6`.
- Components reference tokens, not hexes: the button base rule is `border-radius:var(--radii-1)`, `background-color:var(--colors-gray1)`, `color:var(--colors-link)`, `gap:var(--space-1)`.
- Two non-colour values live in the `colors` scale so that they flip with the theme: `--colors-blend` (`multiply` in light, `screen` in dark) and `--colors-darkModeSetting` (`"DRKM" 0` / `"DRKM" 1`), the latter applied as `font-variation-settings` on `body`.

### Theming
- **Four themes**, each a Stitches `createTheme` class that redefines only the primitives: `light` → `t-eceoMW` (also `:root`), `dark` → `t-fCSbPT`, `dawn` → `t-jffJHW`, `dusk` → `t-kEIvFZ` (mapping read from the inline theme script on [are.na/explore](https://www.are.na/explore)).
- **Switching**: an inline script (the `next-themes` pattern) sets the theme class on `<html>` from `localStorage` key `theme`, default `"system"`, resolving `system` with `matchMedia("(prefers-color-scheme: dark)")`, and sets `color-scheme` for light/dark.
- **What changes per theme** (from the served CSS): dark sets `--colors-gray0:#000` … `--colors-gray7:#FFF`, `--colors-blue2:#5E6DEE`, `--colors-alert:#FF7A30`; dawn is a warm paper palette (`--colors-gray0:#F5F1F0`, `--colors-gray7:#342C2A`); dusk a violet night palette (`--colors-gray0:#16171E`, `--colors-gray7:#E7DBF0`). Because semantic aliases resolve through `var()`, components need no per-theme code.
- **Type follows the theme**: dark and dusk set `"DRKM" 1`, engaging Areal's dark-mode axis, which slightly adjusts weight so that, in Are.na's words, the font "performs a bit better" against a dark background ([Areal announcement](https://www.are.na/editorial/introducing-areal-are-nas-new-typeface); [specimen with the dark-mode control](https://are.al.are.na/)).
- No density or high-contrast mode is shipped.

### Type & spacing systems
- **Type scale** — nine rem steps: `--fontSizes-1` 0.78125rem (12.5px), `-2` 0.9rem (14.4px), `-3` 1rem (16px), `-4` 1.2rem (19.2px), `-5` 1.5rem, `-6` 1.75rem, `-7` 2rem, `-8` 2.5rem, `-9` 3rem. Not a modular ratio — hand-picked rem values anchored on a 16px root.
- **Fonts**: `--fonts-sans` and `--fonts-mono` both start with `'areal'` (Areal includes mono and semi-mono styles per the announcement); `--fonts-serif` is Times New Roman.
- **Spacing** — a 5px base: `--space-1` 5px through `--space-5` 25px in 5px steps, then 35, 45, 65, 80, 100, 130px, plus `--space-nudge` 2px. `--sizes-*` repeats the same ladder for widths/heights.
- **Radii**: `--radii-1` 3px, `--radii-round` 50%, `--radii-pill` 9999px. **Shadows**: `--shadows-1` `0px 0px 20px 0px var(--colors-foregroundShadow)`. **Blur**: `--blurs-1` `blur(15px)`.
- **Responsive rules** are `max-width` media queries at **900px** and **520px** in the served CSS; type tokens do not change at breakpoints, components change their size variants (below).

### Component model
- Components are Stitches `styled()` components with **variants**, visible as `-{variant}-{value}` class suffixes. Variant axes found in the served CSS: `size`, `variant`, `active`, `expanded`, `state`, `layout`, `direction`, `position`, `side`.
- **Button** (base class `c-bUIkFP`): `variant` = `primary` | `ghost` (default = grey); `size` = `sm` (24px, 0 10px, fontSizes-1) | `md` (34px, 0 15px, fontSizes-2) | `fill` (34px, 0 20px, 100% width) | `icon` (24×24). Below 520px `sm`/`md`/`icon` grow to 37px and `fill` to 47px — the mobile 47px primary button measured on the homepage.
- **Documented states** of the primary variant (served CSS): hover `background var(--colors-gray7)` + gray7 border (= the measured `#000000` hover); active `background var(--colors-blue2)` with `blue3` border; focus-visible `blue3` fill with a `blue2` border; disabled `background var(--colors-blue1)`, text `var(--colors-gray4)`. Default (grey) button: hover → gray7 text + gray3 border; active → gray7 border; disabled → gray4 text.
- Other variant sets present: a notice/banner (`variant` = `info` | `alert` | `loading`), avatar-like sizes `xs`…`3xl`, `small`/`medium` sizes on form controls, an `and`/`or` search-operator chip.
- There is **no published component inventory**; the only packaged, versioned UI asset is [`@aredotna/icons`](https://github.com/aredotna/icons) (SVG → React via SVGR; `ArenaLogo`, `Asterisk`, `Open`, `Closed`, `Private`, `Premium`, `Supporter`, `Team`, `Investor`).

### Accessibility rules (as shipped, not as documented)
- **Focus**: `box-shadow: 0 0 0 2px var(--colors-focus)` on inputs/controls and `outline: 1px solid var(--colors-focus)` elsewhere; buttons swap to a 1px focus-coloured border on `:focus-visible`.
- **Motion**: `@media (prefers-reduced-motion: reduce)` disables all transitions and animations (`transition:none !important; animation:none !important`), and an in-app override `html[data-reduced-motion="true"]` does the same.
- **Hover-only affordances** are gated with `@media (hover: hover) and (pointer: fine)`.
- **Touch targets**: button heights rise from 24/34px to 37/47px under 520px. No published contrast target exists; note that `#333333` on `#ffffff` and `#ffffff` on `#00075f` are both high-contrast pairs.

### Delivery
- No npm token or component package. Published: [`@aredotna/icons`](https://github.com/aredotna/icons) (MIT, React ≥16.2 peer, npm `latest` 0.2.0), the Areal typeface (Dinamo, licensed — not free), and the public API SDKs listed on the [aredotna GitHub org](https://github.com/aredotna). No Figma kit is published.

## Do's and Don'ts

### Do
- Keep the page a single narrow column of 19.2px Areal / Arial at 1.45 line-height.
- Use `#333333` for text and `#000000` only for active or hover states.
- Use navy `#00075f` for exactly one button per view and for the footer.
- Use 3px radius, 34px height and 700-weight 14.4px labels for every button.
- Build spacing from the 5px scale (5, 10, 15, 20, 25, 35, 45, 65, 80, 100, 130).
- Separate sections with ~130px of space and a full-width `#ededed` hairline.
- Show the real product as a lightly framed screenshot with a soft ambient shadow.

### Don't
- Don't add a large display headline; nothing on the marketing page exceeds 19.2px.
- Don't introduce gradients, illustrations or saturated accent colours.
- Don't use pill buttons or large radii on buttons.
- Don't use drop shadows with a Y offset — Are.na's shadows are centred glows.
- Don't colour links blue; they are `#333333`.
- Don't use channel green/red for decoration — they signal public/private state only.
- Don't tighten letter-spacing.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px (measured) | 568px text column offset left-of-centre; screenshot + tab list side by side |
| Mobile | 390px (measured) | Article `h1` 32px → 28px; column becomes 360px; headings stay 19.2px; block text drops 14.4px → 12.5px (16.875px line-height); primary button full width, 47px tall |

### Touch Targets
- The primary button grows from 34px to 47px tall on mobile and spans the full column (360px).

### Collapsing Strategy
- Heading and lead sizes do not scale down — 19.2px is already modest.
- Body/block text is the only size that steps down (14.4px → 12.5px).
- Article titles step down 32px → 28px (40px → 35px line-height).

### Image Behavior
Product screenshots scale proportionally; blocks keep their square-cornered rectangle shapes.

## Iteration Guide

1. Start with a white page and one 568px column of 19.2px / 400 `#333333` Areal (Arial fallback).
2. Reference tokens by name (`{colors.primary}`, `{typography.heading-lg}`, `{rounded.radii-1}`).
3. Express hierarchy with 700 weight, never with a bigger size.
4. Add exactly one navy `button-primary`; pair it with a grey `button-secondary`.
5. Use spacing values from the 5px `--space-*` scale only.
6. Frame product imagery in a 10px-radius panel with a `#ededed` hairline and a `0 0 34px` 5% glow.
7. Check hover states: navy → black for primary; grey text → black with a `#dedede` border for secondary.
