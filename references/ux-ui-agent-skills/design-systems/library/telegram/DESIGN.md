---
version: alpha
name: Telegram
category: "Media & Consumer Tech"
description: "Telegram's site (telegram.org) is a light, document-like page: white #ffffff canvas, #333333 system-font text at 15px, Telegram blue #0088cc for links, tabs and the 26px/600 feature titles, a #318fd3 999px-radius pill on mobile, 4px radii elsewhere, and duck sticker illustrations."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#0088cc"
  on-primary: "#ffffff"
  button-blue: "#318fd3"
  ink-strong: "#000000"
  ink-heading: "#222222"
  ink-muted: "#888888"
  ink-tagline: "#8c8c8c"
  hairline: "#e8e8e8"
typography:
  display:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 29.6px
  display-mobile:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 23.68px
  feature-title:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 26px
    fontWeight: 600
  subheading:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 23px
    fontWeight: 600
    lineHeight: 25.3px
  body:
    fontFamily: "-apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
  button:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 19.95px
rounded:
  xs: 4px
  pill: 999px
spacing:
  s1: 1px
  s2: 5px
  s3: 9px
  s4: 10px
  s5: 15px
  s6: 15.5px
  s7: 16px
  s8: 20px
  s9: 28px
  s10: 160px
components:
  button-primary:
    backgroundColor: "{colors.button-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 22px
    height: 40px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  link-hover:
    textColor: "{colors.primary}"
    textDecoration: underline
  feature-title:
    textColor: "{colors.primary}"
    typography: "{typography.feature-title}"
  tagline:
    textColor: "{colors.ink-tagline}"
    typography: "{typography.display}"
  news-sidebar:
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
---

# Telegram

## Overview

Telegram's home page (https://telegram.org/, title "Telegram Messenger") looks more like documentation than marketing. It is white, text-led and built from system fonts. It opens with the round blue paper-plane logo, the word "Telegram" and the light grey tagline "a new era of messaging". A "Recent News" column with dated headlines sits to the right. Below are device mock-ups with download links ("Telegram for Android", "Telegram for iPhone / iPad", "Telegram for PC / Linux", "Telegram for macOS"), then two "Recent News" article cards. A "Why Telegram?" grid follows: nine reasons (Simple, Private, Synced, Fast, Powerful, Open, Secure, Social, Expressive), each illustrated by a yellow duck sticker. A plain multi-column link footer closes the page.

The one dominant colour is **Telegram blue `#0088cc`**. It is used for links, the active tab, the news sidebar's rule and every feature title. The tone is factual and brief: every feature line starts with a bold "**Telegram**" ("Telegram is so simple you already know how to use it.", "Telegram groups can hold up to 200,000 members."). The duck stickers bring the colour and humour; the interface itself stays plain.

## Colors

- **Canvas `#ffffff`.** The single page background. A translucent white (`#ffffffd6`) is the largest measured background area; the element it belongs to was not identified.
- **Ink `#333333`.** The most-read text colour (914 characters): paragraphs, feature descriptions, news excerpts.
- **Primary `#0088cc`.** Telegram blue (785 characters of text). The stylesheet also declares it as `--bullet-color: #0088cc`, and it is the second most frequent colour in the shipped CSS (32 uses). Links stay blue on hover and gain an underline.
- **Button blue `#318fd3`.** The fill of the mobile "Browse more Telegram apps" pill; **on-primary `#ffffff`** is its text colour.
- **Ink heading `#222222`.** "Why Telegram?".
- **Ink strong `#000000`.** News dates ("Aug 25") and the bold "Telegram" lead-ins.
- **Ink muted `#888888`.** Article dates under the news cards.
- **Ink tagline `#8c8c8c`.** "a new era of messaging".
- **Hairline `#e8e8e8`.** A measured border colour (one element); the capture shows a thin grey rule above the footer.

Other shades in the CSS (`#0a76ba`, `#179cde`, `#777777`, `#eeeeee`, `#cccccc`, `#dddddd`) belong to other pages and states; they were not measured on the home page.

## Typography

Telegram ships no web font: no font files were loaded, and the stack is the platform's own (`--native-font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif`). On a Mac this renders as San Francisco, on Windows as Segoe UI, and on Android as Roboto.

- **Display / tagline.** 20px/300 with a 29.6px line height in `#8c8c8c`. The largest measured text on the page is this light tagline; the "Telegram" title itself is part of the logo image.
- **Feature title.** 26px/600 in blue, centred ("Simple", "Private", "Synced").
- **Subheading.** 23px/600 with a 25.3px line height ("Recent News", "Why Telegram?").
- **Body.** 15px/400, the most frequent size (610 characters). The doc pages declare `--doc-font-size: 15px` and `--doc-line-height: 1.6`.
- **Small text.** 14px, 13px and 12px for news excerpts, the sidebar and dates. `--side-nav-font-size` is 13px.
- **Button.** 15px/400 with a 19.95px line height.

Weights are 400 (dominant), 600, 500, 700 and 300. There is no letter-spacing anywhere.

## Layout

Measured at 1280px wide and 2,744px tall, as a single white band with content between x 55 and x 1225 and a centred column of up to three cards. The header holds the text tabs Home, FAQ, Apps, API and Safety at the left (Home is active, with a blue underline), a globe "EN" language menu and "Follow on X" at the right, and a night-mode toggle. The hero centres the logo, title and tagline. The "Recent News" sidebar sits to the right, behind a vertical blue rule. The device mock-ups follow in two rows of two. "Recent News" shows two article cards side by side, and "Why Telegram?" is a 3×3 grid of centred sticker + title + sentence blocks. The footer is a row of five columns (a Telegram blurb, About, Mobile Apps, Desktop Apps, Platform).

Paddings cluster at 15px, 10px, 9px and 20px, with 160px used for large side insets. The stylesheet declares doc-page layout values (`--side-nav-width: 240px`, `--side-nav-top: 72px`, `--doc-space: 16px`).

## Elevation & Depth

The page is flat: no box shadows were measured on rendered elements. The CSS carries inset input shadows (`inset 0 1px 1px rgba(0,0,0,0.075)`) and a small `0 2px 4px rgba(0, 0, 0, 0.1)`, used on other pages. All depth on the home page comes from the illustrations: device mock-ups, the painterly news thumbnails, and the glossy 3D-style duck stickers. Separation comes from white space, a single blue vertical rule and a light `#e8e8e8` horizontal rule.

## Shapes

One radius dominates the home page: **4px** (17 elements), on the news card images. The mobile apps button is a full pill (`999px`). The logo is a perfect circle. The CSS declares more radii (2px, 3px, 5px, 8px, 10px, 16px) for other pages. Cards have no frames or backgrounds; an image with text beneath counts as the card.

## Components

- **Tabs.** Text links in blue at the top left. The active tab is marked with a blue underline bar.
- **Link.** `#0088cc`, no underline at rest. On hover it keeps its colour and gains an underline (measured on "Recent News").
- **Tagline.** `#8c8c8c` 20px/300 light text under the logo.
- **News sidebar.** A blue vertical rule (the measured `#0088cc` border), the blue title "Recent News", black bold dates and blue headline links.
- **App download link.** A device mock-up image with a platform icon and a blue link label in which the platform name is bold ("Telegram for **Android**").
- **News card.** A 4px-radius illustration, a bold blue headline, a `#333333` excerpt and a `#888888` date.
- **Feature block.** A centred duck sticker, a 26px/600 blue title and a two-line `#333333` sentence starting with a bold "Telegram".
- **Primary button (mobile).** "Browse more Telegram apps": `#318fd3` fill, white 15px text, 999px radius, 10px 22px padding, 40px tall, with a chevron.
- **Footer.** Five columns: black column titles and blue links, behind a `#e8e8e8` rule.

## Design System Architecture

Telegram publishes no design system or brand guidelines for its website. The press page (https://telegram.org/press) offers a logo zip, links public-domain screenshots at https://telegram.org/tour/screenshots, and says only that logos may be used in articles and "forward to Telegram" buttons as long as "people understand you're not representing Telegram officially". It names no colours or typefaces. The site's de facto system is plain, hand-written CSS. A few custom properties drive the documentation layout (`--native-font`, `--native-mono-font`, `--doc-font-size: 15px`, `--doc-line-height: 1.6`, `--side-nav-width: 240px`, `--bullet-color: #0088cc`). The shipped CSS shows grid breakpoints (`min-width: 768px`, `992px`, `1200px`) and input shadows.

## Do's and Don'ts

**Do**
- Use the native system font stack; don't load a web font.
- Use one blue (`#0088cc`) for every link and heading accent, on white.
- Keep body text at 15px `#333333`.
- Let the stickers and illustrations supply the colour and character.
- Write short, factual feature lines that start with the product name.

**Don't**
- Don't add shadows, gradients or card frames.
- Don't use heavy display type; the biggest text weights are 600 and 300.
- Don't round content beyond 4px, except the pill button and the circular logo.
- Don't introduce a second accent colour in the UI.

## Responsive Behavior

Measured at 390px wide. The tagline drops from 20px/29.6px to **16px/23.68px** (display-mobile). Section titles stay at 23px and feature titles at 26px (both measured on mobile). No header links or menu toggle were detected by the mobile pass (`headerLinksVisible: 0`). The mobile capture shows the Home, FAQ and Apps tabs and the EN menu in the header. In the mobile capture, the "Recent News" sidebar list moves above the logo. The device mock-ups appear one per row, and a blue pill button, "Browse more Telegram apps", appears (it was measured only on mobile). The news cards are full width, and the nine "Why Telegram?" blocks run in one column. The footer shrinks to a single centred row of links (ABOUT, BLOG, PRESS, SAFETY). The stylesheet's media queries include `min-width: 768px` (18), `max-width: 767px` (7), `min-width: 992px` (7) and `min-width: 1200px` (6).

## Iteration Guide

1. Start with white, system fonts, `#333333` 15px text and `#0088cc` links.
2. Centre a round logo, the product name and a light 20px/300 grey tagline.
3. Present features as a centred grid: sticker illustration, 26px/600 blue title, one plain sentence.
4. Keep every container frameless; use a single blue rule or `#e8e8e8` hairline to separate.
5. Use the `#318fd3` pill only for the one primary action on mobile.
6. Check against the capture: it should feel like well-kept documentation lit up by stickers.
