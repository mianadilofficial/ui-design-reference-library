---
version: alpha
name: Yucca Packaging
category: "Food & Beverage"
description: "Yucca Packaging (yucca.co.za), a South African food and produce packaging supplier, measured on the live site: porcelain page #fffdf5 over oat #dfdac6 bands, charcoal #1d1d1b ink and buttons, deep forest green #12271d, the single typeface Magnetik at weights 200 and 300, and small 3.28px, 6.56px and 13.13px radii."
colors:
  canvas: "#dfdac6"
  page-body: "#fffdf5"
  ink: "#1d1d1b"
  primary: "#1d1d1b"
  on-primary: "#fffdf5"
  surface-black: "#000000"
  ink-on-photo: "#fefefe"
  ink-forest: "#12271d"
  ink-stone-herb: "#707767"
  bamboo: "#bbae96"
  almond: "#f7f4e9"
  rust: "#bf6437"
  thyme: "#616958"
  ink-white: "#ffffff"
typography:
  display:
    fontFamily: Magnetik, sans-serif, sans-serif
    fontSize: 72.2051px
    fontWeight: 200
    lineHeight: 83.0359px
  display-mobile:
    fontFamily: Magnetik, sans-serif, sans-serif
    fontSize: 49.92px
    fontWeight: 200
    lineHeight: 57.408px
  heading:
    fontFamily: Magnetik, sans-serif, sans-serif
    fontSize: 52.5128px
    fontWeight: 300
    lineHeight: 57.7641px
  subheading:
    fontFamily: Magnetik, sans-serif, sans-serif
    fontSize: 26.2564px
    fontWeight: 300
    lineHeight: 34.1333px
  body:
    fontFamily: Magnetik, sans-serif, sans-serif
    fontSize: 12.3077px
    fontWeight: 300
    lineHeight: 19.6923px
  button:
    fontFamily: Magnetik, sans-serif, sans-serif
    fontSize: 13.1282px
    fontWeight: 300
    lineHeight: 15.7538px
  nav:
    fontFamily: Magnetik, sans-serif, sans-serif
    fontSize: 16.4103px
    fontWeight: 300
    lineHeight: 22.9744px
  link:
    fontFamily: Magnetik, sans-serif, sans-serif
    fontSize: 9.84615px
    fontWeight: 400
    lineHeight: 15.7538px
rounded:
  xs: 3.28px
  sm: 6.56px
  md: 13.13px
  cta: 3.28px
  pill: 9999px
spacing:
  s1: 1.64px
  s2: 6.56px
  s3: 9.85px
  s4: 13.13px
  s5: 16.41px
  s6: 19.69px
  s7: 32.82px
  s8: 42.67px
  s9: 65.64px
  s10: 82.05px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    padding: 0px 13.1282px
    height: 39px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    padding: 0px 13.1282px
    height: 39px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 82.0513px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-forest}"
    padding: 32.8205px 82.0513px
---

## Overview

Yucca Packaging is a South African supplier of packaging for food and produce, measured at `https://yucca.co.za/` (page title "Innovative Packaging Solutions for Food & Produce | Yucca Packaging"). Its opened homepage navigation lists Shop (Coffee, Smoothies, Deli, Takeout, Cutlery, Bags & Pouches, Extras), Packaging Solutions (Food Service, Food Processing, Agriculture), Company, Contact Us, Credit Application and Resources (Waitlist, Yucca Rewards, B2B Portal, Case Studies & Blogs, FAQs), plus Login and a cart. It is both a catalogue shop and a B2B portal.

The 1280px desktop capture is 6472px tall. A light porcelain header holds a charcoal "Y" mark with "Yucca Packaging", five navigation items and, at the right, a muted Credit Application link, a bordered cart icon and a black Login button. The hero is a warm beige photograph of an iced coffee cup beside the very large light headline "Packaging that Performs. Innovated for Industry Leaders.", with three frosted rounded tiles on the image (Food Service, Food Processing, Agriculture). A flat oat band then scrolls large words (Branding, Yucca Rewards, Yucca Direct (B2B), Quality, Sustainable, Innovation, Partnerships, Custom Packaging) over a floating clear container, followed by a centered sentence and a charcoal "See products" button, then a photographic Food Service section with a white card.

The voice on the opened homepage is confident and promise-led, speaks directly to "you" and "your" business, uses industry terms such as "retail-ready" and "packhouses", and uses South African/British spelling ("customise", "programme"). Its tagline text includes "Remarkable packaging is our promise to you."

## Colors

The site names its own palette in root custom properties, and the measured values below come from the page's computed colors and those variables.

- `canvas` `#dfdac6` is "oat" (`--c-oat`), the flat band color and the footer background. The page body background `page-body` is `#fffdf5`, "porcelain" (`--c-porcelain`).
- `ink` and `primary` are `#1d1d1b`, "charcoal" (`--c-charcoal`), the text on 4343 characters and the fill of the Login and Go to Portal buttons, whose text is `#fffdf5` (`on-primary`).
- `ink-forest` `#12271d` is "deep forest green" (`--c-deep-forest-green`), used for border color (5 measured) and as footer text and a painted surface.
- Neutrals and earths measured: `almond` `#f7f4e9` (`--c-almond`), `bamboo` `#bbae96` (`--c-bamboo`, also a text color and a border color), `ink-stone-herb` `#707767` (`--c-stone-herb`), `thyme` `#616958` (`--c-thyme`, mobile navigation text), and `rust` `#bf6437` (`--c-rust`), which is declared in the root. `surface-black` `#000000`, `ink-on-photo` `#fefefe` (`--c-off-white`) and `ink-white` `#ffffff` are used on photographs and overlays.

The root declares more families by role (`--c-s-*` greens, `--c-i-*` blues, `--c-w-*` yellows, `--c-e-*` reds) but these were not measured as painted on the home page and are not tokenized. WooCommerce variables (`--wc-primary` `#720eec`, `--wc-blue`, `--wc-green`, `--wc-orange`) and WordPress preset colors (`--wp--preset--color--vivid-purple`, `pale-pink`) are platform defaults, not brand colors. Swiper's `--swiper-theme-color` `#007aff` is also a library default.

## Typography

One family: Magnetik, loaded at 200, 300 and 400. It sets 5098 characters, all measured text. Weight 300 dominates (4509 characters), with 400 (467) for small links and 200 (122) for the largest headline. The light weights are the brand's signature: large headlines look airy and thin.

On desktop, `display` (the h1) is Magnetik 200 at 72.2051px on 83.0359px; on mobile 49.92px on 57.408px. `heading` (h2) is 300 at 52.5128px on 57.7641px (37.44px on 41.184px on mobile). `subheading` (h3) is 300 at 26.2564px on 34.1333px. The `body` paragraph is 300 at 12.3077px on 19.6923px (16.64px on 23.296px on mobile). Button text is 300 at 13.1282px; navigation links 300 at 16.4103px on 22.9744px; the small links, such as "Register here", are 400 at 9.84615px.

The most common sizes by characters are 16.4103px (1533), 12.3077px (831), 13.1282px (744), 26.2564px (502), 52.5128px (498), 19.6923px (343), 39.3846px, 36.1026px and 72.2051px. No letter spacing was measured: the tracking list is empty. Magnetik is a proprietary family; a light neo-grotesque at weights 200 and 300 is the nearest stand-in, as a recommendation rather than a measurement.

## Layout

The root declares `--container-width: 136rem`, `--gap: 1.6rem` and `--header-height: 9.6rem`. The header measured 82.0513px horizontal padding and the footer `32.8205px 82.0513px`. Spacing values observed: 1.64px, 6.56px, 9.85px, 13.13px, 16.41px, 19.69px, 32.82px, 42.67px, 65.64px and 82.05px; the most frequent paddings are 19.6923px (47), 13.1282px (38) and 16.4103px (32). The measured gaps are 19.6923px, 13.1282px and 65.641px. The values are multiples of 1.64px and track a rem-based scale.

The page stacks full-bleed bands: image hero with tiles, oat band with a scrolling word marquee and a centered call to action, photographic section with an overlaid white card. Within them, content is left aligned in a wide container and the call-to-action band is centered.

## Elevation & Depth

Three box shadows were measured: an inset 1px ring `rgb(29, 29, 27) 0px 0px 0px 1px inset` (the cart button outline), a soft warm shadow `rgba(187, 174, 150, 0.25) 0.82px 0.82px 14.77px 0px` and a soft charcoal shadow `rgba(29, 29, 27, 0.1) -1.64px 1.64px 13.13px 0px`. Both soft shadows are wide, low-contrast blurs. Frosted tiles on the hero use a translucent white `#ffffff40` fill. The floating container in the oat band is lit by photography rather than an interface shadow.

## Shapes

Measured radii: 13.1282px (15 elements, cards and tiles), 6.5641px (8), 3.28205px (7, the buttons) and 50% (2, circular icons). Buttons are 39px tall with `0px 13.1282px` padding and a 3.28205px radius; at mobile width the button radius measured 4.16px and padding `0px 16.64px`. Large tiles and cards use the 13.13px radius; the system tokens are `xs` 3.28px, `sm` 6.56px, `md` 13.13px, `cta` 3.28px, and `pill`.

## Components

- **Header.** Porcelain, charcoal 13.1282px text, with the mark at left. The measured header padding is 82.0513px horizontal.
- **Primary button.** Charcoal `#1d1d1b` fill, porcelain `#fffdf5` text, Magnetik 300 13.1282px, 39px tall, 3.28205px radius. Used for Login, Go to Portal and See products.
- **Cart button.** Square button with a 1px charcoal inset ring.
- **Category tile.** Frosted `#ffffff40` tile with a centered label, 13.13px radius.
- **Content card.** Porcelain card over a photograph, with a Magnetik 300 heading and 12.3077px copy.
- **Marquee.** Oat band with large light Magnetik words in charcoal.
- **Footer.** Oat `#dfdac6` with deep forest `#12271d` text and large 45.9487px headline text at 300 weight.

## Design System Architecture

No public brand guidelines or design system were found on the opened homepage: its visible links are Case Studies & Blogs, FAQs, Contact Us, Privacy Policy and Terms & Conditions. The system is nonetheless explicit in the shipped CSS. Root properties name each color (`--c-charcoal`, `--c-oat`, `--c-porcelain`, `--c-bamboo`, `--c-deep-forest-green`, `--c-rust`, `--c-thyme`, `--c-almond`) and scale families by tone (`--c-s-10..100`, `--c-i-10..100`, `--c-w-10..100`, `--c-e-10..100`), set `--font-family: "Magnetik", sans-serif`, a single ease `--ease: cubic-bezier(0.22, 1, 0.36, 1)`, `--container-width`, `--gap` and `--header-height`. The site is on WordPress with WooCommerce, visible through `--wp--preset--*` and `--wc-*` variables, with `--wc-card-border-radius: 8px` and `--wc-form-border-radius: 4px` supplied by WooCommerce rather than brand tokens.

## Do's and Don'ts

- Do set headlines in Magnetik 200 or 300 and keep them large and light.
- Do alternate porcelain `#fffdf5` and oat `#dfdac6` bands and use charcoal `#1d1d1b` for text and buttons.
- Do use the 3.28px radius on buttons and the 13.13px radius on tiles and cards.
- Do keep shadows to the two soft, low-opacity blurs measured.
- Don't use WooCommerce purple `#720eec` or WordPress preset colors in brand work.
- Don't add letter spacing; none was measured.
- Don't use bold weights; the heaviest measured weight is 400.

## Responsive Behavior

The mobile pass at 390px recorded the h1 at 49.92px on 57.408px (72.2051px on desktop), the h2 at 37.44px on 41.184px, body at 16.64px on 23.296px, and the Login button at 14.56px weight 400 with a 4.16px radius and `0px 16.64px` padding. The mobile navigation text lists Credit Application, Shop, Packaging Solutions and measured `#616958`. The column count, menu pattern and breakpoints were not measured.

## Iteration Guide

1. Start from porcelain `#fffdf5` with charcoal `#1d1d1b` text; use oat `#dfdac6` for feature bands.
2. Set Magnetik 200 at 72.2051px for the hero and 300 for everything else.
3. Make buttons charcoal with porcelain text, 39px tall and 3.28px radius.
4. Frame groups in 13.13px radius tiles over photography with a `#ffffff40` fill.
5. Pull earth accents (`bamboo`, `rust`, `thyme`) from the named palette only where a measured role exists.
