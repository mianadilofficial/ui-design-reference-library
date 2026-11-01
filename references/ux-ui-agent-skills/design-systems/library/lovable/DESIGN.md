---
version: alpha
name: Lovable
category: "Developer Tools & IDEs"
description: Lovable's marketing site as measured on lovable.dev — a warm off-white page (#fcfbf8) with charcoal text (#1c1c1c), the Camera Plain Variable typeface (48px / 600 headlines at -1.92px), a near-black 8px-radius "Get started" button (#000000e0), 24 to 32px rounded white cards with layered ring shadows, and a saturated blue-to-pink gradient behind the hero prompt box.
colors:
  canvas: "#fcfbf8"
  ink: "#1c1c1c"
  primary: "#000000e0"
  on-primary: "#fafafa"
  surface-dark: "#1c1c1c"
  surface-card: "#ffffff"
  surface-muted: "#f5f4f0"
  surface-footer: "#f7f4ed"
  footer-border: "#eceae4"
  ink-nav: "#030303"
  ink-secondary: "#636363"
  ink-body: "#616161"
  ink-faint: "#c5c1b9"
  button-secondary-bg: "#ffffffcc"
typography:
  display:
    fontFamily: "\"Camera Plain Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52.8px
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: "\"Camera Plain Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.2px
    letterSpacing: "-1.28px"
  body:
    fontFamily: "\"Camera Plain Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  subheading:
    fontFamily: "\"Camera Plain Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: "\"Camera Plain Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Camera Plain Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button-small:
    fontFamily: "\"Camera Plain Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 21px
rounded:
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  xxl: 24px
  card: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 10px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.sm}"
    padding: 9.5px 16px
    height: 40px
  button-translucent:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 10px
    height: 32px
  link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
    padding: 4px 6px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.card}"
    padding: 24px
  card-feature:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.xl}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.xl}"
    padding: 56px
    borderColor: "{colors.footer-border}"
---

## Overview

Lovable's homepage reads as warm, soft and rounded. The page sits on an off-white with a slight yellow cast (`{colors.canvas}`, `#fcfbf8`; the site's CSS names it `--color-marketing-background`, an HSL of 45 40% 98%). Text is charcoal, not black: headings in `{colors.ink}` (`#1c1c1c`), navigation and card text in `{colors.ink-nav}` (`#030303`), paragraphs in warm-neutral grays (`{colors.ink-secondary}` and `{colors.ink-body}`).

The hero is the only loud part of the page. In the capture a wide gradient (blue at the top, through violet, to magenta and red at the bottom) runs behind the headline `Build something Lovable`, a one-line subtitle (`Bring a new product, internal tool, or entire company to life.`) and a white prompt box (`Ask Lovable to create a landing page for my...`) with a plus button, a `Build` menu and a microphone. Everything after the hero returns to the quiet off-white, with three white feature cards and then a dark charcoal rounded band (`{colors.surface-dark}`, `#1c1c1c`) titled `For building and beyond` that carries a glowing blue-to-pink outlined illustration.

The call to action is deliberately plain: a small near-black button (`Get started`, fill `{colors.primary}` which is black at 88% opacity) in the header. Brand color is carried by the gradient art, the logo (a small multicolor mark beside the wordmark in the capture) and the illustration glows, not by interface fills.

A cookie panel overlays the lower right of the capture; it is a consent prompt, not part of the page design, and its `OK` button is not treated as a brand CTA.

**Key Characteristics:**
- Warm off-white canvas with charcoal text; one dark band for contrast.
- Camera Plain Variable throughout, headings at weight 600 with strong negative tracking (-1.92px at 48px).
- Rounded everywhere: 8px buttons, 16px inner cards, 24 to 32px outer cards and panels.
- Layered ring-and-glow shadows on cards instead of single drop shadows.
- A hero prompt input as the product demo: the page invites typing before it explains.
- Gradient and glow art for color; the interface itself is monochrome.
- Short, plain-language copy: `Build something Lovable`, `You bring the idea. Lovable brings it to life.`

## Colors

> **Source pages:** home (`/`) at 1280px and 390px; root CSS variables from the same page.

### Surfaces
- **Canvas** (`{colors.canvas}` — `#fcfbf8`): Page background; the largest on-screen area in the capture and by DOM area (5120 weight).
- **Surface dark** (`{colors.surface-dark}` — `#1c1c1c`): The dark rounded band in the lower half; second by area (3822).
- **Surface card** (`{colors.surface-card}` — `#ffffff`): Cards, the prompt box, secondary buttons.
- **Surface muted** (`{colors.surface-muted}` — `#f5f4f0`): A recurring light fill (745 weight) for inset areas and previews.
- **Surface footer** (`{colors.surface-footer}` — `#f7f4ed`): Footer fill, with a `{colors.footer-border}` (`#eceae4`) 1px border.
- **Translucent washes:** `#0000000a` (2016 weight) is a 4% black overlay used for hover and inset fills.

### Text
- **Ink** (`{colors.ink}` — `#1c1c1c`): Headlines (the `Build something Lovable` h2 measures this color).
- **Ink nav** (`{colors.ink-nav}` — `#030303`): Navigation, card titles, footer links, secondary button text.
- **Ink secondary** (`{colors.ink-secondary}` — `#636363`) and **Ink body** (`{colors.ink-body}` — `#616161`): Paragraphs and descriptions; the two most-read text colors (1243 and 995 characters).
- **Ink faint** (`{colors.ink-faint}` — `#c5c1b9`): Lightest measured text color (100 characters); a warm gray. The element carrying it was not identified.
- **On primary** (`{colors.on-primary}` — `#fafafa`): Label on the black button.

### Action
- **Primary** (`{colors.primary}` — `#000000e0`): `Get started` fill, black at 88% (`--bg-inverse` is `oklch(0% 0 0 / .88)`).
- **Translucent button** (`{colors.button-secondary-bg}` — `#ffffffcc`): Fill of the cookie `OK` button, white at 80%; it matches `--bg-translucent`.

### Semantic palette in CSS (Tailwind-style, not seen on the homepage)
The stylesheet defines a full product palette in `oklch`: accent blue (`--bg-accent`), destructive red (`--bg-destructive`), positive green, attention orange, highlight pink, special purple, each with translucent `-translucent` fills and 40% alpha borders, plus a 25-step warm gray ramp (`--color-gray-0` to `--color-gray-1025`, hue 107). These are the app's states. Their rendered hex values were not measured, so none is tokenised here.

### Gradient art
The hero gradient moves from blue to violet to pink to red. The capture shows it clearly, but a gradient has no single value, so it is not a token. Do not approximate it with one flat fill.

## Typography

### Family
- **Camera Plain Variable** (`--font-sans`), fallback `ui-sans-serif, system-ui, sans-serif`. The loaded font list shows only this family at weights 100 to 900; every measured character uses it.
- **Roboto Mono Variable** is the declared mono (`--font-mono`); it was not loaded on the homepage.
- **Serif** is declared as `ui-serif, Georgia, Cambria, "Times New Roman", Times, serif` and not used.
- Weights in CSS: light 300, normal 400, medium 480, semibold 600, bold 700.

### Hierarchy
| Token | Size | Line | Weight | Tracking | Role |
|---|---|---|---|---|---|
| `{typography.display}` | 48px | 52.8px | 600 | -1.92px | Hero and section headlines |
| `{typography.display-mobile}` | 32px | 35.2px | 600 | -1.28px | Same h2 at 390px |
| `{typography.body}` | 18px | 28px | 400 | normal | Lead paragraphs |
| `{typography.subheading}` | 16px | 24px | 600 | normal | Card titles |
| `{typography.nav}` | 15px | 24px | 400 | normal | Header links |
| `{typography.button}` | 14px | 21px | 400 | normal | `Get started`, `OK` |
| `{typography.button-small}` | 13px | 21px | 600 | normal | `Learn more` card button |

Character counts on the page: 14px dominates (2237), then 16px (561), 18px (440), 24px (165), 36px (139), 48px (55), 15px (52) and 20px (25).

The extractor's h1 (`AI App Builder`, 18px, `#616161`) was not visible in the capture; the visible headline is the h2, which is why `{typography.display}` is the 48px / 600 style.

### Principles
- **Tight, heavy headlines.** Letter-spacing is -0.04em at both headline sizes (-1.92px at 48px, -1.28px at 32px).
- **Regular body.** Weight 400 for paragraphs; 600 only for titles and the small card button.
- **Sentence case everywhere**; no uppercase labels were seen in the capture.
- **Short lines.** Lead paragraphs are held to about 600px width.

### Font substitutes
Camera Plain Variable is a licensed typeface and its source was not found. Fallbacks in the site's own stack are system sans fonts; a neutral grotesque such as Inter at 600 with the same tracking is a pragmatic stand-in, not something Lovable specifies.

## Layout

- **Header:** logo and wordmark left; `Solutions` and `Resources` (with chevrons), `Community`, `Enterprise`, `Pricing`, `Security` as text links; at the right a bordered `Log in` button and the black `Get started` button. Nav links are 28px tall with `4px 6px` padding; buttons are 32px.
- **Hero:** centered column; gradient behind it; the prompt box is centered under the subtitle.
- **Section 2:** left-aligned heading `One platform. Endless possibilities.` over a two-line description, then a three-card row. Each card has a visual on top and a title and two-line description below.
- **Section 3:** a dark rounded band inset a few pixels from the page edges, split into a left text column (heading, description, four list rows separated by hairlines: `Hosting, handled`, `Your app stack, connected`, `Payments, processed`, `Safe and secure, as standard`, `Works wherever, whenever`) and a right illustration panel.
- **Spacing:** gaps of 6px (115 uses), 4px, 8px; paddings of 8px, 4px, 6px, 24px, 80px and 28px. `{spacing.s10}` (80px) is a section-level padding.
- **Footer:** `{colors.surface-footer}` panel with a 16px radius and 56px padding, linking Company, Careers, Press & media, Enterprise, Security, Trust center and more.
- **Page length:** the capture covers the first few sections; the footer is about 719px tall.

## Elevation & Depth

Cards use **stacked ring shadows** rather than a single blur. The measured card shadow is a sequence of: a transparent 1px ring, a 1px near-white ring (`oklch(0.9999 0 107)`), a 2px warm-gray ring at 16% (`rgba(119, 119, 113, 0.16)`), a soft 24px / 6px spread glow at 4% black, then six small downward layers (offsets 2px to 25px with negative spreads) at 4% black each. The result in the capture is a card with a hairline edge and a very soft float.

Other measured shadows:
- **Feature card:** `0 0 0 1px rgba(118,118,118,0.1)` plus smaller layered shadows.
- **Secondary button:** `0 0 0 1px rgba(95,95,93,0.12)`, `0 4px 2px -3px rgba(95,95,93,0.1)`, `0 5px 10px -4px rgba(95,95,93,0.15)`.
- **Inset rings:** `inset 0 0 0 1px rgba(255,255,255,0.1)` on dark surfaces; `inset 0 0 0 1px oklch(0 0 0 / 0.16)` on light controls.
- **Button system in CSS:** `--shadow-button-neutral`, `-accent`, `-destructive`, `-positive`, `-attention`, `-highlight`, `-special`, `-inverse` share an inset pattern: a 1px top highlight, a 1px bottom shade and a 1px ring, plus pressed variants (`--shadow-button-pressed-*`).
- **Surface scale in CSS:** `--shadow-surface-xxs` to `-xl`, all starting with white and warm-gray rings.
- **Glow tokens:** `--glow-on-neutral-hover` (4% black), `--glow-destructive-hover`, `--glow-special-hover`, used for hover tints.
- **Illustrations:** the dark band's graphic uses blue and pink outer glows around a rounded frame.

## Shapes

- **8px** (`{rounded.md}`): the black button and translucent button (19 uses, the most common).
- **6px** (`{rounded.sm}`): `Learn more` / `Read story` buttons.
- **12px** (`{rounded.lg}`) and **16px** (`{rounded.xl}`): inner cards, preview panes and the footer.
- **24px** (`{rounded.xxl}`) and **32px** (`{rounded.card}`): outer cards and the cookie panel (measured 32px).
- **Pill** (`{rounded.pill}`): the measured 3.35544e+07px radii are fully rounded elements (13 uses); which elements they are was not identified.
- **Prompt box:** rounded white container, larger radius than the buttons; the exact value was not separately measured.
- **Icons:** thin-stroke line icons (cloud, lock, key, database, branch) in circular dark buttons in the illustration.

## Components

### Buttons
- **`button-primary`** — `{colors.primary}`, `{colors.on-primary}` label, `{typography.button}`, 32px high, `6px 10px` padding, `{rounded.md}`. `Get started` in the header.
- **`button-secondary`** — `{colors.surface-card}` fill, `{colors.ink}` text at weight 600 13px, 40px high, `9.5px 16px` padding, `{rounded.sm}`, ring shadow. `Learn more` on cards; `Read story` (a customer story link) uses the same size at weight 480.
- **`button-translucent`** — `{colors.button-secondary-bg}`, `{colors.ink-nav}` text, 32px high, `{rounded.md}`. The cookie `OK`.
- **Log in** — bordered, transparent, in the header; border color `oklch(0.866 0 107 / 0.4)`.

### Navigation
- `nav` — transparent over `{colors.canvas}`; items in `{typography.nav}` and `{colors.ink-nav}`. Measured hover: text goes from `oklch(0.1 0 0)` to about 80% black (`oklab(0.227 ... / 0.8)`); no fill change was recorded.

### Prompt box
White rounded container, placeholder text in gray (`Ask Lovable to create a landing page for my...`), a circular `+` button at the left and `Build` menu and microphone icons at the right. In the first feature card a similar box types `Create an online store...` with a visible caret.

### Cards
- **`card`** — `{colors.surface-card}`, `{rounded.card}`, `24px` padding, layered ring shadow (cookie panel measured).
- **`card-feature`** — white, `{rounded.xl}`; visual area with a soft pastel gradient corner, then title (`{typography.subheading}`) and gray description. Titles seen: `You bring the idea. Lovable brings it to life.`, `Refine your design and deploy`, `Depend on Lovable, from end to end`.
- **Preview card** — a mock browser with a `Preview` pill and an editable `Bug tracking for teams that ship fast` heading outlined with a blue dashed selection box and an `h1` tag chip.
- **Settings list card** — rows `Analytics`, `Cloud` (selected), `Connectors`, `Security`, `Agent Integrations`, `Payments`, `SEO & AI search` with line icons.

### Dark band
`{colors.surface-dark}` rounded panel, white heading, lighter gray description text, hairline-separated list rows, and a right panel with a browser mock (`orbit.lovable.app`) ringed in blue-to-pink with round icon buttons.

### Footer
`footer` — `{colors.surface-footer}`, `{colors.footer-border}` border, `{rounded.xl}` radius, 56px padding, `{colors.ink-nav}` links, `{colors.ink-secondary}` secondary text.

## Design System Architecture

There is no public design system for lovable.dev itself. The brand page (lovable.dev/brand) is a press page with a contact and a link to a Brand Hub; the hub was not opened, and no colors, fonts or rules were available.

What the shipped CSS shows:
- **Tailwind v4 foundation:** `--tw-*` variables, `--text-xs` to `--text-9xl` (0.75rem to 8rem), `--container-xs` to `--container-7xl`, `--blur-*`, easing curves (`--ease-in`, `--ease-out-quad`, `--ease-out-quart`, `--ease-in-out-quart`, `--ease-in-out-circ`).
- **Warm gray ramp:** `--color-gray-0`, `-25`, `-50`, `-75`, `-100`, `-125` and so on through `-1025`, in steps of 25, all at hue 107 in `oklch`; hue 107 gives the yellow cast on the canvas.
- **Semantic layer on top:** `--bg-primary`, `--bg-secondary`, `--bg-tertiary`, `--bg-quaternary`, `--bg-base`, `--bg-depth`, `--bg-muted`, `--bg-inverse`, `--bg-scrim`; `--fg-primary` to `--fg-quaternary`, `--fg-emphasis`, `--fg-inverse`; `--border-primary` to `--border-quaternary`, `--border-base`, `--border-depth`; and status families (`accent`, `destructive`, `positive`, `attention`, `highlight`, `special`) each with `bg`, `fg`, `border` and translucent forms.
- **Prefixes:** `--lov-*` variables (for example `--lov-shadow-switcher-track`) belong to a switcher control; `--shadow-button-*` and `--shadow-surface-*` are the component shadow layers.
- **Marketing overrides:** `--color-marketing-background`, `--color-marketing-foreground` (`hsl(0 0% 11%)`) and `--color-marketing-muted-hover` (`hsl(47 10% 83%)`) set the marketing pages apart from the app's semantic tokens.
- **Docs:** Lovable's docs describe "design systems" as a feature for customers' projects (React components, a schema with tokens, adherence checks); this is a product capability and not the system behind this page. See [Design systems](https://docs.lovable.dev/features/design-systems).

## Do's and Don'ts

### Do
- Use `{colors.canvas}` for pages and `{colors.surface-card}` for raised cards.
- Keep the interface monochrome; put color in gradients, glows and illustration.
- Set headlines at weight 600 with -0.04em tracking.
- Round generously: 8px buttons, 16px cards, 24 to 32px outer panels.
- Build depth from ring plus soft multi-layer shadows.
- Let the prompt box be the first interactive element.
- Write short, plain sentences with the product name as a verb phrase ("Lovable brings it to life").

### Don't
- Don't use a saturated brand color as a button fill; the primary button is near-black.
- Don't use pure black text for headings; use `{colors.ink}`.
- Don't use a single hard drop shadow on cards.
- Don't flatten the hero gradient into one color.
- Don't use uppercase labels; the page uses sentence case.
- Don't treat the cookie panel's `OK` button as the primary CTA.

## Responsive Behavior

- **Headline:** 48px / 52.8px to 32px / 35.2px at 390px (`{typography.display-mobile}`); tracking -1.92px to -1.28px.
- **Hidden h1:** at 390px the extractor's h1 is `AI App Builder` at 14px, again not the visible headline.
- **Header:** the 390px nav pattern was not inspected.
- **Cards:** the desktop capture shows three equal cards in a row; their layout at narrow widths was not measured.
- **Container scale:** CSS offers `--container-*` widths from 20rem to 80rem; which one the page uses was not measured.
- **Touch targets:** buttons are 32px and 40px high, nav links 28px.

## Iteration Guide

1. Start with `{colors.canvas}`, text in `{colors.ink}` and `{colors.ink-body}`.
2. Set Camera Plain Variable (or a neutral grotesque) with 600-weight headlines and the tracking above.
3. Add one `button-primary` per view and a bordered `Log in`-style secondary.
4. Build cards in `{colors.surface-card}` with 16 to 32px radii and a ring shadow.
5. Make the hero a gradient field with a centered prompt box.
6. Add one dark rounded band for emphasis, with glow-edged illustration.
7. Keep copy short and plain.
8. Validate: `node web/scripts/verify-designs.mjs --slug=lovable`.

### Open questions
- Hero gradient stops and the logo colors were not measured.
- The element using `#c5c1b9` was not identified.
- Mobile nav and card stacking were not inspected.
