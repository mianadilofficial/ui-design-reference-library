---
version: alpha
name: monday.com
category: "Design Systems"
description: "monday.com's marketing homepage runs on Poppins in regular weight with tight tracking (56px headline at -2.24px), black ink on white and #f3f4f5, a single periwinkle-violet #6161ff for 160px-radius pill buttons that darken to #452aea, warm #f2ede9 panels with 3D agent illustrations, and product-board mockups full of green, orange and pink status cells."
colors:
  canvas: "#ffffff"
  page-largest: "#f3f4f5"
  ink: "#000000"
  primary: "#6161ff"
  on-primary: "#ffffff"
  surface-warm: "#f2ede9"
  ink-muted: "#7c7b7b"
  ink-secondary: "#585965"
  ink-faint: "#c3c6d4"
  ink-nav: "#535768"
  link: "#676879"
  primary-hover: "#452aea"
  primary-tint: "#d9d7ff"
  accent-pink: "#fe81e4"
  status-green: "#00c875"
  status-orange: "#fdab3d"
typography:
  display:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 67.2px
    letterSpacing: "-2.24px"
  display-mobile:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 33.25px
    fontWeight: 400
    lineHeight: 39.9px
    letterSpacing: "-1.33px"
  subheading:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36.4px
  body:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  link:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 14px
  xl: 16px
  2xl: 24px
  3xl: 28px
  4xl: 32px
  cta: 160px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.cta}"
    padding: 14px 32px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 8px 24px
  chip-selected:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.primary}"
    rounded: "{rounded.4xl}"
    padding: 8px 12px
    height: 32px
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 24px
---

## Overview

The monday.com homepage in the capture is a bright, product-forward SaaS page about "The AI Workspace for People & Agents". The hero is left-aligned: the headline "People and agents working as one team" in 56px Poppins at regular weight, the subline "The AI workspace where people and agents drive business results together", a row of seven rounded chips (Marketing, Operations, IT, Product, Sales, HR, PMO) with the first one selected, a purple "Get Started →" pill, and the reassurance line "No credit card needed [U+2726] Unlimited time on Free plan". On the right sits a stack of three portrait cards of AI-agent characters, the middle one a bearded man in a pink jacket with a prompt field.

Below the hero a "Trusted by over 60% of the Fortune 500" logo strip (Canva, Coca-Cola, Vistra, Universal Music Group, Holt Cat, Lionsgate, Carrefour) leads into a large centred heading, "Get more done with agents", a segmented tab bar (Marketing, IT, Product, Sales, HR, PMO, Create any agent), and a screenshot of a "Global marketing event" board with green, orange and pink status cells. A second centred heading, "An agent for every use case", opens a warm beige panel with a list of agent categories as outlined pills and a carousel of colourful 3D character illustrations.

**Key Characteristics:**
- Poppins at regular weight for display text, with strongly negative tracking, rather than the bold weights typical of SaaS.
- One brand action colour, `{colors.primary}` (#6161ff), used on every Get Started pill, selected chips and emphasised words ("Done.").
- Full-pill 160px-radius CTAs with a trailing arrow icon.
- Real product UI (status-coloured boards) and playful 3D agent avatars as the imagery.
- Alternating neutral backgrounds: white, `{colors.page-largest}` (#f3f4f5) and the warm `{colors.surface-warm}` (#f2ede9).

## Colors

`{colors.canvas}` (#ffffff) and `{colors.page-largest}` (#f3f4f5) are the two main backgrounds; the second is the largest area and is used for the hero and section bands. `{colors.surface-warm}` (#f2ede9) fills the agent-showcase panel. Text is pure `{colors.ink}` (#000000) for headings, `{colors.ink-muted}` (#7c7b7b) for secondary copy and the fine print, `{colors.ink-secondary}` (#585965) for subheads, `{colors.ink-nav}` (#535768) for navigation and `{colors.link}` (#676879) for small links such as "Pricing" and "Log in". `{colors.ink-faint}` (#c3c6d4) shows on placeholder-like text.

The accent system comes from `{colors.primary}`, its hover `{colors.primary-hover}` (#452aea, measured when a Get Started button is hovered), the pale `{colors.primary-tint}` (#d9d7ff) behind the selected chip, and a pink `{colors.accent-pink}` (#fe81e4) that appears as a text colour and in the gradient CTA glow. The site's variables also list status and product colours such as `{colors.status-green}` (#00c875, named `--primary-green`) and `{colors.status-orange}` (#fdab3d); they colour the board mockups, not the page chrome. Other measured section backgrounds include #f4cdff, #ded4fc, #fff0c8, #4b00d7 and #24c4e6, which belong to individual agent cards and product sections.

## Typography

Poppins, with Arial as fallback, is the single family; weights 300, 400, 500, 600 and 700 are loaded. Poppins is loaded by the site itself, so no substitute is required.

- **Display** (`{typography.display}`): 56px / 67.2px, weight 400, letter-spacing -2.24px (-4%); on a 390px viewport 33.25px / 39.9px with -1.33px.
- **Subheading** (`{typography.subheading}`): 28px / 36.4px, weight 400, used for the sub-section headings beside the board screenshots ("Posts, campaigns and ads. Done.").
- **Body** (`{typography.body}`): 16px / 25.6px, weight 400, also the button label size.
- **Link** (`{typography.link}`): 14px / 20px, weight 400, used for header links.

The pattern is light, large and tightly tracked headings with ordinary body text; emphasis is made with colour (`{colors.primary}` on a single word) rather than weight.

## Layout

A wide centred container with about 30px side margins holds everything. The header is a single row: the monday.com logo at left, five links (AI platform, Solutions, Resources, Enterprise), then Pricing, Log in, a "Contact sales" outline pill and a purple "Get Started" pill at right. The hero is a two-column split, text left and card stack right. Later sections centre a large heading above a tab bar and a wide product screenshot, with text and button alternating left of the image. The agent panel is a rounded full-width container with a left text column and a horizontal carousel. Spacing steps (`{spacing.s5}` 8px, `{spacing.s7}` 12px, `{spacing.s9}` 16px, `{spacing.s10}` 20px) are tight within components, while vertical gaps between sections are very large.

## Elevation & Depth

Depth is soft and sparse. Cards and the product screenshots sit on faint blurred shadows over the grey and white bands, the hero's centre portrait card is lifted with a white border and a larger shadow, and the primary CTA carries a radial gradient glow in orange and pink behind the purple fill (measured as `radial-gradient(circle closest-side, rgba(254, 155, 11, 0.85) 0%, rgba(255, 129, 228, 0.85) 50%, rgba(97, 97, 255, 0) 100%)` on one Get Started instance). Most buttons and chips are flat.

## Shapes

The shape language is round. `{rounded.cta}` (160px) makes the Get Started pills, `{rounded.pill}` (9999px) the link-style pills, `{rounded.4xl}` (32px) the chips, `{rounded.3xl}` (28px) and `{rounded.2xl}` (24px) the large panels, `{rounded.xl}` (16px) and `{rounded.lg}` (14px) cards and screenshots, `{rounded.sm}` (8px) standard cards, and `{rounded.xs}` (4px) small controls. The site's variables include `--radius--16: 1rem`.

## Components

**Primary button.** `{components.button-primary}`: `{colors.primary}` fill, white 16px label, 14px 32px padding, 50px tall, 160px radius, trailing arrow glyph; the hover is `{components.button-primary-hover}`. A smaller header version measures 42px tall with 12px 16px padding.

**Outline / link pill.** `{components.link}`: white fill, `{colors.link}` 14px text, 8px 24px padding, pill radius, with a purple outline for "Contact sales".

**Chips and tabs.** `{components.chip-selected}`: `{colors.primary-tint}` fill, `{colors.primary}` text, check icon, 32px tall; unselected chips are pale grey with dark text. The tab bar is a white pill-shaped track around the same chips.

**Navigation.** `{components.nav}` and `{components.nav-link}`: black 16px links with small chevrons on dropdown items.

**Card.** `{components.card}`: `{colors.page-largest}` fill, `{rounded.sm}`, 24px padding.

## Design System Architecture

monday.com has a public design system, [Vibe](https://github.com/mondaycom/vibe), whose site vibe.monday.com carries the meta description "Vibe design system by monday.com" and whose GitHub repository is described as "Official monday.com UI resources for application development in React.js". This was verified, but the marketing homepage measured here does not use it. Vibe's published light theme in `packages/style/src/files/tokens.json` has primary `#0073ea`, hover `#0060b9`, `secondary-text-color` `#676879` and `link-color` `#1f76c2`, and Vibe's Storybook Button measured as a 4px-radius, 40px-tall, #0073ea button in Figtree; the homepage instead uses #6161ff, 160px pills and Poppins. Only the neutral #676879 coincides. Vibe is therefore the system of the product application, not of this page, and nothing in this file is taken from it.

The homepage itself is a Webflow site: the page markup carries `data-wf-site` and `data-wf-domain="websitepages.monday.com"` attributes, and its CSS variables are named from Webflow libraries and campaign sets, such as `--flowui-component-library--primary-base`, `--elements-webflow-library--neutral--200`, `--crm--surface`, `--dev--primary`, `--_agents---agent-02` and `--radius--16`, with colour names like `--digital-purple` (#e271ff), `--bright-purple` (#9450fd), `--intelligent-blue` (#97aeff) and `--dark-grey` (#323338). That is the de-facto system: variable families per product line (CRM, dev, service) and per agent card, over a shared neutral and type base.

## Do's and Don'ts

### Do
- Use `{colors.primary}` for the single main action per section and give it the full 160px pill with an arrow.
- Set headings in Poppins 400 with the negative tracking, and highlight one word in primary.
- Alternate white, `{colors.page-largest}` and `{colors.surface-warm}` bands.
- Show real product boards with status colours and friendly 3D agent characters.
- Pair a short promise line with a reassuring microcopy line below the CTA.

### Don't
- Don't use bold display weights; the headline voice is light.
- Don't mix status colours into page chrome; keep them for board mockups.
- Don't use square or 4px buttons for CTAs.
- Don't apply Vibe's #0073ea blue to marketing pages; this page's action colour is #6161ff.
- Don't set body copy in pure black on `{colors.surface-warm}`; use the greys.

## Responsive Behavior

The display headline scales from 56px (line height 67.2px, tracking -2.24px) at desktop to 33.25px (39.9px, -1.33px) at a 390px viewport, keeping the same proportion. Only the desktop capture and the 390px type measurements are recorded here, so the layout collapse and exact breakpoints are not documented. CTA buttons stay at 42px or taller with 160px radius, keeping touch targets comfortable.

## Iteration Guide

1. Change one component at a time and refer to tokens by name (`{colors.primary}`, `{rounded.cta}`, `{typography.display}`).
2. Start with a white or `{colors.page-largest}` section, black Poppins display text and one primary pill.
3. Add hover as `{colors.primary-hover}` and keep the arrow icon.
4. Use `{colors.primary-tint}` chips for filters and tabs.
5. Re-run `node web/scripts/verify-designs.mjs --slug=monday` after each edit.
