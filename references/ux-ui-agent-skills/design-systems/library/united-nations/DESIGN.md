---
version: alpha
name: United Nations
category: "Government & Nonprofit"
description: "United Nations English home page (un.org/en) measured live: light grey #f2f2f2 canvas with #454545 Roboto text, Roboto Condensed 700 headlines at 32px with -0.77px tracking, a deep blue #0a5a82 button with square corners, UN blue #009edb outline on the DONATE button, and pale blue #eaf3fb and #e4effb panels."
colors:
  canvas: "#f2f2f2"
  page-body: "#eaf3fb"
  ink: "#454545"
  primary: "#0a5a82"
  on-primary: "#ffffff"
  surface-3: "#e4effb"
  ink-2: "#333333"
  ink-3: "#000000"
  ink-5: "#404040"
  ink-6: "#4d4d4d"
  hairline: "#009edb"
  link: "#666666"
  text-input-text: "#555555"
  text-input-border: "#dddddd"
typography:
  display:
    fontFamily: "\"Roboto Condensed\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: "-0.77px"
  subheading:
    fontFamily: "\"Roboto Condensed\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 35.001px
    letterSpacing: "-0.77px"
  body:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.35px"
  button:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
  nav:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 17.1429px
    letterSpacing: 0.36px
  button-secondary:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
    letterSpacing: 1.27px
    textTransform: uppercase
  input:
    fontFamily: >-
      system-ui, -apple-system, "system-ui", "Avenir Next", Avenir, "Segoe UI", "Lucida Grande", "Helvetica Neue", Helvetica, "Fira Sans", Roboto, Noto, "Droid Sans", Cantarell, Oxygen, Ubuntu,
      "Franklin Gothic Medium", "Century Gothic", "Liberation Sans", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 4px
  md: 30px
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 7px
  s4: 9px
  s5: 9.75px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 15px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 9.75px 13px
    height: 33px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-3}"
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 9px 20px 10px
    height: 33px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink-6}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-3}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 7px
    height: 34px
    borderColor: "{colors.text-input-border}"
    boxShadow: rgba(0, 0, 0, 0.06) 0px 1px 3px 0px inset
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 31.7968px 15px 33px
---

## Overview

This DESIGN.md documents the United Nations English home page. The queued URL https://www.un.org/ is a language-selection splash (a translucent panel over a flag video with six language buttons: عربي, 中文, English, Français, Русский, Español); the real home page was re-measured at https://www.un.org/en/ (final URL https://www.un.org/en/, title "United Nations | Peace, dignity and equality on a healthy planet", language en, 12,111px tall at 1280px wide). This file is therefore named after the measured English site, the UN's own parent site.

The page is a dense public-information portal: a header with the UN emblem and the tagline "Peace, dignity and equality on a healthy planet", a search field and a row of language links, a lead story with photograph ("Rural Women Farmers Caring for Mother Nature"), an "In Focus" band, a Sustainable Development Goals section ("17 Goals to transform our world"), "More from the United Nations", "What we do", "Structure of the United Nations" (General Assembly, Security Council, Economic and Social Council, Trusteeship Council, International Court of Justice, Secretariat), "Learn more", "Did you know?", "Watch and Listen", "The United Nations in Pictures", and a large link footer. The voice is neutral, factual and headline-driven.

## Colors

`canvas` #f2f2f2 (light grey, 5,643 area weight) is the page background; `page-body` #eaf3fb (1,547) and `surface-3` #e4effb (862) are pale blue panels; white (519) fills cards, inputs and secondary buttons. `ink` #454545 is the dominant text colour (13,046 characters), with `ink-2` #333333 (1,978), `ink-3` #000000 (1,818), `ink-5` #404040 (294), `ink-6` #4d4d4d (71), `link` #666666 (65) and white (739). `primary` #0a5a82 is the fill of the "The UN Pulse" button and the colour of 14 text characters. `hairline` #009edb, the UN blue, is the border of the DONATE button and the most common border colour (6 uses); other borders are #d5dfe5, #dddddd, #ededed and #5b5b5b. Darker background areas #333333 (226), #515870, #576f9e, #2f658c, #6b6b6b and #4d4d4d (67) occur in feature panels. The Sustainable Development Goal tiles carry their own goal colours (for example #e8203a, #dda63a and #4c9f38 were registered as zero-weight background areas); they are goal identities, not interface colours.

## Typography

Roboto and Roboto Condensed are the only text families (Roboto 15,778 characters, Roboto Condensed 2,278), with Font Awesome 6 Free for icons. Roles: `display` Roboto Condensed 700 at 32px / 32px with -0.77px letter spacing (the lead-story headline); `subheading` Roboto Condensed 700 at 30px / 35.001px with -0.77px; `body` Roboto 400 at 15px / 24px with -0.35px; `button` Roboto 400 at 13px / 13px; `nav` Roboto 400 at 14px / 20px; `link` Roboto 500 at 12px / 17.1429px with 0.36px; `button-secondary` Roboto 700 uppercase at 12px / 12px with 1.27px tracking; the search `input` uses a system-ui stack at 14px / 20px. Sizes by character count: 14px (9,860), 15px (2,603), 17px (1,568), 22px (1,505), 16px (1,017) and 12px (437), with 40px, 24px, 20px and 30px for headings. Weights: 400 (14,940), 700 (2,693), 500 (409), 600 (14). The header tagline measured Roboto Condensed 700 at 27.0061px with 0.729165px tracking.

## Layout

The footer is 1170px wide inside the 1280px page, indicating a 1170px container. Measured paddings include 23.8px (105 uses), 15px (84), 20px, 10px, 7px, 12px, 35px, 37px, 9px, 13px and 163px. The design is a multi-column editorial grid: a wide lead story beside a narrower stack of secondary stories, then horizontally organised bands each with a centred heading, short intro line and a row of image cards. The structure band places six icon-and-caption columns across.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.5) 0px 2px 4px 0px` (17 uses, small drop under cards or controls) and `rgba(0, 0, 0, 0.06) 0px 1px 3px 0px inset` (the search field's inset shadow). Panels otherwise rely on flat pale-blue and grey fields and thin borders.

## Shapes

Measured radii: 4px (5), 3px (5), 30px (5), plus a joined pair `3px 0px 0px 3px` and `0px 4px 4px 0px` (the search field and its button). Tokens: `none` 0px, `xs` 3px, `sm` 4px, `md` 30px. The primary button is square (0px); DONATE has a 4px radius; the search input has 3px; 30px marks rounded tags or controls.

## Components

`button-primary` ("The UN Pulse"): #0a5a82 fill, white Roboto 13px label, 0px radius, 9.75px 13px padding, 33px tall, 123px wide; on hover the button inverts to the #f2f2f2 canvas fill with black text. `button-secondary` ("DONATE"): white fill, #454545 uppercase 12px bold label with 1.27px tracking, 4px radius, 1px #009edb border, 9px 20px 10px padding, 33px tall. `link` is #666666 Roboto 500 12px ("A-Z Site Index"). `nav-link` is black Roboto 14px; the logo link carries the emblem as a background image (275px by 78px). `text-input`: white, #555555 14px text, 3px radius, 7px padding, 34px tall, 1px #dddddd border with a soft inset shadow. `footer`: #454545 text, uppercase 12px bold column headings with 1.27px tracking, padding 31.7968px 15px 33px.

## Design System Architecture

No public UN web design-system or brand-guideline page was opened for this file. The site is served from a Drupal theme directory (the logo URL is `https://www.un.org/sites/un2.un.org/themes/bootstrap_un2/images/logo-en.svg`, i.e. a `bootstrap_un2` theme), uses Font Awesome 6 icon fonts, and defines no root custom properties (the `rootVars` list is empty). Its stylesheet corpus contains many Bootstrap-style radii and shadows, so the de-facto system is a Bootstrap-derived theme with UN blue (#009edb) borders and a Roboto type pairing.

## Do's and Don'ts

Do use Roboto Condensed 700 for headlines with -0.77px tracking and Roboto 400 at 15px for body. Do keep the page grey (#f2f2f2) with pale-blue panels and #454545 text. Do use #0a5a82 for primary actions and #009edb for outlines. Do keep primary buttons square.

Don't use Bootstrap default blues such as #337ab7 or #0d6efd as brand colours; they are framework defaults and were measured only on the language splash. Don't apply SDG goal colours to interface elements. Don't round primary buttons. Don't place decorative shadows on text.

## Responsive Behavior

The mobile pass (390px) recorded: h1 "Rural Women Farmers Caring for Mother Nature" at 32px / 32px weight 700; body 15px / 24px, 390px wide; the primary CTA "The UN Pulse" at 13px, full width at 360px by 34px; and a header with the tagline at 27.0061px. Column collapse and menu form beyond these are not measured.

## Iteration Guide

1. Canvas #f2f2f2, panels #eaf3fb and #e4effb, text #454545.
2. Roboto Condensed 700 headlines (32px / 30px); Roboto 15px body.
3. Square #0a5a82 buttons at 33px; DONATE as white with a #009edb outline and 4px radius.
4. Present goals and organs as icon-and-caption grids.
5. Gate with `node web/scripts/verify-designs.mjs --slug=united-nations`.

## Additional Measurements

The language-selection splash at https://www.un.org/ measured Roboto 400 at 14px and 16px with #4d4d4d buttons, white #f2f2f2 labels and 0px radius; these are not used as tokens of the English site beyond the shared #4d4d4d, which also appears on the English page as an outline colour. The footer contains social links to Facebook, Twitter, YouTube, Flickr and Instagram.

The header search field and its button form one joined control, with rounded outer corners only (3px on the left of the field and 4px on the right of the button). Photography is documentary and people-centred, and sections are separated by generous vertical padding and centred section titles rather than by rules. The "Did you know?" band places four dark-blue statistic panels side by side, and the "Watch and Listen" band pairs video thumbnails with a podcast player panel. These measurements and layouts are taken from the English home page capture and the extraction, and introduce no tokens beyond those in the frontmatter.
