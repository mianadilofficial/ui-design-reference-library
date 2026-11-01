---
version: alpha
name: MyCloud Fulfillment
category: "Thai Brands"
description: "MyCloud Fulfillment (Thai e-commerce warehouse service) design system: IBM Plex Sans Thai and Lexend type, 48px hero, teal #00aaad pill buttons and footer, charcoal #1e1e1e band, mint #f2fefa sections and 20px cards."
colors:
  canvas: "#ffffff"
  surface-dark: "#1e1e1e"
  ink: "#4f4f4f"
  primary: "#00aaad"
  on-primary: "#ffffff"
  surface-mint: "#f2fefa"
  ink-strong: "#333333"
  ink-near-black: "#1f1f1f"
  ink-soft: "#525252"
  ink-muted: "#828282"
  nav-link-text: "#222222"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 72px
  display-mobile:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: Lexend
    fontSize: 32px
    fontWeight: 600
    lineHeight: 48px
  subheading:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 36px
  body:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 32.4px
  nav:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
  button-secondary:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 20px
    fontWeight: 600
    lineHeight: 32.4px
  input:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 32.4px
rounded:
  xs: 3px
  sm: 18px
  md: 20px
  lg: 50px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 14px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 50px
    height: 60px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 48px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 50px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 4px 6px
    height: 36px
  card:
    textColor: "{colors.nav-link-text}"
    rounded: "{rounded.md}"
    boxShadow: rgba(107, 107, 107, 0.08) 5px 13px 15px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

# MyCloud Fulfillment

## Overview
MyCloud Fulfillment is a Thai e-commerce fulfillment (warehouse, pick-pack-ship) company; the page title is "MyCloud Fulfillment คลังสินค้าออนไลน์อันดับ 1" and the h1 claims "คลังสินค้าออนไลน์อันดับ 1 ในประเทศไทย" with the subline "คลังสินค้าออนไลน์ที่ยืดหยุ่น เชื่อมต่อได้ทุกช่องทางการขาย". The home page opens on a blurred warehouse photograph (cardboard boxes on a conveyor, branded boxes with the cloud-house logo) under a centered, gradient-colored brand title, two pill buttons ("ขอใบเสนอราคา" filled teal, "ดูบริการของเรา" outlined) and a header that lists Fulfillment Solutions, Integration, Industries, Why MyCloud, Pricing, Credential and Knowledge Center plus a "ติดต่อเรา" pill and a TH language switch. Below the hero a dark band explains the service in Thai with teal-highlighted keywords (eCommerce, ขายหลายช่องทาง, APIs, ตลอด 24 ชม.) beside the uppercase "MYCLOUD FULFILLMENT" label, followed by a warehouse video tile with a play button and a "HOW IT WORKS / ขั้นตอนการทำงาน" section. The copy is confident and functional: it sells integrations (Lazada, Shopee, TikTok, LINE SHOPPING, Meta) and a 24-hour operations promise ("ตลอด 24 ชม.").

## Colors
The brand color is teal `#00aaad`: it fills the primary buttons, the footer, the outlined button's border and text, and highlighted words. Its hover state measured `rgb(20, 210, 214)` on the "ติดต่อเรา" button, with a shadow `rgba(0, 0, 0, 0.2) 0px 4px 5px 0px`. Page sections alternate between white `#ffffff`, a very pale mint `#f2fefa` and a charcoal `#1e1e1e` band (the largest background area). Text is `#4f4f4f` for most body copy (4,076 characters; also the site's `--s-grey`), `#333333`, `#1f1f1f` for headings on light sections, `#828282` and `#525252` for secondary text, `#222222` for nav links (also `--s-text`), and `#ffffff` on the dark band and teal areas. Titles ("MyCloud Fulfillment", "MYCLOUD FULFILLMENT") are clipped to a 90-degree gradient from `rgb(0, 176, 229)` to `rgb(5, 245, 147)`. The root variables also include `--s-line` `#dcdfe5`, plus WordPress and Kadence preset colors (for example `--wp--preset--color--vivid-purple` `#9b51e0`) that are framework defaults and not brand colors.

## Typography
Two families: IBM Plex Sans Thai for 8,898 measured characters and Lexend for 97 (Latin headings). The display h1 is IBM Plex Sans Thai 48px, weight 600, line-height 72px; the h2 "MYCLOUD FULFILLMENT" uses Lexend 32px weight 600 with 48px line-height; h3 is 24px weight 600 with 36px line-height. Body copy is 18px weight 400 with 27px line-height. Primary buttons use 22px weight 600 (line-height 32.4px), secondary buttons 20px weight 600, navigation 18px weight 500, inputs 16px weight 500. Sizes by character count are led by 18px (6,234), then 16px, 24px, 36px, 20px and 48px. Both families are open Google fonts, so no substitutes are required. Weight 400 covers 6,520 characters, 600 covers 1,904 and 700 covers 571.

## Layout
The desktop capture is 1,280px wide and 10,415px tall. The header is a white bar with a thin teal line beneath it; the logo is at the left, seven menu items spread across the right, and the contact and language controls on a second row. The hero is a full-width photo with centered text stack. The dark band uses a diagonal slanted edge at its bottom-right, with a rounded video tile centered over it. Content sections are centered with headings in teal uppercase Latin over a Thai black subtitle. Measured gaps are 32px (38 uses), 16px, 8px, 25px, 20px; paddings are 20px, 15px, 18px, 40px, 25px and 60px.

The pattern repeats down the page: a short uppercase Latin kicker in teal (for example "HOW IT WORKS"), a black Thai heading directly under it, then illustrated step cards. Imagery is documentary rather than decorative: real warehouse photographs, branded boxes and a conveyor-line video still, tinted teal where the video tile sits on the dark band, so the brand color reaches into the photography as well as the interface.

## Elevation & Depth
Cards share one soft grey shadow, `rgba(107, 107, 107, 0.08) 5px 13px 15px 0px` (five uses), offset down and right. Buttons add a small `0px 4px 5px` shadow on hover, and one element carries an inset shadow `rgba(0, 0, 0, 0.25) 0px -2px 4px 0px inset`. Depth otherwise comes from the dark band against white sections and the slanted divider, not from stacked elevations. The cookie notice that appears over the hero is a consent popup and is not documented as UI.

## Shapes
Buttons are pills: the primary button radius measured 500px (token `rounded.pill`, 9999px) and the "ติดต่อเรา" button 50px. Cards and the video tile use 20px (14 uses); circles at 50% appear on icons; the text input uses 3px and one element 18px. The system favors very round buttons with moderately rounded 20px containers.

## Components
**button-primary**: teal `#00aaad`, white text, IBM Plex Sans Thai 22px weight 600, pill radius, padding 14px 50px, height 60px (ขอใบเสนอราคา, 320px wide on desktop).
**button-secondary**: teal fill, white text, 20px weight 600, pill, padding 8px 20px, height 48px (the "รายละเอียดเพิ่มเติม" and "ติดต่อเรา" pills).
**link (outlined button)**: white fill, teal text and teal border, pill, padding 14px 50px (ดูบริการของเรา).
**nav-link**: 18px weight 500, `#222222`.
**text-input**: white, black text, 16px, 3px radius, padding 4px 6px, height 36px.
**card**: 20px radius, soft grey shadow, `#222222` text.
**footer**: teal `#00aaad` background with white text.

## Design System Architecture
No public design-system page or brand guideline is linked from the home page. The site is a WordPress build: the root variables carry `--wp--preset--*` presets and Kadence tokens (`--global-kb-font-size-xxl` `clamp(2.5rem, 1.456rem + 3.26vw, 4rem)`, `--global-kb-font-size-md`), alongside the brand's own `--s-*` set (`--s-grey` `#4F4F4F`, `--s-text` `#222`, `--s-line` `#dcdfe5`, `--s-title-bg-blur` 20px). The de-facto system is therefore: teal accent, charcoal band, pale mint section, pill buttons, 20px cards, IBM Plex Sans Thai plus Lexend.

## Do's and Don'ts
- Do use `#00aaad` for primary actions and the footer, with white text.
- Do pair a filled teal pill with an outlined teal pill for the two hero actions.
- Do alternate white, `#f2fefa` and `#1e1e1e` sections and highlight keywords in teal on dark.
- Do set Latin headings in Lexend and Thai text in IBM Plex Sans Thai.
- Don't use WordPress preset colors such as `#9b51e0` as brand colors.
- Don't add heavy shadows; the card shadow is 8% grey.
- Don't treat the cookie notice as a component.

## Responsive Behavior
At the 390px mobile pass the page h1 (the gradient "MyCloud Fulfillment" title) measured 32px weight 700 with 48px line-height in a 298px block. The primary button label stayed 22px, 600 weight, with line-height 28.8px, height 57px and width 360px (60px by 320px on desktop). Mobile font sizes by character count: 18px (4,146), 16px (4,033), 20px (2,960), 24px, 32px, 22px, 14px. The mobile header lists "ติดต่อเรา", Home, Fulfillment Solutions and Omnichannel Management. Breakpoint widths were not measured.

## Iteration Guide
1. Start with teal `#00aaad`, ink `#4f4f4f`, canvas `#ffffff`, dark band `#1e1e1e`, mint `#f2fefa`.
2. Build a photo hero with a centered gradient title and two pill buttons.
3. Follow with a dark band, teal highlighted keywords and a rounded video tile.
4. Use 20px cards with the soft grey shadow.
5. Keep Thai at 18px/27px for reading text.
6. Re-run the gate after renames.
