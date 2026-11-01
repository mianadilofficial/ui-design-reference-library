---
version: alpha
name: Knight Club
category: "Thai Brands"
description: "Knight Club (knightclub.co.th), a Thai government-technology provider on Next.js and Tailwind: Kanit at 800 for a 108.8px display, burgundy #6e0625 action, gold #b39359 accent, charcoal #1a1a1a, slate ink #475569, square 0px buttons and 8px-radius cards."
colors:
  canvas: "#ffffff"
  ink: "#475569"
  primary: "#6e0625"
  on-primary: "#ffffff"
  charcoal: "#1a1a1a"
  surface-subtle: "#f8fafc"
  ink-on-dark-muted: "#ffffff8c"
  ink-muted: "#64748b"
  accent-gold: "#b39359"
  hairline: "#e2e8f0"
  link-border: "#cbd5e1"
  footer-border: "#f1f5f9"
typography:
  display:
    fontFamily: Kanit, "Kanit Fallback", sans-serif
    fontSize: 108.8px
    fontWeight: 800
    lineHeight: 97.92px
    letterSpacing: "-3.264px"
  display-mobile:
    fontFamily: Kanit, "Kanit Fallback", sans-serif
    fontSize: 50.7px
    fontWeight: 800
    lineHeight: 45.63px
    letterSpacing: "-1.521px"
  heading:
    fontFamily: Kanit, "Kanit Fallback", sans-serif
    fontSize: 43.52px
    fontWeight: 700
    lineHeight: 47.872px
  subheading:
    fontFamily: Kanit, "Kanit Fallback", sans-serif
    fontSize: 17px
    fontWeight: 700
    lineHeight: 27.2px
    letterSpacing: 0.68px
    textTransform: uppercase
  body:
    fontFamily: Kanit, "Kanit Fallback", sans-serif
    fontSize: 17.92px
    fontWeight: 400
    lineHeight: 31.36px
  button:
    fontFamily: Kanit, "Kanit Fallback", sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 19.2px
    letterSpacing: 1.44px
    textTransform: uppercase
  nav:
    fontFamily: Kanit, "Kanit Fallback", sans-serif
    fontSize: 23px
    fontWeight: 700
    lineHeight: 25.3px
    letterSpacing: "-0.23px"
  input:
    fontFamily: Kanit, "Kanit Fallback", sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  none: 0px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 18px
  s9: 19px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px 28px
    height: 49px
  button-secondary:
    backgroundColor: "{colors.charcoal}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 19px 34px
    height: 59px
  link:
    textColor: "{colors.charcoal}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 19px 34px
    borderColor: "{colors.link-border}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.charcoal}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.charcoal}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.charcoal}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 20px 22px
    height: 65px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.charcoal}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.charcoal}"
    rounded: "{rounded.none}"
    padding: 72px 40px
    borderColor: "{colors.footer-border}"
---

## Overview

Knight Club's homepage (title "Knight Club · Strategic Solutions", at knightclub.co.th/knight-club) presents a technology provider to Thai government agencies. The hero line is "Trusted by the State. Built for People.", set at 108.8px in Kanit 800 with "the State." in burgundy, an eyebrow "NATIONAL DIGITAL INFRASTRUCTURE" with a short burgundy rule, a paragraph with a vertical burgundy bar ("We are a technology knighthood trusted by government agencies to modernize their administration systems to world-class standards ..."), and two buttons: a solid charcoal "VIEW NATIONAL PROJECTS" and an outlined "TALK TO US →". A faint shield-and-crown logo watermark and hairline grid lines sit behind the hero. A four-cell statistics strip follows ("20+ Government agencies served", "24/7 Mission-critical support", "100% Data sovereignty", "Tier-A Security standards") with burgundy numerals, then a "Trusted by · Our experience" wall of Thai government and state-enterprise logos (central bank, savings bank, EXIM, electricity authority, expressway and rail authorities, ministries and departments).

The header has the shield logo with the wordmark "Knight Club" and the tagline "STRATEGIC SOLUTIONS", three dropdown menus (Services, Products, Work) and a burgundy "CONTACT" button. The feel is editorial and institutional: very large condensed-weight headlines, tiny letter-spaced uppercase labels, sharp rectangles, and a wine-red plus gold pairing on white. Measured colors: `{colors.canvas}` #ffffff, `{colors.ink}` #475569, `{colors.primary}` #6e0625, `{colors.charcoal}` #1a1a1a and `{colors.accent-gold}` #b39359.

Further detail from the capture: the logo walls are split into two groups by a thin horizontal rule. The first group (state enterprises and financial institutions) is arranged in rows of four, three and three logos; the second (ministries and departments) in rows of four with a partial row below. Logos are shown in their own full colors on white with generous space around each, so the wall is the most colorful area of the page while the interface itself stays burgundy, charcoal and slate. The section label "TRUSTED BY · OUR EXPERIENCE" is a centered, tiny, widely tracked uppercase caption. The statistics strip repeats the same label style under each number, which gives the page a consistent two-level rhythm: very large heavy numerals or headlines paired with tiny uppercase captions. Copy is confident and short, built from declarative claims ("Trusted by the State.") rather than feature lists.

## Colors

- **`{colors.canvas}` #ffffff:** dominant ground (weight 12,923); `{colors.charcoal}` #1a1a1a is the second-largest background (1,980) and the text color of the h1 and nav; `{colors.surface-subtle}` #f8fafc (748) is the statistics-strip ground; #e2e8f0 (`{colors.hairline}`, 400) and #f1f5f9 (`{colors.footer-border}`, 226) are rule and border fills.
- **`{colors.primary}` #6e0625:** burgundy CTA fill ("CONTACT") with white text `{colors.on-primary}`; also text (319 characters, the numerals and "the State.").
- **`{colors.accent-gold}` #b39359:** measured as text on 298 characters, used for small accents; its background area weight is 0.
- **Text:** `{colors.ink}` #475569 is the most-read color (1,095 characters), `{colors.ink-muted}` #64748b (371), `{colors.ink-on-dark-muted}` #ffffff8c (768, white at partial opacity on dark areas), #94a3b8 (150, not tokenized), and white (174).
- **`{colors.link-border}` #cbd5e1:** the border on the outlined "TALK TO US" link.
- All values above were measured on rendered elements; none were taken from the Tailwind variable list.

## Typography

One family, Kanit with a "Kanit Fallback" (3,506 counted characters), loaded at 400, 600, 700, 800 and 900. Weights by characters: 400 (2,147), 700 (881), 600 (249), 800 (212), 900 (17).

- **Display `{typography.display}`:** 108.8px, weight 800, line-height 97.92px, letter-spacing -3.264px (tight, line-height under 1). Mobile: 50.7px, line-height 45.63px, letter-spacing -1.521px (`display-mobile`), 350px wide and 183px tall.
- **Heading `{typography.heading}`:** 43.52px, weight 700, line-height 47.872px. A 70.4px size (57 characters) and 64px, 46px, 38px sizes also appear.
- **Subheading `{typography.subheading}`:** 17px, weight 700, line-height 27.2px, letter-spacing 0.68px, uppercase.
- **Body `{typography.body}`:** 17.92px, weight 400, line-height 31.36px; 14.5px is the most frequent size (1,199 characters), 11px second (401, the letter-spaced captions at 0.88px).
- **Button `{typography.button}`:** 12px, weight 700, line-height 19.2px, letter-spacing 1.44px, uppercase.
- **Nav `{typography.nav}`:** 23px, weight 700, line-height 25.3px, letter-spacing -0.23px. **Input:** 15px, weight 400, line-height 24px.

## Layout

The desktop page is 1280px wide and 7,887px tall. The hero is left-aligned in a wide container with the watermark at right; the statistics strip is four equal cells divided by hairlines and spans the full width; logo walls are centered grids with four to three logos per row. Spacing values measured: 1, 4, 8, 10, 14, 15, 16, 18, 19 and 20px. Buttons use padding 15px 28px (primary, 49px high) and 19px 34px (secondary, 59px high); the input is 65px high with padding 20px 22px; the footer uses padding 72px 40px.

## Elevation & Depth

No shadow tokens were recorded in the measured data. Depth comes from hairlines (#e2e8f0, #f1f5f9), the faint watermark, and white-on-charcoal contrast. Cards are outlined with the hairline color rather than lifted.

## Shapes

Buttons, nav, inputs and footer measured 0px radius (`{rounded.none}`); the card token uses 8px (`{rounded.xs}`) with a `{colors.hairline}` border. The capture shows sharp rectangular buttons and a rounded-rectangle shield logo.

## Components

- **Primary button (`button-primary`):** burgundy `{colors.primary}`, white text, Kanit 12px 700 uppercase with 1.44px tracking, 0px radius, padding 15px 28px, height 49px; label "CONTACT".
- **Secondary button (`button-secondary`):** `{colors.charcoal}` fill, white text, same type, padding 19px 34px, height 59px; label "VIEW NATIONAL PROJECTS".
- **Outlined link (`link`):** charcoal text, border `{colors.link-border}`, padding 19px 34px; label "TALK TO US →".
- **Nav / nav-link:** white background, charcoal Kanit 23px 700 links with dropdown chevrons.
- **Text input:** 65px high, padding 20px 22px, 15px text.
- **Card:** white, 8px radius, hairline border. **Footer:** padding 72px 40px, top border `{colors.footer-border}`.
- **Statistic cell:** burgundy 800-weight numeral over a small letter-spaced uppercase slate caption on `{colors.surface-subtle}`.

## Design System Architecture

No public design system or brand guideline was found, and none was searched for. The page source shows a Next.js build (chunks under `/_next/static/`), and the extracted root variables are Tailwind v4 variables (`--tw-*`, `--color-zinc-400`, `--color-zinc-600`, `--color-zinc-950`, `--text-3xl`, `--container-md` 28rem, `--tracking-tight` -.025em) alongside `--font-kanit` and `--default-font-family` set to Kanit. The brand colors #6e0625 and #b39359 are not published as variables; they were read from rendered elements.

## Do's and Don'ts

Use the lists below together with the measured tokens above. They describe only what the capture and extraction show: the header, the hero, the statistics strip and the client logo walls. When a new page is needed, compose it from the same parts: an eyebrow with a short rule, a very large heavy headline, one short paragraph with a vertical accent bar, one solid button and one outlined button, then hairline-divided content cells.

- Do set headlines in Kanit 800 with tight negative tracking and sub-1 line-height.
- Do use burgundy `{colors.primary}` for the single call to action and for emphasis words.
- Do keep small labels in 11px to 12px uppercase with wide tracking.
- Do keep corners square on buttons and inputs.
- Don't add shadows or gradients; none were measured.
- Don't use the client logos' colors as brand colors.
- Don't use gold as a fill; it was measured only as text.

## Responsive Behavior

Measured at 390px: the h1 is 50.7px, weight 800, line-height 45.63px, letter-spacing -1.521px, 350px wide and 183px tall (three lines); an h2 "Our Strategic Units." measured 32px, weight 700, line-height 35.2px. Navigation collapse, stat-strip reflow and spacing are not measured.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` and Kanit.
2. Build the hero from the 108.8px display, a burgundy emphasis phrase and two square buttons.
3. Add hairline-divided statistic cells on `{colors.surface-subtle}`.
4. Reserve `{colors.accent-gold}` for small text accents.
5. Run `node web/scripts/verify-designs.mjs --slug=knight-club`.
