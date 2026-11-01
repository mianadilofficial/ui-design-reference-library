---
version: alpha
name: Webflow
category: "Design & Creative Tools"
description: "Webflow homepage: white canvas with near-black #080808 ink, a single saturated blue #146ef5 (hover #0055d4) for 4px-radius buttons, and WF Visual Sans Variable at weight 600 for 74.8571px headlines with -0.748571px tracking; dark product screenshots and customer logo walls carry the imagery."
colors:
  canvas: "#ffffff"
  ink: "#080808"
  primary: "#146ef5"
  on-primary: "#ffffff"
  surface-gray: "#f0f0f0"
  gray-line: "#d8d8d8"
  ink-muted: "#5a5a5a"
  link-blue: "#1366e2"
  primary-hover: "#0055d4"
typography:
  display:
    fontFamily: "\"WF Visual Sans Variable\", Arial, sans-serif"
    fontSize: 74.8571px
    fontWeight: 600
    lineHeight: 77.8514px
    letterSpacing: "-0.748571px"
  display-mobile:
    fontFamily: "\"WF Visual Sans Variable\", Arial, sans-serif"
    fontSize: 46.25px
    fontWeight: 600
    lineHeight: 48.1px
    letterSpacing: "-0.4625px"
  heading:
    fontFamily: "\"WF Visual Sans Variable\", Arial, sans-serif"
    fontSize: 52.5714px
    fontWeight: 600
    lineHeight: 54.6743px
  subheading:
    fontFamily: "\"WF Visual Sans Variable\", Arial, sans-serif"
    fontSize: 30.5714px
    fontWeight: 600
    lineHeight: 36.6857px
  body:
    fontFamily: "\"WF Visual Sans Variable\", Arial, sans-serif"
    fontSize: 19.6571px
    fontWeight: 400
    lineHeight: 29.4857px
  button:
    fontFamily: "\"WF Visual Sans Variable\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
    letterSpacing: "-0.16px"
  nav:
    fontFamily: "\"WF Visual Sans Variable\", Arial, sans-serif"
    fontSize: 14.8448px
    fontWeight: 500
    lineHeight: 17.8138px
    letterSpacing: "-0.148448px"
  input:
    fontFamily: "\"WF Visual Sans Variable\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2.08px
  sm: 4px
  md: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.6px
  s3: 2px
  s4: 3.86px
  s5: 4px
  s6: 4.32px
  s7: 4.45px
  s8: 6px
  s9: 6.08px
  s10: 6.4px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 51px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 19.2982px 0px 17.8138px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 24px
    height: 74px
    borderColor: "{colors.gray-line}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
  card:
    backgroundColor: "{colors.gray-line}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 75.4286px 0px 32px
    borderColor: "{colors.gray-line}"
---

## Overview

The captured Webflow homepage is a clean, white, product-confident page with one strong blue. A full-width blue banner (`{colors.primary}`, `#146ef5`) at the top announces "The biggest announcements from Webflow Conf '26 - Read the recap". Under it is a white header with the Webflow "W" logo and wordmark, the links "Platform", "Source", "Solutions", "Resources", "Enterprise", "Pricing", then "Log in", "Contact Sales" and a filled blue "Start for free" button. The hero headline "Build for what's next" is set very large and heavy at 74.8571px in near-black (`{colors.ink}`, `#080808`), with a short description, a filled blue "Get started" button and a grey "Talk to Sales" button.

Below the hero a horizontal strip of feature tiles under the line "What marketing teams love about Webflow" shows tiles such as "$4M+ in pipeline attributed to organic content" over a purple-lavender gradient, "Collaborate in a shared workspace" with four portrait avatars, and "Drive traffic from search and from AI". A cookie dialog is open at the lower left in the capture. A two-row wall of customer logos (Verifone, ABM, Stripe, Spotify, TED, Dropbox, Greenhouse, Clear, Orangetheory, Amazon, Reddit, Discord, Dyson, IDEO, The New York Times, Docusign) follows, and then a large "Introducing Source by Webflow" section with a dark product screenshot in a framed stage and a "Watch launch video" link, ending on "Where modern teams and agents run the web" with an "Explore Source" button and four short feature lines.

**Key Characteristics:**
- A single saturated blue, `{colors.primary}`, reserved for banners and buttons; everything else is black, white and grey.
- Large, heavy sans headlines (weight 600) with slightly negative tracking, in one variable typeface.
- Product-forward imagery: dark UI screenshots against light pages, and tiles with soft gradient backgrounds.
- Pervasive customer logos in monochrome as social proof.
- Modest 4px radius on buttons; 8px on tiles and containers.
- Generous whitespace between sections and thin horizontal rules.

## Colors

- **Canvas** `{colors.canvas}` (`#ffffff`) is the page. `{colors.surface-gray}` (`#f0f0f0`) is the second-largest background area and is used for light panels; `{colors.gray-line}` (`#d8d8d8`) is a measured grey used for card fills and input borders.
- **Ink** `{colors.ink}` (`#080808`) is the most-read text colour (headings, nav, body). `{colors.ink-muted}` (`#5a5a5a`) is the secondary text colour, which the stylesheet names `--_color---neutral--gray-600`.
- **Primary** `{colors.primary}` (`#146ef5`) is the fill of the "Start for free", "Get started", "Contact sales" and "Explore Source" buttons and of the top banner. White text on it is `{colors.on-primary}`. On hover the button fills with `{colors.primary-hover}` (`#0055d4`), measured by hover testing the CTA.
- **Link blue** `{colors.link-blue}` (`#1366e2`) is a close sibling of primary measured as a text colour (26 characters on the page); the capture shows blue inline links such as the cookie-policy link.

The capture also contains customer-driven colour (logos, the purple gradient tile, orange and green markers in the analytics screenshot); none of these are brand tokens and none are included.

## Typography

One family carries the entire page: **WF Visual Sans Variable** (a variable font loaded for weights 100 to 900, with Arial as the fallback). It is the font name that the stylesheet declares through `--_typography---fonts--primary-font`. No source that was read describes the typeface's licence or foundry, so no substitute is claimed beyond the stack's Arial fallback.

| Role | Size / line-height | Weight | Tracking |
|---|---|---|---|
| `{typography.display}` (h1) | 74.8571px / 77.8514px | 600 | -0.748571px |
| `{typography.display-mobile}` | 46.25px / 48.1px | 600 | -0.4625px |
| `{typography.heading}` (h2) | 52.5714px / 54.6743px | 600 | - |
| `{typography.subheading}` | 30.5714px / 36.6857px | 600 | - |
| `{typography.body}` | 19.6571px / 29.4857px | 400 | - |
| `{typography.button}` | 16px / 19.2px | 500 | -0.16px |
| `{typography.nav}` | 14.8448px / 17.8138px | 500 | -0.148448px |
| `{typography.input}` | 16px / 24px | 400 | - |

All sizes are fractional because they are computed from fluid `clamp()` variables: the stylesheet's type variables (`--_typography---h0--font-size` and similar) interpolate between a minimum and maximum layout width. The tracking is a fixed 1% of the font size (for example -0.16px at 16px and -0.748571px at 74.8571px).

## Layout

Content sits in a centred container with consistent left and right edges; the hero is left-aligned, with the headline and description in a narrow column and the right side left empty above a "What marketing teams love about Webflow" selector. The feature tiles form a horizontal, overflowing row. Logos are laid out as a 2-by-8 grid between thin horizontal rules. The Source section is centred: a small "Introducing" label, a huge "Source" wordmark, "by Webflow", and a full-width framed screenshot, followed by a two-column row with a headline on the left and feature lines with icons and dividers on the right. The measured spacing scale begins at `{spacing.s1}` (1px) and has fine steps up to `{spacing.s10}` (6.4px); buttons use 16px vertical and 24px horizontal padding (the stylesheet sets button horizontal padding at 1.5em), the footer 75.4286px top and 32px bottom padding.

## Elevation & Depth

Most surfaces are flat. Buttons gain a layered effect on hover, measured as `rgba(8, 8, 8, 0.08) 0px 1px 1px 0px, rgba(8, 8, 8, 0.2) 0px 1px 1px 0px` plus two white inset highlights (`rgba(255, 255, 255, 0.12) 0px 6px 12px 0px inset` and `rgba(255, 255, 255, 0.2) 0px 1px 1px 0px inset`), a subtle embossed look. The top banner link darkens on hover through an inset shadow (`rgba(0, 0, 0, 0.15) 0px 0px 0px 100px inset`), a tint trick. Depth otherwise comes from imagery: the dark product stage against the light page, and a soft shadow behind the Source app icon in the capture.

## Shapes

Radii in the tokens are `{rounded.xs}` (2.08px), `{rounded.sm}` (4px), `{rounded.md}` (8px) and `{rounded.pill}` (9999px). Buttons and inputs use 4px; tiles, cards and screenshot frames use 8px (the two most frequent radii on the page are 4px and 8px, each on 61 elements). A few fully round elements exist: avatars and pill-shaped badges such as "Made in Webflow".

## Components

- **button-primary**: `{colors.primary}` fill, white 16px weight 500 label with -0.16px tracking, 51px high, 16px by 24px padding, `{rounded.sm}` (4px). Hover: `{colors.primary-hover}` and the embossed shadow above. Used for "Start for free", "Get started" and "Contact sales".
- **Secondary button**: in the capture, "Talk to Sales" is a light grey button with dark text; the extractor did not list it as a candidate, so no tokens are declared beyond the grey `{colors.surface-gray}` being a measured page colour.
- **nav**: 14.8448px weight 500 links, `{colors.ink}`, in a white header with a hairline bottom rule.
- **link**: 16px weight 500 `{colors.ink}` text with 4px radius.
- **text-input**: white fill, 16px text, `{colors.gray-line}` border, 74px high with 24px padding, 4px radius.
- **card**: `{colors.gray-line}` measured surface, `{colors.ink}` text, 8px radius.
- **footer**: white, `{colors.ink}` text, `{colors.gray-line}` top rule, 75.4286px 0 32px padding.

## Design System Architecture

No public design-system documentation or brand guidelines for Webflow's marketing brand were found: the pages that were requested for brand and press content (https://webflow.com/brand) returned 404, two others (https://webflow.com/press and https://webflow.com/about) could not be fetched, and the homepage content read (https://webflow.com) links to no brand-asset page. The only design-related public repository seen on https://github.com/webflow is a CSS repository for Webflow Apps themes, which is not the marketing site. The site's own CSS is the best evidence: it is built in Webflow itself and exposes Webflow Variables as custom properties with a structured naming scheme, `--_group---name`, such as `--_typography---fonts--primary-font`, `--_typography---h0--font-size`, `--_typography---subheading-xxl--font-weight`, `--_components---button--horizontal-padding`, `--_components---button--line-height`, `--_components---input--font-size`, `--_color---neutral--gray-600` and `--_size---*` and `--_layout---fluid--*` variables. Typography, components, colour, size and layout are the groups; fluid type uses a formula between layout minimum and maximum widths.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the main call to action and the announcement banner, and nothing else.
- Set headings in weight 600 with tracking of about -1% of the font size.
- Keep body and nav in `{colors.ink}` and `{colors.ink-muted}`.
- Show product through dark UI screenshots and soft-gradient tiles.

**Don't**
- Add a second brand hue to the interface; colour in the capture comes from customer content.
- Round buttons beyond 4px.
- Use heavy shadows; keep to the embossed hover.
- Mix in a second typeface; one variable family handles every role.

## Responsive Behavior

At 390px wide the h1 measured 46.25px with 48.1px line-height and -0.4625px tracking, down from 74.8571px. Because type is defined with fluid `clamp()` formulas between layout minimum and maximum widths, sizes scale continuously; exact breakpoints were not measured and are not asserted. In the capture, the cookie dialog overlays the lower left with "Reject all" (outlined blue) and "Accept all" (filled blue) buttons.

## Iteration Guide

1. Start from `{colors.canvas}`, `{colors.ink}` and `{colors.primary}`; use `{colors.ink-muted}` for secondary text.
2. Set headlines in `{typography.display}` or `{typography.heading}` at weight 600 and body in `{typography.body}`.
3. Build buttons with `button-primary`: 51px high, 4px radius, 16px by 24px padding, hover `{colors.primary-hover}`.
4. Frame content in 8px-radius tiles and use customer logos for proof.
5. Use `{colors.surface-gray}` for quiet panels and `{colors.gray-line}` for borders.
6. Measure before adding: any new colour must come from the extractor.
