---
version: alpha
name: Canonical Ubuntu
category: "Design Systems"
description: "Canonical's Ubuntu homepage is a dark Vanilla-framework page: Ubuntu variable typeface at weights 300 to 550, a #262626 canvas with white text, square-cornered (0px radius) #008013 green buttons, #6699cc link blue on dark, and a 40px h1 at 550 weight with 48px line height."
colors:
  canvas: "#262626"
  page-largest: "#2d2d2d"
  ink: "#ffffff"
  primary: "#008013"
  on-primary: "#ffffff"
  link-on-dark: "#6699cc"
  ink-muted: "#ffffff99"
  link-default: "#0066cc"
  rule: "#939393"
  primary-hover: "#00670f"
  brand-orange: "#e95420"
  positive: "#0e8420"
typography:
  display:
    fontFamily: "\"Ubuntu variable\", Ubuntu, -apple-system, \"Segoe UI\", Roboto, Oxygen, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 40px
    fontWeight: 550
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Ubuntu variable\", Ubuntu, -apple-system, \"Segoe UI\", Roboto, Oxygen, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 32px
    fontWeight: 550
    lineHeight: 40px
  subheading:
    fontFamily: "\"Ubuntu variable\", Ubuntu, -apple-system, \"Segoe UI\", Roboto, Oxygen, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 550
    lineHeight: 24px
  body:
    fontFamily: "\"Ubuntu variable\", Ubuntu, -apple-system, \"Segoe UI\", Roboto, Oxygen, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"Ubuntu variable\", Ubuntu, -apple-system, \"Segoe UI\", Roboto, Oxygen, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 20.8px
    fontWeight: 300
    lineHeight: 16px
rounded:
  none: 0px
spacing:
  s1: 4.5px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 8.8px
  s6: 16px
  s7: 24px
  s8: 25.6px
  s9: 32px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 4.5px 16px
    height: 35px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 4.5px 16px
    height: 35px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.link-on-dark}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 16px 0px 16px 25.6px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.link-on-dark}"
    rounded: "{rounded.none}"
    padding: 64px 0px
---

## Overview

The captured ubuntu.com homepage, published by Canonical, is a dark, text-led corporate page. It opens with a thin announcement block, "Introducing Zephyr 26.04 LTS" with the subline "Trusted RTOS for MCU devices with up to 15 years of support", a green "Learn more" button and a small isometric illustration of devices orbiting a stack. The Canonical Ubuntu header follows: an orange square mark, the wordmark, and a nav of Products, Use cases, Support, Community, Get Ubuntu and Careers with chevrons, then "All Canonical", "Sign in" and a search icon. An information notice below says that the Standard Support period for Ubuntu 20.04 LTS has ended and links to options.

The body alternates large two-tone statements with ruled lists. "Modern enterprise open source" is set in a regular heading weight, followed by a much lighter, larger line, "Security, support, and managed services from the publisher of Ubuntu." Partner logos (AWS, Microsoft Azure, AT&T, Google Cloud) stack on the right separated by thin horizontal rules. A blog row with four dated items, a section titled "Energize your engineers" beside a tall photograph of a woman at a desk with a monitor, a checklist (Authentically open source, Secure by design, and others) and a closing "Open source security" block with compliance logos (NIST and others) complete the page.

Voice is institutional and direct: noun-phrase headings, short claims, a citation for a statistic ("HackerEarth, Developer Survey, 2020"). The visual signature is the combination of near-black ground, hairline rules that divide every section, the very light weight of large statements, and the saturated green action button. Photography is a single natural-light image of a person at work; the rest is logos, icons and type.

## Colors

`canvas` #262626 is the page ground and `page-largest` #2d2d2d the largest measured surface, used for the footer. `ink` is #ffffff, with `ink-muted` #ffffff99 (60 percent white) for captions such as the statistic citation. `rule` #939393 is the measured border color; the capture shows it as thin lines between sections and list rows.

`primary` #008013 is the fill of both "Get Ubuntu Pro" and "Learn more", with `primary-hover` #00670f; text on it is `on-primary` #ffffff. Links on the dark ground are `link-on-dark` #6699cc, the most-read non-white text color, and `link-default` #0066cc is the link blue that appears on light areas.

`brand-orange` #e95420 and `positive` #0e8420 are not measured on this capture's text or buttons; they are taken from the Vanilla color settings page (`$color-brand` and `$color-positive`) and cited in SOURCES.json. The orange is the Ubuntu brand color and matches the logo square seen in the capture. Vanilla's own page also lists negative #c7162b, caution #f99b11, information #24598f and accent #0f95a1, which are not used in these tokens.

## Typography

The family is Ubuntu variable (loaded for weights 100 to 800, upright and italic), then Ubuntu, -apple-system, Segoe UI, Roboto, Oxygen, Cantarell, Fira Sans, Droid Sans, Helvetica Neue and sans-serif. Vanilla's font-settings page states that Ubuntu is the default family, that three weights are used (100 for lighter display headings, 400 for text, 550 for emphasis), that the monospace is Ubuntu Mono, and that the base size is 1rem; it also states that all Ubuntu sites should use the Ubuntu font.

Measured: `display` is 40px at weight 550 with 48px line height (the h1); `display-mobile` is 32px, 550, 40px line height. `subheading` is 16px at 550 with 24px line height, and `body` is 16px at 400 with 24px line height. `nav` is 20.8px at weight 300, with a 16px line height, as measured on nav-link text. The capture's large light statements are consistent with the 100-weight display option documented by Vanilla.

Font substitutes: Ubuntu is a free typeface family; if the variable font is unavailable the declared stack falls to system sans-serifs, which lack the 550 weight, so semibold will render as 400 or 700.

## Layout

The page is a single wide column with modest side margins, built on a multi-column grid; headings take the larger left share and logos or media the right. Sections are divided by thin rules rather than background changes, so the entire page stays on one ground. Vertical rhythm is generous: the footer carries 64px of vertical padding, and spacing values measured are 4.5, 6, 7, 8, 8.8, 16, 24, 25.6, 32 and 48px. Nav links use 16px vertical padding and 25.6px left padding.

## Elevation & Depth

There is no elevation. No shadow was measured on any component, and the capture shows none: separation is made with thin `rule` lines, whitespace and the contrast of white text on the dark ground. The announcement notice is a bordered box with a blue left edge, not a raised card. The tall photograph is simply placed in the grid without a frame.

## Shapes

Everything is square. `none` 0px is the only measured radius, and the buttons, nav, links and footer all use it. The logo mark is a rounded orange square in the capture, but the UI itself introduces no curves apart from circular check icons in the checklist and the search icon.

## Components

**button-primary** and **button-secondary** share one style: #008013 fill, 1px solid #008013 border, white 16px text at weight 400, 4.5px by 16px padding, 35px height, 0px radius, hover #00670f. The measured secondary CTA ("Learn more") is identical in color to the primary ("Get Ubuntu Pro"), so the system differentiates by position and copy, not by color. **link** is `link-on-dark` at the 550 `subheading` style, often ending in a chevron character ("Access a 30-day free trial ›"). **nav** is the canvas-colored bar and **nav-link** the white 20.8px light-weight item. **footer** is `page-largest` with `link-on-dark` links and 64px vertical padding.

## Design System Architecture

Canonical publishes the Vanilla framework (https://vanillaframework.io, repository https://github.com/canonical/vanilla-framework, npm package `vanilla-framework`), described as a simple, extensible CSS framework maintained by Canonical's Web Team, written in Sass, LGPLv3 licensed, and used by Ubuntu, JAAS and Snapcraft. The dsUrl is real and used: the live page's root variables are `--vf-color-*` properties (for example `--vf-color-button-positive-default` #0e8420, `--vf-color-link-default` #06c, `--vf-color-focus` #2e96ff, `--vf-color-accent` #0f95a1). Vanilla documents client-side theming through CSS custom properties with `is-dark` and `is-light` classes, which explains the dark page. The measured fill #008013 differs from the documented positive button #0e8420, so this page's dark theme uses its own green; the tokens above keep the measured value.

## Do's and Don'ts

Do keep the dark ground #262626 with white text and divide sections with thin rules. Do use Ubuntu at 550 for emphasis and lighter weights for large statements. Do keep buttons square with the green fill. Do use `link-on-dark` for links on dark.

Don't round buttons. Don't use #0066cc link blue on the dark ground; it is the light-surface link. Don't add shadows. Don't use browser default link colors (#9e9eff, #d0adf0). Don't treat the orange as an action color; the capture uses it only for the mark.

## Responsive Behavior

The measured h1 drops from 40px with 48px line height on desktop to 32px with 40px line height at 390px mobile. Vanilla describes itself as responsive-grid based, but only the h1 change was measured in this capture, so no other breakpoints are stated.

## Iteration Guide

1. Set the ground to #262626 and text to white; use `ink-muted` for captions.
2. One green square button per call to action, 35px high, hover darker.
3. Headings at 40px/48px weight 550; subtext in lighter weights.
4. Divide with thin rules; no shadows or radii.
5. Links in #6699cc with a trailing chevron.
6. Reference Vanilla `--vf-*` variables for any value not measured here.
