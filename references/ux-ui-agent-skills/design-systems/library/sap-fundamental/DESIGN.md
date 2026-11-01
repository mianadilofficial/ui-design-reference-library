---
version: alpha
name: SAP (sap.com)
category: "Design Systems"
description: "SAP's product pages: the proprietary 72 Brand Variable typeface (Arial fallback) in medium weight, near-black navy text (#223548) on white, a single saturated blue (#0057d2) for the floating Contact us button and every link, a pale blue hero band (#ebf8ff), 8px-radius buttons with a soft blue-grey drop shadow, and a dark #222222 footer."

colors:
  canvas: "#ffffff"
  ink: "#223548"
  ink-strong: "#000000"
  ink-slate: "#354a5f"
  ink-muted: "#475e75"
  ink-nav: "#545454"
  primary: "#0057d2"
  primary-hover: "#0040b0"
  on-primary: "#ffffff"
  surface-hero: "#ebf8ff"
  surface-grey: "#eaecee"
  footer-bg: "#222222"
  nav-bg: "#f5f6f7"
  hairline: "#d5dadd"
typography:
  display:
    fontFamily: "\"72 Brand Variable\", Arial, Helvetica, \"sans-serif\""
    fontSize: 36px
    fontWeight: 500
    lineHeight: 39.6px
  display-mobile:
    fontFamily: "\"72 Brand Variable\", Arial, Helvetica, \"sans-serif\""
    fontSize: 28px
    fontWeight: 500
    lineHeight: 30.8px
  heading:
    fontFamily: "\"72 Brand Variable\", Arial, Helvetica, \"sans-serif\""
    fontSize: 32px
    fontWeight: 500
    lineHeight: 35.2px
  subheading:
    fontFamily: "\"72 Brand Variable\", Arial, Helvetica, \"sans-serif\""
    fontSize: 20px
    fontWeight: 500
    lineHeight: 22px
  body:
    fontFamily: "\"72 Brand Variable\", Arial, Helvetica, \"sans-serif\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"72 Brand Variable\", Arial, Helvetica, \"sans-serif\""
    fontSize: 18px
    fontWeight: 500
    lineHeight: 19.8px
  link:
    fontFamily: "\"72 Brand Variable\", Arial, Helvetica, \"sans-serif\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 17.6px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 21.6px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px 20px
    height: 58px
    borderColor: "{colors.canvas}"
    boxShadow: rgba(34, 54, 73, 0.25) 0px 10px 30px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 5px 0px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-nav}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
  hero-band:
    backgroundColor: "{colors.surface-hero}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.display}"
---

## Overview

This capture is SAP's "SAP Products" page at sap.com, an enterprise software catalogue rather than a campaign page. It is calm, text-led and very regular. A slim light-grey global bar (`nav-bg`) carries the SAP logo, eight sentence-case menu items (Products, Industries, Transform and Support, Learning, Community, Partners, About) and utility icons. Under it a pale blue band (`surface-hero`, #ebf8ff) holds the h1 "SAP Products" in near-black. The rest is a two-column list of portfolio categories: each has a bold name, one or two lines of description, and a blue "Learn more about SAP ..." link with a chevron. A sticky sub-navigation (All products, Overview, Products A-Z, Try and Buy) sits mid-page, and one floating blue "Contact us" button anchors the bottom right.

There is no photography above the fold, no gradients and no decorative illustration in the first screens; the brand shows through one blue, one typeface and generous white space. Copy is declarative and benefit-led ("Run your business from anywhere using complete, modular solutions driven by built-in AI and analytics").

## Colors

`canvas` is #ffffff and dominates the page. Body copy and most headings use `ink` #223548, a blue-tinted near-black that the extractor found to be by far the most-read text colour; the h1 alone is set in pure `ink-strong` #000000. Secondary text steps are `ink-slate` #354a5f and `ink-muted` #475e75, with `ink-nav` #545454 for the menu labels.

`primary` is #0057d2, the fill of the Contact us button and the colour of every in-page link; `primary-hover` is #0040b0, the hover state of the button. `on-primary` is #ffffff. Neutral surfaces: `surface-grey` #eaecee, `nav-bg` #f5f6f7, and `hairline` #d5dadd for dividers such as the rule above "Featured products". `surface-hero` #ebf8ff is the pale blue behind the h1 and `footer-bg` #222222 is the dark footer. The site declares a much larger set of colour variables (accents, charts, status colours); none of those appear as UI on this capture and they are not included.

## Typography

The only family is "72 Brand Variable", loaded as a variable font covering weights 100 to 900, with Arial and Helvetica as declared fallbacks. Headings sit at medium weight 500, not bold: the h1 `display` is 36px with a 39.6px line height (28px on the 390px mobile width), the section `heading` is 32px, and the `subheading` used for category names is 20px. `body` is 16px regular on a 24px line height, buttons are 18px weight 500, and `link` is 16px weight 500. Line heights for headings are a tight 1.1.

Substitutes: 72 is SAP's own typeface and is not generally available as a web font outside SAP's theming package; Arial or Helvetica are the declared fallbacks and give a similar neutral grotesque tone, though wider than 72.

## Layout

A single left-aligned content column inside page margins, two text columns for the portfolio list, and a wide horizontal gap between those columns. Vertical rhythm is open: category blocks are separated by large bands of white space, and the section titles sit well above their intro paragraphs, so each group reads as its own small chapter and the eye can scan the list quickly without needing dividers or boxes. The spacing scale in the file runs 2, 3, 5, 8, 12, 16, 20, 21.6, 24 and 32px, with components using 8 to 24px and sections relying on whitespace beyond the scale. Intro paragraphs are held to a narrower measure than the columns beneath them, which keeps them to two lines and leaves the right side of the page empty on purpose.

## Elevation & Depth

Depth is limited to two devices. The floating Contact us button carries a large soft shadow, `rgba(34, 54, 73, 0.25) 0px 10px 30px 0px`, in the navy of the ink colour, so it lifts clearly over the page content. Elsewhere the page is flat: thin 1px hairline rules, a faint sticky-nav border, and colour bands. The site's variables also declare a smaller card shadow (0 2px 8px at roughly 30% navy) but it is not visible in this capture.

## Shapes

Buttons use `rounded.md` 8px. The scale otherwise runs `rounded.xs` 2px, `rounded.sm` 4px, `rounded.lg` 12px and `rounded.pill` 9999px for circular avatar and icon buttons in the header (the profile avatar in the capture is a circle). The Contact us button also has a 2px white border, which separates it from content beneath it.

## Components

- **Contact us button.** `button-primary`: #0057d2 fill, white 18px label at weight 500, 8px radius, 16px by 20px padding, 58px tall, 2px white border, drop shadow as above, with a chat-bubble icon. Hover darkens to `primary-hover`.
- **Text link.** `link`: 16px weight 500 in primary blue, with a small chevron following the text, 5px vertical padding.
- **Category block.** Not a card: just a 20px bold-ish name, a 16px description and a link, with no border or fill.
- **Global nav.** `nav` is a #f5f6f7 bar with #545454 labels and icons for search, user and region.
- **Sub-navigation.** A tab strip with an underlined active tab, using the same blue.
- **Footer.** `footer` is a #222222 block with white text.

## Design System Architecture

SAP publishes [Fundamental Library Styles](https://sap.github.io/fundamental-styles), described on its [GitHub repository](https://github.com/SAP/fundamental-styles) as a lightweight, framework-agnostic CSS library using the `fd-` class prefix and `--sap` custom properties from `@sap-theming/theming-base-content`, with the 72 typeface supplied through that package. The sap.com page itself shows a related but different picture. Its root declares hundreds of `--sap*` custom properties (button, content, shell and chart parameters), a `--udex*` namespace (colour ramps, grid sizes, typography weights) and `--ds-*` component variables for buttons, breadcrumbs and secondary navigation. The extracted CSS contained no `fd-` class names, so I cannot confirm that sap.com uses Fundamental Styles components; the fundamental-styles site is real, and the shared `--sap` naming and the 72 font are the only overlap seen. This file therefore takes no values from that library and describes the de-facto system on sap.com from its own shipped variables.

## Do's and Don'ts

- Do use #0057d2 only for links and the one primary action; darken to #0040b0 on hover.
- Do set headings at weight 500 in `ink` or `ink-strong`; avoid bold 700.
- Do keep pages white with whitespace as the structure, adding the pale #ebf8ff band only behind the page title.
- Don't add borders or fills around category blocks.
- Don't use shadows other than on the floating action button.
- Don't use browser-default link colours.
- Don't use more than one blue.

## Responsive Behavior

The site's variables declare grid sizes up to 1599px max width, so the layout stops growing on very wide screens. The floating Contact us button remains fixed in the corner on all widths. The h1 drops from 36px to 28px at 390px wide. Portfolio list columns and global bar behaviour at that width were not measured.

## Iteration Guide

1. Begin with `canvas`, `ink` and the 72 / Arial stack; headings at weight 500.
2. Add the blue for links and one primary button; keep hover at #0040b0.
3. Lay out content as plain text blocks in a two-column grid with generous gaps.
4. Reserve shadow for the floating action button; everything else is flat.
5. If a value is not among the measured tokens, leave it out rather than borrowing from the Fundamental Styles library.
