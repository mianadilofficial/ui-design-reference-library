---
version: alpha
name: United Carriers
category: "Product & SaaS"
description: "United Carriers home page measured live: a black hero fading to white, near-black #111111 text, BT Steinhart uppercase 700 headlines at 71.1111px and BT Steinhart Mono button labels, Helvetica Neue 500 body at 20.7407px, square-cornered white buttons and 9999px-radius outlined pills."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#ffffff"
  on-primary: "#111111"
  surface-2: "#000000"
  surface-3: "#0c0c0c"
  ink-2: "#111111b8"
  ink-3: "#ffffffb3"
  ink-5: "#11111129"
  ink-6: "#111111e0"
  hairline: "#e7e7e7"
typography:
  display:
    fontFamily: "\"BT Steinhart\", Arial, sans-serif"
    fontSize: 71.1111px
    fontWeight: 700
    lineHeight: 74.6667px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"BT Steinhart\", Arial, sans-serif"
    fontSize: 47.6336px
    fontWeight: 700
    lineHeight: 50.0153px
    textTransform: uppercase
  heading:
    fontFamily: "\"BT Steinhart\", Arial, sans-serif"
    fontSize: 53.3333px
    fontWeight: 700
    lineHeight: 56px
    textTransform: uppercase
  subheading:
    fontFamily: "\"BT Steinhart\", Arial, sans-serif"
    fontSize: 118.519px
    fontWeight: 700
    lineHeight: 124.444px
    textTransform: uppercase
  body:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 20.7407px
    fontWeight: 500
    lineHeight: 24.8889px
  button:
    fontFamily: "\"BT Steinhart Mono\", Arial, sans-serif"
    fontSize: 8.88889px
    fontWeight: 400
    lineHeight: 12.4444px
    textTransform: uppercase
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 0.74px
  s2: 2.96px
  s3: 4.44px
  s4: 5.93px
  s5: 7.41px
  s6: 8.89px
  s7: 11.85px
  s8: 14.07px
  s9: 14.81px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 36px
  button-primary-hover:
    textColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    rounded: "{rounded.none}"
---

## Overview

This DESIGN.md documents the United Carriers home page measured from https://unitedcarriers.com/ (page title "United Carriers | Global Freight Forwarding and Logistics", language en, 25,095px tall at 1280px wide). It is a long, editorial logistics page in black and white. The opening screen is a black field with a glowing planet-like orb in orange and blue and small route labels (Germany, Spain, Italy, UK, Colombia), the small label "ONE OPERATOR", and the headline "EVERY LEG OF THE JOURNEY" in white uppercase BT Steinhart. Two buttons follow: a white "TALK WITH US" and an outlined "OUR SERVICES". The black field then fades through deep blue to white, and the page continues with "WE MOVE FREIGHT. WE OWN THE OUTCOME.", a paragraph on one accountable team, a "LEARN MORE ABOUT US" outlined pill, and large statistics ("2,500+ Shipments per month").

The voice is short, declarative and confident ("No finger-pointing between vendors. No delays lost in handoffs."). The footer says "One operator. Every leg of the journey." with SOCIALS and COMPANY columns. A blue "Site of the Day" tab on the right edge of the capture is a third-party award badge and is not documented as brand UI.

## Colors

`canvas` #ffffff dominates (21,082 area weight); black #000000 (`surface-2`, 4,221) and #0c0c0c (`surface-3`, 2,848) form the dark hero and sections, with #111111 as `ink` (1,811 area, 2,868 text characters). Text uses alpha variants of the two ink colours: `ink-2` #111111b8 (824 characters, soft text, matching the stylesheet's `--_color---content--soft`), `ink-3` #ffffffb3 (816, soft text on dark), `ink-6` #111111e0 (149) and `ink-5` #11111129 (495, very faint text). White text is 745 characters. `hairline` #e7e7e7 is the most common border (35 uses); other measured borders are #11111133, #ffffff52, #ffffff1a, #1111114d and #ffffff14. A translucent violet #a686e04d (1,024 area weight) and a blue #0016cb (8 characters) also appear. `primary` is #ffffff because the detected primary button is a white block with #111111 text (`on-primary`). The orb's orange and blue glow come from layered box shadows (for example `rgb(255, 85, 0) 0px -40.7407px 28.1481px -31.1111px inset` and `rgb(1, 47, 255) 0px 52.5926px 53.3333px -17.7778px inset`) on a decorative element, not UI colours.

## Typography

Three families: "BT Steinhart" (500, 700) for display headlines, "BT Steinhart Mono" (400) for button and label text, and "Helvetica Neue" (400, 500) for body, with Arial fallbacks. By characters: Helvetica Neue 5,246, BT Steinhart Mono 718, BT Steinhart 417. Roles: `display` 700 at 71.1111px / 74.6667px uppercase (mobile 47.6336px / 50.0153px); `heading` 700 at 53.3333px / 56px uppercase; `subheading` 700 at 118.519px / 124.444px uppercase (the large statistics such as "2,500+"); `body` Helvetica Neue 500 at 20.7407px / 24.8889px; `button` BT Steinhart Mono 400 at 8.88889px / 12.4444px uppercase. Other measured sizes include 11.8519px (2,232 characters, the most-used small size), 23.7037px, 7.40741px, 10.3704px, 6.66667px, 17.7778px and 13.3333px. Weights: 500 (4,520), 400 (1,466), 700 (395). BT Steinhart is a commercial typeface; Arial is the declared fallback.

## Layout

The stylesheet defines `--container--padding` 4rem and colour roles named `--_color---bg--main`, `--_color---content--main` and `--_color---border--main` (#1113). The page alternates a full-bleed black hero, a long gradient transition, and a two-column white section with a small image and bold headline at left and body copy and statistics at right, each statistic separated by a thin #e7e7e7 rule. Gaps measured: 8.88889px (36), 16px (34), 2.96296px (34), 14.8148px (22), 5.92593px, 4.44444px and several larger values up to 154.444px; paddings include 4.44444px, 5.92593px, 11.8519px, 22.2222px, 44.4444px and 118.519px. The generated spacing tokens reproduce the smallest of these.

## Elevation & Depth

Real shadows are used only on the decorative orb (layered inset shadows in orange and blue as above). The stylesheet also contains `inset 0 0 1rem 1rem var(--_color---m-black)` and large spread shadows used as colour fills. Interface elements are flat; depth comes from the black-to-white gradient and the glowing orb.

## Shapes

Measured radii are 50% (15 elements, circles and the orb rings) and 1280px (6, fully rounded pills). Tokens: `none` 0px and `pill` 9999px. The white "TALK WITH US" button measured a 0px radius in the extraction, while the outlined pills ("OUR SERVICES", "LEARN MORE ABOUT US") appear fully rounded in the capture and use the 1280px radius class. Ring and circle shapes measured at 636px diameter are decorative orb layers and are not cards.

## Components

`button-primary`: white fill, #111111 BT Steinhart Mono 8.88889px uppercase label, 0px radius, 36px tall, 117px wide ("TALK WITH US"); on hover its text turns white and the label animates to a scrambled string in the recording ("KT SALTHI UW"). `link` ("OUR SERVICES"): white text, same mono type, transparent fill with a white border, 36px tall. Outlined pills on white use a #11111133-range border. `footer`: white, #111111b8 text at 10.3704px / 13.4815px, 767px tall, with the tagline "One operator. Every leg of the journey." and link columns.

## Design System Architecture

No public United Carriers design system was opened. The site's custom properties use the `--_color---*` naming (`--_color---content--main`, `--_color---border--bold` #1111114d, `--_color---bg--sf-2`) and `--font--body`, `--font--button`, plus Swiper pagination variables (`--swiper-pagination-bullet-size` 0.6rem). The de-facto system is a role-named colour layer (bg, content, border) over a black and white palette, three fonts, and square or pill controls.

## Do's and Don'ts

Do keep the palette to near-black (#111111, #000000), white and alpha tints of both. Do set display text in BT Steinhart 700 uppercase and button labels in BT Steinhart Mono uppercase. Do use thin #e7e7e7 rules between statistics. Do let the black-to-white gradient carry the visual transition.

Don't use the orb's orange and blue as interface colours. Don't document the "Site of the Day" badge. Don't round the white solid button; it measured 0px. Don't use shadows on interface elements.

## Responsive Behavior

The mobile pass recorded: h1 "EVERY LEG OF THE JOURNEY" at 47.6336px / 50.0153px weight 700; h2 at 35.7252px / 37.5114px; body 17.8626px / 21.4351px; and the primary button at 9.92366px, 124px by 38px. A navigation block was not detected on mobile. Menu form and column layout on mobile are not measured.

## Iteration Guide

1. Black hero fading to white; #111111 text on white.
2. BT Steinhart 700 uppercase headlines at 71.1111px; Helvetica Neue 500 body at 20.7407px.
3. White square button with mono label, 36px tall; outlined pills for secondary actions.
4. Large 118.519px statistics divided by #e7e7e7 rules.
5. Gate with `node web/scripts/verify-designs.mjs --slug=united-carriers`.

## Additional Measurements

Alpha variants dominate text colour usage: besides #111111 (2,868 characters), the page uses #111111b8, #11111129, #111111e0, #11111166 (27 characters), and on dark #ffffffb3, #ffffff99 (110) and #ffffff3d (13). Weight 500 is the body weight rather than 400, with 400 reserved for the mono labels.

The hero copy pairs the small uppercase label "ONE OPERATOR" with the three-line headline and a short grey paragraph ("Freight forwarding, land transport, and customs brokerage, unified across APAC under one accountable team."), set in the 11.8519px Helvetica Neue size in the capture. The "WE MOVE FREIGHT." line is set in a mid-grey tone and "WE OWN THE OUTCOME." in near-black within the same 53.3333px heading, so emphasis is made by tone rather than by a second typeface. Statistics are introduced by a small caption ("From countless journeys, clarity emerges") above a thin rule, then a very large numeral and a one-line label such as "Shipments per month" in soft #111111b8 text. A circular image-free decorative layer, scaled by a matrix transform, forms the orb at the top of the page and is not a content card.
