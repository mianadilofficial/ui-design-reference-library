---
version: alpha
name: Bento DS
category: "Design Systems"
description: "Bento DS marketing site: white canvas, near-black ink #242424, Clash Display 600 headlines at 116px, Epilogue 18px body, a lavender gradient hero, 20px-radius dark buttons and 16px-radius pale violet secondary buttons."

colors:
  canvas: "#ffffff"
  page-largest: "#efe9fa"
  ink: "#242424"
  primary: "#242424"
  on-primary: "#ffffff"
  surface-muted: "#dddddd"
  accent-violet-text: "#4025a4"
  ink-nav-bar: "#222222"
  accent-indigo-text: "#493da8"
  accent-blue-text: "#2548a0"
  tint-violet-hover: "#d7c8f2"
  nav-link-text: "#333333"
  primary-hover: "#454545"
typography:
  display:
    fontFamily: "\"Clash Display\", sans-serif"
    fontSize: 116px
    fontWeight: 600
    lineHeight: 80px
  display-mobile:
    fontFamily: "\"Clash Display\", sans-serif"
    fontSize: 70px
    fontWeight: 600
    lineHeight: 48px
  heading:
    fontFamily: "\"Clash Display\", sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 48px
  body:
    fontFamily: Epilogue, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 16px
  sm: 20px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 16px 32px
    height: 60px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.accent-violet-text}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    height: 52px
  button-secondary-hover:
    backgroundColor: "{colors.tint-violet-hover}"
    textColor: "{colors.accent-violet-text}"
  nav:
    textColor: "{colors.ink-nav-bar}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.body}"
---

# Bento DS

## Overview

Bento DS is the marketing and documentation hub for an open-source design system made by buildo, which describes itself on the home page as a way to "bridge the gap between design and development." The page measured here, https://bento-ds.com/, is a Webflow-flavoured landing site: the extraction recorded a `webflow-icons` icon font among its loaded fonts, alongside Clash Display, Clash Grotesk and Epilogue. The page sells two mirrored libraries, one in Figma and one in React, and says so in its own words: "perfectly mirrored Figma and React libraries."

The look is friendly, rounded and confidently graphic. A white canvas (`#ffffff`) carries near-black ink (`#242424`), and the only real colour arrives in two places: a soft lavender-to-periwinkle gradient hero that is filled with a collage of component fragments (buttons, tags, a chart, a calendar, a stepper, toasts), and a family of pale violet and blue tints used for secondary buttons. Large grotesque headlines in Clash Display at weight 600 set the tone; body copy in Epilogue is light and open. The copy voice is professional but approachable and productivity-minded: "Simplify your workflow and boost your productivity," "Nice and ready...," "... but deeply customizable."

This document describes only the marketing site as measured. It does not claim that the page is built from the Bento DS React library; the documented facts about the library come from the pages cited under Design System Architecture.

## Colors

The palette is small and measured. `canvas` is `#ffffff`, the body background. `ink` and `primary` are both `#242424`: the same near-black is the dominant text colour and the fill of the main "Get started" button, whose label is `on-primary` `#ffffff`. A second near-black, `ink-nav-bar` `#222222`, is the body colour on the page element and the nav text, and `nav-link-text` `#333333` is used for nav links. `primary-hover` `#454545` is what the dark button turns into on hover, as recorded by the hover probe.

Tints are the signature. `page-largest` `#efe9fa` is a pale lavender and is the largest non-white background area on the page; the same value fills the secondary "Get started" button in the nav, whose text is `accent-violet-text` `#4025a4`. On hover that button's fill becomes `tint-violet-hover` `#d7c8f2`. The "Go to resources" buttons inside the two framed cards use `accent-indigo-text` `#493da8` and `accent-blue-text` `#2548a0` respectively on their own pale tints. `surface-muted` `#dddddd` is a neutral grey measured as a background area on the page.

Rules for use: the near-black carries every headline and the primary action; saturated colour is reserved for the hero collage and the tinted secondary buttons; hover on a tinted button deepens the same tint rather than switching hue.

## Typography

Headlines use Clash Display at weight 600. The hero h1 "Bento DS" is 116px with an 80px line-height on desktop (`display`) and 70px with a 48px line-height at the 390px mobile width (`display-mobile`). Section headings such as "Simplify your workflow and boost your productivity" are 48px on a 48px line-height (`heading`), which means very tight, almost solid leading. Body text is Epilogue at weight 400, 18px on a 28px line-height (`body`). The same Epilogue size is used for the button labels.

The measured font faces also include Clash Grotesk at weight 500 and Epilogue at 600; the extraction does not say which elements use them, though emphasised words in body copy look bold in the capture ("perfectly mirrored Figma and React libraries"). Clash Display, Clash Grotesk and Epilogue are all webfonts loaded by the page; no font licence or foundry page was opened, so no substitution guidance beyond the fallbacks declared in the CSS (`sans-serif`) is given here. Where the families are unavailable, use a geometric grotesque with tight leading for display and a humanist sans for body.

## Layout

The page is a single centered column on a 1280px-wide desktop measurement, with generous vertical rhythm between sections. The hero is a full-bleed rounded panel with the gradient and a scattered UI-fragment collage that is clipped at the panel edges, so the content seems to continue beyond the frame. Below it, a centered statement block (heading plus two-line paragraph) leads into a two-column pair of framed cards ("Design" with Figma, "Development" with React JS), each with a tab-like label pinned to the top-left corner. After that the layout alternates a left text column with a right image or stat block: "Nice and ready..." beside a component sheet and a two-up stat box reading "60+ components" and "740+ variants", then a mirrored row for "... but deeply customizable."

Spacing tokens measured on the page are `s1` 4px through `s10` 40px (4, 8, 10, 12, 16, 20, 24, 30, 32, 40). Buttons use 16px 32px padding.

## Elevation & Depth

Depth is mostly flat. The page relies on tonal fills and on heavy dark outlines around the framed cards and stat box rather than on shadows. The measured box-shadow list is short: `0 0 0 1px rgba(0, 0, 0, .1), 0 1px 3px rgba(0, 0, 0, .1)`, `0 0 3px rgba(51, 51, 51, .4)` and `0 0 0 2px #fff`; most elements use none. Inside the hero collage the component fragments sit on soft white cards that read as raised against the gradient, but that effect belongs to the product screenshots, not to the page chrome.

## Shapes

Corner radii measured on the page are 3px, 16px, 20px and 24px. The tokens keep `xs` 16px (secondary buttons, 52px tall), `sm` 20px (the primary "Get started" button, 60px tall) and `pill` 9999px. Primary buttons are therefore generously rounded but not full pills; framed cards and the stat box in the capture have square corners with thick dark borders, which contrasts deliberately with the soft buttons.

## Components

**Primary button**: fill `ink` `#242424`, label `canvas` `#ffffff` in Epilogue 18px/28px, radius `sm` 20px, padding 16px 32px, height 60px. Hover fills `#454545` (`primary-hover`) with the same white label.

**Secondary button**: fill `page-largest` `#efe9fa`, label `accent-violet-text` `#4025a4`, radius `xs` 16px, height 52px; hover fill `tint-violet-hover` `#d7c8f2`. The nav "Get started" uses this style. Card-level "Go to resources" buttons follow the same shape with indigo and blue tints.

**Navigation**: a white bar with the Bento DS wordmark at left, three text links (Design, Development, Pricing) in `nav-link-text` and the secondary button at the right.

**Framed feature cards**: white interior, thick dark outline, a small tab label with an icon (Figma, React JS) hanging off the top-left corner, a centered h2-scale title, short description and a tinted button.

**Stat box**: two adjacent lavender cells with dark outline, each a large Clash Display number and a small label.

## Design System Architecture

Bento DS is an open-source system, so its architecture is public. The GitHub repository at https://github.com/buildo/bento-design-system, which was opened for this document, lists Vanilla Extract, React with TypeScript, React Aria and Figma integration among its technologies, is organised as a pnpm monorepo with multiple packages under `/packages`, and is released under the MIT licence. The home page https://bento-ds.com/ states the scale of the system as 60+ components and 740+ variants; the pricing page https://bento-ds.com/pricing adds 310+ visual regression tests in the React library and describes a free Community plan, paid support plans and add-on services such as theme configuration and an accessibility audit. The development page https://bento-ds.com/development points to the GitHub repository, documentation, Storybook and Playroom rather than describing tokens itself.

The marketing site measured here has no exposed `:root` custom properties in the extraction, so its de-facto system is simply the measured values: three radii, a ten-step spacing scale and four text sizes in the tokens above. No claim is made that the page consumes the library's theme tokens.

## Do's and Don'ts

- Do use near-black `#242424` for headlines and the primary action on a white canvas.
- Do keep saturated colour to the hero gradient and pale tinted secondary buttons.
- Do set Clash Display at weight 600 with very tight leading for headlines.
- Do round buttons (16px or 20px) while keeping framed cards sharp and outlined.
- Don't add drop shadows to page chrome; separate with tint and outline.
- Don't use Epilogue below the 18px body size for primary reading text on desktop.
- Don't pair the dark primary button with a tinted hover; the dark button darkens slightly to `#454545`.
- Don't claim product features beyond what the site states.

## Responsive Behavior

The extractor measured the page at 1280px desktop and 390px mobile. The only mobile-specific value recorded is the h1, which drops from 116px/80px to 70px/48px (`display-mobile`). The two framed cards are side by side on desktop and the alternating text and image rows would be expected to stack at narrow widths, but the stacking breakpoints were not measured and are therefore not specified here. Buttons keep their measured heights (60px and 52px) as touch targets.

## Iteration Guide

1. Start from `canvas` `#ffffff` and `ink` `#242424`; set headlines in Clash Display 600, body in Epilogue 400 at 18px/28px.
2. Add one dark primary button (20px radius, 60px tall) per view; use the lavender secondary button (16px radius, 52px tall) for everything else.
3. Reserve gradient and colour for one hero panel; fill it with real component fragments rather than abstract art.
4. Use framed, outlined cards with a corner tab label for paired choices such as Design versus Development.
5. When adding a tint, pair it with a darker text colour from the same hue family (violet `#4025a4`, indigo `#493da8`, blue `#2548a0`) and define a hover that deepens the tint.
6. Run `node web/scripts/verify-designs.mjs --slug=bento` after every edit.
