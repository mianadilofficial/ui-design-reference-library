---
version: alpha
name: Centara The 1
category: "Thai Brands"
description: "Centara The 1 (centara1card.com), Centara Hotels & Resorts loyalty portal: #f7f7f7 canvas with black footer and white header, black Open Sans text at 14px to 15px, Centara red #b5121b and #a12a23 square buttons (44px to 58px tall), 4px radii, flat surfaces."
colors:
  canvas: "#f7f7f7"
  ink: "#000000"
  primary: "#b5121b"
  on-primary: "#ffffff"
  primary-deep: "#a12a23"
  primary-hover: "#c34048"
  book-now-hover: "#cc232ce6"
  surface-gray: "#eeeeee"
  hairline: "#c4c4c4"
  border-dark: "#333333"
typography:
  display:
    fontFamily: "\"Open Sans\""
    fontSize: 15px
    fontWeight: 400
  display-mobile:
    fontFamily: "\"Open Sans\""
    fontSize: 16px
    fontWeight: 500
  subheading:
    fontFamily: "\"Open Sans\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  body:
    fontFamily: "\"Open Sans\""
    fontSize: 10px
    fontWeight: 400
  button:
    fontFamily: "\"Open Sans\""
    fontSize: 15px
    fontWeight: 500
rounded:
  xs: 4px
  none: 0px
spacing:
  s1: 3px
  s2: 8px
  s3: 10px
  s4: 11px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 21px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    height: 58px
  button-primary-hover:
    backgroundColor: "{colors.book-now-hover}"
  button-subscribe:
    backgroundColor: "{colors.primary-deep}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 40px
    height: 44px
  button-subscribe-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    height: 155px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
---

## Overview

Centara The 1 (https://centara1card.com, title "CentaraThe1") is the loyalty and member portal of Centara Hotels & Resorts. The measured page is 1280px wide and 1273px tall with 156 visible elements, so it is a compact page: a white header 155px tall, a body of promotional banners on a pale gray canvas, and a black footer. The page's own text describes a members area ("Members Get More", "Enjoy 15% off most rates and other exclusive benefits"), a sign-in form (Email, Password, Remember me, Sign In, social-login options), a "Book Now" action and a menu with Earn Points, Redeem Points, Book With Points, Offers and Our Partners. Language links offer EN, TH, JP and VN.

The measured header text begins "Centara Journal / Contact Us / EN / Sign-in or Sign-up / Book Now / Re..." in black Open Sans at 14px on a white band. The capture does not show this header (it begins with an empty pale-gray area) and shows only part of the member content, so descriptions of the header here come from the measurement, not from the image.

What the capture does show is a partner banner: a wide resort photograph (palm trees, a turquoise pool) beside a gray panel with the logos "CENTARA The1 x KRISFLYER", the serif line "Convert CentaraThe1 points to get KrisFlyer miles", a small uppercase line "AND START PLANNING YOUR NEXT HOLIDAY" and a red "LEARN MORE" button. Below it is a black footer with a row of brand logos in white (Centara Reserve, The Centara Collection, Centara Grand, Centara, Centara Life, Cosi, Spa Cenvaree, Centara The1), three link columns (About Us, Book With Points, Redeem Points; Offers, Our Partners, Contact Us; FAQ), a "Connect With Us" row of round social icons, a "Secured Payment" row of card logos, a "Subscribe to our newsletter" block with a red "Subscribe" button, a hairline rule, "Terms & Conditions" and "Privacy Policy" links, and the line "Copyright 2026. Centara Hotels & Resorts. All Rights Reserved".

The voice is transactional and benefit-led ("Members Get More", "Redeem your points for stay vouchers, merchandise and experiences").

## Colors

Measured text colors by character count are `#ffffff` (235) and `#000000` (200). Backgrounds by area are `#f7f7f7` (944), `#000000` (686), `#ffffff` (207), `#eeeeee` (68), `#b5121b` (8) and `#a12a23` (7). The canvas is the pale gray `#f7f7f7`; the body element reports `#ffffff`.

- **Canvas `#f7f7f7`** is the largest background area. **White `#ffffff`** is the header fill. **Black `#000000`** is the footer fill and the main text color on light surfaces; text on black is white.
- **Primary `#b5121b`** is the fill of the "Book Now" button (measured in the hover record and as the mobile primary CTA). On hover it measures `rgba(204, 35, 44, 0.9)` (`#cc232ce6`) with white text.
- **Primary deep `#a12a23`** fills the "Subscribe" button (the extractor's desktop primary CTA); on hover it measures `rgb(195, 64, 72)` (`#c34048`).
- **Grays:** `#eeeeee` (a light surface), `#c4c4c4` (a measured border) and `#333333` (a measured border).

The extractor chose `#a12a23` (Subscribe) as primary; `#b5121b` is the color of the header action "Book Now" and of the mobile CTA, so it is primary here and the Subscribe red is kept as `primary-deep`. The Centara site (centarahotelsresorts.com) declares `#B5121B` as `--button-primary-bg` in its own measurement. This page's root variables are Bootstrap defaults (`--bs-primary: #0d6efd`, `--bs-link-hover-color: #0a58ca`, and others), which are not brand colors. No gradient and no tint color were measured.

## Typography

One family, **Open Sans** (300, 400, 600 and 700 loaded), carries all 543 measured characters; an icon font (`icomoon`) is also loaded and the CSS corpus lists a Cardo face and `bootstrap-icons`. The page has no h1 or h2: the extractor's h1 role is a transparent-text logo link ("Centara Reserve", 15px, weight 400), so `display` in the tokens is simply the 15px base text size, and the mobile h1 role is the "Book Now" button (16px, weight 500).

- **Base text and links:** 15px, weight 400 (261 characters).
- **Subheading (footer h3 "Connect With Us"):** 14px on 16.8px, weight 400, white.
- **Body (copyright line):** 10px, weight 400, white, 286px wide at desktop and 320px at 390px.
- **Button:** 15px, weight 500 ("Subscribe"). At 390px the "Book Now" button is 16px, weight 500.

Measured sizes by character count: 15px (261), 10px (93), 14px (82), 16px (55), 12px (36), 13px (16). Weights: 400 (427), 600 (83), 500 (17), 300 (16). No letter-spacing was measured and no uppercase transform on the measured roles. The type scale is small and utilitarian: most text is 14px to 16px, and legal text is 10px.

Font substitutes: the declared family is Open Sans with no further fallback in the measured stacks; any neutral humanist sans at 14px to 15px keeps the layout.

## Layout

The page is a three-part vertical composition on a 1280px width: a 155px white header, a main area on `#f7f7f7`, and a black footer. In the capture the footer is arranged as a row of brand logos, a hairline rule, a five-column grid (three link columns, a social and payment column, a newsletter column), another hairline rule and a legal row with the copyright aligned to the right.

Measured gaps are 15px (4 occurrences), 35px, 27px, 8px and 25px (2 each); measured paddings are 3px (10), 20px (6), 10px (6), 16px (5), 11px (4), 12px (3), 40px (3), 30px (2), and 36px, 21px, 18px and 32px (1 each). The spacing tokens list these values from 3px to 21px. The partner banner in the capture is a two-column block: photograph at left and a text panel at right.

## Elevation & Depth

Desktop surfaces are flat: no box shadows were measured on visible elements. In the mobile pass the 76px header carries a soft shadow `rgba(0, 0, 0, 0.05) 0px 4px 10px 0px`. The CSS corpus lists `0 4px 15px 0 rgba(0, 0, 0, 0.08)` (8 declarations) and Bootstrap's `--bs-box-shadow` values (for example `0 0.5rem 1rem rgba(0, 0, 0, 0.15)`), which are framework defaults and not measured on visible components.

Depth comes from tone: pale-gray canvas, white header, black footer, and a photographic banner. Dividers are hairlines (`#c4c4c4`, `#333333`). The Book Now hover adds only a lighter, translucent red fill; the capture's circular back-to-top arrow in the footer is a utility control and is not documented as a component.

## Shapes

Buttons are square: "Book Now" and "Subscribe" both report a 0px radius in the hover records. The only radius measured on visible elements is 4px (5 occurrences); the capture shows white rounded tiles for the payment card logos. The CSS corpus lists 4px (11), 3px (6), 8px (5), 16px (4), 6px (3), 2px (3), 20px (2), 5px (2) and 10px (1), several from the carousel and Bootstrap styles.

Social icons in the footer are small circles, and brand logos are flat white wordmarks on black. The banner photograph is a plain rectangle.

## Components

**Book Now (header action).** `#b5121b` fill, white text, 0px radius, 58px tall in the desktop hover record; hover fill `#cc232ce6`. At 390px it measures 106px by 36px with padding 7px 15px and 16px/500 text.

**Subscribe (footer action).** `#a12a23` fill, white Open Sans 500 15px, padding 12px 40px, 44px tall, 148px wide, 0px radius; hover fill `#c34048`.

**Header.** 155px tall at desktop, white fill, black Open Sans 400 14px on the labels (Centara Journal 101px wide, Contact Us, EN, Sign-in or Sign-up). At 390px the header is 76px tall with the soft shadow above and its recorded text begins "Book Now / Redeem Points / Book With Points / Offers / Our Partners".

**Footer.** Black fill; white text at 14px for headings ("Connect With Us", "Subscribe to our newsletter", "Secured Payment") and 10px for legal text; brand logos in white.

**Partner banner.** A photograph with a gray panel, three partner logos or texts and a red "LEARN MORE" button in the capture (KrisFlyer, Royal Orchid Plus and AirAsia Rewards banners are listed on the page).

No cards, inputs or secondary buttons were detected by the extractor on the measured page; the sign-in form fields are in the page text but were not measured as an input role.

## Design System Architecture

No public design system, brand guidelines or brand-asset library is published: the page (opened via https://centara1card.com) links to Centara Journal, Contact Us, member pages, partner promotions, the other Centara brand sites, About Us, FAQ, Terms & Conditions and the Privacy Policy, and none of these is a brand-guideline page. The logo and icons are loaded from a template path (`/templates/defaultv4/centara/assets/logo/logo.svg`).

The CSS is Bootstrap 5 (`--bs-*` variables for colors, radii, shadows and fonts) with a slick carousel and two icon fonts (`icomoon`, `bootstrap-icons`). The brand reds, the Open Sans family and the hover colors are set directly in the stylesheet rather than as named variables; the measured values are `#b5121b`, `#a12a23`, their hover fills `#cc232ce6` and `#c34048`, and `#f7f7f7` for the canvas.

## Do's and Don'ts

**Do**
- Use Centara red (`#b5121b`, with `#a12a23` for secondary actions) on square-cornered buttons with white text.
- Keep the canvas pale gray (`#f7f7f7`), the header white and the footer black.
- Set text in Open Sans at 14px to 15px, and legal text at 10px.
- Show brand logos as flat white wordmarks on the black footer.
- Change buttons on hover with a lighter red fill rather than a shadow or border change.

**Don't**
- Don't use Bootstrap's default blue (`#0d6efd`, `#0a58ca`) as a brand color.
- Don't round button corners; the measured buttons are 0px.
- Don't document the back-to-top arrow or cookie layers as brand components.
- Don't introduce a serif for UI text; the measured text is Open Sans only.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: the "Book Now" button is the primary CTA at 106px by 36px with padding 7px 15px and 16px/500 text; the header is 76px tall and 390px wide with `rgba(0, 0, 0, 0.05) 0px 4px 10px 0px` as its shadow; the copyright line stays 10px and is 320px wide (286px at desktop).

Measured sizes by character count at 390px: 15px (191), 14px (125), 10px (93), 13px (16), 16px (8). Breakpoint widths, the footer column arrangement, the banner layout and how the menu items are reached at 390px were not measured.

## Iteration Guide

1. Start with canvas `#f7f7f7`, ink `#000000`, primary `#b5121b`, secondary red `#a12a23`; header `#ffffff`, footer `#000000`.
2. Set Open Sans at 15px/400 for base text, 14px/400 for labels, 15px/500 for buttons and 10px/400 for legal text.
3. Build the header as a 155px white band with black 14px labels and a red "Book Now" button (0px radius, hover `#cc232ce6`).
4. Build the footer in black with white brand logos, link columns, a social-icon row, payment-card tiles and a "Subscribe" button (`#a12a23`, padding 12px 40px, 44px tall, hover `#c34048`).
5. Use photographic partner banners with a gray text panel and a red call to action.
6. Keep surfaces flat; use hairlines (`#c4c4c4`, `#333333`) for dividers.
