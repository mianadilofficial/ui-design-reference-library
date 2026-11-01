---
version: alpha
name: "Sunday Robotics"
category: "Tech & AI"
description: "Sunday Robotics home page (sunday.ai) measured live: a white editorial page with off-black #1a1a1a text, #f7e731 yellow accent, a 120px headline in a custom sans plus a mono face for 14px labels, soft 4 to 24px radii, and full-bleed lifestyle photography of the Memo home robot."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1aa1"
  primary: "#000000"
  on-primary: "#ffffff"
  accent-yellow: "#f7e731"
  ink-strong: "#1a1a1a"
  ink-neutral: "#737373"
  hairline: "#1a1a1a1a"
  link-border: "#0000001a"
typography:
  display:
    fontFamily: sans, "sans Fallback", "system-ui", Arial, Helvetica, sans-serif
    fontSize: 120px
    fontWeight: 400
    lineHeight: 120px
    letterSpacing: "-3px"
  display-mobile:
    fontFamily: sans, "sans Fallback", "system-ui", Arial, Helvetica, sans-serif
    fontSize: 42px
    fontWeight: 400
    lineHeight: 42px
    letterSpacing: "-1.05px"
  heading:
    fontFamily: sans, "sans Fallback", "system-ui", Arial, Helvetica, sans-serif
    fontSize: 84px
    fontWeight: 400
    lineHeight: 92.4px
    letterSpacing: "-2.1px"
  subheading:
    fontFamily: sans, "sans Fallback", "system-ui", Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
    letterSpacing: "-0.6px"
  body:
    fontFamily: sans, "sans Fallback", "system-ui", Arial, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: mono, "mono Fallback", "system-ui", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.35px
  nav:
    fontFamily: sans, "sans Fallback", "system-ui", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 24px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
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
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 79px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 14px
    height: 40px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 14px
    borderColor: "{colors.link-border}"
  nav:
    textColor: "{colors.ink-strong}"
    padding: 24px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
---

## Overview

The measured page is sunday.ai, titled "Sunday Robotics | The helpful robotics company". It presents Memo, a home robot. The first screen is nearly all white: a small two-line eyebrow ("The helpful home robot", "Beta launching late 2026"), then the 120px headline "Say hello to Memo", then a wide rounded photograph of the robot folding laundry in a lived-in living room. A large paragraph below the photo reads "Built for busy households, Memo works 24/7 to make your life lighter. Hand off your repetitive to-do's, so you can focus on what really matters." A thin-bordered card follows, with a short sentence ("Robots should give you back what matters most — time.") on the left and a video still with an "Our story" label on the right, and then the oversized word "Mundane" begins the next section. The scroll height is 12,949px at 1280px.

The voice is plain, warm and domestic; the visual idea is large quiet typography against a clean page, with the interest supplied by cinematic, softly lit photographs. The page includes sections tinted yellow, warm grey and pale blue, and dark overlays on video.

## Colors

The canvas (`canvas` #ffffff) is the dominant measured background (area weight 43331). Black (#000000, weight 9349) and a black at 80% alpha (#000000cc) are used behind video and overlay controls. `accent-yellow` (#f7e731) is the brand accent (also published as `--color-accent` and `--color-yellow`) and is the fourth largest background area. Other published background values on the site: `--color-surface` and `--color-warm-grey` #f3f3f0, `--color-warm-grey-dark` and `--color-surface-secondary` #ecece8, `--color-blue-tint` #d9ecee, `--color-green-tint` #aec2b8, `--color-yellow-tint` #faf7eb, `--color-blue` #3b6cf3 and `--color-red` #914621.

Text color is off-black rather than black. `ink-strong` (#1a1a1a, `--color-off-black` and `--color-primary`) is used for headlines (1873 characters). `ink` (#1a1a1aa1, `--color-off-black-60`, also `--color-secondary`) is the most-read text color at 3123 characters, so body copy is a 63% alpha off-black. `ink-neutral` (#737373) appears in small text. `primary` (#000000) is the fill of the measured call-to-action button, with `on-primary` white. Borders are `hairline` (#1a1a1a1a, `--color-border`) and `link-border` (#0000001a), and a white 20% border (#ffffff33) appears on dark overlays.

Other measured text colors are #ffffff (473 characters, on dark overlays), #000000 (159), #f7e731 yellow text (46 characters) and #ffffff99 (24, white at 60%). The root variables also define a white 20% (`--color-white-20`, #fff3) and white 60% (`--color-white-60`, #fff9), an `--color-error` of red, and a `--color-grey-dark` of #e6e6e6. Color is therefore handled mostly through alpha steps of one off-black (5%, 10%, 50% and 60% are all published), which keeps the page monochrome apart from the yellow accent and the three soft tints.

## Typography

Two custom families, both named generically in CSS: "sans" (4847 characters) and "mono" (909 characters), each with a "Fallback" face and then system-ui, Arial, Helvetica, sans-serif. The loaded faces are sans 500 normal, sans 500 italic and mono 500 normal. The root variables name them `--font-sans`/`--font-basel` and `--font-mono`/`--font-styrene`. The computed weight on every measured character is 400.

The scale is large and tightly tracked. `display` is 120px on a 120px line with -3px letter spacing (the h1). `heading` is 84px on 92.4px with -2.1px. Other display sizes measured: 142px (-3.55px), 104px (-2.6px), 42px (-1.05px) and 32px (-0.8px). `subheading` is 24px on 31.2px with -0.6px. `body` is 18px on 25.2px with normal tracking (3837 characters, the most-used size). `button` and labels are the mono face at 14px on 14px with +0.35px tracking (745 characters), and 12px mono with +0.3px. `nav` is 16px on 24px. The mobile display is 42px on 42px with -1.05px.

The type sizes listed in `fontSizesByChars` (18px, 14px, 32px, 20px, 42px, 84px, 24px, 12px, 120px, 142px, 16px, 104px) are all drawn from the published `--text-*` steps or their rem equivalents; for example 32px is `--text-4xl` at 2rem and 42px is `--text-6xl` at 2.625rem. Large statements such as the word "Mundane" below the story card are set in the same display family as the h1, so the page uses one scale for both hero and section headings, and it relies on size and tracking, not weight, to rank text, since every measured character is weight 400.

## Layout

The page is a single centered column with generous vertical space: the h1 is 971px wide with 16px side padding, and the hero photo spans nearly the full page width. The root variable `--max-width-content` is 108rem, with container steps `--container-5xl` 64rem and `--container-6xl` 72rem. The spacing base is `--spacing: .25rem`. Gaps measured are 8px (72 containers), 24px, 4px, 6px, 12px, 16px and 48px. The header measured 24px padding. Text sections alternate between large single sentences and image-plus-caption layouts.

## Elevation & Depth

No box shadows were measured. Cards and the header outline use a 1px 10% off-black border instead (#1a1a1a1a). Dark scrims at 80% black sit over video thumbnails, and a 5% off-black (`--color-off-black-05`, #1a1a1a0d) is the nav button hover fill. Hover on navigation links dims the text and border from #1a1a1a to 63% alpha, with no shadow.

## Shapes

Radii are soft and graduated. The measured counts are: a full pill (3.35544e+07px, 36 elements, `pill`), 4px (18), 12px (17), 6px (2), 8px (1) and 24px (1). The root radius variables are 0.125rem, .25rem, .375rem, .5rem, .75rem, 1rem and 1.5rem. The primary button uses 6px (`sm`); the secondary and link controls use pill; the hero photograph and cards use rounded corners visible in the capture.

## Components

- **button-primary**: #000000 fill, white 14px mono label, 6px radius, 79px tall (measured on the "Our story" control).
- **button-secondary**: #000000 fill, white mono label, pill radius, padding 12px 14px, 40px tall.
- **link**: black mono 14px label in a pill with a 1px #0000001a border, padding 12px 14px.
- **nav / nav-link**: 24px padding, #1a1a1a 16px sans links (Technology, Company, Careers, Blog, Beta, Our story); hover dims them to 63% alpha.
- **card**: black fill with white text and 6px radius as measured; the framed story card on the page uses a thin light border.
- **footer**: white background, black text.

## Design System Architecture

No public design-system documentation was opened. The site publishes its system as Tailwind-style root custom properties (`--color-*`, `--text-*`, `--radius-*`, `--spacing`, `--container-*`, `--tw-*` utilities). The type steps run `--text-2xs` .625rem to `--text-15xl` 10.5rem, with the display steps (`--text-13xl` 7.5rem = 120px, `--text-11xl` 5.25rem = 84px) matching the measured sizes. This file records only measured values; no tokens repository was consulted.

## Do's and Don'ts

- Do set headlines in the sans face with negative tracking (-3px at 120px) and keep them off-black.
- Do use the mono face only for small button labels and tags.
- Do keep body copy at 18px in the 63% off-black.
- Do use yellow (#f7e731) as a single accent, not as a text color on white.
- Don't use hard shadows; use 1px 10% off-black outlines.
- Don't use sharp corners on buttons; the system uses 6px or pill.
- Don't document the consent or utility overlays as brand components.

## Responsive Behavior

Measured at 390px: the h1 falls from 120px to 42px with a 42px line height and -1.05px tracking. The mobile size census is led by 14px, 12px, 18px, 16px and 42px, with 28px, 10px, 24px and 60px also present. Breakpoint values, nav collapse and column counts were not measured.

## Iteration Guide

1. Start on #ffffff with a 120px off-black headline and an 18px 63% off-black paragraph.
2. Add one big rounded photograph; follow with a hairline-bordered caption card.
3. Use yellow, warm grey (#f3f3f0) and pale blue (#d9ecee) as section tints.
4. Make buttons black with white 14px mono labels, 6px or pill corners.
5. Add any new color only from the published variables listed above.
