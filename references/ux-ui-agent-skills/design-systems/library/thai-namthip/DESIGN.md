---
version: alpha
name: ThaiNamthip Coca-Cola
category: "Thai Brands"
description: "ThaiNamthip Coca-Cola's corporate site is Thai-first with Poppins and Prompt headings at weight 700, a Coca-Cola red action color #ec1c24, full-bleed #e41e2b product bands, and heavily rounded 24px panels and 48px media frames with faint red-tinted glow shadows."

colors:
  canvas: "#e41e2b"
  page-body: "#ffffff"
  ink: "#000000"
  primary: "#ec1c24"
  on-primary: "#ffffff"
  surface-blush: "#fde8e9"
  ink-muted: "#919191"
  ink-faint: "#c3c4c5"
  ink-dark: "#222222"
  card-glass: "#ffffffe6"
  accent-teal: "#009c9d"
typography:
  display:
    fontFamily: Poppins, Prompt, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 45px
  heading:
    fontFamily: Poppins, Prompt, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 44px
    textTransform: capitalize
  subheading:
    fontFamily: Poppins, Prompt, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 40px
  body:
    fontFamily: Poppins, Prompt, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: Poppins, Prompt, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 16px
  md: 20px
  lg: 22px
  xl: 24px
  2xl: 30px
  3xl: 32px
  4xl: 48px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 48px
  card:
    backgroundColor: "{colors.card-glass}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 24px 32px
    boxShadow: rgba(236, 28, 36, 0.08) 0px 0px 16px 0px
---

# ThaiNamthip Coca-Cola — Design System

## Overview

ThaiNamthip Coca-Cola is the corporate site of ThaiNamthip Corporation PLC, the Thai Coca-Cola bottling company, and it borrows the Coca-Cola world's red without becoming a product-ad page. The measured home page is Thai-first (the document language is `th`, the title is "หน้าหลัก | ThaiNamthip Coca-Cola") with an English option in the utility bar. A short blush-tinted hero introduces the company ("the beverage industry leader of world-class brands in Thailand") over a pour-and-fizz video that sits in a heavily rounded frame, followed by a full-bleed red "our products" band, a rounded translucent panel for partnership calls to action, and a teal story band with archival black-and-white photographs.

The site communicates partnership and growth rather than consumer promotion: the primary navigation is About Us, Customers & Services, Digital Services for business customers, Products and Sustainability, with News, Careers and Contact in a smaller utility row above. Calls to action are "Learn More", "Contact us", "Doing business with us", the Coke Dee business platform, and careers. Product pages are pictured as clean can shots on a flat color field with Thai and English names stacked beneath.

## Colors

Red leads. The measured action color is `{colors.primary}` (#ec1c24), used for the detected primary call to action ("รู้จัก Coke Dee"), for outlined button borders, for the highlighted word inside Thai headlines and for most border colors on the page. A slightly different red, `{colors.canvas}` (#e41e2b), is the full-bleed products band behind the can lineup; it is the largest saturated surface on the page and is the reason it is listed as the canvas token, while the reading surface of the page body is `{colors.page-body}` (#ffffff). A pale blush, `{colors.surface-blush}` (#fde8e9), tints the hero background.

Text is black: `{colors.ink}` (#000000) is the most-read color, with `{colors.ink-muted}` (#919191) and `{colors.ink-faint}` (#c3c4c5) for captions and dividers and `{colors.ink-dark}` (#222222) for a few headings. `{colors.card-glass}` (#ffffffe6, white at high opacity) is the fill of floating panels. A teal, `{colors.accent-teal}` (#009c9d), is the page's declared `--primary` CSS variable and appears as the story band and small controls; use it as a secondary accent only, with red remaining the action color.

## Typography

The family stack is Poppins for Latin text and Prompt for Thai, declared together as `Poppins, Prompt, sans-serif`, with weights 400, 500, 600 and 700 loaded for both. Headings are heavy: `{typography.display}` is 30px at weight 700 on a 45px line (the Thai hero statement), `{typography.heading}` is 32px, weight 700, capitalized, on 44px, and `{typography.subheading}` is 28px, weight 700, on 40px. Body copy `{typography.body}` is 14px at weight 400 on 18px, and buttons `{typography.button}` are 16px at weight 600 on 24px.

Thai text sets generously: the tall Thai line heights (45px, 44px, 40px for the bold sizes) leave room for stacked tone marks, and the hero uses short, large headings with a red-colored keyword. English product names are set in the same family at regular weight, beneath a bolder Thai name.

Font substitutes: both Poppins and Prompt are delivered as webfonts, so none are required on this site. A fallback to the system sans-serif will keep Latin text acceptable, but Thai glyphs need a Thai-capable fallback to keep the line heights above from collapsing.

## Layout

The layout is full-bleed bands of solid color alternating with white. A two-row header sits at the top: a utility row (press news, careers, contact, language) above a main row containing the logo lockup (ThaiNamthip and Coca-Cola scripts side by side) and five dropdown menus with red dot indicators. Inside the bands, content is centered with large vertical gaps. The partnership panel is a rounded floating card with a headline on the left and three tall image tiles, each with a title and a small red underline accent. Product listings are three equal columns, each with a can image, a small English name, a bolder Thai name and an outlined pill button.

The spacing scale from the live CSS runs 1px, 2px, 4px, 6px, 8px, 10px, 12px, 14px, 16px and 18px for component internals. Large rounded containers use 24px 32px padding for panels. Whitespace between bands is generous and consistent.

## Elevation & Depth

Depth is soft and warm. Panels carry a faint red-tinted glow, `rgba(236, 28, 36, 0.08) 0px 0px 16px 0px`, rather than a gray drop shadow, and the most frequent neutral shadow is `rgba(0, 0, 0, 0.15) 0px 1px 6px 0px`, used for small raised elements. The pill button variant uses `rgba(0, 0, 0, 0.15) 0px 1px 3px 0px`. Translucent whites (80, bf, e6 and f2 hex alpha levels in the measured backgrounds) create frosted overlays above photographs and video. The red band's lower edge is cut by a large circular shape behind the central can, a layered-shape device that adds depth without shadows.

## Shapes

Shape is the signature. The measured radius scale is `{rounded.none}` 0px, `{rounded.xs}` 5px, `{rounded.sm}` 16px, `{rounded.md}` 20px, `{rounded.lg}` 22px, `{rounded.xl}` 24px, `{rounded.2xl}` 30px, `{rounded.3xl}` 32px, `{rounded.4xl}` 48px and `{rounded.pill}` for pills. The most frequent radius by far is 24px (cards and panels); 48px frames the hero video and large image tiles; pill radius is used for outlined Learn More buttons. Photographs are cropped into rounded rectangles with at least one large corner, and small image tiles use tall portrait crops.

## Components

**Primary button.** `{components.button-primary}`: red `{colors.primary}` fill, white 16px semibold label, 48px tall, square (0px) corners in the anchor form. A second measured form of the same action is a fully rounded pill with 12px 32px padding and a soft shadow; the pill is also what the outlined secondary buttons use.

**Outlined pill.** White or transparent fill, red border, red label and a small red arrow; used for "Learn More" beneath each product.

**Card.** `{components.card}`: `#ffffffe6` fill, black text, 24px radius, 24px 32px padding and a faint red glow shadow. The partnership panel is the main instance.

**Navigation.** Five dropdown headings in bold small type, each with a red circular chevron badge; a utility row of text links and a language switch labeled TH. The cookie, chat and language popup controls are not brand UI and should not be copied.

## Design System Architecture

No public design system, token package or brand guideline was found for this site on the pages opened (https://www.thainamthip.co.th/); there is no official public system to cite. The de-facto system can be read from the shipped CSS: a Bootstrap-style variable set (the root variables include `--primary`, `--blue` and `--breakpoint-md`), overridden so `--primary` is #009c9d and `--secondary` is #919191, plus CKEditor highlight variables (`--ck-highlight-*`) that show the content is authored in a rich-text editor, and Swiper variables for carousels. Icon fonts named icon-main and icon-footer supply glyphs. Component styling is bespoke on top of that base: the rounded radii and red-glow shadows above are not Bootstrap defaults. The Coca-Cola logotype and brand red come from the parent brand, whose guidelines are outside this site.

## Do's and Don'ts

- Do use #ec1c24 for actions, outlines and highlighted words, and keep body surfaces white.
- Do round panels at 24px and frame hero media at 48px.
- Do pair Poppins and Prompt in one stack and keep headings at weight 700.
- Do use red-tinted glow shadows on floating panels.
- Don't turn the teal accent into a button color; the measured action color is red.
- Don't use square cards; almost every container on the page is rounded.
- Don't document or reproduce the chat widget, language dropdown or cookie controls as brand components.
- Don't set Thai text with tight line heights.

## Responsive Behavior

Breakpoints come from the page's Bootstrap variable set: `--breakpoint-md` is 768px. The extraction recorded the desktop layout at 1280px width; no narrow-viewport typography was recorded for this page, so any mobile type sizes should be verified before reuse. Stacking behavior of the three-column product lineup, the image tiles and the five-menu header was not measured.

## Iteration Guide

1. Choose a band color: white for reading, #e41e2b for product showcases, #fde8e9 for gentle hero tints, teal #009c9d for story moments.
2. Set Thai headings at 30px or larger in weight 700 and color one key word #ec1c24.
3. Build panels as #ffffffe6 cards with 24px radius and 24px 32px padding.
4. Make primary actions 48px tall in red with white 16px semibold text; use outlined red pills for secondary "Learn More" actions.
5. Frame media in 48px rounded rectangles and keep captions in 14px Poppins.
6. Check every new value against the measured lists: radii above, shadows above, and colors #ec1c24, #e41e2b, #fde8e9, #000000, #919191, #c3c4c5, #222222, #009c9d.
