---
version: alpha
name: Ciridae
category: "Tech & AI"
description: "Ciridae's site pairs cream and bone grounds (#fcfbf8, #eae1ce) with ink #14110d and a single copper accent #cc6437, set in Pragmatica Cond uppercase at 102.4px for the hero, Pragmatica 18px body and Roboto Mono and ABC Monument Grotesk Mono labels, with square 52px buttons, one pill-outline nav CTA and no shadows."
colors:
  canvas: "#fcfbf8"
  page-body: "#eae1ce"
  ink: "#14110d"
  primary: "#cc6437"
  on-primary: "#14110d"
  surface-black: "#0b0b0b"
  ink-soft: "#37332a"
  ground-cream: "#f7f2e7"
  ink-on-dark-muted: "#d3cec4"
  off-white: "#efede7"
  ink-muted: "#5b5548"
  hairline: "#52524038"
  accent-on-dark: "#e8b768"
  ground-sand: "#d9cdb0"
  ground-stone: "#6b6250"
  ground-oxide: "#7e2d1c"
  ground-ochre: "#d9a03f"
  ground-blueprint: "#24425c"
  ground-forest: "#1f3d2e"
  ground-well: "#0a0806"
  accent-on-light: "#8d4323"
typography:
  display:
    fontFamily: "\"Pragmatica Cond\", Arial, sans-serif, Arial, sans-serif"
    fontSize: 102.4px
    fontWeight: 400
    lineHeight: 90.112px
    letterSpacing: "-2.048px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Pragmatica Cond\", Arial, sans-serif, Arial, sans-serif"
    fontSize: 33px
    fontWeight: 400
    lineHeight: 29.04px
    letterSpacing: "-0.66px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Pragmatica Cond\", Arial, sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 61.44px
    letterSpacing: "-2.944px"
  subheading:
    fontFamily: Pragmatica, Arial, sans-serif, Arial, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 27.3px
    letterSpacing: "-0.21px"
  body:
    fontFamily: Pragmatica, Arial, sans-serif, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: "\"Roboto Mono\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15.4px
    letterSpacing: "-0.28px"
    textTransform: uppercase
  link:
    fontFamily: "\"ABC Monument Grotesk Mono\", \"Roboto Mono\", monospace"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 5.6px
  s4: 6.4px
  s5: 7.68px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 24px
    height: 52px
    borderColor: "{colors.primary}"
  button-primary-hover:
    textColor: "{colors.accent-on-dark}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.none}"
---

# Ciridae

## Overview

Ciridae (ciridae.com) builds "custom operating systems for construction, field service, distribution and other businesses", according to its About page (opened for this document). The company is based in the Presidio, San Francisco, was founded in January 2025, and describes Ciridae OS as its core product, built on a platform called Crucible. The home page title is "Ciridae — Build the Business AI Makes Possible" and the hero headline is "BUILD THE BUSINESS AI MAKES POSSIBLE."

The visual identity reads as a warm, analog counterweight to typical AI branding. The hero is a dark, misty forest photograph with shafts of light, a white four-point sparkle mark above a centered uppercase headline, a short grey-cream paragraph ("Ciridae builds operating systems that run your business and work alongside your team to ensure a successful AI Transformation.") and a terracotta button. After the hero the page moves onto a cream field (`#fcfbf8`) for one large centered statement ("The next twenty years belong to services businesses rebuilt from the ground up around AI."), where the last phrase "around AI." is set in rust, and then onto a bone-colored band (`#eae1ce`) that carries the product story.

Technical content is drawn rather than photographed: an isometric line drawing of stacked trays with copper highlights illustrates "Ciridae OS / A connected job", next to a numbered list (01 Estimate, 02 Schedule, 03 Record work, 04 Invoice) separated by hairline rules. Captions under the drawing read "People direct", "AI does the work", "Records connect".

The type system is the character: a tall condensed grotesque (Pragmatica Cond) set large, tight and uppercase for the hero, a regular-width Pragmatica for reading text, and two monospace faces for every label, button and nav item. Corners are square except for a single pill outline button in the header. The page is 7538px tall at 1280px and contains no box shadows on visible elements.

## Colors

The site declares its own palette on the root element as named "ground" colors, and the measured page uses a subset.

- **Canvas `#fcfbf8`** (`--ground-white`): the cream-white band holding the large statement; about a quarter of the capture.
- **Page body `#eae1ce`** (`--ground-bone`): the body element background and the largest measured background area (weight 8524); about 30% of the capture.
- **Ink `#14110d`** (`--ground-ink`): the most-read text color (1653 characters) and the H2/H3 color; also the fill of the second "Talk to our team" button.
- **Primary copper `#cc6437`** (`--ground-copper`, also `--color--orange`): fills the "TALK TO OUR TEAM" button, tints the isometric drawing's highlights and the "04" index, and colors nav labels on hover. Text on it is ink `#14110d`.
- **Accent on dark `#e8b768`** (`--accent-on-dark`): the hover text and border color of the primary button on the hero.
- **Accent on light `#8d4323`** (`--accent-on-light`): the rust used for emphasized words on light grounds ("around AI.").
- **Ink soft `#37332a`**: the second most-read text color (1405 characters) and the footer text color.
- **Ground cream `#f7f2e7`**: hero headline color, a text color on dark grounds and a measured background.
- **Ink on dark muted `#d3cec4`**: hero paragraph color.
- **Off-white `#efede7`** and **ink muted `#5b5548`**: measured text colors (224 and 196 characters).
- **Surface black `#0b0b0b`**: the second-largest measured background (weight 5120); the capture shows only the top of the page, so its content is not described here.
- **Hairline `#52524038`**: the 1px rule color (19 measured borders).

The root variables also name `--ground-sand` (`#d9cdb0`), `--ground-stone` (`#6b6250`), `--ground-oxide` (`#7e2d1c`), `--ground-ochre` (`#d9a03f`), `--ground-blueprint` (`#24425c`), `--ground-forest` (`#1f3d2e`) and `--ground-well` (`#0a0806`). They are included as tokens because the site declares them; which sections use them was not measured.

## Typography

Four families are loaded: **Pragmatica Cond**, **Pragmatica**, **ABC Monument Grotesk Mono** and **Roboto Mono**, all at a single weight of 400 (every measured character is weight 400). By characters, Pragmatica is 2153, ABC Monument Grotesk Mono 1309, Pragmatica Cond 529 and Roboto Mono 124.

| Role | Family | Size / line height | Spacing | Case |
|---|---|---|---|---|
| Display (hero H1) | Pragmatica Cond | 102.4px / 90.112px | -2.048px | uppercase |
| Display, mobile pass | Pragmatica Cond | 33px / 29.04px | -0.66px | uppercase |
| Heading (H2) | Pragmatica Cond | 64px / 61.44px | -2.944px | sentence case |
| Subheading (H3) | Pragmatica | 21px / 27.3px | -0.21px | sentence case |
| Body | Pragmatica | 18px / 28.8px | normal | sentence case |
| Button | Roboto Mono | 14px / 15.4px | -0.28px | uppercase |
| Link / micro label | ABC Monument Grotesk Mono | 10px / 20px | normal | uppercase |

The body element itself is set in ABC Monument Grotesk Mono at 11px with 0.66px letter spacing, uppercase, which is the default for navigation and labels (the 11px size has 0.88px tracking on 334 characters). Headlines take negative tracking that grows with size: -2.048px at 102.4px, -2.944px at 64px, -0.28px at 28px.

The pairing logic: condensed for statements, regular-width for reading, monospace for anything that acts or labels. All weights are 400, so hierarchy comes from size, width and case rather than from bold.

**Font substitutes.** Pragmatica and ABC Monument Grotesk Mono are commercial typefaces; no foundry page was opened for this document. Roboto Mono is available as a web font and is already the site's fallback mono (`--font--mono`). For prototypes, use a condensed grotesque for Pragmatica Cond and a regular-width grotesque for Pragmatica, with Roboto Mono for all labels.

## Layout

At 1280px the header floats over the hero: the "CIRIDAE" wordmark with a small dotted sparkle at the left, three centered mono items with dropdown carets (CIRIDAE OS, INDUSTRIES, COMPANY), and a pill-outline "TALK TO US" button at the right (140px by 42px, 1px white border).

The hero headline spans 1203px, centered. The statement band below is centered text on `#fcfbf8` with generous vertical air. The product band uses a two-column split: a heading and a short paragraph on top, a hairline rule, then a left panel with the isometric drawing and a right panel with the numbered list, divided by a vertical hairline.

The stylesheet declares a fluid container: `--size-container` is clamped between `--size-container-min` 992px and `--size-container-max` 1920px, with an ideal width of 1600 (`--size-container-ideal`) and `--size-unit` 16. At the measured 1280px width this yields a 12.8px unit; the 102.4px hero size equals 8 of those units and the 64px heading equals 5, which is consistent with a fluid scale.

Gaps measured: 24px (23 uses), 12px (23), 32px (17), 16px (14), 48px (7), plus 8px, 6.4px, 5.6px, 64px and 30px. Paddings: 8px (23), 12px (20), 24px (11), 38.4px and 32px (7 each), 16px, 128px and 48px. Spacing steps on the site are named `--size--8` through `--size--122`.

## Elevation & Depth

No box shadows were measured on visible elements and the measured shadow list is empty. The stylesheet contains Tailwind ring and shadow variables (all `0 0 #0000` at their defaults) and one glow recipe: on hover, the pill "TALK TO US" button gains a fill of white at 10% alpha and a glow of `rgba(255, 255, 255, 0.18) 0px 0px 16px` plus `rgba(255, 255, 255, 0.14) 0px 0px 16px` inset.

Depth in the page comes from photography (the hero forest), from color planes (cream, bone, near-black) and from the isometric drawing, which stacks trays in perspective. Sections are separated by thin hairlines in `#52524038` rather than shadows.

## Shapes

Measured radii: `1280px` (3 elements, the pill nav button) and `4px` (1 element). The primary button and links measure 0px. Tokens: `xs` 4px, `none` 0px and `pill` 9999px.

The primary call to action is a rectangle with square corners, and the pill is reserved for the secondary "Talk to us" action in the navigation. Illustrations use straight isometric edges and line work with filled copper accents. The sparkle mark is a four-pointed star with curved concave edges, repeated as a smaller dotted version next to the wordmark.

## Components

- **Primary button ("TALK TO OUR TEAM")**: `{colors.primary}` fill, `{colors.ink}` text, Roboto Mono 14px uppercase with -0.28px tracking, 1px copper border, square corners, padding 16px 24px, 52px tall and 180px wide. On hover (measured) the fill becomes transparent and the text and border turn `{colors.accent-on-dark}`.
- **Secondary button**: a second "TALK TO OUR TEAM" instance with `{colors.ink}` fill, cream `#f7f2e7` text, 1px ink border, padding 14px 24px, 46px tall (measured as a second candidate button on the page).
- **Nav pill ("TALK TO US")**: transparent fill, white text and 1px white border, pill radius, padding 10px 18px. Hover adds a 10% white fill and the glow described above.
- **Nav items**: mono uppercase labels with a caret; on hover the text and border turn copper `#cc6437`.
- **Numbered list**: mono index (01 to 04, the fourth in copper), a condensed title, Pragmatica description, hairline rules between rows.
- **Statement block**: centered Pragmatica at light grey-ink with a rust accent phrase.
- **Footer**: paragraph text in `{colors.ink-soft}` at 16px / 24.8px; the footer links listed on the page are Industries, Platform (Ciridae OS, Crucible), Company (How we work, Blog, About, Careers, Contact), social (LinkedIn, X) and legal (Privacy, Terms).

## Design System Architecture

No public brand guidelines, press kit or design-system site was found. The home page (https://www.ciridae.com/) and About page (https://www.ciridae.com/about) were opened, and neither links to brand guidelines, press or credits; https://www.ciridae.com/company returned HTTP 404.

The de-facto system is exposed in the shipped CSS. The font-face list includes `webflow-icons`, and the root variables include `--size--*` steps alongside Tailwind v4 utility variables (`--tw-*`, `--spacing` 0.25rem). Color is organized as `--ground-*` surfaces (ink, white, bone, cream, copper, sand, stone, oxide, ochre, blueprint, forest, well) plus two accent variables, `--accent-on-dark` and `--accent-on-light`, which pick the accent by background. Fonts are bound to `--font--main` (Pragmatica Cond), `--font--body` (Pragmatica) and `--font--mono` (Roboto Mono). Motion easing curves are named too (`--ease` is `.8s cubic-bezier(.84, 0, .16, 1)`, plus `--smooth` and `--expoInOut`).

## Do's and Don'ts

Do
- Use copper `#cc6437` for the single main action in a view and ink text on it.
- Set hero and section statements in Pragmatica Cond with tight negative tracking; uppercase for the hero.
- Set every button, nav item and label in mono uppercase.
- Alternate cream `#fcfbf8`, bone `#eae1ce` and near-black grounds; pick the matching accent (`#8d4323` on light, `#e8b768` on dark).
- Draw product ideas as isometric line illustrations with copper highlights.

Don't
- Don't use bold weights; every measured character is weight 400.
- Don't round the primary button; the pill is reserved for the nav outline button.
- Don't add drop shadows; the only glow is on the hovered nav pill.
- Don't set body paragraphs in monospace.
- Don't use pure white backgrounds; the lightest ground is `#fcfbf8`.

## Responsive Behavior

Recorded in the mobile pass (390px): the hero H1 drops from 102.4px to 33px (line height 29.04px, tracking -0.66px) and measures 350px wide; the H2 drops from 64px to 30px (line height 28.8px, tracking -1.38px); body text goes from 18px to 16px with 25.6px line height; the primary button keeps its 14px type, 16px 24px padding, 52px height and 180px width. The mobile size list is led by 15px (912 characters), 12px (591), 16px (450), 11px (358) and 14px (321).

The stylesheet declares a minimum container of 992px. How the header, the product split and the numbered list rearrange at mobile widths was not measured.

## Iteration Guide

1. Start from `canvas` `#fcfbf8`, `page-body` `#eae1ce`, `ink` `#14110d` and `primary` `#cc6437`; add the other ground colors only when a section needs them.
2. Load Pragmatica Cond, Pragmatica, ABC Monument Grotesk Mono and Roboto Mono; keep all weights at 400.
3. Set the hero at 102.4px / 90.112px uppercase with -2.048px tracking; the section heading at 64px / 61.44px with -2.944px tracking; body at 18px / 28.8px.
4. Build the main button as a 52px-tall square rectangle with copper fill and ink text; hover to transparent with `#e8b768` text and border.
5. Keep hairlines at `#52524038` and let numbered lists and split panels carry structure instead of cards.
6. Use the 33px / 30px / 16px figures for narrow screens and mark any other narrow behavior as not measured.
7. When adding an accent, choose it by ground with the site's own pair: `#8d4323` on light, `#e8b768` on dark.
