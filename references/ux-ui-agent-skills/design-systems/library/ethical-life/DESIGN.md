---
version: alpha
name: Ethical Life
category: "Food & Beverage"
description: "Ethical Life vegan multivitamin gummies product page: Sora 600 headings (62.5px, 46px) over Inter 18px body, charcoal #2d2d2d on off-white #fbfbfd, lime #dcf343 pill buttons that hover to #4145c8, 3D product renders."
colors:
  on-primary: "#2d2d2d"
  primary-hover: "#4145c8"
  canvas: "#fbfbfd"
  page-body: "#ffffff"
  ink: "#2d2d2d"
  primary: "#dcf343"
  surface-2: "#dcf343"
  hairline: "#eeeeee"
typography:
  display:
    fontFamily: Sora, sans-serif
    fontSize: 62.5px
    fontWeight: 600
    lineHeight: 62.5px
  display-mobile:
    fontFamily: Sora, sans-serif
    fontSize: 35.1px
    fontWeight: 600
    lineHeight: 40.365px
  heading:
    fontFamily: Sora, sans-serif
    fontSize: 46px
    fontWeight: 600
    lineHeight: 46px
  subheading:
    fontFamily: Sora, sans-serif
    fontSize: 34px
    fontWeight: 600
    lineHeight: 34px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  link:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
rounded:
  xs: 99px
  pill: 9999px
spacing:
  s1: 2px
  s2: 10px
  s3: 16px
  s4: 20px
  s5: 30px
  s6: 32px
  s7: 35px
  s8: 40px
  s9: 50px
  s10: 51.2px
components:
  link:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 10px 35px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 10px 35px
    height: 66px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.page-body}"
---

# Ethical Life

## Overview
The measured site, https://ethicallifeworld.com/, is the product page of "Ethical Life", a vegan multivitamin gummy brand; the document title is "Daily Multivitamin Gummies | Ethical Life". The page is a 7,185px long single product story at 1280px. Its first screen has a header with a rounded white nav pill at the left (ABOUT, SHOP, BLOG), the blue "ethical life" wordmark with a bolt-shaped mark at the centre, and a white pill with account and cart icons at the right, all over a lime-to-white gradient. Beneath, the H1 "Daily Multivitamin Gummies" sits beside a bottle on a lime square, followed by a bullet list of benefits (Daily energy, Immune health, Hair, skin, and overall wellness, Metabolism, Bone strength, Nerve and thyroid health) and two lime pill buttons, "Shop Today" and "Shop on Amazon".

Further sections: "Why Choose Our Vitamins", "Pharmacist and Nutritionist Formulated", "Clean Ingredients You Can Feel Good About", a three-column "Benefits of Daily Multivitamin Gummies" row of lime cards (Energy Support, Immune Support, Hair, Skin, and Wellness Support), "Gummies vs. Pills", "Who Our Daily Multivitamin Gummies Are For", two lime cards ("Compassion in Every Purchase", "Real People, Real Results"), an FAQ and a closing "Start Your Daily Wellness Routine". The voice is plain, reassuring and values-led ("a kinder world", "ethical wellness").

A first-visit email popup ("GET 10% OFF YOUR FIRST ORDER", a PLACE ORDER button) appeared in the first capture; it is a marketing overlay and is not documented as brand UI. The site was re-measured with it removed.

## Colors
- **Canvas `#fbfbfd`** is the off-white page ground; **`colors.page-body` `#ffffff`** is the white of cards and the header pills.
- **Ink `#2d2d2d`** is the charcoal used for nearly all text (7,407 characters) and for button labels; `colors.on-primary` repeats it as the label color on the lime button.
- **Primary `#dcf343`** is the lime fill of the "Shop Today" and "Shop on Amazon" buttons, of the product-image squares and of the feature cards (also stored as `colors.surface-2`). The generator assigned the ink color to primary because no solid CTA role was detected; the lime was measured as the largest non-neutral background area and as the button fill in the hover probe, so it is promoted to primary.
- **`colors.primary-hover` `#4145c8`** is the measured hover fill of those buttons, with white text.
- **`colors.hairline` `#eeeeee`** is the light border grey.

The corpus also lists the blue `#4949e9` (the popup's button and the logotype) and a violet #720eec; neither is used on the measured buttons or cards, so they are described, not tokenised. WordPress and WooCommerce defaults are present in the root variables (`--wp--preset--color--vivid-purple`, `--bs-orange`, `--bs-success`); those are framework presets, not brand colours.

## Typography
**Sora** (weight 600) sets all headings and **Inter** sets body and interface text. `typography.display` is Sora 62.5px / 600 / 62.5px; `typography.heading` is 46px / 600 / 46px (section titles); `typography.subheading` is 34px / 600 / 34px; `typography.display-mobile` is 35.1px / 600 / 40.365px (the measured mobile H1). `typography.body` is Inter 18px / 400 / 27px (6,172 characters at 18px); `typography.link`, used for the buttons, is Inter 18px / 600 / 27px. Weights measured: 400 (6,636 characters), 600, 700 and 800. The headline has a tight line height equal to its font size, so lines sit close together. Both families are open source (Inter and Sora are loaded as variable fonts covering weights 100 to 900 and 100 to 800).

## Layout
A single centred content column alternates between two-column bands (text left and image right, then image left and text right) and full-width centred blocks (the benefits row, the FAQ and the closing call to action). Section spacing is large: paddings of 40px (18 uses) and 51.2px appear most, with 10px and 16px inside components. Content is long-form and readable at 18px, with bullet lists in a smaller 16px size. The mobile pass reports up to two card columns.

## Elevation & Depth
No box shadows were measured. Depth comes from colour blocks: lime squares and cards on the off-white canvas, white pills over a gradient at the top, and 3D-rendered product imagery (a bottle with floating pink star-shaped gummies) that provides the three-dimensional effect. The WooCommerce root variables define an outlined shadow `6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)`, but no element on the measured page uses a shadow.

## Shapes
Buttons and header pills are fully rounded: `rounded.pill` (9999px) and `rounded.xs` (99px) were measured, with 999px appearing on five elements. The corpus also has 4px radii (23 uses) for inputs and 10px for cards, and one card with 0px 0px 8px 8px. Product imagery sits in sharp-cornered squares and rectangles, which contrasts with the pill controls.

## Components
- **Button primary** (`components.button-primary`): lime `#dcf343` fill, charcoal Inter 18px / 600 label, pill radius, 66px tall, padding 10px 35px. The buttons are stacked full width of the text column: "Shop Today" and "Shop on Amazon". On hover the fill turns `#4145c8` and the label white.
- **Header**: two white rounded pills (menu left, icons right) and a central logotype over a lime gradient.
- **Feature card**: lime panel with a Sora heading and body copy.
- **Bulleted list**: 16px Inter with standard discs.
- **FAQ**: bold question lines with answers beneath, no accordion chrome in the capture.
- **Link** (`components.link`): the same pill treatment on `colors.surface-2`.

## Design System Architecture
No public design-system documentation or brand-guideline site was located from the pages opened; the only page read was the home page, https://ethicallifeworld.com/, measured by the extractor. The CSS is a WordPress, WooCommerce and Bootstrap 5 build: root variables include `--bs-*` Bootstrap properties, `--wp--preset--*` WordPress presets, `--wc-*` WooCommerce properties, plus brand-specific `--padding-container` (20px) and `--animation-smooth` (cubic-bezier(.75, 0, .25, 1)). The brand layer on top of that is small: lime, charcoal, Sora and Inter, and pill buttons.

## Do's and Don'ts
- Do use lime `#dcf343` as the single action and highlight colour, with charcoal text on it.
- Do set headings in Sora 600 and body in Inter 18px.
- Do round buttons and header pills fully; keep imagery square-cornered.
- Do pair rendered product shots with soft lime gradients.
- Don't use the Bootstrap, WordPress or WooCommerce preset colours (#fd7e14, #9b51e0, #198754) as brand colours.
- Don't add drop shadows; none are used on the page.
- Don't set body copy below 16px; the page's list text is the smallest common size.
- Don't use the popup's blue as the primary action colour.

## Responsive Behavior
The 390px mobile pass recorded the H1 at 35.1px in Sora, body text still at 18px (6,078 characters) and headings at 31.2px and 24.96px; it recorded no header links visible, no visible menu toggle, and at most 2 card columns. Breakpoints, how the header menu behaves and the order of columns were not measured.

## Iteration Guide
1. Start from `colors.canvas`, `colors.ink` and `colors.primary`; use white only for cards and header pills.
2. Use `typography.display` once per page and `typography.heading` for each section.
3. Build every action as `components.button-primary`, with the hover state.
4. Alternate text and image bands; place a lime card pair near the end.
5. Verify with `node web/scripts/verify-designs.mjs --slug=ethical-life`.
6. Do not capture or document the email popup; measure inner product pages with the extractor before adding tokens.
7. Write copy in the measured voice: benefit lists in sentence fragments, a values statement per section, and plain-language FAQ answers.
