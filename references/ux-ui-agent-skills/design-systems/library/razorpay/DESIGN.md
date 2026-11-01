---
version: alpha
name: Razorpay
category: "Design Systems"
description: "Razorpay marketing site: white and #f8fafc surfaces, navy ink #192839, electric blue #305eff action color, TASA Orbiter Display headlines (48px/56px) with Inter body (16px/24px), 4px 48px-high buttons, white cards with a soft 2px 16px shadow and full-bleed blue campaign banners."
colors:
  canvas: "#ffffff"
  ink: "#192839"
  primary: "#305eff"
  on-primary: "#ffffff"
  surface-subtle: "#f8fafc"
  surface-tint: "#f1f5fa"
  ink-muted: "#64748a"
  ink-alt: "#222222"
  ink-secondary: "#40566d"
  primary-deep: "#2950da"
  primary-hover: "#2950db"
  banner-blue: "#0239ff"
  accent-green: "#009e5c"
  ink-dark-teal: "#032a3e"
typography:
  display:
    fontFamily: "\"TASA Orbiter Display SemiBold\", \"TASA Orbiter Display SemiBold Placeholder\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
  display-mobile:
    fontFamily: "\"TASA Orbiter\", \"TASA Orbiter Placeholder\", sans-serif"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 48.3px
    letterSpacing: "-2.76px"
    textTransform: uppercase
  subheading:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 20px
  4xl: 40px
spacing:
  s1: 4px
  s2: 5.92px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 8.57px
  s7: 10px
  s8: 11.84px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
  nav:
    textColor: "{colors.ink}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(49, 49, 51, 0.1) 0px 2px 16px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    padding: 64px 60px 40px
---

## Overview

razorpay.com is the marketing site of an Indian payments and business-banking company. The measured page (title "Razorpay - Best Payment Solution for Online Payments India", language en-IN) is a very tall single scroll of about 12434px, built in Framer (the served HTML carries the generator tag "Framer 8ce50ff" and thousands of framer-* class names). It is organized around one electric blue, #305eff, set on white and cool off-whites (#f8fafc, #f1f5fa), with near-navy ink (#192839).

The capture opens with a thin translucent navigation bar (logo, Agentic Stack, Payments, Banking+, Payroll, Engage, Partners, Resources, Pricing, then a support icon, a country flag selector, an outlined "Login" and a filled blue "Sign Up"), then a hero carousel. The captured slide shows a two-tone headline, "Effortless Banking" in blue over "for India's boldest disruptors" in navy, a subline of three capabilities separated by pipes, a "Sign Up Now" button with an arrow, a text link "Know More", and a cut-out photograph of a man in a jacket at the right. Under it is a "Start your search" bar with pill shortcuts (Accept Payments, Make Payouts, Start Business Banking, Get Credit) and a logo strip of customers (CRED, bookmyshow, OLA, zomato, blinkit, zepto).

A first-party floating assistant panel named RAY overlays the right of the capture; it is a chat widget, so its buttons and field are not documented as brand components. Below come a full-width saturated blue banner with a "SPRINT/26" campaign and angled product mockups, a large statement headline with one green phrase ("finance platform"), and white sections with horizontally scrolling cards (Build AI Native, Accept Payments) with tab rows. The voice is confident and product-led, with short capability labels rather than long copy.

## Colors

Blue #305eff is the brand and action color: the primary button fill (white text), headline emphasis, and the text of the active tab and links. Its pressed or hovered form is #2950db and a deeper #2950da is the most-used link/accent text. A brighter #0239ff fills the large campaign banner, and a dark teal #032a3e is a large dark background area elsewhere on the page. Green #009e5c appears in the highlighted headline phrase and success contexts.

Ink is #192839 for headings and primary text, #40566d for body copy, #64748a for muted and footer text, and #222222 for some labels. Surfaces are white, #f8fafc and #f1f5fa. The site also exposes a long list of Framer design tokens as CSS custom properties (for example --token-… values such as #192839, #305eff, #009e5c, #48d08c, #4d7fff, #75a3ff) that restate this palette.

## Typography

Three families do the work. Headlines use TASA Orbiter Display (SemiBold and Regular files are loaded), measured at 48px with a 56px line height at weight 400 on the desktop h2 and 20px/26px on card titles. Body, buttons and subheads use Inter at 400, 500, 600 and 700: body is 16px/24px, primary button and subheading are 16px/24px at 600, navigation is 14px with -0.42px letter-spacing. The mobile campaign headline is TASA Orbiter at 46px/48.3px, uppercase, with -2.76px letter-spacing. Lato is used in the footer at 12px/18px and weight 500. Inter Tight is also loaded.

TASA Orbiter and Inter are both served as web fonts by the site, each with a Placeholder fallback face generated by Framer.

## Layout

The page is a full-bleed vertical stack of bands within a content width that leaves about 36px at either side of the capture scale. The hero is a split layout with copy left and a portrait right. Banners are rounded full-width panels, and product sections sit on a white sheet that overlaps a pale grey-blue ground, with card rows that scroll sideways under a section title and a tab strip.

Spacing is open: the footer is padded 64px 60px 40px, and many sections have large vertical gaps.

## Elevation & Depth

Depth is soft and light: cards use rgba(49, 49, 51, 0.1) 0px 2px 16px 0px. The navigation is a frosted white strip that lets the hero gradient show through. The assistant panel and its elements float above the page on a faint shadow. Color blocks (the blue banner, the dark-teal sections) create the strongest separation rather than shadow.

## Shapes

Buttons and cards use small radii: 4px on the primary button and cards, 8px on inner tiles and inputs (the most frequent measured radius, 190 uses), with 12px, 16px, 20px and 40px for larger containers and pills. Chips under the search bar are fully rounded. The primary button is 48px high with 16px text.

## Components

Primary button: #305eff fill, white Inter 16px at 600, 4px radius, 48px high with a trailing arrow icon. Hover darkens to #2950db. Outlined "Login": blue text and border on white. Text link: blue, with no underline in the nav. Pills: light-blue tinted chips with a small icon, used for search shortcuts. Cards: white, 4px radius, a media area above a 20px TASA Orbiter title and two lines of grey body, with the soft shadow. Tabs: plain text labels in a row, the active one set darker and bolder. Nav: 14px Inter in #192839 on a translucent bar.

The footer repeats the page's calm tone: white ground, #64748a text at 12px/18px in Lato, a 64px top padding and 60px side padding, and a long multi-column list of product and resource links under a short company description. The measured footer is 1075px tall, so it carries a significant share of the page's weight and acts as a site map for payments, banking, payroll and developer products.

## Design System Architecture

Razorpay has a public design system called Blade. The repository https://github.com/razorpay/blade describes it as the design system that powers Razorpay, a cross-platform (React and React Native) system under the MIT license, and https://blade.razorpay.com is its Storybook documentation, whose page I opened but whose content I could not read in the fetched text. The marketing site does not demonstrably use it: it is a Framer build, its tokens are Framer variables named --token-<uuid>, and the only appearance of the word is a Framer layer named "Blade-Button", which is a layer name rather than evidence of the library. For that reason no value here is taken from Blade; everything comes from the live measurements.

## Do's and Don'ts

Do use #305eff for the single main action and for the emphasized half of a two-tone headline, with navy #192839 for the other half. Do pair TASA Orbiter headlines with Inter body copy and keep buttons at 4px radius, 48px high. Do use full-bleed saturated blue panels for campaign moments.

Don't use the browser-default blue (#0000ee) for links; it appears in the measurements only as an unstyled anchor. Don't use heavy dark shadows. Don't reproduce the RAY chat widget as part of the brand UI.

## Responsive Behavior

The mobile pass of the page measures the campaign headline at 46px/48.3px in uppercase with tight -2.76px tracking, where the desktop shows 48px/56px headings in mixed case. Other breakpoint values were not measured, so none are stated here.

## Iteration Guide

Start with white and #f8fafc grounds, #192839 ink, and #305eff as the lone action color. Set headlines in TASA Orbiter Display 48px/56px, body in Inter 16px/24px, buttons 16px at 600 with 4px radius at 48px height. Add #0239ff only for full-bleed campaign panels and #009e5c for a single highlighted phrase. Keep cards white with rgba(49, 49, 51, 0.1) 0px 2px 16px 0px, and keep copy short and capability-led. Re-measure before adding any value.
