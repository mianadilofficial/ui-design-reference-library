---
version: alpha
name: Framer
category: "Design & Creative Tools"
description: "Framer's homepage is a pure black stage (#000000 canvas, #ffffff ink) set in GT Walsheim Medium at 54px/-2.16px for headlines and Inter Variable for text, with white 8px-radius buttons, #111111 and #171717 panels with 15-25px radii, and Framer Blue #0099FF appearing only as a glow, link and focus accent."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-card: "#111111"
  surface-raised: "#171717"
  ink-muted: "#ffffff99"
  ink-gray: "#999999"
  ink-light-gray: "#cccccc"
  ink-dim: "#666666"
  hairline: "#ffffff0f"
  framer-blue: "#0099ff"
  framer-deep-blue: "#0055ff"
typography:
  display:
    fontFamily: "\"GT Walsheim Medium\", \"GT Walsheim Medium Placeholder\", sans-serif"
    fontSize: 54px
    fontWeight: 500
    lineHeight: 54px
    letterSpacing: "-2.16px"
  display-mobile:
    fontFamily: "\"GT Walsheim Medium\", \"GT Walsheim Medium Placeholder\", sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: "-1.44px"
  heading:
    fontFamily: "\"GT Walsheim Medium\", \"GT Walsheim Medium Placeholder\", sans-serif"
    fontSize: 44px
    fontWeight: 500
    lineHeight: 48.4px
    letterSpacing: "-1.76px"
  body:
    fontFamily: "\"Inter Variable\", \"Inter Variable Placeholder\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24.3px
    letterSpacing: "-0.2px"
  button:
    fontFamily: "\"Inter Variable\", \"Inter Variable Placeholder\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: "-0.28px"
  link:
    fontFamily: "\"Inter Variable\", \"Inter Variable Placeholder\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: "-0.1px"
  ui-small:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: 400
rounded:
  xs: 1px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 6px
  button: 8px
  card: 15px
  panel: 20px
  card-lg: 25px
  pill: 100px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 10px
  s10: 15px
  s11: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 14px
    height: 34px
  button-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 8px 10px
    height: 30px
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.link}"
  panel-card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card-lg}"
    padding: 10px
---

## Overview

Framer's homepage (captured at 1280px desktop and 390px mobile; the page is 10741px tall at desktop) is a black gallery wall. The page background is `#000000` for the overwhelming majority of the area, text is white or a translucent white, and the only saturated color in view belongs to the product media: a neon-blue glowing editor frame in the hero, portrait photography, and a row of customer logos.

The first screen reads, top to bottom: a thin navigation bar with the Framer mark and wordmark, Platform / Solutions / Resources dropdowns, Enterprise and Pricing, then "Log in" and a white "Sign up" button at right. Below it the headline, "Framer is the design agent for every step from idea to launch", set in GT Walsheim Medium at 54px over two lines, left-aligned. Under the headline sit a white "Get started for free" button and a translucent "Download app" button, with a "New: Skills" link at the far right. Then a large rounded video frame (timestamp "0:36" at its bottom right) showing a CMS table and a blue-glowing editor with a team page.

Next comes a two-row logo cloud (Dribbble, Legora, Zapier, Perplexity, Cal.com, Mixpanel, Miro, DoorDash), and a second headline, "Agents that work alongside you, not instead of you", with a "Start with agents" button. The following block shows layout explorations beside a dark chat panel ("Create a few layout variations of my site..."). A cookie notice in a white rounded card floats at left over the hero.

Key characteristics:
- Black canvas, white ink; no light mode on this page.
- Two typefaces by role: GT Walsheim Medium for the two display sizes, Inter Variable for everything else. Both are tracked tight.
- Buttons are small (34px and 30px high) with an 8px radius. The primary is solid white with black text.
- Surfaces are stepped near-blacks: `#111111` and `#171717`, separated by 1px borders at 6 percent white (`#ffffff0f`).
- Brand blue (`#0099ff`) is rationed to glow, links and selection rings.
- Voice: product-first claims about agents, with short imperative button copy ("Get started for free", "Download app", "Browse the community", "See Framer sites").

## Colors

Values are from the live page (computed styles and `--token-*` custom properties); two are also published by Framer on its brand page (https://www.framer.com/brand), which lists Black #000000, White #FFFFFF, Framer Blue #0099FF and Framer Deep Blue #0055FF.

### Core
- **Canvas** (`{colors.canvas}` = `#000000`): page background, footer, the largest area by far (weight 18194 versus 3645 for the next).
- **Ink** (`{colors.ink}` = `#ffffff`): headlines, the most-read text color (2126 characters).
- **Primary** (`{colors.primary}` = `#ffffff`): the fill of the "Get started for free" and "Sign up" buttons.
- **On primary** (`{colors.on-primary}` = `#000000`): text inside the white buttons. The default extraction reported `#0000ee` because the button label lives in a child paragraph; a direct probe of the label text on the live page returned `rgb(0, 0, 0)`, 14px Inter Variable, weight 400 (see SOURCES.json `_probes`).

### Surfaces
- **Surface card** (`{colors.surface-card}` = `#111111`): chat panel and content cards.
- **Surface raised** (`{colors.surface-raised}` = `#171717`): inner elements on panels.
- Other measured surfaces not promoted to tokens: `#1a1a1a`, `#242424`, `#ffffff26` (translucent white fills) and `#ffffff1a` (the translucent fill of the secondary buttons "Download app", "Browse the community", "Start with agents", "See Framer sites").

### Text tints
- **Ink muted** (`{colors.ink-muted}` = `#ffffff99`): paragraph text under headlines (1408 characters).
- **Ink gray** (`{colors.ink-gray}` = `#999999`): tertiary text (1290 characters).
- **Ink light gray** (`{colors.ink-light-gray}` = `#cccccc`).
- **Ink dim** (`{colors.ink-dim}` = `#666666`): disabled and decorative text.

### Accents
- **Framer blue** (`{colors.framer-blue}` = `#0099ff`): "Cookie Policy" link in the notice, border color of the glowing editor frame (measured border colors `#0099ff`, `#0099ff69`), tinted fills at about 21 percent (`#0099ff38`). Cited on https://www.framer.com/brand as Framer Blue.
- **Framer deep blue** (`{colors.framer-deep-blue}` = `#0055ff`): declared on the page as `--token-*: #05f` and cited on the brand page as Framer Deep Blue.
- The page's CSS also declares a larger Framer-site palette (`#60f`, `#90f`, `#f06`, `#f02`, `#fd7702`, `#fb0`, `#0cf`, `#2dd`, `#4cd963`, and a lime `#cbff00`). They are part of the editor's color tokens and are not seen as interface colors on the homepage, so they are not tokens here.

### Hairlines
- **Hairline** (`{colors.hairline}` = `#ffffff0f`): 1px borders on dark panels (8 uses).

### Rules observed
- White is the action color. Blue is never a button fill on the homepage.
- Use alpha white for text hierarchy instead of new hexes: 100, 80 (`#ffffffcc`), 60 (`#ffffff99`), 50 (`#ffffff80`), 40 (`#fff6`).
- Colorful content comes from images; the interface stays achromatic.

## Typography

### Families
- **GT Walsheim Medium**, weight 500: display and section headings (280 characters). A commercial typeface from Grilli Type; web-font loaded as "GT Walsheim Medium" with a metric placeholder.
- **Inter Variable** (also static Inter 400/500/600/700): body, navigation, buttons (about 4700 characters combined).
- **Input Mono Regular / Bold** and **JetBrains Mono**: monospace labels, mostly inside product mockups (654, 70 and 19 characters).
- Fallback stack on display: `"GT Walsheim Medium Placeholder", sans-serif`.

### Substitutes
GT Walsheim is licensed. A geometric grotesque such as Inter at weight 500, with the same negative tracking, preserves the look; Inter is open source. Do not substitute a serif or a wide display face.

### Scale (measured)
| Token | Size / line | Weight | Tracking | Use |
|---|---|---|---|---|
| `display` | 54px / 54px | 500 | -2.16px | h1 |
| `display-mobile` | 36px / 36px | 500 | -1.44px | h1 at 390px |
| `heading` | 44px / 48.4px | 500 | -1.76px | section h2 |
| `body` | 18px / 24.3px | 400 | -0.2px | paragraphs and h3 |
| `link` | 14px / 19.6px | 400 | -0.1px | nav and footer links |
| `button` | 14px / 14px | 400 | -0.28px | button labels |
| `ui-small` | 12px | 400 | normal | mockup UI text |

Tracking is exactly -4 percent of font size on display and heading (54 x 0.04 = 2.16, 44 x 0.04 = 1.76, 36 x 0.04 = 1.44), and about -1 percent on 18px text.

Other sizes measured by character count: 12px (2302), 14px (1141), 18px (934), 13px (912), 44px (181), 15px (105), 54px (99), 10px (48), 20px (19), 16px (17). Weights: 400 (2974), 500 (2468), 600 (234), 700 (107).

### Principles
- Headlines are medium (500) rather than bold; tightness does the work.
- Two display sizes only; every other line is Inter.
- Line height on display equals font size (54/54), set solid.
- Paragraphs under headlines drop to 60 percent white.

## Layout

- Desktop width 1280px with a content gutter of roughly 30px at left and right (the headline, video frame and footer share the same left edge at about 30px in the capture).
- The hero video frame spans the full content width, with a large radius and a faint 1px border.
- Section headlines are left-aligned; their call-to-action button is right-aligned on the same row.
- The logo cloud is centred, four per row, on black.
- Product demonstration blocks are two-up: a large canvas card on the left and a narrow chat panel (260px wide, 640px high as measured) on the right.
- Footer is a black block, 611px tall, with 20px padding and columns beginning "Product", "AI", "Agents", "External Agents", "Design", "Collaborate".
- Measured gaps: 10px (425 uses), 5px (310), 15px (135), 6px (110), 8px (64), 20px (35), 30px (22). Paddings: 10px, 15px, 20px, 25px, 40px.

### Spacing scale
Tokens: 1, 2, 3, 4, 5, 6, 7, 8, 10, 15, 20px. The system is dense and based on 5px and 10px steps for gaps.

## Elevation & Depth

Depth is made with glow and near-black layering on a black ground, not with conventional drop shadows:
- Subtle: `rgba(0,0,0,0.1) 0 1px 2px` and `rgba(0,0,0,0.2) 0 2px 6px` on small controls (3 uses each).
- Ring: `rgba(255,255,255,0.08) 0 0 0 1px`, a hairline halo on dark cards.
- Blue key-light: `rgba(0,153,255,0.15) 0 1px 2px, rgba(0,153,255,0.2) 0 2px 4px` for focused or selected elements.
- Deep: `rgba(0,0,0,0.2) 0 40px 64px` and close variants (26px/41.6px, 36px/57.5px) beneath floating device frames.
- The hero editor frame glows with saturated blue borders (`#0099ff`) and soft blue fills; this is image content rather than a CSS token.
- Surface stepping: `#000000` page, `#111111` card, `#171717` raised element.
- Hover: buttons fade to roughly 60 percent opacity (measured 0.6 on both the white and translucent buttons) rather than changing color.

## Shapes

Measured radii by use: 8px (214), 15px (71), 6px (30), 20px (27), 4px (24), 18px (13), 100px (11), 5px (10), 25px (9), 10px (9).

- `{rounded.button}` 8px: all buttons and most small controls.
- `{rounded.card}` 15px: content cards.
- `{rounded.panel}` 20px: large panels and the video frame.
- `{rounded.card-lg}` 25px: the chat panel and mockup frames.
- `{rounded.pill}` 100px: pills and tags.
- 1 to 6px: tiny internal controls inside product mockups.

Buttons are not pills. The brand pairs small 8px buttons with very rounded large media frames.

## Components

### Primary button
- White fill `{colors.primary}`, black label `{colors.on-primary}`, `{typography.button}` (14px, 400, -0.28px).
- Radius 8px, padding 10px 14px, height 34px. Example: "Get started for free".
- Hover: opacity to about 0.6.

### Navigation button
- Same colors, height 30px, padding 8px 10px; the "Sign up" button in the nav bar.

### Secondary (translucent) button
- Fill `#ffffff1a`, white label, same 8px radius and 34px height, with a trailing icon in "Download app". Used for "Browse the community", "Start with agents", "See Framer sites".

### Navigation
- Black bar, Framer logo mark plus wordmark at left, links in `{typography.link}`-scale white text with small chevrons on Platform, Solutions and Resources.
- "Log in" in muted white as a text link beside the white "Sign up" button.

### Panel card
- `{colors.surface-card}` fill, 25px radius, 10px padding, white text. The agent chat panel shows a pale pill labelled "Desktop", a prompt, a "Thinking..." state, an input area and a model selector.

### Video frame
- Large rounded media with a runtime badge "0:36" at the lower right.

### Cookie notice
- White card with dark text, rounded corners, an "Ok" button in a pale-gray fill, and a blue "Cookie Policy" link (`{colors.framer-blue}`).

### Logo cloud
- White wordmarks on black at equal visual weight in a centred four-column grid.

## Design System Architecture

Framer states its logo and color rules on https://www.framer.com/brand: never outline, rotate, skew, color or place the logo on low-contrast backgrounds, never form combinations with the wordmark, and "never use other typefaces". It lists exactly four colors (black, white, Framer Blue, Framer Deep Blue). Typeface names are not specified on that page.

The site itself is built in Framer, and its stylesheet carries Framer's design-token variables: a long list of `--token-<uuid>` custom properties holding color values (examples seen: `#fff`, `#000`, `#111`, `#171717`, `#333`, `#888`, `#999`, `#09f`, `#05f`, `#ffffff1a`, `#fff9`, `#fff6`, `#ffffff12`). These are Framer color styles exported as variables. Fonts are declared with generated "Placeholder" fallback faces (for example "Inter Variable Placeholder" and "GT Walsheim Medium Placeholder") that Framer uses to reduce layout shift.

No public, documented component library or token package for the marketing site was found beyond that brand page. The de-facto system is: two typefaces, a black/near-black surface ladder, alpha-white text ladder, an 8px button radius, and blue reserved for accent.

## Do's and Don'ts

Do:
- Use a black canvas with white type; build text hierarchy with white at 100, 60 and 40 percent.
- Use GT Walsheim Medium (or Inter 500) for headlines with tracking of -4 percent.
- Make the primary action a white 8px button with black text.
- Use `#111111` and `#171717` for stepped surfaces and 1px `#ffffff0f` borders.
- Use blue only as glow, link and focus accent: `#0099ff` or `#0055ff`.
- Put colorful content (photography, UI screens, customer sites) on the black frame.
- Keep button labels short and imperative.

Don't:
- Don't use blue as a button fill on this style.
- Don't use shadows for elevation on black; use surface steps and a 1px ring.
- Don't round buttons into pills (8px); save the large radii for media and panels.
- Don't use bold weights for headlines; medium only.
- Don't add serif or decorative display faces ("never use other typefaces", per the brand page).
- Don't color or outline the Framer logo.

### Imagery and art direction (from the capture)
- Portraits are shot against saturated blue-violet backdrops with a soft motion blur, then framed in a three-column grid inside the glowing editor.
- Layout explorations on the second block use a heavy black-and-white "HAUS" wordmark over landscape photography, shown as three artboards side by side.
- The chat panel uses small pale blue tags ("Desktop") to mark the target breakpoint of a prompt.
- The CMS table in the hero shows rows with avatars, a "Photo" column and green "Active" status labels; it is dimmed so the glowing editor stays the focal point.
- Density: headline blocks have large vertical air (about 100px above and below), while product mockups are dense and small-type.
- Microcopy is lower case after the first word, avoids exclamation marks, and names concrete actions: "Update copy from Slack", "Connect to any AI", "Design with an agent".

## Responsive Behavior

- Measured at 1280px and 390px. The h1 drops from 54px to 36px, tracking from -2.16px to -1.44px, keeping the -4 percent ratio and solid line height.
- The nav collapses on mobile; the collapsed state was not captured so no claim is made about its layout.
- Two-up product blocks (canvas card plus chat panel) are expected to stack; not measured.
- Button heights stay at 34px and 30px; touch targets are small by comparison with common 44px guidance.
- Radii and the near-black surface ladder do not change by breakpoint.

## Iteration Guide

1. Set the page to `{colors.canvas}` and text to `{colors.ink}`.
2. Pick display (54/54/-2.16px) and heading (44/48.4/-1.76px) in GT Walsheim Medium; use Inter Variable 18px/-0.2px at `{colors.ink-muted}` for paragraphs.
3. Add one white button: 34px high, 8px radius, 10px 14px padding, black 14px label.
4. Add translucent secondary buttons with `#ffffff1a` fill.
5. Surface content on `{colors.surface-card}` with 25px radius and a hairline `{colors.hairline}`.
6. Add blue only where interaction or emphasis is needed: link, ring or glow.
7. Show real imagery in large rounded frames; avoid illustration chrome.
8. Verify every pixel and hex against the frontmatter before shipping.
