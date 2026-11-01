---
version: alpha
name: Instructure
category: "Design Systems"
description: "Instructure's site is a Drupal-built marketing page in deep navy ink #061c30 on near-white #fefefe, with Circular-style 'circularxx' type at 48px bold with -3px tracking, cobalt #0e35b3 pill buttons (25px radius, 2px border), navy rounded stat cards, and a white mega-menu panel."

colors:
  canvas: "#fefefe"
  page-largest: "#061c30"
  ink: "#061c30"
  primary: "#0e35b3"
  on-primary: "#ffffff"
  surface-black: "#000000"
  ink-on-dark-muted: "#ffffffb3"
typography:
  display:
    fontFamily: circularxx, Arial, Helvetica, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
    letterSpacing: "-3px"
  heading:
    fontFamily: circularxx, Arial, Helvetica, sans-serif
    fontSize: 48px
    fontWeight: 800
    lineHeight: 55.2px
    letterSpacing: "-1.8px"
  subheading:
    fontFamily: circularxx, Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-1px"
  body:
    fontFamily: circularxx, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: circularxx, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 14px
  nav:
    fontFamily: circularxx, Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
rounded:
  xs: 2px
  sm: 10px
  md: 12px
  lg: 16px
  xl: 20px
  2xl: 24px
  3xl: 25px
  4xl: 70px
  pill: 9999px
spacing:
  s1: 10px
  s2: 11.2px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 25px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 12px 24px
    height: 42px
    borderColor: "{colors.primary}"
  button-primary-hover:
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 12px 24px
    height: 42px
    borderColor: "{colors.on-primary}"
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.page-largest}"
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
    padding: 10px 24px 10px 10px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.2xl}"
    padding: 16px 24px 24px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
---

## Overview

The Instructure home page is an education-technology marketing site, with the capture taken at a moment when the "About Us" mega-menu is open and covering the top of the page. Visible in it: a thin utility row (Partners, Support, Login, Explore Canvas, language EN), the "Instructure." logotype with a red full stop, a pill-outlined "Let's Connect" button, and a white panel titled "Our Mission" with three columns (Company Overview, Leadership, Careers) and a featured blog asset on the right. Below, an oversized centered headline reads "Welcome to the most-visited education website in the world.", followed by a staggered set of dark navy stat cards (8,000+ customers, 19M+ unique visitors annually, #1 LMS in the world, 2B assessment scores created via Mastery, 7K K-12 schools love Parchment) and a section "Solutions for every age, stage, and transitional moment" with documentary photographs of students, teachers and colleagues.

The tone is friendly, proud and numerate ("We love numbers here at Instructure, and it just so happens they love us back"), with plain headings, large numerals and warm photography of diverse learners. The structure alternates white reading areas with saturated navy blocks.

## Colors

`{colors.canvas}` (#fefefe) is the page ground. `{colors.ink}` (#061c30) is both the text color and the main dark surface; the capture's largest filled areas are this navy (`{colors.page-largest}`, same hex) on the stat cards and footer. `{colors.surface-black}` (#000000) appears as a black background region. On dark surfaces the secondary text is `{colors.ink-on-dark-muted}` (#ffffffb3), white at about 70% opacity.

The one chromatic action color is `{colors.primary}` (#0e35b3), a deep cobalt blue, used for the solid pill button fill, its 2px border, kicker labels such as "Article" and "Blog", and the highlighted "About Us" menu item. `{colors.on-primary}` (#ffffff) is the text on it. Red appears in the logotype's full stop, but no red hex is measured elsewhere on the page and none is declared here. Hover behavior on the primary button inverts it: the fill turns transparent and the label takes the cobalt color.

## Typography

All text is set in a family loaded as **circularxx** (weights 400, 500 and 700) with Arial and Helvetica as fallbacks. Headline sizes are large with tight negative tracking: the h1 is 48px/56px bold with -3px letter-spacing (`{typography.display}`), the section h2 is 48px/55.2px at weight 800 with -1.8px (`{typography.heading}`), the K-12 style sub-headings are 32px/40px bold with -1px (`{typography.subheading}`). Body text is 16px/25.6px regular (`{typography.body}`). Buttons are 16px bold (`{typography.button}`) and the utility navigation is 12px regular (`{typography.nav}`). The Arial in the page's own fallback list is the substitute if the proprietary family is unavailable; the tight tracking should be kept only with the original face, because Arial at -3px will crowd.

## Layout

Content is centred and the headline block is centred over a left-aligned card cluster. The stat cards form a staggered 2-2-1 pyramid of unequal widths centred in the page rather than a uniform grid. The header has two rows: a small utility nav and the primary nav with the logotype at left and a pill CTA at the far right. Measured spacing steps cluster at 10, 12, 16, 20, 24, 32, 40 and 48px (`spacing` tokens), with 25px and 11.2px values also measured.

## Elevation & Depth

The page is mostly flat. One soft shadow was measured: a 30px blur with 10px spread at about 7% teal-navy opacity under the open mega-menu panel, which lifts the white sheet off the page. Cards are separated from the white canvas by fill alone (navy on white) rather than by borders or shadows.

## Shapes

Shapes are strongly rounded. Buttons are pills with a measured radius of `{rounded.3xl}` (25px); stat cards use `{rounded.2xl}` (24px) or `{rounded.xl}` (20px), the photo cards and image frames `{rounded.lg}` (16px) or `{rounded.md}` (12px), small details `{rounded.sm}` (10px) and `{rounded.xs}` (2px), and the largest measured corner is `{rounded.4xl}` (70px); the full-pill value is `{rounded.pill}`. Paired segments in a group measure 20px on only two corners each, which forms a split-pill shape.

## Components

**Primary button** (`button-primary`): cobalt #0e35b3 fill, white 16px bold label, 2px cobalt border, 12px 24px padding, 42px height, 25px radius. On hover the fill clears and the text becomes cobalt (`button-primary-hover`).

**Secondary button** (`button-secondary`): white fill and white border with navy label, same geometry, intended for use on dark navy blocks ("Book a meeting").

**Navigation**: 12px navy utility links with underline on hover; primary navigation links in a larger size with a soft tinted pill for the active item; "Let's Connect" outlined pill at right.

**Stat card** (`card`): navy background, white text, 24px radius, padding 16px 24px 24px, with a giant numeral, a bold label and a small description.

**Footer** (`footer`): navy background with white text and an address block.

## Design System Architecture

Instructure publishes an open-source design system, [Instructure UI](https://instructure.design) (InstUI), whose [README](https://github.com/instructure/instructure-ui) and [llms.txt catalog](https://instructure.design/llms.txt) call it "an open source UI framework and design system for React" used by Canvas LMS and other Instructure products (the catalog lists version 11.7.8 and accessibility targets of WCAG 2.1 AA/AAA). That is the product-UI system; it is not what instructure.com is built with. The marketing site's HTML is a Drupal 11 site (the generator meta tag reads Drupal 11) with a custom theme named `inst` whose stylesheets are component-scoped files such as `cta-standard`, `stat-cards-v2`, `logo-grid`, `customer-testimonials`, `menu-callout`, `menu-tabs` and `header-slide`, and the page HTML contains no InstUI markers. Its root custom properties are the default Tailwind variable set (`--color-*`, `--radius-*`, `--shadow-*`, `--spacing`, `--text-*`, `--breakpoint-*`) alongside theme CSS, so the de-facto system is a Drupal component library with Tailwind utilities on top. For that reason the InstUI documentation was not used to set any value in this file, and its components were not measured.

## Do's and Don'ts

- Do use a tight-tracked bold headline and let a dark navy block carry numbers in white.
- Do keep primary buttons as 25px-radius pills with a 2px border so the hover inversion reads.
- Do use navy cards on white and white cards on navy for rhythm.
- Do show real people in warm documentary photography.
- Don't use cobalt for large fills; it is an action and label color.
- Don't add drop shadows to cards; the panel under the mega-menu is the only measured shadow.
- Don't set the display weight lighter than 700.
- Don't copy InstUI Canvas styling onto this marketing site.

## Responsive Behavior

Only the desktop viewport and the first heading were assessed in detail; the mobile viewport measurement is not reproduced in the tokens, so no breakpoint behavior is stated beyond the Tailwind breakpoint variables present in the CSS (`--breakpoint-lg`, `--breakpoint-xl`, `--breakpoint-2xl`). The staggered 2-2-1 card pyramid and the two-row header are desktop compositions and would need to be restacked for narrow screens.

## Iteration Guide

1. Start with `{colors.canvas}` and `{colors.ink}`; use `{colors.page-largest}` blocks for emphasis.
2. Use `{typography.display}` with its -3px tracking for hero statements only.
3. Build every CTA from `button-primary` and its hover inversion; use `button-secondary` on navy.
4. Round everything: pills for buttons, 24px for cards, 16px for images.
5. Keep shadows to a single soft lift on overlays.
6. Pair numerals with one-line labels and a two-line description, as the stat cards do.
