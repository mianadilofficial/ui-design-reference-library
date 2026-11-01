---
version: alpha
name: NewsKit
category: "Design Systems"
description: "NewsKit is News UK's open-source design system; its docs site uses Poppins 700 headings (64px/72px hero) with DM Sans body, a cobalt #3358cc action color (#254cac hover) on white, a blue-grey ink #2e3f54, pale #ecf1ff and #f0f1f3 surfaces, 8px-radius buttons, and 20rem pill controls."

colors:
  canvas: "#ffffff"
  ink: "#2e3f54"
  primary: "#3358cc"
  on-primary: "#ffffff"
  surface-blue-tint: "#ecf1ff"
  ink-muted: "#5a6a79"
  ink-on-primary-soft: "#ffffffcc"
  primary-hover: "#254cac"
  primary-deep: "#14328d"
  info-teal: "#017582"
  ink-strong: "#09111c"
  surface-grey: "#f0f1f3"
typography:
  display:
    fontFamily: Poppins, sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 72px
  display-mobile:
    fontFamily: Poppins, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 45px
  heading:
    fontFamily: Poppins, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Poppins, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  nav:
    fontFamily: Poppins, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  button-secondary:
    fontFamily: Poppins, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
  input:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 24px
  xl: 320px
  pill: 9999px
spacing:
  s1: 0.5px
  s2: 3px
  s3: 4px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 16px 40px
    height: 41px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 8px
    height: 38px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    padding: 20px 16px
    boxShadow: rgba(0, 0, 0, 0.08) 0px 8px 16px 0px
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.primary}"
    padding: 48px 0px 24px
---

# NewsKit

## Overview

NewsKit describes itself as "an open source design system built by News UK, for everyone." The captured page is its documentation site, https://www.newskit.co.uk, whose navigation reads About, Guides, Theme, Components and Patterns, with a Search button (with a keyboard shortcut chip), a "View GitHub" outline button and a light/dark toggle. The footer attributes it to News Corp UK & Ireland Limited, and the home page announces NewsKit v10.0.0.

The hero is a pale grey-to-lavender gradient field. On the left, the headline "Say hello to NewsKit" in large bold Poppins, a one-sentence description, and two buttons ("Start designing" filled blue, "Start developing" outlined blue). On the right, an illustration of UI components (a select with a menu, checkboxes labelled Design, Code and Guidance, a speed menu, a toggle, a slider, a tooltip, a text-field card, a round icon button and a blue Button) over a faint construction grid and a blue wave shape. Below that comes a full-width rounded blue "Latest blog" banner with a large wave graphic; an "Explore" row with three flat illustrated tiles (Theme, Components, Patterns) on a pale blue background; a pale blue "Latest release" panel with a green-teal "Latest release" tag, "NewsKit v10.0.0" and a planet illustration; and a deep-blue "Contribute" panel. Voice: short, friendly and instructional ("Say hello", "Start designing", "Join the community and help grow NewsKit for everyone.").

## Colors

All hexes below are measured on the live page and also appear in the official theme file https://github.com/newscorp-ghfb/newskit/blob/main/src/theme/foundations/colors.ts, which I opened. The primary is `#3358cc` (blue060 in that file), used for the filled buttons, links, the active nav underline and the blue banners; the hover shade is `#254cac` (blue070). A deeper blue, `#14328d`, fills the Contribute panel on the page. Ink on white is `#2e3f54` (darkBlue080 in the theme file), secondary text is `#5a6a79` (darkBlue060), and the strongest dark text on cards is `#09111c` (darkBlue100). Surfaces are white `#ffffff`, a pale blue `#ecf1ff` (blue010) for illustration tiles and release panels, and a cool grey `#f0f1f3` (darkBlue010) for the footer and filter-like areas. Text on the blue banners is white at 80% (`#ffffffcc`). A teal `#017582` (teal060) fills the small "Latest release" tag.

The theme file also publishes full ten-step ramps for blue, teal, red, green, amber, neutral and purple, semantic ink tokens (inkBase, inkSubtle, inkBrand010 and others, mapped to ramp values via `{{colors.…}}` references) and social brand colors. The frontmatter keeps only the colors measured on the page.

## Typography

The theme's `fonts.ts` declares three families: `fontFamily010` "DM Sans", sans-serif; `fontFamily020` "Bitter", serif; `fontFamily030` "Poppins", sans-serif, along with a 16-step font-size scale from 12px to 80px, weights 400, 500, 600 and 700, and letter-spacing steps from -0.5px to 0.5px. The page loads DM Sans (400, 500), Poppins (500, 600, 700) and DM Mono (500). Measured styles: hero h1 in Poppins 700 at 64px with a 72px line height (40px on 45px at a 390px viewport); section heading 32px/36px, Poppins 700; body in DM Sans 16px/24px at weight 400; buttons in Poppins 600 at 14px/21px; navigation in Poppins 500 at 14px/21px; small buttons 12px/18px weight 600; inputs in DM Sans 14px/21px. Geometric Poppins gives headings a friendly, rounded tone while DM Sans keeps long text neutral.

## Layout

Breakpoints from the theme file: xs 0, sm 480, md 768, lg 1024 and xl 1440. The docs layout is a sticky 80px header (the page's `--page-offset` is 80px), a left sidebar of component categories on component pages (Actions & Inputs, Feedback & Status, and more) and a main content column with large illustration blocks. The home page is a centered column with full-width rounded bands. Measured spacing values include 4, 8, 12, 16, 20, 24, 32 and 40px.

## Elevation & Depth

The theme file defines six shadows, all using rgba(10,10,10,0.08): shadow010 `0 0 2px 0`, shadow020 `0 2px 4px 0`, shadow030 `0 4px 8px 0`, shadow040 `0 8px 16px 0`, shadow050 `0 16px 24px 0`, shadow060 `0 20px 32px 0`. The measured card on the page uses `rgba(0,0,0,0.08) 0px 8px 16px 0px`, consistent with shadow040. Otherwise depth comes from flat tinted panels and illustration layering, not heavy shadow.

## Shapes

The theme's borders file defines `borderRadiusPill` as 20rem, `borderRadiusCircle` as 50% and a rounded ramp mapped to sizing tokens. Measured radii on the page are 4px, 8px, 12px, 24px, 320px (20rem, pills such as Search and View GitHub) and 50% for circular icon buttons. Filled buttons use 8px; large content bands use 12px and 24px corners.

## Components

**Primary button (solid).** `#3358cc` fill, white Poppins 600 14px label, padding 12px 16px, 48px tall, 8px radius; hover `#254cac`.

**Outline button.** Transparent fill with a `#3358cc` border and label, same 8px radius ("Start developing").

**Small button.** 12px label, 41px high, padding 16px 40px.

**Pill buttons in the header.** Search and View GitHub use the 320px pill radius with a thin outline; the theme toggle is a circle.

**Navigation.** Poppins 500 14px, `#5a6a79` text that turns `#3358cc` on hover (measured), with a blue underline under the active section.

**Text input.** DM Sans 14px, 8px padding, 38px high, `#2e3f54` text.

**Card.** White surface, `#09111c` text, 8px radius, 20px 16px padding, 0 8px 16px shadow.

**Footer.** `#f0f1f3` background, 48px top and 24px bottom padding.

**Component documentation pages.** The Button page (captured separately) shows a "Supported" status tag in teal, an "Introduced v0.2.0" field, "View code", "View Storybook" and "View Design" pill buttons, and an Anatomy section with a numbered diagram and table.

## Design System Architecture

NewsKit is a React component library published to npm as `newskit` from https://github.com/newscorp-ghfb/newskit, whose README says the repository also builds the documentation site and Storybook (https://storybook.newskit.co.uk). Its theme is split into foundation files (`src/theme/foundations/`: borders, breakpoints, colors, fonts, motions, outlines, overlays, shadows, sizing) that feed component presets; the repo also holds brand themes for News UK properties (for example sun-theme, tnl-theme, wsj-theme, virgin-theme and market-watch-theme under `src/theme-checker/themes/`). The docs site's visible colors and fonts match the foundation values quoted above, so the site does use the system. The site also loads DocSearch (the `--docsearch-*` variables), whose own purple `#5468ff` is a third-party widget color and not part of NewsKit.

## Do's and Don'ts

Do use `#3358cc` for primary actions and `#254cac` for hover. Do set headings in Poppins 700 and body in DM Sans. Do pair every filled button with an outline sibling for secondary actions. Do use 8px radii for buttons and pills (20rem) only for header utility controls. Do tint panels with `#ecf1ff` or `#f0f1f3`.

Don't use the DocSearch purple. Don't introduce shadows stronger than shadow060. Don't use DM Mono for UI copy; it is loaded for code. Don't set long text in Poppins.

## Responsive Behavior

The theme breakpoints are 0, 480, 768, 1024 and 1440px. At the 390px capture the hero h1 drops from 64px to 40px (45px line height). Header navigation, search and GitHub controls are laid out for desktop at 1280px; their mobile behavior was not measured and is not described.

## Iteration Guide

Start from white and `#2e3f54` text; use `#3358cc` for exactly the actions and links. For new panels choose `#ecf1ff` (informational), `#f0f1f3` (neutral) or `#14328d` (emphasis, with white text). Take new sizes from the 12 to 80px scale in fonts.ts and new shadows from the six theme shadows. When a state is needed, derive it from the published ramps (for example blue070 for hover) rather than inventing a shade, and cite the theme file.
