---
version: alpha
name: GitLab
category: "Design Systems"
description: "GitLab's homepage pairs a Charcoal #171321 hero with white sections, GitLab Sans at 85.76px/660 for the hero headline, 18px body, 4px-radius Charcoal buttons, GitLab Mono eyebrow labels and warm orange to purple gradient art; the Pajamas design system documents the brand palette and a separate 8px-radius product UI."
colors:
  canvas: "#ffffff"
  page-largest: "#171321"
  ink: "#74717a"
  primary: "#171321"
  on-primary: "#ffffff"
  surface-cool-grey: "#e8e7eb"
  gray-02: "#a2a1a6"
  ink-offwhite: "#f7f7f5"
  ink-warm-grey: "#a5a3a3"
  gray-01: "#d1d0d3"
  gray-04: "#45424d"
  link-border: "#ffffff33"
  nav-bg: "#1713211a"
  orange-02p: "#fc6d26"
  orange-03p: "#e24329"
  orange-01p: "#fca326"
  purple-01p: "#a989f5"
  purple-02p: "#7759c2"
  danger: "#c52042"
  product-button-text: "#3a383d"
typography:
  display:
    fontFamily: "\"GitLab Sans\", sans-serif"
    fontSize: 85.76px
    fontWeight: 660
    lineHeight: 89.1904px
    letterSpacing: "-2.5728px"
  display-mobile:
    fontFamily: "\"GitLab Sans\", sans-serif"
    fontSize: 48px
    fontWeight: 660
    lineHeight: 49.92px
    letterSpacing: "-1.44px"
  heading:
    fontFamily: "\"GitLab Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 660
    lineHeight: 28px
  subheading:
    fontFamily: "\"GitLab Sans\", sans-serif"
    fontSize: 32px
    fontWeight: 580
    lineHeight: 36px
    letterSpacing: "-0.64px"
  body:
    fontFamily: "\"GitLab Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  link:
    fontFamily: "\"GitLab Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 580
    lineHeight: 22px
  eyebrow-mono:
    fontFamily: "\"GitLab Mono\", monospace"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 2.42px
rounded:
  xs: 4px
  sm: 8px
  md: 120px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 11px 16px
    height: 47px
    borderColor: "{colors.page-largest}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 46px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 24px
    borderColor: "{colors.link-border}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  footer:
    textColor: "{colors.ink-offwhite}"
---

# GitLab

## Overview

The GitLab homepage, titled "GitLab - Speed with control for agentic software engineering", opens with a slim announcement bar ("Ship at agent speed. Prove every step. Transcend is here. Watch now →") on a charcoal-to-orange-pink gradient, then a tall Charcoal (`page-largest`, #171321) hero with a faint dot-grid texture. A white headline, "Speed you can trust, all the way to production", fills the left two-thirds at 85.76px; beneath it a light subtitle ("Agentic software engineering for your team") and a single button, "Try for free →", filled with a warm orange-to-purple gradient. A vertical mono caption, "BUILD WITH GITLAB", runs up the left edge, two translucent cards ("What's new in GitLab", "Watch the keynote and live demos, now on demand") step diagonally into the hero's lower right, and a row of customer wordmarks (NVIDIA, Barclays, Lockheed Martin, Thales, Ericsson, T) closes the dark band.

Below, the page flips to white (`canvas`, #ffffff): a large two-line heading, "Ship faster. Stay in control.", then two bordered cards, each with a dark product-UI panel above a bracketed mono label ("[ AI ORCHESTRATION ]", "[ PLATFORM ]"), a 32px charcoal headline, grey body text and a bold text link with a chevron. A full-width dithered orange, pink and purple gradient panel frames a product table. In the capture the header appears as a white bar with the orange GitLab mark, a menu (Platform, Solutions, Pricing, Resources, Company, Contact us), a search icon, "Request a demo", a Charcoal "Get free trial" button, "Sign in" and a globe. The voice is confident and compact: short declaratives and verbs.

## Colors

GitLab's brand page (https://design.gitlab.com/brand-design/color) gives the palette. Backgrounds use gradients or solid white, Charcoal or purple; headlines, body copy and CTAs should be white or Charcoal; hyperlinks use Purple 01p on dark and Purple 02p on light. The values on the page match: `primary` and `page-largest` are Charcoal #171321, `canvas` is #ffffff, and the greys are the brand's cool grays, `ink` #74717a (Gray 03), `gray-02` #a2a1a6, `gray-01` #d1d0d3 and `gray-04` #45424d. Additional measured neutrals are `surface-cool-grey` #e8e7eb, `ink-offwhite` #f7f7f5 and `ink-warm-grey` #a5a3a3. The palette also lists, and the artwork uses, `orange-01p` #fca326, `orange-02p` #fc6d26 (the logomark), `orange-03p` #e24329, `purple-01p` #a989f5 and `purple-02p` #7759c2. The AI gradient is documented as Orange 01p to Purple 01p, reserved for AI and GitLab Duo content. The product UI adds a danger red, `danger` #c52042, and default text `product-button-text` #3a383d.

## Typography

GitLab Sans is "the default typeface for all GitLab materials", free to download, with a tall x-height; Inter is the stated substitute where it is unavailable. The page measures weights of 580, 660 and 400 (intermediate weights). Scale: `display` 85.76px/89.1904px at 660 with -2.5728px tracking; `display-mobile` 48px/49.92px, -1.44px; `subheading` 32px/36px at 580, -0.64px; `heading` 18px/28px at 660; `body` 18px/26px at 400; `link` 18px/22px at 580. Mid-scale sizes also measured are 56.96px, 24px, 22px, 21.376px and 14px, each with negative tracking of about 2%.

GitLab Mono supplies labels: `eyebrow-mono` is 11px with 2.42px tracking, used for bracketed tags and the vertical caption. The brand guide says to use mono sparingly for labels, callouts and statistics, to default to sentence case, left-align text, keep ligatures on and set CTAs in SemiBold. It also describes "type repetitions", repeated clipped copies of a bold word, as an expression of iteration.

## Layout

The page is 1280px wide and 9,140px tall at capture. The hero is a full-bleed dark band with content left-aligned and thin vertical rules at the right in the capture; the lower sections align to a centred container with two equal card columns. Measured gaps are 8px, 24px, 64px, 16px and 32px; common paddings are 24px, 12px, 48px, 16px, 32px and 96px. The spacing tokens carry the measured 1, 4, 6, 8, 10, 11, 12, 15, 16 and 24px steps. Sections alternate: dark hero, white, white with illustration, gradient panel.

## Elevation & Depth

No box shadows were measured on the home page. Depth comes from contrast: a dark product panel set above a white card body, translucent white fills (`#ffffff12`, `#ffffff26`) over the Charcoal hero, thin `gray-04` and `gray-01` borders, and the dithered gradient panel. On the Pajamas product docs, controls use inset one-pixel ring shadows rather than drop shadows (measured as `rgb(138, 136, 136) 0px 0px 0px 1px inset` on inputs). The header bar is distinguished by a white fill alone.

## Shapes

Home-page buttons are 4px radius (`rounded.xs`, 15 measured occurrences). The other measured home-page radii are 8px on the top corners of one element (8px 8px 0px 0px, `rounded.sm`) and 120px (`rounded.md`) on two elements. Pajamas product components differ: buttons and inputs measure 8px, a 4px radius on many smaller elements, 12px on the example cards, and 160px and 9999px radii on a few elements.

## Components

**Primary button** (`button-primary`): `primary` Charcoal fill and border, white 18px/660 label, 4px radius, 11px 16px padding, 47px tall ("Get your free trial"). **Secondary button** (`button-secondary`): white fill, Charcoal 18px/580 text, 4px radius, 12px 16px padding, 46px tall ("Discover GitLab Flex"); an outlined 43px variant ("Get free trial") has white fill and a white border. **Link** (`link`): white 18px/580 text with a `link-border` (#ffffff33) one-pixel border and 24px padding ("Try for free", on dark). **Navigation** (`nav`): measured as a `nav-bg` (#1713211a, Charcoal at 10% alpha) background with white 16px/400 text. **Footer** role: the extractor matched a customer-quote credit, text `ink-offwhite` #f7f7f5 at 18px/660. In the Pajamas docs, buttons are 32px tall, 14px/400, 8px radius, 12px horizontal padding; the danger primary is `danger` #c52042 with a #ac203a border, and the default confirm primary measures #3a383d with a white label.

## Design System Architecture

GitLab documents its system publicly as Pajamas at https://design.gitlab.com, which I opened and read. It is split into Brand (introduction, messaging, logo, colour, typography, illustration, motion, photography), Product (foundations including design tokens, colour, typography, spacing, layout, border, elevation, animation and iconography; components such as Button, Card, Modal and Table; patterns including GitLab Duo Agent Platform; content; accessibility), and Contribute. A Figma "Pajamas UI Kit" is listed.

The design tokens page (https://design.gitlab.com/product-foundations/design-tokens) defines three categories: constant tokens (raw values such as `color.purple.100`), semantic tokens that reference constants (for example `status.brand.background.color`) and contextual tokens for components (for example `avatar.fallback.background.purple`). The button page (https://design.gitlab.com/components/button) defines categories (primary, tertiary), variants (default, confirm, danger, link) and sizes (medium, small, block) for the `gl-button` component. Measuring that page with the extractor returned 400 root custom properties with a `--gl-` prefix (for example `--gl-text-color-default: #3a383d`, `--gl-border-radius-default: 0.25rem`). Pajamas therefore has two layers: a brand layer (Charcoal, orange and purple, GitLab Sans, 4px marketing buttons) and a product layer (`--gl-*` tokens, 32px buttons with 8px radius). The marketing home page measured here exposes no root custom properties, so its values are taken from the brand layer and the live page.

## Do's and Don'ts

Do set headlines and CTAs in white or Charcoal, use sentence case, left-align copy and keep GitLab Mono to short labels. Do reserve the orange-to-purple gradient for AI and GitLab Duo content, and keep gradients to one or two steps within a colour family. Do use Purple 02p for links on light backgrounds.

Don't apply colours other than white or Charcoal to sentences or long copy (brand rule). Don't use the pink swatch outside gradients, and don't use GitLab Mono inside paragraphs of GitLab Sans. Don't mix the product's 8px control radius into marketing buttons, which are 4px. Don't use all-caps for headings; the uppercase text on the page is confined to mono labels.

## Responsive Behavior

The extractor measured a 390px viewport: the hero headline falls from 85.76px to 48px (`display-mobile`). The Pajamas button guidance notes that block buttons help balance mobile layouts at the xs breakpoint. The capture shows only the desktop layout, so no other breakpoints are asserted.

## Iteration Guide

Start from `page-largest` and `ink` colours on a dark hero, then switch to `canvas` for content bands. Use `display` for the one hero line, `subheading` for card titles and `eyebrow-mono` for tags. Keep marketing buttons at `rounded.xs`, Charcoal on white and white on Charcoal. For anything that looks like product UI, check Pajamas at https://design.gitlab.com/components/button before inventing styles, and cite the brand colour page for new palette entries.
