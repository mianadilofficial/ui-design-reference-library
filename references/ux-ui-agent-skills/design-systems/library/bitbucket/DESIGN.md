---
version: alpha
name: Bitbucket
category: "Developer Tools & IDEs"
description: "Bitbucket (Atlassian) sets Charlie Display 54px/500 headlines (-1.08px) and Charlie Text 16px body in #101214 on white, with #1868db blue pill buttons (48px, 10px 22px padding) that darken to #123263, a full-width #1868db band, #e9f2fe pale-blue sections, 20px-radius #b7b9be-bordered cards and Atlassian --ds-* tokens."
colors:
  canvas: "#ffffff"
  surface-blue-tint: "#e9f2fe"
  page-body: "#ffffff"
  ink: "#101214"
  primary: "#1868db"
  on-primary: "#ffffff"
  surface-gray: "#f8f8f8"
  ink-body: "#292a2e"
  ink-input: "#091e42"
  ink-subtle: "#505258"
  hairline: "#b7b9be"
  primary-hover: "#123263"
  link-hover: "#1558bc"
  surface-neutral: "#f0f1f2"
  text-input-bg: "#fafbfc"
  text-input-border: "#dfe1e6"
typography:
  display:
    fontFamily: "\"Charlie Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 54px
    fontWeight: 500
    lineHeight: 56.16px
    letterSpacing: "-1.08px"
  display-mobile:
    fontFamily: "\"Charlie Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 44px
    fontWeight: 500
    lineHeight: 45.76px
    letterSpacing: "-0.88px"
  heading-section:
    fontFamily: "\"Charlie Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    letterSpacing: "-0.32px"
  heading:
    fontFamily: "\"Charlie Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 34.72px
  body:
    fontFamily: "\"Charlie Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 29.92px
    letterSpacing: "-0.22px"
  button:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
  label:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 13px
    fontWeight: 700
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 20px
  xl: 40px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 22px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 22px
    height: 40px
  button-outlined-inverse:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "2px solid #ffffff"
    padding: 10px 22px
    height: 48px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink-body}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-input}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 1px 2px 1px 8px
    height: 42px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
---

# Bitbucket

## Overview

Bitbucket's home page (bitbucket.org, title "Bitbucket Home Page") is Atlassian's code-hosting product site, built in Atlassian's current marketing language: white space, the blue Bitbucket logo, Charlie typefaces and bright, collage-like product illustrations. A 68px white header holds the logo, "Why Bitbucket" (dropdown), "Self-Hosted" and "Pricing" on the left, and "Sign in" plus a blue "Get it Free" pill on the right.

The hero is left-aligned: "Code and CI/CD, powered by AI and the Atlassian platform" in Charlie Display at 54px, a one-line intro, a blue "Try it now" pill and a "Watch demo" text link. To the right a product screenshot sits on a colorful collage of green, purple and orange shapes. Three feature columns with icons (AI throughout the SDLC, Extensible and all-in-one, Platform-wide standards) follow. Then a full-width #1868db band ("AI that provides context to code, not just vibes") introduces a video with a "Bitbucket is faster than ever" thumbnail.

Further down: a pale-blue #e9f2fe "Migrating to the cloud?" band with a "Get in touch" link; "15 million developers build on Bitbucket" with four customer quotes, each next to a colored brand tile (trulia, nextiva, Flo and one more); a pale-blue "Platform-wide AI beyond code generation" section with a dark Rovo Dev screenshot; "Security and compliance" with four alternating rows of product screenshots on bright colored frames; an integration grid; a logo strip; a Jira cross-sell; four "Learn more" cards (Migrate to Bitbucket cloud, Scale CI/CD with Bitbucket Pipelines, 3X a DevOps Leader, New features on the horizon); a closing blue band ("Take Bitbucket Cloud for a spin") with a white-outlined pill; and a footer with a newsletter field.

The tone is enterprise-confident with playful asides ("not just vibes").

## Colors

- **Canvas / page-body #ffffff** — the page background (61% of the captured screen).
- **Ink #101214** — headings and primary text (2,394 characters). **Ink-body #292a2e** — paragraphs and nav links (2,169). **Ink-subtle #505258** — secondary text; the CSS names it `--ds-icon-subtle`.
- **Primary #1868db** — the Atlassian brand blue: every pill button, "Watch demo" style links (283 characters), and two full-width bands. The CSS defines `--ds-icon-brand: #1868DB` and `--ds-chart-information-hovered: #1868DB`.
- **Primary-hover #123263** — button fill on hover.
- **Link-hover #1558bc** — text links and nav items on hover.
- **On-primary #ffffff**.
- **Surface-blue-tint #e9f2fe** — pale-blue section bands (the largest painted area, 2,526 units).
- **Surface-gray #f8f8f8** and **surface-neutral #f0f1f2** (`--ds-surface-hovered`) — neutral panels.
- **Hairline #b7b9be** — card borders (`--ds-background-accent-gray-subtler-hovered`).
- **Text-input-bg #fafbfc / text-input-border #dfe1e6 / ink-input #091e42** — the newsletter email field.

Illustration colors (greens, purples, oranges, yellows in the collages and screenshot frames) are artwork, not UI tokens.

## Typography

Two loaded families: **Charlie Display** (400, 500, 700, 800) for headings and large text, **Charlie Text** (400, 500, 700) for UI and running text. Atlassian's typography foundations page (https://atlassian.design/foundations/typography) names **Charlie Sans** as "Atlassian's custom brand font, used when expressing the brand, such as in marketing", while Atlassian Sans and Atlassian Mono are the in-product typefaces.

- **Display** — Charlie Display 54px/56.16px, 500, -1.08px (-0.02em).
- **Heading-section** — Charlie Display 32px, 500, -0.32px ("Platform-wide AI beyond code generation", "Security and compliance").
- **Heading** — Charlie Display 28px/34.72px, 500 (feature titles, band headlines, card titles).
- **Body** — Charlie Display 22px/29.92px, 400, -0.22px (quotes and lead paragraphs).
- **Button** — Charlie Text 20px/24px, 500 (hero pill). **Button-secondary** — Charlie Text 16px/20px, 500 (header pill).
- **Nav** — Charlie Text 16px, 400; running text is 16px with -0.16px tracking (2,976 characters).
- **Label** — Charlie Text 13px, 700, uppercase (footer column titles such as "BITBUCKET"); eyebrow labels use 16px with +1.28px tracking and 14px with +0.42px.

Charlie is proprietary to Atlassian; outside Atlassian properties, a humanist grotesque at the same weights (500 headings, 400 text) is the substitute.

## Layout

Measured at 1280px. Main content spans x=64 to x=1216 (a 1,152px container); centred bands such as the blue AI band and "Migrating to the cloud?" narrow to x=261–1019. The quote section's content starts at x=360. Feature rows use 3 columns; the "Learn more" cards 4 columns at 264px wide.

Gaps: 24px (82 times), 8px, 32px, 16px, 20px, 48px, 64px. Paddings: 60px (20 times — section padding), 16px, 32px, 24px, 64px, 10px, 6px, 8px, 22px, 48px, 20px. The page is 9,131px tall. Sections alternate white, pale-blue and solid-blue bands; inside them, layouts alternate text-left/image-right and the reverse.

## Elevation & Depth

Almost flat: one element carries `rgb(128, 128, 128) 0px 0px 5px 0px`. Cards use a 1px #b7b9be border and 20px radius. Depth comes from the screenshots — product UI placed on saturated colored frames, sometimes overlapping offset color blocks. The CSS includes Atlassian's shadow token `--ds-shadow-overflow-spread: #1E1F2129`. Focus on the pill buttons is a 2px solid #1868db outline with a 4px offset.

## Shapes

Radii: 20px (cards), 10000px (all pill buttons — Atlassian's measured "fully round" value), 3px and 4px (inputs and small elements), 2px, 40px, 100%/50% (avatars and circular tiles), and asymmetric 20px 20px 0 0 and 0 0 24px 24px for split card parts. Buttons are always pills; cards are always generously rounded; the illustrations add organic blobs.

## Components

- **Primary pill** — #1868db fill, white Charlie Text 20px/500, 10000px radius, 48px tall, 10px 22px padding ("Try it now"); hover #123263; focus 2px #1868db outline at 4px.
- **Header pill** — same fill at 16px/500, 40px tall, 8px 22px padding ("Get it Free").
- **Outlined inverse pill** — transparent with `2px solid #ffffff`, white label, 48px (on blue bands).
- **Text link** — #1868db with an arrow ("Watch demo →", "Learn more →"); hover #1558bc.
- **Header** — white, 68px; links in #292a2e that turn #1558bc on hover.
- **Feature column** — icon, 28px/500 title, 16px description.
- **Quote row** — 22px quote, bold name, uppercase role, colored brand tile on the left.
- **Card** — white, 1px #b7b9be border, 20px radius, image top, 28px title, short text, link.
- **Email input** — #fafbfc fill, `2px solid #dfe1e6` border, 4px radius, 42px tall.
- **Footer** — 13px/700 uppercase column titles, link lists and the newsletter form.

## Design System Architecture

Bitbucket is built on the Atlassian Design System (https://atlassian.design). The site's CSS ships its design tokens as `--ds-*` custom properties, for example `--ds-icon-brand: #1868DB`, `--ds-surface-hovered: #F0F1F2`, `--ds-background-brand-subtlest-hovered: #CFE1FD`, `--ds-border-accent-green: #22A06B`, `--ds-chart-discovery: #BF63F3`, `--ds-font-weight-semibold: 600`, `--ds-space-025: 0.125rem`, `--ds-space-250: 1.25rem`. Atlassian's color foundations page (https://atlassian.design/foundations/color) documents the naming: every color token starts with `color`, then the property (`color.text`, `color.background`, `color.icon`, `color.border`), then role modifiers (neutral, brand, information, success, warning, danger, discovery, accent, inverse, input), emphasis (subtlest → boldest) and state (hovered, pressed, selected, focused, disabled), e.g. `color.background.danger.bold.hovered`. Tokens "currently support two color themes: light and dark". The typography page defines `font.heading.xxlarge` (Bold 32px/36px) through `font.heading.xxsmall` (12px/16px), `font.body.large` (16px/24px), `font.body` (14px/20px) and `font.code` (12px/20px) for product UI, and Charlie Sans for marketing — which is what this marketing page uses.

## Do's and Don'ts

**Do**
- Use Charlie Display 500 for headings and Charlie Text for UI, with -0.02em tracking at display size.
- Make every button a #1868db pill; darken to #123263 on hover.
- Alternate white, #e9f2fe pale-blue and solid #1868db bands.
- Present product screenshots on bright, colored frames.
- Use Atlassian design tokens (`--ds-*`) rather than raw hex in product UI.

**Don't**
- Don't use bold (700) for marketing headlines; measured headings are 500.
- Don't square off buttons or cards.
- Don't use Atlassian Sans for marketing pages; the foundations page assigns Charlie Sans to brand expression.
- Don't add drop shadows to cards.
- Don't mix illustration colors into UI controls.

## Responsive Behavior

Measured at a 390px viewport: the h1 drops from 54px/56.16px to 44px/45.76px with -0.88px tracking; the h2 drops from 28px/34.72px to 20px/24.8px; the lead/quote body drops from 22px/29.92px to 18px/24.48px with -0.18px tracking. The hero pill keeps 48px, 20px text and 10px 22px padding. The header stays 68px with 2 visible links and a visible menu toggle, as recorded by the mobile pass. All bands become a single column with content from x=32 to x=358, and the card grid shows 1 column. The mobile page is about 12,560px tall versus 9,131px on desktop. Other mobile behaviour was not measured.

## Iteration Guide

1. White canvas, #101214 headings in Charlie Display 500, #292a2e body in Charlie Text 16px.
2. Add the 68px header with a 40px #1868db "Get it Free" pill.
3. Hero: left-aligned 54px headline, 48px pill, text link, screenshot on a colorful collage.
4. Alternate white, #e9f2fe and #1868db bands with 60px section padding.
5. Use 20px-radius cards with #b7b9be borders for resources.
6. Close with a blue band and a white-outlined pill.
7. Check token usage against atlassian.design; re-run the gate.
