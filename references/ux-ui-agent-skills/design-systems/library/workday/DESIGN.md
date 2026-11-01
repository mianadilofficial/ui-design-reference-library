---
version: alpha
name: Workday
category: "Design Systems"
description: "Workday's marketing site is a deep-navy canvas (#022043) set in Acid Grotesk at weights 400 to 800 (56px display, -2% tracking), with white text, a blue pill CTA (#0057ae, 24px radius) and gradient-washed AI storytelling; its Sana Canvas design system documents tokens on an 8px grid, Roboto and Sana Sans VF type, and a navy (#000080) pill button."
colors:
  canvas: "#022043"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#0057ae"
  on-primary: "#ffffff"
  surface-navy-raised: "#0f2e66"
  ink-muted: "#4b4b4b"
  hairline: "#b6c1cc"
  docs-primary: "#000080"
  docs-danger: "#cd0600"
typography:
  display:
    fontFamily: "\"Acid Grotesk\", Arial, Helvetica, sans-serif"
    fontSize: 56px
    fontWeight: 800
    lineHeight: 64px
    letterSpacing: "-2%"
  display-mobile:
    fontFamily: "\"Acid Grotesk\", Arial, Helvetica, sans-serif"
    fontSize: 48px
    fontWeight: 800
    lineHeight: 56px
  heading:
    fontFamily: "\"Acid Grotesk\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  subheading:
    fontFamily: "\"Acid Grotesk\", Arial, Helvetica, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: "\"Acid Grotesk\", Arial, Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"Acid Grotesk\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  docs-button:
    fontFamily: "\"Sana Sans VF\", Roboto, -apple-system, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 1px
  sm: 4px
  md: 5px
  lg: 8px
  xl: 10px
  2xl: 12px
  3xl: 16px
  4xl: 24px
  docs-full: 600px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.heading}"
    rounded: "{rounded.4xl}"
    padding: 12px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
  button-docs-primary:
    backgroundColor: "{colors.docs-primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.docs-button}"
    rounded: "{rounded.docs-full}"
    padding: 0px 16px
    height: 40px
  button-docs-danger:
    backgroundColor: "{colors.docs-danger}"
    textColor: "{colors.page-body}"
    typography: "{typography.docs-button}"
    rounded: "{rounded.docs-full}"
    padding: 0px 16px
    height: 40px
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.heading}"
    rounded: "{rounded.4xl}"
    padding: 0px 4px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    boxShadow: rgb(182, 193, 204) 0px -1px 0px 0px inset
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
  card:
    textColor: "{colors.page-body}"
    rounded: "{rounded.2xl}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
---

## Overview

The Workday homepage in the capture is a dark, editorial, AI-forward page. A promotional strip for the "Workday Rising" event sits at the very top in a mid navy, followed by a white sticky header with the orange-arc "workday" logo, the navigation (Products, Industries, Customers, Resources, Partners, Company), globe, account and search-refresh icons, and a blue pill "Contact Sales". Beneath it the page background is the deep navy canvas (#022043) and the hero H1 "Put AI agents to work for you." is huge, heavy and gradient-filled in warm yellow-orange, with a white supporting paragraph and a white pill button "Explore AI Agents". On the right, a rounded-corner carousel card shows a smiling woman with a dark translucent caption panel ("WorkdayGO is the all-in-one solution for your midsize business") and an arrow icon button, with a segmented progress indicator and pause button below.

The next section's centered headline, "A unified AI platform built to serve your entire organization.", is white, bold and tightly tracked, set over a background that shifts from navy through blue and lavender to peach. It leads into an accordion of department panels: HR (open, with a photograph of an older woman wearing glasses behind a translucent overlay, a description and underlined link rows with arrows such as "Human Capital Management" and "Employee Experience", and a bordered WorkdayGO banner) and Finance, IT, Legal and Operations (collapsed, in raised navy #0f2e66 with plus icons in grey circles). Another section starts with the heading "AI agents that understand work." in coral-to-gold gradient and an outlined pill "Explore Our Agents" next to a large empty bordered frame (a video or animation that was not rendered). A white chat bubble greets visitors ("Hi there. Welcome to Workday") with a blue chat launcher at the right edge.

The voice is confident and agent-centric: "Put AI agents to work for you", "people like never before", short, parallel sentences, and white text on navy for nearly all copy.

## Colors

- **Canvas #022043** is the deep navy that fills most of the page area. The largest measured background by area, it is the page the viewer sees.
- **Page-body #ffffff** is white: the sticky header, the chat bubble and all button label colors. **Ink #ffffff** is the dominant text color because most copy sits on navy.
- **Primary #0057ae** is the fill of the "Contact Sales" pill, with white text. Its hover state in the generated data flips to the canvas navy (#022043).
- **Surface-navy-raised #0f2e66** is the lighter navy of accordion panels and cards sitting on the canvas.
- **Ink-muted #4b4b4b** is a neutral grey measured as a text color on the page.
- **Hairline #b6c1cc** is a pale blue-grey used for the header's bottom line and card borders.

Two more colors come from the Sana Canvas Button documentation page measured with the extractor: **docs-primary #000080** (the filled Primary button) and **docs-danger #cd0600** (the destructive "Delete" button). They belong to the product component library, not the marketing site. Gradients carry the brand's personality: warm yellow-orange and coral for headlines, and a navy-blue-lavender-peach wash behind the accordion; the gradients are image-like and their stops were not recorded as tokens. The Sana Canvas color documentation defines a brand primary scale (primary 25 through 975) in OKLCH values, so the product's blues are expressed in a perceptual color space rather than hex.

## Typography

The marketing site uses a single family, **Acid Grotesk**, with Arial, Helvetica and a generic sans-serif as the declared fallbacks. Display is 56px at weight 800 with a 64px line height and -2% letter spacing; on a 390px viewport it is 48px with a 56px line height. Subheadings are 24px bold on a 32px line; body copy is 20px regular on a 28px line; navigation and button labels are 16px (bold for buttons) on a 24px line. The heavy 800 weight, tight tracking and large size give headlines a poster-like authority, while the lighter 400 body keeps paragraphs calm.

The design system documents a different type setup for product UI. Its Type page names Roboto as the primary typeface (with Roboto Mono for tabular figures) and lists a sans-serif stack of Roboto, Helvetica Neue, Helvetica, Arial; the token variables, however, put "Sana Sans VF" first in the default family stack, and the measured button demos render in Sana Sans VF at 14px, weight 500, line height 20px. The page also states that its type scale is built on rem values with 16px as the base. Arial and Helvetica are the declared fallbacks for Acid Grotesk, and Roboto is the declared fallback after Sana Sans VF.

## Layout

The layout is full-bleed and vertical. Hero copy is left-aligned in roughly the left third, with a carousel card occupying the right; later sections center their headline across the full width and then stretch the accordion edge to edge with about 16px of horizontal margin. Spacing is built on an 8px grid, which the design system confirms ("Spacing should align with the preset 8pt grid spacing tokens"), and the page measures gaps of 8px most often with paddings of 12px, 16px, 24px and 32px. Panels in the accordion are separated by small gaps rather than rules, and the open panel expands far taller than the collapsed ones, letting a photograph carry the section.

## Elevation & Depth

The marketing page creates depth with background change and translucency rather than shadow: the capture shows dark translucent caption panels over photographs and a thin light outline around the WorkdayGO banner, and raised navy panels lift off the canvas; measured translucent fills on the page include #00000066 and #ffffff33. Measured shadows are minimal: a 12px-blur transparent shadow on a few elements, a 1px inset line in #b6c1cc under the white header, and a 2px inset white ring that serves as a focus indicator. The chat bubble is a plain white card. The Sana Canvas documentation publishes separate depth tokens for drop shadows, but the homepage rarely uses them.

## Shapes

The primary CTA uses a 24px radius at a 48px height, which makes a full pill, and other buttons follow that. Cards and image containers use 8px, 12px and 16px radii; chips and checkboxes use 4px or 5px; circular icon buttons use 50%. The Sana Canvas shape tokens run none, sm (4px), md (8px), lg (12px), xl (16px), xxl (24px), xxxl (32px) and full (999px), with full rounding reserved for high-visibility components such as buttons and badges; the measured Button demo uses a 600px radius, recorded as docs-full, which has the same effect. The two sources agree: pills for action, soft rectangles for containers.

## Components

- **button-primary**: blue #0057ae pill, white 16px bold Acid Grotesk label, 12px 20px padding, 48px height, 24px radius. The header "Contact Sales" button is the detected instance. Ghost variants on dark backgrounds are white-filled with navy labels ("Explore AI Agents") or outlined in white ("Explore Our Agents").
- **button-docs-primary and button-docs-danger**: from the Sana Canvas Button page, navy #000080 and red #cd0600 fills, white 14px weight-500 labels, 0px 16px padding, 40px height, fully rounded. A smaller 32px variant exists.
- **nav / nav-link**: a white bar with a 1px blue-grey inset line at its bottom; link text in 16px Acid Grotesk, shown in navy on white.
- **link**: 16px bold white text on dark, underlined, followed by an arrow icon.
- **card**: 12px radius, hairline border, white text on navy.
- **footer**: canvas navy with white text.

Accordion rows, the carousel card and the chat bubble are page-specific compositions built from these parts.

## Design System Architecture

Workday publishes its design system openly. The site [design.workday.com](https://design.workday.com/) hosts "Workday Design" with a Design System area and a Brand Resources link to [brand.workday.com](https://brand.workday.com/). The design system is called **Sana Canvas** and ships as **Canvas Kit**, with documentation sections for Getting Started (for developers, accessibility, guides on styling, theming, compound components and testing, previous versions, upgrade guides), Tokens, Assets (system icons) and Components. The [Tokens introduction](https://design.workday.com/design-system/tokens/introduction) explains three token levels: Base tokens (hard-coded values such as hex or rem), System tokens (semantic names such as color.bg.status.success) and Brand tokens (key brand colors that tenants can use to theme components). Tokens are distributed as `@workday/canvas-tokens-web` (version 4.5.0 on the pages read), covering Color, Depth, Motion, Opacity, Shape, Size, Space and Type. The [Shape page](https://design.workday.com/design-system/tokens/shape) lists shape.sm through shape.xxxl and full; the [Type page](https://design.workday.com/design-system/tokens/type) lists 12 type styles across levels and sizes; the [Space page](https://design.workday.com/design-system/tokens/space) states the 8pt grid.

Components are documented on pages such as [Button](https://design.workday.com/design-system/components/web/button) (version 16.1.7 of `@workday/canvas-kit-react`, with Primary, Secondary and inverse variants) and come with GitHub and Storybook sources. The open-source repository, [Workday/canvas-kit](https://github.com/Workday/canvas-kit), is Apache-2.0 licensed and maintained with Lerna. The Brand Central site describes a separate brand system with Logo, Color, Gradients, Typography, Layout and Iconography sections, but its details are behind sign-in, so none of them are used here. The marketing homepage (Acid Grotesk, navy canvas, gradients) is therefore the brand layer, while Sana Canvas (Sana Sans VF/Roboto, navy #000080 buttons) is the product layer.

## Do's and Don'ts

Do set nearly all copy in white on the #022043 canvas, with headlines at weight 800 and tight tracking. Do use blue #0057ae for the single header CTA and white or outlined pills for in-page actions. Do use raised navy panels (#0f2e66) for grouping and let photographs sit under translucent overlays. Do keep spacing on multiples of 8px.

Don't use pure black backgrounds; the canvas is a deep navy. Don't use sharp-cornered buttons: the system rounds buttons fully. Don't apply the product button navy (#000080) to the marketing header. Don't use Acid Grotesk in product UI or Sana Sans VF on the marketing page without checking which layer you are in. Don't rely on shadows for elevation; use color and translucency.

## Responsive Behavior

On a 390px viewport the display heading steps down from 56px to 48px, with the line height going from 64px to 56px; other sizes were not captured at phone width. The Sana Canvas documentation includes a Responsive Styling guide and describes its type scale as responsive and rem-based on a 16px root, which is the stated mechanism for scaling product UI. How the accordion and carousel reflow on small screens was not captured, so no claim is made about them.

## Iteration Guide

1. Set the page background to #022043, body copy in white 20px/28px Acid Grotesk, and headlines at 56px/64px, weight 800, -2% letter spacing.
2. Use a white header with a single #0057ae pill (12px 20px padding, 48px tall) for the main CTA.
3. Add white and outlined white pills for secondary calls to action on navy.
4. Group content in #0f2e66 panels with 12px to 24px radii and keep spacing in multiples of 8px.
5. Wash a section with a navy, blue, lavender and peach gradient to signal the AI story, and give gradient headlines warm yellow-to-coral fills.
6. For product screens, switch to Sana Canvas tokens from `@workday/canvas-tokens-web` and its #000080 pill buttons.
