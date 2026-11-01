---
version: alpha
name: Render
category: "Backend, Database & DevOps"
description: "Render sets light Roobert 300 headlines (80px, -2.4px tracking) and PP Neue Montreal body text in #0d0d0d on white, with square 0px-radius black buttons (66px and 48px tall), #e3e3e3 hairline grids, a #8a05ff violet accent for highlighted words and icon tiles, a multicolor service list and a #141414 footer."
colors:
  canvas: "#ffffff"
  ink: "#0d0d0d"
  primary: "#0d0d0d"
  on-primary: "#ffffff"
  surface-dark: "#141414"
  accent-violet: "#8a05ff"
  ink-body: "#4d4d4d"
  ink-muted: "#6b6b6b"
  accent-orange: "#d67f2e"
  hairline: "#e3e3e3"
  accent-green: "#009e7a"
  surface-lavender: "#e7dbff"
  surface-soft: "#f8f7fa"
typography:
  display:
    fontFamily: Roobert, "Roobert Fallback", sans-serif
    fontSize: 80px
    fontWeight: 300
    lineHeight: 80px
    letterSpacing: "-2.4px"
  display-mobile:
    fontFamily: Roobert, "Roobert Fallback", sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 52px
    letterSpacing: "-0.96px"
  heading:
    fontFamily: Roobert, "Roobert Fallback", sans-serif
    fontSize: 64px
    fontWeight: 300
    lineHeight: 67.2px
    letterSpacing: "-1.28px"
  heading-feature:
    fontFamily: Roobert, "Roobert Fallback", sans-serif
    fontSize: 40px
    fontWeight: 300
    letterSpacing: "-0.6px"
  subheading:
    fontFamily: Roobert, "Roobert Fallback", sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36.8px
    letterSpacing: "-0.8px"
  body:
    fontFamily: PPNeueMontreal, "PPNeueMontreal Fallback", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: 0.09px
  button:
    fontFamily: PPNeueMontreal, "PPNeueMontreal Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 17.92px
  label:
    fontFamily: PPNeueMontreal, "PPNeueMontreal Fallback", sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 15px
    letterSpacing: "0.24px"
    textTransform: uppercase
  link:
    fontFamily: PPNeueMontreal, "PPNeueMontreal Fallback", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.94px
    letterSpacing: "-0.14px"
rounded:
  xs: 2px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 24px 30px
    height: 66px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 48px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid #0d0d0d"
    padding: 0px 24px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
---

# Render

## Overview

Render (render.com, title "Render | The cloud for builders") presents a cloud hosting platform with an editorial, engineered feel. The page opens with a thin promotional strip ("Migrating production infrastructure? Get up to $10…"), then a white header with the Render wordmark, plain text menus (Product, Developers, Resources, Pricing, Company) and, on the right, "Migrate to Render", "Sign in" and a solid black "Get started" button. The hero is split: on the left a very large, very light headline — "Your fastest path to production for HIPAA apps", with the final words set in violet and swapped by an animated rotator (the extraction caught "data pipelines" and "HIPAA apps") — over a two-line intro and a pair of buttons ("Start for free" solid black, "Talk to sales" outlined). On the right sits a product screenshot of the Render dashboard behind a monospace `$ git push` chip.

Below, a row of customer logos sits under a small uppercase caption, then "Click, click, done." — three numbered steps in a hairline grid, each with a small UI mockup. A violet-tiled strip of framework icons ("Whatever your stack, it runs on Render") leads into "Deploy apps and agents with zero ops", a large bordered feature grid on a faintly tinted #f8f7fa band whose first cell lists services in different colors (web services in violet, Postgres databases in green, cron jobs in orange, workflows in pink). Further sections — a customer quote set in monospace attribution, "Intuitive infrastructure, designed for builders", "Stay secure and resilient by default" — use 4-column icon-and-text grids. A pale band with scattered colored language icons frames the closing "Start building with Render" call to action, and the page ends on a dark footer with a pixel-art violet motif.

The voice is short and confident: "Click, click, done.", "Build products, not compliance.", "Zero ops, zero surprises."

## Colors

- **Canvas #ffffff** — the dominant background (7,577 area units).
- **Ink #0d0d0d** — headings, body samples, nav and links (2,307 characters). It is also the button fill, so **primary** is #0d0d0d with **on-primary #ffffff**.
- **Ink-body #4d4d4d** — 1,629 characters of secondary paragraph text in grids and cards.
- **Ink-muted #6b6b6b** — 547 characters of captions and small print.
- **Accent-violet #8a05ff** — the brand accent: highlighted headline words, the icon tiles and the first service name (139 characters of text, 228 units of background).
- **Accent-green #009e7a** and **accent-orange #d67f2e** — the "Postgres databases" and "cron jobs" words in the multicolor service list. The page also measured small amounts of #e96770, #5dc70a, #c29800 and #0088e5 text in the same feature context.
- **Surface-lavender #e7dbff** — pale violet fills (51 units).
- **Surface-soft #f8f7fa** — the background of the large feature-grid band (y 2657–7168).
- **Surface-dark #141414** — the second largest background (1,417 units), the dark footer area.
- **Hairline #e3e3e3** — 23 of 27 measured borders: the lines of every grid.

Further pastel fills measured in small amounts — #dffeed, #e0f4ff, #faefe5, #fce2fe, #fce9ea, #f0f0f0, #f4f0ff — are tile and badge backgrounds. The brand guidelines PDF shipped in Render's press Brand Kit sets the logo rule: black logo on light backgrounds, white on dark backgrounds, with WCAG AA or AAA contrast.

## Typography

Three loaded families:

- **Roobert** (weights 300 and 400) — all headlines. 1,022 characters.
- **PP Neue Montreal** (400, 500) — body, buttons, nav and footer. 3,802 characters.
- **PP Neue Montreal Mono** (400, 500) — small technical captions. 117 characters.

Scale:
- **Display** — Roobert 80px/80px, weight 300, -2.4px (-0.03em).
- **Heading** — Roobert 64px/67.2px, 300, -1.28px ("Click, click, done.").
- **Heading-feature** — Roobert 40px, 300, -0.6px (feature-grid titles; 454 characters).
- **Subheading** — Roobert 32px/36.8px, 400, -0.8px ("Select a service").
- **Body** — PP Neue Montreal 18px/26px, 400, +0.09px.
- **Button / nav** — PP Neue Montreal 16px, 400; the most common text style is 16px with +0.16px tracking (2,148 characters).
- **Link** — 14px/16.94px, -0.14px. **Label** — 12px/15px, 500, uppercase, +0.24px (footer column titles such as "FEATURES").

The signature is the contrast between huge headlines at a light 300 weight with tight negative tracking and small, slightly positively tracked body text. Both Roobert and PP Neue Montreal are commercial typefaces (fallbacks declared as "Roobert Fallback" and "PPNeueMontreal Fallback"); if unavailable, a light geometric grotesque for headlines and a neutral grotesque for text keep the effect.

## Layout

Measured at 1280px (1,265px content width with scrollbar). The hero band spans the full width with the headline column on the left (633px wide) and the dashboard image on the right. The feature-grid band runs x=131 to x=1126; the quote band x=80 to x=1105; the closing CTA band x=198 to x=1225, centred. Grids go up to 5 columns; the step row uses 3, the icon-and-text grids 4.

Gaps measured: 8px (90 times), 10px, 40px, 16px, 32px, 24px, 50px, 20px, 6px, 12px, 15px and 160px. Paddings: 2px, 5px, 80px (22 times — section padding), 20px, 36px, 24px, 23px, 10px, 30px, 60px, 16px and 8px. The page is 8,683px tall. Grids are drawn with 1px #e3e3e3 lines rather than gutters, so cells sit edge to edge in a ruled table.

## Elevation & Depth

None by shadow: the extraction recorded no box-shadows. Depth comes from the hairline grid, the tinted #f8f7fa band behind the feature section, product screenshots that carry their own UI chrome, and the jump to the #141414 footer. Keyboard focus shows a 1px auto outline in the browser's focus color; there is no custom focus ring.

## Shapes

Square. The radii recorded are a single 2px element and a single 937px pill element; every button, card and grid cell measured at 0px. Buttons are flat black rectangles; the outlined variant uses a 1px #0d0d0d border. Icon tiles in the stack strip are solid violet squares. Small decorative pixel blocks in the footer echo the square geometry.

## Components

- **Primary button (hero)** — #0d0d0d fill, #ffffff label, PP Neue Montreal 16px/400, 0px radius, 66px tall, 24px 30px padding ("Get started").
- **Secondary button** — same fill, 48px tall, 0px 24px padding, +0.16px tracking ("Start for free", "View Templates", "Trust center", "Deploy your app for free").
- **Outlined button** — transparent, #0d0d0d label and `1px solid #0d0d0d` border, 48px tall ("Talk to sales", "HIPAA on Render").
- **Text link** — #0d0d0d 14px with a trailing arrow ("See customer stories →", "Preview environment docs →").
- **Step card** — numbered violet square badge, Roobert 32px title, #4d4d4d description, a small UI mockup, separated by hairlines.
- **Feature cell** — Roobert 40px light title, short text, a docs link, an illustration or code panel; bordered by #e3e3e3.
- **Icon tile** — square violet tiles holding white framework logos.
- **Footer** — dark, uppercase 12px/500 column titles with +0.24px tracking, white links.

## Design System Architecture

No public component library or design-token package was found. https://render.com/brand returned HTTP 404. The press page (https://render.com/press) links a Brand Kit zip containing logo files (wordmark and logomark in black and white, SVG/PNG/PDF), a founder headshot and `_Render-Logo-Guidelines.pdf` (last updated 12.11.2023), which covers the wordmark, the icon, clear space based on the icon size, black-on-light / white-on-dark usage, WCAG AA/AAA contrast, and misuse (low-contrast or cluttered backgrounds). The guidelines contain no color or typography specification. The shipped CSS exposes a color scale as custom properties (`--color-purple-200 #d1b8ff`, `--color-purple-300 #c29eff`, `--color-pink-500 #e615f2`, `--color-green-25 #f5fff9`, `--color-orange-600`, `--color-blue-700`), plus Osano consent-manager variables that are not brand UI. Breakpoints in the stylesheet include 640, 768, 1024, 1180, 1440 and 1920px.

## Do's and Don'ts

**Do**
- Set headlines in Roobert 300 with tight negative tracking (-0.03em at 80px) and keep body in PP Neue Montreal 16–18px with slight positive tracking.
- Keep every button a square black #0d0d0d rectangle with a white label; pair with a 1px outlined twin.
- Highlight one phrase per headline in #8a05ff violet.
- Draw grids with 1px #e3e3e3 lines and no gutters.
- Use the logo black on light and white on dark, with clear space equal to the icon (brand guidelines).

**Don't**
- Don't round buttons or cards.
- Don't add drop shadows.
- Don't use bold headline weights — the measured headings are 300 and 400.
- Don't put the logo on low-contrast or cluttered backgrounds (guidelines misuse page).
- Don't spread the multicolor service accents beyond the service list and icons.
- Don't treat the cookie-consent dialog styling as brand UI.

## Responsive Behavior

Measured at a 375px mobile viewport: the h1 drops from 80px/80px to 48px/52px with -0.96px tracking (`display-mobile`), and the h2 drops from 64px to 36px/37.8px. Body text stays 18px/26px. The header shrinks to 48px with 2 visible links and a visible "Open menu" toggle, as recorded by the mobile pass. The first visible primary button becomes the 48px "Start for free" at full content width (345px). Bands keep 1–2 columns on mobile versus up to 5 on desktop, with content between roughly x=8 and x=363. The mobile page is about 13,350px tall versus 8,683px on desktop. The size distribution on mobile shifts toward 20px and 32px text (742 and 506 characters). Other mobile behaviour was not measured.

## Iteration Guide

1. Start with white canvas and #0d0d0d text; set headlines in Roobert 300 at 80/64/40/32px with the measured negative tracking.
2. Build body copy in PP Neue Montreal 18px/26px and #4d4d4d for secondary text.
3. Use square black buttons: 66px for the hero CTA, 48px elsewhere, plus the 1px outlined variant.
4. Lay out features in edge-to-edge hairline grids (#e3e3e3) with 80px section padding.
5. Add violet #8a05ff only to headline highlights, step badges and icon tiles.
6. Close with a centred CTA band and the dark footer with 12px uppercase labels.
7. Re-run the gate after changes; never add radii or shadows that were not measured.
