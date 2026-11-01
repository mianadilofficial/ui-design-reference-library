---
version: alpha
name: Automattic
category: "Design Systems"
description: "Automattic's homepage is an editorial text page: Source Serif Pro in 400-700 on a white canvas (#ffffff), near-black ink (#222222) and black headlines (60px, weight 600, -1.2px tracking), with one accent, link blue (#3399cc), used for product names and links across a three-column list of products."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#3399cc"
  surface-grey: "#cccccc"
  ink-heading: "#000000"
  ink-muted: "#777777"
  ink-slate: "#2c3338"
typography:
  display:
    fontFamily: "\"Source Serif Pro\", serif"
    fontSize: 60px
    fontWeight: 600
    lineHeight: 69px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"Source Serif Pro\", serif"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 32.2px
    letterSpacing: "-0.56px"
  heading:
    fontFamily: "\"Source Serif Pro\", serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.8px
  body:
    fontFamily: "\"Source Serif Pro\", serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
rounded:
  xs: 3px
  sm: 4px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 16px
  s8: 18px
  s9: 19.2px
  s10: 20px
components:
  link:
    textColor: "{colors.ink-heading}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.ink-heading}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The Automattic homepage (automattic.com, titled "Automattic – Making the web a better place") behaves like a printed editorial page rather than a corporate product site. A thin black rule opens the page, then a spaced wordmark ("AUTOMATTIC") sits on the left and a numbered four-item navigation sits on the right ("1. Home", "2. About Us", "3. News", "4. Work With Us"). The headline, "We are passionate about making the web a better place.", is set in a large serif with two italic phrases ("We are", "the web") for emphasis, followed by a small line about the company's 20th anniversary and the book "Year Without Pants".

The body of the page is a quiet directory: two blocks of three-column lists, first the company's own products (WordPress.com, Beeper, Tumblr, Day One, WooCommerce, Jetpack, WordPress VIP, Pocket Casts, Akismet, Longreads, Newspack, Gravatar), then non-profit and open-source projects it sponsors or contributes to (WordPress.org, WP for iOS, WP for Android, P2, BuddyPress, bbPress, WordCamps, WP Job Manager, Five for the Future). Each entry is a blue serif product name over a three-line, black micro-description written like a haiku ("Safety, growth, and speed."). A closing statement, "We don't make software for free, we make it for freedom.", is set at display size, and the footer has a quotation from Matt Mullenweg ("We are much better at writing code than haiku.") and a sign-off in italics ("Inspired by you. Striving to create good. Nothing* is perfect.", with the footnote "* Including this.").

There are no photographs, no illustrations and no buttons. The page's identity is voice and typography. A small floating "Subscribe" control on the right edge of the capture comes from the WordPress platform and is not part of the brand's design.

## Colors

The palette is almost monochrome.

- **Canvas `{colors.canvas}`** is white and the only meaningful page background.
- **Ink `{colors.ink}`** is the most-read text color (#222222, near-black), used for the descriptions and body text. **`{colors.ink-heading}`** is true black, used for the headline, navigation labels and strong links. **`{colors.ink-muted}`** is a mid grey for small captions such as the footnote, and **`{colors.ink-slate}`** is a blue-black text color measured on a few characters.
- **Primary `{colors.primary}`** is a single mid blue used for product names, in-line links and the active "Home" nav item. It is the only chromatic color on the page. The site has no filled buttons, so this color works as the link and action accent rather than a button fill.
- **Surface grey `{colors.surface-grey}`** is a small neutral background area measured on the page.

The stylesheet also exposes the standard WordPress preset palette (for example a vivid purple preset); none of those presets appear in the visible design, so they are not adopted.

## Typography

The whole page is set in Source Serif Pro (400, 400 italic, 600, 600 italic loaded), with a generic `serif` fallback. The root also defines preset families for Source Serif 4, Source Sans 3, Arvo, Epilogue, Fraunces and Texturina, but the page measured uses only Source Serif Pro (plus the system font for a small widget).

- `{typography.display}`: 60px, weight 600, line-height 69px, letter-spacing -1.2px; the page headline and the closing statement. On mobile, `{typography.display-mobile}` is 28px/32.2px with -0.56px.
- `{typography.heading}`: 24px, weight 600, line-height 28.8px; the product names (in `{colors.primary}`).
- `{typography.body}`: 16px, weight 700, line-height 16px; this role was measured on the navigation and link text. Descriptions in the lists run at 16px regular, and the largest share of characters on the page is 16px at weight 400.

If Source Serif Pro is unavailable, the declared fallback is the browser's default serif. Line-length is kept short (about 28 characters) in the product descriptions, which gives the lists their poetic cadence.

## Layout

The page is a single column limited by the WordPress block theme's content width (960px as defined in the page's custom properties) and is about 2,582px tall at 1280px wide. Content sits left-aligned inside this 960px container, with the headline left-aligned at the same edge as the first list. The product lists use a three-column grid with equal column widths and tight 8px, 10px or 16px gaps (the most common measured gaps are 8px and 16px; the most common paddings are 20px and 10px). A large white gap separates the closing statement from the footer. The measured spacing scale is `{spacing.s1}` 2px, 4px, 6px, 8px, 9px, 10px, 16px, 18px, 19.2px and 20px.

## Elevation & Depth

There is no elevation. Structure comes from hairline rules (a thick black top rule, thin grey dividers) and generous white space. The only measured shadow, `rgba(0, 0, 0, 0.12) 0px 1px 2px 0px, rgba(0, 0, 0, 0.12) 0px 0px 0px 1px`, belongs to the platform's Subscribe widget and is not part of the design.

## Shapes

There are essentially no shapes. Measured radii are `{rounded.xs}` 3px, `{rounded.sm}` 4px, and `{rounded.pill}` (four elements), all on small widget elements rather than brand components. The logo is a spaced wordmark, a small blue square marks the anniversary line, and everything else is text with underlines for links.

## Components

The page has no buttons, cards or inputs in the brand's vocabulary. Its components are textual:

- **nav**: numbered list on the right of the header, `{colors.primary}` for the active item and `{colors.ink-heading}` for others, set in `{typography.body}`.
- **nav-link / link**: `{colors.ink-heading}` 16px/700 text; in-line links elsewhere use `{colors.primary}` with an underline.
- **Product entry**: a `{typography.heading}` name in `{colors.primary}` followed by a three-line description in `{colors.ink}`.
- **footer**: `{colors.ink}` text; a quotation block on the left and an italic sign-off on the right, above a thin rule.

## Design System Architecture

The page is a WordPress block theme. Its markup uses core block classes (`wp-block-columns`, `wp-block-heading`, `wp-block-group`, `wp-block-navigation-item`) and the theme directory is named `a8c`. Custom properties follow WordPress's `--wp--preset--*` convention: color presets (`--wp--preset--color--base` for white, `--wp--preset--color--contrast` for black), font-family presets, spacing presets (for example `--wp--preset--spacing--20` is 8px, `--wp--preset--spacing--30` is 10px and `--wp--preset--spacing--40` is 20px) and a `--wp--style--global--content-size` of 960px. That is the de-facto design system: WordPress theme.json presets.

The dsUrl for this brand, https://automattic.design, was opened and is real, but it is the Automattic design team's blog and portfolio (design stories, team interviews, project showcases); it lists no design-system specifications, typefaces or hex values, and the homepage does not reference it. So no values were taken from it. Automattic also publishes brand kits at https://automattic.com/press/brand-materials/ (downloadable ZIPs for Automattic, WordPress.com, Jetpack, Woo and others, for Automattic and licensed partners only); the page does not disclose colors or typefaces, so nothing was taken from it.

## Do's and Don'ts

- Do let serif typography carry the brand: 60px/600 headlines with negative tracking and italic emphasis.
- Do use `{colors.primary}` only for product names, links and the active nav item.
- Do write short, haiku-like descriptions of about three lines each.
- Do keep the layout to one 960px column and a three-column product list.
- Don't add buttons, cards, photographs or filled backgrounds; this page works without them.
- Don't use the muted grey for body copy; reserve it for footnotes.
- Don't treat the WordPress Subscribe widget as part of the design.
- Don't introduce a second accent hue.

## Responsive Behavior

The extraction measured 1280px and 390px. On mobile the headline drops to 28px with 32.2px line-height and -0.56px tracking (`{typography.display-mobile}`) from 60px. The three-column list sits in a 960px container with fluid `clamp()` spacing presets; its behaviour as the viewport narrows was not measured. Because there are no buttons, tap targets are the product names and nav links.

## Iteration Guide

1. Set the page to `{colors.canvas}` with `{colors.ink}` text and Source Serif Pro throughout.
2. Write the headline at 60px/69px weight 600 with -1.2px tracking and mix in italic for emphasis.
3. List products in three equal columns: a 24px `{colors.primary}` name and three short lines of `{colors.ink}` copy.
4. Close with a display-size statement and a quoted footer, separated by hairline rules.
5. Add no button or card styles unless you first measure them on the live site.
