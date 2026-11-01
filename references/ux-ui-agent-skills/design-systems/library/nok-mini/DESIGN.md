---
version: alpha
name: "Nok Mini Airlines"
category: "Thai Brands"
description: "Nok Mini Airlines (nokmini.com) commuter-airline site: a boxed WordPress layout in Ubuntu 16px / 27.2px on white #ffffff over a #e6e6e6 base, #444444 text, a #16a1e7 active nav tab with white 12px bold caps, #0b91ea links and square corners."
colors:
  canvas: "#ffffff"
  page-body: "#e6e6e6"
  ink: "#444444"
  primary: "#16a1e7"
  on-primary: "#ffffff"
  surface-2: "#f2f2f2"
  surface-3: "#f3f3f3"
  link-blue: "#0b91ea"
  ink-3: "#888888"
  ink-4: "#6a6a6a"
  ink-5: "#666666"
  hairline: "#e9e9e9"
  text-input-text: "#000000"
  text-input-border: "#cccccc"
  footer-border: "#ededed"
  search-blue: "#00a1e0"
typography:
  display:
    fontFamily: Ubuntu, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
  display-mobile:
    fontFamily: Ubuntu, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: Ubuntu, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  button:
    fontFamily: Ubuntu, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 44.3077px
    textTransform: uppercase
  nav:
    fontFamily: Ubuntu, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  input:
    fontFamily: Ubuntu, Helvetica, Arial, sans-serif
    fontSize: 13.3333px
    fontWeight: 400
rounded:
  xs: 4px
  none: 0px
spacing:
  s1: 2px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 10.38px
  s7: 17px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 44px
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.link-blue}"
    rounded: "{rounded.none}"
    borderColor: "{colors.hairline}"
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px 10px
    height: 33px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 24px 0px
    borderColor: "{colors.footer-border}"
---

# Nok Mini Airlines

Nok Mini (https://www.nokmini.com/, title "Welcome to Nok Mini Airlines | Nok Mini Airlines") is the commuter airline operated by Siam General Aviation Company Limited, according to the page's own footer. The measured home page is a small WordPress blog-style site: a boxed white page on a blue photographic backdrop, a light-grey nav bar with a blue active tab, a single column of long justified text with a sidebar, and a grey footer. This document records what was measured.

## Overview

The page is only 1177px tall. A centred white container sits on a vivid blue sky-textured background above a plain #e6e6e6 base. At the top of the container is the Nok Mini logo (a stylised aircraft over a globe with "NOK mini" lettering) at the left and, at the right, a round blue Twitter icon and a broken "Follow us on Facebook" image link. A horizontal nav bar follows with ten items: HOME (active, white bold text on blue), DESTINATION, FLEET, CHECK-IN, MAINTENANCE CENTER, CAREERS, FAQ's, ABOUT US, CONTACT, set in small uppercase grey on a light-grey bar with a blue bottom rule.

The main column holds the h1 "Welcome to Nok Mini Airlines", a wide banner image of a purple-and-white aircraft in a blue sky, and three paragraphs of text with blue inline links (for example "Nok mini is the commuter airline", "destinations", "a luxury gift"). The copy explains that the airline connects small towns with low traffic demand, operates 12-seat airplanes with flight times from 20 minutes to under an hour, and gives first-time passengers a gift. A narrower right sidebar has a grey title bar, a search field with a blue "Search" button, and a video block titled "Nok Mini Saab 340B Chiang Mai to Mae Sot v.v. 2013" whose embed shows "Video unavailable". The footer line reads "© 2026 Siam General Aviation Company Limited (Nok mini Airlines) All Right Reserved. - Terms and Conditions".

The sidebar also contains a third-party sports-betting banner ("Visit our partners for the best deal in sports betting sites", with a broken image). It is an ad widget and is not documented as brand UI or tokens.

## Colors

- `canvas` #ffffff: the content box (1261 area units); `page-body` #e6e6e6: the outer page base visible under the blue backdrop.
- `surface-2` #f2f2f2 and `surface-3` #f3f3f3: the nav bar, sidebar title bars and footer.
- `ink` #444444: body and heading text (1219 characters).
- `primary` #16a1e7: the fill of the active HOME tab; its text `on-primary` is #ffffff.
- `link-blue` #0b91ea: links and nav text (97 characters). A second blue, #00a1e0, is measured as the Search button fill and one border.
- `ink-3` #888888, `ink-4` #6a6a6a, `ink-5` #666666: footer and nav greys (nav items measure #6a6a6a, turning #ffffff on hover).
- `hairline` #e9e9e9: nav border; `footer-border` #ededed; `text-input-border` #cccccc.

The WordPress block-editor presets on `:root` (vivid-cyan-blue #0693e3, vivid-red #cf2e2e, luminous-vivid-amber #fcb900, vivid-green-cyan #00d084, vivid-purple #9b51e0, pale-pink #f78da7, pale-cyan-blue #8ed1fc, cyan-bluish-gray #abb8c3) are WordPress defaults and are not brand colors.

## Typography

One family: Ubuntu, loaded at 400 and 700, with the stack Ubuntu, Helvetica, Arial, sans-serif. All 1495 measured characters use it.

- `display`: 28px / 33.6px, weight 400 (the h1). Mobile: 20px / 24px.
- `body`: 16px / 27.2px, weight 400 (1248 characters; the same on mobile).
- `button`: 12px / 44.3077px, weight 700, uppercase (nav tab).
- `nav`: 14px / 14px, weight 400.
- `input`: 13.3333px, weight 400 (the browser default size for the search field).

Other sizes: 13px (117 characters, sidebar and footer), 12px (73), 14px (29), 28px (28). Body copy is justified and hyphenated, which produces the visible word breaks ("beau-tiful", "pas-sengers"). Ubuntu is an open-source family, so no substitute is needed.

## Layout

A fixed-width centred boxed layout: the white container is inset from the viewport with a margin on each side, with a roughly two-thirds content column and a one-third sidebar separated by a hairline. Measured paddings: 20px (9), 10px (6), 5px, 8px, 24px, 17px, 7px, 30px, 10.375px and 2px. The measured nav tab is 44px tall and 76px wide with 0px 20px padding. The footer is 24px 0px padded with a #ededed border on a #f2f2f2 background.

## Elevation & Depth

No shadow was measured on a rendered element. The CSS corpus includes `inset 0 0 0 2px rgba(27,127,204,.8)` (a focus ring), `0 1px 1px rgba(0,0,0,.8)` and `0 1px 0 rgba(0,0,0,.05)`, plus the WordPress shadow presets (`6px 6px 9px rgba(0, 0, 0, 0.2)` "natural", `6px 6px 0px rgba(0, 0, 0, 1)` "crisp"), none of which were observed in use. The only depth cue is the white box over the blue photographic background.

## Shapes

The design is square. The primary tab has a 0px radius and every measured component is 0px except 2 elements at 4px (`rounded.xs`), which are the search field and button. The Twitter icon is round. The CSS corpus lists many other radii (2px, 8px, 18px, 12px, 28px), from library styles that are not visible on the home page.

## Components

- Nav bar: light-grey background, 14px items, #e9e9e9 border, with the active item as a #16a1e7 tab with white bold 12px uppercase text, 44px tall, 76px wide and 0px 20px padding.
- Inline link: #0b91ea text in body size.
- Search field: white fill, #000000 13.3333px text, 1px #cccccc border, 33px tall, padding 8px 10px; paired with a #00a1e0 "Search" button.
- Sidebar title bar: #f2f2f2 background with 16px text and a paragraph of copy.
- Footer: #f2f2f2 background, #444444 text, 24px 0px padding, small grey copyright line.

## Design System Architecture

No public design system or brand guideline was opened, and none was linked in the extraction. The site is a WordPress theme: the `:root` variables are the standard block-editor presets (`--wp--preset--color--*`, `--wp--preset--font-size--large` 36px, `--wp--preset--font-size--small` 13px, `--wp--preset--spacing--30` 0.67rem, `--wp--preset--spacing--50` 1.5rem, `--wp--preset--spacing--60` 2.25rem, `--wp--preset--spacing--70` 3.38rem, and `--wp--preset--shadow--*`). The brand is carried by the logo and a blue accent, not by a token set.

## Do's and Don'ts

- Do keep the boxed white layout on a light-grey base with a blue backdrop.
- Do use Ubuntu at 16px / 27.2px for body and 28px for the h1.
- Do use the blue #16a1e7 for the active nav tab and #0b91ea for links.
- Do keep corners square, with 4px only on the search control.
- Don't reproduce the sports-betting widget, the broken Facebook image or the "Video unavailable" embed as brand UI.
- Don't use WordPress preset colors as brand colors.
- Don't add shadows or gradients to controls.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 is 20px / 24px (28px on desktop), body text 16px / 27.2px, nav text 14px and the largest mobile sizes by character are 16px (1248), 13px (117), 14px (29) and 20px (28). Whether the nav collapses, how the sidebar stacks and the container width on mobile were not measured.

## Imagery and Voice

Imagery is a wide banner photograph of a livery aircraft against sky and cloud, a logo mark, and an embedded video. The copy is long-form and explanatory rather than promotional: it explains the commuter-airline concept, the 12-seat fleet, and the gift for first-time passengers, with a sentence structure that reads as translated prose. Link text is descriptive ("a luxury gift", "destinations", "About Us", "FAQ's").

## Iteration Guide

1. Start with a #e6e6e6 base, a white container and a #f2f2f2 nav bar with a #16a1e7 active tab.
2. Set Ubuntu 16px / 27.2px body, 28px h1, 12px bold uppercase tab labels.
3. Keep a two-column layout of content and a sidebar with grey title bars.
4. Use #0b91ea for links; keep corners square.
5. Exclude third-party ad widgets; re-run the gate after renames.
