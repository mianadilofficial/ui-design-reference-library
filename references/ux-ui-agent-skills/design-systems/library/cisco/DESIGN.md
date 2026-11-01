---
version: alpha
name: Cisco
category: "Product & SaaS"
description: "Cisco.com homepage: a black canvas (#000000) with white Inter type (48px/500 display, 16px/24px body), a white 48px pill primary button, outlined link tiles, and a single electric blue accent (#0a60ff) used for links and glowing promo-card edges."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#07182d"
  surface-navy: "#071829"
  ink-muted: "#536070"
  accent-blue: "#0a60ff"
  accent-blue-alt: "#0060ff"
  primary-hover: "#f2f5f7"
typography:
  display:
    fontFamily: Inter, "Noto Sans", CiscoSans, CiscoSansTT, -apple-system, "system-ui", sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 56.016px
  display-mobile:
    fontFamily: Inter, "Noto Sans", CiscoSans, CiscoSansTT, -apple-system, "system-ui", sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 43.992px
  heading:
    fontFamily: Inter, "Noto Sans", CiscoSans, CiscoSansTT, -apple-system, "system-ui", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20.006px
  subheading:
    fontFamily: Inter, "Noto Sans", CiscoSans, CiscoSansTT, -apple-system, "system-ui", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  body:
    fontFamily: Inter, "Noto Sans", CiscoSans, CiscoSansTT, -apple-system, "system-ui", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, "Noto Sans", CiscoSans, CiscoSansTT, -apple-system, "system-ui", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 48px
  4xl: 120px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 10px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 10px 20px
    height: 48px
  link:
    textColor: "{colors.accent-blue}"
    typography: "{typography.heading}"
    rounded: "{rounded.3xl}"
    padding: 8px 20px
    borderColor: "{colors.accent-blue}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    padding: 24px
    borderColor: "{colors.ink-muted}"
  footer:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink-muted}"

---

# Cisco — Design System

## Overview
The measured page is https://www.cisco.com/, titled "AI Infrastructure, Secure Networking, and Software Solutions - Cisco". At capture time it is a dark, enterprise-technology homepage: a thin white utility bar ("How to buy", "Partners", "Log in", "EN US") above a white header carrying the wordmark, five navigation items ("Products and Services", "Solutions", "Support", "Learn", "Why Cisco") and an outlined blue "Trials and demos" pill. Beneath a dark announcement strip, the page turns fully black: a video hero reading "The critical infrastructure for the AI era" with two pill buttons, a grid of six outlined link tiles ("Downloads", "Certifications", "Cisco Validated", "Training", "Community", "Support"), an event promo card for Cisco Live 2026 Melbourne with a glowing blue edge, a customer-logo wall under the line "Trusted by 99% of the Fortune 500 and over 1 million customers worldwide", and a product tab strip. A small cookie notice and a chat launcher ("Hello, how can I help?") sit over the lower hero in the capture; those are overlays and are not documented as brand UI. The tone is confident, plain and product-oriented.

## Colors
The system is black, white and one electric blue. `{colors.canvas}` is pure black (#000000) for the page; `{colors.ink}` is white (#ffffff) for all reading text on it. The hero action is a white pill, so `{colors.primary}` is also #ffffff, with `{colors.on-primary}` (#07182d, a very dark navy) as its label and `{colors.primary-hover}` (#f2f5f7) as the hover fill (the measured hover state of the "Watch video" button). `{colors.surface-navy}` (#071829) is a dark navy panel color used for product areas. The brand blue appears as `{colors.accent-blue}` (#0a60ff) for link text and for the outline of the "Trials and demos" pill, with a near-identical `{colors.accent-blue-alt}` (#0060ff) measured as text. `{colors.ink-muted}` (#536070) is the grey used for tile borders and secondary text. Glows around promo cards use rgba(10, 96, 255, 0.4) at 30px blur, i.e. the same blue.

## Typography
One family dominates: Inter (variable, weights 100 to 900 loaded), with the stack `Inter, "Noto Sans", CiscoSans, CiscoSansTT, -apple-system, "system-ui", sans-serif` declared in the page's `--muse-font-family-default` variable. The hero headline is `{typography.display}` at 48px weight 500 and 56.016px line height, dropping to `{typography.display-mobile}` (36px/500) in the mobile pass. Buttons use `{typography.button}` at 16px weight 600. Body is `{typography.body}` at 16px/24px; compact headings are `{typography.heading}` at 14px/600 and `{typography.subheading}` at 14px/400. Other measured sizes include 20px, 28px, 32px and 40px for section titles, and tracking of 0.16px at 16px and 0.14px at 14px. Weight 500 for display and 600 for controls give a steady, non-decorative rhythm.

### Font substitutes
CiscoSans and CiscoSansTT are named in the stack but only Inter was recorded as loaded; Inter is therefore the face actually seen. Noto Sans and system sans-serif are the stack's own fallbacks.

## Layout
The page is a centered column on a wide 1280px viewport. The hero text is left aligned at the page gutter; the link tiles form a three-by-two grid centered in a narrower column; the promo card and product tab panel stretch near full content width. Gaps measured on the page are 4, 5, 8, 16, 20, 24, 28 and 48px and paddings of 8, 10, 16, 20, 24, 48, 64 and 80px; large vertical padding separates black sections without rules. Spacing tokens `{spacing.s1}` through `{spacing.s10}` list the measured steps from 4px to 32px. The customer logos sit on a five-column grid in two rows, all monochrome white.

## Elevation & Depth
Depth is expressed with glow, not drop shadow. The measured shadows are a blue halo `rgba(10, 96, 255, 0.4) 0px 0px 30px 0px`, a smaller blue halo `rgba(10, 96, 255, 0.3) 0px 0px 20px 0px`, a neutral `rgba(0, 0, 0, 0.2) 0px 0px 18px 0px` and a layered menu shadow `rgba(0, 0, 0, 0.16) 0px 1px 4px 0px, rgba(27, 28, 29, 0.2) 0px 7px 29px 0px`. Against a black canvas, the blue-edged event card reads as lit from within. Tiles are separated by 1px grey outlines rather than fills.

## Shapes
Radii run 4, 8, 12, 16, 20, 48 and 120px, plus 50 percent for round controls and 9999px as a pill. Action buttons use `{rounded.3xl}` (48px), which at a 48px height is a full pill. Cards use `{rounded.2xl}` (20px); link tiles use a smaller radius; the product tab strip is a pill container. The shape language is therefore soft-cornered, with pills reserved for actions and filters.

## Components
`button-primary` is a white pill: fill `{colors.ink}`, label `{colors.on-primary}`, 16px/600, padding 10px 20px, height 48px, radius `{rounded.3xl}`; its hover fill is `{colors.primary-hover}`. `button-secondary` has the same geometry. The outlined "What's new" pill and the "Trials and demos" button use a 2px outline with transparent fill. `link` tiles are 14px/600 labels with a chevron and a blue 2px-style outline (`{colors.accent-blue}`). `card` is a 20px-radius panel with 24px padding and a `{colors.ink-muted}` border. The footer measured a light `{colors.primary-hover}` fill with grey text.

## Design System Architecture
No public Cisco design-system documentation was successfully opened for this write-up (an attempt to open design.cisco.com failed with a connection error), so the architecture below is the de-facto system read from the page itself at https://www.cisco.com/. The measured root variables show several token namespaces: `--muse-*` (for example `--muse-color-text` #07182d, `--muse-color-accent-hover` #124fc9, `--muse-font-family-default`), `--cds-c-cta-button-*` (component-level CTA button colors for hover and contrast variants), `--cta-button-secondary-*`, `--chat-*` for the assistant widget, `--font-preset-*` type presets, `--size-space-*` spacing and a `--color-gray-*` ramp. That layering — global theme, component tokens, presets — is evidence of a token-driven system, but the documentation behind these names was not read.

## Do's and Don'ts
Do keep the canvas black and the type white on dark sections. Do use the white pill for the single most important action in a hero. Do use blue (`{colors.accent-blue}`) for links and outline accents only. Do keep Inter at 500 for display and 600 for controls. Don't fill large areas with the blue. Don't use drop shadows; use the blue glow sparingly on promo cards. Don't treat the cookie notice or chat launcher as brand components. Don't use colored logos on the black wall; they are rendered in white.

## Responsive Behavior
A mobile pass was captured: display type drops from 48px to 36px (`{typography.display-mobile}`). The tab strip shows a chevron to indicate horizontal overflow at desktop width, suggesting it scrolls on narrower screens. Tile grids and logo grids are multi-column at 1280px; exact breakpoints were not recorded in the measured data, so none are stated.

## Iteration Guide
Begin with a black canvas and a white-pill hero action. Set the headline at 48px/500 Inter; body at 16px/24px. Build link tiles as outlined 48px-rounded or small-radius boxes with a chevron. Reserve `{colors.accent-blue}` for links and outlines, and give promotional cards a 20px radius with a faint blue glow. Keep supporting text in `{colors.ink-muted}`. Check any new color or radius against the measured lists before adding it, and keep imagery abstract and luminous against the black.

### Imagery and voice
The hero is a looping video of luminous white and blue ribbons on black, with a pause control at the upper right; the event card uses a small glass-and-sphere graphic, and the product panel shows a dark dashboard screenshot with a gradient ring. Copy is short and declarative: "Register now", "What's new", "Trials and demos". Headlines name technology categories ("Market-defining technologies driving the future of AI") rather than promising outcomes, and customer proof is delivered by a wall of logos instead of testimonials. The overall density is moderate, with large black gaps between sections.
