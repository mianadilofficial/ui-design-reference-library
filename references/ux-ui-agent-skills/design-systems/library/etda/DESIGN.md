---
version: alpha
name: ETDA (Electronic Transactions Development Agency)
category: "Thai Brands"
description: "ETDA English home page: DBHeavent condensed type (23px to 70px), navy ink #102a52 on white and grey, amber #f89b08 accents, 20px-radius teal-outlined nav pills, blue gradient wave bands with white service cards."
colors:
  canvas: "#ffffff"
  page-largest: "#eeeeee"
  ink: "#102a52"
  primary: "#f89b08"
  surface-2: "#f6f6f4"
  ink-3: "#99b7cc"
  ink-4: "#000000"
  ink-5: "#092650"
  ink-6: "#37b4e5"
  hairline: "#999999"
  link: "#666666"
  button-secondary-border: "#02b2c3"
typography:
  display:
    fontFamily: DBHeavent_Cond
    fontSize: 23px
    fontWeight: 400
    lineHeight: 23px
  heading:
    fontFamily: DBHeavent_Cond
    fontSize: 70px
    fontWeight: 500
    lineHeight: 50px
  subheading:
    fontFamily: DBHeavent_BoldCond
    fontSize: 28px
    fontWeight: 500
    lineHeight: 25px
  nav:
    fontFamily: DBHeavent_Cond
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  link:
    fontFamily: DBHeavent_Cond
    fontSize: 28px
    fontWeight: 400
    lineHeight: 0px
rounded:
  xs: 20px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 14px
  s7: 15px
  s8: 20px
  s9: 25px
  s10: 30px
components:
  button-secondary:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 5px 15px
    height: 34px
    borderColor: "{colors.button-secondary-border}"
  link:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-4}"
  nav-link:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 5px 15px
    borderColor: "{colors.button-secondary-border}"
  footer:
    textColor: "{colors.canvas}"
---

# ETDA (Electronic Transactions Development Agency)

## Overview
The measured page is the English home page of the Thai government agency ETDA, https://www.etda.or.th/en/ (document title "Home - สพธอ."; the Thai name in the header is สำนักงานพัฒนาธุรกรรมทางอิเล็กทรอนิกส์, with the English line "Electronic Transactions Development Agency"). It is a portal page of 2,866px at the 1280px width. A pale grey header holds the blue "ETDA" logotype, a HOME pill, SITEMAP, social icons (Facebook, Twitter, YouTube, Instagram, TikTok), a round yellow search button and an EN switch, with a second row of links (ETC, About ETDA, Our service, Contact us, Organization Policies).

A cookie-consent banner appeared on the first extraction; the page was re-measured with the consent overlay handled so that the banner's blue accept button is not recorded as brand UI. The capture then shows: a hero mosaic of smiling people using phones and a headline "BUILD A BETTER DIGITAL LIFE." on royal blue, with three promo tiles on the right (DIGITAL SERVICE SANDBOX, SERVICE PROVIDER CERTIFICATION FOR E-TAX, CERTIFICATION FOR e-MEETING); a band "TRUSTED & SECURE E-TRANSACTIONS" with three large line-art titles (NATIONAL POLICY, DIGITAL SERVICE, HUMAN DEVELOPMENT); a row of eight service icon tiles; a blue-gradient "OUR SERVICES" wave band with three white cards; partner and internal logo carousels; and a blue gradient footer with address, call-centre and social links.

## Colors
- **Canvas `#ffffff`** is the page background; **`colors.page-largest` `#eeeeee`** and **`colors.surface-2` `#f6f6f4`** are the light grey fills of the header, icon tiles and sections.
- **Ink `#102a52`** is the dark navy used for most text (326 characters); **`colors.ink-5` `#092650`** is a slightly deeper navy used for card headings; **`colors.ink-4` `#000000`** is black used for nav labels; **`colors.ink-3` `#99b7cc`** is a muted blue-grey; **`colors.ink-6` `#37b4e5`** is the sky-blue used for card sub-links (for example "Digital Trusted services & Infrastructure Descriptions").
- **Primary `#f89b08`** is the amber-orange accent: the measured hover colour of SITEMAP (rgb 248, 154, 7), the arrow bullets before card links and the "OUR SERVICES" Thai subtitle. The "view all" plus chips use a yellow (#f3d21f, #fbb617 appear among measured backgrounds).
- **`colors.hairline` `#999999`** is the border grey (20 uses); **`colors.link` `#666666`** is the link grey; **`colors.button-secondary-border` `#02b2c3`** is the teal outline of the HOME pill.

The CSS corpus also contains the royal blues used by the hero and footer gradients (#1d335a, #1894d6, #01b2c4) and the Bootstrap default blue #337ab7, which is a framework default and not a brand color. No CSS root variables were found (`rootVars` is empty).

## Typography
The site uses the Thai-Latin family **DBHeavent** in condensed cuts: `DBHeavent_Cond` for text, `DBHeavent_BoldCond` for emphasis and `DBHeavent_BlackCond` for rare heavy display, with MedCond also declared. Tokens: `typography.display` is DBHeavent_Cond 23px / 400 / 23px; `typography.heading` is 70px / 500 / 50px (the "OUR SERVICES" scale); `typography.subheading` is DBHeavent_BoldCond 28px / 500 / 25px; `typography.nav` is 22px / 400 / 22px; `typography.link` is 28px / 400.

Sizes are large because the condensed face is small on the em: the most-read sizes are 21px, 25px, 23px, 20px and 36px. Weights measured are 400 and 500. Headlines inside images (such as "BUILD A BETTER DIGITAL LIFE.") are artwork rather than live text. DBHeavent is a licensed Thai font; a condensed Thai-capable sans serves as a substitute. FontAwesome and Glyphicons Halflings are loaded for icons.

## Layout
The container is centred with about the same left and right margins for the icon-tile row and the service cards. The hero is a split: a large image mosaic on the left and a stacked column of three promo tiles on the right. Below it the page alternates white bands with a diagonal blue wave section that holds three white service cards of equal width. Partner and internal logo strips are horizontal carousels with pagination dots. Measured paddings are small (15px with 33 uses, 5px, 30px, 25px), reflecting a dense government-portal layout.

## Elevation & Depth
Depth is modest. Service cards are white panels lifted from the blue gradient by a soft shadow; the corpus lists `rgba(0, 0, 0, 0.25) 0px 1px 5px 0px` (3 uses) and `rgba(0, 0, 0, 0.05) 0px 2px 8px 0px`. The icon tiles use a thin light-grey outline instead of a shadow. Colour depth comes from the blue gradient wave and the footer gradient, not from layered elevation.

## Shapes
Controls are rounded: `rounded.xs` is 20px (the HOME pill, nav links and the secondary button, 34px tall with 5px 15px padding) and `rounded.pill` represents the 100% radius measured on 29 circular elements such as social icons and the search button. The corpus also has 10px (63 uses), 4px, 3px, 6px and 12px radii, which belong to cards and tiles but were not promoted. The wave section edge is an SVG-like curve, not a radius.

## Components
- **HOME / nav pill** (`components.nav-link`, `components.button-secondary`): black 22px label, 20px radius, `#02b2c3` outline, padding 5px 15px, height 34px. Hover on SITEMAP turns its text amber.
- **Service card**: white panel with a navy bold title, a line icon, sky-blue sub-link and amber arrow bullets for links.
- **Icon tile**: eight small white tiles with a coloured pictogram and a 16px-style label (Digital Law, 1212etda, Standard & Certification, Electronic Certificates, e-Document, ETDA Connect, Web Validation, Printout System Certification).
- **"view all" chip**: a small yellow square with a plus sign followed by white text on the blue band.
- **Link** (`components.link`): grey `#666666`, 28px, on a `#eeeeee` surface.
- **Footer** (`components.footer`): white text on a blue gradient, listing address, call-centre number, email and social buttons.
- **Primary button**: no solid-fill primary button was detected on this page; the only primary-style control measured was the cookie banner's, which is excluded.

## Design System Architecture
No public design-system documentation or brand-guideline site was located from the pages opened; the only page read was the home page, https://www.etda.or.th/en/, measured by the extractor. The shipped CSS shows a Bootstrap-era build: Glyphicons Halflings, FontAwesome, the Bootstrap blue #337ab7 in the corpus, no `:root` custom properties, and DBHeavent font-face declarations. The de-facto system is therefore class-based CSS with hard-coded colours and sizes.

## Do's and Don'ts
- Do use navy `#102a52` text on white or pale grey, with blue gradients for feature bands.
- Do set UI text in DBHeavent condensed at 20 to 28px.
- Do use amber `#f89b08` for small accents: hover states, arrow bullets, "view all" chips.
- Do give nav pills a 20px radius with a teal outline.
- Don't use the cookie banner's blue button or the Bootstrap #337ab7 as brand colours.
- Don't add heavy shadows; the measured ones are 5% to 25% black and short.
- Don't use pure black for body copy; black is reserved for nav labels.
- Don't set headlines in a wide face; the system is condensed.

## Responsive Behavior
The 390px mobile pass recorded header links visible: 9, no menu toggle detected (`menuToggleVisible` false), and a character distribution led by 23px, 21px, 28px, 20px, 34px and 22px type. The first mobile band is a 128px light-grey header strip and the second a 117px royal-blue band (#25398f). Breakpoints, column counts and how the mosaic hero adapts were not measured, so none are described.

## Iteration Guide
1. Start with `colors.canvas`, `colors.ink` and the blue gradient bands; add `colors.primary` only for small accents.
2. Use `typography.heading` for band titles, `typography.subheading` for card titles, `typography.nav` for controls.
3. Draw cards in white with a short soft shadow on blue, and use line pictograms.
4. Keep nav pills at 20px radius with the `#02b2c3` outline.
5. Verify with `node web/scripts/verify-designs.mjs --slug=etda`.
6. Measure an inner page with the extractor before adding a token, and ignore any consent banner.
7. Copy in English is short and noun-led (Digital Law, Web Validation, view all); Thai subtitles sit under English headings in amber.
