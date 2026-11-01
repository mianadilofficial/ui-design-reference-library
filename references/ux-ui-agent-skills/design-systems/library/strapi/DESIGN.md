---
version: alpha
name: Strapi
category: "Design Systems"
description: "Strapi's marketing site and Design System — a dark #030712 hero over white sections, Poppins throughout (43px semibold display, 15px body), indigo-violet #4945ff action buttons with 8px radius on the site and 4px radius, 36px tall buttons in the system-font Design System, deep-indigo ink #292875 and a lavender #f6f6ff surface."
colors:
  canvas: "#ffffff"
  page-largest: "#030712"
  ink: "#292875"
  primary: "#4945ff"
  on-primary: "#ffffff"
  surface-lavender: "#f6f6ff"
  ink-muted: "#666687"
  ink-slate: "#99a1af"
  banner-link-yellow: "#fee685"
  hairline: "#e9e9ff"
  button-secondary-bg: "#32324d"
  button-secondary-border: "#7f69ff"
  card-border: "#dcdce4"
  banner-purple: "#9739de"
  primary-pressed: "#271fe0"
  primary-tint: "#f0f0ff"
  neutral-150: "#eaeaef"
  success: "#328048"
  success-deep: "#2f6846"
typography:
  display:
    fontFamily: Poppins
    fontSize: 43px
    fontWeight: 600
    lineHeight: 53.75px
    letterSpacing: "-1.075px"
  display-mobile:
    fontFamily: Poppins
    fontSize: 33px
    fontWeight: 600
    lineHeight: 41.25px
    letterSpacing: "-0.825px"
  heading:
    fontFamily: Poppins
    fontSize: 43px
    fontWeight: 700
    lineHeight: 59px
    letterSpacing: "-1.075px"
  subheading:
    fontFamily: Poppins
    fontSize: 21px
    fontWeight: 600
    lineHeight: 31px
  body:
    fontFamily: Poppins
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24.375px
  button:
    fontFamily: Poppins
    fontSize: 15px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: Poppins
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Poppins
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
  ds-button:
    fontFamily: -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20.02px
  ds-input:
    fontFamily: -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 4px
  md: 8px
  lg: 10px
  xl: 16px
  pill: 9999px
spacing:
  s3: 4px
  s5: 8px
  s6: 10px
  s7: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 24px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    height: 80px
    borderColor: "{colors.button-secondary-border}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 0px 10px 0px
  ds-button:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.ds-button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 36px
    borderColor: "{colors.primary}"
  ds-text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.button-secondary-bg}"
    typography: "{typography.ds-input}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 38px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.lg}"
    padding: 32px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(41, 40, 117, 0.08) 0px 4px 12px 0px
  footer:
    textColor: "{colors.ink}"
---

## Overview

strapi.io is a developer-tool marketing site that opens dark and turns light. The capture starts with a purple announcement bar (#9739de) reading "Strapi MCP is now Generally Available - let your agents manage your Strapi content" with a yellow underlined link, then a near-black navigation bar with the Strapi wordmark (a violet rounded-square mark), menu items with chevrons (Product, Solutions, Developers, Docs, Pricing, Cloud), a search icon, a GitHub star count, a white "Contact Sales" button and an indigo "Get Started" button.

The hero is a rounded, hairline-bordered panel split into a left column and a right grid. At left: the white 43px headline "Open-Source Content Framework for AI-Powered Websites" (the last word is boxed in a violet focus-style outline), an `npx create-strapi-app@latest` command in a glowing indigo field with a copy icon, and a "Try Live Strapi 5 & Next.js 16 Demo" link. At right: a one-line promise and a 3 x 2 cell grid of customer logos (Abbott, Toyota, PostHog, n8n, Cisco, Tesco). Under that sits a tabbed product view (Create APIs, Content Management, Customization, Hosting) showing a real screenshot of the Content-Type Builder with an AI chat panel, and a floating "Ask AI" button.

Below the fold the page flips to white: a small violet uppercase eyebrow ("MORE THAN A CMS"), a centred 43px bold headline in deep indigo ("The content framework you control end-to-end"), a grey subtitle, and three short text columns (Own the code, Extend like a framework, Host it your way). Next a lavender (#f6f6ff) rounded container begins "Build APIs fast".

The voice is plain developer English: short claims, real commands, real product UI. Screenshots do the persuading, and the visual personality is a calm indigo-violet on dark with generous spacing.

## Colors

- **Primary #4945ff** is the fill of the "Get Started" CTA and the only saturated action colour; it is also the Design System's primary600 (`buttonPrimary600`). **primary-pressed #271fe0** is the DS's primary700 (measured as text and borders in the button variants story), and **primary-tint #f0f0ff** is primary100.
- **Ink #292875** is the dark indigo used for headlines on white (the most-read text colour). **Ink-muted #666687** is the grey-violet body text (DS neutral600). **Ink-slate #99a1af** is subdued text on dark sections.
- **Canvas #ffffff**, **surface-lavender #f6f6ff** (light container panels) and **page-largest #030712** (the largest background area, the dark hero and nav) frame the page. **Hairline #e9e9ff** is the panel and divider border on light sections.
- **Button-secondary-bg #32324d** is the fill of the "Ask AI" floating button (white label, violet border **#7f69ff**, soft 10px shadow). The same hex is the DS's neutral800 and the text colour of its inputs.
- **Card-border #dcdce4** (DS neutral200) outlines white cards; **neutral-150 #eaeaef** is a divider tone.
- **Banner-purple #9739de** fills the announcement bar and **banner-link-yellow #fee685** is its link colour.
- **Success #328048 and success-deep #2f6846** (DS success600 and success700) appear in status variants.

The Design System publishes its full light palette in code: neutral0 #ffffff through neutral1000 #181826 (12 greys), and primary, secondary, success, warning, danger and alternative accents each with 100, 200, 500, 600 and 700 tones, for example primary100 #f0f0ff, primary200 #d9d8ff, primary500 #7b79ff, primary600 #4945ff, primary700 #271fe0 (https://raw.githubusercontent.com/strapi/design-system/main/packages/design-system/src/themes/lightTheme/light-colors.ts). The docs say light mode uses "12 tones on our grey scale (from neutral 0 to neutral 1000) and 5 tones on all our accent colors" with a logical gap between each for contrast, and a dark mode that reuses the same keys with an almost reversed scale (https://github.com/strapi/design-system/blob/main/docs/stories/01-foundations/color.mdx).

## Typography

The marketing site is set in Poppins at weights 400, 500, 600 and 700 (the four weights loaded). The Design System takes a different route: "Strapi Design System uses system fonts to provide the best experience on every Operating System", with a system stack beginning `-apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif`, according to its typography page and as measured on its Button and TextInput stories (https://github.com/strapi/design-system/blob/main/docs/stories/01-foundations/typography.mdx).

| Role | Family | Size / line | Weight | Tracking |
|---|---|---|---|---|
| display (hero) | Poppins | 43px / 53.75px | 600 | -1.075px |
| display-mobile | Poppins | 33px / 41.25px | 600 | -0.825px |
| heading (section) | Poppins | 43px / 59px | 700 | -1.075px |
| subheading | Poppins | 21px / 31px | 600 | none |
| nav | Poppins | 16px / 24px | 400 | none |
| button | Poppins | 15px / 24px | 500 | none |
| body | Poppins | 15px / 24.375px | 400 | none |
| button-secondary (Ask AI) | Poppins | 18px / 28.8px | 400 | none |
| ds-button | system stack | 14px / 20.02px | 600 | none |
| ds-input | system stack | 14px / 22px | 400 | none |

Headline tracking is -2.5% of the font size. In the DS source, font sizes are 1.1, 1.2, 1.4, 1.6, 1.8, 2, 2.8 and 3.2rem, line heights run from 1.14 to 1.5, and weights are regular 400, semiBold 500 and bold 600 (https://raw.githubusercontent.com/strapi/design-system/main/packages/design-system/src/themes/common-theme.ts). The site's 15px body matches a root variable named `--text-strapi-body-2` of .9375rem.

**Font substitutes.** Poppins is an open Google font and is usable directly; no substitute is needed.

## Layout

The hero and later sections sit in a wide container inside a rounded, bordered outer panel; interior panels are split with hairline dividers into a two-column hero with a grid of logo cells. Light sections centre their headline and then use a three-column text layout with generous vertical space. Tabs run full width under the hero. The Design System's `spaces` scale is 0, 4, 8, 12, 16, 20, 24, 32, 40, 48, 56 and 64px, and its breakpoints are small 520px, medium 768px and large 1080px (https://raw.githubusercontent.com/strapi/design-system/main/packages/design-system/src/themes/common-theme.ts). The marketing site's measured spacing values (4, 8, 10, 12, 16, 20px and 32px card padding) all fit inside that scale except 10px.

## Elevation & Depth

The site is mostly flat and relies on bordered panels and colour layers. Light cards carry a soft indigo shadow, `rgba(41, 40, 117, 0.08) 0 4px 12px`, plus a #dcdce4 border; the "Ask AI" button has `rgba(0, 0, 0, 0.2) 0 0 10px`. The dark hero panel is outlined with a thin border, and the command field has a glowing indigo fill. The stylesheet shows focus rings of `0 0 0 3px #bbbbff80`. In the Design System, elevation covers shadows for depth and a z-index scale (navigation 100, overlay 300, modal 310, dialog 320, popover 500, notification 700, tooltip 1000), with light-theme shadows filterShadow `0px 1px 4px rgba(33, 33, 52, 0.1)`, popupShadow `0px 2px 15px rgba(33, 33, 52, 0.1)` and a focus shadow `0px 0px 6px rgba(76, 191, 255, 0.75)` (https://github.com/strapi/design-system/blob/main/docs/stories/01-foundations/elevation.mdx and the light-shadows.ts source).

## Shapes

Two radius systems coexist. The marketing site uses 8px on buttons ("Get Started", "Contact Sales", "Ask AI"), 10px on cards and 16px on the large hero panel and lavender containers; it also exposes radius variables like `--radius-strapi-sm`, `-lg` and `-xl`. The Design System has a single radius token, `borderRadius: '4px'`, and its measured button and input both show 4px. The marketing logo is a rounded square, and the "Websites" highlight in the hero headline is a small-radius outline.

## Components

**Primary button (site).** Fill #4945ff, white Poppins Medium 15px label, 42px tall, 8px 24px padding, 8px radius; the hover state lowers the fill to 90% opacity. A white sibling ("Contact Sales") has a light border and deep-indigo text. A dark sibling ("Ask AI") is #32324d with a violet border.

**Design System button.** Measured on the Button "base" story: fill #4945ff, 1px #4945ff border, white 14px semibold label, 36px tall (the large story is 40px and the small is 32px with 12px text), 4px radius, 16px horizontal padding.

**Text input (Design System).** 38px tall, white, 14px text in #32324d, 8px 16px padding, 4px radius.

**Card.** White, 10px radius, 32px padding, #dcdce4 border, indigo-tinted soft shadow; headings in #292875 and text in #666687.

**Command field.** A glowing indigo gradient field with monospace text and a copy icon, used as the main developer CTA.

**Tabs.** Full-width labels (Create APIs, Content Management, Customization, Hosting) with an active label in white and the rest in grey, a thin underline beneath the active one.

The Design System catalogue lists Accordion, Alert, Avatar, Badge, Box, Breadcrumbs, Button, Card, CarouselInput, Dialog, Divider, EmptyStateLayout, Field, Flex, Grid, IconButton, Link, LinkButton, Loader, Modal, Pagination, Popover, ProgressBar, Searchbar, SimpleMenu, Status, Switch, Table, Tabs, Tag, TextButton and Tooltip, plus inputs (Checkbox, Combobox, DatePicker, JSONInput, NumberInput, Radio, Select, TextInput, Textarea, TimePicker, Toggle) (published in the Storybook index at https://design-system.strapi.io/index.json).

## Design System Architecture

The Strapi Design System lives at https://design-system.strapi.io (a Storybook, which I opened) and in the public repository https://github.com/strapi/design-system. The README describes it as providing "guidelines and tools to help anyone make Strapi's contributions more cohesive and to build plugins more efficiently"; the Welcome page names two approaches, Consistency and Composability (APIs "designed to be flexible and composable"). Installation is `@strapi/design-system` plus `@strapi/icons`, React, and styled-components; the app is wrapped in a `DesignSystemProvider` that takes a theme (`lightTheme`) and a locale.

The Storybook organises content into Getting Started (Welcome, Contributing, Changelogs for Design System, Icons and Primitives, a V1 to V2 migration guide), Foundations (Accessibility, Color, Elevation, Grid, Icons, Typography, Responsive), Utilities, Primitives, Inputs and Components. Themes are plain objects: a `commonTheme` (spaces, breakpoints, border radius, font sizes, weights, z-indices, motion), `lightTheme` and `darkTheme` colour and shadow token objects, with colour keys such as neutral0 to neutral1000 and primary100 to primary700. Type levels are named after the Greek alphabet and sized in rem, per the typography page.

I measured the Button base and all-variants stories, TextInput base, Card base and Badge base with the extractor (slugs strapi--button, strapi--buttonvar, strapi--input, strapi--card and strapi--badge). The marketing site is a separate, Tailwind-based layer: its stylesheet defines `--color-strapi-*` palettes (blue, cyan, gray, green, neutral, purple, red, yellow) and `--radius-strapi-*` and `--text-strapi-*` variables. I did not verify how those variables relate to the DS tokens, and the two layers differ visibly (Poppins vs system fonts, 8px vs 4px radii).

## Do's and Don'ts

Do
- Use #4945ff for the single main action in a view; keep a white or dark secondary beside it.
- Open pages dark (#030712) and move to white sections with a deep-indigo (#292875) headline.
- Put real product UI and real commands in the hero.
- In product UI, use the Design System's 4px radii and system fonts; on marketing, 8px radii and Poppins.
- Pair text and background tones with the DS's logical gaps for contrast.

Don't
- Don't mix Poppins into product UI or system fonts into marketing headlines.
- Don't use pure black text on white; use #292875 for headings and #666687 for body.
- Don't use more than one saturated accent in a section; the purple banner is the exception.
- Don't stack heavy shadows; the shadow tokens are subtle (8 to 10% opacity).
- Don't round DS controls beyond the 4px token.

## Responsive Behavior

The hero headline drops from 43px to 33px on a 41.25px line at the 390px mobile measurement, with -0.825px tracking. The Design System defines breakpoints at 520px (small), 768px (medium) and 1080px (large), and has a Responsive foundations page. I did not capture a phone layout beyond the headline measurement, so how the hero panel reflows is not documented here. The announcement bar has a close button so it can be dismissed, and the page has a persistent top bar height variable (`--banner-h` of 3.25rem).

## Iteration Guide

1. Set the tokens: #030712, #ffffff, #4945ff, #292875, #666687.
2. Build the nav: dark bar, white "Contact Sales", indigo "Get Started" (42px, 8px radius).
3. Make the hero a rounded, bordered panel with a 43px white headline, a command field and a logo grid.
4. Add a product screenshot with tabs below.
5. Flip to white sections: violet eyebrow, 43px bold #292875 headline, 15px #666687 body in three columns.
6. For product UI use the DS: 36px buttons, 38px inputs, 4px radii, system fonts.
7. Run `node web/scripts/verify-designs.mjs --slug=strapi` after edits.
