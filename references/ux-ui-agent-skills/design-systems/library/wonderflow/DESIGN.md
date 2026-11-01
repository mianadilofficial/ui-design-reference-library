---
version: alpha
name: Wonderflow
category: "Design Systems"
description: "Wonderflow marketing site for its agentic consumer-intelligence platform: system-ui sans at bold 700 with tight tracking (52.4442px display, 20px body), a single brand red #e00000 (hover #c10000) on 4px-radius buttons, slate text #444954 over white and #f8f9fa, and one near-black #1f2227 band. The look comes from the open-source Wanda design system's tokens."
colors:
  canvas: "#ffffff"
  ink: "#444954"
  primary: "#e00000"
  on-primary: "#ffffff"
  surface-soft: "#f8f9fa"
  surface-dark: "#1f2227"
  ink-muted: "#9da4b2"
  ink-black: "#000000"
  ink-faint: "#d2d6de"
  hairline: "#e3e6ec"
  primary-hover: "#c10000"
typography:
  display:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 52.4442px
    fontWeight: 700
    lineHeight: 57.6886px
    letterSpacing: "-1.57332px"
  display-mobile:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 32.6666px
    fontWeight: 700
    lineHeight: 35.9332px
    letterSpacing: "-0.979997px"
  subheading:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 26px
    letterSpacing: "-0.2px"
  body:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 28px
  button-secondary:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 28px
rounded:
  xs: 4px
  sm: 6px
  md: 9.6px
  lg: 12px
  xl: 20px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 36px
  s10: 38px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 50px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 10px 16px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    borderColor: "{colors.hairline}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-dark}"
    rounded: "{rounded.lg}"
    padding: 40px
    borderColor: "{colors.hairline}"
---

## Overview

Wonderflow sells a voice-of-customer and product-intelligence platform to enterprise teams, and the homepage measured here (https://www.wonderflow.ai) presents it with the restraint of a serious data product. The capture opens on a centered stack: a small uppercase eyebrow ("AGENTIC CONSUMER INTELLIGENCE PLATFORM"), a two-line bold headline "Turn customer feedback into confident executive decisions" at 52.4442px with tight negative tracking, a paragraph in slate, a row of analyst and review badges (G2 4.5/5, Forrester, Capterra, Gartner), and one solid red button, "Request a demo". Beneath that sits a large product screenshot of an "Overall" dashboard that fades out into white at its bottom edge, followed by a "Trusted by global enterprise leaders" grid of grayscale customer logos (Philips, Beko, Michelin, Resideo, Harman, Bissell, Roborock, Haier, Nespresso, Stella & Chewy's, Versuni, Pirelli, Shiseido, ASICS).

Midway down the page the canvas flips to a near-black band (#1f2227) for "Agentic UX for Product Intelligence", where two white rounded cards, "Human-to-Agent experience" and "Agent-to-Agent experience", carry checklists with light-green circular arrow bullets and product screenshots. The overall mood is clean, light, enterprise-credible, with a single warm red as the only brand accent. The voice is declarative and outcome-led ("reduce research spend, align teams, and make product decisions backed by data, not opinions"), and button labels are imperative and short: "Request a demo", "Book a demo", "Log in", "See Wonderflow in action".

## Colors

The color story is a neutral slate scale plus one red. The values below are measured from the live page and, where noted, match the published tokens of the Wanda design system that Wonderflow open-sources.

- **Canvas #ffffff** is the dominant ground; **surface-soft #f8f9fa** is the pale gray used for alternating bands and card interiors.
- **Ink #444954** is the primary text color, by far the most-read color on the page; **surface-dark #1f2227** doubles as the hero headline color and as the full-width dark band; **ink-muted #9da4b2** is the quiet gray for tertiary text; **ink-faint #d2d6de** is the lightest text/line gray; **ink-black #000000** appears in small amounts for logos and icons.
- **Hairline #e3e6ec** is the 1px border color used on cards and the secondary link-style button.
- **Primary #e00000** fills every demo call-to-action; **primary-hover #c10000** is the darker red the button takes on hover. On-primary is white #ffffff.

The site publishes its palette as Webflow variables named `--primary-0` through `--primary-100` for the slate scale, plus `--cta-default` (#e00000) and `--cta-dark` (#c10000). Wanda's own token source names the brand color `support.brand` with the value #e00000 and a `cta.dark` of `hsl(0 100% 38%)`, so the site's red and its hover red are the same ones the design system declares. A second set of variables (`--untitled-ui--*` grays and purples, plus a few "conversion-flow" accents such as coral and medium purple) is also present in the stylesheet; those belong to an imported template library and a conversion-flow graphic, and are not part of the core brand palette.

## Typography

Wonderflow sets all interface text in the platform's system UI sans-serif stack: `system-ui`, `-apple-system`, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, then generic sans-serif. This is the same choice Wanda declares: its typography token for the sans family is `system-ui, sans-serif`. Montserrat is also loaded on the page across weights 100 to 900, but the measured headline, body and button roles all resolve to the system stack, so Montserrat is treated as secondary.

- **Display 52.4442px / 57.6886px**, weight 700, letter-spacing -1.57332px, used for the hero headline. On mobile (390px viewport) it becomes **32.6666px / 35.9332px** with -0.979997px tracking.
- **Subheading 20px / 26px**, weight 700, letter-spacing -0.2px, used for card titles such as "Human-to-Agent experience".
- **Body 20px / 32px**, weight 400, for the hero paragraph and section lead-ins; line height is 1.6.
- **Button 16px / 24px**, weight 600; **button-secondary and nav 14px / 28px** at weights 500 and 600 respectively.

Because the typeface is whatever the viewer's operating system provides (San Francisco on Apple devices, Segoe UI on Windows, Roboto on Android), no font substitution is required, and the tight negative tracking on bold headings is what gives the page a consistent editorial density across platforms.

## Layout

Layout is a centered single column with wide full-bleed bands. The hero text column is narrow and centered, the dashboard screenshot spans most of the 1280px desktop width, and the logo grid is two rows of seven with generous gaps. The dark section uses a two-up card layout with equal columns, each white card padded at 40px with a 12px radius and a 1px hairline border.

The measured spacing scale is 4, 8, 10, 12, 15, 16, 20, 24, 36 and 38px. Wanda's published spacing tokens run in steps of 8px (2, 4, 8, 16, 24, 32, 40 and upward), and the site's 4/8/16/24 values are consistent with that, but the extra values (10, 15, 36, 38) show that Webflow-authored sections are not strictly bound to it. Buttons use 12px by 24px padding and stand 50px tall; the second demo button variant uses 10px by 16px at 48px tall. The top navigation is a single row: logo at left, five items (Solutions, Resources, Pricing, Integrations, Company) with chevrons on three of them, and a "Log in" outline button plus a red "Book a demo" button at right.

## Elevation & Depth

Elevation is subtle. The dashboard screenshot and cards use very light shadows: small blur values with a near-transparent navy or black tint (the measured shadows include a tight 2px/7px blur and a wide 50px-blur glow at about 5 percent opacity). Most surfaces, including buttons, nav and the logo grid, have no shadow at all (`none` is the most common value in the stylesheet). The hero screenshot's fade to white at its lower edge is a layering device rather than a shadow: it makes the product UI feel as though it dissolves into the page and invites scrolling. Separation elsewhere comes from background tint changes and hairline borders.

## Shapes

Radii are small on controls and moderate on containers. The buttons use 4px; other measured radii include 6px, 9.6px, 12px (cards), 20px, 100px and a full pill. The Wanda radius tokens are 4, 8, 16, 24, 32, 40 and 48px, so the 4px control radius is on the design system's scale while some of the Webflow-authored values are not. The overall feel is crisp rectangular buttons with softly rounded content cards. Bullet icons are light-green circles with a dark arrow; rating badges and analyst logos are shown flat, without outlines.

## Components

**Primary button ("Request a demo", "Book a demo").** Solid #e00000 fill, white label, 16px weight 600, 4px radius, 12px by 24px padding, 50px tall, 1px border in the same red. Hover darkens the fill to #c10000.

**Secondary demo button.** The same red fill and white label at 14px weight 500, 4px radius, 10px by 16px padding, 48px tall; this is the compact version seen in the header.

**Outline link button ("Log in").** White fill, ink-colored label, 4px radius, 12px by 24px padding and a 1px #e3e6ec border.

**Navigation.** White bar, items at 14px weight 600 in black, with small chevrons on dropdown items.

**Card.** White fill, 12px radius, 40px padding, 1px hairline border; used in pairs on the dark band, each with a bold 20px title, a slate description, a checklist with circular arrow bullets and a product image at the bottom.

**Eyebrow label.** Small uppercase tracked text above section headings.

**Rating and logo strips.** Brand and analyst marks in their own colors for review badges, but customer logos in neutral gray.

## Design System Architecture

Wonderflow publishes an open-source design system called Wanda ("a complete design system made to provide complete and enjoyable experience while using Wonderflow's digital products"), documented at https://design.wonderflow.ai and developed in the Apache-2.0 monorepo https://github.com/wonderflow-bv/wanda. The monorepo contains documentation apps and packages including `tokens`, `themes`, `react-components` and `charts`. The documentation's navigation lists designers' resources (Brand, Foundation, Symbols, Motion, Themes) and developers' resources (Installation, Design tokens, Utilities, Using themes, SSR).

The marketing site uses Wanda's tokens, not its React components. The homepage footer links directly to the wonderflow-bv/wanda repository, the stylesheet defines `--primary-0` to `--primary-100`, `--cta-default`, `--cta-dark` and `--global-foreground`, which mirror the token names in Wanda's light theme (`cta.default`, `cta.dark`, `global.foreground`), and the red and hover red equal Wanda's brand and CTA-dark values. The slate scale is a few shades off from Wanda's published hex values (for example, the site's primary-70 is #444954 where Wanda's token file lists #454a55). The cause is not documented in any page opened here. The page itself is built in Webflow, as its shared stylesheet is served from the Webflow CDN. Wanda's typography token (`system-ui, sans-serif`), its 4px radius step and its breakpoints at 480, 768, 960, 1280 and 1600px are the system-level counterparts of what the page shows.

## Do's and Don'ts

- Do use #e00000 only for the main conversion action and let slate neutrals carry everything else.
- Do pair bold 700 headlines with tight negative tracking and a 1.1 line height.
- Do keep body copy at 20px/32px in #444954 on white or #f8f9fa.
- Do use a single dark band (#1f2227) for a feature section, with white cards on it.
- Do show product UI in large screenshots that fade into the page.
- Don't introduce additional accent colors; the purple, coral and pink variables in the stylesheet are not brand colors.
- Don't use shadows on buttons.
- Don't round primary buttons beyond 4px.
- Don't add a custom web font for headings; the system stack is intentional.
- Don't render customer logos in full color; keep them gray.

## Responsive Behavior

Measurements were taken at 1280px and at a 390px mobile viewport. On mobile the hero headline reduces from 52.4442px to 32.6666px with the line height going from 57.6886px to 35.9332px, and the letter-spacing eases from -1.57332px to -0.979997px, so the tracking scales proportionally with size. Wanda's published breakpoints (480, 768, 960, 1280 and 1600px) are the design system's reference points for reflow. No mobile screenshot was captured, so the exact stacking order of the card pair and navigation collapse are not documented here beyond the typographic change.

## Iteration Guide

1. Start with canvas #ffffff, ink #444954, primary #e00000 and white on-primary text.
2. Set the system-ui stack for everything; headlines at 700 with about -3 percent tracking (the measured -1.57332px at 52.4442px).
3. Build buttons at 4px radius, 16px weight 600 labels, 12px by 24px padding; hover to #c10000.
4. Use #f8f9fa for alternate bands and #1f2227 for one dark feature section.
5. Use cards at 12px radius with 40px padding and a #e3e6ec border.
6. Stay within the Wanda token names when adding values (primary scale, cta, global) so the site and the product stay aligned.
7. Write copy as outcome statements followed by short imperative button labels.
