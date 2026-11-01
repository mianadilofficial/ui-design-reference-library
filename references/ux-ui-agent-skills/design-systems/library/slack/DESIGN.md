---
version: alpha
name: Slack
category: "Productivity & SaaS"
description: "Slack's homepage pairs a white canvas and black Salesforce-Avant-Garde headlines (64px, weight 700) with a deep aubergine #481a54 band and a #730394 purple CTA: square 4px-radius, uppercase 14px/700 buttons that darken to #481a54 on hover, plus 16px-rounded product windows lifted by a soft 32px black-10% shadow."
colors:
  canvas: "#ffffff"
  page-largest: "#481a54"
  ink: "#000000"
  primary: "#730394"
  on-primary: "#ffffff"
  surface-lavender: "#f9f0ff"
  ink-muted: "#5c5c5c"
  ink-strong: "#181818"
  hairline: "#0000000a"
  accent-purple: "#9602c7"
  link-blue: "#0b5cab"
typography:
  display:
    fontFamily: >-
      Salesforce-Avant-Garde, system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 64px
    fontWeight: 700
    lineHeight: 71.68px
    letterSpacing: "-0.768px"
  display-mobile:
    fontFamily: >-
      Salesforce-Avant-Garde, system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 35.84px
    letterSpacing: "-0.384px"
  heading:
    fontFamily: >-
      Salesforce-Avant-Garde, system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 58px
    fontWeight: 600
    lineHeight: 72.5px
    letterSpacing: "-0.464px"
  subheading:
    fontFamily: >-
      Salesforce-Avant-Garde, system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
    letterSpacing: "-0.096px"
  body:
    fontFamily: >-
      Salesforce-Sans, system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27.99px
    letterSpacing: "-0.0216px"
  button:
    fontFamily: >-
      Salesforce-Sans, system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18.004px
    letterSpacing: 0.798px
    textTransform: uppercase
  nav:
    fontFamily: >-
      Salesforce-Sans, system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 48px
  2xl: 60px
  3xl: 90px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 18px
  s9: 19px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 19px 40px 20px
    height: 57px
  button-primary-hover:
    backgroundColor: "{colors.page-largest}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 19px 40px 20px
    boxShadow: rgb(115, 3, 148) 0px 0px 0px 1px inset
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    boxShadow: rgba(24, 24, 24, 0.1) 0px 0px 32px 0px
  footer:
    textColor: "{colors.ink}"
---

## Overview

The captured slack.com homepage opens on white. A centered headline, "All your people and AI agents working together." in black 64px Salesforce-Avant-Garde bold, sits above a single supporting sentence, two buttons, a "Trusted by top teams" logo row (OpenAI, Paramount, Stripe, IBM and others), and a large product window. That window is the main picture on the page: a screenshot-style mock of Slack itself, with an aubergine frame, a left sidebar of icons (Home, DMs, Activity, Files, More), a channel pane and a Slackbot pane showing a short conversation about a renewal agreement.

Under the first screen the page flips to a deep aubergine band (`{colors.page-largest}`, #481a54, the largest painted area measured) holding a white 58px headline, "Reimagine what's possible with AI and agents.", flanked by small white sparkle and dot motifs. A list of AI scenarios sits beside a second product window, and the band ends in a large curved edge back to white. The tone is friendly and busy, with confident copy ("Slack connects your team. Slackbot multiplies what they can do.") and product UI as proof.

**Key Characteristics:**
- White canvas with one full-width aubergine feature band; purple is the only brand hue used for actions.
- Bold, tightly tracked display type in Salesforce-Avant-Garde over a humanist body face, Salesforce-Sans.
- Uppercase, letter-spaced button labels on square-cornered (4px) purple buttons.
- Pill-shaped feature chips with purple outline text and icons under the hero.
- Rounded (16px) product windows with a wide, soft shadow as the primary imagery.
- A "from Salesforce" lockup beside the Slack wordmark in the capture, reflecting the parent brand.

## Colors

All values were measured on the live page.

- **Canvas** `{colors.canvas}` #ffffff; **ink** `{colors.ink}` #000000 is the most-read text color, followed by `{colors.ink-muted}` #5c5c5c (secondary copy such as "Trusted by top teams") and `{colors.ink-strong}` #181818.
- **Primary** `{colors.primary}` #730394 is the fill of every "GET STARTED" button; label color is `{colors.on-primary}` white. Hover moves the fill to `{colors.page-largest}` #481a54 (measured), the same aubergine as the feature band. The page's variable `--article-theme-primary` also equals #481a54.
- **Surfaces**: `{colors.surface-lavender}` #f9f0ff is a pale lavender wash (715 weight in area measurements); the hero background has a soft pink-lavender gradient glow behind the product window on the capture.
- **Accents**: `{colors.accent-purple}` #9602c7 appears as brighter purple text (chip labels and icons), and `{colors.link-blue}` #0b5cab is the measured nav and inline link blue (151 characters).
- **Hairline** `{colors.hairline}` #0000000a is a near-invisible 4% black used for dividers.

The page declares other variables in its CSS that did not surface in the visible roles: `--sidebar-color` #400d40, `--sidebar-highlight-color` #1264a3 and `--swiper-theme-color` #007aff. They are not used in this file's tokens because they were not measured as painted colors.

## Typography

Two families are loaded: **Salesforce-Avant-Garde** (weight 700 only) for headings, and **Salesforce-Sans** (300, 400, 600, 700, plus a 200 italic) for body, navigation and buttons. System fonts follow as fallbacks.

| Role | Family | Size / line | Weight | Tracking |
|---|---|---|---|---|
| Display (h1) | Avant-Garde | 64px / 71.68px | 700 | -0.768px |
| Display, mobile | Avant-Garde | 32px / 35.84px | 700 | -0.384px |
| Heading (h2, on aubergine) | Avant-Garde | 58px / 72.5px | 600 | -0.464px |
| Subheading (h3) | Avant-Garde | 24px / 30px | 700 | -0.096px |
| Body | Salesforce-Sans | 18px / 27.99px | 400 | -0.0216px |
| Button | Salesforce-Sans | 14px / 18px | 700, uppercase | 0.798px |
| Nav | Salesforce-Sans | 16px / 24px | 700 | none |

Tracking is proportional to size at about -0.012em on display text and +0.057em on uppercase buttons. Weight is heavy: even navigation links are 700, which gives the nav bar its sturdy look in the capture.

### Font substitutes
Salesforce-Avant-Garde and Salesforce-Sans are Salesforce-hosted brand fonts; their licensing was not confirmed in the pages opened. For open substitutes use a geometric sans such as Outfit or Montserrat at 700 for headings and a humanist sans such as Source Sans 3 or Noto Sans for body, keeping the tracking values above.

## Layout

The hero is centered: headline, one-line subcopy, button pair, logo strip and a product window roughly 600px wide in the 960px-wide capture, all on a single center axis. Below, the aubergine band keeps the centered headline and then splits into two columns: a left list of scenarios and a right product window. The band terminates in a large curved cut, a motif that repeats the rounded geometry of the cards.

Spacing values measured include 2, 4, 6, 8, 10, 12, 16, 18, 19 and 20px, which suit tight inline spacing; the primary button's padding is 19px 40px 20px for a 57px height, and a compact 12px 16px (42px tall) in the nav. Vertical rhythm between hero and band is generous, and the capture shows about a screen height of white before the purple band begins.

## Elevation & Depth

Elevation comes from one shadow recipe: `rgba(0,0,0,0.1) 0 0 32px 0` (12 occurrences), a diffuse glow with no offset that lifts the product windows and cards off the white. A tighter `rgba(0,0,0,0.08) 0 1px 3px` and a 5px/20px `rgba(0,0,0,0.1)` variant appear once each. Outlined buttons use an inset 1px ring (`rgb(115,3,148) 0 0 0 1px inset`) rather than a border. Color blocking, the white-to-aubergine switch, does the rest of the depth work.

## Shapes

Buttons are nearly square at `{rounded.xs}` 4px (30 occurrences), the most common radius on the page. Product windows and cards use `{rounded.lg}` 16px (22 occurrences, with 16px top-only corners on 8). Larger rounds, 48px, 60px and 90px, shape the curved band edges, and `{rounded.pill}` 9999px (999px in the CSS) appears on the feature chips. 8px and 50% (avatars and round icons) appear rarely.

## Components

**Primary button.** `button-primary`: #730394 fill, white uppercase 14px/700 text with 0.798px tracking, 4px radius, padding 19px 40px 20px, 57px tall. Hover turns the fill to `{colors.page-largest}`.

**Outline button.** `button-outline`: white fill, purple text and a 1px inset purple ring, same type and radius ("REQUEST A DEMO", "FIND YOUR PLAN →" in the capture). In the nav it is shorter (12px 16px padding, 42px tall).

**Feature chips.** Pill-shaped, purple-text labels with small icons ("Ask Slackbot", "Plan launches", "Run projects", "Chat with clients", "Automate tasks"); the selected chip is a filled dark purple with white text.

**Product window.** A card with 16px radius, aubergine frame, traffic-light dots at top left and the soft 32px shadow.

**Navigation.** A white bar with the Slack wordmark, links with chevrons (Product, Solutions, Resources), Enterprise and Pricing, a search icon, Sign in, an outlined demo button and the filled purple CTA. Nav link text is `{colors.link-blue}` in the measurements, 16px at 700.

**Logo strip.** Greyscale customer marks under the text "Trusted by top teams" in `{colors.ink-muted}`.

## Design System Architecture

No public Slack marketing design-system documentation was found. What was opened: the media kit page (https://slack.com/brand-guidelines) lists logos, product screenshots and usage terms but no color or typeface specification; the Slack Brand Center (https://brand.slackhq.com) was "under construction" and listed Elements (colors, typography) without content; and the Slack Design blog (https://slack.design) is a writing site with no system docs. A Salesforce Lightning guideline URL tried for typography returned 404.

The de-facto system is visible in the page CSS: `--font-family-heading` (Salesforce-Avant-Garde), `--font-family-body` (Salesforce-Sans), `--font-family-monospace` (Monaco, Menlo, Consolas, Courier New), `--article-theme-primary` #481a54, `--article-theme-secondary` #fff and swiper (carousel) variables. Font names show the page uses Salesforce corporate typefaces rather than Slack-specific ones.

## Do's and Don'ts

**Do**
- Keep backgrounds white or aubergine (`{colors.page-largest}`), and use `{colors.primary}` for the single main action per area.
- Set buttons in uppercase 14px/700 with 0.798px tracking and a 4px radius.
- Use Avant-Garde 700 for headlines and tighten tracking slightly.
- Show the product in a 16px-rounded window with the soft 32px shadow.
- Use pill chips for feature navigation.

**Don't**
- Don't round buttons into pills; only chips are pills.
- Don't use pure black for panels; dark areas are aubergine.
- Don't use thin weights; nav and buttons are 700.
- Don't add hard, offset drop shadows.
- Don't set the hover state to a lighter purple; it darkens to #481a54.

## Responsive Behavior

At the 390px mobile measurement the h1 shrinks to 32px (half of 64px) with 35.84px line height and -0.384px tracking, still 700. The capture is 1280px wide at desktop; other breakpoints were not extracted, so none are asserted. Nav behaviour at small widths was not measured.

## Iteration Guide

1. Start on `{colors.canvas}` with `{colors.ink}` text; set the h1 in Avant-Garde 700 at 64px.
2. Add the primary button: `{colors.primary}` fill, uppercase label, 4px radius, hover to `{colors.page-largest}`.
3. Add one aubergine band for the AI or feature story, with a white 58px/600 headline.
4. Place product UI in 16px-rounded windows with the soft shadow.
5. Add pill chips for scenario switching.
6. Run `node web/scripts/verify-designs.mjs --slug=slack`.
