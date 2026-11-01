---
version: alpha
name: Linktree
category: "Product & SaaS"
description: "Linktree's homepage stacks saturated full-width colour bands (lime #d2e823, hydrangea blue #2665d6, currant #780016, plum #502274) set in the proprietary Linksans at 800 weight with tight negative tracking, forest-green #254f1a pill buttons (9999px) and soft 32-64px rounded media cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f3f3f1"
  ink: "#1e2330"
  ink-hover: "#262d3e"
  primary: "#254f1a"
  on-primary: "#f3f3f1"
  lime: "#d2e823"
  currant: "#780016"
  plum: "#502274"
  hydrangea: "#2665d6"
  iris: "#061492"
  light-green: "#e8efd6"
  lavender: "#e9c0e9"
  concrete: "#676b5f"
  gold: "#d6a336"
  hairline: "#0000001a"
  input-placeholder: "#757575"
typography:
  display:
    fontFamily: Linksans, "Linksans Fallback", Inter, ui-sans-serif, system-ui, sans-serif
    fontSize: 73.3px
    fontWeight: 800
    lineHeight: 78.431px
    letterSpacing: "-1.466px"
  display-mobile:
    fontFamily: Linksans, "Linksans Fallback", Inter, ui-sans-serif, system-ui, sans-serif
    fontSize: 37.44px
    fontWeight: 800
    lineHeight: 40.0608px
    letterSpacing: "-0.7488px"
  heading:
    fontFamily: Linksans, "Linksans Fallback", Inter, ui-sans-serif, system-ui, sans-serif
    fontSize: 50.9px
    fontWeight: 700
    lineHeight: 53.954px
    letterSpacing: "-1.018px"
  subheading:
    fontFamily: Linksans, "Linksans Fallback", Inter, ui-sans-serif, system-ui, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 36.4px
    letterSpacing: "-0.28px"
  body:
    fontFamily: Linksans, "Linksans Fallback", Inter, ui-sans-serif, system-ui, sans-serif
    fontSize: 16.6px
    fontWeight: 400
    lineHeight: 24.9px
    letterSpacing: "-0.332px"
  button:
    fontFamily: Linksans, "Linksans Fallback", Inter, ui-sans-serif, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: Linksans, "Linksans Fallback", Inter, ui-sans-serif, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Linksans, "Linksans Fallback", Inter, ui-sans-serif, system-ui, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 14.4px
  input:
    fontFamily: Linksans, "Linksans Fallback", Inter, ui-sans-serif, system-ui, sans-serif
    fontSize: 14.5px
    fontWeight: 500
    lineHeight: 21.75px
rounded:
  xs: 7.27px
  sm: 8px
  md: 14.2px
  lg: 14.5px
  xl: 16px
  2xl: 32px
  3xl: 37.8px
  4xl: 48px
  5xl: 64px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 7.27px
  s4: 8px
  s5: 9px
  s6: 12px
  s7: 14px
  s8: 14.2px
  s9: 14.5px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 36px
    height: 60px
  button-secondary:
    backgroundColor: "{colors.lime}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 36px
    height: 60px
  button-nav-signup:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    hoverBackgroundColor: "{colors.ink-hover}"
    rounded: "{rounded.pill}"
    padding: 0px 23.1px
    height: 55px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.input-placeholder}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 8px 14.5px
    height: 60px
  profile-card:
    backgroundColor: "{colors.gold}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.5xl}"
  footer:
    backgroundColor: "{colors.plum}"
    textColor: "{colors.lavender}"
    padding: 227.27px 0px 29.09px
---

# Linktree

## Overview

Linktree (https://linktr.ee/) is the "link in bio" tool: one profile URL that collects a creator's links, shop, media and payments. Its marketing homepage, titled "Link in bio tool: Everything you are, in one simple link", is one of the loudest colour systems in SaaS. Instead of a neutral canvas with a single accent, the page is a sequence of full-width colour bands, each with its own background and its own heading colour.

The capture reads top to bottom as: a thin currant #780016 announcement bar ("Amplify your YouTube on Linktree. Connect today"), a floating white navigation pill, then a lime #d2e823 hero with the headline "A link in bio built for you." in forest green #254f1a, a username input and a forest-green "Get started for free" pill beside a photograph of a creator holding a phone. Next comes a hydrangea-blue #2665d6 band with a lime headline ("Create and customize your Linktree in minutes"), a currant band with lavender #e9c0e9 type ("Share your Linktree anywhere you like!"), and a light green #e8efd6 analytics band ("Analyze your audience and keep them engaged"). The middle of the page relaxes onto marble #f3f3f1: a "The only link in bio trusted by 70M+ musicians" headline over a row of rounded creator images, a bento of feature cards, an "As featured in…" press row and a testimonial. A currant FAQ ("Questions? Answered") and a plum #502274 sign-up footer with a cyan-silhouette illustration close the page.

The tone is playful, creator-first and confident: short punchy headlines with exclamation marks, "Claim your Linktree", "Explore all plans", "Jumpstart your corner of the internet today". Imagery is real creators and product UI mockups, cut into rounded shapes and tilted cards.

## Colors

Linktree names its colours in CSS custom properties, and the measured colours map onto those names.

**Core**
- **canvas #ffffff** — body background and the colour of the navigation pill and input fields.
- **page-largest #f3f3f1** — `--color-marble`; the colour covering the largest measured area (the mid-page sections) and the text colour on forest-green buttons.
- **ink #1e2330** — the dark navy-charcoal used for navigation, FAQ questions, feature card copy and secondary button labels. The "Sign up free" nav button is filled with it; on hover its background shifts to **ink-hover #262d3e**.
- **primary #254f1a** — `--color-forest`; fill of the hero "Get started for free" button and the colour of the hero headline and hero body copy.
- **on-primary #f3f3f1** — text on forest-green buttons.

**Band colours** (all measured as section backgrounds)
- **lime #d2e823** — hero band, the secondary pill button ("Claim your Linktree") and the headline colour on the blue band.
- **hydrangea #2665d6** — `--color-hydrangea`; the "Create and customize" band.
- **currant #780016** — `--color-currant`; announcement bar, "Share your Linktree" band and FAQ band.
- **plum #502274** — the footer sign-up band.
- **light-green #e8efd6** — `--color-light-green`; the analytics band.
- **iris #061492** — `--color-iris`; a dark-blue tile in the analytics mockups.
- **gold #d6a336** — fill of a rounded creator profile card.

**Text and lines**
- **lavender #e9c0e9** — `--color-lavender`; by measured character count the most-read text colour on the page (5,395 characters) because it is used on the large currant and plum bands.
- **concrete #676b5f** — `--color-concrete`; muted secondary copy.
- **hairline #0000001a** — 10% black borders.
- **input-placeholder #757575** — input placeholder/text grey.

The root variables declare many more named colours (for example `--color-canopy #43e660`, `--color-poppy #ff9313`, `--color-rose #fc3e4b`, `--color-orchid #cc01dd`, `--color-sky #02acc4`) that were not rendered on the home page; they are not tokens here.

## Typography

Every measured character is set in **Linksans**, Linktree's own typeface, loaded as a variable font covering weights 300–900 with a metric-matched "Linksans Fallback" and Inter as the next fallback. Linksans is proprietary; if it is unavailable, Inter is the fallback the site itself declares.

- **display** — 73.3px, weight 800, line-height 78.431px, letter-spacing -1.466px (-0.02em). The hero headline. On mobile it becomes **display-mobile**: 37.44px / 40.0608px, weight 800, -0.7488px.
- **heading** — 50.9px, weight 700, line-height 53.954px, letter-spacing -1.018px. Every band headline.
- **subheading** — 28px, weight 500, line-height 36.4px, letter-spacing -0.28px. Feature card titles such as "Share every type of content in limitless ways".
- **body** — 16.6px, weight 400, line-height 24.9px, letter-spacing -0.332px. Band paragraphs.
- **button** — 16px, weight 500, line-height 24px.
- **nav** — 16px, weight 400, line-height 24px.
- **input** — 14.5px, weight 500, line-height 21.75px.
- **link** — 12px, weight 500, line-height 14.4px; the "/selenagomez"-style handles on profile cards.

The type rule is tight and heavy at the top (800 and 700 weights, -0.02em tracking, line-heights barely above 1.0) and relaxed below (400 weight, 1.5 line-height). The root variables also define `--tracking-display: -.02em` and a `--text-display: 96px`, plus two decorative families (`--font-anybody` for Anybody, `--font-thatthat` for a pixel face) not used on the home page.

## Layout

The desktop capture is 1,280px wide and 9,958px tall. The hero band runs 824px tall on lime with content from x 64 to x 1203: a text column on the left (headline, paragraph, input + button row) and a photograph on the right. Each following band repeats a two-column split, alternating image-left and image-right, with the heading, a short paragraph and one pill button in the text column.

The navigation sits as a white rounded bar floating over the top of the hero; the desktop pass recorded four visible header links (Solutions, Features, Integrations, Resources, Pricing in the capture) and a "Solutions" dropdown toggle, with "Log in" and a dark "Sign up free" pill on the right.

Spacing tokens are 4px, 6px, 7.27px, 8px, 9px, 12px, 14px, 14.2px, 14.5px and 16px. Gaps are dominated by 6px (29 uses) and 24px (28 uses), with larger gaps of 43.6px, 48px, 58.18px and 64px between cards. The most frequent padding is 40px (28 uses); band paddings of 128px and 160px give the colour fields room. Fractional values such as 7.27px and 14.2px come from fluid scaling.

The mid-page bento grid pairs a lavender-tinted card, a lime card and a tall hydrangea-blue card; the "trusted by 70M+ musicians" row runs a horizontal strip of circular and rounded tiles.

## Elevation & Depth

The extraction recorded no rendered box-shadows on the home page. Depth comes from colour contrast between bands, from overlapping UI mockups (tilted phone screens and stacked colour cards in the "Share your Linktree" band) and from the floating white nav bar sitting on the coloured hero. The stylesheet does declare `--shadow-card: 4px 4px 4px #0006`, `--shadow-brutalist: 4px 4px 0 0` black and `--shadow-mpr-offset: 6px 6px 0 0 #1e2330`, so hard offset shadows exist in the system, but none were measured on this page. Keep marketing surfaces flat.

## Shapes

Linktree is round. The radius scale measured on the page is 7.27px (inputs), 8px, 14.2px, 14.5px, 16px, 32px, 37.8px, 48px and 64px, plus a 9999px pill. The pill is the most frequent (38 elements): every button and the nav sign-up control use it. Large media cards use 32px and 64px (16 elements each), and creator tiles in the musicians row are either fully circular or 64px-rounded. The root variables declare `--radius-sm: 8px`, `--radius-md: 16px`, `--radius-lg: 24px`, `--radius-2xl: 48px` and `--radius-4xl: 160px`. Nothing on the page is square except the full-width bands themselves.

## Components

**Primary button.** Forest #254f1a fill, marble #f3f3f1 text, Linksans 500 16px / 24px, pill radius, 60px tall, 0px 36px padding. "Get started for free" in the hero and band sections.

**Secondary button.** Lime #d2e823 fill with ink #1e2330 text, same size and shape ("Claim your Linktree" in the footer band, "Get started for free" on dark bands).

**Nav sign-up button.** Ink #1e2330 fill, white text, Linksans 400 14.22px, pill, 55px tall, 0px 23.1px padding; hover darkens to #262d3e. Focus moves to a visible outline.

**Username input.** White #ffffff, 7.27px radius, 60px tall, 8px 14.5px padding, Linksans 500 14.5px with #757575 text, placed directly before the primary button ("linktr.ee/" prefix).

**Navigation bar.** White rounded floating bar with the Linktree wordmark and asterisk mark (SVG logo, drawn in currentColor) on the left, links in the centre, Log in and Sign up free on the right.

**Profile card.** Rounded (64px) creator cards with a coloured fill (gold #d6a336 or lavender #e9c0e9) and a 12px weight-500 handle label.

**Feature card.** Large rounded cards in the bento grid with a UI mockup above and a 28px weight-500 caption below.

**FAQ accordion.** On the currant band, each question is a full-width rounded row with a chevron at the right.

**Footer.** Plum #502274 band with a lavender 50.9px headline, input + lime button, then a white rounded panel holding four link columns (Company, Community, Support, Trust & Legal), app-store badges and social icons.

## Design System Architecture

Linktree does not publish a public design system or brand guideline site; its press page (https://linktr.ee/s/press) offers only a press contact (press@linktr.ee), and https://linktr.ee/brand is a user profile, not a brand page. The de-facto system is visible in the shipped CSS, which is Tailwind-based (the root variables include the `--tw-*` internals and Tailwind-style scales such as `--text-sm`, `--text-xl`, `--radius-sm`).

On top of Tailwind sits a named brand palette with natural, botanical names: `--color-forest`, `--color-marble`, `--color-currant`, `--color-hydrangea`, `--color-iris`, `--color-lavender`, `--color-concrete`, `--color-light-green`, `--color-lichen`, `--color-canopy`, `--color-poppy`, `--color-orchid`. Typography tokens include `--text-h1: 80px`, `--text-h2: 56px`, `--text-h4: 24px`, `--text-body: 18px`, `--text-display: 96px` and `--tracking-display: -.02em`; the home page renders scaled versions of these (73.3px and 50.9px) at 1,280px. There are also campaign-specific namespaces (`--color-mpr-*`, `--text-mpr-*`, `--text-report-*`, `--text-wordmark-*`), showing that one-off campaign pages extend the same token file.

## Do's and Don'ts

**Do**
- Build pages as full-width colour bands, each pairing a background with a high-contrast heading colour from the palette (lime on hydrangea, lavender on currant, forest on lime).
- Set headlines in Linksans 700–800 with -0.02em tracking and tight line-heights.
- Use pill buttons for every action: forest on light bands, lime on dark bands.
- Round media generously (32px, 48px, 64px or full circles).
- Show real creators and real product UI.
- Keep copy short, upbeat and second-person ("A link in bio built for you.").

**Don't**
- Don't build a white page with one accent colour; that is not Linktree.
- Don't use square corners or small radii on buttons.
- Don't add drop shadows to cards on marketing pages; none were measured.
- Don't put lime text on white or lavender text on marble; pair band colours as the site does.
- Don't use the undeclared Tailwind default greys for brand text; use ink #1e2330 and concrete #676b5f.

## Responsive Behavior

The 390px mobile pass measured: the hero headline at 37.44px, weight 800, line-height 40.0608px, letter-spacing -0.7488px, centred (desktop is left-aligned at 73.3px); the band heading at 33.15px weight 700; body paragraphs at 15.6px / 23.4px; the primary button keeping its forest fill, pill radius and 16px label with horizontal padding reduced to 27.3px. The announcement bar keeps its #780016 fill at 64px tall, the hero band is lime and 961px tall, and a "Toggle menu" control was visible with three header links visible (four on desktop).

The mobile capture shows each band's image placed below its text column, centred headlines, full-width input and button in the hero, and the footer link columns listed one after another.

The stylesheet's breakpoints are mobile-first: `min-width: 992px` (49 rules), `min-width: 768px` (32), `min-width: 1280px` (30), `min-width: 480px` (22), `min-width: 1440px` (16) and `min-width: 1920px` (15). Behaviour at widths other than 390px and 1,280px was not measured.

## Iteration Guide

1. Pick the band sequence first: lime hero, hydrangea, currant, light-green, marble, currant FAQ, plum footer. Each band gets one headline colour from the palette.
2. Load Linksans (or the declared Inter fallback) and set display 73.3px/800, heading 50.9px/700, body 16.6px/400, all with negative tracking as tokenised.
3. Make every action a 60px pill: forest #254f1a with #f3f3f1 text, or lime #d2e823 with #1e2330 text.
4. Round imagery at 32px, 48px or 64px; inputs at 7.27px.
5. Keep surfaces flat; no shadows.
6. At 390px, centre the hero, drop the headline to 37.44px and the band headings to 33.15px.
7. Compare against the captures at 1,280px and 390px. Dark mode and intermediate breakpoints were not measured.
