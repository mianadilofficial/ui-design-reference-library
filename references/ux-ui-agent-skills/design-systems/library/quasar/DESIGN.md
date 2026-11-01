---
version: alpha
name: Quasar
category: "Frontend Frameworks"
description: "Quasar is a Vue.js framework, so its design language is two layers - a Material-derived component library (Roboto, 3px button radius, 4px generic radius, uppercase 500-weight buttons, brand primary #1976d2) and a docs site that dresses it in a deep-space navy canvas (#080e1a) with Montserrat headings, electric cyan #00b4ff titles and a single orange #ea5e13 call to action on white cards."

colors:
  canvas: "#ffffff"
  page-body: "#080e1a"
  ink: "#1d1d1d"
  primary: "#ea5e13"
  on-primary: "#ffffff"
  brand-secondary: "#475d66"
  ink-soft: "#cbcbcb"
  ink-muted: "#616161"
  brand-blue: "#00b4ff"
  quasar-blue: "#1976d2"
  hairline: "#cfd9de"
  nav-bg: "#050a14"
  nav-text: "#929397"
  accent-purple: "#9c27b0"
  secondary-teal: "#26a69a"
  positive: "#21ba45"
  negative: "#c10015"
  info: "#31ccec"
  warning: "#f2c037"
  dark-page: "#121212"
typography:
  display:
    fontFamily: Montserrat, Roboto, -apple-system, Avenir, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 30px
    letterSpacing: 3.75px
  heading:
    fontFamily: Montserrat, Roboto, -apple-system, Avenir, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.13328px"
    textTransform: capitalize
  card-title:
    fontFamily: Montserrat, Roboto, -apple-system, Avenir, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 50px
    letterSpacing: 0.4px
    textTransform: uppercase
  nav:
    fontFamily: Montserrat, Roboto, -apple-system, Avenir, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button-secondary:
    fontFamily: Montserrat, Roboto, -apple-system, Avenir, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 24.01px
    letterSpacing: 1px
  qbtn:
    fontFamily: Roboto, -apple-system, Avenir, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24.01px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 4px
  md: 14px
  rounded-btn: 28px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 16px
    height: 59px
    boxShadow: rgba(0, 180, 255, 0.28) 0px 6px 6px 0px
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 8px 8px 8px 16px
    height: 42px
    borderColor: "{colors.brand-blue}"
  qbtn-default:
    typography: "{typography.qbtn}"
    rounded: "{rounded.xs}"
    padding: 4px 16px
    height: 36px
  link:
    textColor: "{colors.brand-blue}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 1px 2px
    height: 26px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 32px 24px
    boxShadow: rgba(0, 179, 255, 0.24) 0px 24px 24px 0px
---

## Overview

Quasar is an open-source Vue.js framework, and its visual identity has to be read in two layers. The first is the component library itself: Material-descended, Roboto-set, with a 3px button radius and a 4px generic radius. The second is the marketing and documentation site at quasar.dev, which wraps that library in a space theme. The full-page capture shows a near-black navy field (`#080e1a`, `{colors.page-body}`) scattered with tiny blue "star" dots, a ringed Quasar logo in cyan, and a tagline that reads "Beyond the framework" followed by "Enterprise-ready. AI-ready. The cross-platform Vue.js framework." The display text is set in Montserrat at weight 300 with very wide tracking (3.75px at 20px), so the headline feels like a mission patch rather than a product pitch.

Colour is rationed hard. The page is navy, titles are cyan (`#00b4ff`, `{colors.brand-blue}`), and exactly one hue is allowed to ask for action: orange `#ea5e13` (`{colors.primary}`), seen on the hero install command button ("pnpm create quasar@latest" with a copy icon) and as the outline and label colour of the card buttons. Four white cards sit on the navy field under the heading "Why should you choose Quasar?" - "All platforms, one codebase", "Accessible components", "Built for AI agents" and "Great documentation" - each with an orange line icon, cyan uppercase title, grey-dark centred copy and an outlined orange button. A diffuse cyan shadow under each card makes it glow against the dark.

The voice is confident and compact: noun-phrase headings, product facts ("More than 120 fast Vue.js components"), no exclamation marks. Density is low on the home page and high inside the docs, where the same palette carries long reference pages.

## Colors

Everything on the live site is expressed through CSS custom properties that Quasar itself defines, and the extraction reads them directly: `--q-primary #1976d2`, `--q-secondary #26a69a`, `--q-accent #9c27b0`, `--q-positive #21ba45`, `--q-negative #c10015`, `--q-info #31ccec`, `--q-warning #f2c037`, `--q-dark #1d1d1d` and `--q-dark-page #121212`. The documentation site additionally defines its own `--q-brand-primary #00b4ff`, `--q-brand-secondary #475d66` and `--q-brand-accent #ea5e13`. Those three are the site's skin; the first nine are the framework defaults, confirmed in Quasar's published Sass variables list (https://quasar.dev/style/sass-scss-variables).

- **Canvas and page body.** Cards and content panels are white (`{colors.canvas}`); the page behind them is `{colors.page-body}`, with the navigation drawn on the slightly deeper `{colors.nav-bg}` and its links in grey `{colors.nav-text}`.
- **Ink.** Dark text on white is `{colors.ink}` (`#1d1d1d`, which is also the framework's `$dark`). Secondary text on dark is `{colors.ink-soft}`; `{colors.ink-muted}` is the mid grey used for quiet labels.
- **Primary.** `{colors.primary}` is the docs site's brand accent and is the colour of every primary call to action, with `{colors.on-primary}` text on top. The framework's own `{colors.quasar-blue}` appears in the docs as the QBtn demo colour and the version chip.
- **Status colours.** `{colors.positive}`, `{colors.negative}`, `{colors.info}` and `{colors.warning}` are the framework's semantic set, plus `{colors.accent-purple}` and `{colors.secondary-teal}` as the remaining brand slots.
- **Hairline.** `{colors.hairline}` for borders on light surfaces.

## Typography

Two families share the page. Montserrat sets the home page: the display line, section headings, card titles, navigation and the orange buttons. Roboto, the framework default (`$typography-font-family` begins with 'Roboto' in the published Sass variables), sets component demos and body copy in the docs; the button demo page measures the QBtn label at 14px, weight 500, uppercase, line-height 24.01px. Both are open-source families available from Google Fonts, so no proprietary substitute is needed.

The home-page scale is short: `{typography.display}` (20px, weight 300, 3.75px tracking) for the tagline, `{typography.heading}` (16px, 700, capitalised) for small section labels such as "Our Platinum Sponsor", `{typography.card-title}` (24px, 700, uppercase, 0.4px tracking, 50px line-height) for card titles and the large section heading, and `{typography.nav}` (16px, 500) for navigation. Buttons use `{typography.button-secondary}` (14px, 700, 1px tracking) for outlined buttons. The generous letter-spacing on uppercase text is the signature: wide caps in Montserrat read as "technical" and are used everywhere except body copy.

## Layout

The home page is a single centred column. A two-tier header carries the logo, DOCS / COMPONENTS / SPONSORS links and a search field with a keyboard hint on top, and a secondary menu (Why Quasar?, Getting Started, Tools, Announcements, Video Tutorials, Roadmap, More) plus a version button below. Below the hero the four cards form a two-by-two grid, each card padded `32px 24px` and separated by gutters; the spacing scale in the frontmatter (`{spacing.s8}` 16px, `{spacing.s9}` 24px, `{spacing.s10}` 32px) is what the cards use. Quasar's own grid is a 12-column flex system, and the documentation lists its breakpoints as `--q-size-sm 600px`, `--q-size-md 1024px`, `--q-size-lg 1440px` and `--q-size-xl 1920px`, which the extraction also reads from the live page.

## Elevation & Depth

Depth comes from glow rather than grey shadow. Cards carry `rgba(0, 179, 255, 0.24) 0px 24px 24px 0px`, a cyan-tinted drop that is invisible on white and luminous against the navy; the orange button carries a lighter `rgba(0, 180, 255, 0.28) 0px 6px 6px 0px`. Dark surfaces get no elevation at all, only the colour step from `{colors.page-body}` to `{colors.nav-bg}`. In the framework proper, shadows are Material elevation levels from `$shadow-0` to `$shadow-24`, with dark-mode counterparts, per the Sass variables page; the docs' QBtn demos use the standard drop plus a glossy gradient overlay in one variant.

## Shapes

Shapes are nearly square. The primary and outlined buttons use `{rounded.xs}` (3px), cards use `{rounded.sm}` (4px), and a few chips and panels reach `{rounded.md}` (14px). The framework documents `$button-border-radius: 3px`, `$generic-border-radius: 4px` and `$button-rounded-border-radius: 28px`; the last is `{rounded.rounded-btn}`, used by the QBtn "rounded" prop, and `{rounded.pill}` covers round icon buttons (the button page measures 50% radius on icon-only circles). No illustration shapes are rounded; the icons are thin orange line art.

## Components

- **Primary button.** `{components.button-primary}`: orange fill, white Montserrat 16px 700 text, 16px padding, 59px tall, 3px radius and a faint cyan shadow. Used once per view, for the install command.
- **Outlined button.** `{components.button-secondary}`: transparent with an orange outline and orange uppercase label, 42px tall; used at the foot of each card ("Start with the CLI", "Browse components", "Set up your agent", "Get started").
- **QBtn default.** `{components.qbtn-default}`: 14px, weight 500, uppercase Roboto, `4px 16px` padding, 36px tall, 3px radius, measured on the docs button page, where flat, outline, push, unelevated, rounded, square, glossy, round and fab variants are demonstrated.
- **Cards.** `{components.card}`: white, 4px radius, `32px 24px` padding, cyan glow.
- **Navigation.** `{components.nav}`: `{colors.nav-bg}` with grey `{colors.nav-text}` uppercase links; links elsewhere use `{colors.brand-blue}`.
- **Search input.** `{components.text-input}`: on the dark header, white 16px Montserrat text on the dark header.

## Design System Architecture

Quasar is itself a public design system. Its official documentation exposes the brand variables (https://quasar.dev/style/color-palette), Sass variables for colour, typography, spacing, breakpoints, radius and shadows (https://quasar.dev/style/sass-scss-variables, source at https://raw.githubusercontent.com/quasarframework/quasar/dev/ui/src/css/variables.sass), and per-component API docs such as QBtn (https://quasar.dev/vue-components/button). Colours are runtime CSS variables (`--q-primary` and so on) that can be changed in `quasar.config` under `framework.config.brand` or at runtime with `setCssVar()`. The docs site layers its own `--q-brand-*` variables over that system, which is why one page shows both `#1976d2` and `#ea5e13`.

## Do's and Don'ts

Do keep orange for the one primary action in a view. Do use Montserrat with wide tracking for uppercase headings and Roboto for component demos and body text. Do put white cards on navy and give them the cyan-tinted glow. Do keep corners at 3px for buttons and 4px for cards.

Don't use the framework blue `#1976d2` as the docs call to action; it belongs to component demos. Don't use pure grey shadows on the dark field. Don't round cards past 4px, and don't use the 28px button radius outside the rounded variant. Don't set body copy in uppercase, and don't use browser-default link blue.

## Responsive Behavior

The framework publishes breakpoints at 600, 1024, 1440 and 1920px (`--q-size-*`, read from the live page). I did not capture the site at narrow widths in this pass, so how the header and card grid reflow below 600px is not documented here. What is measured on desktop is that the tracked uppercase button label wraps onto two lines inside a card button ("Browse components") instead of shrinking, and that button heights are fixed (59px primary, 42px outlined, 36px QBtn), which is the behaviour to preserve when adapting layouts. Treat any mobile rule beyond that as a decision to verify rather than a documented fact.

## Iteration Guide

Start from the variables: set `{colors.primary}` for the single call to action, `{colors.brand-blue}` for titles, and keep the navy backgrounds. Add new components by copying the QBtn spec (14px, 500, uppercase, 3px radius) rather than inventing new radii. When adding a status state, take the colour from the framework set (`{colors.positive}`, `{colors.negative}`, `{colors.info}`, `{colors.warning}`) instead of a new hue. Check every new surface against the cyan-glow shadow rule, and re-measure any new page with the extractor before adding tokens.
