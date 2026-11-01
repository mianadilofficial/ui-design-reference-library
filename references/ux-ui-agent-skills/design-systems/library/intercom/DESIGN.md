---
version: alpha
name: Intercom
category: "Productivity & SaaS"
description: 'Intercom''s marketing site: warm off-white #faf9f6 canvas with white and chalk #f1eee9 panels, near-black #111111 buttons with 4px corners turning cobalt #0007cb on hover, Saans display at 80px with -2.4px tracking, Serrif light body, mono caps labels, and one Fin orange #ff5600 accent.'
colors:
  canvas: "#faf9f6"
  page-body: "#ffffff"
  ink: "#111111"
  primary: "#111111"
  on-primary: "#ffffff"
  surface-chalk: "#f1eee9"
  ink-soft: "#181818b3"
  ink-body: "#151515cc"
  ink-black: "#000000"
  ink-faint: "#24242480"
  primary-hover: "#0007cb"
  fin-orange: "#ff5600"
  clay: "#d3cec6"
  linen: "#dedbd6"
  error: "#c41c1c"
typography:
  display:
    fontFamily: Saans, "Saans Fallback", "Hiragino Kaku Gothic ProN", "Hiragino Sans", "Yu Gothic UI", "Yu Gothic", Meiryo, "Noto Sans JP", ui-sans-serif, system-ui, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
    letterSpacing: "-2.4px"
  display-mobile:
    fontFamily: Saans, "Saans Fallback", "Hiragino Kaku Gothic ProN", "Hiragino Sans", "Yu Gothic UI", "Yu Gothic", Meiryo, "Noto Sans JP", ui-sans-serif, system-ui, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 38px
    letterSpacing: "-1.2px"
  heading:
    fontFamily: Saans, "Saans Fallback", "Hiragino Kaku Gothic ProN", "Hiragino Sans", "Yu Gothic UI", "Yu Gothic", Meiryo, "Noto Sans JP", ui-sans-serif, system-ui, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.48px"
  subheading:
    fontFamily: Saans, "Saans Fallback", "Hiragino Kaku Gothic ProN", "Hiragino Sans", "Yu Gothic UI", "Yu Gothic", Meiryo, "Noto Sans JP", ui-sans-serif, system-ui, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.2px"
  body:
    fontFamily: Serrif, "Serrif Fallback", "Hiragino Mincho ProN", "Yu Mincho", "Noto Serif JP", ui-serif, Georgia, serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 22.4px
    letterSpacing: "-0.16px"
  button:
    fontFamily: Saans, "Saans Fallback", "Hiragino Kaku Gothic ProN", "Hiragino Sans", "Yu Gothic UI", "Yu Gothic", Meiryo, "Noto Sans JP", ui-sans-serif, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Saans, "Saans Fallback", "Hiragino Kaku Gothic ProN", "Hiragino Sans", "Yu Gothic UI", "Yu Gothic", Meiryo, "Noto Sans JP", ui-sans-serif, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  label:
    fontFamily: SaansMono, "SaansMono Fallback", ui-monospace, monospace
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 1.2px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 6px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 14px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8px 0px
  footer:
    textColor: "{colors.ink-black}"
---

# Intercom

## Overview

Intercom's marketing site (www.intercom.com) sells "a complete system for AI and human customer service": the Intercom helpdesk plus Fin, its AI agent. The captured page feels editorial rather than SaaS-generic: a warm off-white page, oversized light-weight headlines that alternate between grey and black within one sentence, a serif body face, monospace caps labels, and photographic or hand-drawn imagery in place of gradient blobs. Note that the company announced on its blog that it is becoming "Fin" as a company name while the helpdesk keeps the Intercom name (https://www.intercom.com/blog/today-intercom-becomes-fin); the site measured here is still branded Intercom.

Reading order on the captured 1280px page:
1. A full-width announcement strip with an iridescent marbled gradient behind the line "Introducing Fin 4. A major step toward a fully agentic customer experience. Learn more" and a close glyph.
2. A white nav bar: the intercom wordmark with its bars logomark, links with chevrons (Product, Customers, Resources) and Pricing, then right-aligned Log in, Contact sales, View demo, a solid black "Start free trial" and an outlined "Fin AI Agent ->".
3. A hero on the cream canvas: a tiny "Over 2,000 five-star reviews on" line with a review-site mark, then an 80px headline in three lines, "A complete system for / AI and human / customer service", where the middle line is black and the outer lines are grey. A serif paragraph, two buttons (black "Start free trial", outlined "View demo") and a check-marked line "14 day free trial. No credit card required." Small photographs hug the viewport edges: a shadow silhouette on a woven surface, balloons, a dusk sky with birds, a close-up eye.
4. Small blue squares sit at the corners of sections like registration marks.
5. A white-on-chalk band "Two products, one seamless experience" with two boxed tabs ("Intercom helpdesk", "Fin AI Agent") above a large product screenshot placed on a warm, shadow-dappled wood-tone photo.
6. A logo wall under the mono caps label "TRUSTED BY 30,000+ LEADING BRANDS": a regular grid, six across by four down, of grey customer wordmarks (Amazon, Anthropic, Autodesk, A24, Clay, crypto.com, and so on).
7. A feature section opening with a blue-square eyebrow "INTERCOM HELPDESK", a 54px headline, serif copy, and a black ink-splatter butterfly illustration.
8. A dark rounded chat launcher with a red unread badge bottom-right, and an open message card ("Hi there ... You are now speaking with Fin.").

**Key characteristics**
- Warm neutrals: `{colors.canvas}` #faf9f6, `{colors.page-body}` white, `{colors.surface-chalk}` #f1eee9.
- Near-black `{colors.primary}` (#111111) action with sharp 4px corners; hover turns it cobalt `{colors.primary-hover}`.
- Three families: Saans (sans), Serrif (light serif body) and SaansMono (labels).
- Aggressive negative tracking on all display text; headlines at weight 400.
- Only one loud colour, `{colors.fin-orange}`, scoped to the Fin product.
- Photography and illustration with an analogue, art-book feel.

### Imagery, art direction and voice
- Photography is tactile and off-centre: a shadow silhouette on a woven grid, pastel balloons with smiley faces, a dusk sky with birds in flight, an extreme close-up of an eye. Pictures are small, hard-edged rectangles placed against the viewport edges rather than full-bleed heroes.
- Product screenshots are shown whole, with real-looking conversations (names, ticket subjects, a Copilot panel), set on warm photographic backdrops.
- Illustration is a hand-inked, high-contrast black butterfly splatter, used as a spot graphic beside copy.
- Customer proof is quiet: grey wordmarks, no logo cards, one mono caps caption.
- Voice is plain and confident: "Two products, one seamless experience", "14 day free trial. No credit card required.", and a chat greeting that says "Hi there" with a wave emoji.
- Density is low to medium: wide margins, one idea per band.

## Colors

All hex values are measured from the rendered page or from named variables in its shipped CSS.

### Surfaces
| Token | Hex | Role |
|---|---|---|
| `canvas` | #faf9f6 | page background (the CSS calls it `--color-off-white`) |
| `page-body` | #ffffff | nav bar, cards, largest painted area |
| `surface-chalk` | #f1eee9 | alternating bands, tab strips (`--color-chalk`) |
| `clay` | #d3cec6 | darker warm panel (`--color-clay`) |
| `linen` | #dedbd6 | warm border colour (`--color-linen`) |

### Text
| Token | Hex | Role |
|---|---|---|
| `ink` | #111111 | main text and primary button (`--color-off-black`) |
| `ink-black` | #000000 | outlined button text, footer |
| `ink-soft` | #181818b3 | secondary copy (70% alpha) |
| `ink-body` | #151515cc | serif body copy (80% alpha) |
| `ink-faint` | #24242480 | tertiary copy (50% alpha) |
| `on-primary` | #ffffff | text on black buttons |

### Accents
- `primary-hover` #0007cb is the cobalt shown on button hover and named `--color-blueprint-core-blue` / `--color-helpdesk` in the CSS; the same family supplies the small blue squares. The CSS also lists `--color-blue` #000ce1 as the focus outline colour.
- `fin-orange` #ff5600 (`--color-fin`, also `--color-orange`) is the Fin product accent; it appears on the page only in tiny areas.
- `error` #c41c1c is the CSS error colour.

### Borders and shadow tints
- Borders: `#111111` for outlined buttons and tabs, `#c4c4c41a` for faint dividers, `#dedbd6` (`linen`) for warm hairlines.
- The one shadow measured is a heavy `rgba(0,0,0,0.75) 0px 9.841px 82.665px` under floating overlays such as the chat card.

### Colour rules
- Keep the page warm: never place pure white sections directly against another white section; separate with chalk.
- Black is the call-to-action colour; blue is for hover, focus and markers only.
- Use the orange only to signify Fin.
- Use alpha text (70%, 80%, 50%) rather than new greys.

## Typography

Three self-hosted families with CJK fallbacks (Hiragino, Yu Gothic, Meiryo, Noto Sans JP for sans; Hiragino Mincho, Yu Mincho, Noto Serif JP for serif):

| Token | Font | Size | Weight | Line height | Tracking |
|---|---|---|---|---|---|
| `display` | Saans | 80px | 400 | 80px | -2.4px |
| `display-mobile` | Saans | 40px | 400 | 38px | -1.2px |
| `heading` | Saans | 24px | 400 | 24px | -0.48px |
| `subheading` | Saans | 20px | 400 | 24px | -0.2px |
| `body` | Serrif | 16px | 300 | 22.4px | -0.16px |
| `button` | Saans | 16px | 400 | 24px | normal |
| `nav` | Saans | 14px | 400 | 20px | normal |
| `label` | SaansMono | 12px | 400 | n/a | 1.2px, uppercase |

- Display lines run at line-height 1.0 (80px on 80px) and track at -3% (-2.4px), so large type is packed tight; the 24px heading is also 1.0.
- Body is a light (300) serif at 16px, tracked -0.16px; it accounts for about 2,200 characters against Saans' 3,800 on the page.
- Other measured sizes: 28px (about 815 characters, tracked -0.96px), 54px (195 characters, -1.6px), 20px, 14px (some at 0.496px tracking), 12px.
- Only weights 300, 400 and 500 appear; 500 is rare (about 100 characters).
- The hero headline plays colour against weight: all three lines share weight 400, with two of them in a muted grey.
- Labels: SaansMono 12px uppercase with 1.2px tracking ("TRUSTED BY 30,000+ LEADING BRANDS", "INTERCOM HELPDESK").

### Font substitutes
Saans, Serrif and SaansMono are proprietary web fonts. Reasonable substitutes: a grotesque such as "Inter Tight" or "Instrument Sans" at weight 400 for Saans, a light text serif such as "Source Serif 4" at 300 for Serrif, and "JetBrains Mono" or "IBM Plex Mono" for SaansMono; keep the negative tracking values.

## Layout

- Desktop width 1280px; hero content is centred in a narrow column about 520px wide for the paragraph and about 560px for the headline.
- Sections alternate canvas, chalk and white bands; content blocks sit on a visible 12-column-feeling grid, with square blue markers at the section corners.
- Product screenshot sections use wide frames inside the content column, with generous padding of 80, 96 and 112px (all measured) above and below.
- Measured gaps: 8px (most), 4px, 12px, 24px, 16px, 80px, 48px. Paddings: 16px, 14px, 24px, 12px, 32px, 40px.
- The logo wall is six columns by four rows with large even gutters and no borders.
- The nav is white with 14px Saans links; the primary nav button is 40px tall.
- The announcement strip sits above the nav and is dismissible.

## Elevation & Depth

- Depth is mostly flat: bands of colour, thin 1px borders and photography.
- Floating UI (the chat message card, the launcher) uses a very wide, dark soft shadow, `rgba(0,0,0,0.75) 0 9.841px 82.665px`.
- Tabs and outlined buttons use 1px solid `#111111` borders rather than shadows.
- Product screenshots are placed on textured photographic backdrops (warm wood and light-and-shadow), which provides depth without UI shadows.
- Nav hover and active states use black alpha overlays (shipped variables `--color-nav-hover` at 10% black and `--color-nav-button-hover` at 80% black).

## Shapes

| Token | Value | Use |
|---|---|---|
| `xs` | 4px | buttons, tabs, cards (the most common radius, 17 uses) |
| `sm` | 6px | inner controls (7 uses) |
| `pill` | 9999px | the launcher and the avatar-style chips; 50% for circles |

The shipped CSS names `--button-radius: .25rem` (4px) and a general scale from `--radius-xs` .125rem to `--radius-3xl` 1.5rem, but only 4px, 6px and full rounds were measured in use. Overall geometry is rectilinear: buttons, tabs and photos are almost square-cornered, which is the counterpoint to the warm palette.

## Components

### Buttons
- **button-primary**: `{colors.ink}` fill, `{colors.page-body}` text, Saans 16px/400, radius 4px, padding 0 14px, height 40px. On hover the fill changes to `{colors.primary-hover}` (#0007cb) and the border becomes translucent black. Labels: "Start free trial", "Learn more".
- **button-primary-hover**: `{colors.primary-hover}` fill.
- **Outlined button**: transparent, 1px solid border in near-black, `{colors.ink-black}` text, 14px, radius 4px, with an arrow where relevant ("Fin AI Agent ->", "View demo").
- Header buttons are 14px; hero buttons are 16px.

### Navigation
White bar with 14px Saans links, small chevrons marking dropdowns; text links at left, utility links and two buttons at right.

### Tabs
Two boxed cells, "Intercom helpdesk" and "Fin AI Agent", 20px-ish Saans; the active cell is darker text on white, the inactive one is grey on a chalk fill, divided by a 1px line.

### Eyebrow labels
A solid blue square followed by SaansMono 12px uppercase text, aligned above section headlines.

### Logo wall
Customer wordmarks in grey, six per row, with no cards.

### Chat widget
A message card with white surface, the heavy soft shadow, a small multi-dot Fin glyph, a bold greeting, a grey subline ("Fin - Just now"), and a round black launcher with a red unread count.

### Links
`{colors.ink}` text; inline links are underlined serif text (for example the underlined "Fin" in the hero paragraph).

### Footer
`{colors.ink-black}` text on the canvas.

## Design System Architecture

No public Intercom marketing design system, token package or brand-guideline page was found; the trademark-guidelines page I tried returned 404, and the brand-story blog URL I tried also failed. The de-facto system can be read from the shipped CSS (321 custom properties on the home page), which is Tailwind v4-based:
- Colour tokens are named: `--color-off-white` #faf9f6, `--color-off-black` #111, `--color-chalk` #f1eee9, `--color-clay` #d3cec6, `--color-linen` #dedbd6, `--color-cream` #f4f3ec, `--color-canvas` #e7e3db, `--color-navy` #020917, `--color-fin` #ff5600, `--color-helpdesk` #0007cb, `--color-sales` #055895, `--color-error` #c41c1c and a `blueprint` set (core blue #0007cb, dark blue #000f83, light blue #cde5ff, rich blue #004bfe).
- Navigation has its own semantic set (`--color-nav-background`, `--color-nav-content-primary`, `-secondary`, `-tertiary`, `--color-nav-hover`).
- Typography is a named scale: `--text-heading-1-desktop` 6.25rem down to `--text-heading-6-desktop` 1.25rem, each with weight 400 and its own negative letter-spacing, plus `body-*`, `label-*`, `button-*` and `report-*` (editorial report layouts) scales with mobile and tablet variants.
- Corner tokens are `--radius-xs` to `--radius-3xl` and `--button-radius`.
- Product colour is encoded in tokens: `--color-fin` and `--color-helpdesk` identify the two products, which is why the orange and the cobalt are scoped.
The home page itself (https://www.intercom.com) is the authoritative reference: it presents Intercom (helpdesk) and Fin (AI agent) as the two products, which the colour split mirrors.

## Do's and Don'ts

**Do**
- Keep the warm canvas and separate bands with chalk, not borders.
- Set headlines in Saans 400 with strong negative tracking and line-height 1.0.
- Alternate grey and black lines inside a headline for emphasis.
- Use a light serif for paragraphs and mono caps for labels.
- Use black rectangular buttons with 4px corners and let hover reveal the cobalt.
- Let photography and hand-drawn illustration carry the personality.
- Place a small blue square as an eyebrow or corner marker.

**Don't**
- Don't use Fin orange as a generic button or section colour.
- Don't round buttons beyond 4px; pills are reserved for the launcher.
- Don't use bold weights; 400 for display, 300 for body.
- Don't use gradient hero blobs; the only gradient is the announcement strip's marbled artwork.
- Don't use pure white page backgrounds around white cards.
- Don't put the cobalt on resting UI.

## Responsive Behavior

- Measured at 1280px and 390px: the h1 shrinks from 80px/80px with -2.4px tracking to 40px/38px with -1.2px tracking (half size, same -3% tracking).
- Shipped variables suggest three tiers (desktop, tablet, mobile) for each text style, for example `--text-heading-2-tablet: 4rem` and `--text-button-lg-mobile: 1rem`.
- Edge photographs in the hero are positioned at the viewport edges and are expected to crop or drop on narrow screens.
- The six-column logo wall reflows to fewer columns.
- Buttons stay 40px high; narrow-screen hero button layout was not measured.
- The announcement strip stays full-width and dismissible.

## Iteration Guide

1. Start from `canvas` (#faf9f6) with white cards and chalk bands; no other backgrounds.
2. Set display in Saans (or a substitute) at 400 with -3% tracking and line-height 1.0.
3. Add the serif body at 300 and mono caps labels.
4. Add one black rectangular button; verify the hover state goes to #0007cb.
5. Dim parts of the headline with alpha greys to create the two-tone effect.
6. Add photography with real-world texture, and a hand-drawn illustration for relief.
7. Mark section corners with 8px-ish blue squares.
8. Re-measure with `node web/scripts/extract-tokens.mjs --slug=intercom --force` and run `node web/scripts/verify-designs.mjs --slug=intercom`.
