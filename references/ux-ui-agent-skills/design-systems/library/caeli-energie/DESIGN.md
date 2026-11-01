---
version: alpha
name: Caeli Energie
category: "Tech & AI"
description: "Caeli Energie (caeli-energie.com) sells the Caeli One cooling module with a poster-like French site. Warm cream canvas #faf7f0, deep green ink #053725, bright headline green #005d3b, Altform at 400/700/900, a 124.444px uppercase 900 hero at -2px tracking and 4.44px-radius buttons."
colors:
  canvas: "#faf7f0"
  ink: "#053725"
  primary: "#053725"
  on-primary: "#f9f7e7"
  surface-deep: "#002e1d"
  surface-white: "#ffffff"
  ink-muted: "#6c8c81"
  green-bright: "#005d3b"
  hairline: "#0537251a"
  link-border: "#05372533"
typography:
  display:
    fontFamily: Altform, sans-serif
    fontSize: 124.444px
    fontWeight: 900
    lineHeight: 116.978px
    letterSpacing: "-2px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Altform, sans-serif
    fontSize: 52px
    fontWeight: 900
    lineHeight: 47.84px
    letterSpacing: "-1px"
    textTransform: uppercase
  heading:
    fontFamily: Altform, sans-serif
    fontSize: 75.5556px
    fontWeight: 900
    lineHeight: 75.5556px
    letterSpacing: "-2px"
    textTransform: uppercase
  subheading:
    fontFamily: Altform, sans-serif
    fontSize: 35.5556px
    fontWeight: 900
    lineHeight: 35.5556px
  body:
    fontFamily: Altform, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24.8px
  body-mobile:
    fontFamily: Altform, sans-serif
    fontSize: 15.6px
    fontWeight: 400
    lineHeight: 20.748px
  button:
    fontFamily: Altform, sans-serif
    fontSize: 14.2222px
    fontWeight: 700
    lineHeight: 17.7778px
  button-mobile:
    fontFamily: Altform, sans-serif
    fontSize: 16.64px
    fontWeight: 700
    lineHeight: 20.8px
rounded:
  xs: 4.44px
  sm: 7.11px
  md: 8.89px
  cta: 4.44px
  cta-mobile: 5.2px
  pill: 9999px
spacing:
  s1: 3.11px
  s2: 4.44px
  s3: 6.67px
  s4: 8.89px
  s5: 13.33px
  s6: 17.78px
  s7: 24.89px
  s8: 26.67px
  s9: 44.44px
  s10: 66.67px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 24.8889px
    height: 53px
    borderColor: "{colors.ink}"
  button-primary-mobile:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.cta-mobile}"
    padding: 0px 36.4px
    height: 62px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 24.8889px
    height: 53px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 24.8889px
    borderColor: "{colors.link-border}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 26.6667px
    height: 53px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    padding: 222.222px 26.6667px 0px
---

## Overview

Caeli Energie is a French company that sells the Caeli One, a cooling module described on its own home page as manufactured in France and working without an outdoor unit. The home page at https://www.caeli-energie.com/ is titled "Caeli Energie - Accueil" and is served in French (`lang` fr-FR) with a language switch in the header. The visual identity is a poster: a warm cream canvas (`{colors.canvas}` #faf7f0), a single deep forest green for almost everything that is read (`{colors.ink}` #053725), and one enormous uppercase headline in a brighter green (`{colors.green-bright}` #005d3b) that sits behind the product photograph.

The capture shows the top of the page only. A floating navigation bar carries the logo, five links (Caeli One, Révolution Caeli with a small chevron, Simuler mon projet, FAQ Pro, Nous rejoindre), a language switch ("Fr") and a dark filled "Nous contacter" button. Under it, "LA RÉVOLUTION FRAÎCHE" is set on three centred lines in Altform 900, and the white rounded-top Caeli One unit with a wooden insert overlaps the third line, so the product photograph appears to sit in front of the type. A short paragraph, "Chez CAELI ENERGIE, nous créons un monde dans lequel il est possible de rafraîchir sans réchauffer.", sits right of the product, and a "Découvrir" link with a circular arrow control sits on the unit itself. The rest of the capture is empty canvas; the extraction recorded a taller inner scroll area (9376px) than the 2400px page height, and the content that lies below the hero was not rendered in the capture, so it is documented here only from the page text that was opened (section titles such as "Notre mission", "Professionnels", "Particuliers", "Collectivités" and "Entrez dans la nouvelle ère").

The voice is warm and playful: short punchy phrases, the wordplay of "révolution fraîche", and eco-conscious claims presented as the company's own. A cookie-consent card is visible at the bottom left of the capture; it is not part of the brand UI and is excluded from every token below.

## Colors

The palette is two greens, two creams and white, all measured.

- `{colors.canvas}` #faf7f0 is the page background (body background and the largest on-screen fill). The root variable `--color-light-beige` holds the same value as the channel triplet `250 247 240`.
- `{colors.ink}` #053725 is the body ink, the primary button fill, its 1px border, and the footer background. It is also the `--color-green` root variable (`5 55 37`).
- `{colors.primary}` is the same #053725: the one call-to-action color on the site.
- `{colors.on-primary}` #f9f7e7 is the text on filled buttons and on the green footer (`--color-beige`, `249 247 231`). It is slightly yellower than the canvas.
- `{colors.green-bright}` #005d3b is the hero headline and the "Professionnels" subheading color (`--color-light-green`, `0 93 59`), used for display type only.
- `{colors.surface-deep}` #002e1d is a darker green measured as a large background area (`--color-dark-green`, `0 46 29`).
- `{colors.surface-white}` #ffffff is measured as a background area (weight 916); its exact placement was not isolated in the extraction.
- `{colors.ink-muted}` #6c8c81 is the most-read text color by characters (weight 780) and the measured body paragraph color; it is the `--color-gray-green` variable (`108 140 129`).
- `{colors.hairline}` #0537251a and `{colors.link-border}` #05372533 are the translucent ink borders on the navigation bar and on outlined link buttons.

The root variables also list `--color-black` (`21 0 0`), `--color-red` (`239 68 68`) and `--color-blue` (`0 0 255`); none of the three was measured on a visible element, so none is a brand token here.

## Typography

One family carries the whole site: Altform, loaded at weights 400, 700 and 900 (the font-face list contains only Altform, and it covers 1534 of the characters measured, the only family in the frequency table). Altform is a licensed typeface; the site's own fallback is the generic `sans-serif`. If you cannot license it, choose a heavy geometric grotesque for 900, a semibold for 700 and a regular for 400, and keep the negative tracking; this is an editorial substitution, not a measurement.

- `{typography.display}`: 124.444px, weight 900, line height 116.978px, letter spacing -2px, uppercase. This is the hero h1 "LA RÉVOLUTION FRAÎCHE", in `{colors.green-bright}`. The line height is slightly tighter than the font size so the three lines nearly touch.
- `{typography.heading}`: 75.5556px, weight 900, line height 75.5556px, -2px, uppercase; the section h2 "FABRIQUER LOCALEMENT DES SOLUTIONS DE RAFRAÎCHISSEMENT" is measured in `{colors.on-primary}` on a dark section.
- `{typography.subheading}`: 35.5556px, 900, solid line height; used for "Professionnels" and the footer's repeated tagline in uppercase.
- `{typography.body}`: 16px, 400, line height 24.8px; the paragraph and nav link style.
- `{typography.button}`: 14.2222px, 700, line height 17.7778px; button and header link labels. The nav text is rendered with `text-transform: capitalize` on the header container.

The type scale is steep: 900 weights only at display sizes, 700 for controls, 400 for reading text, and nothing in between. Small uppercase labels with 2px positive tracking were also measured at 10.6667px (weight 13 characters); they are not declared as a token because their weight and line height were not recorded.

## Layout

The page is a centred composition on a 24-column grid declared in the stylesheet: the root variable `--column` is `calc(var(--vw)/24 - var(--padding-container)*2/24 - 1.04167rem)` and `--padding-container` is `1.5rem`. The header is a full-width bar of height 53px with horizontal padding 26.6667px (`{spacing.s8}`). The footer is padded 222.222px at the top and 26.6667px at the sides, 781px high, and opens with the tagline repeated at 35.5556px.

Measured gaps are small and consistent: 8.88889px (the most frequent gap), 17.7778px, 13.3333px, 26.6667px, 133.333px and 333.333px; paddings of 17.7778px, 26.6667px and 24.8889px. Those map to `{spacing.s4}`, `{spacing.s6}`, `{spacing.s5}`, `{spacing.s8}` and `{spacing.s7}`. The hero is a single centred column on desktop: the first three bands of the page each have one column with content spanning x 317-1253, 236-1044 and 370-1202 as the three headline lines get wider and narrower. The product, not the grid, supplies the focal point.

Density is low: the hero holds one headline, one paragraph, one product and one link. The extraction recorded at most three card columns (`maxCardColumns` 3) on both desktop and mobile.

## Elevation & Depth

No box shadow was measured on any visible element (the desktop box-shadow frequency table is empty). Depth is made with layering and translucency instead: the product photograph overlaps the headline, the navigation bar is a canvas-colored bar bordered by the 10%-alpha ink hairline `{colors.hairline}`, and outlined buttons use the 20%-alpha `{colors.link-border}`. The home page text describes the product images as carrying their own soft shadow layers, so shadows live inside the photography, not in CSS. Blue focus-ring shadows exist in the CSS corpus but belong to form and widget code and are not documented as brand elevation.

## Shapes

Corners are small and square-ish. The measured radius set is 4.44444px (most frequent, weight 12), 7.11111px, 8.88889px and a 100% circle. Buttons and bordered links use `{rounded.cta}` 4.44px; the mobile primary button uses `{rounded.cta-mobile}` 5.2px. The "Découvrir" arrow control is a circle (`{rounded.pill}`). The product unit itself is a tall pill with a rounded top, which gives the page its only large curve.

## Components

- Primary button ("En savoir plus", "Nous contacter"): fill `{colors.ink}`, text `{colors.on-primary}`, 14.2222px/700, height 53px, horizontal padding 24.8889px, radius 4.44px, 1px border in the same ink. The header contact button also carries an arrow glyph. Measured hover states change the fill toward a pale cream and the label toward dark green; the samples were taken mid-transition and differ between runs, so no hover tokens are declared.
- Outlined link button ("Révolution Caeli"): transparent fill, ink text, 1px `{colors.link-border}` border, same 53px height and radius as the primary.
- Navigation: a 53px bar in `{colors.canvas}` with the logo (a green droplet mark and "CAELI ENERGIE" wordmark) at left, plain 16px nav links with an inline chevron on the dropdown item, the "Fr" language switch, and the primary button on the right.
- Footer: `{colors.ink}` background, `{colors.on-primary}` text, uppercase 900 tagline, link columns, social links, a studio credit and legal links.
- Cards: measured on the canvas color with `{colors.ink-muted}` text; no card border or shadow was measured.

## Design System Architecture

No public or official Caeli Energie design system, brand guideline or press kit was found; the home page at https://www.caeli-energie.com/ links none, and its footer credits the studio Beaucoup. The de-facto system is visible in the shipped CSS variables: colors are stored as space-separated RGB channel triplets (`--color-green`, `--color-light-green`, `--color-dark-green`, `--color-gray-green`, `--color-beige`, `--color-light-beige`, `--color-white`), the usual way to let a utility framework add alpha; the `--tw-*` variables in the root show Tailwind utilities are in use. Motion is tokenised as named easings (`--ease-out-back` cubic-bezier(0.175,0.885,0.32,1.275), `--ease-out` cubic-bezier(0.23,1,0.32,1), `--ease-in` cubic-bezier(0.12,0,0.39,0), `--ease-in-out` cubic-bezier(0.86,0,0.07,1)), the underline thickness is `--underlined-thickness: 2px`, and viewport units are wrapped in `--vw` and `--vh`. A single `Altform` font-face provides the three weights.

## Do's and Don'ts

- Do keep the page on `{colors.canvas}` and set reading text in `{colors.ink}` or `{colors.ink-muted}`.
- Do reserve weight 900 and uppercase for display and section titles, with -2px tracking at the large sizes.
- Do use one filled green button style (`{components.button-primary}`) for the main action and an outlined style for secondary navigation.
- Do let product photography overlap the headline.
- Don't introduce a second accent hue; the site is green and cream only.
- Don't add drop shadows to cards or buttons; none were measured.
- Don't round buttons beyond 4.44px on desktop; the circle is reserved for the small arrow control.
- Don't treat the cookie card as part of the UI kit.

## Responsive Behavior

Only the 390px mobile pass and the extraction's layout probe were measured. On mobile the h1 is `{typography.display-mobile}` (52px, 900, line height 47.84px, -1px tracking), body text is `{typography.body-mobile}` (15.6px, line height 20.748px), and the primary button is `{components.button-primary-mobile}`: 16.64px/700, 62px tall, 36.4px horizontal padding, 5.2px radius, 328px wide. The mobile navigation bar is 52px high with 15.6px horizontal padding, and its text contains "Menu", "Fermer" and "Fr". The layout probe recorded 6 visible header links on desktop and 1 on mobile, and its menu-toggle flag was false on mobile. The first mobile band has one column with content from x 27 to 363. Breakpoint values, tablet behavior, and what the "Menu" control opens are not measured.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; add `{colors.green-bright}` only for display headlines.
2. Set the hero h1 with `{typography.display}` and place a product image so it overlaps the last line.
3. Use `{components.button-primary}` for the main action and the outlined `{components.link}` for secondary items.
4. Keep spacing on the measured steps `{spacing.s4}`, `{spacing.s6}` and `{spacing.s8}`.
5. For dark sections use `{colors.ink}` or `{colors.surface-deep}` with `{colors.on-primary}` text and `{typography.heading}`.
6. Re-measure hover states with a settled transition before declaring hover tokens.
