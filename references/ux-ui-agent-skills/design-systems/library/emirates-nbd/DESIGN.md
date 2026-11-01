---
version: alpha
name: Emirates NBD
category: "Banking & Insurance"
description: "Emirates NBD English home page: deep navy #072447 buttons with 10.8px radius, white and pale blue-grey #eef2f8 grounds, UAEDirham with Plus Jakarta Sans at 37.8px headlines and 12.6px body, dense banking modules with a loan calculator and FX strip."
colors:
  canvas: "#eef2f8"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#072447"
  on-primary: "#ffffff"
  ink-grey: "#757575"
  ink-strong: "#222222"
  ink-slate: "#596e98"
typography:
  display:
    fontFamily: UAEDirham, "Plus Jakarta Sans", sans-serif
    fontSize: 37.8px
    fontWeight: 400
    lineHeight: 43.2px
  display-mobile:
    fontFamily: UAEDirham, "Plus Jakarta Sans", sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
  body:
    fontFamily: UAEDirham, "Plus Jakarta Sans", sans-serif, saudi_riyal
    fontSize: 12.6px
    fontWeight: 400
    lineHeight: 18.9px
  button:
    fontFamily: UAEDirham, "Plus Jakarta Sans", sans-serif, saudi_riyal
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 21.6px
  nav:
    fontFamily: UAEDirham, "Plus Jakarta Sans", sans-serif, saudi_riyal
    fontSize: 9px
    fontWeight: 600
    lineHeight: 13.5px
    letterSpacing: 0.5px
    textTransform: lowercase
  button-secondary:
    fontFamily: UAEDirham, "Plus Jakarta Sans", sans-serif, saudi_riyal
    fontSize: 16.2px
    fontWeight: 600
    lineHeight: 24.3px
rounded:
  xs: 3px
  sm: 3.6px
  md: 4px
  lg: 5px
  xl: 7.2px
  2xl: 10.8px
  3xl: 30px
  pill: 9999px
spacing:
  s1: 2.7px
  s2: 4.32px
  s3: 4.5px
  s4: 5.4px
  s5: 5.76px
  s6: 7.2px
  s7: 9px
  s8: 10px
  s9: 10.8px
  s10: 11.55px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 7.2px 18px
    height: 38px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.2xl}"
    padding: 13.5px 18px
    height: 53px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 13.5px 18px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.page-largest}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
    padding: 10.8px 7.2px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-grey}"
    rounded: "{rounded.xl}"
---

## Overview

emiratesnbd.com/en is the English home page of Emirates NBD, titled "Emirates NBD | Financial Services and Online Banking in Dubai and UAE". It is a retail-banking portal: a segment bar, a main product menu, a rotating hero banner, a product calculator, three promotional image cards, a foreign-exchange rate strip and, further down, more product bands. The measured page is 6,276px tall with 2,524 visible elements, which is dense even for a bank.

Above the main navigation sits a thin grey segment bar that lets visitors switch audience: Personal, Priority, Private, Emirati, Business, Corporate & Institutional, Islamic, International, Innovation and About us, with utility links on the right (Quick Services, Customer Care, ATM & Branches) and an "Online Banking" tab in bright blue. The main menu follows on a slate-blue band: Accounts, Cards, Loans, Foreign Exchange, Wealth & Insurance, Ways of Banking, with the bilingual logo at left, a UAE flag with "Choose your website / عربي" and a search icon.

The capture shows a hero reading "Earn up to 5% p.a. on your savings" with the label "Plus Saver Account", the sentence "Open a Plus Saver (AED) account through ENBD X and fund it with new money to earn higher interest" and a "Learn more" button, over a dark-blue vault illustration with floating dirham coins. The extraction also saw campaign headlines ("Be the one. Win our biggest cash prize ever", "We dream it. We dare it. We Dubai-it."), so the hero rotates between campaigns.

The capture also contains a cookie-consent panel ("Your Privacy Matters", with "Accept All", "Reject Non-essentials" and "Cookie settings"). It is a third-party consent overlay and is not documented as brand UI or tokens.

## Colors

The main brand color is deep navy #072447, declared as `--primary` and measured as the fill of every call-to-action button (white labels, on-primary #ffffff). Text is black (#000000) with #222222, grey #757575 and a slate blue-grey #596e98 for secondary copy. Surfaces are white (#ffffff), a pale blue-grey (#eef2f8, the measured canvas) and #f8fafc and #eceff7 for section grounds. Other measured background values include #cfcfcf and a bright blue #2765ff, and a text blue #1155cc; these appear on the page but their roles (for example the "Online Banking" tab) were not isolated and they are not tokenized.

The root variables also include a `--kyc-*` family (for example `--kyc-primary-blue` #3498db, `--kyc-success-green` #28a745, `--kyc-danger-red` #dc3545). These belong to an identity-verification flow variable set, not to the home page, and are not treated as brand colors.

## Typography

The body family is UAEDirham, then Plus Jakarta Sans (weights 300, 400, 500, 600, 700 loaded), then sans-serif, with a `saudi_riyal` icon font appended. UAEDirham is the font that supplies the dirham currency symbol; the amounts in the loan calculator and the FX strip use it. The Arabic stack declared in the root is UAEDirham, Tajawal.

Measured styles on desktop: display 37.8px/43.2px at 400 (the campaign headlines and section headings), body 12.6px/18.9px at 400, primary button 14.4px/21.6px at 600, secondary button 16.2px/24.3px at 600, and a 9px segment-bar navigation at 600 with 0.5px letter-spacing and 13.5px line-height. The most-used sizes by character count are 14px, 12px, 12.6px and 16.2px, so the interface is small and information-dense. Headlines are light (400) while controls are semi-bold (600).

## Layout

A full-width layered header (segment bar over main menu over hero) is followed by centered content bands. The loan block is a two-column card: sliders and tabs on the left, a payment result on the right. The three promo cards are equal-width image tiles with centered white text and a "Know more" link; the FX strip is a horizontally scrolling row of small currency tiles, each showing Buy and Sell rates with a flag. Measured gaps are small (4.32px and 7.2px); spacing tokens range from 2.7px to 11.55px and the `--kyc-spacing-*` steps run 10px to 40px in a separate flow.

## Elevation & Depth

Box shadows measured include rgba(0, 0, 0, 0.5) 0 0 5px, rgba(0, 0, 0, 0.1) 0 0 50px, rgba(0, 0, 0, 0.15) 0 5px 15px and rgba(0, 0, 0, 0.75) 0 0 5px. Which elements carry which shadow was not isolated. In the capture the loan card and the FX tiles sit on a pale ground with a soft edge, and the hero and promo cards use dark photographic or illustrated backgrounds with white text.

## Shapes

Radii measured: 3px, 3.6px, 4px, 5px, 7.2px (cards), 10.8px (buttons and the segment buttons) and 50% (circular icons and flags). Buttons are rounded rectangles with 10.8px radius, not pills; cards carry 7.2px.

## Components

Primary button: #072447 fill, 1px solid #072447, white 14.4px semibold label, 10.8px radius, 7.2px 18px padding, 38px height ("Apply for a loan now"). Larger secondary button: same fill and radius, 16.2px label, 13.5px 18px padding, 53px height ("Know more"). Hero "Learn more" is a muted translucent blue button on the illustration. Tabs: "Personal Loan", "Auto Loan" and "Home Loan" with an underlined active tab and icons. Sliders: a navy thumb and filled track with the range labels "30,000" to "500,000" and "1 Year" to "4 Years". Result panel: "Monthly Payments" with a large amount, then a navy block "Borrow wisely / Read more". FX tile: white rounded card with currency flag, code and Buy/Sell values. Text links end with a small chevron.

## Design System Architecture

No public design system or brand guideline was found; none was opened for this entry. The shipped CSS shows a mix of systems: a brand variable `--primary` (#072447), a `--ct-*` set (for example `--ct-bg`, `--ct-color`), a Bootstrap-like set (`--font-family-sans-serif`, `--font-family-monospace`), a Swiper theme color (`--swiper-theme-color` #757575) and the `--kyc-*` flow set. In all, 95 root variables were recorded. The de-facto brand system is therefore navy, white and pale blue-grey, UAEDirham plus Plus Jakarta Sans, and 10.8px-radius controls.

## Do's and Don'ts

Do use navy #072447 for every primary action with white labels and a 10.8px radius. Do set headlines at 400 weight and controls at 600. Do pair every currency amount with the UAEDirham symbol font. Do provide audience switching in a thin top bar and keep products in the main menu.

Don't use the KYC flow's blue, green or red as brand colors. Don't reproduce the cookie panel as a design element. Don't make buttons pill-shaped; the measured controls use 10.8px. Don't mix serif faces; none is used.

## Responsive Behavior

Measured at a 390px viewport: the display style is 24px/31.2px, the body is 12px/18px, the primary button label is 16px/24px and the nav role is 14px/21px. Menu collapse behavior, tab and slider reflow, and hover or focus states were not measured.

## Iteration Guide

To add a module, start from white or #eef2f8 ground, set its title at 37.8px/43.2px (24px/31.2px on mobile), copy at 12.6px/18.9px, and finish with a navy 38px button with 10.8px radius. Use 7.2px radius for cards. Keep amounts in UAEDirham. Take new colors only from `--primary` or the measured neutrals; do not borrow from the `--kyc-*` variables. Measure any interaction state before specifying it.

## Microcopy Voice

Copy is benefit-first and plain: "Earn up to 5% p.a. on your savings", "Looking for a loan? Calculate your monthly payments", "Rely on us - whatever the currency". Legal qualifiers sit directly under the interactive element in small type ("Effective rate: 5.99% p.a. Terms and conditions apply. Interest rates vary by tenor & subject to bank policy"). Link labels use verbs and a chevron: "Know more", "Read more", "Learn more about our Foreign Exchange services", "Our fees and payment plans".
