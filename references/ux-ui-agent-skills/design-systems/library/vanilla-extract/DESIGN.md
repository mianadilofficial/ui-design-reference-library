---
version: alpha
name: Vanilla Extract
category: "CSS-in-JS"
description: "Vanilla Extract's docs site pairs Shrikhand italic display headlines (52px) with DM Sans headings, on mint #cbfbf1 and sky-blue #dff2fe sections cut by slanted edges, a dark #101828 pill button with a 28px radius, and code panels set in a monospace face."
colors:
  canvas: "#dff2fe"
  page-body: "#ffffff"
  ink: "#364153"
  primary: "#101828"
  on-primary: "#f9fafb"
  surface-mint: "#cbfbf1"
  ink-muted: "#6a7282"
  ink-faint: "#99a1af"
  ink-sky: "#00598a"
  syntax-green: "#009966"
  syntax-blue: "#0084d1"
  syntax-magenta: "#c800de"
  accent-pink: "#f4a8ff"
  accent-mint: "#5ee9b5"
  button-secondary-bg: "#b6eee3"
typography:
  display:
    fontFamily: Shrikhand, "Helvetica Neue", HelveticaNeue, Helvetica, sans-serif
    fontSize: 52px
    fontWeight: 400
    lineHeight: 60px
  display-mobile:
    fontFamily: Shrikhand, "Helvetica Neue", HelveticaNeue, Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 48px
  heading:
    fontFamily: "\"DM Sans\", \"Helvetica Neue\", HelveticaNeue, Helvetica, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 36px
  subheading:
    fontFamily: "\"DM Sans\", \"Helvetica Neue\", HelveticaNeue, Helvetica, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 40px
  button:
    fontFamily: "-apple-system, \"system-ui\", Roboto, \"Helvetica Neue\", HelveticaNeue, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
  code:
    fontFamily: "ml, \"Roboto Mono\", Menlo, monospace"
    fontSize: 14px
    fontWeight: 400
  button-secondary:
    fontFamily: "-apple-system, \"system-ui\", Roboto, \"Helvetica Neue\", HelveticaNeue, Helvetica, Arial, sans-serif"
    fontSize: 13.3333px
    fontWeight: 500
rounded:
  xs: 3px
  sm: 8px
  md: 16px
  lg: 28px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 20px
  s6: 32px
  s7: 48px
  s8: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 20px 32px
    height: 61px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 0px 12px 0px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 0px 12px 0px 20px
    height: 44px
  button-outline:
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
    height: 64px
  footer:
    textColor: "{colors.primary}"
    padding: 0px 0px 96px
---

## Overview

The vanilla-extract.style homepage, captured at 1280px, is playful where most CSS-tooling sites are austere. The top of the page is a mint (#cbfbf1) hero with a cupcake illustration at top left, a Search button with a keyboard shortcut chip and a light/dark toggle at top right. The headline "Zero-runtime Stylesheets in TypeScript." is set at 52px in a heavy italic display face (Shrikhand), in near-black. Below it a three-line paragraph in a plain system sans describes the idea ("Use TypeScript as your preprocessor. Write type-safe, locally scoped classes, variables and themes, then generate static CSS files at build time."), then a mint-tinted install command (`$ npm install @vanilla-extract/css`) in monospace, then two buttons: a dark pill "Get started" with a chevron, and an outlined pill with a GitHub icon and a star count of 10.4k.

On the right, a slightly rotated, near-white code panel shows a `styles.css.ts` file with colored syntax. The hero's lower edge is cut diagonally into a white band holding four feature columns (Type-safe static CSS, First-class theming, Framework agnostic, Built for extension), each introduced by a small slanted pink or green slash mark, a DM Sans heading and grey description with underlined inline links (Sprinkles, Recipes, Dessert Box). A second diagonal opens a sky-blue (#dff2fe) section titled "Leverage the full power of CSS & TypeScript" in blue-teal text above another tilted code panel.

The mood is sunny, tidy and a little tongue-in-cheek; the copy is plain and instructional with no marketing superlatives. The product demonstrates itself in code, and the colors are a pastel mint, sky and pink palette taken from Tailwind's scales.

## Colors

The palette is defined in the project's own site source (`site/src/themes.css.ts`), which imports Tailwind's color scales and renames some: gray for text, teal for the mint sections, sky relabelled as "blue", fuchsia relabelled "pink", emerald as "green".

- **Canvas #dff2fe** is the largest-area background in the measurement (the sky section; it corresponds to the "blue100" token). **Surface-mint #cbfbf1** is the hero (teal 100). **Page-body #ffffff** is the white band and the code panel color.
- **Ink #364153** is the hero paragraph color (gray 700); **ink-muted #6a7282** is the most-read text color (gray 500, 1,352 characters), used for feature descriptions; **ink-faint #99a1af** (gray 400) is for comments and quiet text; **ink-sky #00598a** is the heading and body text of the sky section (942 characters).
- **Primary #101828** (gray 900) is the headline and the "Get started" fill, with **on-primary #f9fafb** (gray 50) text.
- **Button-secondary-bg #b6eee3** is the Search button fill. The source file names it `teal200muted` and sets it as a literal value, not a Tailwind color.
- **Syntax colors**: green #009966 for strings, blue #0084d1 for keywords and identifiers and magenta #c800de for function names appear in the code panels. **Accent-pink #f4a8ff** and **accent-mint #5ee9b5** are the slash marks beside feature titles.

The source declares `black` as #0e0e10 and `white` as #fff, plus a full ramp for each hue. The source supports dark mode through a `dark` class condition on the background and color sprinkles.

## Typography

Four font roles are declared in the source: `brand` Shrikhand, `heading` "DM Sans", `body` the system stack (-apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Arial) and `code` `ml, "Roboto Mono", Menlo, monospace`. Weights are 400 (regular) and 700 (strong). Only Shrikhand and DM Sans are loaded as webfonts on the page (at weight 400); the body copy uses the system stack, and the measured dominant family is -apple-system (2,626 characters), followed by the code face `ml` (1,503).

- **Display**: Shrikhand 52px/60px, weight 400 (36px/48px on mobile). The source sets h1 to 52px at tablet and desktop and 36px on mobile.
- **Subheading**: DM Sans 30px/40px, weight 400, which corresponds to the source's h3 at 30px.
- **Heading**: DM Sans 22px/36px, weight 400, the source's h4 at 22px, used for the feature titles ("Type-safe static CSS").
- **Button**: system sans 18px, weight 400. **Secondary button** (Search): 13.3333px, weight 500, the browser's default button size.
- **Code**: `ml` at 14px.

The source uses Capsize to precompute font sizes and line heights against a 4px grid (leading is a number of 4px rows), and trims the cap height so text boxes align to the grid. This is why lines are tall (the 52px h1 has 15 rows, 60px).

## Layout

The page is built from a 4px grid (`grid: '4px'`) with a spacing scale of 4, 8, 12, 20, 32, 48 and 96px (xsmall to xxxlarge in source, where the largest is 24 rows, 96px) and content widths of 480, 600, 740, 960, 1120 and 1350px. Breakpoints are mobile 0, tablet 769px and desktop 1200px. In the capture, the hero is two columns (copy left, code right); the feature section is four equal columns; the lower section is a single centered column with a code panel. Section edges are cut on a slant instead of horizontal, which gives the page its sense of movement. The measured spacing tokens match the source: 4, 8, 10, 12, 20, 32, 48 and 96px.

## Elevation & Depth

Mostly flat, with two exceptions. The primary button has a soft halo `rgba(0, 0, 0, 0.2) 0px 0px 12px 0px`, which is written in the source as `0px 0px 12px 0px rgba(0,0,0,0.2)`. The outlined button draws its border as an inset shadow of 2px in the text color, and fills with a 50% white wash on hover (a 10% wash in dark mode). Focus is shown with a 5px pink ring (`pink400`; `pink500` in dark mode), which is a notable, playful accessibility choice. Code panels are lighter than their section background and slightly rotated, which creates depth without shadow.

## Shapes

Radii measured: 8px (8 elements), full pill (7), 16px (4), 3px (2) and 28px (2). The source's radius scale is small 8px, medium 16px, large 28px and full 9999px. Primary and outline buttons use 28px, the Search button 8px, panels 16px or 8px. Slanted section edges and slightly rotated code panels are the main shape device, with slash marks as bullets.

## Components

- **Primary button** ("Get started"): #101828 fill, #f9fafb 18px text, 20px 32px padding, 61px height, 28px radius, 12px halo shadow; pressing scales it to .98.
- **Outline button** (GitHub stars): transparent, inset 2px border in currentColor, 28px radius, 64px height, hover wash of white at 50%.
- **Search button**: #b6eee3 fill, #364153 text, 13.3333px/500, 8px radius, 44px height, padding 0px 12px 0px 20px, with a shortcut chip.
- **Install command**: monospace on a mint-tinted block.
- **Code panel**: file name header with a slash mark, syntax-colored code on a lighter surface.
- **Feature column**: slash mark, DM Sans 22px title, grey description, underlined inline links.

## Design System Architecture

Vanilla Extract is a zero-runtime CSS-in-TypeScript library, and its own site is built with it, so the design system is open source and readable. The [`site/src/themes.css.ts`](https://github.com/vanilla-extract-css/vanilla-extract/blob/master/site/src/themes.css.ts) file calls `createGlobalTheme(':root', ...)` to declare tokens for fonts, spacing, contentWidth, heading and text styles (Capsize-computed for mobile, tablet and desktop), weight, palette and border width/radius. [`sprinkles.css.ts`](https://github.com/vanilla-extract-css/vanilla-extract/blob/master/site/src/system/styles/sprinkles.css.ts) turns these into atomic responsive and color properties with `@vanilla-extract/sprinkles`, with a `dark` class condition. [`ButtonLink.css.ts`](https://github.com/vanilla-extract-css/vanilla-extract/blob/master/site/src/system/ButtonLink/ButtonLink.css.ts) defines the button styles, `solid` and `transparent`. The hashed custom property names visible on the live page (for example `--ycoonb3s`) are consistent with this token layer being emitted as generated variables. Official integrations include Sprinkles, Recipes and Dessert Box, which the homepage names. The library itself provides tools, not a component kit.

## Do's and Don'ts

- Do use Shrikhand for the single page headline only and DM Sans for headings.
- Do build every size and space on the 4px grid.
- Do set text in Tailwind-derived grays and let mint and sky carry the sections.
- Do cut section edges on a slant and tilt code panels slightly.
- Don't use more than one dark filled button per view; secondary actions are outlined.
- Don't remove the pink focus ring; it is part of the system.
- Don't set long copy in Shrikhand or DM Sans at 400 weight below 22px.
- Don't add shadows to panels; separate them by tint and tilt.

## Responsive Behavior

Breakpoints come from the source: mobile at 0, tablet at 769px and desktop at 1200px. The type scale changes at these points; h1 is 36px on mobile and 52px from tablet up, h2 28px then 38px, h3 24px then 30px, and body text 18px then 20px. Layout classes are generated with sprinkles responsive conditions. The measured mobile headline is 36px/48px, which matches the source.

## Iteration Guide

1. Choose a section background: mint #cbfbf1, sky #dff2fe or white.
2. Set the headline in Shrikhand 52px (36px on mobile) in #101828, headings in DM Sans, text in the system sans.
3. Make the single primary a #101828 28px-radius button with a soft halo; make secondaries outlined or mint #b6eee3.
4. Snap spacing to the 4px grid and use the source's scale.
5. Use Tailwind-derived tokens (gray 700, gray 500, sky 800) for text and keep syntax colors to the three code hues.
