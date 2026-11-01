---
version: alpha
name: MiniMax
category: "AI & LLM Platforms"
description: >-
  MiniMax's marketing site pairs a bright sky-blue gradient hero and white sections with Outfit display type (108px/500, -4.32px tracking), DM Sans body at weight 330, and Libre Baskerville serif taglines; actions are black 32px-radius pills 38px tall (#000000 Login) or white-outlined pills on the hero, and model cards sit in frosted #ffffff40 frames over the brand's official orange, purple and cyan gradients.

colors:
  canvas: "#ffffff"
  ink-muted: "#00000099"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-gray: "#f4f4f4"
  ink-secondary: "#86909c"
  ink: "#181e25"
  on-dark-soft: "#ffffffcc"
  card-glass: "#ffffff40"
  brand-blue: "#1456f0"
  brand-pink: "#ea5ec1"
  gradient-orange-start: "#ff3763"
  gradient-orange-end: "#ff7038"
  gradient-purple-start: "#7a27ff"
  gradient-purple-end: "#a36aff"
  gradient-cyan-start: "#1ba4ff"
  gradient-cyan-end: "#38cdff"
  brand-coral: "#ff6452"
  brand-crimson: "#9a0010"
typography:
  display:
    fontFamily: Outfit, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 108px
    fontWeight: 500
    lineHeight: 108px
    letterSpacing: "-4.32px"
  display-mobile:
    fontFamily: Outfit, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 60px
    fontWeight: 500
    lineHeight: 60px
    letterSpacing: "-2.4px"
  heading:
    fontFamily: Outfit, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.8px
    letterSpacing: "-0.24px"
  subheading:
    fontFamily: Outfit, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
    letterSpacing: "-0.4px"
  body:
    fontFamily: "\"DM Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 330
    lineHeight: 22.4px
  button:
    fontFamily: Outfit, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"DM Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 10px
  sm: 12px
  md: 16px
  lg: 17px
  xl: 24px
  2xl: 32px
  3xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3.5px
  s3: 4px
  s4: 5.75px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    height: 38px
  button-primary-hover:
    backgroundColor: "{colors.ink}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    height: 38px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 0px 28px
    borderColor: "{colors.canvas}"
  card:
    backgroundColor: "{colors.card-glass}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    padding: 12px
  footer:
    textColor: "{colors.ink-secondary}"
---

## Overview

MiniMax is an AI company (the site calls it `A World-Leading General AI Technology Company`) and the homepage at `https://www.minimax.io/` presents its model lines. The brand has a published Brand Book at [minimax.io/brand-vi](https://www.minimax.io/brand-vi), which supplies the official colors, gradient pairs and typeface list used in this file in addition to what was measured from the live page (1280px desktop, 390px mobile).

What the capture shows, top to bottom:

- A header floating over a bright sky-blue gradient with a soft violet bloom in the middle: a waveform-style logo mark and `MINIMAX` wordmark, links `Models`, `Product`, `API`, `Plan`, `Research`, `Company`, then an outlined white pill `Contact Us` and a solid black pill `Login`.
- A carousel slide titled `MiniMax Design`, set in large white type: `MiniMax` in a geometric sans and `Design` in a serif. Below it a frosted rounded frame holds three white rows, each with a small line illustration, a bold heading (`Agent-Driven Workflow`, `Built for Commercial Creation`, `Open & Flexible Integration`) and a gray description at the right. A white serif tagline (`AI Agent Platform for Commercial Content Creation`) follows, then two outlined white pills (`Try Now`, `MiniMax Design Membership`) and four short carousel indicator bars.
- `Flagship Models` in white sans over the fading blue, with a serif subtitle (`MiniMax's latest featured models — Language / Video / Speech & Music`). Three model cards sit in translucent frames: `Introducing MiniMax M3` (an orange-red gradient tile), `MiniMax H3` (purple) and `MiniMax Speech 2.8` (purple), each with a one-line caption such as `Top Coding · 1M Context · Multimodal`.
- `Latest Research` in black on white with a serif subtitle, then a two-column list: small gray tag chips, a two-to-three-line title, a date and `Learn More ›`, and a square gradient thumbnail at the right. A `View All ›` outlined pill follows.
- A closing block: the `MiniMax` wordmark in large black type, the serif line `A World-Leading General AI Technology Company`, an `About Us` chip and a long gray paragraph.

The page starts as saturated color and dissolves into white, so the hero is atmospheric and the lower half is a plain, light editorial layout.

**Key characteristics**
- Two-world page: blue gradient hero (image, not a flat token) and white lower sections (`{colors.canvas}`).
- Black pill buttons (`{colors.primary}`, `{rounded.2xl}` 32px, 38px high) and white-outlined pills on the hero.
- Three typefaces, matching the Brand Book list: Outfit (display and buttons), DM Sans (body and links), Libre Baskerville (serif accents).
- Official brand gradients in orange, purple and cyan appear as card art.
- Frosted-glass frames: `{colors.card-glass}` (#ffffff40) with 16px radius and 12px padding.
- No shadows were measured.

## Colors

### Measured on the live page
- **Canvas** `{colors.canvas}` (#ffffff): the white lower sections.
- **Primary** `{colors.primary}` (#000000): the `Login` button fill and the extractor's primary CTA; **on primary** `{colors.on-primary}` (#ffffff).
- **Ink** `{colors.ink}` (#181e25): heading text (for example `Introducing MiniMax M3`) and the hover fill of the black button.
- **Ink muted** `{colors.ink-muted}` (#00000099): a 60% black used across 689 characters.
- **Ink secondary** `{colors.ink-secondary}` (#86909c): the most-read text color (1032 characters), used for the body paragraph and small footnotes.
- **On dark soft** `{colors.on-dark-soft}` (#ffffffcc): 80% white text on the blue hero.
- **Surface gray** `{colors.surface-gray}` (#f4f4f4): small gray areas such as tag chips (25 weight in the area table).
- **Card glass** `{colors.card-glass}` (#ffffff40): the measured card background, a 25% white over the gradient. Other translucent whites measured: #ffffff5c, #ffffff42.
- **Hover** `{colors.ink}` is also the pressed/hover fill of `Login` (measured `rgb(24,30,37)`).

### Root custom properties (usage not confirmed)
- `{colors.brand-blue}` (#1456f0): `--brand-6`.
- `{colors.brand-pink}` (#ea5ec1): `--col-brand02`.
The CSS also holds a Tailwind-default blue (#3b82f6) and a Swiper blue (#007aff); those look like library defaults and are not tokenized.

### Official brand colors (Brand Book)
The [Brand Book](https://www.minimax.io/brand-vi) lists three primary gradients and four solid colors, and says to "use the official gradients exactly as specified":

| Gradient | From | To | Token names |
|---|---|---|---|
| Orange-red | #FF3763 | #FF7038 | `{colors.gradient-orange-start}`, `{colors.gradient-orange-end}` |
| Purple | #7A27FF | #A36AFF | `{colors.gradient-purple-start}`, `{colors.gradient-purple-end}` |
| Cyan | #1BA4FF | #38CDFF | `{colors.gradient-cyan-start}`, `{colors.gradient-cyan-end}` |

Solid colors: #FF6452 (`{colors.brand-coral}`), #9A0010 (`{colors.brand-crimson}`), #000000, #FFFFFF.

In the capture the M3 tile reads as the orange-red family, the H3 and Speech tiles as purple, and the hero background as the cyan-blue family; I did not sample pixels to match hexes exactly.

## Typography

Loaded fonts: Libre Baskerville (700), DM Sans (300, 400, 500, 600, 700) and Outfit (a 100-900 variable range). By character count DM Sans carries 2039, Outfit 667 and Libre Baskerville 544. The Brand Book names the same three families and says they establish a clear typographic hierarchy.

| Role | Family | Size / line | Weight | Tracking |
|---|---|---|---|---|
| Display (h1) | Outfit | 108px / 108px | 500 | -4.32px |
| Display, mobile (390px) | Outfit | 60px / 60px | 500 | -2.4px |
| Heading | Outfit | 24px / 28.8px | 600 | -0.24px |
| Subheading | Outfit | 24px / 28.8px | 500 | -0.4px |
| Body | DM Sans | 14px / 22.4px | 330 | normal |
| Button | Outfit | 16px / 24px | 400 | normal |
| Link | DM Sans | 16px / 24px | 400 | normal |

Notes:
- The measured h1 had empty text content and a white color; in the capture the hero slide title `MiniMax Design` is the large white type. I did not confirm that the measured h1 is that exact element, but its size, family and weight match the large display line.
- Display tracking is -4% of the size (-4.32px at 108px, -2.4px at 60px).
- Weight 330 is a variable-weight value used for the 14px body and many small captions (878 characters).
- Libre Baskerville at weight 700 is the serif tagline voice (`AI Agent Platform for Commercial Content Creation`, the subtitles under `Flagship Models` and `Latest Research`, and `A World-Leading General AI Technology Company`). Its size in each place was not isolated, so there is no serif typography token. Measured sizes across the page include 20px (335 characters), 28px, 40px and 19px.

### Note on font substitutes
All three typefaces are named by the Brand Book and loaded by the site, but I did not open any license page, so I make no license claims. If a font is unavailable, substitute Helvetica Neue or Arial for Outfit and DM Sans (they are already the fallbacks in the measured stacks) and Georgia for the serif.

## Layout

- Hero content is centered; the `MiniMax Design` frame occupies roughly the middle half of the page in the capture, with the header spanning the full width.
- Flagship model cards: three frames in a row, close to equal width in the capture; column widths were not measured.
- Research list: two columns, each item a text block on the left and a square thumbnail on the right.
- Large text blocks run to the edges: the `About` paragraph measured 1232px wide.
- Most common paddings: 8px, 11px and 28px; gaps: 20px, 12px, 10px, 8px, 11px.
- Spacing tokens `{spacing.s1}`..`{spacing.s10}` list 2, 3.5, 4, 5.75, 6, 8, 10, 11, 12 and 14px.
- Vertical rhythm is generous between sections: the page shows large empty bands under the hero and between lists.

### Measured frequency tables (desktop)

| Property | Values by character or element weight |
|---|---|
| Font sizes | 16px (1198), 14px (1113), 20px (335), 12px (257), 24px (250), 28px (45), 40px (30), 19px (15), 60px (7) |
| Font weights | 400 (1184), 330 (878), 700 (544), 500 (414), 600 (230) |
| Letter-spacing | 16px / -0.16px (623), 24px / -0.24px (200), 24px / -0.4px (50), 40px / -0.4px (30), 60px / -2.4px (7) |
| Border colors | #ffffff (12), #00000033 (1) |
| Area fills | #ffffff, #000000 (large by DOM area; the capture shows a blue hero, so I did not identify which element it is), #ffffff40, #ffffff5c, #ffffff42, #f4f4f4, #0000008c |

Reading the table: 16px text is tracked at -0.16px (-1%), 24px headings at -0.24px or -0.4px, and the 40px size at -0.4px, so tracking tightens as size grows, reaching -4% at 108px.

## Elevation & Depth

Zero box shadows were measured. Depth is made with:
1. A gradient photographic background behind translucent frames.
2. Frosted white borders: nested frames at 25% white (`{colors.card-glass}`) and about 36% white (#ffffff5c) around white inner panels.
3. A fade from blue to white behind the Flagship cards.
4. In the Research list, flat thumbnails with no frame.

## Shapes

Measured radii by frequency: 12px (17), 40px (14), 10px (11), 32px (8), 16px (7), 24px (7), 9999px (5), 17px (1).

| Token | Value | Typical use |
|---|---|---|
| `{rounded.xs}` | 10px | link/tag-like controls, the measured `API` link |
| `{rounded.sm}` | 12px | the most common radius |
| `{rounded.md}` | 16px | card frame |
| `{rounded.lg}` | 17px | small chips (one element) |
| `{rounded.xl}` | 24px | |
| `{rounded.2xl}` | 32px | buttons (`Login`, `Contact Us`) |
| `{rounded.3xl}` | 40px | 14 elements, large frames |
| `{rounded.pill}` | 9999px | pill chips such as `About Us`, `View All` |

## Components

### Primary button (`button-primary`)
`{colors.primary}` fill, `{colors.canvas}` text, Outfit 16px/400, `{rounded.2xl}`, 38px tall, 140px wide for `Login`. Hover fill `{colors.ink}` (`button-primary-hover`); no shadow.

### Outline button (`button-secondary`)
Transparent fill, white text and a 1px white border, same 32px radius and 38px height (`Contact Us`; in the capture the hero's `Try Now` and `MiniMax Design Membership` are outlined pills of the same family, only drawn larger). On white sections the `View All ›` and `About Us` controls are gray-outlined pills.

### Header link (`link`)
DM Sans 16px/400, white text, 10px radius, `0px 28px` padding, 44px tall (the measured `API` link had a 1px white border).

### Frosted card (`card`)
`{colors.card-glass}` background, `{rounded.md}` corners, 12px padding, inner white panels. Used for the `MiniMax Design` feature rows and for the model cards. The measured card was 648px wide by 364px tall.

### Model tile
A square gradient artwork tile with the model's name set in large type inside, then title in `{colors.ink}` and a small gray caption.

### Tag chips
Small light-gray pills in serif or sans type (`AI`, `M3`, `Frontier Model`, `MSA`, `Open Weights`).

### Research row
Tags, title (Outfit 500 style), date (`2026-08-13` style) and a `Learn More ›` link, plus a thumbnail.

### Footer-style text
`{colors.ink-secondary}` at 12px/14.4px for dates and notes.

## Imagery and Voice

- **Hero.** A slide carousel (four indicator bars in the capture) with one slide visible: a saturated sky-blue field with a darker blue-violet bloom, no photograph of people. The Brand Book asks for "vibrant plant and animal forms that embody vitality and energy"; the bloom shape in the hero is consistent with that, but I cannot name what it depicts.
- **Model tiles.** Each model is a square gradient tile with a large wordmark-style title (`MiniMax M3`, `H3`, `Speech 2.8`) and a flowing organic shape behind the type. Colors follow the three Brand Book gradients.
- **Research thumbnails.** The same square tile format at small size; one is a red tile with a diagram-like line drawing rather than a wordmark.
- **Icons in the hero rows.** Black line illustrations on white, each a small technical-looking diagram (a workflow of nodes, a network of points, a device with connected lines).
- **Dates.** ISO-style, `2026-08-13`, in small gray type.
- **Voice.** Declarative and spec-like: `Input your goal. Agents autonomously plan, execute, and deliver the final output.`, `Create ads, e-commerce assets, brand campaigns, and post-production content.`, `Connect local assets, deploy privately, and scale through APIs.` The about text says MiniMax is `driven by the mission to 'co-create intelligence with everyone,'` and the Brand Book slogan is `Intelligence with Everyone`.
- **Labels.** Model captions use a middle-dot list (`Top Coding · 1M Context · Multimodal`); section subtitles use a slash list (`Language / Video / Speech & Music`).
- **Density.** Hero is sparse; the Research list is dense text with chips.

## Design System Architecture

Sources opened:

- [MiniMax Brand Book](https://www.minimax.io/brand-vi): official page with the slogan `Intelligence with Everyone`, five attributes (Nature, Life, Growth, Vitality, Motion), the logo versions (gradient, black, white, monochrome) and rule against altering the logo, three primary gradients, four solid colors, the typeface trio and imagery guidance (vibrant plant and animal forms).
- No public design-token package, component library or GitHub design system for the marketing site was found in the pages I opened. The developer documentation lives at platform.minimax.io, but I did not read it for visual tokens.

The de-facto system in the shipped CSS is a mix of semantic custom properties (names like `--col-text01`, `--col-bg03`, `--line-3`, `--fill-3`, `--text-5`, `--brand-6`, `--error-fill`, `--success-line`) and Tailwind defaults (`--color-primary-500` #3b82f6, `--tw-ring-*`), plus Font Awesome 6 and Swiper variables. Values include an error red (#f53f3f fill, #cb2634 line) and a success green (#278f3c line), which are not tokenized because I did not see them on the page.

## Do's and Don'ts

### Do
- Use the official gradient pairs as-is for artwork; do not invent intermediate colors.
- Keep the lower page white and let colored product tiles supply the color.
- Use pill buttons: black fill on white, white outline on the gradient hero.
- Mix Outfit headings with Libre Baskerville taglines for the brand's sans-plus-serif voice.
- Use frosted translucent frames around white panels on the hero.

### Don't
- Do not alter, distort, separate or redesign the logo (Brand Book rule).
- Do not add drop shadows; none are measured.
- Do not use a thick bold weight for display text; measured display weight is 500.
- Do not use serif for body copy; it is limited to taglines and subtitles in the capture.
- Do not substitute a different black for the primary button; it measures #000000.

## Responsive Behavior

Measured at 390px: the display line is 60px/60px with -2.4px tracking (against 108px/108px at desktop). Other mobile layout rules (nav collapse, card stacking) were not captured, so none are claimed.

### Touch targets
Header buttons are 38px tall and 140px wide; header link buttons are 44px tall.

## Iteration Guide

1. Build the top as a blue-to-white gradient image section with a white 500-weight Outfit display title.
2. Place a frosted frame holding white rows with line illustrations for the key points.
3. Add a serif tagline and two outlined white pills.
4. Fade to white for `Flagship Models`; use three frosted frames with gradient tiles.
5. Switch to black headings on white for `Latest Research` with gray tag chips and square thumbnails.
6. Keep primary actions as black 38px pills; hover to `{colors.ink}`.
7. Use `{colors.ink-secondary}` for long gray paragraphs at 14px weight 330.
