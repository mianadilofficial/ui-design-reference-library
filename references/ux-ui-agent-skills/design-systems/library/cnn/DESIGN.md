---
version: alpha
name: CNN
category: "News & Publishing"
description: "CNN's edition home page is a dense newsroom grid in near-black #0c0c0c on white, set in cnn_sans_display (36px bold lead headline, 20px medium story headlines, 16px links), with the brand red #cc0000 reserved for conversion actions and live markers, #e6e6e6 hairlines, 4px thumbnails and 8px controls."
colors:
  canvas: "#ffffff"
  ink: "#0c0c0c"
  neutral-light: "#e6e6e6"
  ink-muted: "#6e6e6e"
  ink-black: "#000000"
  ink-light: "#b1b1b1"
  ink-dark-gray: "#404040"
  primary: "#cc0000"
  on-primary: "#ffffff"
typography:
  display:
    fontFamily: cnn_sans_display, helveticaneue, Helvetica, Arial, Utkal, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 38px
  display-mobile:
    fontFamily: cnn_sans_display, helveticaneue, Helvetica, Arial, Utkal, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 26px
  nav:
    fontFamily: cnn_sans_display, helveticaneue, Helvetica, Arial, Utkal, sans-serif
    fontSize: 16px
    fontWeight: 400
  headline:
    fontFamily: cnn_sans_display, helveticaneue, Helvetica, Arial, Utkal, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 26px
  body:
    fontFamily: cnn_sans_display, helveticaneue, Helvetica, Arial, Utkal, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: cnn_sans_display, helveticaneue, Helvetica, Arial, Utkal, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.2px
  footer-heading:
    fontFamily: cnn_sans_display, helveticaneue, Helvetica, Arial, Utkal, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 30px
    borderColor: "{colors.neutral-light}"
  button-secondary-hover:
    backgroundColor: "{colors.neutral-light}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  link-hover:
    textColor: "{colors.ink-muted}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-dark-gray}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 0px 128px 0px 8px
    height: 48px
    borderColor: "{colors.ink-light}"
  thumbnail:
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.neutral-light}"
    typography: "{typography.footer-heading}"
    padding: 48px 0px 24px
    borderColor: "{colors.ink-dark-gray}"
---

# CNN

## Overview

This document describes the home page of CNN's international edition, measured at https://www.cnn.com (the final URL resolved to https://edition.cnn.com/; page title "Breaking News, Latest News and Videos | CNN"). The page is a dense, newsroom-style front page: the CNN logo and a row of section links at the top, a trending-topics strip, a three-column grid of stories with one dominant lead, then themed blocks that run down the page (the capture shows "US Elections", "More Top Stories", "Artificial Intelligence" and "France Protests"). The measured page is 7767px tall at 1280px wide.

The official CNN Press Room (https://cnnpressroom.blogs.cnn.com/, opened for this document) describes itself as run by CNN Communications and publishes announcements for CNN divisions such as CNN US, CNN Digital, CNN International and HLN. The newsroom's own about pages on cnn.com returned HTTP 451 to the fetch tool, so no company self-description from cnn.com is quoted here.

Structure of the measured page, from top: a very dark band at the top of the capture that holds an empty advertising slot, the white header with a hamburger icon, a red CNN logo, nine text links (US, World, Politics, Business, Health, Entertainment, Style, Travel, More with a caret), and on the right "Watch" with a red live dot, "Listen" with a headphones icon, a search icon and a bordered "Sign in" button; a thin black rule; a trending line of seven short topic links separated by vertical bars; and then the story grid. The left rail lists three stories with images and bold headlines, the center column carries a large centered lead headline ("Hurricane Isaias strengthens to Category 2 with evacuations underway" in the measured capture) over a wide photograph with a red "Live Updates" label, followed by related text links and a "US ELECTIONS" block of three small image stories. The right rail has a video slot, then a stack of small-thumbnail stories.

Visual character: black type on white, tight 4px-rounded photographs, heavy sans headlines, almost no color beyond the red logo and live markers, and gray placeholder boxes where advertising or video loads. Section labels are uppercase and bold with a short black vertical bar at their left.

## Colors

- **Canvas `#ffffff`**: the page background and the largest on-screen color (about 47% of the capture).
- **Ink `#0c0c0c`**: the most-read text color (3523 characters), also the stylesheet's `--semantic-color-link-primary-base-default` and `--semantic-color-border-primary`; it fills the footer and the dark band at the top (background weight 4573).
- **Ink black `#000000`**: the color of the lead headline (277 characters).
- **Primary red `#cc0000`**: the stylesheet value `--semantic-color-action-conversion-base-bg` is `#c00` (the same color), with white icon/text (`--theme-semantic-color-action-conversion-base-icon` `#fff`). `#cc0000` is the most frequent saturated color in the CSS (28 occurrences). The capture shows the CNN logo and the "Live Updates" label in red; which exact element carries which value was not isolated in the measurement. On-primary text is `#ffffff`.
- **Ink muted `#6e6e6e`** (345 characters; `--primitive-color-neutral-500`): photo credits and secondary text, and the hover color of headline links.
- **Neutral light `#e6e6e6`**: the footer text color (1307 characters), the 1px border of the "Sign in" button and its hover fill, and the fill of the gray image and advertising placeholders (background weight 5299).
- **Ink light `#b1b1b1`**: the measured text color of the dark top container (11 characters) and the border color of the search field.
- **Ink dark gray `#404040`**: the search-field text color and the footer's border.

The stylesheet also contains a Material-style palette (`#0d47a1`, `#e3f2fd`, `#311b92`, `#d50000`, `#ffff00`, `#ff00ff`), a purple `--primitive-color-brand-underscored` (`#6a29d5`), and primitive scales for red, blue, yellow and orange; none was observed on a measured element, so they are not tokens. The `#0000ee` navigation-link color in the extraction is the browser default and is excluded.

## Typography

The site's own family, **cnn_sans_display** (loaded at 400, 500 and 700), sets 7454 of the measured characters; the **CNN** family sets 190 (a video-player message) and a family called `book` sets 48. The stylesheet declares more faces: cnn_sans_condensed, helveticaneue, Noto Sans Arabic, Noto Serif, Noto Serif Display, Noto Serif Semi Condensed, Roboto and a family of `cinecav-*` faces. The font stack used throughout is `cnn_sans_display, helveticaneue, Helvetica, Arial, Utkal, sans-serif`.

| Role | Size / line height | Weight |
|---|---|---|
| Display (lead headline) | 36px / 38px | 700 |
| Display, mobile pass (first story headline) | 20px / 26px | 500 |
| Story headline | 20px / 26px | 500 |
| Body and links ("Russian lab death") | 16px / 22px | 400 |
| Button ("Sign in") | 14px / 20px, 0.2px letter spacing | 700 |
| Navigation | 16px | 400 |
| Footer heading | 16px / 20px | 700 |

By characters the sizes are 16px (4107), 20px (1505), 14px (1042), 12px (353), 10px (312), 11px (214), 15px, 36px (68 each) and 30px (23). Weights are 400 (4093 characters), 700 (2270) and 500 (1329). The 16px text carries 0.5px letter spacing on 2482 characters; 14px text carries 1px spacing on 30 characters and 0.2px on 14.

The hierarchy is made of weight and size, not color: lead 36px at 700, story headlines 20px at 500, supporting links 16px at 400, credits and labels at 10px to 14px. The body role the extractor first picked (11px white text in the `CNN` family) is a video-player error message and is not editorial body text.

**Font substitutes.** cnn_sans_display is a proprietary face served by the site; no foundry or license page was found. The stylesheet's own fallbacks are `helveticaneue`, Helvetica and Arial, so use Helvetica Neue or Arial at weights 400, 500 and 700 for prototypes.

## Layout

The stylesheet defines a column grid: `--device-size-grid-10-col-max-width` is 1075px, `--device-size-grid-5-col-max-width` is 526px and `--device-size-grid-2-col-max-width` is 196px. In the measured page the lead headline is 568px wide, thumbnails and placeholders are 273px by 154px, and the page content is a three-rail layout: a left rail of vertical image-over-headline stories, a wide center column, and a right rail of video and small-thumbnail stories (thumbnail left, headline right).

Lower blocks use two to three columns with image-over-headline cards, a large feature image with an overlaid white headline on a dark gradient, and horizontal rules between text-only items. Gray placeholder boxes (advertising or video loading) occupy the full width of a column in several places.

Paddings measured: 12px (61 uses), 8px (30), 5px (25), 10px (15), 4px (10), 24px (6), 32px and 16px (3 each), 48px (2). Gaps: 12px (18 uses), 4px (6), 24px (4), 32px (3), 40px (2). The footer measures 1165px tall with padding 48px 0px 24px.

## Elevation & Depth

Mostly flat. The one measured shadow is `rgba(106, 115, 129, 0.22) 0px 12px 20px 0px` (3 elements), which matches the stylesheet's `0 12px 20px #6a738138` (24 uses across declarations) and the header dropdown and scrolled-header shadow variables (`--theme-header__dropdown-box-shadow`, `--theme-header__scrolled-box-shadow`). It marks floating layers such as menus, not content cards.

In the page body, structure comes from thin rules, white space and photography. The only layered content is the lead feature image carrying an overlaid headline on a dark gradient in the lower block.

## Shapes

Measured radii: `4px` (64 elements: photographs and placeholders), `16px` (25 elements), `8px` (5 elements: the Sign in button and the search field), `4px 0px` (3 elements), `50%` (1), `32px` (1) and `999px` (1). Tokens: `xs` 4px, `sm` 8px, `md` 16px, `lg` 32px and `pill` 9999px.

Photographs are only slightly rounded (4px), controls use 8px, and the 16px, 32px and pill values apply to a smaller set of elements whose identity was not isolated. The logo is a rectangular red mark with the letters CNN.

## Components

- **Secondary button ("Sign in")**: white fill, `#0c0c0c` bold 14px text with 0.2px letter spacing, 1px `#e6e6e6` border, 8px radius, padding 0 12px, 30px tall and 74px wide. On hover (measured) the fill becomes `#e6e6e6`.
- **Header navigation**: 16px regular links on white; on hover each link gains an underline (US, World, Politics, Business, Health, Entertainment, Style, Travel, More, Watch, Listen).
- **Headline link**: `#000000` headline text; on hover (measured) the color changes to `#6e6e6e`.
- **Trending strip**: 16px / 22px links in `#0c0c0c` separated by vertical bars.
- **Search field**: white fill, 1px `#b1b1b1` border, 8px radius, 16px text in `#404040`, 48px tall, padding 0 128px 0 8px.
- **Thumbnails**: 4px-rounded images with a bold 20px headline beneath or beside them.
- **Section label**: uppercase bold label with a short black vertical bar at the left ("US ELECTIONS", "MORE TOP STORIES").
- **Footer**: `#0c0c0c` fill, `#e6e6e6` text, bold 16px group headings (World, Africa, Americas, Asia, Australia, China, Europe, India and others), padding 48px 0px 24px.

Not documented as brand UI: the advertising slots and gray ad placeholders, the "Ad Feedback" control, the video player's DRM message, and consent or cookie widgets.

## Design System Architecture

No public brand-guideline or design-system site was found. The press room (https://cnnpressroom.blogs.cnn.com/) was opened and lists only a header logo and a press-contacts page: no brand guidelines and no media kit. The cnn.com about pages returned HTTP 451 to the fetch tool.

The shipped CSS exposes a layered token system in custom properties (400 captured on the home page): `--primitive-*` values (for example `--primitive-color-neutral-500` `#6e6e6e`, `--primitive-color-red-600` `#a20000`, `--primitive-size-24` 24px, `--primitive-type-font-family-cnn-condensed`), `--semantic-*` roles (`--semantic-color-link-primary-base-default`, `--semantic-color-action-conversion-base-bg` `#c00`, `--semantic-type-title-md-font-size` 18px, `--semantic-type-subtitle-md-font-size` 14px), `--theme-*` overrides (`--theme-headline__font-family`, `--theme-semantic-color-bg-primary` `#fff`, `--theme-footer__brand-logo-width` 40px) and `--device-size-*` responsive values (grid widths and header sizes). This is a de-facto system described from shipped CSS, not a published specification.

## Do's and Don'ts

Do
- Set the lead headline at 36px / 38px bold, story headlines at 20px / 26px medium and links at 16px / 22px regular.
- Keep the page black on white with `#0c0c0c` ink and `#e6e6e6` rules; reserve `#cc0000` for the logo, live markers and conversion actions.
- Round photographs at 4px and controls at 8px.
- Mark section blocks with an uppercase bold label and a short black bar.
- Use hover as an underline for navigation and a gray (`#6e6e6e`) shift for headline links.

Don't
- Don't use the browser-default `#0000ee` link blue.
- Don't add decorative shadows to content cards; the one measured shadow belongs to floating layers.
- Don't treat ad placeholders, the DRM message or the consent widget as brand components.
- Don't set headlines in a serif or in colors other than ink and black.
- Don't fill large areas with red; it is a marker color.

## Responsive Behavior

The mobile pass (390px) recorded: the first story headline at 20px / 26px weight 500 and 358px wide, the lead headline at 32px / 38px weight 700 and 358px wide (from 36px / 38px on desktop), and the 11px video message at 318px wide. The mobile character-weighted sizes are led by 16px (2809), 14px (1420), 20px (1261), 12px (309), 18px (244), 11px (214), 32px (68) and 24px (23). The extraction recorded no mobile layout data, and the measured mobile navigation container height (18102px) is not a header measurement, so how the header, rails and footer rearrange on mobile was not measured.

## Iteration Guide

1. Start from `canvas` `#ffffff`, `ink` `#0c0c0c`, `neutral-light` `#e6e6e6` and `primary` `#cc0000`.
2. Use the cnn_sans_display stack at 400, 500 and 700: lead 36px / 38px, headline 20px / 26px, body 16px / 22px, button 14px / 20px.
3. Build the grid as three rails with a wide center column; keep image-over-headline cards with 4px photograph radius.
4. Build the "Sign in" control as a 30px-tall, 8px-radius white button with a 1px `#e6e6e6` border that fills `#e6e6e6` on hover.
5. Use uppercase bold section labels with a short black bar; add live markers in red.
6. For narrow screens use the recorded values (32px lead, 20px headlines) and mark other behavior as not measured.
7. Keep ad and video placeholders out of the documented design.
