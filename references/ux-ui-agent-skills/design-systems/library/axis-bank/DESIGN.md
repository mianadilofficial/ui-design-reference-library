---
version: alpha
name: Axis Bank
category: "Design Systems"
description: "Axis Bank retail portal: deep burgundy #97144d on white and #f1f4f7, set in Lato (40px/54.4px headlines, 16px/24px body), 8px buttons, 12px cards with a wide soft shadow, and an italic burgundy open-to device repeated across rounded gradient sections."
colors:
  canvas: "#ffffff"
  page-largest: "#f1f4f7"
  ink: "#555555"
  primary: "#97144d"
  on-primary: "#ffffff"
  surface-subtle: "#f9f9f9"
  ink-strong: "#282828"
  ink-muted: "#6e6e6e"
  hairline: "#e2e2e2"
  primary-hover: "#710f3a"
  footer-text: "#273238"
typography:
  display:
    fontFamily: Lato-Regular
    fontSize: 40px
    fontWeight: 500
    lineHeight: 54.4px
  display-mobile:
    fontFamily: Lato-Regular
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  subheading:
    fontFamily: Lato-Regular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.24px
  body:
    fontFamily: Lato-Regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.16px
  button:
    fontFamily: Lato-Bold
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.24px
    textTransform: capitalize
  nav:
    fontFamily: Lato-Regular
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.32px
  button-secondary:
    fontFamily: Lato-Regular
    fontSize: 12px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.24px
    textTransform: capitalize
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 14.39px
  3xl: 16px
  4xl: 24px
spacing:
  s1: 2px
  s2: 2.4px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6.4px
  s7: 8px
  s8: 9.58px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 24px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 6px 12px
    height: 32px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    padding: 8px 24px
  nav:
    textColor: "{colors.ink-strong}"
    boxShadow: rgba(0, 0, 0, 0.08) 0px 4px 6px 0px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 42px
    borderColor: "{colors.hairline}"
  card:
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.xl}"
    padding: 0px 24px 16px
    boxShadow: rgba(0, 0, 0, 0.16) 0px 1px 39px 0px
  footer:
    textColor: "{colors.footer-text}"
---

## Overview

The Axis Bank home page (axis.bank.in) reads as a large retail-banking portal built around one deep burgundy, #97144d, set against white and cool grey (#f1f4f7, #f9f9f9). A burgundy wedge holds the logo at the top left; above the main navigation sits a thin audience strip (Personal, Business, NRI, Private Banking, Burgundy, Priority, Corporate, Agri and more), then a search field with a microphone icon, "Support", "Lodge a Complaint", "Open Digital A/C" and a burgundy "Login" button, and below that a row of mega-menu items (Accounts, Deposits, Cards, Forex, Loans, Investments, Insurance, Payments, Offers & Rewards, Learning Hub, Bank Smart).

The hero is an editorial campaign, not a rate table: a pale pink-to-white wash with a large two-line headline, "open to your learning / open to your aspirations", where the word "open" is set in burgundy italic. That "open to ..." device is repeated as a small burgundy tab label on each content section ("open to learning better finances", "open to learning smarter spending habits"). Below come tab rows, a carousel of product icons ("Apply Now": Savings Account, Credit Card, Personal Loan), a promotional banner with product photography, a dark pill-shaped quick-link bar (Savings Account, Credit Card, Loans, Investments, Deposits, Payments, Plan-o-Meter), and large rounded sections that switch to full burgundy gradients with white text and glassy translucent tiles.

Imagery is bright photography of people and 3D-style card renders. Microcopy is direct and friendly: "Apply Now", "Explore More", "Learn more", short questions as link titles.

## Colors

Burgundy #97144d is the brand and action color. It is the fill of the measured primary CTA ("Explore Learning Hub", white text) and of the secondary "Login" button, the link color (#97144d), the italic "open" words, and the section panels. Its hover state measured on the site is #710f3a. The site also declares it as the custom property --color-burgundy.

Text uses a grey ladder: #282828 for headings and strong labels, #555555 as the most-read body color, #6e6e6e for secondary copy, and #273238 in the footer. Surfaces are white (#ffffff), #f9f9f9, and #f1f4f7, which is the largest background area on the page. Hairlines and input borders are #e2e2e2. A near-black plum (#210f17) appears as a dark panel color in the measured background areas. The measured brand variables from the cookie/consent widget (for example #800020) belong to a third-party plug-in and are not used here.

## Typography

The whole site is set in Lato, loaded as separate font files named Lato-Regular, Lato-Medium (500), Lato-Semibold (600), Lato-Bold (700) and Lato-BoldItalic. The headline measured 40px at weight 500 with a 54.4px line height on desktop and 24px/32px in the mobile pass. Body copy is 16px/24px with 0.16px tracking; sub-headings and button labels are 14px/20px with 0.24px tracking; navigation is 12px/18px with 0.32px tracking. Buttons use Lato-Bold with capitalized text.

## Layout

The page is a wide single column with a content measure of about 1140px (the hero heading box measured 1140px wide in a 1280px viewport) and a tall scroll of about 8998px. Sections are separated by generous vertical space and framed by large rounded containers rather than rules. The header block measured 164px tall, containing three stacked bands. Content blocks alternate between left text with right imagery and horizontally scrolling carousels with round arrow controls.

Density in the navigation is high (12px labels with chevrons) while the body of the page is airy, with large headlines and short paragraphs.

## Elevation & Depth

Elevation is soft and diffuse. The header carries rgba(0, 0, 0, 0.08) 0px 4px 6px 0px. Product cards use a very wide, light shadow, rgba(0, 0, 0, 0.16) 0px 1px 39px 0px, with a card radius of 12px. Several large sections rely on gradient fills (pink wash in the hero, burgundy gradient panels) instead of shadows to create depth, and translucent white tiles (#ffffff14 in the measured backgrounds) sit on those burgundy panels.

## Shapes

Radii are measured from 2px up to 24px: 8px on buttons and inputs, 12px on cards, 16px and 24px on the larger section containers, and fully rounded pills on the dark quick-link bar and the tab chips. The primary button is 44px tall with a 12px 24px padding; the compact button is 32px tall with 6px 12px padding; text inputs are 42px tall with 8px 16px padding and a 1px #e2e2e2 border.

## Components

Primary button: burgundy fill, white Lato-Bold 14px label capitalized, 8px radius, 44px high. Compact button: same fill, 12px bold label, 32px high (the header "Login"). White buttons on burgundy panels ("Apply Now", "Explore More") invert the scheme. Text links are burgundy. The search field is a rounded white input with an outlined burgundy border state and a microphone icon.

Navigation: 12px labels with chevrons for mega menus, grey #282828 text on white, with a top audience strip. Cards: white, 12px radius, 0px 24px 16px padding, wide soft shadow, used for rates (the Fixed Deposit card shows a large percentage). Tabs: plain text tabs in the hero, the active one shown in burgundy. Floating widgets: a round burgundy cookie-preferences button at the lower left and a vertical "Rates" tab at the right edge.

## Design System Architecture

Axis Bank does have a named design system, SubZero. The package page at https://pub.dev/packages/sub_zero_design_system describes "Sub Zero Design System" as a Flutter design system package (components, themes, tokens and styles) and links to the repository github.com/axisbank/sub_zero_design_system under the axisbank organization. It targets Flutter apps. The address the catalog lists, https://subzero.axis.bank.in, returned an HTML shell titled "SubZero 2.0" that rendered only "...loading" when measured, so it could not be confirmed as documentation. The public home page does not use it: the page is server-rendered markup with generic class names (card, btn, header, footer, nav, filter), no subzero identifiers, and a plain custom property --color-burgundy. For that reason no value in this file is taken from SubZero; every value comes from the live measurements.

## Do's and Don'ts

Do use burgundy #97144d for the primary action and for the italic "open" accent, and keep buttons at 8px radius with Lato-Bold labels. Do keep body copy in the grey ladder and let white or #f1f4f7 carry the page. Do use the burgundy gradient panel with white text for promotional blocks.

Don't introduce the secondary hues of third-party widgets, and don't use the cookie plug-in's colors. Don't use heavy dark shadows; the system prefers wide, faint ones. Don't set long text in burgundy on burgundy; invert to white buttons instead.

## Responsive Behavior

The measured mobile pass reduces the headline from 40px to 24px with a 32px line height, and the display type keeps weight 500. Only the type change above was measured; the capture is a desktop render, so layout changes at smaller widths are not documented here and should be measured before they are relied on.

## Iteration Guide

Start from white, #f1f4f7 and #282828, then add burgundy #97144d as the single action color. Use Lato at 40px/54.4px for the hero headline, 16px/24px for body, and 14px/20px bold for buttons. Reuse the "open to ..." italic burgundy label as the section motif, round corners at 8px, 12px and 24px, and shadows at rgba(0, 0, 0, 0.16) 0px 1px 39px 0px. Verify any new component against the live page before adding values, and cite the repository if SubZero values are ever needed.
