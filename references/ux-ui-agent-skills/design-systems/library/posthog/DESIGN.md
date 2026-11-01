---
version: alpha
name: PostHog
category: "Backend, Database & DevOps"
description: 'PostHog.com as measured: an operating-system-style desktop of translucent windows over a grass wallpaper, set in the RoundHog typeface (500 body, 800 headlines at 36px), on a sage cream #eeefe9 canvas with #fdfdf8 cards, amber #cd8407 call-to-action buttons with a 1px #b17816 border and 8px radius, and the brand red-orange #f54e00 reserved for active tabs and frames.'

colors:
  canvas: "#eeefe9"
  page-largest: "#ffffff"
  ink: "#374151"
  primary: "#cd8407"
  primary-border: "#b17816"
  primary-soft: "#eb9d2a"
  on-primary: "#111111"
  brand-red: "#f54e00"
  on-brand-red: "#ffffff"
  brand-yellow: "#dc9300"
  brand-blue: "#1d4aff"
  surface-accent: "#e5e7e0"
  surface-card: "#fdfdf8"
  ink-muted: "#65675e"
  ink-strong: "#111111"
  ink-link: "#111827"
  ink-black: "#000000"
  hairline: "#bfc1b7"
  accent-blue: "#2f80fa"
  accent-blue-bg: "#2f80fa1a"
typography:
  display:
    fontFamily: RoundHog, sans-serif
    fontSize: 36px
    fontWeight: 800
    lineHeight: 40px
    letterSpacing: "-0.9px"
  display-mobile:
    fontFamily: RoundHog, sans-serif
    fontSize: 30px
    fontWeight: 800
    lineHeight: 36px
    letterSpacing: "-0.75px"
  heading:
    fontFamily: RoundHog, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: "-0.6px"
  subheading:
    fontFamily: RoundHog, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: RoundHog, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  button:
    fontFamily: RoundHog, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  nav:
    fontFamily: RoundHog, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 4.39px
  s5: 5.26px
  s6: 6px
  s7: 6.22px
  s8: 7.89px
  s9: 8px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    height: 47px
    borderColor: "{colors.primary-border}"
  button-primary-soft:
    backgroundColor: "{colors.primary-soft}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
  tab-orange:
    backgroundColor: "{colors.brand-red}"
    textColor: "{colors.on-brand-red}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 10px 12px
    height: 40px
  tab-blue:
    backgroundColor: "{colors.accent-blue}"
    textColor: "{colors.on-brand-red}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 40px
  link:
    textColor: "{colors.ink-link}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink-black}"
    padding: 66px 4px 0px
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.25) 0px 25px 50px -12px
---

## Overview

This file describes the PostHog home page (`https://posthog.com`, titled "PostHog - your product's context layer") as captured and measured at 1280px and 390px. Values come from the live page; brand statements come from PostHog's own handbook pages cited in `SOURCES.json` and in the architecture section.

The site is built like an operating system, and the capture shows it. A grass-green photographic wallpaper fills the viewport. A thin menu bar runs along the top (logo, Products, Pricing, Docs, Community, Company, More, an amber "Get started - free" button and three small icons). Desktop icons stand in two columns on the left (Home, Self-driving product, Context warehouse, Pricing, Docs, Demo, Talk to a human) and the right (About us, Changelog, Company handbook, Store, Careers, Trash). In the center, a translucent window holds the page: the PostHog logo, a headline "Your product's context layer" with the last two words highlighted in blue, a card titled "Set up PostHog for free" with two buttons, a tabbed product panel, a "Social proof" section with two logo grids, and further text sections. A cookie notice at the bottom right is a window with a cartoon illustration and the headline "Legally-required cookie banner".

**Key Characteristics**
- A warm, sage-tinted neutral set: `{colors.canvas}` (`#eeefe9`), `{colors.surface-accent}` (`#e5e7e0`), `{colors.surface-card}` (`#fdfdf8`), with olive-grey text.
- One proprietary typeface, RoundHog, in weights 500 (body), 600 (buttons), 700 (headings) and 800 (the hero headline).
- Amber buttons with a darker 1px border and 8px radius as the visible call to action.
- The brand red-orange `{colors.brand-red}` (`#f54e00`) is used sparingly (a frame, a tab fill, a pagination color).
- Playful, irreverent microcopy and illustration (a cartoon in the cookie window, "Talk to a human" and "Trash" icons).
- Layered window chrome: translucent fills (`#e5e7e0bf`), hairlines and heavy soft shadows.

## Colors

### Official palette (PostHog brand assets page)
The handbook page https://posthog.com/handbook/brand/assets lists these colors; the ones used here are noted:
- Background, light mode `#EEEFE9` (the page's measured canvas); accent, light mode `#E5E7E0` (measured as a surface); dashed divider `#D0D1C9`; text color `#151515` at 90% opacity; gray `#BFBFBC`.
- Red `#F54E00` (`{colors.brand-red}`), yellow for light mode `#DC9300` (`{colors.brand-yellow}`) and blue `#1D4AFF` (`{colors.brand-blue}`). These three are published values; on the captured page the red appears as measured, but the published yellow and blue were not observed on the page, so they are cited tokens only. The page's own amber `#cd8407` and blue `#2f80fa` are different values.
- Dark-mode values (background `#151515`, accent `#2C2C2C`, yellow `#F1A82C`) are published but not captured and not tokenized.
- The visual-identity page (https://posthog.com/handbook/brand/visual-identity) says the palette is deliberately limited, that color guides attention instead of decorating, that there are no gradient backgrounds by default, and that red `#F54E00` is a brand color only, not to be used for warnings.

### Measured on the page
- **Primary (amber)** (`{colors.primary}`, `#cd8407`): fill of the "Get started" and "Get started - free" buttons, with border `{colors.primary-border}` (`#b17816`) on the first, 18px/500 `{colors.on-primary}` (`#111111`) text and an 8px radius. This is why the extractor's first candidate was overridden (see below).
- **Primary soft** (`{colors.primary-soft}`, `#eb9d2a`): fill of "Install with AI" and "Open Customers" buttons (extractor candidates 2 and 5).
- **Brand red-orange** (`{colors.brand-red}`, `#f54e00`): measured as the fill of the tab "Give agents product context" (6px 6px 0 0 radius, white text `{colors.on-brand-red}`), and appears in the root variables as `--squeak-button-color: 245,78,0` and `--swiper-pagination-color`. In the capture it also reads as the thick frame around the product panel.
- **Accent blue** (`{colors.accent-blue}`, `#2f80fa`): measured as the fill of the mobile tab "Ship with PostHog" (white text), as the text color of the highlighted words "context layer" and "working together" in the capture (34 characters carry it), and, at 10% alpha (`{colors.accent-blue-bg}`, `#2f80fa1a`), as the highlight behind them. The capture's desktop tab strip shows "Ship with PostHog" in this blue; the extractor measured "Give agents product context" as the orange tab. Why the two measurements differ (the panel may rotate through tabs) was not investigated.

### Text
- **Ink** (`{colors.ink}`, `#374151`): the most-read text color (2236 characters).
- **Ink muted** (`{colors.ink-muted}`, `#65675e`): 546 characters; the extractor's body-text sample.
- **Ink strong** (`{colors.ink-strong}`, `#111111`), **ink link** (`{colors.ink-link}`, `#111827`, color of h1 and h2) and **ink black** (`{colors.ink-black}`, `#000000`, navigation).
- White (`{colors.page-largest}`, `#ffffff`) on colored fills; `#23251d` on the "Get started - free" button.

### Surfaces
- **Canvas** (`{colors.canvas}`, `#eeefe9`): the body background; translucent `#e5e7e0bf` (weight 2252) is the largest measured area, which in the capture is the window panel.
- **Surface accent** (`{colors.surface-accent}`, `#e5e7e0`), **surface card** (`{colors.surface-card}`, `#fdfdf8`) and white `#ffffff`.
- **Hairline** (`{colors.hairline}`, `#bfc1b7`): the most common border color (34 elements).

## Typography

### Font family
**RoundHog** carries 4073 characters; **Source Code Pro** (56) is used for code. Loaded faces: RoundHog 400, 500, 500 italic, 700, 700 italic and 800; Source Code Pro 400. The brand-identity page describes RoundHog as the primary typeface used for all text on posthog.com, with Bold for titles and section headers, Semibold for large-header paragraphs and links, and Regular for body text. It also describes a display face called Squeak (always uppercase, marketing and hedgehog contexts, never body text) and Loud Noises (quotes in hedgehog artwork only). The fonts measured on this page are RoundHog and Source Code Pro only; Squeak and Loud Noises are not among the loaded faces on this capture.

### Font substitutes
The computed stack is `RoundHog, sans-serif`. RoundHog is a PostHog brand typeface; the sources opened do not offer a public download link on the pages read, so use `sans-serif`. No open-source lookalike is claimed.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Where measured |
|---|---|---|---|---|---|
| `{typography.display}` | 36px | 800 | 40px | -0.9px | h1 "Your product's context layer" |
| `{typography.display-mobile}` | 30px | 800 | 36px | -0.75px | h1 at 390px |
| `{typography.heading}` | 24px | 700 | 32px | -0.6px | h2 |
| `{typography.subheading}` | 18px | 700 | 28px | normal | h3 "Set up PostHog for free" |
| `{typography.body}` | 18px | 500 | 27px | normal | paragraphs and the amber buttons |
| `{typography.button}` | 14px | 600 | 20px | normal | tabs, links |
| `{typography.nav}` | 16px | 500 | 24px | normal | menu bar |

Other measured sizes: 14px (1096 chars), 15px (255), 13px (248), 12px (180), 17px (121), 30px (101), 12.2784px (86), 16px (23), 20px (6). Weights: 500 (2669 chars), 600 (897), 700 (387), 400 (149), 800 (27). Negative tracking appears only on 24, 30 and 36px headings.

### Principles seen on the page
- Headings are heavy and slightly tracked in; body is medium weight at a generous 18px/27px.
- Highlighted words are marked with a tinted background and a colored text, not with bold.
- Desktop icon labels are small and set in light text over the wallpaper.

## Layout

- **Desktop shell**: menu bar across the top, icon columns left and right, and a central window about 760px wide in the 960px-wide capture, with a close/maximize control at its top right. The page content scrolls inside the window (measured inner scroll height 4751px against a 2400px capture).
- **Hero**: logo, then a two-column area: headline and paragraph on the left, "Set up PostHog for free" card on the right with a checklist ("97% of users pay us $0", "No credit card required", "Setup wizard installs PostHog for you") and two buttons.
- **Tab strip**: three tabs ("Ask PostHog anything", "Give agents product context", "Ship with PostHog") above a framed product panel.
- **Social proof**: two side-by-side logo grids labeled "Colorful logos" and "Sleek logos" with a circular toggle between them.
- **Spacing**: gaps of 6px (80 uses), 4px (46), 2px (20), 8px (16); paddings of 8px (104), 6px (29), 2px (28), 4px (20). Fractional values such as 5.26px and 4.39px also appear.
- **Mobile**: nav height 486px at 390px, hero h1 342px wide.

## Elevation & Depth

Measured shadows: `rgba(0,0,0,0.25) 0 25px 50px -12px` (3 elements, the large window and card shadow), `rgba(0,0,0,0.1) 0 4px 6px -1px, rgba(0,0,0,0.1) 0 2px 4px -2px` (1), `rgba(255,255,255,0.4) 0 0 6px 2px` (1) and a heavier `rgba(14,18,22,0.35) 0 10px 38px -10px` family for a popover. Layering also comes from translucent fills (`#e5e7e0bf`, `#e5e7e033`, `#fdfdf880`) letting the wallpaper show through.

| Level | Treatment | Use |
|---|---|---|
| 0 | flat fill with hairline | cards |
| 1 | `0 4px 6px -1px / 0 2px 4px -2px` | small controls |
| 2 | `0 25px 50px -12px rgba(0,0,0,.25)` | windows, set-up card |
| 3 | `0 10px 38px -10px rgba(14,18,22,.35)` | popovers |

## Shapes

Measured radii: 4px (39 elements), 6px (18), 2px (13), 9999px (13), 8px (6), `6px 6px 0 0` (3, tabs), 20px (2) and a few single-corner values.

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | small chips |
| `{rounded.sm}` | 4px | most common |
| `{rounded.md}` | 6px | cards, tabs, "Get started - free" |
| `{rounded.lg}` | 8px | amber buttons |
| `{rounded.xl}` | 20px | large panels |
| `{rounded.pill}` | 9999px | round icon buttons |

## Components

### Buttons
- **`button-primary`**: amber `{colors.primary}`, text `{colors.on-primary}`, 18px/500 (`{typography.body}`), radius `{rounded.lg}`, height 47px, 1px `{colors.primary-border}`. In the capture it has a thicker darker lower edge, which suggests a bottom border or shadow that was not separately measured.
- **`button-primary-soft`**: `{colors.primary-soft}` fill, same text.
- Header button "Get started - free": `#cd8407`, text `#23251d`, radius 6px.
- White outline button "Install with AI" in the capture sits beside the amber one; its measured candidate fill is `#eb9d2a` in the extraction, so how the white fill in the capture relates is not established here.

### Tabs
- **`tab-orange`** (measured): fill `{colors.brand-red}`, white 14px/600 text, `6px 6px 0 0` radius, padding `10px 12px`, 40px tall. **`tab-blue`**: fill `{colors.accent-blue}` as measured on the mobile tab. In the desktop capture the inactive tabs are plain text on the window.

### Cards and windows
- **`card`**: fill `{colors.surface-card}`, radius `{rounded.md}`, 1px `{colors.hairline}`, large soft shadow. Cards in the capture hold product mockups (a ticket list with tags like "fix(auth)") or logo grids.

### Navigation
- **`nav`** (text `{colors.ink-black}`) and **`nav-link`** (white text, 16px/500) are the extractor's records; the menu bar in the capture is dark text on the translucent bar and the desktop icon labels are light text on the wallpaper.
- **`link`**: `{colors.ink-link}`, 14px/600, underlined with a colored line in the capture.

## Design System Architecture

PostHog documents its brand publicly:
- **Visual identity**: https://posthog.com/handbook/brand/visual-identity (limited palette, no default gradients, three typefaces, sentence-case headings, left-aligned body text).
- **Brand assets**: https://posthog.com/handbook/brand/assets (hex values above; the `@posthog/brand` library is named as the single source of truth for the mark, with a `<Logo>` component).
- **In practice**: https://posthog.com/handbook/brand/in-practice (website as the primary brand expression; product UI prioritizes "Clarity > cleverness"; "Don't use Squeak in product UI"; paragraphs ideally not above five lines).
- **Website engineering**: https://posthog.com/handbook/engineering/posthog-com/how-posthog-website-works says the site is built with Gatsby.js and an operating-system-like wrapper (`<Wrapper />` rendering a menu bar, desktop background and app windows, with `<ReaderView />`, `<Editor />`, `<Explorer />` and `<Presentation />` apps). The page opened did not specify the CSS system.

What the page's own CSS shows: Tailwind-style custom properties (`--tw-ring-color`, `--tw-shadow`) in the root variables, Swiper (`--swiper-theme-color`, `--swiper-pagination-color: #f54e00`) and a `--squeak-*` set (`--squeak-button-color: 245,78,0`, `--squeak-primary-color: 0,0,0`), which suggests utility-class styling plus a community widget; this is an inference from variable names.

## Do's and Don'ts

**Do**
- Keep the palette small: sage neutrals, one amber action color, the red-orange brand color in small doses.
- Use RoundHog at 500 for body and 700/800 for headings.
- Give windows and cards a hairline and a large soft shadow.
- Use sentence case for headings and left-aligned body text, as the brand pages direct.
- Keep microcopy plainspoken and a little irreverent, matching the page.

**Don't**
- Do not use `{colors.brand-red}` for warnings or errors; the visual-identity page reserves it as brand color only.
- Do not use gradient backgrounds by default (the brand page says none are used by default).
- Do not set Squeak in product UI or for body text.
- Do not use hedgehog artwork in marketing without permission; the brand-assets page restricts it.

## Responsive Behavior

Two viewports were measured. At 390px: h1 30px/800 (`{typography.display-mobile}`), h2 24px/700, body 18px/500 in `{colors.ink-muted}`, the tab "Ship with PostHog" 342px wide by 40px tall in `{colors.accent-blue}`, and a 486px-tall navigation list headed by Home, Self-driving product, Context warehouse, Pricing and Docs. How the desktop icon columns and the window collapse at that width is not documented in the sources opened and not described further.

## Iteration Guide

1. Set the canvas to `{colors.canvas}` and put content in `{colors.surface-card}` panels with a hairline and the large soft shadow.
2. Use amber `{colors.primary}` for the main button, with the darker border, 8px radius and 18px/500 text.
3. Reserve `{colors.brand-red}` for a frame, an active tab or a small accent.
4. Highlight key words with `{colors.accent-blue}` text over `{colors.accent-blue-bg}`.
5. Before adding a color, check it against the brand assets page and measure it on the live page.
6. Do not introduce gradients or extra typefaces.
