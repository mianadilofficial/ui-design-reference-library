---
version: alpha
name: Shell Global
category: "Energy & Climate"
description: "Shell Global (shell.com): white canvas #ffffff with grey ink #4a4a4a, Shell yellow #ffc800 buttons with 8px radius and 48px height, 16px-radius cards on #f5f5f5, a proprietary custom-font bold for headings (32px/48px, 28px/42px, 20px/30px) over an Arial stack at 14px/21px."
colors:
  canvas: "#ffffff"
  ink: "#4a4a4a"
  primary: "#ffc800"
  on-primary: "#4a4a4a"
  surface-card: "#f5f5f5"
  ink-muted: "#4a4a4acc"
  surface-overlay: "#00000099"
typography:
  display:
    fontFamily: custom-font, Arial, Roboto, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: custom-font, Arial, Roboto, Helvetica, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 42px
  subheading:
    fontFamily: custom-font, Arial, Roboto, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  body:
    fontFamily: Arial, Roboto, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Arial, Roboto, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
  nav:
    fontFamily: Arial, Roboto, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 20px
  s5: 24px
  s6: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 48px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 48px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-overlay}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

Shell Global (https://www.shell.com/, page title "Shell Global") is the corporate home page of the energy company. The measured page is 1,280px wide and 3,619px tall and is organised as a stack of card bands on a white and light grey page. A thin grey utility bar at the top carries a "Shell Global" site selector; below it a white header holds the pecten logo and the main navigation: Home, Who we are, What we do, News and insights, Business customers, Investors, Careers at Shell, and a search icon. The active item (Home) has a yellow underline.

The hero is a rounded photographic panel (a Shell forecourt canopy against a pale sky) with a dark translucent card (#00000099, 12px radius) holding the headline "Shell completes acquisition of ARC Resources", a short paragraph with an underlined link, and a yellow "Read more" button. Below the hero are three feature cards (Shell LNG Outlook 2026, Sparta: unlocking energy once thought out of reach, and a solid yellow card for The Energy Podcast from Shell), a "Featured content" band on #f5f5f5 with three image cards (Our strategy, Careers at Shell, Our stories, each with a "Read more" and arrow), a "How can we help?" band where a yellow container holds three dark #4a4a4a buttons with yellow labels (Job search, Shell station locator, Shell Card), and a "Latest news" row of linked headline cards with dates.

Imagery is documentary and human: engineers in red overalls, a woman in a control room, an offshore platform, a mountain-backed tanker. The voice is plain and corporate-informative: "Read more", "Explore career opportunities at Shell", "The home of conversation about the energy that powers our world."

## Colors

- **Canvas #ffffff.** The page and card background (9,829 area weight).
- **Surface #f5f5f5.** Light grey for card bodies and the Featured content band (3,253 area weight). Named `surface-card`.
- **Ink #4a4a4a.** Almost all text (1,886 characters); its published value is `--color-ink1: 0, 0%, 29%`. The pale variant #4a4a4acc covers 46 characters (`ink-muted`).
- **Primary yellow #ffc800.** The "Read more" button fill and border, the yellow card and the container behind the dark buttons. It matches the published `--color-brand1-bg: 47, 100%, 50%`. Text on it is #4a4a4a.
- **Overlay card #00000099.** The translucent dark panel over the hero photograph (833 area weight).
- **Dark button #4a4a4a.** Fill of the secondary buttons; their label is #ffc800 (41 characters).
- **Published but unrendered brand palette** (HSL triplets as written in the stylesheet): brand2 `359, 77%, 49%` (the red), brand3 `212, 49%, 39%`, brand4 `159, 100%, 26%`, brand5 `306, 61%, 33%`, system background `210, 78%, 16%`. They are listed here as published values and were not found on rendered elements in this measurement.

Border colors measured: #4a4a4a (3 uses), #ffc800 (1), #4a4a4a33 (1).

## Typography

Two families. Headings use a proprietary `custom-font` (loaded at weight 700 only), with the fallback stack Arial, Roboto, Helvetica, sans-serif; body text uses Arial directly (`--font-default: Arial, Roboto, Helvetica, sans-serif`). Because the custom face is proprietary, the nearest substitute is Arial/Helvetica bold, which is already the declared fallback.

- **Display:** custom-font, 32px / 48px, weight 700 ("Shell completes acquisition of ARC Resources").
- **Heading:** custom-font, 28px / 42px, weight 700 ("Featured content").
- **Subheading:** custom-font, 20px / 30px, weight 700 (card titles such as "Shell LNG Outlook 2026").
- **Body:** Arial stack, 14px / 21px, weight 400.
- **Button:** Arial stack, 14px / 21px, weight 700.
- **Nav:** Arial stack, 12px / 18px, weight 400.

By character count, sizes are 14px (1,362), 20px (484), 12px (271), 28px (72), 32px (44); weights 400 (1,583) and 700 (650). Letter spacing is normal except 14px/-0.35px on 84 characters. Headlines are sentence case.

## Layout

The page width custom property is `--page-width: 1300px`; the header and footer measure about 1,265px and 1,241px wide on the 1,280px viewport. Cards sit in a 3-up grid with a 20px gap (the most frequent gap, 13 uses). Padding is 24px most often (61 uses), then 8px (20), 4px (18), 12px (8) and 48px (3). The header is 149px tall including the utility bar. The footer is 452px tall, starts with "Page last updated: 23 Sept 2026" and "Explore Shell.com", and lists strategy and site links.

## Elevation & Depth

One shadow was measured: `rgba(0, 0, 0, 0.2) 0px 8px 12px 2px`. It is applied on hover to the linked cards (the hover probe records the card's `boxShadow` changing from none to that value, with background and text colours unchanged). At rest, cards are flat, separated by the white and #f5f5f5 bands. The stylesheet defines the same shadow through `hsla(var(--color-black-bg), 0.2)`.

## Shapes

Measured radii: 16px (27 weighted uses, the cards and the hero panel), 4px (9), 8px (4, the buttons), 12px (1, the hero text card). The tokens keep xs 4px, sm 8px, md 12px and lg 16px. Buttons are 8px-rounded rectangles; cards are 16px; the hero overlay card is 12px.

## Components

- **Primary button.** "Read more": #ffc800 fill, 1px solid #ffc800 border, #4a4a4a text, Arial 14px/21px weight 700, 8px radius, padding 0px 12px, 48px tall, 98px wide.
- **Secondary button.** "Shell Card", "Job search", "Shell station locator": #4a4a4a fill, 1px solid #4a4a4a border, #ffc800 label, 8px radius, 48px tall (384px wide in the three-up row).
- **Hero card.** #00000099 background, white text, 12px radius, 505px by 316px, 32px/48px headline.
- **Content card.** #f5f5f5 or #ffffff body, 16px radius, #4a4a4a text; hover adds the 8px 12px shadow.
- **Navigation.** Header with 12px/18px #4a4a4a links, chevrons for sub-menus and a yellow active underline.
- **Footer.** #4a4a4a text, 14px/21px.

## Design System Architecture

No public design-system or brand-guideline page was found: a fetch of the home page returned only the page title, and no search was run. The shipped CSS exposes the system: colour roles as HSL triplets (`--color-ink1`, `--color-paper1`, `--color-paper2`, `--color-brand1-bg` to `--color-brand5-bg`, `--color-system-bg`, `--color-black-bg`) with matching `-text` roles that point at paper or ink, alias variables (`--color-bga`, `--color-txc`), a type scale multiplier (`--font-scale: 1`), `--font-default`, `--font-custom`, per-corner radius scales (`--radius-tl-scale`, `-tr-`, `-br-`, `-bl-` all 1), and `--page-width: 1300px`.

## Do's and Don'ts

- Do use #ffc800 yellow for the primary action and the dark #4a4a4a button with yellow label for secondary actions.
- Do use 16px radii on cards, 8px on buttons and 12px on the hero overlay card.
- Do set headlines in the custom bold face (Arial bold as the fallback) and body in Arial 14px/21px.
- Do put photography with real people at work in image cards.
- Don't add a shadow at rest; the measured 8px 12px shadow is a hover state.
- Don't use the unrendered published palette (red, blue, green, purple triplets) as if they were measured UI colours.
- Don't set the primary button with white text; measured text on yellow is #4a4a4a.

## Responsive Behavior

The mobile pass measured: h1 32px / 48px, h2 28px / 42px, body 14px, the primary "Read more" button unchanged at 48px by 98px, the extracted header element measured 375px wide and 149px tall with the text "Shell Global", and character counts by size 14px (1,278), 20px (484), 12px (271), 28px (72), 32px (44). Breakpoints, the mobile menu and card stacking were not measured.

## Iteration Guide

1. White canvas, #f5f5f5 bands, #4a4a4a ink.
2. A hero with a photograph and a dark translucent card carrying the headline and one yellow button.
3. Card grids in 3 columns with a 20px gap, 16px radii, a hover shadow.
4. Primary buttons #ffc800 / #4a4a4a text, 8px radius, 48px height; secondary #4a4a4a / #ffc800 text.
5. Run `node web/scripts/verify-designs.mjs --slug=shell` after edits.
