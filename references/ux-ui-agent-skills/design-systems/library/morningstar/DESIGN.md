---
version: alpha
name: Morningstar
category: "Design Systems"
description: "Morningstar's site is a dense financial-media front page set in its own Morningstar Intrinsic family (headlines 27.648px at weight 500, body at 300), on white and #f6f5f4 with near-black #1a1918 ink, one blue action (#2364b9, 34px-high buttons with 1px corners), bordered tiles, and green and red market-movement color."

colors:
  canvas: "#ffffff"
  page-largest: "#f6f5f4"
  ink: "#1a1918"
  ink-muted: "#64625f"
  primary: "#2364b9"
  on-primary: "#ffffff"
  primary-hover: "#1a509b"
  surface-tint: "#e9f0f8"
  link-dark: "#0f3d7c"
  positive: "#00741d"
  negative: "#ca0000"
  hairline: "#ecebea"
  border-control: "#bdbcba"

typography:
  display:
    fontFamily: MorningstarIntrinsicDisplay, MorningstarIntrinsic, HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 27.648px
    fontWeight: 500
    lineHeight: 30.2627px
  heading:
    fontFamily: MorningstarIntrinsicDisplay, MorningstarIntrinsic, HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 17.9005px
  body:
    fontFamily: MorningstarIntrinsic, HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 13.3333px
    fontWeight: 300
    lineHeight: 18.0315px
  link:
    fontFamily: MorningstarIntrinsic, HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 21.4806px
  button:
    fontFamily: MorningstarIntrinsic, HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 18px

rounded:
  xs: 1px
  pill: 9999px

spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 7px
  s5: 8px
  s6: 11px
  s7: 12px
  s8: 13px
  s9: 14px
  s10: 16px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 14px
    height: 34px
  index-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 8px
    height: 60px
    borderColor: "{colors.border-control}"
  search-input:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 0px 0px 36px
    height: 34px
  nav:
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 12px 16px 16px
    borderColor: "{colors.border-control}"
---

## Overview

Morningstar's home page, as captured, is a data-dense financial newsroom rather than a marketing page. At the top sit a black strip ("Morningstar Capabilities and Products", "Company"), a header with a red Morningstar wordmark, a search field, a solid blue "Get 7 Days Free" button and utility icons, and a navigation row (Portfolio, Tools, Sections, Markets, Funds, ETFs, Stocks, Bonds, Investing Ideas, For Advisors). Under it come two promotional banners (a purple webinar banner and a black one with a red-outlined "Start Free Trial" link) and a horizontally scrolling "Markets" ticker of bordered index tiles (S&P 500, NASDAQ and others with a colored change figure and a tiny sparkline). A pale-blue sticky bar with a blue "Start Free Trial" button sits across the viewport.

The body is a three-column editorial grid: a left rail with a "US Market Barometer" heat grid (green and red cells labelled Large, Mid, Small and Value, Core, Growth) and a "Market Movers" list with sparklines; a center column of article headlines with bylines ("Russel Kinnel", "Christine Benz and Amy C. Arnott, CFA"); and a right rail of "Editor's Picks" and a blue HSA promotional panel with an outlined "Learn More" button. Below, Funds, Stocks and Bonds columns carry illustrated story cards, a "Morning Digest" newsletter card with an outlined "Subscribe Now" button, a "More Sections" row of bordered tag buttons, a "Free 7-Day Trial" button under the Portfolio blurb, and a footer sign-up bar with a solid blue "Subscribe" button.

The voice is journalistic and concrete: headlines state the claim ("Undervalued by 15%, This Utilities Stock Could Be an Unexpected AI Winner"), with credentialed bylines in small gray type.

**Key Characteristics:**
- Morningstar Intrinsic (a display cut and a text cut) in light and medium weights; headline hierarchy is carried by size and a tight line height, not by heavy bold.
- Near-black ink `{colors.ink}` and warm gray `{colors.ink-muted}` on white, with `{colors.page-largest}` bands.
- One action blue, `{colors.primary}`, on 34px-high buttons with 1px corners; on hover it darkens to `{colors.primary-hover}`.
- Green (`{colors.positive}`) and red (`{colors.negative}`) are reserved for market movement.
- Hairline `{colors.hairline}` rules and 1px borders organize an otherwise dense page; illustration and photography accompany stories, not decorate chrome.

## Colors

> **Source pages:** home (`https://www.morningstar.com`) at 1280px and 390px, re-extracted with a stealth browser so no bot-check overlay is present; docs page `https://designsystem.morningstar.com/components/button/` was measured but its component demos did not render in the headless browser, so no component values come from it.

- **Ink** `{colors.ink}` #1a1918 is the most-read text color; `{colors.ink-muted}` #64625f is used for bylines and secondary text.
- **Primary blue** `{colors.primary}` #2364b9: the fill of the header "Get 7 Days Free" button and the "Start Free Trial" buttons (white 16px/300 text), the largest chromatic fill on the page; it darkens to `{colors.primary-hover}` #1a509b on hover; `{colors.link-dark}` #0f3d7c is the darker blue used for link text.
- **Surfaces:** `{colors.canvas}` white, `{colors.page-largest}` #f6f5f4 for banded areas and `{colors.surface-tint}` #e9f0f8 for the pale-blue tint.
- **Market colors:** `{colors.positive}` #00741d and `{colors.negative}` #ca0000 as text for gains and losses; the heat grid uses lighter green and red tints measured as backgrounds (#66cf8d, #b3e7c6, #ffb3b3).
- **Lines:** `{colors.hairline}` #ecebea for rules between stories, `{colors.border-control}` #bdbcba for tile and input borders.

## Typography

The page loads **MorningstarIntrinsicDisplay** (300 and 500) for headlines and **MorningstarIntrinsic** (300 and 500) for text; fallbacks are Helvetica Neue, Helvetica and Arial. The Design System's "Introducing Morningstar Intrinsic" post (20 February 2025) says the new typeface supports two weights, regular and bold, with Thin/Light/Regular mapping to Intrinsic Regular and Bold/Heavy to Bold. Morningstar Intrinsic is proprietary; Helvetica Neue or Arial is the practical stand-in.

| Role | Size / line | Weight |
|---|---|---|
| Headline (`{typography.display}`) | 27.648px / 30.2627px | 500 |
| Section label (`{typography.heading}`) | 16px / 17.9005px | 500 |
| Link and tile label (`{typography.link}`) | 16px / 21.4806px | 500 |
| Button (`{typography.button}`) | 16px / 18px | 300 |
| Body and fine print (`{typography.body}`) | 13.3333px / 18.0315px | 300 |

The page's single `h1` ("morningstar.com", 32px/700, 21.4806px line) is a non-visual heading, so the visible headline style is taken from the first large story heading ("The Thrilling 37", an `h3`). Headline lines are tight (about 1.1), and bylines are small and gray.

## Layout

A narrow left rail, a wide center column and a right rail form the main grid; below the fold the page switches to four equal columns (Funds, Stocks, Bonds, Newsletters). Story lists are separated by 1px `{colors.hairline}` rules rather than boxes, with consistent small gaps: spacing values measured are 1, 3, 4, 7, 8, 11, 12, 13, 14 and 16px (`{spacing.s1}` to `{spacing.s10}`). Cards use padding 12px 16px 16px. The density is high on purpose: finance readers scan many headlines, prices and sparklines at once.

## Elevation & Depth

Almost flat. The measured primary buttons carry no shadow; the page's only drop shadow, `rgba(0,0,0,0.2) 0px 2px 4px 0px`, appears on a few other elements. Tiles and cards use 1px borders (`{colors.border-control}`).

## Shapes

Corners are nearly square: 1px on buttons, tiles, cards and tags (`{rounded.xs}`), with pill/circular radii (1000px, 100%) on a few small elements. This hard-edged look suits a data product.

## Components

- **Primary button** (`{components.button-primary}`): `{colors.primary}` fill, white 16px/300 text, 1px radius, padding 8px 14px, 34px high, no shadow ("Get 7 Days Free" 117px wide, "Start Free Trial" 112px wide); hover fill `{colors.primary-hover}`.
- **Outlined buttons:** "Subscribe Now" in the newsletter card and the "More Sections" tags use a white fill with a thin border.
- **Index tile** (`{components.index-tile}`): white, 1px `{colors.border-control}` border, 60px high, name and level on the left, change on the right with a sparkline.
- **Search input** (`{components.search-input}`): 34px high with a 36px left inset for the magnifier icon.
- **Story card** (`{components.card}`): white, 1px corner, thin border, padding 12px 16px 16px; headline, summary, byline.
- **Market Movers rows:** a green-gradient sparkline, ticker in small type, price and a bold green change figure.
- **Heat grid:** tinted green and red cells with signed percentages.

## Design System Architecture

Morningstar publishes the **Morningstar Design System (MDS)** at [designsystem.morningstar.com](https://designsystem.morningstar.com), whose tagline is "Community Driven, Shared Value, Accessible Experiences". The home page describes it as design and technical standards for building high-quality, cohesive experiences, with Foundations, Components, Patterns and Charts, a Figma Design Library, a blog and a support channel. The About page says MDS includes the visual language (color, typography, iconography, spacing, illustrations, animation), **MDS Vue components**, and Figma design assets, and that elements are stateless, carry no business logic, and are supported only for Vue ([About MDS](https://designsystem.morningstar.com/getting-started/about-mds/)). The component index lists Banner, Button, Button Group, Card, Data Table, Dialog, Forms controls (Checkbox, Combo Box, Date Picker, Input, Radio Button, Select, Textarea), Inline Message, Layout Grid, Link, Modal, Notification, Pagination, Popover, Search Field, Stepper, Switch, Tabs, Tag and Tooltip ([Button](https://designsystem.morningstar.com/components/button/)). Chart elements are a separate composable set.

The [Morningstar Intrinsic announcement](https://designsystem.morningstar.com/whats-new/blog/introducing-morningstar-intrinsic/) explains how the font is delivered: `@mds/fonts` and `@mds/typography` packages (and `-vue3` variants), updated Figma libraries with a typography mode, and a note that Vue 2 reached end of life in December 2023. Components on the docs pages carry classes such as `mds-button mds-button--flat mds-button--large`, matching the BEM-style naming. Whether the live morningstar.com home page is built from MDS components is not stated on the pages read, and the extracted page has no CSS custom properties to show it, so the tokens in this file are the page's own measured values. The docs page's component and color detail panes did not render for the extractor, so no MDS token values are cited.

## Do's and Don'ts

**Do**
- Keep ink near-black and secondary text warm gray; use white and `{colors.page-largest}` bands.
- Use `{colors.primary}` for the single call to action in a module (Get 7 Days Free, Start Free Trial).
- Reserve green and red strictly for gains and losses.
- Use 1px rules and 1px corners to keep dense modules legible.

**Don't**
- Don't set headlines in heavy bold; the headline style is weight 500.
- Don't round buttons or cards beyond a few pixels.
- Don't add shadows to the primary button; it is flat.
- Don't use color alone for change direction; pair it with a sign.

## Responsive Behavior

The extraction did not capture a distinct mobile hierarchy for this page (the mobile run returned the same hidden h1 and a 16px/500 section label), so no mobile type sizes are stated. The DOM shows a horizontally scrollable ticker with a left arrow control, which signals overflow scrolling for market tiles, and the four-column section row is a desktop layout. The design system docs list a Layout Grid component, but its specification was not readable.

## Iteration Guide

1. Start with a white page, `{colors.ink}` text, and 1px-bordered tiles; keep the blue for one action.
2. Set headlines in MorningstarIntrinsicDisplay (or Helvetica Neue) at 27.648px/500 with tight leading.
3. Show market change as signed numbers in `{colors.positive}` or `{colors.negative}`.
4. Keep spacing in the measured steps (`{spacing.s1}` to `{spacing.s10}`).
5. Run `node web/scripts/verify-designs.mjs --slug=morningstar` after any edit.
