---
version: alpha
name: Mintlify
category: "Productivity & SaaS"
description: >-
  Mintlify's marketing site is a white, airy documentation-platform page — near-black ink #08090a on a #ffffff canvas, an arizonaFlare display headline at 50px/400 with -2px tracking over Inter 14–24px body and UI text, flat 4px-radius black buttons, 12px-radius warm-neutral cards (#f9f6f3), and one green accent (#0c8c5e) reserved for links, counters and focus states, with light-green gradient line art behind the hero.

colors:
  canvas: "#ffffff"
  ink: "#08090a"
  primary: "#08090a"
  on-primary: "#ffffff"
  surface-card: "#f9f6f3"
  surface-soft: "#faf8f5"
  ink-soft: "#0a0b0dcc"
  ink-muted: "#0d0d1199"
  ink-strong: "#121715"
  brand-green: "#0c8c5e"
  mint: "#18e299"
  mint-light: "#d2f7ea"
  hairline: "#0000000a"
  link: "#000000"
  link-border: "#c6c6c612"
typography:
  display:
    fontFamily: arizonaFlare, "arizonaFlare Fallback", serif
    fontSize: 50px
    fontWeight: 400
    lineHeight: 52px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: arizonaFlare, "arizonaFlare Fallback", serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: inter, "inter Fallback"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: "-0.24px"
  subheading:
    fontFamily: inter, "inter Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: inter, "inter Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: inter, "inter Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
  nav:
    fontFamily: inter, "inter Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 12px
  xl: 23.47px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 12px 12px 16px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 14px
    height: 34px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 4px 4px 4px 10px
    borderColor: "{colors.link-border}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.link}"
    rounded: "{rounded.lg}"
    padding: 32px
    borderColor: "{colors.link-border}"
  footer:
    textColor: "{colors.link}"
    padding: 104px 0px 0px
---

## Overview

Mintlify sells a documentation platform, and its homepage (measured at `https://www.mintlify.com/`, 1280px desktop and 390px mobile) behaves like the product it sells: a pure white page, black type, hairline-bordered rectangles, and a very small amount of green. The first screen of the capture shows, top to bottom:

- A 65px-tall white header with a green-and-black logo mark and wordmark on the left, centered links `Products`, `Solutions`, `Resources` (each with a small chevron) and `Pricing`, and on the right an outlined `Sign in` button next to a solid black `Contact sales` button.
- An eyebrow control above the headline: a small bordered link reading `Agent traffic` followed by a live-looking counter in a monospace face on a pale green chip, with a chevron.
- The headline `The intelligent documentation platform`, left-aligned in the narrow left half of the page, followed by a two-line gray subhead where the words `startups`, `enterprises` and `agents` are darker than the rest.
- Two buttons: a black `Get started` with a chevron, and a white `Sign up with Google` with the multicolor Google mark.
- On the right, an oversized mock of a docs site (sidebar of navigation items, a `Quickstart Guide` page, four illustrated tiles) fading out toward the bottom, with fine light-green and yellow-green line art sweeping behind it from the lower left to the upper right.

Below the hero the page continues with a customer-logo wall on warm off-white tiles, a strip of live counters headed `Agents at work today`, a two-tone section headline (`One platform for your entire knowledge stack.` in black, `Agents that keep work moving 24/7.` in gray), and a grid of rounded cards (`Agent-native platform`, `Self-updating knowledge`, `Control who has access`).

The character of the page is calm, structured, and type-led. Everything is held in a centered column framed by thin vertical rules; the capture shows the column edges as hairlines running the full height of the page. Color is almost entirely neutral; the green appears in small, functional places.

**Key characteristics**
- Canvas `{colors.canvas}` (#ffffff) with surfaces in warm off-white `{colors.surface-card}` (#f9f6f3) and `{colors.surface-soft}` (#faf8f5).
- Ink `{colors.ink}` (#08090a) for headings and primary actions; translucent variants for secondary text.
- A single accent, `{colors.brand-green}` (#0c8c5e), for the live counters, the active nav item in the mock, focus rings and small status text.
- Primary buttons are flat black with 4px corners (`{rounded.sm}`), not pills.
- Cards use 12px corners (`{rounded.lg}`) with 32px inner padding and an almost invisible border.
- Display type is set in arizonaFlare (weight 400, -2px tracking at 50px); everything else is Inter, plus a monospace face (paperMono) for counters.

## Colors

All values below come from the live-site measurement (`web/data/extracted/mintlify.json`): computed styles of the key elements, the frequency tables, and the custom properties on `:root`.

### Ink and text
- **Ink** `{colors.ink}` (#08090a): the most-read text color on the page (heading text, button fills).
- **Ink strong** `{colors.ink-strong}` (#121715): the page's `--color-foreground-primary` custom property; used for some link/consent text colors.
- **Ink soft** `{colors.ink-soft}` (#0a0b0dcc): an 80%-alpha near-black, the second most-read text color.
- **Ink muted** `{colors.ink-muted}` (#0d0d1199): a 60%-alpha near-black used for body paragraphs and the `h2` color in the measurement.
- **Link** `{colors.link}` (#000000): the computed color of the nav and eyebrow links.
- **On primary** `{colors.on-primary}` (#ffffff): text on black buttons.

### Surfaces
- **Canvas** `{colors.canvas}` (#ffffff): body and header background, and the dominant color in the capture.
- **Surface card** `{colors.surface-card}` (#f9f6f3): card and logo-tile fill (the measured `article` cards).
- **Surface soft** `{colors.surface-soft}` (#faf8f5): a second warm off-white that the CSS also names `--color-neutral-100` and `--color-background-secondary`.

### Accent
- **Brand green** `{colors.brand-green}` (#0c8c5e): the page's `--color-brand-base`; appears in measured text, in the accordion focus ring and in the consent-widget link color.
- **Mint** `{colors.mint}` (#18e299): present as `--color-speedy-mint` and `--color-gradient-green-1` custom properties. I did not confirm from the CSS which elements use it; in the capture the hero line art ranges from light green to yellow-green.
- **Mint light** `{colors.mint-light}` (#d2f7ea): the `--color-light-mint` custom property. The element that uses it was not identified.

### Lines
- **Hairline** `{colors.hairline}` (#0000000a): the most common measured border color (a 4%-alpha black).
- **Link border** `{colors.link-border}` (#c6c6c612): the border on the eyebrow link, the outlined `Sign in` button and the cards.

### Colors seen but not tokenized
The CSS corpus contains many other hexes (partner brand colors for the logo wall such as a blue and an orange, plus several chart/gradient colors). They belong to customer logos or illustrations and are left out of the token set on purpose.

## Typography

Three families were loaded on the measured page: `inter`, `paperMono` and `arizonaFlare` (each with a generated fallback). By character count Inter carries almost all of the text, paperMono the counters, and arizonaFlare the headline.

### Hierarchy

| Role | Family | Size / line | Weight | Tracking |
|---|---|---|---|---|
| Display (h1) | arizonaFlare | 50px / 52px | 400 | -2px |
| Display, mobile (390px) | arizonaFlare | 40px / 44px | 400 | -0.8px |
| Heading (h2) | Inter | 24px / 28px | 500 | -0.24px |
| Subheading (h3) | Inter | 16px / 24px | 500 | normal |
| Body | Inter | 14px / 20px | 400 | normal |
| Button | Inter | 14px / 16px | 500 | normal |
| Nav | Inter | 16px / 24px | 400 | normal |

The measurement also records larger Inter-or-display runs on the page (a 36px run with -0.72px tracking and a 35px run with -0.35px tracking account for a lot of characters), which match the large section headlines in the capture. Which family sets them was not recorded, so they have no token here.

### Principles
- **Tight display tracking.** The 50px headline uses -2px (-4% of the size), and the mobile headline keeps a proportional -0.8px.
- **Two weights only.** The measured weight table contains just 400 and 500.
- **Mono for live data.** The `Agent traffic` figure and the `Agents at work today` counters use a monospace face in green on a pale green chip; they read like terminal output inside a marketing page.
- **Gray as hierarchy.** In the two-tone section headline, the second sentence is the same size as the first but gray, so emphasis is made by color rather than weight.

### Note on font substitutes
arizonaFlare is a custom-loaded face; I did not find a license or source for it in Mintlify's own materials, so no claim is made about its origin. In the capture it renders as a clean, slightly warm sans-serif headline. If you cannot use it, substitute Inter at weight 400 with the same -2px tracking at 50px, or any neutral grotesque; the token falls back to `serif` as measured, so provide your own fallback stack if needed. Inter is available from Google Fonts. paperMono can be replaced by any monospace (for example `ui-monospace`).

## Layout

### Spacing scale
Spacing tokens `{spacing.s1}` to `{spacing.s10}` run 4, 6, 8, 10, 12, 14, 16, 20, 24 and 28px, taken from the measured gap and padding frequency tables. The most common gaps were 4px, 16px and 8px; common paddings were 16px, 12px and 32px.

### Grid and container
- The measured page width is 1280px with an 8451px scroll height at that width.
- Content sits in a centered column delimited by full-height hairline rules; sections inside it are separated by horizontal hairlines.
- The hero is a two-column composition: copy in the left third, the product mock bleeding off the right edge.
- The logo wall is a 4-column by 2-row grid of equal warm tiles beside a text block with a `Read customer stories` button.
- Cards in the feature grid are one wide card (697px in the measurement) next to narrower ones (341px), each 412px tall.
- The footer has 104px of top padding (`footer` role in the measurement).

### Whitespace
Generous. The hero has roughly a viewport of air around the copy, and section headings sit in wide margins. Density is concentrated only in the mock UI and the counters.

## Elevation & Depth

Depth is nearly absent. The only measured box-shadow is an inset 1px ring at 2% black (used three times). The custom properties additionally define a primary-button shadow, `0 1px 2px hsla(0, 0%, 0%, 0.05), inset 0 0 0 1px #0c8c5e`, which I did not see applied on the measured buttons. Separation is made with:

1. Hairline borders (`{colors.hairline}`, `{colors.link-border}`).
2. Warm fills (`{colors.surface-card}`) against white.
3. In the capture, a soft glow beneath the product mock where the mock fades into the page, and the line-art gradient behind it.

There are no drop-shadow cards in the measured card role.

## Shapes

| Token | Value | Where it was measured |
|---|---|---|
| `{rounded.xs}` | 2px | the `Agent traffic` eyebrow link |
| `{rounded.sm}` | 4px | primary, secondary and outlined buttons, nav links |
| `{rounded.md}` | 6px | frequency table (37 elements; the most common radius) |
| `{rounded.lg}` | 12px | cards and tiles |
| `{rounded.xl}` | 23.47px | the top corners of the hero product mock (measured as `23.4654px 23.4654px 0 0`) |

Buttons are therefore square-ish rather than pill-shaped. Large panels get a clearly larger radius than controls.

## Components

### Buttons
- **Primary** (`button-primary`): `{colors.ink}` fill, `{colors.canvas}` text, Inter 14px/500, `{rounded.sm}`, padding 12px 12px 12px 16px, 42px tall. A small chevron sits at the right (the asymmetric padding leaves room for it). Labels measured: `Get started`, `Read customer stories`, `For enterprises`, `For startups`.
- **Header primary** (`button-secondary`): same fill and text, padding 8px 14px, 34px tall; the `Contact sales` button in the header.
- **Outlined**: white fill, `{colors.ink}` text, 1px `{colors.link-border}` border, 4px radius, 34px tall; `Sign in`. Its measured hover state fills with a 3%-alpha ink tint.
- **Google sign-up**: a white button with the Google logo, next to `Get started` in the hero. Only its appearance in the capture is described; it was not measured as a separate role.

### Interaction states (measured hover samples)
- `Sign in` (outlined): background goes from white to a 3%-alpha ink tint; text color and border stay the same; no shadow appears.
- `Contact sales` (solid): the recorded before/after pair shows the black fill as the resting state; the page's CSS also defines `--button-neutral-hover-dark` as #121715, which I did not see applied in the sample.
- The accordion focus state in the CSS is a 2px ring in `{colors.brand-green}`, so keyboard focus is shown in green rather than black.
- Transitions: the CSS defines a 280ms button transition on background, shadow and color with a `cubic-bezier(0.4, 0, 0.2, 1)` ease.

### Links and the eyebrow control
`link` token: white background, black text, 16px Inter, 2px radius, 4px 4px 4px 10px padding, 1px `{colors.link-border}` border, 34px tall. In the capture it contains a text label, a green mono number on a pale green chip, and a chevron.

### Navigation
`nav`: white header, 65px tall, black 16px Inter links (`nav-link`, 4px radius). The three dropdown triggers carry chevrons.

### Cards
`card`: `{colors.surface-card}` fill, `{rounded.lg}` corners, 32px padding, 1px `{colors.link-border}` border, no shadow. Each card holds an illustration area (the first shows green line art and an `Ask AI anything...` input pill) and a caption in Inter 16px/500 at the bottom.

### Logo wall
Eight tiles on warm fill, each with a partner logo (Microsoft, Anthropic, Amazon, Coinbase, Cognition, Solana, AT&T, Rivian are visible in the capture) in its own colors.

### Counters
Inline pairs of a small gray label and a monospace number on a pale green chip (`Pages read`, `Search requests`, `API requests`, `Feedback provided`, `Content updates`). The pale chip color measured in the CSS is a 14-hex-digit alpha green `#1fa77a14`.

### Footer
Top padding 104px, starts with an `All systems normal` status line followed by link columns (`Explore`, `Startups`, `Enterprise`, `Build vs Buy` among the measured text). Link color in the footer measures `#485450`, a green-tinted gray.

## Design System Architecture

Mintlify publishes the system behind its documentation product rather than a brand-guidelines site. What was found and opened:

- Open-source React and Tailwind components: [github.com/mintlify/components](https://github.com/mintlify/components) — the README describes "UI components for documentation" built with React and Tailwind CSS (v3 or v4), MIT licensed, with theming through Tailwind configuration and CSS custom properties such as `--color-primary`.
- Docs-site appearance settings: [settings reference](https://mintlify.com/docs/organize/settings-reference.md) — `colors.primary`, `colors.light` and `colors.dark`, `fonts` (family, weight, heading/body overrides), `appearance`, `background.decoration` (`gradient`, `grid` or `windows`) and `styling` options.
- Themes: [themes page](https://www.mintlify.com/docs/customize/themes) lists `mint`, `maple`, `palm`, `willow`, `linden`, `almond`, `aspen`, `sequoia` and `luma`, each with a one-line description.

These describe the customer-facing docs product. No public brand-guidelines or marketing-site token document from Mintlify was found, so the marketing-site system here is the de-facto one read from the shipped CSS: a Tailwind-style custom-property palette with semantic names (`--color-background-primary`, `--color-foreground-secondary`, `--color-border-sub`, `--color-brand-base`), a neutral ramp (`--color-neutral-0`, `-100`, `-200`, `-300`, `-400`, `-500`, `-700` with values from `#fefdfb` to `#485450`), radius variables (`--radius-sm` .25rem, `--radius-md` .375rem, `--radius-lg` .5rem, `--radius-2xl` 1rem, `--radius-4xl` 2rem) and a green brand ramp (`--color-brand-8`, `-10`, `-20` as alpha tints of #0c8c5e).

## Do's and Don'ts

### Do
- Keep the canvas white and use `{colors.surface-card}` for cards and tiles.
- Use `{colors.ink}` for primary buttons with `{rounded.sm}` corners.
- Use the green sparingly: counters, status, focus ring, and small text accents.
- Separate sections with hairlines rather than shadows.
- Use mono type for numbers that represent live data.
- Pair a black first sentence with a gray second sentence for two-tone headlines.

### Don't
- Do not fill buttons with green; the measured primary CTA is black.
- Do not round buttons into pills; the measured radius is 4px.
- Do not add drop shadows to cards; the measured card has none.
- Do not tint the page background; the warm tones are reserved for cards and tiles.
- Do not use more than two Inter weights (400 and 500) for UI.

## Imagery and Voice

- **Hero art.** Fine parallel lines in light green and yellow-green sweep across the hero and reappear inside the first feature card; they are decorative and sit behind or beside the content, never under text blocks that need contrast.
- **Product mock.** The hero image is a stylized docs site showing real product vocabulary: `Ask Assistant`, `Quickstart`, `Global Settings`, `AI optimization`, `Components`, `Themes`, then lighter, faded items. It fades to white at the bottom instead of being cropped by a frame.
- **Illustration tiles.** Inside the mock, tiles use pale green fills with isometric-looking line drawings of a rocket, a window and a cube; the exact art style names are not stated by the source.
- **Voice.** Short declarative marketing lines (`The intelligent documentation platform`, `Agents that keep work moving 24/7.`), sentence case everywhere, numbers used as proof (`Join 20,000+ of the world's most ambitious companies building for agents.`), and calls to action named by what the user gets (`Get started`, `Read customer stories`).
- **Density.** Low outside the product mock and the counters: a headline, one sentence of support, two buttons.

## Responsive Behavior

Measured at 390px (mobile) the h1 drops from 50px/52px with -2px tracking to 40px/44px with -0.8px tracking, and the `h2` measures 20px/24px with -0.2px tracking instead of 24px. Body text stays 14px/20px. The mobile h1 is about 343px wide, so the headline occupies essentially the full viewport width minus gutters.

I did not capture an intermediate (tablet) width, so no breakpoint values are stated. How exactly they stack was not measured.

### Touch targets
Header buttons are 34px tall and hero buttons 42px tall on desktop; mobile sizes were not recorded for buttons.

## Iteration Guide

1. Start from white and near-black; add `{colors.surface-card}` only for contained modules.
2. Build buttons as 14px Inter 500, `{rounded.sm}`, ink fill. Use 42px height for page-level actions and 34px for the header.
3. Set the headline in the display style (50px/400/-2px) and keep it to three or four short lines in a narrow column.
4. Make cards 12px radius, 32px padding, 1px `{colors.link-border}` border, no shadow.
5. Add live-data chips with a mono number in `{colors.brand-green}` on a pale green fill.
6. Frame the content column with hairline rules and separate sections with horizontal hairlines.
7. When a design looks heavy, remove a border before adding a shadow.
