---
version: alpha
name: "Rogers"
category: "Telecom"
description: "Rogers Communications consumer site: Rogers red #da291c with 32px-radius pill buttons (44px high, Ted Next Var 16px weight 600), white and #fafafa page, #1f1f1f dark panels, 4px-radius cards, 42px/700 headlines with -0.3px tracking, and a #2f6fa7 blue link color."
colors:
  canvas: "#ffffff"
  page-body: "#ffffff"
  ink: "#1f1f1f"
  primary: "#da291c"
  on-primary: "#ffffff"
  surface-2: "#1f1f1f"
  surface-3: "#fafafa"
  ink-3: "#2f6fa7"
  ink-4: "#666666"
  ink-6: "#78acd9"
  primary-hover: "#ae2116"
typography:
  display:
    fontFamily: "\"Ted Next Var\", sans-serif"
    fontSize: 42px
    fontWeight: 700
    lineHeight: 46.2px
    letterSpacing: "-0.3px"
  display-mobile:
    fontFamily: "\"Ted Next Var\", sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 33px
    letterSpacing: "-0.3px"
  heading:
    fontFamily: "\"Ted Next Var\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
  subheading:
    fontFamily: "\"Ted Next Var\", sans-serif"
    fontSize: 24px
    fontWeight: 650
    lineHeight: 28.8px
  body:
    fontFamily: "\"Ted Next Var\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: "\"Ted Next Var\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.4px
  nav:
    fontFamily: "\"Ted Next Var\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
    letterSpacing: 0.4px
  link:
    fontFamily: "\"Ted Next Var\", sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 15px
rounded:
  xs: 4px
  sm: 10px
  md: 32px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 80px
  s10: 128px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 44px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.surface-2}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-3}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    padding: 0px 8px
  text-input:
    textColor: "{colors.surface-2}"
    typography: "{typography.body}"
    padding: 16px 0px 0px
    height: 46px
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.xs}"
  footer:
    textColor: "{colors.page-body}"
    borderColor: "{colors.primary}"
---

## Overview

Rogers (title "Mobile, Internet, TV, Home Monitoring, Home phone - Rogers", rogers.com) is a Canadian telecom and media retailer. The capture shows a black utility bar (About Rogers, Business, Rogers Bank at the left; Find a store, ON, Français and a "Sign in" tab at the right), a solid red main bar with the ROGERS wordmark, links (Mobile, Internet, TV & Streaming, Home Security, Deals, My Offers, Support) and a white search field. A light blue notice strip follows ("Backstreet Boys brought to you by Rogers - visit rogers.com/backstreetboys for more info.").

The hero is a pair of cards: a light grey promotional card ("BEST 5G+ NETWORK. BEST IPHONE." with "Save up to $1,799 on iPhone 18 Pro", a price block "From only $0.00/mo" and red pill buttons "View details" and an outlined "Find a store"), beside a dark card ("Get 150+ more NHL games with Rogers Xfinity TV" with a red "Shop TV bundles" pill). A full-width red brand banner follows ("Iconic Teams. Passionate Fans. Proud Owner." with the wordmark and team logos and a white "Learn more" pill), then "Check out our top deals" with a carousel of cards (WiFi, iPhone and Watch bundle, streaming), three outlined "View all ... offers" tiles, and an "ONLY AT ROGERS" perks block. The voice is promotional and price-forward: dollar amounts, short punchy claims, footnote superscripts and a "Conditions apply" link under offers.

## Colors

- primary #da291c is Rogers red: the fill of pill buttons, the main navigation bar, the brand banner and 1px borders (20 uses); primary-hover #ae2116 is the measured hover fill. The page background, canvas #ffffff, is the largest measured background area (12,020), with #fafafa (surface-3, 2896) as the grey card tint; ink #1f1f1f is the most-read text colour (3,200 characters). The generator had labelled the red as canvas and white as ink; both roles were reassigned from the measured frequencies.
- ink in the generated tokens is #ffffff (the most-read text colour overall, 1827 characters, for text on red and dark areas); the main dark text is #1f1f1f (3200 characters), which the generator stored as surface-2 because it is also the dark panel fill (area weight 3270).
- ink-3 #2f6fa7 (112 characters) is the link blue used for "Conditions apply" and the skip links; ink-6 #78acd9 (49) is a lighter blue; ink-4 #666666 (73) is secondary grey text.
- A pale blue #e5f4f7 (area 51) fills the notice strip; #cccccc (10 border uses) and #999999 are neutral borders.

The CSS variables add a design-system palette: --ds-red-light #faece5, --ds-blue-light #e5f4f7, --ds-purple-light #f8f3fb, --ds-purple-dark #2a1834 and --ds-focus #307bf6; only the blue-light value was measured on a rendered element.

## Typography

One variable family, Ted Next Var (loaded across weights 100 to 900), sets all 5326 measured characters; the icon font rds-icon is also loaded.

- display: 42px, weight 700, line-height 46.2px, letter-spacing -0.3px (mobile 30px, line-height 33px).
- heading: 36px, weight 700, line-height 43.2px; subheading: 24px, weight 650, line-height 28.8px.
- body: 16px, weight 500, line-height 24px.
- button: 16px, weight 600, line-height 24px, letter-spacing 0.4px; nav: 14px, weight 500, line-height 21px, tracking 0.4px; link: 15px, weight 600.

Sizes by characters: 16px (2658), 14px (1353), 30px (460), 20px (310), 36px (195), 24px (183), 12px (87), 42px (76). The sans-serif keyword is the declared fallback. The variable font allows intermediate weights such as 650.

## Layout

The page is 1280px wide and 9470px tall. A three-tier header (dark utility bar, red main bar, notice strip) sits above a card-based home page. Hero cards sit side by side with a wide gutter; deals use a horizontally scrolling card row with circular arrow controls and a progress bar; offer tiles are three equal outlined boxes. Spacing tokens: 6px, 8px, 12px, 16px, 24px, 32px, 40px, 48px, 80px, 128px; pill buttons use 0 16px padding at 44px height, and navigation links pad 0 8px.

## Elevation & Depth

Shadows are very light: rgba(31, 31, 31, 0.2) 0px 1px 2px 0px (2 elements) and rgba(0, 0, 0, 0.5) 0px 1px 2px 0px (1). Cards are mostly flat, using background tint (#fafafa or #1f1f1f), a 1px #cccccc border, and photographic or product imagery for lift. The full-bleed red banner provides the strongest colour block.

## Shapes

Shape pairs a soft pill with a tight card corner: buttons are 32px radius (19 elements), cards 4px (22 elements), icon buttons and avatars 50% (18) and a few 10px (2). Tokens: xs 4px, sm 10px, md 32px, pill 9999px. The tabs in the utility bar and the search field are square.

## Components

- Primary button ("View details", "Shop TV bundles", "Get it now"): #da291c fill, white Ted Next Var 16px weight 600 with 0.4px tracking, 32px radius, 0 16px padding, 44px high, 1px #da291c border, with a trailing chevron; hover #ae2116.
- Outlined button ("Find a store"): transparent, red text, 1px red border, same radius.
- White pill on red ("Learn more" with an external-link icon).
- Navigation: 14px weight 500 white links on the red bar; the utility bar uses the same style on #1f1f1f.
- Search field: white input in the red bar with a magnifier icon, 46px high.
- Deal card: #fafafa or white, 4px radius, image on top, 24px bold title, short text and a full-width red pill.
- Offer tile: outlined box with a red line icon and a label.
- Notice strip: pale blue with an info icon and an inline link in #2f6fa7.

## Design System Architecture

No public design system documentation was opened. The stylesheet shows a design-system namespace: variables prefixed --ds- (--ds-red-light, --ds-blue-light, --ds-purple-light, --ds-purple-dark, --ds-focus, --ds-special-btn-letter-spacing .04rem, --ds-display-small-letter-spacing 0rem, --ds-display-medium-letter-spacing -.03rem, --ds-body-large-letter-spacing 0rem, --ds-display-medium-font-size-tablet 3.6rem), together with an icon font named rds-icon. The naming indicates a typographic scale with named roles (display small and medium, body large, special button) and tablet-specific sizes.

## Do's and Don'ts

Do:
- Use Rogers red for the main action as a 32px-radius pill with a trailing chevron.
- Keep headlines bold (700) with slightly negative tracking, and body at weight 500.
- Use 4px corners on cards and #fafafa or #1f1f1f panels.
- Show prices large with small unit and footnote markers.

Don't:
- Do not use the link blue #2f6fa7 for buttons.
- Do not use square buttons; the pill radius was measured on filled buttons.
- Do not add heavy shadows; only 1px 2px shadows were measured.
- Do not use the purple or light-red design-system tints as measured brand surfaces.

## Responsive Behavior

On the 390px mobile pass the display size is 30px (desktop 42px; line-height 33px). The mobile size distribution is 16px (2614 characters), 24px (425), 20px (310), 14px (207), 26px (195), 22px (183), 12px (85), 30px (75), 21.6667px (56) and 9px (2): the 36px heading becomes 26px and the 24px subheading 22px. Breakpoints, menu behaviour and card stacking were not measured.

## Iteration Guide

1. Use {colors.page-body} as the page background; {colors.surface-3} for card tints; {colors.surface-2} (#1f1f1f) for dark panels and dark text.
2. Place {colors.primary} on one pill {components.button-primary} per card.
3. Headlines {typography.display} and {typography.heading}; paragraphs {typography.body}.
4. Radii: {rounded.md} for buttons, {rounded.xs} for cards.
5. Validate with `node web/scripts/verify-designs.mjs --slug=rogers`.

## Content and imagery

Imagery mixes product renders (a dark-red phone in several poses, a smartwatch), lifestyle photography (a parent and child with a tablet on a sofa), sports action for the hockey offer, and streaming-service logos arranged as tilted tiles around a red phone for the "ONLY AT ROGERS" perks block. Each deal card carries a small red overline (for example "OUR BEST BUNDLE"), a bold sentence-case title, two short lines of offer detail with a bold "Limited time:" or "on us" emphasis, and a red pill. Prices appear in the copy with unit suffixes ("$0/mo", "$29.98/mo", "$75/mo with Auto-Pay"), and footnote numbers appear as superscripts, which is part of the measured microcopy style.
