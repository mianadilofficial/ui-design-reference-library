---
version: alpha
name: Asia Books
category: "Thai Brands"
description: "Asia Books (asiabooks.com) is a Thailand bookstore web shop set in DB Heavent at 16px to 24px, black on white with a Tailwind-style green brand (#00b54e fills, #22b25a links), a cream #fff8e7 New Releases band, red #da383f discount prices in pink-bordered pills, and 50px pill outline buttons around book-cover carousels."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#00b54e"
  on-primary: "#ffffff"
  brand-green-light: "#65c489"
  green-link: "#22b25a"
  price-red: "#da383f"
  price-tint: "#fbeff0"
  hairline: "#fcb3b5"
  surface-gray: "#e5e7eb"
  surface-cream: "#fff8e7"
  ink-grey: "#6c6c6c"
  ink-input: "#111827"
  outline-green: "#cdead8"
  footer-border: "#e4e7e5"

typography:
  display:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 21px
    fontWeight: 500
    lineHeight: 23.1px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 29px
  subheading:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 29px
  body:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19px
  button:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 22px
  input:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 21px
    fontWeight: 400
    lineHeight: 25px

rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 9.6px
  2xl: 10px
  3xl: 12px
  4xl: 18px
  cta: 50px
  pill: 9999px

spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px

components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-grey}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 8px 14px 8px 20px
    height: 36px
    borderColor: "{colors.outline-green}"
  link:
    textColor: "{colors.green-link}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.green-link}"
  nav-link:
    textColor: "{colors.green-link}"
    typography: "{typography.display}"
  text-input:
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    padding: 8px 0px
    height: 41px
  footer:
    textColor: "{colors.green-link}"
    borderColor: "{colors.footer-border}"
---

## Overview

Asia Books describes itself on the shop's first screen through what it sells and how: a green utility bar with Products, Promotions, Best Sellers, New Releases, News & Activities, Find a Store and "Contact Us: 1459 Press 1"; a white header with the ASIA BOOKS ONLINE logotype, a pill-shaped search field ("Search by title, author, ISBN, or keyword"), account, wishlist and cart icons and an English language switch; and then a stack of merchandised book shelves. The rendered page (read in a browser at https://www.asiabooks.com/) is a single-page application that returns only a short shell to a plain HTTP request, so everything here is from the browser-rendered page.

The look is that of a modern ecommerce storefront: a yellow campaign hero ("10.10 BIG BOOK SALE, 20% OFF, IN-STOCK ENGLISH BOOKS", with a SHOP NOW button, dated 8 to 12 Oct 26), then horizontal carousels titled Best Sellers, New Releases and Coming Soon, a Shop by Category row with six outlined tiles (Children's Book, Fiction & Literature, Non-Fiction, Lifestyle, Business & Management, Toys & Games), and more campaign banners at the foot. Covers do all the colour work; the interface is white, black type and green accents.

On first load the site opens a newsletter popup ("SUBSCRIBE & JOIN NOW", "Join Asia Books Community, discover new books, exclusive offers, events, and book recommendations") with an email field and a green Subscribe button, and a cookie-settings gear sits at the lower left. The extractor initially picked that popup's grey Submit button as the primary action. Popup controls are not brand UI, so the measurements here come from a clean re-extraction and the popup is excluded.

## Colors

Canvas is #ffffff and ink is #000000, the most-read text colour by a wide margin. Greys: #6c6c6c is used for secondary text such as author names and for the View More button label, #111827 for form input text, and #e5e7eb as a measured neutral surface. The New Releases band is a warm cream, #fff8e7, one of the few full-width background changes on the page.

The brand colour is green. The measured fills are #00b54e (the strongest green background by area in the measurements; I did not isolate which element it belongs to, though the Best Seller and New Release tags are green in the capture) and the lighter #65c489; #22b25a is the green used for navigation links, section titles such as Coming Soon, and the footer text. A pale green #cdead8 outlines secondary buttons and category tiles, and #e4e7e5 is the footer border. Price discounts use a signal red, #da383f, set on a pale pink #fbeff0 pill with a #fcb3b5 border.

Primary is the green #00b54e. No filled green button was detected on the clean page; the green appears in the capture on labels, tags and links, so the component tokens use the outlined button that was measured. The site's own CSS also declares Tailwind palette variables (`--color-green-600`, `--color-blue-700`) and a `--color-brand-dark`, which are framework values rather than the visible brand.

## Typography

One family does everything: DB Heavent, loaded at 400, 500 and 700. Product titles on the covers shelf are uppercase DB Heavent 21px at weight 500 and a 23.1px line height; section titles (Best Sellers, New Releases, Shop by Category) are 24px at weight 500 with a 29px line height; secondary text such as author names is 16px regular on a 19px line height; buttons are 18px at 500 on a 22px line height; and search and form inputs are 21px regular. On a 390px mobile viewport the headline style measures 28px at weight 500 with a 29px line height.

The site sets both Thai and English titles in it. I did not find a foundry or licence page, so no substitute is claimed; if it is unavailable, choose a compact humanist sans that supports Thai script.

## Layout

A utility bar (green-tinted) sits above the header; the header holds logo, a category dropdown trigger plus a long search field, and account actions. Content is a single column inside page margins. Each shelf has a left-aligned section title and a right-aligned "View More" pill, and below it a horizontally scrolling row of book cards with round arrow controls at the edges. Each card shows a cover, a title in uppercase, the author in grey, a star rating (for example 4.0) with review count, the sale price in red with a discount pill and the original price struck through. Prices are written with the ฿ symbol and two decimals. The measured spacing steps are 2px, 3px, 5px, 6px, 7px, 8px, 10px, 12px, 14px and 15px, with buttons padded 8px 14px 8px 20px and inputs 8px vertical.

## Elevation & Depth

Cards float lightly: the most common shadow in the measurements is rgba(0, 0, 0, 0.25) 0px 4px 10px 0px (79 elements), with a lighter rgba(0, 0, 0, 0.1) 0px 4px 10px 0px in a stacked-ring form on 13. Elevation therefore reads as a short, soft drop beneath covers and carousel controls. Band changes (white to cream #fff8e7 for New Releases) provide the rest of the depth. There are no hard borders around cards except the pale green outline on category tiles.

## Shapes

The shape language is pill. The outlined buttons use 50px (`cta`) and the search field and badges are fully round. Smaller radii step up through 4px, 5px, 6px, 8px, 9.6px, 10px, 12px and 18px, which cover cards, tags and tiles: the capture shows covers and tiles with gently rounded corners of that range. I did not attribute each radius to a specific element beyond the 50px button, so choose within that ladder and keep corners soft. Square corners are not part of the style.

## Components

**Outlined View More button.** White fill, #6c6c6c label, DB Heavent 18px at 500, 36px tall, padding 8px 14px 8px 20px, 50px radius, a #cdead8 border and a small arrow glyph after the label. It sits top-right of each shelf.

**Book card.** Cover image, uppercase title (21px, 500), author in grey, rating row, red price with pink discount pill and strikethrough original price, a heart icon on the cover, and a green tag ("Best Seller", "New Release") at the top-left of the cover.

**Category tile.** An outlined tile with a light green (#cdead8) border and a line icon above a grey label, six across.

**Navigation.** Green (#22b25a) uppercase-style labels in the utility bar, with a chevron on Products; the header uses white with the search field as the dominant element.

**Search field.** A long pill with a magnifier icon, placeholder text in grey and 21px input text in #111827, 41px tall.

**Newsletter popup (not brand UI).** Mentioned only so you can exclude it from extractions.

## Design System Architecture

No public design system, brand guidelines or token package was found for Asia Books. The brand, press, about-us and design paths on asiabooks.com returned only the application shell (the same short page for every path), so no documentation is available there. The de-facto system is Tailwind CSS on a Magento PWA front end: the root exposes Tailwind colour variables (`--color-blue-100`, `--color-green-600`, `--tw-ring-shadow`) alongside Venia variables (`--venia-global-color-gray-100` to `-700`), the naming of Adobe's PWA Studio reference storefront, plus a custom `--color-brand-dark`. That is an inference from variable naming and not a published statement. Primary source: https://www.asiabooks.com/ .

## Do's and Don'ts

Do keep the page white and let covers be the colour. Do use green (#00b54e, #22b25a) for labels, tags, links and section titles, red (#da383f) only for discounts, and cream (#fff8e7) for a single highlighted band. Do shape buttons as 50px pills with a pale green outline. Do show price, discount pill and original price together.

Don't fill buttons with the grey #bbbbbb that appeared in the popup form; it was a popup control. Don't use red for anything but price discounts. Don't mix other fonts with DB Heavent. Don't use square corners on cards or buttons.

## Responsive Behavior

The extraction measured a 390px mobile viewport, where the top headline style becomes 28px at weight 500 (versus 21px uppercase on the desktop card titles). The shelves are horizontally scrolling carousels with edge arrows, which are by nature adaptable to narrow widths, but I did not capture or inspect mobile layouts, so I make no specific claims about the header, utility bar or category tiles on small screens.

## Iteration Guide

For new shelves, copy the pattern: 24px/500 title on the left, outlined pill View More on the right, then book cards with a green tag and a red discount pill. Keep text black, secondary text #6c6c6c and links #22b25a. When adding promotions use a flat saturated banner and avoid new interface colours. Compare against https://www.asiabooks.com/ with the newsletter popup dismissed, then re-run the verification script for this slug.
