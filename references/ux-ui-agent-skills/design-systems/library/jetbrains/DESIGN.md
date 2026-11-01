---
version: alpha
name: JetBrains
category: "Design Systems"
description: "JetBrains' marketing site is a near-black developer canvas (#19191c over a #000000 page ground) with white text, white pill buttons with 26px radius, JetBrains Modul 250-weight lowercase display at 44px for the hero and JetBrains Sans for everything else, product cards outlined in translucent white, and pink #f31199 category accents."

colors:
  canvas: "#19191c"
  page-body: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#19191c"
  ink-secondary: "#ffffffb3"
  ink-tertiary: "#ffffff80"
  ink-soft: "#ffffffcc"
  accent-pink: "#f31199"
  hairline: "#ffffff66"
  violet-light-theme: "#6b57ff"
  violet-dark-theme: "#8473ff"
  grey-90: "#303033"
  grey-95: "#252528"
typography:
  display:
    fontFamily: "\"JetBrains Modul\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 44px
    fontWeight: 250
    lineHeight: 44px
    textTransform: lowercase
  display-mobile:
    fontFamily: "\"JetBrains Modul\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 32px
    fontWeight: 250
    lineHeight: 32px
    textTransform: lowercase
  heading:
    fontFamily: "\"JetBrains Sans\", Inter, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Droid Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 35px
    fontWeight: 600
    lineHeight: 42px
  body:
    fontFamily: "\"JetBrains Sans\", Inter, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Droid Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.024px
  button:
    fontFamily: "\"JetBrains Sans\", Inter, system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Droid Sans\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"JetBrains Sans\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 16px
  xl: 20px
  2xl: 24px
  3xl: 26px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 22px
  s10: 23px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 12px 32px
    height: 52px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 8px 24px
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 0px 1px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 24px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 64px 0px 96px
---

## Overview

The jetbrains.com home page is a dark, product-first showroom. At capture time the hero is a pixel-dithered illustration of a person seated at a bank of control screens looking out over an airport runway, with the lowercase line "jetbrains air" in a monospaced-feeling display face and the sentence "is one system for building software with agents" in lighter weight beneath. Two controls sit under it: a dark pill "Explore Air" with a thin white outline and a text link "Read the story →". Below the hero are three tabbed audience cards (For devs, For teams, For orgs), a large IDE screenshot in a dark rounded frame, and then a heading "For {developers}" with the statement "Enjoy building software", where curly braces are used as a deliberate code-flavoured typographic device. A grid of outlined product cards follows (IntelliJ IDEA, PyCharm, DataGrip, WebStorm, Rider, CLion), each with its multi-colour square product icon, a one-line description such as "IDE for Java and Kotlin" and, for some, a small grey chip reading "Free for non-commercial use".

The voice is short, concrete and developer-directed: product names, one-line capability statements, and "Explore ..." call-to-action labels. Photography is replaced by illustrations, product UI screenshots and the colourful product icons, so the only saturated color on the dark canvas comes from product marks and the pink accent.

## Colors

The canvas is `{colors.canvas}` (#19191c), a very dark neutral, with `{colors.page-body}` (#000000) as the body ground behind panels; the largest areas on the capture are these two. Text is `{colors.ink}` (#ffffff) with opacity steps for hierarchy: `{colors.ink-soft}` (#ffffffcc), `{colors.ink-secondary}` (#ffffffb3) and `{colors.ink-tertiary}` (#ffffff80). Borders use a translucent white, `{colors.hairline}` (#ffffff66).

The primary action is inverted: `{colors.primary}` (#ffffff) fills the main pill with `{colors.on-primary}` (#19191c) text. `{colors.accent-pink}` (#f31199) is used as a text color on a small number of labels. The shipped CSS exposes a violet brand pair as custom properties, `{colors.violet-light-theme}` (#6b57ff) for light backgrounds and `{colors.violet-dark-theme}` (#8473ff) for dark ones, plus greys `{colors.grey-90}` (#303033) and `{colors.grey-95}` (#252528) that appear as raised dark surfaces. The violet values were read from root variables; where they render on this page is not established by the capture. Soft translucent pink, teal and violet fills (low-alpha backgrounds) provide atmospheric glow behind sections.

## Typography

Two proprietary families are loaded by the page: **JetBrains Modul** (variable, used for the hero) and **JetBrains Sans** (variable, weights 100-900). The hero h1 is JetBrains Modul at 44px, weight 250, line-height 44px, forced lowercase (`{typography.display}`); on a 390px viewport it is 32px/32px (`{typography.display-mobile}`). Section headings are JetBrains Sans 600 at 35px/42px (`{typography.heading}`). Body copy is 16px/24px regular with a hair of letter-spacing (`{typography.body}`), buttons use 20px/28px (`{typography.button}`) and navigation labels 16px (`{typography.nav}`). The fallback stack is Inter, then system UI fonts. The page itself lists Inter as the first fallback after JetBrains Sans, so Inter is the substitute to use where the proprietary files are unavailable. JetBrains Mono is not among the fonts loaded on this page, so the monospaced look of the hero line comes from Modul.

## Layout

The header is a 72px bar (`--wt-site-header-height` in the shipped CSS; 48px on mobile) in `#19191c` with the logo at left and text navigation (Products, For Business, Education, Solutions, Support, Pricing) plus search, account, cart and language icons at right. Content sits in centred containers, with a recurring vertical rhythm built from `wt-offset-top-*` utility classes (8, 12, 16, 24, 32, 48 and 96px steps appear in the page markup). The hero is an inset panel with a visible black margin around it. Product cards are laid out in a three-column grid with consistent gutters.

## Elevation & Depth

Depth is created by tonal layering, not shadows: no box-shadow was measured on the key components. Raised panels step from #000000 to #19191c to the grey surfaces, and cards are separated by 1px translucent-white outlines. The hero uses an illustrated image in blue tones, and low-alpha pink, teal and purple fills (measured as background colors) sit behind sections.

## Shapes

Buttons are pills. The primary button radius is `{rounded.3xl}` (26px) and the secondary pill `{rounded.xl}` (20px). Cards and panels use `{rounded.md}` (8px), with larger containers at `{rounded.lg}` (16px) and `{rounded.2xl}` (24px); small chips use `{rounded.xs}` (4px) and `{rounded.sm}` (6px). Product icons are rounded squares.

## Components

**Primary button** (`button-primary`): white fill, #19191c text, JetBrains Sans 20px/28px, padding 12px 32px, height 52px, radius 26px. Measured with the label "Explore Business Solutions".

**Secondary pill** (`button-secondary`): #19191c fill, white 16px label, padding 8px 24px, height 40px, radius 20px, thin white outline; on hover the fill drops to 80% opacity.

**Navigation**: transparent buttons at 70% opacity that go to full opacity on hover (measured on Products and For Business), 72px tall.

**Cards**: 1px translucent-white border, 8px radius, 24px padding, white text, product icon at left.

**Footer**: #19191c background, white 13px/20px links at weight 600, padding 64px 0 96px.

## Design System Architecture

The site is not built on JetBrains' publicly documented design system. The URL supplied for this entry, [Ring UI](https://jetbrains.github.io/ring-ui/master/index.html), is a real JetBrains library: its [README](https://github.com/JetBrains/ring-ui) describes "UI components ... for web-based products built inside JetBrains, as well as third-party plugins", and its [design guidelines](https://www.jetbrains.com/help/ring-ui/color.html) describe system fonts, a #1F2326 main text color and a #0080E5 action color on light backgrounds. That does not match what jetbrains.com measures (JetBrains Sans, dark #19191c canvas, white pill buttons), and the home page markup contains no Ring UI references, so Ring UI is not used as the basis for this document.

What the page ships instead is an in-house web-team system visible in its code: custom properties prefixed `--rs-color-*` (for example `--rs-color-black: #19191c`, grey steps from `-grey-5` to `-grey-95`, white and black alpha steps `-white-t10` ... `-white-t95`, light- and dark-theme primary variants), `--wt-*` layout variables (`--wt-site-header-height`, `--wt-site-header-bg`), `--_wtui-*` spacing variables and utility classes named `wt-offset-top-*`. The origin and ownership of the `rs-` and `wt-` prefixes is not documented in anything opened here, so no claim is made about the team behind them. The takeaway is a token-driven system: a small set of neutrals with transparency ramps, two theme variants of one violet primary, semantic danger/warning/success colors, and spacing utilities.

## Do's and Don'ts

- Do keep surfaces near-black and let product icons and illustrations supply the color.
- Do use white pill buttons for the primary action and dark outlined pills for secondary.
- Do set hero lines in lowercase Modul at a light weight, and section titles in Sans 600.
- Do use opacity steps of white for secondary and tertiary text.
- Don't use pure-white backgrounds for panels; the canvas is #19191c.
- Don't mix square-cornered buttons with the pill family.
- Don't use pink for large surfaces; it is a small-label accent.
- Don't reach for Ring UI's light-theme blue (#0080E5) on the marketing site.

## Responsive Behavior

The display heading steps from 44px/44px to 32px/32px at 390px. The header height variable drops from 72px to 48px on mobile, Utility offsets such as `wt-offset-top-sm-24` indicate breakpoint-specific spacing. Only the header height and the h1 size were measured at the narrow viewport; card reflow was not measured.

## Iteration Guide

1. Begin with `{colors.canvas}` and `{colors.ink}`; derive text hierarchy from the white alpha tokens.
2. Make every primary CTA a white pill (`button-primary`); keep one per viewport.
3. Use JetBrains Modul for a single hero line only, lowercase, weight 250.
4. Outline cards with `{colors.hairline}` rather than adding shadows.
5. Introduce the violet pair only when a brand accent is needed, picking the dark-theme value on dark surfaces.
6. If JetBrains Sans is unavailable, fall back to Inter and keep the 16px/24px body measure.
