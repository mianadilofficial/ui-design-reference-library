---
version: alpha
name: AutoGuru
category: "Design Systems"
description: "AutoGuru, the Australian online car-servicing marketplace: AvertaStandard at bold 700 (80px display, 16px body), one mint-green action color #01c68c on 8px-radius buttons, navy-slate ink #212338 and #484c5f, a white canvas washed with pale mint #dbfaf0 shapes, and 24px-radius cards. Built on AutoGuru's open Overdrive design system."
colors:
  canvas: "#ffffff"
  page-largest: "#dbfaf0"
  ink: "#484c5f"
  primary: "#01c68c"
  on-primary: "#ffffff"
  surface-grey-soft: "#eef0f2"
  ink-strong: "#212338"
  hairline: "#d4d9dd"
  ink-input: "#000000"
  border-card: "#4996761a"
  brand-soft: "#e3f8f0"
  accent-green: "#36e5aa"
  success: "#03af83"
  warning: "#f69a1f"
  alert: "#d42b26"
  info: "#0d54e5"
typography:
  display:
    fontFamily: AvertaStandard, system-ui, sans-serif
    fontSize: 80px
    fontWeight: 700
    lineHeight: 96px
  display-mobile:
    fontFamily: AvertaStandard, system-ui, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: AvertaStandard, system-ui, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: AvertaStandard, system-ui, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 26px
  body:
    fontFamily: AvertaStandard, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: AvertaStandard, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: AvertaStandard, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 8px
  md: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 13px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 33.5px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 36px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    height: 44px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink-strong}"
    padding: 0px 16px
  text-input:
    textColor: "{colors.ink-input}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 13px 15px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    padding: 16px 20px
    borderColor: "{colors.border-card}"
  footer:
    textColor: "{colors.ink-strong}"
    padding: 0px 32px
---

## Overview

AutoGuru (https://www.autoguru.com.au) is an Australian marketplace where drivers get instant quotes and book car servicing and repairs, and where fleets and workshops manage jobs. The homepage opens on a wash of pale mint shapes across a white canvas, with the headline "Car servicing made easy" in very large bold AvertaStandard at 80px on the left and, beside it, a white form card, "Enter your details to get started", holding three selects ("What do you drive?", "Which model?", "Postcode or Suburb") and a full-width green "Get quotes" button. A subhead reads "Get instant quotes and book".

The page continues as a series of friendly product stories: "Ready to make fleet servicing simple?" beside a large desktop dashboard screenshot of fleet bookings, a logo strip of fleet-management partners (Custom Fleet, Smart Fleet Group, Ampol, Toyota Fleet Management, ORIX, Summit, interleasing, SPA, streetfleet, leaseXpress, Thyme Fleet), and a large mint rounded panel, "Supercharge your auto repair business", with a phone mockup and a carousel (round white arrow buttons at left and right, thin progress bars below) that pitches "Reserve with Google". Near the bottom, light-gray skeleton cards are visible where content was still loading when the capture was taken, then a "Quick Links" block. The navigation covers consumer services (Car Servicing, Car Repair, Mechanics, Mobile Mechanics, Car Battery, Windscreens, Air Conditioning), FleetGuru and Contact, then "Log in" and a green "Sign up".

The tone is plain, helpful and active ("Get quotes", "Learn more", "Sign up"), with benefit-first lines such as "Get faster online approval and payment for fleet jobs". The brand feels fresh, approachable and slightly tech-forward: one confident green, lots of white and mint, big rounded containers and real product screenshots.

## Colors

The site uses AutoGuru's Overdrive design system, whose CSS variables (prefixed `--od-`) appear on the page, and its measured colors line up with the Overdrive token source.

- **Canvas #ffffff** is the page surface (`--od-color-surface-page`). **Page-largest #dbfaf0** is the pale mint that covers the largest measured area, in the hero and in the large rounded panel. **Surface-grey-soft #eef0f2** is the light gray used for quiet fills and skeleton cards.
- **Ink #484c5f** is the main body text slate (Overdrive's gray 700); **ink-strong #212338** is the deep navy used for headlines, nav and the foreground (gray 900); **ink-input #000000** is the typed text inside form fields.
- **Hairline #d4d9dd** is the standard border gray (gray 300, `--od-color-interactive-border`); **border-card #4996761a** is a faint green-tinted card border.
- **Primary #01c68c** is the brand green (green 600), the fill for every button; **on-primary #ffffff** is the label color. **Brand-soft #e3f8f0** is the pale green "mild" background and **accent-green #36e5aa** is a brighter green step (green 400); **success #03af83** is the stronger green (green 700) used for positive states.
- Status colors from Overdrive's token file: **warning #f69a1f** (yellow 800), **alert #d42b26** (red 600) and **info #0d54e5** (blue 600).

Nothing else is chromatic; the green is used for actions and positive status, and the navy-slate pair carries all the text.

## Typography

AvertaStandard is the only family, loaded in regular (400) and bold (700), with `system-ui` and `sans-serif` as the declared fallbacks. Headings are bold, and body and labels are regular, so hierarchy comes from size and weight.

- **Display 80px / 96px**, weight 700, for the hero headline; on a 390px mobile viewport **40px / 48px**.
- **Heading 30px / 40px**, weight 700, for section headings such as "Get instant quotes and book" and card titles.
- **Subheading 18px / 26px**, weight 700.
- **Body 16px / 22px**, weight 400.
- **Button 14px / 20px**, weight 400 for the sign-up button, and **button-secondary 14px / 20px** at weight 700 for the "Learn more" buttons.

Overdrive's own type scale steps through 10, 12, 14, 16, 18, 20, 24, 30 and 40px, each with a paired line height, and the sizes above sit on that scale (the 80px display is the marketing-site headline size). AvertaStandard is a licensed commercial family served by the site; where it is not available, the site's own fallback is the system UI sans.

## Layout

The grid is generous and centered with large rounded containers. Overdrive defines three content widths: small (592px), medium (940px) and large (1344px). On the 1280px desktop frame the content runs close to the page edges. The hero is a two-column split with copy at the left and the form card at the right. Product stories alternate text and large screenshots, and the logo strip runs edge to edge as a single row.

Spacing values measured on the site are 4, 8, 12, 13, 15, 16, 20, 24, 32 and 33.5px. Overdrive's spacing token steps are 2, 4, 8, 12, 16, 20, 24, 32, 40, 48, 64, 80 and 96px, so most measured values sit on it, and 13, 15 and 33.5px are the exceptions. Buttons pad 8px by 12px at 36px tall (the header sign-up) and the larger "Learn more" buttons stand 44px tall; form fields pad 13px by 15px at 48px tall.

## Elevation & Depth

Depth is soft and layered. The page uses Overdrive's elevation tokens (`--od-elevation-1` to `--od-elevation-4`), which are stacks of three very low-opacity black shadows, so cards and the hero form look lifted without a visible edge. The hero form card additionally sits on a pale translucent border that doubles as a halo. Mint panels and device mockups provide the other kind of depth: big flat color fields behind photography and screenshots. Buttons are flat.

## Shapes

Radii form a stepped scale with a pill option. The measured values are 4px for small items, 8px for buttons and inputs (the header button and form fields) and 24px for cards and large panels; the full pill is used for round carousel arrow buttons and chips. Overdrive's own radius tokens run from small steps through to a pill value. The result is a consistent soft-rectangle look: tidy 8px controls inside very round 24px containers. Icons are simple line pictograms; the logo is a stylised "ag" monogram with the wordmark.

## Components

**Primary button.** Green #01c68c fill, white 14px label at weight 400, 8px radius, 8px by 12px padding, 36px tall. Used for "Sign up" and "Get quotes".

**Large "Learn more" button.** Green fill, white 14px label at weight 700, 44px tall; some instances measure with a 0px radius and others 8px, so the radius is not fixed across instances.

**Text inputs and selects.** White fill, 1px #d4d9dd border, 8px radius, 13px by 15px padding, 48px tall, 16px text, with a trailing chevron on selects and gray placeholder text.

**Cards.** White fill, 24px radius, 16px by 20px padding and a faint green-tinted #4996761a border; the hero form card and the quick-link cards use it.

**Navigation.** A single row of regular-weight links in deep navy with 16px of horizontal padding, then a "Log in" text link and the green button.

**Carousel controls.** Round white arrow buttons with a soft shadow and thin progress bars.

**Skeleton loaders.** Pale gray bars inside rounded cards, shown while content loads.

## Design System Architecture

AutoGuru maintains Overdrive, described in its GitHub README as "a product component library, and design system for AutoGuru. Built with React, TypeScript, Vanilla Extract, and Storybook", at https://github.com/autoguru-au/overdrive, with interactive documentation at https://overdrive.autoguru.io. The npm package is `@autoguru/overdrive`, and an `OverdriveProvider` applies global base styles and accepts `colorOverrides` for primary and related colors.

The marketing site uses it. The page's root variables are Overdrive's, named `--od-colours-intent-primary-background-standard` (#01c68c), `--od-color-surface-page` (#ffffff), `--od-typography-colour-neutral` (#484c5f), `--od-colours-foreground-body` (#212338), `--od-typography-size-5-font-size` (18px) and so on, and the brand green and grays measured on the page equal the values in Overdrive's base theme file `lib/themes/base/colours.ts` (gray 900 #212338, gray 700 #484c5f, gray 300 #d4d9dd, green 600 #01c68c). The theme is organised in layers: raw color gamuts (gray, green, blue, yellow, red, each in nine steps), semantic roles (brand, surface, content, interactive, foreground, background, border), intent sets (primary, brand, secondary, danger, warning, neutral, success, information) with standard, mild and strong backgrounds, elevation tokens and a type scale. New work should reference those layers rather than raw hex values.

## Do's and Don'ts

- Do use #01c68c for buttons and positive states only; keep text in #212338 and #484c5f.
- Do put hero and feature content on white with pale mint (#dbfaf0, #e3f8f0) washes behind it.
- Do give inputs 8px radius and 48px height and cards 24px radius.
- Do use bold AvertaStandard for headings and regular for body.
- Do show real product screenshots and partner logos in clean frames.
- Don't use green text on white for body copy; it is a fill color.
- Don't add other brand hues; blue, yellow and red are status colors only.
- Don't mix pill buttons into the form UI; round controls are for carousel arrows.
- Don't hard-code hex values when an Overdrive token exists.
- Don't ship skeleton placeholders as final content.

## Responsive Behavior

Measurements were taken at 1280px and at a 390px mobile viewport. The hero display falls from 80px with a 96px line height to 40px with a 48px line height. Overdrive's content widths (592px, 940px and 1344px) are the design system's layout reference, and the hero has a two-column split; no mobile capture was taken here, so narrow-screen layout was not measured beyond the type change. Buttons keep their fixed heights and radii at every width.

## Iteration Guide

1. Start with canvas #ffffff, ink #484c5f, ink-strong #212338 and primary #01c68c with white labels.
2. Set AvertaStandard everywhere: 80px/96px bold hero (40px/48px on mobile), 30px/40px bold headings, 16px/22px body.
3. Build buttons at 8px radius (36px or 44px tall) and fields at 48px tall with 8px radius.
4. Use #dbfaf0 or #e3f8f0 for atmospheric background shapes and 24px-radius cards.
5. Take status colors (#f69a1f, #d42b26, #0d54e5, #03af83) from the Overdrive token file.
6. Prefer Overdrive variables over raw values whenever extending the page.
