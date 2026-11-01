---
version: alpha
name: Remote
category: "Product & SaaS"
description: "Remote's homepage sets the Rotina typeface (300/400/700) in ink #14191e over a purple #500087 to cyan gradient with a giant pale-cyan wordmark, translucent white #ffffff4d cards, 6px-radius ink buttons with #fafafa text, 2px inset-outline secondary buttons and Nova/Zora design-system tokens."
colors:
  canvas: "#ffffff"
  ink: "#14191e"
  primary: "#14191e"
  on-primary: "#fafafa"
  hero-purple: "#500087"
  surface-grey: "#efefef"
  surface-glass: "#ffffff4d"
  ink-muted: "#595959"
  ink-on-dark-soft: "#f7f7f7"
typography:
  display:
    fontFamily: Rotina, Geist, system-ui, sans-serif
    fontSize: 51.7338px
    fontWeight: 700
    lineHeight: 51.7338px
    letterSpacing: "-1.03468px"
  display-mobile:
    fontFamily: Rotina, Geist, system-ui, sans-serif
    fontSize: 28.0001px
    fontWeight: 700
    lineHeight: 28.0001px
    letterSpacing: "-0.560003px"
  card-title:
    fontFamily: Rotina, Geist, system-ui, sans-serif
    fontSize: 19.5434px
    fontWeight: 700
    lineHeight: 21.3023px
    letterSpacing: "-0.195434px"
  subheading:
    fontFamily: Rotina, Geist, system-ui, sans-serif
    fontSize: 26.9338px
    fontWeight: 700
    lineHeight: 28.8191px
    letterSpacing: "-0.269338px"
  body:
    fontFamily: Rotina, Geist, system-ui, sans-serif
    fontSize: 23.2378px
    fontWeight: 300
    lineHeight: 25.0968px
    letterSpacing: "-0.232378px"
  button:
    fontFamily: Rotina, Geist, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  footnote:
    fontFamily: Rotina, Geist, system-ui, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 48px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 48px
    shadow: "rgb(20, 25, 30) 0px 0px 0px 2px inset"
  button-light:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 48px
  button-header:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 40px
  nav:
    textColor: "{colors.on-primary}"
  glass-card:
    backgroundColor: "{colors.surface-glass}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.on-primary}"
    typography: "{typography.footnote}"
    padding: 16px 0px 0px
---

# Remote

## Overview

Remote (https://remote.com/) is a global employment platform covering payroll, employer of record (EOR) and contractor management; the page title is "EOR, Payroll & Compliance Platform - Worldwide | Remote". The homepage is the most graphic of the HR platforms: the top is a full-bleed gradient that runs from deep purple (#500087 at the top band) through violet to bright cyan, with an enormous pale-cyan "remote" wordmark built from chunky geometric letter shapes spanning the whole width.

The capture shows the header floating over that gradient: links (Products, Solutions, Partners, Resources with chevrons, and Pricing) in #fafafa on the left, a globe icon, "Login" and a white "Book a demo →" button on the right. Under the wordmark, the hero is centred: "The financial operating system for the global workforce." in bold ink, a two-line subline ("One platform for global payroll, EOR, and contractor management. Available in 150+ countries."), and two buttons — a solid ink "Book a demo →" and an outlined "Get started". A logo row (BYD, Datadog, Anthropic, Vercel, Mercury) and four translucent white cards ("One accountable payroll partner", "Local compliance, global protection", "Multiple employment models", "Workforce intelligence powered by AI") with purple 3D shapes at their base follow.

Next comes a huge statement, "Whoever said it's a small world has never paid a global team.", surrounded by glossy app-icon-like 3D tiles in blue and lime. On white, "Every way to hire and pay your workforce." introduces a product grid (Global Payroll, Employer of Record, PEO (US), Contractor of Record, Contractor Management), each with a gradient illustration panel (cyan, lime, lilac) containing UI snippets and a black square arrow button. Further down: a lime-to-white gradient compliance section with stepped bar statistics ("150+", "47%", "99%", "1"), partner cards, "Built for your global team, one hire at a time." (Startups, Mid-market, Enterprise), customer quotes (Lovable, Zapier), ratings, resources and a purple "Talk to us before your next pay day." card above a purple footer with the wordmark repeated.

The voice is confident and a little witty ("Whoever said it's a small world…", "before your next pay day").

## Colors

Remote's shipped CSS contains two token namespaces, `--nv-*` (Nova) and `--zora-*` (Zora). The rendered colours:

- **canvas #ffffff** — the page background below the hero gradient.
- **ink #14191e** — the main text colour (4,719 characters) and the brand's "inverse surface" (`--nv-surface-inverse`, `--nv-brand-stroke-strong`). Buttons, arrow tiles and outlines use it.
- **primary #14191e** — the primary button fill. Remote's actions are ink-black, not purple.
- **on-primary #fafafa** — text on ink buttons and the header link colour on the gradient (`--nv-brand-fill-inverse-strong`).
- **hero-purple #500087** — the top colour of the hero gradient (the hero band's measured fill), declared as `--nv-surface-gradient-zora-zora-hero-red-1-1`.
- **surface-grey #efefef** — neutral panels.
- **surface-glass #ffffff4d** — 30% white, the fill of the translucent cards over the gradient (the second-largest measured background area).
- **ink-muted #595959** — `--nv-light-grey-700`; secondary text such as inactive header links.
- **ink-on-dark-soft #f7f7f7** — soft white text on dark sections.

The gradients themselves (purple → cyan in the hero, lime → white in the statistics section, cyan/lime/lilac illustration panels) are composed from the Zora ramps in the CSS, for example `--zora-purple-600: #b91bff`, `--zora-purple-400: #d893ff`, `--zora-blue-400: #0bf`, `--zora-yellow-brand-400: #e3fb4c`, `--zora-yellow-brand-600: #86c000`, `--zora-green-400: #86c000`, `--zora-pink-600: #e60080`. These are declared values; the gradient stops were not individually measured on screen, so they are not tokens here.

## Typography

All measured text (5,772 characters) is **Rotina**, loaded at weights 300, 400 and 700, declared through `--zora-font-family-bossa: "Rotina", "Geist", system-ui, sans-serif`. Rotina is a custom face; Geist (open source) is the fallback the site declares and the right substitute.

Sizes are fluid, so the 1,280px values are fractional:

- **display** — 51.7338px / 51.7338px, weight 700, -1.03468px (-0.02em). The hero headline. Line-height is exactly 1.0.
- **display-mobile** — 28.0001px / 28.0001px, weight 700, -0.560003px.
- **subheading** — 26.9338px / 28.8191px, weight 700 (product titles such as "Global Payroll").
- **card-title** — 19.5434px / 21.3023px, weight 700 (the four glass cards).
- **body** — 23.2378px / 25.0968px, weight 300 (testimonial quotes in light weight).
- **button** — 16px / 24px, weight 400.
- **footnote** — 12px / 18px, weight 400 (footer footnotes and legal).

Other measured sizes are 87.4662px (the "Whoever said…" statement, -2.62399px), 65.904px, 41.2566px (section headings, -0.825133px) and 34.1715px; each large size carries -0.02em to -0.03em tracking, while 12px and 14px text opens to +0.01em. The pairing of heavy 700 headlines with light 300 quotes is characteristic.

## Layout

The desktop capture is 1,280px wide and 8,617px tall. The hero band measured 599px tall with content from x 57 to x 1185; the CSS declares `--zora-layout-side-margins: 4rem`. The header shows three visible links at 1,280px with no menu toggle.

Content below the hero is centred in a narrower column: the glass cards run four across, the product grid uses a large card (two-thirds) plus a narrow card on the first row and three equal cards on the second. Section headings are centred above each grid.

Spacing tokens: 2px, 4px, 6px, 8px, 10px, 12px, 13px, 14px, 16px and 20px. The most frequent gaps are 16px (64 uses), 8px (59), 10px (55), 6px and 32px; paddings are 20px (28 uses), 24px, 22.781px, 12px, with 112px section padding. The CSS spacing tokens use rem (`--zora-padding-x1: 1rem`).

## Elevation & Depth

No drop shadows were measured. The only shadows are inset rings: `rgb(20, 25, 30) 0px 0px 0px 2px inset` (5 elements) draws the 2px outline of secondary buttons, and `rgb(255, 255, 255) 0px 0px 0px 2px inset` (1 element) is the same ring in white on dark. Depth comes from the gradients, the translucent glass cards and the glossy 3D illustrations. The CSS declares a shadow colour `--nv-shadow-lg-color: #0000001f` that was not rendered on the home page.

## Shapes

Corners are small and consistent. The measured radii are 2px, 4px, 6px (68 elements, the dominant value), 16px and one 50% circle; split variants (0px 0px 6px 6px, 0px 6px 6px 0px, 6px 6px 0px 0px) join panels inside cards. The CSS names them `--nv-radius-2: 2px` and `--nv-radius-6: 6px`. Buttons, cards and arrow tiles all use 6px, so the page looks precise rather than soft; the wordmark's round letter forms supply the playfulness.

## Components

**Primary button.** #14191e fill, #fafafa Rotina 400 16px / 24px, 6px radius, 12px 24px padding, 48px tall, often with a → arrow ("Book a demo", "Explore Global Payroll").

**Outline button.** Transparent with a 2px inset #14191e ring, ink text, same size ("Get started").

**Light button.** #fafafa fill with ink text on dark or gradient surfaces ("Build on Remote", the purple CTA card's "Book a demo").

**Header button.** #fafafa, ink text, 8px 16px padding, 40px tall. Header links are #fafafa on the gradient and turn #14191e on hover.

**Glass card.** #ffffff4d over the gradient, 6px radius, a 19.5434px bold title, short body copy and a purple 3D object at the bottom edge.

**Product card.** White card with a thin border, title, short description or check-list, a gradient illustration panel with UI fragments, and a black 6px-radius square arrow button.

**Statistic bars.** Stepped columns of increasing height with large bold numbers ("150+", "47%", "99%").

**Focus ring.** A 2px solid blue outline with 2px offset on keyboard focus (measured on the skip link).

**Footer.** Purple gradient continued from the closing CTA, #fafafa text, the giant wordmark, link columns, app-store badges.

## Design System Architecture

Remote does not publish a public design-system site or brand page that could be opened: https://remote.com/brand and https://remote.com/press both returned 404. The shipped CSS, however, exposes a full token system with two layers:

- **Nova (`--nv-*`)** — semantic product tokens: surfaces (`--nv-surface-inverse`, `--nv-surface-blank`), brand fills, strokes and text by role and state (`--nv-brand-fill-subtle-hover: #e2e2e2`, `--nv-brand-stroke-subtle-hover: #afafaf`, `--nv-brand-text-inverse-tertiary: #afafaf`, `--nv-brand-on-fill-disabled: #959595`), status colours (`--nv-positive-text-tertiary`, `--nv-informative-on-fill-strong-secondary`), categorical colours for data (`--nv-categorical-purple-text-primary: #890fcb`, `--nv-categorical-green-text-primary: #466100`), halftones (`--nv-halftone-brand-90: #14191ee6`), radii (`--nv-radius-2`, `--nv-radius-6`), border widths (`--nv-border-1: 1px`) and type weights (`--nv-type-body-lg-fw: 400`).
- **Zora (`--zora-*`)** — the marketing palette and layout: numbered colour ramps (purple, blue, sea-blue, green, mint, yellow-brand, orange, pink, red), named gradients (`--nv-surface-gradient-zora-zora-hero-red-1-1`, `--nv-surface-gradient-zora-zora-banner-blue-1-3`), font family (`--zora-font-family-bossa`), weights (`--zora-font-weight-medium: 500`), padding and side margins, plus component tokens for pills and links on accent backgrounds (`--zora-pill-bg-disabled`, `--zora-link-hover-on-bg-accent: #8ff0fd`).

The header logo is a Lottie animation (an SVG with `__lottie_element` clip paths), so the wordmark animates on load.

## Do's and Don'ts

**Do**
- Use ink #14191e for actions and text, with #fafafa on ink.
- Open with a purple-to-cyan gradient and a full-width geometric wordmark.
- Set headlines in Rotina 700 with -0.02em tracking and line-height 1.0; set quotes in Rotina 300.
- Keep every corner at 6px; draw secondary buttons with a 2px inset ring.
- Use translucent white (#ffffff4d) cards over gradients.
- Illustrate with glossy 3D objects and UI fragments in cyan, lime and lilac.

**Don't**
- Don't make buttons purple or gradient; actions are ink or near-white.
- Don't round buttons into pills.
- Don't add drop shadows to cards.
- Don't use the declared Zora ramp colours as flat text colours on white without checking contrast.
- Don't replace Rotina with a geometric display face; Geist is the declared fallback.

## Responsive Behavior

The 390px mobile pass measured the hero headline at 28.0001px / 28.0001px (-0.560003px), the card title at 17.0006px / 18.5307px, the testimonial body at 19px / 20.52px, and the primary "Book a demo" button unchanged in style (ink fill, 6px radius, 12px 24px padding, 48px tall) but 358px wide, the full content width. The hero band measured 553px tall with the #500087 top. An "Open menu" toggle was visible with one header link visible; the maximum card column count fell from eight to six.

The mobile capture shows the wordmark across the top of the gradient, the hero centred, and the cards and product tiles in a single column.

The stylesheet is mobile-first: `min-width: 1024px` (215 rules), `min-width: 768px` (133), `min-width: 1440px` (116), `min-width: 1200px` (40), `min-width: 1920px` (37). Behaviour at intermediate widths was not measured.

## Iteration Guide

1. Build the hero gradient from #500087 at the top towards cyan, with a full-width wordmark and the header in #fafafa.
2. Set Rotina (or Geist) 700 for headlines at display 51.7338px / 1.0 line-height; 28.0001px on mobile.
3. Use ink #14191e buttons with #fafafa text, 6px radius, 48px tall; outline buttons with a 2px inset ring.
4. Place #ffffff4d glass cards over gradients and white product cards on white sections, all at 6px radius.
5. Space with 16px / 8px / 10px gaps and 20px / 24px padding, 112px between sections.
6. Add 3D illustrations and UI fragments on cyan, lime and lilac gradient panels.
7. Compare with the captures at 1,280px and 390px. Dark mode, most hover states and intermediate widths were not measured.
