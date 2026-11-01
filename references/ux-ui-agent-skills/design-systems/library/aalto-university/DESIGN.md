---
version: alpha
name: Aalto University
category: "Design Systems"
description: "Aalto University's website is a Finnish-language, Inter-only editorial layout on white (#ffffff) with near-black ink (#2d2d2d), a 132px bold wordmark headline, full-width #151515 feature cards with white text, square zero-radius buttons 48px tall, and a yellow (#f7e159), red (#fd6360) and blue (#46a5ff) brand palette."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f2f2"
  ink: "#2d2d2d"
  primary: "#151515"
  on-primary: "#ffffff"
  surface-black: "#151515"
  ink-muted: "#505050"
  neutral-100: "#fafafa"
  neutral-300: "#e0e0e0"
  aalto-yellow: "#f7e159"
  aalto-red: "#fd6360"
  aalto-blue: "#46a5ff"
typography:
  display:
    fontFamily: inter, sans-serif
    fontSize: 132px
    fontWeight: 700
    lineHeight: 128px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: inter, sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 52px
    letterSpacing: "-1px"
  heading:
    fontFamily: inter, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.48px"
  subheading:
    fontFamily: inter, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.1px"
  body:
    fontFamily: inter, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: inter, sans-serif
    fontSize: 18px
    fontWeight: 700
  nav:
    fontFamily: inter, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 18px
rounded:
  none: 0px
  xs: 1px
  sm: 24px
  md: 32px
  pill: 9999px
spacing:
  d1: 4px
  d2: 8px
  d3: 16px
  d4: 24px
  d5: 32px
  d6: 40px
  d7: 48px
  d8: 56px
  d9: 64px
  d10: 80px
  d11: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 48px
  button-default:
    textColor: "{colors.surface-black}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 48px
    borderColor: "{colors.surface-black}"
  button-on-page:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 15px 40px
    height: 80px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 8px 0px 8px 24px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 4px
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 24px 40px
---

## Overview

The capture of aalto.fi (title "Aalto-yliopisto", Finnish interface) opens with an unmistakable move: the university's name, "Aalto-yliopisto", set in Inter Bold at 132px with -2px tracking and a 128px line-height, filling almost the whole width under a slim utility bar. The utility bar carries a red square logo with a neon letter A, the campaign slogan "Merkki muutoksestA!", and small icon-plus-label links: Lahjoita (donate), Hae Aaltoon (apply), the language switch FI, Hae (search), Kirjaudu (sign in) and Valikko (menu).

Below it the page is a stack of full-width feature cards, each a half text panel on near-black #151515 and a half photograph, alternating left and right. The photographs are saturated and expressive: green code projected across a hooded figure, a laughing woman in profile against a teal glow, a woman raising an arm in front of a wall of colourful letter-A tiles. Text on the black panels is white, with a bold headline, a short regular-weight paragraph, and underlined links prefixed with an arrow. Under the cards a "Kiinnostavia uutisia" (interesting news) heading sits beside an outlined "Lue kaikki yliopiston uutiset" button, followed by three news cards with a photo on top and a bold title on a #f2f2f2 grey panel.

The voice is direct and plain: questions ("Mitä vaaroja siihen liittyy?"), short imperatives ("Lue lisää kampanjasta ja lahjoita!"), no decoration in the UI. All colour comes from photography and from the brand palette defined by the official brand library at https://brand.aalto.fi, which states that Aalto's brand colours are yellow, red and blue, used together with black and white.

## Colors

The page is organised by large flat areas. The largest background areas measured are #f2f2f2 (2,930 units), #ffffff (2,302) and #151515 (2,168); the white canvas is the page itself, while #f2f2f2 appears as the card grounds in the news band and #151515 as the feature cards. Ink is #2d2d2d (5,490 weighted characters), secondary text is #505050, and text on black is #ffffff.

The brand library's colour page (https://brand.aalto.fi/en/brand/visual-guidelines/colours) publishes Aalto University Red #FD6360, Yellow #F7E159 and Blue #46A5FF, plus six school colours that may only be used for that school, and white and black. #f7e159 is also measured on the live page (599 units of background area), the only chromatic fill besides imagery. The design system's colour token page (https://brand.aalto.fi/en/ds/tokens/colours) lists a base palette of five groups (Aalto Brand, School, Neutral, Transparent, Tint) and notes that values should be used through tokens rather than by copying hex codes; its neutrals include #fafafa and #e0e0e0. The brand page advises white as the predominant background for clarity, black for drama, and brand colours as backgrounds only "sparsely and purposely".

## Typography

Inter is the only family in the measured page (8,178 weighted characters), at weights 400 and 700 only. The brand library's type page (https://brand.aalto.fi/en/brand/visual-guidelines/type) names Inter as the typeface for all media with Bold and Regular as the primary weights, Arial as a system substitute, and Besley as a complementary slab serif for publications with Georgia as its substitute. It specifies Inter Bold at tracking -25 for headlines and subheadlines, Inter Regular for intros and body, and -50 tracking for expressive headlines; it also asks for no upper case, no title-case headings and at most three sizes per surface.

Measured on the homepage: display 132px/700 (128px line-height, -2px), mobile display 44px/700 (52px line-height, -1px), heading 32px/700 (-0.48px), subheading 20px/700 (-0.1px), body 18px/400 with 32px line-height, and navigation 16px/700. The design system's typography page lists the same scale as font-size tokens: 14, 16, 18, 20, 24, 32 and 64px, and letter-spacing tokens of 0, -1px and -2px.

## Layout

The design system's grid page (https://brand.aalto.fi/en/ds/tokens/grid) defines a 12-column layout grid from tablet upward and a 2-column grid on small phones, breakpoints at 320, 576, 768, 992 and 1616px, and a spacing scale of 4, 8, 16, 24, 32, 40, 48, 56, 64, 80, 96, 112 and 128px. Container padding references Dimension 3, 4, 6 and 6 (16, 24, 40 and 40px) across phone, tablet, desktop and XL, and gutters reference Dimensions 3, 3, 4 and 4 (16, 16, 24 and 24px).

On the homepage, content sits in a container with about 30px margins at the 960px capture scale. Feature cards are edge-to-edge halves with no gutters between text and image; the three news cards are separated by narrow gutters. Padding values measured include 4px (28 uses), 40px (24), 24px (21) and 8px (18), with gaps of 16px and 24px. Aspect ratios for imagery follow the system's 16/9, 4/3 and 2.35/1 standards.

## Elevation & Depth

Depth is not used. The only shadow found is a transparent 1px ring (rgba(0, 0, 0, 0) 0px 0px 0px 1px) that is invisible. Separation comes from colour blocking: white, #f2f2f2 and #151515 areas butt against each other, and from 1px hairline rules under the link lists in the black cards. Overlay buttons for use on imagery are a documented Button variant.

## Shapes

The system is square. The measured buttons, links and navigation items have 0px radius. The only rounded values on the homepage are 32px (seven uses), 24px (one) and 1px (one); the design-system colour token page, measured, shows 24px (204 weighted uses) and 9999px radii on its own elements. Photographs are rectangular, edge to edge, with no rounded corners. Square geometry, large type and hard colour fields give the site a poster-like, architectural character.

## Components

The Aalto design system's Button component page (https://brand.aalto.fi/en/ds/components/button) documents Default, Primary, Icon, Overlay, Disabled and Button-with-icon variants. Measured on the official React Storybook (https://dx-react-components.aalto.fi) the Default button is transparent with #151515 text, a 1px #151515 border, 0px radius, 48px height and Inter 18px/700; the Primary button is filled #151515 with white text and the same 18px/700, 0px radius and 48px height. The guideline says a primary button indicates the main action and only one should appear per section or view.

On the homepage the generated measurement found a white 80px-tall button with 15px 40px padding and #2d2d2d 20px/700 text (the "Lahjoita Aalto-yliopistolle" donate button), and an outlined 56px-tall "Katso kaikki tapahtumat" button with #151515 border. The "Lue kaikki yliopiston uutiset" button seen in the capture has a thin dark outline and bold centred label. Links inside black cards are white, bold, prefixed with an arrow icon and underlined. News cards are a photo above a #f2f2f2 text block with a bold title.

## Design System Architecture

Aalto University publishes its design system as part of the brand site at https://brand.aalto.fi/en/ds. The page describes it as documentation of all the digital resources, elements and instructions behind Aalto's digital services, built on atomic design: design tokens (colours, typography, grids and spacing, icons, motion), Components (for example Accordion, Avatar, Badge, Button, Checkbox, Chip, Dropdown, Link, Radio button, Search field, Tag, Text input), Modules (for example Breadcrumbs, Card, Date picker, Image tile), Sections and Templates.

Developers consume it through npm packages in Aalto's private package registry: @aalto-dx/react-components, @aalto-dx/component-styles for non-React projects and @aalto-dx/react-starter, as described at https://brand.aalto.fi/en/ds/for-developers/resources, which also tells developers to import Inter from Google Fonts because the font is not bundled. Live components are shown in the public React Storybook at https://dx-react-components.aalto.fi. Designers and developers are pointed to a Teams community for questions and contributions.

## Do's and Don'ts

Do set the name and headlines in Inter Bold with negative tracking, left-aligned and ragged right. Do use white as the predominant background and #151515 for feature cards. Do keep corners square and buttons 48px tall. Do let expressive photography carry colour. Do use brand colours sparsely and only black text on them.

Don't use upper case, or capitalise every word of a title (per the brand type page). Don't mix school colours. Don't use more than three type sizes on one surface. Don't put more than one primary button in a section. Don't use buttons as page links; the design system provides a Link component for that.

## Responsive Behavior

The design system defines breakpoints at 320px (phone portrait), 576px (phone landscape), 768px (tablet), 992px (desktop) and 1616px (XL), a 12-column grid from tablet up and a 2-column grid on phones. The measured mobile hero heading drops from 132px to 44px (52px line-height, -1px tracking). Container padding steps up from 16px on phones to 40px on desktop through the spacing tokens. The 50/50 text-image cards would be expected to stack at phone widths, but that stacking was not captured or verified here.

## Iteration Guide

Begin with a white page, #2d2d2d ink and Inter 400/700. Put the biggest possible Inter Bold headline at the top, then alternate #151515 half-cards with photographs. Use 0px radius, 48px buttons (#151515 primary, outlined default). Add colour only through photography or a single brand yellow, red or blue taken from the brand library. Before adding a value, find its token in https://brand.aalto.fi/en/ds/tokens.
