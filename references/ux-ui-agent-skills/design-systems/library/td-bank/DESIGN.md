---
version: alpha
name: TD Canada Trust
category: "Banking & Insurance"
description: "TD Canada Trust personal-banking home page: TD Graphik Medium and SemiLight, TD green #008a00 square 42px buttons with #0d7c16 hover, deep green #1a5336 headings, white canvas with pale green bands, no rounded corners and circular line icons."
colors:
  canvas: "#ffffff"
  page-largest: "#f9fcf4"
  ink: "#1c1c1c"
  primary: "#008a00"
  on-primary: "#ffffff"
  surface-2: "#f9f9f9"
  surface-3: "#f6faf0"
  ink-2: "#038203"
  ink-3: "#1a5336"
  ink-6: "#000000"
  primary-hover: "#0d7c16"
  text-input-border: "#dadada"
typography:
  display:
    fontFamily: "\"TD Graphik Medium\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 26px
    fontWeight: 500
    lineHeight: 34.0002px
    letterSpacing: "-0.5px"
  heading:
    fontFamily: "\"TD Graphik Medium\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 22px
    fontWeight: 500
    lineHeight: 31.02px
    letterSpacing: "-0.5px"
  subheading:
    fontFamily: "\"TD Graphik Medium\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28.008px
    letterSpacing: "-0.5px"
  body:
    fontFamily: "\"TD Graphik SemiLight\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 15px
    fontWeight: 400
    lineHeight: 23.001px
  button:
    fontFamily: "\"TD Graphik Medium\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"TD Graphik Medium\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 19.2px
    fontWeight: 400
    lineHeight: 27.4285px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 21px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px
    height: 42px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink-2}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    clipPath: inset(50%)
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 5px 15px 5px 40px
    height: 45px
    borderColor: "{colors.text-input-border}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# TD Canada Trust

## Overview
The queued URL was the group site https://www.td.com, which resolved to the Canadian personal-banking home page https://www.td.com/ca/en/personal-banking (title "TD Canada Trust - Personal, Small Business Banking & Investing"). This file is therefore named after the measured site, TD Canada Trust, the Canadian retail arm of TD Bank Group, not the global group site. The page is a retail-banking portal: a thin green utility bar (Personal, Small Business, Commercial, Investing, TD Asset Management, About TD), a white header with the green TD shield and locale and login controls, a mega-menu row (Accounts, Credit Cards, Mortgages, Loans/Lines of Credit, Personal Investing, Insurance, Advice), a hero with a green "A little help can go a long way." tile and a sign-in column (EasyWeb: Online Banking, WebBroker Online Trading, each with a green Login button), a nine-item product grid with circular green line icons, a bright green promotional band ("Digital first. Human always."), a "Need help finding the right TD products?" block, a pale-green "Plan your move to Canada" band and an advice section. It is 6585px tall at 1280px. Green is the only brand color, applied to type, icons, buttons and bands; photography is warm and people-led. Copy is plain and reassuring, with benefit phrases ("Easy, safe and secure banking from home").

## Colors
`primary` is #008a00, the fill and border of the "Secure Login" and "Get started" buttons; its hover is `primary-hover` #0d7c16; `on-primary` is #ffffff. Headings are a deep green `ink-3` #1a5336 (the measured h1 and h2 color), link text is `ink-2` #038203, and body text is `ink` #1c1c1c with `ink-6` #000000 for the darkest labels. Surfaces: `canvas` #ffffff, `surface-2` #f9f9f9, `surface-3` #f6faf0 and `page-largest` #f9fcf4 (pale green-tinted bands); the form border is `text-input-border` #dadada. The capture also shows a brighter lime-green promotional band whose color was not recorded as a token. The page exposes no root CSS variables (0 measured).

## Typography
The family is TD Graphik in two files, "TD Graphik Medium" (used for headings, buttons and inputs) and "TD Graphik SemiLight" (body), with "TD Display Bold" used on a few display elements, and the fallback stack -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif. Measured: `display` 26px / 34.0002px at weight 500 with -0.5px letter-spacing (the h1 "Welcome to TD Personal Banking"); `heading` 22px / 31.02px at 500 and -0.5px; `subheading` 18px / 28.008px at 500 and -0.5px; `body` 15px / 23.001px at 400 in SemiLight; `button` 16px / 24px at 400 in Medium; `input` 19.2px / 27.4285px at 400. TD Graphik is proprietary; a neutral grotesque such as Inter or Public Sans at a similar weight is a reasonable substitute.

## Layout
Content sits in a centered column of roughly the viewport width minus generous side margins. The hero is a three-part row (photo, green tile with headline, copy with an outlined "Learn more" button) beside a right-hand sign-in rail divided by a vertical rule. The product section is a three-by-three grid of icon, link and description items. Bands alternate white and pale green, with full-bleed promotional imagery. Measured spacing steps: 5px, 7px, 8px, 10px, 12px, 15px, 16px, 20px, 21px and 24px; the text input is 45px tall with 5px 15px 5px 40px padding to leave room for a leading icon.

## Elevation & Depth
Depth is almost absent. A single measured shadow, `rgba(28, 28, 28, 0.1) 0px 3px 5px 2px`, appears on one element (the open menu panel). Hierarchy comes from color bands, a thin gray rule under the header and 1px green outlines, not elevation.

## Shapes
The geometry is square. The only measured radii are 50% (9 elements, the circular icon rings and chips) and 0px everywhere else; the buttons, inputs, tiles and bands all measure 0px, so `rounded` declares `none` 0px and `pill` 9999px only as the generator's circular token. Icons are drawn as thin green line art inside 50% circles.

## Components
- **button-primary**: #008a00 fill and border, #ffffff 16px label, 0px radius, 42px tall, 7px padding; hover fill #0d7c16. Used for "Login", "Get started" and "Learn more".
- **Outlined button**: transparent with a green border and green label (the hero "Learn more").
- **link**: #038203, 16px, with a trailing chevron ("Register >", "Security Guarantee >").
- **nav**: #1c1c1c 15px text, caret on every item, white header.
- **text-input**: white fill, #1c1c1c, 19.2px, 45px tall, 5px 15px 5px 40px padding, #dadada border, 0px radius.
- **Feature tile**: green square tile with a white 3-line headline.
- **footer**: #1c1c1c text at 13px on a light background, 900px tall with Find Us, Help, Contact Us columns.
A "Notification closed" skip item and the visually clipped skip links are accessibility helpers, not decorative UI.

## Design System Architecture
No public design-system or brand-guideline link was found: the page, opened with WebFetch, links to the TD Newsroom (stories.td.com), Investor Relations and publications but not to brand resources. No root CSS variables were published. The shipped CSS names the fonts (TD Graphik SemiLight, TD Graphik Medium, TD Display Bold) and an "icons" web font, so the de-facto system is a fixed family set, one green ramp (#008a00, #0d7c16, #038203, #1a5336) and square components.

## Do's and Don'ts
- Do use #008a00 for every primary action and for line icons.
- Do set headings in deep green #1a5336 and body in #1c1c1c.
- Do keep buttons, inputs and tiles square-cornered.
- Do use pale green (#f6faf0, #f9fcf4) as the alternate band color.
- Don't introduce a second hue; photography is the only other color.
- Don't add drop shadows to cards or buttons.
- Don't set body text above 15px; the page runs 15px SemiLight.

## Responsive Behavior
Measured at a 390px viewport: the h1 stays 26px / 34.0002px at weight 500 and the Login button is 360px wide and 42px tall at 16px. The mobile pass recorded no header-link, menu or band data, so navigation collapse and column counts are not measured.

## Iteration Guide
1. Start with #ffffff canvas, #1c1c1c text, #1a5336 headings and #008a00 buttons.
2. Set TD Graphik-like type at 26px, 22px and 18px for headings with -0.5px tracking and 15px for body.
3. Keep every box square, with circular line icons.
4. Alternate white and pale-green bands and place one saturated green promotional band with a black button.
5. Re-run `node web/scripts/verify-designs.mjs --slug=td-bank` after each change.
6. Imagery: warm, candid photography of customers (families, professionals, a newcomer to Canada) cut to full-bleed or square frames, with copy next to it rather than over it.
7. Voice: friendly, benefit-first sentences, short action labels (Login, Register, Learn more, Get started).
8. Product grid: each of the nine items pairs a 50% green outline ring holding a line icon with a green bold link that ends in a chevron (for example "Find a chequing account", "Explore mortgage options", "Today's rates") and a two-line grey-black description; reproduce that icon, link, description triplet in a three-column grid.
9. Sign-in rail: a heading in deep green, a full-width green Login button with a lock icon, and two small green links ("Register", "Security Guarantee") beneath; a thin vertical rule separates this rail from the hero.
10. Promotional band: a saturated green full-bleed band pairs a photograph on the left half with a black display headline ("Digital first. Human always."), one supporting sentence and a black square button with white label.
11. Closing blocks use centered titles in deep green with one sentence of body copy and a single wide green button, as in the "TD Advice - ready to help you move forward" section.
