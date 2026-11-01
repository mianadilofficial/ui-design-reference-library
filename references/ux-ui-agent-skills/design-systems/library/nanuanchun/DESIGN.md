---
version: alpha
name: Nanuanchun
category: "Thai Brands"
description: "Site of Nanuanchun, an Isan rice farm, homestead and sato rice wine maker, in Fahkwang uppercase headlines (54.4px, weight 900) and BaiJamjuree 300 body on white with deep green #093c23 square buttons, lime #d3dc66, forest #0a2a19 bands and a #ebd319 yellow accent."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#093c23"
  on-primary: "#ffffff"
  surface-lime: "#d3dc66"
  surface-forest: "#0a2a19"
  ink-pale: "#f1f1f1"
  ink-mid: "#555555"
  ink-silver: "#c1c1c1"
  accent-yellow: "#ebd319"
  button-primary-border: "#0000000d"
typography:
  display:
    fontFamily: Fahkwang, sans-serif
    fontSize: 54.4px
    fontWeight: 900
    lineHeight: 65.28px
    letterSpacing: 1.36px
    textTransform: uppercase
  display-mobile:
    fontFamily: Fahkwang, sans-serif
    fontSize: 44.8px
    fontWeight: 900
    lineHeight: 53.76px
    letterSpacing: 1.12px
    textTransform: uppercase
  heading:
    fontFamily: Fahkwang, sans-serif
    fontSize: 25.6px
    fontWeight: 700
    lineHeight: 30.72px
    letterSpacing: 1.28px
    textTransform: uppercase
  subheading:
    fontFamily: Fahkwang, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 1px
    textTransform: uppercase
  body:
    fontFamily: BaiJamjuree
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25.6px
  button:
    fontFamily: BaiJamjuree
    fontSize: 15.52px
    fontWeight: 400
    lineHeight: 24.832px
    letterSpacing: 0.4656px
    textTransform: uppercase
  link:
    fontFamily: BaiJamjuree
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 20.48px
    letterSpacing: 0.384px
    textTransform: uppercase
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 6px
  s3: 7.19px
  s4: 9.8px
  s5: 10.08px
  s6: 15px
  s7: 15.36px
  s8: 18.62px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 18.624px
    height: 39px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 15.36px
    height: 32px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 15.36px
    borderColor: "{colors.primary}"
---

## Overview

The measured page is the English home page of nanuanchun.com, titled "Nanuanchun Homegrown - Nanuanchun - นานวนจันทร์". It presents a family farm in Thailand's Isan region as a "Resilient Farm & Homestead" (the page spells it "Homestreat" in the header lockup and "Homestead" in the intro), with the pronunciation "Na-nuan-chun" printed in Latin and Thai. The navigation lists Products, SATO, Blog, Press & Accolades, Our Story, Portfolio and a services link, with a language switch (English / ไทย) and a shopping cart.

The first screen is typographic: a huge green "NANUANCHUN" wordmark over the line "Resilient Farm & Homestead", three small outlined buttons (About Us, Sato, Shop), a small archival photograph and a bilingual blurb with a "Read more our story" link. A wide landscape photograph of a rice field at golden hour carries a white line drawing of Thai-script lettering. Next comes a graphic block, "Architect x Farm", with a 2 by 2 mosaic of object-like images (a woven Isan basket, a portrait of two elders cut into a four-lobed shape, a sato jar shape, a rice-filled fish) beside a list of four principles: Design for Sustainability, Friendly Environment, Food Security, Contemporary Isan Folk.

Then a full-bleed video-like photograph of hands planting rice with the yellow word "HOMEGROWN", a forest-green band with the story "Rooted in Tradition, Cultivated for Tomorrow", a pull quote ("Rice is born in water and must die in sato.") about the family's rice wine, and a product list priced in baht (rice varieties, woodcut prints and T-shirts). The voice is first-person, reflective and craft-minded, mixing English and Thai.

## Colors

White (#ffffff) is the canvas, and the page's most-read text color is black (#000000), with mid-grey #555555 for supporting text, #f1f1f1 and #c1c1c1 for pale text on the dark forest bands, and #333333 appearing as a hover color. The brand color is a deep forest green, #093c23, which the stylesheet also exposes as --primary-color. It colors the wordmark, headings, outlined button borders and the primary button fill.

Two darker and lighter greens support it: #0a2a19, a near-black forest used for the story band, and #d3dc66, a yellow-green measured as a large area color and as the background of a 70px header element that is not visible in the first screen of the capture. A saturated yellow, #ebd319, is the text color of the "HOMEGROWN" caption over the rice-planting photo. Translucent blacks (#00000033, #00000025) darken photographs behind white text, and #000000b9 fills the circular quote card.

The theme root also has WordPress preset colors (for example --wp--preset--color--vivid-cyan-blue #0693e3) and admin-theme blues; they are framework defaults, absent from the measured design, and not brand colors.

## Typography

Two families split the voice. Fahkwang, a Thai-Latin display face loaded in 400 and 700 (the h1 uses weight 900), sets headlines in uppercase with positive tracking: the h1 "NANUANCHUN" is 54.4px at weight 900 with a 65.28px line height and 1.36px letter spacing; on mobile it is 44.8px with 1.12px tracking. The h2 is 25.6px at weight 700 with 1.28px tracking; the h3 ("△ DESIGN FOR SUSTAINABILITY") is 20px at weight 300 with 1px tracking, set in an italic-slanted look in the capture.

BaiJamjuree, loaded in 300, 500 and 700, sets everything functional: body at 16px weight 300 with a 25.6px line height; buttons at 15.52px with 0.4656px tracking in uppercase; small link buttons at 12.8px with 0.384px tracking. Other faces in the font list (Dancing Script, Lato 700, SukhumvitSet 700) are loaded by the theme or plugins and do not appear among the measured roles. The hierarchy is therefore wide, spaced capitals for display and light, airy body text.

## Layout

The page is 1280px wide and 6670px tall. Content sits in a centered column, about 765px wide at the 960px capture scale, with generous white margins on both sides. The header block is a two-part row: the large wordmark with its subtitle and buttons at left, a small boxed profile and blurb at right, separated by a dotted vertical rule.

Sections stack as: hero photograph (inset, not full bleed), a 50/50 graphic block (mosaic left, right-aligned heading and ruled list right), a full-bleed photograph, a forest-green two-column band (text left, a rice-sheaf image cut into a jar shape right), then product and blog rows. Spacing is small and varied: 2, 6, 7, 10, 15, 18, 20 and 30px, with large vertical gaps coming from section padding.

## Elevation & Depth

Depth is nearly absent. The only measured shadow is on the circular quote card, rgba(0, 0, 0, 0.19) 0px 10px 20px 0px with rgba(0, 0, 0, 0.22) 0px 6px 6px 0px, and it is used once, so no shadow token is declared. Layering is achieved with photography, translucent black overlays (13% to 20% black) and by cutting images into bespoke silhouettes. Rules are thin lines in the brand green: the ruled principle list uses a heavy top rule and thinner dividers instead of boxes.

## Shapes

Interactive elements are square: both the filled button and the outlined buttons have 0px radius, and the primary button carries a 1px #0000000d border that is nearly invisible. The expressive shapes are in the imagery: photographs are masked into a four-lobed cloud, a wobbly jar, a fish-in-a-pot outline and a rounded hexagonal bottle. Fully round elements exist (999px on seventeen elements and 100% on five, such as the circular quote card and small icons) and are represented by the pill token. The header lockup uses plain rectangles and thin rules.

## Components

Primary button: a 39px-high rectangle in #093c23, 18.624px horizontal padding, white 15.52px uppercase BaiJamjuree text with 0.4656px tracking ("ABOUT OUR SATO"). Outlined button: 32px high, 2px #093c23 border, 15.36px padding, 12.8px uppercase green text ("ABOUT US", "SATO", "SHOP"). Text link: green uppercase with an arrow, such as "READ MORE OUR STORY", which turns #333333 on hover.

Principle list: four rows, each starting with a small triangle glyph and set in slanted uppercase Fahkwang, separated by hairlines with a thicker top rule. Quote card: a circle with a translucent black fill, white 46.4px Fahkwang bold uppercase text, used for the sato pull quote. Product card: a photo, a Thai-and-English name, a baht price, an "Add to wishlist" control and an "Out of stock" label where applicable. Mosaic tile: an object photo masked into an organic shape on a pale or charcoal square.

## Design System Architecture

No public design system or brand guideline was found on the pages opened. The site is a WordPress and WooCommerce build: the stylesheet root contains WordPress preset variables and one brand variable, --primary-color: #093c23, and the cart text ("No products in the cart.") is a WooCommerce pattern. A page-builder icon font (fl-icons) is loaded. Because there is only one brand variable, the real system is the set of computed styles measured on the page, which this file records.

## Do's and Don'ts

Do set headlines in wide-tracked uppercase Fahkwang and body in light BaiJamjuree. Do use #093c23 for the wordmark, headings, outlines and the one filled button, and let the forest-green band carry long reading text in pale grey. Do crop photographs into folk-object silhouettes and pair them with archival portraits. Do write in a first-person, craft-focused voice with bilingual lines.

Don't round the buttons; they stay square. Don't introduce WordPress cyan or admin blue. Don't add card shadows or boxes around lists; use rules. Don't use the yellow #ebd319 for anything but a short accent caption over photography. Don't use bright saturated imagery; the photographs are earthy and golden.

## Responsive Behavior

A 390px mobile measurement exists: the h1 shrinks from 54.4px to 44.8px, keeps weight 900, and its line height and tracking scale down to 53.76px and 1.12px. No further mobile roles were captured, so the mosaic and menu behaviour on mobile are not measured. The nav includes a language switch and cart in a header that sits above the wordmark block.

## Iteration Guide

Start from white, black and the single green #093c23. Set display in Fahkwang uppercase with 1.36px tracking and body in BaiJamjuree 300 at 16px on a 25.6px line height. Build calls to action as square buttons: one filled green (39px high) and outlined 32px companions with 2px borders. Alternate white sections with forest-green #0a2a19 bands, and reserve #d3dc66 for the lime surface and #ebd319 for a single caption. Make images feel handmade by masking them into organic shapes and mixing archival portraits with product photography. Keep copy bilingual, personal and specific to the place and the family. Measure new components before adding them.
