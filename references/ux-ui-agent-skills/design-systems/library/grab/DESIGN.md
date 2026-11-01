---
version: alpha
name: Grab
category: "Logistics & Mobility"
description: "Grab's Singapore homepage on grab.com/sg: a white #ffffff canvas with slate #383e43 body text in Inter (18px/28px), heavy Inter 800 headlines (80px/88px white hero 'Grab. Making every day better.', 40px/44px #242a2e section heads), Grab green #00b14f for the full-width 80px 'Download App' band and the logo, deep green #002e27 for the secondary band, a #001e1f pill tab (56px radius, 12px 32px), green #00804a text links, 4px-radius cards and a #eaeff2 sitemap over a #363a45 legal bar."

colors:
  primary: "#00b14f"
  on-primary: "#ffffff"
  deep-green: "#002e27"
  tab-active: "#001e1f"
  on-tab: "#f3f6fb"
  link: "#00804a"
  link-hover: "#005339"
  canvas: "#ffffff"
  ink: "#383e43"
  heading: "#242a2e"
  body-dark: "#161a1d"
  muted: "#697078"
  gray-text: "#666666"
  sitemap: "#eaeff2"
  footer: "#363a45"
  divider: "#e5e9f0"
  card-border: "#eaeaea"

typography:
  display-hero:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 80px
    fontWeight: 800
    lineHeight: 88px
  heading-section:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 40px
    fontWeight: 800
    lineHeight: 44px
  heading-item:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  callout:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  nav-label:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 28px
  label:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
  small:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 28px
  micro:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 11px
    fontWeight: 500
  mobile-h1:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 56px
    fontWeight: 800
    lineHeight: 64px
  mobile-body:
    fontFamily: "Inter, Inter, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px

rounded:
  none: 0px
  card: 4px
  tab: 56px
  pill: 9999px

spacing:
  s4: 4px
  s12: 12px
  s16: 16px
  s20: 20px
  s32: 32px
  s40: 40px
  s48: 48px
  s96: 96px

components:
  cta-band-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.callout}"
    rounded: "{rounded.none}"
    height: 80px
  cta-band-secondary:
    backgroundColor: "{colors.deep-green}"
    textColor: "{colors.on-primary}"
    typography: "{typography.callout}"
    rounded: "{rounded.none}"
    height: 80px
  tab-active:
    backgroundColor: "{colors.tab-active}"
    textColor: "{colors.on-tab}"
    typography: "{typography.callout}"
    rounded: "{rounded.tab}"
    padding: 12px 32px
    height: 52px
  tab-inactive:
    textColor: "{colors.muted}"
    typography: "{typography.callout}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.tab-active}"
    borderColor: "#0201019c"
    borderWidth: 1px
    typography: "{typography.callout}"
    rounded: "{rounded.none}"
    padding: 16px 48px
    height: 62px
  link:
    textColor: "{colors.link}"
    typography: "{typography.callout}"
  link-hover:
    textColor: "{colors.link-hover}"
  service-row:
    textColor: "{colors.ink}"
    borderColor: "{colors.divider}"
    typography: "{typography.heading-item}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.card-border}"
    borderWidth: 1px
    rounded: "{rounded.card}"
    typography: "{typography.callout}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.footer}"
    typography: "{typography.nav-label}"
    height: 69px
  sitemap:
    backgroundColor: "{colors.sitemap}"
    textColor: "{colors.footer}"
    typography: "{typography.small}"
    padding: 40px 0px
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    padding: 20px 0px
---

## Overview

Grab's Singapore homepage (measured at https://www.grab.com/sg/ on a 1280px viewport) is a corporate overview of the "everyday everything app". It is a white page with heavy, dark headlines, generous 18px body copy, and Grab green used for the logo, one full-width band and text links.

At the top, a 69px white nav: a hamburger with a tiny "Menu" label, the green Grab wordmark, and at right "GrabX", "Be Our Partner ▾", "Help Centre" and a search icon.

The hero is a full-bleed, dark, motion-blurred photo of a smiling passenger in a car at night. "Grab. Making every day better." sits over it in white Inter 800 at 80px. Directly below the photo, two full-width 80px bands work as the hero's calls to action:
- deep green `#002e27`: "Read About Us"
- Grab green `#00b14f`: "Download App"

Then the content:
- an intro statement: "From essential services to earning opportunities. We're an all-in-one platform." at 40px/800
- audience tabs: a dark `#001e1f` pill for the active "Consumer", with plain grey labels for Driver, Merchant and Enterprise
- a services index: category headings on the left (Deliveries, Mobility, Dining, Financial Services) at 40px/800, and rows on the right with a round green illustration, a 20px/600 title (Food, Mart, Express, Rides, Dine Out, Pay, Insurance) and an 18px description, separated by hairlines
- "Show More Services +"
- "Grab's Contribution to Singapore": tall 4px-radius cards with photos, bold titles, rich text and green "Learn More" links, in a slider with round arrows
- "Newsroom": four photo cards with dates and green "Read More", plus an outlined "More News Releases" button
- a light `#eaeff2` sitemap and a slate `#363a45` legal bar

**Key Characteristics:**
- White `#ffffff` canvas, slate `#383e43` body, near-black `#242a2e` headings.
- Inter throughout: 800 for headlines, 600 for titles and calls to action, 400 for 18px/28px body.
- Grab green `#00b14f` (logo, primary band, illustration accents) plus darker greens: `#002e27` band, `#001e1f` active tab, `#00804a` links.
- Full-width colored bands as CTAs instead of buttons in the hero.
- Square corners except the 56px tab pill and 4px cards.
- Bright, rounded green spot illustrations for each service.

## Colors

> Source: computed styles on https://www.grab.com/sg/ (extraction + recorded probes). The official brand centre (https://merchant.grab.com/en-my/brand-centre/grab) specifies the logo color only as Pantone PMS 355C.

### Brand
- **Grab green** (`{colors.primary}` `#00b14f`): the logo, the "Download App" band (class `cta-primary`), illustration accents. It is declared 106 times in the site CSS. The brand centre: "The logo should never appear in colours other than the Pantone code, PMS 355C."
- **Deep green** (`{colors.deep-green}` `#002e27`): "Read About Us" band (class `cta-secondary`); also used as a text color (502 weighted characters).
- **Tab green-black** (`{colors.tab-active}` `#001e1f`): active audience tab, outlined button text.
- **Link green** (`{colors.link}` `#00804a`) and **hover** (`{colors.link-hover}` `#005339`): "Learn More" / "Read More" links and anchor colors (hover measured).

### Surface
- **Canvas** (`{colors.canvas}` `#ffffff`).
- **Sitemap** (`{colors.sitemap}` `#eaeff2`): footer sitemap section; by painted area the largest colored background on the page.
- **Footer bar** (`{colors.footer}` `#363a45`): bottom legal bar, social icon discs.
- **Dividers** (`{colors.divider}` `#e5e9f0`) and **card border** (`{colors.card-border}` `#eaeaea`).

### Text
- **Ink** (`{colors.ink}` `#383e43`): body and descriptions (3,462 weighted characters).
- **Heading** (`{colors.heading}` `#242a2e`): h3 section heads and h5 service titles.
- **Body base** (`{colors.body-dark}` `#161a1d`): computed on `<body>`.
- **Muted** (`{colors.muted}` `#697078`): inactive tabs. **Gray** (`{colors.gray-text}` `#666666`): dates and meta (516 characters).
- **On tab** (`{colors.on-tab}` `#f3f6fb`): active tab label.

## Typography

### Font Family
- **Inter** (served as `Inter, Inter, sans-serif`; faces 400, 500, 600 loaded; headings compute 800): all text. The site variable is `--grab-main-font-family: "Inter", sans-serif` (also `--gr21-main-font-family`).
- The stylesheets also declare `Grab Community Solid` and `Grab Community Inline` font faces, plus Roboto / Roboto Slab (from page-builder CSS). None of these rendered in the measured homepage text.

### Hierarchy (measured)

| Token | Size | Weight | Line height | Example |
|---|---|---|---|---|
| `display-hero` | 80px | 800 | 88px | h1 "Grab. Making every day better." (white) |
| `heading-section` | 40px | 800 | 44px | "From essential services…", "Deliveries", "Newsroom" |
| `heading-item` | 20px | 600 | 28px | h5 service titles "Food", "Mart" |
| `callout` | 18px | 600 | 28px | band labels, tabs, card titles, links, button |
| `body` | 18px | 400 | 28px | descriptions (`text-p2`), paragraphs |
| `nav-label` | 17px | 500 | 28px | "GrabX", "Be Our Partner", "Help Centre" |
| `label` | 16px | 500 | 22px | sitemap column heads, legal links |
| `small` | 14px | 400 | 28px | sitemap links |
| `micro` | 11px | 500 | — | "Menu" under the hamburger |
| `mobile-h1` | 56px | 800 | 64px | h1 at 390px |
| `mobile-body` | 16px | 400 | 24px | paragraphs at 390px |

Small letter-spacing appears on a few 14px and 16px elements (0.2px, 46 characters in total); everything else is `normal`.

### Principles
- Line-height ratio tokens are exposed: `--typ-h1-line-height` 1.1 (80 → 88px), `--typ-h3-line-height` 1.167, `--typ-h4/h5/h6-line-height` 1.2, `--typ-base-line-height` 1.333, `--typ-display1-line-height` 1; each has an `-m` (mobile) variant (`--typ-h1-line-height-m` 1.143, matching 56 → 64px).
- Strong weight contrast: 800 headlines over 400 body.
- Sentence case for headings; "Grab" always with an uppercase G (brand centre rule).

### Note on Font Substitutes
Inter is open source, so no substitute is needed. Keep the 800 weight for headlines. Note that headings compute weight 800 while only the 400, 500 and 600 Inter faces appear in the loaded-font list.

## Layout

### Spacing System
- Measured paddings: 4px (50), 16px (32), 32px (15), 20px, 12px, 22px, 30px, 48px, 96px; the sitemap uses `40px 0`, the legal bar `20px 0`.
- WordPress spacing presets are also present (`--wp--preset--spacing--40` 1rem, `--50` 1.5rem, `--60` 2.25rem).

### Grid & Container
- Content is inset 82px from each side at 1280px (the CTA bands carry `0 82px` padding).
- The services index is a two-column grid: category heading (477px) on the left, rows (471px text column after a round icon) on the right.
- Contribution cards are 361px wide in a three-up slider; news cards are four-up.
- Breakpoints from the UIkit framework: `--uk-breakpoint-s` 360px, `-m` 768px, `-l` 1025px, `-xl` 1280px.

### Section Recipes (as seen on the homepage)
- **Hero**: full-bleed dark photo, white 80px/800 headline at the lower left.
- **CTA bands**: two stacked 80px full-width bars (`#002e27`, then `#00b14f`) with white 18px/600 labels, left-aligned to the content edge.
- **Intro + tabs**: 40px/800 statement (548px wide), then a row of tabs with one dark pill.
- **Services index**: hairline-separated groups; left heading, right rows with icon, title and description.
- **Cards slider**: 40px heading, 4px-radius bordered cards with photo, title, text, green link; round white arrow buttons on the sides.
- **Newsroom**: photo cards with date, two-line title, green "Read More", and a centered outlined button.
- **Footer**: `#eaeff2` sitemap (logo, "Forward Together", address, social icons, country selector, six link columns), then the `#363a45` legal bar.

### Whitespace Philosophy
Big type and wide margins (82px), with lists separated by hairlines rather than boxes. The page reads like an annual-report index.

### Voice & Microcopy
- Corporate but warm: "Grab. Making every day better.", "Forward Together".
- Service descriptions are one plain sentence: "Have all your cravings delivered to your doorstep.", "Send packages, documents, and beyond."
- Links are two words: "Learn More", "Read More", "Read About Us", "Download App".

### Motion
- Measured hover: links darken from `#00804a` to `#005339`.
- Sliders move with round arrow buttons.

### Image Direction
- Photography of real people in Southeast Asian settings (passengers, hawker stalls, launches), often with Grab-green uniforms or branding in frame.
- Service illustrations: small, flat, round spot illustrations on pale green discs (a fried egg on a plate, a grocery basket, a parcel, a green car).

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | flat | bands, sections, service rows |
| Border | 1px `#eaeaea` | contribution cards |
| Soft | `rgb(236, 236, 236) 0px 0px 15px 1px` | slider arrow buttons (2 elements) |
| Drop | `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` | floating elements (2 elements) |

### Decorative Depth
The hero photo is dark and motion-blurred (light streaks across the car window), giving speed and depth behind the white headline. The rest of the page is flat.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | CTA bands, outlined button, sections |
| `{rounded.card}` | 4px | contribution/news cards (8 elements) |
| `{rounded.tab}` | 56px | active tab pill (4 elements) |
| `{rounded.pill}` | 9999px | round icons, social discs, slider arrows (50%) |

### Geometry
Circles carry the illustration system (round icon discs). Rectangles carry the structure (square bands and buttons).

## Components

### Calls to Action
- **Primary band** (`cta-band-primary`): full-width `#00b14f` bar, 80px tall, white 18px/600 label "Download App", square.
- **Secondary band** (`cta-band-secondary`): full-width `#002e27` bar, 80px, white label "Read About Us".
- **Outlined button** (`button-outline`): white with a 1px `rgba(2,1,1,0.61)` border, `#001e1f` 18px/600 label, padding `16px 48px`, 62px tall, square ("More News Releases").

### Tabs
- **Active** (`tab-active`): `#001e1f` pill, `#f3f6fb` 18px/600 label, 56px radius, `12px 32px`, 52px tall.
- **Inactive** (`tab-inactive`): no fill, `#697078` label.

### Links
- **Link** (`link`): `#00804a` 18px/600; hover `#005339` (`link-hover`).

### States (measured hover)
| Element | Before | After |
|---|---|---|
| Text link / band anchor ("Read About Us", "Download App") | `#00804a` | `#005339` |
| Service row link ("Food", "Mart", "Express") | `#00804a` anchor color | `#005339` |
| Nav item ("Grab Singapore" in the menu) | transparent | `#363a45` |

No focus, pressed or disabled states were measured, so none are specified.

### Lists & Cards
- **Service row** (`service-row`): round green illustration, 20px/600 `#242a2e` title, 18px/28px `#383e43` description; rows separated by `#e5e9f0` hairlines.
- **Card** (`card`): white, 1px `#eaeaea` border, 4px radius, top photo, 18px/600 title, body text with bold highlights, green "Learn More" at the bottom (361px wide, 860px tall in the slider).

### Navigation
- **Nav** (`nav`): 69px white bar, hamburger with an 11px "Menu" label, green logo, 17px/500 `#363a45` links, search icon.

### Footer
- **Sitemap** (`sitemap`): `#eaeff2`, `40px 0`, 16px/500 column heads, 14px links, social discs on `#363a45`, a country selector.
- **Legal bar** (`footer`): `#363a45`, `20px 0`, white 16px/500 links ("Terms and Policies • Privacy Notice"), "© Grab 2010 - 2026".

No form inputs appear on the homepage, so none are specified.

## Design System Architecture

Grab's product design system is **Duxton**. Grab told Figma it was "established as Grab's default design system in late 2023. By the second half of 2025, it reached roughly 50% adoption across the app". It is delivered as the Duxton Figma Library plus the Duxton SDK, "the code library that brings the Duxton Figma Library into production" (https://www.figma.com/customers/how-grab-scales-hyperlocal-experiences-across-southeast-asia-with-figma-and-ai/). Duxton has no public documentation, tokens or component inventory (searches in SOURCES.json), and there is no evidence that it powers the marketing site.

Public brand rules come from the merchant brand centre (https://merchant.grab.com/en-my/brand-centre/grab):
- horizontal and stacked logos, horizontal preferred
- logo color only PMS 355C or spot color
- green logo on light backgrounds, white logo on dark
- clear space and minimum height
- "Grab" written with an uppercase G

What grab.com/sg exposes (the de-facto marketing system):
- **Token architecture.** A thin layer of custom properties.
  - Family: `--grab-main-font-family`.
  - Line-height ratios: `--typ-h1-line-height` … `--typ-h6-line-height`, `--typ-base-line-height`, `--typ-eyebrow-line-height`, `--typ-display1-line-height`, each with a `-m` mobile twin.
  - Defaults from the platforms: WordPress presets (`--wp--preset--font-size--*`, `--wp--preset--spacing--*`, `--wp--preset--shadow--*`) and UIkit breakpoints (`--uk-breakpoint-s/m/l/xl`).
  - No color tokens are exposed; colors are hard-coded in CSS modules.
- **Theming.** No dark mode. Sections set their own backgrounds.
- **Type & spacing.** Inter with ratio-based line heights; type sizes from the CSS (18px body, 20px item titles, 40px sections, 80px hero) and a 4/16/32px-dominant spacing set.
- **Component model.** CSS-module class names with hashes (`tabs___3m3vl`, `cta-primary___xMeog`, `card___3JFcv`, `sitemap___1JMa0`, `policyitem___ZIQ1q`) plus utility type classes (`text-p2`, `callout1`). Observed components: nav, hero, CTA band, tabs, service row, card slider, newsroom card, outlined button, sitemap, legal bar.
- **Accessibility.** No published rules. Observed: 18px/28px body text, white text on `#00b14f` and `#002e27` bands, and 52–80px tall targets.
- **Delivery.** No public packages; Duxton ships internally as a Figma library plus SDK.

## Do's and Don'ts

### Do
- Use Inter with 800 headlines and 18px/28px 400 body in `#383e43`.
- Use Grab green `#00b14f` for the logo and the primary call-to-action band, with white text.
- Use the darker greens for supporting roles: `#002e27` bands, `#001e1f` active tab, `#00804a` links (hover `#005339`).
- Separate list items with `#e5e9f0` hairlines.
- Keep cards nearly square (4px) and the active tab fully pill-shaped (56px).
- Pair each service with a round, flat, green spot illustration.

### Don't
- Don't recolor the logo; the brand centre allows only PMS 355C green or white.
- Don't write "grab" in lowercase in text.
- Don't use light headline weights; Grab headlines are 800.
- Don't put green text on the green band; band labels are white.
- Don't add heavy shadows to cards; they use a 1px `#eaeaea` border.

## Responsive Behavior

### Breakpoints
UIkit breakpoints: 360px, 768px, 1025px, 1280px. At 390px (measured):
- h1 drops from 80px/88px to 56px/64px (800); its color computes `#333333` in the mobile layout.
- Body goes from 18px/28px to 16px/24px.
- Line-height tokens switch to their `-m` variants.

### Touch Targets
CTA bands are 80px tall; the active tab is 52px; the outlined button is 62px.

### Collapsing Strategy
The mobile body paragraph measures 274px wide at 390px; mobile layouts of the services index and sliders were not captured.

### Image Behavior
Not measured at mobile width.

## Iteration Guide

1. White canvas, Inter 18px/28px `#383e43` body, `#242a2e` headings.
2. 69px nav: hamburger + "Menu", green logo, 17px/500 links, search.
3. Hero: full-bleed photo, white 80px/88px Inter 800 headline.
4. Under the hero: two full-width 80px bands, `#002e27` then `#00b14f`, white 18px/600 labels.
5. Content: 40px/44px 800 section heads; tabs with a `#001e1f` 56px pill.
6. Lists: hairline rows with round green illustrations, 20px/600 titles, 18px descriptions.
7. Cards: white, 1px `#eaeaea`, 4px radius, `#00804a` links (hover `#005339`).
8. Footer: `#eaeff2` sitemap (`40px 0`) and `#363a45` legal bar (`20px 0`).

### Common Mistakes When Recreating Grab
- Making every button green; on this page green is the logo, one band and the links.
- Using rounded pill buttons for CTAs; the hero CTAs are square full-width bands.
- Setting body text at 16px; desktop body is 18px/28px.
- Using pure black text; ink is slate `#383e43`.
- Forgetting the grey-blue `#eaeff2` sitemap before the dark legal bar.
