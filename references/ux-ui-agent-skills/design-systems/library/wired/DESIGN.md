---
version: alpha
name: WIRED
category: "Media & Consumer Tech"
description: "WIRED is a technology-news front page built from black, white and pale gray: WiredDisplay headlines at 64px with -0.5px tracking, Breve Text body at 16px, uppercase WIRED Mono labels, square-cornered black buttons (0px radius, #000000) and #f3f3f3 ad bands, with all color supplied by photography and illustration."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-gray: "#f3f3f3"
  ink-secondary: "#333333"
  ink-strong: "#1a1a1a"
  ink-muted: "#757575"
  link-blue: "#057dbc"
typography:
  display:
    fontFamily: WiredDisplay, helvetica, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 59.52px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: WiredDisplay, helvetica, sans-serif
    fontSize: 44px
    fontWeight: 400
    lineHeight: 40.92px
    letterSpacing: "-0.5px"
  heading:
    fontFamily: "\"WIRED Mono\", Monaco, \"Courier New\", Courier, \"monospace\""
    fontSize: 13px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  body:
    fontFamily: "\"Breve Text\", \"serif\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.1px
  button:
    fontFamily: "\"WIRED Mono\", Monaco, \"Courier New\", Courier, \"monospace\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.1px
    textTransform: uppercase
  nav:
    fontFamily: "\"WIRED Mono\", Monaco, \"Courier New\", Courier, \"monospace\""
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16px
    textTransform: uppercase
  ui:
    fontFamily: Apercu
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 32px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

WIRED's homepage is a newspaper front page rebuilt in black, white and a single pale gray. The capture shows a black promotional strip across the top ("THE WIRED APP IS HERE / DOWNLOAD NOW »"), a white navigation bar with the boxed WIRED wordmark on the left and all-caps mono section links, and then a three-column story grid: a stacked "TODAY'S PICKS" rail with small thumbnails on the left, one enormous centered headline with a deck and a wide photograph in the middle, and a "TRENDING STORIES" list on the right. Below that come a "REVIEWS" strip of four compact image-plus-text units, a gray advertising band, and a carousel of product images set on saturated purple, yellow and blue pattern backdrops.

The palette is deliberately almost absent. `{colors.canvas}` is white, `{colors.ink}` is pure black, and the supporting grays (`{colors.ink-secondary}` #333333, `{colors.ink-strong}` #1a1a1a, `{colors.ink-muted}` #757575, `{colors.surface-gray}` #f3f3f3) carry body copy, bylines and ad bands. The only chromatic UI color measured in text is a blue (`{colors.link-blue}`, #057dbc) that appears on the "SUBSCRIBE" link in the nav. All the color on the page comes from photography and illustration, which means the typography and the black rules are the brand.

**Key Characteristics:**
- Four voices that never trade roles: a tightly set display face (`WiredDisplay`) for headlines, a text serif (`Breve Text`) for decks and body, a mono (`WIRED Mono`) in capitals for kickers, section labels and navigation, and `Apercu` as the most-used family by character count on the page.
- Black label tabs: the h2 role is white 13px bold mono on a solid black box (`2px 12px 4px` padding), sitting on a black hairline that runs the width of its column.
- Zero radius on every button and tab (`{rounded.none}`), a 4px radius only where small thumbnails and chips need it, and fully round (50%) play/pause badges on image corners.
- No box shadows were measured at all; depth comes from rules, gray bands and image blocks.
- Dense, all-business information design: centered hero, left-aligned side rails, bylines in tiny tracked mono.

## Colors

> **Source pages:** home (`https://www.wired.com`), measured at 1280px desktop and 390px mobile.

### Brand & Accent
- **Black** (`{colors.primary}` and `{colors.ink}` — `#000000`): The most-read text color and the fill of the detected primary button, which is a black mono-caps tab ("PODCAST: UNCANNY VALLEY", 12px, 32px tall, `8px` padding, no radius). It is also the fill of the top promo bar, the section label tabs and the black promo card at the right of the page.
- **White** (`{colors.on-primary}` — `#ffffff`): Text on every black fill, and the page canvas.
- **Link Blue** (`{colors.link-blue}` — `#057dbc`): Measured on a very small number of characters; in the capture it is the "SUBSCRIBE" nav link. Use it sparingly.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): The default page background.
- **Surface Gray** (`{colors.surface-gray}` — `#f3f3f3`): Large bands: the area around the leaderboard ad at the top and the "ADVERTISEMENT" band between content blocks. Roughly a fifth of the first screen is this gray.

### Text
- **Ink Secondary** (`{colors.ink-secondary}` — `#333333`): Body paragraphs and decks in `Breve Text`.
- **Ink Strong** (`{colors.ink-strong}` — `#1a1a1a`): A near-black used for headline text in the measured palette.
- **Ink Muted** (`{colors.ink-muted}` — `#757575`): Secondary metadata and border lines (a `#757575` border was measured).

### Semantic
No semantic palette is declared in the marketing surface. Red, green and blue values found in the CSS corpus belong to ads, the consent overlay or embedded widgets and are not part of the editorial system.

## Typography

### Font Family

Four families carry the editorial voice and were confirmed as loaded fonts in the measurement: `WiredDisplay` (loaded at weight 700), `Breve Text` (regular and italic), `WIRED Mono` (400 and 700), and `Apercu` (400, 700 and 700 italic). `Proxima Nova` is also loaded and appears on a smaller share of characters. These are proprietary or licensed faces; no public specimen page was found, so the substitutes below are suggestions, not claims about the originals.

- Display (`{typography.display}`): `WiredDisplay, helvetica, sans-serif`, 64px with 59.52px line-height (under 1.0) and -0.5px tracking on desktop; 44px / 40.92px on mobile (`{typography.display-mobile}`). The hero headline in the capture is centered, four lines tall and set nearly solid.
- Body (`{typography.body}`): `"Breve Text", "serif"`, 16px / 24px with 0.1px tracking.
- Mono labels (`{typography.heading}`, `{typography.button}`, `{typography.nav}`): `"WIRED Mono", Monaco, "Courier New", Courier, monospace`, always uppercase. Section tabs are 13px bold; buttons are 12px with 1.1px tracking; nav links are 13px.
- UI (`{typography.ui}`): `Apercu` at 16px, the dominant family by character count; the extraction counts it ahead of every other family.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 64px | 400 | 59.52px | -0.5px | Hero headline |
| `{typography.display-mobile}` | 44px | 400 | 40.92px | -0.5px | Hero headline at 390px |
| `{typography.heading}` | 13px | 700 | 16px | normal | Black section tab (uppercase mono) |
| `{typography.body}` | 16px | 400 | 24px | 0.1px | Deck and paragraph copy |
| `{typography.button}` | 12px | 400 | 16px | 1.1px | Black mono buttons |
| `{typography.nav}` | 13px | 400 | 16px | normal | Top navigation |
| `{typography.ui}` | 16px | 400 | — | — | Apercu UI text |

### Principles
- **Contrast of density.** Display is set tight (line-height below 1.0) while body is open (1.5), and the gap between them is the look.
- **Mono is for labels only.** Kickers, bylines, nav and buttons use uppercase mono with positive tracking; never set a paragraph in it.
- **Headlines carry no color.** Black on white, always.

### Note on Font Substitutes
If the proprietary faces are unavailable, use a condensed grotesque at display sizes with -0.5px tracking, a text serif such as Georgia for body, and any monospace in uppercase with 1px tracking for labels. Keep the display line-height under 1.0.

## Layout

### Spacing System
- **Base unit**: 8px. The spacing scale generated from the page runs `{spacing.s1}` 2px, `{spacing.s2}` 4px, `{spacing.s3}` 8px, `{spacing.s4}` 10px, `{spacing.s5}` 12px, `{spacing.s6}` 15px, `{spacing.s7}` 16px, `{spacing.s8}` 20px, `{spacing.s9}` 24px, `{spacing.s10}` 32px.
- Gaps of 8px dominate, then 16px; padding of 64px appears on larger blocks.

### Grid & Container
- Three-column story grid at desktop: a narrow left rail of image-plus-text rows, a wide center hero column, a right rail. Columns are separated by thin vertical rules and each begins with a black label tab on a black top rule.
- The page measured 1280px wide and 8,492px tall, so the homepage is a long, stacked sequence of modules.

### Whitespace Philosophy
Margins are small and the rules do the separating. Whitespace around the hero headline is generous, but rails are tightly packed, with small tracked mono bylines.

## Elevation & Depth

No box shadows were measured on the homepage. Hierarchy is created by:

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat white `{colors.canvas}` | Default |
| 1 | `{colors.surface-gray}` band | Advertising and spacing bands |
| 2 | Solid `{colors.primary}` block | Label tabs, promo strip, black promo card |

Hover states are tonal, not elevated: the top app-strip links shift from transparent to `#333333` and nav links to `#f7f7f7`.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Buttons, tabs, nav links, hero images |
| `{rounded.xs}` | 4px | Small thumbnails and chips (38 measured) |
| `{rounded.pill}` | 9999px | Circular badges (50% radius measured on play/pause icons) |

Images are crisp rectangles that butt directly against text. Illustration-led product tiles use saturated patterned backgrounds; photographs are cropped hard to the column width.

## Components

### Buttons

**`button-primary`** — a black rectangle with white uppercase mono text.
- Background `{colors.ink}`, text `{colors.canvas}`, type `{typography.button}`, padding 8px, height 32px, `{rounded.none}`.
- `button-secondary` was measured with identical values.

### Navigation

**`nav-link`** — all-caps mono links (SECURITY, POLITICS, THE BIG STORY, BUSINESS, SCIENCE, CULTURE, REVIEWS) in 13px; the generated `nav-link` component records `{colors.canvas}` text (white, as on the black strip), while links in the main white bar render black in the capture. A hamburger and the boxed wordmark sit at the left; "NEWSLETTERS" and a blue "SUBSCRIBE" sit at the right.

### Label Tabs

The `{typography.heading}` role is a black rectangle with white 13px bold mono, `2px 12px 4px` padding, placed above a column or strip ("TODAY'S PICKS", "TRENDING STORIES", "REVIEWS", "AMAZON PRIME DAY").

### Story Units

In the left rail: thumbnail on the left, then a small mono kicker, a condensed headline and a mono byline. In the hero the kicker is centered above the headline and the byline sits centered beneath the deck.

### Footer and links

`footer` and `nav` use `{colors.ink}`; `link` uses `{colors.ink}` at the display type in the generated component set.

## Design System Architecture

No public design-system documentation or token package for WIRED was found. In an interview, WIRED's head of creative described consolidating "17 different Wordpress instances" into a single platform, which enabled exploring "flexible grids" and type theory (https://magculture.com/blogs/journal/at-work-with-billy-sorrentino-wired). A trade article about the US site redesign also mentions "bespoke typefaces" and a single code base that scales across devices, without naming the fonts (https://www.itsnicethat.com/articles/wired-us-redesign). Those articles describe an earlier redesign; the values here come from the live measurement.

The de-facto system, from the measured CSS: custom properties on the root are mostly from a consent overlay (`--fides-*`) and a commerce brand-name variable (`--font-commerce-brand-name` uses Apercu at 16px/1.25em). The system is expressed as four type roles, a black/white/gray palette, 8px-based spacing and square corners.

## Do's and Don'ts

### Do
- Keep headlines black on white at `{typography.display}` with line-height under the font size.
- Use uppercase `WIRED Mono` for every label, kicker and button.
- Use black rectangular tabs to open each module.
- Let photography and illustration supply all color.
- Keep corners square (`{rounded.none}`) on buttons and tabs.

### Don't
- Don't add colored buttons; the primary action is `{colors.primary}`.
- Don't set body copy in the mono or display face.
- Don't use shadows or rounded cards.
- Don't use `{colors.link-blue}` for anything beyond a text link.
- Don't lowercase mono labels.

## Responsive Behavior

### Breakpoints
The extraction measured 1280px desktop and 390px mobile only; exact breakpoints are unknown.

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px | Three-column story grid, 64px display headline |
| Mobile | 390px | Display drops to 44px / 40.92px |

### Touch Targets
Buttons are 32px tall at desktop with 8px padding; nav links are about 42px tall. Mobile target sizes were not measured.

### Collapsing Strategy
Display type steps from 64px to 44px. How the columns reflow at 390px was not inspected.

## Iteration Guide

1. Change one component at a time.
2. Reference tokens (`{colors.primary}`, `{typography.heading}`, `{rounded.none}`).
3. Keep the label-tab pattern for any new module.
4. Add color only through imagery.
5. Default body to `{typography.body}`; use `{typography.button}` for any mono action.
6. If you add a variant, add it as a separate component entry rather than editing the base.
