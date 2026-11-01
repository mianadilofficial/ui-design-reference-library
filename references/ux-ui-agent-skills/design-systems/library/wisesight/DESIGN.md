---
version: alpha
name: Wisesight
category: "Thai Brands"
description: "Wisesight (Thai social data analytics) design system: Kanit headlines at 86px weight 500, light Sarabun body, white canvas, near-black navy #101820 pill buttons, maroon #850219 accent and 12px cards."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#101820"
  on-primary: "#ffffff"
  surface-subtle: "#fafafa"
  ink-body: "#40464d"
  ink-secondary: "#585d63"
  ink-muted: "#8c9094"
  hairline: "#eeeff0"
  accent-maroon: "#850219"
  primary-hover: "#1f2c38"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 86px
    fontWeight: 500
    lineHeight: 103.2px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  heading:
    fontFamily: Kanit, sans-serif
    fontSize: 69px
    fontWeight: 500
    lineHeight: 82.8px
  subheading:
    fontFamily: Kanit, sans-serif
    fontSize: 23px
    fontWeight: 500
    lineHeight: 27.6px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 23px
    fontWeight: 200
    lineHeight: 34.5px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 23px
    fontWeight: 400
    lineHeight: 34.5px
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 200
    lineHeight: 27px
  link:
    fontFamily: Kanit, sans-serif
    fontSize: 23px
    fontWeight: 200
    lineHeight: 34.5px
  button-secondary:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
rounded:
  xs: 3px
  sm: 12px
  md: 20px
  lg: 24px
  xl: 30px
  2xl: 50px
  3xl: 60px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 20px 40px
    height: 72px
    boxShadow: rgba(16, 24, 32, 0.18) 0px 4px 12px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 4px 16px
    height: 39px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-body}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    height: 29px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 40px
  footer:
    textColor: "{colors.ink}"
---

# Wisesight

## Overview
Wisesight is a Thai social-data and social-listening company; the page title is "WISESIGHT | Empowering brands with social data". The home page opens with the large headline "Analyze Insights with Ultimate Intelligent Solution" in maroon-to-black gradient type, a floating utility strip (Wisesight AI, Regional, Contact, English, search), and a header with the red-ringed "W" logo and WISESIGHT wordmark, menus for Our Solutions, Resources and Company, a "Login" outline pill and a black "Call Us" pill. A grey introductory paragraph ("Understand more about your customers by listening to their voices and analyzing unlimited data...") leads into three large maroon statistics (300 +, Over 15 M., 360°) and two buttons, "Book a Meeting" (filled near-black) and "Plan Your Solution" (outlined). Product sections follow with a small maroon kicker ("Customer Insights", "Customer Interaction"), a large Kanit heading and dashboard screenshots with donut and line charts on the right. The voice is enterprise-analytical in English: measured claims, product names (Zocial Eye, Research, Influencer Directory) and demo-driven calls to action.

## Colors
The action color is a near-black navy `#101820` (the "Book a Meeting", "Call Us" and "Login" buttons; hover `#1f2c38`). The brand accent is a deep maroon `#850219` used for the kickers, statistics, headline gradient (from `rgb(133, 2, 25)` to `rgb(16, 24, 32)` at 90 degrees) and the logo mark. The canvas is white `#ffffff` with `#fafafa` as a subtle surface band. Text hierarchy: `#333333` for headings (720 characters), `#40464d` for body links and the Our Solutions heading, `#585d63` for descriptive copy, `#8c9094` for muted nav and input text, and `#e1e2e3` and `#bbbbbb` in small amounts. Hairlines are `#eeeff0`. The root variables include WordPress preset colors (`--wp--preset--color--vivid-purple` `#9b51e0`, `--wp--preset--color--pale-pink` `#f78da7`, `--wp--preset--color--cyan-bluish-gray` `#abb8c3`); these are framework defaults, not brand colors, and are not used here.

## Typography
Kanit carries headings, buttons and navigation; Sarabun carries body copy (1,683 measured characters against 769 for Kanit). Loaded files: Sarabun 200, 300, 400, 700 and Kanit 200, 300, 400, 500. The h1-style headline is Kanit 86px weight 500, line-height 103.2px; the h2 "Discover Real Insights with a Powerful Social Data Analytics Solution" is Kanit 69px weight 500 with 82.8px line-height, and the headline mixes weights (bold first words, light last words) as shown in the capture. Subheadings are Kanit 23px weight 500; body is Sarabun 23px weight 200 with 34.5px line-height; buttons are Kanit 23px weight 400; navigation is Kanit 18px weight 200; the small outlined pills use 18px weight 500. Weight 200 is the most common (917 characters), giving the site a distinctly light, airy tone. Both fonts are open Google fonts with Thai support; no substitute is needed.

## Layout
The desktop capture is 1,265px wide and 6,040px tall. Content sits in a left-aligned column roughly 40 percent of the width, with large screenshots occupying the right; sections alternate text-left and text-right (the "Customer Interaction" block puts text on the right and its screenshot on the left). The statistic row has three equal columns separated by thin vertical rules, and the two main buttons are centered below it. Measured paddings are 5px, 20px, 8px, 10px, 12px, 16px, 40px and 60px; gaps are 8px, 5px, 16px and 32px. White space between sections is large.

The type scale is therefore unusually wide: tiny 10px and 14px interface text coexists with 69px and 86px display headings, and the middle of the scale (23px, 28px) does most of the reading work. Display headings are left-aligned, break across four or five lines in the narrow text column, and are never centered, except for the opening headline block above the statistics.

## Elevation & Depth
There is one measured shadow, `rgba(16, 24, 32, 0.18) 0px 4px 12px 0px`, on the filled "Book a Meeting" button. Dashboard screenshots appear as floating white cards with their own soft shadows in the images, and the utility strip floats above the header. Otherwise the page is flat: depth is created by borders (`#eeeff0`) and by overlapping screenshots.

The header is organized in two tiers: a faint grey utility strip with Wisesight AI, Regional, Contact, a language switch (English, ไทย) and a search icon, above the main bar with the logo, three dropdown menus and the Login and Call Us pills. The pale `#fafafa` surface is used to separate the strip and some bands from the white canvas, and the hairline `#eeeff0` draws the statistic dividers and card edges.

## Shapes
Buttons are very round: the large "Book a Meeting" button uses 60px radius, the small header pills use 9999px (`rounded.pill`), and other containers use 30px (12 uses), 24px, 50px, 20px and 12px. Text inputs use 3px. The consistent idea is oversized rounding on actions and moderately rounded 12px cards.

## Components
**button-primary**: `#101820` fill, white text, Kanit 23px weight 400, radius 60px, padding 20px 40px, height 72px, shadow `rgba(16, 24, 32, 0.18) 0px 4px 12px 0px` ("Book a Meeting", 266px wide); hover fill `#1f2c38`.
**button-secondary**: `#101820` fill, white Kanit 18px weight 500, pill radius, padding 4px 16px, height 39px ("Call Us"), with the outlined "Login" twin using a `#101820` border.
**link**: Kanit 23px weight 200 in `#40464d`.
**nav-link**: Kanit 18px weight 200 in `#8c9094`.
**text-input**: white, 3px radius, 29px high, text `#8c9094`.
**card**: white, 12px radius, 40px padding, text `#333333`.
The chat-bubble icon at the right of the capture is a third-party messenger widget and is not tokenized. A popup modal (elementor-popup-modal-24152) was hidden by the measurement and is not documented.

## Design System Architecture
No public design-system or brand-guideline page was found; the home page did not link one. The site is a WordPress/Elementor build (the extracted root variables are `--wp--*` presets and Tailwind ring variables such as `--tw-ring-shadow`, and the popup was an Elementor modal). The de-facto system is therefore the repeated set of values: navy `#101820`, maroon `#850219`, Kanit plus Sarabun, oversized pill buttons and 12px cards.

## Do's and Don'ts
- Do use `#101820` for filled actions and `#850219` for kickers, numbers and gradient headlines.
- Do mix light and bold weights inside one Kanit heading.
- Do keep body copy in light Sarabun (weight 200) at 23px with 34.5px line-height.
- Do round primary buttons heavily (60px) and header pills fully.
- Don't use WordPress preset colors as brand colors.
- Don't add heavy shadows; one soft shadow is measured.
- Don't treat the messenger widget as part of the brand UI.

## Responsive Behavior
At the 390px mobile pass the gradient headline "Analyze Insights" measured Kanit 40px, weight 500, line-height 48px in a 299px block (86px on desktop). The "Book a Meeting" button measured Kanit 16px, weight 400, line-height 24px on mobile (23px and 34.5px on desktop) with the same 60px radius and the same shadow. Mobile font sizes by character count: 14px (835), 18px (832), 16px (154), 33px (137), 15.6px, 10px, 23px, 32px and 40px. Desktop sizes by character count are 23px (662), 14px (494), 18px (348), 15px (341), 28px (176), 69px (171), and larger display steps at 60px, 55px, 44px and 86px. Navigation collapse behavior, breakpoint widths and the mobile layout of the screenshots and statistic row were not measured.

## Iteration Guide
1. Use canvas `#ffffff`, ink `#333333`, primary `#101820`, accent `#850219`.
2. Set display text in Kanit 500 at 86px/103.2px, with light-weight tails.
3. Add a three-column stat row in maroon with vertical hairlines.
4. Use pill buttons, one filled and one outlined.
5. Place dashboard screenshots as floating cards beside each section.
6. Re-run the gate after changes.
