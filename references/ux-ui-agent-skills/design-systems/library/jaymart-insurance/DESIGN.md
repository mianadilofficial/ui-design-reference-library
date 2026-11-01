---
version: alpha
name: Jaymart Insurance
category: "Thai Brands"
description: "Jaymart Insurance homepage: Prompt typeface at 12px body and 14px links, charcoal ink (#333333), brand red (#d9282d) in a red gradient header and footer band, charcoal footer (#3e3e3e), white cards with 15px radius and a faint #d2d2d2 shadow, pill-shaped section labels at 40px radius and busy campaign banners."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#d9282d"
  surface-2: "#3e3e3e"
  surface-3: "#d6d6d6"
typography:
  display:
    fontFamily: Prompt, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 17.6px
  body:
    fontFamily: Prompt, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1429px
  link:
    fontFamily: Prompt, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 5px
  sm: 15px
  md: 40px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 12px
  s4: 15px
  s5: 20px
  s6: 28px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 10px 20px
    height: 43px
    borderColor: "{colors.canvas}"
  link:
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 10px
    boxShadow: rgb(210, 210, 210) 0px 0px 2px 0px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
    padding: 20px 0px 0px
---

# Jaymart Insurance — Design System Notes

## Overview
Measured URL: http://www.jaymartinsurance.co.th, which redirected to https://www.jaymartinsurance.co.th/page/home/ (title "HOME - Jaymart Insurance", language en). Jaymart Insurance (the company line in the footer reads "บริษัท เจมาร์ท ประกันภัย จำกัด (มหาชน)") is a Thai non-life insurer. The fetched page lists navigation items for Home, Online Insurance (Jaymart Connect), Insurance Products, Claims, Service Network, News & Promotions, About Us and Contact, and the footer gives the company address, phone and email, agent portals (P&O, E-JP, E-JAYMART, E-AGENCY), insurance-industry network links and social icons.

The page is a dense, portal-like homepage. A red gradient header contains a round white-outlined logo at left; a line of contact text, "Contact 02 099 0555 กด 1 แจ้งอุบัติเหตุ 24 ชั่วโมง / ติดต่อผ่านช่องทางออนไลน์", with Facebook and LINE icons; a bold white menu row; and a "เข้าสู่ระบบ" (log in) user icon at the right. Under it, a banner area shows a large carousel image for an SME shop package ("ประกันร้านค้า SME SMART PLAN", with "10 ล้านบาท" of cover) beside two stacked banners for travel and home insurance. A red pill-shaped button with a drop shadow, "สนใจประกันประเภทไหน คลิ๊กเลย" (click the type of insurance you are interested in), sits centered below. Then "โปรโมชั่น" (promotions) and "บทความ" (articles) each have a red pill label on the left, a small red "+ โปรโมชั่นอื่นๆ" (other promotions) link on the right and a horizontal row of white cards with a poster image, a blue hashtag category label, a bold red title, a gray excerpt and a calendar-icon date. A full-width red gradient band asks customers to contact the claims-complaint center and offers a white outlined button "รับเรื่องร้องเรียน". A charcoal footer in four columns (Contact Us, Agent, Insurance Network, Follow Us / Quick links) and a thin red copyright strip end the page.

A royal mourning modal and a cookie banner were present in the first capture; the extractor was re-run once with `--force`, after which the page record shows the modal scrim (`scrim models`) and the `cc-container` consent banner as hidden. They are not brand UI.

## Colors
- **Canvas `#ffffff`** (area-weight 1,385): page and card background.
- **Ink `#333333`**: the most-read text color (1,579 characters).
- **Primary red `#d9282d`**: red text on 521 characters (card titles, pill labels, links) and the base of the red header/footer gradients; its area-weight in the flat-fill list is 0 because the large red regions are gradients.
- **Charcoal `#3e3e3e` (`surface-2`)**: the footer background (area-weight 452).
- **Gray `#d6d6d6` (`surface-3`)**: borders and dividers (area-weight 0 in flat fills).
- **White `#ffffff`** text: 1,097 characters on red and charcoal bands.

The link color `#337ab7` measured on 162 characters is Bootstrap 3's default link color, a framework default and not a brand color; it was dropped from the tokens, and the card and link components no longer reference it. Browser/framework defaults aside, hash-tag category labels in the capture are shown in a blue, and the blue was not adopted as a brand value.

## Typography
A single family, **Prompt** (400 and 600 loaded; 3,359 characters), with Helvetica, Arial and sans-serif fallbacks, covers everything. Glyphicons Halflings and FontAwesome supply icons.

- `display`: Prompt, 16px / 17.6px, weight 700, measured on the red pill button text.
- `body`: Prompt, 12px / 17.1429px, weight 400 (card excerpts and footer).
- `link`: Prompt, 14px / 20px, weight 400.

Prompt is an open font on Google Fonts, so no substitute is needed. Type is small for a Thai interface: the body role measures only 12px.

## Layout
Width 1280px, height 1926px for the page measured. A centered container of about 855px in the 960px-wide capture holds the banners and the horizontally scrolling card rows (four cards visible, the fifth cut off by the container edge, with red-and-gray pagination squares below). The header and the two bands are full-bleed. The footer uses four columns with underlined headings. Card padding is 10px, the secondary button uses `10px 20px` padding at 43px height and the footer `20px 0px 0px`.

## Elevation & Depth
Shadows: `rgb(210, 210, 210) 0px 0px 2px 0px` (12 uses) around cards, and `rgb(101, 101, 101) 0px 0px 8px 0px` (3 uses) under the red pill labels and buttons, which makes the pills look embossed. The gradient bands give the header and the claims call-out their depth.

## Shapes
Radii: 15px (12 uses: cards), 40px (3 uses: the pill labels), 5px (2) and 50% (1: the round logo). Tokens: `xs` 5px, `sm` 15px, `md` 40px, `pill`. Cards use `sm` at 15px; the pill section labels use `md` at 40px.

## Components
- **Pill label / call-out button**: red `#d9282d` gradient fill (not a flat color in the extraction), white 16px bold Prompt text, 40px radius and the 8px gray shadow.
- **button-secondary** (outlined white on red): white text, white border, 14px Prompt, `10px 20px` padding, 43px tall; used for "รับเรื่องร้องเรียน".
- **card**: white, 15px radius, 10px padding, `rgb(210, 210, 210) 0px 0px 2px 0px` shadow, with a poster image on top, a category hashtag, a red bold title and a gray excerpt.
- **nav / nav-link**: white text, 12px, on the red gradient header.
- **footer**: `#3e3e3e` with white text and `20px 0px 0px` padding.

## Design System Architecture
No public design system exists as far as the opened source (https://www.jaymartinsurance.co.th/page/home/) shows: the fetched page lists navigation, promotions, articles, a product selector, agent portals, regulators and social links but no brand-guideline or token link, so no search was run. The CSS corpus uses Bootstrap 3 conventions (Glyphicons Halflings and the `#337ab7` default link color are present), with brand red applied through gradients and component styles.

## Do's and Don'ts
- Do use red `#d9282d` gradients for header, call-out bands and pill labels.
- Do keep cards white with a 15px radius and a thin gray halo.
- Do use the charcoal `#3e3e3e` footer with white text.
- Don't use Bootstrap's `#337ab7` link blue as a brand color.
- Don't place text on red below 14px without checking legibility.
- Don't copy the mourning modal or cookie banner into brand UI.

## Responsive Behavior
No mobile (390px) measurement exists for this page: the extraction has no display-mobile token. Layout behavior below 1280px, the collapse of the red menu row and the behavior of the card carousels at narrow widths are not measured and are not described.

## Iteration Guide
1. Build the page from a red gradient header, white content area and a `#3e3e3e` footer.
2. Use white cards at 15px radius with a 2px gray halo for promotions and articles.
3. Use red pill labels at 40px radius for section titles.
4. Set text in Prompt: 12px body, 14px links, 16px bold labels, with `#333333` ink.
5. End with a red claims-contact band and a white outlined button.

## Content and Voice
The voice is friendly, service-first and promotion-heavy. Campaign names mix Thai and English ("ประกันร้านค้า SME SMART PLAN", "Winter Safety", "MONSOON SEASON") and are tied to a loyalty currency, J POINT, so cards promise points as well as discounts ("สมัคร J POINT ผ่าน เจมาร์ท ประกันภัย คุ้มค่า", join J POINT through Jaymart Insurance). The articles are seasonal safety tips written as numbered lists ("15 วิธีรับมือกับยุงลาย ป้องกันไข้เลือดออก", fifteen ways to handle mosquitoes; "8 ที่เที่ยวหน้าฝน ขับรถเที่ยวชมธรรมชาติ", eight rainy-season drives) and carry hashtag-style category labels (#โปรโมชั่น, #ข่าวสารและบทความ). The footer's claims-complaint band speaks directly and concretely, with a department phone line and extension numbers. Dates are shown in English day-month-year format ("20th Aug, 2025"), which mixes languages on the same card.
