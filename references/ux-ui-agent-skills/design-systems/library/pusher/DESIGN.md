---
version: alpha
name: Pusher
category: "Design Systems"
description: "Pusher, the hosted realtime APIs company (a MessageBird company), marketed in Maison Neue (500-weight 48px display, 16px/28px body) with a deep-aubergine #300d4f ink and button fill on a pale lavender #f9f8ff canvas, a violet #7000ff accent, dark #3e414f code panels, 4px-radius 48px-tall buttons and 6px-radius panels."
colors:
  canvas: "#ffffff"
  canvas-tint: "#f9f8ff"
  ink: "#300d4f"
  primary: "#300d4f"
  on-primary: "#ffffff"
  primary-hover: "#7d6cad"
  surface-gray: "#f0f1f6"
  ink-violet: "#6c62be"
  accent-violet: "#7000ff"
  accent-magenta: "#b200fd"
  tile-purple: "#5f30e2"
  slate: "#3e414f"
  code-dark: "#1a1c25"
typography:
  display:
    fontFamily: "\"Maison Neue\", sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 58px
    letterSpacing: 0.25px
  display-mobile:
    fontFamily: "\"Maison Neue\", sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 58px
    letterSpacing: 0.25px
  heading:
    fontFamily: "\"Maison Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 27.52px
    letterSpacing: 0.5px
  subheading:
    fontFamily: "\"Maison Neue\", sans-serif"
    fontSize: 23px
    fontWeight: 500
    lineHeight: 37.72px
    letterSpacing: 0.5px
  body:
    fontFamily: "\"Maison Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: 0.25px
  button:
    fontFamily: "\"Maison Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: 0.5px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 6px
  s4: 8px
  s5: 14px
  s6: 16px
  s7: 18px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.slate}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 44px
  card:
    backgroundColor: "{colors.slate}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.08) 0px 1px 30px 0px
---

## Overview

Pusher's homepage (page title "Pusher | Leader In Realtime Technologies") sells hosted, bi-directional realtime APIs to developers. The capture shows a white header with the stacked PUSHER wordmark and the tag "A MessageBird company", a menu (Products, Developers, User stories, Blog, Pricing), a text "Sign in" link and a dark purple "Sign up" button. The hero is a split: on the left the headline "Powering realtime experiences for mobile and web" with the word "realtime" in violet, a short paragraph, a bold line "Get started today and find out what you can build with Pusher" and two purple buttons ("Use Cases", "Get your free account"); on the right a dark rounded code panel with Pubsub and Notifications tabs and language chips (PHP, Node, Ruby, ASP, Java, Python, Go; JS, Android, iOS) above syntax-highlighted publish and subscribe snippets, and a white "Learn more" button.

Further down: a "Trusted by Giants. Loved by developers." strip of customer logos (buffer, GitHub, The Washington Post, wework, mailchimp, DATADOG), a row of four use-case tiles on saturated violet and mint backgrounds with product UI mock-ups (Realtime charts, Notifications, Location tracking, In app chat) with "Read more" links, two centred dark buttons, a lavender-grey testimonial band quoting a Washington Post engineering director, and a row of dark purple resource tiles (Docs, Tutorials, 40+ SDKs) with white "Learn more" buttons. A small grey-violet "Privacy" tab sits at the left edge; it is a consent control and is not documented as a brand component.

The voice is plain and developer-direct: short noun-phrase headings, concrete numbers ("40+ SDKs"), and imperative button labels.

## Colors

- **Ink** and **primary** are one colour: aubergine `#300d4f`, used for nearly all text (the most-read text colour), the header Sign up button, the hero buttons and the dark resource tiles. White text goes on it. The hover state of the primary button measured on the page is `#7d6cad`.
- **Canvas** `#ffffff` and **canvas-tint** `#f9f8ff` (the largest background area by weight) alternate; **surface-gray** `#f0f1f6` is the testimonial band background.
- **Accent violet** `#7000ff` and **accent-magenta** `#b200fd` are text accents (the "realtime" emphasis and hover states; the Notifications tab hover turns magenta-purple). **Ink-violet** `#6c62be` is a mid violet for secondary text, and **tile-purple** `#5f30e2` is the saturated tile and illustration colour.
- **Slate** `#3e414f` is the code panel body and the label colour on white secondary buttons; **code-dark** `#1a1c25` is the darker tab and editor surface inside it.
- The page's own stylesheet also defines status variables (`--rt-color-error`, `-success`, `-warning`, `-info`), but they are not visible in the capture and are not part of this palette.

## Typography

**Maison Neue** is the only family (500, 600, 700 plus Maison Neue Mono 400 for code). The site falls back to generic sans-serif; a close substitute is any geometric-grotesque sans such as a system sans.

- **Display** 48px / 58px, weight 500, +0.25px letter-spacing (hero headline); **display-mobile** 36px / 58px at 390px width.
- **Subheading** 23px / 37.72px, weight 500, +0.5px (use-case titles).
- **Body** 16px / 28px, weight 500, +0.25px.
- **Heading** 16px / 27.52px, weight 700, +0.5px (bold emphasis lines).
- **Button** 16px / 28px, weight 600, +0.5px.

Type is light-feeling at medium weight with slight positive tracking everywhere; headlines are sentence case.

## Layout

A centred container of roughly 830px content width inside the 960px capture, with a 64px left margin. The hero is a two-column split (text left, code panel right). Below, a four-column tile row, a full-width tinted testimonial band, and a three-column resource-tile row. The spacing scale in the capture is 2, 3, 6, 8, 14, 16, 18, 24, 30 and 32px; tiles are separated by about 24px.

## Elevation & Depth

Mostly flat with one soft effect: panels carry a wide, low-opacity shadow, `rgba(0, 0, 0, 0.08) 0px 1px 30px 0px` (also measured at 0.1 opacity with a 2px offset) under the code panel and in other panels. A smaller `rgba(0, 0, 0, 0.07) 0px 2px 4px 0px` appears once. Contrast between the dark code panel, saturated tiles and the pale lavender canvas does most of the depth work.

## Shapes

Radii are small: 3px, 4px (buttons), 6px (panels, tabs and chips, sometimes on one side only, for segmented tabs), and 50% for avatars and dots. Buttons are rectangular with a 4px radius, never pills. Use-case tiles have square image areas.

## Components

- **Primary button**: `#300d4f` fill, white 16px 600 text, 4px radius, 8px 16px padding, 48px tall, same-colour border; hover `#7d6cad`.
- **Secondary button**: white fill, `#3e414f` text, 4px radius, 44px tall ("Learn more" on the code panel and dark tiles).
- **Header**: white with a faint bottom edge, 16px medium menu items, chevrons on Products, Developers and Pricing.
- **Code panel**: `#3e414f` body with `#1a1c25` tabs, 6px radius, language chips, line-numbered monospace snippet with violet, teal and orange syntax colours.
- **Use-case tile**: coloured image block (violet `#5f30e2` or mint) holding a white UI mock-up, a 23px title, grey description and a bold "Read more" link with a chevron.
- **Resource tile**: `#300d4f` background, white title, light description and a white button.
- **Testimonial band**: `#f0f1f6` with centred logo, 24px quote, bold name and role, and pagination dots.

## Design System Architecture

Pusher does publish a design system, **Chameleon**, at https://pusher.github.io/chameleon: "a library of front-end patterns, variables, and helpers that when used, will Pusherify your UI", version 1.4.4, with Sass variables (colours, typefaces, font weights, breakpoints), buttons (primary, secondary, tertiary, neutral, ghosted, small), forms, labels, alerts and tooltips; the github.com/pusher/chameleon repository is MIT-licensed and built on Foundation for Sites. However, it does not describe the current pusher.com. Chameleon's palette is blue `#549eff` with `#58d794` for developers and neutral greys, and its fonts are Realtime Text for titles and Proxima Nova for body, whereas the measured homepage uses aubergine `#300d4f`, Maison Neue and a different button set. Chameleon's documentation does not say it is used on pusher.com, so it is not used as this entry's foundation.

What the homepage itself shows: one hashed stylesheet with component-scoped class names (such as `Text__Paragraph-sc-…` and `CodeExample__Line-sc-…`), a one-line custom property set (`--rt-color-*` status colours and `--rt-opacity`), and a consistent set of hand-picked values (aubergine ink, 4px radius, 48px buttons, Maison Neue with positive letter-spacing). The brand pages at pusher.com/design/brand-guidelines show a logo in `#300d4f` and offer a PDF download, which was not opened.

Sources: https://pusher.github.io/chameleon, https://pusher.github.io/chameleon/layout/colors/, https://pusher.github.io/chameleon/layout/typography/, https://pusher.github.io/chameleon/components/buttons/, https://github.com/pusher/chameleon, https://pusher.com/design/brand-guidelines.

## Do's and Don'ts

- Do use `#300d4f` for text and the main button; it is both ink and brand colour.
- Do keep buttons rectangular with a 4px radius and 48px height.
- Do show code in a dark `#3e414f` panel with language tabs; it is the visual hero.
- Do use saturated violet and mint tiles to frame product mock-ups.
- Do keep headings in sentence case at medium weight with slight positive tracking.
- Don't use pill buttons or large radii.
- Don't use the Chameleon blue (`#549eff`) palette for current marketing work; it does not match the measured site.
- Don't put more than one dark primary pair of buttons in a hero.
- Don't treat the consent tab as a brand component.

## Responsive Behavior

The display headline is 48px on desktop and 36px at 390px width, though the measured line-height stays 58px at both. Only desktop and 390px measurements exist; the layout of the four-tile and three-tile rows on mobile was not observed.

## Iteration Guide

1. Set canvas `#f9f8ff`, ink `#300d4f` in Maison Neue 16px/28px at weight 500.
2. Build the hero as a text column with one violet emphasised word and two `#300d4f` 48px buttons, with a dark `#3e414f` code panel on the right.
3. Add logo strip, four use-case tiles on `#5f30e2` and mint, a `#f0f1f6` testimonial band and three `#300d4f` resource tiles.
4. Keep radii at 4px for buttons and 6px for panels, shadows at `rgba(0,0,0,0.08) 0 1px 30px`.
