---
version: alpha
name: Trainline
category: "Logistics & Mobility"
description: "Trainline (US English site): Trainline green #00a88f with deep navy #160078 headlines, charcoal ink #192325, TLCircular 700 display type, 4px-radius buttons, an 8px-radius floating search card with a 16px shadow and a partner-brand navy band."
colors:
  canvas: "#00a88f"
  page-body: "#ffffff"
  ink: "#192325"
  primary: "#00a88f"
  on-primary: "#ffffff"
  selection-blue: "#2332c4"
  ink-muted: "#3f4b4e"
  ink-black: "#000000"
  link-blue: "#004ff9"
  warning-ink: "#502e00"
  hairline: "#d0d4d5"
  primary-hover: "#00705f"
  button-secondary-bg: "#e7ebeb"
  text-input-bg: "#f2f4f4"
  ink-hero: "#160078"
  primary-deep: "#002620"
typography:
  display:
    fontFamily: TLCircular, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, "PingFang SC", "Microsoft YaHei New", "Microsoft Yahei", 微软雅黑, STXihei, 华文细黑, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: TLCircular, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, "PingFang SC", "Microsoft YaHei New", "Microsoft Yahei", 微软雅黑, STXihei, 华文细黑, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28px
  heading:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, \"PingFang SC\", \"Microsoft YaHei New\", \"Microsoft Yahei\", 微软雅黑, STXihei, 华文细黑, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, \"PingFang SC\", \"Microsoft YaHei New\", \"Microsoft Yahei\", 微软雅黑, STXihei, 华文细黑, sans-serif"
    fontSize: 11.2px
    fontWeight: 400
    lineHeight: 15.68px
  button:
    fontFamily: TLCircular, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, "PingFang SC", "Microsoft YaHei New", "Microsoft Yahei", 微软雅黑, STXihei, 华文细黑, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: "-0.4px"
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  link:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, \"PingFang SC\", \"Microsoft YaHei New\", \"Microsoft Yahei\", 微软雅黑, STXihei, 华文细黑, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button-secondary:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  input:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, \"PingFang SC\", \"Microsoft YaHei New\", \"Microsoft Yahei\", 微软雅黑, STXihei, 华文细黑, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.424px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 16px
  xl: 26px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 12px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 2px 8px 2px 16px
    height: 40px
  link:
    textColor: "{colors.warning-ink}"
    typography: "{typography.link}"
    padding: 16px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    padding: 12px 48px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-black}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 16px 16px 16px 96px
    height: 56px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.sm}"
    padding: 24px
    boxShadow: rgba(0, 0, 0, 0.3) 0px 4px 16px 0px
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.xs}"
    padding: 10px 8px
    height: 44px
---

## Overview

The measured page is the US English home page of Trainline (`/en-us`), titled "Search, Compare & Buy Cheap Train & Bus Tickets". It is a transactional product page that opens with a thin light-blue promotional strip, a white header with the green heart-and-wordmark logo (Referrals, Business, Cart, My Bookings, Register, a hamburger and a pill-shaped "Sign in" control), and then a hero where a white search card floats over the left of a flat illustration of a pink, blue and white high-speed train on a green hill. The h1, "Save 46% when you book our top 3 European routes at least 30 days in advance*!", is set in deep navy, 48px bold, directly beside the card.

Under the hero a navy curved band lists "Official distributors" with partner logos (Eurostar, SNCF, Trenitalia, Italo, Renfe, Ouigo, TGV Lyria, Thalys, DB). The rest of the 6,941px page alternates bordered white feature panels (Interrail Passes, a Japan rail pass) with a full-bleed Trainline-green brand section ("Search. Book. Travel.", "Train is the new plane") carrying a map illustration with yellow route lines. The tone is friendly and short: "Planes? Passé. Trains? Really cool."

## Colors

Trainline's palette is built from a mid-saturation green and a very dark teal-grey ink. `{colors.primary}` (#00a88f) fills the search CTA and the large brand section; `{colors.primary-hover}` (#00705f) is the measured pressed or hover fill, and `{colors.primary-deep}` (#002620) is the darkest green, painted over about 742 units of area. `{colors.canvas}` in this file is #00a88f, the role the extractor measured for the page canvas (the same hex as the brand green, painted over 1,463 units of area), while `{colors.page-body}` (#ffffff) is the white page and card surface.

Text is `{colors.ink}` (#192325) for headings and nav (1,609 characters), `{colors.ink-muted}` (#3f4b4e) for body copy, `{colors.ink-black}` (#000000) inside form inputs, and `{colors.ink-hero}` (#160078) for the hero headline. `{colors.link-blue}` (#004ff9) is used for in-card links such as "Add a voucher code", `{colors.selection-blue}` (#2332c4) is the selected-state blue (the active One-way tab shows it as a 1px inset ring) and `{colors.warning-ink}` (#502e00) is the text on the amber promo strip. Surfaces: `{colors.button-secondary-bg}` (#e7ebeb) for the Sign in control, `{colors.text-input-bg}` (#f2f4f4) for inputs, `{colors.hairline}` (#d0d4d5) for 1px borders.

## Typography

Display text uses TLCircular (700 loaded), then a system fallback stack that includes -apple-system, "Segoe UI", Roboto, Helvetica, Arial and several CJK fonts. The hero h1 (`{typography.display}`) is 48px, weight 700, 56px line height. The primary button (`{typography.button}`) is TLCircular 20px bold with -0.4px tracking on a 28px line. h2 and h3 use the system stack at 20px bold (`{typography.heading}`), UI chrome uses 16px/600 for navigation (`{typography.nav}`) and 14px/600 for the Sign in button (`{typography.button-secondary}`), links are 14px/21px (`{typography.link}`), and form inputs are 16px (`{typography.input}`).

Body copy in the extraction resolves to 11.2px with a 15.68px line for the savings footnote (`{typography.body}`), but the most used sizes across the page are 14px, 16px and 18px. Weights split 400 (2,738 characters), 700 (937) and 600 (304). TLCircular is a proprietary face with no public source opened here; when it is unavailable the site's own fallback stack applies.

## Layout

The page uses a wide, left-aligned grid with a header padding of 12px 48px and a 64px-tall bar whose bottom-right corner is rounded at 40px. The hero card is 540px tall with 24px padding and sits on the left third; copy and illustration fill the right two thirds. Gaps cluster on an 8px base: 8px (22 uses), 16px (15), 24px (11), 32px (10), 12px, 48px, 64px and 80px. Padding follows the same scale with 16px most frequent (31 uses).

Feature panels are wide bordered rectangles with copy and a primary dark button on the left and a three-image strip on the right. Spacing tokens in the front matter list the measured steps from 2px to 40px, and the root variables name spacers up to `--spacing-spacer_11` (96px).

## Elevation & Depth

Elevation is used once, deliberately. The search card casts `rgba(0, 0, 0, 0.3) 0px 4px 16px 0px`, which lifts it off the illustration. Every other surface is flat and separated by a 1px #d0d4d5 border (14 measured uses) or by a colour change. The One-way toggle's selected state uses an inset ring, `rgb(35, 50, 196) 0px 0px 0px 1px inset`, rather than a lift.

## Shapes

The base radius is 4px (`{rounded.xs}`, 23 uses), applied to buttons, inputs and nav links. Cards and image tiles use 8px (`{rounded.sm}`, 14 uses), larger panels 16px (`{rounded.lg}`, 7 uses), the Sign in pill 26px (`{rounded.xl}`), and avatar or icon circles 50%. Inputs round only the top corners (4px 4px 0px 0px) and carry a 2px bottom line, a Material-style underlined field. The header bar's single large corner (0px 0px 40px) and a 100px top-left curve on a decorative element are the page's only expressive shapes.

## Components

**Primary button.** Green `{colors.canvas}`/`{colors.primary}` fill, white label, TLCircular 20px bold, 10px 12px padding, 48px tall, 4px radius. Hover fills `{colors.primary-hover}`.

**Dark button.** `{colors.ink}` fill, white 18px bold label, 44px tall, 4px radius, 10px 8px padding. Used for "Tell me more" and "Take a look" on feature panels.

**Secondary (Sign in).** `{colors.button-secondary-bg}` fill, 14px semibold label, 26px radius, 40px tall, 2px 8px 2px 16px padding with an avatar icon at the right.

**Text input.** `{colors.text-input-bg}` fill, 16px text, 56px tall, 16px padding with 96px left padding to clear the From/To labels, 4px top corners.

**Search card.** White, 8px radius, 24px padding, 16px shadow; From, To, a One-way/Return segmented control, Out date, passenger row, voucher link, a Genius checkbox and the CTA.

**Navigation.** White bar, `{colors.ink}` 16px/600 links with 8px 16px padding and 4px radius.

**Badges.** A small yellow "New" tag sits above the Japan panel heading.

## Design System Architecture

No public design-system page was opened. The shipped CSS exposes a token layer of about 400 root variables with a `--dp_` prefix (for example `--dp_brand_primary_dullest`, `--dp_brand_neutral_core`, `--dp_app_text_brand`, `--dp_hero_font_family`, `--dp_title1_font_family`), plus numbered spacing (`--spacing-spacer_9` = 64px, `--spacing-spacer_11` = 96px) and radius (`--border-radius-r8` = 8px) variables. Brand roles use a dullest/duller/dull/core/bright scale; the measured values include neutral core #192325, neutral dull #3f4b4e, brand primary dullest #002620, brand primary dull #003e34, secondary dim #4c4fdf, tertiary #ff9da1 and positive mid #11ac23.

The same variable layer holds partner carrier colours (Ouigo #e3006a, Renfe #892169, DB #f01414, LNER #ce132e, Trenitalia #006c6b), which are third-party brand colours used for carrier chips rather than Trainline's own palette.

## Do's and Don'ts

- Do pair the green CTA with white text and a 4px radius.
- Do use #192325, not pure black, for headings; pure black is reserved for input text.
- Do float the search card with the 16px shadow and no other shadows.
- Do keep partner carrier colours confined to carrier logos and chips.
- Don't round buttons beyond 4px except the Sign in pill.
- Don't use the navy #160078 for body copy; it belongs to the hero headline.
- Don't introduce serif or condensed faces; the page is a single geometric family with a system fallback.

## Responsive Behavior

The extraction recorded a 390px mobile pass. The h1 drops from 48px/56px to 24px/28px (still TLCircular 700, with 12px 24px padding), the CTA stays 20px bold on a 48px-high 4px-radius button, and the footnote body stays 11.2px. Common mobile sizes are 16px (967 characters), 18px (576), 11.2px (502), 14px (444), 15px (323) and 24px (282). Layout reflow, menu collapse and card stacking were not measured.

## Iteration Guide

1. Build on `{colors.page-body}` white, with `{colors.canvas}` green only for brand sections.
2. Headlines in TLCircular 700; hero in `{colors.ink-hero}`, other headings in `{colors.ink}`.
3. One green CTA per view, 48px tall, 4px radius; dark 44px buttons for secondary promotion.
4. Cards at 8px radius with 1px #d0d4d5 borders; only the search card gets the shadow.
5. Keep spacing on the 8px scale (8, 16, 24, 32, 48).
6. Measure any new component before adding tokens.
