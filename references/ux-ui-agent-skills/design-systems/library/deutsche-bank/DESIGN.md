---
version: alpha
name: Deutsche Bank
category: "Banking & Insurance"
description: "Deutsche Bank's group home page (db.com): white canvas with black text, navy #1e2a78 and #16184e accents, a bright blue #0550d1 for buttons and links, a #e7f4fe light-blue band, 2px-radius buttons and soft 24px-blur card shadows, set entirely in the proprietary Deutsche Bank Text face at weight 400."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0550d1"
  on-primary: "#ffffff"
  primary-hover: "#0d43b3"
  primary-active: "#163796"
  navy: "#1e2a78"
  navy-deep: "#16184e"
  ink-muted: "#425563"
  ink-subtle: "#747474"
  surface-blue: "#e7f4fe"
  footer-bg: "#f7f7f7"
  border: "#c1c6ce"
  error: "#e4002b"
typography:
  display:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 29.008px
    fontWeight: 400
    lineHeight: 36px
  heading:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
  heading-mobile:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 32px
  section-title:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 36px
  card-title:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 35.88px
  subheading:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  meta:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 24px
  nav-utility:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
  footer-link:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21.98px
rounded:
  xs: 2px
  sm: 24px
spacing:
  s1: 4px
  s2: 5.6px
  s3: 7.01px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 17.01px
  s8: 18px
  s9: 20px
  s10: 21.01px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-active:
    backgroundColor: "{colors.primary-active}"
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.navy}"
---

## Overview

This is the group home page of Deutsche Bank, https://www.db.com/ (page title "Deutsche Bank"). It is a corporate and editorial front door rather than a retail product page: a utility bar, a two-level navigation, a full-width blue campaign hero, a welcome headline, and then streams of news and thought-leadership articles. The claim on the opened "Claim" page is "With deep dedication.", and the home page greets visitors with "Welcome to Deutsche Bank" and "Your Global Hausbank on the path to becoming the European Champion."

The visual tone is calm, institutional and quiet. One typeface at one weight (Deutsche Bank Text 400 accounts for all 4989 measured characters) carries everything, so hierarchy comes from size and colour alone: black body text, navy section titles and a large white hero headline on blue. The identity mark is the square blue logo with a white diagonal slash at the top right of the header, next to a "Deutsche Bank" wordmark-style link at the top left.

Imagery is editorial photography: executives and employees in portraits, event pictures, illustrated podcast tiles and stock-style hands with puzzle pieces. Cards sit on a white or light-blue field with a soft shadow, and a thin magenta-pink bar marks one featured article card in the capture.

Role notes. The extractor's primary CTA was the white "Discover the achievement" button on the blue hero (white fill, blue text, 1px blue border, 2px radius). The site's filled button is blue: `button type-primary` "Load More" is `#0550d1` fill with white text. `primary` here is that blue, with `on-primary` white; the white-filled variant is recorded as `button-light`. The "back to top" button was not documented.

## Colors

Measured on the desktop pass at https://www.db.com/. By character count the text colours are `#000000` (3188), `#ffffff` (800), `#0550d1` (547), `#1e2a78` (284), `#425563` (103), `#16184e` (48) and `#747474` (19). By area the backgrounds are `#000000` (3456 by DOM area; the capture's page background is white), `#e7f4fe` (2307), `#ffffff` (2050), `#f7f7f7` (368), `#1e2a78` (166) and `#0550d1` (6). The visible page is white with a light-blue band, so `canvas` is `#ffffff`.

- `ink` `#000000`: body copy, nav labels and news card titles.
- `primary` `#0550d1`: filled buttons, text links and the 1px outline of light buttons. `primary-hover` `#0d43b3` and `primary-active` `#163796` are the button background colours for the `:hover` and `:active` rules of `button.type-primary` found in the shipped `sharedInternetStyles.css`.
- `navy` `#1e2a78`: footer links, the language and utility link colour, and section navigation; also the area colour of dark blue panels.
- `navy-deep` `#16184e`: the "Welcome to Deutsche Bank" h1 and the "News" section title.
- `ink-muted` `#425563`: article meta lines such as "Podcast | …" (12px).
- `ink-subtle` `#747474`: lighter secondary text and one border.
- `surface-blue` `#e7f4fe`: the "Thought leadership" band.
- `footer-bg` `#f7f7f7`: footer background.
- `border` `#c1c6ce`: a 1.5px ring shadow and border.
- `error` `#e4002b`: border colour of date-picker `.error` states in the shipped CSS; not seen on the home page.

The hero's blue gradient stops were not measured and are not tokens. Third-party player styles (`#33b5e5`, `rgba(27, 127, 204, 0.8)` focus rings) appear in the CSS corpus and are not brand colours.

## Typography

Deutsche Bank Text is the only loaded face (`Deutsche Bank Text 400 normal`); the font stack is `"Deutsche Bank Text", Arial, "Helvetica Neue", Helvetica, sans-serif`. The CSS also lists Source Sans Pro and the video player's `mi24-player-font`, which are not used for page text. The face is proprietary and the stack falls back to Arial, so Arial is the shipped substitute.

Sizes by characters: 16px (3116), 26px (912), 60px (390), 12px (330), 14px (129), 18px (80), 44px (24), 54px (5). All weights are 400. Roles measured or probed on https://www.db.com/ (see SOURCES.json): the white hero h2 is 60px/60px; the welcome h1 is 44px/48px in `#16184e`; section titles ("News", "Thought leadership") are 26px/36px; news card headlines are 26px/35.88px; body paragraphs and nav links are 16px/24px; the utility bar ("Media", "Careers") is 14px/16px; the top-level nav items are 16px/25.008px; article meta is 12px/24px in `#425563`; footer links are 14px/21.98px in `#1e2a78`.

Letter-spacing is `normal` everywhere and no text transform is applied. Headlines are in sentence case ("Welcome to Deutsche Bank", "Trade finance: risk distribution during market volatility"); long words in cards hyphenate in the capture ("in-vestors", "distribu-tion").

## Layout

The header has two levels. The top row carries the "Deutsche Bank" link, five utility links (Media, Careers, Investor Relations, Research, Responsibility, Contact) in 14px and the logo square at the right. Beneath it a tabbed row lists Deutsche Bank, Corporates/Institutions, Private Clients, Locations and Client logins, with the active tab outlined, and a third row of icon-and-text links (What we do, Who we are, Media, What Next). The measured header box is 134px tall and 1280px wide. A floating vertical tool rail with DE, accessibility, link, mail and share icons sits at the right edge of the hero.

Below: the blue hero (kicker line in 16px white, 60px white h2, a white button); a white block with the 44px welcome h1 and a one-line intro; a "News" row of four cards; a light-blue "Thought leadership" band with a masonry of cards of unequal height; then a "Load More" button, the footer (Imprint, Legal resources, Privacy Notice, Accessibility, Sitemap in a `#f7f7f7` bar 122px tall) and social links.

Spacing values measured: paddings of 16px (37 uses), 24px (19), 12px (18), 8px (9) and 4px (9); gaps of 8px (24), 16px (12) and 4px (2). The page is 1280px wide at the desktop pass and 4187px tall.

## Elevation & Depth

Shadow is the only depth device and it is soft: `rgba(0, 0, 0, 0.07) 0px 2px 24px 0px` (10 uses) lifts news and article cards off white or light-blue backgrounds, and `rgb(193, 198, 206) 0px 0px 0px 1.5px` (5 uses) draws a grey ring. A fully transparent `0 2px 0 0` shadow is measured seven times. The shipped CSS also declares `0 3px 6px rgba(0,0,0,0.5)` for the media player controls.

Buttons are flat. Hover changes: the "DE" link drops to opacity 0.5 on hover, and filled buttons change fill to `#0d43b3` in the CSS rule. Overlap is limited to the hero text over the blue field and the tool rail floating on the hero's right edge.

## Shapes

Radius is almost always 2px: buttons, cards and inputs measure 2px (18 uses on the page, 114 in the shipped CSS). One element measures `2px 2px 0px 0px`. A single 24px radius appears once and is kept as `sm`. Other radii in the CSS corpus (3px to 80px) belong to widgets such as the media player and date picker and were not measured on visible page elements.

Images and cards have square or 2px corners; there are no pills. The logo is a square. Icon controls in the tool rail are square with thin outlines.

## Components

Primary button. `a.button.type-primary` or `button.type-primary`: 40px high, `0px 12px` padding, 16px/20px text, 2px radius. Filled version: `#0550d1` background, white text ("Load More", 100px wide). Light version on the blue hero: white fill, `#0550d1` text, 1px `#0550d1` border ("Discover the achievement", 215px wide). Hover and active fills are `#0d43b3` and `#163796` per the stylesheet.

Navigation. Utility links in 14px black; main tabs in 16px black with 12px 8px padding on the level-1 links (49px high); the active tab is outlined with a thin line and uses `#1e2a78` text ("Deutsche Bank").

News card. White card, 2px corners, soft 24px shadow, an image on top, a 12px meta line (type and date), then a 26px headline in black. Podcast cards add a play button and a waveform illustration.

Thought-leadership card. Same card with a longer 16px summary paragraph under the headline; one card has a pink accent bar at its lower right corner in the capture.

Hero. Blue background, 16px white kicker, 60px white headline, a light button, and a photo at the right edge.

Footer. `#f7f7f7` bar with `#1e2a78` 14px links.

Form inputs were not present on the first screen, so no input styling was measured.

## Design System Architecture

No public design system for db.com was found: the home page (opened) links Media, Careers, Investor Relations and other corporate sections but no design-system, brand-guideline or GitHub link, and the opened Claim page (https://www.db.com/who-we-are/claim) covers the claim "With deep dedication." only, not visual rules.

The de-facto system is a CMS-driven component library. Four stylesheets are linked from the page: `mainStyles.css` (served from `prod2.master.dwebcms.db.com`), `ghpStyles.css`, `dbcomStyles.css` and `sharedInternetStyles.css`. Class naming is module-based (`mod-turn-card`, `cnt-news`, `cnt-generic`, `news-stream-entry-headline`, `container-headline`, `level-1-link`) and buttons are `button type-primary` or `link-button` with `wt-enabled` hooks. No `:root` custom properties were measured; colours are literal values in the CSS. The font-face list is `Deutsche Bank Text`, `Source Sans Pro` and `mi24-player-font`.

Media queries in `sharedInternetStyles.css` break at `max-width: 61.5rem` (18 rules), `43.5rem` (19 rules) and `25rem` (16 rules).

## Do's and Don'ts

Do set all text in Deutsche Bank Text 400 and build hierarchy with size and colour only: 60px hero, 44px welcome h1, 26px section and card titles, 16px body, 12px meta.

Do use `#0550d1` for actions and links with white or blue-on-white button variants, 2px radius and 40px height.

Do put news and article cards on white or `#e7f4fe` with the `0 2px 24px` 7%-black shadow.

Do keep navy `#1e2a78` for utility links and footer, and `#16184e` for the h1 and "News" title.

Don't use bold: no weight other than 400 was measured.

Don't round buttons or cards beyond 2px, and don't add pills.

Don't document the "back to top" button, the accessibility toolbar or the media-player controls as brand UI.

Don't use the player's cyan or focus-ring blues (`#33b5e5`, `#00d1ff`) as brand colours.

Don't set headings in uppercase; every measured heading is sentence case.

## Responsive Behavior

Measured at the extractor's 390px mobile pass: the h1 is 29.008px with a 36px line-height (44px/48px on desktop); the hero h2 is 26px with a 32px line-height (60px/60px on desktop); body paragraphs are 14px with a 24px line-height; the "Discover the achievement" button keeps 16px/20px, 2px radius, 40px height and 215px width; the footer links are 14px/21.98px in `#1e2a78`. Mobile font sizes by character count: 20px (2574), 16px (2257), 12px (1096), 14px (950), 26px (444), 18px (217).

The shipped stylesheet declares media queries at max-width 61.5rem, 43.5rem and 25rem. Which layout changes happen at each width (navigation, card columns, the tool rail) was not measured.

## Iteration Guide

1. Set the page in one face, Deutsche Bank Text 400 with an Arial fallback; scale by size (60, 44, 26, 16, 14, 12px).
2. Use white as the canvas, black for text, navy `#1e2a78` for utility and footer, and `#0550d1` for every action.
3. Build buttons 40px high with `0 12px` padding and a 2px radius; filled blue by default, white with a blue border on dark blue panels; darken to `#0d43b3` on hover.
4. Alternate white with `#e7f4fe` bands for editorial streams and give cards the soft 7% shadow.
5. Keep headings sentence case, one weight, no letter-spacing.
6. Re-measure db.com before adding any colour, because no public token set exists to copy from.
