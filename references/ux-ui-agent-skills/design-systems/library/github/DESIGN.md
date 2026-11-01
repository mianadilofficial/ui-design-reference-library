---
version: alpha
name: GitHub
category: "Design Systems"
description: "github.com home in Primer Brand dark mode: deep #0d1117 canvas over a black page, white Mona Sans headlines at 64px (weight 425, -2.24px tracking), muted #a4aea6 body, a green #08872b primary button with 6px radius, translucent white cards at 24px radius, and mint #5fed83 accent borders."
colors:
  canvas: "#0d1117"
  page-largest: "#000000"
  ink: "#ffffff"
  primary: "#08872b"
  on-primary: "#ffffff"
  surface-card: "#0f1511"
  surface-secondary: "#1f232866"
  ink-muted: "#a4aea6"
  ink-subtle: "#7c8980"
  ink-soft: "#ffffffd9"
  ink-link: "#a2daff"
  hairline: "#191f1b"
  glass-fill: "#ffffff33"
  glass-border: "#ffffff1a"
  accent-mint: "#5fed83"
typography:
  display:
    fontFamily: "\"Mona Sans\", MonaSansFallback, -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 64px
    fontWeight: 425
    lineHeight: 69.12px
    letterSpacing: "-2.24px"
  display-mobile:
    fontFamily: "\"Mona Sans\", MonaSansFallback, -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 40px
    fontWeight: 440
    lineHeight: 45.96px
  heading:
    fontFamily: "\"Mona Sans\", MonaSansFallback, -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 40px
    fontWeight: 460
    lineHeight: 48px
  subheading:
    fontFamily: "\"Mona Sans\", MonaSansFallback, -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 30.8px
  body:
    fontFamily: "\"Mona Sans\", MonaSansFallback, -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 0.18px
  button:
    fontFamily: "\"Mona Sans\", MonaSansFallback, -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.16px
  nav:
    fontFamily: "\"Mona Sans VF\", -apple-system, \"system-ui\", \"Segoe UI\", \"Noto Sans Backtick Fix\", \"Noto Sans\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"Mona Sans\", MonaSansFallback, -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  2xl: 48px
  3xl: 60px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6px 20px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.surface-secondary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
  link:
    textColor: "{colors.ink-link}"
    typography: "{typography.body}"
    padding: 0px 0px 2.1px
  nav:
    textColor: "{colors.ink}"
    padding: 16px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.page-largest}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 18px 12px 0px 18px
    height: 41px
  card:
    backgroundColor: "{colors.glass-fill}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 8px
    borderColor: "{colors.glass-border}"
  footer:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    borderColor: "{colors.accent-mint}"
---

## Overview

The capture of https://github.com shows GitHub's marketing home in a dark, atmospheric treatment. A slim top bar carries the Octocat mark, nav labels with chevrons (Platform, Solutions, Resources, Open Source, Enterprise, Pricing), a search button and two compact buttons, "Sign in" and "Sign up". The hero is centered on a deep indigo-to-black field with a violet glow: the headline "The future of building happens together" in white, a two-line subhead ("Tools and trends evolve, but collaboration endures..."), an email field fused with a green "Sign up for GitHub" button, and a dark outlined "Download GitHub Copilot app" button. Beneath, white mascot-like blobs float over the glow, followed by a large editor mock-up of Copilot Chat beside TypeScript code, a pill tab bar (Code, Plan, Collaborate, Automate, Secure), a scrolling logo strip (American Airlines, Duolingo, EY, Ford, Infosys, Mercado Libre) and a second headline, "Accelerate your entire workflow".

Because text sits over a gradient and imagery, canvas and ink were chosen from the measured page: the sections measure as #0d1117 (canvas) and #000000 (the largest background area), with white (#ffffff) as the dominant text color. The tone is confident product marketing, centered and spacious, with the code editor image as the key proof.

## Colors

Canvas is #0d1117 with pure black #000000 as the largest measured background area; card surfaces are #0f1511 and hairlines #191f1b. Ink is #ffffff, with softened white #ffffffd9, muted green-gray #a4aea6 for paragraphs and #7c8980 for subtle labels. Links in running text use pale blue #a2daff.

The primary action is green #08872b with white text (the "Sign up for GitHub" and "Subscribe" buttons). A brighter mint #5fed83 marks accent borders and gradient starts, and also appears in the footer border. Translucent whites (#ffffff33 fill, #ffffff1a border) form frosted glass cards. The `--brand-*` variables define a wide spectrum of label and icon colors (coral, lemon, lime, teal, purple, orange) used inside illustrations and tags; they are not tokenized here beyond the roles above.

## Typography

Mona Sans is the family; the loaded files are Mona Sans and Mona Sans Mono as variable fonts covering weights 200 to 900. The measured stack leads with "Mona Sans" and a metric fallback, then the system sans. Display is 64px / 69.12px, weight 425, -2.24px tracking (40px / 45.96px, weight 440 on mobile); section headings are 40px / 48px, weight 460; subheadings 22px / 30.8px, weight 400; body 18px / 27px with +0.18px tracking; buttons 16px / 24px weight 500 with +0.16px; navigation 16px / 24px weight 400 in a "Mona Sans VF" stack.

Variable-weight values such as 425 and 460 are measured, not rounded. Headlines are tight and white; body copy is lighter in tone (#a4aea6) and slightly tracked out, giving a clear hierarchy on dark.

## Layout

Everything is centered on a single axis in the hero and sections, with wide gutters. The Primer Brand root variables define breakpoints (xsmall 20rem, medium 48rem, large 63.25rem, xlarge 80rem), grid margin and section gridline padding of 4rem; the measured control-level spacing steps are s1 to s10 (2px to 24px). The editor mock-up spans nearly the full width inside a lightly bordered, rounded frame, the tab bar and logo strip sit in narrower centered rows, and sections stack vertically with generous black space.

The logo strip is deliberately desaturated: partner wordmarks appear in gray-white on the dark band, so they never compete with the green action color. Microcopy throughout is short and declarative, and it speaks of developers, agents and code as co-equal participants ("developers, agents, and code come together on one platform"), which is the page's central message.

Imagery is a mix of three things: abstract white blob forms floating in the glow, a realistic editor screenshot with syntax-highlighted code and a Copilot Chat panel, and partner logos. There is no stock photography of people in the captured viewport.

## Elevation & Depth

Depth comes from light, not shadow: a violet radial glow behind the hero, a gradient on the editor frame's border, translucent glass cards (#ffffff33 over dark with a #ffffff1a border) and frosted blur effects named in the variables. No conventional box shadows were measured. Surfaces step from #000000 to #0d1117 to #0f1511 in small increments.

## Shapes

Buttons use 6px (rounded.xs); inputs 8px; panels 12px to 24px; the editor frame and large cards use 24px and larger (48px, 60px appear on measured containers); the tab bar and logo-strip pause control are pills (9999px). The Primer primitives variable `--borderRadius-medium` is 0.375rem, which equals the 6px button radius.

## Components

**Primary button.** #08872b fill, white 16px/500 text, 6px radius, 6px 20px padding, 48px height. In the hero it is fused to the right end of a white email field (input text black, 41px tall, 8px radius).

**Secondary button.** Translucent dark fill (#1f232866), white text, 6px radius, thin white-ish border, used for "Download GitHub Copilot app"; the header "Sign up" uses a translucent white (#ffffff1f) fill.

**Header.** Black/indigo bar, white nav labels with chevrons, search icon button, compact Sign in / Sign up.

**Tab pills.** A rounded container holding Code, Plan, Collaborate, Automate and Secure with the active tab outlined.

**Glass cards.** #ffffff33 fill, #ffffff1a border, 24px radius, 8px padding.

**Footer.** #0f1511 with a mint #5fed83 border.

## Design System Architecture

GitHub's design system is Primer (https://primer.style), described on its homepage as "The design system for GitHub", with Primer Product UI for building UI at GitHub, Primer Brand UI for marketing experiences, a Brand Toolkit, and shared foundations: accessibility guidelines, Octicons, and primitives (design tokens for color, spacing and typography). The Primer Brand page (https://primer.style/brand) describes it as the design system for marketing websites and digital experiences, published as the npm package @primer/react-brand with built-in color modes and a theming guide.

github.com visibly uses it: the page root defines hundreds of `--brand-*` custom properties (for example `--brand-button-primary-bgColor-rest: #08872b`, `--brand-color-text-muted: #a4aea6`, `--brand-Card-background-default: #0f1511`, `--brand-body-fontFamily` and `--brand-text-size-*` scales) and Primer primitives such as `--fgColor-muted`, `--borderRadius-medium` and `--button-primary-*`, plus component-scoped names (Testimonial, Bento, River, LogoSuite, CTABanner). The values in this file come from live measurement; they agree with those variables where the primary green and muted text are concerned.

## Do's and Don'ts

- Do keep the canvas dark (#0d1117 / #000000) and headlines white in Mona Sans at 425 to 460 weight.
- Do use green #08872b with white text for the single main action.
- Do build secondary actions from translucent fills and thin light borders.
- Do let a glow and the product mock-up carry the visual interest.
- Don't use browser-default link colors; links are pale blue #a2daff.
- Don't add hard drop shadows; use glass fills and borders.
- Don't use more than one saturated action color per view; mint #5fed83 is for borders and accents.

## Responsive Behavior

The extractor measured a mobile pass in which the hero display falls from 64px to 40px (line height 45.96px, weight 440, tracking normal). The Primer Brand variables define breakpoints at 20rem, 48rem, 63.25rem and 80rem. Beyond the type change the mobile layout was not inspected visually. Controls remain 41px to 48px tall.

## Iteration Guide

1. Start from #0d1117 with white text, Mona Sans 18px / 27px body in #a4aea6.
2. Headlines: 64px at weight 425 with -2.24px tracking; sections 40px at 460.
3. One green #08872b 6px-radius button per view; secondary buttons translucent.
4. Cards are glass (#ffffff33, #ffffff1a border, 24px radius).
5. Add atmosphere with a violet radial glow and a real product screenshot.
