---
version: alpha
name: Thailand Board of Investment (BOI)
category: "Thai Brands"
description: "Thailand Board of Investment English site (boi.go.th/en): white canvas with navy #003471 utility bar and footer, PT Sans 16px body and uppercase 18px navigation, blue #0b5aa2 tile strips, 3-10px radii and Material-style card shadows."
colors:
  canvas: "#fffffe"
  page-body: "#ffffff"
  ink: "#333333"
  accent-yellow: "#ffff00"
  primary: "#003471"
  ink-dark: "#262626"
  ink-black: "#000000"
  brand-blue: "#0b5aa2"
  navy-deep: "#01184a"
  hairline: "#cccccc"
  link: "#337ab7"
typography:
  display:
    fontFamily: "\"PT Sans\""
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
  subheading:
    fontFamily: "\"PT Sans\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  button-secondary:
    fontFamily: "\"PT Sans\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.8571px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 10px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 15px
  s10: 18px
components:
  button-secondary:
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 37px
  link:
    textColor: "{colors.link}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-black}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.subheading}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    boxShadow: rgba(0, 0, 0, 0.16) 0px 3px 6px 0px, rgba(0, 0, 0, 0.23) 0px 3px 6px 0px
---

# Thailand Board of Investment (BOI)

## Overview
The measured site is boi.go.th/en/index/, the English home page of the Thailand Board of Investment, the Thai government agency that promotes foreign and domestic investment. The language attribute is `en`; banners and some tiles are in Thai. The footer gives the address "555 Vibhavadi-Rangsit Road, Chatuchak Bangkok 10900 Thailand" and a W3C WAI-AAA WCAG 2.0 badge and an IPv6 badge, and a visitor counter.

It is a classic government portal built in layers. A navy utility bar at the top carries a site map link, social icons, Contact Us, Web Feedback, a font-size control (three "A" buttons), a contrast switcher with three small boxes, a language selector (English), Subscribe and Search. Below it is a white band with the BOI logo (a gold swirl with "THAILAND BOARD OF INVESTMENT") and five outlined rounded-box shortcuts: Thailand FastPass, e-Services, BOI Guide, FAQ and Contact Us, each with a colored icon. The primary navigation row is uppercase: ABOUT US, WHY INVEST IN THAILAND, HOW TO DO BUSINESS, INVESTMENT PROMOTION, RESOURCE CENTER. Under it is a rotating banner with a light blue-white background and a gold wave at its bottom edge, announcing an e-Monitoring notice with a red button graphic. A strip of six navy quick-link tiles with line icons follows (Eligible Activities, Criteria for investment promotion, How to Apply for BOI Promotion, BOI Announcement, Statistics, Publications). Then a four-column content block: a poster image, "BOI EVENTS AND ACTIVITIES" with a photo, a "BOI Updates" link list with chevrons, and a dark "Highlight" card; a final row of four large icon links (Get to Know BOI, Cost of Doing Business, Business Opportunities, How to Do Business). The footer is a deep navy block.

A floating LINE chat button and a scroll-to-top button sit at the right of the capture; they are controls and not brand UI.

## Colors
Backgrounds by area: white `#ffffff` (2,509), off-white `#fffffe` (270, the body canvas), a translucent blue `#0555a5d9` (196, the quick-link tiles), navy `#003471` (192, the utility bar and footer family), `#223c78` (94), `#a6a9a9a9` (26) and `#cccccc`. Text by characters: white (568), `#333333` (240, body text and `ink`), `#262626` (83), black (58), blue `#0b5aa2` (36), deep navy `#01184a` (9), `#666666` and a pale `#e4ecfa`.

The generator's primary was `#ffff00` (a single yellow character in the text table, not a call-to-action fill); it is kept as `accent-yellow` and navy `#003471`, the dominant brand block on the utility bar and footer, is promoted to `primary`. This is a judgment call based on measured area, not on a measured button. The hover record shows the "Site Map" link going from white to `rgb(0, 174, 239)`, matching the `#00aeef` cyan found 29 times in the CSS corpus. The stylesheet's link blue `#337ab7` (26 uses) and `#3498db` border are Bootstrap-era defaults, kept only as the link role. The `--cc-*` root variables belong to a cookie-consent library and are not brand tokens.

## Typography
PT Sans is the only font (1,006 characters); the loaded faces are PT Sans 400 plus FontAwesome 4 and Font Awesome 5 Brands icon fonts. PT Sans is an open font (Paratype, available on Google Fonts), so it can be used directly.

Measured roles: display 36px / 36px weight 700 (the "Highlight" card heading); subheading 16px / 19.2px weight 400 (links and tile labels); secondary button 16px / 22.86px weight 600. By characters the sizes are 16px (532), 14px (125), 19.2px (97), 18px (83, the uppercase navigation with 0.8px letter-spacing), 22.4px (77), 15px, 20px, 36px and 13px. Weights: 400 (556), 700 (251), 200 (97), 600 (97), 500 (5). No Thai font is measured, though banners contain Thai text set as images or in the fallback font.

## Layout
The desktop pass is 1280px wide and 1,732px tall. Content sits in a centered column with a four-up module row: poster, events, updates, highlight. Spacing is utility-driven: 15px (31 uses), 10px (27), 8px, 7px, 3px, 12px, 20px, 25px, 13px, 50px; a uniform 10px gap (12 uses). The six quick-link tiles are equal-width cards with an icon above a navy label strip.

## Elevation & Depth
Shadows are those of a Material-style card: `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px, rgba(0, 0, 0, 0.23) 0px 3px 6px 0px` (3 uses), a hairline `rgba(0, 0, 0, 0.75) 0px 0px 1px 0px` (3), an inset `rgba(51, 51, 51, 0.1) 0px 0px 10px 0px inset` and a soft `rgba(18, 22, 33, 0.1) 0px 8px 16px 0px`. Cards float modestly above the white page.

## Shapes
Radii: 50% (8 elements, round icons and dots), 5px (7), 3px (5), 10px (5, shortcut boxes and cards), `0px 0px 12px 12px` (2, bottom-rounded panels) and 4px (1). Buttons use 4px; shortcut boxes and tiles use 5-10px.

## Components
- **button-secondary (utility links):** white text, PT Sans 16px weight 600, radius 4px, padding 6px 12px, height 37px, no fill (on the navy bar); hover changes text to cyan `#00aeef`.
- **link / nav-link:** `#337ab7`, 16px / 19.2px.
- **nav:** white band, black uppercase 18px items with 0.8px letter-spacing.
- **card:** `#fffffe` fill with the two-layer shadow.
- **Quick-link tile:** blue translucent `#0555a5d9` label strip, white 14-15px label, line-art icon above.
- **Shortcut box:** white with a 1px blue-teal border and 10px radius, an icon and a short label.

The microcopy is institutional and procedural: tile labels name government steps (eligible activities, criteria, how to apply, announcements, statistics, publications), news items are headed by plain categories (Press Release, Seminar/Events, Interesting News, News from other agencies, What Investors Say, Presentations), and the highlighted story is a policy headline about a national semiconductor strategy and an investment target. Social channels are listed with small handles (BOI News, BOI Podcast, Think Asia, Invest Thailand) in a thin row under the banner, which gives the portal a media-and-service double role: it both announces policy and routes visitors to the application services.

## Design System Architecture
No public design system or brand guideline was found; the home page navigation lists about, investing, business, promotion and resource sections, and the web accessibility controls (font size, contrast, a WCAG badge) are built into the header rather than documented as a system. The de-facto system is a Bootstrap-era theme (links `#337ab7`, FontAwesome 4 and 5, a carousel) with a cookie-consent library whose `--cc-*` variables occupy most of the root variables.

## Do's and Don'ts
- Do use navy `#003471` for the utility bar and footer and `#0b5aa2` for emphasis text.
- Do keep the accessibility controls (font size, contrast) in the header.
- Do set navigation in uppercase PT Sans with 0.8px letter-spacing.
- Do pair each quick link with a simple line icon above a short label.
- Don't treat the LINE and scroll-top floating buttons or the cookie library as brand UI.
- Don't use `#ffff00` as a button color; it was measured only as one character of text.
- Don't use heavy radii; the system is 3-10px.

## Responsive Behavior
Mobile (390px) is not measured for the real layout: the mobile pass recorded only a "toggle menu" icon (0px font) and a body at 16px / 20.8px. Breakpoints and column collapse are not measured.

## Iteration Guide
1. White canvas, navy `#003471` bars, `#333333` text.
2. PT Sans at 14 / 16 / 18 / 36px; uppercase 18px navigation.
3. Cards with the two-layer 3px 6px shadow and 5-10px radii.
4. Cyan `#00aeef` for hover states.
5. Verify with `node web/scripts/verify-designs.mjs --slug=thailand-board-of-investment`.
