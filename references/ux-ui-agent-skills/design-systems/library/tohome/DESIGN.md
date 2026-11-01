---
version: alpha
name: Tohome.com
category: "Thai Brands"
description: "Thai online IT and gadget retailer (tohome.com): indigo #241f61 and #282467 header and buttons, white and #f8fafc canvas, red #dc2626 flash-sale and #e11d48 price accents, Anuphan typeface up to weight 900, 16px cards and pill inputs."
colors:
  canvas: "#ffffff"
  page-body: "#f8f8f8"
  ink: "#1e293b"
  primary: "#241f61"
  on-primary: "#ffffff"
  ink-cta-red: "#cc0000"
  surface-2: "#f8fafc"
  nav-bg: "#282467"
  sale-red: "#dc2626"
  flash-red: "#ca2c2a"
  price-red: "#e11d48"
  ink-muted: "#64748b"
  ink-subtle: "#94a3b8"
  hairline: "#f1f5f999"
  link: "#212121"
  nav-link-text: "#1e48a3"
  text-input-text: "#000000"
  card-bg: "#241f610d"
typography:
  display:
    fontFamily: Anuphan
    fontSize: 20px
    fontWeight: 900
    lineHeight: 28px
  display-mobile:
    fontFamily: Anuphan
    fontSize: 15px
    fontWeight: 900
    lineHeight: 18.75px
  heading:
    fontFamily: Anuphan
    fontSize: 30px
    fontWeight: 900
    lineHeight: 36px
    letterSpacing: "-0.75px"
  body:
    fontFamily: Anuphan
    fontSize: 11px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: Anuphan
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  nav:
    fontFamily: Anuphan
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Anuphan
    fontSize: 13px
    fontWeight: 800
    lineHeight: 22.75px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 6.4px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-cta-red}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 20px
    height: 44px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.2xl}"
    padding: 6.4px 20px
    height: 48px
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 10px 48px 10px 16px
    height: 44px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.link}"
    rounded: "{rounded.pill}"
  footer:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.page-body}"
    padding: 24px 0px
---

## Overview

Tohome.com (https://www.tohome.com) is a Thai online retailer of IT products. The page title is "Tohome.com ซื้อของออนไลน์ สินค้าราคาถูก รับประกันของแท้ 100%", the home page tagline is "Tohome - แหล่งรวมสินค้า IT แบรนด์ดังราคาถูกที่สุด ของแท้ รับประกันศูนย์" (a source of branded IT goods at the lowest prices, genuine, with official warranty), and the footer names the operator as บริษัท เอเชี่ยนสตาร์เทรดดิ้ง จำกัด.

The home page is a modern, app-like storefront. The top bar is a deep indigo band with a rounded white-on-indigo "คูปองของฉัน" (my coupons) button, a cart badge and sign-up and login links, above a white search row with the tohome.com wordmark, a pill-shaped search field with a circular search button, and shortcut links (payment notification, order status, all promotions, request a quote, TH | EN). The hero is a large rounded banner for a "10.10 IT Upgrade Day" campaign with product shots (a Logitech mouse, an Xiaomi monitor and router). Below it come a small disclaimer line, a white "ขอใบเสนอราคา" (request a quotation) card with a red document icon and a "ส่งคำขอ" button, a row of round brand-logo chips, a red Flash Sale band with a countdown in dark digit tiles, horizontally scrolling product cards with a red percent-off badge and bold red prices beside struck-through originals, a "หมวดหมู่สินค้า" row of pill category chips with item counts, and further product carousels "ดีลร้อน PAYDAY" and "สินค้ามาแรงประจำสัปดาห์".

The voice is promotional Thai retail copy with emoji used as icons in labels (a ticket emoji on the coupon button). Density is high but orderly: cards, chips and carousels with generous 16px padding and rounded corners. The page measured 6,745px tall at 1280px wide.

## Colors

The site ships shadcn-style CSS variables on the root: `--primary: 243 51% 25%` (hsl, equal to the indigo below), `--radius: 0.5rem`, `--destructive: 0 84.2% 60.2%`, `--border: 214.3 31.8% 91.4%`, `--muted-foreground: 215.4 16.3% 46.9%` and `--foreground: 222.2 84% 4.9%`.

- **Indigo `#241f61`** is the primary: the measured fill of the "คูปองของฉัน" button (hover goes to rgb(46, 41, 102), `#2e2966`, with a soft indigo shadow) and the base of the `#241f610d` card tint. **`#282467`** (436 area weight) is the header and footer background. White text sits on both.
- **Reds:** `#dc2626` (74 area weight, Flash Sale and badge fills, also the base of the `rgba(220, 38, 38, 0.35)` badge shadow), `#ca2c2a` (120), **`#e11d48`** (481 characters, prices) and `#cc0000` (text of the "ดูทั้งหมด" button).
- **Canvas `#ffffff`** (7,079), `#f8fafc` (5,127), `#f8f8f8` (5,120, the page body) and `#f8fafc66`; `#eef2ff` is a pale indigo tint.
- **Text:** slate scale: `#1e293b` (3,079 characters) body ink, `#0f172a` (298) headings, `#64748b` (707) secondary, `#94a3b8` (447) tertiary, `#334155`, `#475569`; plus `#374151`, `#212121` and `#4b4b4b`. `#4f46e5` (160) and `#2563eb` (53) are blue link-like text colors.
- **Borders:** `#f1f5f999` and `#f8fafccc` (87 each), `#e2e8f0` (54), `#e0e7ff` (16).
- The consent popup's colors and the chat avatar are not brand tokens.

## Typography

One family: **Anuphan**, loaded at 300, 400, 500, 600 and 700 (7,015 measured characters, all Anuphan). Weights are used boldly: 600 (3,121 characters), 400 (1,193), 900 (1,029), 500 (750), 300 (527), 800 (203) and 700 (192).

Roles: display 20px / 900 / 28px ("ขอใบเสนอราคา", 15px / 18.75px on mobile); heading 30px / 900 / 36px with -0.75px letter-spacing ("หมวดหมู่สินค้า"); body 11px / 400 / 20px (disclaimer text); button 14px / 700 / 20px; secondary button 13px / 800 / 22.75px; nav and input 16px / 400 / 24px. By character count 14px dominates (4,219), then 12px (1,013), 18px (544), 13px (331) and 30px (298); 9px (189) is used in tiny labels.

## Layout

Content sits in a centred container with full-width colour bands (header, flash sale band, footer). Sections stack: banner, quotation card, brand chips, flash sale carousel, category chips, then carousels, with 16px (187 occurrences) and 10px (167) paddings and gaps of 6px (87), 4px and 8px. Product cards sit in horizontal carousels with arrow controls at the edges and the last visible card cut off at the container edge.

## Elevation & Depth

Shadows are tinted and purposeful: `rgba(220, 38, 38, 0.35) 0px 2px 8px 0px` on red badges (56 uses), `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` on raised cards (14), `rgba(0, 0, 0, 0.25) 0px 3px 6px 0px` (6), and `rgba(36, 31, 97, 0.2) 0px 4px 12px 0px` on the hovered coupon button. Cards otherwise rely on 1px translucent slate borders.

## Shapes

Radii are generous: 16px (93 occurrences, cards and banners), 12px (89), 4px (82), 9999px (78, pill chips, search field and the coupon-count badge), 6px, 8px, 20px (the coupon button) and `16px 16px 0px 0px` (carousel card tops). Pill and 16px shapes give the site a soft, app-like feel.

## Components

- **Coupon button ("คูปองของฉัน"):** `#241f61` fill, white 13px / 800 text, 20px radius, `6.4px 20px` padding, 48px tall; hover lightens the fill and adds an indigo shadow.
- **"ดูทั้งหมด" button:** white fill, `#cc0000` 14px / 700 text, 12px radius, `8px 20px` padding, 44px tall, soft shadow.
- **Search input:** white fill, black 16px text, 9999px radius, `10px 48px 10px 16px` padding, 44px tall, raised shadow.
- **Category chips:** white pills with icon, label and a count in grey.
- **Product card:** white, 16px radius, red percent-off badge at the top left, bold red price with struck-through original.
- **Header:** `#282467` with white text; **footer:** `#282467`, `#f8f8f8` text, `24px 0px` padding.
- Consent popup, chat avatar and mourning ribbon are not brand components.

## Design System Architecture

No public design system or brand guidelines were found; /brand, /press, /about and /design return 404. The shipped CSS is Tailwind with shadcn/ui-style semantic variables (`--background`, `--card`, `--popover`, `--primary`, `--secondary`, `--muted`, `--accent`, `--destructive`, `--border`, `--input`, `--ring`, `--radius`) expressed as HSL triplets, and MUI (`MuiBox-root` class names are present in the consent overlay). The brand layer is the indigo `#241f61`, the red sale accents and Anuphan. Most measured colors fall on the Tailwind slate scale.

## Do's and Don'ts

Do use indigo `#241f61` for primary actions and `#282467` for the header and footer. Do reserve red (`#dc2626`, `#e11d48`) for discounts, badges and flash sales. Do use Anuphan at heavy weights (800 to 900) for section titles. Do round cards at 16px and chips and search at pill radius.

Don't use blue `#2563eb` or `#4f46e5` as the main action color; they are measured only on small link text. Don't document the consent popup, chat avatar or ribbon as UI. Don't remove the red-tinted shadow from badges.

## Responsive Behavior

Measured at 390px: the h1-role text is 15px / 900, the h2 "หมวดหมู่สินค้า" is 20px / 900, body 11px / 400, and the coupon button text is 11px / 800 with a shorter label ("คูปอง"). The mobile pass recorded font sizes 12px (3,541 characters), 14px (1,409), 10px (511) and 11px (337). Column counts and breakpoints were not measured.

## Iteration Guide

1. Start from the frontmatter tokens; `primary` is `#241f61` and the measured white "ดูทั้งหมด" button is `button-primary`.
2. Compose pages from an indigo header, a rounded hero banner, a quotation card, brand chips, a red flash-sale band and carousels.
3. Use `#e11d48` for prices and `#dc2626` for badges with the red-tinted shadow.
4. Set Anuphan 14px for card text and 900 weight for headings.
5. Not measured: tablet layout, dark mode, hover on cards; check the live site.
