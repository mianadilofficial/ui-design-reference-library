---
version: alpha
name: Uber
category: "Media & Consumer Tech"
description: "Uber's consumer site is a black-canvas (#000000) page with white (#ffffff) Uber Move type, a 52px/700 headline, white 8px-radius primary buttons, light-grey pill secondary buttons (#efefef) and #292929 cards, built on the Base design system's custom-property tokens."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  ink-muted: "#afafaf"
  ink-subtle: "#4a4a4a"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-card: "#292929"
  surface-light: "#f3f3f3"
  button-secondary-bg: "#efefef"
  link-blue: "#276ef1"
typography:
  display:
    fontFamily: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 52px
    fontWeight: 700
    lineHeight: 64px
  display-mobile:
    fontFamily: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 44px
  subheading:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  nav:
    fontFamily: UberMove, UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 112px
  input:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 25px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 14px 25px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 16px
    height: 48px
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    padding: 12px 0px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    height: 24px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview

The uber.com homepage, captured at 1280px, is a black page. A slim top bar carries the white "Uber" wordmark, five text links (Ride, Earn, Travel, Business, Uber Eats) and an "About" menu button at left, and at right Help, Log in and a white pill "Sign up". The hero is split. At left, the 52px bold headline "Go anywhere" sits above a rounded white-grey "Pickup now" pill with a clock icon, two stacked white-grey fields (Pickup location, with a locator arrow, and Dropoff location) joined by a vertical connector line, and a white "See prices" button next to an underlined "Log in to check your activity" link. At right, a collage of six rounded photographs shows people traveling: a market street, a traveler with a suitcase, a person packing, two people with a case beside a car, with a "Ready to travel?" strip carrying a "Schedule ahead" pill over the bottom of the collage.

Below, the heading "Explore what you can do with Uber" introduces four dark-grey cards (Ride, Reserve, Airport, Food), each with a bold title, one short description, a small white "Details" pill and a 3D-style illustration at the right (a car, a calendar, luggage, a bowl of food). A later section "How to request a ride" shows three photo cards with white square icon tiles overlapping them and a "1/2" carousel control with two round white buttons. The section "Planning your next getaway?" returns to a photo with an overlay of white text.

The page is high-contrast and image-led: white text and white controls on black, with color supplied by photography and illustration, not by the interface. The microcopy is direct and instructional ("Get started", "Get matched with a driver", "Meet your driver"), using verbs and the second person.

## Colors

- **Canvas #000000** is the largest background area in the measurement, and the page color visible in the capture. **Page-body #ffffff** is the white that carries text and controls (it covers the second-largest area, which comes from the lighter sections and fields).
- **Ink #ffffff** is the dominant text color, 3,589 characters against 442 for black (which is used on white buttons). **Ink-muted #afafaf** and **ink-subtle #4a4a4a** are the next greys.
- **Primary #ffffff** is the fill of the main action ("See prices", "Sign up") with **on-primary #000000** text. On this brand the primary action is white, not a hue.
- **Surface-card #292929** is the card color of the "Explore" tiles; **surface-light #f3f3f3** is the pale fill of the input fields and the "Schedule ahead" pill; **button-secondary-bg #efefef** is the fill of the "Pickup now" pill.
- **Link-blue #276ef1** appears 20 times in the page's stylesheet corpus; the captured homepage does not visibly use it, so it is recorded only as a stylesheet value.
- The site declares around 400 root custom properties, almost all in a `--base-*` namespace: tonal ramps named by hue and lightness, for example `--base-blue-79`, `--base-orange-57` and `--base-taupe-83`, plus gradient ramps and a `membership` ramp. These ramps exist in the stylesheet; the homepage's interface itself stays black and white.

## Typography

Uber's typefaces are served as UberMove (weights 400 and 600 loaded) and UberMoveText (400 and 500). Headlines use UberMove; running text, buttons and inputs use UberMoveText; the stylesheet also names a monospace, UberMoveMono. Fallbacks are system-ui, Helvetica Neue, Helvetica, Arial.

- **Display**: UberMove 52px/64px, weight 700 (36px/44px on a 390px viewport). Section headings such as "Explore what you can do with Uber" measure 36px at weight 700.
- **Subheading**: UberMoveText 18px/24px, weight 500.
- **Body**: UberMoveText 14px/24px, weight 400.
- **Button**: UberMoveText 16px/20px, weight 500. **Input**: 16px/24px, weight 400.
- **Nav**: UberMove 24px at weight 400 with a 112px line box, which is the measured size of the nav container's text, not a visual line height.

The page tokens are expressed in rem (`calc(14/16*1rem)`) with names like `--base-typography-headline-xl-medium-font-family` and letter-spacing tokens such as 0.3px for headline-m medium and -0.05px for body-s regular.

## Layout

In the capture, content left edges align at one inset inside generous black margins, and sections are separated by large empty vertical gaps. The hero is two columns: a left control stack and a right photo collage. The "Explore" cards form three across then wrap to a fourth in a new row at the same width. "How to request a ride" is three equal columns with a carousel indicator at the right.

Measured spacing values are 4, 8, 10, 12, 14, 16, 20, 24, 25 and 28px; the primary button uses 14px 25px padding and a 48px height. Density is moderate: copy blocks are short, rows have room, and photography gets large areas.

## Elevation & Depth

Nearly flat. Hover states are expressed as a white inset wash at 10% alpha (`rgba(255, 255, 255, 0.1) 999px 999px 0px 0px inset`) laid over a black pill, so no drop shadow is used for interaction. Cards separate from the black page by their lighter #292929 fill alone. Depth in the capture comes from photography, overlapping icon tiles on photographs and the 3D illustrations.

## Shapes

Radii measured: 8px (17 elements, the primary "See prices" button and cards), 999px (16 elements, pills such as Pickup now, Schedule ahead, Sign up and Details), 50% (2 elements, round carousel buttons), and single uses of 4px, 6px and 16px. The rule is: rectangular actions at 8px, secondary and navigation actions as full pills.

## Components

- **Primary button** ("See prices"): #ffffff fill, #000000 16px/500 text, 14px 25px padding, 48px height, 8px radius.
- **Secondary pill** ("Pickup now"): #efefef fill, black text, pill radius, 48px height, 14px 16px padding. "Schedule ahead" uses a similar #f3f3f3 pill. "Sign up" is a white pill.
- **Inputs** (Pickup location, Dropoff location): light fields on black with an icon at the left and a placeholder in grey.
- **Card**: #292929, 8px radius, title, short description, "Details" pill, illustration.
- **Navigation**: black bar; links are 36px-high white-text pills that show a 10% white wash on hover; the "About" menu button is 38px high.
- **Carousel control**: two round white buttons with a "1/2" counter.
- **Icon tile**: a white rounded square with a black glyph, overlapping the photograph above a text block.

## Design System Architecture

Uber publishes its design system as Base. The [Base design system site](https://base.uber.com) (a zeroheight-hosted site) describes it as defining "the foundations of user interfaces across Uber's ecosystem of products & services" and bringing "all Uber experiences together under a single, unified framework". The content pages are rendered client-side, so I could read only that description and not the individual guidelines. The shipped page confirms the system's output: the stylesheet declares about 400 `--base-*` custom properties for color ramps, type families (UberMove, UberMoveText, UberMoveMono), type scales named like `headline-xl-medium`, `body-m-medium` and `mono-headline-l-bold`, rem-based font sizes (`--base-font-size-14`) and line heights (`--base-line-height-12`). A brand portal at brand.uber.com redirects to assets.uber.com, whose readable content gave no specifications.

## Do's and Don'ts

- Do use black as the canvas and white for text and primary actions.
- Do give rectangular actions an 8px radius and secondary or navigation actions a full pill.
- Do let photography and illustration carry color.
- Do use bold UberMove for headings and UberMoveText for everything else.
- Don't add a brand hue to buttons; the primary action is white on black.
- Don't use drop shadows on controls; use a 10% white wash for hover.
- Don't use light weights for headings; the measured headings are weight 700.
- Don't use pill shapes for the primary rectangular action.

## Responsive Behavior

On a 390px viewport the display headline is 36px/44px instead of 52px/64px. Pill controls and the 48px button height remain tappable. Only the headline metrics were measured at mobile width, so the reflow of the hero collage and the card grid is not described here.

## Iteration Guide

1. Start from #000000 and #ffffff; add a #292929 card surface and #efefef or #f3f3f3 light fields.
2. Set headings in UberMove 700 (52px hero, 36px section) and the rest in UberMoveText.
3. Make the one primary action white with black text and an 8px radius; make secondary actions pills.
4. Express every size in rem tokens named by role, mirroring the `--base-*` pattern.
5. Add imagery before adding any interface color.
