---
version: alpha
name: Rijksmuseum
category: "Culture & Events"
description: "Rijksmuseum (rijksmuseum.nl/en): full-bleed photography stacked edge to edge on a slate #40474f body and black #000000 footer, all text in white RijksText (400/700) with bold uppercase headings at 21.408px, small white 12px uppercase labels, and 2px-radius buttons in Rijksmuseum orange-red #cc4c28 or translucent white #ffffff33."
colors:
  canvas: "#40474f"
  page-largest: "#000000"
  ink: "#ffffff"
  primary: "#cc4c28"
  on-primary: "#ffffff"
  ink-muted: "#c2ccce"
  primary-hover: "#fefbfa"
  on-primary-hover: "#060606"
  button-secondary-bg: "#ffffff33"
  label-ink: "#000000"
typography:
  display:
    fontFamily: RijksText, Arial, sans-serif
    fontSize: 21.408px
    fontWeight: 700
    lineHeight: 27.0383px
    textTransform: uppercase
  display-mobile:
    fontFamily: RijksText, Arial, sans-serif
    fontSize: 19.183px
    fontWeight: 700
    lineHeight: 24.2281px
    textTransform: uppercase
  body:
    fontFamily: RijksText, Arial, sans-serif
    fontSize: 17.2px
    fontWeight: 400
    lineHeight: 23.65px
  button:
    fontFamily: RijksText, Arial, sans-serif
    fontSize: 17.2px
    fontWeight: 700
    lineHeight: 23.65px
  label:
    fontFamily: RijksText, Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
    textTransform: uppercase
rounded:
  xs: 1px
  sm: 2px
spacing:
  s1: 3px
  s2: 4px
  s3: 10.18px
  s4: 20px
  s5: 35.2px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 50px
  label-tag:
    textColor: "{colors.label-ink}"
    typography: "{typography.label}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    padding: 20px 35.2px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 0px 35.2px
---

# Rijksmuseum

## Overview

The Rijksmuseum's English home page (rijksmuseum.nl/en, title "Rijksmuseum Amsterdam, home of Dutch master pieces") is almost entirely photography. The page is a stack of full-bleed image panels with no gaps between them: the first shows visitors photographing The Night Watch with the giant white "RIJKS MUSEUM" wordmark set across the top of the image; then a boy with a tablet surrounded by line-drawn creatures for "FAMILY MONTH"; then two half-width panels for "WILLEM DE KOONING AT WORK" and the matching shop book; then a monochrome sea of wind turbines for "DOCUMENT NEDERLAND: NEW ENERGY"; then a black footer.

The interface is minimal and laid over the images. A transparent header carries a hamburger, search, "Visit and tickets", "Collection", "Stories" on the left and "Language", "Login", "Giftshop" and an orange-red "Rijksmuseum tickets" button on the right. Each panel has the same caption block at its bottom left: a small white uppercase label ("OPEN TODAY", "FREE ENTRANCE UP TO 18 YEARS", "NOW ON VIEW"), a bold uppercase white title, and one line of regular text ("Which story will you discover?", "till 17 January 2027"). Partner logos (Ministry of Education, Culture and Science, KPN as founder, Vriendenloterij and ING as main partners) sit in the first panel and in the footer. The tone is quiet confidence: one typeface, white text, one accent colour, and the collection doing the talking.

## Colors

- **Canvas `#40474f`** — the measured body background, a dark slate that frames the image panels; it is the body's computed colour behind all media.
- **Page largest `#000000`** — the footer background and the largest measured background area.
- **Ink `#ffffff`** — virtually all text, which sits over imagery or black.
- **Ink muted `#c2ccce`** — a lighter grey-blue measured on secondary text.
- **Primary `#cc4c28`** — the orange-red of the "Rijksmuseum tickets" button; declared as `--ubPrimaryColor` and `--ubPrimaryButtonColor`. **On-primary `#ffffff`** is the label colour.
- **Primary hover `#fefbfa`** with **on-primary hover `#060606`** — the measured hover state, where the button turns white with black text (the variables declare `--ubPrimaryButtonHoverColor: #fff` and `--ubPrimaryButtonTextHoverColor: #000`; the measured values are captured mid-transition).
- **Button secondary bg `#ffffff33`** — white at 20% alpha (`--ubSecondaryButtonColor: #fff3`), the translucent fill of "Donate today" and "Newsletter".
- **Label ink `#000000`** — the black text on the small white panel labels.

The variables also declare `--ubLightGray: #8c9095`, not observed on a visible element.

## Typography

One family, RijksText (served from `statics/fonts/Rijksmuseum-Normal.woff2` and a bold file), in regular and bold, with Arial fallback; the CSS also declares a RijksCyrillicText face. Sizes are fractional, which indicates fluid type driven by the viewport.

- **Display** — 700, 21.408px / 27.0383px, uppercase: the h1 "VISIT THE HIGHLIGHTS. BOOK YOUR TICKET TODAY." and every panel title ("FAMILY MONTH"). There is no large display headline in HTML text; the giant wordmark is a graphic.
- **Body** — 400, 17.2px / 23.65px: panel subtitles, nav links and the most-read size.
- **Button** — 700, 17.2px / 23.65px.
- **Label** — 700, 12px / 12px, uppercase, black on a white tag (recorded probe of `span.label`).

Footer section titles ("VISITOR INFORMATION") use the 17.2px bold uppercase style. No letter-spacing adjustments were measured.

**Substitutes**: RijksText is the museum's own typeface. A sturdy, slightly condensed humanist sans with a strong bold, such as Fira Sans or Source Sans 3, at 400/700 approximates it.

## Layout

The desktop page is 1280px wide and only 3,621px tall: the content is five large image panels and a footer. Panels are full-bleed (no side margin) and abut each other directly; the de Kooning pair splits the width 50/50. Caption blocks sit at the bottom left of each panel, aligned to the same left edge as the header content. The header uses padding 20px 35.2px, and the footer 0px 35.2px, so 35.2px is the horizontal page inset for interface elements. Header content spans x=180 to x=1210 in the first band. Paddings measured: 20px, 35.2px, 10.175px, 3px and 4px. The footer is a three-zone layout: visitor information on the left, a column of links (About us, Press, Careers, Contact), and buttons plus social icons on the right, with partner logos and legal links below.

## Elevation & Depth

No box-shadows were measured. Depth comes from photography and darkened image bottoms that keep the white captions readable, plus the translucent white secondary buttons that let the black footer show through. The interface itself is flat.

## Shapes

Corners are barely rounded. The variables declare `--ubButtonBorderRadius: 2px` and `--ubInputBorderRadius: 2px`; measured radii are 2px (buttons) and 1px (four elements). Image panels are square-edged and edge-to-edge. Social icons in the footer appear as plain glyphs.

## Components

- **Primary button** — `#cc4c28` fill, white RijksText 700 17.2px label, padding 0px 20px, 50px tall, 2px radius. Hover: white fill and near-black text.
- **Secondary button** — `#ffffff33` translucent fill, white bold label, same size and radius ("Donate today", "Newsletter").
- **Panel label** — white tag with black 12px bold uppercase text, sitting above a panel title.
- **Panel caption** — label, 21.408px bold uppercase white title, 17.2px regular subtitle, bottom-left of a full-bleed image.
- **Header** — transparent over the first image, white 17.2px links, hamburger and search icons, orange-red ticket button at the far right.
- **Footer** — black, 17.2px bold uppercase section title, white text, link column, secondary buttons, ANBI mark, social icons, partner logos, underlined legal links.

## Design System Architecture

No public design system is linked from the pages opened: the press page (https://www.rijksmuseum.nl/en/press) links a media library at https://www.rijksmuseum.nl/en/press/press-kit but offers no brand guidelines, house-style or typeface information. The de-facto system is a themable component layer exposed as `--ub*` custom properties on `:root`: `--ubPrimaryColor`, `--ubPrimaryButtonColor`, `--ubPrimaryButtonTextColor`, `--ubPrimaryButtonHoverColor`, `--ubPrimaryButtonTextHoverColor`, `--ubSecondaryButtonColor`, `--ubSecondaryButtonTextColor`, `--ubSecondaryButtonHoverColor`, `--ubButtonBorderRadius`, `--ubInputBorderRadius`, `--ubButtonFontWeight`, `--ubButtonPadding: calc(1.563rem - 0.5rem) 20px`, `--ubFontFamily: RijksText,Arial,sans-serif`, heading weights `--ubH1FontWeight`…`--ubH4FontWeight` (all bold) and per-breakpoint font-size objects. Build with these variables: one font, one accent, white and translucent-white secondary actions, 2px corners.

## Do's and Don'ts

**Do**
- Let full-bleed photography fill the page; stack panels without gaps.
- Write titles in RijksText bold uppercase at a modest size and place them bottom-left over the image.
- Use the small white label above a title to state status ("NOW ON VIEW", "OPEN TODAY").
- Reserve `#cc4c28` for the ticketing action.
- Use `#ffffff33` translucent buttons for secondary actions on dark.

**Don't**
- Don't introduce large HTML headlines; the large letterforms are the wordmark graphic.
- Don't add more accent colours or gradients to the interface.
- Don't round corners beyond 2px.
- Don't add shadows or card containers around captions.
- Don't place dark text directly on photography; captions are white.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 measured 19.183px / 24.2281px (21.408px on desktop) and body text 16.0875px / 22.1203px (17.2px on desktop); the 12px label size is unchanged. The mobile header measured 96px tall with two visible header links, two detected columns and a visible toggle labelled "Open menu."; the footer content runs from x=21 to x=369. Up to two card columns were measured on mobile. Panel cropping and breakpoints were not measured.

## Iteration Guide

1. Build pages from full-bleed image panels on a dark base (`#40474f` body, `#000000` footer).
2. Use one sans family in two weights; set titles bold uppercase at about 21px and text at about 17px.
3. Caption every panel bottom-left: white label tag, bold title, one line of subtitle.
4. Make actions 50px tall, 2px radius, 20px horizontal padding — orange-red for tickets, translucent white otherwise.
5. Invert the primary button to white with black text on hover.
6. Keep the header transparent over the first image with white links.
