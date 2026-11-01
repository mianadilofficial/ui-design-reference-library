---
version: alpha
name: HashiCorp
category: "Backend, Database & DevOps"
description: 'HashiCorp''s marketing site: a near-black #0d0e12 canvas with cool grey #b2b6bd body copy, HashiCorp Sans (600) display headlines at 82px, system-ui for UI text, a single electric-blue #1060ff action color, and 5px-radius buttons over iridescent purple-blue glass imagery.'
colors:
  canvas: "#0d0e12"
  page-body: "#ffffff"
  ink: "#b2b6bd"
  primary: "#1060ff"
  on-primary: "#ffffff"
  surface-raised: "#15181e"
  ink-strong: "#efeff1"
  ink-muted: "#656a76"
  link-on-dark: "#2b89ff"
  ink-on-light-button: "#3b3d45"
  ink-soft: "#d5d7db"
  hairline: "#b2b6bd1a"
  primary-hover: "#0c56e9"
  button-secondary-bg: "#fafafa"
  button-secondary-border: "#3b3d4566"
  nav-text: "#0c0c0e"
  nav-link-text: "#2264d6"
  text-input-border: "#616875"
  terraform-brand: "#7b42bc"
  vault-brand: "#ffcf25"
  waypoint-brand: "#14c6cb"
  vagrant-brand: "#1868f2"
typography:
  display:
    fontFamily: __hashicorpSans_96f0ca, __hashicorpSans_Fallback_96f0ca
    fontSize: 82px
    fontWeight: 600
    lineHeight: 95.9974px
  display-mobile:
    fontFamily: __hashicorpSans_96f0ca, __hashicorpSans_Fallback_96f0ca
    fontSize: 42px
    fontWeight: 600
    lineHeight: 49.9968px
  heading:
    fontFamily: __hashicorpSans_96f0ca, __hashicorpSans_Fallback_96f0ca
    fontSize: 52px
    fontWeight: 600
    lineHeight: 61.9996px
  subheading:
    fontFamily: __hashicorpSans_96f0ca, __hashicorpSans_Fallback_96f0ca
    fontSize: 34px
    fontWeight: 700
    lineHeight: 39.9976px
  body:
    fontFamily: system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24.0002px
  button:
    fontFamily: system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 27px
  input:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 6px
  2xl: 8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 11px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 19px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 9px 15px
    height: 36px
    borderColor: "{colors.primary-hover}"
    boxShadow: rgba(101, 106, 118, 0.05) 0px 1px 1px 0px, rgba(101, 106, 118, 0.05) 0px 2px 2px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink-on-light-button}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 11px 19px
    height: 48px
    borderColor: "{colors.button-secondary-border}"
    boxShadow: rgba(97, 104, 117, 0.05) 0px 1px 1px 0px, rgba(97, 104, 117, 0.05) 0px 2px 2px 0px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    padding: 4px 0px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 11px
    height: 48px
    borderColor: "{colors.text-input-border}"
    boxShadow: rgba(97, 104, 117, 0.1) 0px 1px 2px 1px inset
---

# HashiCorp

## Overview

HashiCorp's marketing site (hashicorp.com, "an IBM Company" under the wordmark in the captured header) presents the "Infrastructure Cloud" as a dark, technical, calm product. The page is a long vertical scroll over a near-black canvas (`{colors.canvas}`, #0d0e12) with white-header chrome on top. Almost everything between the header and the footer sits on that dark field; light surfaces appear only as buttons, the sticky chat widget and the top navigation bar.

The hero is a deep indigo-to-violet gradient with angled translucent glass planes, a centered 82px headline "Do cloud right", one white button ("Meet The Infrastructure Cloud") and a row of desaturated customer wordmarks under a small tracked caps label "TRUSTED BY LEADING ORGANIZATIONS". Below it, alternating two-column feature rows pair a left text block (eyebrow with product glyph, 52px headline, grey paragraphs with blue inline links, a light "Learn more" button and a text-link "Try HCP ->") with a right-hand 3D isometric glass object that glows violet, pink and amber.

Personality: confident, enterprise-sober, slightly futuristic. Color is rationed: one blue for actions, one grey scale for text, and all the chroma is carried by illustration rather than UI.

**Key characteristics**
- Near-black canvas `{colors.canvas}` with a slightly lifted `{colors.surface-raised}` (#15181e) for banners and cards.
- Body copy is the cool grey `{colors.ink}` (#b2b6bd); headlines are the brighter `{colors.ink-strong}` (#efeff1).
- One action color: `{colors.primary}` (#1060ff), hover `{colors.primary-hover}` (#0c56e9).
- HashiCorp Sans for display at weight 600/700; system-ui for body and controls.
- 5px button radius, 1px hairline dividers at 10% grey, extremely faint two-layer shadows.
- Product accents (Terraform, Vault, Waypoint, Vagrant) exist as tokens but are rationed to product glyphs.

## Colors

The palette is measured from the live page (desktop capture at 1280px) and from custom properties shipped in its CSS.

### Surfaces
| Token | Hex | Role |
|---|---|---|
| `canvas` | #0d0e12 | page background, ~54% of the screen in the capture |
| `surface-raised` | #15181e | announcement banner ("Cyber Risk 2026"), secondary black button background in the CSS |
| `page-body` | #ffffff | white nav bar, chat widget, white buttons |
| `button-secondary-bg` | #fafafa | light secondary button fill |

### Text
| Token | Hex | Role |
|---|---|---|
| `ink` | #b2b6bd | paragraph copy (most-read color, 4,329 characters in the extraction) |
| `ink-strong` | #efeff1 | h1, h2, h3 and nav-on-dark labels |
| `ink-soft` | #d5d7db | lead lines |
| `ink-muted` | #656a76 | captions, helper text, customer-logo labels |
| `ink-on-light-button` | #3b3d45 | text on the light secondary buttons |
| `link-on-dark` | #2b89ff | inline links in paragraphs and the pale-blue buttons ("Subscribe") |
| `nav-link-text` | #2264d6 | `--brand-link` in the CSS, used on the white header |
| `nav-text` | #0c0c0e | text on the white nav bar |

### Action
- `primary` #1060ff with `on-primary` #ffffff text is the "Get started" button in the header.
- `primary-hover` #0c56e9 is both the hover fill and the 1px border color of the resting button.
- `link-on-dark` #2b89ff is used as a bright fill for "Get the white paper" / "Subscribe" with dark `{colors.canvas}` text, so the two blues form a light-on-dark pair.

### Borders
- `hairline` #b2b6bd1a (grey at 10%) draws card and section outlines on the dark canvas.
- `button-secondary-border` #3b3d4566 outlines the light buttons.
- `text-input-border` #616875 outlines inputs.

### Product accents
The CSS ships per-product tokens, reproduced here only as identity colors: `terraform-brand` #7b42bc, `vault-brand` #ffcf25, `waypoint-brand` #14c6cb, `vagrant-brand` #1868f2. They belong on product logos and product pages, not on generic UI.

### Color usage rules
- Never put `ink` (#b2b6bd) on the white surface; the light surfaces switch to `ink-on-light-button` or `nav-text`.
- Reserve `primary` for the single most important action in a viewport.
- Do not tint the canvas; depth comes from `surface-raised` and from imagery.

## Typography

Two families carry the page. The measured display family is the self-hosted variable font loaded as `__hashicorpSans_96f0ca` (weight range 300 to 600, one loaded face). HashiCorp's own announcement describes HashiCorp Sans as a display face by the XYZ Type studio, available in Light, Regular, Medium and Semibold, with accentuated bridges, monospace-like slabs on i and l, ink traps and humanist letterforms (https://www.hashicorp.com/blog/introducing-hashicorp-sans). Everything else uses the system stack.

| Token | Font | Size | Weight | Line height |
|---|---|---|---|---|
| `display` | HashiCorp Sans | 82px | 600 | 95.9974px |
| `display-mobile` | HashiCorp Sans | 42px | 600 | 49.9968px |
| `heading` | HashiCorp Sans | 52px | 600 | 61.9996px |
| `subheading` | HashiCorp Sans | 34px | 700 | 39.9976px |
| `body` | system-ui stack | 14px | 400 | 24.0002px |
| `button` | system-ui stack | 16px | 500 | 27px |
| `input` | Arial | 16px | 400 | n/a |

### Observations
- Headline to body contrast is dramatic: 52px to 14px with a switch of family, so hierarchy is carried by size and family rather than by weight.
- Mobile h1 is 42px with measured letter spacing of -0.42px (1% negative tracking); desktop headings use `normal` tracking.
- Small uppercase labels measure 13px with 1.3px tracking (10%), seen in "TRUSTED BY LEADING ORGANIZATIONS".
- Most characters on the page (about 5,900) are system-ui; HashiCorp Sans is about 860 characters, i.e. reserved for headlines.
- The sizes that appear in the extraction are 82, 52, 42, 34, 26, 20, 19, 17, 16, 15, 14 and 13px.

### Font substitutes
HashiCorp Sans is proprietary and served only as a hashed web font. Where it is not available use a geometric-humanist sans with a slightly squared feel at weight 600 (for example Inter or Manrope at 600) and keep the same sizes. The system-ui stack needs no substitute.

## Layout

- Desktop capture width is 1280px; sections are full-bleed on the dark canvas with content inset roughly 36px from the left edge at the capture's 960px preview scale, i.e. a wide container with generous gutters.
- Feature rows are two columns: text at about 475px wide (measured h2 width 475px) and an illustration filling the other half; rows alternate sides.
- The CSS defines `--space-block-padding: 88px`, the vertical padding between blocks; paddings of 48px, 64px and 128px also occur.
- Measured gaps: 24px (most common), 8px, 6px, 12px, 4px, 32px, 20px, 16px, 40px, 48px and 96px.
- Spacing tokens in the front matter (s1 4px to s10 20px) cover control-level spacing; section-level spacing is the 48 to 128px set above.
- Navigation is a white bar, 48px-tall at preview scale, with the logomark and wordmark at left, six dropdown triggers (Solutions, Products, Pricing, Developers, Resources, Company) and three actions at right: Log in (text), Contact us (outlined), Get started (blue).
- A banner strip below the hero is a bordered `surface-raised` row with a bold label cell, a one-line grey description and a right-aligned "Learn more ->".
- A floating white chat panel anchors to the lower right with four full-width outlined buttons.

## Elevation & Depth

Depth on this site is optical rather than structural.

- UI shadows are almost invisible: buttons use `rgba(101, 106, 118, 0.05) 0px 1px 1px 0px, rgba(101, 106, 118, 0.05) 0px 2px 2px 0px`; secondary buttons use the same recipe with `rgba(97, 104, 117, 0.05)`.
- Inputs use an inset shadow `rgba(97, 104, 117, 0.1) 0px 1px 2px 1px inset`.
- Focus is a 3px ring: `rgb(89, 144, 255) 0px 0px 0px 3px` layered over the resting shadow (the CSS also holds `--mds-color-focus-action-external: #5990ff`).
- Surface layers are expressed through the step from `canvas` (#0d0e12) to `surface-raised` (#15181e), plus hairlines at 10% grey.
- The big sense of depth comes from photographic 3D glass cubes, soft glows and the hero gradient; never emulate it with box-shadows.
- A mid-level surface shadow exists in the CSS (`--mds-surface-mid-box-shadow`) for light-theme product surfaces; the dark marketing pages do not use it.

## Shapes

| Token | Value | Where |
|---|---|---|
| `xs` | 2px | small tags |
| `sm` | 3px | tiny chips |
| `md` | 4px | nav triggers (hover chip is 4px) |
| `lg` | 5px | all primary and secondary buttons, text input |
| `xl` | 6px | grouped control ends |
| `2xl` | 8px | cards and panels |
| `pill` | 9999px | circular controls (measured 50%) |

The dominant corner is the small 5px button radius; cards use 8px. There are no pill-shaped CTAs. Imagery is sharp-edged glass with square corners.

## Components

### Buttons
- **button-primary**: fill `{colors.primary}`, text `{colors.page-body}`, 16px/500 system-ui, radius 5px, padding 9px 15px, height 36px, 1px border `{colors.primary-hover}` and the faint two-layer shadow. Hover swaps fill to `{colors.primary-hover}`. Used for "Get started" in the header.
- **button-secondary**: fill `{colors.button-secondary-bg}` (#fafafa), text `{colors.ink-on-light-button}`, radius 5px, padding 11px 19px, height 48px, border `{colors.button-secondary-border}`. This is the hero and content-row button ("Meet The Infrastructure Cloud", "Learn more"): a white button on the dark canvas.
- **Pale-blue button**: `#2b89ff` fill with `#0d0e12` text for "Subscribe" and "Get the white paper" on dark sections.
- **Text link with arrow**: "Try HCP ->" in `ink-strong` at 16px/500, padding 4px 0.

### Navigation
White bar (`{colors.page-body}`), text `{colors.nav-text}`, dropdown triggers 40px high with 4px radius; hover fills them with a light grey (rgb 241,242,243 in the hover probe). Links on the bar use `{colors.nav-link-text}`.

### Inputs
Text input: fill `{colors.canvas}`, text `{colors.ink-strong}`, Arial 16px, 5px radius, 48px high, padding 11px, border `{colors.text-input-border}` with the inset shadow.

### Banner strip
Bordered row at `{colors.surface-raised}` with hairline, 8px corner, a label cell in `ink-strong` and a short grey description in `ink` at small size.

### Customer logo row
Seven wordmarks rendered in desaturated grey over the canvas under a 13px tracked caps label; no cards, no borders.

### Eyebrow
A 20px-ish product glyph in a small rounded square followed by "HashiCorp Cloud Platform" in `ink-strong` at about 16px/500, above each h2.

### Chat panel
White surface, product screenshot header, 20px-ish bold greeting, four outlined buttons at 5px radius and a small underlined privacy link; a blue square launcher (`primary`) sits beside it.

## Design System Architecture

HashiCorp publishes the Helios Design System, documented at https://helios.hashicorp.design. The Helios tokens page (https://helios.hashicorp.design/foundations/tokens) lists tokens under `--hds-` names such as `--hds-border-radius-x-small` and `--hds-core-color-blue-500`, grouped into Border, Core, Focus, Foreground, Page, Surface and a Product section carrying brand, foreground, surface, border and gradient tokens for Boundary, Consul, Nomad, Packer, Terraform, Vagrant, Vault, Waypoint and Vault Radar.

The marketing site itself ships a sibling set of variables prefixed `--mds-` (for example `--mds-color-foreground-action-visited`, `--mds-spacing-03: 0.5rem`, `--mds-form-checkbox-size: 16px`, `--mds-typography-display-expressive-800-font-size: 5.125rem`) plus a handful of unprefixed brand variables (`--brand`, `--brand-link`, `--space-block-padding`). The values in this file were measured from rendered elements; the variable names above explain how the system is organised, not additional tokens.

Brand rules are published separately at https://www.hashicorp.com/brand. The brand welcome page itself carries no hex values, pointing to separate Brand Logos, Product logos, Color and Typography pages that were not read for this file.

Architecture summary:
- Tokens: layered core -> semantic -> product, named by role and scale (`unified-core-blue-7`, `button-background`).
- Components: Helios for products; the marketing site (a Next.js build, judging by the hashed `__hashicorpSans_96f0ca` font class) consumes the `--mds-` variables.
- Typography: HashiCorp Sans for display (from April 2024), system-ui for text.

## Do's and Don'ts

**Do**
- Keep the canvas `#0d0e12` and let imagery carry color.
- Use `{colors.primary}` once per viewport for the lead action.
- Set body at 14px/24px in `{colors.ink}` and headlines in `{colors.ink-strong}`.
- Use 5px radius on every button and input.
- Pair a white (`#fafafa`) secondary button with a text link plus arrow as the secondary action.
- Use small tracked caps (13px, 1.3px) for section labels.
- Keep shadows at the faint 5% two-layer recipe.

**Don't**
- Don't use pill buttons or large radii on controls.
- Don't use product accent colors (Terraform purple, Vault yellow) as generic UI colors.
- Don't place #b2b6bd copy on white.
- Don't add drop shadows to cards on the dark canvas; use `surface-raised` and hairlines.
- Don't recolor the logo; follow the brand pages at https://www.hashicorp.com/brand.
- Don't use more than two blues on one view.

## Responsive Behavior

- Measured at two widths: desktop 1280px and mobile 390px.
- The hero heading drops from 82px to 42px on mobile with line height 49.9968px and -0.42px letter spacing.
- Mobile header navigation was not measured; the desktop header has six dropdown triggers and a blue "Get started" CTA.
- Mobile feature row layout was not measured.
- Block padding of 88px compresses on small screens; section rhythm stays on the 4px spacing ladder.
- Touch targets: the primary button is 36px high on desktop and the secondary 48px; use the 48px secondary size on touch.
- The customer-logo row wraps or scrolls rather than shrinking the logos.
- The chat panel docks to the lower right at every width.

## Iteration Guide

1. Start from `canvas` and `ink`; add `surface-raised` only for one banner or card family.
2. Set headlines in HashiCorp Sans (or a substitute) 600 at 52px, body 14px/24px.
3. Add exactly one `primary` action, then a `button-secondary` beside it.
4. Add imagery with glass, glow and violet-blue gradients; keep UI chrome neutral.
5. Check every control for the 5px radius, the 10% grey hairline and the faint shadow.
6. Validate contrast: `ink` on `canvas` (#b2b6bd on #0d0e12) passes comfortably; `ink-muted` (#656a76) is for captions only.
7. When extending, pull values from the Helios tokens or the site's `--mds-` variables rather than inventing new hues.
8. Re-measure with `node web/scripts/extract-tokens.mjs --slug=hashicorp --force` if the live site changes, then run the verifier.
