---
version: alpha
name: v0
category: "AI"
description: "v0 by Vercel uses a #fafafa canvas with white #ffffff cards on 1px rgba(0,0,0,0.08) rings, GeistSans 600 headings with tight tracking (32px/40px at -1.28px; 48px/56px at -2.88px), a 16px/24px system-stack body in #666666, #171717 ink, and 32px-tall #171717 buttons with 8px radius beside pill chips."
colors:
  canvas: "#fafafa"
  page-body: "#fafafa"
  surface: "#ffffff"
  ink: "#666666"
  ink-strong: "#171717"
  primary: "#171717"
  on-primary: "#ffffff"
  surface-muted: "#ebebeb"
  ring: "#00000014"
  hairline: "#ebebeb"
typography:
  display:
    fontFamily: GeistSans, "GeistSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: "-1.28px"
  display-mobile:
    fontFamily: GeistSans, "GeistSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: "-0.96px"
  display-feature:
    fontFamily: GeistSans, "GeistSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 56px
    letterSpacing: "-2.88px"
  body:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 32px
    borderColor: "{colors.primary}"
  chip:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    border: "1px solid #00000014"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 32px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 8px
  nav:
    textColor: "{colors.ink}"
    padding: 0px 8px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 4px
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px
  footer:
    textColor: "{colors.primary}"
    padding: 16px 24px
---

# v0

## Overview

v0 (v0.app) is Vercel's AI app builder; the measured page is titled "v0 by Vercel - Build Full-Stack Web Apps with AI". Logged out, the home page is a working product surface: a centred prompt asks "What do you want to create?" above a large white input ("Ask v0 to build…") with a "v0 Max" model selector and a microphone button, a row of suggestion chips (Contact Form, Image Editor, Mini Game, Finance Calculator, refresh) and a promotional pill above the heading ("Use your ChatGPT plan in v0 ›").

Below, "Start with a template" lists category chips (Apps and Games, Landing Pages, Components, Dashboards, Browse all) and a three-column gallery of community templates — each a screenshot thumbnail with the author's avatar, title and view/like counts ("Image Generation Playground", "Brillance SaaS Landing Page", "3D Gallery Photography Template"). A bento grid then explains the product: a large tile "Prompt. Build. Publish." and tiles for "Sync with a repo", "Integrate with apps", "Deploy to Vercel" (with a black triangle), "Edit with design mode", "Start with templates", "Create design systems", "Agentic by default" and "Create from your phone" (an iPhone illustration). The footer lists Product and Company links.

The aesthetic is Vercel's: monochrome, quiet greys, hairline rings instead of borders, and no accent colour at all in the UI — colour comes only from template screenshots and integration logos. Microcopy is terse and imperative ("Prompt. Build. Publish.", "Go live instantly with one-click deployment to production in seconds").

## Colors

v0 is strictly greyscale in its chrome.

- **Canvas / page-body `#fafafa`** — the body background and the dominant screen colour.
- **Surface `#ffffff`** — the prompt box, template cards, bento tiles and chips.
- **Surface-muted `#ebebeb`** — small muted fills; the same value is the most common border colour (**hairline `#ebebeb`**, 81 elements).
- **Ring `#00000014`** — black at 8%, used as the 1px ring on cards and chips (`--ds-shadow-border-large` starts with `0 0 0 1px #00000014`).
- **Ink `#666666`** — the most-read text colour: nav links, descriptions and chip labels.
- **Ink-strong `#171717`** — headings, card titles, links and the footer.
- **Primary `#171717`** with **on-primary `#ffffff`** — "Sign Up" and the black "View Details" buttons, with a 1px border of the same colour.

The CSS ships much larger palettes — `--color-v0-*` ramps in OKLCH (gray, red, amber, green, blue, teal, pink) and Geist `--ds-*` and `--geist-*` variables — but on the home page none of these hues was measured as a visible UI fill. Additional greys measured as borders: `#e6e6e6`, `#e4e4e7`, `#c9c9c9`, `#eaeaea`.

## Typography

- **GeistSans** (variable, 100–900) sets every heading at weight 600 with tight tracking: the hero `display` "What do you want to create?" is 32px/40px at -1.28px (-4%); the bento headline `display-feature` "Prompt. Build. Publish." is 48px/56px at -2.88px (-6%); "Start with a template" is 24px/32px at -0.96px; tile titles are 20px with -0.4px. The footer is set in GeistSans 14px/500.
- **Body and UI** declare `Inter, -apple-system, "system-ui", "Segoe UI", Roboto, …`. Body is 16px/24px at 400, buttons and nav 14px/20px at 500; 13px and 18px also appear. The extractor's loaded-font list recorded only GeistSans and GeistMono, so Inter was not among the loaded web fonts in the measured session and this text resolves through the system stack.
- **GeistMono** appears on a few characters (diagram labels such as "Web", "LLM", "Plan").

Weights are 400, 500 and 600 only. Geist Sans and Geist Mono are Vercel's own typefaces, listed under Assets on https://vercel.com/geist/introduction.

## Layout

At 1280px the visible page is 2,400px with an inner scroller of 5,030px. The header is 50px tall with `0px 8px` padding: the v0 logo at left, centred links (Templates with a chevron, Enterprise, Pricing, iOS, Students, FAQ) and "Log In" (white, bordered) plus "Sign Up" (black) at right — eight header links counted. Content spans from 24px to 1272px.

The template gallery is a three-column grid; the bento section is a three-column grid of white tiles. Gaps are dominated by 6px (206 uses) and 12px, then 8px and 4px; larger gaps of 72px, 108px and 128px separate sections. Paddings are mostly 12px and 32px (tile interiors), with 80px, 96px and 192px used for section spacing.

## Elevation & Depth

Depth is built from rings, not shadows. The most frequent effect (60 elements) is a 1px ring at 8% black plus a `0px 2px 1px` drop at 4% — a barely-there lift on cards and chips. Twenty elements use only the 1px 8% ring. Six elements carry a large `rgba(0, 0, 0, 0.25) 0px 25px 50px -12px` drop, and one uses a three-step soft stack (`0px 1px 1px` 2%, `0px 4px 8px -4px` 4%, `0px 16px 24px -8px` 6%). White tiles on the `#fafafa` canvas give a second, very low-contrast layer.

## Shapes

- **Pill (9999px)** — the most frequent radius (92 elements): suggestion chips, category chips, the "Use your ChatGPT plan" pill, avatars and round icon buttons.
- **8px** — buttons ("Log In", "Sign Up", "Browse all", "View Details") and nav links.
- **12px** — the prompt box and template thumbnails; `12px 12px 0px 0px` and `0px 0px 12px 12px` variants round only the top or bottom of split panels.
- **4px**, **16px**, **6px** — small tags, large bento tiles and inner elements.

The Vercel triangle and the v0 wordmark are the only graphic marks in the UI.

## Components

- **button-primary** — `#171717` fill and border, white 14px/20px weight-500 text, 8px radius, `0px 12px` padding, 32px tall ("Sign Up", "View Details").
- **Secondary button** — "Log In": white fill, `#171717` text, 1px `#e4e4e7` border, 8px radius, 32px; on hover the fill turns light grey and the border becomes 8% black (measured).
- **chip** — white, 1px `#00000014` border, pill radius, `0px 12px` padding, 32px tall, `#666666` 14px text with a leading line icon ("Contact Form", "Apps and Games").
- **Prompt box** — white, 12px radius, ring border, placeholder "Ask v0 to build…", model selector chip and a black square microphone button.
- **Template card** — a screenshot thumbnail with rounded corners and ring, then an avatar, a 14px title in `#171717`, and view/like counts in `#666666` with small icons.
- **card (bento tile)** — white, 8px radius, ring shadow, 20px GeistSans 600 title, 16px `#666666` description, illustration filling the lower part.
- **nav-link** — `#171717` 14px/500, `0px 4px` padding, 8px radius.

## Design System Architecture

v0 is built on Vercel's design system, Geist, described on https://vercel.com/geist/introduction as "Vercel's design system for building consistent web experiences" that supplies "the colors, typography, materials, layout, and React components behind Vercel's products". That page links Foundations (Colors, Typography, Materials — radii, fills, strokes and shadows — and Grid), Assets (logotype downloads, brand assets, icons, the Geist Sans and Geist Mono typeface) and component pages under `/geist/<component>`, and names the packages `@vercel/geistcn` and `@vercel/geistcn-assets`. The v0 CSS reflects this: `--ds-*` variables (`--ds-gray-alpha-100: #0000000d`, `--ds-gray-alpha-600: #00000057`, `--ds-shadow-border-large`), legacy `--geist-*` variables (`--geist-error: #e00`, `--geist-secondary-lighter: #eaeaea`, `--geist-space-64x: 256px`), a v0-specific OKLCH palette (`--color-v0-gray-100` … `--color-v0-amber-1000`) and shadcn-style roles (`--color-primary-foreground`, `--radius-sm: calc(.5rem - 4px)`).

## Do's and Don'ts

**Do**
- Keep the chrome monochrome: `#fafafa` canvas, white surfaces, `#171717` and `#666666` text.
- Separate surfaces with 1px 8%-black rings rather than borders or shadows.
- Set headings in GeistSans 600 with strong negative tracking (-4% to -6%).
- Use 32px-tall controls: black 8px-radius buttons for primary actions, white pill chips for options.
- Let user content (template screenshots, logos) provide all the colour.
- Keep copy short and imperative.

**Don't**
- Don't add a brand accent colour to buttons or links.
- Don't use heavy drop shadows on cards; the large 25px/50px shadow appears on only six elements.
- Don't bold body text beyond 500.
- Don't mix rounded-pill buttons with the 8px primary; pills are for chips.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero heading drops from 32px/40px to 24px/32px with -0.96px tracking; "Start with a template" stays 24px/32px; body text stays 16px/24px in `#666666`. The mobile header measured 50px tall with `0px 12px` padding; an "Open menu" toggle was detected as visible with 1 header link visible. Mobile content spans 12px to 378px; up to 3 card columns were counted. Mobile font sizes recorded: 16px, 14px, 20px, 13px, 18px, 24px, 40px, 10px, 48px, 32px. Breakpoint widths and the bento grid's mobile arrangement were not measured.

## Iteration Guide

1. Start with a `#fafafa` canvas and a 50px header with centred 14px links.
2. Centre the prompt: 32px GeistSans 600 heading, white 12px-radius input with a ring, pill suggestion chips below.
3. Use `button-primary` (black, 8px, 32px tall) only for sign-up and detail actions.
4. Lay out templates in a three-column grid of screenshot cards with ring borders.
5. Build feature sections as a white bento grid with 20px titles and grey descriptions.
6. Check against the Geist foundations at https://vercel.com/geist/introduction and the live page at https://v0.app.
